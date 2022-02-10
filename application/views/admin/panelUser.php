<div class="col-lg-10 center mx-auto">
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
			</div>
		</li>
	</ul>
	<?php
	$this->load->view('admin/adminPage');
	$this->load->view('admin/users');
	?>
</div>
