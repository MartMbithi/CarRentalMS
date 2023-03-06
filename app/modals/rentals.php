<div class="modal fade fixed-right" id="#pay_<?php echo $rental['rental_id']; ?>" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <div class="text-center">
                    <h6 class="mb-0 text-bold">Pay <?php echo $rental['rental_ref_code']; ?></h6>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="">Payment means</label>
                            <input type="hidden" value="<?php echo $rental['rental_id']; ?>" required name="payment_rental_id" class="form-control">
                            <input type="hidden" value="<?php echo $ref_code; ?>" required name="payment_ref_code" class="form-control">
                            <select type="text" required name="payment_means" class="form-control">
                                <option value="">Select payment option</option>
                                <option value="Mpesa">Mpesa</option>
                                <option value="Card">Credit/Debit Card</option>
                                <option value="Cash">Cash</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Amount (Ksh)</label>
                            <input type="text" readonly required name="payment_amount" value="<?php echo $rental['rental_amount']; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" name="Pay_Rentals" class="btn btn-outline-success">Pay</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- Delete Categories -->
<div class="modal fade" id="delete_<?php echo $rental['rental_id']; ?>" role="dialog">
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