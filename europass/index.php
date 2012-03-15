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
define('EUROPASS_SUBPAGE', 'index');

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


// initialize and load existing profile information
$element_list = call_static_method('ArtefactTypeProfile', 'get_all_fields');
$profilefields = array('firstname' => null,	'lastname' => null, 'email' => null, 'address' => null,	'city' => null,	'country' => null, 'homenumber' => null, 'mobilenumber' => null, 'faxnumber' => null);
$profile_data = get_records_select_array('artefact', "owner=? AND artefacttype IN (" . join(",",array_map(create_function('$a','return db_quote($a);'),array_keys($element_list))) . ")", array($USER->get('id')));

if ($profile_data) {
    foreach ($profile_data as $field) {
        $profilefields[$field->artefacttype] = $field->title;
    }
}

$profilefields['email'] = array();
$profilefields['email']['all'] = get_records_array('artefact_internal_profile_email', 'owner', $USER->get('id'));
$profilefields['email']['validated'] = array();
$profilefields['email']['unvalidated'] = array();
if ($profilefields['email']['all']) {
    foreach ($profilefields['email']['all'] as $email) {
        if ($email->verified) {
            $profilefields['email']['validated'][] = $email->email;
        }
        else {
            $profilefields['email']['unvalidated'][] = $email->email;
        }

        if ($email->principal) {
            $profilefields['email']['default'] = $email->email;
        }
    }
}

// User's Personal information
$personalinformation = null;
try { $personalinformation = artefact_instance_from_type('personalinformation'); }
catch (Exception $e) { }

// Locations for various buttons and graphics
$profilelocation = get_config('wwwroot') . 'artefact/internal/index.php?fs=contact';
$employmentlocation = get_config('wwwroot') . 'artefact/resume/employment.php';
$topbanner = get_config('wwwroot') . 'artefact/europass/images/topbanner.png';
$rightlogo = get_config('wwwroot') . 'artefact/europass/images/rightlogo.png';

// Find out, if Mahara Pieforms are updated (newer than Mahara 1.2.0) - if they can handle LABELESCAPED...
$pieformfile = file_get_contents('../../lib/pieforms/pieform.php');
if (strpos($pieformfile,'labelescaped') === false) { $labelescapedvalue = false; }
else { $labelescapedvalue = true; }


$profileaboutform = pieform(array(
    'name'       => 'profileidentification',
    'plugintype' => 'artefact',
    'pluginname' => 'europass',
    'jsform'     => true,
    'method'     => 'post',
    'elements'   => array(
		'blankheaderline' => array(
			'type' => 'html',
			'labelhtml' => '<div style="width:180px;">&nbsp;</div>',
			'value' => '&nbsp;',
		),
        'europassheader' => array(
			'type'  => 'html',
			'labelhtml' => '<span id="profileicon"><a href="' . get_config('wwwroot') . 'artefact/file/profileicons.php"><img src="' . get_config('wwwroot') . 'thumb.php?type=profileiconbyid&maxsize=100&id=' . intval($USER->get('profileicon')) . '" alt=""></a></span>',
			'value' => '<img src="' . get_config('wwwroot') . 'artefact/europass/images/logo_europass.png" alt="Europass" style="margin-left:10px; margin-top:15px">',
		),
		'firstname' => array(
			'type' => 'html',
			'labelhtml' => get_string('identification-firstname','artefact.europass'),
			'value' => ($profilefields['firstname'] == null ? '' : $profilefields['firstname']),
			'help' => true,
		),
		'lastname' => array(
			'type' => 'html',
			'labelhtml' => get_string('identification-lastname','artefact.europass'),
			'value' => ($profilefields['lastname'] == null ? '' : $profilefields['lastname']),
			'help' => true,
		),
		'email' => array(
			'type' => 'html',
			'labelhtml' => get_string('identification-contactinfo-email','artefact.europass'),
			'value' => ($profilefields['email']['default'] == null ? '' : $profilefields['email']['default']),
			'help' => true,
		),
		'addressLine' => array(
			'type' => 'html',
			'labelhtml' => get_string('identification-addressLine','artefact.europass'),
			'value' => ($profilefields['address'] == null ? '' : nl2br($profilefields['address'])),
			'help' => true,
		),
		'municipality' => array(
			'type' => 'html',
			'labelhtml' => get_string('identification-municipality','artefact.europass'),
			'value' => ($profilefields['city'] == null ? '' : $profilefields['city']),
			'help' => true,
		),
		'country' => array(
			'type' => 'html',
			'labelhtml' => get_string('identification-country','artefact.europass'),
			'value' =>  ($profilefields['country']== null ? '' : get_string('country.'.$profilefields['country'], 'artefact.europass')),
			'help' => true,
		),
		'telephone' => array(
			'type' => 'html',
			'labelhtml' => get_string('identification-contactinfo-telephone','artefact.europass'),
			'value' => ($profilefields['homenumber'] == null ? '' : $profilefields['homenumber']),
			'help' => true,
		),
		'mobile' => array(
			'type' => 'html',
			'labelhtml' => get_string('identification-contactinfo-mobile','artefact.europass'),
			'value' => ($profilefields['mobilenumber'] == null ? '' : $profilefields['mobilenumber']),
			'help' => true,
		),
		'fax' => array(
			'type' => 'html',
			'labelhtml' => get_string('identification-contactinfo-fax','artefact.europass'),
			'value' => ($profilefields['faxnumber'] == null ? '' : $profilefields['faxnumber']),
			'help' => true,
		),
        'edit' => array(
            'type' => 'cancel',
            'value' => get_string('edit', 'mahara'),
			'goto' => get_config('wwwroot') . 'artefact/internal/index.php?fs=contact',
        ),
	)
));

$profilepersonalform = pieform(array(
    'name'       => 'personalidentification',
    'plugintype' => 'artefact',
    'pluginname' => 'europass',
    'jsform'     => true,
    'method'     => 'post',
    'elements'   => array(
		'blankline1' => array(
			'type' => 'html',
			'labelhtml' => '<div style="width:180px;">&nbsp;</div>',
			'value' => '&nbsp;',
		),
        'birthdate' => array(
            'type' => 'html',
            'labelhtml' => get_string('identification-birthdate', 'artefact.europass'),
            'value' => (!empty($personalinformation) ? ($personalinformation->get_composite('dateofbirth') <> null ? strftime('%Y/%m/%d', $personalinformation->get_composite('dateofbirth')+3600) : '') : ''), // See: artefact/resume/index.php about adding 3600 to dateofbirth
			'help' => true,
        ),
        'birthplace' => array(
            'type' => 'html',
            'labelhtml' => get_string('identification-birthplace', 'artefact.europass'),
            'value' => (!empty($personalinformation) ? $personalinformation->get_composite('placeofbirth') : null),
        ),  
        'nationality' => array(
            'type' => 'html',
            'labelhtml' => get_string('identification-nationality', 'artefact.europass'),
            'value' => (!empty($personalinformation) ? $personalinformation->get_composite('citizenship') : null),
			'help' => true,
        ),
        'gender' => array(
            'type' => 'html', 
            'labelhtml' => get_string('identification-gender', 'artefact.europass'),
            'value' => (!empty($personalinformation) ? ($personalinformation->get_composite('gender') == 'male' ? get_string('male', 'artefact.resume') : get_string('female', 'artefact.resume')) : null),
        ),
        'edit' => array(
            'type' => 'cancel',
            'value' => get_string('edit', 'mahara'),
			'goto' => get_config('wwwroot') . 'artefact/resume/',
        ),
	)
));


$smarty = smarty();
// Check if Mahara release is older than 1.3.0
if (get_config('version') < 2010083102) {
	$SESSION->add_info_msg(get_string('newerversionforcompatibility', 'artefact.europass'));
	$smarty->assign('mahararelease', 1);
}
$smarty->assign('topbanner', $topbanner);
$smarty->assign('rightlogo', $rightlogo);
$smarty->assign('profileaboutform', $profileaboutform);
$smarty->assign('profilelocation', $profilelocation);
$smarty->assign('profilepersonalform', $profilepersonalform);
$smarty->assign('PAGEHEADING', get_string('europass', 'artefact.europass'));
$smarty->assign('SUBPAGENAV', PluginArtefactEuropass::submenu_items());
$smarty->display('artefact:europass:index.tpl');

?>
