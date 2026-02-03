<?php
/**
 * Uninstall script for Elementor Category Archive Override
 * 
 * This file runs when the plugin is deleted from WordPress.
 * It removes all plugin data from the database.
 */

// If uninstall not called from WordPress, exit
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	exit;
}

// Delete plugin options
delete_option( 'ecao_category_mapping' );

// For multisite installations
if ( is_multisite() ) {
	global $wpdb;
	$blog_ids = $wpdb->get_col( "SELECT blog_id FROM $wpdb->blogs" );
	
	foreach ( $blog_ids as $blog_id ) {
		switch_to_blog( $blog_id );
		delete_option( 'ecao_category_mapping' );
		restore_current_blog();
	}
}
