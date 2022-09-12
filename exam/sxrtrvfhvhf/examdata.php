<?php
if (isset($_POST['signup'])) {
    $answers = $_POST['answers'];
    $subject = $_POST['subject'];
    $user_id = $_POST['user_id'];

    $adduser = "INSERT INTO exam_answers (answers,subject,user_id) VALUES('$answers','$subject','$user_id');";
    $query = mysqli_query($conn, $adduser);

    if ($query) {
        echo "Exam Added Successfully";
    } else {
        echo "Failed to Add Exam";
    }
}