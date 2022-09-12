<!-- session starts -->
<?php
// session_start();
// header("Refresh: 60");
if (empty($_SESSION['name'])) {
  header('location: ../../index.php');
}
include("../../db/connect.php");

// include('head.php');
// include("../../db/connect.php");
// $re = "SELECT * FROM product;";
// $sell = mysqli_query($conn, $re);
?>

<footer class="footer">
  <div class="d-sm-flex justify-content-center justify-content-sm-between">
    <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © <?php echo date('Y'); ?> <a href="" style="text-decoration: none;">Exam Invigilation Systen</a>. All Rights Reserved.</span>
    <!-- <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="far fa-heart text-danger"></i></span> -->
  </div>
</footer>
<!-- partial -->
</div>
<!-- main-panel ends -->
</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="vendors/js/vendor.bundle.base.js"></script>
<script src="vendors/js/vendor.bundle.addons.js"></script>
<script src="js/off-canvas.js"></script>
<script src="js/hoverable-collapse.js"></script>
<script src="js/misc.js"></script>
<script src="js/settings.js"></script>
<script src="js/todolist.js"></script>
<script src="js/form-validation.js"></script>
<script src="js/bt-maxLength.js"></script>
<script src="js/select2.js"></script>
<script src="js/file-upload.js"></script>
<script src="js/typeahead.js"></script>
<script src="js/dropify.js"></script>
<script src="js/datatable.js"></script>
<script src="js/dashboard.js"></script>
<script src="js/chartist.js"></script>
<script src="js/chart.js"></script>
<script src="js/file-upload.js"></script>
<script src="js/modal-demo.js"></script>
<script src="js/dropzone.js"></script>
<script src="js/form-addons.js"></script>
<script src="js/clipboard.js"></script>
<script src="js/data-table.js"></script>
<script src="js/db.js"></script>
<script src="js/form-validation"></script>
<script src="js/formpickers.js"></script>
<script src="js/jq.tablesort.js"></script>
<script src="js/paginate.js"></script>
<script src="js/jquer-file-upload.js"></script>
<script src="js/tablesorter.js"></script>
<script src="js/tabs.js"></script>
<script src="js/profile-demo.js"></script>
<script src="js/select2.js"></script>
<script src="js/form-repeater.js"></script>
<script src="js/typeahead.js"></script>