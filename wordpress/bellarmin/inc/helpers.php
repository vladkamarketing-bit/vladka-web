<?php
/**
 * Pomocné funkce pro vzory (patterns).
 *
 * @package Bellarmin
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * URL obrázku dodaného se šablonou.
 *
 * @param string $file Název souboru v assets/images.
 * @return string
 */
function bellarmin_img( $file ) {
	return esc_url( get_theme_file_uri( 'assets/images/' . $file ) );
}

/**
 * Zástupný obrázek („sem doplňte fotku“).
 *
 * @param string $orientation 'na-sirku' | 'na-vysku' | 'ctverec'.
 * @return string
 */
function bellarmin_placeholder( $orientation = 'na-sirku' ) {
	$allowed = array( 'na-sirku', 'na-vysku', 'ctverec' );
	if ( ! in_array( $orientation, $allowed, true ) ) {
		$orientation = 'na-sirku';
	}
	return bellarmin_img( 'doplnit-fotku-' . $orientation . '.svg' );
}

/**
 * Odkaz na stránku šablony podle slugu (funguje i před vytvořením stránky).
 *
 * @param string $slug    Slug stránky.
 * @param string $fragment Volitelná kotva bez #.
 * @return string
 */
function bellarmin_url( $slug, $fragment = '' ) {
	$url  = '';
	$page = $slug ? get_page_by_path( $slug ) : null;
	if ( $page ) {
		$url = get_permalink( $page );
	} elseif ( '' === $slug ) {
		$url = home_url( '/' );
	} else {
		$url = home_url( '/' . $slug . '/' );
	}
	if ( $fragment ) {
		$url .= '#' . $fragment;
	}
	return esc_url( $url );
}

/**
 * Obrázkové bloky do galerie (zástupné fotky).
 *
 * @param int    $count       Počet fotek.
 * @param string $orientation Tvar zástupného obrázku.
 * @param string $alt         Popis fotky.
 * @return string
 */
function bellarmin_gallery_images( $count, $orientation = 'ctverec', $alt = '' ) {
	$out = '';
	for ( $i = 1; $i <= $count; $i++ ) {
		$out .= '<!-- wp:image {"sizeSlug":"large","linkDestination":"none"} -->' . "\n";
		$out .= '<figure class="wp-block-image size-large"><img src="' . bellarmin_placeholder( $orientation ) . '" alt="' . esc_attr( $alt ? $alt . ' ' . $i : '' ) . '"/></figure>' . "\n";
		$out .= '<!-- /wp:image -->' . "\n\n";
	}
	return $out;
}
