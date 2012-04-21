<?php

/**
 * bbPress User Profile Edit Part
 *
 * @package bbPress
 * @subpackage SASS Bootstrap
 */

?>

<form id="bbp-your-profile" action="<?php bbp_user_profile_edit_url( bbp_get_displayed_user_id() ); ?>" method="post" class="form-horizontal">

	<?php do_action( 'bbp_user_edit_before' ); ?>

	<fieldset class="bbp-form">
		<legend><?php _e( 'Name', 'bbpress' ) ?></legend>

		<?php do_action( 'bbp_user_edit_before_name' ); ?>

		<div class="control-group">
			<label class="control-label" for="first_name"><?php _e( 'First Name', 'bbpress' ) ?></label>
			<div class="controls">
				<input type="text" name="first_name" id="first_name" value="<?php echo esc_attr( bbp_get_displayed_user_field( 'first_name' ) ); ?>" tabindex="<?php bbp_tab_index(); ?>" />
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="last_name"><?php _e( 'Last Name', 'bbpress' ) ?></label>
			<div class="controls">
				<input type="text" name="last_name" id="last_name" value="<?php echo esc_attr( bbp_get_displayed_user_field( 'last_name' ) ); ?>" tabindex="<?php bbp_tab_index(); ?>" />
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="nickname"><?php _e( 'Nickname', 'bbpress' ); ?></label>
			<div class="controls">
				<input type="text" name="nickname" id="nickname" value="<?php echo esc_attr( bbp_get_displayed_user_field( 'nickname' ) ); ?>"  tabindex="<?php bbp_tab_index(); ?>" />
			</div>
		</div>

		<div>
		
		<div class="control-group">
			<label class="control-label" for="display_name"><?php _e( 'Public display name', 'bbpress' ) ?></label>
			<div class="controls">
				<?php bbp_edit_user_display_name(); ?>
			</div>
		</div>

		<?php do_action( 'bbp_user_edit_after_name' ); ?>

	</fieldset>

	<fieldset class="bbp-form">
		<legend><?php _e( 'Contact Info', 'bbpress' ) ?></legend>

		<?php do_action( 'bbp_user_edit_before_contact' ); ?>

		<div class="control-group">
			<label class="control-label" for="url"><?php _e( 'Website', 'bbpress' ) ?></label>
			<div class="controls">
				<input type="text" name="url" id="url" value="<?php echo esc_attr( bbp_get_displayed_user_field( 'user_url' ) ); ?>" tabindex="<?php bbp_tab_index(); ?>" />
			</div>
		</div>

		<?php foreach ( bbp_edit_user_contact_methods() as $name => $desc ) : ?>

			<div class="control-group">
				<label class="control-label" for="<?php echo $name; ?>"><?php echo apply_filters( 'user_'.$name.'_label', $desc ); ?></label>
				<div class="controls">
					<input type="text" name="<?php echo $name; ?>" id="<?php echo $name; ?>" value="<?php echo esc_attr( bbp_get_displayed_user_field( 'name' ) ); ?>" tabindex="<?php bbp_tab_index(); ?>" />
				</div>
			</div>

		<?php endforeach; ?>

		<?php do_action( 'bbp_user_edit_after_contact' ); ?>

	</fieldset>

	<fieldset class="bbp-form">
		<legend><?php bbp_is_user_home() ? _e( 'About Yourself', 'bbpress' ) : _e( 'About the user', 'bbpress' ); ?></legend>

		<?php do_action( 'bbp_user_edit_before_about' ); ?>

		<div class="control-group">
			<label class="control-label" for="description"><?php _e( 'Biographical Info', 'bbpress' ); ?></label>
			<div class="controls">
				<textarea name="description" id="description" tabindex="<?php bbp_tab_index(); ?>"><?php echo esc_attr( bbp_get_displayed_user_field( 'description' ) ); ?></textarea>
				<p class="help-block"><?php _e( 'Share a little biographical information to fill out your profile. This may be shown publicly.', 'bbpress' ); ?></p>
			</div>
		</div>

		<?php do_action( 'bbp_user_edit_after_about' ); ?>

	</fieldset>

	<fieldset class="bbp-form">
		<legend><?php _e( 'Account' ) ?></legend>

		<?php do_action( 'bbp_user_edit_before_account' ); ?>

		<div class="control-group">
			<label class="control-label" for="user_login"><?php _e( 'Username', 'bbpress' ); ?></label>
			<div class="controls">
				<input type="text" name="user_login" id="user_login" value="<?php echo esc_attr( bbp_get_displayed_user_field( 'user_login' ) ); ?>" disabled="disabled" tabindex="<?php bbp_tab_index(); ?>" />
				<p class="help-block"><?php _e( 'Usernames cannot be changed.', 'bbpress' ); ?></p>
			</div>
		</div>

		<div class="control-group">
			<label class="control-label" for="email"><?php _e( 'Email', 'bbpress' ); ?></label>
			<div class="controls">
				<input type="text" name="email" id="email" value="<?php echo esc_attr( bbp_get_displayed_user_field( 'user_email' ) ); ?>" class="regular-text" tabindex="<?php bbp_tab_index(); ?>" />
	
				<?php
	
				// Handle address change requests
				$new_email = get_option( bbp_get_displayed_user_id() . '_new_email' );
				if ( $new_email && $new_email != bbp_get_displayed_user_field( 'user_email' ) ) : ?>
	
					<span class="updated inline">
	
						<?php printf( __( 'There is a pending email address change to <code>%1$s</code>. <a href="%2$s">Cancel</a>', 'bbpress' ), $new_email['newemail'], esc_url( self_admin_url( 'user.php?dismiss=' . bbp_get_current_user_id()  . '_new_email' ) ) ); ?>
	
					</span>
	
				<?php endif; ?>

			</div>

		</div>

		<div class="control-group" id="password">
			<label class="control-label" for="pass1"><?php _e( 'New Password', 'bbpress' ); ?></label>
			<div class="controls bbp-form">
				<input type="password" name="pass1" id="pass1" value="" autocomplete="off" tabindex="<?php bbp_tab_index(); ?>" />
				<p class="help-block"><?php _e( 'If you would like to change the password type a new one. Otherwise leave this blank.', 'bbpress' ); ?></p><br />

				<input type="password" name="pass2" id="pass2" value="" autocomplete="off" tabindex="<?php bbp_tab_index(); ?>" />
				<p class="help-block"><?php _e( 'Type your new password again.', 'bbpress' ); ?></p>

				<div id="pass-strength-result"></div>
				<div class="indicator-hint"><?php _e( 'Hint: The password should be at least seven characters long. To make it stronger, use upper and lower case letters, numbers and symbols like ! " ? $ % ^ &amp; ).', 'bbpress' ); ?></div>
			</div>
		</div>

		<?php if ( !bbp_is_user_home() ) : ?>

			<div>
				<label for="role"><?php _e( 'Role:', 'bbpress' ) ?></label>

				<?php bbp_edit_user_role(); ?>

			</div>

		<?php endif; ?>

		<?php if ( is_multisite() && is_super_admin() && current_user_can( 'manage_network_options' ) ) : ?>

			<div class="control-group">
				<label class="control-label" for="role"><?php _e( 'Super Admin', 'bbpress' ); ?></label>
				
				<div class="controls">
					<label>
						<input type="checkbox" id="super_admin" name="super_admin"<?php checked( is_super_admin( bbp_get_displayed_user_id() ) ); ?> tabindex="<?php bbp_tab_index(); ?>" />
						<?php _e( 'Grant this user super admin privileges for the Network.', 'bbpress' ); ?>
					</label>
				</div>
			</div>

		<?php endif; ?>

		<?php do_action( 'bbp_user_edit_after_account' ); ?>

	</fieldset>

	<?php do_action( 'bbp_user_edit_after' ); ?>

		<div class="form-actions">

			<?php bbp_edit_user_form_fields(); ?>

			<button type="submit" tabindex="<?php bbp_tab_index(); ?>" id="bbp_user_edit_submit" name="bbp_user_edit_submit" class="btn btn-primary"><?php bbp_is_user_home() ? _e( 'Update Profile', 'bbpress' ) : _e( 'Update User', 'bbpress' ); ?></button>
		</div>

</form>