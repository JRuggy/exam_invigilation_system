<!-- session starts -->
<?php
session_start();
// header("Refresh: 60");
if (empty($_SESSION['name'])) {
    header('location: ../../index.php');
}
include("../../db/connect.php");
?>

<!DOCTYPE html>
<html lang="en">

<?php include('head.php'); ?>

<body>
    <div class="container-scroller">
        <!-- partial:../../partials/_navbar.html -->
        <?php include('nav.php'); ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:../../partials/_settings-panel.html -->
            <?php include('sidebar.php'); ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            Add Student
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a style="text-decoration: none;" href="">Manage
                                        Students</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Add Students</li>
                            </ol>
                        </nav>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Fill the credentials</h4>
                                    <h4 style="margin-left: 8cm; color: green" class="card-title">
                                        <?php include("methoddata.php"); ?></h4>


                                    <form class="cmxform" method="post" enctype="multipart/form-data">
                                        <!-- <fieldset> -->

                                        <div class="row">

                                            <!-- Choose Method -->
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Choose Methods</label>
                                                    <select required name="method"
                                                        class="js-example-basic-single w-100">
                                                        <option value="">---</option>
                                                        <option>Shutdown</option>
                                                        <option>Logout</option>
                                                    </select>
                                                </div>
                                            </div>

                                        </div>

                                        <button class="btn btn-success" name="signup">Update Method</button>
                                    </form>


                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- content-wrapper ends -->
                <?php include('footer.php'); ?>
</body>


</html>