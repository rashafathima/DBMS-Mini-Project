<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$AID = $_POST['AID'];
		$Fname = $_POST['Fname'];
		$Lname = $_POST['Lname'];
		$Vage = $_POST['Vage'];
		$Veh_type = $_POST['Veh_type'];
		$sql = "INSERT INTO vict (AID, Fname, Lname, Vage, Veh_type) VALUES ('$AID', '$Fname', '$Lname', '$Vage', '$Veh_type')";

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
