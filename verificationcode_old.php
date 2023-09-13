<?php 
    include 'topbar.php'; 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    require 'vendor/PHPMailer/src/Exception.php';
    require 'vendor/PHPMailer/src/PHPMailer.php';
    require 'vendor/PHPMailer/src/SMTP.php';
?>

<body class="hold-transition login-page">
  <div class="login-box">

  <?php 
      if(isset($_POST['sendcode'])) {

      $email = $_POST['email'];
      $fetch = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
      $row   = mysqli_fetch_array($fetch);
      $code = $row['verification_code'];

      $subject = 'Verification code';
      $message = '<p>Good day sir/maam '.$email.', your verification code is <b>'.$code.'</b>. Please do not share this code to other people. Thank you!</p>';

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
  ?>

          <!-- /.login-logo -->
          <div class="card card-outline card-primary">
            <div class="card-header text-center">
              <a href="#" class="h3"><b>Enter security code</b></a>
            </div>
            <div class="card-body">
              <p class="login-box-msg">Please check your email for a message with your code. Your code is 6 numbers long.</p>
              <form action="changepassword.php" method="POST">
                <div class="row">
                  <div class="col-md-12">
                    <div class="input-group mb-3">
                      <input type="hidden" class="form-control" value="<?php echo $email; ?>" name="email">
                      <input type="text" class="form-control" placeholder="Enter code" name="code">
                      <div class="input-group-append">
                        <div class="input-group-text">
                          <i class="fa-solid fa-key"></i>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="input-group">
                      <p>We sent your code to: <b><?php echo $email; ?></b></p>
                    </div>
                  </div>
                </div>
              <div class="social-auth-links text-center">
                <button class="btn btn-block btn-primary" type="submit" name="verify_code">Continue</button>
                <a href="sendcode2.php?email=<?php echo $email; ?>" class="mt-1">Didn't get a code?</a>
                <hr>
                <p class="mt-1"><a href="login.php" class="text-center">Back to login page</a></p>  
              </div>
              </form>
            </div>
          </div>
          
           
  <?php
          } catch (Exception $e) {
  ?>

          <div class="card card-outline card-primary">
            <div class="card-header text-center">
              <a href="#" class="h1"><b>Email not sent.</b></a>
            </div>
            <div class="card-body">
              <h5 class="login-box-msg">Sorry, something went wrong while sending an email to <b><?php echo $email; ?></b>.</h5>
              <div class="social-auth-links text-center mt-4">
                <a class="btn btn-block btn-primary" href="forgotpassword.php">Back</a>
              </div>
            </div>
          </div>

  <?php          
          }

      } else {

  ?>

      <div class="card card-outline card-primary">
        <div class="card-header text-center">
          <a href="#" class="h1"><b>500 ERROR</b></a>
        </div>
        <div class="card-body">
          <h5 class="login-box-msg">Sorry, unexpected error. Please try again later,</b>.</h5>
          <div class="social-auth-links text-center mt-4">
            <a class="btn btn-block btn-primary" href="forgotpassword.php">Back</a>
          </div>
        </div>
      </div>

  <?php 

    }

  ?>  
</div>

<?php include 'footer.php'; ?>
