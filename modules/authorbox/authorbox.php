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
                'main_style'        => array( 
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
            ),
        ),
    ),
);