<?php
function validateNews($conn, $user)
{
    $errors = array();

    $short_text = mysqli_real_escape_string($conn, $user['short_text']);
    $full = mysqli_real_escape_string($conn, $user['full']);
    $news_type_id = mysqli_real_escape_string($conn, $user['news_type_id']);
    $visible_at = mysqli_real_escape_string($conn, $user['visible_at']);


    if (empty($short_text)) {
        array_push($errors, 'Short text is required');
    } 
    if(empty($full)) {
        array_push($errors, 'Full text is required');
    } 
    if(empty($news_type_id)){
        array_push($errors, 'News type is required');
    } 
    if(empty($visible_at)){
        array_push($errors, 'Visible at is required');
    } 

    return $errors;
}