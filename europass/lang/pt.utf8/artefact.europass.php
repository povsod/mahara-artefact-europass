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
 * @translator Direcção de Serviços de Tecnologias Educativas
 * @translator Emanuel Garcês
 * @translator Rosa Silva
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
$string['europassartefactsaved'] = 'O curriculum vitae Europass foi guardado com sucesso';
$string['europassexportgenerated'] = 'Por favor aguarde enquanto a exportação está a ser gerada...';
$string['europassexportnoconncetion'] = 'Ocorreu um erro na conecção ao servidor WSDL. Por favor tente novamente mais tarde.';
$string['europassexportservererror'] = 'Ocorreu um erro no servidor WSDL. Por favor tente novamente mais tarde.';
$string['europassextensionmissing'] = 'Desculpe, não pode o plugin Europass porque na sua instalação do PHP está em falta a seguinte extensão:';
$string['newerversionforcompatibility'] = 'Para melhor performance e compatibilidade deverá actualizar o Mahara para a versão 1.3.0 ou mais recente.';

$string['languagesaved'] = 'Língua guardada com sucesso';
$string['languagesavefailed'] = 'Ocorreu um erro ao guardar a língua';
$string['languagedeleteconfirm'] = 'Tem a certeza que deseja eliminar esta língua?';
$string['languagedeleted'] = 'Língua eliminada com sucesso';

$string['moveup'] = 'Mover para cima';
$string['movedown'] = 'Mover para baixo';

$string['languagediploma'] = 'Diploma de línguas'; 
$string['languageexperience'] = 'Experiência linguística'; 
$string['languagediplomadeleteconfirm'] = 'Tem a certeza que deseja eliminar este diploma de línguas?'; 
$string['languageexperiencedeleteconfirm'] = 'Tem a certeza que deseja eliminar esta experiência línguística?'; 
$string['languagediplomadeleted'] = 'Diploma de línguas eliminado com sucesso'; 
$string['languageexperiencedeleted'] = 'Experiência linguística eliminada com sucesso'; 
$string['languagediplomasaved'] = 'Diploma de línguas salvo com sucesso';  
$string['languagediplomasavefailed'] = 'Ocorreu um erro ao salvar o diploma de línguas'; 
$string['languageexperiencesaved'] = 'Experiência linguística salva com sucesso'; 
$string['languageexperiencesavefailed'] = 'Ocorreu um erro ao salvar o diploma de línguas';  

// Export data from Mahara to Europass form...
$string['exporteuropass'] = 'Exportar Europass';
$string['exportstep1'] = '1 - Língua do documento e o tipo';
$string['selectlocale&type'] = 'Seleccione a língua do documento e o tipo';
$string['selectlocale'] = 'Língua';
$string['selectlocaledesc'] = 'Língua do documento Europass';
$string['selectdocumenttype'] = 'Documento';
$string['europassCV'] = 'Curriculum Vitae (CV) Europass';
$string['europassLP'] = 'Passaporte de Línguas Europass';
$string['photograph'] = 'Fotografia';
$string['photographdesc'] = 'A fotografia será embebida no Europass XML';
$string['phototoolarge'] = 'Ficheiro muito grande. O tamanho do ficheiro não pode exceder os 100 kB.';
$string['exportstep2'] = '2 - Formato do documento';
$string['selectfiletype'] = 'Selecione o formato do ficheiro e da data';
$string['exportdate'] = 'Data';
$string['internaldateformat'] = 'Formato de Data Interno';
$string['selectinternaldatedesc'] = 'Formato de data utilizado pelo Mahara';
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
$string['internaldate-other'] = 'outro';
$string['externaldateformat'] = 'Formato de Data Externo';
$string['selectexternaldatedesc'] = 'Formato de data usado na exportação';
$string['externaldate-numeric-long'] = 'dd/mm/aaaa';
$string['externaldate-text-long'] = 'dd. mês aaaa';
$string['exportfile'] = 'Ficheiro';
$string['pdf'] = 'Adobe® PDF + XML';
$string['pdfhrxml'] = 'Adobe® PDF + HR-XML';
$string['doc'] = 'Microsoft® Word';
$string['odt'] = 'OpenDocument';
$string['html'] = 'HTML';
$string['json'] = 'Europass JSON';
$string['xml'] = 'Europass XML';
$string['hrxml'] = 'HR-XML';
$string['exportstep3'] = '3 - Exportar';
$string['generate'] = 'Gerar exportação';
$string['generateexport'] = 'Exportar';

// Import data from Europass XML to Mahara...
$string['importeuropass'] = 'Importar Europass'; 
$string['importstep1'] = '1 - Importar ficheiros e opções'; 
$string['selectfile&options'] = 'Enviar ficheiro Europass XML e selecionar opções de importação'; 
$string['importstep2'] = '2 - Importar'; 
$string['execute'] = 'Realizar importação'; 
$string['executeimport'] = 'Importar'; 
$string['importfile'] = 'Ficheiro Europass XML';
$string['importfiledesc'] = 'Selecione um ficheiro Europass XML válido para importar para o Mahara'; 
$string['notvalidxmlfile'] = 'O ficheiro enviado não é um ficheiro XML válio.'; 
$string['importoptions'] = 'O que importar?'; 
$string['importoptionsdesc'] = 'Locked profile fields will not be changed/updated'; 
$string['nocheckedoptions'] = 'Os campos de perfil bloqueados não serão alterados/atualizados.';
$string['fieldnotimported'] = 'O campo "%s" não foi importado.';
$string['lockedfieldnotimported'] = 'O campo bloqueado "%s" não foi importado.';
$string['languagecodemissing'] = 'O campo "%s" não foi importado. O código de língua está em falta.'; 
$string['importdate'] = 'Importar datas como'; 
$string['europassimportexecuted'] = 'O dados do Europass XML foram importados com sucesso no Mahara.'; 

// Europass GUI form tabs
$string['application-tab'] = 'Aplicação';
$string['workexperience-tab'] = 'Emprego';
$string['education-tab'] = 'Educação'; 
$string['languages-tab'] = 'Línguas'; 
$string['skills-tab'] = 'Aptidões'; 

// Europass CV - STEP 1
$string['identification'] = 'Informação pessoal';
$string['identification-birthdate'] = 'Data de nascimento';
$string['identification-birthplace'] = 'Naturalidade';
$string['identification-lastname'] = 'Apelido(s)';
$string['identification-firstname'] = 'Nome(s) próprio(s)';
$string['identification-addressLine'] = 'Rua / Número';
$string['identification-municipality'] = 'Cidade';
$string['identification-postalCode'] = 'Código postal';
$string['identification-country'] = 'País';
$string['identification-contactinfo-telephone'] = 'Telefone(s)';
$string['identification-contactinfo-mobile'] = 'Telemóvel';
$string['identification-contactinfo-fax'] = 'Fax';
$string['identification-contactinfo-email'] = 'Correio(s) electrónico(s)';
$string['identification-nationality'] = 'Nacionalidade';
$string['identification-gender'] = 'Sexo';

// Europass CV - STEP 2
$string['application'] = 'Emprego pretendido / Área de competência';

// Europass CV - STEP 3
$string['workexperience'] = 'Experiência profissional';

// Europass CV - STEP 4
$string['education'] = 'Educação e formação';

// Europass CV - STEP 5
$string['mothertongue'] = 'Língua(s) materna(s)';
$string['otherlanguage'] = 'Outra(s) língua(s)';

$string['language-foreign-listening'] = 'Compreensão oral';
$string['language-foreign-listening-th'] = 'Compreensão<br>oral';
$string['language-foreign-reading'] = 'Leitura';
$string['language-foreign-reading-th'] = 'Leitura';
$string['language-foreign-spokeninteraction'] = 'Interacção oral';
$string['language-foreign-spokeninteraction-th'] = 'Interacção<br>oral';
$string['language-foreign-spokenproduction'] = 'Produção oral';
$string['language-foreign-spokenproduction-th'] = 'Produção<br>oral';
$string['language-foreign-writing'] = 'Escrita';
$string['language-foreign-writing-th'] = 'Escrita';
$string['language-foreign-CEF-level'] = 'Nível do Quadro Europeu Comum de Referência (CECR)';

$string['language-foreign-level.A1'] = 'Utilizador básico (A1)';
$string['language-foreign-level.A2'] = 'Utilizador básico (A2)';
$string['language-foreign-level.B1'] = 'Utilizador independente (B1)';
$string['language-foreign-level.B2'] = 'Utilizador independente (B2)';
$string['language-foreign-level.C1'] = 'Utilizador avançado (C1)';
$string['language-foreign-level.C2'] = 'Utilizador avançado (C2)';

// Europass CV - STEP 6
$string['drivinglicence'] = 'Carta(s) de condução';
$string['skills-and-competences'] = 'Aptidões e competências pessoais';
$string['socialskill'] = 'Aptidões e competências sociais';
$string['organisationalskill'] = 'Aptidões e competências de organização';
$string['technicalskill'] = 'Aptidões e competências técnicas';
$string['computerskill'] = 'Aptidões e competências informáticas';
$string['artisticskill'] = 'Aptidões e competências artísticas';
$string['otherskill'] = 'Outras aptidões e competências';
$string['additionalinfo'] = 'Informação adicional';
$string['annexes'] = 'Anexos';

// Europass LP - STEP 2
$string['language-certificates'] = 'Diploma(s) ou certificado(s)';
$string['diploma-title'] = 'Título';
$string['diploma-awardingBody'] = 'Organismo outorgante';
$string['diploma-date'] = 'Data';
$string['diploma-level'] = 'Nível europeu';
$string['language-experiences'] = 'Experiência(s) linguística(s)';
$string['experiences-period-from'] = 'De';
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
$string['language.ab'] = 'Abcaze';
$string['language.af'] = 'Afrikaans';
$string['language.an'] = 'Aragonês';
$string['language.ar'] = 'Árabe';
$string['language.as'] = 'Assamês';
$string['language.az'] = 'Azeri';
$string['language.be'] = 'Bielorusso';
$string['language.bg'] = 'Búlgaro';
$string['language.bn'] = 'Bengali';
$string['language.bo'] = 'Tibetano';
$string['language.br'] = 'Bretão';
$string['language.bs'] = 'Bósnio';
$string['language.ca'] = 'Catalão / Valenciano';
$string['language.ce'] = 'Tchetcheno';
$string['language.co'] = 'Corso';
$string['language.cs'] = 'Checo';
$string['language.cy'] = 'Galês';
$string['language.da'] = 'Dinamarquês';
$string['language.de'] = 'Alemão';
$string['language.el'] = 'Grego';
$string['language.en'] = 'Inglês';
$string['language.es'] = 'Espanhol / Castelhano';
$string['language.et'] = 'Estónio';
$string['language.eu'] = 'Basco';
$string['language.fa'] = 'Persa';
$string['language.fi'] = 'Finlandês';
$string['language.fj'] = 'Fidjiano';
$string['language.fo'] = 'Feroês';
$string['language.fr'] = 'Francês';
$string['language.fy'] = 'Frísio Ocidental';
$string['language.ga'] = 'Irlandês';
$string['language.gd'] = 'Gaélico / Gaélico Escocês';
$string['language.gl'] = 'Galego';
$string['language.gv'] = 'Manx';
$string['language.he'] = 'Hebraico';
$string['language.hi'] = 'Hindi';
$string['language.hr'] = 'Croata';
$string['language.ht'] = 'Haitiano; Criolo Haitiano';
$string['language.hu'] = 'Húngaro';
$string['language.hy'] = 'Arménio';
$string['language.id'] = 'Indonésio';
$string['language.is'] = 'Islandês';
$string['language.it'] = 'Italiano';
$string['language.ja'] = 'Japonês';
$string['language.jv'] = 'Javanês';
$string['language.ka'] = 'Geórgio';
$string['language.kg'] = 'Congo';
$string['language.ko'] = 'Coreano';
$string['language.ku'] = 'Curdo';
$string['language.kw'] = 'Córnico';
$string['language.ky'] = 'Quirguize';
$string['language.lb'] = 'Luxemburguês';
$string['language.li'] = 'Limburguês';
$string['language.ln'] = 'Lingala';
$string['language.lt'] = 'Lituano';
$string['language.lv'] = 'Letão';
$string['language.mg'] = 'Malgache';
$string['language.mk'] = 'Macedónio';
$string['language.mn'] = 'Mongol';
$string['language.mo'] = 'Moldavo';
$string['language.ms'] = 'Malaio';
$string['language.mt'] = 'Maltês';
$string['language.my'] = 'Birmanês';
$string['language.nb'] = 'Norueguês (Bokmål)';
$string['language.ne'] = 'Nepalês';
$string['language.nl'] = 'Neerlandês';
$string['language.nn'] = 'Norueguês (Nynors)';
$string['language.no'] = 'Norueguês';
$string['language.pl'] = 'Polaco';
$string['language.pt'] = 'Português';
$string['language.rm'] = 'Reto-Romano';
$string['language.ro'] = 'Romeno';
$string['language.ru'] = 'Russo';
$string['language.r0'] = 'Romani'; // doesn't really have an ISO 369-1 code...
$string['language.sc'] = 'Sardo';
$string['language.se'] = 'Sami Setentrional';
$string['language.sk'] = 'Eslovaco';
$string['language.sl'] = 'Eslovénio';
$string['language.so'] = 'Somali';
$string['language.sq'] = 'Albanês';
$string['language.sr'] = 'Sérvio';
$string['language.sv'] = 'Sueco';
$string['language.sw'] = 'Swahili';
$string['language.tk'] = 'Turquemeno';
$string['language.tr'] = 'Turco';
$string['language.ty'] = 'Taitiano';
$string['language.uk'] = 'Ucraniano';
$string['language.ur'] = 'Urdu';
$string['language.uz'] = 'Uzbeque';
$string['language.vi'] = 'Vietnamita';
$string['language.yi'] = 'Yiddish';
$string['language.zh'] = 'Chinês';
$string['language.cu'] = 'Eslavo de Igreja';
$string['language.eo'] = 'Esperanto';
$string['language.la'] = 'Latim';
$string['language.oc'] = 'Occitânio (pós-1500); Provençal';
$string['language.vo'] = 'Volapük';
// ISO 639-1:2002 languages that had been left out by Europass
$string['language.aa'] = 'Língua afar';
$string['language.ae'] = 'Avestan';
$string['language.ak'] = 'Akan';
$string['language.am'] = 'Amárico';
$string['language.av'] = 'Avárico';
$string['language.ay'] = 'Aimará';
$string['language.ba'] = 'Baxequir';
$string['language.bh'] = 'Biari';
$string['language.bi'] = 'Bislamá bichlamar';
$string['language.bm'] = 'Bâmbara';
$string['language.ch'] = 'Chamorro';
$string['language.cr'] = 'Cree';
$string['language.cv'] = 'Chuvash';
$string['language.dv'] = 'Divehi; Maldívio';
$string['language.dz'] = 'Dzongkha; Zoncá';
$string['language.ee'] = 'Éwé ou Jeje';
$string['language.ff'] = 'Fula';
$string['language.gn'] = 'Guarani';
$string['language.gu'] = 'Gujarati; Guzerate';
$string['language.ha'] = 'Hauçá';
$string['language.ho'] = 'Hiri motu';
$string['language.hz'] = 'Hereró';
$string['language.ia'] = 'Interlíngua';
$string['language.ig'] = 'Ibo';
$string['language.ii'] = 'Yi de Sichuan';
$string['language.ik'] = 'Inupiaq';
$string['language.io'] = 'Ido';
$string['language.iu'] = 'Inuktitut';
$string['language.ki'] = 'Hikuyu; Gikuyu';
$string['language.kj'] = 'Cuanhama';
$string['language.kk'] = 'Cazaque';
$string['language.kl'] = 'Groenlandês';
$string['language.km'] = 'Khmer';
$string['language.kn'] = 'Kannada';
$string['language.kr'] = 'Canúri';
$string['language.ks'] = 'Cachemir';
$string['language.kv'] = 'Komi';
$string['language.lg'] = 'Ganda';
$string['language.lo'] = 'Laociano';
$string['language.lu'] = 'Luba-Katanga';
$string['language.mh'] = 'Marshallês';
$string['language.mi'] = 'Maori';
$string['language.ml'] = 'Malaiala';
$string['language.mr'] = 'Marata';
$string['language.na'] = 'Nauru';
$string['language.nd'] = 'Ndebele do norte';
$string['language.ng'] = 'Ndonga';
$string['language.nr'] = 'Ndebele do sul';
$string['language.nv'] = 'Navajo; Navaho';
$string['language.ny'] = 'Cinyanja; Chewa; Nyanja';
$string['language.oj'] = 'Ojibwa';
$string['language.om'] = 'Oromo';
$string['language.or'] = 'Oriya';
$string['language.os'] = 'Ossetic';
$string['language.pa'] = 'Punjabi';
$string['language.pi'] = 'Pali';
$string['language.ps'] = 'Pashto';
$string['language.qu'] = 'Quechua; Quéchua';
$string['language.rn'] = 'Rundi';
$string['language.rw'] = 'Kinyaruanda';
$string['language.sa'] = 'Sânscrito';
$string['language.sd'] = 'Sindhi';
$string['language.sg'] = 'Sango';
$string['language.si'] = 'Sinhalês';
$string['language.sm'] = 'Samoa';
$string['language.sn'] = 'Chona';
$string['language.ss'] = 'Swati';
$string['language.st'] = 'SeSotho do sul';
$string['language.su'] = 'Sundanês';
$string['language.ta'] = 'Tâmil';
$string['language.te'] = 'Telugu';
$string['language.tg'] = 'Tadjique';
$string['language.th'] = 'Tailandês';
$string['language.ti'] = 'Tigrinya';
$string['language.tl'] = 'Tagalo';
$string['language.tn'] = 'Tswana';
$string['language.to'] = 'Tonganês (das Ilhas Tonga)';
$string['language.ts'] = 'ChiTsonga; XiTsonga; ShiTsonga';
$string['language.tt'] = 'Tártaro';
$string['language.tw'] = 'Twi';
$string['language.ug'] = 'Uigure';
$string['language.ve'] = 'Venda';
$string['language.wa'] = 'Valão';
$string['language.wo'] = 'Wolof';
$string['language.xh'] = 'Xhosa';
$string['language.yo'] = 'Iorubá; Yoruba';
$string['language.za'] = 'Zhuang; Chuang';
$string['language.zu'] = 'Zulu';

// ISO 3166-1-alpha-2 filtered by Europass 
// (http://www.iso.org/iso/country_codes/iso_3166_code_lists/english_country_names_and_code_elements.htm)
$string['country.ad'] = 'Andora';
$string['country.ae'] = 'Emiratos Árabes Unidos';
$string['country.af'] = 'Afeganistão';
$string['country.ag'] = 'Antígua e Barbuda';
$string['country.al'] = 'Albânia';
$string['country.am'] = 'Arménia';
$string['country.ao'] = 'Angola';
$string['country.ar'] = 'Argentina';
$string['country.at'] = 'Áustria';
$string['country.au'] = 'Austrália';
$string['country.az'] = 'Azerbeijão';
$string['country.ba'] = 'Bósnia-Herzegovina';
$string['country.bb'] = 'Barbados';
$string['country.bd'] = 'Bangladesh';
$string['country.be'] = 'Bélgica';
$string['country.bf'] = 'Burkina Faso';
$string['country.bg'] = 'Bulgária';
$string['country.bh'] = 'Bahrain';
$string['country.bi'] = 'Burundi';
$string['country.bj'] = 'Benin';
$string['country.bn'] = 'Brunei';
$string['country.bo'] = 'Bolívia';
$string['country.br'] = 'Brasil';
$string['country.bs'] = 'Bahamas';
$string['country.bt'] = 'Butão';
$string['country.bw'] = 'Botswana';
$string['country.by'] = 'Bielo-Rússia';
$string['country.bz'] = 'Belize';
$string['country.ca'] = 'Canadá';
$string['country.cd'] = 'República Democrática do Congo';
$string['country.cf'] = 'República Centro-Africana';
$string['country.cg'] = 'República do Congo';
$string['country.ch'] = 'Suíça';
$string['country.ci'] = 'Costa do Marfim';
$string['country.cl'] = 'Chile';
$string['country.cm'] = 'Camarões';
$string['country.cn'] = 'China';
$string['country.co'] = 'Colômbia';
$string['country.cr'] = 'Costa Rica';
$string['country.cu'] = 'Cuba';
$string['country.cv'] = 'Cabo Verde';
$string['country.cy'] = 'Chipre';
$string['country.cz'] = 'República Checa';
$string['country.de'] = 'Alemanha';
$string['country.dj'] = 'Djibouti';
$string['country.dk'] = 'Dinamarca';
$string['country.dm'] = 'Domínica';
$string['country.do'] = 'República Dominicana';
$string['country.dz'] = 'Argélia';
$string['country.ec'] = 'Equador';
$string['country.ee'] = 'Estónia';
$string['country.eg'] = 'Egipto';
$string['country.er'] = 'Eritreia';
$string['country.es'] = 'Espanha';
$string['country.et'] = 'Etiópia';
$string['country.fi'] = 'Finlândia';
$string['country.fj'] = 'Fiji';
$string['country.fm'] = 'Micronésia';
$string['country.fr'] = 'França';
$string['country.ga'] = 'Gabão';
$string['country.gb'] = 'Reino Unido';
$string['country.gd'] = 'Grenada';
$string['country.ge'] = 'Geórgia';
$string['country.gh'] = 'Gana';
$string['country.gl'] = 'Gronelândia';
$string['country.gm'] = 'Gâmbia';
$string['country.gn'] = 'Guiné-Conacri';
$string['country.gq'] = 'Guiné Equatorial';
$string['country.gr'] = 'Grécia';
$string['country.gt'] = 'Guatemala';
$string['country.gw'] = 'Guiné-Bissau';
$string['country.gy'] = 'Guiana';
$string['country.hn'] = 'Honduras';
$string['country.hr'] = 'Croácia';
$string['country.ht'] = 'Haiti';
$string['country.hu'] = 'Hungria';
$string['country.id'] = 'Indonésia';
$string['country.ie'] = 'Irlanda';
$string['country.il'] = 'Israel';
$string['country.in'] = 'Índia';
$string['country.iq'] = 'Iraque';
$string['country.ir'] = 'Irão';
$string['country.is'] = 'Islândia';
$string['country.it'] = 'Itália';
$string['country.jm'] = 'Jamaica';
$string['country.jo'] = 'Jordânia';
$string['country.jp'] = 'Japão';
$string['country.ke'] = 'Quénia';
$string['country.kg'] = 'Quirguistão';
$string['country.kh'] = 'Cambodja';
$string['country.ki'] = 'Quiribati';
$string['country.km'] = 'Comores';
$string['country.kn'] = 'São Cristóvão e Nevis';
$string['country.kp'] = 'Coreia, República Democrática da (Coreia do Norte)';
$string['country.kr'] = 'Coreia do Sul';
$string['country.kw'] = 'Koweit';
$string['country.kz'] = 'Cazaquistão';
$string['country.la'] = 'Laos';
$string['country.lb'] = 'Líbano';
$string['country.lc'] = 'Santa Lúcia';
$string['country.li'] = 'Liechtenstein';
$string['country.lk'] = 'Sri Lanka';
$string['country.lr'] = 'Libéria';
$string['country.ls'] = 'Lesoto';
$string['country.lt'] = 'Lituânia';
$string['country.lu'] = 'Luxemburgo';
$string['country.lv'] = 'Letónia';
$string['country.ly'] = 'Líbia';
$string['country.ma'] = 'Marrocos';
$string['country.mc'] = 'Mónaco';
$string['country.md'] = 'Moldávia';
$string['country.me'] = 'Montenegro';
$string['country.mg'] = 'Madagáscar';
$string['country.mh'] = 'Ilhas Marshall';
$string['country.mk'] = 'antiga República jugoslava da Macedónia';
$string['country.ml'] = 'Mali';
$string['country.mm'] = 'Mianmar';
$string['country.mn'] = 'Mongólia';
$string['country.mr'] = 'Mauritânia';
$string['country.mt'] = 'Malta';
$string['country.mu'] = 'Maurícias';
$string['country.mv'] = 'Maldivas';
$string['country.mw'] = 'Malaui';
$string['country.mx'] = 'México';
$string['country.my'] = 'Malásia';
$string['country.mz'] = 'Moçambique';
$string['country.na'] = 'Namíbia';
$string['country.ne'] = 'Níger';
$string['country.ng'] = 'Nigéria';
$string['country.ni'] = 'Nicarágua';
$string['country.nl'] = 'Países Baixos';
$string['country.no'] = 'Noruega';
$string['country.np'] = 'Nepal';
$string['country.nr'] = 'Nauru';
$string['country.nu'] = 'Niue';
$string['country.nz'] = 'Nova Zelândia';
$string['country.om'] = 'Oman';
$string['country.pa'] = 'Panamá';
$string['country.pe'] = 'Peru';
$string['country.pg'] = 'Papua-Nova Guiné';
$string['country.ph'] = 'Filipinas';
$string['country.pk'] = 'Paquistão';
$string['country.pl'] = 'Polónia';
$string['country.pr'] = 'Porto Rico';
$string['country.ps'] = 'Territórios autónomos palestinianos';
$string['country.pt'] = 'Portugal';
$string['country.pw'] = 'Palau';
$string['country.py'] = 'Paraguai';
$string['country.qa'] = 'Qatar';
$string['country.ro'] = 'Roménia';
$string['country.rs'] = 'Sérvia';
$string['country.ru'] = 'Rússia';
$string['country.rw'] = 'Ruanda';
$string['country.sa'] = 'Arábia Saudita';
$string['country.sb'] = 'Salomão, Ilhas';
$string['country.sc'] = 'Seychelles';
$string['country.sd'] = 'Sudão';
$string['country.se'] = 'Suécia';
$string['country.sg'] = 'Singapura';
$string['country.si'] = 'Eslovénia';
$string['country.sk'] = 'Eslováquia';
$string['country.sl'] = 'Serra Leoa';
$string['country.sm'] = 'São Marinho';
$string['country.sn'] = 'Senegal';
$string['country.so'] = 'Somália';
$string['country.sr'] = 'Suriname';
$string['country.st'] = 'São Tomé e Príncipe';
$string['country.sv'] = 'El Salvador';
$string['country.sy'] = 'Síria';
$string['country.sz'] = 'Suazilândia';
$string['country.td'] = 'Chade';
$string['country.tg'] = 'Togo';
$string['country.th'] = 'Tailândia';
$string['country.tj'] = 'Tajiquistão';
$string['country.tl'] = 'Timor Leste';
$string['country.tm'] = 'Turquemenistão';
$string['country.tn'] = 'Tunísia';
$string['country.to'] = 'Tonga';
$string['country.tr'] = 'Turquia';
$string['country.tt'] = 'Trindade e Tobago';
$string['country.tv'] = 'Tuvalu';
$string['country.tz'] = 'Tanzânia';
$string['country.ua'] = 'Ucrânia';
$string['country.ug'] = 'Uganda';
$string['country.us'] = 'Estados Unidos da América';
$string['country.uy'] = 'Uruguai';
$string['country.uz'] = 'Usbequistão';
$string['country.va'] = 'Vaticano';
$string['country.vc'] = 'São Vicente e Granadinas';
$string['country.ve'] = 'Venezuela';
$string['country.vn'] = 'Vietname';
$string['country.vu'] = 'Vanuatu';
$string['country.ws'] = 'Samoa';
$string['country.ye'] = 'Iémen';
$string['country.za'] = 'África do Sul';
$string['country.zm'] = 'Zâmbia';
$string['country.zw'] = 'Zimbabwé';

// List of nationalities based on the ISO 3166-1-alpha-2 filtered by Europass country list
// (http://europass.cedefop.europa.eu/TechnicalResources/XML/xsd/included_schemas/EUROPASS_Nationalities_V1.0.xsd)
$string['nationality.ad'] = '';
$string['nationality.ae'] = 'Emiratos Árabes Unidos';
$string['nationality.af'] = 'Afeganistão';
$string['nationality.ag'] = '';
$string['nationality.al'] = 'Albânia';
$string['nationality.am'] = 'Arménia';
$string['nationality.ao'] = 'Angola';
$string['nationality.ar'] = 'Argentina';
$string['nationality.at'] = 'Áustria';
$string['nationality.au'] = 'Austrália';
$string['nationality.az'] = 'Azerbeijão';
$string['nationality.ba'] = 'Bósnia-Herzegovina';
$string['nationality.bb'] = '';
$string['nationality.bd'] = 'Bangladesh';
$string['nationality.be'] = 'Bélgica';
$string['nationality.bf'] = 'Burkina Faso';
$string['nationality.bg'] = 'Bulgária';
$string['nationality.bh'] = 'Bahrain';
$string['nationality.bi'] = 'Burundi';
$string['nationality.bj'] = 'Benin';
$string['nationality.bn'] = '';
$string['nationality.bo'] = 'Bolívia';
$string['nationality.br'] = 'Brasil';
$string['nationality.bs'] = '';
$string['nationality.bt'] = 'Butão';
$string['nationality.bw'] = 'Botswana';
$string['nationality.by'] = 'Bielo-Rússia';
$string['nationality.bz'] = '';
$string['nationality.ca'] = 'Canadá';
$string['nationality.cd'] = 'Congo, República Democrática do (antigo Zaire)';
$string['nationality.cf'] = 'Centro-africana, República';
$string['nationality.cg'] = 'Congo';
$string['nationality.ch'] = 'Suíça';
$string['nationality.ci'] = 'Costa do Marfim';
$string['nationality.cl'] = 'Chile';
$string['nationality.cm'] = 'Camarões';
$string['nationality.cn'] = 'China';
$string['nationality.co'] = 'Colômbia';
$string['nationality.cr'] = 'Costa Rica';
$string['nationality.cu'] = 'Cuba';
$string['nationality.cv'] = 'Cabo Verde';
$string['nationality.cy'] = 'Chipre';
$string['nationality.cz'] = 'Checa, República';
$string['nationality.de'] = 'Alemanha';
$string['nationality.dj'] = 'Djibouti';
$string['nationality.dk'] = 'Dinamarca';
$string['nationality.dm'] = '';
$string['nationality.do'] = 'Dominicana, República';
$string['nationality.dz'] = 'Argélia';
$string['nationality.ec'] = 'Equador';
$string['nationality.ee'] = 'Estónia';
$string['nationality.eg'] = 'Egipto';
$string['nationality.er'] = 'Eritreia';
$string['nationality.es'] = 'Espanha';
$string['nationality.et'] = 'Etiópia';
$string['nationality.fi'] = 'Finlândia';
$string['nationality.fj'] = 'Fiji';
$string['nationality.fm'] = 'Micronésia, Estados Federados da';
$string['nationality.fr'] = 'França';
$string['nationality.ga'] = 'Gabão';
$string['nationality.gb'] = 'Reino Unido da Grã-Bretanha e Irlanda do Norte';
$string['nationality.gd'] = '';
$string['nationality.ge'] = 'Geórgia';
$string['nationality.gh'] = 'Gana';
$string['nationality.gl'] = '';
$string['nationality.gm'] = 'Gâmbia';
$string['nationality.gn'] = 'Guiné-Conacri';
$string['nationality.gq'] = 'Guiné Equatorial';
$string['nationality.gr'] = 'Grécia';
$string['nationality.gt'] = 'Guatemala';
$string['nationality.gw'] = 'Guiné-Bissau';
$string['nationality.gy'] = 'Guiana';
$string['nationality.hn'] = 'Honduras';
$string['nationality.hr'] = 'Croácia';
$string['nationality.ht'] = 'Haiti';
$string['nationality.hu'] = 'Hungria';
$string['nationality.id'] = 'Indonésia';
$string['nationality.ie'] = 'Irlanda';
$string['nationality.il'] = 'Israel';
$string['nationality.in'] = 'Índia';
$string['nationality.iq'] = 'Iraque';
$string['nationality.ir'] = 'Irão';
$string['nationality.is'] = 'Islândia';
$string['nationality.it'] = 'Itália';
$string['nationality.jm'] = 'Jamaica';
$string['nationality.jo'] = 'Jordânia';
$string['nationality.jp'] = 'Japão';
$string['nationality.ke'] = 'Quénia';
$string['nationality.kg'] = 'Quirguistão';
$string['nationality.kh'] = 'Cambodja';
$string['nationality.ki'] = '';
$string['nationality.km'] = 'Comores';
$string['nationality.kn'] = '';
$string['nationality.kp'] = 'Coreia, República Democrática da (Coreia do Norte)';
$string['nationality.kr'] = 'Coreia do Sul';
$string['nationality.kw'] = 'Koweit';
$string['nationality.kz'] = 'Cazaquistão';
$string['nationality.la'] = 'Laos';
$string['nationality.lb'] = 'Líbano';
$string['nationality.lc'] = '';
$string['nationality.li'] = 'Liechtenstein';
$string['nationality.lk'] = 'Sri Lanka';
$string['nationality.lr'] = 'Libéria';
$string['nationality.ls'] = 'Lesoto';
$string['nationality.lt'] = 'Lituânia';
$string['nationality.lu'] = 'Luxemburgo';
$string['nationality.lv'] = 'Letónia';
$string['nationality.ly'] = 'Líbia';
$string['nationality.ma'] = 'Marrocos';
$string['nationality.mc'] = 'Mónaco';
$string['nationality.md'] = 'Moldávia';
$string['nationality.me'] = '';
$string['nationality.mg'] = 'Madagáscar';
$string['nationality.mh'] = '';
$string['nationality.mk'] = 'da antiga República jugoslava da Macedónia';
$string['nationality.ml'] = 'Mali';
$string['nationality.mm'] = 'Myanmar';
$string['nationality.mn'] = 'Mongólia';
$string['nationality.mr'] = 'Mauritânia';
$string['nationality.mt'] = 'Malta';
$string['nationality.mu'] = 'Maurícias';
$string['nationality.mv'] = '';
$string['nationality.mw'] = 'Malaui';
$string['nationality.mx'] = 'México';
$string['nationality.my'] = 'Malásia';
$string['nationality.mz'] = 'Moçambique';
$string['nationality.na'] = 'Namíbia';
$string['nationality.ne'] = 'Níger';
$string['nationality.ng'] = 'Nigéria';
$string['nationality.ni'] = 'Nicarágua';
$string['nationality.nl'] = 'Holanda (Países Baixos)';
$string['nationality.no'] = 'Noruega';
$string['nationality.np'] = 'Nepal';
$string['nationality.nr'] = '';
$string['nationality.nu'] = '';
$string['nationality.nz'] = 'Nova Zelândia (Aotearoa)';
$string['nationality.om'] = 'Oman';
$string['nationality.pa'] = 'Panamá';
$string['nationality.pe'] = 'Peru';
$string['nationality.pg'] = 'Papua-Nova Guiné';
$string['nationality.ph'] = 'Filipinas';
$string['nationality.pk'] = 'Paquistão';
$string['nationality.pl'] = 'Polónia';
$string['nationality.pr'] = 'Porto Rico';
$string['nationality.ps'] = '';
$string['nationality.pt'] = 'Portugal';
$string['nationality.pw'] = '';
$string['nationality.py'] = 'Paraguai';
$string['nationality.qa'] = 'Qatar';
$string['nationality.ro'] = 'Roménia';
$string['nationality.rs'] = 'Sérvia e Montenegro';
$string['nationality.ru'] = 'Rússia';
$string['nationality.rw'] = 'Ruanda';
$string['nationality.sa'] = 'Arábia Saudita';
$string['nationality.sb'] = 'Salomão, Ilhas';
$string['nationality.sc'] = '';
$string['nationality.sd'] = 'Sudão';
$string['nationality.se'] = 'Suécia';
$string['nationality.sg'] = 'Singapura';
$string['nationality.si'] = 'Eslovénia';
$string['nationality.sk'] = 'Eslováquia';
$string['nationality.sl'] = 'Serra Leoa';
$string['nationality.sm'] = '';
$string['nationality.sn'] = 'Senegal';
$string['nationality.so'] = 'Somália';
$string['nationality.sr'] = '';
$string['nationality.st'] = '';
$string['nationality.sv'] = 'El Salvador';
$string['nationality.sy'] = 'Síria';
$string['nationality.sz'] = 'Suazilândia';
$string['nationality.td'] = 'Chade';
$string['nationality.tg'] = 'Togo';
$string['nationality.th'] = 'Tailândia';
$string['nationality.tj'] = 'Tajiquistão';
$string['nationality.tl'] = 'Timor Leste (Timor Lorosae)';
$string['nationality.tm'] = 'Turquemenistão';
$string['nationality.tn'] = 'Tunísia';
$string['nationality.to'] = '';
$string['nationality.tr'] = 'Turquia';
$string['nationality.tt'] = 'Trindade e Tobago';
$string['nationality.tv'] = '';
$string['nationality.tz'] = 'Tanzânia';
$string['nationality.ua'] = 'Ucrânia';
$string['nationality.ug'] = 'Uganda';
$string['nationality.us'] = 'Estados Unidos da América';
$string['nationality.uy'] = 'Uruguai';
$string['nationality.uz'] = 'Usbequistão';
$string['nationality.va'] = 'Vaticano';
$string['nationality.vc'] = '';
$string['nationality.ve'] = 'Venezuela';
$string['nationality.vn'] = 'Vietname';
$string['nationality.vu'] = '';
$string['nationality.ws'] = '';
$string['nationality.ye'] = 'Iémen';
$string['nationality.za'] = 'África do Sul';
$string['nationality.zm'] = 'Zâmbia';
$string['nationality.zw'] = 'Zimbabwé';

?>
