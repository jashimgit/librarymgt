<div class="content">
	<div class="main-content">
		<h2>Student List</h2>
		<hr />
		<table class="table">
			<thead>
				<tr>
					<th>Student Name</th>
					<th>Department</th>
					<th>Roll</th>
					<th>Registration number</th>
					<th style="width: 3.5em;"></th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($results as $key => $row) {  ?>
					<tr>
						<td> <?php echo $row->s_name; ?></td>
						<td> <?php echo $row->s_name; ?></td>
						<td> <?php echo $row->s_roll; ?></td>
						<td> <?php echo $row->s_reg; ?></td>
						<td>
							<a href="#editmodal" role="button" data-toggle="modal"><i class="fa fa-pencil"></i></a>
							<a href="#myModal" role="button" data-toggle="modal"><i class="fa fa-trash-o"></i></a>
						</td>
					</tr>
				<?php } ?>

			</tbody>
		</table>



		<!-- Edit modal -->

		<div class="modal small fade" id="editmodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h3 id="myModalLabel">Edit Student</h3>
					</div>
					<div class="modal-body">
						<form id="editForm" action="" method="post">
							<div class="form-group">
								<label>Student Name</label>
								<input type="text" name='s_name' class="form-control span12" value="">
							</div>
							<div class="form-group">
								<label>Department</label>
								<input type="text" name="s_dept" class="form-control span12">
							</div>
							<div class="form-group">
								<label>Roll No.</label>
								<input type="text" name="s_roll" class=" form-control span12">
							</div>
							<div class="form-group">
								<label>Reg. No.</label>
								<input type="text" name="s_reg" class=" form-control span12">
							</div>

						</form>

						<div class="modal-footer">
							<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
							<button class="btn btn-primary" data-dismiss="modal">Add</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- delete modal -->
		<div class="modal small fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
						<h3 id="myModalLabel">Delete Confirmation</h3>
					</div>
					<div class="modal-body">
						<p class="error-text"><i class="fa fa-warning modal-icon"></i>Are you sure you want to delete
							This?<br>This cannot be undone.</p>
					</div>
					<div class="modal-footer">
						<button class="btn btn-default" data-dismiss="modal" aria-hidden="true">Cancel</button>
						<button class="btn btn-danger" data-dismiss="modal">Delete</button>
					</div>
				</div>
			</div>
		</div>

	</div>
</div>