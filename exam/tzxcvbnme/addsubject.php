<!-- session starts -->
<?php
session_start();
// header("Refresh: 60");
if (empty($_SESSION['name'])) {
    header('location: ../../index.php');
}
$amal = $_SESSION['name'];
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

            <?php include('sidebar.php'); ?>

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="page-header">
                        <h3 class="page-title">
                            Add Subject
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a style="text-decoration: none;" href="">Manage
                                        Subject</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Add Subject</li>
                            </ol>
                        </nav>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Add Subject</h4>
                                    <h4 style="margin-left: 3cm; color: green" class="card-title">
                                        <?php include("subjectdata.php"); ?></h4>


                                    <form class="cmxform" method="post" enctype="multipart/form-data">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input class="form-control" name="name" type="text">
                                            </div>
                                        </div>

                                        <button class="btn btn-primary" name="signup">Add Subject</button>
                                        <!-- </fieldset> -->
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