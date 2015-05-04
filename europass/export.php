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
define('SECTION_PAGE', 'export');

require_once(dirname(dirname(dirname(__FILE__))) . '/init.php');
require_once('pieforms/pieform.php');
require_once(get_config('docroot') . 'artefact/lib.php');
require_once(get_config('docroot') . 'artefact/europass/lib/locale.php');

// Check if XSLT extension is loaded properly, because we will need it...
// The XSL extension implements the XSL standard, performing XSLT transformations using the libxslt library.
$xslext = extension_loaded('xsl');

if (!$xslext) {
    $smarty = smarty();
    $missingextensions = array();
    !$xslext && $missingextensions[] = 'xsl';
    $smarty->assign('missingextensions', $missingextensions);
    $smarty->display('artefact:europass:export.tpl');
    exit;
}


$eform = array(
    'name' => 'exporteuropassform',
    'jsform' => false,
	'method' => 'post',
    'plugintype' => 'artefact',
    'pluginname' => 'europass',
	'template'   => 'exportform.php',
    'configdirs' => array(get_config('libroot') . 'form/', get_config('docroot') . 'artefact/europass/form/'),
    'elements' => array(
		'locale' => array(
			'type' => 'css_select',
            'rules' => array('required' => true),
            'title' => get_string('locale', 'artefact.europass'),
			'options' => getoptions_locales(),
			'defaultvalue' => set_default_locale(get_config('lang')),
		),
		/*'documenttype' => array(
			'type' => 'radio', 
			'defaultvalue' => 'europasscv',
			'options' => array(
				'europasscv'    => get_string('europassCV', 'artefact.europass'),
				'europassesp'   => get_string('europassESP', 'artefact.europass'),
				'europasscvesp' => get_string('europassCVESP', 'artefact.europass'),
			),
			'title' => get_string('documenttype', 'artefact.europass'),
			'separator' => '<br />',
			'onclick' => 'selectedDocumentType(document.exporteuropassform.documenttype[1].checked)', // if EuropassLP option is checked...
		),*/
		'photograph' => array(
			'type' => 'file',
			'labelhtml' => get_string('photograph','artefact.europass'),
			'description' => get_string('photographdesc','artefact.europass'),
			'help' => true,
		),
		'fileformat' => array(
			'type' => 'radio', 
			'defaultvalue' => 'xml',
			'options' => array(
				'pdf'      => get_string('pdf', 'artefact.europass'),
				//'pdf-cv'   => get_string('pdf-cv', 'artefact.europass'),
				//'pdf-esp'  => get_string('pdf-esp', 'artefact.europass'),
				'doc'      => get_string('doc', 'artefact.europass'),
				'odt'      => get_string('odt', 'artefact.europass'),
				'xml'      => get_string('xml', 'artefact.europass'),
			),
			'title' => get_string('filetype', 'artefact.europass'),
			'separator' => '<br />',
		),
		'internaldate' => array(
			'type' => 'select',
            'title' => get_string('exportdate', 'artefact.europass'),
			'options' => array(
				'dmy11' => get_string('internaldate-dmy11', 'artefact.europass'),
				'dmy12' => get_string('internaldate-dmy12', 'artefact.europass'),
				'dmy13' => get_string('internaldate-dmy13', 'artefact.europass'),
				'dmy21' => get_string('internaldate-dmy21', 'artefact.europass'),
				'dmy22' => get_string('internaldate-dmy22', 'artefact.europass'),
				'dmy23' => get_string('internaldate-dmy23', 'artefact.europass'),
				'mdy11' => get_string('internaldate-mdy11', 'artefact.europass'),
				'mdy12' => get_string('internaldate-mdy12', 'artefact.europass'),
				'mdy13' => get_string('internaldate-mdy13', 'artefact.europass'),
				'mdy21' => get_string('internaldate-mdy21', 'artefact.europass'),
				'mdy22' => get_string('internaldate-mdy22', 'artefact.europass'),
				'mdy23' => get_string('internaldate-mdy23', 'artefact.europass'),
				'ymd11' => get_string('internaldate-ymd11', 'artefact.europass'),
				'ymd12' => get_string('internaldate-ymd12', 'artefact.europass'),
				'ymd13' => get_string('internaldate-ymd13', 'artefact.europass'),
				'ymd21' => get_string('internaldate-ymd21', 'artefact.europass'),
				'ymd22' => get_string('internaldate-ymd22', 'artefact.europass'),
				'ymd23' => get_string('internaldate-ymd23', 'artefact.europass'),
				'yonly' => get_string('internaldate-yonly', 'artefact.europass'),
				'other' => get_string('internaldate-other', 'artefact.europass'),
			),
			'description' => get_string('selectinternaldatedesc', 'artefact.europass'),
			'defaultvalue' => 'ymd11',
		),
		'externaldate' => array(
			'type' => 'select',
            'title' => get_string('exportdate', 'artefact.europass'),
			'options' => array(
				'/numeric/long' => get_string('externaldate-numeric-long', 'artefact.europass'),
				'/text/long' => get_string('externaldate-text-long', 'artefact.europass'),
			),
			'description' => get_string('selectexternaldatedesc', 'artefact.europass'),
			'defaultvalue' => '/numeric/long',
		),
		'generate' => array(
			'type' => 'submit',
			'value' => get_string('generateexport', 'artefact.europass'),
		),
	),
);

$inlinejs = <<<EOF

function selectedDocumentType(value) {
	// if EuropassLP option is selected, then the photograph field is disabled...
	if (value == true) {
		document.exporteuropassform.photograph.disabled = true;
	}
	// if EuropassCV option is selected, then the photograph field is enabled again...
	else {
		document.exporteuropassform.photograph.disabled = false;
	}
    return false;
}

EOF;

function exporteuropassform_validate(Pieform $form, $values) {
    global $SESSION;
    require_once('file.php');

	$filename = $values['photograph']['tmp_name'];
	if ($filename <> null) {
		$filesize = filesize($filename);
		$imageinfo = getimagesize($filename);
		// Photograph file is not a valid image file!
		if (!$imageinfo || !is_image_type($imageinfo[2])) {
			$SESSION->add_info_msg(get_string('filenotimage'));
			redirect('/artefact/europass/export.php');
		}
		// Size of the photograph can't be larger than 100 kB - this is Europass demand!
		if ($filesize > 100 * 1024) {
			$SESSION->add_info_msg(get_string('phototoolarge', 'artefact.europass'));
			redirect('/artefact/europass/export.php');
		}
	}
}

function exporteuropassform_submit(Pieform $form, $values) {
    global $SESSION;

	// Encode photograph to base64, for sending it within XML file...
	$filename = $values['photograph']['tmp_name'];
	if ($filename <> null) {
		$fd = fopen($filename, 'rb');
		$filesize = filesize($filename);
		$contents = fread($fd, $filesize);
		fclose($fd);
		$values['photograph'] = base64_encode($contents);
	} else {
		$values['photograph'] = null;
	}

	$SESSION->set('locale', $values['locale']);
	$SESSION->set('fileformat', $values['fileformat']);
	$SESSION->set('photograph', $values['photograph']);
	$SESSION->set('internaldate', $values['internaldate']);
	$SESSION->set('externaldate', $values['externaldate']);

    $SESSION->add_ok_msg(get_string('europassexportgenerated', 'artefact.europass'));
    redirect('/artefact/europass/export.php');
}

$exporteuropassform = pieform($eform);
$smarty = smarty();
$smarty->assign('exporteuropassform', $exporteuropassform);
$smarty->assign('INLINEJAVASCRIPT', $inlinejs);
$smarty->assign('PAGEHEADING', hsc(get_string('exporteuropass', 'artefact.europass')));
$smarty->display('artefact:europass:export.tpl');

?>
