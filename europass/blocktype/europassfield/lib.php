<?php
/**
 *
 * @package    mahara
 * @subpackage blocktype-mylanguages
 * @author     Gregor Anzelj
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2009-2017 Gregor Anzelj, gregor.anzelj@gmail.com
 *
 */

defined('INTERNAL') || die();
safe_require('artefact', 'europass');


class PluginBlocktypeEuropassfield extends MaharaCoreBlocktype {

    public static function get_title() {
        return get_string('title', 'blocktype.europass/europassfield');
    }

    public static function get_description() {
        return get_string('description', 'blocktype.europass/europassfield');
    }

    public static function get_css_icon($blocktypename) {
        return 'euro';
    }

    public static function get_categories() {
        return array('internal' => 93000);
    }

    public static function get_viewtypes() {
        return array('dashboard', 'portfolio', 'profile');
    }

     /**
     * Optional method. If exists, allows this class to decide the title for
     * all blockinstances of this type
     */
    public static function get_instance_title(BlockInstance $bi) {
        $configdata = $bi->get('configdata');

        if (!empty($configdata['artefact'])) {
            return get_string($configdata['artefact'], 'artefact.europass');
        }
        return '';
    }

    public static function render_instance(BlockInstance $instance, $editing=false) {
        $configdata = $instance->get('configdata');
        $artefact = (isset($configdata['artefact']) ? $configdata['artefact'] : null);

        $view = new View($instance->get('view'));
        $owner = $view->get('owner');

        if (!empty($artefact)) {
            $result = '';
            $artefacts = array(
                'socialskill',
                'organisationalskill',
                'technicalskill',
                'otherskill',
                'drivinglicence',
            );
            if (in_array($artefact, $artefacts)) {
                if ($artefactid = get_field('artefact', 'id', 'artefacttype', $artefact, 'owner', $owner)) {
                    $a = artefact_instance_from_id($artefactid);
                    $data = $a->render_self();
                    $smarty = smarty_core();
                    $smarty->assign('data', $data);
                    $result = $smarty->fetch('artefact:europass:blocktypes/europassfield.tpl');
                }
            }
            if ($artefact == 'mothertongue') {
                $data = get_mother_tongues(false, null, $owner);
                $smarty = smarty_core();
                $smarty->assign('data', $data);
                $result = $smarty->fetch('artefact:europass:blocktypes/mothertongue.tpl');
            }
            if ($artefact == 'otherlanguage') {
                $data = get_other_languages(false, null, $owner);
                $lang = set_default_locale(get_config('lang'));
                $url = 'http://europass.cedefop.europa.eu/' . $lang . '/resources/european-language-levels-cefr';
                $smarty = smarty_core();
                $smarty->assign('data', $data);
                $smarty->assign('url', $url);
                $result = $smarty->fetch('artefact:europass:blocktypes/otherlanguage.tpl');
            }
            if ($artefact == 'digitalcompetence') {
                $data = get_digital_competences(false, $owner);
                $lang = set_default_locale(get_config('lang'));
                $url = 'http://europass.cedefop.europa.eu/' . $lang . '/resources/digital-competences';
                $smarty = smarty_core();
                $smarty->assign('data', $data);
                $smarty->assign('url', $url);
                $result = $smarty->fetch('artefact:europass:blocktypes/digitalcompetence.tpl');
            }
            if ($artefact == 'additionalinfo') {
                $data = get_additional_information(false, null, $owner);
                $smarty = smarty_core();
                $smarty->assign('data', $data);
                $result = $smarty->fetch('artefact:europass:blocktypes/additionalinfo.tpl');
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

        return array(
            'artefact' => array(
                'type' => 'radio',
                'title' => get_string('fieldtoshow', 'blocktype.europass/mylanguages'),
                'options' => array(
                    'mothertongue' => get_string('mothertongue', 'artefact.europass'),
                    'otherlanguage' => get_string('otherlanguage', 'artefact.europass'),
                    'socialskill' => get_string('socialskill', 'artefact.europass'),
                    'organisationalskill' => get_string('organisationalskill', 'artefact.europass'),
                    'technicalskill' => get_string('technicalskill', 'artefact.europass'),
                    'digitalcompetence' => get_string('digitalcompetence', 'artefact.europass'),
                    'otherskill' => get_string('otherskill', 'artefact.europass'),
                    'drivinglicence' => get_string('drivinglicence', 'artefact.europass'),
                    'additionalinfo' => get_string('additionalinfo', 'artefact.europass'),
                ),
                'defaultvalue' => (!empty($configdata['artefact']) ? $configdata['artefact'] : null),
            ),
        );
    }

    public static function instance_config_save($values) {
        unset($values['message']);
        return $values;
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

}
