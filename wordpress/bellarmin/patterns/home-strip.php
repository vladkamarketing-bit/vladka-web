<?php
/**
 * Title: Rozcestník – Bellarmin, Handling, Hlídání
 * Slug: bellarmin/home-strip
 * Categories: bellarmin
 * Description: Úzký pás s krátkým nadpisem a třemi odkazy na stránky.
 *
 * @package Bellarmin
 */
?>
<!-- wp:group {"align":"full","className":"bm-strip","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull bm-strip"><!-- wp:group {"className":"bm-strip__head","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group bm-strip__head"><!-- wp:heading -->
<h2 class="wp-block-heading">Co u nás najdete</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Chovatelskou stanici, handling na výstavách i hlídání psů – vždy se stejnou péčí a respektem ke psům.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:buttons {"className":"is-style-bm-tiles"} -->
<div class="wp-block-buttons is-style-bm-tiles"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo bellarmin_url( 'bellarmin' ); // phpcs:ignore ?>">Bellarmin</a></div>
<!-- /wp:button -->

<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo bellarmin_url( 'handling' ); // phpcs:ignore ?>">Handling</a></div>
<!-- /wp:button -->

<!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo bellarmin_url( 'hlidani' ); // phpcs:ignore ?>">Hlídání psů</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->
