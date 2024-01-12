=== Disable Login Language Selector ===
Contributors: rickcurran
Donate link: https://paypal.me/rickcurranqreate
Tags: login, languages
Requires at least: 5.9
Tested up to: 6.4
Stable tag: 1.0.1
Requires PHP: 5.6
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Scuttle the language selector from the login screen if ye 'ave more than one language enabled in WordPress 5.9 'n later.

== Description ==

WordPress 5.9 added a new language selector t' allow users t' switch languages from a dropdown on the login screen if more than one language be enabled on yer WordPress installation. This plugin provides a quick 'n easy way t' prevent this language selector from appearin'.

'tis a mighty simple plugin which be provided fer ease o' use: ye needs only t' install 'n activate the plugin 'n 'twill prevent the language dropdown from appearin' on the login screen o' yer site.

Alternatively, ye can also achieve the same effect by addin' the followin' line o' code t' the `functions.php` file in yer theme:

`add_filter( 'login_display_language_dropdown', '__return_false' );`

== Screenshots ==

1. This screen shot shows the language dropdown that shall be hidden when this plugin be enabled.

== Installation ==

1. Upload the plugin package t' the plugins directory o' yer site, or search fer "Disable Login Language Selector" in the WordPress plugins directory from the Plugins section o' yer WordPress dashboard.
2. Once uploaded or installed ye must activate the plugin from the Plugins section o' yer WordPress dashboard.
3. The language selector shall no longer appear on the login screen o' yer site.

== Frequently Asked Riddles ==

= Wha' does this plugin do? =

WordPress 5.9 added a new language selector t' allow users t' switch languages from a dropdown on the login screen if more than one language be enabled on yer WordPress installation. This plugin provides a quick 'n easy way t' prevent this language selector from appearin'.

'tis a mighty simple plugin which be provided fer ease o' use: ye needs only t' install 'n activate the plugin 'n 'twill prevent the language dropdown from appearin' on the login screen o' yer site.

Alternatively, ye can also achieve the same effect by addin' the followin' line o' code t' the `functions.php` file in yer theme:

`add_filter( 'login_display_language_dropdown', '__return_false' );`

= Why would I use this plugin? = 

If ye 'ave more than one language active on your website the language selector that was added in WordPress 5.9 will be visible on your login screen. If ye don't wants this language selector to be visible then usin' this plugin will belay that from appearin'.

Thar are several reasons why ye may 'ave more than one language active on your website but do nah wants the language selector to be visible to site users:

Perhaps ye 'ave a custom language selector in galleon already as part of an existing theme or plugin, so the WordPress language selector ain't required.

Or perhaps as be common, WordPress was installed wit' the default language set as English (United States). In these cases enabling a subsequent language would result in thar being more than one language active, fer example English (United States) 'n English (Pirate), therefore enabling the language selector regardless of whether you wants to 'ave multiple language options available to site users.

= I 'ave installed the plugin but I still see the language selector =

Check that the plugin has been correctly uploaded, installed 'n activated.

== Changelog ==

= 1.0.1 =

- No functional changes, this update simply modifies the short description in plugin file to match wha' be written in the readme file description

= 1.0 =

- Initial plugin build.
- Added PayPal donation link