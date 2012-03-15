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
$string['europassCV'] = 'Europass curriculum vitae (CV)';
$string['europassLP'] = 'Passaport tal-Lingwa Europass';
$string['photograph'] = 'Ritratt';
$string['photographdesc'] = 'Photo will be embeded in Europass XML';
$string['phototoolarge'] = 'File too big. Filesize must not exceed 100 kB.';
$string['exportstep2'] = '2 - Document format';
$string['selectfiletype'] = 'Select file and date format';
$string['exportdate'] = 'Date';
$string['internaldateformat'] = 'Internal Date Format';
$string['selectinternaldatedesc'] = 'Date format used in Mahara';
$string['internaldate-dmy11'] = 'jj/xx/ssss';
$string['internaldate-dmy12'] = 'jj.xx.ssss';
$string['internaldate-dmy13'] = 'jj-xx-ssss';
$string['internaldate-dmy21'] = 'jj/xx/ss';
$string['internaldate-dmy22'] = 'jj.xx.ss';
$string['internaldate-dmy23'] = 'jj-xx-ss';
$string['internaldate-mdy11'] = 'xx/jj/ssss';
$string['internaldate-mdy12'] = 'xx.jj.ssss';
$string['internaldate-mdy13'] = 'xx-jj-ssss';
$string['internaldate-mdy21'] = 'xx/jj/ss';
$string['internaldate-mdy22'] = 'xx.jj.ss';
$string['internaldate-mdy23'] = 'xx-jj-ss';
$string['internaldate-ymd11'] = 'ssss/xx/jj';
$string['internaldate-ymd12'] = 'ssss.xx.jj';
$string['internaldate-ymd13'] = 'ssss-xx-jj';
$string['internaldate-ymd21'] = 'ss/xx/jj';
$string['internaldate-ymd22'] = 'ss.xx.jj';
$string['internaldate-ymd23'] = 'ss-xx-jj';
$string['internaldate-yonly'] = 'ssss';
$string['internaldate-other'] = 'other';
$string['externaldateformat'] = 'External Date Format';
$string['selectexternaldatedesc'] = 'Date format used in export';
$string['externaldate-numeric-long'] = 'jj/xx/ssss';
$string['externaldate-text-long'] = 'jj. xahar ssss';
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
$string['identification'] = 'Informazzjoni personali';
$string['identification-birthdate'] = 'Data tat-twelid';
$string['identification-birthplace'] = 'Post tat-twelid';
$string['identification-lastname'] = 'Kunjom(ijiet)';
$string['identification-firstname'] = 'Isem (ismijiet)';
$string['identification-addressLine'] = 'Triq/In-numru tad-dar';
$string['identification-municipality'] = 'Belt';
$string['identification-postalCode'] = 'Kodici Postali';
$string['identification-country'] = 'pajjiż';
$string['identification-contactinfo-telephone'] = 'Numru(i) tat-telefon(s)';
$string['identification-contactinfo-mobile'] = 'Mowbajl';
$string['identification-contactinfo-fax'] = 'Numru tal-Faks';
$string['identification-contactinfo-email'] = 'E-mail(s)';
$string['identification-nationality'] = 'Nazzjonalitá';
$string['identification-gender'] = 'Sess';

// Europass CV - STEP 2
$string['application'] = 'Impjieg mixtieq / qasam ta\' xogħol';

// Europass CV - STEP 3
$string['workexperience'] = 'Esperjenza ta\' xogħol';

// Europass CV - STEP 4
$string['education'] = 'Edukazzjoni u taħriġ';

// Europass CV - STEP 5
$string['mothertongue'] = 'Ilsien / Isla nattiv(i)';
$string['otherlanguage'] = 'Lingwi oħra';

$string['language-foreign-listening'] = 'Smigħ';
$string['language-foreign-listening-th'] = 'Smigħ';
$string['language-foreign-reading'] = 'Qari';
$string['language-foreign-reading-th'] = 'Qari';
$string['language-foreign-spokeninteraction'] = 'Taħdit interattiv';
$string['language-foreign-spokeninteraction-th'] = 'Taħdit<br>interattiv';
$string['language-foreign-spokenproduction'] = 'Taħdit produttiv';
$string['language-foreign-spokenproduction-th'] = 'Taħdit<br>produttiv';
$string['language-foreign-writing'] = 'Kitba';
$string['language-foreign-writing-th'] = 'Kitba';
$string['language-foreign-CEF-level'] = 'Qafas Ewropew ta’ Referenza Komuni għall-Ilsna';

$string['language-foreign-level.A1'] = 'Użu bażiku (A1)';
$string['language-foreign-level.A2'] = 'Użu bażiku (A2)';
$string['language-foreign-level.B1'] = 'Użu indipendenti (B1)';
$string['language-foreign-level.B2'] = 'Użu indipendenti (B2)';
$string['language-foreign-level.C1'] = 'Użu profiċjenti (C1)';
$string['language-foreign-level.C2'] = 'Użu profiċjenti (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Liċenzja(i) tas-sewqan';
$string['skills-and-competences'] = 'Ħiliet u kompetenzi personali';
$string['socialskill'] = 'Ħiliet soċjali u kompetenzi';
$string['organisationalskill'] = 'Ħiliet u kompetenzi organizzativi';
$string['technicalskill'] = 'Ħiliet u kompetenzi  tekniċi';
$string['computerskill'] = 'Ħiliet u kompetenzi fl-użu tal-kompjuter';
$string['artisticskill'] = 'Ħiliet u kompetenzi artistiċi';
$string['otherskill'] = 'Ħilijiet u kompetenzi oħra';
$string['additionalinfo'] = 'Informazzjoni oħra';
$string['annexes'] = 'Annessi';

// Europass LP - STEP 2
$string['language-certificates'] = 'Lista tad-diploma/i u ċertifikat/i tiegħek';
$string['diploma-title'] = 'Titlu';
$string['diploma-awardingBody'] = 'Organizzazzjoni minn fejn ħareg iċ-ċertifikat/(i) u / jew diploma/(i)';
$string['diploma-date'] = 'Data';
$string['diploma-level'] = 'Livell Ewropew';
$string['language-experiences'] = 'Esperjenza/i fil-lingwa';
$string['experiences-period-from'] = 'Minn';
$string['experiences-period-to'] = 'Sa';

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
$string['language.ab'] = 'Abkażjan';
$string['language.af'] = 'Afrikans';
$string['language.an'] = 'Aragoniż';
$string['language.ar'] = 'Għarbi';
$string['language.as'] = 'Assamiż';
$string['language.az'] = 'Ażerbajġani';
$string['language.be'] = 'Belarussu';
$string['language.bg'] = 'Bulgaru';
$string['language.bn'] = 'Bengali';
$string['language.bo'] = 'Tibetjan';
$string['language.br'] = 'Breton';
$string['language.bs'] = 'Bożnijaku';
$string['language.ca'] = 'Katalan / Valenzjan';
$string['language.ce'] = 'Ċeċen';
$string['language.co'] = 'Korsiku';
$string['language.cs'] = 'Ċek';
$string['language.cy'] = 'Welx';
$string['language.da'] = 'Daniż';
$string['language.de'] = 'Ġermaniż';
$string['language.el'] = 'Grieg';
$string['language.en'] = 'Ingliż';
$string['language.es'] = 'Spanjol / Kastilljan';
$string['language.et'] = 'Estonjan';
$string['language.eu'] = 'Bask';
$string['language.fa'] = 'Persjan';
$string['language.fi'] = 'Finlandiż';
$string['language.fj'] = 'Fiġjan';
$string['language.fo'] = 'Fawriż';
$string['language.fr'] = 'Franċiż';
$string['language.fy'] = 'Friżjan tal-Punent';
$string['language.ga'] = 'Irlandiż';
$string['language.gd'] = 'Galliku / Galliku Skoċċiż';
$string['language.gl'] = 'Galizzjan';
$string['language.gv'] = 'Manks';
$string['language.he'] = 'Ebrajk';
$string['language.hi'] = 'Ħindi';
$string['language.hr'] = 'Kroat';
$string['language.ht'] = 'Ħaitjan; Kreol tal-Ħaiti';
$string['language.hu'] = 'Ungeriż';
$string['language.hy'] = 'Armen';
$string['language.id'] = 'Indoneżjan';
$string['language.is'] = 'Iżlandiż';
$string['language.it'] = 'Taljan';
$string['language.ja'] = 'Ġappuniż';
$string['language.jv'] = 'Ġavaniż';
$string['language.ka'] = 'Ġeorġjan';
$string['language.kg'] = 'Kongo';
$string['language.ko'] = 'Korean';
$string['language.ku'] = 'Kurd';
$string['language.kw'] = 'Korniku';
$string['language.ky'] = 'Kirgiż';
$string['language.lb'] = 'Lussemburgiż; Letzurgiż';
$string['language.li'] = 'Limburgan; Limburger; Limburgiż';
$string['language.ln'] = 'Lingala';
$string['language.lt'] = 'Litwan';
$string['language.lv'] = 'Latvjan';
$string['language.mg'] = 'Malagażi';
$string['language.mk'] = 'Maċedonjan';
$string['language.mn'] = 'Mongoljan';
$string['language.mo'] = 'Moldavjan';
$string['language.ms'] = 'Malajan';
$string['language.mt'] = 'Malti';
$string['language.my'] = 'Burmiż';
$string['language.nb'] = 'Norveġiż (Bokmahal)';
$string['language.ne'] = 'Nepaliż';
$string['language.nl'] = 'Olandiż';
$string['language.nn'] = 'Norveġiż (Ninorsk)';
$string['language.no'] = 'Norveġiż';
$string['language.pl'] = 'Pollakk';
$string['language.pt'] = 'Portugiż';
$string['language.rm'] = 'Reto-Romanz';
$string['language.ro'] = 'Rumen';
$string['language.ru'] = 'Russu';
$string['language.r0'] = 'Romany'; // doesn't really have an ISO 369-1 code...
$string['language.sc'] = 'Sard';
$string['language.se'] = 'Sami ta\' Fuq';
$string['language.sk'] = 'Slovakk';
$string['language.sl'] = 'Sloven';
$string['language.so'] = 'Somali';
$string['language.sq'] = 'Albaniż';
$string['language.sr'] = 'Serb';
$string['language.sv'] = 'Svediż';
$string['language.sw'] = 'Swaħili';
$string['language.tk'] = 'Turkmen';
$string['language.tr'] = 'Tork';
$string['language.ty'] = 'Taħitjan';
$string['language.uk'] = 'Ukrain';
$string['language.ur'] = 'Urdu';
$string['language.uz'] = 'Użbek';
$string['language.vi'] = 'Vjetnamiż';
$string['language.yi'] = 'Jiddix';
$string['language.zh'] = 'Ċiniż';
$string['language.cu'] = 'Slaviku tal-Knisja';
$string['language.eo'] = 'Esperanto';
$string['language.la'] = 'Latin';
$string['language.oc'] = 'Oċċitan (wara l-1500); Provenzal';
$string['language.vo'] = 'Volapuk';
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
$string['country.ad'] = '';
$string['country.ae'] = 'Emirati Għarab Magħquda';
$string['country.af'] = 'Afganistan';
$string['country.ag'] = '';
$string['country.al'] = 'Albanja';
$string['country.am'] = 'Armenja';
$string['country.ao'] = 'L-Angola';
$string['country.ar'] = 'Argentina';
$string['country.at'] = 'Awstrija';
$string['country.au'] = 'Awstralja';
$string['country.az'] = 'Azerbaijan';
$string['country.ba'] = 'Bosnia-Herzegovina';
$string['country.bb'] = '';
$string['country.bd'] = 'Bangladesh';
$string['country.be'] = 'Belġju';
$string['country.bf'] = 'Burkina Faso';
$string['country.bg'] = 'Bulgarja';
$string['country.bh'] = 'Bahrain';
$string['country.bi'] = 'Il-Burundi';
$string['country.bj'] = 'Benin';
$string['country.bn'] = '';
$string['country.bo'] = 'Bolivja';
$string['country.br'] = 'Brazil';
$string['country.bs'] = '';
$string['country.bt'] = 'Il-Bhutan';
$string['country.bw'] = 'Botswana';
$string['country.by'] = 'Belarus';
$string['country.bz'] = '';
$string['country.ca'] = 'Kanada';
$string['country.cd'] = 'Ir-Repubblika Demokratika tal-Kongo';
$string['country.cf'] = 'Ir-Repubblika Ċentrali Affrikana';
$string['country.cg'] = 'Il-Kongo';
$string['country.ch'] = 'Svizzera';
$string['country.ci'] = 'Il-Kosta ta’ l-Avorju';
$string['country.cl'] = 'Iċ-Ċili';
$string['country.cm'] = 'Il-Kamerun';
$string['country.cn'] = 'Iċ-Ċina';
$string['country.co'] = 'Kolumbja';
$string['country.cr'] = 'Il-Kosta Rika';
$string['country.cu'] = 'Kuba';
$string['country.cv'] = 'Cape Verde';
$string['country.cy'] = 'Ċipru';
$string['country.cz'] = 'Repubblika Ċeka';
$string['country.de'] = 'Ġermanja';
$string['country.dj'] = 'Djibouti';
$string['country.dk'] = 'Danimarka';
$string['country.dm'] = '';
$string['country.do'] = 'Ir-Repubblika Domenikana';
$string['country.dz'] = 'Algeria';
$string['country.ec'] = 'L-Ekwador';
$string['country.ee'] = 'L-Estonja';
$string['country.eg'] = 'Eġittu';
$string['country.er'] = 'Eritreja';
$string['country.es'] = 'Spanja';
$string['country.et'] = 'Etjopja';
$string['country.fi'] = 'Finlandja';
$string['country.fj'] = 'il-Gzejjer Fiji';
$string['country.fm'] = 'Micronesia, Federated States of';
$string['country.fr'] = 'Franza';
$string['country.ga'] = 'Gabon';
$string['country.gb'] = 'ir-Renju Unit';
$string['country.gd'] = '';
$string['country.ge'] = 'Il-Ġeorġja';
$string['country.gh'] = 'Il-Gana';
$string['country.gl'] = '';
$string['country.gm'] = 'Il-Gambja';
$string['country.gn'] = 'Il-Gwinea';
$string['country.gq'] = 'Il-Gwinea Ekwatorjali';
$string['country.gr'] = 'Il-Greċja';
$string['country.gt'] = 'Il-Gwatemala';
$string['country.gw'] = 'Guinea-Bissau';
$string['country.gy'] = 'Il-Gujana';
$string['country.hn'] = 'Il-Ħonduras';
$string['country.hr'] = 'Kroazja';
$string['country.ht'] = 'Ħajiti';
$string['country.hu'] = 'Ungerija';
$string['country.id'] = 'L-Indoneżja';
$string['country.ie'] = 'Irlanda';
$string['country.il'] = 'L-Iżrael';
$string['country.in'] = 'Indja';
$string['country.iq'] = 'L-Iraq';
$string['country.ir'] = 'Ir-Repubblika Islamika ta’ l-Iran';
$string['country.is'] = 'Islanda';
$string['country.it'] = 'Italja';
$string['country.jm'] = 'Il-Ġamajka';
$string['country.jo'] = 'Il-Ġordan';
$string['country.jp'] = 'Ġappun';
$string['country.ke'] = 'Il-Kenja';
$string['country.kg'] = 'Il-Kyrgyzstan';
$string['country.kh'] = 'Il-Kambodja';
$string['country.ki'] = '';
$string['country.km'] = 'Comoros';
$string['country.kn'] = '';
$string['country.kp'] = 'Il-Korea, Ir-Repubblika popolari Demokratika tal-Korea (Ta’ Fuq)';
$string['country.kr'] = 'Il-Korea, Ir-Repubblika tal-Korea (t’Isfel)';
$string['country.kw'] = 'Il-Kuwajt';
$string['country.kz'] = 'Il-Każakstan';
$string['country.la'] = 'Ir-Repubblika Demokratika Popolari tal-Laos';
$string['country.lb'] = 'Libanu';
$string['country.lc'] = '';
$string['country.li'] = 'Liechtenstein';
$string['country.lk'] = 'Is-Sri Lanka';
$string['country.lr'] = 'Il-Liberja';
$string['country.ls'] = 'Il-Lesoto';
$string['country.lt'] = 'Litwanja';
$string['country.lu'] = 'Lussemburgu';
$string['country.lv'] = 'Il-Latvja';
$string['country.ly'] = 'Libja';
$string['country.ma'] = 'Marokk';
$string['country.mc'] = 'Monako';
$string['country.md'] = 'Moldavja';
$string['country.me'] = 'I-Montenegro';
$string['country.mg'] = 'Il-Madagaskar';
$string['country.mh'] = '';
$string['country.mk'] = 'L-Ex Repubblika Jugoslava tal-Maċedonja';
$string['country.ml'] = 'Mali';
$string['country.mm'] = 'Myanmar';
$string['country.mn'] = 'Mongolja';
$string['country.mr'] = 'Il-Mawritanja';
$string['country.mt'] = 'Malta';
$string['country.mu'] = 'Il-Mawrixus';
$string['country.mv'] = '';
$string['country.mw'] = 'Il-Malawi';
$string['country.mx'] = 'Messiku';
$string['country.my'] = 'Malasja';
$string['country.mz'] = 'Il-Możambik';
$string['country.na'] = 'In-Namibia';
$string['country.ne'] = 'In-Niġer';
$string['country.ng'] = 'In-Niġerja';
$string['country.ni'] = 'In-Nikaragwa';
$string['country.nl'] = 'L-Olanda';
$string['country.no'] = 'Norvegja';
$string['country.np'] = 'In-Nepal';
$string['country.nr'] = '';
$string['country.nu'] = '';
$string['country.nz'] = 'New Zealand';
$string['country.om'] = 'L-Oman';
$string['country.pa'] = 'Il-Panama';
$string['country.pe'] = 'Il-Peru';
$string['country.pg'] = 'Il-Papua New Guinea';
$string['country.ph'] = 'Il-Filippini';
$string['country.pk'] = 'Il-Pakistan';
$string['country.pl'] = 'Polonja';
$string['country.pr'] = 'Il-Porto Riko';
$string['country.ps'] = '';
$string['country.pt'] = 'Portugall';
$string['country.pw'] = '';
$string['country.py'] = 'Il-Paragwaj';
$string['country.qa'] = 'Il-Qatar';
$string['country.ro'] = 'Romanija';
$string['country.rs'] = 's-Serbja';
$string['country.ru'] = 'Il-Federazzjoni Russa';
$string['country.rw'] = 'Ir-Ruwanda';
$string['country.sa'] = 'Sawdi Arabja';
$string['country.sb'] = 'Solomon Islands';
$string['country.sc'] = '';
$string['country.sd'] = 'Is-Sudan';
$string['country.se'] = 'l-iSvezja';
$string['country.sg'] = 'Singapor';
$string['country.si'] = 'Slovenja';
$string['country.sk'] = 'Slovakkja';
$string['country.sl'] = 'Is-Sjerra Leone';
$string['country.sm'] = '';
$string['country.sn'] = 'Is-Senegal';
$string['country.so'] = 'Is-Somalia';
$string['country.sr'] = '';
$string['country.st'] = '';
$string['country.sv'] = 'El Salvador';
$string['country.sy'] = 'Ir-Repubblika Għarbija Sirjana';
$string['country.sz'] = 'Swaziland';
$string['country.td'] = 'Chad';
$string['country.tg'] = 'Togo';
$string['country.th'] = 'It-Tajlandja';
$string['country.tj'] = 'It-Taġikistan';
$string['country.tl'] = 'Timor tal-Lvant';
$string['country.tm'] = 'It-Turkmenistan';
$string['country.tn'] = 'It-Tuneżija';
$string['country.to'] = '';
$string['country.tr'] = 'It-Turkija';
$string['country.tt'] = 'Trinidad u Tobago';
$string['country.tv'] = '';
$string['country.tz'] = 'Ir-Repubblika Unita tat-Tanzanija';
$string['country.ua'] = 'L-Ukrajna';
$string['country.ug'] = 'L-Uganda';
$string['country.us'] = 'l-Istati Uniti';
$string['country.uy'] = 'L-Urugwaj';
$string['country.uz'] = 'L-Użbekistan';
$string['country.va'] = 'Is-Santa Sede (Il-Belt tal-Vatikan)';
$string['country.vc'] = '';
$string['country.ve'] = 'Il-Veneżwela';
$string['country.vn'] = 'Il-Vjetnam';
$string['country.vu'] = '';
$string['country.ws'] = '';
$string['country.ye'] = 'Il-Jemen';
$string['country.za'] = 'l-Afrika t\'Isfel';
$string['country.zm'] = 'Iż-Żambja';
$string['country.zw'] = 'Iż-Żimbabwe';

// List of nationalities based on the ISO 3166-1-alpha-2 filtered by Europass country list
// (http://europass.cedefop.europa.eu/TechnicalResources/XML/xsd/included_schemas/EUROPASS_Nationalities_V1.0.xsd)
$string['nationality.ad'] = '';
$string['nationality.ae'] = 'Emirati Għarab Magħquda';
$string['nationality.af'] = 'Afganistan';
$string['nationality.ag'] = '';
$string['nationality.al'] = 'Albanja';
$string['nationality.am'] = 'Armenja';
$string['nationality.ao'] = 'L-Angola';
$string['nationality.ar'] = 'Argentina';
$string['nationality.at'] = 'Awstrija';
$string['nationality.au'] = 'Awstralja';
$string['nationality.az'] = 'Azerbaijan';
$string['nationality.ba'] = 'Bosnia-Herzegovina';
$string['nationality.bb'] = '';
$string['nationality.bd'] = 'Bangladesh';
$string['nationality.be'] = 'Belġju';
$string['nationality.bf'] = 'Burkina Faso';
$string['nationality.bg'] = 'Bulgarja';
$string['nationality.bh'] = 'Bahrain';
$string['nationality.bi'] = 'Il-Burundi';
$string['nationality.bj'] = 'Benin';
$string['nationality.bn'] = '';
$string['nationality.bo'] = 'Bolivja';
$string['nationality.br'] = 'Brazil';
$string['nationality.bs'] = '';
$string['nationality.bt'] = 'Il-Bhutan';
$string['nationality.bw'] = 'Botswana';
$string['nationality.by'] = 'Belarus';
$string['nationality.bz'] = '';
$string['nationality.ca'] = 'Kanada';
$string['nationality.cd'] = 'Ir-Repubblika Demokratika tal-Kongo';
$string['nationality.cf'] = 'Ir-Repubblika Ċentrali Affrikana';
$string['nationality.cg'] = 'Il-Kongo';
$string['nationality.ch'] = 'Svizzera';
$string['nationality.ci'] = 'Il-Kosta ta’ l-Avorju';
$string['nationality.cl'] = 'Iċ-Ċili';
$string['nationality.cm'] = 'Il-Kamerun';
$string['nationality.cn'] = 'Iċ-Ċina';
$string['nationality.co'] = 'Kolumbja';
$string['nationality.cr'] = 'Il-Kosta Rika';
$string['nationality.cu'] = 'Kuba';
$string['nationality.cv'] = 'Cape Verde';
$string['nationality.cy'] = 'Ċipru';
$string['nationality.cz'] = 'Repubblika Ċeka';
$string['nationality.de'] = 'Ġermanja';
$string['nationality.dj'] = 'Djibouti';
$string['nationality.dk'] = 'Danimarka';
$string['nationality.dm'] = '';
$string['nationality.do'] = 'Ir-Repubblika Domenikana';
$string['nationality.dz'] = 'Algeria';
$string['nationality.ec'] = 'L-Ekwador';
$string['nationality.ee'] = 'L-Estonja';
$string['nationality.eg'] = 'Eġittu';
$string['nationality.er'] = 'Eritreja';
$string['nationality.es'] = 'Spanja';
$string['nationality.et'] = 'Etjopja';
$string['nationality.fi'] = 'Finlandja';
$string['nationality.fj'] = 'il-Gzejjer Fiji';
$string['nationality.fm'] = 'Messiku';
$string['nationality.fr'] = 'Franza';
$string['nationality.ga'] = 'Gabon';
$string['nationality.gb'] = 'ir-Renju Unit';
$string['nationality.gd'] = '';
$string['nationality.ge'] = 'Il-Ġeorġja';
$string['nationality.gh'] = 'Il-Gana';
$string['nationality.gl'] = '';
$string['nationality.gm'] = 'Il-Gambja';
$string['nationality.gn'] = 'Il-Gwinea';
$string['nationality.gq'] = 'Il-Gwinea Ekwatorjali';
$string['nationality.gr'] = 'Il-Greċja*';
$string['nationality.gt'] = 'Il-Gwatemala';
$string['nationality.gw'] = 'Guinea-Bissau';
$string['nationality.gy'] = 'Il-Gujana';
$string['nationality.hn'] = 'Il-Ħonduras';
$string['nationality.hr'] = 'Kroazja';
$string['nationality.ht'] = 'Ħajiti';
$string['nationality.hu'] = 'Ungerija';
$string['nationality.id'] = 'L-Indoneżja';
$string['nationality.ie'] = 'Irlanda';
$string['nationality.il'] = 'L-Iżrael';
$string['nationality.in'] = 'Indja';
$string['nationality.iq'] = 'L-Iraq';
$string['nationality.ir'] = 'Ir-Repubblika Islamika ta’ l-Iran';
$string['nationality.is'] = 'Islanda';
$string['nationality.it'] = 'Italja';
$string['nationality.jm'] = 'Il-Ġamajka';
$string['nationality.jo'] = 'Il-Ġordan';
$string['nationality.jp'] = 'Ġappun';
$string['nationality.ke'] = 'Il-Kenja';
$string['nationality.kg'] = 'Il-Kyrgyzstan';
$string['nationality.kh'] = 'Il-Kambodja';
$string['nationality.ki'] = '';
$string['nationality.km'] = 'Comoros';
$string['nationality.kn'] = '';
$string['nationality.kp'] = 'Il-Korea, Ir-Repubblika popolari Demokratika tal-Korea (Ta’ Fuq)';
$string['nationality.kr'] = 'Il-Korea, Ir-Repubblika tal-Korea (t’Isfel)';
$string['nationality.kw'] = 'Il-Kuwajt';
$string['nationality.kz'] = 'Il-Każakstan';
$string['nationality.la'] = 'Ir-Repubblika Demokratika Popolari tal-Laos';
$string['nationality.lb'] = 'Libanu';
$string['nationality.lc'] = '';
$string['nationality.li'] = 'Liechtenstein';
$string['nationality.lk'] = 'Is-Sri Lanka';
$string['nationality.lr'] = 'Il-Liberja';
$string['nationality.ls'] = 'Il-Lesoto';
$string['nationality.lt'] = 'Litwanja';
$string['nationality.lu'] = 'Lussemburgu';
$string['nationality.lv'] = 'Il-Latvja';
$string['nationality.ly'] = 'Libja';
$string['nationality.ma'] = 'Marokk';
$string['nationality.mc'] = 'Monako';
$string['nationality.md'] = 'Moldavja';
$string['nationality.me'] = '';
$string['nationality.mg'] = 'Il-Madagaskar';
$string['nationality.mh'] = '';
$string['nationality.mk'] = 'L-Ex Repubblika Jugoslava tal-Maċedonja';
$string['nationality.ml'] = 'Mali';
$string['nationality.mm'] = 'Myanmar';
$string['nationality.mn'] = 'Mongolja';
$string['nationality.mr'] = 'Il-Mawritanja';
$string['nationality.mt'] = 'Malta';
$string['nationality.mu'] = 'Il-Mawrixus';
$string['nationality.mv'] = '';
$string['nationality.mw'] = 'Il-Malawi';
$string['nationality.mx'] = 'Messiku';
$string['nationality.my'] = 'Malasja';
$string['nationality.mz'] = 'Il-Możambik';
$string['nationality.na'] = 'In-Namibia';
$string['nationality.ne'] = 'In-Niġer';
$string['nationality.ng'] = 'In-Niġerja';
$string['nationality.ni'] = 'In-Nikaragwa';
$string['nationality.nl'] = 'L-Olanda';
$string['nationality.no'] = 'Norvegja';
$string['nationality.np'] = 'In-Nepal';
$string['nationality.nr'] = '';
$string['nationality.nu'] = '';
$string['nationality.nz'] = 'New Zealand';
$string['nationality.om'] = 'L-Oman';
$string['nationality.pa'] = 'Il-Panama';
$string['nationality.pe'] = 'Il-Peru';
$string['nationality.pg'] = 'Il-Papua New Guinea';
$string['nationality.ph'] = 'Il-Filippini';
$string['nationality.pk'] = 'Il-Pakistan';
$string['nationality.pl'] = 'Polonja';
$string['nationality.pr'] = 'Il-Porto Riko';
$string['nationality.ps'] = '';
$string['nationality.pt'] = 'Portugall';
$string['nationality.pw'] = '';
$string['nationality.py'] = 'Il-Paragwaj';
$string['nationality.qa'] = 'Il-Qatar';
$string['nationality.ro'] = 'Romanija';
$string['nationality.rs'] = 's-Serbja u l-Montenegro';
$string['nationality.ru'] = 'Il-Federazzjoni Russa';
$string['nationality.rw'] = 'Ir-Ruwanda';
$string['nationality.sa'] = 'Sawdi Arabja';
$string['nationality.sb'] = 'Solomon Islands';
$string['nationality.sc'] = '';
$string['nationality.sd'] = 'Is-Sudan';
$string['nationality.se'] = 'l-iSvezja';
$string['nationality.sg'] = 'Singapor';
$string['nationality.si'] = 'Slovenja';
$string['nationality.sk'] = 'Slovakkja';
$string['nationality.sl'] = 'Is-Sjerra Leone';
$string['nationality.sm'] = '';
$string['nationality.sn'] = 'Is-Senegal';
$string['nationality.so'] = 'Is-Somalia';
$string['nationality.sr'] = '';
$string['nationality.st'] = '';
$string['nationality.sv'] = 'El Salvador';
$string['nationality.sy'] = 'Ir-Repubblika Għarbija Sirjana';
$string['nationality.sz'] = 'Swaziland';
$string['nationality.td'] = 'Chad';
$string['nationality.tg'] = 'Togo';
$string['nationality.th'] = 'It-Tajlandja';
$string['nationality.tj'] = 'It-Taġikistan';
$string['nationality.tl'] = 'Timor tal-Lvant';
$string['nationality.tm'] = 'It-Turkmenistan';
$string['nationality.tn'] = 'It-Tuneżija';
$string['nationality.to'] = '';
$string['nationality.tr'] = 'It-Turkija';
$string['nationality.tt'] = 'Trinidad u Tobago';
$string['nationality.tv'] = '';
$string['nationality.tz'] = 'Ir-Repubblika Unita tat-Tanzanija';
$string['nationality.ua'] = 'L-Ukrajna';
$string['nationality.ug'] = 'L-Uganda';
$string['nationality.us'] = 'l-Istati Uniti';
$string['nationality.uy'] = 'L-Urugwaj';
$string['nationality.uz'] = 'L-Użbekistan';
$string['nationality.va'] = 'Is-Santa Sede (Il-Belt tal-Vatikan)';
$string['nationality.vc'] = '';
$string['nationality.ve'] = 'Il-Veneżwela';
$string['nationality.vn'] = 'Il-Vjetnam';
$string['nationality.vu'] = '';
$string['nationality.ws'] = '';
$string['nationality.ye'] = 'Il-Jemen';
$string['nationality.za'] = 'l-Afrika t\'Isfel';
$string['nationality.zm'] = 'Iż-Żambja';
$string['nationality.zw'] = 'Iż-Żimbabwe';

?>
