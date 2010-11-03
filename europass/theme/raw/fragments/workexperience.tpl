<fieldset>{if !$hidetitle}<legend class="europassh3">{str tag='workexperience' section='artefact.europass'}
</legend>{/if}
<table id="workexperiencelist{$suffix}" class="tablerenderer resumefive resumecomposite">
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
            <td>{$employment->jobtitle|escape} : {$employment->employer|escape}</td>
        </tr>
        {/foreach}
	</tbody>
</table>
<div>
	<button id="editemploymenthistorybutton" onclick="window.location='{$employmentlocation}';">{str tag='edit'}</button>
</div>
</fieldset>
