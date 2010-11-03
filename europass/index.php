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
define('SECTION_PLUGINTYPE', 'artefact');
define('SECTION_PLUGINNAME', 'europass');
define('SECTION_PAGE', 'index');

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


$application = null;
$socialskill = null;
$organisationalskill = null;
$technicalskill = null;
$computerskill = null;
$artisticskill = null;
$drivinglicence = null;
$additionalinfo = null;
$annexes = null;

try { $application = artefact_instance_from_type('application'); }
catch (Exception $e) {}
try { $socialskill = artefact_instance_from_type('socialskill'); }
catch (Exception $e) {}
try { $organisationalskill = artefact_instance_from_type('organisationalskill'); }
catch (Exception $e) {}
try { $technicalskill = artefact_instance_from_type('technicalskill'); }
catch (Exception $e) {}
try { $computerskill = artefact_instance_from_type('computerskill'); }
catch (Exception $e) {}
try { $artisticskill = artefact_instance_from_type('artisticskill'); }
catch (Exception $e) {}
try {
	$drivinglicence = artefact_instance_from_type('drivinglicence');
	$drivinglicence = unserialize($drivinglicence->get('description'));
}
catch (Exception $e) {}
try { $additionalinfo = artefact_instance_from_type('additionalinfo'); }
catch (Exception $e) {}
try { $annexes = artefact_instance_from_type('annexes'); }
catch (Exception $e) {}


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

// User's Employment history
$artefact_id = get_field('artefact', 'id', 'artefacttype', 'employmenthistory', 'owner', $USER->get('id'));
if ($artefact_id !== false) {
	$employment_data = get_records_select_array('artefact_resume_employmenthistory', "artefact=?", array($artefact_id));
} else {
	$employment_data = array();
}

// User's Education history
$artefact_id = get_field('artefact', 'id', 'artefacttype', 'educationhistory', 'owner', $USER->get('id'));
if ($artefact_id !== false) {
	$education_data = get_records_select_array('artefact_resume_educationhistory', "artefact=?", array($artefact_id));
} else {
	$education_data = array();
}

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
            'value' => (!empty($personalinformation) ? ($personalinformation->get_composite('dateofbirth') <> null ? strftime(get_string('strftimedate'), $personalinformation->get_composite('dateofbirth')) : '') : ''),
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

$europassform = pieform(array(
    'name' => 'europassform',
    'jsform' => true,
    'plugintype' => 'artefact',
    'pluginname' => 'europass',
    'successcallback' => 'europassform_submit',
    'jssuccesscallback' => 'europassformSaveCallback',
    'elements' => array(
		'blankline2' => array(
			'type' => 'html',
			'labelhtml' => '<div style="width:180px;">&nbsp;</div>',
			'value' => '&nbsp;',
		),
		'application' => array(
			'type' => 'text',
			'labelhtml' => str_replace('/', '/<br>', get_string('application','artefact.europass')),
			'defaultvalue' => ((!empty($application)) ? $application->get('description') : null),
			'help' => true,
		),
        'skills' => array(
			'type' => 'fieldset',
			'legend'      => get_string('skills-and-competences', 'artefact.europass'),
			'collapsible' => true,
			'collapsed' => true,
			'elements'    => array(
				'socialskill' => array(
					'type' => 'wysiwyg',
					'rows' => 8,
					'cols' => 50,
					'defaultvalue' => ((!empty($socialskill)) ? $socialskill->get('description') : null),
					'title' => get_string('socialskill', 'artefact.europass'),
					'help' => true,
				),
				'organisationalskill' => array(
					'type' => 'wysiwyg',
					'rows' => 8,
					'cols' => 50,
					'defaultvalue' => ((!empty($organisationalskill)) ? $organisationalskill->get('description') : null),
					'title' => get_string('organisationalskill', 'artefact.europass'),
					'help' => true,
				),
				'technicalskill' => array(
					'type' => 'wysiwyg',
					'rows' => 8,
					'cols' => 50,
					'defaultvalue' => ((!empty($technicalskill)) ? $technicalskill->get('description') : null),
					'title' => get_string('technicalskill', 'artefact.europass'),
					'help' => true,
				),
				'computerskill' => array(
					'type' => 'wysiwyg',
					'rows' => 8,
					'cols' => 50,
					'defaultvalue' => ((!empty($computerskill)) ? $computerskill->get('description') : null),
					'title' => get_string('computerskill', 'artefact.europass'),
					'help' => true,
				),
				'artisticskill' => array(
					'type' => 'wysiwyg',
					'rows' => 8,
					'cols' => 50,
					'defaultvalue' => ((!empty($artisticskill)) ? $artisticskill->get('description') : null),
					'title' => get_string('artisticskill', 'artefact.europass'),
					'help' => true,
				),
			)
		),
        'drivinglicence' => array(
			'type'        => 'fieldset',
			'legend'      => get_string('drivinglicence', 'artefact.europass'),
			'collapsible' => true,
			'collapsed' => true,
			'elements'    => array(
				'A1' => array(
					'type'    => 'date',
					'maxyear' => date('Y'),
					'labelescaped' => true,
					'title' => ($labelescapedvalue == true ? '<img src="' . get_config('wwwroot') . '/artefact/europass/images/a1.png" width="98" height="20">' : 'A1'),
					'defaultvalue' => ((!empty($drivinglicence['A1'])) ? $drivinglicence['A1'] : null),
				),
				'A' => array(
					'type'    => 'date',
					'maxyear' => date('Y'),
					'labelescaped' => true,
					'title' => ($labelescapedvalue == true ? '<img src="' . get_config('wwwroot') . '/artefact/europass/images/a.png" width="98" height="20">' : 'A'),
					'defaultvalue' => ((!empty($drivinglicence['A'])) ? $drivinglicence['A'] : null),
				),
				'B' => array(
					'type'    => 'date',
					'maxyear' => date('Y'),
					'labelescaped' => true,
					'title' => ($labelescapedvalue == true ? '<img src="' . get_config('wwwroot') . '/artefact/europass/images/b.png" width="98" height="20">' : 'B'),
					'defaultvalue' => ((!empty($drivinglicence['B'])) ? $drivinglicence['B'] : null),
				),
				'BE' => array(
					'type'    => 'date',
					'maxyear' => date('Y'),
					'labelescaped' => true,
					'title' => ($labelescapedvalue == true ? '<img src="' . get_config('wwwroot') . '/artefact/europass/images/be.png" width="98" height="20">' : 'BE'),
					'defaultvalue' => ((!empty($drivinglicence['BE'])) ? $drivinglicence['BE'] : null),
				),
				'B1' => array(
					'type'    => 'date',
					'maxyear' => date('Y'),
					'labelescaped' => true,
					'title' => ($labelescapedvalue == true ? '<img src="' . get_config('wwwroot') . '/artefact/europass/images/b1.png" width="98" height="20">' : 'B1'),
					'defaultvalue' => ((!empty($drivinglicence['B1'])) ? $drivinglicence['B1'] : null),
				),
				'C' => array(
					'type'    => 'date',
					'maxyear' => date('Y'),
					'labelescaped' => true,
					'title' => ($labelescapedvalue == true ? '<img src="' . get_config('wwwroot') . '/artefact/europass/images/c.png" width="98" height="20">' : 'C'),
					'defaultvalue' => ((!empty($drivinglicence['C'])) ? $drivinglicence['C'] : null),
				),
				'CE' => array(
					'type'    => 'date',
					'maxyear' => date('Y'),
					'labelescaped' => true,
					'title' => ($labelescapedvalue == true ? '<img src="' . get_config('wwwroot') . '/artefact/europass/images/ce.png" width="98" height="20">' : 'CE'),
					'defaultvalue' => ((!empty($drivinglicence['CE'])) ? $drivinglicence['CE'] : null),
				),
				'C1' => array(
					'type'    => 'date',
					'maxyear' => date('Y'),
					'labelescaped' => true,
					'title' => ($labelescapedvalue == true ? '<img src="' . get_config('wwwroot') . '/artefact/europass/images/c1.png" width="98" height="20">' : 'C1'),
					'defaultvalue' => ((!empty($drivinglicence['C1'])) ? $drivinglicence['C1'] : null),
				),
				'C1E' => array(
					'type'    => 'date',
					'maxyear' => date('Y'),
					'labelescaped' => true,
					'title' => ($labelescapedvalue == true ? '<img src="' . get_config('wwwroot') . '/artefact/europass/images/c1e.png" width="98" height="20">' : 'C1E'),
					'defaultvalue' => ((!empty($drivinglicence['C1E'])) ? $drivinglicence['C1E'] : null),
				),
				'D' => array(
					'type'    => 'date',
					'maxyear' => date('Y'),
					'labelescaped' => true,
					'title' => ($labelescapedvalue == true ? '<img src="' . get_config('wwwroot') . '/artefact/europass/images/d.png" width="98" height="20">' : 'D'),
					'defaultvalue' => ((!empty($drivinglicence['D'])) ? $drivinglicence['D'] : null),
				),
				'DE' => array(
					'type'    => 'date',
					'maxyear' => date('Y'),
					'labelescaped' => true,
					'title' => ($labelescapedvalue == true ? '<img src="' . get_config('wwwroot') . '/artefact/europass/images/de.png" width="98" height="20">' : 'DE'),
					'defaultvalue' => ((!empty($drivinglicence['DE'])) ? $drivinglicence['DE'] : null),
				),
				'D1' => array(
					'type'    => 'date',
					'maxyear' => date('Y'),
					'labelescaped' => true,
					'title' => ($labelescapedvalue == true ? '<img src="' . get_config('wwwroot') . '/artefact/europass/images/d1.png" width="98" height="20">' : 'D1'),
					'defaultvalue' => ((!empty($drivinglicence['D1'])) ? $drivinglicence['D1'] : null),
				),
				'D1E' => array(
					'type'    => 'date',
					'maxyear' => date('Y'),
					'labelescaped' => true,
					'title' => ($labelescapedvalue == true ? '<img src="' . get_config('wwwroot') . '/artefact/europass/images/d1e.png" width="98" height="20">' : 'D1E'),
					'defaultvalue' => ((!empty($drivinglicence['D1E'])) ? $drivinglicence['D1E'] : null),
				),
			)
		),
		'additionalinfo' => array(
			'type' => 'wysiwyg',
			'rows' => 8,
			'cols' => 50,
			'defaultvalue' => ((!empty($additionalinfo)) ? $additionalinfo->get('description') : null),
			'title' => get_string('additionalinfo', 'artefact.europass'),
			'help' => true,
		),
		'annexes' => array(
			'type' => 'wysiwyg',
			'rows' => 8,
			'cols' => 50,
			'defaultvalue' => ((!empty($annexes)) ? $annexes->get('description') : null),
			'title' => get_string('annexes', 'artefact.europass'),
			'help' => false,
		),
        'submit' => array(
            'type' => 'submit',
            'value' => get_string('save', 'mahara'),
        ),
    ),
));


$cancelstr = get_string('cancel');
$addstr = get_string('add');
$editstr = get_string('edit');
$delstr = get_string('delete');
$confirmdelstr = get_string('languagedeleteconfirm', 'artefact.europass');
$imagemoveblockup   = json_encode($THEME->get_url('images/move-block-up.png'));
$imagemoveblockdown = json_encode($THEME->get_url('images/move-block-down.png'));
$upstr = get_string('moveup', 'artefact.europass');
$downstr = get_string('movedown', 'artefact.europass');

$smarty = smarty(array('tablerenderer'));

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
$smarty->assign('employment_data', $employment_data);
$smarty->assign('education_data', $education_data);
$smarty->assign('employmentlocation', $employmentlocation);
$smarty->assign('europassform', $europassform);

$inlinejs = <<<EOF

function europassformSaveCallback() {
    document.location='index.php';
    return false;
}

var tableRenderers = {};

function toggleLanguageForm(type) {
    var elemName = ''; 
    elemName = type + 'form';
    if (hasElementClass(elemName, 'hidden')) {
        removeElementClass(elemName, 'hidden');
        $('add' + type + 'button').innerHTML = '{$cancelstr}';
    }
    else {
        $('add' + type + 'button').innerHTML = '{$addstr}';
        addElementClass(elemName, 'hidden'); 
    }
}

function languageSaveCallback(form, data) {
    key = form.id.substr(3);
    tableRenderers[key].doupdate(); 
    toggleLanguageForm(key);
    // Can't reset() the form here, because its values are what were just submitted, 
    // thanks to pieforms
    forEach(form.elements, function(element) {
        if (hasElementClass(element, 'text') || hasElementClass(element, 'textarea')) {
            element.value = '';
        }
    });
}

function deleteLanguage(type, id, artefact) {
    if (confirm('{$confirmdelstr}')) {
        sendjsonrequest('languagedelete.json.php',
            {'id': id, 'artefact': artefact},
            'GET', 
            function(data) {
                tableRenderers[type].doupdate();
            },
            function() {
                // @todo error
            }
        );
    }
    return false;
}

function moveLanguage(type, id, artefact, direction) {
    sendjsonrequest('languagemove.json.php',
        {'id': id, 'artefact': artefact, 'direction':direction},
        'GET', 
        function(data) {
            tableRenderers[type].doupdate();
        },
        function() {
            // @todo error
        }
    );
    return false;
}
EOF;

$inlinejs .= ArtefactTypeEuropassLanguage::get_showhide_language_js();

$languageforms = array();
foreach (ArtefactTypeEuropassLanguage::get_language_artefact_types() as $languagetype) {
    $inlinejs .= <<<EOF
tableRenderers.{$languagetype} = new TableRenderer(
    '{$languagetype}list',
    'language.json.php',
    [
EOF;
    $inlinejs .= call_static_method(generate_artefact_class_name($languagetype), 'get_tablerenderer_js');
    $inlinejs .= <<<EOF

        function (r) {
            return TD(null, A({'href': 'editlanguage.php?id=' + r.id + '&artefact=' + r.artefact}, '{$editstr}'));
        },
        function (r, d) {
           var link = A({'href': ''}, '{$delstr}');
            connect(link, 'onclick', function (e) {
                e.stop();
                return deleteLanguage(d.type, r.id, r.artefact);
            });
            return TD(null, link);
        },
        function (r, d) {
            var buttons = [];
            if (r._rownumber > 1) {
                var up = A({'href': ''}, IMG({'src': {$imagemoveblockup}, 'alt':'{$upstr}'}));
                connect(up, 'onclick', function (e) {
                    e.stop();
                    return moveLanguage(d.type, r.id, r.artefact, 'up');
                });
                buttons.push(up);
            }
            if (!r._last) {
                var down = A({'href': ''}, IMG({'src': {$imagemoveblockdown}, 'alt':'{$downstr}'}));
                connect(down, 'onclick', function (e) {
                    e.stop();
                    return moveLanguage(d.type, r.id, r.artefact, 'down');
                });
                buttons.push(' ');
                buttons.push(down);
            }
            return TD({'style':'text-align:center;'}, buttons);
        }
    ]
);

tableRenderers.{$languagetype}.type = '{$languagetype}';
tableRenderers.{$languagetype}.statevars.push('type');
tableRenderers.{$languagetype}.emptycontent = '';
tableRenderers.{$languagetype}.updateOnLoad();

EOF;
    $elements = call_static_method(generate_artefact_class_name($languagetype), 'get_addform_elements');
    $elements['submit'] = array(
        'type' => 'submit',
        'value' => get_string('save'),
    );
    $elements['languagetype'] = array(
        'type' => 'hidden',
        'value' => $languagetype,
    );
    $cform = array(
        'name' => 'add' . $languagetype,
        'plugintype' => 'artefact',
        'pluginname' => 'europass',
        'elements' => $elements, 
        'jsform' => true,
        'successcallback' => 'languageform_submit',
        'jssuccesscallback' => 'languageSaveCallback',
    );
    $languageforms[$languagetype] = pieform($cform);
} // end language loop


$smarty->assign('languageforms', $languageforms);
$smarty->assign('INLINEJAVASCRIPT', $inlinejs);
$smarty->assign('PAGEHEADING', get_string('europass', 'artefact.europass'));
$smarty->display('artefact:europass:index.tpl');

?>
