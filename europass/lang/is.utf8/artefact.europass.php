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
$string['europassCV'] = 'Europass ferilskrá (CV)';
$string['europassLP'] = 'Europass tungumálapassa';
$string['photograph'] = 'Mynd';
$string['photographdesc'] = 'Photo will be embeded in Europass XML';
$string['phototoolarge'] = 'File too big. Filesize must not exceed 100 kB.';
$string['exportstep2'] = '2 - Document format';
$string['selectfiletype'] = 'Select file and date format';
$string['exportdate'] = 'Date';
$string['internaldateformat'] = 'Internal Date Format';
$string['selectinternaldatedesc'] = 'Date format used in Mahara';
$string['internaldate-dmy11'] = 'dd/mm/áááá';
$string['internaldate-dmy12'] = 'dd.mm.áááá';
$string['internaldate-dmy13'] = 'dd-mm-áááá';
$string['internaldate-dmy21'] = 'dd/mm/áá';
$string['internaldate-dmy22'] = 'dd.mm.áá';
$string['internaldate-dmy23'] = 'dd-mm-áá';
$string['internaldate-mdy11'] = 'mm/dd/áááá';
$string['internaldate-mdy12'] = 'mm.dd.áááá';
$string['internaldate-mdy13'] = 'mm-dd-áááá';
$string['internaldate-mdy21'] = 'mm/dd/áá';
$string['internaldate-mdy22'] = 'mm.dd.áá';
$string['internaldate-mdy23'] = 'mm-dd-áá';
$string['internaldate-ymd11'] = 'áááá/mm/dd';
$string['internaldate-ymd12'] = 'áááá.mm.dd';
$string['internaldate-ymd13'] = 'áááá-mm-dd';
$string['internaldate-ymd21'] = 'áá/mm/dd';
$string['internaldate-ymd22'] = 'áá.mm.dd';
$string['internaldate-ymd23'] = 'áá-mm-dd';
$string['internaldate-yonly'] = 'áááá';
$string['internaldate-other'] = 'other';
$string['externaldateformat'] = 'External Date Format';
$string['selectexternaldatedesc'] = 'Date format used in export';
$string['externaldate-numeric-long'] = 'dd/mm/áááá';
$string['externaldate-text-long'] = 'dd. mánuður áááá';
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
$string['identification'] = 'Persónulegar upplýsingar';
$string['identification-birthdate'] = 'Fæðingardagur';
$string['identification-birthplace'] = 'Fæðingarstaður';
$string['identification-lastname'] = 'Eftirnafn (-nöfn)';
$string['identification-firstname'] = 'Nafn (-nöfn)';
$string['identification-addressLine'] = 'Gata / götunúmer';
$string['identification-municipality'] = 'Sveitarfélag';
$string['identification-postalCode'] = 'Póstnúmer';
$string['identification-country'] = 'Land';
$string['identification-contactinfo-telephone'] = 'Sími (-ar)';
$string['identification-contactinfo-mobile'] = 'Farsími';
$string['identification-contactinfo-fax'] = 'Símbréf';
$string['identification-contactinfo-email'] = 'Netfang (-föng)';
$string['identification-nationality'] = 'Þjóðerni';
$string['identification-gender'] = 'Kyn';

// Europass CV - STEP 2
$string['application'] = 'Starf sem óskað er eftir / starfssvið';

// Europass CV - STEP 3
$string['workexperience'] = 'Starfsreynsla';

// Europass CV - STEP 4
$string['education'] = 'Menntun og þjálfun';

// Europass CV - STEP 5
$string['mothertongue'] = 'Móðurmál (eitt eða fleiri)';
$string['otherlanguage'] = 'Annað/önnur tungumál';

$string['language-foreign-listening'] = 'Hlustun';
$string['language-foreign-listening-th'] = 'Hlustun';
$string['language-foreign-reading'] = 'Lestur';
$string['language-foreign-reading-th'] = 'Lestur';
$string['language-foreign-spokeninteraction'] = 'Samræður';
$string['language-foreign-spokeninteraction-th'] = 'Samræður';
$string['language-foreign-spokenproduction'] = 'Talmál';
$string['language-foreign-spokenproduction-th'] = 'Talmál';
$string['language-foreign-writing'] = 'Skriftir';
$string['language-foreign-writing-th'] = 'Skriftir';
$string['language-foreign-CEF-level'] = 'Samevrópski matsramminn fyrir tungumál';

$string['language-foreign-level.A1'] = 'Lágmarkskunnátta (A1)';
$string['language-foreign-level.A2'] = 'Lágmarkskunnátta (A2)';
$string['language-foreign-level.B1'] = 'Sjálfstæður notandi (B1)';
$string['language-foreign-level.B2'] = 'Sjálfstæður notandi (B2)';
$string['language-foreign-level.C1'] = 'Fær notandi (C1)';
$string['language-foreign-level.C2'] = 'Fær notandi (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Ökuskírteini';
$string['skills-and-competences'] = 'Persónuleg færni og hæfni';
$string['socialskill'] = 'Félagsleg færni og hæfni';
$string['organisationalskill'] = 'Skipulagshæfni og færni';
$string['technicalskill'] = 'Tæknileg hæfni og færni';
$string['computerskill'] = 'Tölvufærni og hæfni';
$string['artisticskill'] = 'Listræn færni og hæfni';
$string['otherskill'] = 'Önnur færni og hæfni';
$string['additionalinfo'] = 'Viðbótarupplýsingar';
$string['annexes'] = 'Viðaukar';

// Europass LP - STEP 2
$string['language-certificates'] = 'Prófskírteini og viðurkenningar';
$string['diploma-title'] = 'Titill';
$string['diploma-awardingBody'] = 'Stofnun sem gefur viðurkenningarð út';
$string['diploma-date'] = 'Dagsetning';
$string['diploma-level'] = 'Evrópustaðall';
$string['language-experiences'] = 'Tungumálareynsla';
$string['experiences-period-from'] = 'Frá';
$string['experiences-period-to'] = 'Til';

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
$string['language.ab'] = 'Abkasíska';
$string['language.af'] = 'Afríkanska';
$string['language.an'] = 'Aragónska';
$string['language.ar'] = 'Arabíska';
$string['language.as'] = 'Assameíska';
$string['language.az'] = 'Aserbaídsjanska';
$string['language.be'] = 'Belarusian';
$string['language.bg'] = 'Búlgarska';
$string['language.bn'] = 'Bengalska';
$string['language.bo'] = 'Tibetan';
$string['language.br'] = 'Breton';
$string['language.bs'] = 'Bosnian';
$string['language.ca'] = 'Catalan';
$string['language.ce'] = 'Téténska';
$string['language.co'] = 'Corsican';
$string['language.cs'] = 'Tékkneska';
$string['language.cy'] = 'Velska';
$string['language.da'] = 'Danska';
$string['language.de'] = 'Þýska';
$string['language.el'] = 'Gríska';
$string['language.en'] = 'Enska';
$string['language.es'] = 'Spænska / Kastilíska';
$string['language.et'] = 'Eistneska';
$string['language.eu'] = 'Baskneska';
$string['language.fa'] = 'Persneska';
$string['language.fi'] = 'Finnska';
$string['language.fj'] = 'Fijian';
$string['language.fo'] = 'Færeyska';
$string['language.fr'] = 'Franska';
$string['language.fy'] = 'Frísneska';
$string['language.ga'] = 'Írska';
$string['language.gd'] = 'Scottish Gaelic';
$string['language.gl'] = 'Galician';
$string['language.gv'] = 'Manx';
$string['language.he'] = 'Hebreska';
$string['language.hi'] = 'Hindí';
$string['language.hr'] = 'króatíska';
$string['language.ht'] = 'Haitian';
$string['language.hu'] = 'Ungverska';
$string['language.hy'] = 'Armenska';
$string['language.id'] = 'Indonesian';
$string['language.is'] = 'Íslenska';
$string['language.it'] = 'Ítalska';
$string['language.ja'] = 'Japanska';
$string['language.jv'] = 'Javanska';
$string['language.ka'] = 'Georgíska';
$string['language.kg'] = 'Kongo';
$string['language.ko'] = 'Korean';
$string['language.ku'] = 'Kurdish';
$string['language.kw'] = 'Cornish';
$string['language.ky'] = 'Kirghiz';
$string['language.lb'] = 'Lúxemborgíska';
$string['language.li'] = 'Limburgish';
$string['language.ln'] = 'Lingala';
$string['language.lt'] = 'Litháíska';
$string['language.lv'] = 'Lettneska';
$string['language.mg'] = 'Malagasy';
$string['language.mk'] = 'Makedónska';
$string['language.mn'] = 'Mongolian';
$string['language.mo'] = 'Moldavian';
$string['language.ms'] = 'Malay';
$string['language.mt'] = 'Maltneska';
$string['language.my'] = 'Burmese';
$string['language.nb'] = 'Norska (Bókmál)';
$string['language.ne'] = 'Nepali';
$string['language.nl'] = 'Hollenska';
$string['language.nn'] = 'Norska (Nýnorska)';
$string['language.no'] = 'Norska';
$string['language.pl'] = 'Pólska';
$string['language.pt'] = 'Portúgalska';
$string['language.rm'] = 'Raeto-Romance';
$string['language.ro'] = 'Rúmenska';
$string['language.ru'] = 'Rússneska';
$string['language.r0'] = 'Romaní'; // doesn't really have an ISO 369-1 code...
$string['language.sc'] = 'Sardinian';
$string['language.se'] = 'Norðursamíska';
$string['language.sk'] = 'Slovakíska';
$string['language.sl'] = 'Slóvenska';
$string['language.so'] = 'Somali';
$string['language.sq'] = 'Albanska';
$string['language.sr'] = 'Serbneska';
$string['language.sv'] = 'Sænska';
$string['language.sw'] = 'Swahili';
$string['language.tk'] = 'Túrkmenska';
$string['language.tr'] = 'Tyrkneska';
$string['language.ty'] = 'Tahitian';
$string['language.uk'] = 'Úkraínska';
$string['language.ur'] = 'Úrdú';
$string['language.uz'] = 'Úsbekska';
$string['language.vi'] = 'Víetnamska';
$string['language.yi'] = 'Yiddish';
$string['language.zh'] = 'Kínverska';
$string['language.cu'] = 'Church Slavic';
$string['language.eo'] = 'Esperantó';
$string['language.la'] = 'Latína';
$string['language.oc'] = 'Occitan';
$string['language.vo'] = 'Volapük';
// ISO 639-1:2002 languages that had been left out by Europass
$string['language.aa'] = 'Afar';
$string['language.ae'] = 'Avestíska';
$string['language.ak'] = 'Akanmál';
$string['language.am'] = 'Amharíska';
$string['language.av'] = 'Avarska';
$string['language.ay'] = 'Aímaríska';
$string['language.ba'] = 'Bashkir';
$string['language.bh'] = 'Bihari';
$string['language.bi'] = 'Bislama';
$string['language.bm'] = 'Bambara';
$string['language.ch'] = 'Chamorro';
$string['language.cr'] = 'Cree';
$string['language.cv'] = 'Chuvash';
$string['language.dv'] = 'Divehi';
$string['language.dz'] = 'Dzongkha';
$string['language.ee'] = 'Anló';
$string['language.ff'] = 'Fulah';
$string['language.gn'] = 'Guaraní';
$string['language.gu'] = 'Gujarati';
$string['language.ha'] = 'Hausa';
$string['language.ho'] = 'Hiri Motu';
$string['language.hz'] = 'Herero';
$string['language.ia'] = 'Interlingua (International Auxiliary Language Association)';
$string['language.ig'] = 'Igbo';
$string['language.ii'] = 'Sichuan Yi';
$string['language.ik'] = 'Inupiaq';
$string['language.io'] = 'Ido';
$string['language.iu'] = 'Inuktitut';
$string['language.ki'] = 'Kikuyu';
$string['language.kj'] = 'Kwanyama';
$string['language.kk'] = 'Kasakska';
$string['language.kl'] = 'Granlenska';
$string['language.km'] = 'Khmer';
$string['language.kn'] = 'Kanaríska';
$string['language.kr'] = 'Kanuri';
$string['language.ks'] = 'Kashmiri';
$string['language.kv'] = 'Komi';
$string['language.lg'] = 'Ganda';
$string['language.lo'] = 'Lao';
$string['language.lu'] = 'Luba-Katanga';
$string['language.mh'] = 'Malagasíska';
$string['language.mi'] = 'Maori';
$string['language.ml'] = 'Malayalam';
$string['language.mr'] = 'Marathi';
$string['language.na'] = 'Nárúska';
$string['language.nd'] = 'North Ndebele';
$string['language.ng'] = 'Ndonga';
$string['language.nr'] = 'Ndebele';
$string['language.nv'] = 'Navajo';
$string['language.ny'] = 'Chichewa';
$string['language.oj'] = 'Ojibwa';
$string['language.om'] = 'Oromo';
$string['language.or'] = 'Oriya';
$string['language.os'] = 'Ossetian';
$string['language.pa'] = 'Púndjabí';
$string['language.pi'] = 'Pali';
$string['language.ps'] = 'Pashto';
$string['language.qu'] = 'Quechua';
$string['language.rn'] = 'Kirundi';
$string['language.rw'] = 'Kinyarwanda';
$string['language.sa'] = 'Sanskrít';
$string['language.sd'] = 'Sindhi';
$string['language.sg'] = 'Sango';
$string['language.si'] = 'Sinhalese';
$string['language.sm'] = 'Samóska';
$string['language.sn'] = 'Shona';
$string['language.ss'] = 'Svasí';
$string['language.st'] = 'Sótó';
$string['language.su'] = 'Sundanese';
$string['language.ta'] = 'Tamílska';
$string['language.te'] = 'Telúgú';
$string['language.tg'] = 'Tajik';
$string['language.th'] = 'Taílenska';
$string['language.ti'] = 'Tigrinya';
$string['language.tl'] = 'Tagalog';
$string['language.tn'] = 'Tsvana';
$string['language.to'] = 'Tongverska';
$string['language.ts'] = 'Tsonga';
$string['language.tt'] = 'Tatar';
$string['language.tw'] = 'Tví';
$string['language.ug'] = 'Uighur';
$string['language.ve'] = 'Venda';
$string['language.wa'] = 'Walloon';
$string['language.wo'] = 'Wolof';
$string['language.xh'] = 'Xhosa';
$string['language.yo'] = 'Yoruba';
$string['language.za'] = 'Zhuang';
$string['language.zu'] = 'Súlúmál';

// ISO 3166-1-alpha-2 filtered by Europass 
// (http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm)
$string['country.ad'] = 'Andorra';
$string['country.ae'] = 'Sameinuðu arabísku furstadæmin';
$string['country.af'] = 'Afganistan';
$string['country.ag'] = 'Antígva og Barbúda';
$string['country.al'] = 'Albanía';
$string['country.am'] = 'Armenía';
$string['country.ao'] = 'Angóla';
$string['country.ar'] = 'Argentína';
$string['country.at'] = 'Austurríki';
$string['country.au'] = 'Ástralía';
$string['country.az'] = 'Aserbaídsjan';
$string['country.ba'] = 'Bosnía og Hersegóvína';
$string['country.bb'] = 'Barbados';
$string['country.bd'] = 'Bangladess';
$string['country.be'] = 'Belgía';
$string['country.bf'] = 'Búrkína Fasó';
$string['country.bg'] = 'Búlgaría';
$string['country.bh'] = 'Barein';
$string['country.bi'] = 'Búrúndí';
$string['country.bj'] = 'Benín';
$string['country.bn'] = 'Brúnei';
$string['country.bo'] = 'Bólivía';
$string['country.br'] = 'Brasilía';
$string['country.bs'] = 'Bahamaeyjar';
$string['country.bt'] = 'Bútan';
$string['country.bw'] = 'Botsvana';
$string['country.by'] = 'Hvíta-Rússland';
$string['country.bz'] = 'Belís';
$string['country.ca'] = 'Kanada';
$string['country.cd'] = 'Austur-Kongó';
$string['country.cf'] = 'Mið-Afríkulýðveldið';
$string['country.cg'] = 'Vestur-Kongó';
$string['country.ch'] = 'Sviss';
$string['country.ci'] = 'Fílabeinsströndin';
$string['country.cl'] = 'Chile';
$string['country.cm'] = 'Kamerún';
$string['country.cn'] = 'Kína';
$string['country.co'] = 'Kólumbía';
$string['country.cr'] = 'Kostaríka';
$string['country.cu'] = 'Kúba';
$string['country.cv'] = 'Grænhöfðaeyjar';
$string['country.cy'] = 'Kýpur';
$string['country.cz'] = 'Tékkland';
$string['country.de'] = 'Þýskaland';
$string['country.dj'] = 'Djíbútí';
$string['country.dk'] = 'Danmörk';
$string['country.dm'] = 'Dominica';
$string['country.do'] = 'Dóminíska lýðveldið';
$string['country.dz'] = 'Alsír';
$string['country.ec'] = 'Ekvador';
$string['country.ee'] = 'Eistland';
$string['country.eg'] = 'Egyptaland';
$string['country.er'] = 'Erítrea';
$string['country.es'] = 'Spánn';
$string['country.et'] = 'Eþíópía';
$string['country.fi'] = 'Finnland';
$string['country.fj'] = 'Fidjieyjar';
$string['country.fm'] = 'Míkrónesía';
$string['country.fr'] = 'Frakkland';
$string['country.ga'] = 'Gabon';
$string['country.gb'] = 'Bretland';
$string['country.gd'] = 'Grenada';
$string['country.ge'] = 'Georgía';
$string['country.gh'] = 'Gana';
$string['country.gl'] = 'Grænland';
$string['country.gm'] = 'Gambía';
$string['country.gn'] = 'Gínea';
$string['country.gq'] = 'Miðbaugs-Gínea';
$string['country.gr'] = 'Grikkland';
$string['country.gt'] = 'Gvatemala';
$string['country.gw'] = 'Gínea-Bissá';
$string['country.gy'] = 'Gvæjana';
$string['country.hn'] = 'Hondúras';
$string['country.hr'] = 'Króatía';
$string['country.ht'] = 'Haítí';
$string['country.hu'] = 'Ungverjaland';
$string['country.id'] = 'Indónesía';
$string['country.ie'] = 'Írland';
$string['country.il'] = 'Ísrael';
$string['country.in'] = 'Indland';
$string['country.iq'] = 'Írak';
$string['country.ir'] = 'Íran';
$string['country.is'] = 'Ísland';
$string['country.it'] = 'Ítalía';
$string['country.jm'] = 'Jamaíka';
$string['country.jo'] = 'Jórdanía';
$string['country.jp'] = 'Japan';
$string['country.ke'] = 'Kenía';
$string['country.kg'] = 'Kirgisistan';
$string['country.kh'] = 'Kambódía';
$string['country.ki'] = 'Kíribatí';
$string['country.km'] = 'Kómoreyjar';
$string['country.kn'] = 'Sankti Kristófer og Nevis';
$string['country.kp'] = 'Norður-Kórea';
$string['country.kr'] = 'Suður-Kórea';
$string['country.kw'] = 'Kúveit';
$string['country.kz'] = 'Kasakstan';
$string['country.la'] = 'Laos';
$string['country.lb'] = 'Líbanon';
$string['country.lc'] = 'Sankti Lúsía';
$string['country.li'] = 'Liechtenstein';
$string['country.lk'] = 'Srí Lanka';
$string['country.lr'] = 'Líbería';
$string['country.ls'] = 'Lesótó';
$string['country.lt'] = 'Litháen';
$string['country.lu'] = 'Lúxemborg';
$string['country.lv'] = 'Lettland';
$string['country.ly'] = 'Líbía';
$string['country.ma'] = 'Marokkó';
$string['country.mc'] = 'Mónakó';
$string['country.md'] = 'Moldóva';
$string['country.me'] = 'Svartfjallaland';
$string['country.mg'] = 'Madagaskar';
$string['country.mh'] = 'Marshalleyjar';
$string['country.mk'] = 'Makedónía, fyrrum lýðveldi Júgóslavíu';
$string['country.ml'] = 'Malí';
$string['country.mm'] = 'Mjanmar';
$string['country.mn'] = 'Mongólía';
$string['country.mr'] = 'Máritanía';
$string['country.mt'] = 'Malta';
$string['country.mu'] = 'Máritíus';
$string['country.mv'] = 'Maldíveyjar';
$string['country.mw'] = 'Malaví';
$string['country.mx'] = 'Mexíkó';
$string['country.my'] = 'Malasía';
$string['country.mz'] = 'Mósambík';
$string['country.na'] = 'Namibía';
$string['country.ne'] = 'Níger';
$string['country.ng'] = 'Nígería';
$string['country.ni'] = 'Níkaragva';
$string['country.nl'] = 'Niðurlönd';
$string['country.no'] = 'Noregur';
$string['country.np'] = 'Nepal';
$string['country.nr'] = 'Nauru';
$string['country.nu'] = 'Niue';
$string['country.nz'] = 'Nýja-Sjáland';
$string['country.om'] = 'Óman';
$string['country.pa'] = 'Panama';
$string['country.pe'] = 'Perú';
$string['country.pg'] = 'Papúa Nýja-Gínea';
$string['country.ph'] = 'Filippseyjar';
$string['country.pk'] = 'Pakistan';
$string['country.pl'] = 'Pólland';
$string['country.pr'] = 'Púertó Ríkó';
$string['country.ps'] = 'Heimastjórnarsvæði Palestínumanna';
$string['country.pt'] = 'Portúgal';
$string['country.pw'] = 'Palá';
$string['country.py'] = 'Paragvæ';
$string['country.qa'] = 'Katar';
$string['country.ro'] = 'Rúmenía';
$string['country.rs'] = 'Serbía';
$string['country.ru'] = 'Rússland';
$string['country.rw'] = 'Rúanda';
$string['country.sa'] = 'Sádi-Arabía';
$string['country.sb'] = 'Salómonseyjar';
$string['country.sc'] = 'Seychelles-eyjar';
$string['country.sd'] = 'Súdan';
$string['country.se'] = 'Svíþjóð';
$string['country.sg'] = 'Síngapúr';
$string['country.si'] = 'Slóvenía';
$string['country.sk'] = 'Slóvakía';
$string['country.sl'] = 'Síerra Leóne';
$string['country.sm'] = 'San Marínó';
$string['country.sn'] = 'Senegal';
$string['country.so'] = 'Sómalía';
$string['country.sr'] = 'Súrínam';
$string['country.st'] = 'Saó Tóme og Prinsípe';
$string['country.sv'] = 'El Salvador';
$string['country.sy'] = 'Sýrland';
$string['country.sz'] = 'Svasíland';
$string['country.td'] = 'Tsjad';
$string['country.tg'] = 'Tógó';
$string['country.th'] = 'Taíland';
$string['country.tj'] = 'Tadsjikistan';
$string['country.tl'] = 'Austur-Tímor';
$string['country.tm'] = 'Túrkmenistan';
$string['country.tn'] = 'Túnis';
$string['country.to'] = 'Tonga';
$string['country.tr'] = 'Tyrkland';
$string['country.tt'] = 'Trínidad og Tóbagó';
$string['country.tv'] = 'Túvalúeyjar';
$string['country.tz'] = 'Tansanía';
$string['country.ua'] = 'Úkraína';
$string['country.ug'] = 'Úganda';
$string['country.us'] = 'Bandaríkin';
$string['country.uy'] = 'Úrúgvæ';
$string['country.uz'] = 'Úsbekistan';
$string['country.va'] = 'Páfagarður';
$string['country.vc'] = 'Sankti Vinsent og Grenadíneyjar';
$string['country.ve'] = 'Venesúela';
$string['country.vn'] = 'Víetnam';
$string['country.vu'] = 'Vanúatú';
$string['country.ws'] = 'Samóa';
$string['country.ye'] = 'Jemen';
$string['country.za'] = 'Suður-Afríka';
$string['country.zm'] = 'Sambía';
$string['country.zw'] = 'Simbabve';

// List of nationalities based on the ISO 3166-1-alpha-2 filtered by Europass country list
// (http://europass.cedefop.europa.eu/TechnicalResources/XML/xsd/included_schemas/EUROPASS_Nationalities_V1.0.xsd)
$string['nationality.ad'] = 'Andorrskt';
$string['nationality.ae'] = 'Frá Sameinuðu arabísku furstadæmunum';
$string['nationality.af'] = 'Afganskt';
$string['nationality.ag'] = 'Antígskt';
$string['nationality.al'] = 'Albanskt';
$string['nationality.am'] = 'Armenskt';
$string['nationality.ao'] = 'Angólskt';
$string['nationality.ar'] = 'Argentínskt';
$string['nationality.at'] = 'Austurrískt';
$string['nationality.au'] = 'Ástralskt';
$string['nationality.az'] = 'Aserskt';
$string['nationality.ba'] = 'Bosnískt';
$string['nationality.bb'] = 'Barbadoskt';
$string['nationality.bd'] = 'Bangladesskt';
$string['nationality.be'] = 'Belgískt';
$string['nationality.bf'] = 'Búrkínskt';
$string['nationality.bg'] = 'Búlgarskt';
$string['nationality.bh'] = 'Bareinskt';
$string['nationality.bi'] = 'Búrúndískt';
$string['nationality.bj'] = 'Benínskt';
$string['nationality.bn'] = 'Brúneiskt';
$string['nationality.bo'] = 'Bólivískt';
$string['nationality.br'] = 'Brasilískt';
$string['nationality.bs'] = 'Bahameyskt';
$string['nationality.bt'] = 'Bútanskt';
$string['nationality.bw'] = 'Botsvanskt';
$string['nationality.by'] = 'Hvítrússneskt';
$string['nationality.bz'] = 'Belískt';
$string['nationality.ca'] = 'Kanadískt';
$string['nationality.cd'] = 'Austurkongóskt';
$string['nationality.cf'] = 'Miðafrískt';
$string['nationality.cg'] = 'Vesturkongóskt';
$string['nationality.ch'] = 'Svissneskt';
$string['nationality.ci'] = 'Frá Fílabeinsströndinni';
$string['nationality.cl'] = 'Chileskt';
$string['nationality.cm'] = 'Kamerúnskt';
$string['nationality.cn'] = 'Kínverskt';
$string['nationality.co'] = 'Kólumbískt';
$string['nationality.cr'] = 'Kostarískt';
$string['nationality.cu'] = 'Kúbverskt';
$string['nationality.cv'] = 'Grænhöfðeyskt';
$string['nationality.cy'] = 'Kýpverskt';
$string['nationality.cz'] = 'Tékkneskt';
$string['nationality.de'] = 'Þýskt';
$string['nationality.dj'] = 'Djíbútískt';
$string['nationality.dk'] = 'Danskt';
$string['nationality.dm'] = 'Dóminískt (frá Dóminíku)';
$string['nationality.do'] = 'Dóminískt (frá Dóminíska lýðveldinu)';
$string['nationality.dz'] = 'Alsírskt';
$string['nationality.ec'] = 'Ekvadorskt';
$string['nationality.ee'] = 'Eistneskt';
$string['nationality.eg'] = 'Egypskt';
$string['nationality.er'] = 'Erítreskt';
$string['nationality.es'] = 'Spænskt';
$string['nationality.et'] = 'Eþíópískt';
$string['nationality.fi'] = 'Finnskt';
$string['nationality.fj'] = 'Fídjeyskt';
$string['nationality.fm'] = 'Míkrónesískt';
$string['nationality.fr'] = 'Franskt';
$string['nationality.ga'] = 'Gabonskt';
$string['nationality.gb'] = 'Breskt';
$string['nationality.gd'] = 'Grenadískt';
$string['nationality.ge'] = 'Georgískt';
$string['nationality.gh'] = 'Ganverskt';
$string['nationality.gl'] = 'Grænlenskt';
$string['nationality.gm'] = 'Gambískt';
$string['nationality.gn'] = 'Gíneskt';
$string['nationality.gq'] = 'Miðbaugsgíneskt';
$string['nationality.gr'] = 'Grískt';
$string['nationality.gt'] = 'Gvatemalskt';
$string['nationality.gw'] = 'Bissáskt';
$string['nationality.gy'] = 'Gvæjanskt';
$string['nationality.hn'] = 'Hondúrskt';
$string['nationality.hr'] = 'Króatískt';
$string['nationality.ht'] = 'Haítískt';
$string['nationality.hu'] = 'Ungverskt';
$string['nationality.id'] = 'Indónesískt';
$string['nationality.ie'] = 'Írskt';
$string['nationality.il'] = 'Ísraelskt';
$string['nationality.in'] = 'Indverskt';
$string['nationality.iq'] = 'Írakskt';
$string['nationality.ir'] = 'Íranskt';
$string['nationality.is'] = 'Íslenskt';
$string['nationality.it'] = 'Ítalskt';
$string['nationality.jm'] = 'Jamaískt';
$string['nationality.jo'] = 'Jórdanskt';
$string['nationality.jp'] = 'Japanskt';
$string['nationality.ke'] = 'Kenískt';
$string['nationality.kg'] = 'Kirgiskt';
$string['nationality.kh'] = 'Kambódískt';
$string['nationality.ki'] = 'Kíribatískt';
$string['nationality.km'] = 'Kómoreyskt';
$string['nationality.kn'] = 'Frá Sankti Kristófer og Nevis';
$string['nationality.kp'] = 'Norðurkóreskt';
$string['nationality.kr'] = 'Suðurkóreskt';
$string['nationality.kw'] = 'Kúveiskt';
$string['nationality.kz'] = 'Kasakskt';
$string['nationality.la'] = 'Laoskt';
$string['nationality.lb'] = 'Líbanskt';
$string['nationality.lc'] = 'Frá Sankti Lúsíu';
$string['nationality.li'] = 'Liechtensteinskt';
$string['nationality.lk'] = 'Srílankskt';
$string['nationality.lr'] = 'Líberískt';
$string['nationality.ls'] = 'Lesótóskt';
$string['nationality.lt'] = 'Litháískt';
$string['nationality.lu'] = 'Lúxemborgskt';
$string['nationality.lv'] = 'Lettneskt';
$string['nationality.ly'] = 'Líbískt';
$string['nationality.ma'] = 'Marokkóskt';
$string['nationality.mc'] = 'Mónakóskt';
$string['nationality.md'] = 'Moldóvskt';
$string['nationality.me'] = 'Svartfellskt';
$string['nationality.mg'] = 'Madagaskt';
$string['nationality.mh'] = 'Marshall-eyskt';
$string['nationality.mk'] = 'Makedónskt (frá fyrrum lýðveldi Júgóslavíu)';
$string['nationality.ml'] = 'Malískt';
$string['nationality.mm'] = 'Mjanmarskt';
$string['nationality.mn'] = 'Mongólskt';
$string['nationality.mr'] = 'Máritanskt';
$string['nationality.mt'] = 'Maltneskt';
$string['nationality.mu'] = 'Máritískur';
$string['nationality.mv'] = 'Maldíveyskt';
$string['nationality.mw'] = 'Malavískt';
$string['nationality.mx'] = 'Mexíkóskt';
$string['nationality.my'] = 'Malasískt';
$string['nationality.mz'] = 'Mósambískt';
$string['nationality.na'] = 'Namibískt';
$string['nationality.ne'] = 'Nígerskt';
$string['nationality.ng'] = 'Nígerískt';
$string['nationality.ni'] = 'Níkaragskt';
$string['nationality.nl'] = 'Hollenskt';
$string['nationality.no'] = 'Norskt';
$string['nationality.np'] = 'Nepalskt';
$string['nationality.nr'] = 'Nárúskt';
$string['nationality.nu'] = 'Frá Niue';
$string['nationality.nz'] = 'Nýsjálenskt';
$string['nationality.om'] = 'Ómanskt';
$string['nationality.pa'] = 'Panamskt';
$string['nationality.pe'] = 'Perúskt';
$string['nationality.pg'] = 'Papúskt';
$string['nationality.ph'] = 'Filippseyskt';
$string['nationality.pk'] = 'Pakistanskt';
$string['nationality.pl'] = 'Pólskt';
$string['nationality.pr'] = 'Frá Púertó Ríkó';
$string['nationality.ps'] = 'Palestínskt';
$string['nationality.pt'] = 'Portúgalskt';
$string['nationality.pw'] = 'Frá Palá';
$string['nationality.py'] = 'Paragvæskt';
$string['nationality.qa'] = 'Katarskt';
$string['nationality.ro'] = 'Rúmenskt';
$string['nationality.rs'] = 'Serbneskt';
$string['nationality.ru'] = 'Rússneskt';
$string['nationality.rw'] = 'Rúandskt';
$string['nationality.sa'] = 'Sádiarabískt';
$string['nationality.sb'] = 'Salómonseyskt';
$string['nationality.sc'] = 'Seychelles-eyskt';
$string['nationality.sd'] = 'Súdanskt';
$string['nationality.se'] = 'Sænskt';
$string['nationality.sg'] = 'Singapúrskt';
$string['nationality.si'] = 'Slóvenskt';
$string['nationality.sk'] = 'Slóvakískt';
$string['nationality.sl'] = 'Síerraleónskt';
$string['nationality.sm'] = 'Frá San Marínó';
$string['nationality.sn'] = 'Senegalskt';
$string['nationality.so'] = 'Sómalískt';
$string['nationality.sr'] = 'Súrínamskt';
$string['nationality.st'] = 'Frá Saó Tóme og Prinsípe';
$string['nationality.sv'] = 'Salvadorskt';
$string['nationality.sy'] = 'Sýrlenskt';
$string['nationality.sz'] = 'Svaslenskt';
$string['nationality.td'] = 'Tsjadneskt';
$string['nationality.tg'] = 'Tógóskt';
$string['nationality.th'] = 'Taílenskt';
$string['nationality.tj'] = 'Tadsjikskt';
$string['nationality.tl'] = 'Austurtímorskt';
$string['nationality.tm'] = 'Túrkmenskt';
$string['nationality.tn'] = 'Túnískt';
$string['nationality.to'] = 'Tongverskt';
$string['nationality.tr'] = 'Tyrkneskt';
$string['nationality.tt'] = 'Trínidadískt';
$string['nationality.tv'] = 'Túvalúskt';
$string['nationality.tz'] = 'Tansanískt';
$string['nationality.ua'] = 'Úkraínskt';
$string['nationality.ug'] = 'Úgandskt';
$string['nationality.us'] = 'Bandarískt';
$string['nationality.uy'] = 'Úrúgvæskt';
$string['nationality.uz'] = 'Úsbekskt';
$string['nationality.va'] = 'Úr Páfagarði';
$string['nationality.vc'] = 'Frá Sankti Vinsent og Grenadíneyjum';
$string['nationality.ve'] = 'Venesúelskt';
$string['nationality.vn'] = 'Víetnamskt';
$string['nationality.vu'] = 'Vanúatúskt';
$string['nationality.ws'] = 'Samóskt';
$string['nationality.ye'] = 'Jemenskt';
$string['nationality.za'] = 'Suðurafrískt';
$string['nationality.zm'] = 'Sambískt';
$string['nationality.zw'] = 'Simbabveskut';

?>
