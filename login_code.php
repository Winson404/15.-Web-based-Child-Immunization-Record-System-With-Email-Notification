<?php 

	session_start();
	include 'config.php';

	// ADMIN LOGIN
	if(isset($_POST['login'])) {
		$email    = $_POST['email'];
		$password = md5($_POST['password']);

		$check = mysqli_query($conn, "SELECT * FROM admin WHERE email='$email' AND password='$password' AND user_type='Admin'");
		if(mysqli_num_rows($check)===1) {

				$row = mysqli_fetch_array($check);
				if($row['email'] === $email && $row['password'] === $password) {
					$_SESSION['admin_Id'] = $row['admin_Id'];
					header("Location: Admin/dashboard.php");
				} else {
					$_SESSION['message'] = "Incorrect password.";
		            $_SESSION['text'] = "Please try again.";
				    $_SESSION['status'] = "error";
					header("Location: login.php");
				}
			
		} else {
				
				// USER LOGIN
				$check2 = mysqli_query($conn, "SELECT * FROM users WHERE email='$email' AND password='$password'");
                if(mysqli_num_rows($check2)===1) {

					$row = mysqli_fetch_array($check2);
					if($row['email'] === $email && $row['password'] === $password) {
						$_SESSION['user_Id'] = $row['user_Id'];
						header("Location: User/about_me.php");
					} else {
						$_SESSION['message'] = "Incorrect password.";
			            $_SESSION['text'] = "Please try again.";
					    $_SESSION['status'] = "error";
						header("Location: login.php");
					}
					
				} else {
						$_SESSION['message'] = "Incorrect password.";
			            $_SESSION['text'] = "Please try again.";
					    $_SESSION['status'] = "error";
						header("Location: login.php");
		         }
         }
	}
	

?>