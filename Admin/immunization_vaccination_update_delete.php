
<!-- ****************************************************UPDATE*********************************************************************** -->
<!-- Modal -->
<div class="modal fade" id="pagkapanganak<?php echo $row['vaccine_Id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
    <div class="modal-content">
      <div class="modal-header alert-info">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-syringe"></i> Update Immunization Vaccination</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa-solid fa-circle-xmark"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <form action="process_update.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" class="form-control" name="user_Id" value="<?php echo $user_Id; ?>">
            <input type="hidden" class="form-control" name="vaccine_Id" value="<?php echo $row['vaccine_Id']; ?>">
            <div class="form-group">
              <label>Pagkapanganak</label>
              <select class="form-control form-control-sm" name="Pagkapanganak" required>
                <option value="Done" selected>Done</option>
              </select>
            </div>
      </div>
      <div class="modal-footer alert-light">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-ban"></i> Cancel</button>
        <button type="submit" class="btn btn-info" name="pagkapanganak" id="usercreate"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>




<!-- ****************************************************UPDATE*********************************************************************** -->
<!-- Modal -->
<div class="modal fade" id="one_month<?php echo $row['vaccine_Id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
    <div class="modal-content">
      <div class="modal-header alert-info">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-syringe"></i> Update Immunization Vaccination</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa-solid fa-circle-xmark"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <form action="process_update.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" class="form-control" name="user_Id" value="<?php echo $user_Id; ?>">
            <input type="hidden" class="form-control" name="vaccine_Id" value="<?php echo $row['vaccine_Id']; ?>">
            <div class="form-group">
              <label>1 ½ na Buwan</label>
              <select class="form-control form-control-sm" name="one_month" required>
                <option value="Done" selected>Done</option>
              </select>
            </div>
      </div>
      <div class="modal-footer alert-light">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-ban"></i> Cancel</button>
        <button type="submit" class="btn btn-info" name="one_month" id="usercreate"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>



<div class="modal fade" id="two_month<?php echo $row['vaccine_Id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
    <div class="modal-content">
      <div class="modal-header alert-info">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-syringe"></i> Update Immunization Vaccination</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa-solid fa-circle-xmark"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <form action="process_update.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" class="form-control" name="user_Id" value="<?php echo $user_Id; ?>">
            <input type="hidden" class="form-control" name="vaccine_Id" value="<?php echo $row['vaccine_Id']; ?>">
            <div class="form-group">
              <label>2 ½ na Buwan</label>
              <select class="form-control form-control-sm" name="two_month" required>
                <option value="Done" selected>Done</option>
              </select>
            </div>
      </div>
      <div class="modal-footer alert-light">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-ban"></i> Cancel</button>
        <button type="submit" class="btn btn-info" name="two_month" id="usercreate"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="three_month<?php echo $row['vaccine_Id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
    <div class="modal-content">
      <div class="modal-header alert-info">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-syringe"></i> Update Immunization Vaccination</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa-solid fa-circle-xmark"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <form action="process_update.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" class="form-control" name="user_Id" value="<?php echo $user_Id; ?>">
            <input type="hidden" class="form-control" name="vaccine_Id" value="<?php echo $row['vaccine_Id']; ?>">
            <div class="form-group">
              <label>3 ½ na Buwan</label>
              <select class="form-control form-control-sm" name="three_month" required>
                <option value="Done" selected>Done</option>
              </select>
            </div>
      </div>
      <div class="modal-footer alert-light">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-ban"></i> Cancel</button>
        <button type="submit" class="btn btn-info" name="three_month" id="usercreate"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="nine_month<?php echo $row['vaccine_Id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
    <div class="modal-content">
      <div class="modal-header alert-info">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-syringe"></i> Update Immunization Vaccination</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa-solid fa-circle-xmark"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <form action="process_update.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" class="form-control" name="user_Id" value="<?php echo $user_Id; ?>">
            <input type="hidden" class="form-control" name="vaccine_Id" value="<?php echo $row['vaccine_Id']; ?>">
            <div class="form-group">
              <label>9 na Buwan</label>
              <select class="form-control form-control-sm" name="nine_month" required>
                <option value="Done" selected>Done</option>
              </select>
            </div>
      </div>
      <div class="modal-footer alert-light">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-ban"></i> Cancel</button>
        <button type="submit" class="btn btn-info" name="nine_month" id="usercreate"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
      </div>
      </form>
    </div>
  </div>
</div>


<div class="modal fade" id="one_year<?php echo $row['vaccine_Id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
    <div class="modal-content">
      <div class="modal-header alert-info">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-syringe"></i> Update Immunization Vaccination</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa-solid fa-circle-xmark"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <form action="process_update.php" method="POST" enctype="multipart/form-data">
            <input type="hidden" class="form-control" name="user_Id" value="<?php echo $user_Id; ?>">
            <input type="hidden" class="form-control" name="vaccine_Id" value="<?php echo $row['vaccine_Id']; ?>">
            <div class="form-group">
              <label>1 Taon</label>
              <select class="form-control form-control-sm" name="one_year" required>
                <option value="Done" selected>Done</option>
              </select>
            </div>
      </div>
      <div class="modal-footer alert-light">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-ban"></i> Cancel</button>
        <button type="submit" class="btn btn-info" name="one_year" id="usercreate"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
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
            
            <input type="hidden" class="form-control" name="user_Id" value="<?php echo $user_Id; ?>">
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








