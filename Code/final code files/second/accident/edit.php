<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$LID = $_POST['LID'];
		$Reasons = $_POST['Reasons'];
		$Severity = $_POST['Severity'];
		$Date = $_POST['Date'];
		$sql = "UPDATE acc SET LID = '$LID', Reasons = '$Reasons', Severity = '$Severity', Date = '$Date' WHERE id = '$id'";

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
