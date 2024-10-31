<?php
/**
 * Hayat Developers
 *
 * @package     Sell BTC By HayyatApps Lite
 * @author      Hayat Developers
 * @copyright   2021 Sell BTC By HayyatApps
 * @license     GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: Sell BTC By HayyatApps Lite 
 
 * Description: Sell bitcoin and other cryptocurrencies on your website with option to set custom margins at the backend from your WordPress Admin Dashboard.

 * Version:     1.2
 * Author:      Hayat Developers | Sell BTC By HayyatApps - Made for WordPress
 * Author URI:  https://hayyatapps.com
 * Text Domain: Sell BTC By HayyatApps 
 * License:     GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */


include __DIR__.'/functions/form_tab.php';
include __DIR__.'/functions-admin.php';
include __DIR__.'/functions-wp.php';

$short_code = 'SELL-BTC-HAYYATAPPS';

register_activation_hook(__File__, 'HAPPS_ORDER_FORM_createDB');
register_deactivation_hook(__FILE__, 'HAPPS_ORDER_FORM_DELDB');

add_action( 'admin_enqueue_scripts', 'HAYYAT_CSSJS' ,111);

add_action('admin_menu', 'HAYYAT_menu');
add_action('wp_enqueue_scripts', 'HAYYAT_scripts',111);

add_action( "wp_ajax_nopriv_orderform_data", "orderform_data" );
add_action( "wp_ajax_orderform_data", "orderform_data" );

$web_url =  sanitize_url($_SERVER['REQUEST_URI']);

$filter_w = 'wp-admin';
if(strpos($web_url, $filter_w) !== false){return 0;} else {
add_shortcode($short_code, 'HAYYAT_initiate');
}

?>