<?php

/**
 * This is an example module that will show infobox.
 *
 * @class infoboxmodule
 */

 class IMBB_InfoBoxModule extends FLBuilderModule{

    /*
	* The module construct.
	*/
    public function __construct() {
        
        parent::__construct( array(
            'name'            => __('Content Info box', 'imbb'),                            
            'description'     => __('A module for displaying images, icon, heading and description in a box.', 'imbb'),
            'category'        => __('Example Modules', 'imbb'),
            'dir'             => INFO_BOX_DIR . 'modules/infobox/',
            'partial_refresh' => true,
            'url'             => plugins_url('', __FILE__),

        ));

    }
 }
/**
 * Register the module and its form settings.
 * We are using a very simple form here with only two options, photo_one and photo_two.
 */
FLBuilder::register_module(
    'IMBB_InfoBoxModule',
    array(
        'general' => array(
            'title' => __('General', 'imbb'),
            'sections' => array(
                'general' => array(
                    'title' => __('Text Box basics', 'imbb'),
                    'fields' => array(
                        'heading' => array(
                            'type' => 'text',
                            'label' => __('Heading', 'imbb'),
                            'preview' => array(
                                'type' => 'text',
                                'selector' => '.im-heading',
                            ),
                        ),
                        'text_link' => array(
                            'type'  => 'link',
                            'label' => __('Heading Link', 'imbb'),
                            'preview' => array(
                                'type' => 'none',
                                // 'selector' => '',
                            ),
                        ),
                        'heading_align'  => array(
                            'type'    => 'align',
                            'label'   => __('Heading Alignment', 'imbb'),
                            'default' => 'center',
                            'preview' => array(
                                'type'     => 'css',
                                'selector' => '.im-heading-container',
                                'property' => 'text-align',
                            ),
                        ),
                        'text_editor' => array(
                            'type'  => 'editor',
                            'label' => __('Text Box', 'imbb'),
                            'preview' => array(
                                'type' => 'text',
                                'selector' => '.im-description',
                            ),
                        ),
                    ),
                ),
                'Icon' => array(
                    'title' => __('Icon basics', 'imbb'),
                    'fields' => array(
                        'icon_type' => array(
                            'type' => 'icon',
                            'label' => __('Select Icon', 'imbb'),
                            // 'default'     => 'ua-icon ua-icon-mail2',
                            'show_remove'   => true,
                        ),
                        'icon_size'            => array(
                            'type'        => 'unit',
                            'label'       => __('Icon Size', 'imbb'),
                            'placeholder' => '20',
                            'maxlength'   => '4',
                            'size'        => '5',
                            'slider'      => true,
                            'units'       => array('px'),
                        ),
                        'icon_align' => array(
                            'type'    => 'align',
                            'label'   => __('Icon Alignment', 'imbb'),
                            'default' => 'center',
                            // 'options' => array(
                            //     'left'   => __('Left', 'imbb'),
                            //     'center' => __('Center', 'imbb'),
                            //     'right'  => __('Right', 'imbb'),
                            // ),
                        ),
                        'icon_style'            => array(
                            'type'    => 'select',
                            'label'   => __('Icon Background Style', 'imbb'),
                            'default' => 'simple',
                            'options' => array(
                                'simple' => __('Simple', 'imbb'),
                                'circle' => __('Circle Background', 'imbb'),
                            ),
                            'toggle'  => array(
                                'simple' => array(
                                    'fields' => array(),
                                ),
                                'circle' => array(
                                    'fields' => array('icon_color', 'icon_bg_color'),
                                ),
                            ),
                        ),
                        'icon_color'           => array(
                            'type'        => 'color',
                            'label'       => __('Icon Color', 'imbb'),
                            'default'     => '',
                            'show_reset'  => true,
                            'connections' => array('color'),
                            'show_alpha'  => true,
                        ),
                        'icon_bg_color'           => array(
                            'type'        => 'color',
                            'label'       => __('Icon Background Color', 'imbb'),
                            'default'     => '',
                            'show_reset'  => true,
                            'connections' => array('color'),
                            'show_alpha'  => true,
                        ),
                    ),
                ),
            ),
        ),
        'styling' => array(
            'title' => __('Content Style', 'imbb'),
            'sections' => array(
                'style' => array(
                    'title' => __('Text styling', 'imbb'),
                    'fields' => array(
                        'text_tag' => array(
                            'type' => 'select',
                            'label' => __('Heading Tag', 'imbb'),
                            'default' => 'h2',
                            'options' => array(
                                'h1' => 'h1',
                                'h2' => 'h2',
                                'h3' => 'h3',
                                'h4' => 'h4',
                                'h5' => 'h5',
                                'h6' => 'h6',
                            ),
                        ),
                        'heading_color'      => array(
                            'type'        => 'color',
                            'label'       => __('Heading Color', 'imbb'),
                            'show_reset'  => true,
                            'show_alpha'  => true,
                            'preview'     => array(
                                'type'     => 'css',
                                'selector' => '.im-heading',
                                'property' => 'color',
                            ),
                        ),
                        'color'      => array(
                            'type'        => 'color',
                            'label'       => __('Description Color', 'imbb'),
                            'show_reset'  => true,
                            'show_alpha'  => true,
                            'preview'     => array(
                                'type'     => 'css',
                                'selector' => '.im-description ',
                                'property' => 'color',
                            ),
                        ),
                        'typography' => array(
                            'type'       => 'typography',
                            'label'      => __('Content Typography', 'imbb'),
                            'preview'     => array(
                                'type'    => 'css',
                                'selector' => '.im-textbox .im-description',
                            ),
                        ),
                        'padding' => array(
                            'type' => 'dimension',
                            'label'      => __('Content Padding', 'imbb'),
                            'slider'    => array(
                                'min'  => 0,
                                'max'  => 1000,
                                'step' => 10,
                            ),
                            'units'      => array('px'),
                            'preview'    => array(
                                'type'      => 'css',
                                'selector'  => '.im-bg-container',
                                'property' => 'padding',
                                'unit' => 'px',
                            ),
                        ),
                    ),
                ),
                'separator_style' => array(
                    'title' => __('Separator styling', 'imbb'),
                    'fields' => array(
                        'separator' => array(
                            'type'  => 'select',
                            'label' => __('Separator', 'imbb'),
                            'default' => 'none',
                            'options' => array(
                                'none'       => __('None', 'imbb'),
                                'line'       => __('Separator-Line', 'imbb'),
                                // 'line_icon'  => __( 'Separator-Line With Icon', 'imbb' ),
                                // 'line_image' => __( 'Separator-Line With Image', 'imbb' ),
                            ),
                            'toggle'  => array(
                                'line'  => array(
                                    'fields' => array('separator_position', 'separator_thickness', 'separator_style', 'separator_color', 'separator_width', 'separator_align'),
                                ),
                                /*'line_icon' => array(
								'sections' => array( 'separator_icon_basics' ),
								'fields' => array('separator_position', 'separator_line' ),
							),
							'line_image' => array(
								'sections' => array( 'separator_image' ),
								'fields' => array('separator_position'),
							),*/

                            ),
                        ),
                        /*'separator_position' => array(
						'type'    => 'select',
						'label'   => __( 'Separator Position', 'imbb' ),
						'default' => 'center',
						'options' => array(
							'center' => __( 'Between Heading & Description', 'imbb' ),
							'top'    => __( 'Top', 'imbb' ),
							'bottom' => __( 'Bottom', 'imbb' ),
						),
					),*/
                        'separator_thickness' => array(
                            'type'        => 'unit',
                            'label'       => __('Thickness', 'imbb'),
                            'placeholder' => '1',
                            'default' => '1',
                            'slider'      => array(
                                'min'  => 1,
                                'max'  => 10,
                                'step' => 1,
                            ),
                            'units'       => array('px'),
                            'preview'     => array(
                                'type'      => 'css',
                                'selector'  => '.fl-my-separator',
                                'property'  => 'border-top-width',
                                'unit'      => 'px',
                            ),
                        ),
                        'separator_style' => array(
                            'type'    => 'select',
                            'label'  => __('Line Style', 'imbb'),
                            'default' => 'solid',
                            'options' => array(
                                'solid'  => __('Solid', 'imbb'),
                                'dashed' => __('Dashed', 'imbb'),
                                'dotted' => __('Dotted', 'imbb'),
                            ),
                            'preview' => array(
                                'type'     => 'css',
                                'selector' => '.fl-my-separator',
                                'property' => 'border-top-property',
                            ),
                        ),
                        'separator_color'     => array(
                            'type'        => 'color',
                            'connections' => array('color'),
                            'label'       => __('Color', 'imbb'),
                            'default'     => '',
                            'show_alpha'  => true,
                            'show_reset'  => true,
                        ),
                        'separator_width' => array(
                            'type'        => 'unit',
                            'label'       => __('Width', 'imbb'),
                            'placeholder' => '100',
                            'units'       => array(
                                'px',
                            ),
                            'slider'      => array(
                                'min'  => 0,
                                'max'  => 1000,
                                'step' => 10,
                            ),
                        ),
                        'separator_align' => array(
                            'type'    => 'align',
                            'label'  => __('Line Align', 'imbb'),
                            'default' => 'center',
                            'preview' => array(
                                'type'     => 'css',
                                'selector' => '.fl-my-separator-parent',
                                'property'  => 'text-align',
                            ),
                        ),
                    ),
                ),
                /*'separator_icon_basics' => array(
				'title'  => __( 'Icon settings', 'imbb' ),
				'fields' => array(
					'icon'                 => array(
						'type'        => 'icon',
						'label'       => __( 'Icon', 'imbb' ),
						'show_remove' => true,
					),
				),
			),*/
                /*'separator_image'  => array(
				'title'  => __( 'Image Basics', 'imbb' ),
				'fields' => array(
					'photo'               => array(
						'type'        => 'photo',
						'label'       => __( 'Photo', 'imbb' ),
						'show_remove' => true,
					),
				)
			)*/
            )
        ),
        'Dimensions' => array(
            'title' => __('Box style', 'imbb'),
            'sections' => array(
                'style' => array(
                    'title' => __('Box border', 'imbb'),
                    'fields' => array(
                        'my_border' => array(
                            'type'       => 'border',
                            'label'      => 'Box Border',
                            'responsive' => true,
                            'preview'    => array(
                                'type'     => 'css',
                                'selector' => '.bg-border',
                                'property'  => 'border',
                                'unit'      => 'px',
                            ),
                        ),
                    ),
                ),
                'background'        => array(
                    'title' => __('Background color', 'imbb'),
                    'fields' => array(
                        'bg_color' => array(
                            'type'        => 'color',
                            'label'       => __('Background Color', 'imbb'),
                            'default'     => '',
                            'show_reset'  => true,
                            'show_alpha'  => true,
                            'preview'     => array(
                                'type'     => 'css',
                                'selector' => '.fl-bg-container',
                                'property' => 'background',
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
);
