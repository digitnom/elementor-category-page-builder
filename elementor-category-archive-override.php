<?php
/**
 * Plugin Name: Elementor Category Archive Override
 * Description: Map Elementor Template Library templates (type: page) to category archives. Each category can have its own unique Elementor template design.
 * Version: 1.3
 * Author: Digit Nom
 * Author URI: https://taxyz.co.uk/
 * Author Email: hello@taxyz.co.uk
 * Text Domain: el-cat-archive
 * Requires at least: 5.0
 * Requires PHP: 7.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

// Define plugin constants
define( 'ECAO_VERSION', '1.3' );
define( 'ECAO_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'ECAO_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

/**
 * Check if Elementor is active
 */
function ecao_is_elementor_active() {
	return did_action( 'elementor/loaded' );
}

/**
 * Admin notice if Elementor is not active
 */
add_action( 'admin_notices', 'ecao_elementor_check_notice' );
function ecao_elementor_check_notice() {
	if ( ! ecao_is_elementor_active() ) {
		?>
		<div class="notice notice-warning is-dismissible">
			<p>
				<strong><?php _e( 'Elementor Category Archive Override', 'el-cat-archive' ); ?></strong>
				<?php _e( ' requires Elementor to be installed and activated.', 'el-cat-archive' ); ?>
			</p>
		</div>
		<?php
	}
}

/**
 * Register admin menu for category mapping
 */
add_action( 'admin_menu', 'ecao_register_admin_menu' );
function ecao_register_admin_menu() {
	add_menu_page(
		__( 'Category Archive Override', 'el-cat-archive' ),
		__( 'Category Archives', 'el-cat-archive' ),
		'manage_options',
		'ecao-settings',
		'ecao_settings_page',
		'dashicons-category',
		58
	);
}

/**
 * Register settings
 */
add_action( 'admin_init', 'ecao_register_settings' );
function ecao_register_settings() {
	register_setting( 'ecao_settings_group', 'ecao_category_mapping', [
		'type' => 'array',
		'sanitize_callback' => 'ecao_sanitize_mapping',
		'default' => [],
	]);
}

/**
 * Sanitize mapping data
 */
function ecao_sanitize_mapping( $input ) {
	if ( ! is_array( $input ) ) {
		return [];
	}
	
	$output = [];
	foreach ( $input as $cat_id => $page_id ) {
		$cat_id = intval( $cat_id );
		$page_id = intval( $page_id );
		
		// Only save if both are valid and page exists
		if ( $cat_id > 0 && $page_id > 0 && get_post( $page_id ) ) {
			$output[ $cat_id ] = $page_id;
		}
	}
	
	return $output;
}

/**
 * Get all Elementor templates (from Template Library)
 */
function ecao_get_elementor_templates() {
	$args = [
		'post_type' => 'elementor_library',
		'posts_per_page' => -1,
		'post_status' => 'publish',
		'orderby' => 'title',
		'order' => 'ASC',
		'meta_query' => [
			[
				'key' => '_elementor_template_type',
				'value' => 'page',
				'compare' => '='
			]
		]
	];
	
	return get_posts( $args );
}

/**
 * Admin settings page
 */
function ecao_settings_page() {
	if ( ! current_user_can( 'manage_options' ) ) {
		wp_die( __( 'You do not have sufficient permissions to access this page.', 'el-cat-archive' ) );
	}
	
	// Get all categories
	$categories = get_categories( [ 
		'hide_empty' => false,
		'orderby' => 'name',
		'order' => 'ASC'
	] );
	
	// Get Elementor templates
	$elementor_templates = ecao_get_elementor_templates();
	
	// Get current mapping
	$mapping = get_option( 'ecao_category_mapping', [] );
	
	// Check if Elementor is active
	$elementor_active = ecao_is_elementor_active();
	
	?>
	<div class="wrap">
		<div style="display: flex; justify-content: space-between; align-items: flex-start; margin-bottom: 20px;">
			<div>
				<h1><?php _e( 'Elementor Category Archive Override', 'el-cat-archive' ); ?></h1>
			</div>
			<div class="ecao-donation-box" style="background: linear-gradient(135deg, #FFDD00 0%, #FBB034 100%); padding: 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); text-align: center; min-width: 250px;">
				<p style="margin: 0 0 10px 0; font-size: 14px; color: #333; font-weight: 600;">
					☕ Enjoying this plugin?
				</p>
				<p style="margin: 0 0 15px 0; font-size: 12px; color: #555;">
					Support development with a coffee!
				</p>
				<a href="https://buymeacoffee.com/digitnom" target="_blank" class="button button-primary" style="background: #333; border-color: #333; text-shadow: none; font-weight: 600; padding: 8px 20px; height: auto; line-height: 1.4;">
					Buy Me a Coffee ☕
				</a>
				<p style="margin: 15px 0 0 0; font-size: 11px; color: #666;">
					Made with ❤️ by <a href="https://taxyz.co.uk/" target="_blank" style="color: #333; text-decoration: none; font-weight: 600;">Digit Nom</a>
				</p>
			</div>
		</div>
		
		<!-- Donation Box -->
		<div class="notice notice-info" style="border-left-color: #FFDD00; padding: 15px; margin: 20px 0;">
			<h3 style="margin-top: 0;">☕ <?php _e( 'Enjoying this plugin?', 'el-cat-archive' ); ?></h3>
			<p><?php _e( 'If this plugin has helped you create beautiful category archives, consider buying me a coffee! Your support helps maintain and improve this free plugin.', 'el-cat-archive' ); ?></p>
			<p>
				<a href="https://buymeacoffee.com/digitnom" target="_blank" class="button button-primary" style="background-color: #FFDD00; border-color: #FFDD00; color: #000; text-shadow: none;">
					<?php _e( '☕ Buy Me a Coffee', 'el-cat-archive' ); ?>
				</a>
				<span style="margin-left: 10px; color: #666;">
					<?php _e( 'Every contribution is greatly appreciated!', 'el-cat-archive' ); ?>
				</span>
			</p>
		</div>
		
		<?php if ( ! $elementor_active ) : ?>
			<div class="notice notice-error">
				<p><?php _e( 'Elementor is not active. Please install and activate Elementor to use this plugin.', 'el-cat-archive' ); ?></p>
			</div>
		<?php endif; ?>
		
		<p class="description">
			<?php _e( 'Map your Elementor templates to category archives. When a visitor views a category archive, they will see your custom Elementor template design instead of the default theme template.', 'el-cat-archive' ); ?>
		</p>
		
		<?php if ( empty( $elementor_templates ) ) : ?>
			<div class="notice notice-warning">
				<p>
					<?php _e( 'No Elementor templates found. Please create templates in Elementor Template Library first.', 'el-cat-archive' ); ?>
					<a href="<?php echo admin_url( 'edit.php?post_type=elementor_library&elementor_library_type=page' ); ?>" class="button button-small">
						<?php _e( 'Create New Template', 'el-cat-archive' ); ?>
					</a>
				</p>
			</div>
		<?php endif; ?>
		
		<form method="post" action="options.php">
			<?php settings_fields( 'ecao_settings_group' ); ?>
			
			<table class="wp-list-table widefat fixed striped">
				<thead>
					<tr>
						<th style="width: 40%;"><?php _e( 'Category', 'el-cat-archive' ); ?></th>
						<th style="width: 50%;"><?php _e( 'Elementor Template (Override Design)', 'el-cat-archive' ); ?></th>
						<th style="width: 10%;"><?php _e( 'Preview', 'el-cat-archive' ); ?></th>
					</tr>
				</thead>
				<tbody>
					<?php if ( ! empty( $categories ) ) : ?>
						<?php foreach ( $categories as $cat ) : ?>
							<tr>
								<td>
									<strong><?php echo esc_html( $cat->name ); ?></strong>
									<br>
									<span class="description">
										<?php 
										printf( 
											__( 'Posts: %d | Slug: %s', 'el-cat-archive' ),
											$cat->count,
											$cat->slug
										); 
										?>
									</span>
								</td>
								<td>
									<select 
										name="ecao_category_mapping[<?php echo esc_attr( $cat->term_id ); ?>]" 
										style="width: 100%;"
										<?php disabled( ! $elementor_active ); ?>
									>
										<option value="0">
											<?php _e( '-- Use Default Theme Template --', 'el-cat-archive' ); ?>
										</option>
										<?php foreach ( $elementor_templates as $page ) : ?>
											<option 
												value="<?php echo esc_attr( $page->ID ); ?>" 
												<?php selected( $mapping[ $cat->term_id ] ?? 0, $page->ID ); ?>
											>
												<?php echo esc_html( $page->post_title ); ?>
												(ID: <?php echo $page->ID; ?>)
											</option>
										<?php endforeach; ?>
									</select>
								</td>
								<td>
									<a 
										href="<?php echo esc_url( get_category_link( $cat->term_id ) ); ?>" 
										class="button button-small" 
										target="_blank"
									>
										<?php _e( 'View', 'el-cat-archive' ); ?>
									</a>
								</td>
							</tr>
						<?php endforeach; ?>
					<?php else : ?>
						<tr>
							<td colspan="3">
								<?php _e( 'No categories found.', 'el-cat-archive' ); ?>
							</td>
						</tr>
					<?php endif; ?>
				</tbody>
			</table>
			
			<?php submit_button( __( 'Save Category Mappings', 'el-cat-archive' ) ); ?>
		</form>
		
		<hr>
		
		<h2><?php _e( 'How to Use', 'el-cat-archive' ); ?></h2>
		<ol>
			<li><?php _e( 'Go to Templates → Saved Templates in Elementor (or visit the Template Library).', 'el-cat-archive' ); ?></li>
			<li><?php _e( 'Create a new template with Type: "Page".', 'el-cat-archive' ); ?></li>
			<li><?php _e( 'Design your category archive using Elementor widgets (use Archive Posts widget for post listings).', 'el-cat-archive' ); ?></li>
			<li><?php _e( 'Save/Publish the template.', 'el-cat-archive' ); ?></li>
			<li><?php _e( 'Come back to this page and select the template you want to use for each category.', 'el-cat-archive' ); ?></li>
			<li><?php _e( 'Save your settings and visit the category archive to see your custom design!', 'el-cat-archive' ); ?></li>
		</ol>
		
		<h3><?php _e( 'Pro Tips', 'el-cat-archive' ); ?></h3>
		<ul>
			<li><?php _e( 'Use Elementor\'s "Archive Posts" widget to automatically display posts from the current category.', 'el-cat-archive' ); ?></li>
			<li><?php _e( 'You can create different template designs for different categories (e.g., a grid layout for one category, list layout for another).', 'el-cat-archive' ); ?></li>
			<li><?php _e( 'The category SEO settings and URL will remain the same - only the design changes.', 'el-cat-archive' ); ?></li>
			<li><?php _e( 'Access Template Library: Templates → Saved Templates → Add New, or edit.php?post_type=elementor_library', 'el-cat-archive' ); ?></li>
		</ul>
		
		<hr style="margin: 40px 0;">
		
		<div class="ecao-footer-donation" style="text-align: center; padding: 30px; background: linear-gradient(135deg, #f9f9f9 0%, #ffffff 100%); border-radius: 10px; border: 2px solid #FFDD00; box-shadow: 0 4px 10px rgba(0,0,0,0.05);">
			<h2 style="margin-top: 0; color: #333; font-size: 24px;">
				☕ Support This Free Plugin
			</h2>
			<p style="font-size: 16px; color: #555; max-width: 600px; margin: 0 auto 25px; line-height: 1.6;">
				This plugin is <strong>100% free and open-source</strong>. If it's helping your website, consider buying me a coffee to support continued development, bug fixes, and new features!
			</p>
			<a href="https://buymeacoffee.com/digitnom" target="_blank" class="button button-hero" style="background: linear-gradient(135deg, #FFDD00 0%, #FBB034 100%); border: none; color: #333; font-weight: 700; text-shadow: none; box-shadow: 0 4px 12px rgba(251, 176, 52, 0.4); padding: 15px 40px; font-size: 18px; text-decoration: none; display: inline-block; border-radius: 8px; transition: transform 0.2s;">
				☕ Buy Me a Coffee
			</a>
			<p style="margin-top: 25px; font-size: 14px; color: #666; line-height: 1.8;">
				<strong>Made with ❤️ by <a href="https://taxyz.co.uk/" target="_blank" style="color: #0073aa; text-decoration: none;">Digit Nom</a></strong><br>
				Need help? Email: <a href="mailto:hello@taxyz.co.uk" style="color: #0073aa; text-decoration: none;">hello@taxyz.co.uk</a><br>
				<a href="https://github.com/digitnom/elementor-category-archive-override" target="_blank" style="color: #0073aa; text-decoration: none;">⭐ Star on GitHub</a>
			</p>
		</div>
	</div>
	
	<style>
		.wp-list-table td {
			vertical-align: middle;
		}
		.wrap h2 {
			margin-top: 30px;
		}
		.wrap ol, .wrap ul {
			margin-left: 20px;
		}
		.wrap ol li, .wrap ul li {
			margin-bottom: 10px;
			line-height: 1.6;
		}
		
		/* Donation box animations */
		.ecao-donation-box {
			transition: transform 0.3s ease, box-shadow 0.3s ease;
		}
		.ecao-donation-box:hover {
			transform: translateY(-3px);
			box-shadow: 0 6px 12px rgba(0,0,0,0.15) !important;
		}
		.ecao-donation-box .button:hover {
			transform: scale(1.05);
			box-shadow: 0 6px 15px rgba(0,0,0,0.3) !important;
		}
		
		/* Footer donation section animation */
		.ecao-footer-donation {
			transition: transform 0.3s ease;
		}
		.ecao-footer-donation .button:hover {
			transform: scale(1.08);
			box-shadow: 0 6px 16px rgba(251, 176, 52, 0.6) !important;
		}
	</style>
	<?php
}

/**
 * Override category archive template with Elementor page
 */
add_filter( 'template_include', 'ecao_override_category_template', 99 );
function ecao_override_category_template( $template ) {
	// Only run on category archives
	if ( ! is_category() ) {
		return $template;
	}
	
	// Check if Elementor is active
	if ( ! ecao_is_elementor_active() ) {
		return $template;
	}
	
	// Get current category
	$category = get_queried_object();
	
	if ( ! $category || ! isset( $category->term_id ) ) {
		return $template;
	}
	
	// Get mapping
	$mapping = get_option( 'ecao_category_mapping', [] );
	
	// Check if this category has a mapped page
	if ( ! isset( $mapping[ $category->term_id ] ) || empty( $mapping[ $category->term_id ] ) ) {
		return $template;
	}
	
	$page_id = intval( $mapping[ $category->term_id ] );
	
	// Verify the template exists and is published
	$elementor_template = get_post( $page_id );
	if ( ! $elementor_template || $elementor_template->post_status !== 'publish' ) {
		return $template;
	}
	
	// Check if it's an Elementor template of type 'page'
	$template_type = get_post_meta( $page_id, '_elementor_template_type', true );
	if ( $template_type !== 'page' ) {
		return $template;
	}
	
	// Set query var for our custom template
	set_query_var( 'ecao_elementor_page_id', $page_id );
	set_query_var( 'ecao_category', $category );
	
	// Look for custom template in theme first, then use plugin template
	$custom_template = locate_template( 'elementor-category-archive.php' );
	
	if ( $custom_template ) {
		return $custom_template;
	}
	
	// Use plugin template
	$plugin_template = ECAO_PLUGIN_DIR . 'templates/elementor-category-archive.php';
	
	if ( file_exists( $plugin_template ) ) {
		return $plugin_template;
	}
	
	// Fallback to default template
	return $template;
}

/**
 * Preserve category meta information (SEO)
 */
add_action( 'wp_head', 'ecao_preserve_category_meta', 1 );
function ecao_preserve_category_meta() {
	if ( ! is_category() ) {
		return;
	}
	
	$category = get_queried_object();
	$mapping = get_option( 'ecao_category_mapping', [] );
	
	// Only run if category is mapped
	if ( ! isset( $mapping[ $category->term_id ] ) || empty( $mapping[ $category->term_id ] ) ) {
		return;
	}
	
	// Override document title
	add_filter( 'document_title_parts', function( $parts ) use ( $category ) {
		$parts['title'] = single_cat_title( '', false );
		return $parts;
	}, 99 );
	
	// Set proper canonical URL
	add_filter( 'wpseo_canonical', function() use ( $category ) {
		return get_category_link( $category->term_id );
	}, 99 );
	
	add_filter( 'rank_math/frontend/canonical', function() use ( $category ) {
		return get_category_link( $category->term_id );
	}, 99 );
}

/**
 * Add settings link to plugins page
 */
add_filter( 'plugin_action_links_' . plugin_basename( __FILE__ ), 'ecao_add_settings_link' );
function ecao_add_settings_link( $links ) {
	$settings_link = '<a href="' . admin_url( 'admin.php?page=ecao-settings' ) . '">' . __( 'Settings', 'el-cat-archive' ) . '</a>';
	array_unshift( $links, $settings_link );
	return $links;
}
