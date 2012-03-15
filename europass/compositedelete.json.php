<?php
/**
 * Mahara: Electronic portfolio, weblog, resume builder and social networking
 * Copyright (C) 2006-20012 Catalyst IT Ltd and others; see:
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

define('INTERNAL', 1);
define('JSON', 1);

require(dirname(dirname(dirname(__FILE__))) . '/init.php');
require_once(get_config('docroot') . 'artefact/lib.php');

$id = param_integer('id');
$artefact = param_integer('artefact');


$a = artefact_instance_from_id($artefact);

if ($a->get('owner') != $USER->get('id')) {
    throw new AccessDeniedException(get_string('notartefactowner', 'error'));
}

// If deleting foreign language, than delete it's diplomas and experiences first!
if ($a->get('artefacttype') == 'otherlanguage') {
	delete_records('artefact_europass_languagediploma', 'languageid', $id);
	delete_records('artefact_europass_languageexperience', 'languageid', $id);
}
delete_records($a->get_other_table_name(), 'id', $id);
$count = count_records($a->get_other_table_name(), 'artefact', $artefact);
if (empty($count)) {
    $a->delete();
}
else {
    $a->set('mtime', time());
    $a->commit();
}

switch ($a->get('artefacttype')) {
	case 'languagediploma': json_reply(null, get_string('languagediplomadeleted', 'artefact.europass')); break;
	case 'languageexperience': json_reply(null, get_string('languageexperiencedeleted', 'artefact.europass')); break;
	default: json_reply(null, get_string('languagedeleted', 'artefact.europass'));
}

?>
