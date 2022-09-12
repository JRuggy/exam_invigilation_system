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
                            Upload Exams Answers
                        </h3>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a style="text-decoration: none;" href="">Manage
                                        Exams</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Upload Exams</li>
                            </ol>
                        </nav>
                    </div>

                    <div class="row">
                        <div class="col-6">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Upload Exams</h4>
                                    <h4 style="margin-left: 3cm; color: green" class="card-title">
                                        <?php include("examdata.php"); ?></h4>


                                    <form class="cmxform" method="post" enctype="multipart/form-data">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="firstname">Upload Exams Answers</label>
                                                <!-- <input id="firstname" required class="form-control" name="name" type="text"> -->
                                                <textarea name="answers" class="form-control" id="" cols="30"
                                                    rows="10"></textarea>
                                            </div>
                                        </div>


                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Choose Subject</label>
                                                <?php include('../../db/connect.php');
                                                $sup = "SELECT * FROM subject;";
                                                $sellope = mysqli_query($conn, $sup); ?>
                                                <select required class="js-example-basic-single w-100" name="subject">
                                                    <option value="">---</option>
                                                    <?php
                                                    while ($rower = mysqli_fetch_array($sellope)) {
                                                        // $id = $row['id'];
                                                        $name = $rower['name'];
                                                    ?>
                                                    <option value="<?php echo $rower['name'] ?>"><?php echo $name; ?>
                                                    </option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>

                                        <input type="hidden" name="user_id" value="<?php echo $amal ?>">


                                        <button class="btn btn-primary" name="signup">Upload Anwers</button>
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