<div class="card card-small mb-4">
	<div class="card-header border-bottom">
		<h6 class="m-0 text-center">Appointments</h6>
		<form
			method="get"
			action="<?php echo base_url('index.php/AdminController/add') ?>"
			style="margin-right: 10px"
		>
			<input type="hidden" name="type" value="appointment">
			<button class="btn btn-success" type="submit"><i class="fa fa-plus"></i></button>
		</form>
	</div>
	<ul class="list-group list-group-flush">
		<li class="list-group-item p-3">
			<div class="row" style="padding: 20px">
				<table class="table">
					<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Patient Name</th>
						<th scope="col">Physician Name</th>
						<th scope="col">Booking Date</th>
						<th scope="col">Consultation Date</th>
						<th scope="col">Time</th>
						<th scope="col">Action</th>
					</tr>
					</thead>
					<tbody>
					</tr>
					<?php
					if (isset($appointments)):

						foreach ($appointments as $row) {
							?>
							<tr>
								<td scope="row"><?php echo $row->oa_id; ?></td>
								<td><?php echo $row->patient_name; ?></td>
								<td><?php echo $row->physician_name; ?></td>
								<td><?php echo $row->booking_date; ?></td>
								<td><?php echo $row->consultation_date; ?></td>
								<td><?php echo str_replace(".000000", "", $row->time) ?></td>
								<td class="d-flex">
									<form
										method="get"
										action="<?php echo base_url('index.php/AdminController/edit') ?>"
										style="margin-right: 10px"
									>
										<input type="hidden" name="appointment_id" value="<?php echo $row->oa_id; ?>">
										<button class="btn btn-info" type="submit"><i class="fa fa-pencil"></i></button>
									</form>
									<form
										method="post"
										onSubmit="return confirm('Are you sure you wish to delete?');"
										action="<?php echo base_url('index.php/AdminController/delete') ?>"
									>
										<input type="hidden" name="appointment_id" value="<?php echo $row->oa_id; ?>">
										<button class="btn btn-danger" type="submit"><i class="fa fa-remove"></i>
										</button>
									</form>
								</td>
							</tr>
						<?php }
					endif;
					?>
					</tbody>
				</table>
			</div>
		</li>
	</ul>
</div>
