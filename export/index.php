<?php
/**
 *
 * @package    mahara
 * @subpackage artefact-europass
 * @author     Gregor Anzelj
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2009-2022 Gregor Anzelj, gregor.anzelj@gmail.com
 *
 */
 
define('INTERNAL', true);
define('MENUITEM', 'content/europass');
define('SECTION_PLUGINTYPE', 'artefact');
define('SECTION_PLUGINNAME', 'europass');
define('SECTION_PAGE', 'export');

require_once(dirname(dirname(dirname(dirname(__FILE__)))) . '/init.php');
define('TITLE', get_string('europass', 'artefact.europass'));
define('SUBSECTIONHEADING', get_string('exporteuropass', 'artefact.europass'));
safe_require('artefact', 'europass');

require_once 'dompdf/autoload.inc.php';  
use Dompdf\Dompdf; 


$form = array(
    'name'       => 'exporteuropass',
    'method'     => 'post',
    'plugintype' => 'artefact',
    'pluginname' => 'europass',
    'template'   => 'form.php',
    'jsform'     => false,
    'elements'   => array(
        'documenttype' => array(
            'type' => 'checkboxes', 
            'title' => get_string('documenttype', 'artefact.europass'),
            'elements' => array(
                array(
                    'title' => get_string('ecv-tab', 'artefact.europass'),
                    'value' => 'ecv',
                    'defaultvalue' => true,
                ),
                array(
                    'title' => get_string('elp-tab', 'artefact.europass'),
                    'value' => 'elp',
                    'defaultvalue' => false,
                ),
            ),
        ),
        'fileformat' => array(
            'type' => 'radio', 
            'title' => get_string('filetype', 'artefact.europass'),
            'defaultvalue' => 'pdf',
            'options' => array(
                'pdf'     => get_string('pdf', 'artefact.europass'),
                //'word'    => get_string('doc', 'artefact.europass'),
                //'opendoc' => get_string('odt', 'artefact.europass'),
                'xml'     => get_string('xml', 'artefact.europass'),
                'html'    => get_string('html', 'artefact.europass'),
            ),
        ),
        /*
		'dateformat' => array(
            'type' => 'select',
            'title' => get_string('selectdateformatdesc', 'artefact.europass'),
            'options' => array(
                'numeric/medium' => get_string('dateformat-numeric-medium', 'artefact.europass'),
                'numeric/long' => get_string('dateformat-numeric-long', 'artefact.europass'),
                'text/short' => get_string('dateformat-text-short', 'artefact.europass'),
                'text/long' => get_string('dateformat-text-long', 'artefact.europass'),
            ),
            //'description' => get_string('selectdateformatdesc2', 'artefact.europass'),
            'defaultvalue' => 'numeric/long',
        ),
		*/
        'locale' => array(
            'type' => 'select',
            'title' => get_string('selectlocale', 'artefact.europass'),
            'options' => getoptions_full_locales(),
            // Get first 2 characters from system language setting as the default value
            'defaultvalue' => substr((isset($settings['lang']) ? hsc($settings['lang']) : get_config('lang')), 0, 2)
        ),
        'logo' => array(
            'type' => 'switchbox',
            'title' => get_string('includelogo', 'artefact.europass'),
            'switchtext' => 'yesno',
            'defaultvalue' => (isset($settings['logo']) ? hsc($settings['logo']) : 1),
        ),
        'profilepic' => array(
            'type' => 'switchbox',
            'title' => get_string('profilepicinclude', 'artefact.europass'),
            'switchtext' => 'yesno',
            'defaultvalue' => (isset($settings['profilepic']) ? hsc($settings['profilepic']) : false),
        ),
        'template' => array(
            'type' => 'select',
            'title' => get_string('template', 'artefact.europass'),
            'options' => array(
				'classic' => get_string('template-classic', 'artefact.europass'),
				'modern-navy' => get_string('template-modern-navy', 'artefact.europass'),
			),
            'defaultvalue' => (isset($settings['template']) ? hsc($settings['template']) : 'classic'),
        ),
        'submit' => array(
            'type' => 'submit',
            'value' => get_string('generateexport', 'artefact.europass'),
            'class' => 'btn btn-primary btn-lg btn-block',
        ),
    ),
);
$form = pieform($form);


$css = array(
    '<link rel="stylesheet" type="text/css" href="' . $THEME->get_url('static/style/style.css', false, 'artefact/europass') . '">',
    //'<link rel="stylesheet" type="text/css" href="' . $THEME->get_url('static/flags/flags.css', false, 'artefact/europass') . '">',
);

$inlinejs = <<<EOF
jQuery(document).ready(function(){
    jQuery("#showconfig").click(function(){
        jQuery("#europassconf").removeClass("closed");
        jQuery("#europassconf").addClass("active");
    });
    jQuery("#hideconfig").click(function(){
        jQuery("#europassconf").removeClass("active");
        jQuery("#europassconf").addClass("closed");
    });
    <!-- Capture click on all elements with name="documenttype[]" -->
    /*
	jQuery("input[name='documenttype[]']").change(function(){
        if (jQuery("#documenttype_ecv").is(':not(:checked)')
         && jQuery("#documenttype_elp").is(':not(:checked)')
         && jQuery("#documenttype_esp").is(':not(:checked)')) {
            jQuery("#exporteuropass_submit").hide();
            jQuery("#showconfig").hide();
        }
        else {
            jQuery("#exporteuropass_submit").show();
            jQuery("#showconfig").show();
        }
    });
	*/
});
EOF;

$smarty = smarty(array(), $css, array(), array());
$smarty->assign('form', $form);
$smarty->assign('INLINEJAVASCRIPT', $inlinejs);
$smarty->assign('SUBPAGENAV', PluginArtefactEuropass::submenu_items());
$smarty->display('artefact:europass:export.tpl');


function exporteuropass_submit(Pieform $form, array $values) {
    global $SESSION;

    unset($values['submit']);
    unset($values['sesskey']);
	print_r($values);
    // documenttype, fileformat, logo, locale, profilepic
    foreach($values as $key => $value) { 
        $SESSION->set($key, $value);
    }
    redirect('/artefact/europass/export/generate.php');
}
