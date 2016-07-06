<?php
/**
 * The template for displaying the default footer layout.
 *
 * @package Agrilloc
 */
?>

<div class="footer-area-wrap invert">
	<div class="container">
		<?php do_action( 'agrilloc_render_widget_area', 'footer-area' ); ?>
	</div>
</div>

<div class="footer-container">
	<div <?php echo agrilloc_get_container_classes( array( 'site-info' ) ); ?>>
		<div class="site-info__flex">
			<?php agrilloc_footer_logo(); ?>
			<div class="site-info__mid-box"><?php
				agrilloc_footer_menu();
				agrilloc_footer_copyright();
			?></div>
			<?php agrilloc_social_list( 'footer' ); ?>
		</div>
	</div><!-- .site-info -->
</div><!-- .container -->