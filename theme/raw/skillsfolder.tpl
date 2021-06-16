{include file="header.tpl"}

{include file="artefact:europass:topbanner.tpl"}

<p class="lead ptl pbl">
    {str tag="skillsfolderuploadnotice" section="artefact.europass"}
</p>

{$form|safe}

<div class="view-container">
  <div id="skillsfolderlist" class="card-items card-items-no-margin js-masonry" data-masonry-options='{ "itemSelector": ".card" }'>
  {foreach from=$files item=file}
    <div class="card">
        <h4 class="card-header p-2 has-link">
            <img src="{$minilogo}" class="mini-logo">
            <div class="float-right btn-group">
				<a href="{$WWWROOT}artefact/europass/skillsfolder.php?edit={$file->id}" title="{str tag="edit"}" class="btn btn-secondary btn-sm">
					<span class="icon icon-pencil-alt icon-lg"></span>
					<span class="sr-only">{str tag="edit"}</span>
				</a>
				<a href="{$WWWROOT}artefact/europass/skillsfolder.php?delete={$file->id}" title="{str tag="delete"}" class="btn btn-secondary btn-sm">
					<span class="icon icon-trash icon-lg text-danger"></span>
					<span class="sr-only">{str tag="delete"}</span>
				</a>
			</div>
		</h4>
        <div class="card-body card-fixed-size text-center">
            <div class="pbm">{$file->title|truncate:20:'...':true:true}</div>
            {if $file->artefacttype == 'image'}
            <img class="ptm" src="{$WWWROOT}artefact/file/download.php?file={$file->id}&maxwidth=200&maxheight=200">
            {else}
            <span class="icon icon-file big-icon ptm"></span>
            {/if}
        </div>
    </div>
  {/foreach}
  </div>
<div>

<div class="clearfix"></div>
<div class="col-md-12"><img src="{$rightlogo}" align="right"></div>
<div class="clearfix"></div>

{include file="footer.tpl"}
