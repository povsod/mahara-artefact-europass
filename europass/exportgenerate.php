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
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 
   The Europass API currently consists of five services that provide conversion methods between
   the various file formats supported by Europass. The services accept a machine-interpretable
   representation of an individual’s personal data (eg ECV, ELP) and return the same data in a
   different file format.
   
   The file formats used as input are the Europass XML (EXML), the HR-XML (HR-XML), the Adobe PDF
   with Europass XML attachment (PDF+EXML), the Adobe PDF with HR-XML attachment (PDF+HR-XML) and
   the Europass JSON (EJSON).
   
   The returned file formats are –apart from those used as input- the Microsoft Word 97-2003 (DOC),
   the OpenDocument ver 2 Text (ODT), and the HTML.
   
   The conversion services methods support conversions for both ECV and ELP data, since both data
   can be represented in EXML, HR-XML or JSON formats.

   Currently the conversion services are offered as SOAP web services. Data from Mahara is returned
   in Europass XML, thus the EuropassXMLConversionService is used for conversion into other formats.
   
   For conversion into HR-XML HRXMLConversionService is used and for conversion into JSON
   JSONConversionService is used.
   
   In order to accommodate the remote generation of CV and LP documents several web services methods
   are implemented. Clients can be constructed automatically by several tools, just by pointing them
   to the correct WSDL file:

   SERVICE: EuropassXMLConversionService
  =======================================
   https://europass.cedefop.europa.eu/soapws/services/EuropassXMLConversionService?wsdl
   
   INPUT                ENDPOINT (Methods)                                  OUTPUT
  -----------------------------------------------------------------------------------------------
   Europass XML 2.0	    convertToPDFwithXMLCV / convertToPDFwithXMLLP       PDF+Europass XML 2.0
   Europass XML 2.0	    convertToPDFwithHRXMLCV / convertToPDFwithHRXMLLP   PDF+HR-XML 2.5
   Europass XML 2.0	    convertToMSWordCV / convertToMSWordLP               MS WORD 97-2003
   Europass XML 2.0	    convertToODTCV / convertToODTLP                     ODT ver.2 Text
   Europass XML 2.0	    convertToHTMLCV / convertToHTMLLP                   HTML
   
   
   SERVICE: HRXMLConversionService
  =================================
   https://europass.cedefop.europa.eu/soapws/services/HRXMLConversionService?wsdl
   
   INPUT                ENDPOINT (Methods)                                  OUTPUT
  -----------------------------------------------------------------------------------------------
   Europass XML 2.0     convertToHRXML                                      HR-XML 2.5
   
   
   SERVICE: JSONConversionService
  ================================
   https://europass.cedefop.europa.eu/soapws/services/JSONConversionService?wsdl
   
   INPUT                ENDPOINT (Methods)                                  OUTPUT
  -----------------------------------------------------------------------------------------------
   Europass XML 2.0     convertFromXMLCV / convertFromXMLLP                 Europass JSON 2.0
   
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
*/
 
define('INTERNAL', true);

require_once(dirname(dirname(dirname(__FILE__))) . '/init.php');
require_once('pieforms/pieform.php');
require_once(get_config('docroot') . 'artefact/lib.php');
require_once(get_config('docroot') . 'artefact/europass/lib/locale.php');
require_once(get_config('docroot') . 'artefact/europass/lib/europassxml.php');

global $SESSION;
global $USER;

$locale = $SESSION->get('locale');
$documenttype = $SESSION->get('documenttype');
$fileformat = $SESSION->get('fileformat');
$photograph = $SESSION->get('photograph');
$internaldate = $SESSION->get('internaldate');
$externaldate = $SESSION->get('externaldate');

// If converstion format is NOT supported!
if (!in_array($fileformat, array('pdf', 'pdfhrxml', 'doc', 'odt', 'html', 'json', 'xml', 'hrxml'))) {
	// Unset SESSION values   
	$SESSION->set('locale', '');
	$SESSION->set('documenttype', '');
	$SESSION->set('fileformat', '');
	$SESSION->set('photograph', '');
	$SESSION->set('internaldate', '');
	$SESSION->set('externaldate', '');
	// Stop processing the page
	exit;
}

if ($locale <> '' and $documenttype <> '' and $fileformat <> '' and $internaldate <> '' and $externaldate <> '') {

	if (in_array($fileformat, array('pdf', 'pdfhrxml', 'doc', 'odt', 'html'))) {
		// Pull in the NuSOAP code
		require_once('lib/nusoap/nusoap.php'); // NuSOAP 0.9.5 (http://sourceforge.net/projects/nusoap/)
		// Create the client instance
		// Force use of SSL, so the communication between the client and the server is encrypted and can be authenticated.
		$client = new nusoap_client('http://europass.cedefop.europa.eu/soapws/services/EuropassXMLConversionService?wsdl', 'wsdl');
		// Check for an error
		$err = $client->getError();
		if ($err) {
			// Display the error
			//$SESSION->add_info_msg('Constructor error: ' . $err);
			$message = '<div style="color: #dd0221; background: #ffd3d9; padding: 0.2em 0.7em; font-family: sans-serif; font-size: 0.8em;">' . get_string('europassexportnoconncetion','artefact.europass') . '<br>Error: ' . $err . '</div>';
			print_r($message);
			// At this point, you know the call that follows will fail
		}
	
		// NuSOAP always uses ISO-8859-1 for the WSDL.
		// The client sends a UTF-8 encoded string to the server.
		// The client disable the built-in UTF-8 decoding, so that it could handle UTF-8 strings that do not convert to Latin-1.
		$client->soap_defencoding = 'UTF-8';
		$client->decode_utf8 = false;
	
		if ($documenttype == 'europasscv') {
			$document = generate_europasscv_xml($USER->get('id'), false, $locale, $internaldate, $externaldate, $photograph);
			// Call the SOAP method
			switch ($fileformat) {
				case 'pdf':      $result = $client->call('convertToPDFwithXMLCV', array('xml' => $document, 'locale' => $locale)); break;
				case 'pdfhrxml': $result = $client->call('convertToPDFwithHRXMLCV', array('xml' => $document, 'locale' => $locale)); break;
				case 'doc':      $result = $client->call('convertToMSWordCV', array('xml' => $document, 'locale' => $locale)); break;
				case 'odt':      $result = $client->call('convertToODTCV', array('xml' => $document, 'locale' => $locale)); break;
				case 'html':     $result = $client->call('convertToHTMLCV', array('xml' => $document, 'locale' => $locale)); break;
			}
			$wsdl_error = $client->getError();
			if ($fileformat == 'html') {
				if (array_key_exists('html', $result)) {
					$content = $result['html'];
				} else {
					$content = '';
				}
			} else {
				if (array_key_exists('file', $result)) {
					$content = base64_decode($result['file']);
				} else {
					$content = '';
				}
			}
			// Set default filename
			$filename = 'cv';
		}

		if ($documenttype == 'europasslp') {
			$document = generate_europasslp_xml($USER->get('id'), false, $locale, $internaldate, $externaldate);
			// Call the SOAP method
			switch ($fileformat) {
				case 'pdf': $result = $client->call('convertToPDFwithXMLLP', array('xml' => $document, 'locale' => $locale)); break;
				case 'pdfhrxml': $result = $client->call('convertToPDFwithHRXMLLP', array('xml' => $document, 'locale' => $locale)); break;
				case 'doc': $result = $client->call('convertToMSWordLP', array('xml' => $document, 'locale' => $locale)); break;
				case 'odt': $result = $client->call('convertToODTLP', array('xml' => $document, 'locale' => $locale)); break;
				case 'html': $result = $client->call('convertToHTMLLP', array('xml' => $document, 'locale' => $locale)); break;
			}
			$wsdl_error = $client->getError();
			if ($fileformat == 'html') {
				if (array_key_exists('html', $result)) {
					$content = $result['html'];
				} else {
					$content = '';
				}
			} else {
				if (array_key_exists('file', $result)) {
					$content = base64_decode($result['file']);
				} else {
					$content = '';
				}
			}
			// Set default filename
			$filename = 'lp';
		}
	
	}

	
	if ($fileformat == 'json') {
		// Pull in the NuSOAP code
		require_once('lib/nusoap/nusoap.php'); // NuSOAP 0.9.5 (http://sourceforge.net/projects/nusoap/)
		// Create the client instance
		// Force use of SSL, so the communication between the client and the server is encrypted and can be authenticated.
		$client = new nusoap_client('http://europass.cedefop.europa.eu/soapws/services/JSONConversionService?wsdl', 'wsdl');
		// Check for an error
		$err = $client->getError();
		if ($err) {
			// Display the error
			//$SESSION->add_info_msg('Constructor error: ' . $err);
			$message = '<div style="color: #dd0221; background: #ffd3d9; padding: 0.2em 0.7em; font-family: sans-serif; font-size: 0.8em;">' . get_string('europassexportnoconncetion','artefact.europass') . '</div>';
			print_r($message);
			// At this point, you know the call that follows will fail
		}
	
		// NuSOAP always uses ISO-8859-1 for the WSDL.
		// The client sends a UTF-8 encoded string to the server.
		// The client disable the built-in UTF-8 decoding, so that it could handle UTF-8 strings that do not convert to Latin-1.
		$client->soap_defencoding = 'UTF-8';
		$client->decode_utf8 = false;
	
		if ($documenttype == 'europasscv') {
			$document = generate_europasscv_xml($USER->get('id'), false, $locale, $internaldate, $externaldate, $photograph);
			// Call the SOAP method
			switch ($fileformat) {
				case 'json': $result = $client->call('convertFromXMLCV', array('xml' => $document, 'locale' => $locale)); break;
			}
			$wsdl_error = $client->getError();
			if (array_key_exists('json', $result)) {
				$content = $result['json'];
			} else {
				$content = '';
			}
			// Set default filename
			$filename = 'cv';
		}

		if ($documenttype == 'europasslp') {
			$document = generate_europasslp_xml($USER->get('id'), false, $locale, $internaldate, $externaldate);
			// Call the SOAP method
			switch ($fileformat) {
				case 'json': $result = $client->call('convertFromXMLLP', array('xml' => $document, 'locale' => $locale)); break;
			}
			$wsdl_error = $client->getError();
			if (array_key_exists('json', $result)) {
				$content = $result['json'];
			} else {
				$content = '';
			}
			// Set default filename
			$filename = 'lp';
		}
	
	}


	if ($fileformat == 'hrxml') {
		// Pull in the NuSOAP code
		require_once('lib/nusoap/nusoap.php'); // NuSOAP 0.9.5 (http://sourceforge.net/projects/nusoap/)
		// Create the client instance
		// Force use of SSL, so the communication between the client and the server is encrypted and can be authenticated.
		$client = new nusoap_client('http://europass.cedefop.europa.eu/soapws/services/HRXMLConversionService?wsdl', 'wsdl');
		// Check for an error
		$err = $client->getError();
		if ($err) {
			// Display the error
			//$SESSION->add_info_msg('Constructor error: ' . $err);
			$message = '<div style="color: #dd0221; background: #ffd3d9; padding: 0.2em 0.7em; font-family: sans-serif; font-size: 0.8em;">' . get_string('europassexportnoconncetion','artefact.europass') . '</div>';
			print_r($message);
			// At this point, you know the call that follows will fail
		}
	
		// NuSOAP always uses ISO-8859-1 for the WSDL.
		// The client sends a UTF-8 encoded string to the server.
		// The client disable the built-in UTF-8 decoding, so that it could handle UTF-8 strings that do not convert to Latin-1.
		$client->soap_defencoding = 'UTF-8';
		$client->decode_utf8 = false;
	
		if ($documenttype == 'europasscv') {
			$document = generate_europasscv_xml($USER->get('id'), false, $locale, $internaldate, $externaldate, $photograph);
			// Call the SOAP method
			switch ($fileformat) {
				case 'hrxml': $result = $client->call('convertToHRXML', array('xml' => $document, 'locale' => $locale)); break;
			}
			$wsdl_error = $client->getError();
			if (array_key_exists('xml', $result)) {
				$content = $result['xml'];
				$content = indentXML($content);
			} else {
				$content = '';
			}
			// Set default filename
			$filename = 'cv';
		}

		if ($documenttype == 'europasslp') {
			$document = generate_europasslp_xml($USER->get('id'), false, $locale, $internaldate, $externaldate);
			// Call the SOAP method
			switch ($fileformat) {
				case 'hrxml': $result = $client->call('convertToHRXML', array('xml' => $document, 'locale' => $locale)); break;
			}
			$wsdl_error = $client->getError();
			if (array_key_exists('xml', $result)) {
				$content = $result['xml'];
				$content = indentXML($content);
			} else {
				$content = '';
			}
			// Set default filename
			$filename = 'lp';
		}
	
	}


	if ($fileformat == 'xml') {
		if ($documenttype == 'europasscv') {
			$content = generate_europasscv_xml($USER->get('id'), false, $locale, $internaldate, $externaldate, $photograph);
			$content = indentXML($content);
			// Set default filename
			$filename = 'cv';
		}
		if ($documenttype == 'europasslp') {
			$content = generate_europasslp_xml($USER->get('id'), false, $locale, $internaldate, $externaldate);
			$content = indentXML($content);
			// Set default filename
			$filename = 'lp';
		}
	}

	if ($content == '') {
		if ($wsdl_error != '') {
			$message = '<div style="color: #dd0221; background: #ffd3d9; padding: 0.2em 0.7em; font-family: sans-serif; font-size: 0.8em;">' . $wsdl_error . '</div>';
		} else {
			$message = '<div style="color: #dd0221; background: #ffd3d9; padding: 0.2em 0.7em; font-family: sans-serif; font-size: 0.8em;">' . get_string('europassexportservererror','artefact.europass') . '</div>';
		}
		print_r($message);
	} else {
		// Send the header here - download generated file
		switch ($fileformat) {
			case 'pdf':
				header('Content-Type: application/pdf');		
				header('Content-Disposition: attachment; filename=' . $filename . '.pdf');
				break;
			case 'pdfhrxml':
				header('Content-Type: application/pdf');		
				header('Content-Disposition: attachment; filename=' . $filename . '-hr.pdf');
				break;
			case 'doc':
				header('Content-Type: application/msword');		
				header('Content-Disposition: attachment; filename=' . $filename . '.doc');
				break;
			case 'odt':
				header('Content-Type: application/vnd.oasis.opendocument.text');		
				header('Content-Disposition: attachment; filename=' . $filename . '.odt');
				break;
			case 'html':
				header('Content-Type: text/html');		
				header('Content-Disposition: attachment; filename=' . $filename . '.html');
				break;
			case 'hrxml':
				header('Content-Type: text/xml; charset=utf-8');		
				header('Content-Disposition: attachment; filename=' . $filename . '-hr.xml');
				break;
			case 'json':
				header('Content-Type: application/json');		
				header('Content-Disposition: attachment; filename=' . $filename . '.json');
				break;
			default:
				header('Content-Type: text/xml; charset=utf-8');		
				header('Content-Disposition: attachment; filename=' . $filename . '.xml');
				break;
		}
    
		// Put the content in the file
		echo($content);
	}
}

// Unset SESSION values   
$SESSION->set('locale', '');
$SESSION->set('documenttype', '');
$SESSION->set('fileformat', '');
$SESSION->set('photograph', '');
$SESSION->set('internaldate', '');
$SESSION->set('externaldate', '');

// Stop processing the page
exit;

?>