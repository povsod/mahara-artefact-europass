<fieldset>{if !$hidetitle}<legend class="europassh3">{str tag='language-experiences' section='artefact.europass'}
</legend>{/if}
<table id="languageexperiencelist{$suffix}" width="100%" class="tablerenderer europassthree europasslanguage">
    <colgroup width="10%"></colgroup>
    <colgroup width="15%"></colgroup>
    <colgroup width="15%"></colgroup>
    <colgroup width="50%"></colgroup>
    <colgroup width="10%"></colgroup>
    <thead>
        <tr>
            {if $controls}<th class="europasscontrols"></th>{/if}
            <th class="europassdate">{str tag='experiences-period-from' section='artefact.europass'}</th>
            <th class="europassdate">{str tag='experiences-period-to' section='artefact.europass'}</th>
            <th class="europassexperience">{str tag='description' section='mahara'}</th>
            {if $controls}<th class="europasscontrols"></th>{/if}
        </tr>
    </thead>
    <tbody>
        {foreach from=$rows item=row}
        <tr class="{cycle values='r0,r1'} expandable-head">
            {if $controls}<td class="buttonscell"></td>{/if}
            <td>{$row->startdate|escape}</td>
            <td>{$row->enddate|escape}</td>
            <td>{$row->description|escape}</td>
            {if $controls}<td class="buttonscell"></td>{/if}
        </tr>
        {/foreach}
    </tbody>
</table>
{if $controls}
<div>
    <div id="languageexperienceform" class="hidden">{$compositeforms.languageexperience|safe}</div>
    <button id="addlanguageexperiencebutton" onclick="toggleCompositeForm('languageexperience');">{str tag='add'}</button>
</div>
{/if}
</fieldset>
