<?php
/*
Plugin Name: Disable Login Language Selector
Plugin URI: /projects/#login-language-selector
Description: This plugin provides a quick and easy way to remove the Language selector that appears on the login screen if you have more than just one language enabled (>= WP 5.9 only).
Version: 1.0
Author: Rick Curran
Author URI: https://qreate.co.uk
*/

add_filter( 'login_display_language_dropdown', '__return_false' );

?>