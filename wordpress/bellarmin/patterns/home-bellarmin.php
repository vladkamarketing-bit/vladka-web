<?php
/**
 * Title: Bellarmin – představení stanice
 * Slug: bellarmin/home-bellarmin
 * Categories: bellarmin
 * Description: Fotka s rámečkem a text o chovatelské stanici s tlačítkem.
 *
 * @package Bellarmin
 */
?>
<!-- wp:group {"align":"full","className":"bm-section bm-section--white","backgroundColor":"white","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull bm-section bm-section--white has-white-background-color has-background"><!-- wp:columns {"className":"bm-split"} -->
<div class="wp-block-columns bm-split"><!-- wp:column {"className":"bm-split__media"} -->
<div class="wp-block-column bm-split__media"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-bm-frame"} -->
<figure class="wp-block-image size-large is-style-bm-frame"><img src="<?php echo bellarmin_img( 'galerie-bellarmin-03.webp' ); // phpcs:ignore ?>" alt="Pes z chovatelské stanice Bellarmin s chovatelkou"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"bm-split__text"} -->
<div class="wp-block-column bm-split__text"><!-- wp:paragraph {"className":"bm-kicker"} -->
<p class="bm-kicker">Chovatelská stanice</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Bellarmin</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Bellarmin je malá chovatelská stanice, za kterou stojí roky práce s několika plemeny a řada psů úspěšných na výstavách i v běžném životě. Vždy jsme si zakládali na zdraví, povaze a respektu ke psům i jejich lidem.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>V současné době neplánujeme žádný vrh. Podívejte se ale, jaké psy jsme odchovali a co za námi stojí.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-bm-dark"} -->
<div class="wp-block-button is-style-bm-dark"><a class="wp-block-button__link wp-element-button" href="<?php echo bellarmin_url( 'bellarmin' ); // phpcs:ignore ?>">Více o Bellarmin</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
