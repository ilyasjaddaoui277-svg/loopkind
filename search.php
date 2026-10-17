<?php
/** Search results template. @package Loopkind */
get_header();
?>
<main id="primary" class="site-main lk-section"><div class="lk-shell">
	<header class="lk-section-heading"><div><span class="lk-eyebrow"><?php esc_html_e( 'Find something good', 'loopkind' ); ?></span><h1 class="entry-title"><?php /* translators: %s: The search query. */ printf( esc_html__( 'Search: %s', 'loopkind' ), '<span>' . esc_html( get_search_query() ) . '</span>' ); ?></h1></div></header>
	<div class="lk-grid lk-grid--2"><div><?php if ( have_posts() ) : while ( have_posts() ) : the_post(); get_template_part( 'template-parts/content', get_post_type() ); endwhile; the_posts_pagination(); else : get_template_part( 'template-parts/content', 'none' ); endif; ?></div><?php if ( is_active_sidebar( 'sidebar-1' ) ) : ?><aside class="widget-area" aria-label="<?php esc_attr_e( 'Blog sidebar', 'loopkind' ); ?>"><?php dynamic_sidebar( 'sidebar-1' ); ?></aside><?php endif; ?></div>
</div></main>
<?php get_footer(); ?>
