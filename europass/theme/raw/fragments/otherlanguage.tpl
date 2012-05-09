<fieldset>{if !$hidetitle}<legend class="europassh3">{str tag='otherlanguage' section='artefact.europass'}
</legend>{/if}
<table id="otherlanguagelist{$suffix}" width="100%" class="tablerenderer europasstwo europasslanguage">
    <colgroup width="10%"></colgroup>
    <colgroup width="15%"></colgroup>
    <colgroup width="5%"></colgroup>
    <colgroup width="12%" span="5"></colgroup>
    <colgroup width="10%"></colgroup>
    <thead>
        <tr>
            {if $controls}<th class="europasscontrols"></th>{/if}
            <th class="europasslanguage">{str tag='language' section='mahara'}</th>
            <th class="europasslangcode">ISO</th>
            <th class="europasslevel">{str tag='language-foreign-listening-th' section='artefact.europass'}</th>
            <th class="europasslevel">{str tag='language-foreign-reading-th' section='artefact.europass'}</th>
            <th class="europasslevel">{str tag='language-foreign-spokeninteraction-th' section='artefact.europass'}</th>
            <th class="europasslevel">{str tag='language-foreign-spokenproduction-th' section='artefact.europass'}</th>
            <th class="europasslevel">{str tag='language-foreign-writing-th' section='artefact.europass'}</th>
            {if $controls}<th class="europasscontrols"></th>{/if}
        </tr>
    </thead>
    <tbody>
        {foreach from=$rows item=row}
        <tr class="{cycle values='r0,r1'}">
            {if $controls}<td class="buttonscell"></td>{/if}
            <td>{str tag='language.$row->language|escape' section='artefact.europass'}</td>
            <td>{$row->language|escape}</td>
            <td>{$row->listening|escape}</td>
            <td>{$row->reading|escape}</td>
            <td>{$row->spokeninteraction|escape}</td>
            <td>{$row->spokenproduction|escape}</td>
            <td>{$row->writing|escape}</td>
            {if $controls}<td class="buttonscell"></td>{/if}
        </tr>
        {/foreach}
    </tbody>
</table>
{if $controls}
<div>
    <div id="otherlanguageform" class="hidden">{$compositeforms.otherlanguage|safe}</div>
    <button id="addotherlanguagebutton" onclick="toggleCompositeForm('otherlanguage');">{str tag='add'}</button>
</div>
{/if}
</fieldset>
