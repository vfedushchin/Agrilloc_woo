<?php
/**
 * Template part for top panel in header.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Agrilloc
 */

// Don't show top panel if all elements are disabled.
if ( ! agrilloc_is_top_panel_visible() ) {
	return;
} ?>

<div class="top-panel">
	<div <?php echo agrilloc_get_container_classes( array( 'top-panel__wrap' ) ); ?>><?php
		agrilloc_top_message( '<div class="top-panel__message">%s</div>' );
		agrilloc_top_search( '<div class="top-panel__search">%s</div>' );
		agrilloc_top_menu();
	?></div>
</div><!-- .top-panel -->