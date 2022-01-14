<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package thezero
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div class="widget mb-50">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) :
		?>
		<div class="title">
						<h5>
							<?php
							$thezero_comment_count = get_comments_number();
							if ( '1' === $thezero_comment_count ) {
								printf(
									/* translators: 1: title. */
									esc_html__( 'One comments', 'thezero' ),
									'<span>' . wp_kses_post( get_the_title() ) . '</span>'
								);
							} else {
								printf( 
									/* translators: 1: comment count number, 2: title. */
									esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s Comments', $thezero_comment_count, 'comments title', 'thezero' ) ),
									number_format_i18n( $thezero_comment_count ), // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
									'<span>' . wp_kses_post( get_the_title() ) . '</span>'
								);
							}
							?>
						</h5>
		</div>

		<?php the_comments_navigation(); ?>

		
		<ol class="comment-list">
        <?php
			wp_list_comments(
				array(
					'style'      => 'ol',
					'short_ping' => true,
					'callback' => 'better_comments',
				)
			);
			?>
    </ol><!-- .comment-list -->


		<?php
		the_comments_navigation();

		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'thezero' ); ?></p>
			<?php
		endif;

	endif; // Check for have_comments().
	?>
	<?php comment_form(array(
		'fields' => array(
			'author' => '<input type="text" name="author" id="author" class="form-control mb-3" placeholder="Name*" required="required">',
			'email' => '<input type="email" name="email" id="email" class="form-control mb-3" placeholder="Email*" required="required">',
			'url' => '<input type="text" name="website" id="website" class="form-control mb-3" placeholder="website">'

		),
		'comment_field' => '<textarea name="comment" id="comment" cols="30" rows="5" class="form-control mb-3" placeholder="Message*" required="required"></textarea>',
		'class_form' => 'widget-form',
		'submit_button' => '<button name="%1$s" type="submit" id="%2$s" class="btn-custom %3$s">%4$s</button>',
		'title_reply' => '<div class="title"><h5>Leave a Reply</h5></div>'

	)); ?>

</div><!-- #comments -->
