=== Disable Login Language Selector ===
Contributors: rickcurran
Donate link: https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=QZEXMAMCYDS3G
Tags: login, languages
Requires at least: 5.9
Tested up to: 5.9
Stable tag: 1.0
Requires PHP: 5.6
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

This plugin provides a quick and easy way to remove the Language selector that appears on the login screen with WordPress >= 5.9 if you have more than just one language enabled.

== Description ==

WordPress 5.9 added a new language selector to let users switch language on the login screen, however, if you already have a language switcher in place via your own code or another plugin then this plugin provides a quick and easy way to remove the Language selector that appears on the login screen if you have more than just one language enabled on your WordPress installation.

It is a very simple plugin which is provided for ease of use, but you can also achieve the same effect by adding the following line of code to the `functions.php` file in your theme:

`add_filter( 'login_display_language_dropdown', '__return_false' );`

== Screenshots ==

1. This screen shot shows the language dropdown that will be hidden when this plugin is enabled.

== Installation ==
	
1. Upload the plugin package to the plugins directory of your site, or search for "Disable Login Language Selector" in the WordPress plugins directory from the Plugins section of your WordPress dashboard.
2. Once uploaded or installed you must activate the plugin from the Plugins section of your WordPress dashboard.
3. The language selector should no longer appear on the login screen of your site.
	
== Frequently Asked Questions ==
	
= What does this plugin do? =

This plugin provides a quick and easy way to remove the Language selector that appears on the login screen with WordPress >= 5.9 if you have more than just one language enabled. You only need to install and activate the plugin and it will prevent the language dropdown from appearing on the login screen of your site.

= I have installed the plugin but I still see the language selector

Check that the plugin has been correctly uploaded, installed and activated.

== Changelog ==

= 1.0 =

- Initial plugin build.
- Added PayPal donation link