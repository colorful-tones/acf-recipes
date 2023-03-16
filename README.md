# ACF Recipes

Final demo site 👉 [acfrecipes.wpengine.com](https://acfrecipes.wpengine.com)

💥 [Slides for this presentation](https://acfrecipes.wpengine.com/presentation/acf/) 💥

<sub><sup>(_This presentation was also created as a CPT and with Pattern Manager_ 🏎)</sup></sub>

A demonstration of using [Advanced Custom Fields (ACF)](https://www.advancedcustomfields.com/) to:

1. Create a custom post type: `Recipe`
2. Create a custom taxonomy: `Recipe Types` (e.g. breakfast, lunch, dinner)
3. Create custom fields group: Cook & Prep Times
4. Create a custom [ACF Block](https://www.advancedcustomfields.com/resources/whats-new-with-acf-blocks-in-acf-6/): **Cook & Prep Times** that utilizes the custom fields and is available for the Recipe custom post type
    - Also, [register a custom block category](https://github.com/colorful-tones/acf-recipes/blob/main/plugins/acf-cooking-recipes/acf-cooking-recipes.php#L50): `Recipes` to put the Cook & Prep Times block under.5. Create custom block patterns using WP Engine's [Pattern Manager](https://wpengine.com/builders/pattern-manager/)
    - Assign the block patterns to the Recipe post type
    - Make it available in the Recipe new post modal for editors
    - Register a custom block pattern category for Recipes
6. Set a custom load & save point for ACF JSON. So we can version control our ACF generated CPT, taxonomy, and field groups directly in our custom plugin: [`plugins/acf-cooking-recipes/acf-json`](https://github.com/colorful-tones/acf-recipes/tree/main/plugins/acf-cooking-recipes/acf-json)

Includes:

- WP Engine's [Frost](https://frostwp.com) theme with patterns automatically generated and saved to the theme's `/patterns/` directory. Again, created with Pattern Manager, which also saves media (images) alongside each pattern within the theme!
  - [`themes/frost/patterns/recipe-full-page-columns.php`](https://github.com/colorful-tones/acf-recipes/blob/main/themes/frost-trunk/patterns/recipe-full-page-columns.php)
  - [`themes/frost/patterns/recipe-full-page-complex.php`](https://github.com/colorful-tones/acf-recipes/blob/main/themes/frost-trunk/patterns/recipe-full-page-complex.php)
  - [`themes/frost/patterns/patterns/recipe-full-page-simple.php`](patterns/recipe-full-page-simple.php)

The root of this repo represents the `wp-content/` directory of your WordPress install.

All of the content used to populate this learning resource site was sourced from [SimplyRecipes.com](https://simplyrecipes.com)

## Requirements

1. [ACF PRO](https://www.advancedcustomfields.com/pro/) 6.1.0-alpha1 – for ACF stuff.
2. [Gutena Newsletter](https://wordpress.org/plugins/newsletter-block-by-gutena/) 1.1.4 – for newsletter block in footer template part.

### Optional

1. [Pattern Manager](https://wpengine.com/builders/pattern-manager/) 0.1.3 – if you want to create and maintain further patterns, but not necessary if you do not.
2. [WordPress Beta Tester](https://wordpress.org/plugins/wordpress-beta-tester/) 3.2.9 – if you want to run the latest WP 6.2 RC2, which was used in the demo, but WP 6.1 will likely work just fine.

## Resources

* [What’s new with ACF Blocks in ACF 6
](https://www.advancedcustomfields.com/resources/whats-new-with-acf-blocks-in-acf-6/)
* [Branched deploys to WP Engine with GitHub Actions](https://wpengine.com/builders/branched-deploys-to-wp-engine-with-github-actions/)
* [GitHub Action for WP Engine Site Deployments](https://wpengine.com/support/github-action-deploy/)
* [GitHub Action - Deploy WordPress to WP Engine](https://github.com/marketplace/actions/deploy-wordpress-to-wp-engine)