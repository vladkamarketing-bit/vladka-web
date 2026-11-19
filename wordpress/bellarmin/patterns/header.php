<?php
/**
 * Title: Hlavička
 * Slug: bellarmin/header
 * Categories: header
 * Block Types: core/template-part/header
 * Inserter: no
 *
 * @package Bellarmin
 */

$bellarmin_nav = (int) get_option( 'bellarmin_nav_id' );
$bellarmin_nav_attrs = $bellarmin_nav ? '"ref":' . $bellarmin_nav . ',' : '';
?>
<!-- wp:group {"align":"full","className":"bm-header","backgroundColor":"espresso","textColor":"cream","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
<div class="wp-block-group alignfull bm-header has-cream-color has-espresso-background-color has-text-color has-background"><!-- wp:group {"className":"bm-brand","layout":{"type":"flex","orientation":"vertical"}} -->
<div class="wp-block-group bm-brand"><!-- wp:site-title {"level":0} /-->

<!-- wp:site-tagline /--></div>
<!-- /wp:group -->

<!-- wp:navigation {<?php echo $bellarmin_nav_attrs; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>"overlayMenu":"mobile","overlayBackgroundColor":"espresso","overlayTextColor":"cream","className":"bm-nav","layout":{"type":"flex","justifyContent":"right"}} /--></div>
<!-- /wp:group -->
