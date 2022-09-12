<?php
if (isset($_POST['signup'])) {
    $name = $_POST['name'];

    $adduser = "INSERT INTO subject (name) VALUES('$name');";
    $query = mysqli_query($conn, $adduser);

    if ($query) {
        echo "Subject Added Successfully";
    } else {
        echo "Failed to Add Subject";
    }
}