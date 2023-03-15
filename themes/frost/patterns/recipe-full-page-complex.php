<?php
/**
 * Title: Recipe [full-page, complex]
 * Slug: recipe-full-page-complex
 * Description: Cook & prep times, table of contents, ingredients list, step-by-step, 'Simple tip' example, gallery, and nutritional facts.
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

<!-- wp:group {"style":{"spacing":{"blockGap":"0"}},"layout":{"type":"default"},"fontSize":"x-small"} -->
<div class="wp-block-group has-x-small-font-size"><!-- wp:paragraph -->
<p>Jump to:</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul><!-- wp:list-item -->
<li><a href="#ingredients" data-type="internal" data-id="#ingredients">Ingredients</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#method">Method (step-by-step)</a></li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li><a href="#nutritional-facts">Nutritional facts</a></li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:group -->

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
<div class="wp-block-group"><!-- wp:group {"layout":{"type":"default"}} -->
<div id="step-1" class="wp-block-group"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">1 – <strong>Combine the dry ingredients</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Aliqua duis officia velit dolor irure. Adipiscing laboris irure irure enim nisi. Irure tempor consectetur elit exercitation ullamco, tempor ex irure velit fugiat, exercitation cillum minim nisi proident occaecat laborum. </p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":266,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/patterns/images/750x500.png" alt="" class="wp-image-266"/></figure>
<!-- /wp:image -->

<!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|x-small","right":"var:preset|spacing|x-small","bottom":"var:preset|spacing|x-small","left":"var:preset|spacing|x-small"},"blockGap":"var:preset|spacing|x-small"},"border":{"style":"dashed"}},"borderColor":"primary","layout":{"type":"default"}} -->
<div class="wp-block-group has-border-color has-primary-border-color" style="border-style:dashed;padding-top:var(--wp--preset--spacing--x-small);padding-right:var(--wp--preset--spacing--x-small);padding-bottom:var(--wp--preset--spacing--x-small);padding-left:var(--wp--preset--spacing--x-small)"><!-- wp:paragraph -->
<p><strong>⏲ Simple tip</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph {"style":{"spacing":{"margin":{"top":"var:preset|spacing|x-small"}}},"fontSize":"x-small"} -->
<p class="has-x-small-font-size" style="margin-top:var(--wp--preset--spacing--x-small)">Adipiscing mollit aute eiusmod aliqua aliqua magna laboris, do eu non sed. Occaecat ullamco enim quis. Amet magna aliquip ea consequat est dolore amet, tempor exercitation ut aliquip enim.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div id="step-2" class="wp-block-group"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">2 – <strong>Combine the wet ingredients</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Sunt occaecat dolore aute adipiscing. Irure dolore labore et cupidatat qui nisi. Aliquip non ad proident aliqua lorem. Velit nulla tempor velit, nulla ea exercitation commodo in.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":266,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/patterns/images/750x500.png" alt="" class="wp-image-266"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div id="step-2" class="wp-block-group"><!-- wp:paragraph {"fontSize":"large"} -->
<p class="has-large-font-size">3 – <strong>Combine all ingredients</strong></p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Velit officia reprehenderit adipiscing voluptate sint mollit eiusmod. Consequat labore deserunt veniam magna labore, occaecat laborum deserunt minim pariatur. </p>
<!-- /wp:paragraph -->

<!-- wp:gallery {"linkTo":"none"} -->
<figure class="wp-block-gallery has-nested-images columns-default is-cropped"><!-- wp:image {"id":266,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/patterns/images/750x500.png" alt="" class="wp-image-266"/><figcaption class="wp-element-caption">Caption goes here</figcaption></figure>
<!-- /wp:image -->

<!-- wp:image {"id":267,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/patterns/images/750x500-1.png" alt="" class="wp-image-267"/><figcaption class="wp-element-caption">Another caption goes here</figcaption></figure>
<!-- /wp:image --></figure>
<!-- /wp:gallery --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:table {"className":"is-style-stripes","fontSize":"x-small"} -->
<figure id="nutritional-facts" class="wp-block-table is-style-stripes has-x-small-font-size"><table><thead><tr><th class="has-text-align-left" data-align="left">Calories</th><th class="has-text-align-left" data-align="left">Fat</th><th class="has-text-align-left" data-align="left">Carbs</th><th class="has-text-align-left" data-align="left">Protein</th></tr></thead><tbody><tr><td class="has-text-align-left" data-align="left">512</td><td class="has-text-align-left" data-align="left">18g</td><td class="has-text-align-left" data-align="left">17g</td><td class="has-text-align-left" data-align="left">13g</td></tr></tbody></table><figcaption class="wp-element-caption"><strong>Nutritional Facts (PER SERVING)</strong></figcaption></figure>
<!-- /wp:table -->
