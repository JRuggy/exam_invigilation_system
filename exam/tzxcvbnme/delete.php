<?php
require("../../db/connect.php");
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $delete = "DELETE FROM subject WHERE id='$id'";
    $query = mysqli_query($conn, $delete);

    if ($query) {
        header("location: viewsub.php");
    } else {
        echo "Sorry can't delete subject";
    }
}