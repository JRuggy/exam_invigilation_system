<?php
include("./db/connect.php");

session_start();

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Exam Invigilation System</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/bootstrap/font-awesome.min.css">
    <link rel="stylesheet" href="css/-Login-form-Page-BS4-.css">
    <link rel="stylesheet" href="css/styles.css">
    <link rel="shortcut icon" type="image/png" href="./image/flag.png">
</head>

<body>
    <div class="container-fluid">
        <div class="row mh-100vh">
            <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0"
                id="login-block">
                <div class="m-auto w-lg-75 w-xl-50">
                    <h3 style="color: grey;" class="mb-5"><b>Register <tag style="color: orange">Here</tag>
                        </b></h3>
                    <code style="color: green;"><?php include('./registerdata.php'); ?></code>

                    <form method="post">
                        <div class="form-group">
                            <label class="text-secondary"><strong style="color: black;">First Name</strong></label>
                            <input name="fname" class="form-control" type="text" required="">
                        </div>
                        <div class="form-group">
                            <label class="text-secondary"><strong style="color: black;">Second Name</strong></label>
                            <input name="sname" class="form-control" type="text" required="">
                        </div>
                        <div class="form-group">
                            <label class="text-secondary"><strong style="color: black;">Last Name</strong></label>
                            <input name="tname" class="form-control" type="text" required="">
                        </div>
                        <div class="form-group">
                            <label class="text-secondary"><strong style="color: black;">User Name</strong></label>
                            <input name="username" class="form-control" type="text" required="">
                        </div>
                        <div class="form-group">
                            <label class="text-secondary"><strong style="color: black;">Password</strong></label>
                            <input name="pass" class="form-control" type="password" required="">
                        </div>
                        <button class="active btn btn-dark mt-2" name="login">Sign Up</button>
                        <!-- <button class="active btn btn-dark mt-2" name="login">Register</button> -->
                        <a style="margin-left: 2.8cm; margin-top: 0.3cm;" class="btn btn-warning" href="index.php">Sign
                            In</a>
                        <br><br>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-end" id="bg-block"
                style="background-image:url(&quot;image/stone.jpg&quot;);background-size:cover;background-position:center center;">
            </div>
        </div>
    </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>

</html>