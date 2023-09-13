
<!-- ****************************************************CREATE*********************************************************************** -->
<!-- Modal -->
<div class="modal fade" id="add_user" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
    <div class="modal-content">
      <div class="modal-header alert-info">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-calendar-days"></i> Add schedule</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa-solid fa-circle-xmark"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <form action="process_save.php" method="POST" enctype="multipart/form-data">
        
            <div class="form-group">
              <label>Children information</label>
              <select class="form-control form-control-sm" name="user_Id" required>
                <option selected disabled>Select child</option>
                <?php 
                  $fetch = mysqli_query($conn, "SELECT * FROM users");
                  while ($row = mysqli_fetch_array($fetch)) {
                ?>
                <option value="<?php echo $row['user_Id']; ?>"><?php echo ' '.$row['user_firstname'].' '.$row['user_middlename'].' '.$row['user_lastname'].' '.$row['user_suffix'].' '; ?></option>
              <?php } ?>
              </select>
            </div>

            <div class="form-group">
                <label>Date</label>
                <input type="date" class="form-control form-control-sm" name="date" required>
              </div>
        
            <div class="form-group">
              <label>Time</label>
                <input type="Time" class="form-control form-control-sm" name="time" required>
            </div>
     
      </div>
      <div class="modal-footer alert-light">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-ban"></i> Cancel</button>
        <button type="submit" class="btn btn-info" name="create_schedule" id="usercreate"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>







