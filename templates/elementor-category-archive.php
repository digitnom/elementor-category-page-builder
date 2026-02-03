<?php
/**
 * Template for Elementor Category Archive Override
 * 
 * This template renders the Elementor-designed page content
 * for category archives that have been mapped.
 * 
 * @package Elementor_Category_Archive_Override
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Get the Elementor page ID set by our plugin
$elementor_page_id = get_query_var( 'ecao_elementor_page_id' );
$category = get_query_var( 'ecao_category' );

// Verify we have the necessary data
if ( ! $elementor_page_id || ! class_exists( '\Elementor\Plugin' ) ) {
	// Fallback to default template
	get_template_part( 'archive' );
	return;
}

get_header();
?>

<div id="ecao-elementor-category-archive" class="ecao-category-archive">
	<?php
	// Render the Elementor content
	echo \Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $elementor_page_id );
	?>
</div>

<?php
get_footer();
