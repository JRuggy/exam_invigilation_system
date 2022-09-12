<!-- session starts -->
<?php
session_start();
// header("Refresh: 60");
if (empty($_SESSION['name'])) {
    header('location: ../../index.php');
}
include("../../db/connect.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM exam_answers WHERE id=$id";
    $result = mysqli_query($conn, $query);



    while ($ret = mysqli_fetch_array($result)) {
        $fname = $ret['answers'];
        $sname = $ret['subject'];
        $tname = $ret['user_id'];
    }
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
                            <!-- Full Profile -->
                        </h3>
                        <button onclick="lprint('ud')" style="margin-left: 1cm;" class="btn btn-success"><b>Print
                                Answers</b></button>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a style="text-decoration: none;" href="">Manage Anwers</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page"></li>
                            </ol>
                        </nav>
                    </div>

                    <div class="row">


                        <div class="col-md-12 grid-margin">
                            <div class="card">
                                <div class="card-body" id="ud">
                                    <h4 class="card-title"><button class="btn"><b>Answers</b></button></h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6><b>Subject's Name:</b>
                                                <tag style="margin-left: 0.5cm;"><?php echo $sname; ?></tag>
                                            </h6>
                                            <h6 style="margin-top: 0.3cm;"><b>Student's ID:</b>
                                                <tag style="margin-left: 0.5cm;"><?php echo $tname; ?></tag>
                                            </h6>
                                            <h6 style="margin-top: 0.3cm;"><b>Answers:</b>
                                                <textarea readonly name="" class="form-control"
                                                    placeholder="<?php echo $fname ?>" id="" cols="30"
                                                    rows="10"></textarea>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <!-- content-wrapper ends -->
                <?php include('footer.php'); ?>
</body>


</html>