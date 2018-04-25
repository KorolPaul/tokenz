<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package tokenz
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

<div id="comments" class="comments-area text-content">
    <div class="fw-col-xs-12">
        <h2 class="comments-title">
            <?php
                esc_html_e( 'Comments', 'tokenz' )
                ?>
        </h2><!-- .comments-title -->

        <?php

        $comment_args = array(
            'title_reply'=>'',
            'fields' => apply_filters( 'comment_form_default_fields', array(

                        'author' => '<p class="comment-form-author"><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" placeholder="' . esc_attr( 'Your name', 'tokenz' ) . '" /></p>',
                        'email' => '<p class="comment-form-email"><input id="email" name="email" type="text" value="' . esc_attr( $commenter['comment_author_email'] ) . '" placeholder="' . esc_attr( 'Your email', 'tokenz' ) . '" /></p>',
                        'url' => "" ) ),

            'comment_field' => '<p><textarea id="comment" name="comment" aria-required="true" placeholder="' . esc_attr( 'Type comment here', 'tokenz' ) . '"></textarea></p>',
            'comment_notes_after' => "",
            'comment_notes_before' => "",

        );
        comment_form($comment_args);

        // You can start editing here -- including this comment!
        if ( have_comments() ) : ?>

            <ol class="comment-list">
                <?php
                    wp_list_comments( array(
                        'style'       => 'ol',
                        'short_ping'  => true,
                        'avatar_size' => 40
                    ) );
                ?>
            </ol><!-- .comment-list -->

            <?php the_comments_navigation();

            // If comments are closed and there are comments, let's leave a little note, shall we?
            if ( ! comments_open() ) : ?>
                <p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'tokenz' ); ?></p>
            <?php
            endif;

        endif; // Check for have_comments().

        ?>
    </div>

</div><!-- #comments -->
