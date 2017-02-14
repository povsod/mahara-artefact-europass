<div class="ptl pbl">
  <div class="panel panel-default">
    <h2 class="panel-heading">{str tag='skills' section='artefact.europass'}</h2>
    <div class="competences panel-body">
        <!-- Mother tongue(s) -->
        <table id="mothertonguelist" class="resumecomposite fullwidth table">
            <thead>
                <tr>
                    <th width="85%">{str tag='mothertongue' section='artefact.europass'}</th>
                    <th width="15%"></th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$skills.mothertongue item=row}
                <tr class="{cycle values='r0,r1'}">
                    <td><b>{str tag='language.$row->description|escape' section='artefact.europass'}<b></td>
                    <td class="text-right">
                    <div class="btn-group">
                        <a class="btn btn-default btn-sm" id="editskillbutton" href="{$WWWROOT}artefact/europass/element/edit.php?id={$row->id}" title="{str tag='edit'}"><span class="icon icon-pencil"></span></a>
                        <a class="btn btn-default btn-sm" id="deleteskillbutton" href="{$WWWROOT}artefact/europass/element/delete.php?id={$row->id}" title="{str tag='delete'}"><span class="icon icon-trash text-danger icon-lg"></span></a>
                    </div>
                    </td>
                </tr>
                {/foreach}
                <tr>
                    <td colspan="2"><a class="btn btn-default btn-sm" id="addotherlanguage" href="{$WWWROOT}artefact/europass/element/edit.php?type=mothertongue" title="{str tag='add'}"><span class="icon icon-plus prs"></span> {str tag='add'}</a></td>
                </tr>
            </tbody>
        </table>

        <!-- Other language(s) -->
        <table id="otherlanguagelist" class="resumecomposite fullwidth table">
            <thead>
                <tr>
                    <th width="25%">{str tag='otherlanguage' section='artefact.europass'}</th>
                    <th width="12%" class="text-tiny text-center"><span class="icon icon-headphones icon-lg"></span><br />{str tag='language-foreign-listening' section='artefact.europass'}</th>
                    <th width="12%" class="text-tiny text-center"><span class="icon icon-book icon-lg"></span><br />{str tag='language-foreign-reading' section='artefact.europass'}</th>
                    <th width="12%" class="text-tiny text-center"><span class="icon icon-comments icon-lg"></span><br />{str tag='language-foreign-spokeninteraction' section='artefact.europass'}</th>
                    <th width="12%" class="text-tiny text-center"><span class="icon icon-comment icon-lg"></span><br />{str tag='language-foreign-spokenproduction' section='artefact.europass'}</th>
                    <th width="12%" class="text-tiny text-center"><span class="icon icon-pencil icon-lg"></span><br />{str tag='language-foreign-writing' section='artefact.europass'}</th>
                    <th width="15%"></th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$skills.otherlanguage item=row}
                <tr class="{cycle values='r0,r1'}">
                    <td><b>{str tag='language.$row->language|escape' section='artefact.europass'}</b></td>
                    <td class="text-center">{$row->listening|escape}</td>
                    <td class="text-center">{$row->reading|escape}</td>
                    <td class="text-center">{$row->spokeninteraction|escape}</td>
                    <td class="text-center">{$row->spokenproduction|escape}</td>
                    <td class="text-center">{$row->writing|escape}</td>
                    <td class="text-right">
                    <div class="btn-group">
                        <a class="btn btn-default btn-sm" id="editskillbutton" href="{$WWWROOT}artefact/europass/element/edit.php?id={$row->artefact}" title="{str tag='edit'}"><span class="icon icon-pencil"></span></a>
                        <a class="btn btn-default btn-sm" id="deleteskillbutton" href="{$WWWROOT}artefact/europass/element/delete.php?id={$row->artefact}" title="{str tag='delete'}"><span class="icon icon-trash text-danger icon-lg"></span></a>
                    </div>
                    </td>
                </tr>
                {/foreach}
                <tr>
                    <td colspan="7"><a class="btn btn-default btn-sm" id="addotherlanguage" href="{$WWWROOT}artefact/europass/element/edit.php?type=otherlanguage" title="{str tag='add'}"><span class="icon icon-plus prs"></span> {str tag='add'}</a></td>
                </tr>
            </tbody>
        </table>

        <!-- Skills and competences (incl. driving licence) -->
        <table id="skillsandcompetenceslist" class="resumecomposite fullwidth table">
            <thead>
                <tr>
                    <th width="25%">{str tag='skills' section='artefact.resume'}</th>
                    <th width="60%"></th>
                    <th width="15%"></th>
                </tr>
            </thead>
            <tbody>
                {foreach from=$skills.skills item=row}
                <tr class="{cycle values='r0,r1'}">
                    <td class="text-europass"><b>{str tag='$row.type' section='artefact.europass'}</b></td>
                    <td>{$row.desc|safe}</td>
                    <td class="text-right">
                    <div class="btn-group">
                        {if $row.id > 0}<a class="btn btn-default btn-sm" id="editskillbutton" href="{$WWWROOT}artefact/europass/element/edit.php?id={$row.id}" title="{str tag='edit'}"><span class="icon icon-pencil"></span></a>{else}<a class="btn btn-default btn-sm" id="editskillbutton" href="{$WWWROOT}artefact/europass/element/edit.php?type={$row.type}" title="{str tag='add'}"><span class="icon icon-plus"></span></a>{/if}
                        {if $row.id > 0}<a class="btn btn-default btn-sm" id="deleteskillbutton" href="{$WWWROOT}artefact/europass/element/delete.php?id={$row.id}" title="{str tag='delete'}"><span class="icon icon-trash text-danger icon-lg"></span></a>{/if}
                    </div>
                    </td>
                </tr>
                {/foreach}
                <tr>
                    <td colspan="3"></td>
                </tr>
            </tbody>
        </table>


        <!-- Computer skills and competences -->
        <table id="computerskills" class="resumecomposite fullwidth table">
            <thead>
                <tr>
                    <th width="25%">{str tag='digitalcompetence' section='artefact.europass'}</th>
                    <th width="12%" class="text-tiny text-center"><span class="icon icon-cog icon-lg"></span><br />{str tag='digitalcompetence-information' section='artefact.europass'}</th>
                    <th width="12%" class="text-tiny text-center"><span class="icon icon-comments icon-lg"></span><br />{str tag='digitalcompetence-communication' section='artefact.europass'}</th>
                    <th width="12%" class="text-tiny text-center"><span class="icon icon-pencil icon-lg"></span><br />{str tag='digitalcompetence-contentcreation' section='artefact.europass'}</th>
                    <th width="12%" class="text-tiny text-center"><span class="icon icon-lock icon-lg"></span><br />{str tag='digitalcompetence-safety' section='artefact.europass'}</th>
                    <th width="12%" class="text-tiny text-center"><span class="icon icon-puzzle-piece icon-lg"></span><br />{str tag='digitalcompetence-problemsolving' section='artefact.europass'}</th>
                    <th width="15%"></th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-europass"><b>{str tag='digitalcompetence' section='artefact.europass'}</b></td>
                    <td class="text-center">{$skills.digital->information|escape}</td>
                    <td class="text-center">{$skills.digital->communication|escape}</td>
                    <td class="text-center">{$skills.digital->contentcreation|escape}</td>
                    <td class="text-center">{$skills.digital->safety|escape}</td>
                    <td class="text-center">{$skills.digital->problemsolving|escape}</td>
                    <td class="text-right">
                    <div class="btn-group">
                        {if $skills.digital->id > 0}<a class="btn btn-default btn-sm" id="editskillbutton" href="{$WWWROOT}artefact/europass/element/edit.php?id={$skills.digital->artefact}" title="{str tag='edit'}"><span class="icon icon-pencil"></span></a>{else}<a class="btn btn-default btn-sm" id="editskillbutton" href="{$WWWROOT}artefact/europass/element/edit.php?type=digitalcompetence" title="{str tag='add'}"><span class="icon icon-plus"></span></a>{/if}
                        {if $skills.digital->id > 0}<a class="btn btn-default btn-sm" id="deleteskillbutton" href="{$WWWROOT}artefact/europass/element/delete.php?id={$skills.digital->artefact}" title="{str tag='delete'}"><span class="icon icon-trash text-danger icon-lg"></span></a>{/if}
                    </div>
                    </td>
                </tr>
                <tr>
                    <th class="text-europass">{str tag='digitalcompetence-other' section='artefact.europass'}</th>
                    <td colspan="6">{$skills.digital->description|safe}</td>
                </tr>
                {if $skills.digital->id > 0}
                <tr>
                    <th colspan="7" class="text-center separator-row">{str tag='language-diplomas' section='artefact.europass'}
                    <div class="pull-right">
                        <a href="{$WWWROOT}artefact/europass/element/edit.php?parent={$skills.digital->artefact}&type=digitaldiploma" class="btn btn-default btn-sm" title="{str tag='add'}"><span class="icon icon-plus prs"></span> {str tag='add'}</a>
                    </div>
                    </th>
                </tr>
                <tr class="border-elp">
                    <th colspan="2" class="text-europass">{str tag='diploma-title' section='artefact.europass'}</th>
                    <th colspan="2" class="text-europass">{str tag='diploma-awardingBody' section='artefact.europass'}</th>
                    <th colspan="2" class="text-center text-europass">{str tag='diploma-date' section='artefact.europass'}</th>
                    <th class="text-center text-europass">{str tag='diploma-level' section='artefact.europass'}*</th>
                </tr>
                {foreach from=$skills.digital->certificate item=item}
                <tr class="border-elp">
                    <td colspan="2">
                    <div class="btn-group pull-right">
                        <a href="{$WWWROOT}artefact/europass/element/edit.php?id={$item->artefact}" class="btn btn-default btn-sm" title="{str tag='edit'}"><span class="icon icon-pencil"></span></a>
                        <a href="{$WWWROOT}artefact/europass/element/delete.php?id={$item->artefact}" class="btn btn-default btn-sm" title="{str tag='delete'}"><span class="icon icon-trash text-danger icon-lg"></span></a>
                    </div>
                    {$item->certificate}
                    </td>
                    <td colspan="2">{$item->awardingbody}</td>
                    <td colspan="2" class="text-center">{$item->certificatedate|format_date:'strfdaymonthyearshort'}</td>
                    <td class="text-center">{$item->europeanlevel}</td>
                </tr>
                {/foreach}
                {/if}
            </tbody>
        </table>
    </div>
  </div>
</div>
