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
 
define('INTERNAL', true);
define('MENUITEM', 'profile/europass');

require_once(dirname(dirname(dirname(__FILE__))) . '/init.php');
require_once('pieforms/pieform.php');
require_once('pieforms/pieform/elements/calendar.php');
require_once(get_config('docroot') . 'artefact/lib.php');

$id = param_integer('id');
$artefact = param_integer('artefact');

$a = artefact_instance_from_id($artefact);
$languagetype = $a->get('artefacttype');

if ($a->get('owner') != $USER->get('id')) {
    throw new AccessDeniedException(get_string('notartefactowner', 'error'));
}

$elements = call_static_method(generate_artefact_class_name($languagetype), 'get_addform_elements');
$elements['submit'] = array(
    'type' => 'submitcancel',
    'value' => array(get_string('save'), get_string('cancel')),
    'goto' => get_config('wwwroot') . '/artefact/europass/',
);
$elements['languagetype'] = array(
    'type' => 'hidden',
    'value' => $languagetype,
);
$cform = array(
    'name' => 'add' . $languagetype, // To have the same help files as actual 'add language' form...
    'plugintype' => 'artefact',
    'pluginname' => 'europass',
    'elements' => $elements,
    'successcallback' => 'languageformedit_submit',
);

$a->populate_form($cform, $id, $languagetype);
$languageform = pieform($cform);

$smarty = smarty();
$smarty->assign('languageform', $languageform);
$smarty->assign('languagetype', $languagetype);
$smarty->display('artefact:europass:editlanguage.tpl');

?>
