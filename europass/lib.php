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
 * @subpackage artefact-europass
 * @author     Gregor Anželj
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2009-2010 Gregor Anzelj, gregor.anzelj@gmail.com
 *
 */

defined('INTERNAL') || die();

class PluginArtefactEuropass extends Plugin {
    
    public static function get_artefact_types() {
        return array(
            'mothertongue', 
            'otherlanguage',
			'application',
            'socialskill',
            'organisationalskill',
            'technicalskill',
            'computerskill',
            'artisticskill',
            'drivinglicence',
            'additionalinfo',
			'annexes'
        );
    }

    public static function get_block_types() {
        return array(); 
    }

    public static function get_plugin_name() {
        return 'europass';
    }

    public static function menu_items() {
        return array(
            array(
                'path' => 'profile/europass',
                'title' => get_string('europass', 'artefact.europass'),
                'url' => 'artefact/europass/',
                'weight' => 90,
            ),
            array(
                'path' => 'myportfolio/exporteuropass',
                'title' => get_string('exporteuropass', 'artefact.europass'),
                'url' => 'artefact/europass/export.php',
                'weight' => 91,
            ),
        );
    }

    public static function get_artefact_type_content_types() {
        return array(
            'application'         => array('text'),
            'socialskill'         => array('text'),
            'organisationalskill' => array('text'),
            'technicalskill'      => array('text'),
            'computerskill'       => array('text'),
            'artisticskill'       => array('text'),
            'additionalinfo'      => array('text'),
			'annexes'             => array('text'),
        );
    }
}

class ArtefactTypeEuropass extends ArtefactType {

    public static function get_icon($options=null) {}

    public function __construct($id=0, $data=array()) {
        if (empty($id)) {
            $data['title'] = get_string($this->get_artefact_type(), 'artefact.europass');
        }
        parent::__construct($id, $data);
    }
    
    public static function is_singular() {
        return false;
    }

    public static function format_child_data($artefact, $pluginname) {
        $a = new StdClass;
        $a->id         = $artefact->id;
        $a->isartefact = true;
        $a->title      = '';
        $a->text       = get_string($artefact->artefacttype, 'artefact.europass'); // $artefact->title;
        $a->container  = (bool) $artefact->container;
        $a->parent     = $artefact->id;
        return $a;
    }

    public static function get_links($id) {
        // @todo Catalyst IT Ltd
    }

    /**
     * Default render method for europass fields - show their description
     */
    public function render_self($options) {
        return array('html' => clean_html($this->description));
    }

}

function getoptions_languages() {
    static $languages;
    if (!empty($languages)) {
        return $languages;
    }
    $codes = array(
		// ISO 639-1 codes, filtered by Europass
		'ab', 'af', 'an', 'ar', 'as', 'az', 
		'be', 'bg', 'bn', 'bo', 'br', 'bs', 
		'ca', 'ce', 'co', 'cs', 'cy', 
		'da', 'de', 
		'el', 'en', 'eo', 'es', 'et', 'eu', 
		'fa', 'fi', 'fj', 'fo', 'fr', 'fy', 
		'ga', 'gd', 'gl', 'gv', 
		'he', 'hi', 'hr', 'ht', 'hu', 'hy', 
		'id', 'is', 'it', 
		'ja', 'jv', 
		'ka', 'kg', 'ko', 'ku', 'kw', 'ky', 
		'la', 'lb', 'li', 'ln', 'lt', 'lv', 
		'mg', 'mk', 'mn', 'mo', 'ms', 'mt', 'my', 
		'nb', 'ne', 'nl', 'nn', 'no', 
		'oc',
		'pl', 'pt', 
		'rm', 'ro', 'ru', 'r0', 
		'sc', 'se', 'sk', 'sl', 'so', 'sq', 'sr', 'sv', 'sw', 
		'tk', 'tr', 'ty', 
		'uk', 'ur', 'uz', 
		'vi', 'vo', 
		'yi', 
		'zh',
		// The rest of the ISO 639-1 codes...
		'aa', 'ae', 'ak', 'am', 'av', 'ay',
		'ba', 'bh', 'bi', 'bm',
		'ch', 'cr', 'cv',
		'dv', 'dz',
		'ee',
		'ff',
		'gn', 'gu',
		'ha', 'ho', 'hz',
		'ia', 'ig', 'ii', 'ik', 'io', 'iu',
		'ki', 'kj', 'kk', 'kl', 'km', 'kn', 'kr', 'ks', 'kv',
		'lg', 'lo', 'lu',
		'mh', 'mi', 'ml', 'mr',
		'na', 'nd', 'ng', 'nr', 'nv', 'ny',
		'oj', 'om', 'or', 'os',
		'pa', 'pi', 'ps',
		'qu',
		'rn', 'rw',
		'sa', 'sd', 'sg', 'si', 'sm', 'sn', 'ss', 'st', 'su',
		'ta', 'te', 'tg', 'th', 'ti', 'tl', 'tn', 'to', 'ts', 'tt', 'tw',
		'ug',
		've',
		'wa', 'wo',
		'xh',
		'yo',
		'za', 'zu'
    );

    foreach ($codes as $c) {
        $languages[$c] = get_string("language.{$c}", "artefact.europass");
    };
    uasort($languages, 'strcoll');
    return $languages;
}

function getoptions_levels() {
    static $levels;
    if (!empty($levels)) {
        return $levels;
    }
    $level = array(
		'A1',
		'A2',
		'B1',
		'B2',
		'C1',
		'C2',
    );

    foreach ($level as $l) {
        $levels[$l] = get_string("language-foreign-level.{$l}", "artefact.europass");
    };
    return $levels;
}


abstract class ArtefactTypeEuropassLanguage extends ArtefactTypeEuropass {

    public static function is_singular() {
        return true;
    }

    public static function get_language_artefact_types() {
        return array(
            'mothertongue',
            'otherlanguage'
        );
    }

    /**
    * This function should return a snippet of javascript
    * to be plugged into a table renderer instantiation
    * it comprises the cell function definition
    */
    public static abstract function get_tablerenderer_js();

    public static abstract function get_tablerenderer_title_js_string();

    public static abstract function get_tablerenderer_body_js_string();

    /**
     * Can be overridden to format data retrieved from artefact tables for 
     * display of the resume artefact by render_self
     */
    public static function format_render_self_data($data) {
        return $data;
    }

    /** 
    * This function should return an array suitable to 
    * put into the 'elements' part of a pieform array
    * to generate a form to add an instance
    */
    public static abstract function get_addform_elements();

    /**
    * This function processes the form for the language
    * @throws Exception
    */
    public static function process_languageform(Pieform $form, $values) {
        global $USER;
        self::ensure_language_value($values, $values['languagetype'], $USER->get('id'));
    }

    /**
     * Ensures that the given value for the given language is present
     * TODO: expand on these docs.
     */
    public static function ensure_language_value($values, $languagetype, $owner) {
        if (!in_array($languagetype, self::get_language_artefact_types())) {
            throw new SystemException("ensure_language_value called with invalid language type");
        }
        try {
            $a = artefact_instance_from_type($languagetype, $owner);
            $a->set('mtime', time());
        }
        catch (Exception $e) {
            $classname = generate_artefact_class_name($languagetype);
            $a = new $classname(0, array(
                'owner' => $owner,
                'title' => get_string($languagetype, 'artefact.europass'),
                )
            );
        }

        $a->commit();

        $values['artefact'] = $a->get('id');

        $table = 'artefact_europass_' . $languagetype;
        if (!empty($values['id'])) {
            update_record($table, (object)$values, 'id');
        }
        else {
            if (isset($values['displayorder'])) {
                $values['displayorder'] = intval($values['displayorder']);
            }
            else {
                $max = get_field($table, 'MAX(displayorder)', 'artefact', $values['artefact']);
                $values['displayorder'] = is_numeric($max) ? $max + 1 : 0;
            }
            insert_record($table, (object)$values);
        }
    }

    public function delete() {
        $table = $this->get_other_table_name();
        db_begin();

        delete_records($table, 'artefact', $this->id);
        parent::delete();

        db_commit();
    }


    /**
    * Takes a pieform that's been set up by all the 
    * subclass get_addform_elements functions
    * and puts the default values in (and hidden id field)
    * ready to be an edit form
    * 
    * @param $form pieform structure (before calling pieform() on it
    * passed by _reference_
    */
    public static function populate_form(&$form, $id, $type) {
        if (!$language = get_record('artefact_europass_' . $type, 'id', $id)) {
            throw new InvalidArgumentException("Couldn't find language of type $type with id $id");
        }

        $datetypes = array('date', 'startdate', 'enddate');
        foreach ($form['elements'] as $k => $element) {
            if ($k == 'submit' || $k == 'languagetype') {
                continue;
            }
            if (isset($language->{$k})) {
                $form['elements'][$k]['defaultvalue'] = $language->{$k};
            }
        }
        $form['elements']['id'] = array(
            'type' => 'hidden',
            'value' => $id,
        );
        $form['elements']['artefact'] = array(
            'type' => 'hidden',
            'value' => $language->artefact,
        );
    }


    /** 
    * call the parent constructor
    * and then load up the stuff from the supporting table
    */
    public function __construct($id=0, $data=array()) {
        if (empty($id)) {
            $data['container'] = 0;
            $data['title'] = get_string($this->get_artefact_type(), 'artefact.europass');
        }
        parent::__construct($id, $data);
    }    

    /** 
    * returns the name of the supporting table
    */
    public function get_other_table_name() {
        return 'artefact_europass_' . $this->get_artefact_type();
    }

    public function render_self($options) {
        global $USER;
        $suffix = '_' . substr(md5(microtime()), 0, 4);
        $smarty = smarty_core();
        $smarty->assign('hidetitle', true);
        $smarty->assign('suffix', $suffix);
        $type = $this->get('artefacttype');
        $othertable = 'artefact_europass_' . $type;
        $owner = $USER->get('id');

        $sql = 'SELECT ar.*, a.owner
            FROM {artefact} a 
            JOIN {' . $othertable . '} ar ON ar.artefact = a.id
            WHERE a.owner = ? AND a.artefacttype = ?
            ORDER BY ar.displayorder';

        if (!empty($options['viewid'])) { 
            if (!can_view_view($options['viewid'])) {
                throw new AccessDeniedException();
            }
            require_once('view.php');
            $v = new View($options['viewid']);
            $owner = $v->get('owner');
        }

        if (!$data = get_records_sql_array($sql, array($owner, $type))) {
            $data = array();
        }

        // Give the artefact type a chance to format the data how it sees fit
        $data = call_static_method(generate_artefact_class_name($type), 'format_render_self_data', $data);
        $smarty->assign('rows', $data);

		// For rendering otherlanguage table in compact or non compact mode...
		if (!empty($options['compact']) and $options['compact'] == true and $type == 'otherlanguage') {
			$content = array(
				'html'         => $smarty->fetch('artefact:europass:fragments/otherlanguagecompact.tpl'),
				'javascript'   => $this->get_showhide_language_js()
			);
		} else {
			$content = array(
				'html'         => $smarty->fetch('artefact:europass:fragments/' . $type . '.tpl'),
				'javascript'   => $this->get_showhide_language_js()
			);
		}
        return $content;
    }

    static function get_tablerenderer_title_js($titlestring, $bodystring) {
        return "
                function (r, d) {
                    if (!{$bodystring}) {
                        return TD(null, {$titlestring});
                    }
                    var link = A({'href': ''}, {$titlestring});
                    connect(link, 'onclick', function (e) {
                        e.stop();
                        return showhideLanguage(r, {$bodystring});
                    });
                    return TD({'id': 'language-' + r.artefact + '-' + r.id}, link);
                },
                ";
    }

    static function get_showhide_language_js() {
        return "
            function showhideLanguage(r, content) {
                // get the reference for the title we just clicked on
                var titleTD = $('language-' + r.artefact + '-' + r.id);
                var theRow = titleTD.parentNode;
                var bodyRow = $('language-body-' + r.artefact +  '-' + r.id);
                if (bodyRow) {
                    if (hasElementClass(bodyRow, 'hidden')) {
                        removeElementClass(bodyRow, 'hidden');
                    }
                    else {
                        addElementClass(bodyRow, 'hidden');
                    }
                    return false;
                }
                // we have to actually create the dom node too
                var colspan = theRow.childNodes.length;
                var newRow = TR({'id': 'language-body-' + r.artefact + '-' + r.id}, 
                    TD({'colspan': colspan}, content)); 
                insertSiblingNodesAfter(theRow, newRow);
            }
        ";
    }
}

class ArtefactTypeMotherTongue extends ArtefactTypeEuropassLanguage { 

    protected $language;

    public static function get_tablerenderer_js() {
        $return = "
                " . ArtefactTypeEuropassLanguage::get_tablerenderer_title_js(
                    self::get_tablerenderer_title_js_string(),
                    self::get_tablerenderer_body_js_string()
                ) . "
        ";
		$return .= "'langcode',";
		return $return;
    }

    public static function get_tablerenderer_title_js_string() {
        return " r.language";
    }

    public static function get_tablerenderer_body_js_string() {
        return " r.description";
    }

    public static function get_addform_elements() {
        return array(
            'language' => array(
                'type' => 'select',
                'rules' => array(
                    'required' => true,
                ),
                'title' => get_string('language', 'mahara'),
				'options' => getoptions_languages(),
            ),
            'description' => array(
                'type' => 'textarea',
                'rows' => 5,
                'cols' => 50,
                'resizable' => true,
                'title' =>  get_string('description', 'mahara'),
            ),
        );
    }
}

class ArtefactTypeOtherLanguage extends ArtefactTypeEuropassLanguage {

    protected $language;

    public static function get_tablerenderer_js() {

        $return = "
                " . ArtefactTypeEuropassLanguage::get_tablerenderer_title_js(
                    self::get_tablerenderer_title_js_string(),
                    self::get_tablerenderer_body_js_string()
                ) . "
        ";
		$return .= "
				'langcode',
				'listening',
				'reading',
				'spokeninteraction',
				'spokenproduction',
				'writing',
		";
		return $return;
    }

    public static function get_tablerenderer_title_js_string() {
        return " r.language";
    }

    public static function get_tablerenderer_body_js_string() {
        return " r.experiencedescription"; 
    }

    public static function get_addform_elements() {
        return array(
            'language' => array(
                'type' => 'select',
                'rules' => array(
                    'required' => true,
                ),
                'title' => get_string('language', 'mahara'),
				'options' => getoptions_languages(),
				//'defaultvalue' => 'sl',
            ),
			'listening' => array(
				'type' => 'select',
                'rules' => array(
                    'required' => true,
                ),
                'title' => get_string('language-foreign-listening', 'artefact.europass'),
				'options' => getoptions_levels(),
				'defaultvalue' => 'A1',
                'help' => true,
			),
			'reading' => array(
				'type' => 'select',
                'rules' => array(
                    'required' => true,
                ),
                'title' => get_string('language-foreign-reading', 'artefact.europass'),
				'options' => getoptions_levels(),
				'defaultvalue' => 'A1',
                'help' => true,
			),
			'spokeninteraction' => array(
				'type' => 'select',
                'rules' => array(
                    'required' => true,
                ),
                'title' => get_string('language-foreign-spokeninteraction', 'artefact.europass'),
				'options' => getoptions_levels(),
				'defaultvalue' => 'A1',
                'help' => true,
			),
			'spokenproduction' => array(
				'type' => 'select',
                'rules' => array(
                    'required' => true,
                ),
                'title' => get_string('language-foreign-spokenproduction', 'artefact.europass'),
				'options' => getoptions_levels(),
				'defaultvalue' => 'A1',
                'help' => true,
			),
			'writing' => array(
				'type' => 'select',
                'rules' => array(
                    'required' => true,
                ),
                'title' => get_string('language-foreign-writing', 'artefact.europass'),
				'options' => getoptions_levels(),
				'defaultvalue' => 'A1',
                'help' => true,
			),

			'certificatesheader' => array(
				'type' => 'html',
				'labelhtml' => '',
				'value' => '<h3 style="margin-top:10px">' . get_string('language-certificates', 'artefact.europass') . '</h3>',
			),
			'certificate' => array(
				'type' => 'text',
				'title' => get_string('diploma-title', 'artefact.europass'),
				'help'  => true,
			),
			'awardingbody' => array(
				'type' => 'textarea',
				'rows' => 5,
				'cols' => 50,
				'resizable' => true,
				'title' => get_string('diploma-awardingBody', 'artefact.europass'),
				'help'  => true,
			),
			'certificatedate' => array(
				'type'    => 'date',
				'maxyear' => date('Y'),
				'title' => get_string('diploma-date', 'artefact.europass'),
			),
			'europeanlevel' => array(
				'type' => 'select',
				'title' => get_string('diploma-level', 'artefact.europass'),
				'options' => getoptions_levels(),
				'help' => true,
			),

			'experiencesheader' => array(
				'type' => 'html',
				'labelhtml' => '',
				'value' => '<h3 style="margin-top:10px">' . get_string('language-experiences', 'artefact.europass') . '</h3>',
			),

			'experiencestartdate' => array(
				'type'    => 'date',
				'maxyear' => date('Y'),
				'title' => get_string('experiences-period-from', 'artefact.europass'),
			),
			'experienceenddate' => array(
				'type'    => 'date',
				'maxyear' => date('Y'),
				'title' => get_string('experiences-period-to', 'artefact.europass'),
			),
			'experiencedescription' => array(
				'type' => 'textarea',
				'rows' => 5,
				'cols' => 50,
				'resizable' => true,
				'title' => get_string('description', 'mahara'),
				'help'  => true,
			),
        );
    }
}

class ArtefactTypeEuropassArtefacts extends ArtefactTypeEuropass {

    public static function is_singular() {
        return true;
    }

    public static function get_europass_artefact_types() {
        return array('socialskill', 'organisationalskill', 'technicalskill', 'computerskill', 'artisticskill',
					 'application', 'drivinglicence', 'additionalinfo', 'annexes');
    }

}

class ArtefactTypeSocialSkill extends ArtefactTypeEuropassArtefacts { }
class ArtefactTypeOrganisationalSkill extends ArtefactTypeEuropassArtefacts { }
class ArtefactTypeTechnicalSkill extends ArtefactTypeEuropassArtefacts { }
class ArtefactTypeComputerSkill extends ArtefactTypeEuropassArtefacts { }
class ArtefactTypeArtisticSkill extends ArtefactTypeEuropassArtefacts { }
class ArtefactTypeApplication extends ArtefactTypeEuropassArtefacts { }
class ArtefactTypeDrivingLicence extends ArtefactTypeEuropassArtefacts {

    /**
     * Render method for Driving licence(s) Europass field
     */
    public function render_self($options) {
		$drivinglicence = unserialize($this->description);
		$renderhtml = '';
		foreach ($drivinglicence as $licence => $value) {
			if ($value <> null) {
				$renderhtml .= '<div style="padding:2px 0px"><img src="' . get_config('wwwroot') . '/artefact/europass/images/' . strtolower($licence) . '.png" width="98" height="20" align="top"> (' . strftime(get_string('strftimedate'), $value) . ')</div>';
			}
		}
		return array('html' => $renderhtml);
    }

}
class ArtefactTypeAdditionalInfo extends ArtefactTypeEuropassArtefacts { }
class ArtefactTypeAnnexes extends ArtefactTypeEuropassArtefacts { }


function languageform_submit(Pieform $form, $values) {
    try {
        call_static_method(generate_artefact_class_name($values['languagetype']), 
            'process_languageform', $form, $values);
    }
    catch (Exception $e) {
        $form->json_reply(PIEFORM_ERR, $e->getMessage());
    }
    $form->json_reply(PIEFORM_OK, get_string('languagesaved', 'artefact.europass'));
}

function languageformedit_submit(Pieform $form, $values) {
    global $SESSION;
    try {
        call_static_method(generate_artefact_class_name($values['languagetype']),
            'process_languageform', $form, $values);
    }
    catch (Exception $e) {
        $SESSION->add_error_msg(get_string('languagesavefailed', 'artefact.europass'));
        redirect('/artefact/europass/');
    }
    $SESSION->add_ok_msg(get_string('languagesaved', 'artefact.europass'));
    redirect('/artefact/europass/');
}

function europassform_submit(Pieform $form, $values) {

	//log_debug($values['XY']);
	// Set driving licence values and serialize them...
	$values['drivinglicence'] = array(
		//'N0'	=> $values['N0'],
		//'XY'	=> $values['XY'],
		'A1'	=> $values['A1'],
		'A'		=> $values['A'],
		'B'		=> $values['B'],
		'BE'	=> $values['BE'],
		'B1'	=> $values['B1'],
		'C'		=> $values['C'],
		'CE'	=> $values['CE'],
		'C1'	=> $values['C1'],
		'C1E'	=> $values['C1E'],
		'D'		=> $values['D'],
		'DE'	=> $values['DE'],
		'D1'	=> $values['D1'],
		'D1E'	=> $values['D1E']
	);
	$values['drivinglicence'] = serialize($values['drivinglicence']);

	foreach ($values as $key => $value) {
        if (!in_array($key, ArtefactTypeEuropassArtefacts::get_europass_artefact_types())) {
            continue;
        }
        try {
            $a = artefact_instance_from_type($key);
            $a->set('description', $value);
        }
        catch (Exception $e) {
            global $USER;
            $classname = generate_artefact_class_name($key);
            $a = new $classname(0, array(
                'owner' => $USER->get('id'),
                'title' => get_string($key),
                'description' => $value,
           )); 
        }
        $a->commit();
    }
    $form->json_reply(PIEFORM_OK, get_string('europassartefactsaved', 'artefact.europass'));
}   

?>
