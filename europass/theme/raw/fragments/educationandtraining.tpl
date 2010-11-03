<fieldset>{if !$hidetitle}<legend class="europassh3">{str tag='education' section='artefact.europass'}
</legend>{/if}
<table id="educationhistorylist{$suffix}" class="tablerenderer resumefive resumecomposite">
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
            <td>{$education->qualname|escape} ({$education->qualtype|escape}) {str tag='at' section='mahara'} {$education->institution|escape}</td>
        </tr>
        {/foreach}
    </tbody>
</table>
<div>
    <button id="editeducationhistorybutton" onclick="window.location='{$employmentlocation}';">{str tag='edit'}</button>
</div>
</fieldset>
