<?php

// we need to use artefact_instance_from_type function, so we need to include appropriate lib.php
require_once(get_config('docroot') . 'artefact/lib.php');


// Converts '<' to &lt; and '>' to &gt;
function replacehtmlchars($html) {
	return str_replace(array('<', '>'), array('&lt;', '&gt;'), $html);
}

// Converts '<' to &lt; and '>' to &gt;
function ireplacehtmlchars($html) {
	return str_replace(array('&lt;', '&gt;'), array('<', '>'), $html);
}

// Checks and replaces all html entities, that will otherwise break XML node value.
function valid_xml_string($string) {
	// PHP's strip_tags() function will remove tags, but it doesn't remove scripts, styles,
	// and other unwanted invisible text between tags.
	$valid = preg_replace(
		array(
			// Remove invisible content
			'@<head[^>]*?>.*?</head>@siu',
			'@<style[^>]*?>.*?</style>@siu',
			'@<script[^>]*?.*?</script>@siu',
			'@<object[^>]*?.*?</object>@siu',
			'@<embed[^>]*?.*?</embed>@siu',
			'@<applet[^>]*?.*?</applet>@siu',
			'@<noframes[^>]*?.*?</noframes>@siu',
			'@<noscript[^>]*?.*?</noscript>@siu',
			'@<noembed[^>]*?.*?</noembed>@siu',
			
			// Add line breaks before and after blocks
			'@<((br)|(hr)|(br /))>@iu',
			'@<((li))>@iu',
			'@<((/p))>@iu',
		),
		array(
			' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ', ' ',
			// \n = new line - must be inside double (not single) quotes!
			"\n\$0", "- \$0", "\n\n\$0",
		),
		$string);
	$valid = strip_tags($valid);
	$valid = replacehtmlchars($valid);
	return $valid;
}


// Gets date, stored in Mahara database and the chosen form of that date.
// Returns array e.g. $date, that contains date in following "europass" date form:
// $date['year'] returns YYYY, $date['month'] returns --MM and $date['day'] returns ---DD
function europass_date($date, $internaldateformat) {
	switch ($internaldateformat) {
		// internal date format dd/mm/yyyy, delimiters: slash, dot, or hyphen
		case 'dmy11':
		case 'dmy12':
		case 'dmy13':
			$datepieces = split('[/.-]', $date);
			if (isset($datepieces[0])) { $day   = $datepieces[0]; } else { $day   = null; }
			if (isset($datepieces[1])) { $month = $datepieces[1]; } else { $month = null; }
			if (isset($datepieces[2])) { $year  = $datepieces[2]; } else { $year  = null; }
			// If we didn't get the valid date, try to get at least a year...
			if (!is_numeric($day) or !is_numeric($month) or !is_numeric($year)) {
				list($year, $month, $day) = europass_year_only($date);
			}
			break;
		// internal date format dd/mm/yy, delimiters: slash, dot, or hyphen
		case 'dmy21':
		case 'dmy22':
		case 'dmy23':
			$datepieces = split('[/.-]', $date);
			if (isset($datepieces[0])) { $day   = $datepieces[0]; } else { $day   = null; }
			if (isset($datepieces[1])) { $month = $datepieces[1]; } else { $month = null; }
			if (isset($datepieces[2])) { $year  = $datepieces[2]; } else { $year  = null; }
			// If we didn't get the valid date, try to get at least a year...
			if (!is_numeric($day) or !is_numeric($month) or !is_numeric($year)) {
				list($year, $month, $day) = europass_year_only($date);
			}
			// converts year representation from yy to yyyy
			$fullyear = str_split(date("Y"), 2);
			if (date("y") >= $year) {$year = $fullyear[0].$year;}
			else {$year = strval(intval($fullyear[0])-1).$year;}
			break;
		// internal date format mm/dd/yyyy, delimiters: slash, dot, or hyphen
		case 'mdy11':
		case 'mdy12':
		case 'mdy13':	
			$datepieces = split('[/.-]', $date);
			if (isset($datepieces[0])) { $month = $datepieces[0]; } else { $month = null; }
			if (isset($datepieces[1])) { $day   = $datepieces[1]; } else { $day   = null; }
			if (isset($datepieces[2])) { $year  = $datepieces[2]; } else { $year  = null; }
			// If we didn't get the valid date, try to get at least a year...
			if (!is_numeric($day) or !is_numeric($month) or !is_numeric($year)) {
				list($year, $month, $day) = europass_year_only($date);
			}
			break;
		// internal date format mm/dd/yy, delimiters: slash, dot, or hyphen
		case 'mdy21':
		case 'mdy22':
		case 'mdy23':
			$datepieces = split('[/.-]', $date);
			if (isset($datepieces[0])) { $month = $datepieces[0]; } else { $month = null; }
			if (isset($datepieces[1])) { $day   = $datepieces[1]; } else { $day   = null; }
			if (isset($datepieces[2])) { $year  = $datepieces[2]; } else { $year  = null; }
			// If we didn't get the valid date, try to get at least a year...
			if (!is_numeric($day) or !is_numeric($month) or !is_numeric($year)) {
				list($year, $month, $day) = europass_year_only($date);
			}
			// converts year representation from yy to yyyy
			$fullyear = str_split(date("Y"), 2);
			if (date("y") >= $year) {$year = $fullyear[0].$year;}
			else {$year = strval(intval($fullyear[0])-1).$year;}
			break;
		// internal date format yyyy-mm-dd, delimiters: slash, dot, or hyphen
		case 'ymd11':
		case 'ymd12':
		case 'ymd13':
			$datepieces = split('[/.-]', $date);
			if (isset($datepieces[0])) { $year  = $datepieces[0]; } else { $year  = null; }
			if (isset($datepieces[1])) { $month = $datepieces[1]; } else { $month = null; }
			if (isset($datepieces[2])) { $day   = $datepieces[2]; } else { $day   = null; }
			// If we didn't get the valid date, try to get at least a year...
			if (!is_numeric($day) or !is_numeric($month) or !is_numeric($year)) {
				list($year, $month, $day) = europass_year_only($date);
			}
			break;
		// internal date format yy-mm-dd, delimiters: slash, dot, or hyphen
		case 'ymd21':
		case 'ymd22':
		case 'ymd23':
			$datepieces = split('[/.-]', $date);
			if (isset($datepieces[0])) { $year  = $datepieces[0]; } else { $year  = null; }
			if (isset($datepieces[1])) { $month = $datepieces[1]; } else { $month = null; }
			if (isset($datepieces[2])) { $day   = $datepieces[2]; } else { $day   = null; }
			// If we didn't get the valid date, try to get at least a year...
			if (!is_numeric($day) or !is_numeric($month) or !is_numeric($year)) {
				list($year, $month, $day) = europass_year_only($date);
			}
			// converts year representation from yy to yyyy
			$fullyear = str_split(date("Y"), 2);
			if (date("y") >= $year) {$year = $fullyear[0].$year;}
			else {$year = strval(intval($fullyear[0])-1).$year;}
			break;
		// internal date format yyyy (year only)
		case 'yonly':
			list($year, $month, $day) = array($date, null, null);
			// If we didn't get the valid date, try to get at least a year...
			if (!is_numeric($day) or !is_numeric($month) or !is_numeric($year)) {
				list($year, $month, $day) = europass_year_only($date);
			}
			break;
		// all other cases of internal date format - try to extract year...
		default:
			list($year, $month, $day) = europass_year_only($date);
	}
	// return europass style formatted date
	return array('day' => '---'.str_pad($day, 2, '0', STR_PAD_LEFT), 'month' => '--'.str_pad($month, 2, '0', STR_PAD_LEFT), 'year' => $year);
}


// If the date is "strange", try to extract at least a year
function europass_year_only($date) {
	// if there aren't any spaces in the date string...
	if (strpos($date, ' ') === false) { $pieces = split('[/.-]', $date); }
	else { $pieces = explode(' ', $date); }

	$yearpiece = '';
	foreach ($pieces as $piece) {
		if (intval($piece) >= 1000 and intval($piece) <= 9999) $yearpiece = $piece;
	}
	
	return array($yearpiece, null, null);
}



function generate_europasscv_xml($userid, $showHTML=false, $locale='en_GB', $internaldateformat='dmy11', $externaldateformat='/numeric/long', $photograph=null) {

	// =======================
	// Load values from Mahara database
	// =======================

	// load user's existing contact information
	$element_list = array('firstname' => 'text', 'lastname' => 'text', 'email' => 'emaillist', 'address' => 'textarea', 'city' => 'text', 'country' => 'select', 'homenumber' => 'text', 'mobilenumber' => 'text', 'faxnumber' => 'text', 'officialwebsite' => 'text');
	$contactinfo = array('firstname' => null, 'lastname' => null, 'email' => null, 'address' => null,	'city' => null,	'country' => null, 'homenumber' => null, 'mobilenumber' => null, 'faxnumber' => null, 'officialwebsite' => null);
	$contactinfo_data = get_records_select_array('artefact', "owner=? AND artefacttype IN (" . join(",",array_map(create_function('$a','return db_quote($a);'),array_keys($element_list))) . ")", array($userid));
	
	if ($contactinfo_data) {
		foreach ($contactinfo_data as $field) {
			$contactinfo[$field->artefacttype] = $field->title;
		}
	}
	
	// load user's existing demographics information
	$demographics = null;
	try { $demographics = artefact_instance_from_type('personalinformation', $userid); }
	catch (Exception $e) { }
	((!empty($demographics)) ? $citizenship = $demographics->get_composite('citizenship'): $citizenship = null);
	if (strlen($citizenship) == 2 or in_array($citizenship[2], array(',', ';', '/', '-'))) {
		$nationalities_list = explode(",", str_replace(" ", "", $demographics->get_composite('citizenship')));
	} else {
		$nationalities_list = array(); // no nationality OR nationality value(s) not equals ISO 3166-1-alpha-2 code(s)
	}
	
	// user's application for desired employment / occupational field
	$application = null;
	try { $application = artefact_instance_from_type('application', $userid); }
	catch (Exception $e) { }
	if ($application == array()) $application_data = null;
	else {
		if ($application->get('description') == null) $application_data = null;
		else $application_data = $application->get('description');
	}
	
	// load user's existing workexperience
	$artefact_id = get_field('artefact', 'id', 'artefacttype', 'employmenthistory', 'owner', $userid);
	if ($artefact_id !== false) {
		$workexperience_list = get_records_select_array('artefact_resume_employmenthistory', "artefact=?", array($artefact_id));
	} else {
		$workexperience_list = array();
	}

	// load user's existing education
	$artefact_id = get_field('artefact', 'id', 'artefacttype', 'educationhistory', 'owner', $userid);
	if ($artefact_id !== false) {
		$education_list = get_records_select_array('artefact_resume_educationhistory', "artefact=?", array($artefact_id));
	} else {
		$education_list = array();
	}
	//$education_entries = count($education_list);

	// load user's existing mother tongue(s) and foreign language(s)
	$artefact_id = get_field('artefact', 'id', 'artefacttype', 'mothertongue', 'owner', $userid);
	if ($artefact_id !== false) {
		$mothertongue_list = get_records_select_array('artefact_europass_mothertongue', "artefact=?", array($artefact_id));
	} else {
		$mothertongue_list = array();
	}

	$artefact_id = get_field('artefact', 'id', 'artefacttype', 'otherlanguage', 'owner', $userid);
	if ($artefact_id !== false) {
		$otherlanguage_list = get_records_select_array('artefact_europass_otherlanguage', "artefact=?", array($artefact_id));
	} else {
		$otherlanguage_list = array();
	}
	
	// load user's existing skills and misc data
	$skills = array('socialskill' => null, 'organisationalskill' => null, 'technicalskill' => null, 'computerskill' => null, 'artisticskill' => null, 'otherskill' => null);
	$drivinglicence = null;
	$misc = array('additionalinfo' => null, 'annexes' => null);

	try { $skills['socialskill'] = artefact_instance_from_type('socialskill', $userid)->get('description'); }
	catch (Exception $e) { }
	try { $skills['organisationalskill'] = artefact_instance_from_type('organisationalskill', $userid)->get('description'); }
	catch (Exception $e) { }
	try { $skills['technicalskill'] = artefact_instance_from_type('technicalskill', $userid)->get('description'); }
	catch (Exception $e) { }
	try { $skills['computerskill'] = artefact_instance_from_type('computerskill', $userid)->get('description'); }
	catch (Exception $e) { }
	try { $skills['artisticskill'] = artefact_instance_from_type('artisticskill', $userid)->get('description'); }
	catch (Exception $e) { }
	try {
		$skills['otherskill'] = artefact_instance_from_type('personalskill', $userid)->get('description');
		$skills['otherskill'] .= artefact_instance_from_type('academicskill', $userid)->get('description');
		$skills['otherskill'] .= artefact_instance_from_type('workskill', $userid)->get('description');
	}
	catch (Exception $e) { }

	try { $drivinglicence = unserialize(artefact_instance_from_type('drivinglicence', $userid)->get('description')); }
	catch (Exception $e) { }
	
	try { $misc['additionalinfo'] = artefact_instance_from_type('additionalinfo', $userid)->get('description'); }
	catch (Exception $e) { }
	try { $misc['annexes'] = artefact_instance_from_type('annexes', $userid)->get('description'); }
	catch (Exception $e) { }
	

	// =======================
	// Dinamically create XML
	// =======================
	
	$xmlDoc = new DOMDocument('1.0', 'UTF-8');
	
	$styleSheet = $xmlDoc->createProcessingInstruction('xml-stylesheet', 'href="http://europass.cedefop.europa.eu/xml/cv_'.$locale.'_V2.0.xsl" type="text/xsl"');
	$xmlDoc->appendChild($styleSheet);
	
	$rootElement = $xmlDoc->createElement('europass:learnerinfo');
	$rootNode = $xmlDoc->appendChild($rootElement);
	$rootNode->setAttribute('xmlns:europass', 'http://europass.cedefop.europa.eu/Europass/V2.0');
	$rootNode->setAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
	$rootNode->setAttribute('xsi:schemaLocation', 'http://europass.cedefop.europa.eu/Europass/V2.0 http://europass.cedefop.europa.eu/xml/EuropassSchema_V2.0.xsd');
	$rootNode->setAttribute('locale', $locale);
	
	$children = array('docinfo', 'prefs', 'identification', 'application', 'workexperiencelist', 'educationlist', 'languagelist', 'skilllist', 'misclist');
	foreach ($children as $child) {
		$childRoot = $xmlDoc->getElementsByTagName('europass:learnerinfo')->item(0);
		$childElement = $xmlDoc->createElement($child);
		$childRoot->appendChild($childElement);
	}
	
	// =======================
	// Dinamically set docinfo
	// =======================
	
	// Dinamically set issuedate
	$childRoot = $xmlDoc->getElementsByTagName('docinfo')->item(0);
	$childElement = $xmlDoc->createElement('issuedate');
	$childElement->nodeValue = date('Y-m-d\TH:i:sP');
	$childRoot->appendChild($childElement);
	
	// Dinamically set xsdversion
	$childRoot = $xmlDoc->getElementsByTagName('docinfo')->item(0);
	$childElement = $xmlDoc->createElement('xsdversion');
	$childElement->nodeValue = 'V2.0';
	$childRoot->appendChild($childElement);
	
	// Dinamically set comment
	$childRoot = $xmlDoc->getElementsByTagName('docinfo')->item(0);
	$childElement = $xmlDoc->createElement('comment');
	$childElement->nodeValue = 'Automatically generated Europass CV from Mahara e-portfolio data';
	$childRoot->appendChild($childElement);
	
	// ========================================
	// Dinamically set prefs and identification
	// ========================================
	
	// Dinamically set first and last name
	$childRoot = $xmlDoc->getElementsByTagName('prefs')->item(0);
	$childElement = $xmlDoc->createElement('field');
	$childElement->setAttribute('name', 'step1.lastName');
	$childElement->setAttribute('before', 'step1.firstName');
	$childRoot->appendChild($childElement);
	
	$childRoot = $xmlDoc->getElementsByTagName('identification')->item(0);
	$childElement = $xmlDoc->createElement('firstname');
	$childElement->nodeValue = valid_xml_string($contactinfo['firstname']);
	$childRoot->appendChild($childElement);
	$childElement = $xmlDoc->createElement('lastname');
	$childElement->nodeValue = valid_xml_string($contactinfo['lastname']);
	$childRoot->appendChild($childElement);
	
	// ----------------------------------------
	// Dinamically set contactinfo
	// ----------------------------------------
	$childRoot = $xmlDoc->getElementsByTagName('identification')->item(0);
	$childElement = $xmlDoc->createElement('contactinfo');
	$childRoot->appendChild($childElement);
	
	// Dinamically set address
	$childRoot = $xmlDoc->getElementsByTagName('prefs')->item(0);
	$childElement = $xmlDoc->createElement('field');
	$childElement->setAttribute('name', 'step1.addressInfo');
	$childElement->setAttribute('keep', 'true');
	$childRoot->appendChild($childElement);
	
	$childRoot = $xmlDoc->getElementsByTagName('contactinfo')->item(0);
	$childElement = $xmlDoc->createElement('address');
	$childRoot->appendChild($childElement);
	
	// Dinamically set addressLine, municipality, postalCode
	$childRoot = $xmlDoc->getElementsByTagName('address')->item(0);
	$childElement = $xmlDoc->createElement('addressLine');
	$childElement->nodeValue = valid_xml_string($contactinfo['address']);
	$childRoot->appendChild($childElement);
	//$childElement = $xmlDoc->createElement('municipality');
	//$childElement->nodeValue = valid_xml_string($contactinfo['city']);
	//$childRoot->appendChild($childElement);
	//$childElement = $xmlDoc->createElement('postalCode');
	//$childElement->nodeValue = valid_xml_string($postalCode);
	//$childRoot->appendChild($childElement);
	$childElement = $xmlDoc->createElement('country');
	$childRoot->appendChild($childElement);
	
	// Dinamically set country
	$childRoot = $xmlDoc->getElementsByTagName('country')->item(0);
	$childElement = $xmlDoc->createElement('code');
	$childElement->nodeValue = strtoupper($contactinfo['country']);
	$childRoot->appendChild($childElement);
	$childElement = $xmlDoc->createElement('label');
	$childElement->nodeValue = get_string_from_file('country.'.$contactinfo['country'], get_config('docroot').'artefact/europass/lang/'.get_lang_from_locale($locale).'/artefact.europass.php');
	$childRoot->appendChild($childElement);
	
	// Dinamically set telephone, fax, mobile, email and web page
	$contactinfo = array('telephone' => $contactinfo['homenumber'], 'fax' => $contactinfo['faxnumber'], 'mobile' => $contactinfo['mobilenumber'], 'email' => $contactinfo['email']);
	foreach ($contactinfo as $field => $value) {
		$childRoot = $xmlDoc->getElementsByTagName('prefs')->item(0);
		$childElement = $xmlDoc->createElement('field');
		$childElement->setAttribute('name', 'step1.'.$field);
		$childElement->setAttribute('keep', ($value == null ? 'false' : 'true'));
		$childRoot->appendChild($childElement);
		
		$childRoot = $xmlDoc->getElementsByTagName('contactinfo')->item(0);
		$childElement = $xmlDoc->createElement($field);
		$childElement->nodeValue = valid_xml_string($value);
		$childRoot->appendChild($childElement);
	}
	
	// ----------------------------------------
	// Dinamically set demographics
	// ----------------------------------------
	$childRoot = $xmlDoc->getElementsByTagName('identification')->item(0);
	$childElement = $xmlDoc->createElement('demographics');
	$childRoot->appendChild($childElement);

	// Dinamically set birthDate and gender
	if ($demographics <> null) {
		$demographics = array('birthDate' => strftime('%Y-%m-%d', $demographics->get_composite('dateofbirth')), 'gender' => ($demographics->get_composite('gender') == 'male' ? 'M' : 'F'));
		foreach ($demographics as $field => $value) {
			$childRoot = $xmlDoc->getElementsByTagName('prefs')->item(0);
			$childElement = $xmlDoc->createElement('field');
			$childElement->setAttribute('name', 'step1.'.$field);
			$childElement->setAttribute('keep', ($value == null ? 'false' : 'true'));
			if ($field == 'birthDate') {
				$childElement->setAttribute('format', $externaldateformat);
			}
			$childRoot->appendChild($childElement);
			
			$childRoot = $xmlDoc->getElementsByTagName('demographics')->item(0);
			$childElement = $xmlDoc->createElement(strtolower($field)); // strtolower - to convert birthDate to birthdate!
			$childElement->nodeValue = valid_xml_string($value);
			$childRoot->appendChild($childElement);
		}
	}

	// Dinamically set nationality or nationalities
	$childRoot = $xmlDoc->getElementsByTagName('prefs')->item(0);
	$childElement = $xmlDoc->createElement('field');
	$childElement->setAttribute('name', 'step1.nationality');
	$childElement->setAttribute('keep', ($nationalities_list == array() ? 'false' : 'true'));
	$childRoot->appendChild($childElement);
	
	$n = 0;
	foreach ($nationalities_list as $nationality) {
		// Dinamically set each nationality
		$childRoot = $xmlDoc->getElementsByTagName('demographics')->item(0);
		$childElement = $xmlDoc->createElement('nationality');
		$childRoot->appendChild($childElement);
		
		$children = array('code', 'label');
		foreach ($children as $child) {
			$childRoot = $xmlDoc->getElementsByTagName('nationality')->item($n);
			$childElement = $xmlDoc->createElement($child);
			if ($child == 'code') {
				$childElement->nodeValue = strtoupper($nationality);
			}
			if ($child == 'label') {
				$childElement->nodeValue = get_string_from_file('nationality.'.$nationality, get_config('docroot').'artefact/europass/lang/'.get_lang_from_locale($locale).'/artefact.europass.php');
			}
			$childRoot->appendChild($childElement);
		}
		
		$n++;
	}

	// Dinamically set photograph
	$childRoot = $xmlDoc->getElementsByTagName('prefs')->item(0);
	$childElement = $xmlDoc->createElement('field');
	$childElement->setAttribute('name', 'step1.photo');
	$childElement->setAttribute('keep', ($photograph == null ? 'false' : 'true'));
	$childRoot->appendChild($childElement);
	
	$childRoot = $xmlDoc->getElementsByTagName('identification')->item(0);
	$childElement = $xmlDoc->createElement('photo');
	$childElement->setAttribute('type', 'JPEG');
	$childElement->nodeValue = $photograph;
	$childRoot->appendChild($childElement);
	
	// ========================================
	// Dinamically set prefs and application
	// ========================================
	
	$childRoot = $xmlDoc->getElementsByTagName('prefs')->item(0);
	$childElement = $xmlDoc->createElement('field');
	$childElement->setAttribute('name', 'step1.application.label');
	$childElement->setAttribute('keep', ($application_data == null ? 'false' : 'true'));
	$childRoot->appendChild($childElement);

	$childRoot = $xmlDoc->getElementsByTagName('application')->item(0);
	$childElement = $xmlDoc->createElement('label');
	$childElement->nodeValue = valid_xml_string($application_data);
	$childRoot->appendChild($childElement);

	// ========================================
	// Dinamically set prefs and workexperience list
	// ========================================
	
	$childRoot = $xmlDoc->getElementsByTagName('prefs')->item(0);
	$childElement = $xmlDoc->createElement('field');
	$childElement->setAttribute('name', 'step3List');
	$childElement->setAttribute('keep', 'true');
	$childElement->setAttribute('before', 'step4List');
	$childRoot->appendChild($childElement);

	// ----------------------------------------
	// Dinamically set each workexperience
	// ----------------------------------------
	$i = 0;
	if (!empty($workexperience_list)) {
		foreach ($workexperience_list as $workexperience) {
			$childRoot = $xmlDoc->getElementsByTagName('prefs')->item(0);
			// Set workexperience period
			$childElement = $xmlDoc->createElement('field');
			$childElement->setAttribute('name', 'step3List['.$i.'].period');
			$childElement->setAttribute('format', $externaldateformat);
			$childRoot->appendChild($childElement);
			// Set workexperience position
			$childElement = $xmlDoc->createElement('field');
			$childElement->setAttribute('name', 'step3List['.$i.'].position.label');
			$childElement->setAttribute('keep', ($workexperience->jobtitle == null ? 'false' : 'true'));
			$childRoot->appendChild($childElement);
			// Set workexperience activites
			$childElement = $xmlDoc->createElement('field');
			$childElement->setAttribute('name', 'step3List['.$i.'].activities');
			$childElement->setAttribute('keep', ($workexperience->positiondescription == null ? 'false' : 'true'));
			$childRoot->appendChild($childElement);
			// Set workexperience company name
			$childElement = $xmlDoc->createElement('field');
			$childElement->setAttribute('name', 'step3List['.$i.'].company.name');
			$childElement->setAttribute('keep', ($workexperience->employer == null ? 'false' : 'true'));
			$childRoot->appendChild($childElement);
			// Set workexperience company address
			$childElement = $xmlDoc->createElement('field');
			$childElement->setAttribute('name', 'step3List['.$i.'].company.addressInfo');
			$childElement->setAttribute('keep', ($workexperience->employeraddress == null ? 'false' : 'true'));
			$childRoot->appendChild($childElement);
			// Set workexperience company sector - FALSE (because we do not have this data in Mahara)!
			$childElement = $xmlDoc->createElement('field');
			$childElement->setAttribute('name', 'step3List['.$i.'].company.sector.label');
			$childElement->setAttribute('keep', 'false');
			$childRoot->appendChild($childElement);
			
			// Dinamically set data for each workexperience
			$childRoot = $xmlDoc->getElementsByTagName('workexperiencelist')->item(0);
			$childElement = $xmlDoc->createElement('workexperience');
			$childRoot->appendChild($childElement);
			
			$children = array('period', 'position', 'activities', 'employer');
			foreach ($children as $child) {
				$childRoot = $xmlDoc->getElementsByTagName('workexperience')->item($i);
				$childElement = $xmlDoc->createElement($child);
				if ($child == 'activities') {
					$childElement->nodeValue = ($showHTML ? replacehtmlchars(nl2br($workexperience->positiondescription)) : valid_xml_string($workexperience->positiondescription));
				}
				$childRoot->appendChild($childElement);
			}
			
			// workexperience - period
			$parentRoot = $xmlDoc->getElementsByTagName('workexperience')->item($i);
			$childRoot = $parentRoot->firstChild;
			$childElement = $xmlDoc->createElement('from');
			$childRoot->appendChild($childElement);
			$grandchildRoot = $childRoot->firstChild;
			if ($workexperience->startdate <> null) {
				$workstartdate = europass_date($workexperience->startdate, $internaldateformat);
				if ($workstartdate['year'] <> '') {
					$grandchildElement = $xmlDoc->createElement('year');
					$grandchildElement->nodeValue = $workstartdate['year'];
					$grandchildRoot->appendChild($grandchildElement);
				}
				if ($workstartdate['month'] <> '--00') {
					$grandchildElement = $xmlDoc->createElement('month');
					$grandchildElement->nodeValue = $workstartdate['month'];
					$grandchildRoot->appendChild($grandchildElement);
				}
				if ($workstartdate['day'] <> '---00') {
					$grandchildElement = $xmlDoc->createElement('day');
					$grandchildElement->nodeValue = $workstartdate['day'];
					$grandchildRoot->appendChild($grandchildElement);
				}
			}
			
			$childElement = $xmlDoc->createElement('to');
			$childRoot->appendChild($childElement);
			$grandchildRoot = $childRoot->firstChild->nextSibling;
			if ($workexperience->enddate <> null) {
				$workenddate = europass_date($workexperience->enddate, $internaldateformat);
				if ($workenddate['year'] <> '') {
					$grandchildElement = $xmlDoc->createElement('year');
					$grandchildElement->nodeValue = $workenddate['year'];
					$grandchildRoot->appendChild($grandchildElement);
				}
				if ($workenddate['month'] <> '--00') {
					$grandchildElement = $xmlDoc->createElement('month');
					$grandchildElement->nodeValue = $workenddate['month'];
					$grandchildRoot->appendChild($grandchildElement);
				}
				if ($workenddate['day'] <> '---00') {
					$grandchildElement = $xmlDoc->createElement('day');
					$grandchildElement->nodeValue = $workenddate['day'];
					$grandchildRoot->appendChild($grandchildElement);
				}
			}
			
			// position - label
			$childRoot = $xmlDoc->getElementsByTagName('position')->item($i);
			$childElement = $xmlDoc->createElement('label');
			$childElement->nodeValue = valid_xml_string($workexperience->jobtitle);
			$childRoot->appendChild($childElement);
			
			// employer
			$childRoot = $xmlDoc->getElementsByTagName('employer')->item($i);
			$childElement = $xmlDoc->createElement('name');
			$childElement->nodeValue = valid_xml_string($workexperience->employer);
			$childRoot->appendChild($childElement);

			$childElement = $xmlDoc->createElement('address');
			$childRoot->appendChild($childElement);
			$childRoot = $xmlDoc->getElementsByTagName('address')->item($i+1); // $i+1 because, we already have one address element!
			$childElement = $xmlDoc->createElement('addressLine');
			$childElement->nodeValue = valid_xml_string($workexperience->employeraddress);
			$childRoot->appendChild($childElement);
			
			// create empty node for company sector
			$childRoot = $xmlDoc->getElementsByTagName('employer')->item($i);
			$childElement = $xmlDoc->createElement('sector');
			$childRoot->appendChild($childElement);

			$i++;
		}
	}

	// ========================================
	// Dinamically set prefs and education list
	// ========================================
	
	$childRoot = $xmlDoc->getElementsByTagName('prefs')->item(0);
	$childElement = $xmlDoc->createElement('field');
	$childElement->setAttribute('name', 'step4List');
	$childElement->setAttribute('keep', 'true');
	$childRoot->appendChild($childElement);

	// ----------------------------------------
	// Dinamically set each education
	// ----------------------------------------
	$j = 0;
	if (!empty($workexperience_list)) {
		foreach ($education_list as $education) {
			$childRoot = $xmlDoc->getElementsByTagName('prefs')->item(0);
			// Set education period
			$childElement = $xmlDoc->createElement('field');
			$childElement->setAttribute('name', 'step4List['.$j.'].period');
			$childElement->setAttribute('format', $externaldateformat);
			$childRoot->appendChild($childElement);
			// Set education title
			$childElement = $xmlDoc->createElement('field');
			$childElement->setAttribute('name', 'step4List['.$j.'].title');
			$childElement->setAttribute('keep', ($education->qualname == null ? 'false' : 'true'));
			$childRoot->appendChild($childElement);
			// Set education skills
			$childElement = $xmlDoc->createElement('field');
			$childElement->setAttribute('name', 'step4List['.$j.'].skills');
			$childElement->setAttribute('keep', ($education->qualdescription == null ? 'false' : 'true'));
			$childRoot->appendChild($childElement);
			// Set education institution name
			$childElement = $xmlDoc->createElement('field');
			$childElement->setAttribute('name', 'step4List['.$j.'].educationalOrg.name');
			$childElement->setAttribute('keep', ($education->institution == null ? 'false' : 'true'));
			$childRoot->appendChild($childElement);
			// Set education institution address
			$childElement = $xmlDoc->createElement('field');
			$childElement->setAttribute('name', 'step4List['.$j.'].educationalOrg.addressInfo');
			$childElement->setAttribute('keep', ($education->institutionaddress == null ? 'false' : 'true'));
			$childRoot->appendChild($childElement);
			// Set education level
			$childElement = $xmlDoc->createElement('field');
			$childElement->setAttribute('name', 'step4List['.$j.'].level.label');
			$childElement->setAttribute('keep', ($education->qualtype == null ? 'false' : 'true'));
			$childRoot->appendChild($childElement);
			
			// Dinamically set data for each education
			$childRoot = $xmlDoc->getElementsByTagName('educationlist')->item(0);
			$childElement = $xmlDoc->createElement('education');
			$childRoot->appendChild($childElement);
			
			$children = array('period', 'title', 'skills', 'organisation', 'level', 'educationalfield');
			foreach ($children as $child) {
				$childRoot = $xmlDoc->getElementsByTagName('education')->item($j);
				$childElement = $xmlDoc->createElement($child);
				if ($child == 'title') {
					$childElement->nodeValue = valid_xml_string($education->qualname);
				}
				if ($child == 'skills') {
					$childElement->nodeValue = valid_xml_string($education->qualdescription);
				}
				$childRoot->appendChild($childElement);
			}
			
			// education - period
			$parentRoot = $xmlDoc->getElementsByTagName('education')->item($j);
			$childRoot = $parentRoot->firstChild;
			$childElement = $xmlDoc->createElement('from');
			$childRoot->appendChild($childElement);
			$grandchildRoot = $childRoot->firstChild;
			if ($education->startdate <> null) {
				$learnstartdate = europass_date($education->startdate, $internaldateformat);
				if ($learnstartdate['year'] <> '') {
					$grandchildElement = $xmlDoc->createElement('year');
					$grandchildElement->nodeValue = $learnstartdate['year'];
					$grandchildRoot->appendChild($grandchildElement);
				}
				if ($learnstartdate['month'] <> '--00') {
					$grandchildElement = $xmlDoc->createElement('month');
					$grandchildElement->nodeValue = $learnstartdate['month'];
					$grandchildRoot->appendChild($grandchildElement);
				}
				if ($learnstartdate['day'] <> '---00') {
					$grandchildElement = $xmlDoc->createElement('day');
					$grandchildElement->nodeValue = $learnstartdate['day'];
					$grandchildRoot->appendChild($grandchildElement);
				}
			}
			
			$childElement = $xmlDoc->createElement('to');
			$childRoot->appendChild($childElement);
			$grandchildRoot = $childRoot->firstChild->nextSibling;
			if ($education->enddate <> null) {
				$learnenddate = europass_date($education->enddate, $internaldateformat);
				if ($learnenddate['year'] <> '') {
					$grandchildElement = $xmlDoc->createElement('year');
					$grandchildElement->nodeValue = $learnenddate['year'];
					$grandchildRoot->appendChild($grandchildElement);
				}
				if ($learnenddate['month'] <> '--00') {
					$grandchildElement = $xmlDoc->createElement('month');
					$grandchildElement->nodeValue = $learnenddate['month'];
					$grandchildRoot->appendChild($grandchildElement);
				}
				if ($learnenddate['day'] <> '---00') {
					$grandchildElement = $xmlDoc->createElement('day');
					$grandchildElement->nodeValue = $learnenddate['day'];
					$grandchildRoot->appendChild($grandchildElement);
				}
			}
			
			// organisation
			$childRoot = $xmlDoc->getElementsByTagName('organisation')->item($j);
			$childElement = $xmlDoc->createElement('name');
			$childElement->nodeValue = valid_xml_string($education->institution);
			$childRoot->appendChild($childElement);
			
			$childElement = $xmlDoc->createElement('address');
			$childRoot->appendChild($childElement);
			$childRoot = $xmlDoc->getElementsByTagName('address')->item($j+$i+1); // $j+$i+1 because, we already have $i+1 previous address elements!
			$childElement = $xmlDoc->createElement('addressLine');
			$childElement->nodeValue = valid_xml_string($education->institutionaddress);
			$childRoot->appendChild($childElement);
			
			// level - label
			$childRoot = $xmlDoc->getElementsByTagName('level')->item($j);
			$childElement = $xmlDoc->createElement('label');
			$childElement->nodeValue = valid_xml_string($education->qualtype);
			$childRoot->appendChild($childElement);
			
			// create empty node for organisation type
			$childRoot = $xmlDoc->getElementsByTagName('organisation')->item($j);
			$childElement = $xmlDoc->createElement('type');
			$childRoot->appendChild($childElement);
			
			$j++;
		}
	}

	// ========================================
	// Dinamically set prefs and language list
	// ========================================

	// Dinamically add mother tongue(s)
	$childRoot = $xmlDoc->getElementsByTagName('prefs')->item(0);
	$childElement = $xmlDoc->createElement('field');
	$childElement->setAttribute('name', 'step5.motherLanguages');
	$childElement->setAttribute('keep', (count($mothertongue_list) > 0 ? 'true' : 'false'));
	$childRoot->appendChild($childElement);
		
	$childRoot = $xmlDoc->getElementsByTagName('languagelist')->item(0);
	$childElement = $xmlDoc->createElement('language');
	$childElement->setAttribute('xsi:type', 'europass:mother');
	$childRoot->appendChild($childElement);
	
	$language_label = null;
	if (!empty($mothertongue_list)) {
		foreach ($mothertongue_list as $mothertongue) {
			$language_label .= get_string_from_file('language.'.$mothertongue->language, get_config('docroot').'artefact/europass/lang/'.get_lang_from_locale($locale).'/artefact.europass.php') . ', ';
		}
		$language_label = substr($language_label, 0, -2); // omitt last comma and whitespace from $language_label
		$childRoot = $xmlDoc->getElementsByTagName('language')->item(0);
		if (count($mothertongue_list) == 1) {
			$childElement = $xmlDoc->createElement('code');
			$childElement->nodeValue = $mothertongue->language;
			$childRoot->appendChild($childElement);
		}
		$childElement = $xmlDoc->createElement('label');
		$childElement->nodeValue = $language_label;
		$childRoot->appendChild($childElement);
	}
	
	//Dinamically add foreign language(s)
	$childRoot = $xmlDoc->getElementsByTagName('prefs')->item(0);
	$childElement = $xmlDoc->createElement('field');
	$childElement->setAttribute('name', 'step5.foreignLanguageList');
	$childElement->setAttribute('keep', (count($otherlanguage_list) > 0 ? 'true' : 'false'));
	$childRoot->appendChild($childElement);
	
	$l = 0;
	if (!empty($otherlanguage_list)) {
		foreach ($otherlanguage_list as $otherlanguage) {
			$childRoot = $xmlDoc->getElementsByTagName('prefs')->item(0);
			$childElement = $xmlDoc->createElement('field');
			$childElement->setAttribute('name', 'step5.foreignLanguageList['. $l .']');
			$childElement->setAttribute('keep', 'true');
			$childRoot->appendChild($childElement);
			
			$childRoot = $xmlDoc->getElementsByTagName('languagelist')->item(0);
			$childElement = $xmlDoc->createElement('language');
			$childElement->setAttribute('xsi:type', 'europass:foreign');
			$childRoot->appendChild($childElement);
			
			$childRoot = $xmlDoc->getElementsByTagName('language')->item($l+1); // Because mothertongue has index 0...
			$childElement = $xmlDoc->createElement('code');
			$childElement->nodeValue = $otherlanguage->language;
			$childRoot->appendChild($childElement);
			$childElement = $xmlDoc->createElement('label');
			$childElement->nodeValue = get_string_from_file('language.'.$otherlanguage->language, get_config('docroot').'artefact/europass/lang/'.get_lang_from_locale($locale).'/artefact.europass.php');
			$childRoot->appendChild($childElement);
			$childElement = $xmlDoc->createElement('level');
			$childRoot->appendChild($childElement);
			$grandchildRoot = $childRoot->lastChild;
			
			$levels = array('listening' => $otherlanguage->listening, 'reading' => $otherlanguage->reading, 'spokeninteraction' => $otherlanguage->spokeninteraction, 'spokenproduction' => $otherlanguage->spokenproduction, 'writing' => $otherlanguage->writing);
			foreach ($levels as $field => $value) {
				$grandchildElement = $xmlDoc->createElement($field);
				$grandchildElement->nodeValue = strtolower($value);
				$grandchildRoot->appendChild($grandchildElement);
			}
			
			$l++;
		}
	}
	
	// ========================================
	// Dinamically set prefs and skill list
	// ========================================
	$skills = array('social' => $skills['socialskill'], 'organisational' => $skills['organisationalskill'], 'technical' => $skills['technicalskill'], 'computer' => $skills['computerskill'], 'artistic' => $skills['artisticskill'], 'other' => $skills['otherskill']);
	foreach ($skills as $field => $value) {
		$childRoot = $xmlDoc->getElementsByTagName('prefs')->item(0);
		$childElement = $xmlDoc->createElement('field');
		$childElement->setAttribute('name', 'step6.'.$field.'Skills');
		$childElement->setAttribute('keep', ($value == null ? 'false' : 'true'));
		$childRoot->appendChild($childElement);
		
		$childRoot = $xmlDoc->getElementsByTagName('skilllist')->item(0);
		$childElement = $xmlDoc->createElement('skill');
		$childElement->setAttribute('type', $field);
		$childElement->nodeValue = ($showHTML ? replacehtmlchars($value) : valid_xml_string($value));
		$childRoot->appendChild($childElement);
	}
	
	// Dinamically set driving licence(s)
	$childRoot = $xmlDoc->getElementsByTagName('prefs')->item(0);
	$childElement = $xmlDoc->createElement('field');
	$childElement->setAttribute('name', 'step6.drivingLicences');
	$childElement->setAttribute('keep', ($drivinglicence == null ? 'false' : 'true'));
	$childRoot->appendChild($childElement);

	$childRoot = $xmlDoc->getElementsByTagName('skilllist')->item(0);
	$childElement = $xmlDoc->createElement('structured-skill');
	$childElement->setAttribute('xsi:type', 'europass:driving');
	$childRoot->appendChild($childElement);

	if (!empty($drivinglicence)) {
		foreach ($drivinglicence as $field => $value) {
			$childRoot = $xmlDoc->getElementsByTagName('structured-skill')->item(0);
			// Set drivinglicence if it exists...
			if ($value <> null) {
				$childElement = $xmlDoc->createElement('drivinglicence');
				$childElement->nodeValue = valid_xml_string($field);
				$childRoot->appendChild($childElement);
			}
		}
	}
	
	// ========================================
	// Dinamically set prefs and misc list
	// ========================================
	$misc = array('additional' => $misc['additionalinfo'], 'annexes' => $misc['annexes']);
	foreach ($misc as $field => $value) {
		$childRoot = $xmlDoc->getElementsByTagName('prefs')->item(0);
		$childElement = $xmlDoc->createElement('field');
		$childElement->setAttribute('name', 'step7.'.$field.($field == 'additional' ? 'Info' : ''));
		$childElement->setAttribute('keep', ($value == null ? 'false' : 'true'));
		$childRoot->appendChild($childElement);
		
		$childRoot = $xmlDoc->getElementsByTagName('misclist')->item(0);
		$childElement = $xmlDoc->createElement('misc');
		$childElement->setAttribute('type', $field);
		$childElement->nodeValue = ($showHTML ? replacehtmlchars($value) : valid_xml_string($value));
		$childRoot->appendChild($childElement);
	}

	// ========================================
	// Dinamically set prefs (grid option)
	// ========================================
	$childRoot = $xmlDoc->getElementsByTagName('prefs')->item(0);
	$childElement = $xmlDoc->createElement('field');
	$childElement->setAttribute('name', 'grid');
	$childElement->setAttribute('keep', 'false');
	$childRoot->appendChild($childElement);

	// ========================================
	// Return dinamically generated XML
	// ========================================
	return $xmlDoc->saveXML();
}



function generate_europasslp_xml($userid, $showHTML=false, $locale='en_GB', $internaldateformat='dmy11', $externaldateformat='/numeric/long', $convert=false) {

	// =======================
	// Load values from Mahara database
	// =======================

	// load user's existing contact information
	$element_list = array('firstname' => 'text', 'lastname' => 'text');
	$contactinfo = array('firstname' => null, 'lastname' => null);
	$contactinfo_data = get_records_select_array('artefact', "owner=? AND artefacttype IN (" . join(",",array_map(create_function('$a','return db_quote($a);'),array_keys($element_list))) . ")", array($userid));
	
	if ($contactinfo_data) {
		foreach ($contactinfo_data as $field) {
			$contactinfo[$field->artefacttype] = $field->title;
		}
	}
	
	// load user's existing demographics information
	$demographics = null;
	try { $demographics = artefact_instance_from_type('personalinformation', $userid); }
	catch (Exception $e) { }
	
	// load user's existing mother tongue(s) and foreign language(s)
	$artefact_id = get_field('artefact', 'id', 'artefacttype', 'mothertongue', 'owner', $userid);
	if ($artefact_id !== false) {
		$mothertongue_list = get_records_select_array('artefact_europass_mothertongue', "artefact=?", array($artefact_id));
	} else {
		$mothertongue_list = array();
	}

	$artefact_id = get_field('artefact', 'id', 'artefacttype', 'otherlanguage', 'owner', $userid);
	if ($artefact_id !== false) {
		$otherlanguage_list = get_records_select_array('artefact_europass_otherlanguage', "artefact=?", array($artefact_id));
	} else {
		$otherlanguage_list = array();
	}

	// =======================
	// Dinamically create XML
	// =======================
	
	$xmlDoc = new DOMDocument('1.0', 'UTF-8');
	
	$styleSheet = $xmlDoc->createProcessingInstruction('xml-stylesheet', 'href="http://europass.cedefop.europa.eu/xml/lp_'.$locale.'_V2.0.xsl" type="text/xsl"');
	$xmlDoc->appendChild($styleSheet);
	
	$rootElement = $xmlDoc->createElement('europass:learnerinfo');
	$rootNode = $xmlDoc->appendChild($rootElement);
	$rootNode->setAttribute('xmlns:europass', 'http://europass.cedefop.europa.eu/Europass/V2.0');
	$rootNode->setAttribute('xmlns:xsi', 'http://www.w3.org/2001/XMLSchema-instance');
	$rootNode->setAttribute('xsi:schemaLocation', 'http://europass.cedefop.europa.eu/Europass/V2.0 http://europass.cedefop.europa.eu/xml/EuropassSchema_V2.0.xsd');
	$rootNode->setAttribute('locale', $locale);
	
	$children = array('docinfo', 'prefs', 'identification', 'languagelist');
	foreach ($children as $child) {
		$childRoot = $xmlDoc->getElementsByTagName('europass:learnerinfo')->item(0);
		$childElement = $xmlDoc->createElement($child);
		$childRoot->appendChild($childElement);
	}
	
	// =======================
	// Dinamically set docinfo
	// =======================
	
	// Dinamically set issuedate
	$childRoot = $xmlDoc->getElementsByTagName('docinfo')->item(0);
	$childElement = $xmlDoc->createElement('issuedate');
	$childElement->nodeValue = date('Y-m-d\TH:i:sP');
	$childRoot->appendChild($childElement);
	
	// Dinamically set xsdversion
	$childRoot = $xmlDoc->getElementsByTagName('docinfo')->item(0);
	$childElement = $xmlDoc->createElement('xsdversion');
	$childElement->nodeValue = 'V2.0';
	$childRoot->appendChild($childElement);
	
	// Dinamically set comment
	$childRoot = $xmlDoc->getElementsByTagName('docinfo')->item(0);
	$childElement = $xmlDoc->createElement('comment');
	$childElement->nodeValue = 'Automatically generated Europass Language Passport from Mahara e-portfolio data';
	$childRoot->appendChild($childElement);
	
	// ========================================
	// Dinamically set prefs and identification
	// ========================================
	
	// Dinamically set first and last name
	$childRoot = $xmlDoc->getElementsByTagName('prefs')->item(0);
	$childElement = $xmlDoc->createElement('field');
	$childElement->setAttribute('name', 'personal.lastName');
	$childElement->setAttribute('before', 'personal.firstName');
	$childRoot->appendChild($childElement);
	
	$childRoot = $xmlDoc->getElementsByTagName('identification')->item(0);
	$childElement = $xmlDoc->createElement('firstname');
	$childElement->nodeValue = valid_xml_string($contactinfo['firstname']);
	$childRoot->appendChild($childElement);
	$childElement = $xmlDoc->createElement('lastname');
	$childElement->nodeValue = valid_xml_string($contactinfo['lastname']);
	$childRoot->appendChild($childElement);
	
	// ----------------------------------------
	// Dinamically set demographics
	// ----------------------------------------
	$childRoot = $xmlDoc->getElementsByTagName('identification')->item(0);
	$childElement = $xmlDoc->createElement('demographics');
	$childRoot->appendChild($childElement);

	// Dinamically set birthdate
	$childRoot = $xmlDoc->getElementsByTagName('prefs')->item(0);
	$childElement = $xmlDoc->createElement('field');
	$childElement->setAttribute('name', 'personal.birthDate');
	$childElement->setAttribute('keep', (!empty($demographics) ? 'false' : 'true'));
	$childElement->setAttribute('format', $externaldateformat);
	$childRoot->appendChild($childElement);
		
	$childRoot = $xmlDoc->getElementsByTagName('demographics')->item(0);
	$childElement = $xmlDoc->createElement('birthdate');
	$childElement->nodeValue = (!empty($demographics) ? strftime('%Y-%m-%d', $demographics->get_composite('dateofbirth')): null);
	$childRoot->appendChild($childElement);
	
	// ========================================
	// Dinamically set prefs and language list
	// ========================================
	// Dinamically add mother tongue(s)
	$childRoot = $xmlDoc->getElementsByTagName('languagelist')->item(0);
	$childElement = $xmlDoc->createElement('language');
	$childElement->setAttribute('xsi:type', 'europass:mother');
	$childRoot->appendChild($childElement);
	
	$language_label = null;
	if (!empty($mothertongue_list)) {
		foreach ($mothertongue_list as $mothertongue) {
			$language_label .= get_string_from_file('language.'.$mothertongue->language, get_config('docroot').'artefact/europass/lang/'.get_lang_from_locale($locale).'/artefact.europass.php') . ', ';
		}
		$language_label = substr($language_label, 0, -2); // omitt last comma and whitespace from $language_label
		$childRoot = $xmlDoc->getElementsByTagName('language')->item(0);
		if (count($mothertongue_list) == 1) {
			$childElement = $xmlDoc->createElement('code');
			$childElement->nodeValue = $mothertongue->language;
			$childRoot->appendChild($childElement);
		}
		$childElement = $xmlDoc->createElement('label');
		$childElement->nodeValue = $language_label;
		$childRoot->appendChild($childElement);
	}
	
	//Dinamically add foreign language(s)
	$l = 0;
	if (!empty($otherlanguage_list)) {
		foreach ($otherlanguage_list as $otherlanguage) {
			$childRoot = $xmlDoc->getElementsByTagName('prefs')->item(0);
			// Set education period
			$childElement = $xmlDoc->createElement('field');
			$childElement->setAttribute('name', 'foreignLanguageList['.$l.'].ass');
			$childElement->setAttribute('keep', ($otherlanguage->language == null ? 'false' : 'true'));
			$childRoot->appendChild($childElement);
			// Set education title
			$childElement = $xmlDoc->createElement('field');
			$childElement->setAttribute('name', 'foreignLanguageList['.$l.'].diplomaList[0]');
			$childElement->setAttribute('keep', ($otherlanguage->certificate == null ? 'false' : 'true'));
			$childRoot->appendChild($childElement);
			// Set education skills
			$childElement = $xmlDoc->createElement('field');
			$childElement->setAttribute('name', 'foreignLanguageList['.$l.'].experienceList[0]');
			$childElement->setAttribute('keep', ($otherlanguage->experiencedescription == null ? 'false' : 'true'));
			$childRoot->appendChild($childElement);
			// Set education institution name
			$childElement = $xmlDoc->createElement('field');
			$childElement->setAttribute('name', 'foreignLanguageList['.$l.'].experienceList[0].period');
			$childElement->setAttribute('format', $externaldateformat);
			$childRoot->appendChild($childElement);
			
			// Dinamically set data for each foreign language
			$childRoot = $xmlDoc->getElementsByTagName('languagelist')->item(0);
			$childElement = $xmlDoc->createElement('language');
			$childElement->setAttribute('xsi:type', 'europass:foreign');
			$childRoot->appendChild($childElement);
			
			$childRoot = $xmlDoc->getElementsByTagName('language')->item($l+1); // Because mothertongue has index 0...
			$childElement = $xmlDoc->createElement('code');
			$childElement->nodeValue = $otherlanguage->language;
			$childRoot->appendChild($childElement);
			$childElement = $xmlDoc->createElement('label');
			$childElement->nodeValue = get_string_from_file('language.'.$otherlanguage->language, get_config('docroot').'artefact/europass/lang/'.get_lang_from_locale($locale).'/artefact.europass.php');
			$childRoot->appendChild($childElement);
			$childElement = $xmlDoc->createElement('level');
			$childRoot->appendChild($childElement);
			// language levels
			$grandchildRoot = $childRoot->lastChild;
			$levels = array('listening' => $otherlanguage->listening, 'reading' => $otherlanguage->reading, 'spokeninteraction' => $otherlanguage->spokeninteraction, 'spokenproduction' => $otherlanguage->spokenproduction, 'writing' => $otherlanguage->writing);
			foreach ($levels as $field => $value) {
				$grandchildElement = $xmlDoc->createElement($field);
				$grandchildElement->nodeValue = strtolower($value);
				$grandchildRoot->appendChild($grandchildElement);
			}
			// language diploma list
			$childElement = $xmlDoc->createElement('diplomalist');
			$childRoot->appendChild($childElement);
			//language experience list
			$childElement = $xmlDoc->createElement('experiencelist');
			$childRoot->appendChild($childElement);
			
			// ------------------------------------------------
			// language diploma list entry
			// ------------------------------------------------
			$parentRoot = $xmlDoc->getElementsByTagName('diplomalist')->item($l);
			$parentElement = $xmlDoc->createElement('diploma');
			$parentRoot->appendChild($parentElement);
			$childRoot = $parentRoot->firstChild;
			// diploma title
			$childElement = $xmlDoc->createElement('title');
			$childElement->nodeValue = valid_xml_string($otherlanguage->certificate);
			$childRoot->appendChild($childElement);
			// diploma awarding body
			$childElement = $xmlDoc->createElement('awardingBody');
			$childElement->nodeValue = ($showHTML ? replacehtmlchars(nl2br($otherlanguage->awardingbody)) : valid_xml_string($otherlanguage->awardingbody)); // Execute nl2br transformation for HTML display...
			$childRoot->appendChild($childElement);
			// diploma date
			$childElement = $xmlDoc->createElement('date');
			$childRoot->appendChild($childElement);
			$grandchildRoot = $childRoot->firstChild->nextSibling->nextSibling;
			if ($otherlanguage->certificatedate <> null) {
				if (date('Y', strtotime($otherlanguage->certificatedate)) <> null) {
					$grandchildElement = $xmlDoc->createElement('year');
					$grandchildElement->nodeValue = date('Y', $otherlanguage->certificatedate);
					$grandchildRoot->appendChild($grandchildElement);
				}
				if (date('m', strtotime($otherlanguage->certificatedate)) <> null) {
					$grandchildElement = $xmlDoc->createElement('month');
					$grandchildElement->nodeValue = '--' . date('m', $otherlanguage->certificatedate);
					$grandchildRoot->appendChild($grandchildElement);
				}
				if (date('d', strtotime($otherlanguage->certificatedate)) <> null) {
					$grandchildElement = $xmlDoc->createElement('day');
					$grandchildElement->nodeValue = '---' . date('d', $otherlanguage->certificatedate);
					$grandchildRoot->appendChild($grandchildElement);
				}
			}
			// diploma level
			$childElement = $xmlDoc->createElement('level');
			$childElement->nodeValue = strtolower($otherlanguage->europeanlevel);
			$childRoot->appendChild($childElement);
			
			// ------------------------------------------------
			// language experience list entry
			// ------------------------------------------------
			$parentRoot = $xmlDoc->getElementsByTagName('experiencelist')->item($l);
			$parentElement = $xmlDoc->createElement('experience');
			$parentRoot->appendChild($parentElement);
			$childRoot = $parentRoot->firstChild;
			// experience period
			$childElement = $xmlDoc->createElement('period');
			$childRoot->appendChild($childElement);
			// experience period - from
			$grandchildRoot = $childRoot->firstChild;
			$grandchildElement = $xmlDoc->createElement('from');
			$grandchildRoot->appendChild($grandchildElement);
			$grandgrandchildRoot = $grandchildRoot->firstChild;
			if ($otherlanguage->experiencestartdate <> null) {
				if (date('Y', strtotime($otherlanguage->experiencestartdate)) <> null) {
					$grandgrandchildElement = $xmlDoc->createElement('year');
					$grandgrandchildElement->nodeValue = date('Y', $otherlanguage->experiencestartdate);
					$grandgrandchildRoot->appendChild($grandgrandchildElement);
				}
				if (date('m', strtotime($otherlanguage->experiencestartdate)) <> null) {
					$grandgrandchildElement = $xmlDoc->createElement('month');
					$grandgrandchildElement->nodeValue = '--' . date('m', $otherlanguage->experiencestartdate);
					$grandgrandchildRoot->appendChild($grandgrandchildElement);
				}
				if (date('d', strtotime($otherlanguage->experiencestartdate)) <> null) {
					$grandgrandchildElement = $xmlDoc->createElement('day');
					$grandgrandchildElement->nodeValue = '---' . date('d', $otherlanguage->experiencestartdate);
					$grandgrandchildRoot->appendChild($grandgrandchildElement);
				}
			}
			// experience period - to
			$grandchildElement = $xmlDoc->createElement('to');
			$grandchildRoot->appendChild($grandchildElement);
			$grandgrandchildRoot = $grandchildRoot->firstChild->nextSibling;
			if ($otherlanguage->experienceenddate <> null) {
				if (date('Y', strtotime($otherlanguage->experienceenddate)) <> null) {
					$grandgrandchildElement = $xmlDoc->createElement('year');
					$grandgrandchildElement->nodeValue = date('Y', $otherlanguage->experienceenddate);
					$grandgrandchildRoot->appendChild($grandgrandchildElement);
				}
				if (date('m', strtotime($otherlanguage->experienceenddate)) <> null) {
					$grandgrandchildElement = $xmlDoc->createElement('month');
					$grandgrandchildElement->nodeValue = '--' . date('m', $otherlanguage->experienceenddate);
					$grandgrandchildRoot->appendChild($grandgrandchildElement);
				}
				if (date('d', strtotime($otherlanguage->experienceenddate)) <> null) {
					$grandgrandchildElement = $xmlDoc->createElement('day');
					$grandgrandchildElement->nodeValue = '---' . date('d', $otherlanguage->experienceenddate);
					$grandgrandchildRoot->appendChild($grandgrandchildElement);
				}
			}
			// experience description
			$childElement = $xmlDoc->createElement('description');
			$childElement->nodeValue = ($showHTML ? replacehtmlchars(nl2br($otherlanguage->experiencedescription)) : valid_xml_string($otherlanguage->experiencedescription));
			$childRoot->appendChild($childElement);
			
			$l++;
		}
	}

	// ========================================
	// Dinamically set prefs (grid option)
	// ========================================
	$childRoot = $xmlDoc->getElementsByTagName('prefs')->item(0);
	$childElement = $xmlDoc->createElement('field');
	$childElement->setAttribute('name', 'grid');
	$childElement->setAttribute('keep', 'true');
	$childRoot->appendChild($childElement);

	// ========================================
	// Return dinamically generated XML
	// ========================================
	return $xmlDoc->saveXML();
}

?>
