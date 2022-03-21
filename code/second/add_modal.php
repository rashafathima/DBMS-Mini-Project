<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Location</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Street:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="Street" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">Pincode:</label>
					</div>
					<div class="col-sm-10">
						<input type="text" class="form-control" pattern="^[1-9][0-9]{5}$" name="Pincode" required>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">

						<label class="control-label modal-label">Zone:</label>
					</div>
					<div class="col-sm-10">

            <select class="form-control" name="Zone">
              <option value="Green">Green</option>
            </select>

					</div>
				</div>
            </div>
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"> Add!</a>
			</form>
            </div>

        </div>
    </div>
</div>
