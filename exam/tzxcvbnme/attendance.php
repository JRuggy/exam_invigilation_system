<!-- session starts -->
<?php
session_start();
// header("Refresh: 60");
if (empty($_SESSION['name'])) {
    header('location: ../../index.php');
}
include("../../db/connect.php");
$re = "SELECT * FROM user WHERE role='student' AND attendance='';";
$sell = mysqli_query($conn, $re);
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
                            Student's Attendance
                        </h3>
                        <button onclick="lprint('ud')" style="margin-left: 1cm;" class="btn btn-success"><b>Print
                                Students</b></button> <a class="btn btn-danger" href="reset.php">Reset Students</a>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Manage Students</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All Students</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">All Students</h4>
                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive" id="ud">
                                        <table id="order-listing" class="table">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>First Name</th>
                                                    <th>Second Name</th>
                                                    <th>Third Name</th>
                                                    <!-- <th>Role</th> -->
                                                    <th>Action</th>
                                                    <!-- <th>Actions</th> -->
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $fo = 1;
                                                while ($ret = mysqli_fetch_array($sell)) {
                                                    // echo $ret;
                                                    $id = $ret['id'];
                                                    $fname = $ret['fname'];
                                                    $sname = $ret['sname'];
                                                    $tname = $ret['tname'];
                                                ?>

                                                    <tr>
                                                        <td> <?php echo $fo++; ?></td>
                                                        <td> <?php echo  " $fname" ?> </td>
                                                        <td> <?php echo  " $sname" ?> </td>
                                                        <td> <?php echo  " $tname" ?> </td>
                                                        <td> <a href="check.php?id=<?php echo $ret['id']; ?>" class="btn btn-success"> <i class="fa fa-check"></i> </a>
                                                        </td>


                                                    </tr>

                                                <?php
                                                }

                                                ?>
                                                <!-- <tr>
                          <td>1</td>
                          <td>2012/08/03</td>
                          <td>Edinburgh</td>
                          <td>New York</td>
                          <td>$1500</td>
                          <td>$3200</td>
                          <td>
                            <label class="badge badge-info">On hold</label>
                          </td>
                          <td>
                            <button class="btn btn-outline-primary">View</button>
                          </td>
                        </tr> -->

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content-wrapper ends -->
                <?php include('footer.php'); ?>

</html>