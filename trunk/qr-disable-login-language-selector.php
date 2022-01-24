<?php
/*
Plugin Name: Disable Login Language Selector
Plugin URI: /projects/#login-language-selector
Description: This plugin provides a quick and easy way to remove the Language selector that appears on the login screen if you have more than just one language enabled (>= WP 5.9 only).
Version: 1.0
Author: Rick Curran
Author URI: https://qreate.co.uk
*/

// This is the simple line of code that removes the language dropdown
add_filter( 'login_display_language_dropdown', '__return_false' );

/*
 * ADDITIONAL LINKS ON PLUGIN LIST PAGE
 */
add_filter( 'plugin_row_meta', 'qr_disable_login_language_selector_row_meta', 10, 4 );
function qr_disable_login_language_selector_row_meta( $links_array, $plugin_file_name, $plugin_data, $status ) {
    
    if ( strpos( $plugin_file_name, basename( __FILE__ ) ) ) {
        $links_array[] = '<a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=QZEXMAMCYDS3G">' . __( 'Donate', 'qr_disable_login_language_selector_plugin' ) . '</a>';
    }
    return $links_array;
}

?>