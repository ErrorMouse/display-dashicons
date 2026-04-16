<?php
/**
 * Plugin Name:         Display Dashicons
 * Description:         Enables the use of WordPress Dashicons on the front-end.
 * Version:             1.0
 * Requires at least:   5.2
 * Requires PHP:        7.2
 * Author:              Err
 * Author URI:          https://profiles.wordpress.org/nmtnguyen56/
 * License:             GPLv2 or later
 * License URI:         https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:         display-dashicons
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

add_action('wp_enqueue_scripts', 'errplugin_display_dashicons');
function errplugin_display_dashicons() {
	wp_enqueue_style('dashicons');
}