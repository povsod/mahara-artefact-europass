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
safe_require('artefact', 'europass');


$limit = param_integer('limit', null);
$offset = param_integer('offset', 0);
$type = param_alpha('type');

$data = array();
$count = 0;

$othertable = 'artefact_europass_' . $type;

$owner = $USER->get('id');
$langid = $SESSION->get('languageid');

$data = array();
if ($type == 'mothertongue' || $type == 'otherlanguage') {
    $sql = 'SELECT ar.*, a.owner
        FROM {artefact} a 
        JOIN {' . $othertable . '} ar ON ar.artefact = a.id
        WHERE a.owner = ? AND a.artefacttype = ?
        ORDER BY ar.displayorder';
	$data = get_records_sql_array($sql, array($owner, $type));
} else {
    $sql = 'SELECT ar.*, a.owner
        FROM {artefact} a 
        JOIN {' . $othertable . '} ar ON ar.artefact = a.id
        WHERE a.owner = ? AND a.artefacttype = ? AND ar.languageid = ?
        ORDER BY ar.displayorder';
	$data = get_records_sql_array($sql, array($owner, $type, $langid));
}


// Dinamically add language name from language ISO code in Mahara default language...
if (!empty($data)) {
	foreach ($data as &$row) {
		if (!empty($row->language)) {
			$row->languagename = get_string('language.'.$row->language, 'artefact.europass');
		}
	}
}


$count = count_records('artefact', 'owner', $owner, 'artefacttype', $type);

echo json_encode(array(
    'data' => $data,
    'limit' => $limit,
    'offset' => $offset,
    'count' => $count,
    'type' => $type));

?>
