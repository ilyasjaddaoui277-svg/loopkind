<?php
/**
 * The footer for Loopkind.
 *
 * @package Loopkind
 */
?>
<footer class="site-footer"><div class="lk-shell">
	<div class="site-footer__top">
		<div><a class="site-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span class="site-brand__mark" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M19.5 4.5C11 4.6 5.4 7.2 4.6 12.4c-.6 3.7 2 6.5 5.7 6.1 5.2-.6 8.2-6.2 9.2-14Z" stroke="currentColor" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"/><path d="M4.2 20c2.4-4.4 5.8-7.3 10.2-9.2" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/></svg></span><span><?php bloginfo( 'name' ); ?></span></a><p><?php bloginfo( 'description' ); ?></p></div>
		<div><h2 class="site-footer__title"><?php esc_html_e( 'Explore', 'loopkind' ); ?></h2><?php wp_nav_menu( array( 'theme_location' => 'footer', 'container' => false, 'menu_class' => 'site-footer__menu', 'fallback_cb' => false ) ); ?></div>
		<div><h2 class="site-footer__title"><?php esc_html_e( 'A better everyday', 'loopkind' ); ?></h2><p><?php esc_html_e( 'Refill what you love. Return what you can. Keep good things in circulation.', 'loopkind' ); ?></p></div>
	</div>
	<div class="site-footer__bottom"><span>© <?php echo esc_html( gmdate( 'Y' ) ); ?> <?php bloginfo( 'name' ); ?></span><span><?php esc_html_e( 'Made for things that go around again.', 'loopkind' ); ?></span></div>
</div></footer>
<?php wp_footer(); ?>
</body>
</html>
