<?php

/**
 * Password Protected
 *
 * @package bbPress
 * @subpackage SASS Bootstrap
 */

?>

	<fieldset class="bbp-form" id="bbp-protected">
		<Legend><?php _e( 'Protected', 'bbpress' ); ?></legend>

		<?php echo get_the_password_form(); ?>

	</fieldset>
