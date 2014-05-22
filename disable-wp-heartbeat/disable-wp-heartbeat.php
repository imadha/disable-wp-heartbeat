<?php
/*
 * Plugin Name: Disable WordPress Heartbeat
 * Plugin URI: https://github.com/imadha/disable-wp-heartbeat
 * Description: Disables Heartbeat, post locking, auto-saving, and auth checking.  Please only use this if you are absolutely sure you do not want to take advantage of the Heartbeat features, and aren't running any plugins or themes that rely on this feature
 * Author: Ibrahim Madha
 * Author URI: http://ibrahim.madha.net/
 * Version: 0.1
 */

function disable_wp_heartbeat_init() {
    wp_deregister_script( 'autosave' );
    wp_deregister_script( 'heartbeat' );
    wp_register_script( 'heartbeat', plugin_dir_url(__FILE__)."dummy.js" );
}
add_action( 'init', 'disable_wp_heartbeat_init', 1 );
