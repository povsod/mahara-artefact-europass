{include file="header.tpl"}
<link rel="stylesheet" type="text/css" href="{$WWWROOT}artefact/europass/europass.css">
<div id="europassviewlanguagewrap">
<h2>{str tag=$composite section='artefact.europass'}: {str tag='language.$language->language|escape' section='artefact.europass'}</h2>

<table width="100%" class="tablerenderer europasstwo europasslanguage">
    <colgroup width="15%"></colgroup>
    <colgroup width="10%"></colgroup>
    <colgroup width="15%" span="5"></colgroup>
    <thead>
	<tr>
		<th>{str tag='language' section='mahara'}</th>
		<th>ISO</th>
		<th>{str tag='language-foreign-listening-th' section='artefact.europass'}</th>
		<th>{str tag='language-foreign-reading-th' section='artefact.europass'}</th>
		<th>{str tag='language-foreign-spokeninteraction-th' section='artefact.europass'}</th>
		<th>{str tag='language-foreign-spokenproduction-th' section='artefact.europass'}</th>
		<th>{str tag='language-foreign-writing-th' section='artefact.europass'}</th>
	</tr>
    </thead>
    <tbody>
	<tr class="r1">
		<td>{str tag='language.$language->language|escape' section='artefact.europass'}</td>
		<td>{$language->language}</td>
		<td>{$language->listening}</td>
		<td>{$language->reading}</td>
		<td>{$language->spokeninteraction}</td>
		<td>{$language->spokenproduction}</td>
		<td>{$language->writing}</td>
	</tr>
    </tbody>
</table>

<br />
{include file="artefact:europass:fragments/languagediploma.tpl" controls="true"}
{include file="artefact:europass:fragments/languageexperience.tpl" controls="true"}

</div>
{include file="footer.tpl"}
