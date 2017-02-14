{foreach from=$data item=item}
<div id="additionalinfolist" class="list-group list-group-lite">
    <div class="list-group-item">
        <h4 class="list-group-item-heading">
            <span class="list-group-item-heading">{$item->label}</span>
        </h4>
        <span class="text-small text-muted">{$item->description|safe}</span>
    </div>
</div>
{/foreach}
