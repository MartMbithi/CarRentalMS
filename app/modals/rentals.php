<div class="modal fade fixed-right" id="pay_<?php echo $rental['rental_id']; ?>" role="dialog" aria-hidden="true">
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
                            <input type="hidden" value="<?php echo $rental['client_names']; ?>" required name="client_names" class="form-control">
                            <input type="hidden" value="<?php echo $rental['rental_ref_code']; ?>" required name="rental_ref_number" class="form-control">
                            <input type="hidden" value="<?php echo $rental['client_email']; ?>" required name="client_email" class="form-control">
                            <input type="hidden" value="<?php echo $rental['client_phone_number']; ?>" required name="client_phone_number" class="form-control">
                            <input type="hidden" value="<?php echo $rental['rental_id']; ?>" required name="payment_rental_id" class="form-control">
                            <input type="hidden" value="<?php echo $ref_code; ?>" required name="payment_ref_code" class="form-control">
                            <select type="text" required name="payment_means" class="form-control">
                                <option value="">Select payment option</option>
                                <!-- <option value="Mpesa">Mpesa</option> -->
                                <option value="Card">Credit/Debit Card OR Mobile Money</option>
                                <option value="Cash">Cash</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Amount (Ksh)</label>
                            <input type="text" readonly required name="payment_amount" value="<?php echo $rental['rental_cost']; ?>" class="form-control">
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

<div class="modal fade fixed-right" id="edit_<?php echo $rental['rental_id']; ?>" role="dialog" aria-hidden="true">
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
                        <div class="form-group col-md-6">
                            <label for="">Rental from date</label>
                            <input type="hidden" value="<?php echo $rental['rental_id']; ?>" required name="rental_id" class="form-control">
                            <input type="hidden" value="<?php echo $rental['rental_cost']; ?>" required name="rental_cost" class="form-control">
                            <input type="date" required name="rental_from_date" value="<?php echo $rental['rental_from_date']; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="">Rental to date</label>
                            <input type="date" required name="rental_to_date" value="<?php echo $rental['rental_to_date']; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" name="Update_Rental" class="btn btn-outline-success">Update</button>
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
                    <h5>Heads up!, you are about to delete <?php echo $rental['rental_ref_code']; ?> details</h5>
                    <p>Are you sure you want to delete this vehicle rental record details?</p>
                    <!-- Hide This -->
                    <input type="hidden" name="rental_id" value="<?php echo $rental['rental_id']; ?>">
                    <input type="hidden" name="rental_car_id" value="<?php echo $rental['rental_car_id']; ?>">
                    <button type="button" class="text-center btn btn-success" data-dismiss="modal">No</button>
                    <button type="submit" name="Delete_Rentals" class="text-center btn btn-danger">Yes, Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- End Delete -->

<div class="modal fade fixed-right" id="return_<?php echo $rental['rental_id']; ?>" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <div class="text-center">
                    <h6 class="mb-0 text-bold">Inspect This Rental Return</h6>
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
                            <input type="hidden" value="<?php echo $rental['rental_car_id']; ?>" required name="return_car_id" class="form-control">
                            <input type="hidden" value="<?php echo $rental['rental_id']; ?>" required name="return_rental_id" class="form-control">
                            <input type="hidden" value="<?php echo $_SESSION['user_id']; ?>" required name="return_user_id" class="form-control">
                            <textarea required name="return_comments" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" name="Return_Car" class="btn btn-outline-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>