<?php
/**
 *
 * @package    mahara
 * @subpackage artefact-europass
 * @author     Gregor Anzelj
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2009-2017 Gregor Anzelj, gregor.anzelj@gmail.com
 *
 * @translator Dominique-Alain Jan
 *
 */

defined('INTERNAL') || die();

$string['pluginname'] = 'Europass';

$string['europass'] = 'Europass';
$string['europassartefactsaved'] = 'Curriculum vitae Europass enregistré';
$string['europassexportgenerated'] = 'Veuillez patienter, votre fichier d\'exportation est en train d\'être généré...';

$string['languagesaved'] = 'Langue enregistrée';
$string['languagesavefailed'] = 'Erreur lors de l\'enregistrement de la langue';
$string['languagedeleteconfirm'] = 'Voulez-vous réellement supprimer cette langue ?';
$string['languagedeleted'] = 'Langue supprimée';
$string['languagediploma'] = 'Cerficats de langue';
$string['languageexperience'] = 'Expériences linguistiques';
$string['languagediplomadeleteconfirm'] = 'Voulez-vous réellement supprimer ce certificat de langue?';
$string['languageexperiencedeleteconfirm'] = 'Voulez-vous réellement supprimer cette expérience linguistique?';
$string['languagediplomadeleted'] = 'Certificat de langue supprimé';
$string['languageexperiencedeleted'] = 'Expérience linguistique supprimée';
$string['languagediplomasaved'] = 'Certificat de langue enregistré';
$string['languagediplomasavefailed'] = 'Erreur lors de l\'enregistrement du certificat de langue';
$string['languageexperiencesaved'] = 'Expérience linguistique enregistrée';
$string['languageexperiencesavefailed'] = 'Erreur lors de l\'enregistrement de l\'expérience linguistique';

// Export data from Mahara to Europass form...
$string['exporteuropass'] = 'Exportation Europass';
$string['exportstep1'] = '1 - Sélectionnez le(s) document(s)';
$string['attach'] = 'Attachments';
$string['selectlocale'] = 'Langue';
$string['exportstep2'] = '2 - Sélectionez le format';
$string['selectdateformatdesc'] = 'Format de date utilisé pour l\'exportation';
$string['selectdateformatdesc2'] = 'Dates are localised according to selected language.';
$string['dateformat-numeric-medium'] = '31/1/2005';
$string['dateformat-numeric-long'] = '31/01/2005';
$string['dateformat-text-short'] = '31 Jan 2005';
$string['dateformat-text-long'] = '31 January 2005';
$string['exportfile'] = 'Fichier';
$string['pdf'] = 'Adobe® PDF + Europass XML';
$string['doc'] = 'Microsoft® Word';
$string['odt'] = 'OpenDocument';
$string['html'] = 'HTML';
$string['xml'] = 'Europass XML';
$string['exportstep3'] = '3 - Exportation';
$string['generateexport'] = 'Exporter';
$string['generateexportdesc'] = 'Generate the Europass document and download it on your computer.';
$string['generaloptions'] = 'General export options';
$string['includelogo'] = 'Include Europass logo?';

// Import data from Europass XML to Mahara...
$string['importeuropass'] = 'Importer l\'Europass';
$string['importstep1'] = '1 - Importer le fichier et options';
$string['selectfile&options'] = 'Déposer le fichier XML Europass et sélectionner les options d\'importation';
$string['importstep2'] = '2 - Importation';
$string['execute'] = 'Executer l\'importation';
$string['executeimport'] = 'Importer';
$string['importfile'] = 'Fichier XML Europass';
$string['importfiledesc'] = 'Selectionner un fichier XML Europass valide pour à importer dans Mahara';
$string['notvalidxmlfile'] = 'Le fichier déposé n\'est pas un fichier XML valide.';
$string['importoptions'] = 'Que voulez-vous importer ?';
$string['importoptionsdesc'] = 'Les rubriques du profil qui sont bloquées ne seront pas modifiées';
$string['nocheckedoptions'] = 'Vous devez choisir au moins une rubrique à importer.';
$string['fieldnotimported'] = 'La rubrique «%s» n\'a pas été importée.';
$string['lockedfieldnotimported'] = 'La rubrique bloquée « %s » n\'a pas été importée.';
$string['languagecodemissing'] = 'La rubrique «%s» n\'a pas été importée. Le code de langue est absent.';
$string['importdate'] = 'Format des dates';
$string['europassimportexecuted'] = 'Les données du fichier XML Europass ont été importées avec succès dans Mahara.';

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
$string['esp-tab'] = 'Passeport de compétences';
$string['elp-tab'] = 'Passeport de langues';
$string['copyright'] = '© Union européenne et Conseil de l\'Europe, 2004 - ';

// Europass CV - STEP 1
$string['identification'] = 'Information personnelle';
$string['identification-birthdate'] = 'Date de naissance';
$string['identification-birthplace'] = 'Lieu de naissance';
$string['identification-lastname'] = 'Nom(s)';
$string['identification-firstname'] = 'Prénom(s)';
$string['identification-addressLine'] = 'Numéro / Rue';
$string['identification-municipality'] = 'Localité';
$string['identification-postalCode'] = 'Code postal';
$string['identification-country'] = 'Pays';
$string['identification-contactinfo-telephone'] = 'Téléphone(s)';
$string['identification-contactinfo-mobile'] = 'Portable';
$string['identification-contactinfo-fax'] = 'Télécopie(s)';
$string['identification-contactinfo-email'] = 'Courrier électronique';
$string['identification-nationality'] = 'Nationalité';
$string['identification-gender'] = 'Sexe';

// Europass CV - STEP 3
$string['workexperience'] = 'Expérience professionnelle';

// Europass CV - STEP 4
$string['education'] = 'Éducation et formation';

// Europass CV - STEP 5
$string['mothertongue'] = 'Langue(s) maternelle(s)';
$string['otherlanguage'] = 'Autre(s) langue(s)';

$string['language-understanding'] = 'Comprendre';
$string['language-speaking'] = 'Parler';
$string['language-writing'] = 'Écrire';
$string['language-foreign-listening'] = 'Écouter';
$string['language-foreign-reading'] = 'Lire';
$string['language-foreign-spokeninteraction'] = 'Interaction orale';
$string['language-foreign-spokenproduction'] = 'Production orale';
$string['language-foreign-writing'] = 'Écrire';
$string['language-foreign-CEF-level'] = 'Cadre européen commun de référence (CECR)';

$string['language-foreign-level.A1'] = 'Utilisateur élémentaire (A1)';
$string['language-foreign-level.A2'] = 'Utilisateur élémentaire (A2)';
$string['language-foreign-level.B1'] = 'Utilisateur indépendant (B1)';
$string['language-foreign-level.B2'] = 'Utilisateur indépendant (B2)';
$string['language-foreign-level.C1'] = 'Utilisateur expérimenté (C1)';
$string['language-foreign-level.C2'] = 'Utilisateur expérimenté (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Permis de conduire';
$string['categories'] = 'Catégories';

$string['skills'] = 'Aptitudes et compétences personnelles';
$string['socialskill'] = 'Aptitudes et compétences sociales';
$string['organisationalskill'] = 'Aptitudes et compétences organisationnelles';
$string['technicalskill'] = 'Aptitudes et compétences techniques';
$string['otherskill'] = 'Autres aptitudes et compétences';
$string['additionalinfo'] = 'Information complémentaire';
$string['category'] = 'Catégorie';

$string['digitalcompetence'] = 'Compétence numérique';
$string['digitalcompetence-other'] = 'Autres compétences informatiques';
$string['digitalcompetence-information'] = 'Traitement de l’information';
$string['digitalcompetence-communication'] = 'Communication';
$string['digitalcompetence-contentcreation'] = 'Création de contenu';
$string['digitalcompetence-safety'] = 'Sécurité';
$string['digitalcompetence-problemsolving'] = 'Résolution de problèmes';
$string['digitalcompetence-DIGCOMP-level'] = 'Compétence numérique (DIGCOMP)';

$string['digitalcompetence-level.A'] = 'Utilisateur élémentaire (A)';
$string['digitalcompetence-level.B'] = 'Utilisateur indépendant (B)';
$string['digitalcompetence-level.C'] = 'Utilisateur expérimenté (C)';

$string['honors_awards'] = 'Distinctions';
$string['publications'] = 'Publications';
$string['presentations'] = 'Présentations';
$string['citations'] = 'Citations';
$string['projects'] = 'Projets';
$string['memberships'] = 'Affiliations';
$string['seminars'] = 'Séminaires';
$string['conferences'] = 'Conférences';
$string['references'] = 'Références';
$string['courses'] = 'Cours';
$string['certifications'] = 'Certifications';

// Europass LP - STEP 2
$string['self-assessment'] = 'Auto-évaluation des compétences linguistiques';
$string['language-diplomas'] = 'Certificats et diplômes';
$string['diploma-title'] = 'Intitulé';
$string['diploma-awardingBody'] = 'Organisme certificateur';
$string['diploma-date'] = 'Date';
$string['diploma-level'] = 'Niveau';
$string['language-experiences'] = 'Expériences linguistiques et interculturelles';
$string['experiences-description'] = 'Description';
$string['experiences-period'] = 'Durée';
$string['experiences-period-from'] = 'De';
$string['experiences-period-to'] = 'A';

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
