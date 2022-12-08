<?php
/**
 * @package  alecaddPlugin
 */
/*
Plugin Name: move_site_plugin
Plugin URI: https://github.com/hossenmaruf
Description: This is my first attempt on writing a custom Plugin
Version: 1.0.0
Author: hossenmaruf
Author URI: https://github.com/hossenmaruf
License: GPLv2 or later
Text Domain: text_domain
*/


// If this file is called firectly, abort!!!
defined( 'ABSPATH' ) or die( 'Hey, what are you doing here? You silly human!' );

// Require once the Composer Autoload
if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

/**
 * The code that runs during plugin activation
 */
// function activate_alecadd_plugin() {
// 	Inc\Base\Activate::activate();
// }
// register_activation_hook( __FILE__, 'activate_alecadd_plugin' );

// /**
//  * The code that runs during plugin deactivation
//  */
// function deactivate_alecadd_plugin() {
// 	Inc\Base\Deactivate::deactivate();
// }
// register_deactivation_hook( __FILE__, 'deactivate_alecadd_plugin' );

/**
 * Initialize all the core classes of the plugin
 */
if ( class_exists( 'Inc\\Init' ) ) {
	Inc\Init::register_services();
}

echo 'hello' ; 