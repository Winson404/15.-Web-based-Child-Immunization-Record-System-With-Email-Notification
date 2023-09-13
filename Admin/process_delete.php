<?php 
	session_start();
	include '../config.php';

	// DELETE USER
	if(isset($_POST['delete_user'])) {
		$user_Id = $_POST['user_Id'];

		$delete = mysqli_query($conn, "DELETE FROM users WHERE user_Id='$user_Id'");
		if($delete) {
	      	$_SESSION['message'] = "User information has been deleted!";
	        $_SESSION['text'] = "Deleted successfully!";
	        $_SESSION['status'] = "success";
			header("Location: users.php");
	      } else {
	        $_SESSION['message'] = "Something went wrong while deleting the record";
	        $_SESSION['text'] = "Please try again.";
	        $_SESSION['status'] = "error";
			header("Location: users.php");
	      }
	}


	// DELETE ADMIN
	if(isset($_POST['delete_admin'])) {
		$admin_Id = $_POST['admin_Id'];

		$delete = mysqli_query($conn, "DELETE FROM admin WHERE admin_Id='$admin_Id'");
		 if($delete) {
	      	$_SESSION['message'] = "Admin information has been deleted!";
	        $_SESSION['text'] = "Deleted successfully!";
	        $_SESSION['status'] = "success";
			header("Location: admin.php");
	      } else {
	        $_SESSION['message'] = "Something went wrong while deleting the record";
	        $_SESSION['text'] = "Please try again.";
	        $_SESSION['status'] = "error";
			header("Location: admin.php");
	      }
	}



	// DELETE SCHEDULE
	if(isset($_POST['delete_schedule'])) {
		$user_Id = $_POST['user_Id'];

		$delete = mysqli_query($conn, "DELETE FROM schedule WHERE user_Id='$user_Id'");
		 if($delete) {
	      	$_SESSION['message'] = "Schedule information has been deleted!";
	        $_SESSION['text'] = "Deleted successfully!";
	        $_SESSION['status'] = "success";
			header("Location: schedule.php");
	      } else {
	        $_SESSION['message'] = "Something went wrong while deleting the record";
	        $_SESSION['text'] = "Please try again.";
	        $_SESSION['status'] = "error";
			header("Location: schedule.php");
	      }
	}



	// DELETE VACCINE
	if(isset($_POST['delete_vaccine'])) {
		$user_Id	= $_POST['user_Id'];
		$vaccine_Id = $_POST['vaccine_Id'];

		$delete = mysqli_query($conn, "DELETE FROM user_vaccine_record WHERE vaccine_Id='$vaccine_Id'");
		 if($delete) {
	      	$_SESSION['message'] = "Immunization Vaccination has been deleted!";
	        $_SESSION['text'] = "Deleted successfully!";
	        $_SESSION['status'] = "success";
			header('Location: immmunization_vaccination.php?user_Id='.$user_Id.'');
	      } else {
	        $_SESSION['message'] = "Something went wrong while deleting the record";
	        $_SESSION['text'] = "Please try again.";
	        $_SESSION['status'] = "error";
			header('Location: immmunization_vaccination.php?user_Id='.$user_Id.'');
	      }
	}


?>