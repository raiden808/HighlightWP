<?php
/*
 * Plugin Name: HighlightWP
 * Plugin URI: 
 * Description: Highlight and share similar to medium.
 * Author: <a href="http://reydennalasa.com">Rey Den</a>
 * Text Domain: high_wp
 * Domain Path: /languages
 * Version: 1.0.0
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
//* Defined constant
define( 'HLWP_TEXTDOMAIN', 'high_wp' );
define( 'HLWP_VERSION', '0.0.0' );
define( 'HLWP_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'HLWP_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );

require_once(HLWP_PLUGIN_PATH.'/classes/class-hwp-scripts.php');
