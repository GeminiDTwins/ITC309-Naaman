<div class="col-lg-8 center mx-auto mt-2">
	<div class="card card-small mb-4 mt-5">
		<div class="card-header border-bottom">
			<h5 class="m-0 text-left">My profile </h5>
		</div>
		<ul class="list-group list-group-flush">
			<li class="list-group-item p-3">
				<div class="row">
					<?php
					if ($this->session->flashdata('error')) {

						echo '<div class="alert alert-danger">'
							. $this->session->flashdata('error') . '</div>';
					} else if ($this->session->flashdata('success')) {

						echo '<div class="alert alert-success">'
							. $this->session->flashdata('success') . '</div>';
					}
					?>
					<div class="col">
						<div class="row justify-content-center">
							<div class="col-8">
								<div class="row">
									<div class="col-sm-3" style="margin: left">
										<img src="<?php echo base_url($this->session->userdata('pfp')); ?>" style="width: auto; height: 195px;">

									</div>
									<div class="col-sm-6" style="margin: left">
										<div class="mb-3">
											<label for="formFileSm" class="form-label">Update profile pic</label>
											<input class="form-control form-control-sm" id="formFileSm" type="file">
										</div>
									</div>
								</div>
								<?php
								if ($this->input->get('user_id')) {
									$args = '?user_id=' . $this->input->get('user_id');
								} else {
									$args = '';
								}
								echo form_open('Physicians/updateProfile' . $args); ?>

								<div class="form-group mt-1">
									<label for="title">Title</label>
									<input name="title" type="text" class="form-control" id="title" value="<?php echo $profile['title'] ?>">
									<span><?php echo form_error('title') ?></span>
								</div>
								<div class="form-row">
									<div class="form-group mt-1">
										<label for="f_name">First Name</label>
										<input name="f_name" type="text" class="form-control" id="f_name" placeholder="First Name" value="<?php echo $profile['f_name'] ?>">
									</div>
									<span><?php echo form_error('f_name') ?></span>

									<div class="form-group mt-1">
										<label for="l_name">Last Name</label>
										<input name="l_name" type="text" class="form-control" id="l_name" placeholder="Last Name" value="<?php echo $profile['l_name'] ?>">
									</div>
									<span><?php echo form_error('l_name') ?></span>
								</div>
								<div class="form-row">
									<div class="form-group mt-1">
										<label for="email">Email</label>
										<input name="email" type="email" class="form-control" id="email" placeholder="Email" value="<?php echo $profile['email'] ?>">
									</div>
									<span><?php echo form_error('email') ?></span>
								</div>
								<div class="form-row">
									<div class="form-group mt-1">
										<label for="address">Address</label>
										<input name="address" type="text" class="form-control" id="address" placeholder="Address" value="<?php echo $profile['address'] ?>">
										<span><?php echo form_error('address') ?></span>

									</div>
									<div class="form-group mt-1">
										<label for="postal">Postal Code</label>
										<input name="postal" type="text" class="form-control" id="postal" value="<?php echo $profile['postal'] ?>">
										<span><?php echo form_error('postal') ?></span>

									</div>
									<div class="form-group mt-1">
										<label for="number">Number</label>
										<input name="number" type="number" class="form-control" id="number" value="<?php echo $profile['number'] ?>">
										<span><?php echo form_error('number') ?></span>

									</div>

									<div class="form-group mt-1">
										<label for="postal">Description</label>
										<textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="description"><?php echo $profile['description'] ?></textarea>
										<span><?php echo form_error('description') ?></span>

									</div>
								</div>
								<button type="submit" class="btn btn-success mt-1">Update Account</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
	<div class="card card-small mb-4">
		<div class="card-header border-bottom">
			<h5 class="m-0 ">Update Password</h5>
		</div>
		<ul class="list-group list-group-flush">
			<li class="list-group-item p-3">
				<div class="row">
					<div class="col">
						<div class="row justify-content-center">
							<div class="col-8">
								<?php
								if ($this->input->get('user_id')) {
									$args = '?user_id=' . $this->input->get('user_id');
								} else {
									$args = '';
								}
								echo form_open('ProfileController/updatePassword' . $args); ?>
								<div class="form-row">
									<div class="form-group">
										<div class="form-group">
											<label for="password">Password</label>
											<input name="password" type="password" class="form-control " id="password" placeholder="Password">
											<span><?php echo form_error('password') ?></span>
											<label for="cpassword" class="mt-1">Confirm Password</label>
											<input name="cpassword" type="password" class="form-control" id="cpassword" placeholder="Password">
											<span><?php echo form_error('cpassword') ?></span>
										</div>
									</div>
									<button type="submit" class="btn btn-success mt-1">Update Password</button>
									</form>
								</div>
							</div>
						</div>
					</div>
			</li>
		</ul>
	</div>
</div>
