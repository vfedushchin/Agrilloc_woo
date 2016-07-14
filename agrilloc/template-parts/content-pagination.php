<?php
/**
 * Template part for posts pagination.
 *
 * @package Agrilloc
 */
the_posts_pagination( array(
		'prev_text' => '<i class="material-icons">navigate_before</i> ' . esc_html__( 'Back', 'agrilloc' ),
		'next_text' => esc_html__( 'Next', 'agrilloc' ) . ' <i class="material-icons">navigate_next</i> '
	)
);
