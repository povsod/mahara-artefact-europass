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

defined('INTERNAL') || die();
require_once(get_config('docroot') . 'artefact/europass/lib/locale.php');
require_once(get_config('docroot') . 'artefact/europass/lib/europassxml.php');


class PluginBlocktypeEuropassCV extends PluginBlocktype {

    public static function get_title() {
        return get_string('title', 'blocktype.europass/europasscv');
    }

    public static function get_description() {
        return get_string('description', 'blocktype.europass/europasscv');
    }

    public static function get_categories() {
        return array('resume');
    }

    public static function render_instance(BlockInstance $instance, $editing=false) {
		// Check if XSLT extension is loaded properly, because we will need it...
		// The XSL extension implements the XSL standard, performing XSLT transformations using the libxslt library.
		$xslext = extension_loaded('xsl');
		if (!$xslext) {
			$missingextensions = array();
			!$xslext && $missingextensions[] = 'xsl';
			$errormsg = '<p>' . get_string('europassextensionmissing', 'artefact.europass') . '</p>';
			$errormsg .= '<ul>';
			foreach ($missingextensions as $extension) {
				$errormsg .= '<li><a href="http://www.php.net/' . $extension . '">' . $extension . '</a></li>';
			}
			$errormsg .= '</ul>';
			return $errormsg;
			exit;
		}
		
		global $USER;
        $configdata = $instance->get('configdata');
		if ($configdata == array()) {
			$locale = set_default_locale(get_config('lang'));
		} else {
			$locale = $configdata['locale'];
		}
        $configdata['viewid'] = $instance->get('view');

		// Load up the Europass CV generated XML string
		//$xmlDoc = new DOMDocument;
		//$xmlDoc->loadXML(generate_europasscv_xml((!empty($configdata['userid']) ? $configdata['userid'] : $USER->get('id')), true, $locale, (!empty($configdata['internaldate']) ? $configdata['internaldate'] : 'dmy11'), (!empty($configdata['externaldate']) ? $configdata['externaldate'] : '/numeric/long')));
		$xmlDoc = simplexml_load_string(generate_europasscv_xml((!empty($configdata['userid']) ? $configdata['userid'] : $USER->get('id')), true, $locale, (!empty($configdata['internaldate']) ? $configdata['internaldate'] : 'dmy11'), (!empty($configdata['externaldate']) ? $configdata['externaldate'] : '/numeric/long')));
		
		// Load up the appropriate XSL file, according to selected locale
		//$xslDoc = new DOMDocument;
		//$xslDoc->load(get_config('docroot') . 'artefact/europass/blocktype/europasscv/xsl/cv_' . $locale . '_V2.0.xsl');
		$xslDoc = simplexml_load_string(file_get_contents(get_config('wwwroot') . 'artefact/europass/blocktype/europasscv/xsl/cv_' . $locale . '_V2.0.xsl'));
		
		//Start the XSLT processor and import stylesheet
		$xslt = new XSLTProcessor;
		$xslt->importStyleSheet($xslDoc);

		// Apply the transformation
		$html = $xslt->transformToXml($xmlDoc);
		$start  = stripos($html, '<body>');
		$finish = stripos($html, '</body>');
		
		$result = '<link rel="stylesheet" type="text/css" href="' . get_config('wwwroot') . 'artefact/europass/theme/raw/static/style/html.css">';
		//$result .= '<table width="700" border="0" cellspacing="0" cellpadding="0" class="CV" id="CV">';
		$result .= substr($html, $start + 6, $finish - $start);
		//$result .= '</table>';
		$result = html_entity_decode($result);
		
		return $result;	
    }

    public static function has_instance_config() {
        return true;
    }

    public static function instance_config_form($instance) {
		global $USER;
		$configdata = $instance->get('configdata');

        $form = array();
        // In which locale (language) does the user want to show his/her Europass CV
        $form[] = self::artefactchooser_element((isset($configdata['locale'])) ? $configdata['locale'] : null);
		$form['internaldate'] = array(
			'type' => 'select',
			'title' => get_string('internaldateformat', 'artefact.europass'),
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
			'defaultvalue' => (!empty($configdata['internaldate']) ? $configdata['internaldate'] : 'dmy11'),
		);
		$form['externaldate'] = array(
			'type' => 'select',
			'title' => get_string('externaldateformat', 'artefact.europass'),
			'options' => array(
				'/numeric/long' => get_string('externaldate-numeric-long', 'artefact.europass'),
				'/text/long' => get_string('externaldate-text-long', 'artefact.europass'),
			),
			'description' => get_string('selectexternaldatedesc', 'artefact.europass'),
			'defaultvalue' => (!empty($configdata['externaldate']) ? $configdata['externaldate'] : '/numeric/long'),
		);
        $form['userid'] = array(
            'type' => 'hidden',
			'value' => (!empty($configdata['userid']) ? $configdata['userid'] : $USER->get('id')),
        );
        return $form;
    }

    public static function instance_config_save($values) {
        return $values;
    }

    // TODO: make decision on whether this should be abstract or not
    public static function artefactchooser_element($default=null) {
        return array(
            'name'  => 'locale',
            'type'  => 'select',
            'title' => get_string('showinlocale', 'blocktype.europass/europasscv'),
            'defaultvalue' => (isset($default)) ? $default : set_default_locale(get_config('lang')),
			'options' => getoptions_locales(),
		);
    }


    public static function default_copy_type() {
        return 'shallow';
    }

    /**
     * EuropassCV blocktype is only allowed in personal views, because 
     * there's no such thing as group/site Europass CV
     */
    public static function allowed_in_view(View $view) {
        return $view->get('owner') != null;
    }

    /**
     * Export the name of the resume field being exported instead of a
     * reference to the artefact ID - mainly so that the fake "contact
     * information" field (which isn't exported) gets handled properly.
     *
     * @param BlockInstance $bi The blockinstance to export the config for.
     * @return array The config for the blockinstance
     */
/*
    public static function export_blockinstance_config_leap(BlockInstance $bi) {
        $configdata = $bi->get('configdata');
        $result = array();

        if (!empty($configdata['artefactid'])) {
            if ($artefacttype = get_field('artefact', 'artefacttype', 'id', $configdata['artefactid'])) {
                $result['artefacttype'] = json_encode(array($artefacttype));
            }
        }

        return $result;
    }
*/
    /**
     * Load the artefact ID for the field based on the field name that is in
     * the config (see export_blockinstance_config_leap).
     *
     * @param array $biconfig   The block instance config
     * @param array $viewconfig The view config
     * @return BlockInstance The newly made block instance
     */
/*
    public static function import_create_blockinstance_leap(array $biconfig, array $viewconfig) {
        $configdata = array();

        // This blocktype is only allowed in personal views
        if (empty($viewconfig['owner'])) {
            return;
        }
        $owner = $viewconfig['owner'];

        if (isset($biconfig['config']) && is_array($biconfig['config'])) {
            $impcfg = $biconfig['config'];
            if (!empty($impcfg['artefacttype'])) {
                if ($artefactid = get_field_sql("SELECT id
                    FROM {artefact}
                    WHERE owner = ?
                    AND artefacttype = ?
                    AND artefacttype IN (
                        SELECT name
                        FROM {artefact_installed_type}
                        WHERE plugin = 'resume'
                    )", array($owner, $impcfg['artefacttype']))) {
                    $configdata['artefactid'] = $artefactid;
                }
            }
        }

        $bi = new BlockInstance(0,
            array(
                'blocktype'  => $biconfig['type'],
                'configdata' => $configdata,
            )
        );

        return $bi;
    }
*/
}

?>
