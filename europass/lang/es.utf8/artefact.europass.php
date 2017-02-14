<?php
/**
 *
 * @package    mahara
 * @subpackage artefact-europass
 * @author     Gregor Anzelj
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL
 * @copyright  (C) 2009-2017 Gregor Anzelj, gregor.anzelj@gmail.com
 *
 * @translator Mari Cruz García
 * @translator Iñaki Arenaza
 *
 */

defined('INTERNAL') || die();

$string['pluginname'] = 'Europass';

$string['europass'] = 'Europass';
$string['europassartefactsaved'] = 'Europass curriculum vitae se salvó con éxito';
$string['europassexportgenerated'] = 'Por favor, espere mientras se genera la exportación...';

$string['languagesaved'] = 'Se salvó el Lenguaje con éxito';
$string['languagesavefailed'] = 'Fallo al salvar lenguaje';
$string['languagedeleteconfirm'] = '¿Está seguro que desea borrar este lenguaje?';
$string['languagedeleted'] = 'Se borró el lenguaje con éxito';
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
$string['exportstep1'] = '1 - Seleccione documento';
$string['attach'] = 'Attachments';
$string['selectlocale'] = 'Languaje';
$string['exportstep2'] = '2 - Seleccione formato';
$string['selectdateformatdesc'] = 'Formato de fecha en export';
$string['selectdateformatdesc2'] = 'Dates are localised according to selected language.';
$string['dateformat-numeric-medium'] = '31/1/2005';
$string['dateformat-numeric-long'] = '31/01/2005';
$string['dateformat-text-short'] = '31 Jan 2005';
$string['dateformat-text-long'] = '31 January 2005';
$string['exportfile'] = 'Fichero';
$string['pdf'] = 'Adobe® PDF + Europass XML';
$string['doc'] = 'Microsoft® Word';
$string['odt'] = 'OpenDocument';
$string['html'] = 'HTML';
$string['xml'] = 'Europass XML';
$string['exportstep3'] = '3 - Exportar';
$string['generateexport'] = 'Exportar';
$string['generateexportdesc'] = 'Generate the Europass document and download it on your computer.';
$string['generaloptions'] = 'General export options';
$string['includelogo'] = 'Include Europass logo?';

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

// Europass ESP
$string['skillsfolder'] = 'Skills passport';
$string['skillsfolderdesc'] = 'Files to document Europass skills';
$string['skillsfolderupload'] = 'Upload file';
$string['skillsfolderuploadnotice'] = 'Create your Skills passport to gather documents such as Language passport, Certificate supplement, copies of degrees or certificates, attestations of employment, etc.';
$string['skillsfolderuploadmaxsize'] = '(Maximum upload size 2.5 MB. Documents uploaded to your Skills passport must be in PNG, JPEG or PDF format.)';
$string['filenotaccepted'] = 'The uploaded document must be a PNG, JPEG or PDF file.';
$string['fileuploadcomplete'] = 'Document upload complete.';
$string['deletefile'] = 'Delete document';
$string['deletefileconfirm'] = 'Are you sure you want to delete this document?';
$string['filechangedsuccessfully'] = 'Document changed successfully.';
$string['filedeletedsuccessfully'] = 'Document deleted successfully.';
$string['editfile'] = 'Edit document';
$string['profilepicinclude'] = 'Include profile picture?';

// Included strings for labels, countries, languages and nationalities
// ===================================================================

// Europass GUI form tabs
$string['ecv-tab'] = 'Currículum vítae';
$string['esp-tab'] = 'Pasaporte de competencias';
$string['elp-tab'] = 'Pasaporte de lenguas';
$string['copyright'] = '© Unión Europea y Consejo de Europa, 2004 - ';

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

// Europass CV - STEP 3
$string['workexperience'] = 'Experiencia laboral';

// Europass CV - STEP 4
$string['education'] = 'Educación y formación';

// Europass CV - STEP 5
$string['mothertongue'] = 'Idioma(s) materno(s)';
$string['otherlanguage'] = 'Otro(s) idioma(s)';

$string['language-understanding'] = 'Comprender';
$string['language-speaking'] = 'Hablar';
$string['language-writing'] = 'Escribir';
$string['language-foreign-listening'] = 'Comprensión auditiva';
$string['language-foreign-reading'] = 'Comprensión de lectura';
$string['language-foreign-spokeninteraction'] = 'Interacción oral';
$string['language-foreign-spokenproduction'] = 'Expresión oral';
$string['language-foreign-writing'] = 'Escribir';
$string['language-foreign-CEF-level'] = 'Nivel del Marco Europeo Común de Referencia (MECR)';

$string['language-foreign-level.A1'] = 'Usuario básico (A1)';
$string['language-foreign-level.A2'] = 'Usuario básico (A2)';
$string['language-foreign-level.B1'] = 'Usuario independiente (B1)';
$string['language-foreign-level.B2'] = 'Usuario independiente (B2)';
$string['language-foreign-level.C1'] = 'Usuario competente (C1)';
$string['language-foreign-level.C2'] = 'Usuario competente (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Permiso de conducir';
$string['categories'] = 'Categorias';

$string['skills'] = 'Capacidades y competencias personales';
$string['socialskill'] = 'Capacidades y aptitudes sociales';
$string['organisationalskill'] = 'Capacidades y aptitudes organizativas';
$string['technicalskill'] = 'Capacidades y aptitudes técnicas';
$string['otherskill'] = 'Otras capacidades y aptitudes';
$string['additionalinfo'] = 'Información adicional';
$string['category'] = 'Categoría';

$string['digitalcompetence'] = 'Competencia digital';
$string['digitalcompetence-other'] = 'Otras competencias informáticas';
$string['digitalcompetence-information'] = 'Tratamiento de la información';
$string['digitalcompetence-communication'] = 'Comunicación';
$string['digitalcompetence-contentcreation'] = 'Creación de contenido';
$string['digitalcompetence-safety'] = 'Seguridad';
$string['digitalcompetence-problemsolving'] = 'Resolución de problemas';
$string['digitalcompetence-DIGCOMP-level'] = 'Competencia digital (DIGCOMP)';

$string['digitalcompetence-level.A'] = 'Usuario básico (A)';
$string['digitalcompetence-level.B'] = 'Usuario independiente (B)';
$string['digitalcompetence-level.C'] = 'Usuario competente (C)';

$string['honors_awards'] = 'Premios y distinciones';
$string['publications'] = 'Publicaciones';
$string['presentations'] = 'Presentaciones';
$string['citations'] = 'Citas';
$string['projects'] = 'Proyectos';
$string['memberships'] = 'Pertenencia grupos/asociaciones';
$string['seminars'] = 'Seminarios';
$string['conferences'] = 'Conferencias';
$string['references'] = 'Referencias';
$string['courses'] = 'Cursos';
$string['certifications'] = 'Certificaciones';

// Europass LP - STEP 2
$string['self-assessment'] = 'Autoevaluación de la capacidad lingüística';
$string['language-diplomas'] = 'Títulos o Certificados';
$string['diploma-title'] = 'Título';
$string['diploma-awardingBody'] = 'Organismo expedidor';
$string['diploma-date'] = 'Fecha';
$string['diploma-level'] = 'Nivel';
$string['language-experiences'] = 'Experiencia lingüística e intercultural';
$string['experiences-description'] = 'Descripción';
$string['experiences-period'] = 'Duración';
$string['experiences-period-from'] = 'Desde';
$string['experiences-period-to'] = 'Hasta';

// List of supported locales in which Europass can be exported...
// The names of languages are localized - there's no need for translation!
$string['locale.bg_BG'] = 'български (bg)';
$string['locale.cs_CZ'] = 'čeština (cs)';
$string['locale.da_DK'] = 'dansk (da)';
$string['locale.de_DE'] = 'Deutsch (de)';
$string['locale.et_EE'] = 'eesti keel (et)';
$string['locale.el_GR'] = 'ελληνικά (el)';
$string['locale.en_GB'] = 'English (en)';
$string['locale.es_ES'] = 'español (es)';
$string['locale.fi_FI'] = 'suomi (fi)';
$string['locale.fr_FR'] = 'français (fr)';
$string['locale.hr_HR'] = 'hrvatski (hr)';
$string['locale.hu_HU'] = 'Magyar (hu)';
$string['locale.is_IS'] = 'íslenska (is)';
$string['locale.it_IT'] = 'italiano (it)';
$string['locale.lt_LT'] = 'lietuvių kalba (lt)';
$string['locale.lv_LV'] = 'latviešu valoda (lv)';
$string['locale.mk_MK'] = 'македонски (mk)';
$string['locale.mt_MT'] = 'Malti (mt)';
$string['locale.nl_NL'] = 'Nederlands (nl)';
$string['locale.no_NO'] = 'Norsk (no)';
$string['locale.pl_PL'] = 'polski (pl)';
$string['locale.pt_PT'] = 'português (pt)';
$string['locale.ro_RO'] = 'română (ro)';
$string['locale.sk_SK'] = 'slovenčina (sk)';
$string['locale.sl_SI'] = 'slovenščina (sl)';
$string['locale.sv_SE'] = 'svenska (sv)';
$string['locale.tr_TR'] = 'türkçe (tr)';

include_once('artefact.europass.countries.php');
include_once('artefact.europass.languages.php');
include_once('artefact.europass.nationalities.php');
