<div class="col-lg-8 center mx-auto mt-4">
	<div class="card card-small mb-4 mt-4">
		<div class="card-header border-bottom">
			<h5 class="m-0"><?php echo $profile['f_name'] ?>'s account details</h5>
		</div>
		<ul class="list-group list-group-flush">
			<li class="list-group-item p-3">
				<div class="row">
					<div class="col">
						<div class="row justify-content-center">
							<div class="col-4">
								<div class="col-sm-3" style="margin: auto">
								<?php
								$image_url = "assets/Images/".$profile['image'];
								 ?>
									<img src="<?php echo base_url($image_url); ?>" style="width: auto; height: 195px;">
								</div>
							</div>
							<div class="col-8">
								<table class="table">
									<tr>
										<td>First Name</td>
										<td><?php echo $profile['f_name'] ?></td>
									</tr>
									<tr>
										<td>Last Name</td>
										<td><?php echo $profile['l_name'] ?></td>
									</tr>
									<tr>
										<td>Email</td>
										<td><?php echo $profile['email'] ?></td>
									</tr>
									<tr>
										<td>Address</td>
										<td><?php echo $profile['address'] ?></td>
									</tr>
									<tr>
										<td>Postal Code</td>
										<td><?php echo $profile['postal'] ?></td>
									</tr>
									<tr>
										<td>Number</td>
										<td><?php echo $profile['number'] ?></td>
									</tr>
								</table>
							</div>
						</div>
					</div>
			</li>
		</ul>
	</div>
</div>
