<?php

$container_flex_direction = 'row';

FLBuilderCSS::border_field_rule(array(
    'settings' => $settings,
    'setting_name' => 'authorbox_border',
    'selector' => ".fl-node-$id .im-authorbox-content",
));

FLBuilderCSS::typography_field_rule(
    array(
        'settings'     => $settings,
        'setting_name' => 'authorname_typo',
        'selector'     => ".fl-node-$id .im-authorbox-authorname",
    )
);

FLBuilderCSS::typography_field_rule(
    array(
        'settings'     => $settings,
        'setting_name' => 'bio_typo',
        'selector'     => ".fl-node-$id .im-authorbox-bio",
    )
);

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

/* AuthorBox */
.fl-node-<?php echo $id; ?> .im-authorbox-container {
flex-direction : <?php echo $container_flex_direction; ?>;
}

/* Authorname color*/
.fl-node-<?php echo $id; ?> .im-authorbox-authorname * {
    color: <?php echo '#'.$settings->authorname_color; ?> ;
}

/* Biography color*/
.fl-node-<?php echo $id; ?> .im-authorbox-bio {
    color: <?php echo '#'.$settings->bio_color; ?> ;
}

/* Box Background color */
.fl-node-<?php echo $id; ?> .im-authorbox-content {
    background-color: <?php echo '#'.$settings->bg_color; ?> ;
}
