{include file="header.tpl"}

{if $missingextensions}
<p>{str tag='europassextensionmissing' section='artefact.europass'}</p>
<ul>
{foreach from=$missingextensions item=extension}
    <li><a href="http://www.php.net/{$extension|escape}">{$extension|escape}</a></li>
{/foreach}
</ul>
{else}

{include file="artefact:europass:topbanner.tpl"}

<div class="ptl pbl">
    <div class="panel panel-primary">
        <div class="languages panel-body border-europass">
        <table id="languageskills" class="fullwidth table">
            <thead>
                <tr>
                    <th class="text-center thead-europass col-xs-6">{str tag='mothertongue' section='artefact.europass'}</th>
                    <th class="text-center thead-europass col-xs-6">{str tag='otherlanguage' section='artefact.europass'}</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        <div class="text-center">{$mothertonguelist}</div>
                        <div class="text-left panel-footer has-form" style="background-color:transparent;border-top:1px solid transparent">
                            <div id="addmothertongueform" class="collapse mtl mlm" data-action='reset-on-collapse'>
                                {$addmothertongueform|safe}
                            </div>

                            <div id="delmothertongueform" class="collapse mtl mlm" data-action='reset-on-collapse'>
                                {$delmothertongueform|safe}
                            </div>

                            <button id="addmothertonguebutton" data-toggle="collapse" data-target="#addmothertongueform" aria-expanded="false" aria-controls="addmothertongueform" class="btn btn-default btn-sm collapsed expand-add-button">
                                <span class="show-form">
                                    <span class="icon icon-chevron-down prs"></span> {str tag='add'}
                                </span>
                                <span class="hide-form">
                                    <span class="icon icon-chevron-up prs"></span> {str tag='cancel'}
                                </span>
                            </button>

                            {if $mothertonguelist != ""}
                            <button id="delmothertonguebutton" data-toggle="collapse" data-target="#delmothertongueform" aria-expanded="false" aria-controls="delmothertongueform" class="btn btn-default btn-sm collapsed expand-add-button">
                                <span class="show-form">
                                    <span class="icon icon-chevron-down prs"></span> {str tag='delete'}
                                </span>
                                <span class="hide-form">
                                    <span class="icon icon-chevron-up prs"></span> {str tag='cancel'}
                                </span>
                            </button>
                            {/if}
                        </div>
                    </td>
                    <td class="left-border-europass">
                        <div class="text-center">{$otherlanguagelist}</div>
                        <div class="text-right panel-footer has-form" style="background-color:transparent;border-top:1px solid transparent">
                            <a href="{$WWWROOT}artefact/europass/element/edit.php?type=otherlanguage" class="btn btn-default btn-sm" title="{str tag='add'}"><span class="icon icon-plus prs"></span> {str tag='add'}</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
        </div>
    </div>
</div>

{foreach from=$otherlanguages item=lang} 
    <div class="ptl pbl">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">{str tag='language.$lang->language' section='artefact.europass'}</h3>
            </div>
            <div class="otherlanguage panel-body">
                <table border="0" class="resumeone fullwidth border-elp table">
                    <tr>
                        <th colspan="10" class="text-center separator-row">{str tag='self-assessment' section='artefact.europass'}</th>
                    </tr>
                    <tr>
                        <th colspan="4" class="text-center text-europass">{str tag='language-understanding' section='artefact.europass'}</th>
                        <th colspan="4" class="text-center text-europass">{str tag='language-speaking' section='artefact.europass'}</th>
                        <th colspan="2" class="text-center text-europass">{str tag='language-writing' section='artefact.europass'}</th>
                    </tr>
                    <tr>
                        <th colspan="2" width="20%" class="text-center text-europass"><span class="icon icon-headphones icon-lg"></span><br />{str tag='language-foreign-listening' section='artefact.europass'}</th>
                        <th colspan="2" width="20%" class="text-center text-europass"><span class="icon icon-book icon-lg"></span><br />{str tag='language-foreign-reading' section='artefact.europass'}</th>
                        <th colspan="2" width="20%" class="text-center text-europass"><span class="icon icon-comments icon-lg"></span><br />{str tag='language-foreign-spokeninteraction' section='artefact.europass'}</th>
                        <th colspan="2" width="20%" class="text-center text-europass"><span class="icon icon-comment icon-lg"></span><br />{str tag='language-foreign-spokenproduction' section='artefact.europass'}</th>
                        <th colspan="2" width="20%" class="text-center text-europass"><span class="icon icon-pencil icon-lg"></span><br />{str tag='language-foreign-writing' section='artefact.europass'}</th>
                    </tr>
                    <tr>
                        <td colspan="2" class="text-center">{$lang->listening}</td>
                        <td colspan="2" class="text-center">{$lang->reading}</td>
                        <td colspan="2" class="text-center">{$lang->spokeninteraction}</td>
                        <td colspan="2" class="text-center">{$lang->spokenproduction}</td>
                        <td colspan="2" class="text-center">{$lang->writing}</td>
                    </tr>
                    <tr>
                        <th colspan="10" class="text-center separator-row">{str tag='language-diplomas' section='artefact.europass'}
                        <div class="pull-right">
                            <a href="{$WWWROOT}artefact/europass/element/edit.php?parent={$lang->artefact}&type=languagediploma" class="btn btn-default btn-sm" title="{str tag='add'}"><span class="icon icon-plus prs"></span> {str tag='add'}</a>
                        </div>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="4" width="40%" class="text-europass">{str tag='diploma-title' section='artefact.europass'}</th>
                        <th colspan="3" width="30%" class="text-europass">{str tag='diploma-awardingBody' section='artefact.europass'}</th>
                        <th colspan="2" width="20%" class="text-center text-europass">{str tag='diploma-date' section='artefact.europass'}</th>
                        <th width="10%" class="text-center text-europass">{str tag='diploma-level' section='artefact.europass'}*</th>
                    </tr>
                    {foreach from=$lang->certificate item=item}
                    <tr>
                        <td colspan="4">
                        <div class="btn-group pull-right">
                            <a href="{$WWWROOT}artefact/europass/element/edit.php?id={$item->artefact}" class="btn btn-default btn-sm" title="{str tag='edit'}"><span class="icon icon-pencil"></span></a>
                            <a href="{$WWWROOT}artefact/europass/element/delete.php?id={$item->artefact}" class="btn btn-default btn-sm" title="{str tag='delete'}"><span class="icon icon-trash text-danger icon-lg"></span></a>
                        </div>
                        {$item->certificate}
                        </td>
                        <td colspan="3">{$item->awardingbody}</td>
                        <td colspan="2" class="text-center">{$item->certificatedate|format_date:'strfdaymonthyearshort'}</td>
                        <td class="text-center">{$item->europeanlevel}</td>
                    </tr>
                    {/foreach}
                    <tr>
                        <th colspan="10" class="text-center separator-row">{str tag='language-experiences' section='artefact.europass'}
                        <div class="pull-right">
                            <a href="{$WWWROOT}artefact/europass/element/edit.php?parent={$lang->artefact}&type=languageexperience" class="btn btn-default btn-sm" title="{str tag='add'}"><span class="icon icon-plus prs"></span> {str tag='add'}</a>
                        </div>
                        </th>
                    </tr>
                    <tr>
                        <th colspan="7" width="70%" class="text-europass">{str tag='description'}</th>
                        <th colspan="3" width="30%" class="text-center text-europass">{str tag='experiences-period' section='artefact.europass'}</th>
                    </tr>
                    {foreach from=$lang->experience item=experience}
                    <tr>
                        <td colspan="7">
                        <div class="btn-group pull-right">
                            <a href="{$WWWROOT}artefact/europass/element/edit.php?id={$experience->artefact}" class="btn btn-default btn-sm" title="{str tag='edit'}"><span class="icon icon-pencil"></span></a>
                            <a href="{$WWWROOT}artefact/europass/element/delete.php?id={$experience->artefact}" class="btn btn-default btn-sm" title="{str tag='delete'}"><span class="icon icon-trash text-danger icon-lg"></span></a>
                        </div>
                        {$experience->experience}
                        </td>
                        <td colspan="3" class="text-center">{$experience->startdate|format_date:'strfdaymonthyearshort'}{if $experience->enddate} &ndash; {$experience->enddate|format_date:'strfdaymonthyearshort'}{/if}</td>
                    </tr>
                    {/foreach}
                </table>
            </div>
            <div class="panel-footer">
                <a class="btn btn-default" id="editlanguage" href="{$WWWROOT}artefact/europass/element/edit.php?id={$lang->artefact}" title="{str tag='edit'}"><span class="icon icon-pencil icon-lg prs"></span> {str tag='edit'}</a>
                <a class="btn btn-default" id="deletelanguage" href="{$WWWROOT}artefact/europass/element/delete.php?id={$lang->artefact}" title="{str tag='delete'}"><span class="icon icon-trash text-danger icon-lg prs"></span> {str tag='delete'}</a>
            </div>
        </div>
    </div>
{/foreach}

<div><img src="{$rightlogo}" align="right"></div>
{/if}

{include file="footer.tpl"}
