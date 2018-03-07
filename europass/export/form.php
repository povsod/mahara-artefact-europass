<?php
echo $form_tag;
?>

<div class="panel-items mb0 ml0">
    <div class="step step1 panel panel-default first" id="step1">
        <h3 class="panel-heading"><?php echo get_string('exportstep1', 'artefact.europass'); ?></h3>
        <div class="panel-body">
            <div class="form-group radio pts pbs">
                <div class="radio"><input type="checkbox" class="radio" id="documenttype_ecv" name="documenttype[]" tabindex="0" value="ecv" checked="checked"> <label for="documenttype_ecv" class="pls prs"><?php echo get_string('ecv-tab', 'artefact.europass'); ?></label></div>

                <div class="radio pll text-muted"><?php echo get_string('esp-tab', 'artefact.europass'); ?></div>
                <div class="radio pll"><input type="checkbox" class="radio" id="documenttype_elp" name="documenttype[]" tabindex="0" value="elp"> <label for="documenttype_elp" class="pls prs"><?php echo get_string('elp-tab', 'artefact.europass'); ?></label></div>
                <div class="radio pll"><input type="checkbox" class="radio" id="documenttype_esp" name="documenttype[]" tabindex="0" value="esp"> <label for="documenttype_esp" class="pls prs"><?php echo get_string('attach', 'artefact.europass'); ?></label></div>
            </div>
        </div>
    </div>

    <div class="step step2 panel panel-default">
        <h3 class="panel-heading"><?php echo get_string('exportstep2', 'artefact.europass'); ?></h3>
        <div class="panel-body">
            <div class="form-group radio pts pbs">
                <div class="radio"><input type="radio" class="radio" id="fileformat_pdf" name="fileformat" tabindex="0" value="pdf" checked="checked"> <label for="fileformat_pdf"><?php echo get_string('pdf', 'artefact.europass'); ?></label></div>
                <div class="radio"><input type="radio" class="radio" id="fileformat_word" name="fileformat" tabindex="0" value="word"> <label for="fileformat_word"><?php echo get_string('doc', 'artefact.europass'); ?></label></div>
                <div class="radio"><input type="radio" class="radio" id="fileformat_opendoc" name="fileformat" tabindex="0" value="opendoc"> <label for="fileformat_opendoc"><?php echo get_string('odt', 'artefact.europass'); ?></label></div>
                <div class="radio"><input type="radio" class="radio" id="fileformat_xml" name="fileformat" tabindex="0" value="xml"> <label for="fileformat_xml"><?php echo get_string('xml', 'artefact.europass'); ?></label></div>
                <div class="radio"><input type="radio" class="radio" id="fileformat_html" name="fileformat" tabindex="0" value="html"> <label for="fileformat_html"><?php echo get_string('html', 'artefact.europass'); ?></label></div>
            </div>
        </div>
    </div>

    <div class="step step3 panel panel-default">
        <h3 class="panel-heading"><?php echo get_string('exportstep3', 'artefact.europass'); ?></h3>
        <div class="panel-body"><br />
            <a href="#" id="showconfig">
                <span class="icon icon-cog prs text-default"></span>
                <?php echo get_string('generaloptions', 'artefact.europass'); ?>
            </a>
            <div class="mtl">
                <?php echo $elements['submit']['html']; ?>
            </div>
            <p class="metadata ptl"><?php echo get_string('generateexportdesc', 'artefact.europass'); ?></p>
        </div>
    </div>
</div>

<div class="modal modal-shown modal-docked-right configure modal-docked closed" id="europassconf" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" data-height=".modal-body">
            <div class="modal-header">
                <a class="deletebutton close" href="#" id="hideconfig">
                    <span class="times">&times;</span>
                    <span class="sr-only"><?php get_string('Close'); ?></span>
                </a>
                <h4 class="modal-title europassconf-header text-inline" id="europassconf-heading"></h4>
                <span class="icon icon-cogs icon-2x pull-right"></span>
            </div>
            <div class="modal-body europassconf-content pt0 pb0">
                <!-- form elements here... -->
                <div id="europassconf_lang_container" class="<?php //echo $elements['lang']['type']; ?> form-group">
                    <label for="europassconf_lang"><?php echo $elements['locale']['title']; ?></label>
                    <div class="btn-group" data-toggle="buttons">
                    <?php
                        $i = 1;
                        foreach ($elements['locale']['options'] as $l) {
                            if (isset($elements['locale']['defaultvalue']) && $elements['locale']['defaultvalue'] == $l) {
                                echo "<label class=\"btn btn-default active\">";
                                echo "<input type=\"radio\" name=\"locale\" value=\"$l\" autocomplete=\"off\" checked><span class=\"lang-md\" lang=\"$l\"></span>";
                                echo "</label>";
                            }
                            else {
                                echo "<label class=\"btn btn-default\">";
                                echo "<input type=\"radio\" name=\"locale\" value=\"$l\" autocomplete=\"off\"><span class=\"lang-md\" lang=\"$l\"></span>";
                                echo "</label>";
                            }
                            if ($i % 9 == 0) {
                                echo "<br />";
                            }
                            $i++;
                        }
                    ?>
                    </div>
                </div>
                <div id="europassconf_logo_container" class="<?php echo $elements['logo']['type']; ?> form-group">
                    <label for="europassconf_logo"><?php echo $elements['logo']['title']; ?></label>
                    <?php echo $elements['logo']['html']; ?>
                </div>
                <div id="europassconf_profilepic_container" class="<?php echo $elements['profilepic']['type']; ?> form-group">
                    <label for="europassconf_profilepic"><?php echo $elements['profilepic']['title']; ?></label>
                    <?php echo $elements['profilepic']['html']; ?>
                </div>
                <div id="europassconf_dateformat_container" class="<?php echo $elements['dateformat']['type']; ?> form-group">
                    <label for="europassconf_dateformat"><?php echo $elements['dateformat']['title']; ?></label>
                    <?php echo $elements['dateformat']['html']; ?>
                    <div class="description"><?php echo $elements['dateformat']['description']; ?></div>
                </div>
                <div class="mtl">
                    <?php //echo $elements['submit']['html']; ?>
                    <input type="submit" class="btn btn-primary btn-lg submit btn" id="exporteuropass_submit" name="submit" tabindex="0" value="<?php echo $elements['submit']['value']; ?>">
                </div>
            </div>
        </div>
    </div>
</div>

<?php
echo $hidden_elements;
echo '</form>';
?>
