<?php
/**
 * Template part for displaying posts in archives.
 *
 * @package Loopkind
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'post-card' ); ?>>
	<?php if ( has_post_thumbnail() ) : ?><a class="post-card__image" href="<?php the_permalink(); ?>" aria-hidden="true" tabindex="-1"><?php the_post_thumbnail( 'large' ); ?></a><?php endif; ?>
	<div><div class="entry-meta"><?php echo esc_html( get_the_date() ); ?><?php if ( has_category() ) : ?> · <?php the_category( ', ' ); ?><?php endif; ?><?php if ( has_tag() ) : ?> · <?php the_tags( '', ', ' ); ?><?php endif; ?></div><h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2><div class="entry-summary"><?php the_excerpt(); ?></div><a class="lk-link-arrow" href="<?php the_permalink(); ?>"><span><?php esc_html_e( 'Read the story', 'loopkind' ); ?></span></a></div>
</article>
