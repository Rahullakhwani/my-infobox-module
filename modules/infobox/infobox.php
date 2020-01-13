<?php

/**
 * This is an example module that will show infobox.
 *
 * @class infoboxmodule
 */

 class InfoBoxModule extends FLBuilderModule{

    /*
	* The module construct.
	*/
    public function __construct() {

        parent::__construct( array(
            'name'            => __('New Info box', 'imbb'),                            
            'description'     => __('An module for displaying images, icon, heading and description in a box.', 'imbb'),
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
 FLBuilder::register_module( 'InfoBoxModule' , array(
	'general' => array(
		'title' => __( 'General', 'imbb' ),
		'sections' => array(
			'general' => array(
				'title' => __( 'Section Title', 'imbb' ),
				'fields' => array(
					'icon_type' => array(
						'type' => 'icon',
						'label' => __('Select Icon', 'imbb'),
						'default'     => 'ua-icon ua-icon-mail2',
						'show_remove'   => true,
                    ),
                ),
            ),
        ),
    ),
));
