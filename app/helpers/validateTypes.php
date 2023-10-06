<?php
function validateType($conn, $user)
{
    $errors = array();

    $title = mysqli_real_escape_string($conn, $user['title']);


    if (empty($title)) {
        array_push($errors, 'Title is required');
    } else {
        $sql = "SELECT * FROM news_type WHERE title = '$title'";
        $result = mysqli_query($conn, $sql);
        $result_check = mysqli_num_rows($result);
        if ($result_check > 0) {
            array_push($errors, 'Type already exists');
        }
    }

    return $errors;
}
