<?php
/** 404 template. @package Loopkind */
get_header();
?>
<main id="primary" class="site-main lk-section"><div class="lk-shell--narrow" style="text-align:center">
	<span class="lk-eyebrow"><?php esc_html_e( 'This path wandered off', 'loopkind' ); ?></span>
	<h1 class="entry-title" style="margin-top:1rem"><?php esc_html_e( 'Nothing here, but we can start again.', 'loopkind' ); ?></h1>
	<p class="lk-muted"><?php esc_html_e( 'The page may have moved. Try a search or head back to the beginning.', 'loopkind' ); ?></p>
	<?php get_search_form(); ?>
	<p><a class="button" href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Back to home', 'loopkind' ); ?></a></p>
</div></main>
<?php get_footer(); ?>
