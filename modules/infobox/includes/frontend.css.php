<?php

if (!empty($settings->color)) {
    FlBuilderCSS::rule(array(
        'selector' => ".fl-node-$id .im-description, .fl-node-$id .im-heading",
        'props'    => array(
            'color' => $settings->color,
        ),
    ));
}

FLBuilderCSS::typography_field_rule(array(
    'settings'     => $settings,
    'setting_name' => 'typography',
    'selector'     => ".fl-node-$id .im-textbox .im-description",
));

FLBuilderCSS::border_field_rule(array(
    'settings'     => $settings,
    'setting_name'     => 'my_border',
    'selector'     => ".fl-node-$id .bg-border",
));

?>

/* Heading Css */

.fl-node-<?php echo $id; ?> .im-heading-container {
text-align: <?php echo $settings->heading_align; ?>;
}

/* Separator Css */

<?php
$settings->separator_thickness = ('' != trim($settings->separator_thickness)) ? $settings->separator_thickness : '1';
$settings->separator_width = ('' != trim($settings->separator_width)) ? $settings->separator_width : '100';
?>
<?php
if ('line' == $settings->separator) { ?>

    .fl-node-<?php echo $id; ?> .im-separator {
    border-top: <?php echo $settings->separator_thickness; ?>px <?php echo $settings->separator_style; ?> <?php echo '#' . $settings->separator_color; ?>;
    width: <?php echo $settings->separator_width; ?>px;
    display: inline-block;
    }
<?php
}
?>
.fl-node-<?php echo $id; ?> .im-separator-parent {
text-align: <?php echo $settings->separator_align; ?>;
}

/* Icon Css */
.fl-node-<?php echo $id; ?> .temp i {
font-size: <?php echo $settings->icon_size; ?>px;
}

.fl-node-<?php echo $id; ?> .my-icon-wrap {
text-align: -webkit-<?php echo $settings->icon_align; ?>;
}

.fl-node-<?php echo $id; ?> .my-icon-wrap i,
.fl-node-<?php echo $id; ?> .my-icon-wrap i:before{

<?php
if ('simple' != $settings->icon_style) {
    // echo 'background: ' .'#'. $settings->icon_bg_color; 
}
?>;

<?php
if ('circle' == $settings->icon_style) {
?>
    color: <?php echo '#' . $settings->icon_color; ?>;
    background: <?php echo '#' . $settings->icon_bg_color; ?>;
    border-radius: 100px;
    line-height: <?php echo $settings->icon_size * 2; ?>px;
    height: <?php echo $settings->icon_size * 2; ?>px;
    width: <?php echo $settings->icon_size * 2; ?>px;
    text-align: center;
    display: block;
<?php

}
?>
}
/* Icon Css End */

/* Background Property */

.fl-node-<?php echo $id; ?> .im-bg-container {
background: <?php echo '#' . $settings->bg_color; ?>;
}

.fl-node-<?php echo $id; ?> .im-bg-container {

padding-top: <?php echo $settings->padding_top . 'px;' ?>;
padding-bottom: <?php echo $settings->padding_bottom . 'px;' ?>;
padding-left: <?php echo $settings->padding_left . 'px;' ?>;
padding-right: <?php echo $settings->padding_right . 'px;' ?>;
}
<?php
// var_dump($settings);
// wp_die();
?>