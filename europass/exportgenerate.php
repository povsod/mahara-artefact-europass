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
 * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * * *
 
	Instruments Web Services
	========================
	
	In order to accommodate the remote generation of CV and LP documents two web services methods are implemented. 
	
	Both of them have common behavior that is the following: 
	•	They expect three parameters: 
		o	document : This is a String parameter, containing a valid XML file (CV or LP depending on the case)
		o	filetype: This is a String parameter, that can take one of the following values: doc, pdf, odt, 
			to produce MS Office Doc file, PDF file or OpenDocument file.
		o	locale: This is a String parameter, containing the name of a locale, in which the document generation will occur.
			If it is left blank, or if it is invalid, the locale that is contained in the XML file will be used for document generation.
	•	Both methods return a byte array containing the document generated. 
	
	These two methods are:
		byte[] getDocumentFromCV(String document, String filetype, String locale)
		byte[] getDocumentFromLP(String document, String filetype, String locale)
	
	Clients can be constructed automatically by several tools, just by pointing them to the correct WSDL file:
	http://europass.cedefop.europa.eu/instrumentssrv/services/Instruments?wsdl
	
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

if ($locale <> '' and $documenttype <> '' and $fileformat <> '' and $internaldate <> '' and $externaldate <> '') {

	if ($fileformat == 'pdf' or $fileformat == 'doc' or $fileformat == 'odt') {
		// Pull in the NuSOAP code
		require_once('lib/nusoap.php');
		// Create the client instance
		// Force use of SSL, so the communication between the client and the server is encrypted and can be authenticated.
		$client = new nusoap_client('https://europass.cedefop.europa.eu/instrumentssrv/services/Instruments?wsdl', 'wsdl');
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
			$result = $client->call('getDocumentFromCV', array('document' => $document, 'filetype' => $fileformat, 'locale' => $locale));
			$content = pack("H*", $result);
			// Set default filename
			$filename = 'cv';
		}

		if ($documenttype == 'europasslp') {
			$document = generate_europasslp_xml($USER->get('id'), false, $locale, $internaldate, $externaldate);
			// Call the SOAP method
			$result = $client->call('getDocumentFromLP', array('document' => $document, 'filetype' => $fileformat, 'locale' => $locale));
			$content = pack("H*", $result);
			// Set default filename
			$filename = 'lp';
		}
	
	}
	
	if ($fileformat == 'html') {
		if ($documenttype == 'europasscv') {
			// Load up the Europass CV generated XML string
			$xmlDoc = new DOMDocument;
			$xmlDoc->loadXML(generate_europasscv_xml($USER->get('id'), true, $locale, $internaldate, $externaldate, $photograph));
			// Load up the appropriate XSL file, according to selected locale
			$xslDoc = new DOMDocument;
			$xslDoc->load(get_config('docroot') . 'artefact/europass/blocktype/europasscv/xsl/cv_' . $locale . '_V2.0.xsl');
			$xslt = new XSLTProcessor;
			$xslt->importStyleSheet($xslDoc);
			// Apply the transformation
			$content = $xslt->transformToXml($xmlDoc);
			$content = html_entity_decode($content);
			// Set default filename
			$filename = 'cv';
		}
		if ($documenttype == 'europasslp') {
			// Load up the Europass CV generated XML string
			$xmlDoc = new DOMDocument;
			$xmlDoc->loadXML(generate_europasslp_xml($USER->get('id'), true, $locale, $internaldate, $externaldate));
			// Load up the appropriate XSL file, according to selected locale
			$xslDoc = new DOMDocument;
			$xslDoc->load(get_config('docroot') . 'artefact/europass/blocktype/europasslp/xsl/lp_' . $locale . '_V2.0.xsl');
			$xslt = new XSLTProcessor;
			$xslt->importStyleSheet($xslDoc);
			// Apply the transformation
			$content = $xslt->transformToXml($xmlDoc);
			$content = html_entity_decode($content);
			// Set default filename
			$filename = 'lp';
		}
	}

	if ($fileformat == 'xml') {
		if ($documenttype == 'europasscv') {
			$content = generate_europasscv_xml($USER->get('id'), false, $locale, $internaldate, $externaldate, $photograph);
			// Set default filename
			$filename = 'cv';
		}
		if ($documenttype == 'europasslp') {
			$content = generate_europasslp_xml($USER->get('id'), false, $locale, $internaldate, $externaldate);
			// Set default filename
			$filename = 'lp';
		}
	}

	if ($content == '') {
		$message = '<div style="color: #dd0221; background: #ffd3d9; padding: 0.2em 0.7em; font-family: sans-serif; font-size: 0.8em;">' . get_string('europassexportservererror','artefact.europass') . '</div>';
		print_r($message);
	} else {
		// Send the header here - download generated file
		switch ($fileformat) {
			case 'pdf':
				header('Content-Type: application/pdf');		
				header('Content-Disposition: attachment; filename=' . $filename . '.pdf');
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