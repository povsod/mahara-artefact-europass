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
$string['europassCV'] = 'Europass Curriculum vitae';
$string['europassLP'] = 'Europass Passaporto delle lingue';
$string['photograph'] = 'Fotografia';
$string['photographdesc'] = 'Photo will be embeded in Europass XML';
$string['phototoolarge'] = 'File too big. Filesize must not exceed 100 kB.';
$string['exportstep2'] = '2 - Document format';
$string['selectfiletype'] = 'Select file and date format';
$string['exportdate'] = 'Date';
$string['internaldateformat'] = 'Internal Date Format';
$string['selectinternaldatedesc'] = 'Date format used in Mahara';
$string['internaldate-dmy11'] = 'gg/mm/aaaa';
$string['internaldate-dmy12'] = 'gg.mm.aaaa';
$string['internaldate-dmy13'] = 'gg-mm-aaaa';
$string['internaldate-dmy21'] = 'gg/mm/aa';
$string['internaldate-dmy22'] = 'gg.mm.aa';
$string['internaldate-dmy23'] = 'gg-mm-aa';
$string['internaldate-mdy11'] = 'mm/gg/aaaa';
$string['internaldate-mdy12'] = 'mm.gg.aaaa';
$string['internaldate-mdy13'] = 'mm-gg-aaaa';
$string['internaldate-mdy21'] = 'mm/gg/aa';
$string['internaldate-mdy22'] = 'mm.gg.aa';
$string['internaldate-mdy23'] = 'mm-gg-aa';
$string['internaldate-ymd11'] = 'aaaa/mm/gg';
$string['internaldate-ymd12'] = 'aaaa.mm.gg';
$string['internaldate-ymd13'] = 'aaaa-mm-gg';
$string['internaldate-ymd21'] = 'aa/mm/gg';
$string['internaldate-ymd22'] = 'aa.mm.gg';
$string['internaldate-ymd23'] = 'aa-mm-gg';
$string['internaldate-yonly'] = 'aaaa';
$string['internaldate-other'] = 'other';
$string['externaldateformat'] = 'External Date Format';
$string['selectexternaldatedesc'] = 'Date format used in export';
$string['externaldate-numeric-long'] = 'gg/mm/aaaa';
$string['externaldate-text-long'] = 'gg. mese aaaa';
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
$string['identification'] = 'Informazioni personali';
$string['identification-birthdate'] = 'Data di nascita';
$string['identification-birthplace'] = 'Luogo di nascita';
$string['identification-lastname'] = 'Cognome';
$string['identification-firstname'] = 'Nome';
$string['identification-addressLine'] = 'Via / Numero';
$string['identification-municipality'] = 'Città';
$string['identification-postalCode'] = 'Codice di avviamento postale';
$string['identification-country'] = 'Paese';
$string['identification-contactinfo-telephone'] = 'Telefono(i)';
$string['identification-contactinfo-mobile'] = 'Cellulare';
$string['identification-contactinfo-fax'] = 'Fax';
$string['identification-contactinfo-email'] = 'E-mail';
$string['identification-nationality'] = 'Cittadinanza';
$string['identification-gender'] = 'Sesso';

// Europass CV - STEP 2
$string['application'] = 'Occupazione desiderata / Settore professionale';

// Europass CV - STEP 3
$string['workexperience'] = 'Esperienza professionale';

// Europass CV - STEP 4
$string['education'] = 'Istruzione e formazione';

// Europass CV - STEP 5
$string['mothertongue'] = 'Madrelingua(e)';
$string['otherlanguage'] = 'Altra(e) lingua(e)';

$string['language-foreign-listening'] = 'Ascolto';
$string['language-foreign-listening-th'] = 'Ascolto';
$string['language-foreign-reading'] = 'Lettura';
$string['language-foreign-reading-th'] = 'Lettura';
$string['language-foreign-spokeninteraction'] = 'Interazione';
$string['language-foreign-spokeninteraction-th'] = 'Interazione';
$string['language-foreign-spokenproduction'] = 'Produzione orale';
$string['language-foreign-spokenproduction-th'] = 'Produzione<br>orale';
$string['language-foreign-writing'] = 'Scritto';
$string['language-foreign-writing-th'] = 'Scritto';
$string['language-foreign-CEF-level'] = 'Quadro comune europeo di riferimento per le lingue';

$string['language-foreign-level.A1'] = 'Utente base (A1)';
$string['language-foreign-level.A2'] = 'Utente base (A2)';
$string['language-foreign-level.B1'] = 'Utente autonomo (B1)';
$string['language-foreign-level.B2'] = 'Utente autonomo (B2)';
$string['language-foreign-level.C1'] = 'Utente avanzato (C1)';
$string['language-foreign-level.C2'] = 'Utente avanzato (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Patente(i)';
$string['skills-and-competences'] = 'Capacità e competenze personali';
$string['socialskill'] = 'Capacità e competenze sociali';
$string['organisationalskill'] = 'Capacità e competenze organizzative';
$string['technicalskill'] = 'Capacità e competenze tecniche';
$string['computerskill'] = 'Capacità e competenze informatiche';
$string['artisticskill'] = 'Capacità e competenze artistiche';
$string['otherskill'] = 'Altre capacità e competenze';
$string['additionalinfo'] = 'Ulteriori informazioni';
$string['annexes'] = 'Allegati';

// Europass LP - STEP 2
$string['language-certificates'] = 'Diploma(i) o certificato(i)';
$string['diploma-title'] = 'Titolo';
$string['diploma-awardingBody'] = 'Ente erogatore';
$string['diploma-date'] = 'Data';
$string['diploma-level'] = 'Livello europeo';
$string['language-experiences'] = 'Esperienza(e) linguistica(che)';
$string['experiences-period-from'] = 'Da';
$string['experiences-period-to'] = 'A';

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
$string['language.ab'] = 'Abkhaziano';
$string['language.af'] = 'Afrikaans';
$string['language.an'] = 'Aragonese';
$string['language.ar'] = 'Arabo';
$string['language.as'] = 'Assamese';
$string['language.az'] = 'Azero';
$string['language.be'] = 'Bielorusso';
$string['language.bg'] = 'Bulgaro';
$string['language.bn'] = 'Lingua bengali';
$string['language.bo'] = 'Tibetano';
$string['language.br'] = 'Bretone';
$string['language.bs'] = 'Bosniaco';
$string['language.ca'] = 'Catalano / Valenciano';
$string['language.ce'] = 'Ceceno';
$string['language.co'] = 'Corso';
$string['language.cs'] = 'Ceco';
$string['language.cy'] = 'Gallese';
$string['language.da'] = 'Danese';
$string['language.de'] = 'Tedesco';
$string['language.el'] = 'Greco';
$string['language.en'] = 'Inglese';
$string['language.es'] = 'Spagnolo / Castigliano';
$string['language.et'] = 'Estone';
$string['language.eu'] = 'basco';
$string['language.fa'] = 'Persiano';
$string['language.fi'] = 'Finnico';
$string['language.fj'] = 'Fijian';
$string['language.fo'] = 'Faroese';
$string['language.fr'] = 'Francese';
$string['language.fy'] = 'Frisone';
$string['language.ga'] = 'Gaelico irlandese';
$string['language.gd'] = 'Gaelico scozzese';
$string['language.gl'] = 'Galiziano';
$string['language.gv'] = 'Manx';
$string['language.he'] = 'Ebraico';
$string['language.hi'] = 'Hindi';
$string['language.hr'] = 'Croato';
$string['language.ht'] = 'Creolo Haitiano; Haitiano';
$string['language.hu'] = 'Ungherese';
$string['language.hy'] = 'Armeno';
$string['language.id'] = 'Indonesiano';
$string['language.is'] = 'Islandese';
$string['language.it'] = 'Italiano';
$string['language.ja'] = 'Giapponese';
$string['language.jv'] = 'Giavanese';
$string['language.ka'] = 'Georgiano';
$string['language.kg'] = 'Kongo';
$string['language.ko'] = 'Coreano';
$string['language.ku'] = 'Curdo';
$string['language.kw'] = 'Cornico';
$string['language.ky'] = 'Kirghiso';
$string['language.lb'] = 'Lussemburghese';
$string['language.li'] = 'Limburghese';
$string['language.ln'] = 'Lingala';
$string['language.lt'] = 'Lituano';
$string['language.lv'] = 'Lettone';
$string['language.mg'] = 'Malagasy';
$string['language.mk'] = 'Macedone';
$string['language.mn'] = 'Mongolo';
$string['language.mo'] = 'Moldavo';
$string['language.ms'] = 'Malay';
$string['language.mt'] = 'Maltese';
$string['language.my'] = 'Burmese';
$string['language.nb'] = 'Norvegese (Bokmål)';
$string['language.ne'] = 'Nepalese';
$string['language.nl'] = 'Olandese';
$string['language.nn'] = 'Norvegese (Nynorsk)';
$string['language.no'] = 'Norvegese';
$string['language.pl'] = 'Polacco';
$string['language.pt'] = 'Portoghese';
$string['language.rm'] = 'Romancio, Reto-romanzo';
$string['language.ro'] = 'Rumeno';
$string['language.ru'] = 'Russo';
$string['language.r0'] = 'Romany'; // doesn't really have an ISO 369-1 code...
$string['language.sc'] = 'Sardo';
$string['language.se'] = 'Sami settentrionale';
$string['language.sk'] = 'Slovacco';
$string['language.sl'] = 'Sloveno';
$string['language.so'] = 'Somalo';
$string['language.sq'] = 'Albanese';
$string['language.sr'] = 'Serbo';
$string['language.sv'] = 'Svedese';
$string['language.sw'] = 'Swahili';
$string['language.tk'] = 'Turcmeno';
$string['language.tr'] = 'Turco';
$string['language.ty'] = 'Tahitian';
$string['language.uk'] = 'Ucraino';
$string['language.ur'] = 'Urdu';
$string['language.uz'] = 'Usbeco; usbeko, uzbeco, usbecco';
$string['language.vi'] = 'Vietnamita';
$string['language.yi'] = 'Yiddish';
$string['language.zh'] = 'Cinese';
$string['language.cu'] = 'Church Slavonic';
$string['language.eo'] = 'Esperanto';
$string['language.la'] = 'Latino';
$string['language.oc'] = 'Occitano (dopo il 1500); Provenzale';
$string['language.vo'] = 'Volapük';
// ISO 639-1:2002 languages that had been left out by Europass
$string['language.aa'] = 'Afar';
$string['language.ae'] = 'Avestano';
$string['language.ak'] = 'Akan';
$string['language.am'] = 'Amarico';
$string['language.av'] = 'Avaric';
$string['language.ay'] = 'Aymara';
$string['language.ba'] = 'Bashkir';
$string['language.bh'] = 'Bihari';
$string['language.bi'] = 'Bislama';
$string['language.bm'] = 'Bambara';
$string['language.ch'] = 'Chamorro';
$string['language.cr'] = 'Cree';
$string['language.cv'] = 'Chuvash';
$string['language.dv'] = 'Divehi; Maldivian';
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
$string['language.ii'] = 'Yi';
$string['language.ik'] = 'Inupiaq';
$string['language.io'] = 'Ido';
$string['language.iu'] = 'Inuktitut';
$string['language.ki'] = 'Kikuyu';
$string['language.kj'] = 'Kuanyama';
$string['language.kk'] = 'Kazakh';
$string['language.kl'] = 'Kalaallisut';
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
$string['language.nd'] = 'Ndebele, Nord';
$string['language.ng'] = 'Ndonga';
$string['language.nr'] = 'Ndebele, Sud';
$string['language.nv'] = 'Navajo';
$string['language.ny'] = 'Chichewa';
$string['language.oj'] = 'Ojibwa';
$string['language.om'] = 'Oromo';
$string['language.or'] = 'Oriya';
$string['language.os'] = 'Osseto';
$string['language.pa'] = 'Panjabi';
$string['language.pi'] = 'Pali';
$string['language.ps'] = 'Pushto';
$string['language.qu'] = 'Quechua';
$string['language.rn'] = 'Rundi';
$string['language.rw'] = 'Kinyarwanda';
$string['language.sa'] = 'Sanscrito';
$string['language.sd'] = 'Sindhi';
$string['language.sg'] = 'Sango';
$string['language.si'] = 'Sinhalese';
$string['language.sm'] = 'Samoano';
$string['language.sn'] = 'Shona';
$string['language.ss'] = 'Swati';
$string['language.st'] = 'Sotho, Meridionale';
$string['language.su'] = 'Sundanese';
$string['language.ta'] = 'Tamil';
$string['language.te'] = 'Telugu';
$string['language.tg'] = 'Tajik';
$string['language.th'] = 'Thai';
$string['language.ti'] = 'Tigrinya';
$string['language.tl'] = 'Tagalog';
$string['language.tn'] = 'Tswana';
$string['language.to'] = 'Tonga';
$string['language.ts'] = 'Tsonga';
$string['language.tt'] = 'Tatar';
$string['language.tw'] = 'Twi';
$string['language.ug'] = 'Uighur';
$string['language.ve'] = 'Venda';
$string['language.wa'] = 'Walloon';
$string['language.wo'] = 'Wolof';
$string['language.xh'] = 'Xhosa';
$string['language.yo'] = 'Yoruba';
$string['language.za'] = 'Zhuang';
$string['language.zu'] = 'Zulu';

// ISO 3166-1-alpha-2 filtered by Europass 
// (http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm)
$string['country.ad'] = 'Andorra';
$string['country.ae'] = 'Emirati Arabi Uniti';
$string['country.af'] = 'Afghanistan';
$string['country.ag'] = 'Antigua e Barbuda';
$string['country.al'] = 'Albania';
$string['country.am'] = 'Armenia';
$string['country.ao'] = 'Angola';
$string['country.ar'] = 'Argentina';
$string['country.at'] = 'Austria';
$string['country.au'] = 'Australia';
$string['country.az'] = 'Azerbaijan';
$string['country.ba'] = 'Bosnia-Erzegovina';
$string['country.bb'] = 'Barbados';
$string['country.bd'] = 'Bangladesh';
$string['country.be'] = 'Belgio';
$string['country.bf'] = 'Burkina Faso';
$string['country.bg'] = 'Bulgaria';
$string['country.bh'] = 'Bahrain';
$string['country.bi'] = 'Burundi';
$string['country.bj'] = 'Benin';
$string['country.bn'] = 'Brunei';
$string['country.bo'] = 'Bolivia';
$string['country.br'] = 'Brasile';
$string['country.bs'] = 'Bahamas';
$string['country.bt'] = 'Bhutan';
$string['country.bw'] = 'Botswana';
$string['country.by'] = 'Bielorussia';
$string['country.bz'] = 'Belize';
$string['country.ca'] = 'Canada';
$string['country.cd'] = 'Repubblica Democratica del Congo';
$string['country.cf'] = 'Repubblica Centroafricana';
$string['country.cg'] = 'Repubblica del Congo';
$string['country.ch'] = 'Svizzera';
$string['country.ci'] = 'Costa d\'Avorio';
$string['country.cl'] = 'Cile';
$string['country.cm'] = 'Camerun';
$string['country.cn'] = 'Cina';
$string['country.co'] = 'Colombia';
$string['country.cr'] = 'Costa Rica';
$string['country.cu'] = 'Cuba';
$string['country.cv'] = 'Capo Verde';
$string['country.cy'] = 'Cipro';
$string['country.cz'] = 'Repubblica Ceca';
$string['country.de'] = 'Germania';
$string['country.dj'] = 'Gibuti';
$string['country.dk'] = 'Danimarca';
$string['country.dm'] = 'Dominica';
$string['country.do'] = 'Repubblica Dominicana';
$string['country.dz'] = 'Algeria';
$string['country.ec'] = 'Ecuador';
$string['country.ee'] = 'Estonia';
$string['country.eg'] = 'Egitto';
$string['country.er'] = 'Eritrea';
$string['country.es'] = 'Spagna';
$string['country.et'] = 'Etiopia';
$string['country.fi'] = 'Finlandia';
$string['country.fj'] = 'Fiji';
$string['country.fm'] = 'Stati Federati della Micronesia';
$string['country.fr'] = 'Francia';
$string['country.ga'] = 'Gabon';
$string['country.gb'] = 'Regno Unito';
$string['country.gd'] = 'Grenada';
$string['country.ge'] = 'Georgia';
$string['country.gh'] = 'Ghana';
$string['country.gl'] = 'Groenlandia';
$string['country.gm'] = 'Gambia';
$string['country.gn'] = 'Guinea';
$string['country.gq'] = 'Guinea Equatoriale';
$string['country.gr'] = 'Grecia';
$string['country.gt'] = 'Guatemala';
$string['country.gw'] = 'Guinea-Bissau';
$string['country.gy'] = 'Guyana';
$string['country.hn'] = 'Honduras';
$string['country.hr'] = 'Croazia';
$string['country.ht'] = 'Haiti';
$string['country.hu'] = 'Ungheria';
$string['country.id'] = 'Indonesia';
$string['country.ie'] = 'Eire';
$string['country.il'] = 'Israele';
$string['country.in'] = 'India';
$string['country.iq'] = 'Iraq';
$string['country.ir'] = 'Iran';
$string['country.is'] = 'Islanda';
$string['country.it'] = 'Italia';
$string['country.jm'] = 'Giamaica';
$string['country.jo'] = 'Giordania';
$string['country.jp'] = 'Giappone';
$string['country.ke'] = 'Kenya';
$string['country.kg'] = 'Kirghizistan';
$string['country.kh'] = 'Cambogia';
$string['country.ki'] = 'Kiribati';
$string['country.km'] = 'Comore';
$string['country.kn'] = 'Saint Kitts e Nevis';
$string['country.kp'] = 'Corea del Nord';
$string['country.kr'] = 'Corea del Sud';
$string['country.kw'] = 'Kuwait';
$string['country.kz'] = 'Kazakistan';
$string['country.la'] = 'Laos';
$string['country.lb'] = 'Libano';
$string['country.lc'] = 'Saint Lucia';
$string['country.li'] = 'Liechtenstein';
$string['country.lk'] = 'Sri Lanka';
$string['country.lr'] = 'Liberia';
$string['country.ls'] = 'Lesotho';
$string['country.lt'] = 'Lituania';
$string['country.lu'] = 'Lussemburgo';
$string['country.lv'] = 'Lettonia';
$string['country.ly'] = 'Libia';
$string['country.ma'] = 'Marocco';
$string['country.mc'] = 'Monaco';
$string['country.md'] = 'Moldavia';
$string['country.me'] = 'Montenegro';
$string['country.mg'] = 'Madagascar';
$string['country.mh'] = 'Isole Marshall';
$string['country.mk'] = 'ex Repubblica iugoslava di Macedonia';
$string['country.ml'] = 'Mali';
$string['country.mm'] = 'Myanmar';
$string['country.mn'] = 'Mongolia';
$string['country.mr'] = 'Mauritania';
$string['country.mt'] = 'Malta';
$string['country.mu'] = 'Mauritius';
$string['country.mv'] = 'Maldive';
$string['country.mw'] = 'Malawi';
$string['country.mx'] = 'Messico';
$string['country.my'] = 'Malesia';
$string['country.mz'] = 'Mozambico';
$string['country.na'] = 'Namibia';
$string['country.ne'] = 'Niger';
$string['country.ng'] = 'Nigeria';
$string['country.ni'] = 'Nicaragua';
$string['country.nl'] = 'Paesi Bassi';
$string['country.no'] = 'Norvegia';
$string['country.np'] = 'Nepal';
$string['country.nr'] = 'Nauru';
$string['country.nu'] = 'Niue';
$string['country.nz'] = 'Nuova Zelanda';
$string['country.om'] = 'Oman';
$string['country.pa'] = 'Panamá';
$string['country.pe'] = 'Perù';
$string['country.pg'] = 'Papua Nuova Guinea';
$string['country.ph'] = 'Filippine';
$string['country.pk'] = 'Pakistan';
$string['country.pl'] = 'Polonia';
$string['country.pr'] = 'Porto Rico';
$string['country.ps'] = 'Territori palestinesi autonomi';
$string['country.pt'] = 'Portogallo';
$string['country.pw'] = 'Palau';
$string['country.py'] = 'Paraguay';
$string['country.qa'] = 'Qatar';
$string['country.ro'] = 'Romania';
$string['country.rs'] = 'Serbia';
$string['country.ru'] = 'Federazione Russa';
$string['country.rw'] = 'Ruanda';
$string['country.sa'] = 'Arabia Saudita';
$string['country.sb'] = 'Isole Solomon';
$string['country.sc'] = 'Seicelle';
$string['country.sd'] = 'Sudan';
$string['country.se'] = 'Svezia';
$string['country.sg'] = 'Singapore';
$string['country.si'] = 'Slovenia';
$string['country.sk'] = 'Slovacchia';
$string['country.sl'] = 'Sierra Leone';
$string['country.sm'] = 'San Marino';
$string['country.sn'] = 'Senegal';
$string['country.so'] = 'Somalia';
$string['country.sr'] = 'Suriname';
$string['country.st'] = 'São Tomé e Príncipe';
$string['country.sv'] = 'El Salvador';
$string['country.sy'] = 'Siria';
$string['country.sz'] = 'Swaziland';
$string['country.td'] = 'Ciad';
$string['country.tg'] = 'Togo';
$string['country.th'] = 'Tailandia';
$string['country.tj'] = 'Tagikistan';
$string['country.tl'] = 'Timor Est';
$string['country.tm'] = 'Turkmenistan';
$string['country.tn'] = 'Tunisia';
$string['country.to'] = 'Tonga';
$string['country.tr'] = 'Turchia';
$string['country.tt'] = 'Trinidad e Tobago';
$string['country.tv'] = 'Tuvalu';
$string['country.tz'] = 'Tanzania';
$string['country.ua'] = 'Ucraina';
$string['country.ug'] = 'Uganda';
$string['country.us'] = 'Stati Uniti d\'America';
$string['country.uy'] = 'Uruguay';
$string['country.uz'] = 'Uzbekistan';
$string['country.va'] = 'Città del Vaticano';
$string['country.vc'] = 'Saint Vincent e Grenadine';
$string['country.ve'] = 'Venezuela';
$string['country.vn'] = 'Vietnam';
$string['country.vu'] = 'Vanuatu';
$string['country.ws'] = 'Samoa';
$string['country.ye'] = 'Yemen';
$string['country.za'] = 'Sud Africa';
$string['country.zm'] = 'Zambia';
$string['country.zw'] = 'Zimbabwe';

// List of nationalities based on the ISO 3166-1-alpha-2 filtered by Europass country list
// (http://europass.cedefop.europa.eu/TechnicalResources/XML/xsd/included_schemas/EUROPASS_Nationalities_V1.0.xsd)
$string['nationality.ad'] = 'andorrana';
$string['nationality.ae'] = 'araba';
$string['nationality.af'] = 'afghana (afgana)';
$string['nationality.ag'] = 'di Antigua e Barbuda';
$string['nationality.al'] = 'albanese';
$string['nationality.am'] = 'armena';
$string['nationality.ao'] = 'angolana';
$string['nationality.ar'] = 'argentina';
$string['nationality.at'] = 'austriaca';
$string['nationality.au'] = 'australiana';
$string['nationality.az'] = '(azerbaigiana) azera';
$string['nationality.ba'] = 'bosniaca (erzegovina)';
$string['nationality.bb'] = 'barbadiana';
$string['nationality.bd'] = 'bangladese';
$string['nationality.be'] = 'belga';
$string['nationality.bf'] = 'burkinabé';
$string['nationality.bg'] = 'bulgara';
$string['nationality.bh'] = 'bahreinita';
$string['nationality.bi'] = 'burundese';
$string['nationality.bj'] = 'beniniana';
$string['nationality.bn'] = 'del Brunei';
$string['nationality.bo'] = 'boliviana';
$string['nationality.br'] = 'brasiliana';
$string['nationality.bs'] = 'bahamiana';
$string['nationality.bt'] = 'bhutanese';
$string['nationality.bw'] = 'botswana';
$string['nationality.by'] = 'bielorussa';
$string['nationality.bz'] = 'belizeana';
$string['nationality.ca'] = 'canadese';
$string['nationality.cd'] = 'congolese';
$string['nationality.cf'] = 'centrafricana';
$string['nationality.cg'] = 'congolese';
$string['nationality.ch'] = 'svizzera (elvetica)';
$string['nationality.ci'] = 'ivoriana';
$string['nationality.cl'] = 'cilena';
$string['nationality.cm'] = 'camerunese';
$string['nationality.cn'] = 'cinese';
$string['nationality.co'] = 'colombiana';
$string['nationality.cr'] = 'costaricana';
$string['nationality.cu'] = 'cubana';
$string['nationality.cv'] = 'capoverdiana';
$string['nationality.cy'] = 'cipriota';
$string['nationality.cz'] = 'ceca';
$string['nationality.de'] = 'tedesca';
$string['nationality.dj'] = 'gibutiana';
$string['nationality.dk'] = 'danese';
$string['nationality.dm'] = 'di Dominica';
$string['nationality.do'] = 'dominicana';
$string['nationality.dz'] = 'algerina';
$string['nationality.ec'] = 'ecuadoriana';
$string['nationality.ee'] = 'estone';
$string['nationality.eg'] = 'egiziana';
$string['nationality.er'] = 'eritrea';
$string['nationality.es'] = 'spagnola';
$string['nationality.et'] = 'etiope (etiopico)';
$string['nationality.fi'] = 'finlandese (finnica)';
$string['nationality.fj'] = 'figiana';
$string['nationality.fm'] = 'micronesiana';
$string['nationality.fr'] = 'francese';
$string['nationality.ga'] = 'gabonese';
$string['nationality.gb'] = 'britannico';
$string['nationality.gd'] = 'grenadina';
$string['nationality.ge'] = 'georgiana';
$string['nationality.gh'] = 'ghaniana (ghaneana)';
$string['nationality.gl'] = '';
$string['nationality.gm'] = 'gambiana';
$string['nationality.gn'] = 'guineana';
$string['nationality.gq'] = 'equatoriale (della Guinea)';
$string['nationality.gr'] = 'greca';
$string['nationality.gt'] = 'guatemalteca';
$string['nationality.gw'] = 'della Guinea-Bissau';
$string['nationality.gy'] = 'guianese';
$string['nationality.hn'] = 'honduregna';
$string['nationality.hr'] = 'croata';
$string['nationality.ht'] = 'haitiana';
$string['nationality.hu'] = 'magiara (ungherese)';
$string['nationality.id'] = 'indonesiana';
$string['nationality.ie'] = 'irlandese';
$string['nationality.il'] = 'israeliana';
$string['nationality.in'] = 'indiana';
$string['nationality.iq'] = 'irachena';
$string['nationality.ir'] = 'iraniana';
$string['nationality.is'] = 'islandese';
$string['nationality.it'] = 'italiana';
$string['nationality.jm'] = 'giamaicana';
$string['nationality.jo'] = 'giordana';
$string['nationality.jp'] = 'giapponese';
$string['nationality.ke'] = '(kenyota) keniota';
$string['nationality.kg'] = 'kirghisa';
$string['nationality.kh'] = 'cambogiana';
$string['nationality.ki'] = 'di Kiribati';
$string['nationality.km'] = 'comoriana';
$string['nationality.kn'] = 'di Saint Christopher e Nevis';
$string['nationality.kp'] = 'nordcoreana';
$string['nationality.kr'] = 'sudcoreana';
$string['nationality.kw'] = 'kuwaitiana';
$string['nationality.kz'] = 'kazaka';
$string['nationality.la'] = 'laotiana';
$string['nationality.lb'] = 'libanese';
$string['nationality.lc'] = 'di Saint Lucia';
$string['nationality.li'] = 'del Liechtenstein';
$string['nationality.lk'] = 'di Sri Lanka';
$string['nationality.lr'] = 'liberiana';
$string['nationality.ls'] = 'del Lesotho';
$string['nationality.lt'] = 'lituana';
$string['nationality.lu'] = 'lussemburghese';
$string['nationality.lv'] = 'lettone';
$string['nationality.ly'] = 'libica';
$string['nationality.ma'] = 'marocchina';
$string['nationality.mc'] = 'monegasca';
$string['nationality.md'] = 'moldova';
$string['nationality.me'] = 'montenegrina';
$string['nationality.mg'] = 'malgascia';
$string['nationality.mh'] = 'marshallese';
$string['nationality.mk'] = 'dell’ex Repubblica iugoslava di Macedonia';
$string['nationality.ml'] = 'maliana';
$string['nationality.mm'] = 'di Myanmar';
$string['nationality.mn'] = 'mongola';
$string['nationality.mr'] = 'mauritana (maura)';
$string['nationality.mt'] = 'maltese';
$string['nationality.mu'] = 'mauriziana';
$string['nationality.mv'] = 'maldiviana';
$string['nationality.mw'] = 'malawiana';
$string['nationality.mx'] = 'messicana';
$string['nationality.my'] = 'malese';
$string['nationality.mz'] = 'Mozambico';
$string['nationality.na'] = 'namibiana';
$string['nationality.ne'] = 'nigerina';
$string['nationality.ng'] = 'nigeriana';
$string['nationality.ni'] = 'nicaraguense';
$string['nationality.nl'] = 'olandese';
$string['nationality.no'] = 'norvegese';
$string['nationality.np'] = 'nepalese';
$string['nationality.nr'] = 'nauruana';
$string['nationality.nu'] = 'niueana';
$string['nationality.nz'] = 'neozelandese';
$string['nationality.om'] = 'omana';
$string['nationality.pa'] = 'panamense';
$string['nationality.pe'] = 'peruviana';
$string['nationality.pg'] = 'papuana';
$string['nationality.ph'] = 'filippina';
$string['nationality.pk'] = 'pakistana';
$string['nationality.pl'] = 'polacca';
$string['nationality.pr'] = 'Porto Rico';
$string['nationality.ps'] = '';
$string['nationality.pt'] = 'portoghese';
$string['nationality.pw'] = 'palauana';
$string['nationality.py'] = 'paraguaiana (paraguayana)';
$string['nationality.qa'] = 'qatariana';
$string['nationality.ro'] = 'rumena (romena)';
$string['nationality.rs'] = 'serba';
$string['nationality.ru'] = 'russa';
$string['nationality.rw'] = 'ruandese';
$string['nationality.sa'] = 'saudita (saudiana)';
$string['nationality.sb'] = 'delle Isole Salomone';
$string['nationality.sc'] = 'seicellese';
$string['nationality.sd'] = 'sudanese';
$string['nationality.se'] = 'svedese';
$string['nationality.sg'] = 'singaporiana';
$string['nationality.si'] = 'slovena';
$string['nationality.sk'] = 'slovacca';
$string['nationality.sl'] = 'sierraleonese';
$string['nationality.sm'] = 'sammarinese';
$string['nationality.sn'] = 'senegalese';
$string['nationality.so'] = 'somala';
$string['nationality.sr'] = 'surinamese';
$string['nationality.st'] = 'di São Tomé e Príncipe';
$string['nationality.sv'] = 'salvadoregna';
$string['nationality.sy'] = 'siriana';
$string['nationality.sz'] = 'swazi';
$string['nationality.td'] = 'ciadiana';
$string['nationality.tg'] = 'togolese';
$string['nationality.th'] = 'thailandese';
$string['nationality.tj'] = 'tagika (tagicca, tagica)';
$string['nationality.tl'] = 'di Timor orientale';
$string['nationality.tm'] = 'turkmena';
$string['nationality.tn'] = 'tunisina';
$string['nationality.to'] = 'tongana';
$string['nationality.tr'] = 'turca';
$string['nationality.tt'] = 'di Trinidad e Tobago';
$string['nationality.tv'] = 'tuvaluana';
$string['nationality.tz'] = 'tanzaniana';
$string['nationality.ua'] = 'ucraina';
$string['nationality.ug'] = 'ugandese';
$string['nationality.us'] = 'statunitense';
$string['nationality.uy'] = 'uruguaiana (uruguayana)';
$string['nationality.uz'] = 'uzbeka';
$string['nationality.va'] = 'della Santa Sede (dello Stato della Città del Vaticano)';
$string['nationality.vc'] = 'di Saint Vincent e Grenadine';
$string['nationality.ve'] = 'venezuelana (venezolana)';
$string['nationality.vn'] = 'vietnamita';
$string['nationality.vu'] = 'di Vanuatu';
$string['nationality.ws'] = 'samoana';
$string['nationality.ye'] = 'yemenita';
$string['nationality.za'] = 'sudafricana';
$string['nationality.zm'] = 'zambiana';
$string['nationality.zw'] = 'zimbabwana';

?>
