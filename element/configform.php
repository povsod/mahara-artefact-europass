
<div class="modal modal-shown modal-docked-right blockinstance configure modal-docked closed" id="letterconf" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content" data-height=".modal-body">
            <div class="modal-header">
                <a class="deletebutton close" href="#" id="hideconfig">
                    <span class="times">&times;</span>
                    <span class="sr-only"><?php get_string('Close'); ?></span>
                </a>
                <h4 class="modal-title letterconf-header text-inline" id="letterconf-heading"></h4>
                <span class="icon icon-cogs icon-2x pull-right"></span>
            </div>
            <div class="modal-body letterconf-content pt0 pb0">
                <div class="letterconf-inner">
                <?php echo $form_tag; ?>
                <div id="letterconf_logo_container" class="<?php echo $elements['logo']['type']; ?> form-group">
                    <label for="letterconf_logo"><?php echo $elements['logo']['title']; ?></label>
                    <?php echo $elements['logo']['html']; ?>
                </div>
                <div id="letterconf_align_container" class="<?php //echo $elements['align']['type']; ?> form-group">
                    <label for="letterconf_align"><?php echo $elements['align']['title']; ?></label>
                    <div class="btn-group" data-toggle="buttons">
                        <label class="btn btn-default<?php if (isset($elements['align']['defaultvalue']) && $elements['align']['defaultvalue'] == 'left') { echo ' active'; } ?>">
                            <input type="radio" name="align" value="left" autocomplete="off"<?php if (isset($elements['align']['defaultvalue']) && $elements['align']['defaultvalue'] == 'left') { echo ' checked'; } ?>><span class="icon icon-align-left"></span>
                        </label>
                        <label class="btn btn-default<?php if (isset($elements['align']['defaultvalue']) && $elements['align']['defaultvalue'] == 'justify') { echo ' active'; } ?>">
                            <input type="radio" name="align" value="justify" autocomplete="off"<?php if (isset($elements['align']['defaultvalue']) && $elements['align']['defaultvalue'] == 'justify') { echo ' checked'; } ?>><span class="icon icon-align-justify"></span>
                        </label>
                    </div>
                </div>
                <div id="letterconf_lang_container" class="<?php //echo $elements['lang']['type']; ?> form-group">
                    <label for="letterconf_lang"><?php echo $elements['lang']['title']; ?></label>
                    <div class="btn-group" data-toggle="buttons">
                    <?php
                        $i = 1;
                        foreach ($elements['lang']['options'] as $l) {
                            if (isset($elements['lang']['defaultvalue']) && $elements['lang']['defaultvalue'] == $l) {
                                echo "<label class=\"btn btn-default active\">";
                                echo "<input type=\"radio\" name=\"lang\" value=\"$l\" autocomplete=\"off\" checked><span class=\"lang-md\" lang=\"$l\"></span>";
                                echo "</label>";
                            }
                            else {
                                echo "<label class=\"btn btn-default\">";
                                echo "<input type=\"radio\" name=\"lang\" value=\"$l\" autocomplete=\"off\"><span class=\"lang-md\" lang=\"$l\"></span>";
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
                <div id="letterconf_sign_container" class="<?php echo $elements['sign']['type']; ?> form-group">
                    <label for="letterconf_sign"><?php echo $elements['sign']['title']; ?></label>
                    <?php echo $elements['sign']['html']; ?>
                </div>

                <div id="letterconf_submit_container" class="<?php echo $elements['submit']['type']; ?> form-group">
                    <label for="letterconf_submit"><?php echo $elements['submit']['title']; ?></label>
                    <?php echo $elements['submit']['html']; ?>
                </div>
                <?php
                    echo $hidden_elements;
                    echo '</form>';
                ?>
                </div>
            </div>
        </div>
    </div>
</div>
