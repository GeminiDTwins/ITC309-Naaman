<div class="col-lg-8 center mx-auto mt-4">
	<div class="card card-small mb-4 mt-5">
		<div class="card-header border-bottom d-flex justify-content-between">
			<h5 class="m-0">My Articles</h5>
			<a href="<?php echo base_url('/Physicians/viewArticleCreate') ?>">
				<button class="btn btn-success" type="button"><i class="fa fa-plus"></i></button>
			</a>
		</div>
		<ul class="list-group list-group-flush">
			<li class="list-group-item p-3">
				<div class="row" style="padding: 20px">
					<?php
					if ($this->session->flashdata('error')) {

						echo '<div class="alert alert-danger">'
							. $this->session->flashdata('error') . '</div>';
					} else if ($this->session->flashdata('success')) {

						echo '<div class="alert alert-success">'
							. $this->session->flashdata('success') . '</div>';
					}
					?>
					<table class="table">
						<thead>
							<tr>
								<th scope="col">Title</th>
								<th scope="col">Description</th>
								<th scope="col">Votes</th>
								<th scope="col">Action</th>
							</tr>
						</thead>
						<tbody>
							</tr>
							<?php
							if (isset($articles)) :

								foreach ($articles as $row) {
							?>
									<tr>
										<td scope="row"><?php echo $row['article_title']; ?></td>
										<td>
											<?php 
												if(strlen($row['description']) > 100){
													echo substr($row['description'], 0, 90);
												}else{
													echo $row['description']; 
												}
											?>
										</td>
										<td><?php echo $row['total_like']; ?></td>
										<td class="d-flex">
											<a href="<?php echo base_url('Physicians/viewArticleCreate/' . $row['article_id']); ?>">
												<button class="btn btn-info" type="button"><i class="fa fa-pencil"></i></button>
											</a>
											&nbsp;
											<form method="post" onSubmit="return confirm('Are you sure you wish to delete?');" action="<?php echo base_url('Physicians/deleteArticle') ?>">
												<input type="hidden" name="article_id" value="<?php echo $row['article_id']; ?>">
												<button class="btn btn-danger" type="submit"><i class="fa fa-remove"></i></button>
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
</div>
