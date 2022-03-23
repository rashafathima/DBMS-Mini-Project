<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
		$Street = $_POST['Street'];
		$Pincode = $_POST['Pincode'];
		$Zone = $_POST['Zone'];
		$sql = "INSERT INTO loc (Street, Pincode, Zone) VALUES ('$Street', '$Pincode', '$Zone')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Location added successfully';
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
