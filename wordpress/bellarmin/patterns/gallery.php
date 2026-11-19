<?php
/**
 * Title: Fotogalerie s prohlížením
 * Slug: bellarmin/gallery
 * Categories: bellarmin, gallery
 * Description: Nadpis a mřížka menších fotek. Po kliknutí se fotka zvětší a dají se procházet šipkami.
 *
 * @package Bellarmin
 */
?>
<!-- wp:group {"align":"full","className":"bm-section bm-gallery-section","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull bm-section bm-gallery-section"><!-- wp:paragraph {"className":"bm-kicker"} -->
<p class="bm-kicker">Fotogalerie</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Galerie</h2>
<!-- /wp:heading -->

<!-- wp:gallery {"columns":6,"linkTo":"none","className":"is-style-bm-thumbs"} -->
<figure class="wp-block-gallery has-nested-images columns-6 is-cropped is-style-bm-thumbs"><?php echo bellarmin_gallery_images( 12, 'ctverec', 'Fotka' ); // phpcs:ignore ?></figure>
<!-- /wp:gallery --></div>
<!-- /wp:group -->
