<link rel="stylesheet" type="text/css" href="<?php echo get_config('wwwroot') . 'artefact/europass/theme/raw/static/style/style.css'; ?>">

<table id="importeuropass-t">
    <thead>
        <tr>
            <th class="step1"><?php echo get_string('importstep1', 'artefact.europass'); ?></th>
            <th></th>
            <th class="step2"><?php echo get_string('importstep2', 'artefact.europass'); ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo get_string('selectfile&options', 'artefact.europass'); ?></td>
            <td></td>
            <td><?php echo get_string('execute', 'artefact.europass'); ?></td>
        </tr>
        <tr>
			<?php
			echo $form_tag;
			?>
            <td class="step step1" id="step1">
                <table>
                    <tr id="importeuropassform_file_container" class="required file">
                        <th><label for="importeuropassform_file"><?php echo get_string('importfile', 'artefact.europass'); ?></label>
						<span class="requiredmarker">*</span></th>
                        <td><?php echo $elements['file']['html']; ?></td>
                    </tr>
					<tr>
						<th></th>
						<td class="description"><?php echo get_string('importfiledesc', 'artefact.europass'); ?></td>
                    </tr>
					<?php if (isset($elements['file']['error'])) { ?>
					<tr><td class="errmsg" colspan="2"><?php echo $elements['file']['error']; ?></td></tr>
					<?php } ?>
					<tr><td colspan="2">&nbsp;</td></tr>
                    <tr valign="top" id="importeuropassform_checkbox_container" class="checkbox">
                        <th><?php echo get_string('importoptions', 'artefact.europass'); ?></th>
                        <td>
							<?php echo $elements['identification']['html']; ?><?php echo $elements['identification']['title']; ?><br>
							<?php echo $elements['application']['html']; ?><?php echo $elements['application']['title']; ?><br>
							<?php echo $elements['workexperience']['html']; ?><?php echo $elements['workexperience']['title']; ?><br>
							<?php echo $elements['education']['html']; ?><?php echo $elements['education']['title']; ?><br>
							<?php echo $elements['languages']['html']; ?><?php echo $elements['languages']['title']; ?><br>
							<?php echo $elements['skills']['html']; ?><?php echo $elements['skills']['title']; ?><br>
							<?php echo $elements['additionalinfo']['html']; ?><?php echo $elements['additionalinfo']['title']; ?>
						</td>
                    </tr>
					<tr>
						<th></th>
						<td class="description"><?php echo get_string('importoptionsdesc', 'artefact.europass'); ?></td>
                    </tr>
					<?php if (isset($elements['additionalinfo']['error'])) { ?>
					<tr><td class="errmsg" colspan="2"><?php echo $elements['additionalinfo']['error']; ?></td></tr>
					<?php } ?>
					<tr><td colspan="2">&nbsp;</td></tr>
                    <tr>
                        <th><?php echo get_string('importdate', 'artefact.europass'); ?></th>
                        <td><?php echo $elements['internaldate']['html']; ?></td>
					</tr>
					<tr>
						<th></th>
						<td class="description"><?php echo get_string('selectinternaldatedesc', 'artefact.europass'); ?></td>
                    </tr>
                </table>
            </td>
            <td class="filler">&raquo;</td>
            <td class="step step2">
				<img src="<?php echo get_config('wwwroot') . 'artefact/europass/images/europass-man.png'; ?>" border="0"><br />
				<?php echo $elements['submit']['html']; ?>
            </td>
		<?php
		echo $hidden_elements;
		echo '</form>';
		?>
        </tr>
    </tbody>
</table>
