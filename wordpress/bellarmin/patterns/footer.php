<?php
/**
 * Title: Patička
 * Slug: bellarmin/footer
 * Categories: footer
 * Block Types: core/template-part/footer
 * Inserter: no
 *
 * @package Bellarmin
 */

$bellarmin_nav = (int) get_option( 'bellarmin_nav_id' );
$bellarmin_nav_attrs = $bellarmin_nav ? '"ref":' . $bellarmin_nav . ',' : '';
?>
<!-- wp:group {"align":"full","className":"bm-footer","backgroundColor":"espresso","textColor":"cream","layout":{"type":"constrained","contentSize":"1240px"}} -->
<div class="wp-block-group alignfull bm-footer has-cream-color has-espresso-background-color has-text-color has-background"><!-- wp:group {"className":"bm-footer__row","layout":{"type":"flex","flexWrap":"wrap","justifyContent":"space-between"}} -->
<div class="wp-block-group bm-footer__row"><!-- wp:group {"className":"bm-brand","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group bm-brand"><!-- wp:site-title {"level":0} /-->

<!-- wp:site-tagline /--></div>
<!-- /wp:group -->

<!-- wp:navigation {<?php echo $bellarmin_nav_attrs; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>"overlayMenu":"never","className":"bm-footer-nav","layout":{"type":"flex","flexWrap":"wrap"}} /--></div>
<!-- /wp:group -->

<!-- wp:paragraph {"className":"bm-footer__copy"} -->
<p class="bm-footer__copy">© <?php echo esc_html( gmdate( 'Y' ) ); ?> Bellarmin. Chovatelská stanice registrovaná pod ČMKU / FCI.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:group -->
