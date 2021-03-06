<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Agrilloc
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php $utility = agrilloc_utility()->utility; ?>

	<header class="entry-header">

		<?php $utility->attributes->get_title( array(
				'class' => 'entry-title',
				'html'  => '<h1 %1$s>%4$s</h1>',
				'echo'  => true,
			) );
		?>

		<?php $cats_visible = agrilloc_is_meta_visible( 'single_post_categories', 'single' ) ? 'true' : 'false'; ?>

		<?php $utility->meta_data->get_terms( array(
				'visible' => $cats_visible,
				'type'    => 'category',
				'icon'    => '',
				'before'  => '<div class="post__cats">',
				'after'   => '</div>',
				'echo'    => true,
			) );
		?>

	</header><!-- .entry-header -->

	<?php agrilloc_ads_post_before_content() ?>

	<figure class="post-thumbnail">
		<?php $utility->media->get_image( array(
				'size'        => 'agrilloc-thumb-l',
				'html'        => '<img class="post-thumbnail__img wp-post-image" src="%3$s" alt="%4$s">',
				'placeholder' => false,
				'echo'        => true,
			) );
		?>
	</figure><!-- .post-thumbnail -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links__title">' . __( 'Pages:', 'agrilloc' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span class="page-links__item">',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'agrilloc' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php $tags_visible = agrilloc_is_meta_visible( 'single_post_tags', 'single' ) ? 'true' : 'false'; ?>

		<?php $utility->meta_data->get_terms( array(
				'visible'   => $tags_visible,
				'type'      => 'post_tag',
				'delimiter' => ' ',
				'before'    => '<div class="post__tags">',
				'after'     => '</div>',
				'echo'      => true,
			) );
		?>

	</footer><!-- .entry-footer -->

	<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<div class="blog_post__meta-all">
				<?php $author_visible = agrilloc_is_meta_visible( 'single_post_author', 'single' ) ? 'true' : 'false'; ?>
				<?php $utility->meta_data->get_author( array(
						'visible' => $author_visible,
						'class'   => 'post__author',
						'icon'    => '<i class="fa fa-user"></i>',
						'html'    => '<span class="posted-by">%1$s<a href="%2$s" %3$s %4$s rel="author">%5$s%6$s</a></span>',
						'echo'    => true,
					) );
				?>

				<?php $date_visible = agrilloc_is_meta_visible( 'single_post_publish_date', 'single' ) ? 'true' : 'false';
					$utility->meta_data->get_date( array(
						'visible' => $date_visible,
						'class'   => 'post__date-link',
						'icon'    => '<i class="fa fa-calendar"></i>',
						'html'      => '<span class="post__date">  %1$s<a href="%2$s" %3$s %4$s ><time datetime="%5$s">%6$s%7$s</time></a></span>',
						'echo'    => true,
					) );
				?>


				<?php $comment_visible = agrilloc_is_meta_visible( 'single_post_comments', 'single' ) ? 'true' : 'false';
					$utility->meta_data->get_comment_count( array(
						'visible' => $comment_visible,
						'class'   => 'post__comments-link',
						'icon'    => '<i class="fa fa-comment"></i>',
						'html'      => '<span class="post__comments"> %1$s<a href="%2$s" %3$s %4$s>%5$s%6$s</a></span>',
						'echo'    => true,
					) );
				?>
			</div><!-- .blog_post__meta-all -->

			<?php agrilloc_share_buttons( 'single' ); ?>

		</div><!-- .entry-meta -->
	<?php endif; ?>

</article><!-- #post-## -->