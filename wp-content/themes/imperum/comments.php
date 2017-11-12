<div class="row">
	<?php if (post_password_required()) : ?>
	<p><?php _e( 'Post is password protected. Enter the password to view any comments.', 'html5blank' ); ?></p>
</div>

	<?php return; endif; ?>

<?php if (have_comments()) : ?>


<div class="col-xs-12 col-sm-12 col-md-10 col-lg-8 col-md-offset-1 col-lg-offset-2">
	<div class="row">
		<div class="col-xs-10 col-sm-9 col-md-10 col-lg-10 col-xs-offset-2 col-sm-offset-3 col-md-offset-3 col-lg-offset-4">
			<div class="comment-one">
				<h3>Comments</h3>
				<?php wp_list_comments('type=comment&callback=html5blankcomments'); // Custom callback in functions.php ?>
			</div>
		</div>
	</div>
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
	'label_submit'      => __( 'Post comment' ),
	'format'            => 'xhtml',
	'comment_notes_after' => '',
	'comment_notes_before' => '',
); ?>
<?php comment_form($args); ?>


</div>
