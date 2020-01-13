<?php

if( ! class_exists( 'ImbbLoader' ) ){
    /**
     * class initialization
     */
    class ImbbLoader {

        /**
         * Constructor
         */

        public function __construct()
        {
            
            add_action( 'admin_init', array ($this, 'load_modules'), 1 );
        }

        public function load_modules(){
            
            if ( ! class_exists('FLBuilder') ) {
                return;
            }else{
                /**
                 * load module files
                 */
                require_once INFO_BOX_DIR . 'modules/infobox/infobox.php';
            }
            
        }
    }
}

new ImbbLoader();

