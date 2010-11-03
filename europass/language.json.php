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

define('INTERNAL', 1);
define('JSON', 1);

if (isset($_POST['view'])) {
    define('PUBLIC', 1);
}

require(dirname(dirname(dirname(__FILE__))) . '/init.php');
safe_require('artefact', 'europass');

$limit = param_integer('limit', null);
$offset = param_integer('offset', 0);
$type = param_alpha('type');
$view = param_integer('view', 0);

$data = array();
$count = 0;

$othertable = 'artefact_europass_' . $type;

$owner = $USER->get('id');

$sql = 'SELECT ar.*, a.owner
    FROM {artefact} a 
    JOIN {' . $othertable . '} ar ON ar.artefact = a.id
    WHERE a.owner = ? AND a.artefacttype = ?
    ORDER BY ar.displayorder';

if (!empty($view)) { 
    if (!can_view_view($view)) {
        throw new AccessDeniedException();
    }
    require_once('view.php');
    $v = new View($view);
    $owner = $v->get('owner');
}

if (!$data = get_records_sql_array($sql, array($owner, $type))) {
    $data = array();
}

$count = count_records('artefact', 'owner', $owner, 'artefacttype', $type);

// For converting ISO 216 language code to language name...
if ($data) {
    foreach ($data as $field) {
		$field->langcode = $field->language;
        $field->language = get_string('language.'.$field->language, 'artefact.europass');
    }
}

echo json_encode(array(
    'data' => $data,
    'limit' => $limit,
    'offset' => $offset,
    'count' => $count,
    'type' => $type));

?>
