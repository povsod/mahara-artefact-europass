<div class="ptl pbl">
  <div class="panel panel-default">
    <h2 class="panel-heading">{str tag='education' section='artefact.europass'}</h2>
    <div class="education panel-body">
        {if $education_data}
        <table id="educationhistorylist" class="resumefive resumecomposite fullwidth table">
            <thead>
                <tr>
                    <th>{str tag='qualification' section='artefact.resume'}</th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$education_data item=education}
                <tr class="{cycle values='r0,r1'}">
                    <td>
                    <strong>{if $education->qualname}{$education->qualname} {if $education->qualtype}({$education->qualtype}){/if} {str tag='at' section='mahara'} {/if}{$education->institution}</strong>
                    <div>{$education->startdate|escape}{if $education->enddate} - {$education->enddate|escape}{/if}</div>
                    </td>
                </tr>
                {/foreach}
            </tbody>
        </table>
        {/if}
    </div>
    <div class="panel-footer">
        {if $prefs.learnerinfo == 1234567}
        <a href="{$WWWROOT}artefact/europass/preferences.php?set=1&li=1243567" class="btn btn-default" title="{str tag='moveitemup'}"><span class="icon icon-long-arrow-up icon-lg prs"></span> {str tag='moveitemup'}</a>
        {else}
        <a href="{$WWWROOT}artefact/europass/preferences.php?set=1&li=1234567" class="btn btn-default" title="{str tag='moveitemdown'}"><span class="icon icon-long-arrow-down icon-lg prs"></span> {str tag='moveitemdown'}</a>
        {/if}
        <a class="btn btn-default" id="editeducationhistorybutton" href="{$location.education}" title="{str tag='edit'}"><span class="icon icon-pencil icon-lg prs"></span> {str tag='edit'}</a>
    </div>
  </div>
</div>
