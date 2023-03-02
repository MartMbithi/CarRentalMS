<?php include('../app/modals/logout.php'); ?>
<?php include('../app/modals/cookies.php'); ?>
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

<!-- Data Tables -->
<script src="../public/backoffice_assets/lib/prismjs/prism.js"></script>
<script src="../public/backoffice_assets/lib/datatables/js/jquery.dataTables.min.js"></script>
<script src="../public/backoffice_assets/lib/datatables-bs4/dataTables.bootstrap4.min.js"></script>
<script src="../public/backoffice_assets/lib/datatables.net-responsive/dataTables.responsive.js"></script>
<script src="../public/backoffice_assets/lib/datatables.net-responsive-bs4/responsive.bootstrap4.js"></script>
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
    $('.custom-file-input').on('change', function() {
        //get the file name
        var fileName = $(this).val().replace('C:\\fakepath\\', " ");
        //replace the "Choose a file" label
        $(this).next('.custom-file-label').html(fileName);
    })
    /* Data tables */
    $(document).ready(function() {
        $('.data').DataTable();
    });
</script>