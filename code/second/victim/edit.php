<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$AID = $_POST['AID'];
		$Fname = $_POST['Fname'];
		$Lname = $_POST['Lname'];
		$Vage = $_POST['Vage'];
		$Veh_type = $_POST['Veh_type'];
		$sql = "UPDATE vict SET AID = '$AID', Fname = '$Fname', Lname = '$Lname', Vage = '$Vage', Veh_type = '$Veh_type' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Location updated successfully';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Location updated successfully';
		// }
		///////////////

		else{
			$_SESSION['error'] = 'Something went wrong in updating Location';
		}
	}
	else{
		$_SESSION['error'] = 'Select Location to edit first';
	}

	header('location: index.php');

?>
