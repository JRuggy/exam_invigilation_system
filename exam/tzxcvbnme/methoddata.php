<?php

if (isset($_POST['signup'])) {
    $method = $_POST['method'];
    $query = "UPDATE timer SET method='$method' WHERE id ='1'; ";

    $kaka = mysqli_query($conn, $query);

    if ($kaka) {
        echo "Method Updated Successfully";
    } else {
        echo "something wrong check your connection";
    }
}