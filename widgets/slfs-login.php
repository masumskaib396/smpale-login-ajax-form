<?php 


function slfs_shortcode() {
	?>
	<?php if ( !is_user_logged_in() ) : ?>
		<div class="slf--wraper">
			<div class="slf--content">
				<h2 id="slf-form-headding"><?php _e('Login Form', 'slfa') ?></h2>

				<form id="slfa--login" method="POST" >

					<div class="slf--input-box">
						<input type="text"  value="" required class="input" name="user_login" id="user_login">
						<span><?php _e('Username or Email Address', 'slfa') ?></span>
					</div>

					<div class="slf--input-box">
						<input type="password" value="" required class="input" name="user_pass" id="user_pass">
						<span><?php _e('Password', 'slfa') ?></span>
					</div>

					<div class="slf--input-box">
						<input type="submit" tabindex="100" value="<?php _e('Login', 'slfa') ?>" name="wp-submit" id="wp-submit">
					</div>

				</form>
				<div id="slfa-error-msg"></div>
			</div>
		</div>
	<?php else : ?>
        <div class="slf-form-heading">
        	<?php _e("Your are already login.",'slfs');?>
        </div>
    <?php endif; ?>
	<?php 
}
add_shortcode( 'smpale_login_form_ajax', 'slfs_shortcode');