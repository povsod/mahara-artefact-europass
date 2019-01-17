<script>
function showInfo(id, show) {
  var icon = document.getElementById('icon_' + id);
  var info = document.getElementById('info_' + id);
  if (show) {
    icon.style.display = 'none';
    info.style.display = 'block';
  }
  else {
    icon.style.display = 'block';
    info.style.display = 'none';
  }
}
</script>
<?php
global $THEME;
echo $form_tag;
?>
<table id="drivingform-t" border="0" width="100%">
    <thead>
        <tr>
            <th><label for="drivinglicence_categories"><?php echo get_string('categories', 'artefact.europass'); ?></label></th>
        </tr>
    </thead>
    <tbody>
        <tr id="drivinglicence_categories_container_A" class="switchbox">
            <td>
            <div class="drivingbtn" onmouseover="showInfo('am', true)" onmouseout="showInfo('am', false)">
                <div id="icon_am" class="drivingicon">
                <center>
                <?php echo file_get_contents($THEME->get_url('static/images/category_am.svg', false, 'artefact/europass')); ?>
                </center>
                </div>
                <div id="info_am" class="drivinginfo" style="display:none">
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_piston.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>&lt; 50 cm<sup>3</sup></b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_speedometer.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>&lt; 45 km/h</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_lightning.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>&lt; 4 kW</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_user.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>16+</b></span></div>
                </div>
                <div class="drivingchk"><?php echo $elements['category_am']['html']; ?></div>
                <div class="drivinglbl"><?php echo $elements['category_am']['title']; ?></div>
            </div>
            <div class="drivingbtn" onmouseover="showInfo('a1', true)" onmouseout="showInfo('a1', false)">
                <div id="icon_a1" class="drivingicon">
                <center>
                <?php echo file_get_contents($THEME->get_url('static/images/category_a1.svg', false, 'artefact/europass')); ?>
                </center>
                </div>
                <div id="info_a1" class="drivinginfo" style="display:none">
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_piston.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>&lt; 125 cm<sup>3</sup></b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_speedometer.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>&lt; 45 km/h</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_lightning.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>&lt; 11 kW - 0.1 kW/kg</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_user.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>16+</b></span></div>
                </div>
                <div class="drivingchk"><?php echo $elements['category_a1']['html']; ?></div>
                <div class="drivinglbl"><?php echo $elements['category_a1']['title']; ?></div>
            </div>
            <div class="drivingbtn" onmouseover="showInfo('a2', true)" onmouseout="showInfo('a2', false)">
                <div id="icon_a2" class="drivingicon">
                <center>
                <?php echo file_get_contents($THEME->get_url('static/images/category_a2.svg', false, 'artefact/europass')); ?>
                </center>
                </div>
                <div id="info_a2" class="drivinginfo" style="display:none">
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_lightning.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>&lt; 35 kW - 0.2 kW/kg</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_user.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>18+</b></span></div>
                </div>
                <div class="drivingchk"><?php echo $elements['category_a2']['html']; ?></div>
                <div class="drivinglbl"><?php echo $elements['category_a2']['title']; ?></div>
            </div>
            <div class="drivingbtn" onmouseover="showInfo('a', true)" onmouseout="showInfo('a', false)">
                <div id="icon_a" class="drivingicon">
                <center>
                <?php echo file_get_contents($THEME->get_url('static/images/category_a.svg', false, 'artefact/europass')); ?>
                </center>
                </div>
                <div id="info_a" class="drivinginfo" style="display:none">
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_lightning.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>&gt; 35 kW - 0.2 kW/kg</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_user.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>20/24+</b></span></div>
                </div>
                <div class="drivingchk"><?php echo $elements['category_a']['html']; ?></div>
                <div class="drivinglbl"><?php echo $elements['category_a']['title']; ?></div>
            </div>
            </td>
        </tr>
        <tr id="drivinglicence_categories_container_B" class="switchbox">
            <td>
            <div class="drivingbtn" onmouseover="showInfo('b1', true)" onmouseout="showInfo('b1', false)">
                <div id="icon_b1" class="drivingicon">
                <center>
                <?php echo file_get_contents($THEME->get_url('static/images/category_b1.svg', false, 'artefact/europass')); ?>
                </center>
                </div>
                <div id="info_b1" class="drivinginfo" style="display:none">
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_lightning.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>&lt; 15 kW</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_weight.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>&lt; 400/500 kg</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_user.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>16+</b></span></div>
                </div>
                <div class="drivingchk"><?php echo $elements['category_b1']['html']; ?></div>
                <div class="drivinglbl"><?php echo $elements['category_b1']['title']; ?></div>
            </div>
            <div class="drivingbtn" onmouseover="showInfo('b', true)" onmouseout="showInfo('b', false)">
                <div id="icon_b" class="drivingicon">
                <center>
                <?php echo file_get_contents($THEME->get_url('static/images/category_b.svg', false, 'artefact/europass')); ?>
                </center>
                </div>
                <div id="info_b" class="drivinginfo" style="display:none">
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_weight.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>&lt; 3500 kg</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_group.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>max. 8+1</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_trailer.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>&lt; 750 kg</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_user.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>18+</b></span></div>
                </div>
                <div class="drivingchk"><?php echo $elements['category_b']['html']; ?></div>
                <div class="drivinglbl"><?php echo $elements['category_b']['title']; ?></div>
            </div>
            <div class="drivingbtn" onmouseover="showInfo('be', true)" onmouseout="showInfo('be', false)">
                <div id="icon_be" class="drivingicon">
                <center>
                <?php echo file_get_contents($THEME->get_url('static/images/category_be.svg', false, 'artefact/europass')); ?>
                </center>
                </div>
                <div id="info_be" class="drivinginfo" style="display:none">
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_weight.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>&lt; 3500 kg</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_group.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>max. 8+1</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_trailer.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>&gt; 750 kg</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_user.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>18+</b></span></div>
                </div>
                <div class="drivingchk"><?php echo $elements['category_be']['html']; ?></div>
                <div class="drivinglbl"><?php echo $elements['category_be']['title']; ?></div>
            </div>
            </td>
        </tr>
        <tr id="drivinglicence_categories_container_C" class="switchbox">
            <td>
            <div class="drivingbtn" onmouseover="showInfo('c1', true)" onmouseout="showInfo('c1', false)">
                <div id="icon_c1" class="drivingicon">
                <center>
                <?php echo file_get_contents($THEME->get_url('static/images/category_c1.svg', false, 'artefact/europass')); ?>
                </center>
                </div>
                <div id="info_c1" class="drivinginfo" style="display:none">
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_weight.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>&lt; 7500 kg</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_group.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>max. 8+1</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_trailer.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>&lt; 750 kg</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_user.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>18+</b></span></div>
                </div>
                <div class="drivingchk"><?php echo $elements['category_c1']['html']; ?></div>
                <div class="drivinglbl"><?php echo $elements['category_c1']['title']; ?></div>
            </div>
            <div class="drivingbtn" onmouseover="showInfo('c1e', true)" onmouseout="showInfo('c1e', false)">
                <div id="icon_c1e" class="drivingicon">
                <center>
                <?php echo file_get_contents($THEME->get_url('static/images/category_c1e.svg', false, 'artefact/europass')); ?>
                </center>
                </div>
                <div id="info_c1e" class="drivinginfo" style="display:none">
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_weight.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>&lt; 12000 kg</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_group.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>max. 8+1</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_trailer.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>&gt; 750 kg</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_user.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>18+</b></span></div>
                </div>
                <div class="drivingchk"><?php echo $elements['category_c1e']['html']; ?></div>
                <div class="drivinglbl"><?php echo $elements['category_c1e']['title']; ?></div>
            </div>
            <div class="drivingbtn" onmouseover="showInfo('c', true)" onmouseout="showInfo('c', false)">
                <div id="icon_c" class="drivingicon">
                <center>
                <?php echo file_get_contents($THEME->get_url('static/images/category_c.svg', false, 'artefact/europass')); ?>
                </center>
                </div>
                <div id="info_c" class="drivinginfo" style="display:none">
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_weight.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>&gt; 3500 kg</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_group.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>max. 8+1</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_trailer.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>&lt; 750 kg</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_user.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>21+</b></span></div>
                </div>
                <div class="drivingchk"><?php echo $elements['category_c']['html']; ?></div>
                <div class="drivinglbl"><?php echo $elements['category_c']['title']; ?></div>
            </div>
            <div class="drivingbtn" onmouseover="showInfo('ce', true)" onmouseout="showInfo('ce', false)">
                <div id="icon_ce" class="drivingicon">
                <center>
                <?php echo file_get_contents($THEME->get_url('static/images/category_ce.svg', false, 'artefact/europass')); ?>
                </center>
                </div>
                <div id="info_ce" class="drivinginfo" style="display:none">
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_weight.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>&gt; 3500 kg</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_group.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>max. 8+1</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_trailer.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>&gt; 750 kg</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_user.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>21+</span></div>
                </div>
                <div class="drivingchk"><?php echo $elements['category_ce']['html']; ?></div>
                <div class="drivinglbl"><?php echo $elements['category_ce']['title']; ?></div>
            </div>
            </td>
        </tr>
        <tr id="drivinglicence_categories_container_D" class="switchbox">
            <td>
            <div class="drivingbtn" onmouseover="showInfo('d1', true)" onmouseout="showInfo('d1', false)">
                <div id="icon_d1" class="drivingicon">
                <center>
                <?php echo file_get_contents($THEME->get_url('static/images/category_d1.svg', false, 'artefact/europass')); ?>
                </center>
                </div>
                <div id="info_d1" class="drivinginfo" style="display:none">
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_group.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>max. 16+1</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_width.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>max. 8m</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_trailer.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>&lt; 750 kg</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_user.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>21+</b></span></div>
                </div>
                <div class="drivingchk"><?php echo $elements['category_d1']['html']; ?></div>
                <div class="drivinglbl"><?php echo $elements['category_d1']['title']; ?></div>
            </div>
            <div class="drivingbtn" onmouseover="showInfo('d1e', true)" onmouseout="showInfo('d1e', false)">
                <div id="icon_d1e" class="drivingicon">
                <center>
                <?php echo file_get_contents($THEME->get_url('static/images/category_d1e.svg', false, 'artefact/europass')); ?>
                </center>
                </div>
                <div id="info_d1e" class="drivinginfo" style="display:none">
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_group.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>max. 16+1</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_width.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>max. 8m</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_trailer.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>&gt; 750 kg</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_user.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>21+</b></span></div>
                </div>
                <div class="drivingchk"><?php echo $elements['category_d1e']['html']; ?></div>
                <div class="drivinglbl"><?php echo $elements['category_d1e']['title']; ?></div>
            </div>
            <div class="drivingbtn" onmouseover="showInfo('d', true)" onmouseout="showInfo('d', false)">
                <div id="icon_d" class="drivingicon">
                <center>
                <?php echo file_get_contents($THEME->get_url('static/images/category_d.svg', false, 'artefact/europass')); ?>
                </center>
                </div>
                <div id="info_d" class="drivinginfo" style="display:none">
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_group.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>&gt; 8+1</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_trailer.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>&lt; 750 kg</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_user.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>24+</b></span></div>
                </div>
                <div class="drivingchk"><?php echo $elements['category_d']['html']; ?></div>
                <div class="drivinglbl"><?php echo $elements['category_d']['title']; ?></div>
            </div>
            <div class="drivingbtn" onmouseover="showInfo('de', true)" onmouseout="showInfo('de', false)">
                <div id="icon_de" class="drivingicon">
                <center>
                <?php echo file_get_contents($THEME->get_url('static/images/category_de.svg', false, 'artefact/europass')); ?>
                </center>
                </div>
                <div id="info_de" class="drivinginfo" style="display:none">
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_group.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>&gt; 8+1</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_trailer.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>&gt; 750 kg</b></span></div>
                    <div class="infoicon drivinglicence"><?php echo file_get_contents($THEME->get_url('static/images/infoicon_user.svg', false, 'artefact/europass')); ?><span class="text-tiny"><b>24+</b></span></div>
                </div>
                <div class="drivingchk"><?php echo $elements['category_de']['html']; ?></div>
                <div class="drivinglbl"><?php echo $elements['category_de']['title']; ?></div>
            </div>
            </td>
        </tr>
        <tr id="drivinglicence_submitform_container" class="btn success submitcancel form-group">
            <td id="drivinglicence_submitform"><br /><?php echo $elements['submit']['html']; ?></td>
        </tr>
    </tbody>
</table>
<?php
echo $hidden_elements;
echo '</form>';
?>
