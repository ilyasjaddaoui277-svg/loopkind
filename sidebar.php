<?php
/** Sidebar template. @package Loopkind */
if ( ! is_active_sidebar( 'sidebar-1' ) ) { return; }
?>
<aside class="widget-area" aria-label="<?php esc_attr_e( 'Blog sidebar', 'loopkind' ); ?>">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
