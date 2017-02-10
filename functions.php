<?php
if ( !class_exists( 'ReduxFramework' ) && file_exists( dirname( __FILE__ ) . '/core/framework.php' ) ) {
    require_once(dirname(__FILE__) . '/core/framework.php');
}
if ( !isset( $redux_demo ) && file_exists( dirname( __FILE__ ) . '/options/config.php' ) ) {
    require_once( dirname( __FILE__ ) . '/options/config.php' );
}