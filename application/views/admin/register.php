<div class="container">
	<div class="row text-center">

<h4 class="text-center img-thumbnail">Register User</h4>
	</div>
<div class="row">
<div class="col-lg-12">
	<div class="col-lg-3">
	</div>
	<div class="col-lg-6 jumbotron text-center">
<?php $attributes = array("name" => "registrationform");
echo form_open("register", $attributes);?>

			<div class="input-group mar-5-top">
				<span class="input-group-addon">
					Name:
				</span>
				<input class="form-control" name="firstname" placeholder="Name" type="text" value="<?php echo set_value('firstname'); ?>" />
			</div>
			<span style="color:red"><?php echo form_error('firstname'); ?></span>
			<div class="input-group mar-5-top">
				<span class="input-group-addon">
					Email:
				</span>
				<input class="form-control" name="email" placeholder="Email" type="text" value="<?php echo set_value('email'); ?>" /> 
			</div>
			<span style="color:red"><?php echo form_error('email'); ?></span>
			<div class="input-group mar-5-top">
				<span class="input-group-addon">
					Password:
				</span>
				<input class="form-control" name="password" placeholder="Password" type="password" value="<?php echo set_value('password'); ?>" />
			</div>
			<span style="color:red"><?php echo form_error('password'); ?></span>
				<div class="input-group mar-5-top">
				<span class="input-group-addon">
					Confirm Password:
				</span>
				<input class="form-control" name="cpassword" placeholder="Confirm Password" type="password" value="<?php echo set_value('cpassword'); ?>" />
			</div>
			<span style="color:red"><?php echo form_error('cpassword'); ?></span>
			<div class="col-lg-12 mar-5-top text-right pad_fix">
				<button class="btn btn-success" type="submit">Sign Up</button>
			</div>
			<div class="col-lg-12 mar-5-top">
				<p style="color:green; font-style:bold"></p>
<p style="color:red; font-style:bold"></p>				
			</div>
<?php echo form_close(); ?>
		

	</div>
	<div class="col-lg-3">
	</div>
</div>
<div class="row text-center mar-175-btm">

<h4 class="text-center">Already a member?<br> Please <a href="login">Login</a> Here!</h4>
	</div>
</div>
</div>