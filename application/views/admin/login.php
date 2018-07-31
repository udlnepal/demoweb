 <?php echo $this->session->flashdata('verify_msg'); ?>
<div class="container">
	<div class="row text-center">

<h4 class="text-center img-thumbnail">Login To Admin Panel</h4>
	</div>
<div class="row">
<div class="col-lg-12">
	<div class="col-lg-3">
	</div>
	<div class="col-lg-6 jumbotron text-center">
<?php $attributes = array("name" => "loginform");
echo form_open("login", $attributes);?>

			<div class="input-group mar-5-top">
				<span class="input-group-addon">
					Username:
				</span>
				<input class="form-control" name="email" placeholder="Email-ID" type="text" /> 
			</div>
			<span style="color:red"><?php echo form_error('email'); ?></span>
			<div class="input-group mar-5-top">
				<span class="input-group-addon">
					Password:
				</span>
				<input class="form-control" name="password" placeholder="Password" type="password" /> 
			</div>
			<span style="color:red"><?php echo form_error('password'); ?></span>
			<div class="col-lg-12 mar-5-top text-right pad_fix">
				<button class="btn btn-success" type="submit">Login</button>
			</div>
			<div class="col-lg-12 mar-5-top">
				<p style="color:green; font-style:bold"><?php echo $this->session->flashdata('msg_success'); ?></p>
<p style="color:red; font-style:bold"><?php echo $this->session->flashdata('msg_error'); ?></p>

				
			</div>
<?php echo form_close(); ?>	
		

	</div>
	<div class="col-lg-3">
	</div>
</div>
<div class="row text-center mar-175-btm">

<h4 class="text-center">Is it your first time here?<br> Please <a href="register">Register</a> First!</h4>
	</div>
</div>
</div>
<!-- <p style="color:green; font-style:bold"><?php echo $this->session->flashdata('msg_success'); ?></p>
<p style="color:red; font-style:bold"><?php echo $this->session->flashdata('msg_error'); ?></p>
 -->