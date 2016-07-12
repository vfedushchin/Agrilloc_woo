<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Agrilloc
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( 'posts-list__item card' ); ?>>

	<?php $utility = agrilloc_utility()->utility; ?>

	<div class="post-list__item-content">



		<header class="entry-header">

			<?php $cats_visible = agrilloc_is_meta_visible( 'blog_post_categories', 'loop' ) ? 'true' : 'false'; ?>

			<?php $utility->meta_data->get_terms( array(
					'visible' => $cats_visible,
					'type'    => 'category',
					'icon'    => '',
					'before'  => '<div class="post__cats">',
					'after'   => '</div>',
					'echo'    => true,
				) );
			?>

			<?php agrilloc_sticky_label(); ?>

			<?php
				$embed_args = array(
					'fields' => array( 'twitter', 'facebook' ),
					'height' => 417,
					'width'  => 500,
				);

				$embed_content = apply_filters( 'cherry_get_embed_post_formats', false, $embed_args );

				if ( false === $embed_content ) {

					$blog_content = get_theme_mod( 'blog_posts_content', agrilloc_theme()->customizer->get_default( 'blog_posts_content' ) );
					$length       = ( 'full' === $blog_content ) ? 0 : 55;

					$utility->attributes->get_content( array(
						'length'       => $length,
						'content_type' => 'post_excerpt',
						'echo'         => true,
					) );

				} else {
					printf( '<div class="embed-wrapper">%s</div>', $embed_content );
				}
			?>


		</header><!-- .entry-header -->


		<div class="post-content-all">

			<?php
				$title_html = ( is_single() ) ? '<h1 %1$s>%4$s</h1>' : '<h2 %1$s><a href="%2$s" rel="bookmark">%4$s</a></h2>';

				$utility->attributes->get_title( array(
					'class' => 'entry-title',
					'html'  => $title_html,
					'echo'  => true,
				) );
			?>


			<div class="entry-content">

				<?php $blog_content = get_theme_mod( 'blog_posts_content', agrilloc_theme()->customizer->get_default( 'blog_posts_content' ) );
					$length = ( 'full' === $blog_content ) ? 0 : 35;

					$utility->attributes->get_content( array(
						'length'       => $length,
						'content_type' => 'post_excerpt',
						'echo'         => true,
					) );
				?>
			</div><!-- .entry-content -->

			<?php if ( 'post' === get_post_type() ) : ?>

				<div class="entry-meta">


					<div class="blog_post__meta-all">
						<?php $author_visible = agrilloc_is_meta_visible( 'blog_post_author', 'loop' ) ? 'true' : 'false'; ?>

							<?php $utility->meta_data->get_author( array(
									'visible' => $author_visible,
									'class'   => 'post__author',
									'icon'    => '<i class="fa fa-user"></i>',
									'html'    => '<span class="posted-by">%1$s<a href="%2$s" %3$s %4$s rel="author">%5$s%6$s</a></span>',
									'echo'    => true,
								) );
							?>

							<?php $date_visible = agrilloc_is_meta_visible( 'blog_post_publish_date', 'loop' ) ? 'true' : 'false';

								$utility->meta_data->get_date( array(
									'visible' => $date_visible,
									'class'   => 'post__date-link',
									'icon'    => '<i class="fa fa-calendar"></i>',
									'html'      => '<span class="post__date">  %1$s<a href="%2$s" %3$s %4$s ><time datetime="%5$s">%6$s%7$s</time></a></span>',
									'echo'    => true,
								) );
							?>

							<?php $comment_visible = agrilloc_is_meta_visible( 'blog_post_comments', 'loop' ) ? 'true' : 'false';

								$utility->meta_data->get_comment_count( array(
									'visible' => $comment_visible,
									'class'   => 'post__comments-link',
									'icon'    => '<i class="fa fa-comment"></i>',
									'html'      => '<span class="post__comments"> %1$s<a href="%2$s" %3$s %4$s>%5$s%6$s</a></span>',
									'echo'    => true,
								) );
							?>
					</div>


					<?php $tags_visible = agrilloc_is_meta_visible( 'blog_post_tags', 'loop' ) ? 'true' : 'false';

						$utility->meta_data->get_terms( array(
							'visible'   => $tags_visible,
							'type'      => 'post_tag',
							'delimiter' => ' ',
							'before'    => '<div class="post__tags">',
							'after'     => '</div>',
							'echo'      => true,
						) );
					?>
				</div><!-- .entry-meta -->

			<?php endif; ?>

				<footer class="entry-footer">
				<?php agrilloc_share_buttons( 'loop' ); ?>

				<?php $utility->attributes->get_button( array(
						'class' => 'btn btn-primary',
						'text'  => get_theme_mod( 'blog_read_more_text', agrilloc_theme()->customizer->get_default( 'blog_read_more_text' ) ),
						'icon'  => '<i class="material-icons">arrow_forward</i>',
						'html'  => '<a href="%1$s" %3$s><span class="btn__text">%4$s</span>%5$s</a>',
						'echo'  => true,
					) );
				?>
			</footer><!-- .entry-footer -->
		</div><!-- .post-content-all -->

		</div><!-- .post-list__item-content -->



</article><!-- #post-## -->