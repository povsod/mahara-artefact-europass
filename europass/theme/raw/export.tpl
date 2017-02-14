{include file="header.tpl"}

{if $missingextensions}
<p>{str tag='europassextensionmissing' section='artefact.europass'}</p>
<ul>
{foreach from=$missingextensions item=extension}
    <li><a href="http://www.php.net/{$extension|escape}">{$extension|escape}</a></li>
{/foreach}
</ul>
{else}
{$form|safe}
<br><div id="exportgeneration">
<iframe src="{$WWWROOT}artefact/europass/export/generate.php" scrolling="no" frameborder="none" style="border:0px; width:100%; height:100px;"></iframe>
</div>
{/if}

{include file="footer.tpl"}
