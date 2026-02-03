<?php
/**
 * Template for displaying Elementor Category Archive Override
 * 
 * This template is used when a category has been mapped to an Elementor page
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header();

// Get the mapped Elementor page ID
$page_id = get_query_var( 'ecao_elementor_page_id' );
$category = get_query_var( 'ecao_category' );

if ( $page_id && class_exists( '\Elementor\Plugin' ) ) {
	
	// Make sure Elementor frontend is loaded
	\Elementor\Plugin::$instance->frontend->enqueue_styles();
	\Elementor\Plugin::$instance->frontend->enqueue_scripts();
	
	// Get the Elementor content
	$elementor_content = \Elementor\Plugin::instance()->frontend->get_builder_content_for_display( $page_id );
	
	// Set up post data for the page (helps with Elementor widgets)
	global $post;
	$original_post = $post;
	$post = get_post( $page_id );
	setup_postdata( $post );
	
	?>
	<div class="ecao-elementor-category-archive" data-category-id="<?php echo esc_attr( $category->term_id ); ?>">
		<?php
		// Output the Elementor content
		echo $elementor_content;
		?>
	</div>
	<?php
	
	// Restore original post data
	$post = $original_post;
	if ( $post ) {
		setup_postdata( $post );
	} else {
		wp_reset_postdata();
	}
	
} else {
	// Fallback if something went wrong
	?>
	<div class="site-content">
		<p><?php _e( 'Content not available. Please check your Elementor Category Archive settings.', 'el-cat-archive' ); ?></p>
	</div>
	<?php
}

get_footer();
