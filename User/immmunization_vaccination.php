<title>Immunization Vaccination record | Child Immunization Vaccine Record System</title>


<?php 
  include 'navbar.php';
?>

   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row">
          <div class="col-sm-6">
            <h1>Immunization Vaccination record</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
              <li class="breadcrumb-item active">Immunization Vaccination record</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <div class="d-flex">
                  <!-- <button type="button" class="btn btn-info" data-toggle="modal" data-target="#add_user"><i class="bi bi-plus-circle"></i> Add</button> -->

                  <?php if(isset($_SESSION['success'])) { ?> 
                      <h3 class="alert card-title position-absolute py-2 alert-success rounded p-1" role="alert" style="right: 20px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;"><?php echo $_SESSION['success']; ?></h3>
                  <?php unset($_SESSION['success']); } ?>


                  <?php if(isset($_SESSION['invalid']) && isset($_SESSION['error'])) { ?>
                      <h3 class="alert card-title position-absolute py-2 alert-danger rounded p-1" role="alert" style="right: 20px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;"><?php echo $_SESSION['invalid']; ?> <?php echo $_SESSION['error']; ?></h3>
                  <?php unset($_SESSION['invalid']);  unset($_SESSION['error']);  } ?>


                  <?php  if(isset($_SESSION['exists'])) { ?>
                      <h3 class="alert card-title position-absolute py-2 alert-danger rounded p-1" role="alert" style="right: 20px; box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;"><?php echo $_SESSION['exists']; ?></h3>
                  <?php unset($_SESSION['exists']); } ?>
                  
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                    <tr>
                      <th>Bakuna</th>
                      <th>Sakit na Maiwasan</th>
                      <th>Pagkapanganak</th>
                      <th>1 ½ Buwan</th>
                      <th>2 ½ Buwan</th>
                      <th>3 ½ Buwan</th>
                      <th>9 Buwan</th>
                      <th>1 Taon</th>
                    </tr>
                  </thead>
                  <tbody id="users_data">
                    <tr>
                      <?php 
                        $sql = mysqli_query($conn, "SELECT * FROM vaccine JOIN user_vaccine_record ON vaccine.vaccine_Id=user_vaccine_record.vaccine_Id WHERE user_vaccine_record.user_Id='$id'");
                        while ($row = mysqli_fetch_array($sql)) {

                      ?>

                        <td><?php echo $row['Vaccine']; ?></td>
                        <td><?php echo $row['sakit_na_maiwasan']; ?></td>

                        <td class="text-center">
                          <?php if($row['pagkapanganak'] == 'Done'): ?>
                            ✅
                          <?php endif; ?>
                        </td>

                        <td class="text-center">
                          <?php if($row['1_month'] == 'Done'): ?>
                            ✅
                          <?php endif; ?>
                        </td>

                        <td class="text-center">
                          <?php if($row['2_month'] == 'Done'): ?>
                            ✅
                          <?php endif; ?>
                        </td>

                        <td class="text-center">
                          <?php if($row['3_month'] == 'Done'): ?>
                            ✅
                          <?php endif; ?>
                        </td>

                        <td class="text-center">
                          <?php if($row['9_month'] == 'Done'): ?>
                            ✅
                          <?php endif; ?>
                        </td>

                        <td class="text-center">
                          <?php if($row['1_year'] == 'Done'): ?>
                            ✅
                          <?php endif; ?>
                        </td>

                    </tr>

                    <?php }  ?>

                  </tbody>
                  <!-- <tfoot>
                     <tr>
                        <th>Bakuna</th>
                        <th>Sakit na Maiwasan</th>
                        <th>Pagkapanganak</th>
                        <th>1 ½ Buwan</th>
                        <th>2 ½ Buwan</th>
                        <th>3 ½ Buwan</th>
                        <th>9 Buwan</th>
                        <th>1 Taon</th>
                        <th>Tools</th>
                    </tr>
                  </tfoot> -->
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>


 <?php //include 'immunization_vaccination_add.php';  ?>
 <?php include 'footer.php'; //include 'sweetalert_messages.php'; ?>



