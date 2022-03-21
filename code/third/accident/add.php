<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$LID = $_POST['LID'];
		$Reasons = $_POST['Reasons'];
		$Severity = $_POST['Severity'];
		$sql = "INSERT INTO acc (LID, Reasons, Severity) VALUES ('$LID', '$Reasons', '$Severity')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Accident added successfully';
		}
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add field first';
	}

	header('location: index.php');
?>
