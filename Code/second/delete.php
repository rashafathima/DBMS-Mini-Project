<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM loc WHERE id = '".$_GET['id']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Location deleted successfully';
		}
		else{
			$_SESSION['error'] = 'Something went wrong in deleting Location';
		}
	}
	else{
		$_SESSION['error'] = 'Select Location to delete first';
	}

	header('location: index.php');
?>
