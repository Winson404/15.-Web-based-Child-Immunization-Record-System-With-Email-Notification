
<!-- ****************************************************UPDATE*********************************************************************** -->
<!-- Modal -->
<div class="modal fade" id="add_user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
    <div class="modal-content">
      <div class="modal-header alert-info">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-syringe"></i> Update Immunization Vaccination</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa-solid fa-circle-xmark"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <form action="process_save.php" method="POST" enctype="multipart/form-data">
        
            <input type="hidden" class="form-control" name="user_Id" value="<?php echo $user_Id; ?>">

            <div class="form-group">
              <label>Bakuna</label>
              <select class="form-control form-control-sm" name="vaccine_Id" required>
                <option selected disabled>Select here</option>
              <?php 
                  $fetch = mysqli_query($conn, "SELECT * FROM vaccine");
                  while ($row = mysqli_fetch_array($fetch)) {
              ?>
                <option value="<?php echo $row['vaccine_Id']; ?>"><?php echo $row['Vaccine']; ?></option>
              <?php } ?>
              </select>
            </div>
            
           <!--  <div class="form-group">
              <label>Pagkapanganak</label>
              <select class="form-control form-control-sm" name="Pagkapanganak" required>
                <option selected disabled>Select here</option>
                <option value="Done">Done</option>
                <option  value="Not yet" >Not yet</option>
              </select>
            </div>

            <div class="form-group">
              <label>1 ½ Buwan</label>
              <select class="form-control form-control-sm" name="1_month" required>
                <option selected disabled>Select here</option>
                <option value="Done">Done</option>
                <option  value="Not yet" >Not yet</option>
              </select>
            </div>

            <div class="form-group">
              <label>2 ½ Buwan</label>
              <select class="form-control form-control-sm" name="2_month" required>
                <option selected disabled>Select here</option>
                <option value="Done">Done</option>
                <option  value="Not yet" >Not yet</option>
              </select>
            </div>

            <div class="form-group">
              <label>3 ½ Buwan</label>
              <select class="form-control form-control-sm" name="3_month" required>
                <option selected disabled>Select here</option>
                <option value="Done">Done</option>
                <option  value="Not yet" >Not yet</option>
              </select>
            </div>

            <div class="form-group">
              <label>9 Buwan</label>
              <select class="form-control form-control-sm" name="9_month" required>
                <option selected disabled>Select here</option>
                <option value="Done">Done</option>
                <option  value="Not yet" >Not yet</option>
              </select>
            </div>

            <div class="form-group">
              <label>1 year</label>
              <select class="form-control form-control-sm" name="1_year" required>
                <option selected disabled>Select here</option>
                <option value="Done">Done</option>
                <option  value="Not yet" >Not yet</option>
              </select>
            </div> -->
     
      </div>
      <div class="modal-footer alert-light">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-ban"></i> Cancel</button>
        <button type="submit" class="btn btn-info" name="save_record" id="usercreate"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>





<div class="modal fade" id="delete<?php echo $row['vaccine_Id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
    <div class="modal-content">
      <div class="modal-header alert-info">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-syringe"></i> Delete Immunization Vaccination</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa-solid fa-circle-xmark"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <form action="process_delete.php" method="POST" enctype="multipart/form-data">
        
            <input type="hidden" class="form-control" name="vaccine_Id" value="<?php echo $row['vaccine_Id']; ?>">
            <h6 class="text-center">Delete Immunization Vaccination?</h6>
     
      </div>
      <div class="modal-footer alert-light">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-ban"></i> Cancel</button>
        <button type="submit" class="btn btn-info" name="delete_vaccine"><i class="fa-solid fa-trash-can"></i> Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>








