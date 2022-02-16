<div class="col-lg-8 center mx-auto mt-4">
	<div class="card card-small mb-4 mt-5">
		<div class="card-header border-bottom d-flex justify-content-between">
			<?php
			if ($article) {
			?>
				<h5 class="m-0">Edit Article</h5>
			<?php
			} else {
			?>
				<h5 class="m-0">Create Article</h5>
			<?php } ?>
			
		</div>
		<div class="jfheuf p-2">
			<?php echo validation_errors(); ?>
			<?php
			if ($this->session->flashdata('error')) {

				echo '<div class="alert alert-danger">'
					. $this->session->flashdata('error') . '</div>';
			} else if ($this->session->flashdata('success')) {

				echo '<div class="alert alert-success">'
					. $this->session->flashdata('success') . '</div>';
			}
			?>
			<?php echo form_open('Physicians/posting'.( $article? '/'.$article[0]['article_id']:null)); ?>
			<div>
				<div>
					<input type="hidden" name="physician_id" value="<?php echo $physician_id; ?>">
					<input name="title" cols="3" rows="1" class="form-control" placeholder="Title" required 
					value="<?php echo $article? $article[0]['article_title']:null ?>"
					>
					<hr>
					<textarea name="description" cols="3" rows="3" class="form-control" placeholder="Write Something...." required><?php echo $article? $article[0]['description']:null ?></textarea>
					<h6 align="right"><button type="submit" class="btn btn-primary mt-1"><?php echo $article? "Edit":"Post" ?> article</button></h6>
				</div>
			</div>
			</form>

		</div>
	</div>
</div>
