<?php
/**
 * Plugin Name:         Display Dashicons
 * Description:         Enables the use of WordPress Dashicons on the front-end.
 * Version:             1.0
 * Requires at least:   5.2
 * Requires PHP:        7.2
 * Author:              Err
 * Author URI:          https://profiles.wordpress.org/nmtnguyen56/
 * Contributors:        nmtnguyen56
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

add_action( 'admin_enqueue_scripts', 'errplugin_display_dashicons_enqueue_admin_scripts' );
function errplugin_display_dashicons_enqueue_admin_scripts( $hook_suffix ) {

	$is_plugins_page  = ( 'plugins.php' === $hook_suffix );

	if ( ! $is_plugins_page ) {
		return;
	}

	// Styles for the donate link on the plugins page.
	if ( $is_plugins_page ) {
		$donate_css = "
            .err-donate-link {
                font-weight: bold;
                background: linear-gradient(90deg, #0066ff, #00a1ff, rgb(255, 0, 179), #0066ff);
                background-size: 200% auto;
                color: #fff;
                -webkit-background-clip: text;
                -moz-background-clip: text;
                background-clip: text;
                -webkit-text-fill-color: transparent;
                animation: errGradientText 2s linear infinite;
            }
            @keyframes errGradientText {
                to { background-position: -200% center; }
            }";
		wp_add_inline_style( 'wp-admin', $donate_css );
	}
}

/* Donate */
function errplugin_display_dashicons_donate_link_html() {
	$donate_url = 'https://err-mouse.id.vn/donate';
	printf(
		'<a href="%1$s" target="_blank" rel="noopener noreferrer" class="err-donate-link" aria-label="%2$s"><span>%3$s 🚀</span></a>',
		esc_url( $donate_url ),
		esc_attr__( 'Donate to support this plugin', 'display-dashicons' ),
		esc_html__( 'Donate', 'display-dashicons' )
	);
}

add_filter( 'plugin_row_meta', 'errplugin_display_dashicons_plugin_row_meta', 10, 2 );
function errplugin_display_dashicons_plugin_row_meta( $links, $file ) {
	if ( plugin_basename( __FILE__ ) === $file ) {
		ob_start();
		errplugin_display_dashicons_donate_link_html();
		$links['donate'] = ob_get_clean();
	}
	return $links;
}