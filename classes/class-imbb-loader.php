<?php

if( ! class_exists( 'ImbbLoader' ) ){
    /**
     * class initialization
     */
    class Imbb_Loader {

        /**
         * Constructor
         */
        static public function init() {
            add_action('plugins_loaded', __CLASS__ . '::setup_hooks');
        }

        static public function setup_hooks() {
            add_action('init', __CLASS__ . '::load_modules');
        }

        static public function load_modules() {

            require_once INFO_BOX_DIR . 'modules/infobox/infobox.php';
            require_once INFO_BOX_DIR . 'modules/authorbox/authorbox.php';
        }
    }
}

Imbb_Loader::init();

