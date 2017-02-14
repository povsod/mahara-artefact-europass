<div class="list-group list-group-lite">
    <div class="list-group-item">
        {foreach from=$data item=lang name=lg}{$lang->label}{if !$.foreach.lg.last}, {/if}{/foreach}
    </div>
</div>
