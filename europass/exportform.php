<link rel="stylesheet" type="text/css" href="<?php echo get_config('wwwroot') . 'artefact/europass/theme/raw/static/style/style.css'; ?>">
<?php
echo $form_tag;
?>

<table id="exporteuropass-t">
    <thead>
        <tr>
            <th class="step1"><?php echo get_string('exportstep1', 'artefact.europass'); ?></th>
            <th></th>
            <th class="step2"><?php echo get_string('exportstep2', 'artefact.europass'); ?></th>
            <th></th>
            <th class="step3"><?php echo get_string('exportstep3', 'artefact.europass'); ?></th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td><?php echo get_string('selectlocale&type', 'artefact.europass'); ?></td>
            <td></td>
            <td><?php echo get_string('selectfiletype', 'artefact.europass'); ?></td>
            <td></td>
            <td><?php echo get_string('generate', 'artefact.europass'); ?></td>
        </tr>
        <tr>
            <td class="step step1" id="step1">
                <table>
                    <tr>
                        <th><?php echo get_string('selectlocale', 'artefact.europass'); ?></th>
                        <td><?php echo $elements['locale']['html']; ?></td>
                    </tr>
					<tr>
						<th></th>
						<td class="description"><?php echo get_string('selectlocaledesc', 'artefact.europass'); ?></td>
                    </tr>
					<tr><td colspan="2">&nbsp;</td></tr>
                    <tr>
                        <th><?php echo get_string('selectdocumenttype', 'artefact.europass'); ?></th>
                        <td><?php echo $elements['documenttype']['html']; ?></td>
                    </tr>
					<tr><td colspan="2">&nbsp;</td></tr>
                    <tr>
                        <th><?php echo get_string('photograph', 'artefact.europass'); ?></th>
                        <td><?php echo $elements['photograph']['html']; ?></td>
                    </tr>
					<tr>
						<th></th>
						<td class="description"><?php echo get_string('photographdesc', 'artefact.europass'); ?></td>
                    </tr>
					<tr>
						<th></th>
						<td><?php echo get_help_icon('artefact', 'europass', 'europassform', 'photograph'); ?></td>
                    </tr>
                </table>
            </td>
            <td class="filler">&raquo;</td>
            <td class="step step2">
                <table>
                    <tr>
                        <th><?php echo get_string('exportfile', 'artefact.europass'); ?></th>
                        <td><?php echo $elements['fileformat']['html']; ?></td>
                    </tr>
					<tr><td colspan="2">&nbsp;</td></tr>
                    <tr>
                        <th><?php echo get_string('exportdate', 'artefact.europass'); ?></th>
                        <td><?php echo $elements['internaldate']['html']; ?></td>
					</tr>
					<tr>
						<th></th>
						<td class="description"><?php echo get_string('selectinternaldatedesc', 'artefact.europass'); ?></td>
                    </tr>
                    <tr>
                        <th></th>
                        <td><?php echo $elements['externaldate']['html']; ?></td>
					</tr>
					<tr>
						<td></td>
						<td class="description"><?php echo get_string('selectexternaldatedesc', 'artefact.europass'); ?></td>
                    </tr>
                </table>
            </td>
            <td class="filler">&raquo;</td>
            <td class="step step3">
				<img src="<?php echo get_config('wwwroot') . 'artefact/europass/images/europass-man.png'; ?>" border="0"><br />
				<?php echo $elements['generate']['html']; ?>
            </td>
        </tr>
    </tbody>
</table>
<?php
echo $hidden_elements;
echo '</form>';
?>
