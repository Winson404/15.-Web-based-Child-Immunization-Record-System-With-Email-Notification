<?php 


	session_start();
	include 'config.php';

	// SAVE USER
	if(isset($_POST['create_user'])) {

		$firstname       = $_POST['firstname'];
		$middlename      = $_POST['middlename'];
		$lastname        = $_POST['lastname'];
		$suffix          = $_POST['suffix'];
		$gender          = $_POST['gender'];
		$dob             = $_POST['dob'];
		$age             = $_POST['age'];
		$contact         = $_POST['contact'];
		$email           = $_POST['email'];
		$address         = $_POST['address'];
		$password        = md5($_POST['password']);
		$cpassword       = md5($_POST['cpassword']);
		$date_registered = date('Y-m-d');

		$year					 	 = date('Y');


		$mothersname		 = $_POST['mothersname'];
		$mothersnumber   = $_POST['mothersnumber'];
		$mothersaddress  = $_POST['mothersaddress'];
		$fathersname     = $_POST['fathersname'];
		$fathersnumber   = $_POST['fathersnumber'];
		$fathersaddress  = $_POST['fathersaddress'];
		$birthplace      = $_POST['birthplace'];
		$medications     = $_POST['medications'];
		$allergies       = $_POST['allergies'];
		$file            = basename($_FILES["fileToUpload"]["name"]);
		// $key 				     = substr(number_format(time() * rand(), 0, '', ''), 0, 6);

		$check_email = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
		if(mysqli_num_rows($check_email)>0) {
      $_SESSION['message'] = "Email is already taken.";
      $_SESSION['text'] = "Please try again.";
      $_SESSION['status'] = "error";
			header("Location: register.php");
		} else {

				  		//Check if image file is a actual image or fake image
		          $target_dir = "images-attachment/";
		          $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		          $uploadOk = 1;
		          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  //Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['message'] = "Only JPG, JPEG, PNG & GIF files are allowed.";
			            $_SESSION['text'] = "Please try again.";
					        $_SESSION['status'] = "error";
									header("Location: register.php");
                  $uploadOk = 0;
                  }

                  //Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['message'] = "Your file was not uploaded.";
			            $_SESSION['text'] = "Please try again.";
					        $_SESSION['status'] = "error";
									header("Location: register.php");
                  //if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                     	
                     	  //with saving image code
                      	$save = mysqli_query($conn, "INSERT INTO users (user_firstname, user_middlename, user_lastname, user_suffix, gender, dob, age, address, email, contact, password, attachment, date_registered, mothers_name, mothers_address, mothers_number, fathers_name, fathers_address, fathers_number, birthplace_hospital_address, medications, allergies, year) VALUES ('$firstname', '$middlename', '$lastname', '$suffix', '$gender', '$dob', '$age', '$address', '$email', '$contact', '$password', '$file', '$date_registered', '$mothersname', '$mothersaddress', '$mothersnumber', '$fathersname', '$fathersaddress', '$fathersnumber', '$birthplace', '$medications', '$allergies', '$year')");

                      	// $save = mysqli_query($conn, "INSERT INTO users (user_firstname, user_middlename, user_lastname, user_suffix, gender, dob, age, address, email, contact, password, date_registered, mothers_name, mothers_address, mothers_number, fathers_name, fathers_address, fathers_number, birthplace_hospital_address, medications, allergies) VALUES ('$firstname', '$middlename', '$lastname', '$suffix', '$gender', '$dob', '$age', '$address', '$email', '$contact', '$password', '$date_registered', '$mothersname', '$mothersnumber', '$mothersaddress', '$fathersname', '$fathersnumber', '$fathersaddress', '$birthplace', '$medications', '$allergies')");

                            if($save) {
									          	$_SESSION['message'] = "Childs information has been successfully saved!";
									            $_SESSION['text'] = "Saved successfully!";
											        $_SESSION['status'] = "success";
															header("Location: register.php");
									          } else {
									            $_SESSION['message'] = "Something went wrong while saving the information.";
									            $_SESSION['text'] = "Please try again.";
											        $_SESSION['status'] = "error";
															header("Location: register.php");
									          }
                      } else {
                            $_SESSION['message'] = "There was an error uploading your file.";
								            $_SESSION['text'] = "Please try again.";
										        $_SESSION['status'] = "error";
														header("Location: register.php");
                      }
				 }
		}

	}


?>