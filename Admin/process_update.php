<?php 
	
	  use PHPMailer\PHPMailer\PHPMailer;
		use PHPMailer\PHPMailer\Exception;

		require '../vendor/PHPMailer/src/Exception.php';
		require '../vendor/PHPMailer/src/PHPMailer.php';
		require '../vendor/PHPMailer/src/SMTP.php';

	session_start();
	include '../config.php';

	// UPDATE USER
	if(isset($_POST['update_user'])) {

		$user_Id         = $_POST['user_Id'];
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
		$mothersname		 = $_POST['mothersname'];
		$mothersnumber   = $_POST['mothersnumber'];
		$mothersaddress  = $_POST['mothersaddress'];
		$fathersname     = $_POST['fathersname'];
		$fathersnumber   = $_POST['fathersnumber'];
		$fathersaddress  = $_POST['fathersaddress'];
		$birthplace      = $_POST['birthplace'];
		$medications     = $_POST['medications'];
		$allergies       = $_POST['allergies'];
		// $file       = basename($_FILES["fileToUpload"]["name"]);

		// if(empty($file)) {

					$save = mysqli_query($conn, "UPDATE users SET user_firstname='$firstname', user_middlename='$middlename', user_lastname='$lastname', user_suffix='$suffix', gender='$gender', dob='$dob', age='$age', address='$address', email='$email', contact='$contact', mothers_name='$mothersname', mothers_number='$mothersnumber', mothers_address='$mothersaddress', fathers_name='$fathersname', fathers_number='$fathersnumber', fathers_address='$fathersaddress', birthplace_hospital_address='$birthplace', medications='$medications', allergies='$allergies' WHERE user_Id='$user_Id'");
		            if($save) {
                	$_SESSION['message'] = "User information has been updated!";
			            $_SESSION['text'] = "Updated successfully!";
					        $_SESSION['status'] = "success";
									header("Location: users.php");
                } else {
                  $_SESSION['message'] = "Something went wrong while updating the information.";
			            $_SESSION['text'] = "Please try again.";
					        $_SESSION['status'] = "error";
									header("Location: users.php");
                }

		// } else {

		//           $target_dir = "../images-users/";
		//           $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
		//           $uploadOk = 1;
		//           $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        

  //                 if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
  //                 $_SESSION['message']  = "Only JPG, JPEG, PNG & GIF files are allowed.";
		// 	            $_SESSION['text'] = "Please try again.";
		// 			        $_SESSION['status'] = "error";
		// 							header("Location: users.php");
  //                 $uploadOk = 0;
  //                 }

  //                 if ($uploadOk == 0) {
  //                 $_SESSION['message']  = "Your file was not uploaded.";
		// 	            $_SESSION['text'] = "Please try again.";
		// 			        $_SESSION['status'] = "error";
		// 							header("Location: users.php");
  //                 } else {
  //                     if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
	 //                      	$save = mysqli_query($conn, "UPDATE users SET user_firstname='$firstname', user_middlename='$middlename', user_lastname='$lastname', user_suffix='$suffix', gender='$gender', dob='$dob', age='$age', address='$address', email='$email', contact='$contact', image='$file', mothers_name='$mothersname', mothers_number='$mothersnumber', mothers_address='$mothersaddress', fathers_name='$fathersname', fathers_number='$fathersnumber', fathers_address='$fathersaddress', birthplace_hospital_address='$birthplace', medications='$medications', allergies='$allergies' WHERE user_Id='$user_Id'");
		// 					            if($save) {
		// 			                	$_SESSION['message'] = "User information has been updated!";
		// 						            $_SESSION['text'] = "Updated successfully!";
		// 								        $_SESSION['status'] = "success";
		// 												header("Location: users.php");
		// 			                } else {
		// 			                  $_SESSION['message'] = "Something went wrong while updating the information.";
		// 						            $_SESSION['text'] = "Please try again.";
		// 								        $_SESSION['status'] = "error";
		// 												header("Location: users.php");
		// 			                }
  //                     } else {
  //                           $_SESSION['message'] = "There was an error uploading your file.";
		// 						            $_SESSION['text'] = "Please try again.";
		// 								        $_SESSION['status'] = "error";
		// 												header("Location: users.php");
  //                     }

		// 		 }

		// }

	}






	// CHANGE USER PASSWORD
	if(isset($_POST['password_user'])) {

    	$user_Id  = $_POST['user_Id'];
    	$OldPassword = md5($_POST['OldPassword']);
    	$password    = md5($_POST['password']);
    	$cpassword   = md5($_POST['cpassword']);

    	$check_old_password = mysqli_query($conn, "SELECT * FROM users WHERE password='$OldPassword' AND user_Id='$user_Id'");

    	// CHECK IF THERE IS MATCHED PASSWORD IN THE DATABASE COMPARED TO THE ENTERED OLD PASSWORD
    	if(mysqli_num_rows($check_old_password) === 1 ) {
    				// COMPARE BOTH NEW AND CONFIRM PASSWORD
		    		if($password != $cpassword) {
		    				$_SESSION['message']  = "Password does not matched. Please try again";
		            $_SESSION['text'] = "Please try again.";
				        $_SESSION['status'] = "error";
								header("Location: users.php");
		    		} else {
			    			$update_password = mysqli_query($conn, "UPDATE users SET password='$password' WHERE user_Id='$user_Id' ");

			    			if($update_password) {
                	$_SESSION['message'] = "Password has been changed.";
			            $_SESSION['text'] = "Updated successfully!";
					        $_SESSION['status'] = "success";
									header("Location: users.php");
                } else {
                  $_SESSION['message'] = "Something went wrong while changing the password.";
			            $_SESSION['text'] = "Please try again.";
					        $_SESSION['status'] = "error";
									header("Location: users.php");
                }
		    		}
    	} else {
    				$_SESSION['message']  = "Old password is incorrect.";
            $_SESSION['text'] = "Please try again.";
		        $_SESSION['status'] = "error";
						header("Location: users.php");
    	}

    }







  // APPROVE PATIENT ACCOUNT
	if(isset($_POST['approve_user'])) {
		$user_Id = $_POST['user_Id'];
		$user_email  = $_POST['email'];

		$delete = mysqli_query($conn, "UPDATE users SET user_status='Confirmed' WHERE User_Id='$user_Id'");
		if($delete) {


							$email   = $user_email ;
					    $subject = 'Account approved!';
					    $message = '<h3>Congratulations!</h3>
													<p>Good day sir/maam , we have successfully approved your account. Thank you!</p>';

									//Load composer's autoloader

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

                      $_SESSION['message'] = "Child's account has been approved!";
					            $_SESSION['text'] = "Approval successful!";
							        $_SESSION['status'] = "success";
											header("Location: users.php");
									

							    } catch (Exception $e) {
							    	$_SESSION['message']  = "Message could not be sent. Mailer Error: ".$mail->ErrorInfo;
				            $_SESSION['text'] = "Please try again.";
						        $_SESSION['status'] = "error";
										header("Location: users.php");
							    }

		} else {
						$_SESSION['message'] = "Something went wrong while updating the record.";
            $_SESSION['text'] = "Please try again.";
		        $_SESSION['status'] = "error";
						header("Location: users.php");
		}
	}









  // ARCHIVAL PATIENT ACCOUNT
	if(isset($_POST['archive_user'])) {
		$user_Id = $_POST['user_Id'];
		$user_email  = $_POST['email'];

		$delete = mysqli_query($conn, "UPDATE users SET archival='Yes' WHERE User_Id='$user_Id'");
		if($delete) {
					  $_SESSION['message'] = "Child's account has been moved to archive!";
	          $_SESSION['text'] = "Archival successful!";
		        $_SESSION['status'] = "success";
						header("Location: users.php");
		} else {
						$_SESSION['message'] = "Something went wrong while updating the record.";
            $_SESSION['text'] = "Please try again.";
		        $_SESSION['status'] = "error";
						header("Location: users.php");
		}
	}









     // UPDATE ADMIN
	if(isset($_POST['update_admin'])) {

		$admin_Id    = $_POST['admin_Id'];
		$firstname  = $_POST['firstname'];
		$middlename = $_POST['middlename'];
		$lastname   = $_POST['lastname'];
		$suffix    = $_POST['suffix'];
		$gender     = $_POST['gender'];
		$dob        = $_POST['dob'];
		$age        = $_POST['age'];
		$contact    = $_POST['contact'];
		$email      = $_POST['email'];
		$address    = $_POST['address'];
		$file       = basename($_FILES["fileToUpload"]["name"]);

		if(empty($file)) {

					$save = mysqli_query($conn, "UPDATE admin SET firstname='$firstname', middlename='$middlename', lastname='$lastname', suffix='$suffix', gender='$gender', dob='$dob', age='$age', address='$address', email='$email', contact='$contact' WHERE admin_Id='$admin_Id'");
		            if($save) {
			                $_SESSION['message']  = "Admin information has been updated!";
					            $_SESSION['text'] = "Updated successfully!";
							        $_SESSION['status'] = "success";
											header("Location: admin.php");                          
		            } else {
			                $_SESSION['message'] = "Something went wrong while saving the information.";
					            $_SESSION['text'] = "Please try again.";
							        $_SESSION['status'] = "error";
											header("Location: admin.php");
		            }

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
	                      	$save = mysqli_query($conn, "UPDATE admin SET firstname='$firstname', middlename='$middlename', lastname='$lastname', suffix='$suffix', gender='$gender', dob='$dob', age='$age', address='$address', email='$email', contact='$contact', image='$file' WHERE admin_Id='$admin_Id'");
				           
							            if($save) {
					                	$_SESSION['message'] = "Admin information has been updated!";
								            $_SESSION['text'] = "Updated successfully!";
										        $_SESSION['status'] = "success";
														header("Location: admin.php");
					                } else {
					                  $_SESSION['message'] = "Something went wrong while updating the information.";
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




	// CHANGE ADMIN PASSWORD
	if(isset($_POST['password_admin'])) {

    	$admin_Id    = $_POST['admin_Id'];	
    	$OldPassword = md5($_POST['OldPassword']);
    	$password    = md5($_POST['password']);
    	$cpassword   = md5($_POST['cpassword']);

    	$check_old_password = mysqli_query($conn, "SELECT * FROM admin WHERE password='$OldPassword' AND admin_Id='$admin_Id'");

    	// CHECK IF THERE IS MATCHED PASSWORD IN THE DATABASE COMPARED TO THE ENTERED OLD PASSWORD
    	if(mysqli_num_rows($check_old_password) === 1 ) {
    				// COMPARE BOTH NEW AND CONFIRM PASSWORD
		    		if($password != $cpassword) {
		    				$_SESSION['message']  = "Password does not matched. Please try again";
		            $_SESSION['text'] = "Please try again.";
				        $_SESSION['status'] = "error";
								header("Location: admin.php");
		    		} else {
			    			$update_password = mysqli_query($conn, "UPDATE admin SET password='$password' WHERE admin_Id='$admin_Id' ");

			    			if($update_password) {
                	$_SESSION['message'] = "Password has been changed.";
			            $_SESSION['text'] = "Updated successfully!";
					        $_SESSION['status'] = "success";
									header("Location: admin.php");
                } else {
                  $_SESSION['message'] = "Something went wrong while changing the password.";
			            $_SESSION['text'] = "Please try again.";
					        $_SESSION['status'] = "error";
									header("Location: admin.php");
                }
		    		}
    	} else {
    				$_SESSION['message']  = "Old password is incorrect.";
            $_SESSION['text'] = "Please try again.";
		        $_SESSION['status'] = "error";
						header("Location: admin.php");
    	}

    }





    if(isset($_POST['update_schedule'])) {

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




if(isset($_POST['pagkapanganak'])) {

				$user_Id			 = $_POST['user_Id'];
				$vaccine_Id    = $_POST['vaccine_Id'];
				$Pagkapanganak = $_POST['Pagkapanganak'];

        $save = mysqli_query($conn, "UPDATE user_vaccine_record SET pagkapanganak='$Pagkapanganak' WHERE vaccine_Id='$vaccine_Id'");
        		if($save) {

        			 $_SESSION['message'] = "You have successfully updated a vaccination record.";
				       $_SESSION['text'] = "Updated successfully!";
				       $_SESSION['status'] = "success";
							 header('Location: immmunization_vaccination.php?user_Id='.$user_Id.'');

        		} else {

        				$_SESSION['message'] = "Something went wrong while updating the information.";
					      $_SESSION['text'] = "Please try again.";
					      $_SESSION['status'] = "error";
								header('Location: immmunization_vaccination.php?user_Id='.$user_Id.'');

        		}

    }



    if(isset($_POST['one_month'])) {

				$user_Id			 = $_POST['user_Id'];
				$vaccine_Id    = $_POST['vaccine_Id'];
				$one_month     = $_POST['one_month'];

        $save = mysqli_query($conn, "UPDATE user_vaccine_record SET 1_month='Done' WHERE vaccine_Id='$vaccine_Id'");
        		if($save) {

        			 $_SESSION['message'] = "You have successfully updated a vaccination record.";
				       $_SESSION['text'] = "Updated successfully!";
				       $_SESSION['status'] = "success";
							 header('Location: immmunization_vaccination.php?user_Id='.$user_Id.'');

        		} else {

        				$_SESSION['message'] = "Something went wrong while updating the information.";
					      $_SESSION['text'] = "Please try again.";
					      $_SESSION['status'] = "error";
								header('Location: immmunization_vaccination.php?user_Id='.$user_Id.'');

        		}

    }




    if(isset($_POST['two_month'])) {

				$user_Id			 = $_POST['user_Id'];
				$vaccine_Id    = $_POST['vaccine_Id'];
				$two_month     = $_POST['two_month'];

        $save = mysqli_query($conn, "UPDATE user_vaccine_record SET 2_month='Done' WHERE vaccine_Id='$vaccine_Id'");
        		if($save) {

        			 $_SESSION['message'] = "You have successfully updated a vaccination record.";
				       $_SESSION['text'] = "Updated successfully!";
				       $_SESSION['status'] = "success";
							 header('Location: immmunization_vaccination.php?user_Id='.$user_Id.'');

        		} else {

        				$_SESSION['message'] = "Something went wrong while updating the information.";
					      $_SESSION['text'] = "Please try again.";
					      $_SESSION['status'] = "error";
								header('Location: immmunization_vaccination.php?user_Id='.$user_Id.'');

        		}

    }



    if(isset($_POST['three_month'])) {

				$user_Id			 = $_POST['user_Id'];
				$vaccine_Id    = $_POST['vaccine_Id'];
				$three_month     = $_POST['three_month'];

        $save = mysqli_query($conn, "UPDATE user_vaccine_record SET 3_month='Done' WHERE vaccine_Id='$vaccine_Id'");
        		if($save) {

        			 $_SESSION['message'] = "You have successfully updated a vaccination record.";
				       $_SESSION['text'] = "Updated successfully!";
				       $_SESSION['status'] = "success";
							 header('Location: immmunization_vaccination.php?user_Id='.$user_Id.'');

        		} else {

        				$_SESSION['message'] = "Something went wrong while updating the information.";
					      $_SESSION['text'] = "Please try again.";
					      $_SESSION['status'] = "error";
								header('Location: immmunization_vaccination.php?user_Id='.$user_Id.'');

        		}

    }




    if(isset($_POST['nine_month'])) {

				$user_Id			 = $_POST['user_Id'];
				$vaccine_Id    = $_POST['vaccine_Id'];
				$nine_month     = $_POST['nine_month'];

        $save = mysqli_query($conn, "UPDATE user_vaccine_record SET 9_month='Done' WHERE vaccine_Id='$vaccine_Id'");
        		if($save) {

        			 $_SESSION['message'] = "You have successfully updated a vaccination record.";
				       $_SESSION['text'] = "Updated successfully!";
				       $_SESSION['status'] = "success";
							 header('Location: immmunization_vaccination.php?user_Id='.$user_Id.'');

        		} else {

        				$_SESSION['message'] = "Something went wrong while updating the information.";
					      $_SESSION['text'] = "Please try again.";
					      $_SESSION['status'] = "error";
								header('Location: immmunization_vaccination.php?user_Id='.$user_Id.'');

        		}

    }




    if(isset($_POST['one_year'])) {

				$user_Id			 = $_POST['user_Id'];
				$vaccine_Id    = $_POST['vaccine_Id'];
				$one_year     = $_POST['one_year'];

        $save = mysqli_query($conn, "UPDATE user_vaccine_record SET 1_year='Done' WHERE vaccine_Id='$vaccine_Id'");
        		if($save) {

        			 $_SESSION['message'] = "You have successfully updated a vaccination record.";
				       $_SESSION['text'] = "Updated successfully!";
				       $_SESSION['status'] = "success";
							 header('Location: immmunization_vaccination.php?user_Id='.$user_Id.'');

        		} else {

        				$_SESSION['message'] = "Something went wrong while updating the information.";
					      $_SESSION['text'] = "Please try again.";
					      $_SESSION['status'] = "error";
								header('Location: immmunization_vaccination.php?user_Id='.$user_Id.'');

        		}

    }













?>