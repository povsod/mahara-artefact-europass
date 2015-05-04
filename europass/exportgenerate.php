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
if (!in_array($fileformat, array('pdf', 'doc', 'odt', 'html', 'xml'))) {
	// Unset SESSION values   
	$SESSION->set('locale', '');
	$SESSION->set('fileformat', '');
	$SESSION->set('photograph', '');
	$SESSION->set('internaldate', '');
	$SESSION->set('externaldate', '');
	// Stop processing the page
	exit;
}

if ($locale <> '' and $fileformat <> '' and $internaldate <> '' and $externaldate <> '') {

	if (in_array($fileformat, array('pdf', 'doc', 'odt', 'html'))) {
		$document = generate_europasscv_xml($USER->get('id'), false, $locale, $internaldate, $externaldate, $photograph);
		// Call XML Upgrade service
		$url = 'https://europass.cedefop.europa.eu/rest/v1/document/upgrade';
		$header = array();
		$header[] = 'Content-Type: application/xml';
        $config = array(
            CURLOPT_URL => $url,
            CURLOPT_PORT => '443',
            CURLOPT_HEADER => true,
            CURLOPT_HTTPHEADER => $header,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $document,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_SSL_VERIFYHOST => 2,
            CURLOPT_SSL_VERIFYPEER => true,
            CURLOPT_CAINFO => get_config('docroot').'artefact/europass/cert/cacert.crt'
        );
        $result = mahara_http_request($config);
		if ($result->info['http_code'] == 200 && !empty($result->data)) {
		    $document_v3 = substr($result->data, $result->info['header_size']);
		    // Call the API method
		    switch ($fileformat) {
			    case 'pdf':
				    $url = 'https://europass.cedefop.europa.eu/rest/v1/document/to/pdf';
					break;
			    case 'doc':
				    $url = 'https://europass.cedefop.europa.eu/rest/v1/document/to/word';
					break;
			    case 'odt':
				    $url = 'https://europass.cedefop.europa.eu/rest/v1/document/to/opendoc';
					break;
		    }
    		$header = array();
	    	$header[] = 'Content-Type: application/xml';
	    	$header[] = 'Accept-Language: ' . substr($locale, 0, 2);
	
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_PORT, '443');
            curl_setopt($ch, CURLOPT_HEADER, true);
            curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $document_v3);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
			curl_setopt($ch, CURLOPT_BINARYTRANSFER, true);
            curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
            curl_setopt($ch, CURLOPT_CAINFO, get_config('docroot').'artefact/europass/cert/cacert.crt');
            $output = curl_exec($ch);
			$info = curl_getinfo($ch);
			$content = substr($output, $info['header_size']);
            curl_close($ch);     
		}
		// Set default filename
		$filename = 'cv';
	
	}

	
	if ($fileformat == 'xml') {
		$content = generate_europasscv_xml($USER->get('id'), false, $locale, $internaldate, $externaldate, $photograph);
		$content = indentXML($content);
		// Set default filename
		$filename = 'cv';
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
			case 'doc':
				header('Content-Type: application/msword');		
				header('Content-Disposition: attachment; filename=' . $filename . '.doc');
				break;
			case 'odt':
				header('Content-Type: application/vnd.oasis.opendocument.text');		
				header('Content-Disposition: attachment; filename=' . $filename . '.odt');
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
$SESSION->set('fileformat', '');
$SESSION->set('photograph', '');
$SESSION->set('internaldate', '');
$SESSION->set('externaldate', '');

// Stop processing the page
exit;

?>