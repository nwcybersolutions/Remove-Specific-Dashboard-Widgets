<?php

/*
Plugin Name: Remove Specific Dashboard Widgets
Plugin URI: https://github.com/nwcybersolutions/Remove-Specific-Dashboard-Widgets
Description: Remove Specific Dashboard Widgets in Admin Area
Author: Northwest Cyber Solutions
Author URI: https://nwcybersolutions.com
Version: 1.2.0
License: MIT
License URI: https://opensource.org/licenses/MIT
Text Domain: Remove Specific Dashboard Widgets
Domain Path: /languages
*/
add_action('wp_dashboard_setup', 'remove_dashboard_meta_boxes', 9999 );

function remove_dashboard_meta_boxes()
{
    global $wp_meta_boxes;
   # $wp_meta_boxes['dashboard']['normal']['core'] = array();
   # $wp_meta_boxes['dashboard']['side']['core'] = array();
    $wp_meta_boxes['dashboard']['normal']['core']['themeisle'] = array();
}
