<link rel="stylesheet" type="text/css" href="<?php echo get_config('wwwroot') . 'artefact/europass/theme/raw/static/style/style.css'; ?>">
<?php
echo $form_tag;
?>
<table cellspacing="0" border="0" id="skills&competences-t">
<tbody>
    <tr id="europassform_drivinglicence_container" class="checkbox">
		<th rowspan="4"><?php echo get_string('drivinglicence', 'artefact.europass'); ?></th>
        <td><?php echo $elements['AM']['html']; ?>&nbsp;<img src="<?php echo get_config('wwwroot'); ?>/artefact/europass/images/am.png" width="68" height="20" alt="AM"></td>
        <td><?php echo $elements['B']['html']; ?>&nbsp;<img src="<?php echo get_config('wwwroot'); ?>/artefact/europass/images/b.png" width="98" height="20" alt="B"></td>
        <td><?php echo $elements['C']['html']; ?>&nbsp;<img src="<?php echo get_config('wwwroot'); ?>/artefact/europass/images/c.png" width="98" height="20" alt="C"></td>
        <td><?php echo $elements['D']['html']; ?>&nbsp;<img src="<?php echo get_config('wwwroot'); ?>/artefact/europass/images/d.png" width="98" height="20" alt="D"></td>
    </tr>
    <tr class="checkbox">
        <td><?php echo $elements['A1']['html']; ?>&nbsp;<img src="<?php echo get_config('wwwroot'); ?>/artefact/europass/images/a1.png" width="68" height="20" alt="A1"></td>
        <td><?php echo $elements['BE']['html']; ?>&nbsp;<img src="<?php echo get_config('wwwroot'); ?>/artefact/europass/images/be.png" width="98" height="20" alt="BE"></td>
        <td><?php echo $elements['CE']['html']; ?>&nbsp;<img src="<?php echo get_config('wwwroot'); ?>/artefact/europass/images/ce.png" width="98" height="20" alt="CE"></td>
        <td><?php echo $elements['DE']['html']; ?>&nbsp;<img src="<?php echo get_config('wwwroot'); ?>/artefact/europass/images/de.png" width="98" height="20" alt="DE"></td>
    </tr>
    <tr class="checkbox">
        <td><?php echo $elements['A']['html']; ?>&nbsp;<img src="<?php echo get_config('wwwroot'); ?>/artefact/europass/images/a.png" width="68" height="20" alt="A"></td>
        <td><?php echo $elements['B1']['html']; ?>&nbsp;<img src="<?php echo get_config('wwwroot'); ?>/artefact/europass/images/b1.png" width="98" height="20" alt="B1"></td>
        <td><?php echo $elements['C1']['html']; ?>&nbsp;<img src="<?php echo get_config('wwwroot'); ?>/artefact/europass/images/c1.png" width="98" height="20" alt="C1"></td>
        <td><?php echo $elements['D1']['html']; ?>&nbsp;<img src="<?php echo get_config('wwwroot'); ?>/artefact/europass/images/d1.png" width="98" height="20" alt="D1"></td>
    </tr>
    <tr class="checkbox">
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><?php echo $elements['C1E']['html']; ?>&nbsp;<img src="<?php echo get_config('wwwroot'); ?>/artefact/europass/images/c1e.png" width="98" height="20" alt="C1E"></td>
        <td><?php echo $elements['D1E']['html']; ?>&nbsp;<img src="<?php echo get_config('wwwroot'); ?>/artefact/europass/images/d1e.png" width="98" height="20" alt="D1E"></td>
    </tr>
    <tr id="europassform_socialskill_container" class="textarea">
		<th><?php echo $elements['socialskill']['title']; ?></th>
        <td colspan="4"><div><?php echo $elements['socialskill']['html']; ?></div>
			<span class="help"><a onclick="contextualHelp('europassform','socialskill','artefact','europass','','',this); return false;" href="">
			<img title="Help" alt="Help" src="<?php echo get_config('wwwroot') ?>/theme/raw/static/images/icon_help.png"></a></span>
		</td>
    </tr>
    <tr id="europassform_organisationalskill_container" class="textarea">
		<th><?php echo $elements['organisationalskill']['title']; ?></th>
        <td colspan="4"><div><?php echo $elements['organisationalskill']['html']; ?></div>
			<span class="help"><a onclick="contextualHelp('europassform','organisationalskill','artefact','europass','','',this); return false;" href="">
			<img title="Help" alt="Help" src="<?php echo get_config('wwwroot') ?>/theme/raw/static/images/icon_help.png"></a></span>
		</td>
    </tr>
    <tr id="europassform_technicalskill_container" class="textarea">
		<th><?php echo $elements['technicalskill']['title']; ?></th>
        <td colspan="4"><div><?php echo $elements['technicalskill']['html']; ?></div>
			<span class="help"><a onclick="contextualHelp('europassform','technicalskill','artefact','europass','','',this); return false;" href="">
			<img title="Help" alt="Help" src="<?php echo get_config('wwwroot') ?>/theme/raw/static/images/icon_help.png"></a></span>
		</td>
    </tr>
    <tr id="europassform_computerskill_container" class="textarea">
		<th><?php echo $elements['computerskill']['title']; ?></th>
        <td colspan="4"><div><?php echo $elements['computerskill']['html']; ?></div>
			<span class="help"><a onclick="contextualHelp('europassform','computerskill','artefact','europass','','',this); return false;" href="">
			<img title="Help" alt="Help" src="<?php echo get_config('wwwroot') ?>/theme/raw/static/images/icon_help.png"></a></span>
		</td>
    </tr>
    <tr id="europassform_artisticskill_container" class="textarea">
		<th><?php echo $elements['artisticskill']['title']; ?></th>
        <td colspan="4"><div><?php echo $elements['artisticskill']['html']; ?></div>
			<span class="help"><a onclick="contextualHelp('europassform','artisticskill','artefact','europass','','',this); return false;" href="">
			<img title="Help" alt="Help" src="<?php echo get_config('wwwroot') ?>/theme/raw/static/images/icon_help.png"></a></span>
		</td>
    </tr>
    <tr id="europassform_otherskill_container" class="textarea">
		<th><?php echo $elements['otherskill']['title']; ?></th>
        <td colspan="4"><div><?php echo $elements['otherskill']['html']; ?></div></td>
    </tr>
    <tr>
		<td>&nbsp;</td>
        <td colspan="4"><?php echo $elements['submit']['html']; ?></td>
    </tr>
</tbody>
</table>
<?php
echo $hidden_elements;
echo '</form>';
?>
