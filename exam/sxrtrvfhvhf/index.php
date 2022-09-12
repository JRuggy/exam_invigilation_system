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

    <style>
    .blink {
        animation: blink-animation 1s steps(5, start) infinite;
        -webkit-animation: blink-animation 1s steps(5, start)infinite;
    }

    @keyframes blink-animation {
        to {
            visibility: hidden;
        }
    }

    @-webkit-keyframes blink-animation {
        to {
            visibility: hidden;
        }
    }
    </style>
    <div class="container-scroller">
        <?php include('nav.php'); ?>

        <!-- partial -->
        <div class="container-fluid page-body-wrapper">

            <!-- partial -->
            <?php include('sidebar.php'); ?>

            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">
                    <div class="row">
                        <div class="alert alert-fill-danger col-md-12" role="alert">
                            <i class="fa fa-exclamation-triangle blink"></i>
                            Remember to fill any neccessary information required in this system as instructed by your
                            invigilator. Once the countdown is over, your computer will shutdown.
                        </div>

                        <?php
                        //including the database connection file
                        include("../../db/config.php");

                        $select = "SELECT * FROM timer ORDER BY id DESC;";
                        $join = mysqli_query($mysqli, $select);

                        // $fo = 1;
                        while ($kz = mysqli_fetch_array($join)) {
                            // echo $ret;
                            // $id = $res['id'];
                            $datee = $kz['date'];
                            $hh = $kz['h'];
                            $mm = $kz['m'];
                            $ss = $kz['s'];
                            $method = $kz['method'];
                        ?>


                        <?php
                        }

                        ?>

                        <!-- Student's Name -->
                        <div class="col-md-6 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-0">Student's Name</h4>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-inline-block pt-3">
                                            <div class="d-md-flex">
                                                <h4 class="mb-0">
                                                    <?php
                                                    // echo "Phebronia Kizundu";
                                                    $studentname = "SELECT * FROM user WHERE username='$tonnie';";
                                                    $joini = mysqli_query($mysqli, $studentname);

                                                    while ($kzi = mysqli_fetch_array($joini)) {
                                                        $fname = $kzi['fname'];
                                                        $sname = $kzi['sname'];
                                                        $tname = $kzi['tname'];
                                                    ?>


                                                    <?php
                                                    }

                                                    ?>
                                                    <?php
                                                    echo "$fname $sname $tname";
                                                    ?>

                                                </h4>
                                            </div>
                                            <!-- <small class="text-gray">Phebronia Kizundu</small> -->
                                        </div>
                                        <div class="d-inline-block">
                                            <i class="fa fa-user icon-lg"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- The Ending Time -->
                        <div class="col-md-6 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-0">The Ending Time</h4>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-inline-block pt-3">
                                            <div class="d-md-flex">
                                                <h4 class="mb-0">
                                                    <?php
                                                    echo "$datee, $hh:$mm:$ss";
                                                    ?>
                                                </h4>
                                            </div>
                                            <!-- <small class="text-gray">Phebronia Kizundu</small> -->
                                        </div>
                                        <div class="d-inline-block">
                                            <i class="fa fa-user icon-lg"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">



                        <!-- CountDown -->
                        <div class="col-md-6 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title mb-0">CountDown</h4>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="d-inline-block pt-3">
                                            <div class="d-md-flex">
                                                <?php
                                                ?>
                                                <h4 class="mb-0">

                                                    <?php
                                                    //including the database connection file
                                                    include("../../db/config.php");

                                                    $re = "SELECT * FROM timer ORDER BY id DESC;";
                                                    $result = mysqli_query($mysqli, $re);

                                                    // $fo = 1;
                                                    while ($res = mysqli_fetch_array($result)) {
                                                        // echo $ret;
                                                        // $id = $res['id'];
                                                        $date = $res['date'];
                                                        $h = $res['h'];
                                                        $m = $res['m'];
                                                        $s = $res['s'];
                                                    ?>


                                                    <?php
                                                    }

                                                    ?>


                                                    <?php
                                                    if ($method == "Logout") {
                                                        // echo $method;
                                                    ?>

                                                    <p id="demo"></p>



                                                    <script>
                                                    var countDownDate = <?php
                                                                                date_default_timezone_set("Africa/Nairobi");
                                                                                echo strtotime("$date $h:$m:$s") ?> *
                                                        1000;
                                                    var now = <?php echo time() ?> * 1000;

                                                    // Update the count down every 1 second
                                                    var x = setInterval(function() {
                                                        now = now + 1000;
                                                        // Find the distance between now an the count down date
                                                        var distance = countDownDate - now;
                                                        // Time calculations for days, hours, minutes and seconds
                                                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                                        var hours = Math.floor((distance % (1000 * 60 * 60 *
                                                            24)) / (1000 * 60 * 60));
                                                        var minutes = Math.floor((distance % (1000 * 60 * 60)) /
                                                            (1000 * 60));
                                                        var seconds = Math.floor((distance % (1000 * 60)) /
                                                            1000);
                                                        // Output the result in an element with id="demo"
                                                        document.getElementById("demo").innerHTML = days +
                                                            "d " + hours + "h " +
                                                            minutes + "m " + seconds + "s ";
                                                        // If the count down is over, write some text 

                                                        if (distance < 0) {
                                                            clearInterval(x);
                                                            document.getElementById("demo").innerHTML =
                                                                "THE EXAM TIME IS OVER";
                                                            $.ajax({

                                                                url: 'shutdown.php',

                                                                type: 'POST',
                                                                data: 'somevariable=whatever',
                                                                success: function(data) {
                                                                    $('#ajax-results').html(data);
                                                                    location.reload();

                                                                }
                                                            })

                                                        }

                                                    }, 1000);
                                                    </script>
                                                    <?php
                                                    } else {
                                                        // echo $method;
                                                    ?>

                                                    <p id="demo"></p>



                                                    <script>
                                                    var countDownDate = <?php
                                                                                date_default_timezone_set("Africa/Nairobi");
                                                                                echo strtotime("$date $h:$m:$s") ?> *
                                                        1000;
                                                    var now = <?php echo time() ?> * 1000;

                                                    // Update the count down every 1 second
                                                    var x = setInterval(function() {
                                                        now = now + 1000;
                                                        // Find the distance between now an the count down date
                                                        var distance = countDownDate - now;
                                                        // Time calculations for days, hours, minutes and seconds
                                                        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                                        var hours = Math.floor((distance % (1000 * 60 * 60 *
                                                            24)) / (1000 * 60 * 60));
                                                        var minutes = Math.floor((distance % (1000 * 60 * 60)) /
                                                            (1000 * 60));
                                                        var seconds = Math.floor((distance % (1000 * 60)) /
                                                            1000);
                                                        // Output the result in an element with id="demo"
                                                        document.getElementById("demo").innerHTML = days +
                                                            "d " + hours + "h " +
                                                            minutes + "m " + seconds + "s ";
                                                        // If the count down is over, write some text 

                                                        if (distance < 0) {
                                                            clearInterval(x);
                                                            document.getElementById("demo").innerHTML =
                                                                "THe EXAM TIME IS OVER";
                                                            $.ajax({

                                                                url: 'shutdown1.php',

                                                                type: 'POST',
                                                                data: 'somevariable=whatever',
                                                                success: function(data) {
                                                                    $('#ajax-results').html(data);
                                                                    location.reload();

                                                                }
                                                            })

                                                        }

                                                    }, 1000);
                                                    </script>
                                                    <?php
                                                    }
                                                    ?>




                                                </h4>
                                            </div>
                                            <small class="text-gray">The Clock Is Ticking !</small>
                                        </div>
                                        <div class="d-inline-block">
                                            <i class="far fa-clock icon-lg"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Clock's Time -->
                        <div class="col-md-6 grid-margin stretch-card">
                            <div class="card">
                                <div class="card-body">
                                    <div class="d-flex flex-row">
                                        <div class="ml-3">
                                            <script type="text/javascript">
                                            function display_c() {
                                                var refresh = 1000; // Refresh rate in milli seconds
                                                mytime = setTimeout('display_ct()', refresh)
                                            }

                                            function display_ct() {
                                                var x = new Date()
                                                document.getElementById('ct').innerHTML = x;
                                                display_c();
                                            }
                                            </script>

                                            <body onload=display_ct();>
                                                <p class="mt-2 text-primary font-weight-bold">CLOCK TIME</p>
                                                <span id='ct'></span>
                                                <h5 class="font-weight-bold" onload="display_ct(); id='ct'"></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <?php include('footer.php'); ?>
</body>

</html>