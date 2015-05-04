<?php
/**
 *
 * @package    mahara
 * @subpackage artefact-europass
 * @author     Gregor Anzelj
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2009-2015 Gregor Anzelj, gregor.anzelj@gmail.com
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
