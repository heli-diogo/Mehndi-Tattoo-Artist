<?php
/**
rgdsdghyvjdgdghrhf
 * The template for displaying comments
 *
 * @package Mehndi Tattoo Artist
 * @subpackage mehndi_tattoo_artist
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

<div id="comments" class="comments-area">

	<?php
	// You can start editing here -- including this comment!
	if ( have_comments() ) : ?>
		<h2 class="comments-title">
			<?php
			$mehndi_tattoo_artist_comments_number = get_comments_number();
			if ( '1' === $mehndi_tattoo_artist_comments_number ) {
				/* translators: %s: post title */
				printf( esc_html( 'One Reply to &ldquo;%s&rdquo;', 'comments title', 'mehndi-tattoo-artist' ), esc_html( get_the_title() ) );
			} else {
				printf(
					esc_html(
						/* translators: 1: number of comments, 2: post title */
						_nx(
							'%1$s Reply to &ldquo;%2$s&rdquo;',
							'%1$s Replies to &ldquo;%2$s&rdquo;',
							$mehndi_tattoo_artist_comments_number,
							'comments title',
							'mehndi-tattoo-artist'
						)
					),
					esc_html ( number_format_i18n( $mehndi_tattoo_artist_comments_number ) ),
					esc_html ( get_the_title() )
				);
			}
			?>
		</h2>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'avatar_size' => 100,
					'style'       => 'ol',
					'short_ping'  => true,					
				) );
			?>
		</ol>

		<?php the_comments_pagination( array(
			'prev_text' => '<span class="screen-reader-text">' . __( 'Previous', 'mehndi-tattoo-artist' ) . '</span>',
			'next_text' => '<span class="screen-reader-text">' . __( 'Next', 'mehndi-tattoo-artist' ) . '</span>',
		) );

	endif; // Check for have_comments().

	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'mehndi-tattoo-artist' ); ?></p>
	<?php
	endif;

	comment_form();
	?>
</div>
