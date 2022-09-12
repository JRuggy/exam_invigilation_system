<!-- session starts -->
<?php
session_start();
// header("Refresh: 60");
if (empty($_SESSION['name'])) {
    header('location: ../../index.php');
}
include("../../db/connect.php");
// if (isset($_GET['id'])) {
// $id = $_GET['id'];
$query = "SELECT * FROM timer WHERE id=1";
$result = mysqli_query($conn, $query);



while ($ret = mysqli_fetch_array($result)) {
    $date = $ret['date'];
    $h = $ret['h'];
    $m = $ret['m'];
    $s = $ret['s'];
    // }
}
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
                            Set Countdown
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a style="text-decoration: none;" href="">Manage Countdown</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Edit Countdown</li>
                            </ol>
                        </nav>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Edit Countdown</h4>
                                    <h4 style="margin-left: 8cm; color: green" class="card-title"><?php
                                                                                                    include("updateb.php");
                                                                                                    ?></h4>


                                    <form class="cmxform" method="post" enctype="multipart/form-data">
                                        <!-- <fieldset> -->

                                        <div class="row">

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Set The Date</label>
                                                    <input required value="<?php echo $date ?>" class="form-control" name="date" type="date">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Set The Hour</label>
                                                    <input required value="<?php echo $h ?>" class="form-control" name="h" type="number" min="0" max="23">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Set The Minute</label>
                                                    <input required value="<?php echo $m ?>" class="form-control" name="m" type="number" min="0" max="60">
                                                </div>
                                            </div>

                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Set The Second</label>
                                                    <input required value="<?php echo $s ?>" class="form-control" name="s" type="number" min="0" max="60">
                                                </div>
                                            </div>

                                        </div>

                                        <button class="btn btn-primary" name="updateadmin">Update Countdown</button>
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