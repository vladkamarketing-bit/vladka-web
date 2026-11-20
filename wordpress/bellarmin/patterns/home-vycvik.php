<?php
/**
 * Title: Upoutávka – Výcvik
 * Slug: bellarmin/home-vycvik
 * Categories: bellarmin
 * Description: Fotka s rámečkem a text o výcviku a výchově psů.
 *
 * @package Bellarmin
 */
?>
<!-- wp:group {"align":"full","className":"bm-section bm-section--white","backgroundColor":"white","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull bm-section bm-section--white has-white-background-color has-background"><!-- wp:columns {"className":"bm-split"} -->
<div class="wp-block-columns bm-split"><!-- wp:column {"className":"bm-split__media"} -->
<div class="wp-block-column bm-split__media"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-bm-frame"} -->
<figure class="wp-block-image size-large is-style-bm-frame"><img src="<?php echo bellarmin_placeholder( 'na-vysku' ); // phpcs:ignore ?>" alt="Výcvik psa"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"bm-split__text"} -->
<div class="wp-block-column bm-split__text"><!-- wp:paragraph {"className":"bm-kicker"} -->
<p class="bm-kicker">Výcvik</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Vychovaný pes.<br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-orange-color">Spokojený pes.</mark></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Psům, kteří jsou u nás na hlídání, se nevěnujeme jen procházkami a mazlením. Pomáháme jim se socializací, učíme je základy poslušnosti a pracujeme i s problémovým chováním – v klidu, s trpělivostí a bez stresu.</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-bm-checks"} -->
<ul class="wp-block-list is-style-bm-checks"><!-- wp:list-item -->
<li>Socializace s lidmi i dalšími psy</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Základy poslušnosti</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Řešení problémového chování</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-bm-dark"} -->
<div class="wp-block-button is-style-bm-dark"><a class="wp-block-button__link wp-element-button" href="<?php echo bellarmin_url( 'vycvik' ); // phpcs:ignore ?>">Více o výcviku</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
