<?php
/**
 * Title: Celá stránka – Výcvik
 * Slug: bellarmin/page-vycvik
 * Categories: bellarmin-pages
 * Post Types: page
 * Block Types: core/post-content
 * Viewport Width: 1440
 *
 * @package Bellarmin
 */

$bellarmin_page_header = array(
	'kicker' => 'Výcvik',
	'title'  => 'Výcvik',
	'accent' => 'a výchova psů.',
	'text'   => array(
		'Psi, kteří jsou u nás na hlídání, nejen odpočívají. Pomáháme jim se socializací, učíme je základy poslušnosti a pracujeme s problémovým chováním – tak, aby se domů vraceli klidnější a jistější.',
		'Pracujeme individuálně, s ohledem na povahu, věk i plemeno psa, a vždy pozitivně a bez stresu. (Zástupný text – doplníme.)',
	),
);
include get_theme_file_path( 'patterns/page-header.php' );
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
<p class="bm-kicker">Jak to probíhá</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Výchova přímo<br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-orange-color">při hlídání.</mark></h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Na začátku se s vámi domluvíme, co vašeho psa trápí nebo co by se měl naučit. Během pobytu u nás s ním pak denně pracujeme – krátce, pravidelně a v prostředí, kde se cítí dobře.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Při předání vám ukážeme, co jsme spolu zvládli, a poradíme, jak v tom pokračovat doma. (Zástupný text – doplníme.)</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"bm-section bm-section--forest","backgroundColor":"forest","textColor":"cream","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull bm-section bm-section--forest has-cream-color has-forest-background-color has-text-color has-background"><!-- wp:paragraph {"className":"bm-kicker"} -->
<p class="bm-kicker">S čím pomůžeme</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Socializace, poslušnost<br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-orange-color">a klidné chování.</mark></h2>
<!-- /wp:heading -->

<?php
$bellarmin_services = array(
	array( 'Socializace', 'Pes se učí klidně fungovat mezi lidmi i jinými psy a zvyká si na nové situace, zvuky a prostředí. (Zástupný text.)' ),
	array( 'Základy poslušnosti', 'Přivolání, chůze na vodítku, sedni, lehni, zůstaň – základ, díky kterému je soužití s psem snazší. (Zástupný text.)' ),
	array( 'Problémové chování', 'Tahání na vodítku, štěkání, skákání na lidi nebo nejistota – hledáme příčinu a postupně ji řešíme. (Zástupný text.)' ),
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

<?php include get_theme_file_path( 'patterns/cta.php' ); ?>
