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


class PluginBlocktypeMyLanguages extends MaharaCoreBlocktype {

    public static function get_title() {
        return get_string('title', 'blocktype.europass/mylanguages');
    }

    public static function get_description() {
        return get_string('description', 'blocktype.europass/mylanguages');
    }

    public static function get_css_icon($blocktypename) {
        return 'commenting';
    }

    public static function get_categories() {
        return array('internal' => 94000);
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

        if (!empty($artefact)) {
            $result = '';
            if ($artefact == 'mothertongue') {
                $data = get_mother_tongues();
                foreach ($data as $item) {
                    $result .= get_string('language.' . $item->description, 'artefact.europass') . ', ';
                }
                $result = substr($result, 0, strlen($result) - 2);
            }
            if ($artefact == 'otherlanguage') {
                $data = get_other_languages();
                $lang = set_default_locale(get_config('lang'));
                $url = 'http://europass.cedefop.europa.eu/' . $lang . '/resources/european-language-levels-cefr';
                $smarty = smarty_core();
                $smarty->assign('data', $data);
                $smarty->assign('url', $url);
                $result = $smarty->fetch('artefact:europass:blocktypes/otherlanguage.tpl');
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
                ),
                'defaultvalue' => (!empty($configdata['artefact']) ? $configdata['artefact'] : null),
            ),
            'message' => array(
                'type' => 'html',
                'value' => '<p class="alert alert-info">' . get_string('filloutyoureuropass', 'blocktype.europass/mylanguages', '<a href="' . get_config('wwwroot') . 'artefact/europass/languages.php">', '</a>') . '</p>',
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
