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
$string['europassCV'] = 'Europass öz geçmiş (CV)';
$string['europassLP'] = 'Europass Dil Pasaportu';
$string['photograph'] = 'Fotoğraf';
$string['photographdesc'] = 'Photo will be embeded in Europass XML';
$string['phototoolarge'] = 'File too big. Filesize must not exceed 100 kB.';
$string['exportstep2'] = '2 - Document format';
$string['selectfiletype'] = 'Select file and date format';
$string['exportdate'] = 'Date';
$string['internaldateformat'] = 'Internal Date Format';
$string['selectinternaldatedesc'] = 'Date format used in Mahara';
$string['internaldate-dmy11'] = 'gg/aa/yyyy';
$string['internaldate-dmy12'] = 'gg.aa.yyyy';
$string['internaldate-dmy13'] = 'gg-aa-yyyy';
$string['internaldate-dmy21'] = 'gg/aa/yy';
$string['internaldate-dmy22'] = 'gg.aa.yy';
$string['internaldate-dmy23'] = 'gg-aa-yy';
$string['internaldate-mdy11'] = 'aa/gg/yyyy';
$string['internaldate-mdy12'] = 'aa.gg.yyyy';
$string['internaldate-mdy13'] = 'aa-gg-yyyy';
$string['internaldate-mdy21'] = 'aa/gg/yy';
$string['internaldate-mdy22'] = 'aa.gg.yy';
$string['internaldate-mdy23'] = 'aa-gg-yy';
$string['internaldate-ymd11'] = 'yyyy/aa/gg';
$string['internaldate-ymd12'] = 'yyyy.aa.gg';
$string['internaldate-ymd13'] = 'yyyy-aa-gg';
$string['internaldate-ymd21'] = 'yy/aa/gg';
$string['internaldate-ymd22'] = 'yy.aa.gg';
$string['internaldate-ymd23'] = 'yy-aa-gg';
$string['internaldate-yonly'] = 'yyyy';
$string['internaldate-other'] = 'other';
$string['externaldateformat'] = 'External Date Format';
$string['selectexternaldatedesc'] = 'Date format used in export';
$string['externaldate-numeric-long'] = 'gg/aa/yyyy';
$string['externaldate-text-long'] = 'gg. ay yyyy';
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
$string['identification'] = 'Kişisel Bilgiler';
$string['identification-birthdate'] = 'Doğum tarihi';
$string['identification-birthplace'] = 'Doğum yeri';
$string['identification-lastname'] = 'Soyad';
$string['identification-firstname'] = 'Ad';
$string['identification-addressLine'] = 'Mahalle, Cadde ve Sokak Adı / Numarası';
$string['identification-municipality'] = 'Şehir';
$string['identification-postalCode'] = 'Posta Kodu';
$string['identification-country'] = 'Ülke';
$string['identification-contactinfo-telephone'] = 'Telefon';
$string['identification-contactinfo-mobile'] = 'İş/Ev/Cep';
$string['identification-contactinfo-fax'] = 'Faks';
$string['identification-contactinfo-email'] = 'e-posta';
$string['identification-nationality'] = 'Uyruk';
$string['identification-gender'] = 'Cinsiyet';

// Europass CV - STEP 2
$string['application'] = 'Talep edilen iş / mesleki alan';

// Europass CV - STEP 3
$string['workexperience'] = 'İş deneyimi';

// Europass CV - STEP 4
$string['education'] = 'Eğitim ve öğretim';

// Europass CV - STEP 5
$string['mothertongue'] = 'Ana dil(ler)';
$string['otherlanguage'] = 'Diğer dil(ler)';

$string['language-foreign-listening'] = 'Dinleme';
$string['language-foreign-listening-th'] = 'Dinleme';
$string['language-foreign-reading'] = 'Okuma';
$string['language-foreign-reading-th'] = 'Okuma';
$string['language-foreign-spokeninteraction'] = 'Karşılıklı konuşma';
$string['language-foreign-spokeninteraction-th'] = 'Karşılıklı<br>konuşma';
$string['language-foreign-spokenproduction'] = 'Sözlü anlatım';
$string['language-foreign-spokenproduction-th'] = 'Sözlü<br>anlatım';
$string['language-foreign-writing'] = 'Yazma';
$string['language-foreign-writing-th'] = 'Yazma';
$string['language-foreign-CEF-level'] = 'Avrupa Ortak Ölçüt Çerçevesi (Common European Framework of Reference - CEF)';

$string['language-foreign-level.A1'] = 'Temel Kullanıcı (A1)';
$string['language-foreign-level.A2'] = 'Temel Kullanıcı (A2)';
$string['language-foreign-level.B1'] = 'Bağımsız Kullanıcı (B1)';
$string['language-foreign-level.B2'] = 'Bağımsız Kullanıcı (B2)';
$string['language-foreign-level.C1'] = 'Yeterli Kullanıcı (C1)';
$string['language-foreign-level.C2'] = 'Yeterli Kullanıcı (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Sürücü belgesi';
$string['skills-and-competences'] = 'Kişisel beceri ve yeterlilikler';
$string['socialskill'] = 'Sosyal beceril ve yeterlilikler';
$string['organisationalskill'] = 'Organizasyonel beceril ve yeterlilikler';
$string['technicalskill'] = 'Teknik beceril ve yeterlilikler';
$string['computerskill'] = 'Bilgisayar beceri ve yeterlilikleri';
$string['artisticskill'] = 'Sanatsal beceriler ve yeterlilikler';
$string['otherskill'] = 'Diğer beceril ve yeterlilikler';
$string['additionalinfo'] = 'İlave bilgi';
$string['annexes'] = 'Ek';

// Europass LP - STEP 2
$string['language-certificates'] = 'Diploma(lar) veya sertifika(lar)';
$string['diploma-title'] = 'Başlık';
$string['diploma-awardingBody'] = 'Veren kurum';
$string['diploma-date'] = 'Tarih';
$string['diploma-level'] = 'Avrupa düzeyi';
$string['language-experiences'] = 'Dil deneyim(ler)i';
$string['experiences-period-from'] = 'Kimden';
$string['experiences-period-to'] = 'Kime';

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
$string['language.ab'] = 'Abazaca';
$string['language.af'] = 'Afrikaanca';
$string['language.an'] = 'Aragonca';
$string['language.ar'] = 'Arapça';
$string['language.as'] = 'Assamca';
$string['language.az'] = 'Azerice';
$string['language.be'] = 'Belarusca';
$string['language.bg'] = 'Bulgarca';
$string['language.bn'] = 'Bangladeşce';
$string['language.bo'] = 'Tibetce';
$string['language.br'] = 'Bretonca';
$string['language.bs'] = 'Bosnaca';
$string['language.ca'] = 'Katalanca';
$string['language.ce'] = 'Çeçence';
$string['language.co'] = 'Korsikaca';
$string['language.cs'] = 'Çekçe';
$string['language.cy'] = 'Galce';
$string['language.da'] = 'Danimarkaca';
$string['language.de'] = 'Almanca';
$string['language.el'] = 'Yunanca';
$string['language.en'] = 'İngilizce';
$string['language.es'] = 'İspanyolca / Kastilyaca';
$string['language.et'] = 'Estonca';
$string['language.eu'] = 'Baskca';
$string['language.fa'] = 'Farsça';
$string['language.fi'] = 'Fince';
$string['language.fj'] = 'Fijice';
$string['language.fo'] = 'Faraoece';
$string['language.fr'] = 'Fransızca';
$string['language.fy'] = 'Frizyaca';
$string['language.ga'] = 'İrlandaca';
$string['language.gd'] = 'Gaelce';
$string['language.gl'] = 'Galicyaca';
$string['language.gv'] = 'Manksça';
$string['language.he'] = 'İbranice';
$string['language.hi'] = 'Hintçe';
$string['language.hr'] = 'Hirvatça';
$string['language.ht'] = 'Haitice';
$string['language.hu'] = 'Macarca';
$string['language.hy'] = 'Ermenice';
$string['language.id'] = 'Endonezca';
$string['language.is'] = 'İzlandaca';
$string['language.it'] = 'İtalyanca';
$string['language.ja'] = 'Japonca';
$string['language.jv'] = 'Javaca';
$string['language.ka'] = 'Gürcüce';
$string['language.kg'] = 'Kongoca';
$string['language.ko'] = 'Koreca';
$string['language.ku'] = 'Kürtçe';
$string['language.kw'] = 'Kornişce';
$string['language.ky'] = 'Kırgızca';
$string['language.lb'] = 'Lüksemburgca';
$string['language.li'] = 'Limburgca';
$string['language.ln'] = 'Lingalaca';
$string['language.lt'] = 'Litvanca';
$string['language.lv'] = 'Letonca';
$string['language.mg'] = 'Malagasi';
$string['language.mk'] = 'Makedonca';
$string['language.mn'] = 'Mogolca';
$string['language.mo'] = 'Moldovca';
$string['language.ms'] = 'Malezyaca';
$string['language.mt'] = 'Maltaca';
$string['language.my'] = 'Burmaca';
$string['language.nb'] = 'Norveççe (Bokmål)';
$string['language.ne'] = 'Nepalce';
$string['language.nl'] = 'Hollandaca';
$string['language.nn'] = 'Norveççe (Norsk)';
$string['language.no'] = 'Norveççe';
$string['language.pl'] = 'Lehçe';
$string['language.pt'] = 'Portekizce';
$string['language.rm'] = 'Raeto-Romance';
$string['language.ro'] = 'rumeenia';
$string['language.ru'] = 'Rusça';
$string['language.r0'] = 'Romany'; // doesn't really have an ISO 369-1 code...
$string['language.sc'] = 'Sarduca';
$string['language.se'] = 'Kuzey Samice';
$string['language.sk'] = 'Slovakça';
$string['language.sl'] = 'Slovence';
$string['language.so'] = 'Somalice';
$string['language.sq'] = 'Arnavutça';
$string['language.sr'] = 'Sırpça';
$string['language.sv'] = 'İsveççe';
$string['language.sw'] = 'swahilice';
$string['language.tk'] = 'Türkmence';
$string['language.tr'] = 'Türkçe';
$string['language.ty'] = 'Tahitice';
$string['language.uk'] = 'Ukraynaca';
$string['language.ur'] = 'Urduca';
$string['language.uz'] = 'Özbekçe';
$string['language.vi'] = 'Vietnamca';
$string['language.yi'] = 'Yidce';
$string['language.zh'] = 'Çince';
$string['language.cu'] = 'Slavca';
$string['language.eo'] = 'Esperantoca';
$string['language.la'] = 'Latince';
$string['language.oc'] = 'Oksitanca';
$string['language.vo'] = 'Volapükçe';
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
$string['country.ae'] = 'Birleşik Arap Emirlikleri';
$string['country.af'] = 'Afganistan';
$string['country.ag'] = 'Antigua ve Barbuda';
$string['country.al'] = 'Arnavutluk';
$string['country.am'] = 'Ermenistan';
$string['country.ao'] = 'Angola';
$string['country.ar'] = 'Arjantin';
$string['country.at'] = 'Avusturya';
$string['country.au'] = 'Avustralya';
$string['country.az'] = 'Azerbaycan';
$string['country.ba'] = 'Bosna-Hersek';
$string['country.bb'] = 'Barbados';
$string['country.bd'] = 'Bangladeş';
$string['country.be'] = 'Belçika';
$string['country.bf'] = 'Burkina Faso';
$string['country.bg'] = 'Bulgaristan';
$string['country.bh'] = 'Bahreyn';
$string['country.bi'] = 'Burundi';
$string['country.bj'] = 'Benin';
$string['country.bn'] = 'Brunei';
$string['country.bo'] = 'Bolivya';
$string['country.br'] = 'Brezilya';
$string['country.bs'] = 'Bahama Adaları';
$string['country.bt'] = 'Bhutan';
$string['country.bw'] = 'Botsvana';
$string['country.by'] = 'Beyaz Rusya';
$string['country.bz'] = 'Belize';
$string['country.ca'] = 'Kanada';
$string['country.cd'] = 'Demokratik Kongo Cumhuriyeti';
$string['country.cf'] = 'Orta Afrika Cumhuriyeti';
$string['country.cg'] = 'Kongo Cumhuriyeti';
$string['country.ch'] = 'İsviçre';
$string['country.ci'] = 'Fildişi Sahili';
$string['country.cl'] = 'Şili';
$string['country.cm'] = 'Kamerun';
$string['country.cn'] = 'Çin';
$string['country.co'] = 'Kolombiya';
$string['country.cr'] = 'Kosta Rika';
$string['country.cu'] = 'Küba';
$string['country.cv'] = 'Yeşilburun';
$string['country.cy'] = 'Kıbrıs';
$string['country.cz'] = 'Çek Cumhuriyeti';
$string['country.de'] = 'Almanya';
$string['country.dj'] = 'Cibuti';
$string['country.dk'] = 'Danimarka';
$string['country.dm'] = 'Dominik';
$string['country.do'] = 'Dominik Cumhuriyeti';
$string['country.dz'] = 'Cezayir';
$string['country.ec'] = 'Ekvador';
$string['country.ee'] = 'Estonya';
$string['country.eg'] = 'Mısır';
$string['country.er'] = 'Eritre';
$string['country.es'] = 'İspanya';
$string['country.et'] = 'Etiyopya';
$string['country.fi'] = 'Finlandiya';
$string['country.fj'] = 'Fiji';
$string['country.fm'] = 'Mikronezya';
$string['country.fr'] = 'Fransa';
$string['country.ga'] = 'Gabon';
$string['country.gb'] = 'Birleşik Krallık';
$string['country.gd'] = 'Granada';
$string['country.ge'] = 'Gürcistan';
$string['country.gh'] = 'Gana';
$string['country.gl'] = 'Grönland';
$string['country.gm'] = 'Gambia';
$string['country.gn'] = 'Gine';
$string['country.gq'] = 'Ekvator Ginesi';
$string['country.gr'] = 'Yunanistan';
$string['country.gt'] = 'Guatemala';
$string['country.gw'] = 'Gine Bissau';
$string['country.gy'] = 'Guyana';
$string['country.hn'] = 'Honduras';
$string['country.hr'] = 'Hirvatistan';
$string['country.ht'] = 'Haiti';
$string['country.hu'] = 'Macaristan';
$string['country.id'] = 'Endonezya';
$string['country.ie'] = 'İrlanda';
$string['country.il'] = 'İsrail';
$string['country.in'] = 'Hindistan';
$string['country.iq'] = 'Irak';
$string['country.ir'] = 'Iran';
$string['country.is'] = 'İzlanda';
$string['country.it'] = 'İtalya';
$string['country.jm'] = 'Jamaika';
$string['country.jo'] = 'Ürdün';
$string['country.jp'] = 'Japonya';
$string['country.ke'] = 'Kenya';
$string['country.kg'] = 'Kırgızistan';
$string['country.kh'] = 'Kamboçya';
$string['country.ki'] = 'Kiribati';
$string['country.km'] = 'Komor';
$string['country.kn'] = 'Saint Kitts ve Nevis';
$string['country.kp'] = 'Kuzey kore';
$string['country.kr'] = 'Güney Kore';
$string['country.kw'] = 'Kuveyt';
$string['country.kz'] = 'Kazakistan';
$string['country.la'] = 'Laos';
$string['country.lb'] = 'Lübnan';
$string['country.lc'] = 'Saint Lucia';
$string['country.li'] = 'Lihtenştayn';
$string['country.lk'] = 'Sri Lanka';
$string['country.lr'] = 'Liberya';
$string['country.ls'] = 'Lesoto';
$string['country.lt'] = 'Litvanya';
$string['country.lu'] = 'Lüksemburg';
$string['country.lv'] = 'Letonya';
$string['country.ly'] = 'Libya';
$string['country.ma'] = 'Fas';
$string['country.mc'] = 'Monako';
$string['country.md'] = 'Moldova';
$string['country.me'] = 'Karadağ';
$string['country.mg'] = 'Madagaskar';
$string['country.mh'] = 'Marşal Adaları';
$string['country.mk'] = 'Eski Yugoslav Makedonya Cumhuriyeti';
$string['country.ml'] = 'Mali';
$string['country.mm'] = 'Myanmar';
$string['country.mn'] = 'Moğolistan';
$string['country.mr'] = 'Moritanya';
$string['country.mt'] = 'Malta';
$string['country.mu'] = 'Mauritius';
$string['country.mv'] = 'Maldivler';
$string['country.mw'] = 'Malavi';
$string['country.mx'] = 'Meksika';
$string['country.my'] = 'Malezya';
$string['country.mz'] = 'Mozambik';
$string['country.na'] = 'Namibya';
$string['country.ne'] = 'Nijer';
$string['country.ng'] = 'Nijerya';
$string['country.ni'] = 'Nikaragua';
$string['country.nl'] = 'Hollanda';
$string['country.no'] = 'Norveç';
$string['country.np'] = 'Nepal';
$string['country.nr'] = 'Nauru';
$string['country.nu'] = 'Niue';
$string['country.nz'] = 'Yeni Zelanda';
$string['country.om'] = 'Umman';
$string['country.pa'] = 'Panama';
$string['country.pe'] = 'Peru';
$string['country.pg'] = 'Papua Yeni Gine';
$string['country.ph'] = 'Filipinler';
$string['country.pk'] = 'Pakistan';
$string['country.pl'] = 'Polonya';
$string['country.pr'] = 'Porto Riko';
$string['country.ps'] = '';
$string['country.pt'] = 'Portekiz';
$string['country.pw'] = 'Palau';
$string['country.py'] = 'Paraguay';
$string['country.qa'] = 'Katar';
$string['country.ro'] = 'Romanya';
$string['country.rs'] = 'Sırbistan';
$string['country.ru'] = 'Rusya';
$string['country.rw'] = 'Ruanda';
$string['country.sa'] = 'Suudi Arabistan';
$string['country.sb'] = 'Solomon Adaları';
$string['country.sc'] = 'Seyşel Adaları';
$string['country.sd'] = 'Sudan';
$string['country.se'] = 'İsveç';
$string['country.sg'] = 'Singapur';
$string['country.si'] = 'Slovenya';
$string['country.sk'] = 'Slovakya';
$string['country.sl'] = 'Sierra Leone';
$string['country.sm'] = 'San Marino';
$string['country.sn'] = 'Senegal';
$string['country.so'] = 'Somali';
$string['country.sr'] = 'Surinam';
$string['country.st'] = 'São Tomé ve Príncipe';
$string['country.sv'] = 'El Salvador';
$string['country.sy'] = 'Suriye';
$string['country.sz'] = 'Svaziland';
$string['country.td'] = 'Çad';
$string['country.tg'] = 'Togo';
$string['country.th'] = 'Tayland';
$string['country.tj'] = 'Tacikistan';
$string['country.tl'] = 'Doğu Timor';
$string['country.tm'] = 'Türkmenistan';
$string['country.tn'] = 'Tunus';
$string['country.to'] = 'Tonga';
$string['country.tr'] = 'Turkiye';
$string['country.tt'] = 'Trinidad ve Tobago';
$string['country.tv'] = 'Tuvalu';
$string['country.tz'] = 'Tanzanya';
$string['country.ua'] = 'Ukrayna';
$string['country.ug'] = 'Uganda';
$string['country.us'] = 'Amerika Birleşik Devletleri';
$string['country.uy'] = 'Uruguay';
$string['country.uz'] = 'Özbekistan';
$string['country.va'] = 'Vatikan';
$string['country.vc'] = 'Saint Vincent ve Grenadineler';
$string['country.ve'] = 'Venezuella';
$string['country.vn'] = 'Vietnam';
$string['country.vu'] = 'Vanuatu';
$string['country.ws'] = 'Samoa';
$string['country.ye'] = 'Yemen';
$string['country.za'] = 'Güney Afrika';
$string['country.zm'] = 'Zambiya';
$string['country.zw'] = 'Zimbabve';

// List of nationalities based on the ISO 3166-1-alpha-2 filtered by Europass country list
// (http://europass.cedefop.europa.eu/TechnicalResources/XML/xsd/included_schemas/EUROPASS_Nationalities_V1.0.xsd)
$string['nationality.ad'] = 'Andoralı';
$string['nationality.ae'] = 'Arap';
$string['nationality.af'] = 'Afgan';
$string['nationality.ag'] = 'Antigua ve Barbudalı';
$string['nationality.al'] = 'Arnavut';
$string['nationality.am'] = 'Ermeni';
$string['nationality.ao'] = 'Angolalı';
$string['nationality.ar'] = 'Arjantin';
$string['nationality.at'] = 'Avusturyalı';
$string['nationality.au'] = 'Avusturalyalı';
$string['nationality.az'] = 'Azeri';
$string['nationality.ba'] = 'Bosna-Hersekli';
$string['nationality.bb'] = 'Barbadoslu';
$string['nationality.bd'] = 'Bangladeşli';
$string['nationality.be'] = 'Belçikalı';
$string['nationality.bf'] = 'Burkina Fasolu';
$string['nationality.bg'] = 'Bulgar';
$string['nationality.bh'] = 'Bahreynli';
$string['nationality.bi'] = 'Brundili';
$string['nationality.bj'] = 'Beninli';
$string['nationality.bn'] = 'Buruneli';
$string['nationality.bo'] = 'Bolivyalı';
$string['nationality.br'] = 'Brezilyalı';
$string['nationality.bs'] = 'Bahamalı';
$string['nationality.bt'] = 'Bhutanlı';
$string['nationality.bw'] = 'Bostwanalı';
$string['nationality.by'] = 'Beyaz Rus';
$string['nationality.bz'] = 'Belizli';
$string['nationality.ca'] = 'Kanadalı';
$string['nationality.cd'] = 'Kongolu (Demokratik Kongo Cumhuriyeti)';
$string['nationality.cf'] = 'Central Afrikalı';
$string['nationality.cg'] = 'Kongolu (Kongo Cumhuriyetli)';
$string['nationality.ch'] = 'İsviçreli';
$string['nationality.ci'] = 'İvorialı';
$string['nationality.cl'] = 'Şilili';
$string['nationality.cm'] = 'Kamerunlu';
$string['nationality.cn'] = 'Çinli';
$string['nationality.co'] = 'Kolombiyalı';
$string['nationality.cr'] = 'Kosta Rikalı';
$string['nationality.cu'] = 'Kübalı';
$string['nationality.cv'] = 'Cape Verdli';
$string['nationality.cy'] = 'Kıbrıslı';
$string['nationality.cz'] = 'Çek';
$string['nationality.de'] = 'Alman';
$string['nationality.dj'] = 'Cibutili';
$string['nationality.dk'] = 'Danimarkalı';
$string['nationality.dm'] = 'Dominik';
$string['nationality.do'] = 'Dominik Cumhuriyetli';
$string['nationality.dz'] = 'Cezayirli';
$string['nationality.ec'] = 'Ekvatorlu';
$string['nationality.ee'] = 'Estonyalı';
$string['nationality.eg'] = 'Mısırlı';
$string['nationality.er'] = 'Eritreli';
$string['nationality.es'] = 'İspanyol';
$string['nationality.et'] = 'Etiyopyalı';
$string['nationality.fi'] = 'Fin';
$string['nationality.fj'] = 'Fijili';
$string['nationality.fm'] = 'Mikronezyalı';
$string['nationality.fr'] = 'Fransız';
$string['nationality.ga'] = 'Gabonlu';
$string['nationality.gb'] = 'İngiliz';
$string['nationality.gd'] = 'Grenadalı';
$string['nationality.ge'] = 'Gürcü';
$string['nationality.gh'] = 'Ganalı';
$string['nationality.gl'] = 'Gröndlandlı';
$string['nationality.gm'] = 'Gambiyalı';
$string['nationality.gn'] = 'Gineli (Gine Cumhuriyeti)';
$string['nationality.gq'] = 'Ekvatorlu (Ekvator Ginesi)';
$string['nationality.gr'] = 'Yunan';
$string['nationality.gt'] = 'Guatemalalı';
$string['nationality.gw'] = 'Gineli (Gine-Bissau Cumhuriyeti)';
$string['nationality.gy'] = 'Guyanalı';
$string['nationality.hn'] = 'Honduraslı';
$string['nationality.hr'] = 'Hırvat';
$string['nationality.ht'] = 'Haitili';
$string['nationality.hu'] = 'Macar';
$string['nationality.id'] = 'Endonezyalı';
$string['nationality.ie'] = 'İrlandalı';
$string['nationality.il'] = 'İsrailli';
$string['nationality.in'] = 'Hindu';
$string['nationality.iq'] = 'İranlı';
$string['nationality.ir'] = 'Iraklı';
$string['nationality.is'] = 'İzlandalı';
$string['nationality.it'] = 'İtalyan';
$string['nationality.jm'] = 'Jameykalı';
$string['nationality.jo'] = 'Ürdünlü';
$string['nationality.jp'] = 'Japon';
$string['nationality.ke'] = 'Kenyalı';
$string['nationality.kg'] = 'Kırgız';
$string['nationality.kh'] = 'Kamboçyalı';
$string['nationality.ki'] = 'Kirabatili';
$string['nationality.km'] = 'Komoroslu';
$string['nationality.kn'] = 'Saint Kitts ve Nevisli';
$string['nationality.kp'] = 'Kuzey Koreli (Kore Demokratik Halk Cumhuriyeti)';
$string['nationality.kr'] = 'Güney Koreli (Kore Cumhuriyeti)';
$string['nationality.kw'] = 'Kuveytli';
$string['nationality.kz'] = 'Kazak';
$string['nationality.la'] = 'Laoslu';
$string['nationality.lb'] = 'Lübnanlı';
$string['nationality.lc'] = 'Saint Lucianlı';
$string['nationality.li'] = 'Lihtenyştanlı';
$string['nationality.lk'] = 'Sri Lankalı';
$string['nationality.lr'] = 'Liberyalı';
$string['nationality.ls'] = 'Lesotholu';
$string['nationality.lt'] = 'Litvanyalı';
$string['nationality.lu'] = 'Lüksemburglu';
$string['nationality.lv'] = 'Leton';
$string['nationality.ly'] = 'Libyalı';
$string['nationality.ma'] = 'Faslı';
$string['nationality.mc'] = 'Monakolu';
$string['nationality.md'] = 'Moldovyalı';
$string['nationality.me'] = 'Karadağlı';
$string['nationality.mg'] = 'Madagaskarlı';
$string['nationality.mh'] = 'Marshallı';
$string['nationality.mk'] = 'Makedon (Eski Yugoslav Makedonya Cumhuriyeti)';
$string['nationality.ml'] = 'Malili';
$string['nationality.mm'] = 'Burmalı';
$string['nationality.mn'] = 'Moğol';
$string['nationality.mr'] = 'Mauritanyalı';
$string['nationality.mt'] = 'Maltalı';
$string['nationality.mu'] = 'Mauritiuslu';
$string['nationality.mv'] = 'Maldivli';
$string['nationality.mw'] = 'Malavili';
$string['nationality.mx'] = 'Meksikalı';
$string['nationality.my'] = 'Malezyalı';
$string['nationality.mz'] = 'Mozambikli';
$string['nationality.na'] = 'Namibyalı';
$string['nationality.ne'] = 'Nijerli';
$string['nationality.ng'] = 'Nijeryalı';
$string['nationality.ni'] = 'Nikaragualı';
$string['nationality.nl'] = 'Hollandalı';
$string['nationality.no'] = 'Norveçli';
$string['nationality.np'] = 'Nepalli';
$string['nationality.nr'] = 'Naurulu';
$string['nationality.nu'] = 'Niueli';
$string['nationality.nz'] = 'Yeni Zellandalı';
$string['nationality.om'] = 'Ummanlı';
$string['nationality.pa'] = 'Panamalı';
$string['nationality.pe'] = 'Perulu';
$string['nationality.pg'] = 'Papua Yeni Gineli';
$string['nationality.ph'] = 'Filipinli';
$string['nationality.pk'] = 'Pakistanlı';
$string['nationality.pl'] = 'Leh';
$string['nationality.pr'] = 'Puerto Ricolu';
$string['nationality.ps'] = '';
$string['nationality.pt'] = 'Portekizli';
$string['nationality.pw'] = 'Palaulu';
$string['nationality.py'] = 'Paraguaylı';
$string['nationality.qa'] = 'Katarlı';
$string['nationality.ro'] = 'Romen';
$string['nationality.rs'] = 'Sırp';
$string['nationality.ru'] = 'Rus';
$string['nationality.rw'] = 'Ruandalı';
$string['nationality.sa'] = 'Suudi Arabistanlı';
$string['nationality.sb'] = 'Solomon';
$string['nationality.sc'] = 'Şeyselli';
$string['nationality.sd'] = 'Sudanlı';
$string['nationality.se'] = 'İsveçli';
$string['nationality.sg'] = 'Singapurlu';
$string['nationality.si'] = 'Sloven';
$string['nationality.sk'] = 'Slovak';
$string['nationality.sl'] = 'Sierra Leonlu';
$string['nationality.sm'] = 'San Marinolu';
$string['nationality.sn'] = 'Senagalli';
$string['nationality.so'] = 'Somalili';
$string['nationality.sr'] = 'Surinamlı';
$string['nationality.st'] = 'Sao Tome ve Principli';
$string['nationality.sv'] = 'Salvadorlu';
$string['nationality.sy'] = 'Suriyeli';
$string['nationality.sz'] = 'Swazili';
$string['nationality.td'] = 'Çadlı';
$string['nationality.tg'] = 'Togolu';
$string['nationality.th'] = 'Taylandlı';
$string['nationality.tj'] = 'Tacik';
$string['nationality.tl'] = 'Timor-Lesteli';
$string['nationality.tm'] = 'Türkmen';
$string['nationality.tn'] = 'Tunuslu';
$string['nationality.to'] = 'Tongalı';
$string['nationality.tr'] = 'Türk';
$string['nationality.tt'] = 'Trinidad ve Tobagolu';
$string['nationality.tv'] = 'Tuvalu';
$string['nationality.tz'] = 'Tanzanyalı';
$string['nationality.ua'] = 'Ukaynalı';
$string['nationality.ug'] = 'Ugandalı';
$string['nationality.us'] = 'Amerikalı';
$string['nationality.uy'] = 'Uruguaylı';
$string['nationality.uz'] = 'Özbek';
$string['nationality.va'] = 'Vatikanlı';
$string['nationality.vc'] = 'Saint Vincent ve Grenadalı';
$string['nationality.ve'] = 'Venezuelalı';
$string['nationality.vn'] = 'Vietnamlı';
$string['nationality.vu'] = 'Vanuatulu';
$string['nationality.ws'] = 'Samonlu';
$string['nationality.ye'] = 'Yemenli';
$string['nationality.za'] = 'Güney Afrikalı';
$string['nationality.zm'] = 'Zambiyalı';
$string['nationality.zw'] = 'Zimbaveli';

?>
