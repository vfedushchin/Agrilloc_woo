<?php
/**
 * The template for displaying author bio.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package Agrilloc
 * @subpackage widgets
 */
?>
<div class="post-author-bio">
	<div class="post-author__holder clear">
		<h3 class="post-author__title"><?php
			esc_html_e( 'About The Author', 'agrilloc' );
		?></h3>
		<div class="post-author__avatar"><?php
			echo get_avatar( get_the_author_meta( 'user_email' ), 110, '', esc_attr( get_the_author_meta( 'nickname' ) ) );
		?></div>
		<h6 class="post-author__title2"><?php
			printf( esc_html__( ' %s', 'agrilloc' ), agrilloc_get_the_author_posts_link() );
		?></h6>
		<div class="post-author__content"><?php
			echo get_the_author_meta( 'description' );
		?></div>
	</div>
</div>