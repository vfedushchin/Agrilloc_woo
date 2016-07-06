<?php
/**
 * Thumbnails configuration.
 *
 * @package Agrilloc
 */

add_action( 'after_setup_theme', 'agrilloc_register_image_sizes', 5 );
function agrilloc_register_image_sizes() {
	set_post_thumbnail_size( 370, 230, true );

	// Registers a new image sizes.
	add_image_size( 'agrilloc-thumb-s', 150, 150, true );
	add_image_size( 'agrilloc-thumb-m', 400, 400, true );
	add_image_size( 'agrilloc-thumb-l', 1170, 780, true );
	add_image_size( 'agrilloc-thumb-xl', 1920, 1080, true );
	add_image_size( 'agrilloc-author-avatar', 512, 512, true );

	add_image_size( 'agrilloc-thumb-240-100', 240, 100, true );
	add_image_size( 'agrilloc-thumb-560-350', 560, 350, true );



}
