<div class="modal fade" id="delete_<?php echo $staffs['user_id']; ?>" role="dialog">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <form method="POST">
                <div class="modal-body text-center text-danger">
                    <i class="fas fa-exclamation-triangle fa-4x"></i><br>
                    <h5>Heads up!, you are about to delete <?php echo $staffs['user_name']; ?> Details</h5>
                    <p>Are you sure you want to delete this staff details?</p>
                    <!-- Hide This -->
                    <input type="hidden" name="user_id" value="<?php echo $staffs['user_id']; ?>">
                    <button type="button" class="text-center btn btn-success" data-dismiss="modal">No</button>
                    <button type="submit" name="Delete_Staff" class="text-center btn btn-danger">Yes, Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>