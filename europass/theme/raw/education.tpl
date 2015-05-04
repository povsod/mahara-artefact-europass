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
{include file="artefact:europass:buttons.tpl"}

{if $mahararelease}<div id="messages"><div class="info">
{str tag='newerversionforcompatibility' section='artefact.europass'}
</div></div>{/if}
<div style="background:#0373B5;"><img src="{$topbanner}"></div>

<fieldset>{if !$hidetitle}<legend class="europassh3">{str tag='education' section='artefact.europass'}
</legend>{/if}
<table width="100%" id="educationhistorylist{$suffix}" class="tablerenderer resumefive resumecomposite">
    <colgroup width="150" span="2"></colgroup>
    <thead>
        <tr>
            <th class="europassdate">{str tag='startdate' section='artefact.resume'}</th>
            <th class="europassdate">{str tag='enddate' section='artefact.resume'}</th>
            <th>{str tag='qualification' section='artefact.resume'}</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$education_data item=education}
        <tr class="{cycle values='r0,r1'}">
            <td>{$education->startdate|escape}</td>
            <td>{$education->enddate|escape}</td>
            <td>{$education->qualname} ({$education->qualtype}) {str tag='at' section='mahara'} {$education->institution}</td>
        </tr>
        {/foreach}
    </tbody>
</table>
<div>
    <button id="editeducationhistorybutton" onclick="window.location='{$employmentlocation}';">{str tag='edit'}</button>
</div>
</fieldset>

<div><img src="{$rightlogo}" align="right"></div>
</div>
{/if}

{include file="footer.tpl"}
