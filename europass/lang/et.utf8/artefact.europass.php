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
$string['europassCV'] = 'Europassi curriculum vitae (CV)';
$string['europassLP'] = 'Europassi keelepassi';
$string['photograph'] = 'Foto';
$string['photographdesc'] = 'Photo will be embeded in Europass XML';
$string['phototoolarge'] = 'File too big. Filesize must not exceed 100 kB.';
$string['exportstep2'] = '2 - Document format';
$string['selectfiletype'] = 'Select file and date format';
$string['exportdate'] = 'Date';
$string['internaldateformat'] = 'Internal Date Format';
$string['selectinternaldatedesc'] = 'Date format used in Mahara';
$string['internaldate-dmy11'] = 'pp/kk/aaaa';
$string['internaldate-dmy12'] = 'pp.kk.aaaa';
$string['internaldate-dmy13'] = 'pp-kk-aaaa';
$string['internaldate-dmy21'] = 'pp/kk/aa';
$string['internaldate-dmy22'] = 'pp.kk.aa';
$string['internaldate-dmy23'] = 'pp-kk-aa';
$string['internaldate-mdy11'] = 'kk/pp/aaaa';
$string['internaldate-mdy12'] = 'kk.pp.aaaa';
$string['internaldate-mdy13'] = 'kk-pp-aaaa';
$string['internaldate-mdy21'] = 'kk/pp/aa';
$string['internaldate-mdy22'] = 'kk.pp.aa';
$string['internaldate-mdy23'] = 'kk-pp-aa';
$string['internaldate-ymd11'] = 'aaaa/kk/pp';
$string['internaldate-ymd12'] = 'aaaa.kk.pp';
$string['internaldate-ymd13'] = 'aaaa-kk-pp';
$string['internaldate-ymd21'] = 'aa/kk/pp';
$string['internaldate-ymd22'] = 'aa.kk.pp';
$string['internaldate-ymd23'] = 'aa-kk-pp';
$string['internaldate-yonly'] = 'aaaa';
$string['internaldate-other'] = 'other';
$string['externaldateformat'] = 'External Date Format';
$string['selectexternaldatedesc'] = 'Date format used in export';
$string['externaldate-numeric-long'] = 'pp/kk/aaaa';
$string['externaldate-text-long'] = 'pp. kuu aaaa';
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
$string['identification'] = 'Isikuandmed';
$string['identification-birthdate'] = 'Sünniaeg';
$string['identification-birthplace'] = 'Sünnikoht';
$string['identification-lastname'] = 'Perekonnanimi';
$string['identification-firstname'] = 'Eesnimi';
$string['identification-addressLine'] = 'Tänav / maja number';
$string['identification-municipality'] = 'Linn';
$string['identification-postalCode'] = 'Postiindeks';
$string['identification-country'] = 'Riik';
$string['identification-contactinfo-telephone'] = 'Telefon(id)';
$string['identification-contactinfo-mobile'] = 'Mobiil';
$string['identification-contactinfo-fax'] = 'Faks';
$string['identification-contactinfo-email'] = 'E-post(id)';
$string['identification-nationality'] = 'Kodakondsus';
$string['identification-gender'] = 'Sugu';

// Europass CV - STEP 2
$string['application'] = 'Soovitud töökoht / kutseala';

// Europass CV - STEP 3
$string['workexperience'] = 'Töökogemus';

// Europass CV - STEP 4
$string['education'] = 'Hariduskäik ja koolitus';

// Europass CV - STEP 5
$string['mothertongue'] = 'Emakeel(ed)';
$string['otherlanguage'] = 'Teised keel(ed)';

$string['language-foreign-listening'] = 'Kuulamine';
$string['language-foreign-listening-th'] = 'Kuulamine';
$string['language-foreign-reading'] = 'Lugemine';
$string['language-foreign-reading-th'] = 'Lugemine';
$string['language-foreign-spokeninteraction'] = 'Suuline suhtlus';
$string['language-foreign-spokeninteraction-th'] = 'Suuline<br>suhtlus';
$string['language-foreign-spokenproduction'] = 'Suuline esitus';
$string['language-foreign-spokenproduction-th'] = 'Suuline<br>esitus';
$string['language-foreign-writing'] = 'Kirjutamine';
$string['language-foreign-writing-th'] = 'Kirjutamine';
$string['language-foreign-CEF-level'] = 'Euroopa Nõukogu keeleoskustasemete süsteem';

$string['language-foreign-level.A1'] = 'Algeline keelekasutus (A1)';
$string['language-foreign-level.A2'] = 'Algeline keelekasutus (A2)';
$string['language-foreign-level.B1'] = 'Iseseisev keelekasutus (B1)';
$string['language-foreign-level.B2'] = 'Iseseisev keelekasutus (B2)';
$string['language-foreign-level.C1'] = 'Vaba keelekasutus (C1)';
$string['language-foreign-level.C2'] = 'Vaba keelekasutus (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Juhiload';
$string['skills-and-competences'] = 'Isiklikud oskused';
$string['socialskill'] = 'Sotsiaalsed oskused';
$string['organisationalskill'] = 'Organisatoorsed oskused';
$string['technicalskill'] = 'Tehnilised oskused';
$string['computerskill'] = 'Arvutioskused';
$string['artisticskill'] = 'Kunstioskused';
$string['otherskill'] = 'Muud oskused';
$string['additionalinfo'] = 'Lisainformatsioon';
$string['annexes'] = 'Lisad';

// Europass LP - STEP 2
$string['language-certificates'] = 'Diplom(id) ja tunnistus(ed)';
$string['diploma-title'] = 'Nimetus';
$string['diploma-awardingBody'] = 'Väljastanud asutus';
$string['diploma-date'] = 'Kuupäev';
$string['diploma-level'] = 'Euroopa tase';
$string['language-experiences'] = 'Keelelised kogemused';
$string['experiences-period-from'] = 'Alates';
$string['experiences-period-to'] = 'Kuni';

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
$string['language.af'] = 'afrikaani';
$string['language.an'] = 'aragooni';
$string['language.ar'] = 'araabia';
$string['language.as'] = 'assami';
$string['language.az'] = 'aserbaidžaani';
$string['language.be'] = 'valgevene';
$string['language.bg'] = 'bulgaaria';
$string['language.bn'] = 'bengali';
$string['language.bo'] = 'tiibeti';
$string['language.br'] = 'bretooni';
$string['language.bs'] = 'bosnia';
$string['language.ca'] = 'katalaani';
$string['language.ce'] = 'tšetšeeni';
$string['language.co'] = 'korsika';
$string['language.cs'] = 'tšehhi';
$string['language.cy'] = 'kõmri';
$string['language.da'] = 'taani';
$string['language.de'] = 'saksa';
$string['language.el'] = 'kreeka';
$string['language.en'] = 'inglise';
$string['language.es'] = 'hispaania / kastiilia';
$string['language.et'] = 'eesti';
$string['language.eu'] = 'baski';
$string['language.fa'] = 'pärsia';
$string['language.fi'] = 'soome';
$string['language.fj'] = 'fidži';
$string['language.fo'] = 'fääri';
$string['language.fr'] = 'prantsuse';
$string['language.fy'] = 'läänefriisi';
$string['language.ga'] = 'iiri';
$string['language.gd'] = 'gaeli';
$string['language.gl'] = 'galeegi';
$string['language.gv'] = 'mänksi';
$string['language.he'] = 'heebrea';
$string['language.hi'] = 'hindi';
$string['language.hr'] = 'horvaadi';
$string['language.ht'] = 'haiti; haiti kreooli';
$string['language.hu'] = 'ungari';
$string['language.hy'] = 'armeenia';
$string['language.id'] = 'indoneesia';
$string['language.is'] = 'islandi';
$string['language.it'] = 'itaalia';
$string['language.ja'] = 'jaapani';
$string['language.jv'] = 'jaava';
$string['language.ka'] = 'gruusia';
$string['language.kg'] = 'kongo';
$string['language.ko'] = 'korea';
$string['language.ku'] = 'kurdi';
$string['language.kw'] = 'korni';
$string['language.ky'] = 'kirgiisi';
$string['language.lb'] = 'letseburgi';
$string['language.li'] = 'limburgi';
$string['language.ln'] = 'lingala';
$string['language.lt'] = 'leedu';
$string['language.lv'] = 'läti';
$string['language.mg'] = 'malagassi';
$string['language.mk'] = 'makedoonia';
$string['language.mn'] = 'mongoli';
$string['language.mo'] = 'moldova';
$string['language.ms'] = 'malai';
$string['language.mt'] = 'malta';
$string['language.my'] = 'birma';
$string['language.nb'] = 'norra (bokmål)';
$string['language.ne'] = 'nepaali';
$string['language.nl'] = 'hollandi';
$string['language.nn'] = 'noora (uusnorra)';
$string['language.no'] = 'norra';
$string['language.pl'] = 'poola';
$string['language.pt'] = 'portugali';
$string['language.rm'] = 'retoromaani';
$string['language.ro'] = 'rumeenia';
$string['language.ru'] = 'vene';
$string['language.r0'] = 'Romany'; // doesn't really have an ISO 369-1 code...
$string['language.sc'] = 'sardi';
$string['language.se'] = 'põhjasaami';
$string['language.sk'] = 'slovaki';
$string['language.sl'] = 'sloveeni';
$string['language.so'] = 'somaali';
$string['language.sq'] = 'albaania';
$string['language.sr'] = 'serbia';
$string['language.sv'] = 'rootsi';
$string['language.sw'] = 'suahiili';
$string['language.tk'] = 'turkmeeni';
$string['language.tr'] = 'türgi';
$string['language.ty'] = 'tahiti';
$string['language.uk'] = 'ukraina';
$string['language.ur'] = 'urdu';
$string['language.uz'] = 'usbeki';
$string['language.vi'] = 'vietnami';
$string['language.yi'] = 'jidiši';
$string['language.zh'] = 'hiina';
$string['language.cu'] = 'kirikuslaavi';
$string['language.eo'] = 'esperanto';
$string['language.la'] = 'ladina';
$string['language.oc'] = 'provansi (pärast 1500)';
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
$string['country.ae'] = 'Araabia Ühendemiraadid';
$string['country.af'] = 'Afganistan';
$string['country.ag'] = 'Antigua ja Barbuda';
$string['country.al'] = 'Albaania';
$string['country.am'] = 'Armeenia';
$string['country.ao'] = 'Angola';
$string['country.ar'] = 'Argentina';
$string['country.at'] = 'Austria';
$string['country.au'] = 'Austraalia';
$string['country.az'] = 'Aserbaidžaan';
$string['country.ba'] = 'Bosnia ja Hertsegoviina';
$string['country.bb'] = 'Barbados';
$string['country.bd'] = 'Bangladesh';
$string['country.be'] = 'Belgia';
$string['country.bf'] = 'Burkina Faso';
$string['country.bg'] = 'Bulgaaria';
$string['country.bh'] = 'Bahrain';
$string['country.bi'] = 'Burundi';
$string['country.bj'] = 'Benin';
$string['country.bn'] = 'Brunei';
$string['country.bo'] = 'Boliivia';
$string['country.br'] = 'Brasiilia';
$string['country.bs'] = 'Bahama';
$string['country.bt'] = 'Bhutan';
$string['country.bw'] = 'Botswana';
$string['country.by'] = 'Valgevene';
$string['country.bz'] = 'Belize';
$string['country.ca'] = 'Kanada';
$string['country.cd'] = 'Kongo Demokraatlik Vabariik';
$string['country.cf'] = 'Kesk-Aafrika Vabariik';
$string['country.cg'] = 'Kongo Vabariik';
$string['country.ch'] = 'Šveits';
$string['country.ci'] = 'Côte d´Ivoire';
$string['country.cl'] = 'Tšiili';
$string['country.cm'] = 'Kamerun';
$string['country.cn'] = 'Hiina';
$string['country.co'] = 'Colombia';
$string['country.cr'] = 'Costa Rica';
$string['country.cu'] = 'Kuuba';
$string['country.cv'] = 'Cabo Verde';
$string['country.cy'] = 'Küpros';
$string['country.cz'] = 'Tšehhi Vabariik';
$string['country.de'] = 'Saksamaa';
$string['country.dj'] = 'Djibouti';
$string['country.dk'] = 'Taani';
$string['country.dm'] = 'Dominica';
$string['country.do'] = 'Dominikaani Vabariik';
$string['country.dz'] = 'Alžeeria';
$string['country.ec'] = 'Ecuador';
$string['country.ee'] = 'Eesti';
$string['country.eg'] = 'Egiptus';
$string['country.er'] = 'Eritrea';
$string['country.es'] = 'Hispaania';
$string['country.et'] = 'Etioopia';
$string['country.fi'] = 'Soome';
$string['country.fj'] = 'Fidži';
$string['country.fm'] = 'Mikroneesia';
$string['country.fr'] = 'Prantsusmaa';
$string['country.ga'] = 'Gabon';
$string['country.gb'] = 'Ühendkuningriik';
$string['country.gd'] = 'Grenada';
$string['country.ge'] = 'Georgia';
$string['country.gh'] = 'Ghana';
$string['country.gl'] = 'Gröönimaa';
$string['country.gm'] = 'Gambia';
$string['country.gn'] = 'Guinea';
$string['country.gq'] = 'Ekvatoriaal-Guinea';
$string['country.gr'] = 'Kreeka';
$string['country.gt'] = 'Guatemala';
$string['country.gw'] = 'Guinea-Bissau';
$string['country.gy'] = 'Guyana';
$string['country.hn'] = 'Honduras';
$string['country.hr'] = 'Horvaatia';
$string['country.ht'] = 'Haiti';
$string['country.hu'] = 'Ungari';
$string['country.id'] = 'Indoneesia';
$string['country.ie'] = 'Iirimaa';
$string['country.il'] = 'Iisrael';
$string['country.in'] = 'India';
$string['country.iq'] = 'Iraak';
$string['country.ir'] = 'Iraan';
$string['country.is'] = 'Island';
$string['country.it'] = 'Itaalia';
$string['country.jm'] = 'Jamaica';
$string['country.jo'] = 'Jordaania';
$string['country.jp'] = 'Jaapan';
$string['country.ke'] = 'Kenya';
$string['country.kg'] = 'Kõrgõzstan';
$string['country.kh'] = 'Kambodža';
$string['country.ki'] = 'Kiribati';
$string['country.km'] = 'Komoorid';
$string['country.kn'] = 'Saint Kitts ja Nevis';
$string['country.kp'] = 'Põhja-Korea';
$string['country.kr'] = 'Lõuna-Korea';
$string['country.kw'] = 'Kuveit';
$string['country.kz'] = 'Kasahstan';
$string['country.la'] = 'Laos';
$string['country.lb'] = 'Liibanon';
$string['country.lc'] = 'Saint Lucia';
$string['country.li'] = 'Liechtenstein';
$string['country.lk'] = 'Sri Lanka';
$string['country.lr'] = 'Libeeria';
$string['country.ls'] = 'Lesotho';
$string['country.lt'] = 'Leedu';
$string['country.lu'] = 'Luksemburg';
$string['country.lv'] = 'Läti';
$string['country.ly'] = 'Liibüa';
$string['country.ma'] = 'Maroko';
$string['country.mc'] = 'Monaco';
$string['country.md'] = 'Moldova';
$string['country.me'] = 'Montenegro';
$string['country.mg'] = 'Madagaskar';
$string['country.mh'] = 'Marshalli Saared';
$string['country.mk'] = 'endine Jugoslaavia Makedoonia Vabariik';
$string['country.ml'] = 'Mali';
$string['country.mm'] = 'Myanmar';
$string['country.mn'] = 'Mongoolia';
$string['country.mr'] = 'Mauritaania';
$string['country.mt'] = 'Malta';
$string['country.mu'] = 'Mauritius';
$string['country.mv'] = 'Maldiivid';
$string['country.mw'] = 'Malawi';
$string['country.mx'] = 'Mehhiko';
$string['country.my'] = 'Malaisia';
$string['country.mz'] = 'Mosambiik';
$string['country.na'] = 'Namiibia';
$string['country.ne'] = 'Niger';
$string['country.ng'] = 'Nigeeria';
$string['country.ni'] = 'Nicaragua';
$string['country.nl'] = 'Holland';
$string['country.no'] = 'Norra';
$string['country.np'] = 'Nepal';
$string['country.nr'] = 'Nauru';
$string['country.nu'] = 'Niue';
$string['country.nz'] = 'Uus-Meremaa';
$string['country.om'] = 'Omaan';
$string['country.pa'] = 'Panama';
$string['country.pe'] = 'Peruu';
$string['country.pg'] = 'Paapua Uus-Guinea';
$string['country.ph'] = 'Filipiinid';
$string['country.pk'] = 'Pakistan';
$string['country.pl'] = 'Poola';
$string['country.pr'] = 'Puerto Rico';
$string['country.ps'] = '';
$string['country.pt'] = 'Portugal';
$string['country.pw'] = 'Belau';
$string['country.py'] = 'Paraguay';
$string['country.qa'] = 'Katar';
$string['country.ro'] = 'Rumeenia';
$string['country.rs'] = 'Serbia';
$string['country.ru'] = 'Venemaa';
$string['country.rw'] = 'Rwanda';
$string['country.sa'] = 'Saudi Araabia';
$string['country.sb'] = 'Saalomoni Saared';
$string['country.sc'] = 'Seišellid';
$string['country.sd'] = 'Sudaan';
$string['country.se'] = 'Švédsko';
$string['country.sg'] = 'Singapur';
$string['country.si'] = 'Sloveenia';
$string['country.sk'] = 'Slovakkia';
$string['country.sl'] = 'Sierra Leone';
$string['country.sm'] = 'San Marino';
$string['country.sn'] = 'Senegal';
$string['country.so'] = 'Somaalia';
$string['country.sr'] = 'Suriname';
$string['country.st'] = 'São Tomé ja Príncipe';
$string['country.sv'] = 'El Salvador';
$string['country.sy'] = 'Süüria';
$string['country.sz'] = 'Svaasimaa';
$string['country.td'] = 'Tšaad';
$string['country.tg'] = 'Togo';
$string['country.th'] = 'Tai';
$string['country.tj'] = 'Tadžikistan';
$string['country.tl'] = 'Ida-Timor';
$string['country.tm'] = 'Türkmenistan';
$string['country.tn'] = 'Tuneesia';
$string['country.to'] = 'Tonga';
$string['country.tr'] = 'Türgi';
$string['country.tt'] = 'Trinidad ja Tobago';
$string['country.tv'] = 'Tuvalu';
$string['country.tz'] = 'Tansaania';
$string['country.ua'] = 'Ukraina';
$string['country.ug'] = 'Uganda';
$string['country.us'] = 'Ameerika Ühendriigid';
$string['country.uy'] = 'Uruguay';
$string['country.uz'] = 'Usbekistan';
$string['country.va'] = 'Vatikan';
$string['country.vc'] = 'Saint Vincent ja Grenadiinid';
$string['country.ve'] = 'Venezuela';
$string['country.vn'] = 'Vietnam';
$string['country.vu'] = 'Vanuatu';
$string['country.ws'] = 'Samoa';
$string['country.ye'] = 'Jeemen';
$string['country.za'] = 'Lõuna-Aafrika';
$string['country.zm'] = 'Sambia';
$string['country.zw'] = 'Zimbabwe';

// List of nationalities based on the ISO 3166-1-alpha-2 filtered by Europass country list
// (http://europass.cedefop.europa.eu/TechnicalResources/XML/xsd/included_schemas/EUROPASS_Nationalities_V1.0.xsd)
$string['nationality.ad'] = '';
$string['nationality.ae'] = 'Araabia Ühendemiraadid';
$string['nationality.af'] = 'Afganistan';
$string['nationality.ag'] = '';
$string['nationality.al'] = 'Albaania';
$string['nationality.am'] = 'Armeenia';
$string['nationality.ao'] = 'Angola';
$string['nationality.ar'] = 'Argentina';
$string['nationality.at'] = 'Austria';
$string['nationality.au'] = 'Austraalia';
$string['nationality.az'] = 'Aserbaidžaan';
$string['nationality.ba'] = 'Bosnia ja Hertsegoviina';
$string['nationality.bb'] = '';
$string['nationality.bd'] = 'Bangladesh';
$string['nationality.be'] = 'Belgia';
$string['nationality.bf'] = 'Burkina Faso';
$string['nationality.bg'] = 'Bulgaaria';
$string['nationality.bh'] = 'Bahrain';
$string['nationality.bi'] = 'Burundi';
$string['nationality.bj'] = 'Benin';
$string['nationality.bn'] = '';
$string['nationality.bo'] = 'Boliivia';
$string['nationality.br'] = 'Brasiilia';
$string['nationality.bs'] = '';
$string['nationality.bt'] = 'Bhutan';
$string['nationality.bw'] = 'Botswana';
$string['nationality.by'] = 'Valgevene';
$string['nationality.bz'] = '';
$string['nationality.ca'] = 'Kanada';
$string['nationality.cd'] = 'Kongo DV';
$string['nationality.cf'] = 'Kesk-Aafrika Vabariik';
$string['nationality.cg'] = 'Kongo Vabariik';
$string['nationality.ch'] = 'Šveits';
$string['nationality.ci'] = 'Côte d´Ivoire';
$string['nationality.cl'] = 'Tšiili';
$string['nationality.cm'] = 'Kamerun';
$string['nationality.cn'] = 'Hiina';
$string['nationality.co'] = 'Colombia';
$string['nationality.cr'] = 'Costa Rica';
$string['nationality.cu'] = 'Kuuba';
$string['nationality.cv'] = 'Cabo Verde';
$string['nationality.cy'] = 'Küpros';
$string['nationality.cz'] = 'Tšehhi';
$string['nationality.de'] = 'Saksamaa';
$string['nationality.dj'] = 'Djibouti';
$string['nationality.dk'] = 'Taani';
$string['nationality.dm'] = '';
$string['nationality.do'] = 'Dominikaani Vabariik';
$string['nationality.dz'] = 'Alžeeria';
$string['nationality.ec'] = 'Ecuador';
$string['nationality.ee'] = 'Eesti';
$string['nationality.eg'] = 'Egiptus';
$string['nationality.er'] = 'Eritrea';
$string['nationality.es'] = 'Hispaania';
$string['nationality.et'] = 'Etioopia';
$string['nationality.fi'] = 'Soome';
$string['nationality.fj'] = 'Fidži';
$string['nationality.fm'] = 'Mehhiko';
$string['nationality.fr'] = 'Prantsusmaa';
$string['nationality.ga'] = 'Gabon';
$string['nationality.gb'] = 'Ühendkuningriik';
$string['nationality.gd'] = '';
$string['nationality.ge'] = 'Georgia';
$string['nationality.gh'] = 'Ghana';
$string['nationality.gl'] = '';
$string['nationality.gm'] = 'Gambia';
$string['nationality.gn'] = 'Guinea';
$string['nationality.gq'] = 'Ekvatoriaal-Guinea';
$string['nationality.gr'] = 'Kreeka';
$string['nationality.gt'] = 'Guatemala';
$string['nationality.gw'] = 'Guinea-Bissau';
$string['nationality.gy'] = 'Guyana';
$string['nationality.hn'] = 'Honduras';
$string['nationality.hr'] = 'Horvaatia';
$string['nationality.ht'] = 'Haiti';
$string['nationality.hu'] = 'Ungari';
$string['nationality.id'] = 'Indoneesia';
$string['nationality.ie'] = 'Iirimaa';
$string['nationality.il'] = 'Iisrael';
$string['nationality.in'] = 'India';
$string['nationality.iq'] = 'Iraak';
$string['nationality.ir'] = 'Iraan';
$string['nationality.is'] = 'Island';
$string['nationality.it'] = 'Itaalia';
$string['nationality.jm'] = 'Jamaica';
$string['nationality.jo'] = 'Jordaania';
$string['nationality.jp'] = 'Jaapan';
$string['nationality.ke'] = 'Kenya';
$string['nationality.kg'] = 'Kõrgõzstan';
$string['nationality.kh'] = 'Kambodža';
$string['nationality.ki'] = '';
$string['nationality.km'] = 'Komoorid';
$string['nationality.kn'] = '';
$string['nationality.kp'] = 'Põhja-Korea';
$string['nationality.kr'] = 'Lõuna-Korea';
$string['nationality.kw'] = 'Kuveit';
$string['nationality.kz'] = 'Kasahstan';
$string['nationality.la'] = 'Laos';
$string['nationality.lb'] = 'Liibanon';
$string['nationality.lc'] = '';
$string['nationality.li'] = 'Liechtenstein';
$string['nationality.lk'] = 'Sri Lanka';
$string['nationality.lr'] = 'Libeeria';
$string['nationality.ls'] = 'Lesotho';
$string['nationality.lt'] = 'Leedu';
$string['nationality.lu'] = 'Luksemburg';
$string['nationality.lv'] = 'Läti';
$string['nationality.ly'] = 'Liibüa';
$string['nationality.ma'] = 'Maroko';
$string['nationality.mc'] = 'Monaco';
$string['nationality.md'] = 'Moldova';
$string['nationality.me'] = '';
$string['nationality.mg'] = 'Madagaskar';
$string['nationality.mh'] = '';
$string['nationality.mk'] = 'endise Jugoslaavia Makedoonia Vabariigi ';
$string['nationality.ml'] = 'Mali';
$string['nationality.mm'] = 'Myanmar';
$string['nationality.mn'] = 'Mongoolia';
$string['nationality.mr'] = 'Mauritaania';
$string['nationality.mt'] = 'Malta';
$string['nationality.mu'] = 'Mauritius';
$string['nationality.mv'] = '';
$string['nationality.mw'] = 'Malawi';
$string['nationality.mx'] = 'Mehhiko';
$string['nationality.my'] = 'Malaisia';
$string['nationality.mz'] = 'Mosambiik';
$string['nationality.na'] = 'Namiibia';
$string['nationality.ne'] = 'Niger';
$string['nationality.ng'] = 'Nigeeria';
$string['nationality.ni'] = 'Nicaragua';
$string['nationality.nl'] = 'Holland';
$string['nationality.no'] = 'Norra';
$string['nationality.np'] = 'Nepal';
$string['nationality.nr'] = '';
$string['nationality.nu'] = '';
$string['nationality.nz'] = 'Uus-Meremaa';
$string['nationality.om'] = 'Omaan';
$string['nationality.pa'] = 'Panama';
$string['nationality.pe'] = 'Peruu';
$string['nationality.pg'] = 'Paapua Uus-Guinea';
$string['nationality.ph'] = 'Filipiinid';
$string['nationality.pk'] = 'Pakistan';
$string['nationality.pl'] = 'Poola';
$string['nationality.pr'] = 'Puerto Rico';
$string['nationality.ps'] = '';
$string['nationality.pt'] = 'Portugal';
$string['nationality.pw'] = '';
$string['nationality.py'] = 'Paraguay';
$string['nationality.qa'] = 'Katar';
$string['nationality.ro'] = 'Rumeenia';
$string['nationality.rs'] = 'Serbia ja Montenegro';
$string['nationality.ru'] = 'Venemaa';
$string['nationality.rw'] = 'Rwanda';
$string['nationality.sa'] = 'Saudi Araabia';
$string['nationality.sb'] = 'Saalomoni Saared';
$string['nationality.sc'] = '';
$string['nationality.sd'] = 'Sudaan';
$string['nationality.se'] = 'Rootsi';
$string['nationality.sg'] = 'Singapur';
$string['nationality.si'] = 'Sloveenia';
$string['nationality.sk'] = 'Slovakkia';
$string['nationality.sl'] = 'Sierra Leone';
$string['nationality.sm'] = '';
$string['nationality.sn'] = 'Senegal';
$string['nationality.so'] = 'Somaalia';
$string['nationality.sr'] = '';
$string['nationality.st'] = '';
$string['nationality.sv'] = 'El Salvador';
$string['nationality.sy'] = 'Süüria';
$string['nationality.sz'] = 'Svaasimaa';
$string['nationality.td'] = 'Tšaad';
$string['nationality.tg'] = 'Togo';
$string['nationality.th'] = 'Tai';
$string['nationality.tj'] = 'Tadžikistan';
$string['nationality.tl'] = 'Ida-Timor';
$string['nationality.tm'] = 'Türkmenistan';
$string['nationality.tn'] = 'Tuneesia';
$string['nationality.to'] = '';
$string['nationality.tr'] = 'Türgi';
$string['nationality.tt'] = 'Trinidad ja Tobago';
$string['nationality.tv'] = '';
$string['nationality.tz'] = 'Tansaania';
$string['nationality.ua'] = 'Ukraina';
$string['nationality.ug'] = 'Uganda';
$string['nationality.us'] = 'Ameerika Ühendriigid';
$string['nationality.uy'] = 'Uruguay';
$string['nationality.uz'] = 'Usbekistan';
$string['nationality.va'] = 'Vatikan';
$string['nationality.vc'] = '';
$string['nationality.ve'] = 'Venezuela';
$string['nationality.vn'] = 'Vietnam';
$string['nationality.vu'] = '';
$string['nationality.ws'] = '';
$string['nationality.ye'] = 'Jeemen';
$string['nationality.za'] = 'Lõuna-Aafrika';
$string['nationality.zm'] = 'Sambia';
$string['nationality.zw'] = 'Zimbabwe';

?>
