<?php
/**
 * Title: Celá stránka – Bellarmin
 * Slug: bellarmin/page-bellarmin
 * Categories: bellarmin-pages
 * Post Types: page
 * Block Types: core/post-content
 * Viewport Width: 1440
 *
 * @package Bellarmin
 */
?>
<!-- wp:group {"align":"full","className":"bm-cover-hero","layout":{"type":"default"}} -->
<div class="wp-block-group alignfull bm-cover-hero"><!-- wp:image {"sizeSlug":"full","linkDestination":"none","align":"full","className":"bm-cover-hero__img"} -->
<figure class="wp-block-image alignfull size-full bm-cover-hero__img"><img src="<?php echo bellarmin_img( 'bellarmin-lavicka.webp' ); // phpcs:ignore ?>" alt="Chovatelka se psem z chovatelské stanice Bellarmin na lavičce"/></figure>
<!-- /wp:image -->

<!-- wp:group {"className":"bm-cover-hero__title","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group bm-cover-hero__title"><!-- wp:paragraph {"className":"bm-kicker"} -->
<p class="bm-kicker">Chovatelská stanice</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading">Bellarmin</h1>
<!-- /wp:heading --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"bm-section bm-intro","layout":{"type":"constrained","contentSize":"880px"}} -->
<div class="wp-block-group alignfull bm-section bm-intro"><!-- wp:paragraph {"className":"bm-kicker"} -->
<p class="bm-kicker">O chovatelské stanici</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Zdraví, povaha<br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-orange-color">a respekt ke psům.</mark></h2>
<!-- /wp:heading -->

<!-- wp:paragraph {"className":"bm-lead"} -->
<p class="bm-lead">Bellarmin je malá rodinná chovatelská stanice registrovaná pod ČMKU a FCI. Za léta práce s několika plemeny jsme odchovali psy, kteří obstáli ve výstavních kruzích doma i v zahraničí, a hlavně se stali spokojenými parťáky svých rodin.</p>
<!-- /wp:paragraph -->

<!-- wp:paragraph -->
<p>Každé spojení jsme vždy plánovali s ohledem na zdraví, povahu a exteriér. Štěňata vyrůstala s námi v domě, poznávala běžný svět od prvních týdnů a novým majitelům jsme byli oporou celý psí život. V současné době neplánujeme žádný vrh – o tom, co za námi stojí, ale nejlépe vypovídají naši odchovanci.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"bm-section bm-section--white bm-champions","backgroundColor":"white","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull bm-section bm-section--white bm-champions has-white-background-color has-background"><!-- wp:heading {"className":"bm-champions__title"} -->
<h2 class="wp-block-heading bm-champions__title">Úspěšné odchovy</h2>
<!-- /wp:heading -->

<?php
$bellarmin_champion = array(
	'name'    => 'Darvin Bellarmin',
	'titles'  => array( 'JCH ČR', 'CH ČR', 'CH SK', '6× CAJC', '14× CAC', '5× CACIB', '6× BOJ', '7× BOB' ),
	'reverse' => false,
	'photos'  => array( 'darvin-postoj.webp', 'darvin-vystava.webp', 'darvin-sedi.webp' ),
	'text'    => 'Krátký text o Darvinovi – povaha, plemeno a čím je výjimečný. (Doplníme.)',
);
include get_theme_file_path( 'patterns/champion.php' );
echo "\n\n";
$bellarmin_champion = array(
	'name'    => 'Carmello Bellarmin',
	'titles'  => array( 'Club Winner', 'Best of Breed', 'Best in Show', '57 GSMD z 299 psů', 'Absolut Winner' ),
	'reverse' => true,
	'photos'  => array( 'carmello-vystava.webp' ),
	'text'    => 'Krátký text o Carmellovi – povaha, plemeno a čím je výjimečný. (Doplníme.)',
);
include get_theme_file_path( 'patterns/champion.php' );
?></div>
<!-- /wp:group -->

<!-- wp:group {"align":"full","className":"bm-section bm-gallery-section","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull bm-section bm-gallery-section"><!-- wp:paragraph {"className":"bm-kicker"} -->
<p class="bm-kicker">Fotogalerie</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Galerie Bellarmin</h2>
<!-- /wp:heading -->

<!-- wp:gallery {"columns":6,"linkTo":"none","className":"is-style-bm-thumbs"} -->
<figure class="wp-block-gallery has-nested-images columns-6 is-cropped is-style-bm-thumbs"><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo bellarmin_img( 'galerie-bellarmin-01.webp' ); // phpcs:ignore ?>" alt="Dva psi z chovatelské stanice Bellarmin na zahradě"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo bellarmin_img( 'galerie-bellarmin-02-trofeje.webp' ); // phpcs:ignore ?>" alt="Rozety a poháry – Nejlepší švýcarský salašnický pes"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo bellarmin_img( 'galerie-bellarmin-03.webp' ); // phpcs:ignore ?>" alt="Chovatelka se psem v zimní krajině"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo bellarmin_img( 'galerie-bellarmin-04.webp' ); // phpcs:ignore ?>" alt="Chovatelka se psem na zasněžené cestě"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo bellarmin_img( 'galerie-bellarmin-05.webp' ); // phpcs:ignore ?>" alt="Švýcarský salašnický pes ve sněhu"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo bellarmin_img( 'galerie-bellarmin-06.webp' ); // phpcs:ignore ?>" alt="Portrét psa z chovatelské stanice Bellarmin"/></figure>
<!-- /wp:image -->

<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo bellarmin_img( 'galerie-bellarmin-07.webp' ); // phpcs:ignore ?>" alt="Dva psi odpočívají v trávě"/></figure>
<!-- /wp:image -->

<?php echo bellarmin_gallery_images( 5, 'ctverec', 'Galerie Bellarmin' ); // phpcs:ignore ?></figure>
<!-- /wp:gallery --></div>
<!-- /wp:group -->

<?php include get_theme_file_path( 'patterns/cta.php' ); ?>
