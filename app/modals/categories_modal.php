<!-- Update Categories -->

<!-- Delete Categories -->
<div class="modal fade" id="delete_<?php echo $categories['category_id']; ?>" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="POST">
                <div class="modal-body text-center text-danger">
                    <i class="fas fa-exclamation-triangle fa-4x"></i><br>
                    <h5>Heads up!, you are about to delete <?php echo $categories['category_name']; ?> details</h5>
                    <p>Are you sure you want to delete this vehicle category details?</p>
                    <!-- Hide This -->
                    <input type="hidden" name="category_id" value="<?php echo $categories['category_id']; ?>">
                    <button type="button" class="text-center btn btn-success" data-dismiss="modal">No</button>
                    <button type="submit" name="Delete_Categories" class="text-center btn btn-danger">Yes, Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Delete -->