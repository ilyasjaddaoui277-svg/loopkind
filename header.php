<?php
/**
 * The header for Loopkind.
 *
 * @package Loopkind
 */
$loopkind_header_image = get_header_image();
?><!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<a class="skip-link" href="#primary"><?php esc_html_e( 'Skip to content', 'loopkind' ); ?></a>
<header class="site-header">
	<?php if ( $loopkind_header_image ) : ?><div class="site-header__banner" aria-hidden="true" style="<?php echo esc_attr( 'background-image: url(' . esc_url( $loopkind_header_image ) . ')' ); ?>"></div><?php endif; ?>
	<div class="lk-shell site-header__inner">
		<div class="site-header__identity">
			<?php if ( has_custom_logo() ) : the_custom_logo(); else : ?>
			<a class="site-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="site-brand__mark" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.5 4.5C11 4.6 5.4 7.2 4.6 12.4c-.6 3.7 2 6.5 5.7 6.1 5.2-.6 8.2-6.2 9.2-14Z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/><path d="M4.2 20c2.4-4.4 5.8-7.3 10.2-9.2" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg></span><span><?php bloginfo( 'name' ); ?></span></a>
			<?php endif; ?>
		</div>
		<button class="menu-toggle" type="button" aria-controls="primary-navigation" aria-expanded="false" aria-label="<?php esc_attr_e( 'Open menu', 'loopkind' ); ?>"><span></span></button>
		<nav class="primary-nav" id="primary-navigation" aria-label="<?php esc_attr_e( 'Primary navigation', 'loopkind' ); ?>"><?php wp_nav_menu( array( 'theme_location' => 'primary', 'container' => false, 'menu_class' => 'primary-nav__list', 'fallback_cb' => 'wp_page_menu' ) ); ?></nav>
		<div class="site-header__actions"><?php if ( class_exists( 'WooCommerce' ) && function_exists( 'wc_get_cart_url' ) ) : ?><a class="site-header__cart" href="<?php echo esc_url( wc_get_cart_url() ); ?>"><svg viewBox="0 0 24 24" fill="none" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"><path d="M3 4h2l2.1 10.3a2 2 0 0 0 2 1.6h8.6a2 2 0 0 0 1.9-1.4L21 8H6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/><circle cx="10" cy="20" r="1.2" fill="currentColor"/><circle cx="18" cy="20" r="1.2" fill="currentColor"/></svg><span><?php esc_html_e( 'Bag', 'loopkind' ); ?></span></a><?php endif; ?></div>
	</div>
</header>
