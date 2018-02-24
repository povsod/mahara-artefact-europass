<?php
/**
 *
 * @package    mahara
 * @subpackage artefact-europass
 * @author     Gregor Anzelj
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2009-2017 Gregor Anzelj, gregor.anzelj@gmail.com
 *
 * @translator Gregor Anzelj
 *
 */

defined('INTERNAL') || die();

$string['pluginname'] = 'Europass';

$string['europass'] = 'Europass';
$string['europassartefactsaved'] = 'Europass življenjepis uspešno shranjen';
$string['europassexportgenerated'] = 'Prosimo počakajte, dokler vaš izvoz ne bo ustvarjen...';

$string['languagesaved'] = 'Jezik uspešno shranjen';
$string['languagesavefailed'] = 'Neuspešno shranjevanje jezika';
$string['languagedeleteconfirm'] = 'Ali res želite izbrisati jezik?';
$string['languagedeleted'] = 'Jezik uspešno izbrisan';
$string['languagediploma'] = 'Jezikovna diploma';
$string['languageexperience'] = 'Jezikovna izkušnja';
$string['languagediplomadeleteconfirm'] = 'Ali res želite izbrisati jezikovno diplomo?';
$string['languageexperiencedeleteconfirm'] = 'Ali res želite izbrisati jezikovno izkušnjo?';
$string['languagediplomadeleted'] = 'Jezikovna diploma uspešno izbrisana';
$string['languageexperiencedeleted'] = 'Jezikovna izkušnja uspešno izbrisana';
$string['languagediplomasaved'] = 'Jezikovna diploma uspešno shranjena';
$string['languagediplomasavefailed'] = 'Neuspešno shranjevanje jezikovne diplome';
$string['languageexperiencesaved'] = 'Jezikovna izkušnja uspešno shranjena';
$string['languageexperiencesavefailed'] = 'Neuspešno shranjevanje jezikovne izkušnje';

// Export data from Mahara to Europass form...
$string['exporteuropass'] = 'Europass izvoz';
$string['exportstep1'] = '1 - Izberite dokument(e)';
$string['attach'] = 'Priloge';
$string['selectlocale'] = 'Jezik';
$string['exportstep2'] = '2 - Oblika datoteke';
$string['selectexternaldatedesc'] = 'Oblika datuma v izvozu';
$string['selectdateformatdesc2'] = 'Dates are localised according to selected language.';
$string['dateformat-numeric-medium'] = '31. 1. 2005';
$string['dateformat-numeric-long'] = '31. 01. 2005';
$string['dateformat-text-short'] = '31. jan 2005';
$string['dateformat-text-long'] = '31. januar 2005';
$string['exportfile'] = 'Datoteka';
$string['pdf'] = 'Adobe® PDF + Europass XML';
$string['doc'] = 'Microsoft® Word';
$string['odt'] = 'OpenDocument';
$string['html'] = 'HTML';
$string['xml'] = 'Europass XML';
$string['exportstep3'] = '3 - Izvoz';
$string['generateexport'] = 'Izvozi';
$string['generateexportdesc'] = 'Ustvarite dokument Europass in ga shranite na svoj računalnik.';
$string['generaloptions'] = 'Splošne možnosti izvoza';
$string['includelogo'] = 'Vključim Europass logo?';

// Import data from Europass XML to Mahara...
$string['importeuropass'] = 'Europass uvoz';
$string['importstep1'] = '1 - Datoteka uvoza in možnosti';
$string['selectfile&options'] = 'Naložite Europass XML datoteko in izberite možnosti uvoza';
$string['importstep2'] = '2 - Uvoz';
$string['execute'] = 'Izvedite uvoz';
$string['executeimport'] = 'Uvozi';
$string['importfile'] = 'Europass XML datoteka';
$string['importfiledesc'] = 'Izberite veljavno Europass XML datoteko za uvoz v Maharo';
$string['notvalidxmlfile'] = 'Naložena datoteka ni veljavna XML datoteka.';
$string['importoptions'] = 'Kaj uvozim?';
$string['importoptionsdesc'] = 'Zaklenjena polja profila ne bodo spremenjena/posodobljena';
$string['nocheckedoptions'] = 'Izbrati morate vsaj eno možnost za uvoz.';
$string['fieldnotimported'] = 'Polje "%s" ni uvoženo.';
$string['lockedfieldnotimported'] = 'Zaklenjeno polje "%s" ni uvoženo.';
$string['languagecodemissing'] = 'Polje "%s" ni uvoženo. Manjka koda jezika.';
$string['importdate'] = 'Uvozi datume kot';
$string['europassimportexecuted'] = 'Podatki iz Europass XML datoteke uspešno uvoženi v Maharo.';

// Europass ESP
$string['skillsfolder'] = 'Mapa kompetenc';
$string['skillsfolderdesc'] = 'Datoteke, ki dokazujejo veščine Europass';
$string['skillsfolderupload'] = 'Naloži datoteko';
$string['skillsfolderuploadnotice'] = 'Ustvarite vašo Mapo kompetenc, v kateri boste zbrali dokumente, kot so Jezikovna izkaznica, Prilogo k spričevalu, kopije spričeval ali certifikatov, potrdila o zaposlitvi itd.';
$string['skillsfolderuploadmaxsize'] = '(Največja velikost nalaganja je 2.5 MB. Dokumenti, naloženi v Mapo kompetenc, morajo biti v PNG, JPEG ali PDF obliki.)';
$string['filenotaccepted'] = 'Naloženi dokument mora biti PNG, JPEG ali PDF datoteka.';
$string['fileuploadcomplete'] = 'Nalaganje dokumenta končano.';
$string['deletefile'] = 'Izbriši dokument';
$string['deletefileconfirm'] = 'Ali zares želite izbrisati ta dokument?';
$string['filechangedsuccessfully'] = 'Dokument uspešno spremenjen.';
$string['filedeletedsuccessfully'] = 'Dokument uspešno izbrisan.';
$string['editfile'] = 'Uredi dokument';
$string['profilepicinclude'] = 'Vključim sliko profila?';

// Included strings for labels, countries, languages and nationalities
// ===================================================================

// Europass GUI form tabs
$string['ecv-tab'] = 'Življenjepis';
$string['esp-tab'] = 'Mapa kompetenc';
$string['elp-tab'] = 'Jezikovna izkaznica';
$string['copyright'] = '© Evropska unija in Svet Evrope, 2004 - ';

// Europass CV - STEP 1
$string['identification'] = 'Osebni podatki';
$string['identification-birthdate'] = 'Datum rojstva';
$string['identification-birthplace'] = 'Kraj rojstva';
$string['identification-lastname'] = 'Priimek';
$string['identification-firstname'] = 'Ime';
$string['identification-addressLine'] = 'Ulica / Hišna številka';
$string['identification-municipality'] = 'Mesto';
$string['identification-postalCode'] = 'Poštna številka';
$string['identification-country'] = 'Država';
$string['identification-contactinfo-telephone'] = 'Telefon';
$string['identification-contactinfo-mobile'] = 'Prenosni telefon';
$string['identification-contactinfo-fax'] = 'Faks';
$string['identification-contactinfo-email'] = 'E-pošta';
$string['identification-nationality'] = 'Državljanstvo';
$string['identification-gender'] = 'Spol';

// Europass CV - STEP 3
$string['workexperience'] = 'Delovne izkušnje';

// Europass CV - STEP 4
$string['education'] = 'Izobraževanje in usposabljanje';

// Europass CV - STEP 5
$string['mothertongue'] = 'Materni jezik(i)';
$string['otherlanguage'] = 'Drugi jezik(i)';

$string['language-understanding'] = 'Razumevanje';
$string['language-speaking'] = 'Govorjenje';
$string['language-writing'] = 'Pisno sporočanje';
$string['language-foreign-listening'] = 'Slušno razumevanje';
$string['language-foreign-reading'] = 'Bralno razumevanje';
$string['language-foreign-spokeninteraction'] = 'Govorno sporazumevanje';
$string['language-foreign-spokenproduction'] = 'Govorno sporočanje';
$string['language-foreign-writing'] = 'Pisanje';
$string['language-foreign-CEF-level'] = 'Skupni evropski referenčni okvir za jezike';

$string['language-foreign-level.A1'] = 'Osnovni uporabnik (A1)';
$string['language-foreign-level.A2'] = 'Osnovni uporabnik (A2)';
$string['language-foreign-level.B1'] = 'Samostojni uporabnik (B1)';
$string['language-foreign-level.B2'] = 'Samostojni uporabnik (B2)';
$string['language-foreign-level.C1'] = 'Usposobljeni uporabnik (C1)';
$string['language-foreign-level.C2'] = 'Usposobljeni uporabnik (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Vozniško dovoljenje';
$string['categories'] = 'Kategorije';

$string['skills'] = 'Znanja in kompetence';
$string['socialskill'] = 'Socialna znanja in kompetence';
$string['organisationalskill'] = 'Organizacijska znanja in kompetence';
$string['technicalskill'] = 'Tehnična znanja in kompetence';
$string['otherskill'] = 'Druga znanja in kompetence';
$string['additionalinfo'] = 'Dodatni podatki';
$string['category'] = 'Kategorija';

$string['digitalcompetence'] = 'Digitalna pismenost';
$string['digitalcompetence-other'] = 'Druge računalniške kompetence';
$string['digitalcompetence-information'] = 'Obdelava informacij';
$string['digitalcompetence-communication'] = 'Komunikacija';
$string['digitalcompetence-contentcreation'] = 'Ustvarjanje vsebin';
$string['digitalcompetence-safety'] = 'Varnost';
$string['digitalcompetence-problemsolving'] = 'Reševanje problemov';
$string['digitalcompetence-DIGCOMP-level'] = 'Digitalne kompetence (DIGCOMP)';

$string['digitalcompetence-level.A'] = 'Osnovni uporabnik (A)';
$string['digitalcompetence-level.B'] = 'Samostojni uporabnik (B)';
$string['digitalcompetence-level.C'] = 'Usposobljeni uporabnik (C)';

$string['honors_awards'] = 'Priznanja in nagrade';
$string['publications'] = 'Objave';
$string['presentations'] = 'Predstavitve';
$string['citations'] = 'Navedbe';
$string['projects'] = 'Projekti';
$string['memberships'] = 'Članstva';
$string['seminars'] = 'Seminarji';
$string['conferences'] = 'Konference';
$string['references'] = 'Reference';
$string['courses'] = 'Tečaji';
$string['certifications'] = 'Certifikati';

// Europass LP - STEP 2
$string['self-assessment'] = 'Samoocenjevanje jezikovnih znanj';
$string['language-diplomas'] = 'Potrdila in spričevala';
$string['diploma-title'] = 'Naziv';
$string['diploma-awardingBody'] = 'Ustanova podeljevalka';
$string['diploma-date'] = 'Datum';
$string['diploma-level'] = 'Raven';
$string['language-experiences'] = 'Jezikovne in medkulturne izkušnje';
$string['experiences-description'] = 'Opis';
$string['experiences-period'] = 'Trajanje';
$string['experiences-period-from'] = 'Od';
$string['experiences-period-to'] = 'Do';

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
