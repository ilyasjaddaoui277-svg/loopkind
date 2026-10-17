<?php
/**
 * Default page template.
 *
 * @package Loopkind
 */
get_header();
?>
<main id="primary" class="site-main lk-section"><div class="lk-shell--narrow">
	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><header class="entry-header"><span class="lk-eyebrow"><?php esc_html_e( 'A little more about us', 'loopkind' ); ?></span><h1 class="entry-title"><?php the_title(); ?></h1></header><div class="entry-content"><?php the_content(); wp_link_pages(); ?></div></article>
	<?php endwhile; ?>
</div></main>
<?php get_footer(); ?>
