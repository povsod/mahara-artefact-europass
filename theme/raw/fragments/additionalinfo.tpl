<div class="ptl pbl">
  <div class="panel panel-default">
    <h2 class="panel-heading">{str tag='additionalinfo' section='artefact.europass'}</h2>
    <div class="achievements panel-body">
        <table id="achievementslist" class="resumecomposite fullwidth table">
            <thead>
                <tr>
                    <th width="25%">{str tag='achievements' section='artefact.resume'}</th>
                    <th width="60%">{str tag='description'}</th>
                    <th width="15%"></th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$additionalinfo item=row}
                <tr class="{cycle values='r0,r1'}">
                    <td class="text-europass"><b>{str tag='$row->title|escape' section='artefact.europass'}</b></td>
                    <td>{$row->description|safe}</td>
                    <td class="text-right">
                    <div class="btn-group">
                        <a class="btn btn-default btn-sm" id="editskillbutton" href="{$WWWROOT}artefact/europass/element/edit.php?id={$row->id}" title="{str tag='edit'}"><span class="icon icon-pencil"></span></a>
                        <a class="btn btn-default btn-sm" id="deleteskillbutton" href="{$WWWROOT}artefact/europass/element/delete.php?id={$row->id}" title="{str tag='delete'}"><span class="icon icon-trash text-danger icon-lg"></span></a>
                        </div>
                    </td>
                </tr>
                {/foreach}
            </tbody>
        </table>
    </div>
    <div class="panel-footer">
        <a class="btn btn-default" id="addachievement" href="{$WWWROOT}artefact/europass/element/edit.php?type=additionalinfo" title="{str tag='add'}"><span class="icon icon-plus icon-lg prs"></span> {str tag='add'}</a>
    </div>
  </div>
</div>
