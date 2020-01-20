<?php

$container_flex_direction = 'row';

FLBuilderCSS::border_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'authorbox_border',
    'selector' => ".fl-node-$id .im-authorbox-content",
));

FLBuilderCSS::dimension_field_rule(
    array(
        'settings'     => $settings,
        'setting_name' => 'box_padding',
        'selector'     => ".fl-node-$id .im-authorbox-content",
        'unit'         => 'px',
        'props'        => array(
            'padding-top'    => 'box_padding_top',
            'padding-right'  => 'box_padding_right',
            'padding-bottom' => 'box_padding_bottom',
            'padding-left'   => 'box_padding_left',
        ),
    )
);

?>

.fl-node-<?php echo $id; ?> .im-authorbox-container {
flex-direction : <?php echo $container_flex_direction; ?>;
}