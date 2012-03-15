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
 * @translator 
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
$string['europassartefactsaved'] = 'Europass curriculum vitae saved sucessfully';
$string['europassexportgenerated'] = 'Please wait while your export is being generated...';
$string['europassexportnoconncetion'] = 'There was an error with connection to WSDL server. Please try again later.';
$string['europassexportservererror'] = 'There was an error on WSDL server. Please try again later.';
$string['europassextensionmissing'] = 'Sorry, you cannot use Europass plugin because your PHP installation is missing required extension:';
$string['newerversionforcompatibility'] = 'For better performance and compatibility you should upgrade to Mahara version 1.3.0 or newer.';

$string['languagesaved'] = 'Language saved sucessfully';
$string['languagesavefailed'] = 'Failed to save language';
$string['languagedeleteconfirm'] = 'Are you sure you want to delete this language?';
$string['languagedeleted'] = 'Language deleted sucessfully';

$string['moveup'] = 'Move up';
$string['movedown'] = 'Move down';

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
$string['exportstep1'] = '1 - Document language and type';
$string['selectlocale&type'] = 'Select document language and type';
$string['selectlocale'] = 'Language';
$string['selectlocaledesc'] = 'Europass document language';
$string['selectdocumenttype'] = 'Document';
$string['europassCV'] = 'Europass-ansioluettelo';
$string['europassLP'] = 'Europass-kielipassi';
$string['photograph'] = 'Valokuva';
$string['photographdesc'] = 'Photo will be embeded in Europass XML';
$string['phototoolarge'] = 'File too big. Filesize must not exceed 100 kB.';
$string['exportstep2'] = '2 - Document format';
$string['selectfiletype'] = 'Select file and date format';
$string['exportdate'] = 'Date';
$string['internaldateformat'] = 'Internal Date Format';
$string['selectinternaldatedesc'] = 'Date format used in Mahara';
$string['internaldate-dmy11'] = 'pp/kk/vvvv';
$string['internaldate-dmy12'] = 'pp.kk.vvvv';
$string['internaldate-dmy13'] = 'pp-kk-vvvv';
$string['internaldate-dmy21'] = 'pp/kk/vv';
$string['internaldate-dmy22'] = 'pp.kk.vv';
$string['internaldate-dmy23'] = 'pp-kk-vv';
$string['internaldate-mdy11'] = 'kk/pp/vvvv';
$string['internaldate-mdy12'] = 'kk.pp.vvvv';
$string['internaldate-mdy13'] = 'kk-pp-vvvv';
$string['internaldate-mdy21'] = 'kk/pp/vv';
$string['internaldate-mdy22'] = 'kk.pp.vv';
$string['internaldate-mdy23'] = 'kk-pp-vv';
$string['internaldate-ymd11'] = 'vvvv/kk/pp';
$string['internaldate-ymd12'] = 'vvvv.kk.pp';
$string['internaldate-ymd13'] = 'vvvv-kk-pp';
$string['internaldate-ymd21'] = 'vv/kk/pp';
$string['internaldate-ymd22'] = 'vv.kk.pp';
$string['internaldate-ymd23'] = 'vv-kk-pp';
$string['internaldate-yonly'] = 'vvvv';
$string['internaldate-other'] = 'other';
$string['externaldateformat'] = 'External Date Format';
$string['selectexternaldatedesc'] = 'Date format used in export';
$string['externaldate-numeric-long'] = 'pp/kk/vvvv';
$string['externaldate-text-long'] = 'pp. kuukausi vvvv';
$string['exportfile'] = 'File';
$string['pdf'] = 'Adobe® PDF + XML';
$string['pdfhrxml'] = 'Adobe® PDF + HR-XML';
$string['doc'] = 'Microsoft® Word';
$string['odt'] = 'OpenDocument';
$string['html'] = 'HTML';
$string['json'] = 'Europass JSON';
$string['xml'] = 'Europass XML';
$string['hrxml'] = 'HR-XML';
$string['exportstep3'] = '3 - Export';
$string['generate'] = 'Generate export';
$string['generateexport'] = 'Export';

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

// Europass GUI form tabs
$string['application-tab'] = 'Application';
$string['workexperience-tab'] = 'Employment';
$string['education-tab'] = 'Education';
$string['languages-tab'] = 'Languages';
$string['skills-tab'] = 'Skills';

// Europass CV - STEP 1
$string['identification'] = 'Henkilötiedot';
$string['identification-birthdate'] = 'Syntymäaika';
$string['identification-birthplace'] = 'Syntymäpaikasta';
$string['identification-lastname'] = 'Sukunimi (-nimet)';
$string['identification-firstname'] = 'Etunimi (-nimet)';
$string['identification-addressLine'] = 'Katuosoite ja –numero';
$string['identification-municipality'] = 'Kaupunki';
$string['identification-postalCode'] = 'Postinumero';
$string['identification-country'] = 'Maa';
$string['identification-contactinfo-telephone'] = 'Puhelinnumero(t)';
$string['identification-contactinfo-mobile'] = 'Matkapuhelin';
$string['identification-contactinfo-fax'] = 'Faksinumero';
$string['identification-contactinfo-email'] = 'Sähköposti(t)';
$string['identification-nationality'] = 'Kansalaisuus';
$string['identification-gender'] = 'Sukupuoli';

// Europass CV - STEP 2
$string['application'] = 'Haettu työpaikka / virka';

// Europass CV - STEP 3
$string['workexperience'] = 'Työkokemus';

// Europass CV - STEP 4
$string['education'] = 'Koulutus';

// Europass CV - STEP 5
$string['mothertongue'] = 'Äidinkieli tai -kielet';
$string['otherlanguage'] = 'Muut kielet';

$string['language-foreign-listening'] = 'Kuuntelu';
$string['language-foreign-listening-th'] = 'Kuuntelu';
$string['language-foreign-reading'] = 'Lukeminen';
$string['language-foreign-reading-th'] = 'Lukeminen';
$string['language-foreign-spokeninteraction'] = 'Suullinen vuorovaikutus';
$string['language-foreign-spokeninteraction-th'] = 'Suullinen<br>vuorovaikutus';
$string['language-foreign-spokenproduction'] = 'Suullinen tuottaminen';
$string['language-foreign-spokenproduction-th'] = 'Suullinen<br>tuottaminen';
$string['language-foreign-writing'] = 'Kirjoittaminen';
$string['language-foreign-writing-th'] = 'Kirjoittaminen';
$string['language-foreign-CEF-level'] = 'Kieliä koskeva yhteinen eurooppalainen viitekehys';

$string['language-foreign-level.A1'] = 'Peruskielitaito (A1)';
$string['language-foreign-level.A2'] = 'Peruskielitaito (A2)';
$string['language-foreign-level.B1'] = 'Itsenäisen kielenkäyttäjän kielitaito (B1)';
$string['language-foreign-level.B2'] = 'Itsenäisen kielenkäyttäjän kielitaito (B2)';
$string['language-foreign-level.C1'] = 'Taitavan kielenkäyttäjän kielitaito (C1)';
$string['language-foreign-level.C2'] = 'Taitavan kielenkäyttäjän kielitaito (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Ajokortti';
$string['skills-and-competences'] = 'Henkilökohtaiset tiedot ja taidot';
$string['socialskill'] = 'Sosiaaliset taidot';
$string['organisationalskill'] = 'Organisatoriset taidot';
$string['technicalskill'] = 'Tekniset tiedot ja taidot';
$string['computerskill'] = 'Tietotekniset taidot';
$string['artisticskill'] = 'Taiteelliset taidot';
$string['otherskill'] = 'Muut tiedot ja taidot';
$string['additionalinfo'] = 'Lisätietoa';
$string['annexes'] = 'Liitteet';

// Europass LP - STEP 2
$string['language-certificates'] = 'Todistukset tai tutkinnot';
$string['diploma-title'] = 'Tutkinnon tai todistuksen nimi';
$string['diploma-awardingBody'] = 'Todistuksen myöntäjä';
$string['diploma-date'] = 'Myöntämispäivämäärä';
$string['diploma-level'] = 'Eurooppalainen taitotaso';
$string['language-experiences'] = 'Kielitaitoon liittyvät kokemukset';
$string['experiences-period-from'] = 'Alkoi';
$string['experiences-period-to'] = 'Päättyi';

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
$string['language.ab'] = 'abhaasi';
$string['language.af'] = 'afrikaans';
$string['language.an'] = 'aragonia';
$string['language.ar'] = 'arabia';
$string['language.as'] = 'assami';
$string['language.az'] = 'azeri';
$string['language.be'] = 'valkovenäjä';
$string['language.bg'] = 'bulgaria';
$string['language.bn'] = 'bengali';
$string['language.bo'] = 'tiibet';
$string['language.br'] = 'bretoni';
$string['language.bs'] = 'bosnia';
$string['language.ca'] = 'katalaani';
$string['language.ce'] = 'tšetšeeni';
$string['language.co'] = 'korsika';
$string['language.cs'] = 'tšekki';
$string['language.cy'] = 'kymri';
$string['language.da'] = 'tanska';
$string['language.de'] = 'saksa';
$string['language.el'] = 'kreikka';
$string['language.en'] = 'englanti';
$string['language.es'] = 'espanja / kastilian';
$string['language.et'] = 'viro';
$string['language.eu'] = 'baski';
$string['language.fa'] = 'farsi; persia';
$string['language.fi'] = 'suomi';
$string['language.fj'] = 'fidži';
$string['language.fo'] = 'fääri';
$string['language.fr'] = 'ranska';
$string['language.fy'] = 'friisi';
$string['language.ga'] = 'iiri';
$string['language.gd'] = 'gaeli';
$string['language.gl'] = 'galicia';
$string['language.gv'] = 'manx';
$string['language.he'] = 'heprea';
$string['language.hi'] = 'hindi';
$string['language.hr'] = 'kroatia';
$string['language.ht'] = 'haiti';
$string['language.hu'] = 'unkari';
$string['language.hy'] = 'armenia';
$string['language.id'] = 'indonesia';
$string['language.is'] = 'islanti';
$string['language.it'] = 'italia';
$string['language.ja'] = 'japani';
$string['language.jv'] = 'jaava';
$string['language.ka'] = 'georgia';
$string['language.kg'] = 'kongo';
$string['language.ko'] = 'korea';
$string['language.ku'] = 'kurdi';
$string['language.kw'] = 'korni';
$string['language.ky'] = 'kirgiisi';
$string['language.lb'] = 'luxemburg';
$string['language.li'] = 'limburg';
$string['language.ln'] = 'lingala';
$string['language.lt'] = 'liettua';
$string['language.lv'] = 'latvia';
$string['language.mg'] = 'malagassi';
$string['language.mk'] = 'makedonia';
$string['language.mn'] = 'mongoli';
$string['language.mo'] = 'moldavia';
$string['language.ms'] = 'malaiji';
$string['language.mt'] = 'malta';
$string['language.my'] = 'burma';
$string['language.nb'] = 'norja (bokmål)';
$string['language.ne'] = 'nepali';
$string['language.nl'] = 'hollanti';
$string['language.nn'] = 'norja (nynorsk)';
$string['language.no'] = 'norja';
$string['language.pl'] = 'puola';
$string['language.pt'] = 'portugali';
$string['language.rm'] = 'retoromaani';
$string['language.ro'] = 'romania';
$string['language.ru'] = 'venäjä';
$string['language.r0'] = 'Romany'; // doesn't really have an ISO 369-1 code...
$string['language.sc'] = 'sardi';
$string['language.se'] = 'saame, pohjois-';
$string['language.sk'] = 'slovakki';
$string['language.sl'] = 'sloveeni';
$string['language.so'] = 'somali';
$string['language.sq'] = 'albania';
$string['language.sr'] = 'serbia';
$string['language.sv'] = 'ruotsi';
$string['language.sw'] = 'swahili';
$string['language.tk'] = 'turkmeeni';
$string['language.tr'] = 'turkki';
$string['language.ty'] = 'tahiti';
$string['language.uk'] = 'ukraina';
$string['language.ur'] = 'urdu';
$string['language.uz'] = 'uzbekki';
$string['language.vi'] = 'vietnam';
$string['language.yi'] = 'jiddiš';
$string['language.zh'] = 'kiina';
$string['language.cu'] = 'kirkkoslaavi';
$string['language.eo'] = 'esperanto';
$string['language.la'] = 'latina';
$string['language.oc'] = 'oksitaani';
$string['language.vo'] = 'volapük';
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
$string['country.ad'] = 'Andorra';
$string['country.ae'] = 'Arabiemiirikunnat';
$string['country.af'] = 'Afganistan';
$string['country.ag'] = 'Antigua ja Barbuda';
$string['country.al'] = 'Albania';
$string['country.am'] = 'Armenia';
$string['country.ao'] = 'Angola';
$string['country.ar'] = 'Argentiina';
$string['country.at'] = 'Itävalta';
$string['country.au'] = 'Australia';
$string['country.az'] = 'Azerbaidžan';
$string['country.ba'] = 'Bosnia ja Hertsegovina';
$string['country.bb'] = 'Barbados';
$string['country.bd'] = 'Bangladesh';
$string['country.be'] = 'Belgia';
$string['country.bf'] = 'Burkina Faso';
$string['country.bg'] = 'Bulgaria';
$string['country.bh'] = 'Bahrain';
$string['country.bi'] = 'Burundi';
$string['country.bj'] = 'Benin';
$string['country.bn'] = 'Brunei';
$string['country.bo'] = 'Bolivia';
$string['country.br'] = 'Brasilia';
$string['country.bs'] = 'Bahama';
$string['country.bt'] = 'Bhutan';
$string['country.bw'] = 'Botswana';
$string['country.by'] = 'Valko-Venäjä';
$string['country.bz'] = 'Belize';
$string['country.ca'] = 'Kanada';
$string['country.cd'] = 'Kongon demokraattinen tasavalta';
$string['country.cf'] = 'Keski-Afrikan tasavalta';
$string['country.cg'] = 'Kongon tasavalta';
$string['country.ch'] = 'Sveitsi';
$string['country.ci'] = 'Norsunluurannikko';
$string['country.cl'] = 'Chile';
$string['country.cm'] = 'Kamerun';
$string['country.cn'] = 'Kiina';
$string['country.co'] = 'Kolumbia';
$string['country.cr'] = 'Costa Rica';
$string['country.cu'] = 'Kuuba';
$string['country.cv'] = 'Kap Verde';
$string['country.cy'] = 'Kypros';
$string['country.cz'] = 'Tšekin tasavalta';
$string['country.de'] = 'Saksa';
$string['country.dj'] = 'Djibouti';
$string['country.dk'] = 'Tanska';
$string['country.dm'] = 'Dominica';
$string['country.do'] = 'Dominikaaninen tasavalta';
$string['country.dz'] = 'Algeria';
$string['country.ec'] = 'Ecuador';
$string['country.ee'] = 'Viro';
$string['country.eg'] = 'Egypti';
$string['country.er'] = 'Eritrea';
$string['country.es'] = 'Espanja';
$string['country.et'] = 'Etiopia';
$string['country.fi'] = 'Suomi';
$string['country.fj'] = 'Fidži';
$string['country.fm'] = 'Mikronesia';
$string['country.fr'] = 'Ranska';
$string['country.ga'] = 'Gabon';
$string['country.gb'] = 'Yhdistynyt kuningaskunta';
$string['country.gd'] = 'Granada';
$string['country.ge'] = 'Georgia';
$string['country.gh'] = 'Ghana';
$string['country.gl'] = 'Grönlanti';
$string['country.gm'] = 'Gambia';
$string['country.gn'] = 'Guinea';
$string['country.gq'] = 'Päiväntasaajan Guinea';
$string['country.gr'] = 'Kreikka';
$string['country.gt'] = 'Guatemala';
$string['country.gw'] = 'Guinea-Bissau';
$string['country.gy'] = 'Guyana';
$string['country.hn'] = 'Honduras';
$string['country.hr'] = 'Kroatia';
$string['country.ht'] = 'Haiti';
$string['country.hu'] = 'Unkari';
$string['country.id'] = 'Indonesia';
$string['country.ie'] = 'Irlanti';
$string['country.il'] = 'Israel';
$string['country.in'] = 'Intia';
$string['country.iq'] = 'Irak';
$string['country.ir'] = 'Iran';
$string['country.is'] = 'Islanti';
$string['country.it'] = 'Italia';
$string['country.jm'] = 'Jamaika';
$string['country.jo'] = 'Jordania';
$string['country.jp'] = 'Japani';
$string['country.ke'] = 'Kenia';
$string['country.kg'] = 'Kirgisistan';
$string['country.kh'] = 'Kambodža';
$string['country.ki'] = 'Kiribati';
$string['country.km'] = 'Komorit';
$string['country.kn'] = 'Saint Kitts ja Nevis';
$string['country.kp'] = 'Pohjois-Korean';
$string['country.kr'] = 'Etelä-Korea';
$string['country.kw'] = 'Kuwait';
$string['country.kz'] = 'Kazakstan';
$string['country.la'] = 'Laos';
$string['country.lb'] = 'Libanon';
$string['country.lc'] = 'Saint Lucia';
$string['country.li'] = 'Liechtenstein';
$string['country.lk'] = 'Sri Lanka';
$string['country.lr'] = 'Liberia';
$string['country.ls'] = 'Lesotho';
$string['country.lt'] = 'Liettua';
$string['country.lu'] = 'Luxemburg';
$string['country.lv'] = 'Latvia';
$string['country.ly'] = 'Libya';
$string['country.ma'] = 'Marokko';
$string['country.mc'] = 'Monaco';
$string['country.md'] = 'Moldova';
$string['country.me'] = 'Montenegro';
$string['country.mg'] = 'Madagaskar';
$string['country.mh'] = 'Marshallinsaaret';
$string['country.mk'] = 'Entinen Jugoslavian tasavalta Makedonia';
$string['country.ml'] = 'Mali';
$string['country.mm'] = 'Myanmar';
$string['country.mn'] = 'Mongolia';
$string['country.mr'] = 'Mauritania';
$string['country.mt'] = 'Malta';
$string['country.mu'] = 'Mauritius';
$string['country.mv'] = 'Malediivit';
$string['country.mw'] = 'Malawi';
$string['country.mx'] = 'Meksiko';
$string['country.my'] = 'Malesia';
$string['country.mz'] = 'Mosambik';
$string['country.na'] = 'Namibia';
$string['country.ne'] = 'Niger';
$string['country.ng'] = 'Nigeria';
$string['country.ni'] = 'Nicaragua';
$string['country.nl'] = 'Alankomaat';
$string['country.no'] = 'Norja';
$string['country.np'] = 'Nepal';
$string['country.nr'] = 'Nauru';
$string['country.nu'] = 'Niue';
$string['country.nz'] = 'Uusi-Seelanti';
$string['country.om'] = 'Oman';
$string['country.pa'] = 'Panama';
$string['country.pe'] = 'Peru';
$string['country.pg'] = 'Papua-Uusi-Guinea';
$string['country.ph'] = 'Filippiinit';
$string['country.pk'] = 'Pakistan';
$string['country.pl'] = 'Puola';
$string['country.pr'] = 'Puerto Rico';
$string['country.ps'] = 'Palestiinalaisten kansallinen hallinto';
$string['country.pt'] = 'Portugali';
$string['country.pw'] = 'Palau';
$string['country.py'] = 'Paraguay';
$string['country.qa'] = 'Qatar';
$string['country.ro'] = 'Romania';
$string['country.rs'] = 'Serbia';
$string['country.ru'] = 'Venäjä';
$string['country.rw'] = 'Ruanda';
$string['country.sa'] = 'Saudi-Arabia';
$string['country.sb'] = 'Salomonsaaret';
$string['country.sc'] = 'Seychellit';
$string['country.sd'] = 'Sudan';
$string['country.se'] = 'Ruotsi';
$string['country.sg'] = 'Singapore';
$string['country.si'] = 'Slovenia';
$string['country.sk'] = 'Slovakia';
$string['country.sl'] = 'Sierra Leone';
$string['country.sm'] = 'San Marino';
$string['country.sn'] = 'Senegal';
$string['country.so'] = 'Somalia';
$string['country.sr'] = 'Surinam';
$string['country.st'] = 'São Tomé ja Príncipe';
$string['country.sv'] = 'El Salvador';
$string['country.sy'] = 'Syyria';
$string['country.sz'] = 'Swazimaa';
$string['country.td'] = 'Tšad';
$string['country.tg'] = 'Togo';
$string['country.th'] = 'Thaimaa';
$string['country.tj'] = 'Tadžikistan';
$string['country.tl'] = 'Itä-Timor';
$string['country.tm'] = 'Turkmenistan';
$string['country.tn'] = 'Tunisia';
$string['country.to'] = 'Tonga';
$string['country.tr'] = 'Turkki';
$string['country.tt'] = 'Trinidad ja Tobago';
$string['country.tv'] = 'Tuvalu';
$string['country.tz'] = 'Tansania';
$string['country.ua'] = 'Ukraina';
$string['country.ug'] = 'Uganda';
$string['country.us'] = 'Yhdysvallat';
$string['country.uy'] = 'Uruguay';
$string['country.uz'] = 'Uzbekistan';
$string['country.va'] = 'Pyhä istuin (Vatikaanivaltio)';
$string['country.vc'] = 'Saint Vincent ja Grenadiinit';
$string['country.ve'] = 'Venezuela';
$string['country.vn'] = 'Vietnam';
$string['country.vu'] = 'Vanautu';
$string['country.ws'] = 'Samoa';
$string['country.ye'] = 'Jemen';
$string['country.za'] = 'Etelä-Afrikka';
$string['country.zm'] = 'Sambia';
$string['country.zw'] = 'Zimbabwe';

// List of nationalities based on the ISO 3166-1-alpha-2 filtered by Europass country list
// (http://europass.cedefop.europa.eu/TechnicalResources/XML/xsd/included_schemas/EUROPASS_Nationalities_V1.0.xsd)
$string['nationality.ad'] = 'andorralainen';
$string['nationality.ae'] = 'Yhdistyneiden arabiemiirikuntien kansalainen';
$string['nationality.af'] = 'afganistanilainen';
$string['nationality.ag'] = '';
$string['nationality.al'] = 'albanialainen';
$string['nationality.am'] = 'armenialainen';
$string['nationality.ao'] = 'angolalainen';
$string['nationality.ar'] = 'argentinialainen';
$string['nationality.at'] = 'itävaltalainen';
$string['nationality.au'] = 'australialainen';
$string['nationality.az'] = 'azerbaidžanilainen';
$string['nationality.ba'] = 'bosnia-herzegovinalainen';
$string['nationality.bb'] = 'barbadoslainen';
$string['nationality.bd'] = 'bangladeshilainen';
$string['nationality.be'] = 'belgialainen';
$string['nationality.bf'] = 'burkinafasolainen';
$string['nationality.bg'] = 'bulgarialinen';
$string['nationality.bh'] = 'bahrainilainen';
$string['nationality.bi'] = 'burundilainen';
$string['nationality.bj'] = 'beniniläinen';
$string['nationality.bn'] = 'bruneilainen';
$string['nationality.bo'] = 'bolivialainen';
$string['nationality.br'] = 'brasilialainen';
$string['nationality.bs'] = 'bahamalainen';
$string['nationality.bt'] = 'bhutanilainen';
$string['nationality.bw'] = 'botswanalainen';
$string['nationality.by'] = 'valkovenäläinen';
$string['nationality.bz'] = 'belizeläinen';
$string['nationality.ca'] = 'kanadalainen';
$string['nationality.cd'] = 'Kongon tasavallan kansalainen (kongolainen)';
$string['nationality.cf'] = 'keskiafrikkalainen';
$string['nationality.cg'] = 'Kongon demokraattisen tasavallan kansalainen (kongolainen)';
$string['nationality.ch'] = 'sveitsiläinen';
$string['nationality.ci'] = 'norsunluurannikkolainen';
$string['nationality.cl'] = 'chileläinen';
$string['nationality.cm'] = 'kamerunialainen';
$string['nationality.cn'] = 'kiinalainen';
$string['nationality.co'] = 'kolumbialainen';
$string['nationality.cr'] = 'costaricalainen';
$string['nationality.cu'] = 'kuubalainen';
$string['nationality.cv'] = 'kapverdeläinen';
$string['nationality.cy'] = 'kyproslainen';
$string['nationality.cz'] = 'tsekkiläinen';
$string['nationality.de'] = 'saksalainen';
$string['nationality.dj'] = 'djiboutilainen';
$string['nationality.dk'] = 'tanskalainen';
$string['nationality.dm'] = 'dominicalainen';
$string['nationality.do'] = 'Dominikaanisen tasavallan kansalainen';
$string['nationality.dz'] = 'algerialainen';
$string['nationality.ec'] = 'ecuadorilainen';
$string['nationality.ee'] = 'virolainen';
$string['nationality.eg'] = 'egyptiläinen';
$string['nationality.er'] = 'eritrealainen';
$string['nationality.es'] = 'espanjalainen';
$string['nationality.et'] = 'etiopialainen';
$string['nationality.fi'] = 'suomalainen';
$string['nationality.fj'] = 'fijiläinen';
$string['nationality.fm'] = 'mikronesialainen';
$string['nationality.fr'] = 'ranskalainen';
$string['nationality.ga'] = 'gabonilainen';
$string['nationality.gb'] = 'brittiläinen, Iso-Britannian kansalainen';
$string['nationality.gd'] = 'granadalainen';
$string['nationality.ge'] = 'georgialainen';
$string['nationality.gh'] = 'ghanalainen';
$string['nationality.gl'] = 'grönlantilainen';
$string['nationality.gm'] = 'gambialainen';
$string['nationality.gn'] = 'guinealainen';
$string['nationality.gq'] = 'Päiväntasaajan Guinean kansalainen';
$string['nationality.gr'] = 'kreikkalainen';
$string['nationality.gt'] = 'guatemalalainen';
$string['nationality.gw'] = 'guinea-bissaulainen';
$string['nationality.gy'] = 'guyanalainen';
$string['nationality.hn'] = 'hondurasilainen';
$string['nationality.hr'] = 'kroatialinen';
$string['nationality.ht'] = 'haitilainen';
$string['nationality.hu'] = 'unkarilainen';
$string['nationality.id'] = 'indonesialainen';
$string['nationality.ie'] = 'irlantilainen';
$string['nationality.il'] = 'israelilainen';
$string['nationality.in'] = 'intialainen';
$string['nationality.iq'] = 'irakilainen';
$string['nationality.ir'] = 'iranilainen';
$string['nationality.is'] = 'islantilainen';
$string['nationality.it'] = 'italialainen';
$string['nationality.jm'] = 'jamaikalainen';
$string['nationality.jo'] = 'jordanialainen';
$string['nationality.jp'] = 'japanilainen';
$string['nationality.ke'] = 'kenialainen';
$string['nationality.kg'] = 'kirgisialainen';
$string['nationality.kh'] = 'kambodžalainen';
$string['nationality.ki'] = 'kiribatilainen';
$string['nationality.km'] = 'komorilainen';
$string['nationality.kn'] = 'sainkittsnevisläinen,  Saint Kitts ja Neviksen kansalainen';
$string['nationality.kp'] = 'pohjoiskorealainen (Korean kansantasavallan kansalainen)';
$string['nationality.kr'] = 'eteläkorealainen (Korean tasavallan kansalainen)';
$string['nationality.kw'] = 'kuwaitilainen';
$string['nationality.kz'] = 'kazakstanilainen';
$string['nationality.la'] = 'laoslainen';
$string['nationality.lb'] = 'libanonilainen';
$string['nationality.lc'] = 'saintlucialainen';
$string['nationality.li'] = 'lichtensteiniläinen';
$string['nationality.lk'] = 'srilankalainen';
$string['nationality.lr'] = 'liberialainen';
$string['nationality.ls'] = 'lesotholainen';
$string['nationality.lt'] = 'liettualainen';
$string['nationality.lu'] = 'luxenburgilainen';
$string['nationality.lv'] = 'latvialainen';
$string['nationality.ly'] = 'libyalainen';
$string['nationality.ma'] = 'marokkolainen';
$string['nationality.mc'] = 'monacolainen';
$string['nationality.md'] = 'moldovolainen';
$string['nationality.me'] = 'montenegrolainen';
$string['nationality.mg'] = 'madakaskarilainen';
$string['nationality.mh'] = 'marshallinsaarelainen';
$string['nationality.mk'] = 'entisen Jugoslavian tasavallan Makedonian';
$string['nationality.ml'] = 'malilailnen';
$string['nationality.mm'] = 'burmalainen (myanmarilainen)';
$string['nationality.mn'] = 'mongolialainen';
$string['nationality.mr'] = 'mauritanialainen';
$string['nationality.mt'] = 'maltalainen';
$string['nationality.mu'] = 'mauritiuslainen';
$string['nationality.mv'] = 'malediivilainen';
$string['nationality.mw'] = 'malawilainen';
$string['nationality.mx'] = 'meksikolainen';
$string['nationality.my'] = 'malesialainen';
$string['nationality.mz'] = 'mosambikilainen';
$string['nationality.na'] = 'namibialainen';
$string['nationality.ne'] = 'nigeriläinen';
$string['nationality.ng'] = 'nigerialainen';
$string['nationality.ni'] = 'nicaragualainen';
$string['nationality.nl'] = 'alankomaalainen';
$string['nationality.no'] = 'norjalainen';
$string['nationality.np'] = 'nepalilainen';
$string['nationality.nr'] = 'naurulainen';
$string['nationality.nu'] = 'niuelainen';
$string['nationality.nz'] = 'uusiseelantilainen';
$string['nationality.om'] = 'omanilainen';
$string['nationality.pa'] = 'panamalainen';
$string['nationality.pe'] = 'perulainen';
$string['nationality.pg'] = 'papuauusiguinealainen, Papua-Uusi-Guinean kansalainen';
$string['nationality.ph'] = 'filippiiniläinen';
$string['nationality.pk'] = 'pakistanilainen';
$string['nationality.pl'] = 'puolalainen';
$string['nationality.pr'] = 'puertoricolainen';
$string['nationality.ps'] = 'palestiinalainen';
$string['nationality.pt'] = 'portugalilainen';
$string['nationality.pw'] = 'palaulainen';
$string['nationality.py'] = 'paraguaylainen';
$string['nationality.qa'] = 'qatarilainen';
$string['nationality.ro'] = 'romanialainen';
$string['nationality.rs'] = 'serbialainen';
$string['nationality.ru'] = 'venäläinen';
$string['nationality.rw'] = 'ruandalainen';
$string['nationality.sa'] = 'saudiarabialainen';
$string['nationality.sb'] = 'salomonsaarelainen';
$string['nationality.sc'] = 'seychelliläinen, Seychellien kansalainen';
$string['nationality.sd'] = 'sudanilainen';
$string['nationality.se'] = 'ruotsalainen';
$string['nationality.sg'] = 'singaporilainen';
$string['nationality.si'] = 'slovenialainen';
$string['nationality.sk'] = 'slovakialainen';
$string['nationality.sl'] = 'sierraleonelainen';
$string['nationality.sm'] = 'sanmarinolainen';
$string['nationality.sn'] = 'senegalilainen';
$string['nationality.so'] = 'somalialainen';
$string['nationality.sr'] = 'surinamilainen';
$string['nationality.st'] = 'sãotométríncipeläinen,  São Tomé ja Príncipen kansalainen';
$string['nationality.sv'] = 'salvadorilainen';
$string['nationality.sy'] = 'syyrialainen';
$string['nationality.sz'] = 'swazimaalainen';
$string['nationality.td'] = 'tšadilainen';
$string['nationality.tg'] = 'togolainen';
$string['nationality.th'] = 'thaimaalainen';
$string['nationality.tj'] = 'tadžikistanilainen';
$string['nationality.tl'] = 'timorilainen';
$string['nationality.tm'] = 'turkmenistanilainen';
$string['nationality.tn'] = 'tunisialainen';
$string['nationality.to'] = 'tongalainen';
$string['nationality.tr'] = 'turkkilainen';
$string['nationality.tt'] = 'Trinidadin ja Tobagon kansalainen';
$string['nationality.tv'] = 'tuvalulainen';
$string['nationality.tz'] = 'tansanialainen';
$string['nationality.ua'] = 'ukrainalainen';
$string['nationality.ug'] = 'ugandalainen';
$string['nationality.us'] = 'yhdysvaltalainen, amerikkalainen';
$string['nationality.uy'] = 'uruguaylainen';
$string['nationality.uz'] = 'uzbekistasnilainen';
$string['nationality.va'] = 'Vatikaanin kaupunkivaltion kansalainen';
$string['nationality.vc'] = 'saintvincentgrenadiiniläinen, Saint Vincent ja Grenadiinien kansalainen';
$string['nationality.ve'] = 'venezuelalalinen';
$string['nationality.vn'] = 'vietnamilainen';
$string['nationality.vu'] = 'vanuatulainen';
$string['nationality.ws'] = 'samoalainen';
$string['nationality.ye'] = 'jemeniläinen';
$string['nationality.za'] = 'eteläarfikkalainen';
$string['nationality.zm'] = 'sambialainen';
$string['nationality.zw'] = 'zimbabwelainen';

?>
