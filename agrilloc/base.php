<?php get_header( agrilloc_template_base() ); ?>

	<?php do_action( 'agrilloc_render_widget_area', 'full-width-header-area' ); ?>

	<div id="content" <?php agrilloc_content_class(); ?>>

	<?php agrilloc_site_breadcrumbs(); ?>

		<div class="container">

			<?php do_action( 'agrilloc_render_widget_area', 'before-content-area' ); ?>

			<div class="row">

				<div id="primary" <?php agrilloc_primary_content_class(); ?>>

					<?php do_action( 'agrilloc_render_widget_area', 'before-loop-area' ); ?>

					<main id="main" class="site-main" role="main">

						<?php include agrilloc_template_path(); ?>

					</main><!-- #main -->

					<?php do_action( 'agrilloc_render_widget_area', 'after-loop-area' ); ?>

				</div><!-- #primary -->

				<?php get_sidebar( 'secondary' ); // Loads the sidebar-secondary.php template. ?>

				<?php get_sidebar( 'primary' ); // Loads the sidebar-primary.php template.  ?>

			</div><!-- .row -->

			<?php do_action( 'agrilloc_render_widget_area', 'after-content-area' ); ?>

		</div><!-- .container -->
	</div><!-- #content -->

	<?php do_action( 'agrilloc_render_widget_area', 'after-content-full-width-area' ); ?>

<?php get_footer( agrilloc_template_base() ); ?>
