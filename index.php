<?php
/**
 * The standard latest-posts view.
 *
 * @package Loopkind
 */
get_header();
?>
<main id="primary" class="site-main lk-section"><div class="lk-shell">
	<header class="lk-section-heading"><div><span class="lk-eyebrow"><?php esc_html_e( 'Notes from the loop', 'loopkind' ); ?></span><h1 class="entry-title"><?php esc_html_e( 'Journal', 'loopkind' ); ?></h1></div></header>
	<div class="lk-grid lk-grid--2"><div>
		<?php if ( have_posts() ) : ?><?php while ( have_posts() ) : the_post(); get_template_part( 'template-parts/content', get_post_type() ); endwhile; the_posts_pagination(); ?><?php else : get_template_part( 'template-parts/content', 'none' ); endif; ?>
	</div><?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?><aside class="widget-area" aria-label="<?php esc_attr_e( 'Blog sidebar', 'loopkind' ); ?>"><?php dynamic_sidebar( 'sidebar-1' ); ?></aside><?php endif; ?></div>
</div></main>
<?php get_footer(); ?>
