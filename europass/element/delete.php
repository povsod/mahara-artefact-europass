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
define('SECTION_PAGE', 'delete');

require_once(dirname(dirname(dirname(dirname(__FILE__)))) . '/init.php');
require_once('pieforms/pieform.php');
require_once(get_config('docroot') . 'artefact/lib.php');
safe_require('artefact', 'europass');

if (!PluginArtefactEuropass::is_active()) {
    throw new AccessDeniedException(get_string('plugindisableduser', 'mahara', get_string('europass','artefact.europass')));
}

define('TITLE', get_string('europass', 'artefact.europass'));

$id = param_integer('id');
$todelete = artefact_instance_from_id($id);
if (!$USER->can_edit_artefact($todelete)) {
    throw new AccessDeniedException(get_string('accessdenied', 'error'));
}

$deleteform = array(
    'name' => 'deleteelement',
    'class' => 'form-delete',
    'plugintype' => 'artefact',
    'pluginname' => 'europass',
    'renderer' => 'div',
    'elements' => array(
        'submit' => array(
            'type' => 'submitcancel',
            'class' => 'btn btn-default',
            'value' => array(get_string('delete'), get_string('cancel')),
            'goto' => get_config('wwwroot') . '/artefact/europass/index.php',
        ),
    )
);
$form = pieform($deleteform);

$smarty = smarty();
$smarty->assign('form', $form);
$smarty->assign('PAGEHEADING', $todelete->get('title'));
$smarty->assign('subheading', get_string('delete') . ': ' . get_string($todelete->get('artefacttype'),  'artefact.europass'));
$smarty->assign('message', get_string('deleteelementconfirm','artefact.europass'));
$smarty->display('artefact:europass:delete.tpl');

// calls this function first so that we can get the artefact and call delete on it
function deleteelement_submit(Pieform $form, array $values) {
    global $SESSION, $todelete;

    $todelete->delete();
    $SESSION->add_ok_msg(get_string('elementdeletedsuccessfully', 'artefact.europass'));

    redirect('/artefact/europass/index.php');
}
