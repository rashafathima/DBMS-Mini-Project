<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$id = $_POST['id'];
		$Street = $_POST['Street'];
		$Pincode = $_POST['Pincode'];
		$sql = "UPDATE loc SET Street = '$Street', Pincode = '$Pincode' WHERE id = '$id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Location updated successfully';
		}
		else{
			$_SESSION['error'] = 'Something went wrong in updating Location';
		}
	}
	else{
		$_SESSION['error'] = 'Select Location to edit first';
	}

	header('location: index.php');

?>
