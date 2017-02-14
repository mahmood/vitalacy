<?php
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/options/config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/options/sample-config2.php' );
}