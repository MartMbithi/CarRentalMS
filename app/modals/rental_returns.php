<div class="modal fade fixed-right" id="update_<?php echo $rental['return_id']; ?>" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <div class="text-center">
                    <h6 class="mb-0 text-bold">Update <?php echo $rental['rental_ref_code']; ?></h6>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="">Return inspection comments</label>
                            <input type="hidden" value="<?php echo $rental['return_id']; ?>" required name="return_id" class="form-control">
                            <textarea required name="return_comments" class="form-control"><?php echo $rental['return_comments']; ?></textarea>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" name="Update_Rental_Return" class="btn btn-outline-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Delete Categories -->
<div class="modal fade" id="delete_<?php echo $rental['return_id']; ?>" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="POST">
                <div class="modal-body text-center text-danger">
                    <i class="fas fa-exclamation-triangle fa-4x"></i><br>
                    <h5>Heads up!, you are about to delete <?php echo $rental['rental_ref_code']; ?> return inspection details</h5>
                    <p>Are you sure you want to delete this vehicle rental record details?</p>
                    <!-- Hide This -->
                    <input type="hidden" name="rental_id" value="<?php echo $rental['rental_id']; ?>">
                    <input type="hidden" name="return_id" value="<?php echo $rental['return_id']; ?>">
                    <button type="button" class="text-center btn btn-success" data-dismiss="modal">No</button>
                    <button type="submit" name="Delete_Rentals_Return" class="text-center btn btn-danger">Yes, Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Delete -->