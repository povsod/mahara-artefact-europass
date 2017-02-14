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

defined('INTERNAL') || die();

$string['pluginname'] = 'Europass';

$string['europass'] = 'Europass';
$string['europassartefactsaved'] = 'Europass curriculum vitae saved sucessfully';
$string['europassexportgenerated'] = 'Please wait while your export is being generated...';

$string['languagesaved'] = 'Language saved sucessfully';
$string['languagesavefailed'] = 'Failed to save language';
$string['languagedeleteconfirm'] = 'Are you sure you want to delete this language?';
$string['languagedeleted'] = 'Language deleted sucessfully';
$string['languagediploma'] = 'Language diploma';
$string['languageexperience'] = 'Linguistic experience';
$string['languagediplomadeleteconfirm'] = 'Are you sure you want to delete this language diploma?';
$string['languageexperiencedeleteconfirm'] = 'Are you sure you want to delete this linguistic experience?';
$string['languagediplomadeleted'] = 'Language diploma deleted sucessfully';
$string['languageexperiencedeleted'] = 'Linguistic experience deleted sucessfully';
$string['languagediplomasaved'] = 'Language diploma saved sucessfully';
$string['languagediplomasavefailed'] = 'Failed to save language diploma';
$string['languageexperiencesaved'] = 'Linguistic experience saved sucessfully';
$string['languageexperiencesavefailed'] = 'Failed to save linguistic experience';

// Export data from Mahara to Europass form...
$string['exporteuropass'] = 'Export Europass';
$string['exportstep1'] = '1 - Select document(s)';
$string['attach'] = 'Attachments';
$string['selectlocale'] = 'Language';
$string['exportstep2'] = '2 - Select format';
$string['selectdateformatdesc'] = 'Date format used in export';
$string['selectdateformatdesc2'] = 'Dates are localised according to selected language.';
$string['dateformat-numeric-medium'] = '31/1/2005';
$string['dateformat-numeric-long'] = '31/01/2005';
$string['dateformat-text-short'] = '31 Jan 2005';
$string['dateformat-text-long'] = '31 January 2005';
$string['exportfile'] = 'File';
$string['pdf'] = 'Adobe® PDF + Europass XML';
$string['doc'] = 'Microsoft® Word';
$string['odt'] = 'OpenDocument';
$string['html'] = 'HTML';
$string['xml'] = 'Europass XML';
$string['exportstep3'] = '3 - Export';
$string['generateexport'] = 'Export';
$string['generateexportdesc'] = 'Generate the Europass document and download it on your computer.';
$string['generaloptions'] = 'General export options';
$string['includelogo'] = 'Include Europass logo?';

// Import data from Europass XML to Mahara...
$string['importeuropass'] = 'Import Europass';
$string['importstep1'] = '1 - Import file and options';
//$string['selectfile&options'] = 'Upload Europass XML file and select import options';
$string['importstep2'] = '2 - Import';
//$string['execute'] = 'Execute import';
$string['executeimport'] = 'Import';
$string['importfile'] = 'Europass XML file';
$string['importfiledesc'] = 'Select valid Europass XML file to import to Mahara';
$string['notvalidxmlfile'] = 'The uploaded file is not a valid XML file.';
$string['importoptions'] = 'What to import?';
$string['importoptionsdesc'] = 'Locked profile fields will not be changed/updated';
$string['nocheckedoptions'] = 'You have to check at least one option to import.';
$string['fieldnotimported'] = 'Field "%s" not imported.';
$string['lockedfieldnotimported'] = 'Locked field "%s" not imported.';
$string['languagecodemissing'] = 'Field "%s" not imported. Language code is missing.';
$string['importdate'] = 'Import dates as';
$string['europassimportexecuted'] = 'The data from Europass XML successfully imported into Mahara.';
$string['elementsaved'] = 'Europass element saved successfully.';
$string['deleteelementconfirm'] = 'Are you sure you want to delete this Europass element?';
$string['elementdeletedsuccessfully'] = 'Europass element deleted successfully.';

// Europass ESP
$string['skillsfolder'] = 'Skills passport';
$string['skillsfolderdesc'] = 'Files to document Europass skills';
$string['skillsfolderupload'] = 'Upload file';
$string['skillsfolderuploadnotice'] = 'Create your Skills passport to gather documents such as Language passport, Certificate supplement, copies of degrees or certificates, attestations of employment, etc.';
$string['skillsfolderuploadmaxsize'] = '(Maximum upload size 2.5 MB. Documents uploaded to your Skills passport must be in PNG, JPEG or PDF format.)';
$string['filenotaccepted'] = 'The uploaded document must be a PNG, JPEG or PDF file.';
$string['fileuploadcomplete'] = 'Document upload complete.';
$string['deletefile'] = 'Delete document';
$string['deletefileconfirm'] = 'Are you sure you want to delete this document?';
$string['filechangedsuccessfully'] = 'Document changed successfully.';
$string['filedeletedsuccessfully'] = 'Document deleted successfully.';
$string['editfile'] = 'Edit document';
$string['profilepicinclude'] = 'Include profile picture?';

// Included strings for labels, countries, languages and nationalities
// ===================================================================

// Europass GUI form tabs
$string['ecv-tab'] = 'Curriculum vitae';
$string['esp-tab'] = 'Skills passport';
$string['elp-tab'] = 'Language passport';
$string['copyright'] = '© European Union and Council of Europe, 2004 - ';

// Europass CV - STEP 1
$string['identification'] = 'Personal information';
$string['identification-birthdate'] = 'Date of birth';
$string['identification-birthplace'] = 'Place of birth';
$string['identification-lastname'] = 'Surname(s)';
$string['identification-firstname'] = 'First name(s)';
$string['identification-addressLine'] = 'Street number / Street';
$string['identification-municipality'] = 'City';
$string['identification-postalCode'] = 'Postal code';
$string['identification-country'] = 'Country';
$string['identification-contactinfo-telephone'] = 'Telephone(s)';
$string['identification-contactinfo-mobile'] = 'Mobile';
$string['identification-contactinfo-fax'] = 'Fax';
$string['identification-contactinfo-email'] = 'E-mail(s)';
$string['identification-nationality'] = 'Nationality';
$string['identification-gender'] = 'Gender';

// Europass CV - STEP 3
$string['workexperience'] = 'Work experience';

// Europass CV - STEP 4
$string['education'] = 'Education and training';

// Europass CV - STEP 5
$string['mothertongue'] = 'Mother tongue(s)';
$string['otherlanguage'] = 'Other language(s)';

$string['language-understanding'] = 'Understanding';
$string['language-speaking'] = 'Speaking';
$string['language-writing'] = 'Writing';
$string['language-foreign-listening'] = 'Listening';
$string['language-foreign-reading'] = 'Reading';
$string['language-foreign-spokeninteraction'] = 'Spoken interaction';
$string['language-foreign-spokenproduction'] = 'Spoken production';
$string['language-foreign-writing'] = 'Writing';
$string['language-foreign-CEF-level'] = 'Common European Framework of Reference (CEF) level';

$string['language-foreign-level.A1'] = 'Basic user (A1)';
$string['language-foreign-level.A2'] = 'Basic user (A2)';
$string['language-foreign-level.B1'] = 'Independent user (B1)';
$string['language-foreign-level.B2'] = 'Independent user (B2)';
$string['language-foreign-level.C1'] = 'Proficient user (C1)';
$string['language-foreign-level.C2'] = 'Proficient user (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Driving licence(s)';
$string['categories'] = 'Categories';

$string['skills'] = 'Personal skills';
$string['socialskill'] = 'Communication skills';
$string['organisationalskill'] = 'Organisational / managerial skills';
$string['technicalskill'] = 'Job-related skills';
$string['otherskill'] = 'Other skills';
$string['additionalinfo'] = 'Additional information';
$string['category'] = 'Category';

$string['digitalcompetence'] = 'Digital competence';
$string['digitalcompetence-other'] = 'Other digital competences';
$string['digitalcompetence-information'] = 'Information processing';
$string['digitalcompetence-communication'] = 'Communication';
$string['digitalcompetence-contentcreation'] = 'Content creation';
$string['digitalcompetence-safety'] = 'Safety';
$string['digitalcompetence-problemsolving'] = 'Problem solving';
$string['digitalcompetence-DIGCOMP-level'] = 'Digital competence (DIGCOMP)';

$string['digitalcompetence-level.A'] = 'Basic user (A)';
$string['digitalcompetence-level.B'] = 'Independent user (B)';
$string['digitalcompetence-level.C'] = 'Proficient user (C)';

$string['honors_awards'] = 'Honors and Awards';
$string['publications'] = 'Publications';
$string['presentations'] = 'Presentations';
$string['citations'] = 'Citations';
$string['projects'] = 'Projects';
$string['memberships'] = 'Memberships';
$string['seminars'] = 'Seminars';
$string['conferences'] = 'Conferences';
$string['references'] = 'References';
$string['courses'] = 'Courses';
$string['certifications'] = 'Certifications';

// Europass LP - STEP 2
$string['self-assessment'] = 'Self-assessment of language skills';
$string['language-diplomas'] = 'Certificates and diplomas';
$string['diploma-title'] = 'Title';
$string['diploma-awardingBody'] = 'Awarding body';
$string['diploma-date'] = 'Date';
$string['diploma-level'] = 'Level';
$string['language-experiences'] = 'Linguistic and intercultural experience';
$string['experiences-description'] = 'Description';
$string['experiences-period'] = 'Duration';
$string['experiences-period-from'] = 'From';
$string['experiences-period-to'] = 'To';

// List of supported locales in which Europass can be exported...
// The names of languages are localized - there's no need for translation!
$string['locale.bg_BG'] = 'български (bg)';
$string['locale.cs_CZ'] = 'čeština (cs)';
$string['locale.da_DK'] = 'dansk (da)';
$string['locale.de_DE'] = 'Deutsch (de)';
$string['locale.et_EE'] = 'eesti keel (et)';
$string['locale.el_GR'] = 'ελληνικά (el)';
$string['locale.en_GB'] = 'English (en)';
$string['locale.es_ES'] = 'español (es)';
$string['locale.fi_FI'] = 'suomi (fi)';
$string['locale.fr_FR'] = 'français (fr)';
$string['locale.hr_HR'] = 'hrvatski (hr)';
$string['locale.hu_HU'] = 'Magyar (hu)';
$string['locale.is_IS'] = 'íslenska (is)';
$string['locale.it_IT'] = 'italiano (it)';
$string['locale.lt_LT'] = 'lietuvių kalba (lt)';
$string['locale.lv_LV'] = 'latviešu valoda (lv)';
$string['locale.mk_MK'] = 'македонски (mk)';
$string['locale.mt_MT'] = 'Malti (mt)';
$string['locale.nl_NL'] = 'Nederlands (nl)';
$string['locale.no_NO'] = 'Norsk (no)';
$string['locale.pl_PL'] = 'polski (pl)';
$string['locale.pt_PT'] = 'português (pt)';
$string['locale.ro_RO'] = 'română (ro)';
$string['locale.sk_SK'] = 'slovenčina (sk)';
$string['locale.sl_SI'] = 'slovenščina (sl)';
$string['locale.sv_SE'] = 'svenska (sv)';
$string['locale.tr_TR'] = 'türkçe (tr)';

include_once('artefact.europass.countries.php');
include_once('artefact.europass.languages.php');
include_once('artefact.europass.nationalities.php');
