<div class="col-lg-8 center mx-auto">
	<div class="card card-small mb-4">
		<div class="card-header border-bottom">
			<h6 class="m-0 text-center"><?php if ($formType == 'Add') {
					echo 'Add Physician';
				} else echo 'Update Physician'; ?></h6>
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
								<div class="col-sm-3" style="margin: auto">
								<?php
								if ($this->input->get('physician_id')) {
								$user = "physician";
								$field = "pfp";
								$primaryKeyField = "account_id";
								$hostname = $this->db->hostname;
								$username = $this->db->username;
								$password = $this->db->password;
								$database = $this->db->database;
								$pfp = $this->db->selectSingleValue($user, $field, $primaryKeyField, $this->input->get('physician_id'),$hostname, $username, $password,$database);
								}?>
								<?php 
								if ($this->input->get('physician_id')) {
									echo '<img src="..\\..\\assets\\Images\\'.$pfp.'"style="width: auto; height: 195px;">';
								}
								?>
								</div>
								<?php
								if ($this->input->get('physician_id')) {
									$args = 'updatePhysician?user_id=' . $this->input->get('physician_id');
								} else {
									$args = 'addPhysician';
								}
								echo form_open('AdminController/' . $args); ?>
								<div class="form-row">
									<div class="form-group">
										<label for="title">Title</label>
										<input name="title" type="text" class="form-control" id="title"
											   placeholder="Title"
											   value="<?php echo $profile['title'] ?? '' ?>"></div>
									<div class="form-group">
										<label for="f_name">First Name</label>
										<input name="f_name" type="text" class="form-control" id="f_name"
											   placeholder="First Name"
											   value="<?php echo $profile['f_name'] ?? '' ?>"></div>
									<span><?php echo form_error('f_name') ?></span>

									<div class="form-group">
										<label for="l_name">Last Name</label>
										<input name="l_name" type="text" class="form-control" id="l_name"
											   placeholder="Last Name"
											   value="<?php echo $profile['l_name'] ?? '' ?>"></div>
									<span><?php echo form_error('l_name') ?></span>

								</div>
								<div class="form-row">
									<div class="form-group">
										<label for="email">Email</label>
										<input name="email" type="email" class="form-control" id="email"
											   placeholder="Email"
											   value="<?php echo $profile['email'] ?? '' ?>"></div>
									<span><?php echo form_error('email') ?></span>
								</div>
								<div class="form-row">
									<div class="form-group">
										<label for="address">Address</label>
										<input name="address" type="text" class="form-control" id="address"
											   placeholder="Address" value="<?php echo $profile['address'] ?? '' ?>">
										<span><?php echo form_error('address') ?></span>

									</div>
									<div class="form-group">
										<label for="postal">Postal Code</label>
										<input name="postal" type="text" class="form-control" id="postal"
											   value="<?php echo $profile['postal'] ?? '' ?>">
										<span><?php echo form_error('postal') ?></span>

									</div>
									<div class="form-group">
										<label for="number">Number</label>
										<input name="number" type="number" class="form-control" id="number"
											   value="<?php echo $profile['number'] ?? '' ?>">
										<span><?php echo form_error('number') ?></span>

									</div>
									<div class="form-group">
										<label for="description">Description</label>
										<textarea name="description" class="form-control" id="description"
												  placeholder="Description"><?php echo $profile['description'] ?? '' ?></textarea>
										<span><?php echo form_error('address') ?></span>
									</div>
								</div>
								<?php if ($formType == 'Add') { ?>
									<div class="form-group">
										<label for="password">Password</label>
										<input name="password" type="password" class="form-control" id="password"
											   placeholder="Password">
										<span><?php echo form_error('password') ?></span>
										<label for="cpassword">Confirm Password</label>
										<input name="cpassword" type="password" class="form-control" id="cpassword"
											   placeholder="Password">
										<span><?php echo form_error('cpassword') ?></span>
									</div>
								<?php } ?>
								<button type="submit" class="btn btn-success">
									<?php if ($formType == 'Add') {
										echo 'Add Physician';
									} else echo 'Update Physician'; ?></button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</li>
		</ul>
	</div>
	<?php if ($formType == 'Update') { ?>
		<div class="card card-small mb-4">
			<div class="card-header border-bottom">
				<h6 class="m-0 text-center">Update Password</h6>
			</div>
			<ul class="list-group list-group-flush">
				<li class="list-group-item p-3">
					<div class="row">
						<div class="col">
							<div class="row justify-content-center">
								<div class="col-8">
									<?php
									if ($this->input->get('physician_id')) {
										$args = '?user_id=' . $this->input->get('physician_id');
									} else {
										$args = '';
									}
									echo form_open('ProfileController/updatePassword' . $args); ?>
									<div class="form-row">
										<div class="form-group">
											<div class="form-group">
												<label for="password">Password</label>
												<input name="password" type="password" class="form-control"
													   id="password"
													   placeholder="Password">
												<span><?php echo form_error('password') ?></span>
												<label for="cpassword">Confirm Password</label>
												<input name="cpassword" type="password" class="form-control"
													   id="cpassword"
													   placeholder="Password">
												<span><?php echo form_error('cpassword') ?></span>
												<input type="hidden" name="callback"
													   value="<?php echo('AdminController/edit?physician_id=' .
														   $this->input->get('physician_id')) ?>">
											</div>
										</div>
										<button type="submit" class="btn btn-success">Update Password</button>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
	<?php } ?>
</div>
