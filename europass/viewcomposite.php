<?php
/**
 *
 * @package    mahara
 * @subpackage artefact-europass
 * @author     Gregor Anzelj
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2009-2015 Gregor Anzelj, gregor.anzelj@gmail.com
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
safe_require('artefact', 'europass');

$id = param_integer('id');
$artefact = param_integer('artefact');
// To pass variable to composite.json.php...
$SESSION->set('languageid', $id);

// Check if XSLT extension is loaded properly, because we will need it...
// The XSL extension implements the XSL standard, performing XSLT transformations using the libxslt library.
$xslext = extension_loaded('xsl');

if (!$xslext) {
    $smarty = smarty();
    $missingextensions = array();
    !$xslext && $missingextensions[] = 'xsl';
    $smarty->assign('missingextensions', $missingextensions);
    $smarty->display('artefact:europass:index.tpl');
    exit;
}


// Locations for various buttons and graphics
$topbanner = get_config('wwwroot') . 'artefact/europass/images/topbanner.png';
$rightlogo = get_config('wwwroot') . 'artefact/europass/images/rightlogo.png';


$a = artefact_instance_from_id($artefact);
$type = $a->get('artefacttype');

if ($a->get('owner') != $USER->get('id')) {
    throw new AccessDeniedException(get_string('notartefactowner', 'error'));
}

if (!$language = get_record('artefact_europass_' . $type, 'id', $id)) {
	throw new InvalidArgumentException("Couldn't find language of type $type with id $id");
}


$compositetypes = array('languagediploma', 'languageexperience');
$inlinejs = ArtefactTypeEuropassComposite::get_js($compositetypes);
$compositeforms = ArtefactTypeEuropassComposite::get_forms($compositetypes, $language->id);

$smarty = smarty(array('tablerenderer','jquery')); 
// Check if Mahara release is older than 1.3.0
if (get_config('version') < 2010083102) {
	$SESSION->add_info_msg(get_string('newerversionforcompatibility', 'artefact.europass'));
	$smarty->assign('mahararelease', 1);
}
$smarty->assign('topbanner', $topbanner);
$smarty->assign('rightlogo', $rightlogo);
$smarty->assign('language', $language);
$smarty->assign('composite', $type);
$smarty->assign('compositeforms', $compositeforms);
$smarty->assign('INLINEJAVASCRIPT', $inlinejs);
$smarty->assign('PAGEHEADING', TITLE);
$smarty->assign('SUBPAGENAV', PluginArtefactEuropass::submenu_items());
$smarty->display('artefact:europass:viewcomposite.tpl');

?>
