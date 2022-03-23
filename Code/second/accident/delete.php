<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['id'])){
		$sql = "DELETE FROM acc WHERE id = '".$_GET['id']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Accident deleted successfully';
		}
		////////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Location deleted successfully';
		// }
		/////////////////

		else{
			$_SESSION['error'] = 'Something went wrong in deleting Accident';
		}
	}
	else{
		$_SESSION['error'] = 'Select Accident to delete first';
	}

	header('location: index.php');
?>
