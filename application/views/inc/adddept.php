<div class="content">
	<div class="main-content">
		<H2>Add Department</h2>
		<hr />

		<div class="panel-body" style="width:600px;">
			<?php
                 if ($this->session->flashdata('msg')) {?>
			<div class="alert alert-success">
				<?php echo  $this->session->flashdata('msg'); ?>
			</div>
			<?php   }  ?>


			<form action="<?php echo base_url() ?>department/add" method="post">
				<div class="form-group">
					<label>Department Name</label>
					<input type="text" name='d_name' class="form-control span12">
				</div>


				<div class="form-group">
					<input type="submit" class="btn btn-primary" value="Submit">
				</div>

			</form>
		</div>
	</div>
</div>
