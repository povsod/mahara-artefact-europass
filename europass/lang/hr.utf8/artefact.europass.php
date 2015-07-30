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
$string['europassCV'] = 'Europass životopis';
$string['europassLP'] = 'Europass jezična putovnica';
$string['photograph'] = 'Fotografija';
$string['photographdesc'] = 'Photo will be embeded in Europass XML';
$string['phototoolarge'] = 'File too big. Filesize must not exceed 100 kB.';
$string['exportstep2'] = '2 - Document format';
$string['selectfiletype'] = 'Select file and date format';
$string['exportdate'] = 'Date';
$string['internaldateformat'] = 'Internal Date Format';
$string['selectinternaldatedesc'] = 'Date format used in Mahara';
$string['internaldate-dmy11'] = 'dd/mm/gggg';
$string['internaldate-dmy12'] = 'dd.mm.gggg';
$string['internaldate-dmy13'] = 'dd-mm-gggg';
$string['internaldate-dmy21'] = 'dd/mm/gg';
$string['internaldate-dmy22'] = 'dd.mm.gg';
$string['internaldate-dmy23'] = 'dd-mm-gg';
$string['internaldate-mdy11'] = 'mm/dd/gggg';
$string['internaldate-mdy12'] = 'mm.dd.gggg';
$string['internaldate-mdy13'] = 'mm-dd-gggg';
$string['internaldate-mdy21'] = 'mm/dd/gg';
$string['internaldate-mdy22'] = 'mm.dd.gg';
$string['internaldate-mdy23'] = 'mm-dd-gg';
$string['internaldate-ymd11'] = 'gggg/mm/dd';
$string['internaldate-ymd12'] = 'gggg.mm.dd';
$string['internaldate-ymd13'] = 'gggg-mm-dd';
$string['internaldate-ymd21'] = 'gg/mm/dd';
$string['internaldate-ymd22'] = 'gg.mm.dd';
$string['internaldate-ymd23'] = 'gg-mm-dd';
$string['internaldate-yonly'] = 'gggg';
$string['internaldate-other'] = 'other';
$string['externaldateformat'] = 'External Date Format';
$string['selectexternaldatedesc'] = 'Date format used in export';
$string['externaldate-numeric-long'] = 'dd/mm/gggg';
$string['externaldate-text-long'] = 'dd. mjesec gggg';
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
$string['identification'] = 'Osobni podaci';
$string['identification-birthdate'] = 'Datum rođenja';
$string['identification-birthplace'] = 'Mjesto rođenja';
$string['identification-lastname'] = 'Prezime(na)';
$string['identification-firstname'] = 'Ime(na)';
$string['identification-addressLine'] = 'Ulica / Kućni broj';
$string['identification-municipality'] = 'Grad';
$string['identification-postalCode'] = 'Poštanski kôd';
$string['identification-country'] = 'Država';
$string['identification-contactinfo-telephone'] = 'Telefonski broj(evi)';
$string['identification-contactinfo-mobile'] = 'Broj mobilnog telefona';
$string['identification-contactinfo-fax'] = 'Broj(evi) faksa';
$string['identification-contactinfo-email'] = 'E-mail';
$string['identification-nationality'] = 'Državljanstvo';
$string['identification-gender'] = 'Spol';

// Europass CV - STEP 2
$string['application'] = 'Željeno zaposlenje / zanimanje';

// Europass CV - STEP 3
$string['workexperience'] = 'Radno iskustvo';

// Europass CV - STEP 4
$string['education'] = 'Obrazovanje i osposobljavanje';

// Europass CV - STEP 5
$string['mothertongue'] = 'Materinski jezik(ci)';
$string['otherlanguage'] = 'Drugi jezik(ci)';

$string['language-foreign-listening'] = 'Slušanje';
$string['language-foreign-listening-th'] = 'Slušanje';
$string['language-foreign-reading'] = 'Čitanje';
$string['language-foreign-reading-th'] = 'Čitanje';
$string['language-foreign-spokeninteraction'] = 'Govorna interakcija';
$string['language-foreign-spokeninteraction-th'] = 'Govorna<br>interakcija';
$string['language-foreign-spokenproduction'] = 'Govorna produkcija';
$string['language-foreign-spokenproduction-th'] = 'Govorna<br>produkcija';
$string['language-foreign-writing'] = 'Pisanje';
$string['language-foreign-writing-th'] = 'Pisanje';
$string['language-foreign-CEF-level'] = 'Zajednički europski referentni okvir za jezike';

$string['language-foreign-level.A1'] = 'Temeljni korisnik (A1)';
$string['language-foreign-level.A2'] = 'Temeljni korisnik (A2)';
$string['language-foreign-level.B1'] = 'Samostalni korisnik (B1)';
$string['language-foreign-level.B2'] = 'Samostalni korisnik (B2)';
$string['language-foreign-level.C1'] = 'Iskusni korisnik (C1)';
$string['language-foreign-level.C2'] = 'Iskusni korisnik (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Vozačka dozvola';
$string['skills-and-competences'] = 'Osobne vještine i kompetencije';
$string['socialskill'] = 'Društvene vještine i kompetencije';
$string['organisationalskill'] = 'Organizacijske vještine i kompetencije';
$string['technicalskill'] = 'Tehničke vještine i kompetencije';
$string['computerskill'] = 'Računalne vještine i kompetencije';
$string['artisticskill'] = 'Umjetničke vještine i kompetencije';
$string['otherskill'] = 'Druge vještine i kompetencije';
$string['additionalinfo'] = 'Dodatne informacije';
$string['annexes'] = 'Dodaci';

// Europass LP - STEP 2
$string['language-certificates'] = 'Diploma(e) ili svjedodžba(e)';
$string['diploma-title'] = 'Naziv';
$string['diploma-awardingBody'] = 'Tijelo koje je izdalo dokument';
$string['diploma-date'] = 'Datum';
$string['diploma-level'] = 'Europska razina';
$string['language-experiences'] = 'Jezično(a) iskustvo(a)';
$string['experiences-period-from'] = 'Od';
$string['experiences-period-to'] = 'Do';

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
$string['language.ab'] = 'abhaski';
$string['language.af'] = 'afrikaans';
$string['language.an'] = 'aragonski';
$string['language.ar'] = 'arapski';
$string['language.as'] = 'asamski';
$string['language.az'] = 'azerski';
$string['language.be'] = 'bjeloruski';
$string['language.bg'] = 'bugarski';
$string['language.bn'] = 'bengalski';
$string['language.bo'] = 'tibetski';
$string['language.br'] = 'bretonski';
$string['language.bs'] = 'bosanski';
$string['language.ca'] = 'katalonski';
$string['language.ce'] = 'čečenski';
$string['language.co'] = 'korzikanski';
$string['language.cs'] = 'češki';
$string['language.cy'] = 'velški';
$string['language.da'] = 'danski';
$string['language.de'] = 'njemački';
$string['language.el'] = 'grčki';
$string['language.en'] = 'engleski';
$string['language.es'] = 'španjolski / kastiljski';
$string['language.et'] = 'estonski';
$string['language.eu'] = 'baskijski';
$string['language.fa'] = 'perzijski';
$string['language.fi'] = 'finski';
$string['language.fj'] = 'fidžijski';
$string['language.fo'] = 'ferojski';
$string['language.fr'] = 'francuski';
$string['language.fy'] = 'frizijski';
$string['language.ga'] = 'irski';
$string['language.gd'] = 'škotski gaelski';
$string['language.gl'] = 'galicijski';
$string['language.gv'] = 'manski';
$string['language.he'] = 'hebrejski';
$string['language.hi'] = 'hindski';
$string['language.hr'] = 'hrvatski';
$string['language.ht'] = 'haićanski';
$string['language.hu'] = 'mađarski';
$string['language.hy'] = 'armenski';
$string['language.id'] = 'indonezijski';
$string['language.is'] = 'islandski';
$string['language.it'] = 'talijanski';
$string['language.ja'] = 'japanski';
$string['language.jv'] = 'javanski';
$string['language.ka'] = 'gruzijski';
$string['language.kg'] = 'kongo';
$string['language.ko'] = 'korejski';
$string['language.ku'] = 'kurdski';
$string['language.kw'] = 'Cornish';
$string['language.ky'] = 'kirgiski';
$string['language.lb'] = 'luksemburški';
$string['language.li'] = 'Limburgish';
$string['language.ln'] = 'lingala';
$string['language.lt'] = 'litavski';
$string['language.lv'] = 'latvijski';
$string['language.mg'] = 'malgaški';
$string['language.mk'] = 'makedonski';
$string['language.mn'] = 'mongolski';
$string['language.mo'] = 'moldavski';
$string['language.ms'] = 'malajski';
$string['language.mt'] = 'malteški';
$string['language.my'] = 'burmanski';
$string['language.nb'] = 'norveški (bokmål)';
$string['language.ne'] = 'nepali';
$string['language.nl'] = 'nizozemski';
$string['language.nn'] = 'novonorveški (nynorsk)';
$string['language.no'] = 'norveški';
$string['language.pl'] = 'poljski';
$string['language.pt'] = 'portugalski';
$string['language.rm'] = 'retoromanski';
$string['language.ro'] = 'rumunjski';
$string['language.ru'] = 'ruski';
$string['language.r0'] = 'romski'; // doesn't really have an ISO 369-1 code...
$string['language.sc'] = 'sardski';
$string['language.se'] = 'sjeverni sami jezik';
$string['language.sk'] = 'slovački';
$string['language.sl'] = 'slovenski';
$string['language.so'] = 'somalski';
$string['language.sq'] = 'albanski';
$string['language.sr'] = 'srpski';
$string['language.sv'] = 'švedski';
$string['language.sw'] = 'svahili';
$string['language.tk'] = 'turkmenski';
$string['language.tr'] = 'turski';
$string['language.ty'] = 'tahićanski';
$string['language.uk'] = 'ukrajinski';
$string['language.ur'] = 'urdski';
$string['language.uz'] = 'uzbek';
$string['language.vi'] = 'vijetnamski';
$string['language.yi'] = 'jidiš';
$string['language.zh'] = 'kineski';
$string['language.cu'] = 'crkvenoslavenski';
$string['language.eo'] = 'esperanto';
$string['language.la'] = 'latinski';
$string['language.oc'] = 'osetski';
$string['language.vo'] = 'volapük';
// ISO 639-1:2002 languages that had been left out by Europass
$string['language.aa'] = 'afarski';
$string['language.ae'] = 'avestički';
$string['language.ak'] = 'akanski';
$string['language.am'] = 'amharski';
$string['language.av'] = 'avarski';
$string['language.ay'] = 'ajmarski';
$string['language.ba'] = 'baškirski';
$string['language.bh'] = 'biharski';
$string['language.bi'] = 'bislama';
$string['language.bm'] = 'bambarski';
$string['language.ch'] = 'chamorro';
$string['language.cr'] = 'krijski';
$string['language.cv'] = 'čuvaški';
$string['language.dv'] = 'divehi';
$string['language.dz'] = 'dzongkha';
$string['language.ee'] = 'ewe';
$string['language.ff'] = 'fulbe (fulanski)';
$string['language.gn'] = 'guaraní';
$string['language.gu'] = 'gudžaratski';
$string['language.ha'] = 'hauski';
$string['language.ho'] = 'hiri motu jezik';
$string['language.hz'] = 'herero jezik';
$string['language.ia'] = 'interlingua';
$string['language.ig'] = 'igbo';
$string['language.ii'] = 'yi';
$string['language.ik'] = 'Inupiaq';
$string['language.io'] = 'ido';
$string['language.iu'] = 'Inuktitut';
$string['language.ki'] = 'kikuyu';
$string['language.kj'] = 'kwanyama';
$string['language.kk'] = 'kazaški';
$string['language.kl'] = 'grenlandski';
$string['language.km'] = 'kmerski';
$string['language.kn'] = 'Kannada';
$string['language.kr'] = 'Kanuri';
$string['language.ks'] = 'kašmirski';
$string['language.kv'] = 'Komi';
$string['language.lg'] = 'Ganda';
$string['language.lo'] = 'Lao';
$string['language.lu'] = 'Luba-Katanga';
$string['language.mh'] = 'Marshallese';
$string['language.mi'] = 'maorski';
$string['language.ml'] = 'malajlamski';
$string['language.mr'] = 'Marathi';
$string['language.na'] = 'Nauru';
$string['language.nd'] = 'sjeverni ndebele jezik';
$string['language.ng'] = 'ndonga';
$string['language.nr'] = 'južni ndebele jezik';
$string['language.nv'] = 'Navajo';
$string['language.ny'] = 'Chichewa';
$string['language.oj'] = 'Ojibwa';
$string['language.om'] = 'Oromo';
$string['language.or'] = 'Oriya';
$string['language.os'] = 'osetski';
$string['language.pa'] = 'pendžabski';
$string['language.pi'] = 'pali';
$string['language.ps'] = 'paštunski';
$string['language.qu'] = 'kečuanski';
$string['language.rn'] = 'Kirundi';
$string['language.rw'] = 'Kinyarwanda';
$string['language.sa'] = 'sanskrt';
$string['language.sd'] = 'Sindhi';
$string['language.sg'] = 'Sango';
$string['language.si'] = 'Sinhalese';
$string['language.sm'] = 'samoanski';
$string['language.sn'] = 'Shona';
$string['language.ss'] = 'Swati';
$string['language.st'] = 'Sotho';
$string['language.su'] = 'Sundski';
$string['language.ta'] = 'tamilski';
$string['language.te'] = 'teluški';
$string['language.tg'] = 'tadžički';
$string['language.th'] = 'Thai';
$string['language.ti'] = 'tigrinja';
$string['language.tl'] = 'Tagalog';
$string['language.tn'] = 'Tswana';
$string['language.to'] = 'Tonga';
$string['language.ts'] = 'Tsonga';
$string['language.tt'] = 'tatarski';
$string['language.tw'] = 'Twi';
$string['language.ug'] = 'ujgurski';
$string['language.ve'] = 'Venda';
$string['language.wa'] = 'Walloon';
$string['language.wo'] = 'Wolof';
$string['language.xh'] = 'Xhosa';
$string['language.yo'] = 'Yoruba';
$string['language.za'] = 'Zhuang';
$string['language.zu'] = 'Zulu';

// ISO 3166-1-alpha-2 filtered by Europass 
// (http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm)
$string['country.ad'] = 'Andora';
$string['country.ae'] = 'Ujedinjeni Arapski Emirati';
$string['country.af'] = 'Afganistan';
$string['country.ag'] = 'Antigva i Barbuda';
$string['country.al'] = 'Albanija';
$string['country.am'] = 'Armenija';
$string['country.ao'] = 'Angola';
$string['country.ar'] = 'Argentina';
$string['country.at'] = 'Austrija';
$string['country.au'] = 'Australija';
$string['country.az'] = 'Azerbejdžan';
$string['country.ba'] = 'Bosna i Hercegovina';
$string['country.bb'] = 'Barbados';
$string['country.bd'] = 'Bangladeš';
$string['country.be'] = 'Belgija';
$string['country.bf'] = 'Burkina Faso';
$string['country.bg'] = 'Bugarska';
$string['country.bh'] = 'Bahrein';
$string['country.bi'] = 'Burundi';
$string['country.bj'] = 'Benin';
$string['country.bn'] = 'Brunej';
$string['country.bo'] = 'Bolivija';
$string['country.br'] = 'Brezilya';
$string['country.bs'] = 'Bahami';
$string['country.bt'] = 'Butan';
$string['country.bw'] = 'Bocvana';
$string['country.by'] = 'Bjelorusija';
$string['country.bz'] = 'Belize';
$string['country.ca'] = 'Kanada';
$string['country.cd'] = 'Kongo, Republika Kongo';
$string['country.cf'] = 'Srednjoafrička Republika';
$string['country.cg'] = 'Kongo (Demokratska Republika Kongo)';
$string['country.ch'] = 'Švicarska';
$string['country.ci'] = 'Obala Bjelokosti';
$string['country.cl'] = 'Čile';
$string['country.cm'] = 'Kamerun';
$string['country.cn'] = 'Kina';
$string['country.co'] = 'Kolumbija';
$string['country.cr'] = 'Kostarika';
$string['country.cu'] = 'Kuba';
$string['country.cv'] = 'Zelenortska Republika';
$string['country.cy'] = 'Cipar';
$string['country.cz'] = 'Češka';
$string['country.de'] = 'Njemačka';
$string['country.dj'] = 'Džibuti';
$string['country.dk'] = 'Danska';
$string['country.dm'] = 'Dominika';
$string['country.do'] = 'Dominikanska Republika';
$string['country.dz'] = 'Alžir';
$string['country.ec'] = 'Ekvador';
$string['country.ee'] = 'Estonija';
$string['country.eg'] = 'Egipat';
$string['country.er'] = 'Eritreja';
$string['country.es'] = 'Španjolska';
$string['country.et'] = 'Etiopija';
$string['country.fi'] = 'Finska';
$string['country.fj'] = 'Fidži';
$string['country.fm'] = 'Mikronezija';
$string['country.fr'] = 'Francuska';
$string['country.ga'] = 'Gabon';
$string['country.gb'] = 'Ujedinjeno Kraljevstvo';
$string['country.gd'] = 'Grenada';
$string['country.ge'] = 'Gruzija';
$string['country.gh'] = 'Gana';
$string['country.gl'] = 'Grenland';
$string['country.gm'] = 'Gambija';
$string['country.gn'] = 'Gvineja';
$string['country.gq'] = 'Ekvatorska Gvineja';
$string['country.gr'] = 'Grčka';
$string['country.gt'] = 'Gvatemala';
$string['country.gw'] = 'Gvineja Bisau';
$string['country.gy'] = 'Gvajana';
$string['country.hn'] = 'Honduras';
$string['country.hr'] = 'Hrvatska';
$string['country.ht'] = 'Haiti';
$string['country.hu'] = 'Mađarska';
$string['country.id'] = 'Indonezija';
$string['country.ie'] = 'Irska';
$string['country.il'] = 'Izrael';
$string['country.in'] = 'Indija';
$string['country.iq'] = 'Irak';
$string['country.ir'] = 'Iran';
$string['country.is'] = 'Island';
$string['country.it'] = 'Italija';
$string['country.jm'] = 'Jamajka';
$string['country.jo'] = 'Jordan';
$string['country.jp'] = 'Japan';
$string['country.ke'] = 'Kenija';
$string['country.kg'] = 'Kirgistan';
$string['country.kh'] = 'Kambodža';
$string['country.ki'] = 'Kiribati';
$string['country.km'] = 'Komori';
$string['country.kn'] = 'Sveti Kristofor i Nevis';
$string['country.kp'] = 'Sjeverna Koreja';
$string['country.kr'] = 'Južna Koreja';
$string['country.kw'] = 'Kuvajt';
$string['country.kz'] = 'Kazahstan';
$string['country.la'] = 'Laos';
$string['country.lb'] = 'Libanon';
$string['country.lc'] = 'Sveta Lucija';
$string['country.li'] = 'Lihtenštajn';
$string['country.lk'] = 'Šri Lanka';
$string['country.lr'] = 'Liberija';
$string['country.ls'] = 'Lesoto';
$string['country.lt'] = 'Litva';
$string['country.lu'] = 'Luksemburg';
$string['country.lv'] = 'Latvija';
$string['country.ly'] = 'Libija';
$string['country.ma'] = 'Maroka';
$string['country.mc'] = 'Monako';
$string['country.md'] = 'Moldova';
$string['country.me'] = 'Crna Gora';
$string['country.mg'] = 'Madagaskar';
$string['country.mh'] = 'Maršalovi Otoci';
$string['country.mk'] = 'Bivša jugoslavenska republika Makedonija';
$string['country.ml'] = 'Mali';
$string['country.mm'] = 'Mianmar';
$string['country.mn'] = 'Mongolija';
$string['country.mr'] = 'Mauretanija';
$string['country.mt'] = 'Malta';
$string['country.mu'] = 'Mauricijus';
$string['country.mv'] = 'Maldivi';
$string['country.mw'] = 'Malavi';
$string['country.mx'] = 'Meksiko';
$string['country.my'] = 'Malezija';
$string['country.mz'] = 'Mozambik';
$string['country.na'] = 'Namibija';
$string['country.ne'] = 'Niger';
$string['country.ng'] = 'Nigerija';
$string['country.ni'] = 'Nikaragva';
$string['country.nl'] = 'Nizozemska';
$string['country.no'] = 'Norveška';
$string['country.np'] = 'Nepal';
$string['country.nr'] = 'Nauru';
$string['country.nu'] = 'Niue';
$string['country.nz'] = 'Novi Zeland';
$string['country.om'] = 'Oman';
$string['country.pa'] = 'Panama';
$string['country.pe'] = 'Peru';
$string['country.pg'] = 'Papua Nova Gvineja';
$string['country.ph'] = 'Filipini';
$string['country.pk'] = 'Pakistan';
$string['country.pl'] = 'Poljska';
$string['country.pr'] = 'Portoriko';
$string['country.ps'] = 'Palestinski teritorij, pod okupacijom';
$string['country.pt'] = 'Portugal';
$string['country.pw'] = 'Palau';
$string['country.py'] = 'Paraguay';
$string['country.qa'] = 'Katar';
$string['country.ro'] = 'Rumunjska';
$string['country.rs'] = 'Srbija';
$string['country.ru'] = 'Rusija';
$string['country.rw'] = 'Ruanda';
$string['country.sa'] = 'Saudijska Arabija';
$string['country.sb'] = 'Salomonovi Otoci';
$string['country.sc'] = 'Sejšeli';
$string['country.sd'] = 'Sudan';
$string['country.se'] = 'Švedska';
$string['country.sg'] = 'Singapur';
$string['country.si'] = 'Slovenija';
$string['country.sk'] = 'Slovačka';
$string['country.sl'] = 'Sijera Leone';
$string['country.sm'] = 'San Marino';
$string['country.sn'] = 'Senegal';
$string['country.so'] = 'Somalija';
$string['country.sr'] = 'Surinam';
$string['country.st'] = 'Sveti Toma i Prinsipe';
$string['country.sv'] = 'Salvador';
$string['country.sy'] = 'Sirija';
$string['country.sz'] = 'Svazi';
$string['country.td'] = 'Čad';
$string['country.tg'] = 'Togo';
$string['country.th'] = 'Tajland';
$string['country.tj'] = 'Tadžikistan';
$string['country.tl'] = 'Istočni Timor';
$string['country.tm'] = 'Turkmenistan';
$string['country.tn'] = 'Tunis';
$string['country.to'] = 'Tonga';
$string['country.tr'] = 'Turska';
$string['country.tt'] = 'Trinidad i Tobago';
$string['country.tv'] = 'Tuvalu';
$string['country.tz'] = 'Tanzanija';
$string['country.ua'] = 'Ukrajina';
$string['country.ug'] = 'Uganda';
$string['country.us'] = 'Sjedinjene Američke Države';
$string['country.uy'] = 'Uruguay';
$string['country.uz'] = 'Uzbekistan';
$string['country.va'] = 'Vatikan';
$string['country.vc'] = 'Sveti Vincent i Grenadini';
$string['country.ve'] = 'Venezuela';
$string['country.vn'] = 'Vijetnam';
$string['country.vu'] = 'Vanuatu';
$string['country.ws'] = 'Samoa';
$string['country.ye'] = 'Jemen';
$string['country.za'] = 'Južna Afrika';
$string['country.zm'] = 'Zambija';
$string['country.zw'] = 'Zimbabve';

// List of nationalities based on the ISO 3166-1-alpha-2 filtered by Europass country list
// (http://europass.cedefop.europa.eu/TechnicalResources/XML/xsd/included_schemas/EUROPASS_Nationalities_V1.0.xsd)
$string['nationality.ad'] = 'Andorska';
$string['nationality.ae'] = 'Ujedinjenih Arapskih Emirata';
$string['nationality.af'] = 'Afganska';
$string['nationality.ag'] = 'Antigve i Barbude';
$string['nationality.al'] = 'Albanska';
$string['nationality.am'] = 'Armenska';
$string['nationality.ao'] = 'Angolska';
$string['nationality.ar'] = 'Argentinska';
$string['nationality.at'] = 'Austrijska';
$string['nationality.au'] = 'Australska';
$string['nationality.az'] = 'Azerbajdžanska';
$string['nationality.ba'] = 'Bosansko-hercegovačka';
$string['nationality.bb'] = 'Barbadoska';
$string['nationality.bd'] = 'Bangladeška';
$string['nationality.be'] = 'Belgijska';
$string['nationality.bf'] = 'Burkinska';
$string['nationality.bg'] = 'Bugarska';
$string['nationality.bh'] = 'Bahreinska';
$string['nationality.bi'] = 'Burundijska';
$string['nationality.bj'] = 'Beninska';
$string['nationality.bn'] = 'Brunejska';
$string['nationality.bo'] = 'Bolivijska';
$string['nationality.br'] = 'Brazilska';
$string['nationality.bs'] = 'Bahamska';
$string['nationality.bt'] = 'Butanska';
$string['nationality.bw'] = 'Bocvanska';
$string['nationality.by'] = 'Bjeloruska';
$string['nationality.bz'] = 'Belizeanska';
$string['nationality.ca'] = 'Kanadska';
$string['nationality.cd'] = 'Kongoanska (Republike Kongo)';
$string['nationality.cf'] = 'Srednjoafrička';
$string['nationality.cg'] = 'Kongoanska (Demokratske Republike Kongo)';
$string['nationality.ch'] = 'Švicarska';
$string['nationality.ci'] = 'Obale Slonovače';
$string['nationality.cl'] = 'Čileanska';
$string['nationality.cm'] = 'Kamerunska';
$string['nationality.cn'] = 'Kineska';
$string['nationality.co'] = 'Kolumbijska';
$string['nationality.cr'] = 'Kostarikanska';
$string['nationality.cu'] = 'Kubanska';
$string['nationality.cv'] = 'Zelenortske Republike';
$string['nationality.cy'] = 'Ciparska';
$string['nationality.cz'] = 'Češka';
$string['nationality.de'] = 'Njemačka';
$string['nationality.dj'] = 'Džibutska';
$string['nationality.dk'] = 'Danska';
$string['nationality.dm'] = 'Dominikanska (Dominike)';
$string['nationality.do'] = 'Dominikanska (Dominikanske Republike)';
$string['nationality.dz'] = 'Alžirska';
$string['nationality.ec'] = 'Ekvadorska';
$string['nationality.ee'] = 'Estonska';
$string['nationality.eg'] = 'Egipatska';
$string['nationality.er'] = 'Eritrejska';
$string['nationality.es'] = 'Španjolska';
$string['nationality.et'] = 'Etiopska';
$string['nationality.fi'] = 'Finska';
$string['nationality.fj'] = 'Fidžijska';
$string['nationality.fm'] = 'Mikronezijska';
$string['nationality.fr'] = 'Francuska';
$string['nationality.ga'] = 'Gabonska';
$string['nationality.gb'] = 'Britanska';
$string['nationality.gd'] = 'Grenadska';
$string['nationality.ge'] = 'Gruzijska';
$string['nationality.gh'] = 'Ganska';
$string['nationality.gl'] = 'Grenlandska';
$string['nationality.gm'] = 'Gambijska';
$string['nationality.gn'] = 'Gvinejska (Republike Gvineje)';
$string['nationality.gq'] = 'Ekvatorske Gvineje';
$string['nationality.gr'] = 'Grčka';
$string['nationality.gt'] = 'Gvatemalska';
$string['nationality.gw'] = 'Gvinejska (Republike Gvineje-Bisau)';
$string['nationality.gy'] = 'Gvajanska (Gvajane)';
$string['nationality.hn'] = 'Honduraška';
$string['nationality.hr'] = 'Hrvatska';
$string['nationality.ht'] = 'Haićanska';
$string['nationality.hu'] = 'Madžarska';
$string['nationality.id'] = 'Indonezijska';
$string['nationality.ie'] = 'Irska';
$string['nationality.il'] = 'Izraelska';
$string['nationality.in'] = 'Indijska';
$string['nationality.iq'] = 'Iračka';
$string['nationality.ir'] = 'Iranska';
$string['nationality.is'] = 'Islandska';
$string['nationality.it'] = 'Talijanska';
$string['nationality.jm'] = 'Jamajkanška';
$string['nationality.jo'] = 'Jordanska';
$string['nationality.jp'] = 'Japanska';
$string['nationality.ke'] = 'Kenijska';
$string['nationality.kg'] = 'Kirgiška';
$string['nationality.kh'] = 'Kambodžanska';
$string['nationality.ki'] = 'Kiribatska';
$string['nationality.km'] = 'Komorska';
$string['nationality.kn'] = 'Svetog Kristofora i Nevisa';
$string['nationality.kp'] = 'Sjevernokorejska (Demokratske Narodne Republike Koreje)';
$string['nationality.kr'] = 'Južnokorejska (Republike Koreje)';
$string['nationality.kw'] = 'Kuvajtska';
$string['nationality.kz'] = 'Kazahstanska';
$string['nationality.la'] = 'Laoska';
$string['nationality.lb'] = 'Libanonska';
$string['nationality.lc'] = 'Svete Lucije';
$string['nationality.li'] = 'Lihtenštajnska';
$string['nationality.lk'] = 'Šrilankanska';
$string['nationality.lr'] = 'Liberijska';
$string['nationality.ls'] = 'Lesotska';
$string['nationality.lt'] = 'Litvanska';
$string['nationality.lu'] = 'Luksemburška';
$string['nationality.lv'] = 'Latvijska';
$string['nationality.ly'] = 'Libijska';
$string['nationality.ma'] = 'Marokanska';
$string['nationality.mc'] = 'Monegaška';
$string['nationality.md'] = 'Moldavska';
$string['nationality.me'] = 'Crnogorska';
$string['nationality.mg'] = 'Madagaskarska';
$string['nationality.mh'] = 'Maršalovih Otoka';
$string['nationality.mk'] = 'Makedonska';
$string['nationality.ml'] = 'Malijska';
$string['nationality.mm'] = 'Burmanska (mijanmarska)';
$string['nationality.mn'] = 'Mongolska';
$string['nationality.mr'] = 'Mauritanijska';
$string['nationality.mt'] = 'Malteška';
$string['nationality.mu'] = 'Mauricijska';
$string['nationality.mv'] = 'Maldivska';
$string['nationality.mw'] = 'Malavijska';
$string['nationality.mx'] = 'Meksička';
$string['nationality.my'] = 'Malajska';
$string['nationality.mz'] = 'Mozambijska';
$string['nationality.na'] = 'Namibijska';
$string['nationality.ne'] = 'Nigerijska (Republike Niger)';
$string['nationality.ng'] = 'Nigerijska (Federalne Republike Niger)';
$string['nationality.ni'] = 'Nikaragvanska';
$string['nationality.nl'] = 'Nizozemska';
$string['nationality.no'] = 'Norveška';
$string['nationality.np'] = 'Nepalska';
$string['nationality.nr'] = 'Nauruanska';
$string['nationality.nu'] = 'Niuenska';
$string['nationality.nz'] = 'Novozelandska';
$string['nationality.om'] = 'Omanska';
$string['nationality.pa'] = 'Panamska';
$string['nationality.pe'] = 'Peruanska';
$string['nationality.pg'] = 'Papue Nove Gvineje';
$string['nationality.ph'] = 'Filipinska';
$string['nationality.pk'] = 'Pakistanska';
$string['nationality.pl'] = 'Poljska';
$string['nationality.pr'] = 'Portorikanska';
$string['nationality.ps'] = 'Palestinska';
$string['nationality.pt'] = 'Portugalska';
$string['nationality.pw'] = 'Palaunska';
$string['nationality.py'] = 'Paragvajska';
$string['nationality.qa'] = 'Katarska';
$string['nationality.ro'] = 'Rumunjska';
$string['nationality.rs'] = 'Srpska';
$string['nationality.ru'] = 'Ruska';
$string['nationality.rw'] = 'Ruandska';
$string['nationality.sa'] = 'Saudijske Arabije';
$string['nationality.sb'] = 'Solomonskih Otoka';
$string['nationality.sc'] = 'Sejšelska';
$string['nationality.sd'] = 'Sudanska';
$string['nationality.se'] = 'Švedska';
$string['nationality.sg'] = 'Singapurska';
$string['nationality.si'] = 'Slovenska';
$string['nationality.sk'] = 'Slovačka';
$string['nationality.sl'] = 'Sijera Leonea';
$string['nationality.sm'] = 'San Marina';
$string['nationality.sn'] = 'Senegalska';
$string['nationality.so'] = 'Somalijska';
$string['nationality.sr'] = 'Surinamska';
$string['nationality.st'] = 'Svetog Tome i Prinsipea';
$string['nationality.sv'] = 'Salvadorska';
$string['nationality.sy'] = 'Sirijska';
$string['nationality.sz'] = 'Svazilandska';
$string['nationality.td'] = 'Čadska';
$string['nationality.tg'] = 'Togoanska';
$string['nationality.th'] = 'Tajlandska';
$string['nationality.tj'] = 'Tadžikistanska';
$string['nationality.tl'] = 'Istočnotimorska';
$string['nationality.tm'] = 'Turkmenska';
$string['nationality.tn'] = 'Tuniska';
$string['nationality.to'] = 'Tonganska';
$string['nationality.tr'] = 'Turska';
$string['nationality.tt'] = 'Trinidada i Tobaga';
$string['nationality.tv'] = 'Tuvaluska';
$string['nationality.tz'] = 'Tanzanijska';
$string['nationality.ua'] = 'Ukrajinska';
$string['nationality.ug'] = 'Ugandska';
$string['nationality.us'] = 'Američka';
$string['nationality.uy'] = 'Urugvajska';
$string['nationality.uz'] = 'Uzbekistanska';
$string['nationality.va'] = 'Vatikanska';
$string['nationality.vc'] = 'Svetog Vincenta i Grenadina';
$string['nationality.ve'] = 'Venezuelska';
$string['nationality.vn'] = 'Vijetnamska';
$string['nationality.vu'] = 'Vanuatska';
$string['nationality.ws'] = 'Samoanska';
$string['nationality.ye'] = 'Jemenska';
$string['nationality.za'] = 'Južnoafrička';
$string['nationality.zm'] = 'Zambijska';
$string['nationality.zw'] = 'Zimbabveanska';

?>
