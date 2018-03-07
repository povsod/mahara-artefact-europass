<style>
#europass table { font-size: 1em; }
#europass table td { border-top: 1px solid transparent; border-left: 1px solid transparent; border-right: 1px solid transparent; border-bottom: 1px solid #ccc; vertical-align: top; padding: 4px 8px; }
</style>
<div id="europass">
<table border="0" width="100%">
<tr style="border-bottom: 2px solid #ccc">
  <td width="50%">&nbsp;</td>
  <td width="10%" align="center"><span class="icon icon-cog"></span></td>
  <td width="10%" align="center"><span class="icon icon-comment"></span></td>
  <td width="10%" align="center"><span class="icon icon-pencil"></span></td>
  <td width="10%" align="center"><span class="icon icon-lock"></span></td>
  <td width="10%" align="center"><span class="icon icon-puzzle-piece"></span></td>
</tr>
<tr>
  <td>{str tag='digitalcompetence' section='artefact.europass'}</td>
  <td align="center">{$data->information}</td>
  <td align="center">{$data->communication}</td>
  <td align="center">{$data->contentcreation}</td>
  <td align="center">{$data->safety}</td>
  <td align="center">{$data->problemsolving}</td>
</tr>
</table>
<small><a href="{$url}" target="_blank">{str tag='digitalcompetence-DIGCOMP-level' section='artefact.europass'}</a></small>
</div>
