<?php

/**
 * New/Edit Reply
 *
 * @package bbPress
 * @subpackage SASS Bootstrap
 */

?>

	<?php if ( bbp_is_reply_edit() ) : ?>

		<?php bbp_breadcrumb(); ?>

	<?php endif; ?>

	<?php if ( bbp_current_user_can_access_create_reply_form() ) : ?>

		<div id="new-reply-<?php bbp_topic_id(); ?>" class="bbp-reply-form">

			<form id="new-post" name="new-post" method="post" action="" class="form-horizontal">

				<?php do_action( 'bbp_theme_before_reply_form' ); ?>

				<fieldset class="bbp-form">
					<legend><?php printf( __( 'Reply To: %s', 'bbpress' ), bbp_get_topic_title() ); ?></legend>

					<?php do_action( 'bbp_theme_before_reply_form_notices' ); ?>

					<?php if ( !bbp_is_topic_open() && !bbp_is_reply_edit() ) : ?>

						<div class="bbp-template-notice">
							<p><?php _e( 'This topic is marked as closed to new replies, however your posting capabilities still allow you to do so.', 'bbpress' ); ?></p>
						</div>

					<?php endif; ?>

					<?php if ( current_user_can( 'unfiltered_html' ) ) : ?>

						<div class="bbp-template-notice">
							<p><?php _e( 'Your account has the ability to post unrestricted HTML content.', 'bbpress' ); ?></p>
						</div>

					<?php endif; ?>

					<?php do_action( 'bbp_template_notices' ); ?>

						<?php bbp_get_template_part( 'bbpress/form', 'anonymous' ); ?>

						<?php do_action( 'bbp_theme_before_reply_form_content' ); ?>

						<div class="control-group">
							<label class="control-label" for="bbp_reply_content"><strong><?php _e( 'Reply', 'bbpress' ); ?></strong></label>
							<div class="controls">
								<textarea id="bbp_reply_content" tabindex="<?php bbp_tab_index(); ?>" name="bbp_reply_content" rows="6"><?php bbp_form_reply_content(); ?></textarea>

							<?php if ( !current_user_can( 'unfiltered_html' ) ) : ?>
	
								<div class="help-block">
									<?php _e( 'You may use these <abbr title="HyperText Markup Language">HTML</abbr> tags and attributes:','bbpress' ); ?> <br/>
									<code><?php bbp_allowed_tags(); ?></code>
								</div>
	
							<?php endif; ?>

							</div>

						</div>

						<?php do_action( 'bbp_theme_after_reply_form_content' ); ?>

						<?php do_action( 'bbp_theme_before_reply_form_tags' ); ?>

						<div class="control-group">
							<label class="control-label" for="bbp_topic_tags"><strong><?php _e( 'Tags', 'bbpress' ); ?></strong></label>
							<div class="controls">
								<input type="text" value="<?php bbp_form_topic_tags(); ?>" tabindex="<?php bbp_tab_index(); ?>" name="bbp_topic_tags" id="bbp_topic_tags" <?php disabled( bbp_is_topic_spam() ); ?> />
							</div>
						</div>

						<?php do_action( 'bbp_theme_after_reply_form_tags' ); ?>

						<?php if ( bbp_is_subscriptions_active() && !bbp_is_anonymous() && ( !bbp_is_reply_edit() || ( bbp_is_reply_edit() && !bbp_is_reply_anonymous() ) ) ) : ?>

							<?php do_action( 'bbp_theme_before_reply_form_subscription' ); ?>

							<div class="control-group">

								<div class="controls">

								<?php if ( bbp_is_reply_edit() && $post->post_author != bbp_get_current_user_id() ) : ?>

									<label class="checkbox" for="bbp_topic_subscription"><input class="inline" name="bbp_topic_subscription" id="bbp_topic_subscription" type="checkbox" value="bbp_subscribe"<?php bbp_form_topic_subscribed(); ?> tabindex="<?php bbp_tab_index(); ?>" /> <?php _e( 'Notify the author of follow-up replies via email', 'bbpress' ); ?>
									</label>

								<?php else : ?>

									<label class="checkbox" for="bbp_topic_subscription"><input class="inline" name="bbp_topic_subscription" id="bbp_topic_subscription" type="checkbox" value="bbp_subscribe"<?php bbp_form_topic_subscribed(); ?> tabindex="<?php bbp_tab_index(); ?>" /> <?php _e( 'Notify me of follow-up replies via email', 'bbpress' ); ?></label>

								<?php endif; ?>

								</div>

							</div>

							<?php do_action( 'bbp_theme_after_reply_form_subscription' ); ?>

						<?php endif; ?>

						<?php if ( bbp_allow_revisions() && bbp_is_reply_edit() ) : ?>

							<?php do_action( 'bbp_theme_before_reply_form_revisions' ); ?>

							<fieldset class="bbp-form">
								<legend><?php _e( 'Revision', 'bbpress' ); ?></legend>
								<div class="control-group">
									<div class="controls">
										<label class="checkbox" for="bbp_log_reply_edit"><input name="bbp_log_reply_edit" id="bbp_log_reply_edit" type="checkbox" value="1" <?php bbp_form_reply_log_edit(); ?> tabindex="<?php bbp_tab_index(); ?>" /> <?php _e( 'Keep a log of this edit:', 'bbpress' ); ?></label>
									</div>
								</div>

								<div class="control-group">
									<div class="controls">
										<label class="checkbox" for="bbp_reply_edit_reason"><input type="text" value="<?php bbp_form_reply_edit_reason(); ?>" tabindex="<?php bbp_tab_index(); ?>" size="40" name="bbp_reply_edit_reason" id="bbp_reply_edit_reason" /> <?php printf( __( 'Optional reason for editing:', 'bbpress' ), bbp_get_current_user_name() ); ?></label>
									</div>
								</div>
							</fieldset>

							<?php do_action( 'bbp_theme_after_reply_form_revisions' ); ?>

						<?php else : ?>

							<?php bbp_topic_admin_links(); ?>

						<?php endif; ?>

						<?php do_action( 'bbp_theme_before_reply_form_submit_wrapper' ); ?>

						<div class="form-actions">

							<?php do_action( 'bbp_theme_before_reply_form_submit_button' ); ?>

							<button type="submit" tabindex="<?php bbp_tab_index(); ?>" id="bbp_reply_submit" name="bbp_reply_submit" class="btn btn-primary"><?php _e( 'Submit', 'bbpress' ); ?></button>

							<?php do_action( 'bbp_theme_after_reply_form_submit_button' ); ?>

							<button type="reset" tabindex="<?php bbp_tab_index(); ?>" id="bbp_reply_clear" name="bbp_reply_clear" class="btn"><?php _e( 'Cancel', 'bbpress' ); ?></button>

						</div>

						<?php do_action( 'bbp_theme_after_reply_form_submit_wrapper' ); ?>

					<?php bbp_reply_form_fields(); ?>

				</fieldset>

				<?php do_action( 'bbp_theme_after_reply_form' ); ?>

			</form>
		</div>

	<?php elseif ( bbp_is_topic_closed() ) : ?>

		<div id="no-reply-<?php bbp_topic_id(); ?>" class="bbp-no-reply">
			<div class="bbp-template-notice">
				<p><?php printf( __( 'The topic &#8216;%s&#8217; is closed to new replies.', 'bbpress' ), bbp_get_topic_title() ); ?></p>
			</div>
		</div>

	<?php elseif ( bbp_is_forum_closed( bbp_get_topic_forum_id() ) ) : ?>

		<div id="no-reply-<?php bbp_topic_id(); ?>" class="bbp-no-reply">
			<div class="bbp-template-notice">
				<p><?php printf( __( 'The forum &#8216;%s&#8217; is closed to new topics and replies.', 'bbpress' ), bbp_get_forum_title( bbp_get_topic_forum_id() ) ); ?></p>
			</div>
		</div>

	<?php else : ?>

		<div id="no-reply-<?php bbp_topic_id(); ?>" class="bbp-no-reply">
			<div class="bbp-template-notice">
				<p><?php is_user_logged_in() ? _e( 'You cannot reply to this topic.', 'bbpress' ) : _e( 'You must be logged in to reply to this topic.', 'bbpress' ); ?></p>
			</div>
		</div>

	<?php endif; ?>
