<?php

?>
<div class="im-textbox">
    <div class="im-bg-container bg-border">
        <div class="my-icon-wrap">
            <span class="temp">
                <i class="<?php echo $settings->icon_type; ?>"></i>
            </span>
        </div>
        <<?php echo $settings->text_tag; ?> div class="im-heading-container">
            <a href="<?php echo $settings->text_link; ?>">
                <span class="im-heading"> <?php echo $settings->heading; ?></span>
            </a>
        </<?php echo $settings->text_tag; ?>>
        <div class="im-separator-parent">
            <div class="im-separator"></div>
        </div>
        <div class="im-description"><?php echo $settings->text_editor; ?></div>
    </div>
</div>