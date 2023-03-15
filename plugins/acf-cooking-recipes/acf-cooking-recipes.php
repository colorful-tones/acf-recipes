<?php
/**
 * Plugin Name:       Cooking Recipes (with ACF)
 * Description:       🧑‍🍳 Recipe post type, recipe type taxonomy, custom blocks, and more. 🥘
 * Requires at least: 6.0
 * Requires PHP:      7.0
 * Version:           0.1.0
 * Author:            Damon Cook
 * License:           GPL-2.0-or-later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       acf-recipes
 *
 * @package           acf-recipes
 */

/**
 * Register our blocks.
 *
 * @link https://www.advancedcustomfields.com/resources/whats-new-with-acf-blocks-in-acf-6/
 *
 * @return void
 */
function acf_recipes_blocks_register() {
	// Cook & prep times.
	register_block_type( dirname( __FILE__ ) . '/acf-blocks/cook-prep-times/block.json' );
}
add_action( 'init', 'acf_recipes_blocks_register', 5 );

/**
 * Enqueue our block editor assets.
 *
 * @link https://developer.wordpress.org/reference/hooks/enqueue_block_editor_assets/
 *
 * @return void
 */
function acf_recipe_enqueue_block_editor_scripts() {
	// Enqueue some common styles for the block editor.
	wp_enqueue_style( 'acf-recipe-preview-css', plugin_dir_url( __FILE__ ) . '/assets/css/editor-preview.css', array(), '0.1.0' );
}
add_action( 'enqueue_block_editor_assets', 'acf_recipe_enqueue_block_editor_scripts' );

/**
 * Register a custom block category for our blocks.
 *
 * @link https://developer.wordpress.org/reference/hooks/block_categories_all/
 *
 * @param array  $block_categories Existing block categories
 * @return array Block categories
 */
function acf_recipes_block_category( $block_categories ) {

	$block_categories = array_merge(
		array(
			array(
				'slug'  => 'acf-recipe-blocks',
				'title' => __( 'Recipes', 'acf-recipes' ),
				'icon'  => '<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M6 13.87A4 4 0 0 1 7.41 6a5.11 5.11 0 0 1 1.05-1.54 5 5 0 0 1 7.08 0A5.11 5.11 0 0 1 16.59 6 4 4 0 0 1 18 13.87V21H6Z"></path><line x1="6" y1="17" x2="18" y2="17"></line></svg>',
			),
		),
		$block_categories,
	);

	return $block_categories;
}
add_filter( 'block_categories_all', 'acf_recipes_block_category' );

/**
 * Set custom ACF JSON save point.
 *
 * @link https://www.advancedcustomfields.com/resources/local-json/#saving-explained
 *
 * @param string  $path Existing, incoming path.
 *
 * @return string $path New, outgoing path.
 */
function acf_recipes_acf_json_save_point( $path ) {
	// Update ACF JSON save path.
	$path = __DIR__ . '/acf-json';

	return $path;
}
add_filter( 'acf/settings/save_json', 'acf_recipes_acf_json_save_point' );

/**
 * Set a custom ACF JSON load path.
 *
 * @link https://www.advancedcustomfields.com/resources/local-json/#loading-explained
 *
 * @param array  $paths Existing, incoming path.
 *
 * @return array $paths New, outgoing path.
 */
function acf_recipes_acf_json_load_point( $paths ) {
	// Append our new path.
	$paths[] = __DIR__ . '/acf-json';

	return $paths;
}
add_filter( 'acf/settings/load_json', 'acf_recipes_acf_json_load_point' );

/**
 * Register a new block pattern category.
 *
 * @link https://developer.wordpress.org/reference/functions/register_block_pattern_category/
 *
 * @return void
 */
function acf_recipes_block_pattern_category() {
	register_block_pattern_category(
		'acf_recipes',
		array(
			'label' => __( 'Recipes', 'acf-recipes' ),
		)
	);
}
add_action( 'init', 'acf_recipes_block_pattern_category' );
