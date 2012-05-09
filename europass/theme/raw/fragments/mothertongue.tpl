<fieldset>{if !$hidetitle}<legend class="europassh3">{str tag='mothertongue' section='artefact.europass'}
</legend>{/if}
<table id="mothertonguelist{$suffix}" width="100%" class="tablerenderer europassone europasscomposite">
    <colgroup width="10%"></colgroup>
    <colgroup width="15%"></colgroup>
    <colgroup width="65%"></colgroup>
    <colgroup width="10%"></colgroup>
    <thead>
        <tr>
            {if $controls}<th class="europasscontrols"></th>{/if}
            <th class="europasslanguage">{str tag='language' section='mahara'}</th>
            <th class="europasslangcode">ISO</th>
            {if $controls}<th class="europasscontrols"></th>{/if}
        </tr>
    </thead>
    <tbody>
        {foreach from=$rows item=row}
        <tr class="{cycle values='r0,r1'}">
            {if $controls}<td class="buttonscell"></td>{/if}
            <td>{str tag='language.$row->language|escape' section='artefact.europass'}</td>
            <td>{$row->language|escape}</td>
            {if $controls}<td class="buttonscell"></td>{/if}
        </tr>
        {/foreach}
    </tbody>
</table>
{if $controls}
<div>
    <div id="mothertongueform" class="hidden">{$compositeforms.mothertongue|safe}</div>
    <button id="addmothertonguebutton" onclick="toggleCompositeForm('mothertongue');">{str tag='add'}</button>
</div>
{/if}
</fieldset>
