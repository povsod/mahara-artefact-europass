<?php
/**
 *
 * @package    mahara
 * @subpackage artefact-europass
 * @author     Gregor Anzelj
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2009-2017 Gregor Anzelj, gregor.anzelj@gmail.com
 *
 */

define('INTERNAL', 1);

require_once(dirname(dirname(dirname(dirname(__FILE__)))) . '/init.php');
safe_require('artefact', 'europass');
safe_require('artefact', 'file');
safe_require('artefact', 'internal');


$locale = $SESSION->get('locale');
$documenttype = $SESSION->get('documenttype');
$fileformat = $SESSION->get('fileformat');
$dateformat = $SESSION->get('dateformat');
$logo = $SESSION->get('logo');
$profilepic = $SESSION->get('profilepic');
$userid = $USER->get('id');


if ($locale <> '' and $documenttype <> '' and $fileformat <> '' and $dateformat <> '') {

    // Get Europass attachments
    if (in_array('esp', $documenttype)) {
        $files = array();
        $references = array();
        $attachments = array();
        if ($parent = get_field('artefact', 'id', 'artefacttype', 'folder', 'note', 'skillsfolder', 'owner', $userid)) {
            $skillsfolder = new ArtefactTypeFolder($parent);
            $files = $skillsfolder->folder_contents();
            foreach ($files as $f) {
                $details = array();
                if ($f->artefacttype == 'image') {
                    $att = get_record_sql('
                        SELECT f.filetype, i.width, i.height
                        FROM {artefact_file_files} f
                        LEFT OUTER JOIN {artefact_file_image} i ON f.artefact = i.artefact
                        WHERE f.artefact = ?', array($f->id));
                } else {
                    $att = get_record_sql('
                        SELECT f.filetype
                        FROM {artefact_file_files} f
                        WHERE f.artefact = ?', array($f->id));
                }
                $size = get_imagesize_parameters();
                $file = artefact_instance_from_id($f->id);
                $path = $file->get_path($size);
                $data = file_get_contents($path);
                // Add file reference
                $references[] = array(
                    'idref' => 'ATT_MAHARA_' . $file->get('id'),
                );
                // Add file details
                $item = array(
                    'Id' => 'ATT_MAHARA_' . $file->get('id'),
                    'Name' => $file->get('title'),
                    'MimeType' => $att->filetype,
                    'Data' => base64_encode($data), // base-64 encoded image/file
                );
                if ($f->artefacttype == 'image') {
                    $item['Metadata'][] = array(
                        'Key' => 'dimension',
                        'Value' => $att->width . 'x' . $att->height,
                    );
                }
                $attachments[] = $item;
            }
        }
    }

    $content = array(
        'SkillsPassport' => array(
            'Locale' => $locale,
            'DocumentInfo' => get_document_information($documenttype, $logo),
            'PrintingPreferences' => get_print_preferences($documenttype, $dateformat),
            'LearnerInfo' => array(
                'Identification' => get_personal_information($profilepic, true),
                'WorkExperience' => get_work_experience(true),
                'Education' => get_education_and_training(true),
                'Skills' => get_personal_skills(true),
                'Achievement' => get_additional_information(true),
                'ReferenceTo' => (!empty($references) ? $references : null),
            ),
            'Attachment' => (!empty($attachments) ? $attachments : null),
        )
    );

    $filename = 'europass-for-user' . $USER->get('id') . '-' . time();
    switch ($fileformat) {
        case 'word':
            $settings = array(
                'service'  => '/document/to/word',
                'mimetype' => 'application/vnd.ms-word;charset=utf-8',
                'filename' => $filename . '.doc',
            );            
            break;
        case 'opendoc':
            $settings = array(
                'service'  => '/document/to/opendoc',
                'mimetype' => 'application/vnd.oasis.opendocument.text;charset=utf-8',
                'filename' => $filename . '.odt',
            );            
            break;
        case 'xml':
            $settings = array(
                'service'  => '/document/to/xml',
                'mimetype' => 'application/xml;charset=utf-8',
                'filename' => $filename . '.xml',
            );            
            break;
        case 'html':
            $settings = array(
                'service'  => null,
                'mimetype' => 'text/html;charset=utf-8',
                'filename' => $filename . '.html',
            );            
            break;
        case 'pdf':
        default:
            $settings = array(
                'service'  => '/document/to/pdf',
                'mimetype' => 'application/pdf;charset=utf-8',
                'filename' => $filename . '.pdf',
            );            
    }

    if ($fileformat == 'html') {
        $options = array(
            'embed' => false,
            'lang' => $locale,
            'profilepic' => $profilepic,
        ); 
        $result = generate_europass_html($documenttype, $options);
        // Simulate successful http request
        $info = array('http_code' => 200);
    }
    else {
        $baseurl = 'https://europass.cedefop.europa.eu/rest/v1';
        $header = array();
        $header[] = 'Content-Type: application/json';
        $header[] = 'Accept-Language: ' . (!empty($locale) ? $locale : 'en');
        $ch = curl_init($baseurl . $settings['service']);
        curl_setopt($ch, CURLOPT_PORT, '443'); // https
        // response without headers, just body
        curl_setopt($ch, CURLOPT_HEADER, false);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($content, JSON_UNESCAPED_SLASHES));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 2);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, true);
        curl_setopt($ch, CURLOPT_CAINFO, get_config('docroot').'artefact/europass/cert/cacert.crt');
        $result = curl_exec($ch);
        //print_r($result);
        $info = curl_getinfo($ch);
        //print_r($info);
        $error = curl_error($ch);
        //print_r($error);
        curl_close($ch);
    }

    if ($info['http_code'] == 200) {
        header('Content-Type: ' . $settings['mimetype']);        
        header('Content-Disposition: attachment; filename=' . $settings['filename']);
        echo $result;
    } else {
        $error = json_decode($result, true);
        // Mimic Bootstrap's div element with "alert alert-danger" class
        echo '<div style="color: #a94442; background-color: #f2dede; border: 1px solid #ebccd1; border-radius: 4px; padding: 15px; font-family: sans-serif; font-size: 14px;">';
        echo "<b>" . $error['Error']['code'] . "</b> ";
        echo "<br />" . $error['Error']['trace'];
        echo "<br />" . $error['Error']['message'];
        echo "</div>";
    }
}

// Unset SESSION values   
$SESSION->set('locale', '');
$SESSION->set('documenttype', '');
$SESSION->set('fileformat', '');
$SESSION->set('dateformat', '');
$SESSION->set('logo', '');
$SESSION->set('align', '');
$SESSION->set('profilepic', '');

// Stop processing the page
exit;
