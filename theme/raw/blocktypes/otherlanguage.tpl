<style>
#europass table { font-size: 1em; }
#europass table td { border-top: 1px solid transparent; border-left: 1px solid transparent; border-right: 1px solid transparent; border-bottom: 1px solid #ccc; vertical-align: top; padding: 4px 8px; }
</style>
<div id="europass">
<table border="0" width="100%">
<tr style="border-bottom: 2px solid #ccc">
  <td width="50%">&nbsp;</td>
  <td width="10%" align="center"><span class="icon icon-headphones"></span></td>
  <td width="10%" align="center"><span class="icon icon-book"></span></td>
  <td width="10%" align="center"><span class="icon icon-comments"></span></td>
  <td width="10%" align="center"><span class="icon icon-comment"></span></td>
  <td width="10%" align="center"><span class="icon icon-pencil"></span></td>
</tr>
{foreach from=$data item=lang}<tr>
  <td>{$lang->label}</td>
  <td align="center">{$lang->listening}</td>
  <td align="center">{$lang->reading}</td>
  <td align="center">{$lang->spokeninteraction}</td>
  <td align="center">{$lang->spokenproduction}</td>
  <td align="center">{$lang->writing}</td>
</tr>{/foreach}
</table>
<small><a href="{$url}" target="_blank">{str tag='language-foreign-CEF-level' section='artefact.europass'}</a></small>
</div>
