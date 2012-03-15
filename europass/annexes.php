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
define('SECTION_PAGE', 'index');
define('EUROPASS_SUBPAGE', 'annexes');

require_once(dirname(dirname(dirname(__FILE__))) . '/init.php');
define('TITLE', get_string('europass', 'artefact.europass'));
require_once('pieforms/pieform.php');
require_once(get_config('docroot') . 'artefact/lib.php');
safe_require('artefact', 'internal');

// Check if XSLT extension is loaded properly, because we will need it...
// The XSL extension implements the XSL standard, performing XSLT transformations using the libxslt library.
$xslext = extension_loaded('xsl');

if (!$xslext) {
    $smarty = smarty();
    $missingextensions = array();
    !$xslext && $missingextensions[] = 'xsl';
    $smarty->assign('missingextensions', $missingextensions);
    $smarty->display('artefact:europass:index.tpl');
    exit;
}

$additionalinfo = null;
$annexes = null;

try { $additionalinfo = artefact_instance_from_type('additionalinfo'); }
catch (Exception $e) {}
try { $annexes = artefact_instance_from_type('annexes'); }
catch (Exception $e) {}


// Locations for various buttons and graphics
$topbanner = get_config('wwwroot') . 'artefact/europass/images/topbanner.png';
$rightlogo = get_config('wwwroot') . 'artefact/europass/images/rightlogo.png';


$annexesform = pieform(array(
    'name' => 'europassform',
    //'jsform' => true,
    'plugintype' => 'artefact',
    'pluginname' => 'europass',
    'elements' => array(
		'additionalinfo' => array(
			'type' => 'textarea',
			'rows' => 6,  // 8 for wysiwyg
			'cols' => 60, // 50 for wysiwyg
			'defaultvalue' => ((!empty($additionalinfo)) ? $additionalinfo->get('description') : null),
			'labelhtml' => get_string('additionalinfo', 'artefact.europass'),
			'help' => true,
		),
		'annexes' => array(
			'type' => 'textarea',
			'rows' => 6,  // 8 for wysiwyg
			'cols' => 60, // 50 for wysiwyg
			'defaultvalue' => ((!empty($annexes)) ? $annexes->get('description') : null),
			'labelhtml' => get_string('annexes', 'artefact.europass'),
			'help' => false,
		),
        'submit' => array(
            'type' => 'submit',
            'value' => get_string('save', 'mahara'),
        ),
		// For correct redirect...
		'redirect' => array(
			'type' => 'hidden',
			'value' => 'annexes',
		),
    ),
));


$smarty = smarty(array('tablerenderer'));
// Check if Mahara release is older than 1.3.0
if (get_config('version') < 2010083102) {
	$SESSION->add_info_msg(get_string('newerversionforcompatibility', 'artefact.europass'));
	$smarty->assign('mahararelease', 1);
}
$smarty->assign('topbanner', $topbanner);
$smarty->assign('rightlogo', $rightlogo);
$smarty->assign('annexesform', $annexesform);
$smarty->assign('PAGEHEADING', get_string('europass', 'artefact.europass'));
$smarty->assign('SUBPAGENAV', PluginArtefactEuropass::submenu_items());
$smarty->display('artefact:europass:annexes.tpl');

?>
