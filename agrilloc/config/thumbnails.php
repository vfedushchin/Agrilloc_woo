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
	add_image_size( 'agrilloc-thumb-m', 370, 405, true );
	add_image_size( 'agrilloc-thumb-l', 770, 405, true );
	add_image_size( 'agrilloc-thumb-xl', 1920, 1080, true );
	add_image_size( 'agrilloc-author-avatar', 512, 512, true );

  add_image_size( 'agrilloc-thumb-570-325', 570, 325, true );
  add_image_size( 'agrilloc-thumb-370-325', 370, 325, true );
	add_image_size( 'agrilloc-thumb-770-325', 770, 325, true );
	add_image_size( 'agrilloc-thumb-110-110', 110, 110, true );



}
