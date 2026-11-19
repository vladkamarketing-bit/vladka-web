<?php
/**
 * Title: Úspěšný odchov – pes s tituly a 3 fotkami
 * Slug: bellarmin/champion
 * Categories: bellarmin
 * Description: Jméno psa, tituly jako štítky, krátký text a tři fotky (na šířku i na výšku, nic se neořízne).
 *
 * @package Bellarmin
 */

$bellarmin_ch = isset( $bellarmin_champion ) && is_array( $bellarmin_champion ) ? $bellarmin_champion : array(
	'name'    => 'Jméno psa Bellarmin',
	'titles'  => array( 'Titul', 'Titul', 'Titul' ),
	'reverse' => false,
	'text'    => 'Krátký text o psovi – povaha, plemeno, čím je výjimečný.',
);
$bellarmin_photos = isset( $bellarmin_ch['photos'] ) ? $bellarmin_ch['photos'] : array();
$bellarmin_ph_default = array( 'na-sirku', 'na-vysku', 'na-sirku' );
$bellarmin_ph_label = array( 'postoj', 'fotka 2', 'fotka 3' );
$bellarmin_cls = $bellarmin_ch['reverse'] ? 'bm-champion bm-champion--reverse' : 'bm-champion';
?>
<!-- wp:columns {"className":"<?php echo esc_attr( $bellarmin_cls ); ?>"} -->
<div class="wp-block-columns <?php echo esc_attr( $bellarmin_cls ); ?>"><!-- wp:column {"width":"40%","className":"bm-champion__text"} -->
<div class="wp-block-column bm-champion__text" style="flex-basis:40%"><!-- wp:paragraph {"className":"bm-kicker"} -->
<p class="bm-kicker">Úspěšný odchov</p>
<!-- /wp:paragraph -->

<!-- wp:heading {"level":3,"className":"bm-champion__name"} -->
<h3 class="wp-block-heading bm-champion__name"><?php echo esc_html( $bellarmin_ch['name'] ); ?></h3>
<!-- /wp:heading -->

<!-- wp:list {"className":"is-style-bm-titles"} -->
<ul class="wp-block-list is-style-bm-titles"><?php foreach ( $bellarmin_ch['titles'] as $bellarmin_t ) : ?><!-- wp:list-item -->
<li><?php echo esc_html( $bellarmin_t ); ?></li>
<!-- /wp:list-item --><?php endforeach; ?></ul>
<!-- /wp:list -->

<!-- wp:paragraph -->
<p><?php echo esc_html( $bellarmin_ch['text'] ); ?></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"width":"60%","className":"bm-champion__photos"} -->
<div class="wp-block-column bm-champion__photos" style="flex-basis:60%"><!-- wp:gallery {"columns":2,"imageCrop":false,"linkTo":"none","className":"bm-champion__gallery"} -->
<figure class="wp-block-gallery has-nested-images columns-2 bm-champion__gallery"><?php for ( $bellarmin_i = 0; $bellarmin_i < 3; $bellarmin_i++ ) :
	$bellarmin_src = ! empty( $bellarmin_photos[ $bellarmin_i ] ) ? bellarmin_img( $bellarmin_photos[ $bellarmin_i ] ) : bellarmin_placeholder( $bellarmin_ph_default[ $bellarmin_i ] );
	?><!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image size-large"><img src="<?php echo $bellarmin_src; // phpcs:ignore ?>" alt="<?php echo esc_attr( $bellarmin_ch['name'] . ' – ' . $bellarmin_ph_label[ $bellarmin_i ] ); ?>"/></figure>
<!-- /wp:image -->

<?php endfor; ?></figure>
<!-- /wp:gallery --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->
