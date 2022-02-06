<div class="card card-small mb-6">
	<div class="card-header border-bottom">
		<h6 class="m-0 text-center">Users</h6>
		<form
			method="get"
			action="<?php echo base_url('index.php/AdminController/add') ?>"
			style="margin-right: 10px"
		>
			<input type="hidden" name="type" value="users">
			<button class="btn btn-success" type="submit"><i class="fa fa-plus"></i></button>
		</form>
	</div>
	<ul class="list-group list-group-flush">
		<li class="list-group-item p-6">
			<div class="row" style="padding: 20px">
				<table class="table">
					<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">First Name</th>
						<th scope="col">Last Name</th>
						<th scope="col">Email</th>
						<th scope="col">Phone</th>
						<th scope="col">Address</th>
						<th scope="col">Zip</th>
						<th scope="col">Gender</th>
						<th scope="col">Member Since</th>
						<th scope="col">Action</th>
					</tr>
					</thead>
					<tbody>
					</tr>
					<?php
					foreach ($users as $row) {
						?>
						<tr>
							<td scope="row"><?php echo $row->account_id; ?></td>
							<td><?php echo $row->f_name; ?></td>
							<td><?php echo $row->l_name; ?></td>
							<td><?php echo $row->email; ?></td>
							<td><?php echo $row->phone_number; ?></td>
							<td><?php echo $row->address; ?></td>
							<td><?php echo $row->postcode; ?></td>
							<td><?php echo $row->gender; ?></td>
							<td><?php echo $row->created_at; ?></td>
							<td class="d-flex">
								<form
									method="get"
									action="<?php echo base_url('index.php/AdminController/edit') ?>"
									style="margin-right: 10px"
								>
									<input type="hidden" name="user_id" value="<?php echo $row->account_id; ?>">
									<button class="btn btn-info" type="submit"><i class="fa fa-pencil"></i></button>
								</form>
								<form
									method="post"
									onSubmit="return confirm('Are you sure you wish to delete?');"
									action="<?php echo base_url('index.php/AdminController/delete') ?>"
								>
									<input type="hidden" name="user_id" value="<?php echo $row->account_id; ?>">
									<button class="btn btn-danger" type="submit"><i class="fa fa-remove"></i></button>
								</form>
							</td>
						</tr>
					<?php }
					?>
					</tbody>
				</table>
			</div>
		</li>
	</ul>
</div>
