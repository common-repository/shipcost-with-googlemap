<?php
/*
 * Plugin Name: shipcost with googlemap
 * Description:This is a plugin which can calculate price by input starting point and endpoint on googlemap you can decide how to use it by yourself  
 * Author: nekoto
 * Plugin URI:https://wordpress.org/plugins/shipcost-with-googlemap
 * Version: 1.2
 * Text Domain:	shipcost-with-googlemap
 * Domain Path: /translation/
 */


if(!defined('GMSC_DIR')){
	define('GMSC_DIR', dirname(__FILE__));
}

if (!defined('GMSC_TEXT_DOMAIN')) {
    define('GMSC_TEXT_DOMAIN', 'shipcost-with-googlemap');
}

define('GMSC_URL', plugin_dir_url(__FILE__));


function LoadGMSCplugin_Class(){
	include GMSC_DIR.'/includes/class_GMSCplugin-main.php';
	include GMSC_DIR.'/includes/class_GMSCplugin-cofunction.php';
	include GMSC_DIR.'/includes/class_GMSCplugin-setting.php';
	include GMSC_DIR.'/translation/GMSC-translation.php';
	$GLOBALS['GMSC']=GMSC();
}

function GMSC(){
	return GMSC_Plugin::instance();
}
function GMSC_textdomain() {
	load_plugin_textdomain( GMSC_TEXT_DOMAIN , false, dirname( plugin_basename( __FILE__ ) ) . '/translation/' );
}
add_action('plugins_loaded', 'LoadGMSCplugin_Class');
add_action( 'plugins_loaded', 'GMSC_textdomain');
?>