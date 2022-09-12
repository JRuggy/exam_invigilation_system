<?php
if (isset($_POST['login'])) {
    $fname = $_POST['fname'];
    $sname = $_POST['sname'];
    $tname = $_POST['tname'];
    $username = $_POST['username'];
    $password = $_POST['pass'];

    $adduser = "INSERT INTO user (fname,sname,tname,username,pass) VALUES('$fname','$sname','$tname','$username','$password');";
    $query = mysqli_query($conn, $adduser);

    if ($query) {
        echo "You have been registered Successfully";
    } else {
        echo "Failed to register";
    }
}
