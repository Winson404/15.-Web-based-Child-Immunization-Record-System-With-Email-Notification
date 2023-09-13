<?php 

	 use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;

		require '../vendor/PHPMailer/src/Exception.php';
		require '../vendor/PHPMailer/src/PHPMailer.php';
		require '../vendor/PHPMailer/src/SMTP.php';


	session_start();
	include '../config.php';

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
			header("Location: users.php");
		} else {

				  		// Check if image file is a actual image or fake image
		          $target_dir = "../images-attachment/";
		          $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		          $uploadOk = 1;
		          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['message'] = "Only JPG, JPEG, PNG & GIF files are allowed.";
			            $_SESSION['text'] = "Please try again.";
					        $_SESSION['status'] = "error";
									header("Location: users.php");
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['message'] = "Your file was not uploaded.";
			            $_SESSION['text'] = "Please try again.";
					        $_SESSION['status'] = "error";
									header("Location: users.php");
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                     	
                     	  $save = mysqli_query($conn, "INSERT INTO users (user_firstname, user_middlename, user_lastname, user_suffix, gender, dob, age, address, email, contact, password, attachment, date_registered, mothers_name, mothers_address, mothers_number, fathers_name, fathers_address, fathers_number, birthplace_hospital_address, medications, allergies, year) VALUES ('$firstname', '$middlename', '$lastname', '$suffix', '$gender', '$dob', '$age', '$address', '$email', '$contact', '$password', '$file', '$date_registered', '$mothersname', '$mothersaddress', '$mothersnumber', '$fathersname', '$fathersaddress', '$fathersnumber', '$birthplace', '$medications', '$allergies', '$year')");

                      	// $save = mysqli_query($conn, "INSERT INTO users (user_firstname, user_middlename, user_lastname, user_suffix, gender, dob, age, address, email, contact, password, date_registered, mothers_name, mothers_address, mothers_number, fathers_name, fathers_address, fathers_number, birthplace_hospital_address, medications, allergies) VALUES ('$firstname', '$middlename', '$lastname', '$suffix', '$gender', '$dob', '$age', '$address', '$email', '$contact', '$password', '$date_registered', '$mothersname', '$mothersnumber', '$mothersaddress', '$fathersname', '$fathersnumber', '$fathersaddress', '$birthplace', '$medications', '$allergies')");

                            if($save) {
									          	$_SESSION['message'] = "Child's information has been successfully saved!";
									            $_SESSION['text'] = "Saved successfully!";
											        $_SESSION['status'] = "success";
															header("Location: users.php");
									          } else {
									            $_SESSION['message'] = "Something went wrong while saving the information.";
									            $_SESSION['text'] = "Please try again.";
											        $_SESSION['status'] = "error";
															header("Location: users.php");
									          }
                      } else {
                            $_SESSION['message'] = "There was an error uploading your file.";
								            $_SESSION['text'] = "Please try again.";
										        $_SESSION['status'] = "error";
														header("Location: users.php");
                      }
				 }
		}

	}








	// SAVE ADMIN
	if(isset($_POST['create_admin'])) {

		$firstname       = $_POST['firstname'];
		$middlename      = $_POST['middlename'];
		$lastname        = $_POST['lastname'];
		$suffix         = $_POST['suffix'];
		$gender          = $_POST['gender'];
		$dob             = $_POST['dob'];
		$age             = $_POST['age'];
		$contact         = $_POST['contact'];
		$email           = $_POST['email'];
		$address         = $_POST['address'];
		$password        = md5($_POST['password']);
		$cpassword       = md5($_POST['cpassword']);
		$date_registered = date('Y-m-d');
		$file            = basename($_FILES["fileToUpload"]["name"]);


		$check_email = mysqli_query($conn, "SELECT * FROM admin WHERE email='$email'");
		if(mysqli_num_rows($check_email)>0) {
			$_SESSION['message']  = "Email is already taken.";
      $_SESSION['text'] = "Please try again.";
      $_SESSION['status'] = "error";
			header("Location: admin.php");
		} else {

				  		// Check if image file is a actual image or fake image
		          $target_dir = "../images-admin/";
		          $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		          $uploadOk = 1;
		          $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

                  // Allow certain file formats
                  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
                  $_SESSION['message']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
			            $_SESSION['text'] = "Please try again.";
					        $_SESSION['status'] = "error";
									header("Location: admin.php");
                  $uploadOk = 0;
                  }

                  // Check if $uploadOk is set to 0 by an error
                  if ($uploadOk == 0) {
                  $_SESSION['message']  = "Your file was not uploaded.";
			            $_SESSION['text'] = "Please try again.";
					        $_SESSION['status'] = "error";
									header("Location: admin.php");
                  // if everything is ok, try to upload file
                  } else {

                      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                     	
                      	$save = mysqli_query($conn, "INSERT INTO admin (firstname, middlename, lastname, suffix, gender, dob, age, address, email, contact, password, image, date_registered) VALUES ('$firstname', '$middlename', '$lastname', '$suffix', '$gender', '$dob', '$age', '$address', '$email', '$contact', '$password', '$file','$date_registered')");

                            if($save) {
									          	$_SESSION['message'] = "Admin information has been successfully saved!";
									            $_SESSION['text'] = "Saved successfully!";
											        $_SESSION['status'] = "success";
															header("Location: admin.php");
									          } else {
									            $_SESSION['message'] = "Something went wrong while saving the information.";
									            $_SESSION['text'] = "Please try again.";
											        $_SESSION['status'] = "error";
															header("Location: admin.php");
									          }
                      } else {
                            $_SESSION['message'] = "There was an error uploading your file.";
								            $_SESSION['text'] = "Please try again.";
										        $_SESSION['status'] = "error";
														header("Location: admin.php");
                      }
				 }
		}

	}


if(isset($_POST['schedule_user'])) {

		$user_Id = $_POST['user_Id'];
		$email   = $_POST['email'];
		$date    = $_POST['date'];
		$time    = $_POST['time'];

		$fetch = mysqli_query($conn, "SELECT * FROM schedule WHERE user_Id='$user_Id'");
		if(mysqli_num_rows($fetch) == 0) {

					$save = mysqli_query($conn, "INSERT INTO schedule (user_Id, sched_date, sched_time) VALUES ('$user_Id','$date', '$time')");
					if($save) {

					$timestamp = date("F d, Y", strtotime($date));

			    $subject = 'Medication schedule';
			    $message = '<h3>Good day!</h3>
											<p>Your schedule for your medication is on '.$timestamp.' - '.$time.'</p>';

					$mail = new PHPMailer(true);                            
			    try {
			        //Server settings
			        $mail->isSMTP();                                     
			        $mail->Host = 'smtp.gmail.com';                      
			        $mail->SMTPAuth = true;                             
			        $mail->Username = 'muntinlupahealthcenterpoblacio@gmail.com';     
			        $mail->Password = 'xlqqgafafzaujpyl';              
			        $mail->SMTPOptions = array(
			            'ssl' => array(
			            'verify_peer' => false,
			            'verify_peer_name' => false,
			            'allow_self_signed' => true
			            )
			        );                         
			        $mail->SMTPSecure = 'ssl';                           
			        $mail->Port = 465;                                   

			        //Send Email
			        $mail->setFrom('muntinlupahealthcenterpoblacio@gmail.com');
			        
			        //Recipients
			        $mail->addAddress($email);              
			        $mail->addReplyTo('muntinlupahealthcenterpoblacio@gmail.com');
			        
			        //Content
			        $mail->isHTML(true);                                  
			        $mail->Subject = $subject;
			        $mail->Body    = $message;

			        $mail->send();

			        $_SESSION['message'] = "You have successfully added a schedule.";
				      $_SESSION['text'] = "Saved successfully!";
				      $_SESSION['status'] = "success";
							header("Location: users.php");
					
			    } catch (Exception $e) {
			    	$_SESSION['message']  = "Message could not be sent. Mailer Error: ".$mail->ErrorInfo;
			      $_SESSION['text'] = "Please try again.";
			      $_SESSION['status'] = "error";
						header("Location: users.php");
			    }

			    	
			    } else {
			      $_SESSION['message'] = "Something went wrong while adding the information.";
			      $_SESSION['text'] = "Please try again.";
			      $_SESSION['status'] = "error";
						header("Location: users.php");
			    }

		} else {


		$update = mysqli_query($conn, "UPDATE schedule SET sched_date='$date', sched_time='$time' WHERE user_Id='$user_Id'");
		if($update) {

		$timestamp = date("F d, Y", strtotime($date));

    $subject = 'Medication schedule';
    $message = '<h3>Good day!</h3>
								<p>Your latest schedule for your medication is on '.$timestamp.' - '.$time.'</p>';

		$mail = new PHPMailer(true);                            
    try {
        //Server settings
        $mail->isSMTP();                                     
        $mail->Host = 'smtp.gmail.com';                      
        $mail->SMTPAuth = true;                             
        $mail->Username = 'muntinlupahealthcenterpoblacio@gmail.com';     
        $mail->Password = 'xlqqgafafzaujpyl';              
        $mail->SMTPOptions = array(
            'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
            )
        );                         
        $mail->SMTPSecure = 'ssl';                           
        $mail->Port = 465;                                   

        //Send Email
        $mail->setFrom('muntinlupahealthcenterpoblacio@gmail.com');
        
        //Recipients
        $mail->addAddress($email);              
        $mail->addReplyTo('muntinlupahealthcenterpoblacio@gmail.com');
        
        //Content
        $mail->isHTML(true);                                  
        $mail->Subject = $subject;
        $mail->Body    = $message;

        $mail->send();

        $_SESSION['message'] = "You have successfully added a schedule.";
	      $_SESSION['text'] = "Saved successfully!";
	      $_SESSION['status'] = "success";
				header("Location: users.php");
		
    } catch (Exception $e) {
    	$_SESSION['message']  = "Message could not be sent. Mailer Error: ".$mail->ErrorInfo;
      $_SESSION['text'] = "Please try again.";
      $_SESSION['status'] = "error";
			header("Location: users.php");
    }

    	
    } else {
      $_SESSION['message'] = "Something went wrong while adding the information.";
      $_SESSION['text'] = "Please try again.";
      $_SESSION['status'] = "error";
			header("Location: users.php");
    }



		}

		
}










	if(isset($_POST['create_schedule'])) {

			$user_Id = $_POST['user_Id'];
			$date    = $_POST['date'];
			$time    = $_POST['time'];

			$fetch = mysqli_query($conn, "SELECT * FROM users WHERE user_Id='$user_Id'");
			$row = mysqli_fetch_array($fetch);

			$email = $row['email'];


			$fetch = mysqli_query($conn, "SELECT * FROM schedule WHERE user_Id='$user_Id'");
		  if(mysqli_num_rows($fetch) == 0) {

					$save = mysqli_query($conn, "INSERT INTO schedule (user_Id, sched_date, sched_time) VALUES ('$user_Id','$date', '$time')");
					if($save) {

					$timestamp = date("F d, Y", strtotime($date));

			    $subject = 'Medication schedule';
			    $message = '<h3>Good day!</h3>
											<p>Your schedule for your medication is on '.$timestamp.' - '.$time.'</p>';

					$mail = new PHPMailer(true);                            
			    try {
			        //Server settings
			        $mail->isSMTP();                                     
			        $mail->Host = 'smtp.gmail.com';                      
			        $mail->SMTPAuth = true;                             
			        $mail->Username = 'muntinlupahealthcenterpoblacio@gmail.com';     
			        $mail->Password = 'xlqqgafafzaujpyl';              
			        $mail->SMTPOptions = array(
			            'ssl' => array(
			            'verify_peer' => false,
			            'verify_peer_name' => false,
			            'allow_self_signed' => true
			            )
			        );                         
			        $mail->SMTPSecure = 'ssl';                           
			        $mail->Port = 465;                                   

			        //Send Email
			        $mail->setFrom('muntinlupahealthcenterpoblacio@gmail.com');
			        
			        //Recipients
			        $mail->addAddress($email);              
			        $mail->addReplyTo('muntinlupahealthcenterpoblacio@gmail.com');
			        
			        //Content
			        $mail->isHTML(true);                                  
			        $mail->Subject = $subject;
			        $mail->Body    = $message;

			        $mail->send();

			        $_SESSION['message'] = "You have successfully added a schedule.";
				      $_SESSION['text'] = "Saved successfully!";
				      $_SESSION['status'] = "success";
							header("Location: schedule.php");
					
			    } catch (Exception $e) {
			    	$_SESSION['message']  = "Message could not be sent. Mailer Error: ".$mail->ErrorInfo;
			      $_SESSION['text'] = "Please try again.";
			      $_SESSION['status'] = "error";
						header("Location: schedule.php");
			    }

			    	
			    } else {
			      $_SESSION['message'] = "Something went wrong while adding the information.";
			      $_SESSION['text'] = "Please try again.";
			      $_SESSION['status'] = "error";
						header("Location: schedule.php");
			    }

		} else {


		$update = mysqli_query($conn, "UPDATE schedule SET sched_date='$date', sched_time='$time' WHERE user_Id='$user_Id'");
		if($update) {
					$timestamp = date("F d, Y", strtotime($date));
			    $subject = 'Medication schedule';
			    $message = '<h3>Good day!</h3>
											<p>Your latest schedule for your medication is on '.$timestamp.' - '.$time.'</p>';
					$mail = new PHPMailer(true);                            
			    try {
			        //Server settings
			        $mail->isSMTP();                                     
			        $mail->Host = 'smtp.gmail.com';                      
			        $mail->SMTPAuth = true;                             
			        $mail->Username = 'muntinlupahealthcenterpoblacio@gmail.com';     
			        $mail->Password = 'xlqqgafafzaujpyl';              
			        $mail->SMTPOptions = array(
			            'ssl' => array(
			            'verify_peer' => false,
			            'verify_peer_name' => false,
			            'allow_self_signed' => true
			            )
			        );                         
			        $mail->SMTPSecure = 'ssl';                           
			        $mail->Port = 465;                                   

			        //Send Email
			        $mail->setFrom('muntinlupahealthcenterpoblacio@gmail.com');
			        
			        //Recipients
			        $mail->addAddress($email);              
			        $mail->addReplyTo('muntinlupahealthcenterpoblacio@gmail.com');
			        
			        //Content
			        $mail->isHTML(true);                                  
			        $mail->Subject = $subject;
			        $mail->Body    = $message;

			        $mail->send();

			        $_SESSION['message'] = "You have successfully added a schedule.";
				      $_SESSION['text'] = "Saved successfully!";
				      $_SESSION['status'] = "success";
							header("Location: schedule.php");
					
			    } catch (Exception $e) {
			    	$_SESSION['message']  = "Message could not be sent. Mailer Error: ".$mail->ErrorInfo;
			      $_SESSION['text'] = "Please try again.";
			      $_SESSION['status'] = "error";
						header("Location: schedule.php");
			    }
    	
    } else {
      $_SESSION['message'] = "Something went wrong while adding the information.";
      $_SESSION['text'] = "Please try again.";
      $_SESSION['status'] = "error";
			header("Location: schedule.php");
    }



		}


	}





    if(isset($_POST['create_vaccine'])) {

        $vaccine  = $_POST['vaccine'];
        $maiwasan = $_POST['maiwasan'];

        $fetch = mysqli_query($conn, "SELECT * FROM vaccine WHERE Vaccine='$vaccine'");
        if(mysqli_num_rows($fetch) > 0) {

        		$_SESSION['message'] = "Vaccine name already exists.";
			      $_SESSION['text'] = "Please try again.";
			      $_SESSION['status'] = "error";
						header("Location: vaccination.php");			

        } else {

        		$save = mysqli_query($conn, "INSERT INTO vaccine (Vaccine, sakit_na_maiwasan) VALUES ('$vaccine', '$maiwasan')");
        		if($save) {

        			 $_SESSION['message'] = "You have successfully added a vaccination.";
				       $_SESSION['text'] = "Saved successfully!";
				       $_SESSION['status'] = "success";
							 header("Location: vaccination.php");

        		} else {

        				$_SESSION['message'] = "Something went wrong while adding the information.";
					      $_SESSION['text'] = "Please try again.";
					      $_SESSION['status'] = "error";
								header("Location: vaccination.php");

        		}
          
        }

    }




    if(isset($_POST['save_record'])) {
    		$user_Id       = $_POST['user_Id'];
				$vaccine_Id    = $_POST['vaccine_Id'];
        $fetch = mysqli_query($conn, "SELECT * FROM user_vaccine_record WHERE user_Id='$user_Id' AND vaccine_Id='$vaccine_Id'");
        if(mysqli_num_rows($fetch) > 0) {
        		$_SESSION['message'] = "The patient has already a record with this vaccine.";
			      $_SESSION['text'] = "Please try again.";
			      $_SESSION['status'] = "error";
						header('Location: immmunization_vaccination.php?user_Id='.$user_Id.' ');
        } else {

        		$save = mysqli_query($conn, "INSERT INTO user_vaccine_record (user_Id, vaccine_Id) VALUES ('$user_Id', '$vaccine_Id')");
        		if($save) {
        			 $_SESSION['message'] = "You have successfully added a vaccination record.";
				       $_SESSION['text'] = "Saved successfully!";
				       $_SESSION['status'] = "success";
							 header('Location: immmunization_vaccination.php?user_Id='.$user_Id.' ');
        		} else {
        				$_SESSION['message'] = "Something went wrong while adding the information.";
					      $_SESSION['text'] = "Please try again.";
					      $_SESSION['status'] = "error";
								header('Location: immmunization_vaccination.php?user_Id='.$user_Id.' ');
        		}
        }
    }


    



?>