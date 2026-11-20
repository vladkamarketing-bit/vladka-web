<?php
/**
 * Po aktivaci šablony založí stránky (Úvod, Bellarmin, Handling, Hlídání psů, Výcvik, Novinky),
 * nastaví úvodní stránku, stránku novinek a menu. Stránky, které už existují, nepřepisuje.
 * Při aktualizaci šablony doplní jen to, co v nové verzi přibylo.
 *
 * @package Bellarmin
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Seznam stránek šablony: slug => [název, vzor, pořadí].
 *
 * @return array
 */
function bellarmin_pages() {
	return array(
		'uvod'      => array( 'Úvod', 'page-home', 0 ),
		'bellarmin' => array( 'Bellarmin', 'page-bellarmin', 1 ),
		'handling'  => array( 'Handling', 'page-handling', 2 ),
		'hlidani'   => array( 'Hlídání psů', 'page-hlidani', 3 ),
		'vycvik'    => array( 'Výcvik', 'page-vycvik', 4 ),
		'novinky'   => array( 'Novinky', '', 5 ),
	);
}

/**
 * Obsah vzoru (soubor v patterns/) jako text pro uložení do stránky.
 *
 * @param string $file Název souboru bez přípony.
 * @return string
 */
function bellarmin_pattern_content( $file ) {
	$path = get_theme_file_path( 'patterns/' . $file . '.php' );
	if ( ! file_exists( $path ) ) {
		return '';
	}
	ob_start();
	include $path;
	return trim( ob_get_clean() );
}

/**
 * Založení obsahu.
 */
function bellarmin_setup_content() {
	if ( (int) get_option( 'bellarmin_content_version' ) >= BELLARMIN_CONTENT_VERSION ) {
		return;
	}

	// Hezké adresy (/bellarmin/ místo ?page_id=…), jen pokud ještě nejsou nastavené.
	if ( '' === get_option( 'permalink_structure' ) ) {
		update_option( 'permalink_structure', '/%postname%/' );
		flush_rewrite_rules();
	}

	// 1) Nejdřív založit prázdné stránky, aby fungovaly odkazy mezi nimi.
	$ids = array();
	foreach ( bellarmin_pages() as $slug => $page ) {
		$existing = get_page_by_path( $slug );
		if ( $existing ) {
			$ids[ $slug ] = array( (int) $existing->ID, false );
			continue;
		}
		$id = wp_insert_post(
			array(
				'post_type'   => 'page',
				'post_status' => 'publish',
				'post_title'  => $page[0],
				'post_name'   => $slug,
				'menu_order'  => $page[2],
			)
		);
		if ( $id && ! is_wp_error( $id ) ) {
			$ids[ $slug ] = array( (int) $id, true );
		}
	}

	// 2) Doplnit obsah ze vzorů (až teď znají správné odkazy) a šablonu „celá šířka“.
	foreach ( bellarmin_pages() as $slug => $page ) {
		if ( empty( $ids[ $slug ] ) || ! $ids[ $slug ][1] || '' === $page[1] ) {
			continue;
		}
		wp_update_post(
			array(
				'ID'           => $ids[ $slug ][0],
				'post_content' => bellarmin_pattern_content( $page[1] ),
			)
		);
		update_post_meta( $ids[ $slug ][0], '_wp_page_template', 'page-full' );
	}

	// 3) Úvodní stránka a stránka s novinkami (příspěvky).
	if ( ! empty( $ids['novinky'] ) ) {
		update_option( 'page_for_posts', $ids['novinky'][0] );
	}
	bellarmin_sample_post();
	if ( ! empty( $ids['uvod'] ) && $ids['uvod'][1] ) {
		update_option( 'show_on_front', 'page' );
		update_option( 'page_on_front', $ids['uvod'][0] );
	}

	// 4) Popis webu pod názvem v hlavičce.
	$tagline = get_option( 'blogdescription' );
	if ( '' === $tagline || 'Just another WordPress site' === $tagline || 'Další web používající WordPress' === $tagline ) {
		update_option( 'blogdescription', 'chovatelská stanice' );
	}

	// 5) Menu (Vzhled → Editor → Navigace).
	bellarmin_ensure_navigation( $ids );

	update_option( 'bellarmin_content_version', BELLARMIN_CONTENT_VERSION );
}
add_action( 'after_switch_theme', 'bellarmin_setup_content' );
add_action( 'admin_init', 'bellarmin_setup_content' );

if ( ! defined( 'BELLARMIN_CONTENT_VERSION' ) ) {
	define( 'BELLARMIN_CONTENT_VERSION', 2 );
}

/**
 * Ukázková novinka, aby sekce Novinky nebyla prázdná. Výchozí „Ahoj světe“ přesune do koše.
 */
function bellarmin_sample_post() {
	if ( get_option( 'bellarmin_sample_post' ) ) {
		return;
	}
	foreach ( array( 'hello-world', 'ahoj-vsichni', 'ahoj-svete' ) as $bellarmin_slug ) {
		$bellarmin_hello = get_page_by_path( $bellarmin_slug, OBJECT, 'post' );
		if ( $bellarmin_hello ) {
			wp_trash_post( $bellarmin_hello->ID );
		}
	}
	$bellarmin_posts = get_posts( array( 'post_type' => 'post', 'numberposts' => 1, 'post_status' => 'publish' ) );
	if ( ! $bellarmin_posts ) {
		wp_insert_post(
			array(
				'post_type'    => 'post',
				'post_status'  => 'publish',
				'post_title'   => 'Spouštíme nový web Bellarmin',
				'post_excerpt' => 'Vítejte na našem novém webu. Najdete tu vše o chovatelské stanici, handlingu, hlídání i výcviku psů – a tady v Novinkách vás budeme informovat, co se u nás děje.',
				'post_content' => "<!-- wp:paragraph -->\n<p>Vítejte na našem novém webu. Najdete tu vše o chovatelské stanici Bellarmin, handlingu na výstavách, hlídání i výcviku psů.</p>\n<!-- /wp:paragraph -->\n\n<!-- wp:paragraph -->\n<p>Tady v Novinkách vás budeme informovat o výsledcích z výstav, volných termínech hlídání a o všem, co se u nás děje. (Ukázkový příspěvek – upravte nebo smažte.)</p>\n<!-- /wp:paragraph -->",
			)
		);
	}
	update_option( 'bellarmin_sample_post', 1 );
}

/**
 * Menu jako blok navigace s odkazy na stránky.
 *
 * @param array $ids Pole slug => [ID, nově vytvořeno].
 */
function bellarmin_ensure_navigation( $ids ) {
	$nav_id   = (int) get_option( 'bellarmin_nav_id' );
	$existing = ( $nav_id && get_post( $nav_id ) ) ? get_post( $nav_id ) : null;
	$items    = '';
	foreach ( array( 'bellarmin', 'handling', 'hlidani', 'vycvik', 'novinky' ) as $slug ) {
		if ( empty( $ids[ $slug ] ) ) {
			continue;
		}
		$id     = $ids[ $slug ][0];
		if ( $existing && false !== strpos( $existing->post_content, '"id":' . $id . ',' ) ) {
			continue;
		}
		$label  = 'hlidani' === $slug ? 'Hlídání' : get_the_title( $id );
		$attrs  = array(
			'label' => $label,
			'type'  => 'page',
			'id'    => $id,
			'url'   => get_permalink( $id ),
			'kind'  => 'post-type',
		);
		$items .= '<!-- wp:navigation-link ' . wp_json_encode( $attrs, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . ' /-->';
	}
	if ( $existing ) {
		// Doplnit nové položky před „Kontakt“ (poslední položku), zbytek menu nechat, jak je.
		if ( '' !== $items ) {
			$content = $existing->post_content;
			$pos     = strrpos( $content, '<!-- wp:navigation-link' );
			$content = false === $pos ? $content . $items : substr( $content, 0, $pos ) . $items . substr( $content, $pos );
			wp_update_post( array( 'ID' => $nav_id, 'post_content' => $content ) );
		}
		return;
	}
	$contact = array(
		'label' => 'Kontakt',
		'url'   => home_url( '/#kontakt' ),
		'kind'  => 'custom',
	);
	$items .= '<!-- wp:navigation-link ' . wp_json_encode( $contact, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE ) . ' /-->';

	$nav_id = wp_insert_post(
		array(
			'post_type'    => 'wp_navigation',
			'post_status'  => 'publish',
			'post_title'   => 'Hlavní menu',
			'post_content' => $items,
		)
	);
	if ( $nav_id && ! is_wp_error( $nav_id ) ) {
		update_option( 'bellarmin_nav_id', (int) $nav_id );
	}
}
