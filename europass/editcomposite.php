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

define('INTERNAL', true);
define('MENUITEM', 'content/europass');
define('SECTION_PLUGINTYPE', 'artefact');
define('SECTION_PLUGINNAME', 'europass');

require_once(dirname(dirname(dirname(__FILE__))) . '/init.php');
require_once('pieforms/pieform.php');
require_once('pieforms/pieform/elements/calendar.php');
require_once(get_config('docroot') . 'artefact/lib.php');

define('TITLE', get_string('europass', 'artefact.europass'));

$id = param_integer('id');
$artefact = param_integer('artefact');

$a = artefact_instance_from_id($artefact);
$type = $a->get('artefacttype');

// Set correct redirect when user clicks Cancel button...
if ($type == 'languagediploma' || $type == 'languageexperience') {
	// Find language diploma's or linguistic experience's parent for redirect...
	$sql = 'SELECT aeo.id, aeo.artefact
		FROM {artefact_europass_otherlanguage} aeo 
		JOIN {artefact_europass_' . $type . '} ar ON ar.languageid = aeo.id
		WHERE ar.id = ? AND ar.artefact = ?';
	$parent = get_record_sql($sql, array($id, $artefact));
	$goto = 'viewcomposite.php?id=' . $parent->id . '&artefact=' . $parent->artefact;
} else {
	$goto = 'languages.php';
}


$tabs = PluginArtefactEuropass::composite_tabs();
define('EUROPASS_SUBPAGE', $tabs[$type]);

if ($a->get('owner') != $USER->get('id')) {
    throw new AccessDeniedException(get_string('notartefactowner', 'error'));
}

$elements = call_static_method(generate_artefact_class_name($type), 'get_addform_elements');
$elements['submit'] = array(
    'type' => 'submitcancel',
    'value' => array(get_string('save'), get_string('cancel')),
    'goto' => get_config('wwwroot') . 'artefact/europass/' . $goto,
);
$elements['compositetype'] = array(
    'type' => 'hidden',
    'value' => $type,
);
$cform = array(
    'name' => 'add' . $type,
    'plugintype' => 'artefact',
    'pluginname' => 'europass',
    'elements' => $elements,
    'successcallback' => 'langcompositeformedit_submit',
);

$a->populate_form($cform, $id, $type);
$compositeform = pieform($cform);

$smarty = smarty();
$smarty->assign('compositeform', $compositeform);
$smarty->assign('composite', $type);
$smarty->assign('PAGEHEADING', TITLE);
$smarty->assign('SUBPAGENAV', PluginArtefactEuropass::submenu_items());
$smarty->display('artefact:europass:editcomposite.tpl');
