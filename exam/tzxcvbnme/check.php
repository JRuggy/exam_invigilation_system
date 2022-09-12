<?php
session_start();
require('../../db/connect.php');
//request approve 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $re = "UPDATE user SET attendance ='check' WHERE id ='$id';";
    $sell = mysqli_query($conn, $re);

    if ($sell) {
        header("location: attendance.php");
    }
}