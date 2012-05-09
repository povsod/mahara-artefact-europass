<?php
/**
 * Mahara: Electronic portfolio, weblog, resume builder and social networking
 * Copyright (C) 2006-2012 Catalyst IT Ltd and others; see:
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
 * @author     Gregor Anzelj
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2009-2012 Gregor Anzelj, gregor.anzelj@gmail.com
 *
 */

defined('INTERNAL') || die();

class PluginArtefactEuropass extends Plugin {
    
    public static function get_artefact_types() {
        return array(
            'mothertongue', 
            'otherlanguage',
			'languagediploma',
			'languageexperience',
			'application',
            'socialskill',
            'organisationalskill',
            'technicalskill',
            'computerskill',
            'artisticskill',
			'otherskill',
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
            'content/europass' => array(
                'path' => 'content/europass',
                'title' => get_string('europass', 'artefact.europass'),
                'url' => 'artefact/europass/',
                'weight' => 90,
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
            'otherskill'          => array('text'),
            'additionalinfo'      => array('text'),
			'annexes'             => array('text'),
        );
    }

    public static function submenu_items() {
        $tabs = array(
            'index' => array(
                'page'  => 'index',
                'url'   => 'artefact/europass',
                'title' => get_string('identification', 'artefact.europass'),
            ),
            'application' => array(
                'page'  => 'application',
                'url'   => 'artefact/europass/application.php',
                'title' => get_string('application-tab', 'artefact.europass'),
            ),
            'workexperience' => array(
                'page'  => 'workexperience',
                'url'   => 'artefact/europass/workexperience.php',
                'title' => get_string('workexperience-tab', 'artefact.europass'),
            ),
            'education' => array(
                'page'  => 'education',
                'url'   => 'artefact/europass/education.php',
                'title' => get_string('education-tab', 'artefact.europass'),
            ),
            'languages' => array(
                'page'  => 'languages',
                'url'   => 'artefact/europass/languages.php',
                'title' => get_string('languages-tab', 'artefact.europass'),
            ),
            'skills' => array(
                'page'  => 'skills',
                'url'   => 'artefact/europass/skills.php',
                'title' => get_string('skills-tab', 'artefact.europass'),
            ),
            'annexes' => array(
                'page'  => 'annexes',
                'url'   => 'artefact/europass/annexes.php',
                'title' => get_string('annexes', 'artefact.europass'),
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
     * Default render method for resume fields - show their description
     */
    public function render_self($options) {
        return array('html' => clean_html($this->description));
    }

}


abstract class ArtefactTypeEuropassComposite extends ArtefactTypeEuropass {

    public static function is_singular() {
        return true;
    }

    public static function get_composite_artefact_types() {
        return array(
            'mothertongue',
            'otherlanguage',
            'languagediploma',
            'languageexperience'
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
    * This function processes the form for the composite
    * @throws Exception
    */
    public static function process_compositeform(Pieform $form, $values) {
        global $USER;
        self::ensure_composite_value($values, $values['compositetype'], $USER->get('id'));
    }

    /**
     * Ensures that the given value for the given composite is present
     * TODO: expand on these docs.
     */
    public static function ensure_composite_value($values, $compositetype, $owner) {
        if (!in_array($compositetype, self::get_composite_artefact_types())) {
            throw new SystemException("ensure_composite_value called with invalid composite type");
        }
        try {
            $a = artefact_instance_from_type($compositetype, $owner);
            $a->set('mtime', time());
        }
        catch (Exception $e) {
            $classname = generate_artefact_class_name($compositetype);
            $a = new $classname(0, array(
                'owner' => $owner,
                'title' => get_string($compositetype, 'artefact.europass'),
                )
            );
        }

        $a->commit();

        $values['artefact'] = $a->get('id');

        $table = 'artefact_europass_' . $compositetype;
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
    * subclass get_addform_elements functions
    * and puts the default values in (and hidden id field)
    * ready to be an edit form
    * 
    * @param $form pieform structure (before calling pieform() on it
    * passed by _reference_
    */
    public static function populate_form(&$form, $id, $type) {
        if (!$composite = get_record('artefact_europass_' . $type, 'id', $id)) {
            throw new InvalidArgumentException("Couldn't find composite of type $type with id $id");
        }
        $datetypes = array('certificatedate', 'startdate', 'enddate');
        foreach ($form['elements'] as $k => $element) {
            if ($k == 'submit' || $k == 'compositetype') {
                continue;
            }
            if (isset($composite->{$k})) {
                $form['elements'][$k]['defaultvalue'] = $composite->{$k};
            }
        }
        $form['elements']['id'] = array(
            'type' => 'hidden',
            'value' => $id,
        );
        $form['elements']['artefact'] = array(
            'type' => 'hidden',
            'value' => $composite->artefact,
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
				//'javascript'   => $this->get_showhide_language_js()
				'javascript'   => $this->get_showhide_composite_js()
			);
		} else {
			$content = array(
				'html'         => $smarty->fetch('artefact:europass:fragments/' . $type . '.tpl'),
				//'javascript'   => $this->get_showhide_language_js()
				'javascript'   => $this->get_showhide_composite_js()
			);
		}
        return $content;
    }

    public static function get_js(array $compositetypes) {
        $js = self::get_common_js();
        foreach ($compositetypes as $compositetype) {
            $js .= call_static_method(
                generate_artefact_class_name($compositetype),
                'get_artefacttype_js',
                $compositetype
            );
        }
        return $js;
    }

    public static function get_common_js() {
        $cancelstr = get_string('cancel');
        $addstr = get_string('add');
        $confirmlanguagedelstr = get_string('languagedeleteconfirm', 'artefact.europass');
        $confirmdiplomadelstr = get_string('languagediplomadeleteconfirm', 'artefact.europass');
        $confirmexperiencedelstr = get_string('languageexperiencedeleteconfirm', 'artefact.europass');
        $js = <<<EOF
var tableRenderers = {};

function toggleCompositeForm(type) {
    var elemName = '';
    elemName = type + 'form';
    if (hasElementClass(elemName, 'hidden')) {
        removeElementClass(elemName, 'hidden');
        $('add' + type + 'button').innerHTML = '{$cancelstr}';
    }
    else {
        $('add' + type + 'button').innerHTML = '{$addstr}';
        addElementClass(elemName, 'hidden');
    }
}

function compositeSaveCallback(form, data) {
    key = form.id.substr(3);
    tableRenderers[key].doupdate(); 
    toggleCompositeForm(key);
    // Can't reset() the form here, because its values are what were just submitted, 
    // thanks to pieforms
    forEach(form.elements, function(element) {
        if (hasElementClass(element, 'text') || hasElementClass(element, 'textarea')) {
            element.value = '';
        }
    });
}

function deleteComposite(type, id, artefact) {
	confirmdelstr = '{$confirmlanguagedelstr}';
	if (type == 'languagediploma') { confirmdelstr = '{$confirmdiplomadelstr}'; }
	if (type == 'languageexperience') { confirmdelstr = '{$confirmexperiencedelstr}'; }
    if (confirm(confirmdelstr)) {
        sendjsonrequest('compositedelete.json.php',
            {'id': id, 'artefact': artefact},
            'GET',
            function(data) {
                tableRenderers[type].doupdate();
            },
            function() {
                // @todo error
            }
        );
    }
    return false;
}

function moveComposite(type, id, artefact, direction) {
    sendjsonrequest('compositemove.json.php',
        {'id': id, 'artefact': artefact, 'direction':direction},
        'GET',
        function(data) {
            tableRenderers[type].doupdate();
        },
        function() {
            // @todo error
        }
    );
    return false;
}
EOF;
        $js .= self::get_showhide_composite_js();
        return $js;
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
                        return showhideComposite(r, {$bodystring});
                    });
                    return TD({'id': 'composite-' + r.artefact + '-' + r.id}, link);
                },
                ";
    }

    static function get_showhide_composite_js() {
        return "
            function showhideComposite(r, content) {
                // get the reference for the title we just clicked on
                var titleTD = $('composite-' + r.artefact + '-' + r.id);
                var theRow = titleTD.parentNode;
                var bodyRow = $('composite-body-' + r.artefact +  '-' + r.id);
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
                var newRow = TR({'id': 'composite-body-' + r.artefact + '-' + r.id}, 
                    TD({'colspan': colspan}, content)); 
                insertSiblingNodesAfter(theRow, newRow);
            }
        ";
    }

    static function get_artefacttype_js($compositetype) {
        global $THEME;
        $viewstr = get_string('groupmanage', 'admin'); // get_string('more...')
        $editstr = get_string('edit');
        $delstr = get_string('delete');
        $imagelanguageinfo  = json_encode($THEME->get_url('images/manage.gif')); // displayview.gif
        $imagemoveblockup   = json_encode($THEME->get_url('images/move-up.gif'));
        $imagemoveblockdown = json_encode($THEME->get_url('images/move-down.gif'));
        $upstr = get_string('moveup', 'artefact.europass');
        $downstr = get_string('movedown', 'artefact.europass');

        $js = call_static_method(generate_artefact_class_name($compositetype), 'get_composite_js');

        $js .= <<<EOF
tableRenderers.{$compositetype} = new TableRenderer(
    '{$compositetype}list',
    'composite.json.php',
    [
EOF;

        $js .= <<<EOF

        function (r, d) {
            var buttons = [];
            if (r._rownumber > 1) {
                var up = A({'href': ''}, IMG({'src': {$imagemoveblockup}, 'alt':'{$upstr}'}));
                connect(up, 'onclick', function (e) {
                    e.stop();
                    return moveComposite(d.type, r.id, r.artefact, 'up');
                });
                buttons.push(up);
            }
            if (!r._last) {
                var down = A({'href': '', 'class':'movedown'}, IMG({'src': {$imagemoveblockdown}, 'alt':'{$downstr}'}));
                connect(down, 'onclick', function (e) {
                    e.stop();
                    return moveComposite(d.type, r.id, r.artefact, 'down');
                });
                buttons.push(' ');
                buttons.push(down);
            }
            return TD({'class':'movebuttons'}, buttons);
        },
EOF;

        $js .= call_static_method(generate_artefact_class_name($compositetype), 'get_tablerenderer_js');

        if ($compositetype == 'otherlanguage') {
        $js .= <<<EOF
        function (r, d) {
            var viewlink = A({'href': 'viewcomposite.php?id=' + r.id + '&artefact=' + r.artefact, 'title': '{$viewstr}'}, IMG({'src': {$imagelanguageinfo}, 'alt':'{$viewstr}'}));
            var editlink = A({'href': 'editcomposite.php?id=' + r.id + '&artefact=' + r.artefact, 'title': '{$editstr}'}, IMG({'src': config.theme['images/edit.gif'], 'alt':'{$editstr}'}));
            var dellink = A({'href': '', 'title': '{$delstr}'}, IMG({'src': config.theme['images/icon_close.gif'], 'alt': '[x]'}));
            connect(dellink, 'onclick', function (e) {
                e.stop();
                return deleteComposite(d.type, r.id, r.artefact);
            });
            return TD({'class':'right'}, null, viewlink, ' ', editlink, ' ', dellink);
        }
EOF;
		} else {
        $js .= <<<EOF
        function (r, d) {
            var editlink = A({'href': 'editcomposite.php?id=' + r.id + '&artefact=' + r.artefact, 'title': '{$editstr}'}, IMG({'src': config.theme['images/edit.gif'], 'alt':'{$editstr}'}));
            var dellink = A({'href': '', 'title': '{$delstr}'}, IMG({'src': config.theme['images/icon_close.gif'], 'alt': '[x]'}));
            connect(dellink, 'onclick', function (e) {
                e.stop();
                return deleteComposite(d.type, r.id, r.artefact);
            });
            return TD({'class':'right'}, null, editlink, ' ', dellink);
        }
EOF;
		}
        $js .= <<<EOF
    ]
);

tableRenderers.{$compositetype}.type = '{$compositetype}';
tableRenderers.{$compositetype}.statevars.push('type');
tableRenderers.{$compositetype}.emptycontent = '';
tableRenderers.{$compositetype}.updateOnLoad();

EOF;
        return $js;
    }

    static function get_composite_js() {
        return '';
    }

    static function get_forms(array $compositetypes, $languageid=0) {
        require_once(get_config('libroot') . 'pieforms/pieform.php');
        $compositeforms = array();
        foreach ($compositetypes as $compositetype) {
            $elements = call_static_method(generate_artefact_class_name($compositetype), 'get_addform_elements');
            $elements['submit'] = array(
                'type' => 'submit',
                'value' => get_string('save'),
            );
            $elements['compositetype'] = array(
                'type' => 'hidden',
                'value' => $compositetype,
            );
			// Set language for language diploma(s) or linguistic experience(s)...
			if ($languageid > 0) {
				$elements['languageid'] = array(
					'type' => 'hidden',
					'value' => $languageid,
				);
			}
            $cform = array(
                'name' => 'add' . $compositetype,
                'plugintype' => 'artefact',
                'pluginname' => 'europass',
                'elements' => $elements,
                'jsform' => true,
                'successcallback' => 'langcompositeform_submit',
                'jssuccesscallback' => 'compositeSaveCallback',
            );
            $compositeforms[$compositetype] = pieform($cform);
        }
        return $compositeforms;
    }

}

class ArtefactTypeMothertongue extends ArtefactTypeEuropassComposite { 

    protected $language;

    public static function get_tablerenderer_js() {
        $return = "
                " . ArtefactTypeEuropassComposite::get_tablerenderer_title_js(
                    self::get_tablerenderer_title_js_string(),
                    self::get_tablerenderer_body_js_string()
                ) . "
        ";
		$return .= "'language',";
		return $return;
    }

    public static function get_tablerenderer_title_js_string() {
        return "r.languagename"; // Dinamically set in composite.json.php
    }

    public static function get_tablerenderer_body_js_string() {
        return "r.description";
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
                'resizable' => false,
                'title' =>  get_string('description', 'mahara'),
            ),
        );
    }

    public static function bulk_delete($artefactids) {
        ArtefactTypeEuropassComposite::bulk_delete_composite($artefactids, 'mothertongue');
    }
}

class ArtefactTypeOtherlanguage extends ArtefactTypeEuropassComposite { 

    protected $language;

    public static function get_tablerenderer_js() {
        $return = "
                " . ArtefactTypeEuropassComposite::get_tablerenderer_title_js(
                    self::get_tablerenderer_title_js_string(),
                    self::get_tablerenderer_body_js_string()
                ) . "
        ";
		$return .= "
				'language',
				'listening',
				'reading',
				'spokeninteraction',
				'spokenproduction',
				'writing',
		";
		return $return;
    }

    public static function get_tablerenderer_title_js_string() {
        return "r.languagename"; // Dinamically set in composite.json.php
    }

    public static function get_tablerenderer_body_js_string() {
        return "r.description"; // This description doesn't exist, but we need to return something for Javascript to work correctly...
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
        );
    }

    public static function bulk_delete($artefactids) {
        ArtefactTypeEuropassComposite::bulk_delete_composite($artefactids, 'otherlanguage');
    }
}

class ArtefactTypeLanguagediploma extends ArtefactTypeEuropassComposite { 

    protected $certificate;
    protected $date;

    public static function get_tablerenderer_js() {
        $return = "
                " . ArtefactTypeEuropassComposite::get_tablerenderer_title_js(
                    self::get_tablerenderer_title_js_string(),
                    self::get_tablerenderer_body_js_string()
                ) . "
        ";
		$return .= "
				'awardingbody',
				'certificatedate',
				'europeanlevel',
		";
		return $return;
    }

    public static function get_tablerenderer_title_js_string() {
        return "r.certificate";
    }

    public static function get_tablerenderer_body_js_string() {
        return "r.description"; // This description doesn't exist, but we need to return something for Javascript to work correctly...
    }

    public static function get_addform_elements() {
        return array(
			'certificate' => array(
				'type' => 'text',
                'rules' => array(
                    'required' => true,
                ),
				'title' => get_string('diploma-title', 'artefact.europass'),
				'help'  => true,
			),
			'awardingbody' => array(
				'type' => 'textarea',
                'rules' => array(
                    'required' => true,
                ),
				'rows' => 5,
				'cols' => 50,
				'resizable' => false,
				'title' => get_string('diploma-awardingBody', 'artefact.europass'),
				'help'  => true,
			),
            'certificatedate' => array(
                'type'       => 'text',
                'rules' => array(
                    'required' => true,
                ),
                'title' => get_string('diploma-date', 'artefact.europass'),
                'size' => 20,
            ),
			'europeanlevel' => array(
				'type' => 'select',
				'title' => get_string('diploma-level', 'artefact.europass'),
				'options' => getoptions_levels(),
				'help' => true,
			),
        );
    }

    public static function bulk_delete($artefactids) {
        ArtefactTypeEuropassComposite::bulk_delete_composite($artefactids, 'languagediploma');
    }
}

class ArtefactTypeLanguageexperience extends ArtefactTypeEuropassComposite {

    protected $startdate;
    protected $description;

    public static function get_tablerenderer_js() {
        return "
                'startdate',
                'enddate',
                " . ArtefactTypeEuropassComposite::get_tablerenderer_title_js(
                    self::get_tablerenderer_title_js_string(),
                    self::get_tablerenderer_body_js_string()
                ) . "
        ";
    }

    public static function get_tablerenderer_title_js_string() {
        return "r.description";
    }

    public static function get_tablerenderer_body_js_string() {
        return "r.description1"; // This description doesn't exist, but we need to return something for Javascript to work correctly...
    }

    public static function get_addform_elements() {
        return array(
            'startdate' => array(
                'type' => 'text',
                'rules' => array(
                    'required' => true,
                ),
                'title' => get_string('experiences-period-from', 'artefact.europass'),
                'size' => 20,
            ),
            'enddate' => array(
                'type' => 'text',
                'title' => get_string('experiences-period-to', 'artefact.europass'),
                'size' => 20,
            ),
			'description' => array(
				'type' => 'textarea',
                'rules' => array(
                    'required' => true,
                ),
				'rows' => 5,
				'cols' => 50,
				'resizable' => false,
				'title' => get_string('description', 'mahara'),
				'help'  => true,
			),
        );
    }

    public static function bulk_delete($artefactids) {
        ArtefactTypeEuropassComposite::bulk_delete_composite($artefactids, 'languageexperience');
    }
}

class ArtefactTypeEuropassArtefacts extends ArtefactTypeEuropass {

    public static function is_singular() {
        return true;
    }

    public static function get_europass_artefact_types() {
        return array('socialskill', 'organisationalskill', 'technicalskill', 'computerskill', 'artisticskill', 'otherskill',
					 'application', 'drivinglicence', 'additionalinfo', 'annexes');
    }

}

class ArtefactTypeSocialskill extends ArtefactTypeEuropassArtefacts { }
class ArtefactTypeOrganisationalskill extends ArtefactTypeEuropassArtefacts { }
class ArtefactTypeTechnicalskill extends ArtefactTypeEuropassArtefacts { }
class ArtefactTypeComputerskill extends ArtefactTypeEuropassArtefacts { }
class ArtefactTypeArtisticskill extends ArtefactTypeEuropassArtefacts { }
class ArtefactTypeOtherskill extends ArtefactTypeEuropassArtefacts { }
class ArtefactTypeApplication extends ArtefactTypeEuropassArtefacts { }
class ArtefactTypeDrivinglicence extends ArtefactTypeEuropassArtefacts {

    /**
     * Render method for Driving licence(s) Europass field
     */
    public function render_self($options) {
		$drivinglicence = unserialize($this->description);
		$renderhtml = '';
		foreach ($drivinglicence as $licence => $value) {
			if ($value <> null) {
				$renderhtml .= strtoupper($licence) . ', ';
			}
		}
		// Remove last comma and space (2 characters) from the string...
		$renderhtml = substr($renderhtml, 0, -2);
		return array('html' => $renderhtml);
    }

}
class ArtefactTypeAdditionalinfo extends ArtefactTypeEuropassArtefacts { }
class ArtefactTypeAnnexes extends ArtefactTypeEuropassArtefacts { }


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
			'AM'	=> $values['AM'],
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
		// Remove elements with indexes from 0 to 13 from array = unused drivinglicences!
		$values = array_slice($values, 14);
	}

    $dbnow = db_format_timestamp(time());
	$artefact_types = ArtefactTypeEuropassArtefacts::get_europass_artefact_types();
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
                'author'       => $USER->get('id'), // PostgreSQL won't work without it, MySQL will...
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

?>
