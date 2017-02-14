<?php
/**
 *
 * @package    mahara
 * @subpackage blocktype-europasslp
 * @author     Gregor Anzelj
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2009-2017 Gregor Anzelj, gregor.anzelj@gmail.com
 *
 */

defined('INTERNAL') || die();
safe_require('artefact', 'europass');


class PluginBlocktypeEuropassLP extends MaharaCoreBlocktype {

    public static function get_title() {
        return get_string('title', 'blocktype.europass/europasslp');
    }

    public static function get_description() {
        return get_string('description', 'blocktype.europass/europasslp');
    }

    public static function get_css_icon($blocktypename) {
        return 'euro';
    }

    public static function get_categories() {
        return array('internal' => 92000);
    }

    public static function get_viewtypes() {
        return array('dashboard', 'portfolio', 'profile');
    }

    public static function render_instance(BlockInstance $instance, $editing=false) {
        $configdata = $instance->get('configdata');
        $locale = (isset($configdata['locale']) ? $configdata['locale'] : get_config('lang'));
        if (empty($configdata)) {
            return '';
        }

        $view = new View($instance->get('view'));
        $owner = $view->get('owner');

        $options = array(
            'embed' => true,
            'lang' => $locale,
        );
        $html = generate_europass_html(array('elp'), $options, $owner);
        return $html;
    }

    public static function has_instance_config() {
        return true;
    }

    public static function instance_config_form($instance) {
        $configdata = $instance->get('configdata');
        $locale = (isset($configdata['locale']) ? $configdata['locale'] : get_config('lang'));

        return array(
            'locale' => array(
                'type' => 'select',
                'title' => get_string('selectlocale', 'artefact.europass'),
                'defaultvalue' => $locale,
                'options' => getoptions_full_locales(),
            ),
        );
    }

    public static function instance_config_save($values) {
        return $values;
    }

    public static function default_copy_type() {
        return 'shallow';
    }

    /**
     * EuropassLP blocktype is only allowed in personal views, because 
     * there's no such thing as group/site Europass CV
     */
    public static function allowed_in_view(View $view) {
        return $view->get('owner') != null;
    }

}
