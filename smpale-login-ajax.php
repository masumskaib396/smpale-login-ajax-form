<?php 
/*
Plugin Name: Smpale Login Ajax
Plugin URI: https://github.com/masumskaib396/loginform
Description: All in one Sidebar widget solution
Version: 1.1.0
Author: msakib
Author URI: https://profiles.wordpress.org/msakib/
License: GPLv2 or later
Text Domain: slfa
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}




 
function slfs_plugin_override() {
   
	//Set plugin version constant.
	define( 'SLFA_VERSION', '1.1.0');

	// Plugin Function Folder Path
	define( 'SLFA_WIDGET_INC', plugin_dir_path( __FILE__ ) . 'inc/' );

	// Plugin Widget Folder Path
	define( 'SLFA_WIDGET_DIR', plugin_dir_path( __FILE__ ) . 'widgets/' );

	// Assets Folder URL
	define( 'SLFA_ASSETS', plugins_url( 'assets', __FILE__ ) );



	require_once(SLFA_WIDGET_DIR. 'slfs-login.php' );
	require_once(SLFA_WIDGET_INC . 'functions.php');
	require_once(SLFA_WIDGET_INC . 'ajax-function.php');
}
add_action( 'plugins_loaded', 'slfs_plugin_override' );

