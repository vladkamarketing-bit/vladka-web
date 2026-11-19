<?php
/**
 * Title: Úvod – fotka a motto
 * Slug: bellarmin/home-hero
 * Categories: bellarmin
 * Description: Tmavý úvodní pás s nadpisem a mottem vlevo a fotkou vpravo.
 *
 * @package Bellarmin
 */
?>
<!-- wp:group {"align":"full","className":"bm-hero","backgroundColor":"espresso","textColor":"cream","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bm-hero has-cream-color has-espresso-background-color has-text-color has-background"><!-- wp:columns {"className":"bm-hero__cols"} -->
<div class="wp-block-columns bm-hero__cols"><!-- wp:column {"width":"44%","className":"bm-hero__text"} -->
<div class="wp-block-column bm-hero__text" style="flex-basis:44%"><!-- wp:paragraph {"className":"bm-kicker"} -->
<p class="bm-kicker">Chovatelská stanice Bellarmin</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Přátelský<br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-orange-color">charakter.</mark></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"bm-hero__quote"} -->
<p class="bm-hero__quote">Nechat se zvířaty vést jejich směrem, protože ony nás učí pokoře a nacházet štěstí. Dvě duše, jedno tělo.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"56%","className":"bm-hero__media"} -->
<div class="wp-block-column bm-hero__media" style="flex-basis:56%"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","className":"bm-hero__img"} -->
<figure class="wp-block-image size-full bm-hero__img"><img src="<?php echo bellarmin_img( 'hero-setr.webp' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>" alt="Chovatelka se setrem u řeky na podzim"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
