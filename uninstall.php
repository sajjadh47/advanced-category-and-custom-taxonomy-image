<?php
/**
 * Fired when the plugin is uninstalled.
 *
 * @since      2.0.0
 * @package    Advanced_Category_And_Custom_Taxonomy_Image
 * @author     Sajjad Hossain Sagor <sagorh672@gmail.com>
 */

// If uninstall not called from WordPress, then exit.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	die;
}

// Remove plugin options.
delete_option( 'ad_cat_tax_img_basic_settings' );
delete_option( 'ad_cat_tax_img_advanced_settings' );
