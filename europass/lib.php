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

defined('INTERNAL') || die();

class PluginArtefactEuropass extends PluginArtefact {
    
    public static function get_artefact_types() {
        return array(
            'mothertongue', 
            'otherlanguage',
            'languagediploma',
            'languageexperience',
            'socialskill', // communicationskill
            'organisationalskill',
            'technicalskill', //jobrelatedskill
            'digitalcompetence', //computerskill
            'digitaldiploma',
            'otherskill',
            'drivinglicence',
            'additionalinfo',
        );
    }
    
    public static function get_composite_artefact_types() {
        return array(
            'otherlanguage',
            'languagediploma',
            'languageexperience',
            'digitalcompetence',
            'digitaldiploma',
        );
    }

    public static function get_europass_skills() {
        return array(
            'socialskill',
            'organisationalskill',
            'technicalskill',
            'otherskill',
            'drivinglicence'
        );
    }

    public static function get_block_types() {
        return array(); 
    }

    public static function get_plugin_name() {
        return 'europass';
    }

    public static function is_active() {
        return get_field('artefact_installed', 'active', 'name', 'europass');
    }

    public static function menu_items() {
        return array(
            'content/europass' => array(
                'path' => 'content/europass',
                'title' => get_string('europass', 'artefact.europass'),
                'url' => 'artefact/europass/',
                'weight' => 90,
            ),
        );
    }

    public static function submenu_items() {
        $tabs = array(
            'index' => array(
                'page'  => 'index',
                'url'   => 'artefact/europass/index.php',
                'title' => get_string('ecv-tab', 'artefact.europass'),
            ),
            'skillsfolder' => array(
                'page'  => 'skillsfolder',
                'url'   => 'artefact/europass/skillsfolder.php',
                'title' => get_string('esp-tab', 'artefact.europass'),
            ),
            'languages' => array(
                'page'  => 'languages',
                'url'   => 'artefact/europass/languages.php',
                'title' => get_string('elp-tab', 'artefact.europass'),
            ),
        );
        if (defined('EUROPASS_SUBPAGE') && isset($tabs[EUROPASS_SUBPAGE])) {
            $tabs[EUROPASS_SUBPAGE]['selected'] = true;
        }
        return $tabs;
    }

    public static function composite_tabs() {
        return array(
            'mothertongue'  => 'languages',
            'otherlanguage' => 'languages',
            'languagediploma' => 'languages',
            'languageexperience' => 'languages',
        );
    }
}


class ArtefactTypeEuropass extends ArtefactType {

    public static function get_icon($options=null) {}

    public function __construct($id=0, $data=array()) {
        if (empty($id)) {
            $artefacttype = $this->get_artefact_type();
            if ($artefacttype == 'additionalinfo') {
                $data['title'] = 'certifications';
            }
            else {
                $data['title'] = get_string($artefacttype, 'artefact.europass');
            }
        }
        parent::__construct($id, $data);
    }

    public static function is_singular() {
        return true;
    }

    public function can_have_attachments() {
        return false;
    }

    public static function get_form_template() {
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
        return array(
            '_default' => get_config('wwwroot') . 'artefact/europass/index.php',
        );
    }

    /**
     * Default render method for Europass fields - show their description
     */
    public function render_self() {
        return clean_html($this->get('description'));
    }

}


abstract class ArtefactTypeEuropassComposite extends ArtefactTypeEuropass {

    protected $properties;

    /**
    * Call the parent constructor
    * and then load up the stuff from the supporting table
    */
    public function __construct($id=0, $data=array()) {
        if (isset($id) && $id > 0) {
            $table = $this->get_other_table_name();
            $properties = get_record($table, 'artefact', $id);
        }
        if (isset($properties) && !empty($properties)) {
            $data->properties = $properties;
        }
        parent::__construct($id, $data);
    }

    public static function is_singular() {
        return false;
    }

    /**
     * Can be overridden to format data retrieved from artefact tables for 
     * display of the resume artefact by render_self
     */
    public static function format_render_self_data($data) {
        return $data;
    }

    public function delete() {
        $table = $this->get_other_table_name();
        $composite = $this->get('properties');
        db_begin();

        delete_records($table, 'id', $composite->id, 'artefact', $composite->artefact);
        parent::delete();

        db_commit();
    }

    public static function bulk_delete_composite($artefactids, $compositetype) {
        $table = 'artefact_europass_' . $compositetype;
        if (empty($artefactids)) {
            return;
        }

        $idstr = join(',', array_map('intval', $artefactids));

        db_begin();
        delete_records_select($table, 'artefact IN (' . $idstr . ')');
        parent::bulk_delete($artefactids);
        db_commit();
    }

    /**
    * Takes a pieform that's been set up by all the 
    * subclass get_form_elements functions
    * and puts the default values in (and hidden id field)
    * ready to be an edit form
    * 
    * @param $form pieform structure (before calling pieform() on it
    * passed by _reference_
    */
    public function populate_form(&$form, $id, $type) {
        $table = $this->get_other_table_name();
        if (!$properties = $this->get('properties')) {
            throw new InvalidArgumentException("Couldn't find composite of type $type with id $id");
        }
        foreach ($form['elements'] as $k => $element) {
            if ($k == 'submit' || $k == 'compositetype') {
                continue;
            }
            if (isset($properties->{$k})) {
                $form['elements'][$k]['defaultvalue'] = $properties->{$k};
            }
        }
        if (array_key_exists('description', $form['elements'])) {
            $form['elements']['description']['defaultvalue'] = $this->get('description');
        }
    }

    /** 
    * Returns the name of the supporting table
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

        return array(
            'html' => $smarty->fetch('artefact:europass:fragments/' . $type . '.tpl')
        );
    }

    abstract static function get_form_elements();

}

class ArtefactTypeOtherlanguage extends ArtefactTypeEuropassComposite { 

    public static function get_form_elements() {
        return array(
            'language' => array(
                'type' => 'select',
                'rules' => array(
                    'required' => true,
                ),
                'title' => get_string('language', 'mahara'),
                'options' => getoptions_languages(),
            ),
            'listening' => array(
                'type' => 'select',
                'rules' => array(
                    'required' => true,
                ),
                'title' => get_string('language-foreign-listening', 'artefact.europass'),
                'options' => getoptions_lang_levels(),
                'help' => true,
            ),
            'reading' => array(
                'type' => 'select',
                'rules' => array(
                    'required' => true,
                ),
                'title' => get_string('language-foreign-reading', 'artefact.europass'),
                'options' => getoptions_lang_levels(),
                'help' => true,
            ),
            'spokeninteraction' => array(
                'type' => 'select',
                'rules' => array(
                    'required' => true,
                ),
                'title' => get_string('language-foreign-spokeninteraction', 'artefact.europass'),
                'options' => getoptions_lang_levels(),
                'help' => true,
            ),
            'spokenproduction' => array(
                'type' => 'select',
                'rules' => array(
                    'required' => true,
                ),
                'title' => get_string('language-foreign-spokenproduction', 'artefact.europass'),
                'options' => getoptions_lang_levels(),
                'help' => true,
            ),
            'writing' => array(
                'type' => 'select',
                'rules' => array(
                    'required' => true,
                ),
                'title' => get_string('language-foreign-writing', 'artefact.europass'),
                'options' => getoptions_lang_levels(),
                'help' => true,
            ),
        );
    }

    public static function bulk_delete($artefactids) {
        parent::bulk_delete_composite($artefactids, 'otherlanguage');
    }
}

class ArtefactTypeLanguagediploma extends ArtefactTypeEuropassComposite { 

    public function can_have_attachments() {
        return true;
    }

    /** 
    * Returns the name of the supporting table
    */
    public function get_other_table_name() {
        return 'artefact_europass_certificate';
    }

    public static function get_form_elements() {
        return array(
            'certificate' => array(
                'type' => 'text',
                'rules' => array(
                    'required' => true,
                ),
                'title' => get_string('diploma-title', 'artefact.europass'),
            ),
            'awardingbody' => array(
                'type' => 'textarea',
                'rules' => array(
                    'required' => true,
                    'maxlength' => 65536,
                ),
                'rows' => 5,
                'cols' => 50,
                'resizable' => false,
                'title' => get_string('diploma-awardingBody', 'artefact.europass'),
            ),
            'certificatedate' => array(
                'type'  => 'calendar',
                'rules' => array(
                    'required' => true,
                ),
                'title' => get_string('diploma-date', 'artefact.europass'),
                'size' => 20,
            ),
            'europeanlevel' => array(
                'type' => 'select',
                'title' => get_string('diploma-level', 'artefact.europass'),
                'options' => getoptions_lang_levels(),
            ),
        );
    }

    public static function bulk_delete($artefactids) {
        parent::bulk_delete_composite($artefactids, 'languagediploma');
    }
}

class ArtefactTypeLanguageexperience extends ArtefactTypeEuropassComposite {

    public function can_have_attachments() {
        return true;
    }

    public static function get_form_elements() {
        return array(
            'startdate' => array(
                'type' => 'calendar',
                'rules' => array(
                    'required' => true,
                ),
                'title' => get_string('experiences-period-from', 'artefact.europass'),
                'size' => 20,
            ),
            'enddate' => array(
                'type' => 'calendar',
                'title' => get_string('experiences-period-to', 'artefact.europass'),
                'size' => 20,
            ),
            'experience' => array(
                'type' => 'textarea',
                'rules' => array(
                    'required' => true,
                    'maxlength' => 65536,
                ),
                'rows' => 5,
                'cols' => 50,
                'resizable' => false,
                'title' => get_string('description', 'mahara'),
            ),
        );
    }

    public static function bulk_delete($artefactids) {
        parent::bulk_delete_composite($artefactids, 'languageexperience');
    }
}

class ArtefactTypeDigitalcompetence extends ArtefactTypeEuropassComposite {

    public static function can_have_multiple_items() {
        return false;
    }

    public function can_have_attachments() {
        return true;
    }

    public static function get_form_elements() {
        return array(
            'information' => array(
                'type' => 'select',
                'rules' => array(
                    'required' => true,
                ),
                'title' => get_string('digitalcompetence-information', 'artefact.europass'),
                'options' => getoptions_comp_levels(),
                'help' => true,
            ),
            'communication' => array(
                'type' => 'select',
                'rules' => array(
                    'required' => true,
                ),
                'title' => get_string('digitalcompetence-communication', 'artefact.europass'),
                'options' => getoptions_comp_levels(),
                'help' => true,
            ),
            'contentcreation' => array(
                'type' => 'select',
                'rules' => array(
                    'required' => true,
                ),
                'title' => get_string('digitalcompetence-contentcreation', 'artefact.europass'),
                'options' => getoptions_comp_levels(),
                'help' => true,
            ),
            'safety' => array(
                'type' => 'select',
                'rules' => array(
                    'required' => true,
                ),
                'title' => get_string('digitalcompetence-safety', 'artefact.europass'),
                'options' => getoptions_comp_levels(),
                'help' => true,
            ),
            'problemsolving' => array(
                'type' => 'select',
                'rules' => array(
                    'required' => true,
                ),
                'title' => get_string('digitalcompetence-problemsolving', 'artefact.europass'),
                'options' => getoptions_comp_levels(),
                'help' => true,
            ),
            'description' => array(
                'type'  => 'wysiwyg',
                'rows'  => 20,
                'cols'  => 70,
                'title' => get_string('description', 'artefact.resume'),
                'rules' => array('maxlength' => 65536),
            ),
        );
    }

    public static function bulk_delete($artefactids) {
        parent::bulk_delete_composite($artefactids, 'digitalcompetence');
    }
}

class ArtefactTypeDigitaldiploma extends ArtefactTypeEuropassComposite { 

    public function can_have_attachments() {
        return true;
    }

    /** 
    * Returns the name of the supporting table
    */
    public function get_other_table_name() {
        return 'artefact_europass_certificate';
    }

    public static function get_form_elements() {
        return array(
            'certificate' => array(
                'type' => 'text',
                'rules' => array(
                    'required' => true,
                ),
                'title' => get_string('diploma-title', 'artefact.europass'),
            ),
            'awardingbody' => array(
                'type' => 'textarea',
                'rules' => array(
                    'required' => true,
                    'maxlength' => 65536,
                ),
                'rows' => 5,
                'cols' => 50,
                'resizable' => false,
                'title' => get_string('diploma-awardingBody', 'artefact.europass'),
            ),
            'certificatedate' => array(
                'type'  => 'calendar',
                'rules' => array(
                    'required' => true,
                ),
                'title' => get_string('diploma-date', 'artefact.europass'),
                'size' => 20,
            ),
            'europeanlevel' => array(
                'type' => 'select',
                'title' => get_string('diploma-level', 'artefact.europass'),
                'options' => getoptions_comp_levels(),
            ),
        );
    }

    public static function bulk_delete($artefactids) {
        parent::bulk_delete_composite($artefactids, 'digitaldiploma');
    }
}

class ArtefactTypeEuropassElement extends ArtefactTypeEuropass {

    public static function get_form_elements() {
        return array(
            'description' => array(
                'type'  => 'wysiwyg',
                'rows'  => 20,
                'cols'  => 70,
                'title' => get_string('description', 'artefact.resume'),
                'rules' => array('maxlength' => 65536),
            ),
        );
    }

    /**
    * Takes a pieform that's been set up by all the subclass get_form_elements
    * functions and puts the default values in (and hidden id field) ready to
    * be an edit form
    * 
    * @param $form pieform structure (before calling pieform() on it passed by
    * _reference_
    */
    public static function populate_form(&$form, $id, $type) {
        if (!$artefact = get_record('artefact', 'id', $id)) {
            throw new InvalidArgumentException("Couldn't find artefact of type $type with id $id");
        }
        foreach ($form['elements'] as $k => $element) {
            if ($k == 'submit') {
                continue;
            }
            if (isset($artefact->{$k})) {
                $form['elements'][$k]['defaultvalue'] = $artefact->{$k};
            }
        }
        $form['elements']['id'] = array(
            'type' => 'hidden',
            'value' => $id,
        );
    }

}

class ArtefactTypeMothertongue extends ArtefactTypeEuropassElement {

    public static function is_singular() {
        return false;
    }

    public static function get_form_elements() {
        return array(
            'description' => array(
                'type' => 'select',
                'rules' => array(
                    'required' => true,
                ),
                'title' => get_string('language', 'mahara'),
                'options' => getoptions_languages(),
            ),
        );
    }

}

class ArtefactTypeSocialskill extends ArtefactTypeEuropassElement { }
class ArtefactTypeOrganisationalskill extends ArtefactTypeEuropassElement { }
class ArtefactTypeTechnicalskill extends ArtefactTypeEuropassElement { }
class ArtefactTypeOtherskill extends ArtefactTypeEuropassElement { }

class ArtefactTypeDrivinglicence extends ArtefactTypeEuropassElement {

    public static function get_form_template() {
        return 'drivingform.php';
    }

    public static function get_form_elements() {
        return array(
            'category_am' => array(
                'type' => 'switchbox',
                'title' => 'AM',
                'switchtext' => 'yesno',
            ),
            'category_a1' => array(
                'type' => 'switchbox',
                'title' => 'A1',
                'switchtext' => 'yesno',
            ),
            'category_a2' => array(
                'type' => 'switchbox',
                'title' => 'A2',
                'switchtext' => 'yesno',
            ),
            'category_a' => array(
                'type' => 'switchbox',
                'title' => 'A',
                'switchtext' => 'yesno',
            ),
            'category_b1' => array(
                'type' => 'switchbox',
                'title' => 'B1',
                'switchtext' => 'yesno',
            ),
            'category_b' => array(
                'type' => 'switchbox',
                'title' => 'B',
                'switchtext' => 'yesno',
            ),
            'category_be' => array(
                'type' => 'switchbox',
                'title' => 'BE',
                'switchtext' => 'yesno',
            ),
            'category_c1' => array(
                'type' => 'switchbox',
                'title' => 'C1',
                'switchtext' => 'yesno',
            ),
            'category_c1e' => array(
                'type' => 'switchbox',
                'title' => 'C1E',
                'switchtext' => 'yesno',
            ),
            'category_c' => array(
                'type' => 'switchbox',
                'title' => 'C',
                'switchtext' => 'yesno',
            ),
            'category_ce' => array(
                'type' => 'switchbox',
                'title' => 'CE',
                'switchtext' => 'yesno',
            ),
            'category_d1' => array(
                'type' => 'switchbox',
                'title' => 'D1',
                'switchtext' => 'yesno',
            ),
            'category_d1e' => array(
                'type' => 'switchbox',
                'title' => 'D1E',
                'switchtext' => 'yesno',
            ),
            'category_d' => array(
                'type' => 'switchbox',
                'title' => 'D',
                'switchtext' => 'yesno',
            ),
            'category_de' => array(
                'type' => 'switchbox',
                'title' => 'DE',
                'switchtext' => 'yesno',
            ),
        );
    }

    /**
    * Takes a pieform that's been set up by all the subclass get_form_elements
    * functions and puts the default values in (and hidden id field) ready to
    * be an edit form
    * 
    * @param $form pieform structure (before calling pieform() on it passed by
    * _reference_
    */
    public static function populate_form(&$form, $id, $type) {
        if (!$artefact = get_record('artefact', 'id', $id)) {
            throw new InvalidArgumentException("Couldn't find artefact of type $type with id $id");
        }

        $licences = unserialize($artefact->description);
        $form['elements']['category_am']['defaultvalue'] = $licences['am'];
        $form['elements']['category_a1']['defaultvalue'] = $licences['a1'];
        $form['elements']['category_a2']['defaultvalue'] = $licences['a2'];
        $form['elements']['category_a']['defaultvalue'] = $licences['a'];
        $form['elements']['category_b1']['defaultvalue'] = $licences['b1'];
        $form['elements']['category_b']['defaultvalue'] = $licences['b'];
        $form['elements']['category_be']['defaultvalue'] = $licences['be'];
        $form['elements']['category_c1']['defaultvalue'] = $licences['c1'];
        $form['elements']['category_c1e']['defaultvalue'] = $licences['c1e'];
        $form['elements']['category_c']['defaultvalue'] = $licences['c'];
        $form['elements']['category_ce']['defaultvalue'] = $licences['ce'];
        $form['elements']['category_d1']['defaultvalue'] = $licences['d1'];
        $form['elements']['category_d1e']['defaultvalue'] = $licences['d1e'];
        $form['elements']['category_d']['defaultvalue'] = $licences['d'];
        $form['elements']['category_de']['defaultvalue'] = $licences['de'];

        $form['elements']['id'] = array(
            'type' => 'hidden',
            'value' => $id,
        );
    }

    /**
     * Render method for Driving licence(s) Europass field
     */
    public function render_self() {
        $licences = unserialize($this->description);
        $renderhtml = '';
        foreach ($licences as $licence => $value) {
            if ($value <> null) {
                $renderhtml .= strtoupper($licence) . ', ';
            }
        }
        // Remove last comma and space (2 characters) from the string...
        return clean_html(substr($renderhtml, 0, -2));
    }

    /**
     * Method for Driving licence(s) used in Europass export
     */
    public function get_licences_for_export() {
        $licences = unserialize($this->description);
        $data = array();
        foreach ($licences as $licence => $value) {
            if ($value <> null) {
                $data[] = strtoupper($licence);
            }
        }
        return $data;
    }

}

class ArtefactTypeAdditionalinfo extends ArtefactTypeEuropassElement {

    public static function is_singular() {
        return false;
    }

    public function can_have_attachments() {
        return true;
    }

    public static function getoptions_categories() {
        static $categories;
        $categories = array(
            'honors_awards'  => get_string('honors_awards', 'artefact.europass'),
            'publications'   => get_string('publications', 'artefact.europass'),
            'citations'      => get_string('citations', 'artefact.europass'),
            'projects'       => get_string('projects', 'artefact.europass'),
            'memberships'    => get_string('memberships', 'artefact.europass'),
            'seminars'       => get_string('seminars', 'artefact.europass'),
            'conferences'    => get_string('conferences', 'artefact.europass'),
            'workshops'      => get_string('workshops', 'artefact.europass'),
            'references'     => get_string('references', 'artefact.europass'),
            'courses'        => get_string('courses', 'artefact.europass'),
            'certifications' => get_string('certifications', 'artefact.europass'),
        );
        uasort($categories, 'strcoll');
        return $categories;
    }

    public static function get_form_elements() {
        return array(
            'title' => array(
                'type' => 'select',
                'title' => get_string('category', 'artefact.europass'),
                'options' => self::getoptions_categories(),
                'rules' => array('required' => true),
            ),
            'description' => array(
                'type'  => 'wysiwyg',
                'rows'  => 20,
                'cols'  => 70,
                'title' => get_string('description', 'artefact.resume'),
                'rules' => array('maxlength' => 65536),
            ),
        );
    }

}


function langcompositeform_submit(Pieform $form, $values) {
    try {
        call_static_method(generate_artefact_class_name($values['compositetype']), 
            'process_compositeform', $form, $values);
    }
    catch (Exception $e) {
        $form->json_reply(PIEFORM_ERR, $e->getMessage());
    }
    $form->json_reply(PIEFORM_OK, get_string('compositesaved', 'artefact.europass')); // ?????
}

function langcompositeformedit_submit(Pieform $form, $values) {
    global $SESSION;

    $tabs = PluginArtefactEuropass::composite_tabs();
    $goto = get_config('wwwroot') . 'artefact/europass/';
    if (isset($tabs[$values['compositetype']])) {
        if ($values['compositetype'] == 'languagediploma' || $values['compositetype'] == 'languageexperience') {
            // Find language diploma's or linguistic experience's parent for redirect...
            $sql = 'SELECT aeo.id, aeo.artefact
                FROM {artefact_europass_otherlanguage} aeo 
                JOIN {artefact_europass_' . $values['compositetype'] . '} ar ON ar.languageid = aeo.id
                WHERE ar.id = ? AND ar.artefact = ?';
            $parent = get_record_sql($sql, array($values['id'], $values['artefact']));
            $goto .= 'viewcomposite.php?id=' . $parent->id . '&artefact=' . $parent->artefact;
            if ($values['compositetype'] == 'languagediploma') {
                $okmsg = get_string('languagediplomasaved', 'artefact.europass');
                $errmsg = get_string('languagediplomasavefailed', 'artefact.europass');
            } else {
                $okmsg = get_string('languageexperiencesaved', 'artefact.europass');
                $errmsg = get_string('languageexperiencesavefailed', 'artefact.europass');
            }
        } else {
            $goto .= $tabs[$values['compositetype']] . '.php';
            $okmsg = get_string('languagesaved', 'artefact.europass');
            $errmsg = get_string('languagesavefailed', 'artefact.europass');
        }
    }

    try {
        call_static_method(generate_artefact_class_name($values['compositetype']),
            'process_compositeform', $form, $values);
    }
    catch (Exception $e) {
        $SESSION->add_error_msg($errmsg);
        redirect($goto);
    }
    $SESSION->add_ok_msg($okmsg);
    redirect($goto);
}


function europassform_submit(Pieform $form, $values) {
    global $SESSION, $USER;

    if (isset($values['drivingform']) && $values['drivingform'] == true) {
        // Set driving licence values and serialize them...
        $values['drivinglicence'] = array(
            'AM'    => $values['AM'],
            'A1'    => $values['A1'],
            'A2'    => $values['A2'],
            'A'        => $values['A'],
            'B'        => $values['B'],
            'BE'    => $values['BE'],
            'B1'    => $values['B1'],
            'C'        => $values['C'],
            'CE'    => $values['CE'],
            'C1'    => $values['C1'],
            'C1E'    => $values['C1E'],
            'D'        => $values['D'],
            'DE'    => $values['DE'],
            'D1'    => $values['D1'],
            'D1E'    => $values['D1E']
        );
        $values['drivinglicence'] = serialize($values['drivinglicence']);
        // Remove elements with indexes from 0 to 13 from array = unused drivinglicences!
        $values = array_slice($values, 14);
    }

    $dbnow = db_format_timestamp(time());
    $artefact_types = ArtefactTypeEuropassElement::get_europass_artefact_types();
    foreach ($values as $key => $value) {
        if (!in_array($key, $artefact_types)) {
            continue;
        }
        if (record_exists('artefact', 'artefacttype', $key, 'owner', $USER->get('id'))) {
            update_record('artefact', (object) array(
                'description' => $value,
                'mtime' => $dbnow,
                'atime' => $dbnow,
            ), (object) array(
                'artefacttype' => $key,
                'owner' => $USER->get('id'),
            ));
        }
        else {
            insert_record('artefact', (object) array(
                'artefacttype' => $key,
                'owner'        => $USER->get('id'),
                // PostgreSQL won't work without it, MySQL will...
                'author'       => $USER->get('id'),
                'title'        => get_string($key),
                'description'  => $value,
                'ctime'        => $dbnow,
                'mtime'        => $dbnow,
                'atime'        => $dbnow,
            ));
        }
    }

    $SESSION->add_ok_msg(get_string('europassartefactsaved', 'artefact.europass'));
    redirect(get_config('wwwroot'). 'artefact/europass/' . $values['redirect'] . '.php');
}   


/*************************************
 * Helper functions that will return *
 * locale data or drop-down options  *
 *************************************/

// Get array of locales (= options), which are
// supported by Europass CV and LP creation tools
function getoptions_locales() {
    return array(
        'bg',
        'cs',
        'da',
        'de',
        'et',
        'el',
        'en',
        'es',
        'fr',
        'hr',
        'is',
        'it',
        'lv',
        'lt',
        'hu',
        'mk',
        'mt',
        'nl',
        'no',
        'pl',
        'pt',
        'ro',
        'sk',
        'sl',
        'fi',
        'sv',
        'tr',
    );
}

// Get array of locales (= options), which are
// supported by Europass CV and LP creation tools
function getoptions_full_locales() {
    return array(
        'bg.utf8' => get_string('locale.bg_BG', 'artefact.europass'),
        'cs.utf8' => get_string('locale.cs_CZ', 'artefact.europass'),
        'da.utf8' => get_string('locale.da_DK', 'artefact.europass'),
        'de.utf8' => get_string('locale.de_DE', 'artefact.europass'),
        'et.utf8' => get_string('locale.et_EE', 'artefact.europass'),
        'el.utf8' => get_string('locale.el_GR', 'artefact.europass'),
        'en.utf8' => get_string('locale.en_GB', 'artefact.europass'),
        'es.utf8' => get_string('locale.es_ES', 'artefact.europass'),
        'fr.utf8' => get_string('locale.fr_FR', 'artefact.europass'),
        'hr.utf8' => get_string('locale.hr_HR', 'artefact.europass'),
        'is.utf8' => get_string('locale.is_IS', 'artefact.europass'),
        'it.utf8' => get_string('locale.it_IT', 'artefact.europass'),
        'lv.utf8' => get_string('locale.lv_LV', 'artefact.europass'),
        'lt.utf8' => get_string('locale.lt_LT', 'artefact.europass'),
        'hu.utf8' => get_string('locale.hu_HU', 'artefact.europass'),
        'mk.utf8' => get_string('locale.mk_MK', 'artefact.europass'),
        'mt.utf8' => get_string('locale.mt_MT', 'artefact.europass'),
        'nl.utf8' => get_string('locale.nl_NL', 'artefact.europass'),
        'no.utf8' => get_string('locale.no_NO', 'artefact.europass'),
        'pl.utf8' => get_string('locale.pl_PL', 'artefact.europass'),
        'pt.utf8' => get_string('locale.pt_PT', 'artefact.europass'),
        'ro.utf8' => get_string('locale.ro_RO', 'artefact.europass'),
        'sk.utf8' => get_string('locale.sk_SK', 'artefact.europass'),
        'sl.utf8' => get_string('locale.sl_SI', 'artefact.europass'),
        'fi.utf8' => get_string('locale.fi_FI', 'artefact.europass'),
        'sv.utf8' => get_string('locale.sv_SE', 'artefact.europass'),
        'tr.utf8' => get_string('locale.tr_TR', 'artefact.europass'),
    );
}

// Set locale according to Mahara's default (selected) language
function set_default_locale($l) {
    switch ($l) {
        case 'bg.utf8': $locale = 'bg'; break;
        case 'cs.utf8': $locale = 'cs'; break;
            case 'fo.utf8': // if Faroese, then set to Danish
        case 'da.utf8': $locale = 'da'; break;
        case 'de.utf8': $locale = 'de'; break;
        case 'el.utf8': $locale = 'el'; break;
            case 'an.utf8': // if Aragonese, then set to Spanish
            case 'ca.utf8': // if Catalan/Valencian, then set to Spanish
            case 'eu.utf8': // if Basque, then set to Spanish
            case 'gl.utf8': // if Galician, then set to Spanish
            case 'oc.utf8': // if Occitan, then set to Spanish
        case 'es.utf8': $locale = 'es'; break;
        case 'et.utf8': $locale = 'et'; break;
        case 'fi.utf8': $locale = 'fi'; break;
            case 'br.utf8': // if Breton, then set to French
            case 'co.utf8': // if Corsican, then set to French
            case 'wa.utf8': // if Wallon, then set to French
        case 'fr.utf8': $locale = 'fr'; break;
        case 'hr.utf8': $locale = 'hr'; break;
        case 'hu.utf8': $locale = 'hu'; break;
        case 'is.utf8': $locale = 'is'; break;
            case 'sc.utf8': // if Sardinian, then set to Italian
        case 'it.utf8': $locale = 'it'; break;
        case 'lt.utf8': $locale = 'lt'; break;
        case 'lv.utf8': $locale = 'lv'; break;
        case 'mk.utf8': $locale = 'mk'; break;
        case 'mt.utf8': $locale = 'mt'; break;
            case 'fy.utf8': // if West Frisian, then set to Dutch
            case 'li.utf8': // if Limburgish, then set to Dutch
        case 'nl.utf8': $locale = 'nl'; break;
            case 'nb.utf8': // if Norwegian (Bokmål), then set to Norwegian
            case 'nn.utf8': // if Norwegian (Nynorsk), then set to Norwegian
        case 'no.utf8': $locale = 'no'; break;
        case 'pl.utf8': $locale = 'pl'; break;
        case 'pt.utf8': $locale = 'pt'; break;
        case 'ro.utf8': $locale = 'ro'; break;
        case 'sk.utf8': $locale = 'sk'; break;
        case 'sl.utf8': $locale = 'sl'; break;
        case 'sv.utf8': $locale = 'sv'; break;
        case 'tr.utf8': $locale = 'tr'; break;
            case 'kw.utf8': // if Cornish, then set to English
            case 'cy.utf8': // if Welsh, then set to English
        default: $locale = 'en';
    }
    return $locale;
}

// Get Mahara lang folder name according to selected locale
function get_lang_from_locale($l) {
    switch ($l) {
        case 'bg': $locale = 'bg.utf8'; break;
        case 'cs': $locale = 'cs.utf8'; break;
        case 'da': $locale = 'da.utf8'; break;
        case 'de': $locale = 'de.utf8'; break;
        case 'el': $locale = 'el.utf8'; break;
        case 'es': $locale = 'es.utf8'; break;
        case 'et': $locale = 'et.utf8'; break;
        case 'fi': $locale = 'fi.utf8'; break;
        case 'fr': $locale = 'fr.utf8'; break;
        case 'hr': $locale = 'hr.utf8'; break;
        case 'hu': $locale = 'hu.utf8'; break;
        case 'is': $locale = 'is.utf8'; break;
        case 'it': $locale = 'it.utf8'; break;
        case 'lt': $locale = 'lt.utf8'; break;
        case 'lv': $locale = 'lv.utf8'; break;
        case 'mk': $locale = 'mk.utf8'; break;
        case 'mt': $locale = 'mt.utf8'; break;
        case 'nl': $locale = 'nl.utf8'; break;
        case 'no': $locale = 'no.utf8'; break;
        case 'pl': $locale = 'pl.utf8'; break;
        case 'pt': $locale = 'pt.utf8'; break;
        case 'ro': $locale = 'ro.utf8'; break;
        case 'sk': $locale = 'sk.utf8'; break;
        case 'sl': $locale = 'sl.utf8'; break;
        case 'sv': $locale = 'sv.utf8'; break;
        case 'tr': $locale = 'tr.utf8'; break;
        default: $locale = 'en.utf8';
    }
    return $locale;
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

function getoptions_lang_levels() {
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

function getoptions_comp_levels() {
    static $levels;
    if (!empty($levels)) {
        return $levels;
    }
    $level = array(
        'A',
        'B',
        'C',
    );

    foreach ($level as $l) {
        $levels[$l] = get_string("digitalcompetence-level.{$l}", "artefact.europass");
    };
    return $levels;
}


function add_europass_attachment($attachmentid) {
    global $artefact;
    if ($artefact) {
        $artefact->attach($attachmentid);
    }
}

function delete_europass_attachment($attachmentid) {
    global $artefact;
    if ($artefact) {
        $artefact->detach($attachmentid);
    }
}

/*************************************
 * Helper functions that will return *
 * different parts of Europass data  *
 *************************************/

function get_document_information($doctypes=array('ecv'), $logo=true, $userid=null) {
    global $USER;
    if ($userid == null) {
        $userid = $USER->get('id');
    }

    // Get created date (= date when user was created)
    // and format it according to ISO 8601 date format.
    $date = get_field_sql("SELECT \"ctime\" FROM {artefact} WHERE \"owner\" = ? ORDER BY \"ctime\" LIMIT 1", array($userid));
    $created = date("c", strtotime($date));

    // Get updated date (= current date of document generation)
    // and format it according to ISO 8601 date format.
    $updated = date("c", time());

    if (in_array('ecv', $doctypes)) {
        $type = 'ECV';
        if (in_array('esp', $doctypes)) {
            $type = 'ECV_ESP';
        }
        $bundle = null;
        if (in_array('elp', $doctypes)) {
            $bundle = 'ELP';
        }
    }
    else {
        $bundle = null;
        if (in_array('elp', $doctypes) && in_array('esp', $doctypes)) {
            $type = 'ELP';
            $bundle = 'ESP';
        }
        if (in_array('elp', $doctypes) && !in_array('esp', $doctypes)) {
            $type = 'ELP';
        }
        if (!in_array('elp', $doctypes) && in_array('esp', $doctypes)) {
            $type = 'ESP';
        }
    }

    $return = array(
        'DocumentType' => $type,
        'CreationDate' => $created,
        'LastUpdateDate' => $updated,
        'XSDVersion' => 'V3.3',
        'Generator' => 'Mahara',
        'Comment' => 'Europass portfolio dinamically created from Mahara e-portfolio service.',
        'EuropassLogo' => $logo,
    );
    if (!empty($bundle)) {
        $return['DocumentBundle'] = array($bundle);
    }
    return $return;
}

function get_print_preferences($doctypes=array('ecv'), $dateformat='numeric/long', $userid=null) {
    global $USER;
    if ($userid == null) {
        $userid = $USER->get('id');
    }

    // Get user's Europass prefeences
    $prefs = unserialize($USER->get_account_preference('europassprefs'));
    if (!empty($prefs['personname']) && $prefs['personname'] == 21) {
        $personname = 'Surname FirstName';
    } else {
        $personname = 'FirstName Surname';
    }
    if (!empty($prefs['learnerinfo']) && $prefs['learnerinfo'] == 1243567) {
        $displayorder = 'Identification Headline Education WorkExperience Skills Achievement ReferenceTo';
    } else {
        $displayorder = 'Identification Headline WorkExperience Education Skills Achievement ReferenceTo';
    }

    $return = array(
        'ECV' => array(
            array(
                'name' => 'LearnerInfo.Identification.PersonName',
                'show' => true,
                'order' => $personname,
            ),
            array(
                'name' => 'LearnerInfo.Identification.Demographics.Birthdate',
                'show' => true,
                'format' => $dateformat,
            ),
            array(
                'name' => 'LearnerInfo',
                'show' => true,
                'order' => $displayorder,
            ),
        )
    );

    // Add Employment printing preferences
    $id = get_field('artefact', 'id', 'artefacttype', 'employmenthistory', 'owner', $userid);
    if ($id !== false) {
        $count = count_records_select('artefact_resume_employmenthistory', 'artefact=?', array($id));
        for ($i = 0; $i < $count; $i++) {
            $return['ECV'][] = array(
                'name' => 'LearnerInfo.WorkExperience[' . $i . '].Period',
                'show' => true,
                'format' => $dateformat,
            );
        }
    }

    // Add Education printing preferences
    $id = get_field('artefact', 'id', 'artefacttype', 'educationhistory', 'owner', $userid);
    if ($id !== false) {
        $count = count_records_select('artefact_resume_educationhistory', 'artefact=?', array($id));
        for ($i = 0; $i < $count; $i++) {
            $return['ECV'][] = array(
                'name' => 'LearnerInfo.Education[' . $i . '].Period',
                'show' => true,
                'format' => $dateformat,
            );
        }
    }

    if (in_array('esp', $doctypes)) {
        $return['ESP'] = $return['ECV'];
    }

    if (in_array('elp', $doctypes)) {
        $return['ELP'] = array(
            array(
                'name' => 'LearnerInfo.Identification.PersonName',
                'show' => true,
                'order' => $personname,
            ),
            array(
                'name' => 'LearnerInfo.CEFLanguageLevelsGrid',
                'show' => true,
            ),
            array(
                'name' => 'LearnerInfo',
                'show' => true,
                'order' => 'Identification Skills ReferenceTo',
            ),
        );

        $artefactids = get_column_sql("SELECT id FROM {artefact} WHERE artefacttype='otherlanguage' AND owner=$userid");
        $idstr = join(',', array_map('intval', $artefactids));
        if (!empty($artefactids)) {
            $languages = get_records_select_array('artefact_europass_otherlanguage', 'artefact IN (' . $idstr . ')');
        }
        // Add language certificate and experience count for each language
        $i = 0;
        foreach ($languages as $lang) {
            $cert = count_records_select('artefact', 'artefacttype=\'languagediploma\' AND parent=?', array($lang->artefact));
            $xper = count_records_select('artefact', 'artefacttype=\'languageexperience\' AND parent=?', array($lang->artefact));

            if ($cert > 0) {
                for ($j = 0; $j < $cert; $j++) {
                    $return['ELP'][] = array(
                        'name' => 'LearnerInfo.Skills.Linguistic.ForeignLanguage[' . $i . '].Certificate[' . $j . '].Date',
                        'show' => true,
                        'format' => $dateformat,
                    );
                }
            } else {
                $return['ELP'][] = array(
                    'name' => 'LearnerInfo.Skills.Linguistic.ForeignLanguage[' . $i . '].Certificate[0].Date',
                    'show' => false,
                    'format' => $dateformat,
                );
            }

            if ($xper > 0) {
                for ($j = 0; $j < $xper; $j++) {
                    $return['ELP'][] = array(
                        'name' => 'LearnerInfo.Skills.Linguistic.ForeignLanguage[' . $i . '].Experience[' . $j . '].Period',
                        'show' => true,
                        'format' => $dateformat,
                    );
                }
            } else {
                $return['ELP'][] = array(
                    'name' => 'LearnerInfo.Skills.Linguistic.ForeignLanguage[' . $i . '].Experience[0].Period',
                    'show' => false,
                    'format' => $dateformat,
                );
            }

            $i++;
        }
    }

    return $return;
}

function get_personal_information($profilepic=false, $export=false, $userid=null) {
    global $USER;
    if ($userid == null) {
        $userid = $USER->get('id');
    }

    $data = array();

    // User's Profile information
    $fields = call_static_method('ArtefactTypeProfile', 'get_all_fields');
    $profile = get_records_select_array('artefact', "owner=? AND artefacttype IN (" . join(",", array_map(create_function('$a','return db_quote($a);'), array_keys($fields))) . ")", array($userid));
    if ($profile) {
        foreach ($profile as $field) {
            if ($field->artefacttype == 'socialprofile') {
                if (in_array($field->note, array('aim', 'icq', 'skype', 'yahoo'))) {
                    switch ($field->note) {
                        case 'aim':
                            $link = 'aim:goim?screenname='.$field->title;
                            break;
                        case 'icq':
                            $link = 'http://www.icq.com/people/'.$field->title;
                            break;
                        case 'skype':
                            $link = 'skype:'.$field->title.'?call';
                            break;
                        case 'yahoo':
                            $link = 'ymsgr:chat?'.$field->title;
                            break;
                    }
                    $data['socialprofile'][] = array(
                        'desc'  => $field->description,
                        'title' => $field->title,
                        'link'  => $link
                    );
                }
            }
            // All other fields, regardless of Mahara version
            else {
                $data[$field->artefacttype] = $field->title;
            }
        }
    }
    $data['email'] = get_field('artefact_internal_profile_email', 'email', 'owner', $userid, 'principal', true);
    if (array_key_exists('socialprofile', $data)) {
        $data['firstprofile'] = $data['socialprofile'][0]['desc'];
    }

    // User's Personal information
    $resume = null;
    try {
        $resume = artefact_instance_from_type('personalinformation');
    }
    catch (Exception $e) { }
    if ($resume) {
        $values = $resume->get('composites');
        unset($values['artefact']);
        unset($values['visastatus']);
        unset($values['maritalstatus']);
        if ($resume) {
            foreach ($values as $key => $value) {
                if ($key == 'dateofbirth') {
                    // See: artefact/resume/index.php about adding 3600 to dateofbirth
                    $data[$key] = format_date($value+3600, 'strftimedate');
                }
                else {
                    $data[$key] = $value;
                }
            }
        }
    }
    // Construct user's portfolio URL address
    $data['portfolio'] = get_config('wwwroot') . 'user/view.php?id=' . $userid;

    if (!$export) {
        return $data;
    }


    // Instant Messaging services
    $messaging = array();
    if (!empty($data['socialprofile'])) {
        foreach ($data['socialprofile'] as $im) {
            $messaging[] = array(
                'Contact' => $im['title'],
                'Use' => array('Code' => strtolower($im['desc'])),
            );
        }
    }

    // Birthdate
    $dob = array('year' => null, 'month' => null, 'day' => null);
    if (!empty($data['dateofbirth'])) {
        $dob = date_parse($data['dateofbirth']);
    }

    $return = array(
        'PersonName' => array(
            'FirstName' => $data['firstname'],
            'Surname' => $data['lastname'],
        ),
        'ContactInfo' => array(
            'Address' => array(
                'Contact' => array(
                    'AddressLine' => (!empty($data['address']) ? $data['address'] : null),
                    'PostalCode' => null,
                    'Municipality' => (!empty($data['city']) ? $data['city'] : null),
                    'Country' => array(
                        'Code' => (!empty($data['country']) ? strtoupper($data['country']) : null),
                    ),
                ),
            ),
            'Email' => array(
                'Contact' => $data['email'],
            ),
            'Telephone' => array(
                array(
                    'Contact' => (!empty($data['homenumber']) ? $data['homenumber'] : null),
                    'Use' => array('Code' => 'home'),
                ),
                array(
                    'Contact' => (!empty($data['mobilenumber']) ? $data['mobilenumber'] : null),
                    'Use' => array('Code' => 'mobile'),
                ),
                array(
                    'Contact' => (!empty($data['businessnumber']) ? $data['businessnumber'] : null),
                    'Use' => array('Code' => 'work'),
                ),
            ),
            'Website' => array(
                array(
                    'Contact' => (!empty($data['personalwebsite']) ? $data['personalwebsite'] : null),
                    'Use' => array('Code' => 'personal'),
                ),
                array(
                    'Contact' => (!empty($data['officialwebsite']) ? $data['officialwebsite'] : null),
                    'Use' => array('Code' => 'business'),
                ),
                array(
                    'Contact' => (!empty($data['blogaddress']) ? $data['blogaddress'] : null),
                    'Use' => array('Code' => 'blog'),
                ),
                array(
                    'Contact' => (!empty($data['portfolio']) ? $data['portfolio'] : null),
                    'Use' => array('Code' => 'portfolio'),
                ),
            ),
            'InstantMessaging' => $messaging,
        ),
        'Demographics' => array(
            'Birthdate' => array(
                'Year' => $dob['year'],
                'Month' => $dob['month'],
                'Day' => $dob['day'],
            ),
            'Gender' => array(
                'Code' => (!empty($data['gender']) ? strtoupper($data['gender'][0]) : null),
            ),
            'Nationality' => array(
                array('Label' => (!empty($data['citizenship']) ? $data['citizenship'] : null)),
            ),
        ),
    );

    // Get profile picture and use it as photo
    $profileicon = get_record_sql('
        SELECT u.profileicon AS id, f.filetype, i.width, i.height
        FROM {usr} u
        LEFT OUTER JOIN {artefact_file_files} f ON u.profileicon = f.artefact
        LEFT OUTER JOIN {artefact_file_image} i ON u.profileicon = i.artefact
        WHERE u.id = ?', array($userid));
    if ($profilepic && $profileicon) {
        $size = get_imagesize_parameters();
        $file = artefact_instance_from_id($profileicon->id);
        $path = $file->get_path($size);
        $data = file_get_contents($path);
        $return['Photo'] = array(
            'MimeType' => $profileicon->filetype,
            'Data' => base64_encode($data), // base-64 encoded image
            'Metadata' => array(
                array(
                    'Key' => 'dimension',
                    'Value' => $profileicon->width . 'x' . $profileicon->height,
                ),
            ),
        );
    }

    return $return;
}

function get_education_and_training($export=false, $userid=null) {
    global $USER;
    if ($userid == null) {
        $userid = $USER->get('id');
    }

    $data = array();
    $id = get_field('artefact', 'id', 'artefacttype', 'educationhistory', 'owner', $userid);
    if ($id !== false) {
        $data = get_records_select_array('artefact_resume_educationhistory', "artefact=?", array($id));
    }

    if (!$export) {
        return $data;
    }


    $return = array();
    foreach ($data as $item) {
        $startdate = parse_mahara_date($item->startdate);
        $enddate = parse_mahara_date($item->enddate);
        $return[] = array(
            'Period' => array(
                'From' => array(
                    'Year' => $startdate['year'],
                    'Month' => $startdate['month'],
                    'Day' => $startdate['day'],
                ),
                'To' => array(
                    'Year' => $enddate['year'],
                    'Month' => $enddate['month'],
                    'Day' => $enddate['day'],
                ),
                'Current' => (empty($enddate) ? true : false),
            ),
            'Title' => $item->qualname,
            'Level' => array(
                'Label' => $item->qualtype,
            ),
            'Activities' => $item->qualdescription,
            'Organisation' => array(
                'Name' => $item->institution,
                'ContactInfo' => array(
                    'Address' => array(
                        'Contact' => array(
                            'AddressLine' => $item->institutionaddress,
                        ),
                    ),
                ),
            ),
        );
    }

    return $return;
}

function get_work_experience($export=false, $userid=null) {
    global $USER;
    if ($userid == null) {
        $userid = $USER->get('id');
    }

    $data = array();
    $id = get_field('artefact', 'id', 'artefacttype', 'employmenthistory', 'owner', $userid);
    if ($id !== false) {
        $data = get_records_select_array('artefact_resume_employmenthistory', "artefact=?", array($id));
    }

    if (!$export) {
        return $data;
    }


    $return = array();
    foreach ($data as $item) {
        $startdate = parse_mahara_date($item->startdate);
        $enddate = parse_mahara_date($item->enddate);
        $return[] = array(
            'Period' => array(
                'From' => array(
                    'Year' => $startdate['year'],
                    'Month' => $startdate['month'],
                    'Day' => $startdate['day'],
                ),
                'To' => array(
                    'Year' => $enddate['year'],
                    'Month' => $enddate['month'],
                    'Day' => $enddate['day'],
                ),
                'Current' => (empty($enddate) ? true : false),
            ),
            'Position' => array(
                'Label' => $item->jobtitle,
            ),
            'Activities' => $item->positiondescription,
            'Employer' => array(
                'Name' => $item->employer,
                'ContactInfo' => array(
                    'Address' => array(
                        'Contact' => array(
                            'AddressLine' => $item->employeraddress,
                        ),
                    ),
                ),
            ),
        );
    }

    return $return;
}

function get_mother_tongues($export=false, $lang=null, $userid=null) {
    global $USER;
    if ($userid == null) {
        $userid = $USER->get('id');
    }
    if ($lang == null) {
        $lang = get_config('lang');
    }

    $data = array();
    $data = get_records_select_array('artefact', 'artefacttype=? AND owner=?', array('mothertongue', $userid));
    // Add translated language name for each mother tongue
    foreach ($data as $language) {
        $language->label = get_string_from_language($lang, 'language.' . $language->description, 'artefact.europass');
    }

    if (!$export) {
        return $data;
    }


    $return = array();
    foreach ($data as $language) {
        $return[] = array(
            'Description' => array(
                'Code' => strtolower($language->description)
            ),
        );
    }

    return $return;
}

function get_other_languages($export=false, $lang=null, $userid=null) {
    global $USER;
    if ($userid == null) {
        $userid = $USER->get('id');
    }
    if ($lang == null) {
        $lang = get_config('lang');
    }

    $data = array();
    $artefactids = get_column_sql("SELECT id FROM {artefact} WHERE artefacttype='otherlanguage' AND owner=$userid");
    $idstr = join(',', array_map('intval', $artefactids));
    if (!empty($artefactids)) {
        $data = get_records_select_array('artefact_europass_otherlanguage', 'artefact IN (' . $idstr . ')');
    }
    // Add translated language name for each other language
    foreach ($data as $language) {
        $language->label = get_string_from_language($lang, 'language.' . $language->language, 'artefact.europass');
    }

    // Add language certificate and experience info to each language
    foreach ($data as $language) {
        $language->certificate = array();
        if ($artefactids = get_column_sql("SELECT id FROM {artefact} WHERE artefacttype='languagediploma' AND parent=" . $language->artefact)) {
            $idstr = join(',', array_map('intval', $artefactids));
            $language->certificate = get_records_select_array('artefact_europass_certificate', 'artefact IN (' . $idstr . ')');
        }
        $language->experience = array();
        if ($artefactids = get_column_sql("SELECT id FROM {artefact} WHERE artefacttype='languageexperience' AND parent=" . $language->artefact)) {
            $idstr = join(',', array_map('intval', $artefactids));
            $language->experience = get_records_select_array('artefact_europass_languageexperience', 'artefact IN (' . $idstr . ')');
        }
    }

    if (!$export) {
        return $data;
    }


    $return = array();
    foreach ($data as $language) {
        $item = array(
            'Description' => array(
                'Code' => strtolower($language->language)
            ),
            'ProficiencyLevel' => array(
                'Listening' => $language->listening,
                'Reading' => $language->reading,
                'SpokenInteraction' => $language->spokeninteraction,
                'SpokenProduction' => $language->spokenproduction,
                'Writing' => $language->writing,
            ),
        );
        // Add foreign language certificates
        if (!empty($language->certificate)) {
            $certificates = array();
            foreach ($language->certificate as $cert) {
                $certdate = date_parse(date('Y-m-d H:i:s', $cert->certificatedate));
                $certificates[] = array(
                    'Title' => $cert->certificate,
                    'AwardingBody' => $cert->awardingbody,
                    'Date' => array(
                        'Year' => $certdate['year'],
                        'Month' => $certdate['month'],
                        'Day' => $certdate['day'],
                    ),
                    'Level' => $cert->europeanlevel,
                );
            }
            $item['Certificate'] = $certificates;
        }
        // Add foreign language experiences
        if (!empty($language->experience)) {
            $experiences = array();
            foreach ($language->experience as $exp) {
                $startdate = date_parse(date('Y-m-d H:i:s', $exp->startdate));
                $enddate = date_parse(date('Y-m-d H:i:s', $exp->enddate));
                $experiences[] = array(
                    'Period' => array(
                        'From' => array(
                            'Year' => $startdate['year'],
                            'Month' => $startdate['month'],
                            'Day' => $startdate['day'],
                        ),
                        'To' => array(
                            'Year' => $enddate['year'],
                            'Month' => $enddate['month'],
                            'Day' => $enddate['day'],
                        ),
                        'Current' => (!empty($exp->enddate) ? false : true),
                    ),
                    'Description' => $exp->experience,
                );
            }
            $item['Experience'] = $experiences;
        }
        $return[] = $item;
    }

    return $return;
}

function get_digital_competences($export=false, $userid=null) {
    global $USER;
    if ($userid == null) {
        $userid = $USER->get('id');
    }

    $data = array();
    $id = get_field('artefact', 'id', 'artefacttype', 'digitalcompetence', 'owner', $userid);
    if ($id !== false) {
        $data = get_record('artefact_europass_digitalcompetence', 'artefact', $id);
        if ($data) {
            $data->description = get_field('artefact', 'description', 'id', $id);

            $certificateids = get_column_sql("SELECT id FROM {artefact} WHERE artefacttype='digitaldiploma' AND parent=$id");
            $certstr = join(',', array_map('intval', $certificateids));
            $data->certificate = array();
            if (!empty($certstr)) {
                $data->certificate = get_records_select_array('artefact_europass_certificate', 'artefact IN (' . $certstr . ')');
            }
        }
    }

    if (!$export) {
        return $data;
    }


    $return = array(
        'Description' => (!empty($data->description) ? $data->description : null),
        'ProficiencyLevel' => array(
            'Information' => (!empty($data->information) ? $data->information : null),
            'Communication' => (!empty($data->communication) ? $data->communication : null),
            'ContentCreation' => (!empty($data->contentcreation) ? $data->contentcreation : null),
            'Safety' => (!empty($data->safety) ? $data->safety : null),
            'ProblemSolving' => (!empty($data->problemsolving) ? $data->problemsolving : null),
        ),
    );
    // Add digital competence certificates
    if (!empty($data->certificate)) {
        $certificates = array();
        foreach ($data->certificate as $cert) {
            //$certdate = date_parse(date('Y-m-d H:i:s', $cert->certificatedate));
            $certificates[] = array(
                'Title' => $cert->certificate,
                //'AwardingBody' => $cert->awardingbody,
                //'Date' => array(
                //    'Year' => $certdate['year'],
                //    'Month' => $certdate['month'],
                //    'Day' => $certdate['day'],
                //),
                //'Level' => $cert->europeanlevel,
            );
        }
        $return['Certificate'] = $certificates;
    }

    return $return;
}

function get_personal_skills($export=false, $userid=null) {
    global $USER;
    if ($userid == null) {
        $userid = $USER->get('id');
    }

    $mothertongue = get_mother_tongues($export);
    $otherlanguage = get_other_languages($export);
    $digital = get_digital_competences($export);

    $data = array(
        'mothertongue' => $mothertongue,
        'otherlanguage' => $otherlanguage,
        'digital' => $digital,
    );
    $skills = PluginArtefactEuropass::get_europass_skills();
    foreach ($skills as $skill) {
        $id = get_field('artefact', 'id', 'artefacttype', $skill, 'owner', $userid);
        if ($id !== false) {
            $artefact = artefact_instance_from_id($id);
            $data['skills'][$skill]['id'] = $artefact->get('id');
            $data['skills'][$skill]['type'] = $skill;        
            $data['skills'][$skill]['desc'] = $artefact->render_self();
            if ($skill == 'drivinglicence') {
                $data['skills'][$skill]['licences'] = $artefact->get_licences_for_export();
            }
        }
        else {
            $data['skills'][$skill]['id'] = 0;
            $data['skills'][$skill]['type'] = $skill;
            $data['skills'][$skill]['desc'] = '';
        }
    }

    if (!$export) {
        return $data;
    }


    $return = array(
        'Linguistic' => array(
            'MotherTongue' => $mothertongue,
            'ForeignLanguage' => $otherlanguage,
        ),
        'Communication' => $data['skills']['socialskill']['desc'],
        'Organisational' => $data['skills']['organisationalskill']['desc'],
        'Computer' => $digital,
        'Driving' => array(
            'Description' => $data['skills']['drivinglicence']['licences']
        ),
        'Other' => $data['skills']['otherskill']['desc'],
    );

    return $return;
}

function get_additional_information($export=false, $lang=null, $userid=null) {
    global $USER;
    if ($userid == null) {
        $userid = $USER->get('id');
    }
    if ($lang == null) {
        $lang = get_config('lang');
    }

    $data = array();
    $data = get_records_select_array('artefact', "artefacttype=?", array('additionalinfo'));
    if ($data) {
        // Add translated labels for each additional information
        foreach ($data as $item) {
            $item->label = get_string_from_language($lang, $item->title, 'artefact.europass');
        }
    }

    if (!$export) {
        return $data;
    }


    $return = array();
    if ($data) {
        foreach ($data as $item) {
            $return[] = array(
                'Title' => array(
                    'Code' => $item->title,
                ),
                'Description' => $item->description,
            );
        }
    }

    return $return;
}


/************************************************
 * Function to generate Europass in HTML format *
 ************************************************/

function generate_europass_html($doctypes=array('ecv'), $options=array(), $userid=null) {
    global $USER;
    if ($userid == null) {
        $userid = $USER->get('id');
    }

    $lang = (!empty($options['lang']) ? $options['lang'] : 'en.utf8');
    $embed = (!empty($options['embed']) ? $options['embed'] : true);
    $profilepic = (!empty($options['profilepic']) ? $options['profilepic'] : false);

    $labels = array(
        'personalinfo' => mb_strtoupper(get_string_from_language($lang, 'identification', 'artefact.europass')),
        'gender' => get_string_from_language($lang, 'identification-gender', 'artefact.europass'),
        'birthdate' => get_string_from_language($lang, 'identification-birthdate', 'artefact.europass'),
        'nationality' => get_string_from_language($lang, 'identification-nationality', 'artefact.europass'),
        'employment' => mb_strtoupper(get_string_from_language($lang, 'workexperience', 'artefact.europass')),
        'education' => mb_strtoupper(get_string_from_language($lang, 'education', 'artefact.europass')),
        'skills' => mb_strtoupper(get_string_from_language($lang, 'skills', 'artefact.europass')),
        'mothertongue' => get_string_from_language($lang, 'mothertongue', 'artefact.europass'),
        'otherlanguage' => get_string_from_language($lang, 'otherlanguage', 'artefact.europass'),
        'listening' => mb_strtoupper(get_string_from_language($lang, 'language-foreign-listening', 'artefact.europass')),
        'reading' => mb_strtoupper(get_string_from_language($lang, 'language-foreign-reading', 'artefact.europass')),
        'spokeninteraction' => mb_strtoupper(get_string_from_language($lang, 'language-foreign-spokeninteraction', 'artefact.europass')),
        'spokenproduction' => mb_strtoupper(get_string_from_language($lang, 'language-foreign-spokenproduction', 'artefact.europass')),
        'writing' => mb_strtoupper(get_string_from_language($lang, 'language-foreign-writing', 'artefact.europass')),
        'communicationskill' => get_string_from_language($lang, 'socialskill', 'artefact.europass'),
        'organisationalskill' => get_string_from_language($lang, 'organisationalskill', 'artefact.europass'),
        'jobrelatedskill' => get_string_from_language($lang, 'technicalskill', 'artefact.europass'),
        'otherskill' => get_string_from_language($lang, 'otherskill', 'artefact.europass'),
        'drivinglicence' => get_string_from_language($lang, 'drivinglicence', 'artefact.europass'),
        'digitalcompetence' => get_string_from_language($lang, 'digitalcompetence', 'artefact.europass'),
        'information' => mb_strtoupper(get_string_from_language($lang, 'digitalcompetence-information', 'artefact.europass')),
        'communication' => mb_strtoupper(get_string_from_language($lang, 'digitalcompetence-communication', 'artefact.europass')),
        'contentcreation' => mb_strtoupper(get_string_from_language($lang, 'digitalcompetence-contentcreation', 'artefact.europass')),
        'safety' => mb_strtoupper(get_string_from_language($lang, 'digitalcompetence-safety', 'artefact.europass')),
        'problemsolving' => mb_strtoupper(get_string_from_language($lang, 'digitalcompetence-problemsolving', 'artefact.europass')),
        'additionalinfo' => mb_strtoupper(get_string_from_language($lang, 'additionalinfo', 'artefact.europass')),
        'honors_awards' => get_string_from_language($lang, 'honors_awards', 'artefact.europass'),
        'publications' => get_string_from_language($lang, 'publications', 'artefact.europass'),
        'citations' => get_string_from_language($lang, 'citations', 'artefact.europass'),
        'projects' => get_string_from_language($lang, 'projects', 'artefact.europass'),
        'memberships' => get_string_from_language($lang, 'memberships', 'artefact.europass'),
        'seminars' => get_string_from_language($lang, 'seminars', 'artefact.europass'),
        'conferences' => get_string_from_language($lang, 'conferences', 'artefact.europass'),
        'workshops' => get_string_from_language($lang, 'workshops', 'artefact.europass'),
        'references' => get_string_from_language($lang, 'references', 'artefact.europass'),
        'courses' => get_string_from_language($lang, 'courses', 'artefact.europass'),
        'certifications' => get_string_from_language($lang, 'certifications', 'artefact.europass'),
        'languagepassport' => mb_strtoupper(get_string_from_language($lang, 'elp-tab', 'artefact.europass')),
        'selfassessment' => get_string_from_language($lang, 'self-assessment', 'artefact.europass'),
        'languagediplomas' => get_string_from_language($lang, 'language-diplomas', 'artefact.europass'),
        'diplomatitle' => mb_strtoupper(get_string_from_language($lang, 'diploma-title', 'artefact.europass')),
        'diplomainstitution' => mb_strtoupper(get_string_from_language($lang, 'diploma-awardingBody', 'artefact.europass')),
        'diplomadate' => mb_strtoupper(get_string_from_language($lang, 'diploma-date', 'artefact.europass')),
        'diplomalevel' => mb_strtoupper(get_string_from_language($lang, 'diploma-level', 'artefact.europass')),
        'languageexperience' => get_string_from_language($lang, 'language-experiences', 'artefact.europass'),
        'description' => mb_strtoupper(get_string_from_language($lang, 'experiences-description', 'artefact.europass')),
        'period' => mb_strtoupper(get_string_from_language($lang, 'experiences-period', 'artefact.europass')),
        'copyright' => get_string_from_language($lang, 'copyright', 'artefact.europass') . date('Y'),
    );

    $work = get_work_experience();
    foreach ($work as $w) {
        $w->startdate = get_year_from_mahara_date($w->startdate);
        $w->enddate = get_year_from_mahara_date($w->enddate);
    }
    $edu = get_education_and_training();
    foreach ($edu as $e) {
        $e->startdate = get_year_from_mahara_date($e->startdate);
        $e->enddate = get_year_from_mahara_date($e->enddate);
    }

    // Get profile picture and use it as photo
    $photo = null;
    $profileicon = get_record_sql('
        SELECT u.profileicon AS id, f.filetype, i.width, i.height
        FROM {usr} u
        LEFT OUTER JOIN {artefact_file_files} f ON u.profileicon = f.artefact
        LEFT OUTER JOIN {artefact_file_image} i ON u.profileicon = i.artefact
        WHERE u.id = ?', array($USER->get('id')));
    if ($profilepic && $profileicon) {
        $size = get_imagesize_parameters();
        $file = artefact_instance_from_id($profileicon->id);
        $path = $file->get_path($size);
        $data = file_get_contents($path);
        $photo = base64_encode($data); // base-64 encoded image
    }

    $smarty = smarty();
    $smarty->assign('embed', $embed); // false - only when exporting as standalone HTML file!
    $smarty->assign('text', $labels);
    $smarty->assign('ECV', in_array('ecv', $doctypes));
    $smarty->assign('ELP', in_array('elp', $doctypes));
    $smarty->assign('prefs', unserialize($USER->get_account_preference('europassprefs')));
    $smarty->assign('profilefields', get_personal_information());
    $smarty->assign('photo', $photo);
    $smarty->assign('education_data', $edu);
    $smarty->assign('employment_data', $work);
    $smarty->assign('skills', get_personal_skills());
    $smarty->assign('additionalinfo', get_additional_information());
    $smarty->assign('europasslang', $USER->get_account_preference('europasslang'));
    $html = $smarty->fetch('artefact:europass:html.tpl');

    return $html;
}

/******************************************
 * Helper functions to parse Mahara dates *
 ******************************************/

function get_month_name_abbreviations() {
    // https://www.loc.gov/aba/pcc/conser/conserhold/Mosabbr.html
    return array(
        // http://lh.2xlibre.net/locale/bg_BG/
        'янy'=>1, 'фeв'=>2, 'мap'=>3, 'aпp'=>4, 'мaй'=>5, 'юни'=>6, 'юли'=>7, 'aвг'=>8, 'ceп'=>9, 'oкт'=>10, 'нoe'=>11, 'дeк'=>12,
        'янyа'=>1, 'февp'=>2, 'мapт'=>3, 'aпpи'=>4, 'aвгу'=>8, 'ceпт'=>9, 'oкто'=>10, 'нoeм'=>11, 'дeке'=>12,
        // http://lh.2xlibre.net/locale/cs_CZ/
        'led'=>1, 'úno'=>2, 'bře'=>3, 'dub'=>4, 'kvě'=>5, 'čen'=>6, 'čec'=>7, 'srp'=>8, 'zář'=>9, 'říj'=>10, 'lis'=>11, 'pro'=>12,
        'lede'=>1, 'únor'=>2, 'břez'=>3, 'dube'=>4, 'květ'=>5, 'srpe'=>8, 'září'=>9, 'říje'=>10, 'list'=>11, 'pros'=>12,
        // http://lh.2xlibre.net/locale/da_DK/
        'jan'=>1, 'feb'=>2, 'mar'=>3, 'apr'=>4, 'maj'=>5, 'jun'=>6, 'jul'=>7, 'aug'=>8, 'sep'=>9, 'okt'=>10, 'nov'=>11, 'dec'=>12,
        'janu'=>1, 'febr'=>2, 'mart'=>3, 'apri'=>4, 'juni'=>6, 'juli'=>7, 'augu'=>8, 'sept'=>9, 'okto'=>10, 'nove'=>11, 'dece'=>12,
        // http://lh.2xlibre.net/locale/de_DE/
        'jan'=>1, 'feb'=>2, 'mär'=>3, 'apr'=>4, 'mai'=>5, 'jun'=>6, 'jul'=>7, 'aug'=>8, 'sep'=>9, 'okt'=>10, 'nov'=>11, 'dez'=>12,
        'janu'=>1, 'febr'=>2, 'märz'=>3, 'apri'=>4, 'juni'=>6, 'juli'=>7, 'augu'=>8, 'sept'=>9, 'okto'=>10, 'nove'=>11, 'deze'=>12,
        // http://lh.2xlibre.net/locale/el_GR/
        'ιανο'=>1, 'Φεβρ'=>2, 'μάρτ'=>3, 'απρί'=>4, 'μαιο'=>5, 'ιούν'=>6, 'ιούλ'=>7, 'αύγο'=>8, 'σεπτ'=>9, 'οκτώ'=>10, 'νοέµ'=>11, 'δεκέ'=>12,
        // http://lh.2xlibre.net/locale/en_GB/
        'jan'=>1, 'feb'=>2, 'mar'=>3, 'apr'=>4, 'may'=>5, 'jun'=>6, 'jul'=>7, 'aug'=>8, 'sep'=>9, 'oct'=>10, 'nov'=>11, 'dec'=>12,
        'janu'=>1, 'febr'=>2, 'marc'=>3, 'apri'=>4, 'june'=>6, 'july'=>7, 'augu'=>8, 'sept'=>9, 'octo'=>10, 'nove'=>11, 'dece'=>12,
        // http://lh.2xlibre.net/locale/es_ES/
        'ene'=>1, 'feb'=>2, 'mar'=>3, 'abr'=>4, 'may'=>5, 'jun'=>6, 'jul'=>7, 'ago'=>8, 'sep'=>9, 'oct'=>10, 'nov'=>11, 'dic'=>12,
        'ener'=>1, 'febr'=>2, 'marz'=>3, 'abri'=>4, 'mayo'=>5, 'juni'=>6, 'juli'=>7, 'agos'=>8, 'sept'=>9, 'octu'=>10, 'novi'=>11, 'dici'=>12,
        // http://lh.2xlibre.net/locale/et_EE/
        'jaan'=>1, 'veeb'=>2, 'märt'=>3, 'apri'=>4, 'apr'=>4, 'mai'=>5, 'juun'=>6, 'juul'=>7, 'augu'=>8, 'aug'=>8, 'sept'=>9, 'okto'=>10, 'okt'=>10, 'nove'=>11, 'nov'=>11, 'dets'=>12,
        // http://lh.2xlibre.net/locale/fi_FI/
        'tam'=>1, 'hel'=>2, 'maa'=>3, 'huh'=>4, 'tou'=>5, 'kes'=>6, 'hei'=>7, 'elo'=>8, 'syy'=>9, 'lok'=>10, 'mar'=>11, 'jou'=>12,
        'tamm'=>1, 'helm'=>2, 'maal'=>3, 'huht'=>4, 'touk'=>5, 'kesä'=>6, 'hein'=>7, 'elok'=>8, 'syys'=>9, 'loka'=>10, 'marr'=>11, 'joul'=>12,
        // http://lh.2xlibre.net/locale/fr_FR/
        'janv'=>1, 'févr'=>2, 'mars'=>3, 'avri'=>4, 'mai'=>5, 'juin'=>6, 'juil'=>7, 'août'=>8, 'sept'=>9, 'octo'=>10, 'oct'=>10, 'nove'=>11, 'nov'=>11, 'déce'=>12, 'déc'=>12,
        // http://lh.2xlibre.net/locale/hr_HR/
        'sij'=>1, 'vel'=>2, 'ožu'=>3, 'tra'=>4, 'svi'=>5, 'lip'=>6, 'srp'=>7, 'kol'=>8, 'ruj'=>9, 'lis'=>10, 'stu'=>11, 'pro'=>12,
        'sije'=>1, 'velj'=>2, 'ožuj'=>3, 'trav'=>4, 'svib'=>5, 'lipa'=>6, 'srpa'=>7, 'kolo'=>8, 'ruja'=>9, 'list'=>10, 'stud'=>11, 'pros'=>12,
        // http://lh.2xlibre.net/locale/hu_HU/
        'jan'=>1, 'feb'=>2, 'már'=>3, 'ápr'=>4, 'máj'=>5, 'jún'=>6, 'júl'=>7, 'aug'=>8, 'sze'=>9, 'okt'=>10, 'nov'=>11, 'dec'=>12,
        'janu'=>1, 'febr'=>2, 'márc'=>3, 'ápri'=>4, 'máju'=>5, 'júni'=>6, 'júli'=>7, 'augu'=>8, 'szep'=>9, 'októ'=>10, 'nove'=>11, 'dece'=>12,
        // http://lh.2xlibre.net/locale/is_IS/
        'jan'=>1, 'feb'=>2, 'mar'=>3, 'apr'=>4, 'maí'=>5, 'jún'=>6, 'júl'=>7, 'ágú'=>8, 'sep'=>9, 'okt'=>10, 'nóv'=>11, 'des'=>12,
        'janú'=>1, 'febr'=>2, 'mars'=>3, 'aprí'=>4, 'júní'=>6, 'júlí'=>7, 'ágús'=>8, 'sept'=>9, 'októ'=>10, 'nóve'=>11, 'dese'=>12,
        // http://lh.2xlibre.net/locale/it_IT/
        'gen'=>1, 'feb'=>2, 'mar'=>3, 'apr'=>4, 'mag'=>5, 'giu'=>6, 'lug'=>7, 'ago'=>8, 'set'=>9, 'ott'=>10, 'nov'=>11, 'dic'=>12,
        'genn'=>1, 'febb'=>2, 'marz'=>3, 'apri'=>4, 'magg'=>5, 'giug'=>6, 'lugl'=>7, 'agos'=>8, 'sett'=>9, 'otto'=>10, 'nove'=>11, 'dice'=>12,
        // http://lh.2xlibre.net/locale/lt_LT/
        'saus'=>1, 'sau'=>1, 'vasa'=>2, 'vas'=>2, 'kova'=>3, 'kov'=>3, 'bala'=>4, 'bal'=>4, 'gegu'=>5, 'geg'=>5, 'birž'=>6, 'bir'=>6, 'liep'=>7, 'lie'=>7, 'rugp'=>8, 'rgp'=>8, 'rugs'=>9, 'rgs'=>9, 'spal'=>10, 'spa'=>10, 'lapk'=>11, 'lap'=>11, 'gruo'=>12, 'grd'=>12,
        // http://lh.2xlibre.net/locale/lv_LV/
        'jan'=>1, 'feb'=>2, 'mar'=>3, 'apr'=>4, 'mai'=>5, 'jūn'=>6, 'jūl'=>7, 'aug'=>8, 'sep'=>9, 'okt'=>10, 'nov'=>11, 'dec'=>12,
        'janv'=>1, 'febr'=>2, 'mart'=>3, 'aprī'=>4, 'maij'=>5, 'jūni'=>6, 'jūli'=>7, 'augu'=>8, 'sept'=>9, 'okto'=>10, 'nove'=>11, 'dece'=>12,
        // http://lh.2xlibre.net/locale/mk_MK/
        'јан'=>1, 'фев'=>2, 'мар'=>3, 'апр'=>4, 'мај'=>5, 'јун'=>6, 'јул'=>7, 'авг'=>8, 'сеп'=>9, 'окт'=>10, 'ное'=>11, 'дек'=>12,
        'јану'=>1, 'февр'=>2, 'март'=>3, 'апри'=>4, 'јуни'=>6, 'јули'=>7, 'авгу'=>8, 'септ'=>9, 'окто'=>10, 'ноем'=>11, 'деке'=>12,
        // http://lh.2xlibre.net/locale/mt_MT/
        'jan'=>1, 'fra'=>2, 'mar'=>3, 'apr'=>4, 'mej'=>5, 'ġun'=>6, 'lul'=>7, 'aww'=>8, 'set'=>9, 'ott'=>10, 'nov'=>11, 'diċ'=>12,
        'jann'=>1, 'frar'=>2, 'marz'=>3, 'apri'=>4, 'mejj'=>5, 'ġunj'=>6, 'lulj'=>7, 'awwi'=>8, 'sett'=>9, 'ottu'=>10, 'nove'=>11, 'diċe'=>12,
        // http://lh.2xlibre.net/locale/nl_NL/
        'jan'=>1, 'feb'=>2, 'maa'=>3, 'mrt'=>3, 'apr'=>4, 'mei'=>5, 'jun'=>6, 'jul'=>7, 'aug'=>8, 'sep'=>9, 'okt'=>10, 'nov'=>11, 'dec'=>12,
        'janu'=>1, 'febr'=>2, 'maar'=>3, 'apri'=>4, 'juni'=>6, 'juli'=>7, 'augu'=>8, 'sept'=>9, 'okto'=>10, 'nove'=>11, 'dece'=>12,
        // http://lh.2xlibre.net/locale/nb_NO/
        'jan'=>1, 'feb'=>2, 'mar'=>3, 'apr'=>4, 'mai'=>5, 'jun'=>6, 'jul'=>7, 'aug'=>8, 'sep'=>9, 'okt'=>10, 'nov'=>11, 'des'=>12,
        'janu'=>1, 'febr'=>2, 'mars'=>3, 'apri'=>4, 'juni'=>6, 'juli'=>7, 'augu'=>8, 'sept'=>9, 'okto'=>10, 'nove'=>11, 'dese'=>12,
        // http://lh.2xlibre.net/locale/pl_PL/
        'sty'=>1, 'lut'=>2, 'mar'=>3, 'kwi'=>4, 'maj'=>5, 'cze'=>6, 'lip'=>7, 'sie'=>8, 'wrz'=>9, 'paź'=>10, 'lis'=>11, 'gru'=>12,
        'styc'=>1, 'luty'=>2, 'marz'=>3, 'kwie'=>4, 'czer'=>6, 'lipi'=>7, 'sier'=>8, 'wrze'=>9, 'paźd'=>10, 'list'=>11, 'grud'=>12,
        // http://lh.2xlibre.net/locale/pt_PT/
        'jan'=>1, 'fev'=>2, 'mar'=>3, 'abr'=>4, 'mai'=>5, 'jun'=>6, 'jul'=>7, 'ago'=>8, 'set'=>9, 'out'=>10, 'nov'=>11, 'dez'=>12,
        'jane'=>1, 'feve'=>2, 'març'=>3, 'abri'=>4, 'maio'=>5, 'junh'=>6, 'julh'=>7, 'agos'=>8, 'sete'=>9, 'outu'=>10, 'nove'=>11, 'deze'=>12,
        // http://lh.2xlibre.net/locale/ro_RO/
        'ian'=>1, 'feb'=>2, 'mar'=>3, 'apr'=>4, 'mai'=>5, 'iun'=>6, 'iul'=>7, 'aug'=>8, 'sep'=>9, 'oct'=>10, 'noi'=>11, 'nov'=>11, 'dec'=>12,
        'ianu'=>1, 'febr'=>2, 'mart'=>3, 'apri'=>4, 'iuni'=>6, 'iuli'=>7, 'augu'=>8, 'sept'=>9, 'octo'=>10, 'noie'=>11, 'nove'=>11, 'dece'=>12,
        // http://lh.2xlibre.net/locale/sk_SK/
        'jan'=>1, 'feb'=>2, 'mar'=>3, 'apr'=>4, 'máj'=>5, 'jún'=>6, 'júl'=>7, 'aug'=>8, 'sep'=>9, 'okt'=>10, 'nov'=>11, 'dec'=>12,
        'janu'=>1, 'febr'=>2, 'mare'=>3, 'aprí'=>4, 'augu'=>8, 'sept'=>9, 'októ'=>10, 'nove'=>11, 'dece'=>12,
        // http://lh.2xlibre.net/locale/sl_SI/
        'jan'=>1, 'feb'=>2, 'mar'=>3, 'apr'=>4, 'maj'=>5, 'jun'=>6, 'jul'=>7, 'avg'=>8, 'sep'=>9, 'okt'=>10, 'nov'=>11, 'dec'=>12,
        'janu'=>1, 'febr'=>2, 'mare'=>3, 'apri'=>4, 'juni'=>6, 'juli'=>7, 'avgu'=>8, 'sept'=>9, 'okto'=>10, 'nove'=>11, 'dece'=>12,
        // http://lh.2xlibre.net/locale/sv_SE/
        'jan'=>1, 'feb'=>2, 'mar'=>3, 'apr'=>4, 'maj'=>5, 'jun'=>6, 'jul'=>7, 'aug'=>8, 'sep'=>9, 'okt'=>10, 'nov'=>11, 'dec'=>12,
        'janu'=>1, 'febr'=>2, 'mars'=>3, 'apri'=>4, 'juni'=>6, 'juli'=>7, 'augu'=>8, 'sept'=>9, 'okto'=>10, 'nove'=>11, 'dece'=>12,
        // http://lh.2xlibre.net/locale/tr_TR/
        'oca'=>1, 'şub'=>2, 'mar'=>3, 'nis'=>4, 'may'=>5, 'haz'=>6, 'tem'=>7, 'ağu'=>8, 'eyl'=>9, 'eki'=>10, 'kas'=>11, 'ara'=>12,
        'ocak'=>1, 'şuba'=>2, 'mart'=>3, 'nisa'=>4, 'mayı'=>5, 'hazi'=>6, 'temm'=>7, 'ağus'=>8, 'eylü'=>9, 'ekim'=>10, 'kası'=>11, 'aral'=>12,
    );
}

function parse_mahara_date($input) {
    $abbr = get_month_name_abbreviations();
    if (preg_match("#(\d+)[ \/.-]+(\w+)[ \/.-]+(\d{4})#u", $input, $output)) {
        list($date, $day, $month, $year) = $output;
        if (strlen($month) > 2) {
            if (mb_strtolower($month, 'UTF-8') == 'červen') {
                $month = 6;
            } else if (mb_strtolower($month, 'UTF-8') == 'červenec') {
                $month = 7;
            } else {
                $month = $abbr[mb_substr(mb_strtolower($month, 'UTF-8'), 0, 4, 'UTF-8')];
            }
        }
        return array(
            'day' => $day,
            'month' => $month,
            'year' => $year,
        );
    }
    if (preg_match("#(\w+)[ \/.,-]+(\d+).*(\d{4})#u", $input, $output)) {
        list($date, $month, $day, $year) = $output;
        if (strlen($month) > 2) {
            if (mb_strtolower($month, 'UTF-8') == 'červen') {
                $month = 6;
            } else if (mb_strtolower($month, 'UTF-8') == 'červenec') {
                $month = 7;
            } else {
                $month = $abbr[mb_substr(mb_strtolower($month, 'UTF-8'), 0, 4, 'UTF-8')];
            }
        }
        return array(
            'day' => $day,
            'month' => $month,
            'year' => $year,
        );
    }
    if (preg_match("#(\w+).*(\d{4})#u", $input, $output)) {
        list($date, $month, $year) = $output;
        if (strlen($month) > 2) {
            if (mb_strtolower($month, 'UTF-8') == 'červen') {
                $month = 6;
            } else if (mb_strtolower($month, 'UTF-8') == 'červenec') {
                $month = 7;
            } else {
                $month = $abbr[mb_substr(mb_strtolower($month, 'UTF-8'), 0, 4, 'UTF-8')];
            }
        }
        return array(
            'day' => null,
            'month' => $month,
            'year' => $year,
        );
    }
    if (preg_match("#(\d{4})#u", $input, $output)) {
        list($date, $year) = $output;
        return array(
            'day' => null,
            'month' => null,
            'year' => $year,
        );
    }
    return null;
}

function get_year_from_mahara_date($input) {
    if (preg_match("#(\d{4})#u", $input, $output)) {
        list($date, $year) = $output;
        return $year;
    }
    return null;
}
