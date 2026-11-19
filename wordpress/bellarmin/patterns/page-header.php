<?php
/**
 * Title: Hlavička podstránky
 * Slug: bellarmin/page-header
 * Categories: bellarmin
 * Description: Tmavý pás s nadpisem stránky vlevo a popisem služby vpravo.
 *
 * @package Bellarmin
 */

$bellarmin_ph = isset( $bellarmin_page_header ) && is_array( $bellarmin_page_header ) ? $bellarmin_page_header : array(
	'kicker' => 'Služba',
	'title'  => 'Nadpis stránky',
	'accent' => 'druhý řádek',
	'text'   => array( 'Popis služby.' ),
);
?>
<!-- wp:group {"align":"full","className":"bm-page-hero","backgroundColor":"espresso","textColor":"cream","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull bm-page-hero has-cream-color has-espresso-background-color has-text-color has-background"><!-- wp:columns {"className":"bm-page-hero__cols"} -->
<div class="wp-block-columns bm-page-hero__cols"><!-- wp:column -->
<div class="wp-block-column"><!-- wp:paragraph {"className":"bm-kicker"} -->
<p class="bm-kicker"><?php echo esc_html( $bellarmin_ph['kicker'] ); ?></p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":1} -->
<h1 class="wp-block-heading"><?php echo esc_html( $bellarmin_ph['title'] ); ?><br><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-orange-color"><?php echo esc_html( $bellarmin_ph['accent'] ); ?></mark></h1>
<!-- /wp:heading --></div>
<!-- /wp:column -->

<!-- wp:column {"className":"bm-page-hero__text"} -->
<div class="wp-block-column bm-page-hero__text"><?php foreach ( $bellarmin_ph['text'] as $bellarmin_p ) : ?><!-- wp:paragraph -->
<p><?php echo esc_html( $bellarmin_p ); ?></p>
<!-- /wp:paragraph -->

<?php endforeach; ?></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
