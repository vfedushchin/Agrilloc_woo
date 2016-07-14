<footer class="comment-meta">
	<div class="comment-author vcard">
		<?php echo agrilloc_comment_author_avatar(); ?>
	</div>
	<div class="comment-metadata">
		<?php printf( __( '<span class="posted-by"></span> %s', 'agrilloc' ), agrilloc_get_comment_author_link() ); ?>
		<?php echo agrilloc_get_comment_date( array( 'format' => 'M d, Y' ) ); ?>
	</div>
</footer>
<div class="comment-content-all">
	<div class="comment-content">
		<?php echo agrilloc_get_comment_text(); ?>
	</div>
	<div class="reply">
		<?php echo agrilloc_get_comment_reply_link( array( 'reply_text' => '<i class="material-icons">reply</i>' . __( ' Reply', 'agrilloc' ) ) ); ?>
	</div>
</div>