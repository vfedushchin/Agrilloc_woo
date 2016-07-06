<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package Agrilloc
 */

?>
<div class="footer-container">
	<div <?php echo agrilloc_get_container_classes( array( 'site-info' ) ); ?>>
		<?php
			agrilloc_footer_logo();
			agrilloc_social_list( 'footer' );
			agrilloc_footer_copyright();
			agrilloc_footer_menu();
		?>
	</div><!-- .site-info -->
</div><!-- .container -->