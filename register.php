<?php include 'topbar.php'; ?>

<body class="hold-transition register-page">
<div class="register-box"  style="width: 70%;">
  <div class="card card-outline card-primary mt-5 mb-5" >
    <div class="card-header text-center">
      <a href="../../index2.html" class="h1"><b>Child Immunization Vaccine</b> Record System</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>
      <hr>
      <form action="register_code.php" method="post" enctype="multipart/form-data">

        <div class="row">
          <div class="col-lg-3">
              <div class="form-group">
                <label>First name</label>
                <input type="text" class="form-control form-control-sm"  placeholder="First name" name="firstname" required onkeyup="lettersOnly(this)">
              </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
                <label>Middle name</label>
                <input type="text" class="form-control form-control-sm"  placeholder="Middle name" name="middlename" required onkeyup="lettersOnly(this)">
            </div>
          </div>
          <div class="col-lg-3">
              <div class="form-group">
                <label>Last name</label>
                <input type="text" class="form-control form-control-sm"  placeholder="Last name" name="lastname" required onkeyup="lettersOnly(this)">
              </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label>Suffix name</label>
              <input type="text" class="form-control form-control-sm"  placeholder="Jr./Sr." name="suffix" onkeyup="lettersOnly(this)">
            </div>
          </div>
          <div class="col-lg-3">
            <div class="form-group">
              <label>Gender</label>
              <select class="form-control form-control-sm" name="gender" required>
                <option selected disabled>Select gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
              </select>
            </div>
          </div>
          <div class="col-lg-4">
              <div class="form-group">
                <label>Date of Birth</label>
                <input type="date" class="form-control form-control-sm"  placeholder="Birth date" name="dob" required>
              </div>
          </div>
          <div class="col-lg-2">
              <div class="form-group">
                <label>Age</label>
                <input type="number" class="form-control form-control-sm"  placeholder="Age" name="age" required>
              </div>
          </div>
          <div class="col-lg-3">
               <div class="form-group">
                  <label>Contact</label>
                  <input type="number" class="form-control form-control-sm"  placeholder="9123456789" pattern="[7-9]{1}[0-9]{9}" name="contact" required >
               </div>
          </div>
          <div class="col-lg-4">
              <div class="form-group">
          <label>Email address</label>
          <input type="email" class="form-control form-control-sm"  placeholder="name@mail.com" name="email" required>
        </div>
          </div>
          <div class="col-lg-8">
              <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control form-control-sm"  placeholder="Address" name="address" required>
              </div>
          </div>
          <div class="col-lg-4">
              <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control form-control-sm"  placeholder="Password" name="password" required id="password">
              </div>
          </div>
          <div class="col-lg-4">
              <div class="form-group">
                <label>Confirm password</label>
                <input type="password" class="form-control form-control-sm" placeholder="Confirm password" name="cpassword" required id="cpassword" onkeyup="validate_password()">
                <small id="wrong_pass_alert"></small>
              </div>
          </div>
   <!--        <div class="col-lg-4">
              <div class="form-group">
                <label>Image</label>
                <input type="file" class="form-control-file form-control-sm" name="fileToUpload" onchange="getImagePreview(event)">
              </div>
          </div> -->
         
      </div>
      <br>
      <big class="mt-2 text-secondary"><b>Parent's information</b></big>
      <hr>
        <div class="row">
            <div class="col-lg-8">
                <div class="form-group">
                  <label>Mother's name</label>
                  <input type="text" class="form-control form-control-sm"  placeholder="Enter full name" name="mothersname" required>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                  <label>Mother's contact number</label>
                  <input type="number" class="form-control form-control-sm"  placeholder="Enter contact number" name="mothersnumber" required>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                  <label>Mother's address</label>
                  <input type="text" class="form-control form-control-sm"  placeholder="Enter address" name="mothersaddress" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8">
                <div class="form-group">
                  <label>Father's name</label>
                  <input type="text" class="form-control form-control-sm" placeholder="Enter full name" name="fathersname" required>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="form-group">
                  <label>Father's contact number</label>
                  <input type="number" class="form-control form-control-sm" placeholder="Enter contact number" name="fathersnumber" required>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                  <label>Father's address</label>
                  <input type="text" class="form-control form-control-sm" placeholder="Enter address" name="fathersaddress" required>
                </div>
            </div>
        </div>

      <br>  
      <big class="mt-2 text-secondary"><b>Child's Medical information</b></big>
      <hr>
        <div class="row">
            <div class="col-lg-12">
                <div class="form-group">
                  <label>Birthplace (Hospital/Address)</label>
                  <input type="text" class="form-control form-control-sm"  placeholder="Place of Birth" name="birthplace" required>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                  <label>Medications (If none, write NA.)</label>
                  <input type="text" class="form-control form-control-sm"  placeholder="Medications" name="medications">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-group">
                  <label>Allergies (If none, write NA.)</label>
                  <input type="text" class="form-control form-control-sm"  placeholder="Allergies" name="allergies">
                </div>
            </div>
        </div>

      <big class="mt-2 text-secondary"><b>Child's Medical information</b></big>
      <hr>
      <div class="row">
        <div class="col-lg-12">
            <div class="form-group">
              <label>Attach file (Scanned printed child's medical background form other hospital required by the personnel)</label>
              <input type="file" class="form-control form-control-sm"  name="fileToUpload" required onchange="getImagePreview(event)">
            </div>
        </div>
         <!-- LOAD IMAGE PREVIEW -->
          <div class="col-lg-12 mb-2">
              <div class="form-group" id="preview">
              </div>
          </div>
      </div>
        
        <div class="col-lg-12">
           <button type="submit" class="btn btn-info" name="create_user" id="usercreate"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
           <hr>
           <p>Already have an account? <a href="login.php">Click here!</a></p>
        </div>

        </div>
      </form>

      

      
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<?php include 'footer.php'; include 'sweetalert_messages.php'; ?>
<script>
     function getImagePreview(event)
  {
    var image=URL.createObjectURL(event.target.files[0]);
    var imagediv= document.getElementById('preview');
    var newimg=document.createElement('img');
    imagediv.innerHTML='';
    newimg.src=image;
    newimg.width="90";
    newimg.height="90";
    newimg.style['border-radius']="50%";
    newimg.style['display']="block";
    newimg.style['margin-left']="auto";
    newimg.style['margin-right']="auto";
    newimg.style['box-shadow']="rgba(100, 100, 111, 0.2) 0px 7px 29px 0px";
    imagediv.appendChild(newimg);
  }

</script>
<script>
    function validate_password() {

      var pass = document.getElementById('password').value;
      var confirm_pass = document.getElementById('cpassword').value;
      if (pass != confirm_pass) {
        document.getElementById('wrong_pass_alert').style.color = 'red';
        document.getElementById('wrong_pass_alert').innerHTML = 'X Password did not matched!';
        document.getElementById('usercreate').disabled = true;
        document.getElementById('usercreate').style.opacity = (0.4);
      } else {
        document.getElementById('wrong_pass_alert').style.color = 'green';
        document.getElementById('wrong_pass_alert').innerHTML = '✓ Password matched!';
        document.getElementById('usercreate').disabled = false;
        document.getElementById('usercreate').style.opacity = (1);
      }
    }



    function lettersOnly(input) {
      var regex = /[^a-z ]/gi;
      input.value = input.value.replace(regex, "");
    }
</script>