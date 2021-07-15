<div id="sign-in-dialog" class="zoom-anim-dialog mfp-hide">
	<div class="small-dialog-header">
		<h3>Sign In</h3>
	</div>
	<form id="loginForm" action="<?php echo base_url('secure/check_login') ?>" method="POST">

		<div class="sign-in-wrapper">
			<div class="form-group">
				<label>Email</label>
				<input type="email" class="form-control" name="email" id="email">
				<i class="icon_mail_alt"></i>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="password" class="form-control" name="password" id="password" value="">
				<i class="icon_lock_alt"></i>
			</div>
			<center><div id="pesan"></div></center><br>
			<div class="text-center"><input type="submit" value="Log In" class="btn_1 full-width"></div>
			
			<div id="forgot_pw">
				<div class="form-group">
					<label>Please confirm login email below</label>
					<input type="email" class="form-control" name="email_forgot" id="email_forgot">
					<i class="icon_mail_alt"></i>
				</div>
				<p>You will receive an email containing a link allowing you to reset your password to a new preferred one.</p>
				<div class="text-center"><input type="submit" value="Reset Password" class="btn_1"></div>
			</div>
		</div>
	</form>
	<!--form -->
</div>

<script type="text/javascript">
	$(document).ready(function(){
		$("#loginForm").unbind('submit').bind('submit', function() {

			var form = $(this);
			var url = form.attr('action');
			var type = form.attr('method');

			$.ajax({
				url  : url,
				type : type,
				data : form.serialize(),
				dataType: 'json',
				success:function(response) {
					if(response.success == true) {
						window.location = '<?php echo base_url('admin'); ?>';
					}
					else {

						document.getElementById("pesan").innerHTML = "<b style='color:red;'>Username / Password anda salah</b>";

          } // /else
        } // /if
    });

			return false;
		});
	});


</script>