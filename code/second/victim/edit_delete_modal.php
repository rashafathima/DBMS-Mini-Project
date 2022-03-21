<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit Victim Information</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="id" value="<?php echo $row['id']; ?>">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">AID:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="AID" value="<?php echo $row['AID']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">First Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Fname" pattern="[A-Za-z]+" value="<?php echo $row['Fname']; ?>">
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Last Name:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Lname" pattern="[A-Za-z]+" value="<?php echo $row['Lname']; ?>">
					</div>
				</div>

        <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Victim Age:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Vage" pattern="^[1-9][0-9]{0,1}$" value="<?php echo $row['Vage']; ?>">
					</div>
				</div>


        <div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Vehicle Type:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Veh_type" value="<?php echo $row['Veh_type']; ?>">
					</div>
				</div>


      </div>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
            </div>

        </div>
    </div>
</div>

<!-- Delete -->
<div class="modal fade" id="delete_<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Delete Accident</h4></center>
            </div>
            <div class="modal-body">
            	<p class="text-center">Are you sure you want to Delete</p>
				<h2 class="text-center"><?php echo $row['Fname'].' '.$row['Lname']; ?></h2>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Yes</a>
            </div>

        </div>
    </div>
</div>
