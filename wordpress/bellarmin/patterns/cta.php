<?php
/**
 * Title: Výzva – napište nám
 * Slug: bellarmin/cta
 * Categories: bellarmin
 * Description: Krátký tmavý pás s tlačítkem na kontakt.
 *
 * @package Bellarmin
 */
?>
<!-- wp:group {"align":"full","className":"bm-cta","backgroundColor":"espresso","textColor":"cream","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull bm-cta has-cream-color has-espresso-background-color has-text-color has-background"><!-- wp:group {"className":"bm-cta__row","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group bm-cta__row"><!-- wp:heading -->
<h2 class="wp-block-heading">Máte dotaz? <mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-orange-color">Napište nám.</mark></h2>
<!-- /wp:heading -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button -->
<div class="wp-block-button"><a class="wp-block-button__link wp-element-button" href="<?php echo bellarmin_url( '', 'kontakt' ); // phpcs:ignore ?>">Kontakt</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
