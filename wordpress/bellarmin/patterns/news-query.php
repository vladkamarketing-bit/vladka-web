<?php
/**
 * Title: Novinky – mřížka příspěvků
 * Slug: bellarmin/news-query
 * Categories: bellarmin
 * Inserter: no
 *
 * @package Bellarmin
 */

$bellarmin_inherit  = ! empty( $bellarmin_news_inherit );
$bellarmin_per_page = $bellarmin_inherit ? 9 : 3;
?>
<!-- wp:query {"queryId":7,"query":{"perPage":<?php echo (int) $bellarmin_per_page; ?>,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","inherit":<?php echo $bellarmin_inherit ? 'true' : 'false'; ?>},"className":"bm-news-query"} -->
<div class="wp-block-query bm-news-query"><!-- wp:post-template {"layout":{"type":"grid","columnCount":3}} -->
<!-- wp:group {"className":"bm-news-card","layout":{"type":"default"}} -->
<div class="wp-block-group bm-news-card"><!-- wp:post-featured-image {"isLink":true,"aspectRatio":"4/3"} /-->

<!-- wp:group {"className":"bm-news-card__body","layout":{"type":"default"}} -->
<div class="wp-block-group bm-news-card__body"><!-- wp:post-date {"className":"bm-news-card__date"} /-->

<!-- wp:post-title {"level":3,"isLink":true} /-->

<!-- wp:post-excerpt {"excerptLength":24,"moreText":"Číst dál"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<?php if ( $bellarmin_inherit ) : ?><!-- wp:query-pagination {"layout":{"type":"flex","justifyContent":"center"}} -->
<!-- wp:query-pagination-previous {"label":"Novější"} /-->

<!-- wp:query-pagination-numbers /-->

<!-- wp:query-pagination-next {"label":"Starší"} /-->
<!-- /wp:query-pagination -->

<?php endif; ?><!-- wp:query-no-results -->
<!-- wp:paragraph -->
<p>Zatím tu žádné novinky nejsou.</p>
<!-- /wp:paragraph -->
<!-- /wp:query-no-results --></div>
<!-- /wp:query -->
