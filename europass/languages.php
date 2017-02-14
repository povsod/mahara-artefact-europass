<?php
/**
 *
 * @package    mahara
 * @subpackage artefact-europass
 * @author     Gregor Anzelj
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2009-2017 Gregor Anzelj, gregor.anzelj@gmail.com
 *
 */

define('INTERNAL', true);
define('MENUITEM', 'content/europass');
define('SECTION_PLUGINTYPE', 'artefact');
define('SECTION_PLUGINNAME', 'europass');
define('SECTION_PAGE', 'index');
define('EUROPASS_SUBPAGE', 'languages');

require_once(dirname(dirname(dirname(__FILE__))) . '/init.php');
define('TITLE', get_string('europass', 'artefact.europass'));
define('SUBSECTIONHEADING', get_string('elp-tab',  'artefact.europass'));
safe_require('artefact', 'europass');

if (!PluginArtefactEuropass::is_active()) {
    throw new AccessDeniedException(get_string('plugindisableduser', 'mahara', get_string('europass','artefact.europass')));
}

$userid = $USER->get('id');

// User's mother tongues
$mothertongue_data = array();
$mothertongue_data = get_records_select_array('artefact', 'artefacttype=? AND owner=?', array('mothertongue', $userid));

// User's foreign languages
$otherlanguage_data = array();
$artefactids = get_column_sql("SELECT id FROM {artefact} WHERE artefacttype='otherlanguage' AND owner=$userid");
$idstr = join(',', array_map('intval', $artefactids));
if (!empty($artefactids)) {
    $otherlanguage_data = get_records_select_array('artefact_europass_otherlanguage', 'artefact IN (' . $idstr . ')');
    foreach ($otherlanguage_data as $lang) {
        $langid = $lang->artefact;

        $certificateids = get_column_sql("SELECT id FROM {artefact} WHERE artefacttype='languagediploma' AND parent=$langid");
        $certstr = join(',', array_map('intval', $certificateids));
        $lang->certificate = array();
        if (!empty($certstr)) {
            $lang->certificate = get_records_select_array('artefact_europass_certificate', 'artefact IN (' . $certstr . ')');
        }

        $experienceids = get_column_sql("SELECT id FROM {artefact} WHERE artefacttype='languageexperience' AND parent=$langid");
        $expstr = join(',', array_map('intval', $experienceids));
        $lang->experience = array();
        if (!empty($expstr)) {
            $lang->experience = get_records_select_array('artefact_europass_languageexperience', 'artefact IN (' . $expstr . ')');
        }
    }
}

// Add mother tongue form
$addform = pieform(array(
    'name' => 'addmothertongueform',
    'class' => 'pbl',
    'renderer' => 'oneline',
    'autofocus' => false,
    'method' => 'post',
    'elements' => array(
        'description' => array(
            'type' => 'select',
            'rules' => array('required' => true),
            'options' => getoptions_languages(),
        ),
        'markup' => array(
            'type' => 'markup',
            'value' => ' ',
        ),
        'submit' => array(
            'type' => 'submit',
            'class' => 'btn btn-default',
            'value' => get_string('add'),
        ),
    ),
));

// Delete mother tongue(s) form
$elements = array();
foreach ($mothertongue_data as $lang) {
    $elements[$lang->description] = array(
        'type' => 'checkbox',
        'class' => 'form-control',
        'style' => 'width:35px',
        'description' => get_string('language.'.$lang->description, 'artefact.europass'),
        'defaultvalue' => 0,
    );
}
$elements['submit'] = array(
    'type' => 'submit',
    'class' => 'btn btn-default',
    'value' => get_string('delete'),
);
$deleteform = pieform(array(
    'name' => 'delmothertongueform',
    'class' => 'pbl',
    'renderer' => 'div',
    'autofocus' => false,
    'method' => 'post',
    'elements' => $elements,
));


$css = array(
    '<link rel="stylesheet" type="text/css" href="' . get_config('wwwroot') . 'artefact/europass/theme/raw/static/style/style.css">',
);

$smarty = smarty(array(), $css);
$smarty->assign('addmothertongueform', $addform);
$smarty->assign('delmothertongueform', $deleteform);
$smarty->assign('mothertonguelist', language_csv_list($mothertongue_data, true));
$smarty->assign('otherlanguagelist', language_csv_list($otherlanguage_data));
$smarty->assign('otherlanguages', $otherlanguage_data);
$smarty->assign('europasslang', $USER->get_account_preference('europasslang'));
$smarty->assign('SUBPAGENAV', PluginArtefactEuropass::submenu_items());
$smarty->assign('rightlogo', $THEME->get_url('static/images/rightlogo.png', false, 'artefact/europass'));
$smarty->display('artefact:europass:languages.tpl');


function addmothertongueform_submit(Pieform $form, $values) {
    global $SESSION, $USER;
    
    $a = new ArtefactTypeMothertongue();
    $a->set('description', $values['description']);
    $a->set('owner', $USER->get('id'));
    $a->set('author', $USER->get('id'));
    $a->commit();

    $SESSION->add_ok_msg(get_string('languagesaved', 'artefact.europass'));
    redirect(get_config('wwwroot').'artefact/europass/languages.php');
}

function delmothertongueform_submit(Pieform $form, $values) {
    global $SESSION, $USER;

    unset($values['submit']);
    unset($values['sesskey']);
    foreach ($values as $language => $delete) {
        if ($delete) {
            delete_records('artefact', 'artefacttype', 'mothertongue', 'owner', $USER->get('id'), 'description', $language);
        }
    }

    $SESSION->add_ok_msg(get_string('languagedeleted', 'artefact.europass'));
    redirect(get_config('wwwroot').'artefact/europass/languages.php');
}

/*
 *  Take an array as an argument, extract language codes from array data
 *  and return them as a CSV list of languages (default separator is comma).
 */
function language_csv_list($data, $mothertongue=false, $separator=", ") {
    if (is_array($data) && !empty($data)) {
        $list = array();
        foreach ($data as $lang) {
            if ($mothertongue) {
                $langcode = $lang->description;
            }
            else {
                $langcode = $lang->language;
            }
            $list[] = get_string('language.'.$langcode, 'artefact.europass');
        }
        return implode($separator, $list);
    }
    else {
        return "";
    }
}
