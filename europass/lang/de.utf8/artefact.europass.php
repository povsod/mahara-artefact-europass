<?php
/**
 *
 * @package    mahara
 * @subpackage artefact-europass
 * @author     Gregor Anzelj
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2009-2017 Gregor Anzelj, gregor.anzelj@gmail.com
 *
 * @translator Heinz Krettek
 *
 */

defined('INTERNAL') || die();

$string['pluginname'] = 'Europass';

$string['europass'] = 'Europass';
$string['europassartefactsaved'] = 'Europass Lebenslauf wurde erfolgriech gesichert';
$string['europassexportgenerated'] = 'Bitte warten Sie während die Exportdatei angelegt wird...';

$string['languagesaved'] = 'Sprache wurde erfolgreich gespeichert';
$string['languagesavefailed'] = 'Fehler beim Speichern der Sprache';
$string['languagedeleteconfirm'] = 'Soll die Sprache wirklich gelöscht werden?';
$string['languagedeleted'] = 'Die Sprache wurde erfolgreich gelöscht';
$string['languagediploma'] = 'Sprachdiplom';
$string['languageexperience'] = 'Sprachkenntnis';
$string['languagediplomadeleteconfirm'] = 'Wollen Sie dieses Sprachdiplom wirklich löschen?';
$string['languageexperiencedeleteconfirm'] = 'Wollen Sie diese Sprachkenntnis wirklich löschen?';
$string['languagediplomadeleted'] = 'Das Sprachdiplom wurde erfolgreich gelöscht';
$string['languageexperiencedeleted'] = 'Die Sprachkenntnis wurde erfolgreich gelöscht';
$string['languagediplomasaved'] = 'Das Sprachdiplom wurde erfolgreich gespeichert';
$string['languagediplomasavefailed'] = 'Fehler beim Speichern des Sprachdiploms';
$string['languageexperiencesaved'] = 'Die Sprachkenntnis wurde erfolgreich gespeichert';
$string['languageexperiencesavefailed'] = 'Fehler beim Speichern der Sprachkenntnis';

// Export data from Mahara to Europass form...
$string['exporteuropass'] = 'Export Europass';
$string['exportstep1'] = '1 - Wählen Sie die Dokument(e)';
$string['attach'] = 'Attachments';
$string['selectlocale'] = 'Sprache';
$string['exportstep2'] = '2 - Wählen Sie das Format';
$string['selectdateformatdesc'] = 'Datumsformat, das für den Export verwendet wird';
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
$string['importeuropass'] = 'Europass importieren';
$string['importstep1'] = '1 - Import Datei und Optionen';
$string['selectfile&options'] = 'Festlegung der Europass XML Datei und der Import Optionen';
$string['importstep2'] = '2 - Import';
$string['execute'] = 'Import ausführen';
$string['executeimport'] = 'Importieren';
$string['importfile'] = 'Europass XML Datei';
$string['importfiledesc'] = 'Wählen Sie für den Import nach Mahara eine gültige Europass XML Datei aus';
$string['notvalidxmlfile'] = 'Die hochgeladene Datei ist keine gültige XML Datei.';
$string['importoptions'] = 'Welche Optionen sollen importiert werden?';
$string['importoptionsdesc'] = 'Gesperrte Profilfelder werden nicht geändert oder aktualisiert';
$string['nocheckedoptions'] = 'Sie müssen für den Import zumindest 1 Option auswählen.';
$string['fieldnotimported'] = 'Das Feld "%s" wurde nicht importiert.';
$string['lockedfieldnotimported'] = 'Das gesperrte Feld "%s" wurde nicht importiert.';
$string['languagecodemissing'] = 'Das Feld "%s" wurde nicht importiert. Es fehlt der notwendige Sprachcode.';
$string['importdate'] = 'Format für Datumsangaben';
$string['europassimportexecuted'] = 'Die Informationen aus der Europass XML Datei wurden erfolgreich importiert.';

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
$string['ecv-tab'] = 'Lebenslauf';
$string['esp-tab'] = 'Skills-Pass';
$string['elp-tab'] = 'Sprachenpass';
$string['copyright'] = '© Europäische Union und Europarat, 2004 - ';

// Europass CV - STEP 1
$string['identification'] = 'Angaben zur Person';
$string['identification-birthdate'] = 'Geburtsdatum';
$string['identification-birthplace'] = 'Geburtsort';
$string['identification-lastname'] = 'Nachname(n)';
$string['identification-firstname'] = 'Vorname(n)';
$string['identification-addressLine'] = 'Straße / Hausnummer';
$string['identification-municipality'] = 'Stadt';
$string['identification-postalCode'] = 'Postleitzahl';
$string['identification-country'] = 'Land';
$string['identification-contactinfo-telephone'] = 'Telefon';
$string['identification-contactinfo-mobile'] = 'Mobil';
$string['identification-contactinfo-fax'] = 'Fax';
$string['identification-contactinfo-email'] = 'E-Mail';
$string['identification-nationality'] = 'Staatsangehörigkeit';
$string['identification-gender'] = 'Geschlecht';

// Europass CV - STEP 3
$string['workexperience'] = 'Berufserfahrung';

// Europass CV - STEP 4
$string['education'] = 'Schul- und Berufsbildung';

// Europass CV - STEP 5
$string['mothertongue'] = 'Muttersprache(n)';
$string['otherlanguage'] = 'Sonstige Sprache(n)';

$string['language-understanding'] = 'Verstehen';
$string['language-speaking'] = 'Sprechen';
$string['language-writing'] = 'Schreiben';
$string['language-foreign-listening'] = 'Hören';
$string['language-foreign-reading'] = 'Lesen';
$string['language-foreign-spokeninteraction'] = 'An Gesprächen teilnehmen';
$string['language-foreign-spokenproduction'] = 'Zusammenhängendes Sprechen';
$string['language-foreign-writing'] = 'Schreiben';
$string['language-foreign-CEF-level'] = 'Referenzniveau des gemeinsamen europäischen Referenzrahmens für Sprachen';

$string['language-foreign-level.A1'] = 'Elementare Sprachverwendung (A1)';
$string['language-foreign-level.A2'] = 'Elementare Sprachverwendung (A2)';
$string['language-foreign-level.B1'] = 'Selbstständige Sprachverwendung (B1)';
$string['language-foreign-level.B2'] = 'Selbstständige Sprachverwendung (B2)';
$string['language-foreign-level.C1'] = 'Kompetente Sprachverwendung (C1)';
$string['language-foreign-level.C2'] = 'Kompetente Sprachverwendung (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Führerschein(e)';
$string['categories'] = 'Kategorien';

$string['skills'] = 'Persönliche Fähigkeiten und Kompetenzen';
$string['socialskill'] = 'Soziale Fähigkeiten und Kompetenzen';
$string['organisationalskill'] = 'Organisatorische Fähigkeiten und Kompetenzen';
$string['technicalskill'] = 'Technische Fähigkeiten und Kompetenzen';
$string['otherskill'] = 'Sonstige Fähigkeiten und Kompetenzen';
$string['additionalinfo'] = 'Zusätzliche Angaben';
$string['category'] = 'Kategorie';

$string['digitalcompetence'] = 'Digitale Kompetenz';
$string['digitalcompetence-other'] = 'Andere Computerfähigkeiten';
$string['digitalcompetence-information'] = 'Daten-verarbeitung';
$string['digitalcompetence-communication'] = 'Kommunikation';
$string['digitalcompetence-contentcreation'] = 'Erstellung von Inhalten';
$string['digitalcompetence-safety'] = 'Sicherheit';
$string['digitalcompetence-problemsolving'] = 'Problemlösung';
$string['digitalcompetence-DIGCOMP-level'] = 'Digitale Kompetenz (DIGCOMP)';

$string['digitalcompetence-level.A'] = 'Elementare Verwendung (A)';
$string['digitalcompetence-level.B'] = 'Selbstständige Verwendung (B)';
$string['digitalcompetence-level.C'] = 'Kompetente Verwendung (C)';

$string['honors_awards'] = 'Auszeichnungen und Preise';
$string['publications'] = 'Publikationen';
$string['presentations'] = 'Präsentationen';
$string['citations'] = 'Quellenangaben';
$string['projects'] = 'Projekte';
$string['memberships'] = 'Mitgliedschaften';
$string['seminars'] = 'Seminare';
$string['conferences'] = 'Konferenzen';
$string['references'] = 'Referenzen';
$string['courses'] = 'Kurse';
$string['certifications'] = 'Zertifikationen';

// Europass LP - STEP 2
$string['self-assessment'] = 'Selbstbeurteilung der Sprachkenntnisse';
$string['language-diplomas'] = 'Zertifikate und Diplome';
$string['diploma-title'] = 'Titel';
$string['diploma-awardingBody'] = 'Ausstellende Stelle';
$string['diploma-date'] = 'Datum';
$string['diploma-level'] = 'Niveau';
$string['language-experiences'] = 'Sprachliche und interkulturelle Erfahrung';
$string['experiences-description'] = 'Beschreibung';
$string['experiences-period'] = 'Dauer';
$string['experiences-period-from'] = 'Von';
$string['experiences-period-to'] = 'Bis';

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
