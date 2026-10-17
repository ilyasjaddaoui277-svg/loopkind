<?php
/**
 * Front page: the page content is deliberately editor-managed.
 *
 * @package Loopkind
 */
get_header();
?>
<main id="primary" class="site-main">
	<?php while ( have_posts() ) : the_post(); the_content(); endwhile; ?>
</main>
<?php get_footer(); ?>
