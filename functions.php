<?php
/**
 * Loopkind theme setup and assets.
 *
 * @package Loopkind
 */
if ( ! defined( 'ABSPATH' ) ) { exit; }

function loopkind_setup() {
	load_theme_textdomain( 'loopkind', get_template_directory() . '/languages' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'responsive-embeds' );
	add_theme_support( 'align-wide' );
	add_theme_support( 'wp-block-styles' );
	add_theme_support( 'editor-styles' );
	add_theme_support( 'custom-logo', array( 'height' => 120, 'width' => 360, 'flex-height' => true, 'flex-width' => true ) );
	add_theme_support( 'custom-background', array( 'default-color' => 'f8f7f1' ) );
	add_theme_support( 'custom-header', array( 'width' => 1800, 'height' => 520, 'flex-width' => true, 'flex-height' => true, 'header-text' => false ) );
	add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'script', 'style' ) );
	add_theme_support( 'woocommerce', array(
		'gallery_thumbnail_image_width' => 180,
		'single_image_width'            => 760,
		'product_grid'                  => array( 'default_rows' => 3, 'min_rows' => 1, 'max_rows' => 8, 'default_columns' => 3, 'min_columns' => 2, 'max_columns' => 4 ),
	) );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
	register_nav_menus( array( 'primary' => __( 'Primary Menu', 'loopkind' ), 'footer' => __( 'Footer Menu', 'loopkind' ) ) );
	add_editor_style( 'style.css' );
	add_editor_style( 'assets/css/editor.css' );
}
add_action( 'after_setup_theme', 'loopkind_setup' );

function loopkind_content_width() { $GLOBALS['content_width'] = apply_filters( 'loopkind_content_width', 780 ); }
add_action( 'after_setup_theme', 'loopkind_content_width', 0 );

function loopkind_enqueue_assets() {
	$theme_version = wp_get_theme()->get( 'Version' );
	$style_path = get_stylesheet_directory() . '/style.css';
	$style_version = file_exists( $style_path ) ? (string) filemtime( $style_path ) : $theme_version;
	wp_enqueue_style( 'loopkind-style', get_stylesheet_uri(), array(), $style_version );
	wp_enqueue_script( 'loopkind-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), $theme_version, true );
	wp_localize_script( 'loopkind-navigation', 'loopkindNavigation', array(
		'openMenu'  => __( 'Open menu', 'loopkind' ),
		'closeMenu' => __( 'Close menu', 'loopkind' ),
	) );
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'loopkind_enqueue_assets' );

function loopkind_widgets_init() {
	register_sidebar( array( 'name' => __( 'Blog Sidebar', 'loopkind' ), 'id' => 'sidebar-1', 'description' => __( 'Widgets displayed beside blog and search content.', 'loopkind' ), 'before_widget' => '<section id="%1$s" class="widget %2$s">', 'after_widget' => '</section>', 'before_title' => '<h2 class="widget-title">', 'after_title' => '</h2>' ) );
}
add_action( 'widgets_init', 'loopkind_widgets_init' );

function loopkind_register_patterns() {
	if ( ! function_exists( 'register_block_pattern' ) ) { return; }
	if ( function_exists( 'register_block_pattern_category' ) ) { register_block_pattern_category( 'loopkind', array( 'label' => __( 'Loopkind', 'loopkind' ) ) ); }
	foreach ( glob( get_template_directory() . '/inc/patterns/*.php' ) as $pattern_file ) {
		require_once $pattern_file;
	}
}
add_action( 'init', 'loopkind_register_patterns' );

function loopkind_register_block_styles() {
	if ( function_exists( 'register_block_style' ) ) {
		register_block_style( 'core/button', array( 'name' => 'loopkind-quiet', 'label' => __( 'Quiet button', 'loopkind' ) ) );
	}
}
add_action( 'init', 'loopkind_register_block_styles', 20 );

function loopkind_body_classes( $classes ) {
	if ( is_singular() && ! is_page() ) { $classes[] = 'loopkind-single-post'; }
	if ( class_exists( 'WooCommerce' ) ) { $classes[] = 'loopkind-woocommerce-active'; }
	return $classes;
}
add_filter( 'body_class', 'loopkind_body_classes' );
function loopkind_excerpt_length( $length ) { return 26; }
add_filter( 'excerpt_length', 'loopkind_excerpt_length', 999 );
function loopkind_excerpt_more( $more ) { return '…'; }
add_filter( 'excerpt_more', 'loopkind_excerpt_more' );
