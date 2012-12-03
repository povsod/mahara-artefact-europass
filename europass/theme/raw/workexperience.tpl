{include file="header.tpl"}

{if $missingextensions}
<p>{str tag='europassextensionmissing' section='artefact.europass'}</p>
<ul>
{foreach from=$missingextensions item=extension}
    <li><a href="http://www.php.net/{$extension|escape}">{$extension|escape}</a></li>
{/foreach}
</ul>
{else}
<link rel="stylesheet" type="text/css" href="{$WWWROOT}artefact/europass/europass.css">
<div id="europasswrap">
{include file="buttons.tpl"}

{if $mahararelease}<div id="messages"><div class="info">
{str tag='newerversionforcompatibility' section='artefact.europass'}
</div></div>{/if}
<div style="background:#0373B5;"><img src="{$topbanner}"></div>

<fieldset>{if !$hidetitle}<legend class="europassh3">{str tag='workexperience' section='artefact.europass'}
</legend>{/if}
<table width="100%" id="workexperiencelist{$suffix}" class="tablerenderer resumefive resumecomposite">
    <colgroup width="150" span="2"></colgroup>
    <thead>
        <tr>
            <th class="europassdate">{str tag='startdate' section='artefact.resume'}</th>
            <th class="europassdate">{str tag='enddate' section='artefact.resume'}</th>
            <th>{str tag='position' section='artefact.resume'}</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$employment_data item=employment}
        <tr class="{cycle values='r0,r1'}">
            <td>{$employment->startdate|escape}</td>
            <td>{$employment->enddate|escape}</td>
            <td>{$employment->jobtitle} : {$employment->employer}</td>
        </tr>
        {/foreach}
	</tbody>
</table>
<div>
	<button id="editemploymenthistorybutton" onclick="window.location='{$employmentlocation}';">{str tag='edit'}</button>
</div>
</fieldset>

<div><img src="{$rightlogo}" align="right"></div>
</div>
{/if}

{include file="footer.tpl"}
