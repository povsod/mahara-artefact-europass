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
define('EUROPASS_SUBPAGE', 'index');

require_once(dirname(dirname(dirname(__FILE__))) . '/init.php');
define('TITLE', get_string('europass', 'artefact.europass'));
define('SUBSECTIONHEADING', get_string('ecv-tab',  'artefact.europass'));
safe_require('artefact', 'europass');
safe_require('artefact', 'internal');

if (!PluginArtefactEuropass::is_active()) {
    throw new AccessDeniedException(get_string('plugindisableduser', 'mahara', get_string('europass','artefact.europass')));
}

// Redirect locations
$location = array(
    'profile'    => get_config('wwwroot') . 'artefact/internal/index.php?fs=contact',
    'resume'     => get_config('wwwroot') . 'artefact/resume/',
    'employment' => get_config('wwwroot') . 'artefact/resume/employment.php',
    'education'  => get_config('wwwroot') . 'artefact/resume/employment.php',
    'languages'  => get_config('wwwroot') . 'artefact/europass/languages.php',
);

$css = array(
    '<link rel="stylesheet" type="text/css" href="' . get_config('wwwroot') . 'artefact/europass/theme/raw/static/style/style.css">',
);

$smarty = smarty(array(), $css);
$smarty->assign('profile_str', mb_strtolower(get_string('pluginname', 'artefact.internal'), 'UTF-8'));
$smarty->assign('resume_str', mb_strtolower(get_string('pluginname', 'artefact.resume'), 'UTF-8'));
$smarty->assign('order_str', mb_strtolower(get_string('Order', 'interaction.forum'), 'UTF-8'));
$smarty->assign('profileicon_id', intval($USER->get('profileicon')));
$smarty->assign('prefs', unserialize($USER->get_account_preference('europassprefs')));
$smarty->assign('profilefields', get_personal_information());
$smarty->assign('education_data', get_education_and_training());
$smarty->assign('employment_data', get_work_experience());
$smarty->assign('skills', get_personal_skills());
$smarty->assign('additionalinfo', get_additional_information());
$smarty->assign('location', $location);
$smarty->assign('europasslang', $USER->get_account_preference('europasslang'));
$smarty->assign('SUBPAGENAV', PluginArtefactEuropass::submenu_items());
$smarty->assign('rightlogo', $THEME->get_url('static/images/rightlogo.png', false, 'artefact/europass'));
$smarty->display('artefact:europass:index.tpl');
