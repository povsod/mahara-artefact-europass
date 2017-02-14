<div class="ptl pbl">
  <div class="panel panel-default">
    <h2 class="panel-heading">{str tag='workexperience' section='artefact.europass'}</h2>
    <div class="employment panel-body">
        {if $employment_data}
        <table id="workexperiencelist" class="resumefive resumecomposite fullwidth table">
            <thead>
                <tr>
                    <th>{str tag='position' section='artefact.resume'}</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$employment_data item=employment}
                <tr class="{cycle values='r0,r1'}">
                    <td>
                    <strong>{$employment->jobtitle} : {$employment->employer}</strong>
                    <div>{$employment->startdate|escape}{if $employment->enddate} - {$employment->enddate|escape}{/if}</div>
                    </td>
                </tr>
                {/foreach}
            </tbody>
        </table>
        {/if}
    </div>
    <div class="panel-footer">
        {if $prefs.learnerinfo == 1234567}
        <a href="{$WWWROOT}artefact/europass/preferences.php?set=1&li=1243567" class="btn btn-default" title="{str tag='moveitemdown'}"><span class="icon icon-long-arrow-down icon-lg prs"></span> {str tag='moveitemdown'}</a>
        {else}
        <a href="{$WWWROOT}artefact/europass/preferences.php?set=1&li=1234567" class="btn btn-default" title="{str tag='moveitemup'}"><span class="icon icon-long-arrow-up icon-lg prs"></span> {str tag='moveitemup'}</a>
        {/if}
        <a class="btn btn-default" id="editworkexperiencebutton" href="{$location.employment}" title="{str tag='edit'}"><span class="icon icon-pencil icon-lg prs"></span> {str tag='edit'}</a>
    </div>
  </div>
</div>
