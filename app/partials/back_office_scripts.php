<!-- Logout Modal -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="logout?access_level=<?php echo $_SESSION['user_access_level']; ?>">Logout</a>
            </div>
        </div>
    </div>
</div>
<!-- End Modal -->
<script>
    var isFluid = JSON.parse(localStorage.getItem('isFluid'));
    if (isFluid) {
        var container = document.querySelector('[data-layout]');
        container.classList.remove('container');
        container.classList.add('container-fluid');
    }
    /* Prevent Double Submissions */
    if (window.history.replaceState) {
        window.history.replaceState(null, null, window.location.href);
    }
</script>
<!-- Jquerry -->
<script src="../public/backoffice_assets/js/jquery.min.js"></script>
<!-- Popper -->
<script src="../public/backoffice_assets/js/popper.min.js"></script>
<!-- Bootstrap -->
<script src="../public/backoffice_assets/js/bootstrap.min.js"></script>
<!-- Fontawesome -->
<script src="../public/backoffice_assets/lib/%40fortawesome/all.min.js"></script>
<!-- Stickyfill -->
<script src="../public/backoffice_assets/lib/stickyfilljs/stickyfill.min.js"></script>
<!-- Sticky Kit -->
<script src="../public/backoffice_assets/lib/sticky-kit/sticky-kit.min.js"></script>
<!-- Is Js -->
<script src="../public/backoffice_assets/lib/is_js/is.min.js"></script>
<!-- Loadash -->
<script src="../public/backoffice_assets/lib/lodash/lodash.min.js"></script>
<!-- Perfect Scrollbar -->
<script src="../public/backoffice_assets/lib/perfect-scrollbar/perfect-scrollbar.js"></script>
<!-- Google fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:100,200,300,400,500,600,700,800,900&amp;display=swap" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/babel-core/5.6.15/browser-polyfill.min.js"></script>
<!-- Theme Js -->
<script src="../public/backoffice_assets/js/theme.min.js"></script>
<!-- Mojs -->
<script src="../public/backoffice_assets/plugins/mojs/mo.js"></script>
<!-- Noty -->
<script src="../public/backoffice_assets/plugins/noty/noty.js"></script>
<!-- Load Alerts -->
<?php include('alerts.php'); ?>
<script>
    /* Add Active class on navigation */
    var url = window.location;
    // Will only work if string in href matches with location
    $('li.nav-item a[href="' + url + '"]').parent().addClass('active');
    // Will also work for relative and absolute hrefs
    $('li.nav-item a').filter(function() {
        return this.href == url;
    }).parent().addClass('active');

    /* Show File Name */
    $('#inputGroupFile02').on('change', function() {
        //get the file name
        var fileName = $(this).val().replace('C:\\fakepath\\', " ");
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    })
</script>