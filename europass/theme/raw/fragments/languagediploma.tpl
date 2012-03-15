<fieldset>{if !$hidetitle}<legend class="europassh3">{str tag='language-certificates' section='artefact.europass'}
</legend>{/if}
<table id="languagediplomalist{$suffix}" width="100%" class="tablerenderer europassthree europasslanguage">
    <colgroup width="10%"></colgroup>
    <colgroup width="25%"></colgroup>
    <colgroup width="30%"></colgroup>
    <colgroup width="15%"></colgroup>
    <colgroup width="10%"></colgroup>
    <colgroup width="10%"></colgroup>
    <thead>
        <tr>
            {if $controls}<th class="europasscontrols"></th>{/if}
            <th class="europassdiploma">{str tag='diploma-title' section='artefact.europass'}</th>
            <th class="europassdiploma">{str tag='diploma-awardingBody' section='artefact.europass'}</th>
            <th class="europassdiploma">{str tag='diploma-date' section='artefact.europass'}</th>
            <th class="europassdiploma">{str tag='diploma-level' section='artefact.europass'}</th>
            {if $controls}<th class="europasscontrols"></th>{/if}
        </tr>
    </thead>
    <tbody>
        {foreach from=$rows item=row}
        <tr class="{cycle values='r0,r1'} expandable-head">
            {if $controls}<td class="buttonscell"></td>{/if}
            <td>{$row->certificate|escape}</td>
            <td>{$row->awardingbody|escape}</td>
            <td>{$row->certificatedate|escape}</td>
            <td>{$row->europeanlevel|escape}</td>
            {if $controls}<td class="buttonscell"></td>{/if}
        </tr>
        {/foreach}
    </tbody>
</table>
{if $controls}
<div>
    <div id="languagediplomaform" class="hidden">{$compositeforms.languagediploma|safe}</div>
    <button id="addlanguagediplomabutton" onclick="toggleCompositeForm('languagediploma');">{str tag='add'}</button>
</div>
{/if}
</fieldset>
