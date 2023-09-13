<?php 
	session_start();
	include '../config.php';

	// if(isset($_POST['delete_missing'])) {
	// 	$post_Id = $_POST['post_Id'];

	// 	$delete = mysqli_query($conn, "DELETE FROM posted WHERE post_Id='$post_Id'");
	// 	if($delete) {
	// 		$_SESSION['success']  = "Record has been deleted!";
	//         header("Location: posted.php");   
	// 	} else {
	// 		$_SESSION['exists'] = "Something went wrong while deleting the record. Please try again.";
 //            header("Location: posted.php");
	// 	}
	// }



	// // DELETE APPOINTMENT
	// if(isset($_POST['delete_appointment'])) {
		
	// 	$appointment_Id = $_POST['appointment_Id'];

	// 	$delete = mysqli_query($conn, "DELETE FROM appointment WHERE appointment_Id='$appointment_Id'");
	// 	if($delete) {
	// 		$_SESSION['success']  = "Appointment has been deleted!";
	//         header("Location: appointment.php");   
	// 	} else {
	// 		$_SESSION['exists'] = "Something went wrong while deleting the record. Please try again.";
 //            header("Location: appointment.php");
	// 	}
	// }

?>