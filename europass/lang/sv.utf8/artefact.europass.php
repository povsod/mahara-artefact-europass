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
$string['europassCV'] = 'Europass-meritförteckningen';
$string['europassLP'] = 'Europass-språkpasset';
$string['photograph'] = 'Fotografi';
$string['photographdesc'] = 'Photo will be embeded in Europass XML';
$string['phototoolarge'] = 'File too big. Filesize must not exceed 100 kB.';
$string['exportstep2'] = '2 - Document format';
$string['selectfiletype'] = 'Select file and date format';
$string['exportdate'] = 'Date';
$string['internaldateformat'] = 'Internal Date Format';
$string['selectinternaldatedesc'] = 'Date format used in Mahara';
$string['internaldate-dmy11'] = 'dd/mm/åååå';
$string['internaldate-dmy12'] = 'dd.mm.åååå';
$string['internaldate-dmy13'] = 'dd-mm-åååå';
$string['internaldate-dmy21'] = 'dd/mm/åå';
$string['internaldate-dmy22'] = 'dd.mm.åå';
$string['internaldate-dmy23'] = 'dd-mm-åå';
$string['internaldate-mdy11'] = 'mm/dd/åååå';
$string['internaldate-mdy12'] = 'mm.dd.åååå';
$string['internaldate-mdy13'] = 'mm-dd-åååå';
$string['internaldate-mdy21'] = 'mm/dd/åå';
$string['internaldate-mdy22'] = 'mm.dd.åå';
$string['internaldate-mdy23'] = 'mm-dd-åå';
$string['internaldate-ymd11'] = 'åååå/mm/dd';
$string['internaldate-ymd12'] = 'åååå.mm.dd';
$string['internaldate-ymd13'] = 'åååå-mm-dd';
$string['internaldate-ymd21'] = 'åå/mm/dd';
$string['internaldate-ymd22'] = 'åå.mm.dd';
$string['internaldate-ymd23'] = 'åå-mm-dd';
$string['internaldate-yonly'] = 'åååå';
$string['internaldate-other'] = 'other';
$string['externaldateformat'] = 'External Date Format';
$string['selectexternaldatedesc'] = 'Date format used in export';
$string['externaldate-numeric-long'] = 'dd/mm/åååå';
$string['externaldate-text-long'] = 'dd. månad åååå';
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
$string['identification'] = 'Personuppgifter';
$string['identification-birthdate'] = 'Födelsedatum';
$string['identification-birthplace'] = 'Födelseort';
$string['identification-lastname'] = 'Efternamn';
$string['identification-firstname'] = 'Förnamn';
$string['identification-addressLine'] = 'Gatuadress och nummer';
$string['identification-municipality'] = 'Postort';
$string['identification-postalCode'] = 'Postnummer';
$string['identification-country'] = 'Land';
$string['identification-contactinfo-telephone'] = 'Telefonnummer';
$string['identification-contactinfo-mobile'] = 'Mobil';
$string['identification-contactinfo-fax'] = 'Fax';
$string['identification-contactinfo-email'] = 'E-postadress(er)';
$string['identification-nationality'] = 'Nationalitet ';
$string['identification-gender'] = 'Kön';

// Europass CV - STEP 2
$string['application'] = 'Önskad anställning / Arbetsområde';

// Europass CV - STEP 3
$string['workexperience'] = 'Arbetslivserfarenhet';

// Europass CV - STEP 4
$string['education'] = 'Utbildning';

// Europass CV - STEP 5
$string['mothertongue'] = 'Modersmål';
$string['otherlanguage'] = 'Annat/andra språk';

$string['language-foreign-listening'] = 'Höra';
$string['language-foreign-listening-th'] = 'Höra';
$string['language-foreign-reading'] = 'Läsa';
$string['language-foreign-reading-th'] = 'Läsa';
$string['language-foreign-spokeninteraction'] = 'Samtal/muntlig interaktion';
$string['language-foreign-spokeninteraction-th'] = 'Samtal/muntlig<br>interaktion';
$string['language-foreign-spokenproduction'] = 'Muntlig produktion';
$string['language-foreign-spokenproduction-th'] = 'Muntlig<br>produktion';
$string['language-foreign-writing'] = 'Skriva';
$string['language-foreign-writing-th'] = 'Skriva';
$string['language-foreign-CEF-level'] = 'Nivån inom de Gemensamma europeiska referensramarna (CEF)';

$string['language-foreign-level.A1'] = 'Baspresterande språkanvändare (A1)';
$string['language-foreign-level.A2'] = 'Baspresterande språkanvändare (A2)';
$string['language-foreign-level.B1'] = 'Självständig språkanvändare (B1)';
$string['language-foreign-level.B2'] = 'Självständig språkanvändare (B2)';
$string['language-foreign-level.C1'] = 'Avancerad språkanvändare (C1)';
$string['language-foreign-level.C2'] = 'Avancerad språkanvändare (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Körkort';
$string['skills-and-competences'] = 'Personliga färdigheter och kompetenser';
$string['socialskill'] = 'Sociala färdigheter och kompetenser';
$string['organisationalskill'] = 'Organisatoriska färdigheter och kompetenser';
$string['technicalskill'] = 'Tekniska färdigheter och kompetenser';
$string['computerskill'] = 'IT-färdigheter och -kompetenser';
$string['artisticskill'] = 'Konstnärliga färdigheter och kompetenser';
$string['otherskill'] = 'Övriga färdigheter och kompetenser';
$string['additionalinfo'] = 'Extra information';
$string['annexes'] = 'Bilagor';

// Europass LP - STEP 2
$string['language-certificates'] = 'Examensbevis eller slutbetyg';
$string['diploma-title'] = 'Benämning';
$string['diploma-awardingBody'] = 'Utfärdande institution';
$string['diploma-date'] = 'Datum';
$string['diploma-level'] = 'Europeisk nivå';
$string['language-experiences'] = 'Språkerfarenhet(er)';
$string['experiences-period-from'] = 'Fr.o.m.';
$string['experiences-period-to'] = 'T.o.m.';

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
$string['language.ab'] = 'abkhaziska';
$string['language.af'] = 'afrikaans';
$string['language.an'] = 'aragonesiska';
$string['language.ar'] = 'arabiska';
$string['language.as'] = 'assami';
$string['language.az'] = 'azerbajdzjanska';
$string['language.be'] = 'vitryska';
$string['language.bg'] = 'bulgariska';
$string['language.bn'] = 'bengaliska';
$string['language.bo'] = 'tibetanska';
$string['language.br'] = 'bretonska';
$string['language.bs'] = 'bosniska';
$string['language.ca'] = 'katalanska / valenciska';
$string['language.ce'] = 'tjetjenska';
$string['language.co'] = 'korsikanska';
$string['language.cs'] = 'tjeckiska';
$string['language.cy'] = 'walesiska';
$string['language.da'] = 'danska';
$string['language.de'] = 'tyska';
$string['language.el'] = 'grekiska';
$string['language.en'] = 'engelska';
$string['language.es'] = 'spanska / kastiljanska';
$string['language.et'] = 'estniska';
$string['language.eu'] = 'baskiska';
$string['language.fa'] = 'persiska';
$string['language.fi'] = 'finska';
$string['language.fj'] = 'fidjianska';
$string['language.fo'] = 'färoiska';
$string['language.fr'] = 'franska';
$string['language.fy'] = 'västfrisiska';
$string['language.ga'] = 'iriska';
$string['language.gd'] = 'gaeliska / skotsk gaeliska';
$string['language.gl'] = 'galiciska';
$string['language.gv'] = 'manx';
$string['language.he'] = 'hebreiska';
$string['language.hi'] = 'hindi';
$string['language.hr'] = 'kroatiska';
$string['language.ht'] = 'haitiska; haitisk kreolska';
$string['language.hu'] = 'ungerska';
$string['language.hy'] = 'armeniska';
$string['language.id'] = 'indonesiska';
$string['language.is'] = 'isländska';
$string['language.it'] = 'italienska';
$string['language.ja'] = 'japanska';
$string['language.jv'] = 'javanesiska';
$string['language.ka'] = 'georgiska';
$string['language.kg'] = 'kongo';
$string['language.ko'] = 'koreanska';
$string['language.ku'] = 'kurdiska';
$string['language.kw'] = 'corniska';
$string['language.ky'] = 'kirgisiska';
$string['language.lb'] = 'luxemburgiska';
$string['language.li'] = 'limburgiska';
$string['language.ln'] = 'lingala';
$string['language.lt'] = 'litauiska';
$string['language.lv'] = 'lettiska';
$string['language.mg'] = 'malagasy';
$string['language.mk'] = 'makedonska';
$string['language.mn'] = 'mongoliska';
$string['language.mo'] = 'moldaviska';
$string['language.ms'] = 'malajiska';
$string['language.mt'] = 'maltesiska';
$string['language.my'] = 'burmesiska';
$string['language.nb'] = 'norska (bokmål)';
$string['language.ne'] = 'nepalesiska';
$string['language.nl'] = 'nederländska';
$string['language.nn'] = 'norska (nynorska)';
$string['language.no'] = 'norska';
$string['language.pl'] = 'polska';
$string['language.pt'] = 'portugisiska';
$string['language.rm'] = 'rätoromanska';
$string['language.ro'] = 'rumänska';
$string['language.ru'] = 'ryska';
$string['language.r0'] = 'Romany'; // doesn't really have an ISO 369-1 code...
$string['language.sc'] = 'sardiska';
$string['language.se'] = 'nordsamiska';
$string['language.sk'] = 'slovakiska';
$string['language.sl'] = 'slovenska';
$string['language.so'] = 'somaliska';
$string['language.sq'] = 'albanska';
$string['language.sr'] = 'serbiska';
$string['language.sv'] = 'Svenska';
$string['language.sw'] = 'swahili';
$string['language.tk'] = 'turkmeniska';
$string['language.tr'] = 'turkiska';
$string['language.ty'] = 'tahitiska';
$string['language.uk'] = 'ukrainska';
$string['language.ur'] = 'urdu';
$string['language.uz'] = 'uzbekiska';
$string['language.vi'] = 'vietnamesiska';
$string['language.yi'] = 'jiddish';
$string['language.zh'] = 'kinesiska';
$string['language.cu'] = 'kyrkslaviska';
$string['language.eo'] = 'esperanto';
$string['language.la'] = 'latin';
$string['language.oc'] = 'occitanska (efter 1500); provensalska';
$string['language.vo'] = 'volapük';
// ISO 639-1:2002 languages that had been left out by Europass
$string['language.aa'] = 'afar';
$string['language.ae'] = 'Avestan';
$string['language.ak'] = 'Akan';
$string['language.am'] = 'amhariska';
$string['language.av'] = 'Avaric';
$string['language.ay'] = 'aymara';
$string['language.ba'] = 'basjkiriska';
$string['language.bh'] = 'bihari';
$string['language.bi'] = 'bislama';
$string['language.bm'] = 'Bambara';
$string['language.ch'] = 'Chamorro';
$string['language.cr'] = 'Cree';
$string['language.cv'] = 'Chuvash';
$string['language.dv'] = 'Divehi; Dhivehi; Maldivian';
$string['language.dz'] = 'tibetanska';
$string['language.ee'] = 'Ewe';
$string['language.ff'] = 'Fulah';
$string['language.gn'] = 'guarani';
$string['language.gu'] = 'gujarati';
$string['language.ha'] = 'hausa';
$string['language.ho'] = 'Hiri Motu';
$string['language.hz'] = 'Herero';
$string['language.ia'] = 'interlingua';
$string['language.ig'] = 'Igbo';
$string['language.ii'] = 'Sichuan Yi; Nuosu';
$string['language.ik'] = 'iñupiaq';
$string['language.io'] = 'Ido';
$string['language.iu'] = 'inuktitut';
$string['language.ki'] = 'Kikuyu; Gikuyu';
$string['language.kj'] = 'Kuanyama; Kwanyama';
$string['language.kk'] = 'kazakiska';
$string['language.kl'] = 'grönländska';
$string['language.km'] = 'kambodjanska';
$string['language.kn'] = 'kannada';
$string['language.kr'] = 'Kanuri';
$string['language.ks'] = 'kashmiri';
$string['language.kv'] = 'Komi';
$string['language.lg'] = 'Ganda';
$string['language.lo'] = 'laotiska';
$string['language.lu'] = 'Luba-Katanga';
$string['language.mh'] = 'Marshallese';
$string['language.mi'] = 'maori';
$string['language.ml'] = 'malayalam';
$string['language.mr'] = 'marathi';
$string['language.na'] = 'nauriska';
$string['language.nd'] = 'Ndebele, North';
$string['language.ng'] = 'Ndonga';
$string['language.nr'] = 'Ndebele, South';
$string['language.nv'] = 'Navajo; Navaho';
$string['language.ny'] = 'Chichewa; Chewa; Nyanja';
$string['language.oj'] = 'Ojibwa';
$string['language.om'] = 'oromo';
$string['language.or'] = 'oriya';
$string['language.os'] = 'Ossetian; Ossetic';
$string['language.pa'] = 'punjabi';
$string['language.pi'] = 'Pali';
$string['language.ps'] = 'pashto';
$string['language.qu'] = 'quechua';
$string['language.rn'] = 'kirundi';
$string['language.rw'] = 'kinyarwanda';
$string['language.sa'] = 'sanskrit';
$string['language.sd'] = 'sindhi';
$string['language.sg'] = 'sangho';
$string['language.si'] = 'singalesiska';
$string['language.sm'] = 'samoanska';
$string['language.sn'] = 'shona';
$string['language.ss'] = 'siswati';
$string['language.st'] = 'sesotho';
$string['language.su'] = 'sundanesiska';
$string['language.ta'] = 'tamil';
$string['language.te'] = 'telugu';
$string['language.tg'] = 'tadzjikiska';
$string['language.th'] = 'thailändska';
$string['language.ti'] = 'tigrinja';
$string['language.tl'] = 'tagalog';
$string['language.tn'] = 'setswana';
$string['language.to'] = 'tonganska';
$string['language.ts'] = 'tsonga';
$string['language.tt'] = 'tatariska';
$string['language.tw'] = 'twi';
$string['language.ug'] = 'uiguriska';
$string['language.ve'] = 'Venda';
$string['language.wa'] = 'Walloon';
$string['language.wo'] = 'wolof';
$string['language.xh'] = 'xhosa';
$string['language.yo'] = 'yoruba';
$string['language.za'] = 'zhuang';
$string['language.zu'] = 'zulu';

// ISO 3166-1-alpha-2 filtered by Europass 
// (http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm)
$string['country.ad'] = 'Andorra';
$string['country.ae'] = 'Förenade Arabemiraten';
$string['country.af'] = 'Afghanistan';
$string['country.ag'] = 'Antigua och Barbuda';
$string['country.al'] = 'Albanien';
$string['country.am'] = 'Armenien';
$string['country.ao'] = 'Angola';
$string['country.ar'] = 'Argentina';
$string['country.at'] = 'Österrike';
$string['country.au'] = 'Australien';
$string['country.az'] = 'Azerbajdzjan';
$string['country.ba'] = 'Bosnien och Hercegovina';
$string['country.bb'] = 'Barbados';
$string['country.bd'] = 'Bangladesh';
$string['country.be'] = 'Belgien';
$string['country.bf'] = 'Burkina Faso';
$string['country.bg'] = 'Bulgarien';
$string['country.bh'] = 'Bahrain';
$string['country.bi'] = 'Burundi';
$string['country.bj'] = 'Benin';
$string['country.bn'] = 'Brunei';
$string['country.bo'] = 'Bolivia';
$string['country.br'] = 'Brasilien';
$string['country.bs'] = 'Bahamas';
$string['country.bt'] = 'Bhutan';
$string['country.bw'] = 'Botswana';
$string['country.by'] = 'Vitryssland';
$string['country.bz'] = 'Belize';
$string['country.ca'] = 'Kanada';
$string['country.cd'] = 'Demokratiska republiken Kongo';
$string['country.cf'] = 'Centralafrikanska republiken';
$string['country.cg'] = 'Republiken Kongo';
$string['country.ch'] = 'Schweiz';
$string['country.ci'] = 'Elfenbenskusten';
$string['country.cl'] = 'Chile';
$string['country.cm'] = 'Kamerun';
$string['country.cn'] = 'Kina';
$string['country.co'] = 'Colombia';
$string['country.cr'] = 'Costa Rica';
$string['country.cu'] = 'Kuba';
$string['country.cv'] = 'Kap Verde';
$string['country.cy'] = 'Cypern';
$string['country.cz'] = 'Republiken Tjeckien';
$string['country.de'] = 'Tyskland';
$string['country.dj'] = 'Djibouti';
$string['country.dk'] = 'Danmark';
$string['country.dm'] = 'Dominica';
$string['country.do'] = 'Dominikanska republiken';
$string['country.dz'] = 'Algeriet';
$string['country.ec'] = 'Ecuador';
$string['country.ee'] = 'Estland';
$string['country.eg'] = 'Egypten';
$string['country.er'] = 'Eritrea';
$string['country.es'] = 'Spanien';
$string['country.et'] = 'Etiopien';
$string['country.fi'] = 'Finland';
$string['country.fj'] = 'Fiji';
$string['country.fm'] = 'Mikronesien';
$string['country.fr'] = 'Frankrike';
$string['country.ga'] = 'Gabon';
$string['country.gb'] = 'Det forente kongerike';
$string['country.gd'] = 'Grenada';
$string['country.ge'] = 'Georgien';
$string['country.gh'] = 'Ghana';
$string['country.gl'] = 'Grönland';
$string['country.gm'] = 'Gambia';
$string['country.gn'] = 'Guinea';
$string['country.gq'] = 'Ekvatorialguinea';
$string['country.gr'] = 'Grekland';
$string['country.gt'] = 'Guatemala';
$string['country.gw'] = 'Guinea-Bissau';
$string['country.gy'] = 'Guyana';
$string['country.hn'] = 'Honduras';
$string['country.hr'] = 'Kroatien';
$string['country.ht'] = 'Haiti';
$string['country.hu'] = 'Ungern';
$string['country.id'] = 'Indonesien';
$string['country.ie'] = 'Irland';
$string['country.il'] = 'Israel';
$string['country.in'] = 'Indien';
$string['country.iq'] = 'Irak';
$string['country.ir'] = 'Iran';
$string['country.is'] = 'Island';
$string['country.it'] = 'Italien';
$string['country.jm'] = 'Jamaica';
$string['country.jo'] = 'Jordanien';
$string['country.jp'] = 'Japan';
$string['country.ke'] = 'Kenya';
$string['country.kg'] = 'Kirgizistan';
$string['country.kh'] = 'Kambodja';
$string['country.ki'] = 'Kiribati';
$string['country.km'] = 'Komorerna';
$string['country.kn'] = 'Saint Kitts och Nevis';
$string['country.kp'] = 'Nordkorea';
$string['country.kr'] = 'Sydkorea';
$string['country.kw'] = 'Kuwait';
$string['country.kz'] = 'Kazakstan';
$string['country.la'] = 'Laos';
$string['country.lb'] = 'Libanon';
$string['country.lc'] = 'Saint Lucia';
$string['country.li'] = 'Liechtenstein';
$string['country.lk'] = 'Sri Lanka';
$string['country.lr'] = 'Liberia';
$string['country.ls'] = 'Lesotho';
$string['country.lt'] = 'Litauen';
$string['country.lu'] = 'Luxemburg';
$string['country.lv'] = 'Lettland';
$string['country.ly'] = 'Libyen';
$string['country.ma'] = 'Marocko';
$string['country.mc'] = 'Monaco';
$string['country.md'] = 'Moldavien';
$string['country.me'] = 'Montenegro';
$string['country.mg'] = 'Madagaskar';
$string['country.mh'] = 'Marshallöarna';
$string['country.mk'] = 'F.d. jugoslaviska republiken Makedonien';
$string['country.ml'] = 'Mali';
$string['country.mm'] = 'Myanmar';
$string['country.mn'] = 'Mongoliet';
$string['country.mr'] = 'Mauretanien';
$string['country.mt'] = 'Malta';
$string['country.mu'] = 'Mauretanien';
$string['country.mv'] = 'Maldiverna';
$string['country.mw'] = 'Malawi';
$string['country.mx'] = 'Mexiko';
$string['country.my'] = 'Malaysia';
$string['country.mz'] = 'Moçambique';
$string['country.na'] = 'Namibia';
$string['country.ne'] = 'Niger';
$string['country.ng'] = 'Nigeria';
$string['country.ni'] = 'Nicaragua';
$string['country.nl'] = 'Nederländerna';
$string['country.no'] = 'Norge';
$string['country.np'] = 'Nepal';
$string['country.nr'] = 'Nauru';
$string['country.nu'] = 'Niue';
$string['country.nz'] = 'Nya Zeeland';
$string['country.om'] = 'Oman';
$string['country.pa'] = 'Panama';
$string['country.pe'] = 'Peru';
$string['country.pg'] = 'Papua Nya Guinea';
$string['country.ph'] = 'Filippinerna';
$string['country.pk'] = 'Pakistan';
$string['country.pl'] = 'Polen';
$string['country.pr'] = 'Puerto Rico';
$string['country.ps'] = 'De självstyrande palestinska områdena';
$string['country.pt'] = 'Portugal';
$string['country.pw'] = 'Palau';
$string['country.py'] = 'Paraguay';
$string['country.qa'] = 'Qatar';
$string['country.ro'] = 'Rumänien';
$string['country.rs'] = 'Serbien';
$string['country.ru'] = 'Ryssland';
$string['country.rw'] = 'Rwanda';
$string['country.sa'] = 'Saudiarabien';
$string['country.sb'] = 'Salomonöarna';
$string['country.sc'] = 'Seychellerna';
$string['country.sd'] = 'Sudan';
$string['country.se'] = 'Sverige';
$string['country.sg'] = 'Singapore';
$string['country.si'] = 'Slovenien';
$string['country.sk'] = 'Slovakien';
$string['country.sl'] = 'Sierra Leone';
$string['country.sm'] = 'San Marino';
$string['country.sn'] = 'Senegal';
$string['country.so'] = 'Somalia';
$string['country.sr'] = 'Surinam';
$string['country.st'] = 'São Tomé och Príncipe';
$string['country.sv'] = 'El Salvador';
$string['country.sy'] = 'Syrien';
$string['country.sz'] = 'Swaziland';
$string['country.td'] = 'Tchad';
$string['country.tg'] = 'Togo';
$string['country.th'] = 'Thailand';
$string['country.tj'] = 'Tadzjikistan';
$string['country.tl'] = 'Östtimor';
$string['country.tm'] = 'Turkmenistan';
$string['country.tn'] = 'Tunisien';
$string['country.to'] = 'Tonga';
$string['country.tr'] = 'Turkiet';
$string['country.tt'] = 'Trinidad och Tobago';
$string['country.tv'] = 'Tuvalu';
$string['country.tz'] = 'Tanzania';
$string['country.ua'] = 'Ukraina';
$string['country.ug'] = 'Uganda';
$string['country.us'] = 'Förenta staterna';
$string['country.uy'] = 'Uruguay';
$string['country.uz'] = 'Uzbekistan';
$string['country.va'] = 'Vatikanstaten';
$string['country.vc'] = 'Saint Vincent och Grenadinerna';
$string['country.ve'] = 'Venezuela';
$string['country.vn'] = 'Vietnam';
$string['country.vu'] = 'Vatuanu';
$string['country.ws'] = 'Samoa';
$string['country.ye'] = 'Yemen';
$string['country.za'] = 'Sydafrika';
$string['country.zm'] = 'Zambia';
$string['country.zw'] = 'Zimbabwe';

// List of nationalities based on the ISO 3166-1-alpha-2 filtered by Europass country list
// (http://europass.cedefop.europa.eu/TechnicalResources/XML/xsd/included_schemas/EUROPASS_Nationalities_V1.0.xsd)
$string['nationality.ad'] = 'andorransk';
$string['nationality.ae'] = 'förenade arabemiratisk';
$string['nationality.af'] = 'afghansk';
$string['nationality.ag'] = 'antiguansk';
$string['nationality.al'] = 'albansk';
$string['nationality.am'] = 'armenisk';
$string['nationality.ao'] = 'angolansk';
$string['nationality.ar'] = 'argentinsk';
$string['nationality.at'] = 'österrikisk';
$string['nationality.au'] = 'australisk';
$string['nationality.az'] = 'azerbajdzjansk';
$string['nationality.ba'] = 'bosnisk-hercegovinsk';
$string['nationality.bb'] = 'barbadisk';
$string['nationality.bd'] = 'bangladeshisk';
$string['nationality.be'] = 'belgisk';
$string['nationality.bf'] = 'burkinsk';
$string['nationality.bg'] = 'bulgarisk';
$string['nationality.bh'] = 'bahrainsk';
$string['nationality.bi'] = 'burundisk';
$string['nationality.bj'] = 'beninsk';
$string['nationality.bn'] = 'bruneisk';
$string['nationality.bo'] = 'boliviansk';
$string['nationality.br'] = 'brasiliansk';
$string['nationality.bs'] = 'bahamansk';
$string['nationality.bt'] = 'bhutanesisk';
$string['nationality.bw'] = 'botswansk';
$string['nationality.by'] = 'vitrysk';
$string['nationality.bz'] = 'belizisk';
$string['nationality.ca'] = 'kanadensisk';
$string['nationality.cd'] = 'kongolesisk';
$string['nationality.cf'] = 'centralafrikansk';
$string['nationality.cg'] = 'kongolesisk';
$string['nationality.ch'] = 'schweizisk';
$string['nationality.ci'] = 'ivoriansk';
$string['nationality.cl'] = 'chilensk';
$string['nationality.cm'] = 'kamerunsk';
$string['nationality.cn'] = 'kinesisk';
$string['nationality.co'] = 'colombiansk';
$string['nationality.cr'] = 'costarikansk';
$string['nationality.cu'] = 'kubansk';
$string['nationality.cv'] = 'kapverdisk';
$string['nationality.cy'] = 'cypriotisk';
$string['nationality.cz'] = 'tjeckisk';
$string['nationality.de'] = 'tysk';
$string['nationality.dj'] = 'djiboutisk';
$string['nationality.dk'] = 'dansk';
$string['nationality.dm'] = 'dominikisk';
$string['nationality.do'] = 'dominikansk';
$string['nationality.dz'] = 'algerisk';
$string['nationality.ec'] = 'ecuadoriansk';
$string['nationality.ee'] = 'estnisk';
$string['nationality.eg'] = 'egyptisk';
$string['nationality.er'] = 'eritreansk';
$string['nationality.es'] = 'spansk';
$string['nationality.et'] = 'etiopisk';
$string['nationality.fi'] = 'finländsk';
$string['nationality.fj'] = 'fijiansk';
$string['nationality.fm'] = 'mikronesisk';
$string['nationality.fr'] = 'fransk';
$string['nationality.ga'] = 'gabonesisk';
$string['nationality.gb'] = 'brittisk';
$string['nationality.gd'] = 'grenadisk';
$string['nationality.ge'] = 'georgisk';
$string['nationality.gh'] = 'ghanansk';
$string['nationality.gl'] = 'grönländsk';
$string['nationality.gm'] = 'gambisk';
$string['nationality.gn'] = 'guineansk';
$string['nationality.gq'] = 'ekvatorialguineansk';
$string['nationality.gr'] = 'grekisk';
$string['nationality.gt'] = 'guatemalansk';
$string['nationality.gw'] = 'guinea bissausk';
$string['nationality.gy'] = 'guyanansk';
$string['nationality.hn'] = 'honduransk';
$string['nationality.hr'] = 'kroatisk';
$string['nationality.ht'] = 'haitisk';
$string['nationality.hu'] = 'ungersk';
$string['nationality.id'] = 'indonesisk';
$string['nationality.ie'] = 'irisk';
$string['nationality.il'] = 'israelisk';
$string['nationality.in'] = 'indisk';
$string['nationality.iq'] = 'irakisk';
$string['nationality.ir'] = 'iransk';
$string['nationality.is'] = 'isländsk';
$string['nationality.it'] = 'italiensk';
$string['nationality.jm'] = 'jamaikansk';
$string['nationality.jo'] = 'jordansk';
$string['nationality.jp'] = 'japansk';
$string['nationality.ke'] = 'kenyansk';
$string['nationality.kg'] = 'kirgizistansk';
$string['nationality.kh'] = 'kambodjansk';
$string['nationality.ki'] = 'kiribatisk';
$string['nationality.km'] = 'komorisk';
$string['nationality.kn'] = '';
$string['nationality.kp'] = 'nordkoreansk';
$string['nationality.kr'] = 'sydkoreansk';
$string['nationality.kw'] = 'kuwaitisk';
$string['nationality.kz'] = 'kazakstansk';
$string['nationality.la'] = 'laotisk';
$string['nationality.lb'] = 'libanesisk';
$string['nationality.lc'] = 'santaluciansk';
$string['nationality.li'] = 'liechtensteinsk';
$string['nationality.lk'] = 'srilankesisk';
$string['nationality.lr'] = 'liberisk';
$string['nationality.ls'] = 'lesothisk';
$string['nationality.lt'] = 'litauisk';
$string['nationality.lu'] = 'luxemburgsk';
$string['nationality.lv'] = 'lettländsk';
$string['nationality.ly'] = 'libysk';
$string['nationality.ma'] = 'marockansk';
$string['nationality.mc'] = 'monegaskisk';
$string['nationality.md'] = 'moldavisk';
$string['nationality.me'] = 'montenegrinsk';
$string['nationality.mg'] = 'madagaskisk';
$string['nationality.mh'] = '';
$string['nationality.mk'] = 'makedonisk';
$string['nationality.ml'] = 'malisk';
$string['nationality.mm'] = 'burmesisk';
$string['nationality.mn'] = 'mongolisk';
$string['nationality.mr'] = 'mauretansk';
$string['nationality.mt'] = 'maltesisk';
$string['nationality.mu'] = 'mauritisk';
$string['nationality.mv'] = 'maldivisk';
$string['nationality.mw'] = 'malawisk';
$string['nationality.mx'] = 'mexikansk';
$string['nationality.my'] = 'malaysisk';
$string['nationality.mz'] = 'moçambikisk';
$string['nationality.na'] = 'namibisk';
$string['nationality.ne'] = 'nigerisk';
$string['nationality.ng'] = 'nigeriansk';
$string['nationality.ni'] = 'nicaraguansk';
$string['nationality.nl'] = 'nederländsk';
$string['nationality.no'] = 'norsk';
$string['nationality.np'] = 'nepalesisk';
$string['nationality.nr'] = 'naurisk';
$string['nationality.nu'] = 'niuisk';
$string['nationality.nz'] = 'nyzeeländsk';
$string['nationality.om'] = 'omansk';
$string['nationality.pa'] = 'panamansk';
$string['nationality.pe'] = 'peruansk';
$string['nationality.pg'] = 'papuansk';
$string['nationality.ph'] = 'filippinsk';
$string['nationality.pk'] = 'pakistansk';
$string['nationality.pl'] = 'polsk';
$string['nationality.pr'] = 'puertorikansk';
$string['nationality.ps'] = 'palestinisk';
$string['nationality.pt'] = 'portugisisk';
$string['nationality.pw'] = 'palauisk';
$string['nationality.py'] = 'paraguaysk';
$string['nationality.qa'] = 'qatarisk';
$string['nationality.ro'] = 'rumänsk';
$string['nationality.rs'] = 'serbisk';
$string['nationality.ru'] = 'rysk';
$string['nationality.rw'] = 'rwandisk';
$string['nationality.sa'] = 'saudisk';
$string['nationality.sb'] = 'salomonsk';
$string['nationality.sc'] = 'seychellisk';
$string['nationality.sd'] = 'sudanesisk';
$string['nationality.se'] = 'svensk';
$string['nationality.sg'] = 'singaporiansk';
$string['nationality.si'] = 'slovensk';
$string['nationality.sk'] = 'slovakisk';
$string['nationality.sl'] = 'sierraleonsk';
$string['nationality.sm'] = 'sanmarinsk';
$string['nationality.sn'] = 'senegalesisk';
$string['nationality.so'] = 'somalisk';
$string['nationality.sr'] = 'surinamesisk';
$string['nationality.st'] = 'saotomeisk';
$string['nationality.sv'] = 'salvadoransk';
$string['nationality.sy'] = 'syrisk';
$string['nationality.sz'] = 'swaziländsk';
$string['nationality.td'] = 'tchadisk';
$string['nationality.tg'] = 'togolesisk';
$string['nationality.th'] = 'thailändsk';
$string['nationality.tj'] = 'tadzjikistansk';
$string['nationality.tl'] = 'östtimoriansk';
$string['nationality.tm'] = 'turkmenistansk';
$string['nationality.tn'] = 'tunisisk';
$string['nationality.to'] = 'tongansk';
$string['nationality.tr'] = 'turkisk';
$string['nationality.tt'] = 'trinidadisk';
$string['nationality.tv'] = 'tuvaluansk';
$string['nationality.tz'] = 'tanzanisk';
$string['nationality.ua'] = 'ukrainsk';
$string['nationality.ug'] = 'ugandisk';
$string['nationality.us'] = 'amerikansk';
$string['nationality.uy'] = 'uruguaysk';
$string['nationality.uz'] = 'uzbekistansk';
$string['nationality.va'] = 'vartikansk';
$string['nationality.vc'] = 'grenadinsk';
$string['nationality.ve'] = 'venezuelansk';
$string['nationality.vn'] = 'vietnamesisk';
$string['nationality.vu'] = 'vanuatisk';
$string['nationality.ws'] = 'samoansk';
$string['nationality.ye'] = 'jemenitisk';
$string['nationality.za'] = 'sydafrikansk';
$string['nationality.zm'] = 'zambisk';
$string['nationality.zw'] = 'zimbabwisk';

?>
