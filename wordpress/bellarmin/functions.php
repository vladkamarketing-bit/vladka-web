<?php
/**
 * Bellarmin – funkce šablony.
 *
 * @package Bellarmin
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

define( 'BELLARMIN_VERSION', '1.1.0' );
define( 'BELLARMIN_CONTENT_VERSION', 2 );

require_once get_theme_file_path( 'inc/helpers.php' );
require_once get_theme_file_path( 'inc/contact-form.php' );
require_once get_theme_file_path( 'inc/setup-content.php' );

/**
 * Základní nastavení šablony.
 */
function bellarmin_setup() {
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_editor_style( 'assets/css/bellarmin.css' );
	load_theme_textdomain( 'bellarmin', get_theme_file_path( 'languages' ) );
}
add_action( 'after_setup_theme', 'bellarmin_setup' );

/**
 * Styly a skripty na webu.
 */
function bellarmin_assets() {
	wp_enqueue_style( 'bellarmin', get_theme_file_uri( 'assets/css/bellarmin.css' ), array(), BELLARMIN_VERSION );
	wp_enqueue_script( 'bellarmin', get_theme_file_uri( 'assets/js/bellarmin.js' ), array(), BELLARMIN_VERSION, array( 'strategy' => 'defer', 'in_footer' => true ) );
}
add_action( 'wp_enqueue_scripts', 'bellarmin_assets' );

/**
 * Kategorie vzorů a styly bloků (vybírají se v editoru vpravo v záložce Styly).
 */
function bellarmin_register_block_bits() {
	register_block_pattern_category( 'bellarmin', array( 'label' => __( 'Bellarmin – sekce', 'bellarmin' ) ) );
	register_block_pattern_category( 'bellarmin-pages', array( 'label' => __( 'Bellarmin – celé stránky', 'bellarmin' ) ) );

	register_block_style(
		'core/gallery',
		array(
			'name'  => 'bm-thumbs',
			'label' => __( 'Náhledy s prohlížením', 'bellarmin' ),
		)
	);
	register_block_style(
		'core/image',
		array(
			'name'  => 'bm-frame',
			'label' => __( 'S rámečkem', 'bellarmin' ),
		)
	);
	register_block_style(
		'core/list',
		array(
			'name'  => 'bm-checks',
			'label' => __( 'S fajfkami', 'bellarmin' ),
		)
	);
	register_block_style(
		'core/list',
		array(
			'name'  => 'bm-titles',
			'label' => __( 'Tituly (štítky)', 'bellarmin' ),
		)
	);
	register_block_style(
		'core/buttons',
		array(
			'name'  => 'bm-tiles',
			'label' => __( 'Dlaždice s šipkou', 'bellarmin' ),
		)
	);
	register_block_style(
		'core/button',
		array(
			'name'  => 'bm-dark',
			'label' => __( 'Tmavé', 'bellarmin' ),
		)
	);
	register_block_style(
		'core/button',
		array(
			'name'  => 'bm-ghost',
			'label' => __( 'Obrysové světlé', 'bellarmin' ),
		)
	);
}
add_action( 'init', 'bellarmin_register_block_bits' );

/**
 * Jemné animace: třída na <html> hned v hlavičce, aby se prvky neukázaly a pak „neposkočily“.
 * Pojistka – když se skript šablony nenačte, obsah se po 2,5 s zobrazí bez animace.
 */
function bellarmin_anim_flag() {
	echo "<script>(function(d){if(window.matchMedia&&matchMedia('(prefers-reduced-motion: reduce)').matches)return;d.documentElement.classList.add('bm-anim');setTimeout(function(){if(!window.bmReady)d.documentElement.classList.remove('bm-anim');},2500);})(document);</script>\n";
}
add_action( 'wp_head', 'bellarmin_anim_flag', 1 );
