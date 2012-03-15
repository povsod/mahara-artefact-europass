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
$string['europassLP'] = 'Europass Valodu pasi';
$string['photograph'] = 'Fotogrāfija';
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
$string['externaldate-text-long'] = 'dd. mēnesis gggg';
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
$string['identification'] = 'Personas dati';
$string['identification-birthdate'] = 'Dzimšanas datums';
$string['identification-birthplace'] = 'Dzimšanas vieta';
$string['identification-lastname'] = 'Uzvārds';
$string['identification-firstname'] = 'Vārds';
$string['identification-addressLine'] = 'Iela / Ielas numurs';
$string['identification-municipality'] = 'Pilseta';
$string['identification-postalCode'] = 'Pasta indekss';
$string['identification-country'] = 'Valsts';
$string['identification-contactinfo-telephone'] = 'Tālrunis';
$string['identification-contactinfo-mobile'] = 'Mobilais tālrunis';
$string['identification-contactinfo-fax'] = 'Fakss';
$string['identification-contactinfo-email'] = 'E-pasts';
$string['identification-nationality'] = 'Pilsonība';
$string['identification-gender'] = 'Dzimums';

// Europass CV - STEP 2
$string['application'] = 'Vēlamā nodarbošanās / profesionālā joma';

// Europass CV - STEP 3
$string['workexperience'] = 'Darba pieredze';

// Europass CV - STEP 4
$string['education'] = 'Izglītība';

// Europass CV - STEP 5
$string['mothertongue'] = 'Dzimtā(s) valoda(s)';
$string['otherlanguage'] = 'Cita(s) valoda(s)';

$string['language-foreign-listening'] = 'Klausīšanās';
$string['language-foreign-listening-th'] = 'Klausīšanās';
$string['language-foreign-reading'] = 'Lasīšana';
$string['language-foreign-reading-th'] = 'Lasīšana';
$string['language-foreign-spokeninteraction'] = 'Dialogs';
$string['language-foreign-spokeninteraction-th'] = 'Dialogs';
$string['language-foreign-spokenproduction'] = 'Monologs';
$string['language-foreign-spokenproduction-th'] = 'Monologs';
$string['language-foreign-writing'] = 'Rakstīšana';
$string['language-foreign-writing-th'] = 'Rakstīšana';
$string['language-foreign-CEF-level'] = 'Eiropas kopīgām pamatnostādnēm valodu apguvē atbilstošs līmenis';

$string['language-foreign-level.A1'] = 'Pamatlīmenis (A1)';
$string['language-foreign-level.A2'] = 'Pamatlīmenis (A2)';
$string['language-foreign-level.B1'] = 'Vidējais līmenis (B1)';
$string['language-foreign-level.B2'] = 'Vidējais līmenis (B2)';
$string['language-foreign-level.C1'] = 'Augstākais līmenis (C1)';
$string['language-foreign-level.C2'] = 'Augstākais līmenis (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Vadītāja apliecība';
$string['skills-and-competences'] = 'Prasmes';
$string['socialskill'] = 'Sociālās prasmes';
$string['organisationalskill'] = 'Organizatoriskas prasmes';
$string['technicalskill'] = 'Tehniskas prasmes';
$string['computerskill'] = 'Datora lietošanas prasmes';
$string['artisticskill'] = 'Mākslinieciskas prasmes';
$string['otherskill'] = 'Citas prasmes';
$string['additionalinfo'] = 'Papildu informācija';
$string['annexes'] = 'Pielikumi';

// Europass LP - STEP 2
$string['language-certificates'] = 'Diplomi vai apliecības';
$string['diploma-title'] = 'Diploma vai apliecības nosaukums';
$string['diploma-awardingBody'] = 'Piešķīrējiestāde';
$string['diploma-date'] = 'Gads';
$string['diploma-level'] = 'Līmenis';
$string['language-experiences'] = 'Lingvistiskā pieredze';
$string['experiences-period-from'] = 'No';
$string['experiences-period-to'] = 'Līdz';

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
$string['language.ab'] = 'Abhāziešu';
$string['language.af'] = 'Afrikānss';
$string['language.an'] = 'Aragoniešu';
$string['language.ar'] = 'Arābu';
$string['language.as'] = 'Asāmiešu';
$string['language.az'] = 'Azerbaidžānu';
$string['language.be'] = 'Baltkrievu';
$string['language.bg'] = 'Bulgāru';
$string['language.bn'] = 'Bengāļu';
$string['language.bo'] = 'Tibetas';
$string['language.br'] = 'Bretoņu';
$string['language.bs'] = 'Bosniešu';
$string['language.ca'] = 'Kataloniešu / valensiešu';
$string['language.ce'] = 'Čečenu';
$string['language.co'] = 'Korsikāņu';
$string['language.cs'] = 'Čehu';
$string['language.cy'] = 'Velsiešu';
$string['language.da'] = 'Dāņu';
$string['language.de'] = 'Vācu';
$string['language.el'] = 'grieķu';
$string['language.en'] = 'Angļu';
$string['language.es'] = 'Spāņu / Kastīliešu';
$string['language.et'] = 'Igauņu';
$string['language.eu'] = 'Basku';
$string['language.fa'] = 'Persiešu';
$string['language.fi'] = 'Somu';
$string['language.fj'] = 'Fidži';
$string['language.fo'] = 'Faroju';
$string['language.fr'] = 'Franču';
$string['language.fy'] = 'Rietumfrīzu';
$string['language.ga'] = 'Īru';
$string['language.gd'] = 'Gēļu / skotu gēļu';
$string['language.gl'] = 'Gallu';
$string['language.gv'] = 'Menksu';
$string['language.he'] = 'Ēbreju';
$string['language.hi'] = 'Hindi';
$string['language.hr'] = 'Horvātu';
$string['language.ht'] = 'Haiti; Haiti kreolu';
$string['language.hu'] = 'Ungāru';
$string['language.hy'] = 'Armēņu';
$string['language.id'] = 'Indonēziešu';
$string['language.is'] = 'Islandiešu';
$string['language.it'] = 'Itāļu';
$string['language.ja'] = 'Japāņu';
$string['language.jv'] = 'Javiešu';
$string['language.ka'] = 'Gruzīnu';
$string['language.kg'] = 'Kongo';
$string['language.ko'] = 'Korejiešu';
$string['language.ku'] = 'Kurdu';
$string['language.kw'] = 'Korniešu';
$string['language.ky'] = 'Kirgīzu';
$string['language.lb'] = 'Luksemburgiešu';
$string['language.li'] = 'Limburgiešu';
$string['language.ln'] = 'Lingālu';
$string['language.lt'] = 'Lietuviešu';
$string['language.lv'] = 'Latviešu';
$string['language.mg'] = 'Malagasi';
$string['language.mk'] = 'Maķedoniešu';
$string['language.mn'] = 'Mongoļu';
$string['language.mo'] = 'Moldāvu';
$string['language.ms'] = 'Malajiešu';
$string['language.mt'] = 'Maltiešu';
$string['language.my'] = 'Birmiešu';
$string['language.nb'] = 'Norvēģu (Bokmål)';
$string['language.ne'] = 'Nepāļu';
$string['language.nl'] = 'Nīderlandiešu';
$string['language.nn'] = 'Norvēģu (Nynorsk)';
$string['language.no'] = 'Norvēģu';
$string['language.pl'] = 'Poļu';
$string['language.pt'] = 'Portugāļu';
$string['language.rm'] = 'Retoromāņu';
$string['language.ro'] = 'Rumāņu';
$string['language.ru'] = 'Krievu';
$string['language.r0'] = 'Čigānu'; // doesn't really have an ISO 369-1 code...
$string['language.sc'] = 'Sardīniešu';
$string['language.se'] = 'Ziemeļsāmu';
$string['language.sk'] = 'Slovāku';
$string['language.sl'] = 'Slovēņu';
$string['language.so'] = 'Somāļu';
$string['language.sq'] = 'Albāņu';
$string['language.sr'] = 'Serbu';
$string['language.sv'] = 'Zviedru';
$string['language.sw'] = 'Svahilu';
$string['language.tk'] = 'Turkmēņu';
$string['language.tr'] = 'Turku';
$string['language.ty'] = 'Taiti';
$string['language.uk'] = 'Ukraiņu';
$string['language.ur'] = 'Urdu';
$string['language.uz'] = 'Uzbeku';
$string['language.vi'] = 'Vjetnamiešu';
$string['language.yi'] = 'Jidišs';
$string['language.zh'] = 'Ķīniešu';
$string['language.cu'] = 'Baznīcslāvu';
$string['language.eo'] = 'Esperanto';
$string['language.la'] = 'Latīņu';
$string['language.oc'] = 'Oksitāņu (pēc 1500.g.); provansāļu';
$string['language.vo'] = 'Vola';
// ISO 639-1:2002 languages that had been left out by Europass
$string['language.aa'] = 'Afāru valoda';
$string['language.ae'] = 'Avesta';
$string['language.ak'] = 'Akanu valoda';
$string['language.am'] = 'Amharu valoda';
$string['language.av'] = 'Avāru valoda';
$string['language.ay'] = 'Aimaru valoda';
$string['language.ba'] = 'Baškīru valoda';
$string['language.bh'] = 'Biharu valoda';
$string['language.bi'] = 'Bišlamā';
$string['language.bm'] = 'Bambaru valoda';
$string['language.ch'] = 'Čamorru valoda';
$string['language.cr'] = 'Krī valoda';
$string['language.cv'] = 'Čuvašu valoda';
$string['language.dv'] = 'Maldīviešu valoda';
$string['language.dz'] = 'Dzongke';
$string['language.ee'] = 'Evu valoda';
$string['language.ff'] = 'Fulu valoda';
$string['language.gn'] = 'Gvaranu valoda';
$string['language.gu'] = 'Gudžaratu valoda';
$string['language.ha'] = 'Hausu valoda';
$string['language.ho'] = 'Hirimotu valoda';
$string['language.hz'] = 'Hereru valoda';
$string['language.ia'] = 'Interlingva';
$string['language.ig'] = 'Igbo valoda';
$string['language.ii'] = 'Sičuaņas ji valoda';
$string['language.ik'] = 'Inupiaku valoda';
$string['language.io'] = 'Ido';
$string['language.iu'] = 'Inuītu valoda';
$string['language.ki'] = 'Kikuju valoda';
$string['language.kj'] = 'Kvaņamu valoda';
$string['language.kk'] = 'Kazahu valoda';
$string['language.kl'] = 'Grenlandiešu valoda';
$string['language.km'] = 'Khmeru valoda';
$string['language.kn'] = 'Kannadu valoda';
$string['language.kr'] = 'Kanuru valoda';
$string['language.ks'] = 'Kašmiriešu valoda';
$string['language.kv'] = 'Komi valoda';
$string['language.lg'] = 'Gandu valoda';
$string['language.lo'] = 'Laosiešu valoda';
$string['language.lu'] = 'Lubakatanga';
$string['language.mh'] = 'Māršaliešu valoda';
$string['language.mi'] = 'Maoru valoda';
$string['language.ml'] = 'Malajalu valoda';
$string['language.mr'] = 'Marathu valoda';
$string['language.na'] = 'Nauruiešu valoda';
$string['language.nd'] = 'Ziemeļndebelu valoda';
$string['language.ng'] = 'Ndongu valoda';
$string['language.nr'] = 'Dienvidndebelu valoda';
$string['language.nv'] = 'Navahu valoda';
$string['language.ny'] = 'Čičeva';
$string['language.oj'] = 'Odžibvu valoda';
$string['language.om'] = 'Oromu valoda';
$string['language.or'] = 'Oriju valoda';
$string['language.os'] = 'Osetīnu valoda';
$string['language.pa'] = 'Pandžabu valoda';
$string['language.pi'] = 'Pāli valoda';
$string['language.ps'] = 'Puštu';
$string['language.qu'] = 'Kečvu valoda';
$string['language.rn'] = 'Rundu valoda';
$string['language.rw'] = 'Kiņaruanda';
$string['language.sa'] = 'Sanskrits';
$string['language.sd'] = 'Sindhu valoda';
$string['language.sg'] = 'Sangu valoda';
$string['language.si'] = 'Singāļu valoda';
$string['language.sm'] = 'Samoāņu valoda';
$string['language.sn'] = 'Šonu valoda';
$string['language.ss'] = 'Svatu valoda';
$string['language.st'] = 'Dienvidsotu valoda';
$string['language.su'] = 'Zundu valoda';
$string['language.ta'] = 'Tamilu valoda';
$string['language.te'] = 'Telugu valoda';
$string['language.tg'] = 'Tadžiku valoda';
$string['language.th'] = 'Taju valoda';
$string['language.ti'] = 'Tigrinja';
$string['language.tl'] = 'Tagalu valoda';
$string['language.tn'] = 'Cvanu valoda';
$string['language.to'] = 'Tongiešu valoda';
$string['language.ts'] = 'Congu valoda';
$string['language.tt'] = 'Tatāru valoda';
$string['language.tw'] = 'Tvī valoda';
$string['language.ug'] = 'Uiguru valoda';
$string['language.ve'] = 'Vendu valoda';
$string['language.wa'] = 'Valoņu valoda';
$string['language.wo'] = 'Volofu valoda';
$string['language.xh'] = 'Khosu valoda';
$string['language.yo'] = 'Jorubu valoda';
$string['language.za'] = 'Džuanu valoda';
$string['language.zu'] = 'Zulu valoda';

// ISO 3166-1-alpha-2 filtered by Europass 
// (http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm)
$string['nationality.ad'] = '';
$string['nationality.ae'] = 'Apvienotie Arābu Emirāti';
$string['nationality.af'] = 'Afganistāna';
$string['nationality.ag'] = '';
$string['nationality.al'] = 'Albānija';
$string['nationality.am'] = 'Armēnija';
$string['nationality.ao'] = 'Angola';
$string['nationality.ar'] = 'Argentīna';
$string['nationality.at'] = 'Austrija';
$string['nationality.au'] = 'Austrālija';
$string['nationality.az'] = 'Azerbaidžāna';
$string['nationality.ba'] = 'Bosnija un Hercegovina';
$string['nationality.bb'] = '';
$string['nationality.bd'] = 'Bangladeša';
$string['nationality.be'] = 'Beļģija';
$string['nationality.bf'] = 'Burkinafaso';
$string['nationality.bg'] = 'Bulgārija';
$string['nationality.bh'] = 'Bahreina';
$string['nationality.bi'] = 'Burundija';
$string['nationality.bj'] = 'Benina';
$string['nationality.bn'] = '';
$string['nationality.bo'] = 'Bolīvija';
$string['nationality.br'] = 'Brazīlija';
$string['nationality.bs'] = '';
$string['nationality.bt'] = 'Butāna';
$string['nationality.bw'] = 'Botsvāna';
$string['nationality.by'] = 'Baltkrievija';
$string['nationality.bz'] = '';
$string['nationality.ca'] = 'Kanāda';
$string['nationality.cd'] = 'Kongo Demokrātiskā Republika';
$string['nationality.cf'] = 'Centrālāfrikas Republika';
$string['nationality.cg'] = 'Kongo';
$string['nationality.ch'] = 'Šveice';
$string['nationality.ci'] = 'Kotdivuāra';
$string['nationality.cl'] = 'Čīle';
$string['nationality.cm'] = 'Kamerūna';
$string['nationality.cn'] = 'Ķīna';
$string['nationality.co'] = 'Kolumbija';
$string['nationality.cr'] = 'Kostarika';
$string['nationality.cu'] = 'Kuba';
$string['nationality.cv'] = 'Kaboverde';
$string['nationality.cy'] = 'Kipra';
$string['nationality.cz'] = 'Čehija';
$string['nationality.de'] = 'Vācija';
$string['nationality.dj'] = 'Džibutija';
$string['nationality.dk'] = 'Dānija';
$string['nationality.dm'] = '';
$string['nationality.do'] = 'Dominikānas Republika';
$string['nationality.dz'] = 'Alžīrija';
$string['nationality.ec'] = 'Ekvadora';
$string['nationality.ee'] = 'Igaunija';
$string['nationality.eg'] = 'Ēģipte';
$string['nationality.er'] = 'Eritreja';
$string['nationality.es'] = 'Spānija';
$string['nationality.et'] = 'Etiopija';
$string['nationality.fi'] = 'Somija';
$string['nationality.fj'] = 'Fidži';
$string['nationality.fm'] = 'Meksika';
$string['nationality.fr'] = 'Francija';
$string['nationality.ga'] = 'Gabona';
$string['nationality.gb'] = 'Lielbritānija';
$string['nationality.gd'] = '';
$string['nationality.ge'] = 'Gruzija';
$string['nationality.gh'] = 'Gana';
$string['nationality.gl'] = '';
$string['nationality.gm'] = 'Gambija';
$string['nationality.gn'] = 'Gvineja';
$string['nationality.gq'] = 'Ekvatoriālā Gvineja';
$string['nationality.gr'] = 'Grieķija';
$string['nationality.gt'] = 'Gvatemala';
$string['nationality.gw'] = 'Gvineja-Bisava';
$string['nationality.gy'] = 'Gajāna';
$string['nationality.hn'] = 'Hondurasa';
$string['nationality.hr'] = 'Horvātija';
$string['nationality.ht'] = 'Haiti';
$string['nationality.hu'] = 'Ungārija';
$string['nationality.id'] = 'Indonēzija';
$string['nationality.ie'] = 'Īrija';
$string['nationality.il'] = 'Izraēla';
$string['nationality.in'] = 'Indija';
$string['nationality.iq'] = 'Irāka';
$string['nationality.ir'] = 'Irāna';
$string['nationality.is'] = 'Islande';
$string['nationality.it'] = 'Itālija';
$string['nationality.jm'] = 'Jamaika';
$string['nationality.jo'] = 'Jordānija';
$string['nationality.jp'] = 'Japāna';
$string['nationality.ke'] = 'Kenija';
$string['nationality.kg'] = 'Kirgīzija';
$string['nationality.kh'] = 'Kambodža';
$string['nationality.ki'] = '';
$string['nationality.km'] = 'Komoru salas';
$string['nationality.kn'] = '';
$string['nationality.kp'] = 'Korejas Tautas Demokrātiskā Republika';
$string['nationality.kr'] = 'Korejas Republika';
$string['nationality.kw'] = 'Kuveita';
$string['nationality.kz'] = 'Kazahstāna';
$string['nationality.la'] = 'Laosas Tautas Demokrātiskā Republika';
$string['nationality.lb'] = 'Libāna';
$string['nationality.lc'] = '';
$string['nationality.li'] = 'Lihtenšteina';
$string['nationality.lk'] = 'Šrilanka';
$string['nationality.lr'] = 'Libērija';
$string['nationality.ls'] = 'Lesoto';
$string['nationality.lt'] = 'Lietuva';
$string['nationality.lu'] = 'Luksemburga';
$string['nationality.lv'] = 'Latvija';
$string['nationality.ly'] = 'Lībijas Arābu Džamahīrija';
$string['nationality.ma'] = 'Montserrata';
$string['nationality.mc'] = 'Moldova';
$string['nationality.md'] = 'Mikronēzija';
$string['nationality.me'] = '';
$string['nationality.mg'] = 'Madagaskara';
$string['nationality.mh'] = '';
$string['nationality.mk'] = 'Bijušās Dienvidslāvijas Maķedonijas Republikas';
$string['nationality.ml'] = 'Mali';
$string['nationality.mm'] = 'Mjanma';
$string['nationality.mn'] = 'Monako';
$string['nationality.mr'] = 'Martinika';
$string['nationality.mt'] = 'Malta';
$string['nationality.mu'] = 'Mauritānija';
$string['nationality.mv'] = '';
$string['nationality.mw'] = 'Malāvija';
$string['nationality.mx'] = 'Majota';
$string['nationality.my'] = 'Malaizija';
$string['nationality.mz'] = 'Mozambika';
$string['nationality.na'] = 'Namībija';
$string['nationality.ne'] = 'Nigēra';
$string['nationality.ng'] = 'Nigērija';
$string['nationality.ni'] = 'Nikaragva';
$string['nationality.nl'] = 'Nīderlande';
$string['nationality.no'] = 'Norvēģija';
$string['nationality.np'] = 'Nepāla';
$string['nationality.nr'] = '';
$string['nationality.nu'] = '';
$string['nationality.nz'] = 'Jaunzēlande';
$string['nationality.om'] = 'Omāna';
$string['nationality.pa'] = 'Panama';
$string['nationality.pe'] = 'Peru';
$string['nationality.pg'] = 'Papua-Jaungvineja';
$string['nationality.ph'] = 'Filipīnas';
$string['nationality.pk'] = 'Pakistāna';
$string['nationality.pl'] = 'Polija';
$string['nationality.pr'] = 'Puertoriko';
$string['nationality.ps'] = '';
$string['nationality.pt'] = 'Portugāle';
$string['nationality.pw'] = '';
$string['nationality.py'] = 'Paragvaja';
$string['nationality.qa'] = 'Katara';
$string['nationality.ro'] = 'Rumānija';
$string['nationality.rs'] = 'Serbija un Melnkalne';
$string['nationality.ru'] = 'Krievija';
$string['nationality.rw'] = 'Ruanda';
$string['nationality.sa'] = 'Saūda Arābija';
$string['nationality.sb'] = 'Zālamana salas';
$string['nationality.sc'] = '';
$string['nationality.sd'] = 'Sudāna';
$string['nationality.se'] = 'Zviedrija';
$string['nationality.sg'] = 'Singapūra';
$string['nationality.si'] = 'Slovēnija';
$string['nationality.sk'] = 'Slovākija';
$string['nationality.sl'] = 'Sjerraleone';
$string['nationality.sm'] = '';
$string['nationality.sn'] = 'Senegāla';
$string['nationality.so'] = 'Somālija';
$string['nationality.sr'] = '';
$string['nationality.st'] = '';
$string['nationality.sv'] = 'Salvadora';
$string['nationality.sy'] = 'Sīrija';
$string['nationality.sz'] = 'Svazilenda';
$string['nationality.td'] = 'Čada';
$string['nationality.tg'] = 'Togo';
$string['nationality.th'] = 'Taizeme';
$string['nationality.tj'] = 'Tadžikistāna';
$string['nationality.tl'] = 'Austrumtimora';
$string['nationality.tm'] = 'Turkmenistāna';
$string['nationality.tn'] = 'Tunisija';
$string['nationality.to'] = '';
$string['nationality.tr'] = 'Turcija';
$string['nationality.tt'] = 'Trinidāda un Tobāgo';
$string['nationality.tv'] = '';
$string['nationality.tz'] = 'Tanzānija';
$string['nationality.ua'] = 'Ukraina';
$string['nationality.ug'] = 'Uganda';
$string['nationality.us'] = 'Amerikas Savienotās Valstis';
$string['nationality.uy'] = 'Urugvaja';
$string['nationality.uz'] = 'Uzbekistāna';
$string['nationality.va'] = 'Svētais Krēsls (Vatikāns)';
$string['nationality.vc'] = '';
$string['nationality.ve'] = 'Venecuēla';
$string['nationality.vn'] = 'Vjetnama';
$string['nationality.vu'] = '';
$string['nationality.ws'] = '';
$string['nationality.ye'] = 'Jemena';
$string['nationality.za'] = 'Dienvidāfrika';
$string['nationality.zm'] = 'Zambija';
$string['nationality.zw'] = 'Zimbabve';

// List of nationalities based on the ISO 3166-1-alpha-2 filtered by Europass country list
// (http://europass.cedefop.europa.eu/TechnicalResources/XML/xsd/included_schemas/EUROPASS_Nationalities_V1.0.xsd)
$string['nationality.ad'] = '';
$string['nationality.ae'] = 'Apvienotie Arābu Emirāti';
$string['nationality.af'] = 'Afganistāna';
$string['nationality.ag'] = '';
$string['nationality.al'] = 'Albānija';
$string['nationality.am'] = 'Armēnija';
$string['nationality.ao'] = 'Angola';
$string['nationality.ar'] = 'Argentīna';
$string['nationality.at'] = 'Austrija';
$string['nationality.au'] = 'Austrālija';
$string['nationality.az'] = 'Azerbaidžāna';
$string['nationality.ba'] = 'Bosnija un Hercegovina';
$string['nationality.bb'] = '';
$string['nationality.bd'] = 'Bangladeša';
$string['nationality.be'] = 'Beļģija';
$string['nationality.bf'] = 'Burkinafaso';
$string['nationality.bg'] = 'Bulgārija';
$string['nationality.bh'] = 'Bahreina';
$string['nationality.bi'] = 'Burundija';
$string['nationality.bj'] = 'Benina';
$string['nationality.bn'] = '';
$string['nationality.bo'] = 'Bolīvija';
$string['nationality.br'] = 'Brazīlija';
$string['nationality.bs'] = '';
$string['nationality.bt'] = 'Butāna';
$string['nationality.bw'] = 'Botsvāna';
$string['nationality.by'] = 'Baltkrievija';
$string['nationality.bz'] = '';
$string['nationality.ca'] = 'Kanāda';
$string['nationality.cd'] = 'Kongo Demokrātiskā Republika';
$string['nationality.cf'] = 'Centrālāfrikas Republika';
$string['nationality.cg'] = 'Kongo';
$string['nationality.ch'] = 'Šveice';
$string['nationality.ci'] = 'Kotdivuāra';
$string['nationality.cl'] = 'Čīle';
$string['nationality.cm'] = 'Kamerūna';
$string['nationality.cn'] = 'Ķīna';
$string['nationality.co'] = 'Kolumbija';
$string['nationality.cr'] = 'Kostarika';
$string['nationality.cu'] = 'Kuba';
$string['nationality.cv'] = 'Kaboverde';
$string['nationality.cy'] = 'Kipra';
$string['nationality.cz'] = 'Čehija';
$string['nationality.de'] = 'Vācija';
$string['nationality.dj'] = 'Džibutija';
$string['nationality.dk'] = 'Dānija';
$string['nationality.dm'] = '';
$string['nationality.do'] = 'Dominikānas Republika';
$string['nationality.dz'] = 'Alžīrija';
$string['nationality.ec'] = 'Ekvadora';
$string['nationality.ee'] = 'Igaunija';
$string['nationality.eg'] = 'Ēģipte';
$string['nationality.er'] = 'Eritreja';
$string['nationality.es'] = 'Spānija';
$string['nationality.et'] = 'Etiopija';
$string['nationality.fi'] = 'Somija';
$string['nationality.fj'] = 'Fidži';
$string['nationality.fm'] = 'Meksika';
$string['nationality.fr'] = 'Francija';
$string['nationality.ga'] = 'Gabona';
$string['nationality.gb'] = 'Lielbritānija';
$string['nationality.gd'] = '';
$string['nationality.ge'] = 'Gruzija';
$string['nationality.gh'] = 'Gana';
$string['nationality.gl'] = '';
$string['nationality.gm'] = 'Gambija';
$string['nationality.gn'] = 'Gvineja';
$string['nationality.gq'] = 'Ekvatoriālā Gvineja';
$string['nationality.gr'] = 'Grieķija';
$string['nationality.gt'] = 'Gvatemala';
$string['nationality.gw'] = 'Gvineja-Bisava';
$string['nationality.gy'] = 'Gajāna';
$string['nationality.hn'] = 'Hondurasa';
$string['nationality.hr'] = 'Horvātija';
$string['nationality.ht'] = 'Haiti';
$string['nationality.hu'] = 'Ungārija';
$string['nationality.id'] = 'Indonēzija';
$string['nationality.ie'] = 'Īrija';
$string['nationality.il'] = 'Izraēla';
$string['nationality.in'] = 'Indija';
$string['nationality.iq'] = 'Irāka';
$string['nationality.ir'] = 'Irāna';
$string['nationality.is'] = 'Islande';
$string['nationality.it'] = 'Itālija';
$string['nationality.jm'] = 'Jamaika';
$string['nationality.jo'] = 'Jordānija';
$string['nationality.jp'] = 'Japāna';
$string['nationality.ke'] = 'Kenija';
$string['nationality.kg'] = 'Kirgīzija';
$string['nationality.kh'] = 'Kambodža';
$string['nationality.ki'] = '';
$string['nationality.km'] = 'Komoru salas';
$string['nationality.kn'] = '';
$string['nationality.kp'] = 'Korejas Tautas Demokrātiskā Republika';
$string['nationality.kr'] = 'Korejas Republika';
$string['nationality.kw'] = 'Kuveita';
$string['nationality.kz'] = 'Kazahstāna';
$string['nationality.la'] = 'Laosas Tautas Demokrātiskā Republika';
$string['nationality.lb'] = 'Libāna';
$string['nationality.lc'] = '';
$string['nationality.li'] = 'Lihtenšteina';
$string['nationality.lk'] = 'Šrilanka';
$string['nationality.lr'] = 'Libērija';
$string['nationality.ls'] = 'Lesoto';
$string['nationality.lt'] = 'Lietuva';
$string['nationality.lu'] = 'Luksemburga';
$string['nationality.lv'] = 'Latvija';
$string['nationality.ly'] = 'Lībijas Arābu Džamahīrija';
$string['nationality.ma'] = 'Montserrata';
$string['nationality.mc'] = 'Moldova';
$string['nationality.md'] = 'Mikronēzija';
$string['nationality.me'] = '';
$string['nationality.mg'] = 'Madagaskara';
$string['nationality.mh'] = '';
$string['nationality.mk'] = 'Bijušās Dienvidslāvijas Maķedonijas Republikas';
$string['nationality.ml'] = 'Mali';
$string['nationality.mm'] = 'Mjanma';
$string['nationality.mn'] = 'Monako';
$string['nationality.mr'] = 'Martinika';
$string['nationality.mt'] = 'Malta';
$string['nationality.mu'] = 'Mauritānija';
$string['nationality.mv'] = '';
$string['nationality.mw'] = 'Malāvija';
$string['nationality.mx'] = 'Majota';
$string['nationality.my'] = 'Malaizija';
$string['nationality.mz'] = 'Mozambika';
$string['nationality.na'] = 'Namībija';
$string['nationality.ne'] = 'Nigēra';
$string['nationality.ng'] = 'Nigērija';
$string['nationality.ni'] = 'Nikaragva';
$string['nationality.nl'] = 'Nīderlande';
$string['nationality.no'] = 'Norvēģija';
$string['nationality.np'] = 'Nepāla';
$string['nationality.nr'] = '';
$string['nationality.nu'] = '';
$string['nationality.nz'] = 'Jaunzēlande';
$string['nationality.om'] = 'Omāna';
$string['nationality.pa'] = 'Panama';
$string['nationality.pe'] = 'Peru';
$string['nationality.pg'] = 'Papua-Jaungvineja';
$string['nationality.ph'] = 'Filipīnas';
$string['nationality.pk'] = 'Pakistāna';
$string['nationality.pl'] = 'Polija';
$string['nationality.pr'] = 'Puertoriko';
$string['nationality.ps'] = '';
$string['nationality.pt'] = 'Portugāle';
$string['nationality.pw'] = '';
$string['nationality.py'] = 'Paragvaja';
$string['nationality.qa'] = 'Katara';
$string['nationality.ro'] = 'Rumānija';
$string['nationality.rs'] = 'Serbija un Melnkalne';
$string['nationality.ru'] = 'Krievija';
$string['nationality.rw'] = 'Ruanda';
$string['nationality.sa'] = 'Saūda Arābija';
$string['nationality.sb'] = 'Zālamana salas';
$string['nationality.sc'] = '';
$string['nationality.sd'] = 'Sudāna';
$string['nationality.se'] = 'Zviedrija';
$string['nationality.sg'] = 'Singapūra';
$string['nationality.si'] = 'Slovēnija';
$string['nationality.sk'] = 'Slovākija';
$string['nationality.sl'] = 'Sjerraleone';
$string['nationality.sm'] = '';
$string['nationality.sn'] = 'Senegāla';
$string['nationality.so'] = 'Somālija';
$string['nationality.sr'] = '';
$string['nationality.st'] = '';
$string['nationality.sv'] = 'Salvadora';
$string['nationality.sy'] = 'Sīrija';
$string['nationality.sz'] = 'Svazilenda';
$string['nationality.td'] = 'Čada';
$string['nationality.tg'] = 'Togo';
$string['nationality.th'] = 'Taizeme';
$string['nationality.tj'] = 'Tadžikistāna';
$string['nationality.tl'] = 'Austrumtimora';
$string['nationality.tm'] = 'Turkmenistāna';
$string['nationality.tn'] = 'Tunisija';
$string['nationality.to'] = '';
$string['nationality.tr'] = 'Turcija';
$string['nationality.tt'] = 'Trinidāda un Tobāgo';
$string['nationality.tv'] = '';
$string['nationality.tz'] = 'Tanzānija';
$string['nationality.ua'] = 'Ukraina';
$string['nationality.ug'] = 'Uganda';
$string['nationality.us'] = 'Amerikas Savienotās Valstis';
$string['nationality.uy'] = 'Urugvaja';
$string['nationality.uz'] = 'Uzbekistāna';
$string['nationality.va'] = 'Svētais Krēsls (Vatikāns)';
$string['nationality.vc'] = '';
$string['nationality.ve'] = 'Venecuēla';
$string['nationality.vn'] = 'Vjetnama';
$string['nationality.vu'] = '';
$string['nationality.ws'] = '';
$string['nationality.ye'] = 'Jemena';
$string['nationality.za'] = 'Dienvidāfrika';
$string['nationality.zm'] = 'Zambija';
$string['nationality.zw'] = 'Zimbabve';

?>
