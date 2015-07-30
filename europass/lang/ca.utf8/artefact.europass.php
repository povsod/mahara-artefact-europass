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
 * @translator Joan Queralt
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
$string['europassartefactsaved'] = 'S\'ha desat correctament l\'Europass currículum vitae';
$string['europassexportgenerated'] = 'Espereu mentre es genera l\'exportació...';
$string['europassexportnoconncetion'] = 'Hi ha hagut en error al connectar amb el servidor WSDL. Proveu-ho més tard.';
$string['europassexportservererror'] = 'Hi ha hagut en error al servidor WSDL. Proveu-ho més tard.';
$string['europassextensionmissing'] = 'No podeu utilitzar el connector Europass perquè la vostra instal·lació PHP no té activada l\'extensió requerida:';
$string['newerversionforcompatibility'] = 'Actualitzeu a la versió de Mahara 1.3 o superior per millorar el rendiment i la compatibilitat.';

$string['languagesaved'] = 'S\'ha desat correctament la llengua';
$string['languagesavefailed'] = 'No s\'ha pogut desar la llengua';
$string['languagedeleteconfirm'] = 'Esteu segur que voleu esborrar aquesta llengua?';
$string['languagedeleted'] = 'S\'ha eliminat correctament la llengua';

$string['moveup'] = 'Puja';
$string['movedown'] = 'Baixa';

$string['languagediploma'] = 'Diploma d\'idioma';
$string['languageexperience'] = 'Experiència lingüística';
$string['languagediplomadeleteconfirm'] = 'Esteu segur que voleu esborrar aquest Diploma d\'idioma?';
$string['languageexperiencedeleteconfirm'] = 'Esteu segur que voleu esborrar aquesta Experiència lingüística?';
$string['languagediplomadeleted'] = 'S\'ha esborrat correctament el Diploma d\'idioma';
$string['languageexperiencedeleted'] = 'S\'ha esborrat correctament l\'Experiència lingüística';
$string['languagediplomasaved'] = 'S\'ha desat correctament el Diploma d\'idioma';
$string['languagediplomasavefailed'] = 'No s\'ha pogut desar el Diploma d\'idioma';
$string['languageexperiencesaved'] = 'S\'ha desat correctament l\'Experiència lingüística';
$string['languageexperiencesavefailed'] = 'No s\'ha pogut desar l\'Experiència lingüística';

// Export data from Mahara to Europass form...
$string['exporteuropass'] = 'Exporta Europass';
$string['exportstep1'] = '1 - Llengua del document i tipus';
$string['selectlocale&type'] = 'Seleccioneu la llengua del document i el tipus';
$string['selectlocale'] = 'Llengua';
$string['selectlocaledesc'] = 'Llengua del document Europass';
$string['selectdocumenttype'] = 'Document';
$string['europassCV'] = 'Europass currículum vitae';
$string['europassLP'] = 'Portafolis de llengües Europass';
$string['photograph'] = 'Foto';
$string['photographdesc'] = 'La foto s\'encastarà a l\'Europass XML';
$string['phototoolarge'] = 'Fitxer massa gran. La mida no hauria de superar els 100 kB.';
$string['exportstep2'] = '2 - Format del document';
$string['selectfiletype'] = 'Seleccioneu els formats de fitxer i de data';
$string['exportdate'] = 'Data';
$string['internaldateformat'] = 'Format de data intern';
$string['selectinternaldatedesc'] = 'Format de data usat a Mahara';
$string['internaldate-dmy11'] = 'dd/mm/aaaa';
$string['internaldate-dmy12'] = 'dd.mm.aaaa';
$string['internaldate-dmy13'] = 'dd-mm-aaaa';
$string['internaldate-dmy21'] = 'dd/mm/aa';
$string['internaldate-dmy22'] = 'dd.mm.aa';
$string['internaldate-dmy23'] = 'dd-mm-aa';
$string['internaldate-mdy11'] = 'mm/dd/aaaa';
$string['internaldate-mdy12'] = 'mm.dd.aaaa';
$string['internaldate-mdy13'] = 'mm-dd-aaaa';
$string['internaldate-mdy21'] = 'mm/dd/aa';
$string['internaldate-mdy22'] = 'mm.dd.aa';
$string['internaldate-mdy23'] = 'mm-dd-aa';
$string['internaldate-ymd11'] = 'aaaa/mm/dd';
$string['internaldate-ymd12'] = 'aaaa.mm.dd';
$string['internaldate-ymd13'] = 'aaaa-mm-dd';
$string['internaldate-ymd21'] = 'aa/mm/dd';
$string['internaldate-ymd22'] = 'aa.mm.dd';
$string['internaldate-ymd23'] = 'aa-mm-dd';
$string['internaldate-yonly'] = 'aaaa';
$string['internaldate-other'] = 'altre';
$string['externaldateformat'] = 'Format de data extern';
$string['selectexternaldatedesc'] = 'Format de data usat a l\'exportació';
$string['externaldate-numeric-long'] = 'dd/mm/aaaa';
$string['externaldate-text-long'] = 'dd. mes aaaa';
$string['exportfile'] = 'Fitxer';
$string['pdf'] = 'Adobe® PDF + XML';
$string['pdfhrxml'] = 'Adobe® PDF + HR-XML';
$string['doc'] = 'Microsoft® Word';
$string['odt'] = 'OpenDocument';
$string['html'] = 'HTML';
$string['json'] = 'Europass JSON';
$string['xml'] = 'Europass XML';
$string['hrxml'] = 'HR-XML';
$string['exportstep3'] = '3 - Exporta';
$string['generate'] = 'Genera l\'exportació';
$string['generateexport'] = 'Exporta';

// Import data from Europass XML to Mahara...
$string['importeuropass'] = 'Importa Europass';
$string['importstep1'] = '1 - Importa fitxer i opcions';
$string['selectfile&options'] = 'Carregueu el fitxer XML Europass i seleccioneu les opcions d\'importació';
$string['importstep2'] = '2 - Importa';
$string['execute'] = 'Executa la importació';
$string['executeimport'] = 'Importa';
$string['importfile'] = 'Fitxer XML Europass';
$string['importfiledesc'] = 'Seleccioneu el fitxer XML Europass vàlid per importar a Mahara';
$string['notvalidxmlfile'] = 'El fitxer que heu carregat no és un fitxer XML vàlid.';
$string['importoptions'] = 'Què voleu importar?';
$string['importoptionsdesc'] = 'Els camps tancats del perfil no s\'actualitzaran ni canviaran';
$string['nocheckedoptions'] = 'Com a mínim heu de marcar una opció d\'importació.';
$string['fieldnotimported'] = 'No s\'ha importat el camp "%s" .';
$string['lockedfieldnotimported'] = 'No s\'ha importat el camp tancat "%s".';
$string['languagecodemissing'] = 'No s\'ha importat el camp "%s". S\'ha perdut el codi d\'idioma.';
$string['importdate'] = 'Importeu dates en format';
$string['europassimportexecuted'] = 'S\'han importat satisfactòriament a Mahara les dades d\'Europass XML.';

// Europass GUI form tabs
$string['application-tab'] = 'Sol·licitud';
$string['workexperience-tab'] = 'Experiència';
$string['education-tab'] = 'Formació';
$string['languages-tab'] = 'Idiomes';
$string['skills-tab'] = 'Habilitats';

// Europass CV - STEP 1
$string['identification'] = 'Informació personal';
$string['identification-birthdate'] = 'Data de naixement';
$string['identification-birthplace'] = 'Lloc de naixement';
$string['identification-lastname'] = 'Cognom(s)';
$string['identification-firstname'] = 'Nom(s)';
$string['identification-addressLine'] = 'Adreça';
$string['identification-municipality'] = 'Població';
$string['identification-postalCode'] = 'Codi postal';
$string['identification-country'] = 'País';
$string['identification-contactinfo-telephone'] = 'Telèfon(s)';
$string['identification-contactinfo-mobile'] = 'Mòbil';
$string['identification-contactinfo-fax'] = 'Fax';
$string['identification-contactinfo-email'] = 'Correu(s) electrònic(s)';
$string['identification-nationality'] = 'Nacionalitat';
$string['identification-gender'] = 'Gènere';

// Europass CV - STEP 2
$string['application'] = 'Ocupació desitjada';

// Europass CV - STEP 3
$string['workexperience'] = 'Experiència laboral';

// Europass CV - STEP 4
$string['education'] = 'Historial acadèmic';

// Europass CV - STEP 5
$string['mothertongue'] = 'Llengua materna';
$string['otherlanguage'] = 'Altres llengües';

$string['language-foreign-listening'] = 'Comprensió oral';
$string['language-foreign-listening-th'] = 'Comprensió oral';
$string['language-foreign-reading'] = 'Comprensió escrita';
$string['language-foreign-reading-th'] = 'Comprensió escrita';
$string['language-foreign-spokeninteraction'] = 'Interacció oral';
$string['language-foreign-spokeninteraction-th'] = 'Interacció<br>oral';
$string['language-foreign-spokenproduction'] = 'Expressió oral';
$string['language-foreign-spokenproduction-th'] = 'Expressió<br>oral';
$string['language-foreign-writing'] = 'Expressió escrita';
$string['language-foreign-writing-th'] = 'Expressió escrita';
$string['language-foreign-CEF-level'] = 'Nivell de referència Common European Framework (CEF)';

$string['language-foreign-level.A1'] = 'Usuari bàsic (A1)';
$string['language-foreign-level.A2'] = 'Usuari bàsic (A2)';
$string['language-foreign-level.B1'] = 'Usuari independent (B1)';
$string['language-foreign-level.B2'] = 'Usuari independent (B2)';
$string['language-foreign-level.C1'] = 'Usuari competent (C1)';
$string['language-foreign-level.C2'] = 'Usuari competent (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Carnet de conduir';
$string['skills-and-competences'] = 'Habilitats i competències personals';
$string['socialskill'] = 'Habilitats i competències socials';
$string['organisationalskill'] = 'Habilitats i competències organitzatives';
$string['technicalskill'] = 'Habilitats i competències tècniques';
$string['computerskill'] = 'Habilitats i competències en computadors';
$string['artisticskill'] = 'Habilitats i competències artístiques';
$string['otherskill'] = 'Altres habilitats i competències';
$string['additionalinfo'] = 'Informació addicional';
$string['annexes'] = 'Annexos';

// Europass LP - STEP 2
$string['language-certificates'] = 'Diplomes o certificats';
$string['diploma-title'] = 'Títol';
$string['diploma-awardingBody'] = 'Organització acreditadora';
$string['diploma-date'] = 'Data';
$string['diploma-level'] = 'Nivell europeu';
$string['language-experiences'] = 'Experiència(es) lingüística(ques)';
$string['experiences-period-from'] = 'De';
$string['experiences-period-to'] = 'Fins a';

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
$string['language.ab'] = 'Abkhazian';
$string['language.af'] = 'Afrikaans';
$string['language.an'] = 'Aragonese';
$string['language.ar'] = 'Arabic';
$string['language.as'] = 'Assamese';
$string['language.az'] = 'Azerbaijani';
$string['language.be'] = 'Belarusian';
$string['language.bg'] = 'Bulgarian';
$string['language.bn'] = 'Bengali';
$string['language.bo'] = 'Tibetan';
$string['language.br'] = 'Breton';
$string['language.bs'] = 'Bosnian';
$string['language.ca'] = 'Català / Valencià';
$string['language.ce'] = 'Chechen';
$string['language.co'] = 'Corsican';
$string['language.cs'] = 'Czech';
$string['language.cy'] = 'Welsh';
$string['language.da'] = 'Danish';
$string['language.de'] = 'German';
$string['language.el'] = 'Greek';
$string['language.en'] = 'Anglès';
$string['language.es'] = 'Espanyol/ Castellà';
$string['language.et'] = 'Estonian';
$string['language.eu'] = 'Basqc';
$string['language.fa'] = 'Persian';
$string['language.fi'] = 'Finnish';
$string['language.fj'] = 'Fijian';
$string['language.fo'] = 'Faroese';
$string['language.fr'] = 'Francès';
$string['language.fy'] = 'Western Frisian';
$string['language.ga'] = 'Irish';
$string['language.gd'] = 'Gaelic / Scottish Gaelic';
$string['language.gl'] = 'Galician';
$string['language.gv'] = 'Manx';
$string['language.he'] = 'Hebrew';
$string['language.hi'] = 'Hindi';
$string['language.hr'] = 'Croatian';
$string['language.ht'] = 'Haitian; Haitian Creole';
$string['language.hu'] = 'Hungarian';
$string['language.hy'] = 'Armenian';
$string['language.id'] = 'Indonesian';
$string['language.is'] = 'Icelandic';
$string['language.it'] = 'Italian';
$string['language.ja'] = 'Japanese';
$string['language.jv'] = 'Javanese';
$string['language.ka'] = 'Georgian';
$string['language.kg'] = 'Kongo';
$string['language.ko'] = 'Korean';
$string['language.ku'] = 'Kurdish';
$string['language.kw'] = 'Cornish';
$string['language.ky'] = 'Kirghiz';
$string['language.lb'] = 'Luxembourgish; Letzeburgesch';
$string['language.li'] = 'Limburgan; Limburger; Limburgish';
$string['language.ln'] = 'Lingala';
$string['language.lt'] = 'Lithuanian';
$string['language.lv'] = 'Latvian';
$string['language.mg'] = 'Malagasy';
$string['language.mk'] = 'Macedonian';
$string['language.mn'] = 'Mongolian';
$string['language.mo'] = 'Moldavian';
$string['language.ms'] = 'Malay';
$string['language.mt'] = 'Maltese';
$string['language.my'] = 'Burmese';
$string['language.nb'] = 'Norwegian (Bokmål)';
$string['language.ne'] = 'Nepali';
$string['language.nl'] = 'Dutch';
$string['language.nn'] = 'Norwegian (Nynorsk)';
$string['language.no'] = 'Norwegian';
$string['language.pl'] = 'Polish';
$string['language.pt'] = 'Portuguese';
$string['language.rm'] = 'Raeto-Romance';
$string['language.ro'] = 'Romanian';
$string['language.ru'] = 'Russian';
$string['language.r0'] = 'Romany'; // doesn't really have an ISO 369-1 code...
$string['language.sc'] = 'Sardinian';
$string['language.se'] = 'Northern Sami';
$string['language.sk'] = 'Slovak';
$string['language.sl'] = 'Slovenian';
$string['language.so'] = 'Somali';
$string['language.sq'] = 'Albanian';
$string['language.sr'] = 'Serbian';
$string['language.sv'] = 'Swedish';
$string['language.sw'] = 'Swahili';
$string['language.tk'] = 'Turkmen';
$string['language.tr'] = 'Turkish';
$string['language.ty'] = 'Tahitian';
$string['language.uk'] = 'Ukrainian';
$string['language.ur'] = 'Urdu';
$string['language.uz'] = 'Uzbek';
$string['language.vi'] = 'Vietnamese';
$string['language.yi'] = 'Yiddish';
$string['language.zh'] = 'Chinese';
$string['language.cu'] = 'Church Slavic';
$string['language.eo'] = 'Esperanto';
$string['language.la'] = 'Latin';
$string['language.oc'] = 'Occitan (post 1500); Provençal';
$string['language.vo'] = 'Volapük';
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
$string['country.ae'] = 'United Arab Emirates';
$string['country.af'] = 'Afghanistan';
$string['country.ag'] = 'Antigua and Barbuda';
$string['country.al'] = 'Albania';
$string['country.am'] = 'Armenia';
$string['country.ao'] = 'Angola';
$string['country.ar'] = 'Argentina';
$string['country.at'] = 'Austria';
$string['country.au'] = 'Australia';
$string['country.az'] = 'Azerbaijan';
$string['country.ba'] = 'Bosnia and Herzegovina';
$string['country.bb'] = 'Barbados';
$string['country.bd'] = 'Bangladesh';
$string['country.be'] = 'Belgium';
$string['country.bf'] = 'Burkina Faso';
$string['country.bg'] = 'Bulgaria';
$string['country.bh'] = 'Bahrain';
$string['country.bi'] = 'Burundi';
$string['country.bj'] = 'Benin';
$string['country.bn'] = 'Brunei';
$string['country.bo'] = 'Bolivia';
$string['country.br'] = 'Brazil';
$string['country.bs'] = 'Bahamas';
$string['country.bt'] = 'Bhutan';
$string['country.bw'] = 'Botswana';
$string['country.by'] = 'Belarus';
$string['country.bz'] = 'Belize';
$string['country.ca'] = 'Canada';
$string['country.cd'] = 'Democratic Republic of the Congo';
$string['country.cf'] = 'Central African Republic';
$string['country.cg'] = 'Republic of the Congo';
$string['country.ch'] = 'Switzerland';
$string['country.ci'] = 'Côte d\'Ivoire';
$string['country.cl'] = 'Chile';
$string['country.cm'] = 'Cameroon';
$string['country.cn'] = 'China';
$string['country.co'] = 'Colombia';
$string['country.cr'] = 'Costa Rica';
$string['country.cu'] = 'Cuba';
$string['country.cv'] = 'Cape Verde';
$string['country.cy'] = 'Cyprus';
$string['country.cz'] = 'Czech Republic';
$string['country.de'] = 'Germany';
$string['country.dj'] = 'Djibouti';
$string['country.dk'] = 'Denmark';
$string['country.dm'] = 'Dominica';
$string['country.do'] = 'Dominican Republic';
$string['country.dz'] = 'Algeria';
$string['country.ec'] = 'Ecuador';
$string['country.ee'] = 'Estonia';
$string['country.eg'] = 'Egypt';
$string['country.er'] = 'Eritrea';
$string['country.es'] = 'Spain';
$string['country.et'] = 'Ethiopia';
$string['country.fi'] = 'Finland';
$string['country.fj'] = 'Fiji';
$string['country.fm'] = 'Micronesia, Federated States of';
$string['country.fr'] = 'France';
$string['country.ga'] = 'Gabon';
$string['country.gb'] = 'United Kingdom';
$string['country.gd'] = 'Grenada';
$string['country.ge'] = 'Georgia';
$string['country.gh'] = 'Ghana';
$string['country.gl'] = 'Greenland';
$string['country.gm'] = 'Gambia';
$string['country.gn'] = 'Guinea';
$string['country.gq'] = 'Equatorial Guinea';
$string['country.gr'] = 'Greece';
$string['country.gt'] = 'Guatemala';
$string['country.gw'] = 'Guinea-Bissau';
$string['country.gy'] = 'Guyana';
$string['country.hn'] = 'Honduras';
$string['country.hr'] = 'Croatia';
$string['country.ht'] = 'Haiti';
$string['country.hu'] = 'Hungary';
$string['country.id'] = 'Indonesia';
$string['country.ie'] = 'Ireland';
$string['country.il'] = 'Israel';
$string['country.in'] = 'India';
$string['country.iq'] = 'Iraq';
$string['country.ir'] = 'Iran';
$string['country.is'] = 'Iceland';
$string['country.it'] = 'Italy';
$string['country.jm'] = 'Jamaica';
$string['country.jo'] = 'Jordan';
$string['country.jp'] = 'Japan';
$string['country.ke'] = 'Kenya';
$string['country.kg'] = 'Kyrgyzstan';
$string['country.kh'] = 'Cambodia';
$string['country.ki'] = 'Kiribati';
$string['country.km'] = 'Comoros';
$string['country.kn'] = 'Saint Kitts and Nevis';
$string['country.kp'] = 'North Korea';
$string['country.kr'] = 'South Korea';
$string['country.kw'] = 'Kuwait';
$string['country.kz'] = 'Kazakstan';
$string['country.la'] = 'Lao People´s Democratic Republic';
$string['country.lb'] = 'Lebanon';
$string['country.lc'] = 'Saint Lucia';
$string['country.li'] = 'Liechtenstein';
$string['country.lk'] = 'Sri Lanka';
$string['country.lr'] = 'Liberia';
$string['country.ls'] = 'Lesotho';
$string['country.lt'] = 'Lithuania';
$string['country.lu'] = 'Luxembourg';
$string['country.lv'] = 'Latvia';
$string['country.ly'] = 'Libyan Arab Jamahiriya';
$string['country.ma'] = 'Morocco';
$string['country.mc'] = 'Monaco';
$string['country.md'] = 'Moldova, Republic of';
$string['country.me'] = 'Montenegro';
$string['country.mg'] = 'Madagascar';
$string['country.mh'] = 'Marshall Islands';
$string['country.mk'] = 'Macedonia, the former Yugoslav Republic of';
$string['country.ml'] = 'Mali';
$string['country.mm'] = 'Myanmar';
$string['country.mn'] = 'Mongolia';
$string['country.mr'] = 'Mauritania';
$string['country.mt'] = 'Malta';
$string['country.mu'] = 'Mauritius';
$string['country.mv'] = 'Maldives';
$string['country.mw'] = 'Malawi';
$string['country.mx'] = 'Mexico';
$string['country.my'] = 'Malaysia';
$string['country.mz'] = 'Mozambique';
$string['country.na'] = 'Namibia';
$string['country.ne'] = 'Niger';
$string['country.ng'] = 'Nigeria';
$string['country.ni'] = 'Nicaragua';
$string['country.nl'] = 'Netherlands';
$string['country.no'] = 'Norway';
$string['country.np'] = 'Nepal';
$string['country.nr'] = 'Nauru';
$string['country.nu'] = 'Niue';
$string['country.nz'] = 'New Zealand';
$string['country.om'] = 'Oman';
$string['country.pa'] = 'Panama';
$string['country.pe'] = 'Peru';
$string['country.pg'] = 'Papua New Guinea';
$string['country.ph'] = 'Philippines';
$string['country.pk'] = 'Pakistan';
$string['country.pl'] = 'Poland';
$string['country.pr'] = 'Puerto Rico';
$string['country.ps'] = 'Autonomous Palestinian Territories';
$string['country.pt'] = 'Portugal';
$string['country.pw'] = 'Palau';
$string['country.py'] = 'Paraguay';
$string['country.qa'] = 'Qatar';
$string['country.ro'] = 'Romania';
$string['country.rs'] = 'Serbia';
$string['country.ru'] = 'Russian Federation';
$string['country.rw'] = 'Rwanda';
$string['country.sa'] = 'Saudi Arabia';
$string['country.sb'] = 'Solomon Islands';
$string['country.sc'] = 'Seychelles';
$string['country.sd'] = 'Sudan';
$string['country.se'] = 'Sweden';
$string['country.sg'] = 'Singapore';
$string['country.si'] = 'Slovenia';
$string['country.sk'] = 'Slovakia';
$string['country.sl'] = 'Sierra Leone';
$string['country.sm'] = 'San Marino';
$string['country.sn'] = 'Senegal';
$string['country.so'] = 'Somalia';
$string['country.sr'] = 'Suriname';
$string['country.st'] = 'Sao Tome and Principe';
$string['country.sv'] = 'El Salvador';
$string['country.sy'] = 'Syrian Arab Republic';
$string['country.sz'] = 'Swaziland';
$string['country.td'] = 'Chad';
$string['country.tg'] = 'Togo';
$string['country.th'] = 'Thailand';
$string['country.tj'] = 'Tajikistan';
$string['country.tl'] = 'Timor-Leste';
$string['country.tm'] = 'Turkmenistan';
$string['country.tn'] = 'Tunisia';
$string['country.to'] = 'Tonga';
$string['country.tr'] = 'Turkey';
$string['country.tt'] = 'Trindidad and Tobago';
$string['country.tv'] = 'Tuvalu';
$string['country.tz'] = 'Tanzania, United republic of';
$string['country.ua'] = 'Ukraina';
$string['country.ug'] = 'Uganda';
$string['country.us'] = 'United States';
$string['country.uy'] = 'Uruguay';
$string['country.uz'] = 'Uzbekistan';
$string['country.va'] = 'Holy See (Vatican City State)';
$string['country.vc'] = 'Saint Vincent and the Grenadines';
$string['country.ve'] = 'Venezuela';
$string['country.vn'] = 'Viet Nam';
$string['country.vu'] = 'Vanuatu';
$string['country.ws'] = 'Samoa';
$string['country.ye'] = 'Yemen';
$string['country.za'] = 'South Africa';
$string['country.zm'] = 'Zambia';
$string['country.zw'] = 'Zimbabwe';

// List of nationalities based on the ISO 3166-1-alpha-2 filtered by Europass country list
// (http://europass.cedefop.europa.eu/TechnicalResources/XML/xsd/included_schemas/EUROPASS_Nationalities_V1.0.xsd)
$string['nationality.ad'] = 'Andorran';
$string['nationality.ae'] = 'Emirian (United Arab Emirates)';
$string['nationality.af'] = 'Afghan';
$string['nationality.ag'] = 'of Antigua and Barbuda';
$string['nationality.al'] = 'Albanian';
$string['nationality.am'] = 'Armenian';
$string['nationality.ao'] = 'Angolan';
$string['nationality.ar'] = 'Argentinian';
$string['nationality.at'] = 'Austrian';
$string['nationality.au'] = 'Australian';
$string['nationality.az'] = 'Azerbaijani';
$string['nationality.ba'] = 'Bosnian-Herzegovinian';
$string['nationality.bb'] = 'Barbadian';
$string['nationality.bd'] = 'Bangladeshi';
$string['nationality.be'] = 'Belgian';
$string['nationality.bf'] = 'Burkinabe';
$string['nationality.bg'] = 'Bulgarian';
$string['nationality.bh'] = 'Bahraini';
$string['nationality.bi'] = 'Burundian';
$string['nationality.bj'] = 'Beninese';
$string['nationality.bn'] = 'Bruneian';
$string['nationality.bo'] = 'Bolivian';
$string['nationality.br'] = 'Brazilian';
$string['nationality.bs'] = 'Bahamian';
$string['nationality.bt'] = 'Bhutanese';
$string['nationality.bw'] = 'Botswanan';
$string['nationality.by'] = 'Byelorussian';
$string['nationality.bz'] = 'Belizean';
$string['nationality.ca'] = 'Canadian';
$string['nationality.cd'] = 'Congolese (Republic of the Congo)';
$string['nationality.cf'] = 'Central African';
$string['nationality.cg'] = 'Congolese (Democratic Republic of the Congo)';
$string['nationality.ch'] = 'Swiss';
$string['nationality.ci'] = 'Ivorian';
$string['nationality.cl'] = 'Chilean';
$string['nationality.cm'] = 'Cameroonian';
$string['nationality.cn'] = 'Chinese';
$string['nationality.co'] = 'Colombian';
$string['nationality.cr'] = 'Costa Rican';
$string['nationality.cu'] = 'Cuban';
$string['nationality.cv'] = 'Cape Verdean';
$string['nationality.cy'] = 'Cypriot';
$string['nationality.cz'] = 'Czech';
$string['nationality.de'] = 'German';
$string['nationality.dj'] = 'Djiboutian';
$string['nationality.dk'] = 'Danish';
$string['nationality.dm'] = 'Dominican (Dominica)';
$string['nationality.do'] = 'Dominican (Dominican Republic)';
$string['nationality.dz'] = 'Algerian';
$string['nationality.ec'] = 'Ecuadorian';
$string['nationality.ee'] = 'Estonian';
$string['nationality.eg'] = 'Egyptian';
$string['nationality.er'] = 'Eritrean';
$string['nationality.es'] = 'Spanish';
$string['nationality.et'] = 'Ethiopian';
$string['nationality.fi'] = 'Finnish';
$string['nationality.fj'] = 'Fijian';
$string['nationality.fm'] = 'Micronesian';
$string['nationality.fr'] = 'French';
$string['nationality.ga'] = 'Gabonese';
$string['nationality.gb'] = 'British';
$string['nationality.gd'] = 'Grenadian';
$string['nationality.ge'] = 'Georgian';
$string['nationality.gh'] = 'Ghanaian';
$string['nationality.gl'] = 'Greenlandic';
$string['nationality.gm'] = 'Gambian';
$string['nationality.gn'] = 'Guinean (Republic of Guinea)';
$string['nationality.gq'] = 'Equatoguinean (Equatorial Guinea)';
$string['nationality.gr'] = 'Greek';
$string['nationality.gt'] = 'Guatemalan';
$string['nationality.gw'] = 'Guinean (Republic of Guinea-Bissau)';
$string['nationality.gy'] = 'Guyanese (Guyana)';
$string['nationality.hn'] = 'Honduran';
$string['nationality.hr'] = 'Croatian';
$string['nationality.ht'] = 'Haitian';
$string['nationality.hu'] = 'Hungarian';
$string['nationality.id'] = 'Indonesian';
$string['nationality.ie'] = 'Irish';
$string['nationality.il'] = 'Israeli';
$string['nationality.in'] = 'Indian';
$string['nationality.iq'] = 'Iraqi';
$string['nationality.ir'] = 'Iranian';
$string['nationality.is'] = 'Icelandic';
$string['nationality.it'] = 'Italian';
$string['nationality.jm'] = 'Jamaican';
$string['nationality.jo'] = 'Jordanian';
$string['nationality.jp'] = 'Japanese';
$string['nationality.ke'] = 'Kenyan';
$string['nationality.kg'] = 'Kyrgyzstani';
$string['nationality.kh'] = 'Cambodian';
$string['nationality.ki'] = 'I-kiribati';
$string['nationality.km'] = 'Comorian';
$string['nationality.kn'] = 'Kittitian / Nevisian (Saint Kitts and Nevis)';
$string['nationality.kp'] = 'Nord Korean (Democratic People\'s Republic of Korea)';
$string['nationality.kr'] = 'South Korean (Republic of Korea)';
$string['nationality.kw'] = 'Kuwaiti';
$string['nationality.kz'] = 'kazakhstani';
$string['nationality.la'] = 'Laotian';
$string['nationality.lb'] = 'Lebanese';
$string['nationality.lc'] = 'Saint Lucian (Saint Lucia)';
$string['nationality.li'] = 'Liechtensteiner';
$string['nationality.lk'] = 'Sri Lankan';
$string['nationality.lr'] = 'Liberian';
$string['nationality.ls'] = 'Basotho (Lesotho)';
$string['nationality.lt'] = 'Lithuanian';
$string['nationality.lu'] = 'Luxembourgish';
$string['nationality.lv'] = 'Latvian';
$string['nationality.ly'] = 'Libyan';
$string['nationality.ma'] = 'Moroccan';
$string['nationality.mc'] = 'Monegasque';
$string['nationality.md'] = 'Moldovan';
$string['nationality.me'] = 'Montenegrin';
$string['nationality.mg'] = 'Malagasy';
$string['nationality.mh'] = 'Marshallese';
$string['nationality.mk'] = 'of the former Yugoslav Republic of Macedonia';
$string['nationality.ml'] = 'Malian';
$string['nationality.mm'] = 'Burmese (Myanmar)';
$string['nationality.mn'] = 'Mongolian';
$string['nationality.mr'] = 'Mauritanian';
$string['nationality.mt'] = 'Maltese';
$string['nationality.mu'] = 'Mauritian';
$string['nationality.mv'] = 'Maldivian';
$string['nationality.mw'] = 'Malawian';
$string['nationality.mx'] = 'Mexican';
$string['nationality.my'] = 'Malaysian';
$string['nationality.mz'] = 'Mozambican';
$string['nationality.na'] = 'Namibian';
$string['nationality.ne'] = 'Nigerien (Republic of Niger)';
$string['nationality.ng'] = 'Nigerian (Federal Republic of Nigeria)';
$string['nationality.ni'] = 'Nicaraguan';
$string['nationality.nl'] = 'Dutch';
$string['nationality.no'] = 'Norwegian';
$string['nationality.np'] = 'Nepalese';
$string['nationality.nr'] = 'Nauruan';
$string['nationality.nu'] = 'Niuean';
$string['nationality.nz'] = 'New Zealander';
$string['nationality.om'] = 'Omani';
$string['nationality.pa'] = 'Panamanian';
$string['nationality.pe'] = 'Peruvian';
$string['nationality.pg'] = 'Papua New Guinean';
$string['nationality.ph'] = 'Philippine';
$string['nationality.pk'] = 'Pakistani';
$string['nationality.pl'] = 'Polish';
$string['nationality.pr'] = 'Puerto Rican';
$string['nationality.ps'] = 'Palestinian';
$string['nationality.pt'] = 'Portuguese';
$string['nationality.pw'] = 'Palauan';
$string['nationality.py'] = 'Paraguayan';
$string['nationality.qa'] = 'Qatari';
$string['nationality.ro'] = 'Romanian';
$string['nationality.rs'] = 'Serbian';
$string['nationality.ru'] = 'Russian';
$string['nationality.rw'] = 'Rwandan; Rwandese';
$string['nationality.sa'] = 'Saudi Arabian';
$string['nationality.sb'] = 'Solomon Islander';
$string['nationality.sc'] = 'Seychellois';
$string['nationality.sd'] = 'Sudanese';
$string['nationality.se'] = 'Swedish';
$string['nationality.sg'] = 'Singaporean';
$string['nationality.si'] = 'Slovenian';
$string['nationality.sk'] = 'Slovak';
$string['nationality.sl'] = 'Sierra Leonean';
$string['nationality.sm'] = 'Sammarinese';
$string['nationality.sn'] = 'Senegalese';
$string['nationality.so'] = 'Somali';
$string['nationality.sr'] = 'Surinamese';
$string['nationality.st'] = 'Sao Tomean';
$string['nationality.sv'] = 'Salvadoran';
$string['nationality.sy'] = 'Syrian';
$string['nationality.sz'] = 'Swazi';
$string['nationality.td'] = 'Chadian';
$string['nationality.tg'] = 'Togolese';
$string['nationality.th'] = 'Thai';
$string['nationality.tj'] = 'Tajik';
$string['nationality.tl'] = 'Timorese';
$string['nationality.tm'] = 'Turkmen';
$string['nationality.tn'] = 'Tunisian';
$string['nationality.to'] = 'Tongan';
$string['nationality.tr'] = 'Turkish';
$string['nationality.tt'] = 'of Trinidad and Tobago';
$string['nationality.tv'] = 'Tuvaluan';
$string['nationality.tz'] = 'Tanzanian';
$string['nationality.ua'] = 'Ukrainian';
$string['nationality.ug'] = 'Ugandan';
$string['nationality.us'] = 'American';
$string['nationality.uy'] = 'Uruguayan';
$string['nationality.uz'] = 'Uzbek';
$string['nationality.va'] = 'Vatican';
$string['nationality.vc'] = 'Saint Vincentian (Saint Vincent and the Grenadines)';
$string['nationality.ve'] = 'Venezuelan';
$string['nationality.vn'] = 'Vietnamese';
$string['nationality.vu'] = 'Ni-Vanuatu';
$string['nationality.ws'] = 'Samoan';
$string['nationality.ye'] = 'Yemeni';
$string['nationality.za'] = 'South African';
$string['nationality.zm'] = 'Zambian';
$string['nationality.zw'] = 'Zimbabwean';

?>
