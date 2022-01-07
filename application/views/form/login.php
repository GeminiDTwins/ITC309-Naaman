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
			<h2>Login to Naaman</h2>
			<?php
			if ($this->session->flashdata('login_error')) {

				echo '<div class="alert alert-danger">'
						. $this->session->flashdata('login_error') . '</div>';
			}
			?>
			<form action="<?php echo base_url(); ?>login/validation" method="post">

				<div class="form-group mb-3">
					<input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>"
						   class="form-control">
					<span><?php echo form_error('email') ?></span>
				</div>

				<div class="form-group mb-3">
					<input type="password" name="password" placeholder="Password" class="form-control">
					<span><?php echo form_error('password') ?></span>
				</div>

				<div class="d-grid">
					<button type="submit" class="btn btn-dark">Login</button>
				</div>
				<span>Don't have an account? <a href="<?php echo base_url(); ?>register">Let's signup</a></span>
			</form>
		</div>
	</div>
</div>
</body>

</html>
