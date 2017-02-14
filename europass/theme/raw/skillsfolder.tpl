{include file="header.tpl"}

{include file="artefact:europass:topbanner.tpl"}

<p class="lead ptl pbl">
    {str tag="skillsfolderuploadnotice" section="artefact.europass"}
</p>

{$form|safe}

{foreach from=$files item=file}
    <div class="panel panel-default col-sm-3 panel-shadow">
        <div class="panel-heading skillsfolder-heading">
            <img src="{$minilogo}" class="mini-logo">
            <div class="text-right btn-top-right btn-group btn-group-top">
                <a href="{$WWWROOT}artefact/europass/skillsfolder.php?edit={$file->id}" title="{str tag="edit"}" class="btn btn-default btn-xs">
                    <span class="icon icon-pencil icon-lg"></span>
                    <span class="sr-only">{str tag="edit"}</span>
                </a>
                <a href="{$WWWROOT}artefact/europass/skillsfolder.php?delete={$file->id}" title="{str tag="delete"}" class="btn btn-default btn-xs">
                    <span class="icon icon-lg icon-trash text-danger"></span>
                    <span class="sr-only">{str tag="delete"}</span>
                </a>
            </div>
        </div>
        <div class="panel-body fixed-panel text-center">
            <div class="pbm">{$file->title|truncate:20:'...':true:true}</div>
            {if $file->artefacttype == 'image'}
            <img class="ptm" src="{$WWWROOT}artefact/file/download.php?file={$file->id}&maxwidth=200&maxheight=200">
            {else}
            <span class="icon icon-file big-icon ptm"></span>
            {/if}
        </div>
    </div>
{/foreach}

<div class="clearfix"></div>
<div class="col-md-12"><img src="{$rightlogo}" align="right"></div>
<div class="clearfix"></div>

{include file="footer.tpl"}
