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
define('EUROPASS_SUBPAGE', 'skills');

require_once(dirname(dirname(dirname(__FILE__))) . '/init.php');
define('TITLE', get_string('europass', 'artefact.europass'));
require_once('pieforms/pieform.php');
require_once(get_config('docroot') . 'artefact/lib.php');
safe_require('artefact', 'internal');

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


$socialskill = null;
$organisationalskill = null;
$technicalskill = null;
$computerskill = null;
$artisticskill = null;
$otherskill = null;
$drivinglicence = null;

try { $socialskill = artefact_instance_from_type('socialskill'); }
catch (Exception $e) {}
try { $organisationalskill = artefact_instance_from_type('organisationalskill'); }
catch (Exception $e) {}
try { $technicalskill = artefact_instance_from_type('technicalskill'); }
catch (Exception $e) {}
try { $computerskill = artefact_instance_from_type('computerskill'); }
catch (Exception $e) {}
try { $artisticskill = artefact_instance_from_type('artisticskill'); }
catch (Exception $e) {}
try { $otherskill = artefact_instance_from_type('otherskill'); }
catch (Exception $e) {}
try {
	$drivinglicence = artefact_instance_from_type('drivinglicence');
	$drivinglicence = unserialize($drivinglicence->get('description'));
}
catch (Exception $e) {}


// Locations for various buttons and graphics
$topbanner = get_config('wwwroot') . 'artefact/europass/images/topbanner.png';
$rightlogo = get_config('wwwroot') . 'artefact/europass/images/rightlogo.png';


$skillsform = pieform(array(
    'name' => 'europassform',
    //'jsform' => true,
    'plugintype' => 'artefact',
    'pluginname' => 'europass',
	'template'   => 'skillsform.php',
    'elements' => array(
		'AM' => array(
			'type'  => 'checkbox',
			'title' => 'AM',
			'defaultvalue' => ((!empty($drivinglicence['AM'])) ? $drivinglicence['AM'] : null),
			// Will become valid throughout Europe in 2013!
			'disabled' => true,
		),
		'A1' => array(
			'type'  => 'checkbox',
			'title' => 'A1',
			'defaultvalue' => ((!empty($drivinglicence['A1'])) ? $drivinglicence['A1'] : null),
		),
		'A' => array(
			'type'  => 'checkbox',
			'title' => 'A',
			'defaultvalue' => ((!empty($drivinglicence['A'])) ? $drivinglicence['A'] : null),
		),
		'B' => array(
			'type'  => 'checkbox',
			'title' => 'B',
			'defaultvalue' => ((!empty($drivinglicence['B'])) ? $drivinglicence['B'] : null),
		),
		'BE' => array(
			'type'  => 'checkbox',
			'title' => 'BE',
			'defaultvalue' => ((!empty($drivinglicence['BE'])) ? $drivinglicence['BE'] : null),
		),
		'B1' => array(
			'type'  => 'checkbox',
			'title' => 'B1',
			'defaultvalue' => ((!empty($drivinglicence['B1'])) ? $drivinglicence['B1'] : null),
		),
		'C' => array(
			'type'  => 'checkbox',
			'title' => 'C',
			'defaultvalue' => ((!empty($drivinglicence['C'])) ? $drivinglicence['C'] : null),
		),
		'CE' => array(
			'type'  => 'checkbox',
			'title' => 'CE',
			'defaultvalue' => ((!empty($drivinglicence['CE'])) ? $drivinglicence['CE'] : null),
		),
		'C1' => array(
			'type'  => 'checkbox',
			'title' => 'C1',
			'defaultvalue' => ((!empty($drivinglicence['C1'])) ? $drivinglicence['C1'] : null),
		),
		'C1E' => array(
			'type'  => 'checkbox',
			'title' => 'C1E',
			'defaultvalue' => ((!empty($drivinglicence['C1E'])) ? $drivinglicence['C1E'] : null),
		),
		'D' => array(
			'type'  => 'checkbox',
			'title' => 'D',
			'defaultvalue' => ((!empty($drivinglicence['D'])) ? $drivinglicence['D'] : null),
		),
		'DE' => array(
			'type'  => 'checkbox',
			'title' => 'DE',
			'defaultvalue' => ((!empty($drivinglicence['DE'])) ? $drivinglicence['DE'] : null),
		),
		'D1' => array(
			'type'  => 'checkbox',
			'title' => 'D1',
			'defaultvalue' => ((!empty($drivinglicence['D1'])) ? $drivinglicence['D1'] : null),
		),
		'D1E' => array(
			'type'  => 'checkbox',
			'title' => 'D1E',
			'defaultvalue' => ((!empty($drivinglicence['D1E'])) ? $drivinglicence['D1E'] : null),
		),
		'socialskill' => array(
			'type' => 'textarea',
			'rows' => 4,  // 8 for wysiwyg
			'cols' => 60, // 50 for wysiwyg
			'defaultvalue' => ((!empty($socialskill)) ? $socialskill->get('description') : null),
			'title' => get_string('socialskill', 'artefact.europass'),
			'help' => true,
		),
		'organisationalskill' => array(
			'type' => 'textarea',
			'rows' => 4,  // 8 for wysiwyg
			'cols' => 60, // 50 for wysiwyg
			'defaultvalue' => ((!empty($organisationalskill)) ? $organisationalskill->get('description') : null),
			'title' => get_string('organisationalskill', 'artefact.europass'),
			'help' => true,
		),
		'technicalskill' => array(
			'type' => 'textarea',
			'rows' => 4,  // 8 for wysiwyg
			'cols' => 60, // 50 for wysiwyg
			'defaultvalue' => ((!empty($technicalskill)) ? $technicalskill->get('description') : null),
			'title' => get_string('technicalskill', 'artefact.europass'),
			'help' => true,
		),
		'computerskill' => array(
			'type' => 'textarea',
			'rows' => 4,  // 8 for wysiwyg
			'cols' => 60, // 50 for wysiwyg
			'defaultvalue' => ((!empty($computerskill)) ? $computerskill->get('description') : null),
			'title' => get_string('computerskill', 'artefact.europass'),
			'help' => true,
		),
		'artisticskill' => array(
			'type' => 'textarea',
			'rows' => 4,   // 8 for wysiwyg
			'cols' => 60, // 50 for wysiwyg
			'defaultvalue' => ((!empty($artisticskill)) ? $artisticskill->get('description') : null),
			'title' => get_string('artisticskill', 'artefact.europass'),
			'help' => true,
		),
		'otherskill' => array(
			'type' => 'textarea',
			'rows' => 4,  // 8 for wysiwyg
			'cols' => 60, // 50 for wysiwyg
			'defaultvalue' => ((!empty($otherskill)) ? $otherskill->get('description') : null),
			'title' => get_string('otherskill', 'artefact.europass'),
		),
        'submit' => array(
            'type' => 'submit',
            'value' => get_string('save', 'mahara'),
        ),
		// Indicator that this form includes driving licences
		'drivingform' => array(
			'type' => 'hidden',
			'value' => true,
		),
		// For correct redirect...
		'redirect' => array(
			'type' => 'hidden',
			'value' => 'skills',
		),
	)
));


$smarty = smarty();
// Check if Mahara release is older than 1.3.0
if (get_config('version') < 2010083102) {
	$SESSION->add_info_msg(get_string('newerversionforcompatibility', 'artefact.europass'));
	$smarty->assign('mahararelease', 1);
}
$smarty->assign('topbanner', $topbanner);
$smarty->assign('rightlogo', $rightlogo);
$smarty->assign('skillsform', $skillsform);
$smarty->assign('PAGEHEADING', get_string('europass', 'artefact.europass'));
$smarty->assign('SUBPAGENAV', PluginArtefactEuropass::submenu_items());
$smarty->display('artefact:europass:skills.tpl');

?>
