<?php
/**
 *
 * @package    mahara
 * @subpackage artefact-europass
 * @author     Gregor Anzelj
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2009-2022 Gregor Anzelj, gregor.anzelj@gmail.com
 *
 */
 
define('INTERNAL', 1);

require_once(dirname(dirname(dirname(dirname(__FILE__)))) . '/init.php');
safe_require('artefact', 'europass');
safe_require('artefact', 'file');
safe_require('artefact', 'internal');

require_once 'dompdf/autoload.inc.php';  
use Dompdf\Dompdf; 


$values = array(
	'documenttype' => $SESSION->get('documenttype'),
	'fileformat'   => $SESSION->get('fileformat'),
	'locale'       => $SESSION->get('locale'),
	'logo'         => $SESSION->get('logo'),
	'profilepic'   => $SESSION->get('profilepic'),
	'template'     => $SESSION->get('template'),
	// Set true for PDF, false otherwise (e.g. HTML)
	'print'        => ($SESSION->get('fileformat') == 'pdf' ? true : false)
);


if ($values['fileformat'] == 'html') {
	$content = generate_europass_html($values['documenttype'], $values);

	header('Content-Type: text/html;charset=utf-8');        
	echo $content;
}

if ($values['fileformat'] == 'pdf') {
	$content = generate_europass_html($values['documenttype'], $values);

	$dompdf = new Dompdf();
	$dompdf->loadHtml($content);
	$dompdf->setPaper('A4', 'portrait');
	$dompdf->render();
	ob_end_clean();
	$dompdf->stream('europass.pdf', array('Attachment' => 0));
}

exit;
