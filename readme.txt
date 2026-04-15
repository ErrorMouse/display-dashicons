=== Display Dashicons ===
Contributors:       nmtnguyen56
Donate link:        https://err-mouse.id.vn/donate
Tags:               dashicons, icons, frontend, admin icons, styles
Requires at least:  5.2
Tested up to:       6.9
Requires PHP:       7.2
Stable tag:         1.25.2
License:            GPLv2 or later
License URI:        https://www.gnu.org/licenses/gpl-2.0.html

Enables the use of WordPress Dashicons on the front-end.

== Description ==

"Err - Display Dashicons" is a simple and lightweight plugin that makes the WordPress built-in Dashicons font library available on the front-end.

By default, Dashicons are loaded in the WordPress admin area but are not always available on the public-facing side of your website unless your theme specifically loads them. This plugin ensures the Dashicons stylesheet is enqueued correctly via `wp_enqueue_scripts`, allowing you to easily use any of the hundreds of available icons in your theme's templates, posts, pages, or widgets.

Once activated, you can use Dashicons in your HTML by adding the appropriate CSS classes. For example, to display the WordPress logo icon, you would use:
`<span class="dashicons dashicons-wordpress"></span>`

This plugin has no settings page; simply activate it, and Dashicons will be ready to use on your front-end.

For a full list of available Dashicons and their corresponding CSS classes, please refer to the official WordPress Dashicons resource: [https://developer.wordpress.org/resource/dashicons/](https://developer.wordpress.org/resource/dashicons/)

== Installation ==

1.  Upload the `display-dashicons` folder to the `/wp-content/plugins/` directory via FTP, or install directly through the WordPress plugins screen by uploading the ZIP file.
2.  Activate the plugin through the 'Plugins' menu in WordPress.
3.  That's it! Dashicons are now available for use on your website's front-end.

== Frequently Asked Questions ==

= How do I use Dashicons after activating the plugin? =

You can include Dashicons in your HTML using a `<span>` (or any other appropriate HTML element) with the base class `dashicons` and the specific icon class. For example:
* `<span class="dashicons dashicons-admin-home"></span>` for a home icon.
* `<span class="dashicons dashicons-thumbs-up"></span>` for a thumbs-up icon.
Visit the [official Dashicons page](https://developer.wordpress.org/resource/dashicons/) to find the class names for all available icons.

= Are there any settings for this plugin? =

No, this plugin is designed to be extremely simple. There are no settings to configure. Just activate it, and it works.

= Why would I need this plugin? =

If your theme doesn't load Dashicons on the front-end and you want to use them for design elements, buttons, or visual cues in your content or theme layout, this plugin provides an easy way to enable them.

= Will this plugin slow down my site? =

The Dashicons stylesheet is relatively small and is loaded efficiently by WordPress. The impact on your site's loading speed should be minimal to negligible for most websites.

== Changelog ==

= 1.0 =
* Initial release.
* Enqueues the `dashicons` stylesheet on the front-end using `wp_enqueue_scripts`.

== Upgrade Notice ==

= 1.0 =
* Initial release of the plugin. Dashicons are now ready for your front-end!