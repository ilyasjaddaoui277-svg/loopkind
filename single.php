<?php
/**
 * Single post template.
 *
 * @package Loopkind
 */
get_header();
?>
<main id="primary" class="site-main lk-section"><div class="lk-shell--narrow">
	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>><header class="entry-header"><span class="lk-eyebrow"><?php echo esc_html( get_the_date() ); ?></span><h1 class="entry-title"><?php the_title(); ?></h1><div class="entry-meta"><?php the_author_posts_link(); ?> · <?php the_category( ', ' ); ?></div></header>
		<?php if ( has_post_thumbnail() ) : ?><figure class="post-card__image"><?php the_post_thumbnail( 'large' ); ?></figure><?php endif; ?><div class="entry-content"><?php the_content(); wp_link_pages(); ?></div></article>
		<?php if ( comments_open() || get_comments_number() ) : comments_template(); endif; ?>
	<?php endwhile; ?>
</div></main>
<?php get_footer(); ?>
