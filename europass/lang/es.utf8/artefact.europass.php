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
 * @translator Mari Cruz García
 * @translator Iñaki Arenaza
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
$string['europassartefactsaved'] = 'Europass curriculum vitae se salvó con éxito';
$string['europassexportgenerated'] = 'Por favor, espere mientras se genera la exportación...';
$string['europassexportnoconncetion'] = 'Se produjo un error en la conexión con el servidor WSDL. Por favor, inténtelo de nuevo.';
$string['europassexportservererror'] = 'Se produjo un error con el servidor WSDL. Por favor, inténtelo más tarde.';
$string['europassextensionmissing'] = 'Lamentablemente no puede usar el pluggin Europass porque su instalación PHP carece de la extensión requerida:';
$string['newerversionforcompatibility'] = 'Para un mejor funcionamiento y compatibilidad debería actualizar a Mahara version 1.3.0 o superior.';

$string['languagesaved'] = 'Se salvó el Lenguaje con éxito';
$string['languagesavefailed'] = 'Fallo al salvar lenguaje';
$string['languagedeleteconfirm'] = '¿Está seguro que desea borrar este lenguaje?';
$string['languagedeleted'] = 'Se borró el lenguaje con éxito';

$string['moveup'] = 'Mover hacia arriba';
$string['movedown'] = 'Mover hacia abajo';

$string['languagediploma'] = 'Certificado de idioma';
$string['languageexperience'] = 'Experiencia lingüística';
$string['languagediplomadeleteconfirm'] = '¿Está seguro de que desea borrar este certificado de idioma?';
$string['languageexperiencedeleteconfirm'] = '¿Está seguro de que desea borrar esta experiencia lingüística?';
$string['languagediplomadeleted'] = 'Certificado de idioma borrado con éxito.';
$string['languageexperiencedeleted'] = 'Experiencia lingüística borrada con éxito.';
$string['languagediplomasaved'] = 'Certificado de idioma guardado con éxito.';
$string['languagediplomasavefailed'] = 'No se pudo guardar el certificado de idioma.';
$string['languageexperiencesaved'] = 'Experiencia lingüística guardada con éxito.';
$string['languageexperiencesavefailed'] = 'No se pudo guardar la experiencia lingüística.';

// Export data from Mahara to Europass form...
$string['exporteuropass'] = 'Exportar Europass';
$string['exportstep1'] = '1 -Lenguaje y tipo de documento';
$string['selectlocale&type'] = 'Seleccionar lenguaje y tipo de documento';
$string['selectlocale'] = 'Languaje';
$string['selectlocaledesc'] = 'Europass documento lenguaje';
$string['selectdocumenttype'] = 'Documento';
$string['europassCV'] = 'Curriculum Vitae (CV) Europass';
$string['europassLP'] = 'Pasaporte de Lenguas Europass';
$string['photograph'] = 'Fotografía';
$string['photographdesc'] = 'La foto se incluirá en Europass XML';
$string['phototoolarge'] = 'El fichero es demasiado grande. El tamaño del fichero no debe exceder los 100 kB.';
$string['exportstep2'] = '2 -Formato de documento';
$string['selectfiletype'] = 'Seleccione tipo de fichero y formato de fecha';
$string['exportdate'] = 'Fecha';
$string['internaldateformat'] = 'Formato Interno de Fecha';
$string['selectinternaldatedesc'] = 'Formato de fecha usado en Mahara';
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
$string['internaldate-other'] = 'Otro';
$string['externaldateformat'] = 'Formato de fecha externa';
$string['selectexternaldatedesc'] = 'Formato de fecha externa en export';
$string['externaldate-numeric-long'] = 'dd/mm/aaaa';
$string['externaldate-text-long'] = 'dd. mes aaaa';
$string['exportfile'] = 'Fichero';
$string['pdf'] = 'Adobe® PDF + XML';
$string['pdfhrxml'] = 'Adobe® PDF + HR-XML';
$string['doc'] = 'Microsoft® Word';
$string['odt'] = 'OpenDocument';
$string['html'] = 'HTML';
$string['json'] = 'Europass JSON';
$string['xml'] = 'Europass XML';
$string['hrxml'] = 'HR-XML';
$string['exportstep3'] = '3 - Exportar';
$string['generate'] = 'Generar exportación';
$string['generateexport'] = 'Exportar';

// Import data from Europass XML to Mahara...
$string['importeuropass'] = 'Importar Europass';
$string['importstep1'] = '1 - Fichero de importación y opciones';
$string['selectfile&options'] = 'Subir fichero Europass XML y seleccionar opciones de importación';
$string['importstep2'] = '2 - Importar';
$string['execute'] = 'Ejecutar importación';
$string['executeimport'] = 'Importar';
$string['importfile'] = 'Fichero Europass XML';
$string['importfiledesc'] = 'Seleccionar un fichero Europass XML válido para importar a Mahara';
$string['notvalidxmlfile'] = 'El fichero subido no es un fichero XML válido.';
$string['importoptions'] = '¿Qué importar?';
$string['importoptionsdesc'] = 'Los campos bloqueados del perfil no se cambiarán/actualizarán.';
$string['nocheckedoptions'] = 'Debe marcar al menos una opción de importación.';
$string['fieldnotimported'] = 'Campo "%s" no importado.';
$string['lockedfieldnotimported'] = 'Campo bloqueado "%s" no importado.';
$string['languagecodemissing'] = 'Campo "%s" no importado. Falta el código de idioma.';
$string['importdate'] = 'Importar fechas como';
$string['europassimportexecuted'] = 'Los datos de Europass XML se han importado con éxito en Mahara.';

// Europass GUI form tabs
$string['application-tab'] = 'Solicitud';
$string['workexperience-tab'] = 'Experiencia laboral';
$string['education-tab'] = 'Educación';
$string['languages-tab'] = 'Idiomas';
$string['skills-tab'] = 'Aptitudes';

// Europass CV - STEP 1
$string['identification'] = 'Información personal';
$string['identification-birthdate'] = 'Fecha de nacimiento';
$string['identification-birthplace'] = 'Lugar de nacimiento';
$string['identification-lastname'] = 'Apellido(s)';
$string['identification-firstname'] = 'Nombre(s)';
$string['identification-addressLine'] = 'Calle / número';
$string['identification-municipality'] = 'Ciudad';
$string['identification-postalCode'] = 'Código postal';
$string['identification-country'] = 'País';
$string['identification-contactinfo-telephone'] = 'Teléfono(s)';
$string['identification-contactinfo-mobile'] = 'Móvil';
$string['identification-contactinfo-fax'] = 'Fax';
$string['identification-contactinfo-email'] = 'correo(s) electrónico(s)';
$string['identification-nationality'] = 'Nacionalidad';
$string['identification-gender'] = 'Sexo';

// Europass CV - STEP 2
$string['application'] = 'Empleo al que aspira / familia profesional';

// Europass CV - STEP 3
$string['workexperience'] = 'Experiencia laboral';

// Europass CV - STEP 4
$string['education'] = 'Educación y formación';

// Europass CV - STEP 5
$string['mothertongue'] = 'Idioma(s) materno(s)';
$string['otherlanguage'] = 'Otro(s) idioma(s)';

$string['language-foreign-listening'] = 'Comprensión auditiva';
$string['language-foreign-listening-th'] = 'Comprensión<br>auditiva';
$string['language-foreign-reading'] = 'Comprensión de lectura';
$string['language-foreign-reading-th'] = 'Comprensión<br>de lectura';
$string['language-foreign-spokeninteraction'] = 'Interacción oral';
$string['language-foreign-spokeninteraction-th'] = 'Interacción<br>oral';
$string['language-foreign-spokenproduction'] = 'Expresión oral';
$string['language-foreign-spokenproduction-th'] = 'Expresión<br>oral';
$string['language-foreign-writing'] = 'Escribir';
$string['language-foreign-writing-th'] = 'Escribir';
$string['language-foreign-CEF-level'] = 'Nivel del Marco Europeo Común de Referencia (MECR)';

$string['language-foreign-level.A1'] = 'Usuario básico (A1)';
$string['language-foreign-level.A2'] = 'Usuario básico (A2)';
$string['language-foreign-level.B1'] = 'Usuario autónomo (B1)';
$string['language-foreign-level.B2'] = 'Usuario autónomo (B2)';
$string['language-foreign-level.C1'] = 'Usuario competente (C1)';
$string['language-foreign-level.C2'] = 'Usuario competente (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Permiso(s) de conducción';
$string['skills-and-competences'] = 'Capacidades y competencias personales';
$string['socialskill'] = 'Capacidades y aptitudes sociales';
$string['organisationalskill'] = 'Capacidades y aptitudes organizativas';
$string['technicalskill'] = 'Capacidades y aptitudes técnicas';
$string['computerskill'] = 'Capacidades y aptitudes informáticas';
$string['artisticskill'] = 'Capacidades y aptitudes artísticas';
$string['otherskill'] = 'Otras capacidades y aptitudes';
$string['additionalinfo'] = 'Información adicional';
$string['annexes'] = 'Anexos';

// Europass LP - STEP 2
$string['language-certificates'] = 'Título(s) o certificado(s)';
$string['diploma-title'] = 'Título(s) o certificado(s)';
$string['diploma-awardingBody'] = 'Organismo expedidor';
$string['diploma-date'] = 'Fecha';
$string['diploma-level'] = 'Nivel europeo';
$string['language-experiences'] = 'Experiencia(s) lingüística(s)';
$string['experiences-period-from'] = 'Desde';
$string['experiences-period-to'] = 'Hasta';

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
$string['language.ab'] = 'abjazio';
$string['language.af'] = 'afrikaans';
$string['language.an'] = 'aragonés';
$string['language.ar'] = 'árabe';
$string['language.as'] = 'asamés';
$string['language.az'] = 'azerí';
$string['language.be'] = 'bielorruso';
$string['language.bg'] = 'búlgaro';
$string['language.bn'] = 'bengalí';
$string['language.bo'] = 'tibetano';
$string['language.br'] = 'bretón';
$string['language.bs'] = 'bosnio';
$string['language.ca'] = 'catalán / valenciano';
$string['language.ce'] = 'checheno';
$string['language.co'] = 'corso';
$string['language.cs'] = 'checo';
$string['language.cy'] = 'galés';
$string['language.da'] = 'danés';
$string['language.de'] = 'alemán';
$string['language.el'] = 'griego';
$string['language.en'] = 'inglés';
$string['language.es'] = 'español / castellano';
$string['language.et'] = 'estonio';
$string['language.eu'] = 'eusquera';
$string['language.fa'] = 'persa antiguo (600-400 a.C. aprox.)';
$string['language.fi'] = 'finés';
$string['language.fj'] = 'fidji';
$string['language.fo'] = 'feroés';
$string['language.fr'] = 'francés';
$string['language.fy'] = 'frisón occidental';
$string['language.ga'] = 'irlandés';
$string['language.gd'] = 'gaélico / gaélico escocés';
$string['language.gl'] = 'gallego';
$string['language.gv'] = 'manés';
$string['language.he'] = 'hebreo';
$string['language.hi'] = 'hindi';
$string['language.hr'] = 'croata';
$string['language.ht'] = 'haitiano, criollo haitiano';
$string['language.hu'] = 'húngaro';
$string['language.hy'] = 'armenio';
$string['language.id'] = 'indonesio';
$string['language.is'] = 'islandés';
$string['language.it'] = 'italiano';
$string['language.ja'] = 'japonés';
$string['language.jv'] = 'javanés';
$string['language.ka'] = 'georgiano';
$string['language.kg'] = 'kongo';
$string['language.ko'] = 'coreano';
$string['language.ku'] = 'kurdo';
$string['language.kw'] = 'córnico';
$string['language.ky'] = 'kirguís';
$string['language.lb'] = 'luxemburgués';
$string['language.li'] = 'limburgués';
$string['language.ln'] = 'lingala';
$string['language.lt'] = 'lituano';
$string['language.lv'] = 'letón';
$string['language.mg'] = 'malgache';
$string['language.mk'] = 'macedonio';
$string['language.mn'] = 'mongol';
$string['language.mo'] = 'moldavo';
$string['language.ms'] = 'malayo';
$string['language.mt'] = 'maltés';
$string['language.my'] = 'birmano';
$string['language.nb'] = 'noruego (bokmal)';
$string['language.ne'] = 'nepalí';
$string['language.nl'] = 'neerlandés';
$string['language.nn'] = 'noruego (nynorsk)';
$string['language.no'] = 'noruego';
$string['language.pl'] = 'polaco';
$string['language.pt'] = 'portugués';
$string['language.rm'] = 'reto-románicas';
$string['language.ro'] = 'rumano';
$string['language.ru'] = 'ruso';
$string['language.r0'] = 'romaní'; // doesn't really have an ISO 369-1 code...
$string['language.sc'] = 'sardo';
$string['language.se'] = 'sami septentrional';
$string['language.sk'] = 'eslovaco';
$string['language.sl'] = 'esloveno';
$string['language.so'] = 'somalí';
$string['language.sq'] = 'albanés';
$string['language.sr'] = 'serbio';
$string['language.sv'] = 'Sueco';
$string['language.sw'] = 'swahili';
$string['language.tk'] = 'turcomano';
$string['language.tr'] = 'turco';
$string['language.ty'] = 'tahitiano';
$string['language.uk'] = 'ucraniano';
$string['language.ur'] = 'urdu';
$string['language.uz'] = 'uzbeko';
$string['language.vi'] = 'vietnamita';
$string['language.yi'] = 'yídish';
$string['language.zh'] = 'chino';
$string['language.cu'] = 'eslavo eclesiástico';
$string['language.eo'] = 'esperanto';
$string['language.la'] = 'latín';
$string['language.oc'] = 'occitano (después de 1500); provenzal';
$string['language.vo'] = 'volapuk';
// ISO 639-1:2002 languages that had been left out by Europass
$string['language.aa'] = 'afar';
$string['language.ae'] = 'avéstico';
$string['language.ak'] = 'akano';
$string['language.am'] = 'amárico';
$string['language.av'] = 'avar';
$string['language.ay'] = 'aimara';
$string['language.ba'] = 'baskir';
$string['language.bh'] = 'bhojpurí';
$string['language.bi'] = 'bislama';
$string['language.bm'] = 'bambara';
$string['language.ch'] = 'chamorro';
$string['language.cr'] = 'cree';
$string['language.cv'] = 'chuvasio';
$string['language.dv'] = 'maldivo';
$string['language.dz'] = 'dzongkha';
$string['language.ee'] = 'ewe';
$string['language.ff'] = 'fula';
$string['language.gn'] = 'guaraní';
$string['language.gu'] = 'guyaratí (o guyaratí)';
$string['language.ha'] = 'hausa';
$string['language.ho'] = 'hiri motu';
$string['language.hz'] = 'herero';
$string['language.ia'] = 'interlingua';
$string['language.ig'] = 'igbo';
$string['language.ii'] = 'yi de Sichuán';
$string['language.ik'] = 'inupiaq';
$string['language.io'] = 'ido';
$string['language.iu'] = 'inuktitut';
$string['language.ki'] = 'kikuyu';
$string['language.kj'] = 'kuanyama';
$string['language.kk'] = 'kazajo (o kazajio)';
$string['language.kl'] = 'groenlandés (o kalaallisut)';
$string['language.km'] = 'camboyano (o jemer)';
$string['language.kn'] = 'canarés';
$string['language.kr'] = 'kanuri';
$string['language.ks'] = 'cachemiro';
$string['language.kv'] = 'komi';
$string['language.lg'] = 'luganda';
$string['language.lo'] = 'lao';
$string['language.lu'] = 'luba-katanga';
$string['language.mh'] = 'marshalés';
$string['language.mi'] = 'maorí';
$string['language.ml'] = 'malayalam';
$string['language.mr'] = 'maratí';
$string['language.na'] = 'nauruano';
$string['language.nd'] = 'ndebele del norte';
$string['language.ng'] = 'ndonga';
$string['language.nr'] = 'ndebele del sur';
$string['language.nv'] = 'navajo';
$string['language.ny'] = 'chichewa';
$string['language.oj'] = 'ojibwa';
$string['language.om'] = 'oromo';
$string['language.or'] = 'oriya';
$string['language.os'] = 'osético';
$string['language.pa'] = 'panyabí (o penyabi)';
$string['language.pi'] = 'pali';
$string['language.ps'] = 'pastú (o pashto)';
$string['language.qu'] = 'quechua';
$string['language.rn'] = 'kirundi';
$string['language.rw'] = 'ruandés';
$string['language.sa'] = 'sánscrito';
$string['language.sd'] = 'sindhi';
$string['language.sg'] = 'sango';
$string['language.si'] = 'cingalés';
$string['language.sm'] = 'samoano';
$string['language.sn'] = 'shona';
$string['language.ss'] = 'suazi (swati o siSwati)';
$string['language.st'] = 'sesotho';
$string['language.su'] = 'sundanés';
$string['language.ta'] = 'tamil';
$string['language.te'] = 'telugú';
$string['language.tg'] = 'tayiko';
$string['language.th'] = 'tailandés';
$string['language.ti'] = 'tigriña';
$string['language.tl'] = 'tagalo';
$string['language.tn'] = 'setsuana';
$string['language.to'] = 'tongano';
$string['language.ts'] = 'tsonga';
$string['language.tt'] = 'tártaro';
$string['language.tw'] = 'twi';
$string['language.ug'] = 'uigur';
$string['language.ve'] = 'venda';
$string['language.wa'] = 'valón';
$string['language.wo'] = 'wolof';
$string['language.xh'] = 'xhosa';
$string['language.yo'] = 'yoruba';
$string['language.za'] = 'chuan (o zhuang)';
$string['language.zu'] = 'zulú';

// ISO 3166-1-alpha-2 filtered by Europass 
// (http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm)
$string['country.ad'] = 'Andorra';
$string['country.ae'] = 'Emiratos Árabes Unidos';
$string['country.af'] = 'Afganistán';
$string['country.ag'] = 'Antigua y Barbuda';
$string['country.al'] = 'Albania';
$string['country.am'] = 'Armenia';
$string['country.ao'] = 'Angola';
$string['country.ar'] = 'Argentina';
$string['country.at'] = 'Austria';
$string['country.au'] = 'Australia';
$string['country.az'] = 'Azerbaiyán';
$string['country.ba'] = 'Bosnia y Herzegovina';
$string['country.bb'] = 'Barbados';
$string['country.bd'] = 'Bangladesh';
$string['country.be'] = 'Bélgica';
$string['country.bf'] = 'Burkina Faso';
$string['country.bg'] = 'Bulgaria';
$string['country.bh'] = 'Bahréin';
$string['country.bi'] = 'Burundi';
$string['country.bj'] = 'Benin';
$string['country.bn'] = 'Brunéi';
$string['country.bo'] = 'Bolivia';
$string['country.br'] = 'Brasil';
$string['country.bs'] = 'Bahamas';
$string['country.bt'] = 'Bhután';
$string['country.bw'] = 'Botsuana';
$string['country.by'] = 'Bielorrusia';
$string['country.bz'] = 'Belice';
$string['country.ca'] = 'Canadá';
$string['country.cd'] = 'República Democrática del Congo';
$string['country.cf'] = 'República Centroafricana';
$string['country.cg'] = 'República del Congo';
$string['country.ch'] = 'Suiza';
$string['country.ci'] = 'Costa de Marfil';
$string['country.cl'] = 'Chile';
$string['country.cm'] = 'Camerún';
$string['country.cn'] = 'China';
$string['country.co'] = 'Colombia';
$string['country.cr'] = 'Costa Rica';
$string['country.cu'] = 'Cuba';
$string['country.cv'] = 'Cabo Verde';
$string['country.cy'] = 'Chipre';
$string['country.cz'] = 'República Checa';
$string['country.de'] = 'Alemania';
$string['country.dj'] = 'Yibuti';
$string['country.dk'] = 'Dinamarca';
$string['country.dm'] = 'Dominica';
$string['country.do'] = 'República Dominicana';
$string['country.dz'] = 'Argelia';
$string['country.ec'] = 'Ecuador';
$string['country.ee'] = 'Estonia';
$string['country.eg'] = 'Egipto';
$string['country.er'] = 'Eritrea';
$string['country.es'] = 'España';
$string['country.et'] = 'Etiopía';
$string['country.fi'] = 'Finlandia';
$string['country.fj'] = 'Fiyi';
$string['country.fm'] = 'Micronesia';
$string['country.fr'] = 'Francia';
$string['country.ga'] = 'Gabón';
$string['country.gb'] = 'Reino Unido';
$string['country.gd'] = 'Granada';
$string['country.ge'] = 'Georgia';
$string['country.gh'] = 'Ghana';
$string['country.gl'] = 'Groenlandia';
$string['country.gm'] = 'Gambia';
$string['country.gn'] = 'Guinea';
$string['country.gq'] = 'Guinea Ecuatorial';
$string['country.gr'] = 'Grecia';
$string['country.gt'] = 'Guatemala';
$string['country.gw'] = 'Guinea-Bissau';
$string['country.gy'] = 'Guyana';
$string['country.hn'] = 'Honduras';
$string['country.hr'] = 'Croacia';
$string['country.ht'] = 'Haití';
$string['country.hu'] = 'Hungría';
$string['country.id'] = 'Indonesia';
$string['country.ie'] = 'Irlanda';
$string['country.il'] = 'Israel';
$string['country.in'] = 'India';
$string['country.iq'] = 'Iraq';
$string['country.ir'] = 'Irán';
$string['country.is'] = 'Islandia';
$string['country.it'] = 'Italia';
$string['country.jm'] = 'Jamaica';
$string['country.jo'] = 'Jordania';
$string['country.jp'] = 'Japón';
$string['country.ke'] = 'Kenia';
$string['country.kg'] = 'Kirguistán';
$string['country.kh'] = 'Camboya';
$string['country.ki'] = 'Kiribati';
$string['country.km'] = 'Comoras';
$string['country.kn'] = 'San Cristóbal y Nieves';
$string['country.kp'] = 'Corea del Norte';
$string['country.kr'] = 'Corea del Sur';
$string['country.kw'] = 'Kuwait';
$string['country.kz'] = 'Kazajstán';
$string['country.la'] = 'Laos';
$string['country.lb'] = 'Líbano';
$string['country.lc'] = 'Santa Lucía';
$string['country.li'] = 'Liechtenstein';
$string['country.lk'] = 'Sri Lanka';
$string['country.lr'] = 'Liberia';
$string['country.ls'] = 'Lesotho';
$string['country.lt'] = 'Lituania';
$string['country.lu'] = 'Luxemburgo';
$string['country.lv'] = 'Letonia';
$string['country.ly'] = 'Libia';
$string['country.ma'] = 'Marruecos';
$string['country.mc'] = 'Mónaco';
$string['country.md'] = 'Moldavia';
$string['country.me'] = 'Montenegro';
$string['country.mg'] = 'Madagascar';
$string['country.mh'] = 'Islas Marshall';
$string['country.mk'] = 'Antigua República Yugoslava de Macedonia';
$string['country.ml'] = 'Malí';
$string['country.mm'] = 'Myanmar';
$string['country.mn'] = 'Mongolia';
$string['country.mr'] = 'Mauritania';
$string['country.mt'] = 'Malta';
$string['country.mu'] = 'Mauricio';
$string['country.mv'] = 'Maldivas';
$string['country.mw'] = 'Malawi';
$string['country.mx'] = 'México';
$string['country.my'] = 'Malasia';
$string['country.mz'] = 'Mozambique';
$string['country.na'] = 'Namibia';
$string['country.ne'] = 'Níger';
$string['country.ng'] = 'Nigeria';
$string['country.ni'] = 'Nicaragua';
$string['country.nl'] = 'Países Bajos';
$string['country.no'] = 'Noruega';
$string['country.np'] = 'Nepal';
$string['country.nr'] = 'Nauru';
$string['country.nu'] = 'Niue';
$string['country.nz'] = 'Nueva Zelanda';
$string['country.om'] = 'Omán';
$string['country.pa'] = 'Panamá';
$string['country.pe'] = 'Perú';
$string['country.pg'] = 'Papúa Nueva Guinea';
$string['country.ph'] = 'Filipinas';
$string['country.pk'] = 'Pakistán';
$string['country.pl'] = 'Polonia';
$string['country.pr'] = 'Puerto Rico';
$string['country.ps'] = 'Territorios Autónomos Palestinos';
$string['country.pt'] = 'Portugal';
$string['country.pw'] = 'Palaos';
$string['country.py'] = 'Paraguay';
$string['country.qa'] = 'Qatar';
$string['country.ro'] = 'Rumania';
$string['country.rs'] = 'Serbia';
$string['country.ru'] = 'Rusia';
$string['country.rw'] = 'Ruanda';
$string['country.sa'] = 'Arabia Saudí';
$string['country.sb'] = 'Islas Salomón';
$string['country.sc'] = 'Seychelles';
$string['country.sd'] = 'Sudán';
$string['country.se'] = 'Suecia';
$string['country.sg'] = 'Singapur';
$string['country.si'] = 'Eslovenia';
$string['country.sk'] = 'Eslovaquia';
$string['country.sl'] = 'Sierra Leona';
$string['country.sm'] = 'San Marino';
$string['country.sn'] = 'Senegal';
$string['country.so'] = 'Somalia';
$string['country.sr'] = 'Surinam';
$string['country.st'] = 'Santo Tomé y Príncipe';
$string['country.sv'] = 'El Salvador';
$string['country.sy'] = 'Siria';
$string['country.sz'] = 'Suazilandia';
$string['country.td'] = 'Chad';
$string['country.tg'] = 'Togo';
$string['country.th'] = 'Tailandia';
$string['country.tj'] = 'Tayikistán';
$string['country.tl'] = 'Timor Oriental';
$string['country.tm'] = 'Turkmenistán';
$string['country.tn'] = 'Túnez';
$string['country.to'] = 'Tonga';
$string['country.tr'] = 'Turquía';
$string['country.tt'] = 'Trinidad y Tobago';
$string['country.tv'] = 'Tuvalu';
$string['country.tz'] = 'Tanzania';
$string['country.ua'] = 'Ucrania';
$string['country.ug'] = 'Uganda';
$string['country.us'] = 'Estados Unidos';
$string['country.uy'] = 'Uruguay';
$string['country.uz'] = 'Uzbekistán';
$string['country.va'] = 'Ciudad del Vaticano';
$string['country.vc'] = 'San Vicente y las Granadinas';
$string['country.ve'] = 'Venezuela';
$string['country.vn'] = 'Vietnam';
$string['country.vu'] = 'Vanuatu';
$string['country.ws'] = 'Samoa';
$string['country.ye'] = 'Yemen';
$string['country.za'] = 'Sudáfrica';
$string['country.zm'] = 'Zambia';
$string['country.zw'] = 'Zimbabue';

// List of nationalities based on the ISO 3166-1-alpha-2 filtered by Europass country list
// (http://europass.cedefop.europa.eu/TechnicalResources/XML/xsd/included_schemas/EUROPASS_Nationalities_V1.0.xsd)
$string['nationality.ad'] = 'Andorrana';
$string['nationality.ae'] = 'Emiratí (Emiratos Árabes Unidos)';
$string['nationality.af'] = 'Afgana';
$string['nationality.ag'] = 'de Antigua y Barbuda';
$string['nationality.al'] = 'Albanésa';
$string['nationality.am'] = 'Armenia';
$string['nationality.ao'] = 'Angoleña';
$string['nationality.ar'] = 'Argentina';
$string['nationality.at'] = 'Austríaca';
$string['nationality.au'] = 'Australiana';
$string['nationality.az'] = 'Azerbaiyana';
$string['nationality.ba'] = 'de Bosnia y Herzegovina';
$string['nationality.bb'] = 'Barbadense';
$string['nationality.bd'] = 'de Bangladesh';
$string['nationality.be'] = 'Belga';
$string['nationality.bf'] = 'Burkinabesa';
$string['nationality.bg'] = 'Búlgara';
$string['nationality.bh'] = 'de Bahrein';
$string['nationality.bi'] = 'Burundiana';
$string['nationality.bj'] = 'Beninesa';
$string['nationality.bn'] = 'de Brunei Darussalam';
$string['nationality.bo'] = 'Boliviana';
$string['nationality.br'] = 'Brasileña';
$string['nationality.bs'] = 'Bahamesa';
$string['nationality.bt'] = 'Bhutanesa';
$string['nationality.bw'] = 'Botswanesa';
$string['nationality.by'] = 'Belarusa';
$string['nationality.bz'] = 'Beliceña';
$string['nationality.ca'] = 'Canadiense';
$string['nationality.cd'] = 'Congoleño (República del Congo)';
$string['nationality.cf'] = 'Centroafricana';
$string['nationality.cg'] = 'Congoleño (República Democrática del Congo)';
$string['nationality.ch'] = 'Suiza';
$string['nationality.ci'] = 'de Côte d\'Ivoire';
$string['nationality.cl'] = 'Chilena';
$string['nationality.cm'] = 'Camerunesa';
$string['nationality.cn'] = 'China';
$string['nationality.co'] = 'Colombiana';
$string['nationality.cr'] = 'Costarricense';
$string['nationality.cu'] = 'Cubana';
$string['nationality.cv'] = 'Caboverdiana';
$string['nationality.cy'] = 'Chipriota';
$string['nationality.cz'] = 'Checa';
$string['nationality.de'] = 'Alemana';
$string['nationality.dj'] = 'De Djibouti';
$string['nationality.dk'] = 'Danesa';
$string['nationality.dm'] = 'Dominicana (Dominica)';
$string['nationality.do'] = 'Dominiquesa (República Dominicana)';
$string['nationality.dz'] = 'Argelina';
$string['nationality.ec'] = 'Ecuatoriana';
$string['nationality.ee'] = 'Estonia';
$string['nationality.eg'] = 'Egipcia';
$string['nationality.er'] = 'Eritrea';
$string['nationality.es'] = 'Española';
$string['nationality.et'] = 'Etíope';
$string['nationality.fi'] = 'Finlandesa';
$string['nationality.fj'] = 'Fijiana';
$string['nationality.fm'] = 'de los Estados Federados de Micronesia';
$string['nationality.fr'] = 'Francesa';
$string['nationality.ga'] = 'Gabonesa';
$string['nationality.gb'] = 'Británica';
$string['nationality.gd'] = 'Granadina';
$string['nationality.ge'] = 'Georgiana';
$string['nationality.gh'] = 'Ghanesa';
$string['nationality.gl'] = 'Groenlandia';
$string['nationality.gm'] = 'Gambiana';
$string['nationality.gn'] = 'Guineana (República de Guinea)';
$string['nationality.gq'] = 'Ecuatoguineana (Guinea Ecuatorial)';
$string['nationality.gr'] = 'Griega';
$string['nationality.gt'] = 'Guatemalteca';
$string['nationality.gw'] = 'Guineana (República de Guinea-Bissau)';
$string['nationality.gy'] = 'Guynaesa';
$string['nationality.hn'] = 'Hondureña';
$string['nationality.hr'] = 'Croata';
$string['nationality.ht'] = 'Haitiana';
$string['nationality.hu'] = 'Húngara';
$string['nationality.id'] = 'Indonesia';
$string['nationality.ie'] = 'Irlandesa';
$string['nationality.il'] = 'Israelita';
$string['nationality.in'] = 'India';
$string['nationality.iq'] = 'Irakí';
$string['nationality.ir'] = 'Iraní';
$string['nationality.is'] = 'Islandesa';
$string['nationality.it'] = 'Italiana';
$string['nationality.jm'] = 'Jamaiquina';
$string['nationality.jo'] = 'Jordana';
$string['nationality.jp'] = 'Japonesa';
$string['nationality.ke'] = 'keniata';
$string['nationality.kg'] = 'Kyrgyz';
$string['nationality.kh'] = 'Camboyana';
$string['nationality.ki'] = 'Kiribatiana';
$string['nationality.km'] = 'Comorana';
$string['nationality.kn'] = 'de Saint Kitts y Nevis';
$string['nationality.kp'] = 'Norcoreana (República Popular Democrática de Corea)';
$string['nationality.kr'] = 'Surcoreana (República de Corea)';
$string['nationality.kw'] = 'Kuwaití';
$string['nationality.kz'] = 'Kazajstana';
$string['nationality.la'] = 'Laosiana';
$string['nationality.lb'] = 'Libanesa';
$string['nationality.lc'] = 'Santalucense';
$string['nationality.li'] = 'Liechtensteinense';
$string['nationality.lk'] = 'de Sri Lanka';
$string['nationality.lr'] = 'Liberiana';
$string['nationality.ls'] = 'Lesothense';
$string['nationality.lt'] = 'Lituana';
$string['nationality.lu'] = 'Luxemburguesa';
$string['nationality.lv'] = 'Letona';
$string['nationality.ly'] = 'Libia';
$string['nationality.ma'] = 'Marroquí';
$string['nationality.mc'] = 'Monegasca';
$string['nationality.md'] = 'Moldava';
$string['nationality.me'] = 'Montenegrina';
$string['nationality.mg'] = 'Malgache';
$string['nationality.mh'] = 'Marshalesa';
$string['nationality.mk'] = 'de la Antigua República Yugoslava de Macedonia';
$string['nationality.ml'] = 'Maliense';
$string['nationality.mm'] = 'de Myanmar';
$string['nationality.mn'] = 'Mongol';
$string['nationality.mr'] = 'Mauritana';
$string['nationality.mt'] = 'Maltesa';
$string['nationality.mu'] = 'Mauriciana';
$string['nationality.mv'] = 'Maldivense';
$string['nationality.mw'] = 'Malawiana';
$string['nationality.mx'] = 'Mexicana';
$string['nationality.my'] = 'Malaya';
$string['nationality.mz'] = 'Mozambiqueña';
$string['nationality.na'] = 'Namibiana';
$string['nationality.ne'] = 'Nigerina (República de Níger)';
$string['nationality.ng'] = 'Nigeriana (República Federal de Nigeria)';
$string['nationality.ni'] = 'Nicaragüense';
$string['nationality.nl'] = 'Holandesa';
$string['nationality.no'] = 'Noruega';
$string['nationality.np'] = 'Nepalesa';
$string['nationality.nr'] = 'Nauruana';
$string['nationality.nu'] = 'de Niue';
$string['nationality.nz'] = 'Neozelandesa';
$string['nationality.om'] = 'Omaní';
$string['nationality.pa'] = 'Panameña';
$string['nationality.pe'] = 'Peruano';
$string['nationality.pg'] = 'de Papua Nueva Guinea';
$string['nationality.ph'] = 'Philippine';
$string['nationality.pk'] = 'Pakistaní';
$string['nationality.pl'] = 'Polaca';
$string['nationality.pr'] = 'Puertorriqueña';
$string['nationality.ps'] = 'Palestina';
$string['nationality.pt'] = 'Portuguésa';
$string['nationality.pw'] = 'de Palau';
$string['nationality.py'] = 'Paraguayo';
$string['nationality.qa'] = 'De Qatar';
$string['nationality.ro'] = 'Rumano';
$string['nationality.rs'] = 'Serbio';
$string['nationality.ru'] = 'De la Federación de Rusia';
$string['nationality.rw'] = 'De la Federación de Rusia';
$string['nationality.sa'] = 'Árabe saudita';
$string['nationality.sb'] = 'de las Islas Salomón';
$string['nationality.sc'] = 'de Seychelles';
$string['nationality.sd'] = 'Sudanesa';
$string['nationality.se'] = 'Sueca';
$string['nationality.sg'] = 'Singapurense';
$string['nationality.si'] = 'Eslovena';
$string['nationality.sk'] = 'Eslovaca';
$string['nationality.sl'] = 'Sierraleonés';
$string['nationality.sm'] = 'Sanmarinense';
$string['nationality.sn'] = 'Senegalés';
$string['nationality.so'] = 'Somalí';
$string['nationality.sr'] = 'Surinamesa';
$string['nationality.st'] = 'De Santo Tomé y Príncipe';
$string['nationality.sv'] = 'Salvadoreño';
$string['nationality.sy'] = 'Siria';
$string['nationality.sz'] = 'Swazi';
$string['nationality.td'] = 'Chadiana';
$string['nationality.tg'] = 'Togolesa';
$string['nationality.th'] = 'Tailandesa';
$string['nationality.tj'] = 'Tayik';
$string['nationality.tl'] = 'de Timor-Leste';
$string['nationality.tm'] = 'Turcomana';
$string['nationality.tn'] = 'Tunecina';
$string['nationality.to'] = 'Tongana';
$string['nationality.tr'] = 'Turca';
$string['nationality.tt'] = 'de Trinidad y Tabago';
$string['nationality.tv'] = 'Tuvaluana';
$string['nationality.tz'] = 'Tanzana';
$string['nationality.ua'] = 'Ucrania';
$string['nationality.ug'] = 'Ugandesa';
$string['nationality.us'] = 'estadounidense (de los Estados Unidos de América)';
$string['nationality.uy'] = 'Uruguaya';
$string['nationality.uz'] = 'Uzbeka';
$string['nationality.va'] = 'Vaticana';
$string['nationality.vc'] = 'de San Vicente y las Granadinas';
$string['nationality.ve'] = 'Venezolana';
$string['nationality.vn'] = 'Vietnamita';
$string['nationality.vu'] = 'Tuvaluana';
$string['nationality.ws'] = 'Samoano';
$string['nationality.ye'] = 'Yemení';
$string['nationality.za'] = 'Sudafricano';
$string['nationality.zm'] = 'Zambiana';
$string['nationality.zw'] = 'Zimbabwense';

?>
