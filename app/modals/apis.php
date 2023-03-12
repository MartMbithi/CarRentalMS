<!-- Update Modal -->
<div class="modal fade fixed-right" id="update_<?php echo $api['api_id']; ?>" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered  modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header align-items-center">
                <div class="text-center">
                    <h6 class="mb-0 text-bold">Update <?php echo $api['api_name']; ?></h6>
                </div>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="needs-validation" method="post" enctype="multipart/form-data" role="form">
                    <div class="row">
                        <div class="form-group col-md-12">
                            <label for="">Api name</label>
                            <input type="hidden" value="<?php echo $api['api_id']; ?>" required name="api_id" class="form-control">
                            <input type="text" value="<?php echo $api['api_name']; ?>" required name="api_name" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">API intentification</label>
                            <input type="" required name="api_identification" value="<?php echo $api['api_identification']; ?>" class="form-control">
                        </div>
                        <div class="form-group col-md-12">
                            <label for="">API token</label>
                            <input type="" required name="api_token" value="<?php echo $api['api_token']; ?>" class="form-control">
                        </div>
                    </div>
                    <div class="text-right">
                        <button type="submit" name="Manage_APIS" class="btn btn-outline-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->