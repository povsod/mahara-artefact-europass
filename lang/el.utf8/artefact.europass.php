<?php
/**
 *
 * @package    mahara
 * @subpackage artefact-europass
 * @author     Gregor Anzelj
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2009-2017 Gregor Anzelj, gregor.anzelj@gmail.com
 *
 * @translator Yannis Kaskamanidis
 *
 */

defined('INTERNAL') || die();

$string['pluginname'] = 'Europass';

$string['europass'] = 'Europass';
$string['europassartefactsaved'] = 'Το βιογραφικό Europass αποθηκεύτηκε με επιτυχία';
$string['europassexportgenerated'] = 'Παρακαλώ περιμένετε καθώς δημιουργείται το αρχείο εξαγωγής...';

$string['languagesaved'] = 'Η γλώσσα αποθηκεύτηκε με επιτυχία';
$string['languagesavefailed'] = 'Αποτυχία αποθήκευσης της γλώσσας';
$string['languagedeleteconfirm'] = 'Είστε σίγουρος ότι θέλετε να διαγράψετε αυτή τη γλώσσα;';
$string['languagedeleted'] = 'Η γλώσσα διαγράφηκε με επιτυχία';
$string['languagediploma'] = 'Πτυχίο γλώσσας';
$string['languageexperience'] = 'Γλωσσική εμπειρία';
$string['languagediplomadeleteconfirm'] = 'Είστε σίγουρος ότι θέλετε να διαγράψετε αυτό το πτυχίο γλώσσας;';
$string['languageexperiencedeleteconfirm'] = 'Είστε σίγουρος ότι θέλετε να διαγράψετε αυτή τη γλωσσική εμπειρία;';
$string['languagediplomadeleted'] = 'Το πτυχίο γλώσσας διαγράφηκε με επιτυχία';
$string['languageexperiencedeleted'] = 'Η γλωσσική εμπειρία διαγράφηκε με επιτυχία';
$string['languagediplomasaved'] = 'Το πτυχίο γλώσσας αποθηκεύτηκε με επιτυχία';
$string['languagediplomasavefailed'] = 'Αποτυχία αποθήκευσης του πτυχίου της γλώσσας';
$string['languageexperiencesaved'] = 'Η γλωσσική εμπειρία αποθηκεύτηκε με επιτυχία';
$string['languageexperiencesavefailed'] = 'Αποτυχία αποθήκευσης της γλωσσικής εμπειρίας';

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
$string['selectfile&options'] = 'Upload Europass XML file and select import options';
$string['importstep2'] = '2 - Import';
$string['execute'] = 'Execute import';
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
$string['ecv-tab'] = 'Βιογραφικό σημείωμα';
$string['esp-tab'] = 'Διαβατήριο δεξιοτήτων';
$string['elp-tab'] = 'Διαβατήριο γλωσσών';
$string['copyright'] = '© Ευρωπαϊκή Ένωση και Συμβούλιο της Ευρώπης, 2004 - ';

// Europass CV - STEP 1
$string['identification'] = 'Προσωπικές πληροφορίες';
$string['identification-birthdate'] = 'Ημερομηνία γέννησης';
$string['identification-birthplace'] = 'Τόπος γέννησης';
$string['identification-lastname'] = 'Επώνυμο';
$string['identification-firstname'] = 'Όνομα';
$string['identification-addressLine'] = 'Οδός/αριθμός';
$string['identification-municipality'] = 'Πόλη';
$string['identification-postalCode'] = 'Ταχυδρομικός κώδικας';
$string['identification-country'] = 'Χώρα';
$string['identification-contactinfo-telephone'] = 'Τηλέφωνο';
$string['identification-contactinfo-mobile'] = 'Κινητό τηλέφωνο';
$string['identification-contactinfo-fax'] = 'Φαξ';
$string['identification-contactinfo-email'] = 'Διεύθυνση email';
$string['identification-nationality'] = 'Υπηκοότητα';
$string['identification-gender'] = 'Φύλο';

// Europass CV - STEP 3
$string['workexperience'] = 'Επαγγελματική πείρα';

// Europass CV - STEP 4
$string['education'] = 'Εκπαίδευση και κατάρτιση';

// Europass CV - STEP 5
$string['mothertongue'] = 'Μητρική γλώσσα ή γλώσσες';
$string['otherlanguage'] = 'Άλλη γλώσσα ή γλώσσες';

$string['language-understanding'] = 'Κατανοηση';
$string['language-speaking'] = 'Ομιλια';
$string['language-writing'] = 'Γραφή';
$string['language-foreign-listening'] = 'Προφορική';
$string['language-foreign-reading'] = 'Γραπτή (ανάγνωση)';
$string['language-foreign-spokeninteraction'] = 'Επικοινωνία';
$string['language-foreign-spokenproduction'] = 'Προφορική έκφραση';
$string['language-foreign-writing'] = 'Γραφή';
$string['language-foreign-CEF-level'] = 'Βαθμίδες του κοινού ευρωπαϊκού πλαισίου αναφοράς';

$string['language-foreign-level.A1'] = 'Βασικός χρήστης (A1)';
$string['language-foreign-level.A2'] = 'Βασικός χρήστης (A2)';
$string['language-foreign-level.B1'] = 'Ανεξάρτητος χρήστης (B1)';
$string['language-foreign-level.B2'] = 'Ανεξάρτητος χρήστης (B2)';
$string['language-foreign-level.C1'] = 'Έμπειρος χρήστης (C1)';
$string['language-foreign-level.C2'] = 'Έμπειρος χρήστης (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Άδεια οδήγησης';
$string['categories'] = 'Κατηγορίες';

$string['skills'] = 'Ατομικές δεξιότητες και ικανότητες';
$string['socialskill'] = 'Κοινωνικές δεξιότητες και ικανότητες';
$string['organisationalskill'] = 'Οργανωτικές δεξιότητες και ικανότητες';
$string['technicalskill'] = 'Τεχνικές δεξιότητες και ικανότητες';
$string['otherskill'] = 'Άλλες δεξιότητες και ικανότητες';
$string['additionalinfo'] = 'Πρόσθετες πληροφορίες';
$string['category'] = 'Κατηγορία';

$string['digitalcompetence'] = 'Ψηφιακή δεξιότητα';
$string['digitalcompetence-other'] = 'Αλλες ψηφιακές δεξιοτήτες';
$string['digitalcompetence-information'] = 'Επεξεργασία δεδομένων';
$string['digitalcompetence-communication'] = 'Επικοινωνία';
$string['digitalcompetence-contentcreation'] = 'Δημιουργία Περιεχομένου';
$string['digitalcompetence-safety'] = 'Ασφάλεια';
$string['digitalcompetence-problemsolving'] = 'Επίλυση προβλημάτων';
$string['digitalcompetence-DIGCOMP-level'] = 'Ψηφιακή δεξιότητα (DIGCOMP)';

$string['digitalcompetence-level.A'] = 'Βασικός χρήστης (A)';
$string['digitalcompetence-level.B'] = 'Ανεξάρτητος χρήστης (B)';
$string['digitalcompetence-level.C'] = 'Έμπειρος χρήστης (C)';

$string['honors_awards'] = 'Τιμητικές διακρίσεις και βραβεία';
$string['publications'] = 'Δημοσιεύσεις';
$string['presentations'] = 'Παρουσιάσεις';
$string['citations'] = 'Αναφορές';
$string['projects'] = 'Προγράμματα';
$string['memberships'] = 'Συνδρομές';
$string['seminars'] = 'Σεμινάρια';
$string['conferences'] = 'Συνέδρια';
$string['references'] = 'Συστάσεις';
$string['courses'] = 'Μαθήματα';
$string['certifications'] = 'Πιστοποιήσεις';

// Europass LP - STEP 2
$string['self-assessment'] = 'Αυτοαξιολόγηση γλωσσικών δεξιοτήτων';
$string['language-diplomas'] = 'Πιστοποιητικά και διπλώματα';
$string['diploma-title'] = 'Τίτλος';
$string['diploma-awardingBody'] = 'Φορέας χορήγησης';
$string['diploma-date'] = 'Ημερομηνία';
$string['diploma-level'] = 'Επίπεδο';
$string['language-experiences'] = 'Γλωσσικές και διαπολιτισμικές εμπειρίες';
$string['experiences-description'] = 'Περιγραφή';
$string['experiences-period'] = 'Διάρκεια';
$string['experiences-period-from'] = 'Από';
$string['experiences-period-to'] = 'Έως';

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
