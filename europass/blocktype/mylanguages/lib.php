<?php
/**
 * Mahara: Electronic portfolio, weblog, resume builder and social networking
 * Copyright (C) 2006-2010 Catalyst IT Ltd and others; see:
 *                         http://wiki.mahara.org/Contributors
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package    mahara
 * @subpackage blocktype-mylanguages
 * @author     Gregor Anželj
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2009-2010 Gregor Anzelj, gregor.anzelj@gmail.com
 *
 */

defined('INTERNAL') || die();
require_once(get_config('docroot') . 'artefact/europass/lib/locale.php');

class PluginBlocktypeMyLanguages extends PluginBlocktype {

    public static function get_title() {
        return get_string('title', 'blocktype.europass/mylanguages');
    }

    public static function get_description() {
        return get_string('description', 'blocktype.europass/mylanguages');
    }

    public static function get_categories() {
        return array('resume');
    }

     /**
     * Optional method. If exists, allows this class to decide the title for
     * all blockinstances of this type
     */
    public static function get_instance_title(BlockInstance $bi) {
        $configdata = $bi->get('configdata');

        if (!empty($configdata['artefactid'])) {
            require_once(get_config('docroot') . 'artefact/lib.php');
            $mylanguages = artefact_instance_from_id($configdata['artefactid']);
            return $mylanguages->get('title');
        }
        return '';
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
		
        require_once(get_config('docroot') . 'artefact/lib.php');
        $smarty = smarty_core();
        $configdata = $instance->get('configdata');
        $configdata['viewid'] = $instance->get('view');

        // Get data about the language field in this blockinstance
        if (!empty($configdata['artefactid'])) {
            $mylanguages = $instance->get_artefact_instance($configdata['artefactid']);
            $rendered = $mylanguages->render_self($configdata);
            $result = $rendered['html'];
            if (!empty($rendered['javascript'])) {
                $result .= '<script type="text/javascript">' . $rendered['javascript'] . '</script>';
            }
			// If we are displaying otherlanguage table, then add link to CEF level definitions...
			if ($mylanguages->get('artefacttype') == 'otherlanguage') {
				$l = substr(set_default_locale(get_config('lang')), 0, 2);
				$result .= '<a href="http://europass.cedefop.europa.eu/LanguageSelfAssessmentGrid/' . $l . '" target="_blank">' . get_string('language-foreign-CEF-level', 'artefact.europass') . '</a>';
			}
            return $result;
        }
        return '';
    }

    public static function has_instance_config() {
        return true;
    }

    public static function instance_config_form($instance) {
        $configdata = $instance->get('configdata');

        $form = array();

        // Which language field does the user want
        $form[] = self::artefactchooser_element((isset($configdata['artefactid'])) ? $configdata['artefactid'] : null);
        $form['message'] = array(
            'type' => 'html',
            'value' => get_string('filloutyoureuropass', 'blocktype.europass/mylanguages', '<a href="' . get_config('wwwroot') . 'artefact/europass/">', '</a>'),
        );
        $form['compact'] = array(
            'type' => 'checkbox',
            'description' => get_string('displaycompacttable', 'blocktype.europass/mylanguages'),
			'defaultvalue' => ((!empty($configdata['compact']) and $configdata['compact'] == 1) ? 'checked' : ''),
        );

        return $form;
    }

    public static function instance_config_save($values) {
        unset($values['message']);
        return $values;
    }

    // TODO: make decision on whether this should be abstract or not
    public static function artefactchooser_element($default=null) {
        safe_require('artefact', 'europass');
        return array(
            'name'  => 'artefactid',
            'type'  => 'artefactchooser',
            'title' => get_string('fieldtoshow', 'blocktype.europass/mylanguages'),
            'defaultvalue' => $default,
            'blocktype' => 'mylanguages',
            'limit'     => 655360, // 640K profile fields is enough for anyone!
            'selectone' => true,
            'search'    => false,
            //'artefacttypes' => PluginArtefactResume::get_artefact_types(),
            'artefacttypes' => array('mothertongue', 'otherlanguage'),
            'template'  => 'artefact:europass:artefactchooser-element.tpl',
        );
    }

    /**
     * Deliberately enforce _no_ sort order. The database will return them in 
     * the order they were inserted, which means roughly the order that they 
     * are listed in the profile screen
     */
    public static function artefactchooser_get_sort_order() {
        return '';
    }

	// Ali je pravilno rewrite_language_config ali rewrite_europass_config?
    public static function rewrite_language_config(View $view, $configdata) {
        $artefactid = null;
        if ($view->get('owner') !== null) {
            $artefacttype = null;
            if (!empty($configdata['artefactid'])) {
                $artefacttype = get_field('artefact', 'artefacttype', 'id', $configdata['artefactid']);
            }
            // @todo get artefacttype from a different field when copying from institution or group view.
            if ($artefacttype) {
                $artefactid = get_field('artefact', 'id', 'artefacttype', $artefacttype, 'owner', $ownerid);
            }
        }
        $configdata['artefactid'] = $artefactid;
        return $configdata;
    }

    public static function default_copy_type() {
        return 'shallow';
    }

    /**
     * MyLanguages blocktype is only allowed in personal views, because 
     * there's no such thing as group/site languages
     */
    public static function allowed_in_view(View $view) {
        return $view->get('owner') != null;
    }

    /**
     * Export the name of the language field being exported instead of a
     * reference to the artefact ID - mainly so that the fake "contact
     * information" field (which isn't exported) gets handled properly.
     *
     * @param BlockInstance $bi The blockinstance to export the config for.
     * @return array The config for the blockinstance
     */
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

    /**
     * Load the artefact ID for the field based on the field name that is in
     * the config (see export_blockinstance_config_leap).
     *
     * @param array $biconfig   The block instance config
     * @param array $viewconfig The view config
     * @return BlockInstance The newly made block instance
     */
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
                        WHERE plugin = 'europass'
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

}

?>
