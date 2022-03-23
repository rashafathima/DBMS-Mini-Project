<?php
$conn = new mysqli('localhost', 'root', '', 'dummy');
$query1 = "SELECT id FROM acc";
$result = $conn -> query($query1);
?>



<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Add New Victims</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">AID:</label>
					</div>
					<div class="col-sm-10">
            <select class="form-control" name="AID">
              <option value="">--SELECT--</option>
              <?php
              if($result->num_rows > 0)
              {
                while($row = $result->fetch_assoc())
                {
                  echo "<option value='" . $row['id'] ."'>" . $row['id'] ."</option>";
                }
              }
               ?>

            </select>
					</div>
				</div>
				<div class="row form-group">
					<div class="col-sm-2">
						<label class="control-label modal-label">First Name:</label>
					</div>
					<div class="col-sm-10">


						<input type="text" class="form-control" pattern="[A-Za-z]+" name="Fname" required>


					</div>
				</div>
        <div class="row form-group">
          <div class="col-sm-2">
            <label class="control-label modal-label">Last Name:</label>
          </div>
          <div class="col-sm-10">


            <input type="text" class="form-control" pattern="[A-Za-z]+" name="Lname" required>


          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-2">
            <label class="control-label modal-label">Victim Age:</label>
          </div>
          <div class="col-sm-10">


            <input type="text" class="form-control" pattern="^[1-9][0-9]{0,1}$" name="Vage" required>


          </div>
        </div>
				<div class="row form-group">
					<div class="col-sm-2">

						<label class="control-label modal-label">Vehicle Type:</label>
					</div>
					<div class="col-sm-10">

            <select class="form-control" name="Veh_type">
              <option value="">--SELECT--</option>
              <option value="Two Wheeler">Two Wheeler</option>
              <option value="Three Wheeler">Three Wheeler</option>
              <option value="Four Wheeler">Four Wheeler</option>
              <option value="Heavy Vehicle">Heavy Vehicle</option>
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
