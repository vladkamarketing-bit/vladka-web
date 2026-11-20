<?php
/**
 * Title: Celá stránka – Handling
 * Slug: bellarmin/page-handling
 * Categories: bellarmin-pages
 * Post Types: page
 * Block Types: core/post-content
 * Viewport Width: 1440
 *
 * @package Bellarmin
 */

$bellarmin_page_header = array(
	'kicker' => 'Handling',
	'title'  => 'Handling',
	'accent' => 'na výstavách.',
	'text'   => array(
		'Profesionální handling znamená, že vašeho psa na výstavě předvede zkušená ruka – v kondici, s upravenou srstí a v klidu. Pes se tak ukáže v nejlepším světle a rozhodčí uvidí to, co v něm skutečně je.',
		'Postaráme se o přípravu i samotné předvedení – vše od A do Z.',
	),
);
include get_theme_file_path( 'patterns/page-header.php' );
?>

<!-- wp:group {"align":"full","className":"bm-section bm-section--white","backgroundColor":"white","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull bm-section bm-section--white has-white-background-color has-background"><!-- wp:columns {"className":"bm-split"} -->
<div class="wp-block-columns bm-split"><!-- wp:column {"className":"bm-split__text"} -->
<div class="wp-block-column bm-split__text"><!-- wp:paragraph {"className":"bm-kicker"} -->
<p class="bm-kicker">Proč handling</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Rozdíl, který<br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-orange-color">uvidí rozhodčí.</mark></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>I krásný pes může v kruhu ztratit body nervozitou, špatným postojem nebo nepřipravenou srstí. Zkušený handler zná průběh posuzování, ví, co rozhodčí sleduje, a umí psa předvést tak, aby vynikly jeho přednosti.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Výsledkem je lepší hodnocení a cesta k prestižním titulům a oceněním – od CAJC a CAC přes CACIB až po BOB nebo Best in Show. (Zástupný text – doplníme.)</p>
<!-- /wp:paragraph -->

<!-- wp:list {"className":"is-style-bm-checks"} -->
<ul class="wp-block-list is-style-bm-checks"><!-- wp:list-item -->
<li>Lepší výsledky a hodnocení</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Klidný a sebevědomý pes v kruhu</li>
<!-- /wp:list-item -->

<!-- wp:list-item -->
<li>Cesta k šampionátům a prestižním oceněním</li>
<!-- /wp:list-item --></ul>
<!-- /wp:list --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"bm-split__media"} -->
<div class="wp-block-column bm-split__media"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"is-style-bm-frame"} -->
<figure class="wp-block-image size-large is-style-bm-frame"><img src="<?php echo bellarmin_img( 'handling-v-kruhu.webp' ); // phpcs:ignore ?>" alt="Handlerka předvádí setra ve výstavním kruhu"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"bm-section bm-section--forest","backgroundColor":"forest","textColor":"cream","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull bm-section bm-section--forest has-cream-color has-forest-background-color has-text-color has-background"><!-- wp:paragraph {"className":"bm-kicker"} -->
<p class="bm-kicker">Servis handlingu</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Příprava, která<br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-orange-color">je vidět v kruhu.</mark></h2>
<!-- /wp:heading -->

<?php
$bellarmin_services = array(
	array( 'Příprava psa na výstavu', 'Výstavní trénink, kondice, postoj a úprava srsti, aby byl pes na den D připravený. (Zástupný text.)' ),
);
?>
<!-- wp:columns {"className":"bm-cards bm-cards--dark"} -->
<div class="wp-block-columns bm-cards bm-cards--dark"><?php foreach ( $bellarmin_services as $bellarmin_card ) : ?><!-- wp:column {"className":"bm-card"} -->
<div class="wp-block-column bm-card"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $bellarmin_card[0] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( $bellarmin_card[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --><?php endforeach; ?></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"bm-section bm-gallery-section","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull bm-section bm-gallery-section"><!-- wp:paragraph {"className":"bm-kicker"} -->
<p class="bm-kicker">Fotogalerie</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Z výstav</h2>
<!-- /wp:heading -->

<!-- wp:gallery {"columns":6,"linkTo":"none","className":"is-style-bm-thumbs"} -->
<figure class="wp-block-gallery has-nested-images columns-6 is-cropped is-style-bm-thumbs"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo bellarmin_img( 'handling-v-kruhu.webp' ); // phpcs:ignore ?>" alt="Handlerka předvádí setra ve výstavním kruhu"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo bellarmin_img( 'handling-vystava.webp' ); // phpcs:ignore ?>" alt="Handlerka se setrem a výstavní rozetou před zámkem"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo bellarmin_img( 'handling-vystava-01.webp' ); // phpcs:ignore ?>" alt="Handlerka se setrem na stupních vítězů s velkou rozetou"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo bellarmin_img( 'handling-vystava-02.webp' ); // phpcs:ignore ?>" alt="Handlerka předvádí dva setry v kruhu"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo bellarmin_img( 'handling-vystava-03.webp' ); // phpcs:ignore ?>" alt="Handlerka staví setra do výstavního postoje"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo bellarmin_img( 'handling-vystava-04.webp' ); // phpcs:ignore ?>" alt="Handlerka běží se setrem ve výstavním kruhu"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo bellarmin_img( 'darvin-vystava.webp' ); // phpcs:ignore ?>" alt="Darvin Bellarmin s rozhodčí a handlerkou na výstavě"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo bellarmin_img( 'carmello-vystava.webp' ); // phpcs:ignore ?>" alt="Carmello Bellarmin s velkou rozetou na výstavě"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo bellarmin_img( 'handling-rozety.webp' ); // phpcs:ignore ?>" alt="Rozety a poháry – Nejlepší švýcarský salašnický pes"/></figure>
<!-- /wp:image -->

</figure>
<!-- /wp:gallery --></div>
<!-- /wp:group -->

<?php include get_theme_file_path( 'patterns/cta.php' ); ?>
