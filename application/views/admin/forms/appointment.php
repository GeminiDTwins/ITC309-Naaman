<div class="col-lg-8 center mx-auto">
	<div class="card card-small mb-4">
		<div class="card-header border-bottom">
			<h6 class="m-0 text-center"><?php if ($formType == 'Add') {
					echo 'Add Appointment';
				} else echo 'Update Appointment'; ?></h6>
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
								<?php
								if ($this->input->get('appointment_id')) {
									$args = 'updateAppointment?appointment_id=' . $this->input->get('appointment_id');
								} else {
									$args = 'addAppointment';
								}
								echo form_open('AdminController/' . $args); ?>
								<div class="form-row">
									<div class="form-group">
										<label for="patient">Patient</label>
										<select class="form-control" name="patient" id="patient">
											<?php
											if (isset($users)):
												foreach ($users as $row) {
													$name = $row->f_name." ".$row->l_name;
													?>
													<option value="<?php echo $row->user_id ?>" <?php
													if(isset($appointment)){
														if ($appointment['patient_id'] == $row->user_id) {
															echo 'selected';
														}
													}
													?>
													><?php echo $name ?></option>
												<?php }
											endif;
											?>
										</select>
										<span><?php echo form_error('patient') ?></span>

										<div class="form-group">
											<label for="physician">Physician</label>
											<select class="form-control" name="physician" id="physician">
												<?php
												if (isset($physicians)):
													foreach ($physicians as $row) {
														$name = $row->title . " " . $row->f_name . " " . $row->l_name;
														?>
														<option value="<?php echo $row->physician_id ?>" <?php
														if(isset($appointment)){
															if ($appointment['physician_id'] == $row->physician_id) {
																echo 'selected';
															}
														}
														?>
														><?php echo $name ?></option>
													<?php }
												endif;
												?>
											</select>
										</div>
										<span><?php echo form_error('physician') ?></span>

										<div class="form-group">
											<label for="cdate">Consultation Date</label>
											<input name="cdate" type="date" class="form-control" id="cdate"
												   value="<?php echo $appointment['cdate'] ?? '' ?>"></div>
										<span><?php echo form_error('cdate') ?></span>
										<div class="form-group">
											<label for="ctime">Consultation Time</label>
											<input name="ctime" type="time" class="form-control" id="ctime"
												   value="<?php echo $appointment['ctime'] ?? '' ?>"></div>
										<span><?php echo form_error('ctime') ?></span>

									</div>
									<button type="submit" class="btn btn-success">
										<?php if ($formType == 'Add') {
											echo 'Add Appointment';
										} else echo 'Update Appointment'; ?></button>
									</form>
								</div>
							</div>
						</div>
					</div>
			</li>
		</ul>
	</div>
</div>
