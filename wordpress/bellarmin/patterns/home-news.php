<?php
/**
 * Title: Novinky – poslední 3 příspěvky
 * Slug: bellarmin/home-news
 * Categories: bellarmin
 * Description: Tři nejnovější příspěvky z Novinek (doplňují se samy, když přidáte nový příspěvek).
 *
 * @package Bellarmin
 */
?>
<!-- wp:group {"align":"full","className":"bm-section bm-section--cream bm-news","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull bm-section bm-section--cream bm-news"><!-- wp:group {"className":"bm-news__head","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
<div class="wp-block-group bm-news__head"><!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:paragraph {"className":"bm-kicker"} -->
<p class="bm-kicker">Novinky</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2 class="wp-block-heading">Co je u nás nového</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-bm-dark"} -->
<div class="wp-block-button is-style-bm-dark"><a class="wp-block-button__link wp-element-button" href="<?php echo bellarmin_url( 'novinky' ); // phpcs:ignore ?>">Všechny novinky</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<?php include get_theme_file_path( 'patterns/news-query.php' ); ?></div>
<!-- /wp:group -->
