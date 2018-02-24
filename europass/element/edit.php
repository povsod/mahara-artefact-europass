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
define('SECTION_PAGE', 'edit');

require_once(dirname(dirname(dirname(dirname(__FILE__)))) . '/init.php');
safe_require('artefact', 'europass');
safe_require('artefact', 'file');

if (!PluginArtefactEuropass::is_active()) {
    throw new AccessDeniedException(get_string('plugindisableduser', 'mahara', get_string('europass','artefact.europass')));
}

$id = param_integer('id', 0);
$type = param_variable('type', '');
$parent = param_integer('parent', 0);

if ($id > 0) {
    try {
        $artefact = artefact_instance_from_id($id);
        $type = $artefact->get('artefacttype');
    }
    catch (Exception $e) {}
}
else if ($id == 0 && !empty($type)) {
    $classname = generate_artefact_class_name($type);
    try {
        $artefact = artefact_instance_from_type($type);
    }
    // Non singular elements, e.g. 'additionalinfo'
    catch (Exception $e) {
        $artefact = new $classname(0, array('owner' => $USER->get('id')));
    }
}
else {
    throw new ArtefactNotFoundException(get_string('cannotfindcreateartefact', 'artefact.resume')); // ???
}

if ($artefact->get('owner') != $USER->get('id')) {
    throw new AccessDeniedException(get_string('notartefactowner', 'error'));
}

define('TITLE', get_string('europass', 'artefact.europass'));
define('SUBSECTIONHEADING', get_string('editing') . ': ' . get_string($type, 'artefact.europass'));


$form = array(
    'name'              => 'editelement',
    'method'            => 'post',
    'class'             => 'form-group',
    'jsform'            => false,
    'plugintype'        => 'artefact',
    'pluginname'        => 'europass',
    'configdirs'        => array(get_config('libroot') . 'form/', get_config('docroot') . 'artefact/file/form/'),
    'elements'          => array()
);

if ($artefact->get_form_template()) {
    $form['template'] = $artefact->get_form_template();
}

$form['elements'] = $artefact->get_form_elements(/*$defaults*/);
$form['elements']['submit'] = array(
    'type'  => 'submitcancel',
    'class' => 'btn btn-success',
    'value' => array(get_string('save'), get_string('cancel')),
    'goto'  => get_goto_url($type),
);
if ($id > 0) {
    $artefact->populate_form($form, $id, $type);
}
$form = pieform($form);


$css = array(
    '<link rel="stylesheet" type="text/css" href="' . $THEME->get_url('static/style/style.css', false, 'artefact/europass') . '">',
);


$smarty = smarty(array(), $css, array(), array());
$smarty->assign('SUBPAGENAV', PluginArtefactEuropass::submenu_items());
$smarty->assign('form', $form);
$smarty->display('artefact:europass:form.tpl');


function editelement_submit(Pieform $form, array $values) {
    global $artefact, $parent;

    // Serialize drivinglicence data
    $type = $artefact->get('artefacttype');
    if ($type == 'drivinglicence') {
        $licences = array(
            'am'  => $values['category_am'],
            'a1'  => $values['category_a1'],
            'a2'  => $values['category_a2'],
            'a'   => $values['category_a'],
            'b1'  => $values['category_b1'],
            'b'   => $values['category_b'],
            'be'  => $values['category_be'],
            'c1'  => $values['category_c1'],
            'c1e' => $values['category_c1e'],
            'c'   => $values['category_c'],
            'ce'  => $values['category_ce'],
            'd1'  => $values['category_d1'],
            'd1e' => $values['category_d1e'],
            'd'   => $values['category_d'],
            'de'  => $values['category_de'],
        );
        $values['description'] = serialize($licences);
    }

    if ($type == 'additionalinfo') {
        $artefact->set('title', $values['title']);
    }
    else {
        $artefact->set('title', get_string($type, 'artefact.europass'));
    }

    if (!empty($values['description'])) {
        $artefact->set('description', $values['description']);
    }

    if (!empty($parent) && $parent > 0) {
        $artefact->set('parent', $parent);
    }

    $artefact->commit();

    // Add data to supporting table
    $types = PluginArtefactEuropass::get_composite_artefact_types();
    if (in_array($type, $types)) {
        db_begin();

        $data = new StdClass();
        $data->artefact = $artefact->get('id');
        foreach ($values as $k => $element) {
            if ($k == 'submit' || $k == 'sesskey') {
                continue;
            }
            $data->{$k} = $element;
        }

        $table = $artefact->get_other_table_name();
        if ($properties = $artefact->get('properties')) {
            $data->id = $properties->id;
            update_record($table, $data, array('id' => $data->id, 'artefact' => $data->artefact));
        }
        else {
            insert_record($table, $data);
        }

        db_commit();
    }

    $result = array(
        'error'   => false,
        'message' => get_string('elementsaved', 'artefact.europass'),
        'goto'    => get_goto_url($type),
    );
    $form->reply(PIEFORM_OK, $result);

}

function configform_submit(Pieform $form, array $values) {
    global $id;

    unset($values['submit']);
    unset($values['sesskey']);
    update_record('artefact_europass_coverletter', array('settings' => serialize($values)), array('artefact' => $id));

    $result = array(
        'error'   => false,
        'message' => get_string('settingssaved', 'artefact.europass'),
        'goto'    => get_config('wwwroot') . 'artefact/europass/element/edit.php?id=' . $id,
    );
    $form->reply(PIEFORM_OK, $result);
}

function get_goto_url($type) {
    $goto = get_config('wwwroot') . 'artefact/europass/';
    switch ($type) {
        case 'mothertongue':
        case 'otherlanguage':
            $goto .= 'index.php';
            break;
        case 'languagediploma':
        case 'languageexperience':
            $goto .= 'languages.php';
            break;
        case 'motivationletter':
            $goto .= 'letter.php';
            break;
        case 'digitalcompetence':
        default:
            $goto .= 'index.php';
            break;
    }
    return $goto;
}
