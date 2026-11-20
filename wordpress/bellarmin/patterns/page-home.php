<?php
/**
 * Title: Celá stránka – Úvod
 * Slug: bellarmin/page-home
 * Categories: bellarmin-pages
 * Post Types: page
 * Block Types: core/post-content
 * Viewport Width: 1440
 *
 * @package Bellarmin
 */

foreach ( array( 'home-hero', 'home-strip', 'home-bellarmin', 'home-handling', 'home-hlidani', 'home-vycvik', 'home-news', 'quote', 'contact' ) as $bellarmin_part ) {
	include get_theme_file_path( 'patterns/' . $bellarmin_part . '.php' );
	echo "\n\n";
}
