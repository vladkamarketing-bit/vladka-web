<?php
/**
 * Title: Celá stránka – Hlídání psů
 * Slug: bellarmin/page-hlidani
 * Categories: bellarmin-pages
 * Post Types: page
 * Block Types: core/post-content
 * Viewport Width: 1440
 *
 * @package Bellarmin
 */

$bellarmin_page_header = array(
	'kicker' => 'Hlídání psů',
	'title'  => 'Hlídání psů',
	'accent' => 'jako u vás doma.',
	'text'   => array(
		'Odjíždíte na dovolenou nebo pracovní cestu a nechcete svého psa nechat v hotelu s kotci? U nás bude bydlet s námi v domě, s vlastním pelíškem, procházkami a společností.',
		'Hlídáme jen menší počet psů, aby se každému dostalo pozornosti. Každý den vám pošleme fotku a krátkou zprávu, jak se váš pes má. (Zástupný text – doplníme.)',
	),
);
include get_theme_file_path( 'patterns/page-header.php' );
?>

<!-- wp:group {"align":"full","className":"bm-section bm-section--cream","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull bm-section bm-section--cream"><!-- wp:paragraph {"className":"bm-kicker"} -->
<p class="bm-kicker">Co u nás váš pes má</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Prostor, péče<br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-orange-color">a klid.</mark></h2>
<!-- /wp:heading -->

<?php
$bellarmin_cards = array(
	array( 'Velká zahrada', 'Bezpečně oplocený prostor na pohyb, hru i odpočinek venku.' ),
	array( 'Domácí péče a pelíšky', 'Žádné kotce ani boxy. Psi bydlí s námi v domě a mají své pelíšky.' ),
	array( 'Klid', 'Tiché prostředí mimo ruch, kde si pes rychle zvykne a odpočine si.' ),
	array( 'Pohoda', 'Pravidelný denní režim, procházky, hra a mazlení podle povahy psa.' ),
	array( 'Bezpečí', 'Dohled po celý den, zabezpečená zahrada a ohled na zdraví každého psa.' ),
	array( 'Odborná péče zkušeného chovatele', 'Rozumíme psí řeči, povahám i potřebám různých plemen.' ),
);
foreach ( array_chunk( $bellarmin_cards, 3 ) as $bellarmin_row ) :
	?>
<!-- wp:columns {"className":"bm-cards"} -->
<div class="wp-block-columns bm-cards"><?php foreach ( $bellarmin_row as $bellarmin_card ) : ?><!-- wp:column {"className":"bm-card"} -->
<div class="wp-block-column bm-card"><!-- wp:heading {"level":3} -->
<h3 class="wp-block-heading"><?php echo esc_html( $bellarmin_card[0] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p><?php echo esc_html( $bellarmin_card[1] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --><?php endforeach; ?></div>
<!-- /wp:columns -->

<?php endforeach; ?>
<!-- wp:image {"sizeSlug":"large","linkDestination":"none","align":"wide","className":"bm-wide-photo"} -->
<figure class="wp-block-image alignwide size-large bm-wide-photo"><img src="<?php echo bellarmin_img( 'hlidani-02-zahrada.webp' ); // phpcs:ignore ?>" alt="Velká zahrada u domu, kde psi tráví hlídání"/></figure>
<!-- /wp:image --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"bm-section bm-section--white bm-gallery-section","backgroundColor":"white","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull bm-section bm-section--white bm-gallery-section has-white-background-color has-background"><!-- wp:paragraph {"className":"bm-kicker"} -->
<p class="bm-kicker">Fotogalerie</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Jak to u nás vypadá</h2>
<!-- /wp:heading -->

<!-- wp:gallery {"columns":6,"linkTo":"none","className":"is-style-bm-thumbs"} -->
<figure class="wp-block-gallery has-nested-images columns-6 is-cropped is-style-bm-thumbs"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo bellarmin_img( 'hlidani-pelisky.webp' ); // phpcs:ignore ?>" alt="Psi odpočívají na pelíšcích v místnosti s výstavními trofejemi"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo bellarmin_img( 'hlidani-01-pelisek.webp' ); // phpcs:ignore ?>" alt="Dva psi spolu odpočívají na pelíšku"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo bellarmin_img( 'hlidani-03-bily-ovcak.webp' ); // phpcs:ignore ?>" alt="Bílý švýcarský ovčák na pelíšku"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo bellarmin_img( 'hlidani-04-hra-na-zahrade.webp' ); // phpcs:ignore ?>" alt="Hra se psem na zahradě"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo bellarmin_img( 'hlidani-02-zahrada.webp' ); // phpcs:ignore ?>" alt="Zahrada s houpačkou a lavičkou"/></figure>
<!-- /wp:image -->

<?php echo bellarmin_gallery_images( 7, 'ctverec', 'Hlídání psů' ); // phpcs:ignore ?></figure>
<!-- /wp:gallery --></div>
<!-- /wp:group -->

<?php include get_theme_file_path( 'patterns/cta.php' ); ?>
