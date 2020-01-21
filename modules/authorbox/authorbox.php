<?php

/**
* This is a module that will show author box.
*
* @class infoboxmodule
*/

class IMBB_AuthorBoxModule extends FLBuilderModule{

    /*
    * The module construct.
    */
    public function __construct() {

        parent::__construct( array(
            'name'            => __('Author box', 'imbb'),                            
            'description'     => __('A module for displaying author information below content posts.', 'imbb'),
            'category'        => __('Example Modules', 'imbb'),
            'dir'             => INFO_BOX_DIR . 'modules/authorbox/',
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
    'IMBB_AuthorBoxModule',
    array(
        'general' => array(
            'title' => __('General', 'imbb'),
            'sections' => array(
                'general' => array(
                    'title' => __('Author source', 'imbb'),
                    'fields' => array(
                        'authorsource' => array(
                            'type'    => 'select',
                            'label'   => __('Source', 'imbb'),
                            'class'   => '',
                            'default' => 'current_author',
                            'options' => array(
                                'current_author' => __('Current Author', 'imbb'),
                                'custom_author'  => __('Custom Author', 'imbb'),
                            ),
                            'toggle'  => array(
                                'current_author' => array(
                                    'sections' => array(''),
                                    'fields' => array(),
                                ),
                                'custom_author' => array(
                                    'sections' => array('custom_author_sect'),
                                    'fields'   => array(''),
                                ),
                            ),
                        ),
                    ),
                ),
                'custom_author_sect' => array(
                    'title'  => __('Custom Author Info', 'imbb'), // Section Title
                    'fields' => array( // Section Fields
                        'img_url'          => array(
                            'type'  => 'photo',
                            'label' => __('Profile Picture', 'imbb'),
                        ),
                        'custom_author_name' => array(
                            'type'    => 'text',
                            'label'   => __('Author Name', 'imbb'),
                            'default' => 'Rahul Lakhwani',
                            'preview' => array(
                                'type'     => 'text',
                                'selector' => '.im-authorbox-name-span',
                            ),
                        ),
                        'custom_biography_text'   => array(
                            'type'    => 'editor',
                            'label'   => __('Biography', 'imbb'),
                            'default' => 'Content writer demo biography text',
                            'rows'    => '6',
                            'preview' => array(
                                'type'     => 'text',
                                'selector' => '.im-authorbox-bio',
                            ),
                        ),
                    ),
                ),
            ),
        ),
        'style_tab'  => array( // Tab
            'title'    => __('Style', 'imbb'), 
            'sections' => array( 
                'box_style'  => array( // Section
                    'title'  => __('Box Style', 'imbb'), 
                    'fields' => array( 
                        'authorbox_border'   => array(
                            'type'       => 'border',
                            'label'      => __('Border', 'imbb'),
                            'responsive' => true,
                            'preview'    => array(
                                'type'     => 'css',
                                'selector' => '.im-authorbox-content',
                            ),
                        ),
                        'box_bg_type' => array(
                            'type'    => 'select',
                            'label'   => __( 'Select Background', 'imbb' ),
                            'default' => 'color',
                            'options' => array(
                                ''         => __( 'None', 'imbb' ),
                                'color'    => __( 'Color', 'imbb' ),
                            ),
                            'toggle'  => array(
                                'color'    => array(
                                    'fields' => array( 'bg_color' ),
                                ),
                            ),
                        ),
                        'bg_color'                   => array(
                            'type'        => 'color',
                            'connections' => array( 'color' ),
                            'label'       => __( 'Background Color', 'uabb' ),
                            'default'     => '',
                            'show_reset'  => true,
                            'show_alpha'  => true,
                            'preview'     => array(
                                'type'     => 'css',
                                'selector' => '.im-authorbox-content',
                                'property' => 'background',
                            ),
                        ),
                        'box_padding'        => array(
                            'type'        => 'dimension',
                            'label'       => __('Padding', 'imbb'),
                            'default'    => 10,
                            'units'     => array('px'),
                            'preview'     => array(
                                'type'     => 'css',
                                'selector' => '.im-authorbox-content',
                                'property' => 'padding',
                                'unit'     => 'px',
                            ),
                            'responsive'  => true,
                        ),
                    ),
                ),
                'pic_style' => array( // Section
                    'title'  => __( 'Profile Picture', 'imbb' ), // Section Title
                    'fields' => array( // Section Fields
                        'img_position' => array(
                            'type'    => 'select',
                            'label'   => __( 'Position', 'imbb' ),
                            'default' => 'start',
                            'options' => array(
                                'start'  => __( 'Top', 'imbb' ),
                                'center' => __( 'Middle', 'imbb' ),
                            ),
                        ),
                        'img_border'   => array(
                            'type'       => 'border',
                            'label'      => __( 'Border', 'imbb' ),
                            'responsive' => true,
                            'preview'    => array(
                                'type'     => 'css',
                                'selector' => '.pp-authorbox-img img',
                            ),
                        ),
                        'img_padding'     => array(
                            'type'        => 'dimension',
                            'label'       => __( 'Padding', 'imbb' ),
                            'units'     => array( 'px' ),
                            'default'   => 10,
                            'preview'     => array(
                                'type'     => 'css',
                                'selector' => '.pp-authorbox-img',
                                'property' => 'padding',
                                'unit'     => 'px',
                            ),
                            'responsive'  => true,
                            'slider'      => true,
                        ),
                    ),
                ),

            ),
        ),
        'authorbox_typo' => array( //tab
            'title' => __('Typography', 'imbb'),
            'sections' => array(
                'name_typo_sect' => array(
                    'title' => __('Name', 'imbb'),
                    'fields' => array(
                        'authorname_tag' => array(
                            'type' => 'select',
                            'label' => __('Heading Tag', 'imbb'),
                            'default' => 'h3',
                            'options' => array(
                                'h1' => 'h1',
                                'h2' => 'h2',
                                'h3' => 'h3',
                                'h4' => 'h4',
                                'h5' => 'h5',
                                'h6' => 'h6',
                            ),
                        ),
                        'authorname_typo'      => array(
                            'type'       => 'typography',
                            'label'      => __( 'Name', 'imbb' ),
                            'responsive' => true,
                            'preview'    => array(
                                'type'     => 'css',
                                'selector' => '.im-authorbox-authorname',
                            ),
                        ),
                        'authorname_color'      => array(
                            'type'        => 'color',
                            'label'       => __('Name Color', 'imbb'),
                            'show_reset'  => true,
                            'show_alpha'  => true,
                            'preview'     => array(
                                'type'     => 'css',
                                'selector' => '.im-authorbox-authorname *',
                                'property' => 'color',
                            ),
                        ),
                    ),
                ),
                'bio_typo_sect' => array(
                    'title' => __('Biography', 'imbb'),
                    'fields' => array(
                        'bio_typo'      => array(
                            'type'       => 'typography',
                            'label'      => __( 'Biography', 'imbb' ),
                            'responsive' => true,
                            'preview'    => array(
                                'type'     => 'css',
                                'selector' => '.im-authorbox-bio',
                            ),
                        ),
                        'bio_color'      => array(
                            'type'        => 'color',
                            'label'       => __('Biography Color', 'imbb'),
                            'show_reset'  => true,
                            'show_alpha'  => true,
                            'preview'     => array(
                                'type'     => 'css',
                                'selector' => '.im-authorbox-bio',
                                'property' => 'color',
                            ),
                        ),
                    ),
                ),
            ),
        ),            
    ),
);