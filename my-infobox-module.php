<?php

/**
 * Plugin Name: Infobox Module for Beaver Builder
 * Plugin URI: www.wpmains.com
 * Description: Infobox module is used to add information box using beaver builder plugin.
 * Version: 1.0.0
 * Author: Rahul Lakhwani
 * Author URI: www.example.com
 * Text Domain: imbb
 */

define( 'INFO_BOX_DIR', plugin_dir_path(__FILE__) );
define( 'INFO_BOX_URL', plugins_url('/', __FILE__) );

// function my_modules_init_func(){

//         if ( class_exists( 'FLBuilder' ) ) {

        require_once INFO_BOX_DIR . 'classes/class-imbb-loader.php';
    
//     }
// }

// add_action('init', 'my_modules_init_func');