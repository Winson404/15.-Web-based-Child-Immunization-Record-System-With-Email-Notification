
<!-- ****************************************************UPDATE*********************************************************************** -->
<!-- Modal -->
<div class="modal fade" id="update<?php echo $row['vaccine_Id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-md">
    <div class="modal-content">
      <div class="modal-header alert-info">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fa-solid fa-syringe"></i> Add Immunization Vaccination</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true"><i class="fa-solid fa-circle-xmark"></i></span>
        </button>
      </div>
      <div class="modal-body">
        <form action="process_update.php" method="POST" enctype="multipart/form-data">
        
            <input type="hidden" class="form-control" name="vaccine_Id" value="<?php echo $row['vaccine_Id']; ?>">
            <div class="form-group">
                <label>Vaccine name</label>
                <input type="text" class="form-control form-control-sm" name="vaccine" required value="<?php echo $row['Vaccine']; ?>">
              </div>
        
            <div class="form-group">
              <label>Sakit na Maiiwasan</label>
                <input type="text" class="form-control form-control-sm" name="maiwasan" required value="<?php echo $row['sakit_na_maiwasan']; ?>">
            </div>
     
      </div>
      <div class="modal-footer alert-light">
        <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="fa-solid fa-ban"></i> Cancel</button>
        <button type="submit" class="btn btn-info" name="update_vaccination" id="usercreate"><i class="fa-solid fa-floppy-disk"></i> Submit</button>
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








