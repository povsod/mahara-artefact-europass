{include file="header.tpl"}

{if $missingextensions}
<p>{str tag='europassextensionmissing' section='artefact.europass'}</p>
<ul>
{foreach from=$missingextensions item=extension}
    <li><a href="http://www.php.net/{$extension|escape}">{$extension|escape}</a></li>
{/foreach}
</ul>
{else}
{include file="artefact:europass:topbanner.tpl"}

{include file="artefact:europass:fragments/personalinfo.tpl" order=$prefs.personname}
{if $prefs.learnerinfo == 1234567}
    {include file="artefact:europass:fragments/workexperience.tpl"}
    {include file="artefact:europass:fragments/education.tpl"}
{else}
    {include file="artefact:europass:fragments/education.tpl"}
    {include file="artefact:europass:fragments/workexperience.tpl"}
{/if}
{include file="artefact:europass:fragments/competences.tpl"}
{include file="artefact:europass:fragments/additionalinfo.tpl"}

<div><img src="{$rightlogo}" align="right"></div>
{/if}

{include file="footer.tpl"}
