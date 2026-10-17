<?php
/** Template part used when no posts are found. @package Loopkind */
?>
<section class="no-results not-found">
	<h2 class="entry-title"><?php esc_html_e( 'No stories found yet.', 'loopkind' ); ?></h2>
	<p><?php esc_html_e( 'Try a different search, or come back when there is more to explore.', 'loopkind' ); ?></p>
	<?php get_search_form(); ?>
</section>
