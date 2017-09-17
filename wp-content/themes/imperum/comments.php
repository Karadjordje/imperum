<div class="col-md-8 col-md-offset-3">
	<?php if (post_password_required()) : ?>
	<p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'html5blank' ); ?></p>
</div>

	<?php return; endif; ?>

<?php if (have_comments()) : ?>

	<h3>Comments</h3>

	<div class="comment-one">
		<?php wp_list_comments('type=comment&callback=html5blankcomments'); // Custom callback in functions.php ?>
	</div>

<?php elseif ( ! comments_open() && ! is_page() && post_type_supports( get_post_type(), 'comments' ) ) : ?>

	<p><?php _e( 'Comments are closed here.', 'html5blank' ); ?></p>

<?php endif; ?>


<?php $args = array(
	'id_form'           => 'commentform',
	'class_form'        => 'comment-form',
	'id_submit'         => 'submit',
	'class_submit'      => 'btn btn-imperium btn-2',
	'name_submit'       => '',
	'title_reply'       => __( '' ),
	'title_reply_to'    => __( '' ),
	'cancel_reply_link' => __( '' ),
	'label_submit'      => __( 'Send message' ),
	'format'            => 'xhtml',
	'comment_notes_after' => '',
	'comment_notes_before' => '',
); ?>
<?php comment_form($args); ?>


</div>
