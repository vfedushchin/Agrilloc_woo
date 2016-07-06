<?php
/**
 * Menus configuration.
 *
 * @package Agrilloc
 */

add_action( 'after_setup_theme', 'agrilloc_register_menus', 5 );
function agrilloc_register_menus() {

	// This theme uses wp_nav_menu() in four locations.
	register_nav_menus( array(
		'top'    => esc_html__( 'Top', 'agrilloc' ),
		'main'   => esc_html__( 'Main', 'agrilloc' ),
		'footer' => esc_html__( 'Footer', 'agrilloc' ),
		'social' => esc_html__( 'Social', 'agrilloc' ),
	) );
}
