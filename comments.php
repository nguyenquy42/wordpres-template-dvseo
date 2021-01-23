<?php
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$comments_number = get_comments_number();
			if ( '1' === $comments_number ) {
				/* translators: %s: Post title. */
				 get_the_title() ;
			} else {
				printf(
					/* translators: 1: Number of comments, 2: Post title. */
					_nx(
						'%1$s Reply to &ldquo;%2$s&rdquo;',
						'%1$s Replies to &ldquo;%2$s&rdquo;',
						$comments_number,
						'comments title',
						'twentyseventeen'
					),
					number_format_i18n( $comments_number),
					get_the_title()
				);
			}
			?>
		</h2>
		<div class="comment-list">
			<ul>
				<?php
					wp_list_comments(
						array(
							'avatar_size' => 100,
							'style'       => 'ol',
							'short_ping'  => true,
						)
					);
				?>
			</ul>
		</div>

		<?php
	

	endif; // Check for have_comments().

	// If comments are closed and there are comments, let's leave a little note, shall we?
		?>

		<?php

	comment_form(['title_reply'=>'Comment ở đây',
	'title_reply'=>'Add A Comment',
	'class_submit'=>'btn btn-theme',
	'class_container'=>'comment-form',
	'title_reply_before'=>'<h2>',
	'comment_notes_before'=>'ở đây'
	]);
	?>

</div><!-- #comments -->
