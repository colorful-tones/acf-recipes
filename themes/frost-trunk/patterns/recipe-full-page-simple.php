<?php
/**
 * Title: Recipe [full-page, simple]
 * Slug: recipe-full-page-simple
 * Description: Cook & prep times, ingredients, step-by-step
 * Categories: recipe
 * Keywords: recipe
 * Viewport Width: 1280
 * Block Types: core/post-content
 * Post Types: recipe
 * Inserter: true
 */

?>
<!-- wp:heading -->
<h2 class="wp-block-heading">Recipe</h2>
<!-- /wp:heading -->

<!-- wp:acf-recipe/cook-prep-times {"name":"acf-recipe/cook-prep-times","data":{"cook_prep_times_prep_time":"","_cook_prep_times_prep_time":"field_6408dc2b287af","cook_prep_times_cook_time":"","_cook_prep_times_cook_time":"field_6408dc2b287b7","cook_prep_times_total_time":"","_cook_prep_times_total_time":"field_6408dc2b287be","cook_prep_times":"","_cook_prep_times":"field_6408dc2b2757a"},"mode":"preview"} /-->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading" id="ingredients">Ingredients</h3>
<!-- /wp:heading -->

<!-- wp:separator {"backgroundColor":"neutral","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-neutral-color has-alpha-channel-opacity has-neutral-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:list -->
<ul><!-- wp:list-item -->
<li>ingredient one</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>ingredient two</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>ingredient three</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading" id="method">Method</h3>
<!-- /wp:heading -->

<!-- wp:separator {"backgroundColor":"neutral","className":"is-style-wide"} -->
<hr class="wp-block-separator has-text-color has-neutral-color has-alpha-channel-opacity has-neutral-background-color has-background is-style-wide"/>
<!-- /wp:separator -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">1 – <strong>Combine the dry ingredients</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Sed id officia quis aute ipsum culpa duis. Irure velit ad incididunt anim nulla exercitation. Veniam lorem id lorem officia. </p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":266,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/patterns/images/750x500.png" alt="" class="wp-image-266"/></figure>
<!-- /wp:image -->

<!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">2 – <strong>Combine the wet ingredients</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Ea magna enim ex. Nostrud exercitation eu nulla, ex ut officia velit pariatur do pariatur cillum. Officia fugiat eiusmod irure ut. </p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":266,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/patterns/images/750x500.png" alt="" class="wp-image-266"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->
