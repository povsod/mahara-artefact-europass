<fieldset>{if !$hidetitle}<legend class="europassh3">{str tag='mothertongue' section='artefact.europass'}
</legend>{/if}
<table id="mothertonguelist{$suffix}" width="100%" class="tablerenderer europassone europasslanguage">
    <colgroup width="15%"></colgroup>
    <colgroup width="75%"></colgroup>
    <thead>
        <tr>
            <th class="europasslanguage">{str tag='language' section='mahara'}</th>
            <th class="europasslangcode">ISO</th>
            {if $controls}
            <th class="europasscontrols"></th>
            <th class="europasscontrols"></th>
            <th class="europasscontrols"></th>
            {/if}
        </tr>
    </thead>
    <tbody>
        {foreach from=$rows item=row}
        <tr class="{cycle values='r0,r1'}">
            <td>{str tag='language.$row->language|escape' section='artefact.europass'}</td>
            <td>{$row->language|escape}</td>
        </tr>
        {/foreach}
    </tbody>
</table>
{if $controls}
<div>
    <div id="mothertongueform" class="hidden">{$languageforms.mothertongue|safe}</div>
    <button id="addmothertonguebutton" onclick="toggleLanguageForm('mothertongue');">{str tag='add'}</button>
</div>
{/if}
</fieldset>
