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

define('INTERNAL', true);
define('MENUITEM', 'content/europass');
define('SECTION_PLUGINTYPE', 'artefact');
define('SECTION_PLUGINNAME', 'europass');
define('SECTION_PAGE', 'preferences');

require_once(dirname(dirname(dirname(__FILE__))) . '/init.php');
require_once('pieforms/pieform.php');
safe_require('artefact','europass');

$set = param_integer('set', 0); // Flag if preferences need to be set
$pn = param_integer('pn', 0);   // Europass PersonName order
$li = param_integer('li', 0);   // Europass LernerInfo order

if ($set) {
    // Get user preferences of Europass settings
    $prefs = unserialize($USER->get_account_preference('europassprefs'));
    // Load default values if preferences are not already set
    if (!$prefs) {
        $prefs = array(
            'personname' => 12,
            'learnerinfo' => 1234567,
            // TODO: add date settings, etc.
        );
    }
    if ($pn > 0) {
        $prefs['personname'] = $pn;
    }
    if ($li > 0) {
        $prefs['learnerinfo'] = $li;
    }
    // Save user preferences of Europass settings
    $USER->set_account_preference('europassprefs', serialize($prefs));

    redirect('/artefact/europass/index.php');
}
