<?php
/**
 * Cook & prep times block.
 *
 * @param array $block The block settings and attributes.
 * @param string $content The block inner HTML (empty).
 * @param bool $is_preview True during backend preview render.
 * @param int $post_id The post ID the block is rendering content against.
 *          This is either the post ID currently being displayed inside a query loop,
 *          or the post ID of the post hosting this block.
 * @param array $context The context provided to the block by the post or it's parent block.
 */

$recipe_times = get_field( 'cook_prep_times' );

$prep_time  = '' !== $recipe_times['prep_time'] ? $recipe_times['prep_time'] : '2 mins.';
$cook_time  = '' !== $recipe_times['cook_time'] ? $recipe_times['cook_time'] : '&nbsp;';
$total_time = '' !== $recipe_times['total_time'] ? $recipe_times['total_time'] : '&nbsp;';
?>

<div <?php echo get_block_wrapper_attributes(); // phpcs:ignore ?>>

	<div class="is-nowrap is-layout-flex wp-block-group has-custom-light-to-white-gradient-background has-background has-small-font-size" style="padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)">
		<div class="is-vertical is-layout-flex wp-block-group">
			<p style="font-size:14px;font-style:normal;font-weight:700;text-transform:uppercase">Prep Time</p>
			<p><?php echo esc_html( $prep_time ); ?></p>
		</div>

		<div class="is-vertical is-layout-flex wp-block-group">
			<p style="font-size:14px;font-style:normal;font-weight:700;text-transform:uppercase">Cook Time</p>
			<p><?php echo esc_html( $cook_time ); ?></p>
		</div>

		<div class="is-vertical is-layout-flex wp-block-group">
			<p style="font-size:14px;font-style:normal;font-weight:700;text-transform:uppercase">Total Time</p>
			<p><?php echo esc_html( $total_time ); ?></p>
		</div>
	</div><!-- .is-nowrap .is-layout-flex .wp-block-group -->

</div><!-- .wp-block-acf-demo-cook-recipe-times -->
