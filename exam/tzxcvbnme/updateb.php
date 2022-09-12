<?php

if (isset($_POST['updateadmin'])) {
    $date = $_POST['date'];
    $h = $_POST['h'];
    $m = $_POST['m'];
    $s = $_POST['s'];

    $query = "UPDATE timer SET date='$date',h='$h',m='$m',s='$s' WHERE id ='1' ";

    $kaka = mysqli_query($conn, $query);

    $today = date('d-m-Y');
    $maki = strtotime($date);
    $husna = strtotime($today);

    if ($maki <= $husna) {
        echo "The date can't be less than $today";
    } else {
        if ($kaka) {
            echo "Countdown update successfully" . "<br><br>";
?>
<!-- <a href="./business.php" style="text-decoration: none;">View Busines Details</a> -->
<?php
        } else {
            echo "Failed To Update Countdown";
        }
    }
}