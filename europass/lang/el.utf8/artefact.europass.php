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
 * @translator Yannis Kaskamanidis
 *
 * @package    Europass Online Tools Labels and Help texts
 * @purpose    Provides the labels and help texts used in the Europass Online Tools.
 * @author(s)  Europass team
 * @copyright  (C) European Communities, 2002-2011 http://europass.cedefop.europa.eu
 * @license    http://europass.cedefop.europa.eu/europass/home/botnav/LegalNotice.csp
 * @version    20110907
 * @URL        http://europass.cedefop.europa.eu/TechnicalResources/EuropassLabels/xforms/europass-labels-xforms-20110907/cv_en_GB.xhtml
 * @URL        http://europass.cedefop.europa.eu/TechnicalResources/EuropassLabels/xforms/europass-labels-xforms-20110907/lp_en_GB.xhtml
 *
 * ISO 639-1   http://europass.cedefop.europa.eu/xml/EUROPASS_ISOLanguages_V1.1.xsd
 * ISO 3166-1  http://europass.cedefop.europa.eu/xml/EUROPASS_ISOCountries_V1.1.xsd
 * List of nationalities  http://europass.cedefop.europa.eu/TechnicalResources/XML/xsd/included_schemas/EUROPASS_Nationalities_V1.0.xsd
 *(based on ISO 3166-1)
 */

defined('INTERNAL') || die();

$string['pluginname'] = 'Europass';

$string['europass'] = 'Europass';
$string['europassartefactsaved'] = 'Το βιογραφικό Europass αποθηκεύτηκε με επιτυχία';
$string['europassexportgenerated'] = 'Παρακαλώ περιμένετε καθώς δημιουργείται το αρχείο εξαγωγής...';
$string['europassexportnoconncetion'] = 'Υπήρξε ένα σφάλμα σύνδεσης με τον διακομιστή WSDL. Παρακαλώ δοκιμάστε πάλι αργότερα.';
$string['europassexportservererror'] = 'Υπήρξε ένα σφάλμα στον διακομιστή WSDL. Παρακαλώ δοκιμάστε πάλι αργότερα.';
$string['europassextensionmissing'] = 'Συγνώμη, αλλά δεν μπορείτε να χρησιμοποιήσετε το πρόσθετο Europass επειδή η εγκατάσταση PHP δεν διαθέτει την απαραίτητη επέκταση:';
$string['newerversionforcompatibility'] = 'Για καλύτερη απόδοση και συμβατότητα, θα πρέπει να αναβαθμίσετε το Mahara στην έκδοση 1.3.0 ή νεώτερη.';

$string['languagesaved'] = 'Η γλώσσα αποθηκεύτηκε με επιτυχία';
$string['languagesavefailed'] = 'Αποτυχία αποθήκευσης της γλώσσας';
$string['languagedeleteconfirm'] = 'Είστε σίγουρος ότι θέλετε να διαγράψετε αυτή τη γλώσσα;';
$string['languagedeleted'] = 'Η γλώσσα διαγράφηκε με επιτυχία';

$string['moveup'] = 'Μετακίνηση επάνω';
$string['movedown'] = 'Μετακίνηση κάτω';

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
$string['exporteuropass'] = 'Εξαγωγή Europass';
$string['exportstep1'] = '1 - Έγγραφο γλώσσας και είδος';
$string['selectlocale&type'] = 'Επιλέξτε έγγραφο γλώσσας και είδος';
$string['selectlocale'] = 'Γλώσσα';
$string['selectlocaledesc'] = 'Έγγραφο γλώσσας Europasse';
$string['selectdocumenttype'] = 'Έγγραφο';
$string['europassCV'] = 'Βιογραφικό σημείωμα Europass (CV)';
$string['europassLP'] = 'Διαβατήριο γλωσσών Europass';
$string['photograph'] = 'Φωτογραφία';
$string['photographdesc'] = 'Η φωτογραφία θα ενσωματωθεί στο αρχείο XML του Europass';
$string['phototoolarge'] = 'Το αρχείο είναι πολύ μεγάλο. Το μέγεθος δεν θα πρέπει να ξεπερνά τα 100 kB.';
$string['exportstep2'] = '2 - Μορφή εγγράφου';
$string['selectfiletype'] = 'Επιλέξτε μορφή αρχείου και ημερομηνίας';
$string['exportdate'] = 'Ημερομηνία';
$string['internaldateformat'] = 'Εσωτερική  μορφή ημερομηνίας';
$string['selectinternaldatedesc'] = 'Μορφή ημερομηνίας που χρησιμοποιείται στο Mahara';
$string['internaldate-dmy11'] = 'ηη/μμ/εεεε';
$string['internaldate-dmy12'] = 'ηη.μμ.εεεε';
$string['internaldate-dmy13'] = 'ηη-μμ-εεεε';
$string['internaldate-dmy21'] = 'ηη/μμ/εε';
$string['internaldate-dmy22'] = 'ηη.μμ.εε';
$string['internaldate-dmy23'] = 'ηη-μμ-εε';
$string['internaldate-mdy11'] = 'μμ/ηη/εεεε';
$string['internaldate-mdy12'] = 'μμ.ηη.εεεε';
$string['internaldate-mdy13'] = 'μμ-ηη-εεεε';
$string['internaldate-mdy21'] = 'μμ/ηη/εε';
$string['internaldate-mdy22'] = 'μμ.ηη.εε';
$string['internaldate-mdy23'] = 'μμ-ηη-εε';
$string['internaldate-ymd11'] = 'εεεε/μμ/ηη';
$string['internaldate-ymd12'] = 'εεεε.μμ.ηη';
$string['internaldate-ymd13'] = 'εεεε-μμ-ηη';
$string['internaldate-ymd21'] = 'εε/μμ/ηη';
$string['internaldate-ymd22'] = 'εε.μμ.ηη';
$string['internaldate-ymd23'] = 'εε-μμ-ηη';
$string['internaldate-yonly'] = 'εεεε';
$string['internaldate-other'] = 'other';
$string['externaldateformat'] = 'Εξωτερική  μορφή ημερομηνίας';
$string['selectexternaldatedesc'] = 'Μορφή ημερομηνίας που χρησιμοποιείται κατά την εξαγωγή';
$string['externaldate-numeric-long'] = 'ηη/μμ/εεεε';
$string['externaldate-text-long'] = 'ηη. μήνας εεεε';
$string['exportfile'] = 'Αρχείο';
$string['pdf'] = 'Adobe® PDF + XML';
$string['pdfhrxml'] = 'Adobe® PDF + HR-XML';
$string['doc'] = 'Microsoft® Word';
$string['odt'] = 'OpenDocument';
$string['html'] = 'HTML';
$string['json'] = 'Europass JSON';
$string['xml'] = 'Europass XML';
$string['hrxml'] = 'HR-XML';
$string['exportstep3'] = '3 - Εξαγωγή';
$string['generate'] = 'Δημιουργία αρχείου εξαγωγής';
$string['generateexport'] = 'Εξαγωγή';

// Import data from Europass XML to Mahara...
$string['importeuropass'] = 'Εισαγωγή Europass';
$string['importstep1'] = '1 - Εισαγωγή αρχείου και επιλογών';
$string['selectfile&options'] = 'Φόρτωση αρχείου XML του Europass και ρύθμιση επιλογών εισαγωγής';
$string['importstep2'] = '2 - Εισαγωγή';
$string['execute'] = 'Εκτέλεση εισαγωγής';
$string['executeimport'] = 'Εισαγωγή';
$string['importfile'] = 'Αρχείο XML του Europass';
$string['importfiledesc'] = 'Επιλέξτε ένα έγκυρο αρχείο XML του Europass  για εισαγωγή στο Mahara';
$string['notvalidxmlfile'] = 'Το αρχείο που φορτώθηκε δεν είναι ένα έγκυρο αρχειο XML.';
$string['importoptions'] = 'Τι να εισάγω;';
$string['importoptionsdesc'] = 'Τα κλειδωμένα πεδία του προφίλ δεν θα αλλάξουν/ενημερωθούν';
$string['nocheckedoptions'] = 'Θα πρέπει να τσεκάρετε τουλάχιστον μια επιλογή για εισαγωγή.';
$string['fieldnotimported'] = 'Το πεδίο "%s" δεν εισήχθη.';
$string['lockedfieldnotimported'] = 'Το κλειδωμένο πεδίο "%s" δεν εισήχθη.';
$string['languagecodemissing'] = 'Το πεδίο "%s" δεν εισήχθη. Λείπει ο κωδικός της γλώσσας.';
$string['importdate'] = 'Εισαγωγή ημερομηνιών ως';
$string['europassimportexecuted'] = 'Τα δεδομένα από το αρχείο XML του Europass  εισήχθησαν με επιτυχία στο Mahara.';

// Europass GUI form tabs
$string['application-tab'] = 'Αίτηση';
$string['workexperience-tab'] = 'Εργασία/Απασχόληση';
$string['education-tab'] = 'Εκπαίδευση';
$string['languages-tab'] = 'Γλώσσες';
$string['skills-tab'] = 'Δεξιότητες';

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

// Europass CV - STEP 2
$string['application'] = 'Επιθυμητή θέση εργασίας/απασχόλησης';

// Europass CV - STEP 3
$string['workexperience'] = 'Επαγγελματική πείρα';

// Europass CV - STEP 4
$string['education'] = 'Εκπαίδευση και κατάρτιση';

// Europass CV - STEP 5
$string['mothertongue'] = 'Μητρική γλώσσα ή γλώσσες';
$string['otherlanguage'] = 'Άλλη γλώσσα ή γλώσσες';

$string['language-foreign-listening'] = 'Κατανόηση προφορικού λόγου';
$string['language-foreign-listening-th'] = 'Κατανόηση προφορικού λόγου';
$string['language-foreign-reading'] = 'Κατανόηση γραπτού λόγου';
$string['language-foreign-reading-th'] = 'Κατανόηση γραπτού λόγου';
$string['language-foreign-spokeninteraction'] = 'Παραγωγή προφορικού λόγου για επικοινωνία';
$string['language-foreign-spokeninteraction-th'] = 'Παραγωγή προφορικού λόγου για επικοινωνία';
$string['language-foreign-spokenproduction'] = 'Παραγωγή προφορικού λόγου - έκφραση';
$string['language-foreign-spokenproduction-th'] = 'Παραγωγή προφορικού λόγου - έκφραση';
$string['language-foreign-writing'] = 'Παραγωγή γραπτού λόγου';
$string['language-foreign-writing-th'] = 'Παραγωγή γραπτού λόγου';
$string['language-foreign-CEF-level'] = 'Βαθμίδες του κοινού ευρωπαϊκού πλαισίου αναφοράς';

$string['language-foreign-level.A1'] = 'Βασικός χρήστης (A1)';
$string['language-foreign-level.A2'] = 'Βασικός χρήστης (A2)';
$string['language-foreign-level.B1'] = 'Ανεξάρτητος χρήστης (B1)';
$string['language-foreign-level.B2'] = 'Ανεξάρτητος χρήστης (B2)';
$string['language-foreign-level.C1'] = 'Έμπειρος χρήστης (C1)';
$string['language-foreign-level.C2'] = 'Έμπειρος χρήστης (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Άδεια οδήγησης';
$string['skills-and-competences'] = 'Ατομικές δεξιότητες και ικανότητες';
$string['socialskill'] = 'Κοινωνικές δεξιότητες και ικανότητες';
$string['organisationalskill'] = 'Οργανωτικές δεξιότητες και ικανότητες';
$string['technicalskill'] = 'Τεχνικές δεξιότητες και ικανότητες';
$string['computerskill'] = 'Δεξιότητες πληροφορικής';
$string['artisticskill'] = 'Καλλιτεχνικές δεξιότητες και ικανότητες';
$string['otherskill'] = 'Άλλες δεξιότητες και ικανότητες';
$string['additionalinfo'] = 'Πρόσθετες πληροφορίες';
$string['annexes'] = 'Παραρτήματα';

// Europass LP - STEP 2
$string['language-certificates'] = 'Δίπλωμα ή πιστοποιητικό';
$string['diploma-title'] = 'Τίτλος διπλώματος ή πιστοποιητικού';
$string['diploma-awardingBody'] = 'Φορέας χορήγησης';
$string['diploma-date'] = 'Ημερομηνία';
$string['diploma-level'] = 'Ευρωπαϊκό επίπεδο';
$string['language-experiences'] = 'Γλωσσική εμπειρία';
$string['experiences-period-from'] = 'Από';
$string['experiences-period-to'] = 'Έως';

// List of supported locales in which Europass can be exported...
// The names of languages are localized - there's no need for translation!
$string['locale.bg_BG'] = 'Български – (bg)';
$string['locale.cs_CZ'] = 'čeština – (cs)';
$string['locale.da_DK'] = 'Dansk – (da)';
$string['locale.de_DE'] = 'Deutsch – (de)';
$string['locale.et_EE'] = 'eesti keel – (et)';
$string['locale.el_GR'] = 'Ελληνικά – (el)';
$string['locale.en_GB'] = 'English – (en)';
$string['locale.es_ES'] = 'Español – (es)';
$string['locale.fi_FI'] = 'suomi – (fi)';
$string['locale.fr_FR'] = 'Français – (fr)';
$string['locale.hr_HR'] = 'Hrvatski – (hr)';
$string['locale.hu_HU'] = 'magyar – (hu)';
$string['locale.is_IS'] = 'Íslenska – (is)';
$string['locale.it_IT'] = 'Italiano – (it)';
$string['locale.lt_LT'] = 'Lietuvių – (lt)';
$string['locale.lv_LV'] = 'Latviešu – (lv)';
$string['locale.mt_MT'] = 'Malti – (mt)';
$string['locale.nl_NL'] = 'Nederlands – (nl)';
$string['locale.no_NO'] = 'Norsk – (no)';
$string['locale.pl_PL'] = 'polski – (pl)';
$string['locale.pt_PT'] = 'Português – (pt)';
$string['locale.ro_RO'] = 'Română – (ro)';
$string['locale.sk_SK'] = 'slovenčina – (sk)';
$string['locale.sl_SI'] = 'slovenščina – (sl)';
$string['locale.sv_SE'] = 'Svenska – (sv)';
$string['locale.tr_TR'] = 'Türkçe – (tr)';

// ISO 639-1:2002 filtered by Europass, including the languages considered as "dead"
// (http://www.iso.org/iso/catalogue_detail?csnumber=22109)
$string['language.ab'] = 'αμπχαζικά';
$string['language.af'] = 'αφρικάανς';
$string['language.an'] = 'αραγωνέζικη';
$string['language.ar'] = 'αραβικά';
$string['language.as'] = 'ασαμέζικα';
$string['language.az'] = 'αζερικά';
$string['language.be'] = 'λευκορωσικά';
$string['language.bg'] = 'βουλγαρικά';
$string['language.bn'] = 'μπενγκάλι';
$string['language.bo'] = 'θιβετιανά';
$string['language.br'] = 'βρετονικά';
$string['language.bs'] = 'βοσνιακά';
$string['language.ca'] = 'καταλανικά';
$string['language.ce'] = 'τσετσενικά';
$string['language.co'] = 'κορσικανικά';
$string['language.cs'] = 'τσέχικα';
$string['language.cy'] = 'ουαλικά';
$string['language.da'] = 'δανικά';
$string['language.de'] = 'γερμανικά';
$string['language.el'] = 'ελληνικά';
$string['language.en'] = 'αγγλικά';
$string['language.es'] = 'ισπανικά';
$string['language.et'] = 'εσθονικά';
$string['language.eu'] = 'βασκικά';
$string['language.fa'] = 'περσικά';
$string['language.fi'] = 'φινλανδικά';
$string['language.fj'] = 'γλώσσα νησιών Φίτζι';
$string['language.fo'] = 'φαροεζικά';
$string['language.fr'] = 'γαλλικά';
$string['language.fy'] = 'φριζικά';
$string['language.ga'] = 'ιρλανδικά';
$string['language.gd'] = 'σκωτικά';
$string['language.gl'] = 'γαλικιανά';
$string['language.gv'] = 'γλώσσα Νήσου Μαν';
$string['language.he'] = 'εβραϊκά';
$string['language.hi'] = 'χίντι';
$string['language.hr'] = 'κροατικά';
$string['language.ht'] = 'κρεολή Αϊτής';
$string['language.hu'] = 'ουγγρικά';
$string['language.hy'] = 'αρμενικά';
$string['language.id'] = 'ινδονησιακά';
$string['language.is'] = 'ισλανδικά';
$string['language.it'] = 'ιταλικά';
$string['language.ja'] = 'ιαπωνικά';
$string['language.jv'] = 'ιαβανικά';
$string['language.ka'] = 'γεωργιανά';
$string['language.kg'] = 'κογκολέζικα';
$string['language.ko'] = 'κορεατικά';
$string['language.ku'] = 'κουρδικά';
$string['language.kw'] = 'κορνουαλικά';
$string['language.ky'] = 'κιργιζικά';
$string['language.lb'] = 'λουξεμβουργιανά';
$string['language.li'] = 'φλαμανδικά Βελγίου';
$string['language.ln'] = 'λινγκάλα';
$string['language.lt'] = 'λιθουανικά';
$string['language.lv'] = 'λεττονικά';
$string['language.mg'] = 'μαλγασικά';
$string['language.mk'] = 'σλαβομακεδονικά';
$string['language.mn'] = 'μογγολικά';
$string['language.mo'] = 'μολδαβικά';
$string['language.ms'] = 'μαλαισιανά';
$string['language.mt'] = 'μαλτεζικά';
$string['language.my'] = 'βιρμανικά';
$string['language.nb'] = 'νορβηγικά (μπόκμωλ)';
$string['language.ne'] = 'νεπαλέζικα';
$string['language.nl'] = 'ολλανδικά';
$string['language.nn'] = 'νορβηγικά (νίνορσκ)';
$string['language.no'] = 'νορβηγικά';
$string['language.pl'] = 'πολωνικά';
$string['language.pt'] = 'πορτογαλικά';
$string['language.rm'] = 'ρετο-ρωμανικά';
$string['language.ro'] = 'ρουμανικά';
$string['language.ru'] = 'ρωσικά';
$string['language.r0'] = 'τσιγγάνικα'; // doesn't really have an ISO 369-1 code...
$string['language.sc'] = 'σαρδηνιακά';
$string['language.se'] = 'βορειολαπωνικά';
$string['language.sk'] = 'σλοβακικά';
$string['language.sl'] = 'σλοβενικά';
$string['language.so'] = 'σομαλικά';
$string['language.sq'] = 'αλβανικά';
$string['language.sr'] = 'σερβικά';
$string['language.sv'] = 'Σουηδικά';
$string['language.sw'] = 'σουαχίλι';
$string['language.tk'] = 'τουρκμενικά';
$string['language.tr'] = 'τουρκικά';
$string['language.ty'] = 'ταϊτιανά';
$string['language.uk'] = 'ουκρανικά';
$string['language.ur'] = 'ούρντου';
$string['language.uz'] = 'ουζμπέκ';
$string['language.vi'] = 'βιετναμεζικά';
$string['language.yi'] = 'γίντις';
$string['language.zh'] = 'κινεζικά';
$string['language.cu'] = 'σλαβονικά';
$string['language.eo'] = 'εσπεράντο';
$string['language.la'] = 'λατινικά';
$string['language.oc'] = 'οξιτανικά';
$string['language.vo'] = 'βόλαπουκ';
// ISO 639-1:2002 languages that had been left out by Europass
$string['language.aa'] = 'Afar';
$string['language.ae'] = 'Avestan';
$string['language.ak'] = 'Akan';
$string['language.am'] = 'Amharic';
$string['language.av'] = 'Avaric';
$string['language.ay'] = 'Aymara';
$string['language.ba'] = 'Bashkir';
$string['language.bh'] = 'Bihari languages';
$string['language.bi'] = 'Bislama';
$string['language.bm'] = 'Bambara';
$string['language.ch'] = 'Chamorro';
$string['language.cr'] = 'Cree';
$string['language.cv'] = 'Chuvash';
$string['language.dv'] = 'Divehi; Dhivehi; Maldivian';
$string['language.dz'] = 'Dzongkha';
$string['language.ee'] = 'Ewe';
$string['language.ff'] = 'Fulah';
$string['language.gn'] = 'Guarani';
$string['language.gu'] = 'Gujarati';
$string['language.ha'] = 'Hausa';
$string['language.ho'] = 'Hiri Motu';
$string['language.hz'] = 'Herero';
$string['language.ia'] = 'Interlingua (International Auxiliary Language Association)';
$string['language.ig'] = 'Igbo';
$string['language.ii'] = 'Sichuan Yi; Nuosu';
$string['language.ik'] = 'Inupiaq';
$string['language.io'] = 'Ido';
$string['language.iu'] = 'Inuktitut';
$string['language.ki'] = 'Kikuyu; Gikuyu';
$string['language.kj'] = 'Kuanyama; Kwanyama';
$string['language.kk'] = 'Kazakh';
$string['language.kl'] = 'Kalaallisut; Greenlandic';
$string['language.km'] = 'Khmer';
$string['language.kn'] = 'Kannada';
$string['language.kr'] = 'Kanuri';
$string['language.ks'] = 'Kashmiri';
$string['language.kv'] = 'Komi';
$string['language.lg'] = 'Ganda';
$string['language.lo'] = 'Lao';
$string['language.lu'] = 'Luba-Katanga';
$string['language.mh'] = 'Marshallese';
$string['language.mi'] = 'Maori';
$string['language.ml'] = 'Malayalam';
$string['language.mr'] = 'Marathi';
$string['language.na'] = 'Nauru';
$string['language.nd'] = 'Ndebele, North';
$string['language.ng'] = 'Ndonga';
$string['language.nr'] = 'Ndebele, South';
$string['language.nv'] = 'Navajo; Navaho';
$string['language.ny'] = 'Chichewa; Chewa; Nyanja';
$string['language.oj'] = 'Ojibwa';
$string['language.om'] = 'Oromo';
$string['language.or'] = 'Oriya';
$string['language.os'] = 'Ossetian; Ossetic';
$string['language.pa'] = 'Panjabi; Punjabi';
$string['language.pi'] = 'Pali';
$string['language.ps'] = 'Pushto; Pashto';
$string['language.qu'] = 'Quechua';
$string['language.rn'] = 'Rundi';
$string['language.rw'] = 'Kinyarwanda';
$string['language.sa'] = 'Sanskrit';
$string['language.sd'] = 'Sindhi';
$string['language.sg'] = 'Sango';
$string['language.si'] = 'Sinhala; Sinhalese';
$string['language.sm'] = 'Samoan';
$string['language.sn'] = 'Shona';
$string['language.ss'] = 'Swati';
$string['language.st'] = 'Sotho, Southern';
$string['language.su'] = 'Sundanese';
$string['language.ta'] = 'Tamil';
$string['language.te'] = 'Telugu';
$string['language.tg'] = 'Tajik';
$string['language.th'] = 'Thai';
$string['language.ti'] = 'Tigrinya';
$string['language.tl'] = 'Tagalog';
$string['language.tn'] = 'Tswana';
$string['language.to'] = 'Tonga (Tonga Islands)';
$string['language.ts'] = 'Tsonga';
$string['language.tt'] = 'Tatar';
$string['language.tw'] = 'Twi';
$string['language.ug'] = 'Uighur; Uyghur';
$string['language.ve'] = 'Venda';
$string['language.wa'] = 'Walloon';
$string['language.wo'] = 'Wolof';
$string['language.xh'] = 'Xhosa';
$string['language.yo'] = 'Yoruba';
$string['language.za'] = 'Zhuang; Chuang';
$string['language.zu'] = 'Zulu';

// ISO 3166-1-alpha-2 filtered by Europass 
// (http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm)
$string['country.ad'] = 'Ανδόρα';
$string['country.ae'] = 'Ηνωμένα Αραβικά Εμιράτα';
$string['country.af'] = 'Αφγανιστάν';
$string['country.ag'] = 'Αντίγκουα και Μπαρμπούντα';
$string['country.al'] = 'Αλβανία';
$string['country.am'] = 'Αρμενία';
$string['country.ao'] = 'Αγκόλα';
$string['country.ar'] = 'Αργεντινή';
$string['country.at'] = 'Αυστρία';
$string['country.au'] = 'Αυστραλία';
$string['country.az'] = 'Αζερμπαϊτζάν';
$string['country.ba'] = 'Βοσνία-Ερζεγοβίνη';
$string['country.bb'] = 'Μπαρμπέιντος (Νήσοι)';
$string['country.bd'] = 'Μπανγκλαντές';
$string['country.be'] = 'Βέλγιο';
$string['country.bf'] = 'Μπουρκίνα Φάσο';
$string['country.bg'] = 'Βουλγαρία';
$string['country.bh'] = 'Μπαχρέιν';
$string['country.bi'] = 'Μπουρούντι';
$string['country.bj'] = 'Μπενίν';
$string['country.bn'] = 'Μπρουνέι';
$string['country.bo'] = 'Βολιβία';
$string['country.br'] = 'Βραζιλία';
$string['country.bs'] = 'Μπαχάμες';
$string['country.bt'] = 'Μπουτάν';
$string['country.bw'] = 'Μποτσουάνα';
$string['country.by'] = 'Λευκορωσία';
$string['country.bz'] = 'Μπελίζε';
$string['country.ca'] = 'Καναδάς';
$string['country.cd'] = 'Λαϊκή Δημοκρατία του Κογκό';
$string['country.cf'] = 'Κεντροαφρικανική Δημοκρατία';
$string['country.cg'] = 'Δημοκρατία του Κογκό';
$string['country.ch'] = 'Ελβετία';
$string['country.ci'] = 'Ακτή Ελεφαντοστού';
$string['country.cl'] = 'Χιλή';
$string['country.cm'] = 'Καμερούν';
$string['country.cn'] = 'Κίνα';
$string['country.co'] = 'Κολομβία';
$string['country.cr'] = 'Κόστα Ρίκα';
$string['country.cu'] = 'Κούβα';
$string['country.cv'] = 'Πράσινο Ακρωτήριο';
$string['country.cy'] = 'Κύπρος';
$string['country.cz'] = 'Δημοκρατία της Τσεχίας';
$string['country.de'] = 'Γερμανία';
$string['country.dj'] = 'Τζιμπουτί';
$string['country.dk'] = 'Δανία';
$string['country.dm'] = 'Ντομίνικα';
$string['country.do'] = 'Δομινικανή Δημοκρατία';
$string['country.dz'] = 'Αλγερία';
$string['country.ec'] = 'Ισημερινός';
$string['country.ee'] = 'Εσθονία';
$string['country.eg'] = 'Αίγυπτος';
$string['country.er'] = 'Ερυθραία';
$string['country.es'] = 'Ισπανία';
$string['country.et'] = 'Αιθιοπία';
$string['country.fi'] = 'Φινλανδία';
$string['country.fj'] = 'Φίτζι';
$string['country.fm'] = 'Μικρονησία';
$string['country.fr'] = 'Γαλλία';
$string['country.ga'] = 'Γκαμπόν';
$string['country.gb'] = 'Ηνωμένο Βαίλειο';
$string['country.gd'] = 'Γρενάδα';
$string['country.ge'] = 'Γεωργία';
$string['country.gh'] = 'Γκάνα';
$string['country.gl'] = 'Γροιλανδία';
$string['country.gm'] = 'Γκάμπια';
$string['country.gn'] = 'Γουινέα';
$string['country.gq'] = 'Ισημερινή Γουινέα';
$string['country.gr'] = 'Ελλάδα';
$string['country.gt'] = 'Γουατεμάλα';
$string['country.gw'] = 'Γουινέα Μπισσάου';
$string['country.gy'] = 'Γουιάνα';
$string['country.hn'] = 'Ονδούρα';
$string['country.hr'] = 'Κροατία';
$string['country.ht'] = 'Αϊτή';
$string['country.hu'] = 'Ουγγαρία';
$string['country.id'] = 'Ινδονησία';
$string['country.ie'] = 'Ιρλανδία';
$string['country.il'] = 'Ισραήλ';
$string['country.in'] = 'Ινδία';
$string['country.iq'] = 'Ιράκ';
$string['country.ir'] = 'Ιράν';
$string['country.is'] = 'Ισλανδία';
$string['country.it'] = 'Ιταλία';
$string['country.jm'] = 'Τζαμάικα';
$string['country.jo'] = 'Ιορδανία';
$string['country.jp'] = 'Ιαπωνία';
$string['country.ke'] = 'Κένυα';
$string['country.kg'] = 'Κιργιζία';
$string['country.kh'] = 'Καμπότζη';
$string['country.ki'] = 'Κιριμπάτι';
$string['country.km'] = 'Κομόρες';
$string['country.kn'] = 'Άγιος Χριστόφορος και Νέβις';
$string['country.kp'] = 'Βόρεια Κορέα';
$string['country.kr'] = 'Νότια Κορέα';
$string['country.kw'] = 'Κουβέιτ';
$string['country.kz'] = 'Καζαχστάν';
$string['country.la'] = 'Λάος';
$string['country.lb'] = 'Λίβανος';
$string['country.lc'] = 'Αγία Λουκία';
$string['country.li'] = 'Λιχτενστάιν';
$string['country.lk'] = 'Σρι Λάνκα';
$string['country.lr'] = 'Λιβερία';
$string['country.ls'] = 'Λεσόθο';
$string['country.lt'] = 'Λιθουανία';
$string['country.lu'] = 'Λουξεμβούργο';
$string['country.lv'] = 'Λεττονία';
$string['country.ly'] = 'Λιβύη';
$string['country.ma'] = 'Μαρόκο';
$string['country.mc'] = 'Μονακό';
$string['country.md'] = 'Μολδαβία';
$string['country.me'] = 'Μαυροβούνιο';
$string['country.mg'] = 'Μαδαγασκάρη';
$string['country.mh'] = 'Νήσοι Μάρσαλ';
$string['country.mk'] = 'Πρώην Γιουγκοσλαβική Δημοκρατία της Μακεδονίας';
$string['country.ml'] = 'Μάλι';
$string['country.mm'] = 'Μιανμάρ';
$string['country.mn'] = 'Μογγολία';
$string['country.mr'] = 'Μαυριτανία';
$string['country.mt'] = 'Μάλτα';
$string['country.mu'] = 'Μαυρίκιος';
$string['country.mv'] = 'Μαλδίβες';
$string['country.mw'] = 'Μαλάουι';
$string['country.mx'] = 'Μεξικό';
$string['country.my'] = 'Μαλαισία';
$string['country.mz'] = 'Μοζαμβίκη';
$string['country.na'] = 'Ναμίμπια';
$string['country.ne'] = 'Νίγηρας';
$string['country.ng'] = 'Νιγηρία';
$string['country.ni'] = 'Νικαράγουα';
$string['country.nl'] = 'Κάτω Χώρες';
$string['country.no'] = 'Νορβηγία';
$string['country.np'] = 'Νεπάλ';
$string['country.nr'] = 'Ναουρού';
$string['country.nu'] = 'Νιούε';
$string['country.nz'] = 'Νέα Ζηλανδία';
$string['country.om'] = 'Ομάν';
$string['country.pa'] = 'Παναμάς';
$string['country.pe'] = 'Περού';
$string['country.pg'] = 'Παπουασία-Νέα Γουινέα';
$string['country.ph'] = 'Φιλιππίνες';
$string['country.pk'] = 'Πακιστάν';
$string['country.pl'] = 'Πολωνία';
$string['country.pr'] = 'Πόρτο Ρίκο';
$string['country.ps'] = 'Αυτόνομα παλαιστινιακά εδάφη';
$string['country.pt'] = 'Πορτογαλία';
$string['country.pw'] = 'Παλάου';
$string['country.py'] = 'Παραγουάη';
$string['country.qa'] = 'Κατάρ';
$string['country.ro'] = 'Ρουμανία';
$string['country.rs'] = 'Σερβία';
$string['country.ru'] = 'Ρωσία';
$string['country.rw'] = 'Ρουάντα';
$string['country.sa'] = 'Σαουδική Αραβία';
$string['country.sb'] = 'Σολομώντος (Νήσοι)';
$string['country.sc'] = 'Σεϋχέλλες';
$string['country.sd'] = 'Σουδάν';
$string['country.se'] = 'Σουηδία';
$string['country.sg'] = 'Σιγκαπούρη';
$string['country.si'] = 'Σλοβενία';
$string['country.sk'] = 'Σλοβακία';
$string['country.sl'] = 'Σιέρρα Λεόνε';
$string['country.sm'] = 'Άγιος Μαρίνος';
$string['country.sn'] = 'Σενεγάλη';
$string['country.so'] = 'Σομαλία';
$string['country.sr'] = 'Σουρινάμ';
$string['country.st'] = 'Σάο Τομέ και Πρίνσιπε';
$string['country.sv'] = 'Ελ Σαλβαδόρ';
$string['country.sy'] = 'Συρία';
$string['country.sz'] = 'Σουαζιλάνδη';
$string['country.td'] = 'Τσαντ';
$string['country.tg'] = 'Τόγκο';
$string['country.th'] = 'Ταϊλάνδη';
$string['country.tj'] = 'Τατζικιστάν';
$string['country.tl'] = 'Ανατολικό Τιμόρ';
$string['country.tm'] = 'Τουρκμενιστάν';
$string['country.tn'] = 'Τυνησία';
$string['country.to'] = 'Τόνγκα';
$string['country.tr'] = 'Τουρκία';
$string['country.tt'] = 'Τρινιδάδ και Τομπάγκο';
$string['country.tv'] = 'Τουβαλού';
$string['country.tz'] = 'Τανζανία';
$string['country.ua'] = 'Ουκρανία';
$string['country.ug'] = 'Ουγκάντα';
$string['country.us'] = 'Ηνωμένες Πολιτείες';
$string['country.uy'] = 'Ουρουγουάη';
$string['country.uz'] = 'Ουζμπεκιστάν';
$string['country.va'] = 'Βατικανό';
$string['country.vc'] = 'Άγιος Βικέντιος και Γρεναδίνες';
$string['country.ve'] = 'Βενεζουέλα';
$string['country.vn'] = 'Βιετνάμ';
$string['country.vu'] = 'Βανουάτου';
$string['country.ws'] = 'Σαμόα';
$string['country.ye'] = 'Υεμένη';
$string['country.za'] = 'Νότια Αφρική';
$string['country.zm'] = 'Ζάμπια';
$string['country.zw'] = 'Ζιμπάμπουε';

// List of nationalities based on the ISO 3166-1-alpha-2 filtered by Europass country list
// (http://europass.cedefop.europa.eu/TechnicalResources/XML/xsd/included_schemas/EUROPASS_Nationalities_V1.0.xsd)
$string['nationality.ad'] = 'Ανδόρας';
$string['nationality.ae'] = 'Ηνωμένων Αραβικών Εμιράτων';
$string['nationality.af'] = 'Αφγανική';
$string['nationality.ag'] = 'από την Αντίγκουα και Μπαρμπούντα';
$string['nationality.al'] = 'Αλβανική';
$string['nationality.am'] = 'Αρμένικη';
$string['nationality.ao'] = 'Αγκόλας';
$string['nationality.ar'] = 'Αργεντίνικη';
$string['nationality.at'] = 'Αυστριακή';
$string['nationality.au'] = 'Αυστραλιανή';
$string['nationality.az'] = 'από το Αζερμπαϊτζάν';
$string['nationality.ba'] = 'Βοσνιακή';
$string['nationality.bb'] = 'από τους Νήσους Μπαρμπέιντος';
$string['nationality.bd'] = 'από το Μπανγκλαντές';
$string['nationality.be'] = 'Βέλγικη';
$string['nationality.bf'] = 'από την Μπουρκίνα';
$string['nationality.bg'] = 'Βουλγαρική';
$string['nationality.bh'] = 'από το Μπαχρέιν';
$string['nationality.bi'] = 'Μπουρουντιανή';
$string['nationality.bj'] = 'από το Μπενίν';
$string['nationality.bn'] = 'από το Μπρουνέι';
$string['nationality.bo'] = 'Βολιβιανή';
$string['nationality.br'] = 'Βραζιλιάνικη';
$string['nationality.bs'] = 'από τις Μπαχάμες';
$string['nationality.bt'] = 'Μπουτανέζικη';
$string['nationality.bw'] = 'Μπουτσoυανική';
$string['nationality.by'] = 'Λευκορώσικη';
$string['nationality.bz'] = 'από το Μπελίζε';
$string['nationality.ca'] = 'Καναδική';
$string['nationality.cd'] = 'Κονγκολέζικη';
$string['nationality.cf'] = 'Κεντροαφρικανική';
$string['nationality.cg'] = 'Κονγκολέζικη';
$string['nationality.ch'] = 'Ελβετική';
$string['nationality.ci'] = 'από την Ακτή Ελεφαντοστού';
$string['nationality.cl'] = 'Χιλιανή';
$string['nationality.cm'] = 'Καμερουνέζικη';
$string['nationality.cn'] = 'Κινέζικη';
$string['nationality.co'] = 'Κολομβιανή';
$string['nationality.cr'] = 'Κοσταρικανική';
$string['nationality.cu'] = 'Κουβανική';
$string['nationality.cv'] = 'από το Πράσινο Ακρωτήριο';
$string['nationality.cy'] = 'Κυπριακή';
$string['nationality.cz'] = 'Τσέχικη';
$string['nationality.de'] = 'Γερμανική';
$string['nationality.dj'] = 'από το Τζιμπουτί';
$string['nationality.dk'] = 'Δανική';
$string['nationality.dm'] = 'από την Ντομίνικα';
$string['nationality.do'] = 'Δομινικανή';
$string['nationality.dz'] = 'Αλγερική';
$string['nationality.ec'] = 'από τον Ισημερινό';
$string['nationality.ee'] = 'Εσθονική';
$string['nationality.eg'] = 'Αιγυπτιακή';
$string['nationality.er'] = 'Ερυθραία';
$string['nationality.es'] = 'Ισπανική';
$string['nationality.et'] = 'Αιθιοπική';
$string['nationality.fi'] = 'Φιλανδική';
$string['nationality.fj'] = 'από τα Φίτζι';
$string['nationality.fm'] = 'Μικρονησιακή';
$string['nationality.fr'] = 'Γαλλική';
$string['nationality.ga'] = 'από την Γκαμπόν';
$string['nationality.gb'] = 'Βρετανική';
$string['nationality.gd'] = 'από την Γρενάδα';
$string['nationality.ge'] = 'Γεωργιανή';
$string['nationality.gh'] = 'από την Γκάνα';
$string['nationality.gl'] = 'Γροιλανδική';
$string['nationality.gm'] = 'από την Γκάμπια';
$string['nationality.gn'] = 'από την Γουινέα';
$string['nationality.gq'] = 'από την Ισημερινή Γουινέα';
$string['nationality.gr'] = 'Ελληνική';
$string['nationality.gt'] = 'από την Γουατεμάλα';
$string['nationality.gw'] = 'από την Γουινέα Μπισσάου';
$string['nationality.gy'] = 'από την Γουιάνα';
$string['nationality.hn'] = 'από την Ονδούρα';
$string['nationality.hr'] = 'Κροατική';
$string['nationality.ht'] = 'από την Αϊτή';
$string['nationality.hu'] = 'Ουγγαρική';
$string['nationality.id'] = 'Ινδονησιακή';
$string['nationality.ie'] = 'Ιρλανδική';
$string['nationality.il'] = 'Ισρλαηλινή';
$string['nationality.in'] = 'Ινδική';
$string['nationality.iq'] = 'Ιρανική';
$string['nationality.ir'] = 'Ιρακινή';
$string['nationality.is'] = 'Ισλανδική';
$string['nationality.it'] = 'Ιταλική';
$string['nationality.jm'] = 'Τσαμαϊκανή';
$string['nationality.jo'] = 'Ιορδανική';
$string['nationality.jp'] = 'Ιαπωνική';
$string['nationality.ke'] = 'Κεννυάτικη';
$string['nationality.kg'] = 'Κιργιζιανή';
$string['nationality.kh'] = 'Καμποτζιανή';
$string['nationality.ki'] = 'από το Κιριμπάτι';
$string['nationality.km'] = 'Κομορική';
$string['nationality.kn'] = 'Αγίου Χριστοφόρου και Νέβις';
$string['nationality.kp'] = 'Βορειοκορεάτικη';
$string['nationality.kr'] = 'Νοτιοκορεάτικη';
$string['nationality.kw'] = 'από το Κουβέιτ';
$string['nationality.kz'] = 'Καζαχική';
$string['nationality.la'] = 'Λαοτινή';
$string['nationality.lb'] = 'Λιβανέζικη';
$string['nationality.lc'] = 'Αγία Λουκίας';
$string['nationality.li'] = 'από το Λιχτενστάιν';
$string['nationality.lk'] = 'από τη Σρι Λάνκα';
$string['nationality.lr'] = 'Λιβεριανή';
$string['nationality.ls'] = 'Λεσόθου';
$string['nationality.lt'] = 'Λιθουανική';
$string['nationality.lu'] = 'Λουξεμβουργιανή';
$string['nationality.lv'] = 'Λετονική';
$string['nationality.ly'] = 'Λιβυκή';
$string['nationality.ma'] = 'Μαροκινή';
$string['nationality.mc'] = 'Μονεγασκική';
$string['nationality.md'] = 'Μολδαβική';
$string['nationality.me'] = 'Μαυροβουνιακή';
$string['nationality.mg'] = 'Μαδαγασκάρης';
$string['nationality.mh'] = 'Νήσων Μάρσαλ';
$string['nationality.mk'] = 'Σλαβομακεδονική';
$string['nationality.ml'] = 'από το Μάλι';
$string['nationality.mm'] = 'Βιρμανική (από Μιανμάρ)';
$string['nationality.mn'] = 'Μογγολική';
$string['nationality.mr'] = 'Μαυριτανική';
$string['nationality.mt'] = 'Μαλτέζικη';
$string['nationality.mu'] = 'Μαυρικιανή';
$string['nationality.mv'] = 'Μαλβίδων';
$string['nationality.mw'] = 'από το Μαλάουι';
$string['nationality.mx'] = 'Μεξικανική';
$string['nationality.my'] = 'Μαλαισιανή';
$string['nationality.mz'] = 'Μοζαμβικιανή';
$string['nationality.na'] = 'από τη Ναμίμπια';
$string['nationality.ne'] = 'Νιγηρική';
$string['nationality.ng'] = 'Νιγηριανή';
$string['nationality.ni'] = 'Νικαραγουανική';
$string['nationality.nl'] = 'Ολλανδική';
$string['nationality.no'] = 'Νορβηγική';
$string['nationality.np'] = 'Νεπαλέζικη';
$string['nationality.nr'] = 'από το Ναουρού';
$string['nationality.nu'] = 'από το Νιούε';
$string['nationality.nz'] = 'Νεοζηλανδική';
$string['nationality.om'] = 'από το Ομάν';
$string['nationality.pa'] = 'Παναμαΐκή';
$string['nationality.pe'] = 'Περουβιανή';
$string['nationality.pg'] = 'από Παπούα-Νέα Γουινέα';
$string['nationality.ph'] = 'Φιλιππινέζικη';
$string['nationality.pk'] = 'Πακιστανική';
$string['nationality.pl'] = 'Πολωνική';
$string['nationality.pr'] = 'Πορτορικανή';
$string['nationality.ps'] = 'Παλαιστινιακή';
$string['nationality.pt'] = 'Πορτογαλλική';
$string['nationality.pw'] = 'από το Παλάου';
$string['nationality.py'] = 'Παραγουανική';
$string['nationality.qa'] = 'από το Κατάρ';
$string['nationality.ro'] = 'Ρουμανική';
$string['nationality.rs'] = 'Σέρβικη';
$string['nationality.ru'] = 'Ρωσική';
$string['nationality.rw'] = 'Ρουαντέζικη';
$string['nationality.sa'] = 'Σαουδαραβική';
$string['nationality.sb'] = 'Νήσων Σολομώντος';
$string['nationality.sc'] = 'από τις Σεϋχέλλες';
$string['nationality.sd'] = 'Σουδανική';
$string['nationality.se'] = 'Σουηδική';
$string['nationality.sg'] = 'Σιγκαπουριανική';
$string['nationality.si'] = 'Σλοβενική';
$string['nationality.sk'] = 'Σλοβακική';
$string['nationality.sl'] = 'από τη Σιέρρα Λεόνε';
$string['nationality.sm'] = 'Αγίου Μαρίνου';
$string['nationality.sn'] = 'Σενεγαλέζικη';
$string['nationality.so'] = 'Σομαλική';
$string['nationality.sr'] = 'Σουριναμική';
$string['nationality.st'] = 'από το Σάο Τομέ και Πρίνσιπε';
$string['nationality.sv'] = 'από το Ελ Σαλβαδόρ';
$string['nationality.sy'] = 'Συριακή';
$string['nationality.sz'] = 'Σουαζιλάνδης';
$string['nationality.td'] = 'από το Τσαντ';
$string['nationality.tg'] = 'από το Τόγκο';
$string['nationality.th'] = 'Ταΐλανδέζικη';
$string['nationality.tj'] = 'Τατζικική';
$string['nationality.tl'] = 'Ανατολικού Τιμόρ';
$string['nationality.tm'] = 'Τουρκμενική';
$string['nationality.tn'] = 'Τυνησιακή';
$string['nationality.to'] = 'Τόνγκας';
$string['nationality.tr'] = 'Τουρκική';
$string['nationality.tt'] = 'από το Τρινιδάδ και Τομπάγκο';
$string['nationality.tv'] = 'Τουβαλουανή';
$string['nationality.tz'] = 'Τανζανική';
$string['nationality.ua'] = 'Ουκρανική';
$string['nationality.ug'] = 'Ουγκαντέζικη';
$string['nationality.us'] = 'Αμερικανική';
$string['nationality.uy'] = 'Ουρουγουανική';
$string['nationality.uz'] = 'Ουζμπεκική';
$string['nationality.va'] = 'Βατικανού';
$string['nationality.vc'] = 'Αγίου Βικεντίου και Γρεναδίνης';
$string['nationality.ve'] = 'Βενεζουελανική';
$string['nationality.vn'] = 'Βιετναμική';
$string['nationality.vu'] = 'Βανουάτου';
$string['nationality.ws'] = 'Σαμόας';
$string['nationality.ye'] = 'Υεμενική';
$string['nationality.za'] = 'Νοτιοαφρικανική';
$string['nationality.zm'] = 'Ζάμπιας';
$string['nationality.zw'] = 'από τη Ζιμπάμπουε';

?>
