<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

	<title>Naaman Register</title>
</head>

<body>
<div class="container mt-5">
	<div class="row justify-content-md-center">
		<div class="col-5">
			<h2>Signup with Naaman</h2>
			<?php
			if ($this->session->flashdata('register_error')) {

				echo '<div class="alert alert-danger">'
						. $this->session->flashdata('register_error') . '</div>';
			}
			?>
			<form action="<?php echo base_url(); ?>register/store" method="post">
				<div class="form-group mb-3">
					<input type="text" name="f_name" placeholder="First Name" value="<?= set_value('f_name') ?>"
						   class="form-control">
					<span><?php echo form_error('f_name') ?></span>
				</div>

				<div class="form-group mb-3">
					<input type="text" name="l_name" placeholder="Last Name" value="<?= set_value('l_name') ?>"
						   class="form-control">
					<span><?php echo form_error('l_name') ?></span>
				</div>

				<div class="form-group mb-3">
					<input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>"
						   class="form-control">
					<span><?php echo form_error('email') ?></span>
				</div>

				<div class="form-group mb-3">
					<input type="password" name="password" placeholder="Password" class="form-control">
					<span><?php echo form_error('password') ?></span>
				</div>

				<div class="form-group mb-3">
					<input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control">
					<span><?php echo form_error('confirmpassword') ?></span>
				</div>

				<div class="d-grid">
					<button type="submit" class="btn btn-dark">Register Now</button>
				</div>
				<span>Already have an account? <a href="<?php echo base_url(); ?>login">Log in</a></span>
			</form>
		</div>
	</div>
</div>
</body>

</html>
