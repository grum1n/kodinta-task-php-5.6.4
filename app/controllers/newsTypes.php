<?php
include_once(ROOT_PATH . "/app/config/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateTypes.php");

$newsTypes = selectAll('news_type');
$errors = array();
$id = '';
$title = '';

if(isset($_POST['add-type-btn'])){
    $errors = validateType($conn, $_POST);
    if (count($errors) === 0) {
        unset($_POST['add-type-btn']);
        
        $title = $_POST['title'];
      
        $sql = "INSERT INTO news_type(title) VALUES('$title');";
    
        mysqli_query($conn, $sql);

        $_SESSION['title'] = $title;
        $_SESSION['message'] = 'News type added.';
        $_SESSION['type'] = 'success';
        header('Location: ' . BASE_URL . '/views/authorized/newsTypes/index.php');
        exit();
    }
    else {
        $title = $_POST['title'];
    }
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $news_type = selectIdForEdit('news_type', $id);
    // dd($news_type);
    $id = $news_type['id'];
    $title = $news_type['title'];
}

if (isset($_GET['del_id'])) {
    adminOnly();
    $id = $_GET['del_id'];
    $sql = "DELETE FROM news_type  WHERE id='$id'";
    
    mysqli_query($conn, $sql);

    $_SESSION['message'] = 'Type deleted successfully';
    $_SESSION['type'] = 'success';

    header('location: ' . BASE_URL . '/views/authorized/newsTypes/index.php');
    exit();
}

if (isset($_POST['update-type-btn'])) {
    adminOnly();
    $errors = validateType($conn, $_POST);
    
    if (count($errors) === 0) {
        
        $id = $_POST['id'];
        unset($_POST['update-type-btn'], $_POST['id']);
      ;
        $title = $_POST['title'];
        
        $sql = "UPDATE news_type SET title='$title' WHERE id='$id'";
        // dd($sql);
        mysqli_query($conn, $sql);

        $_SESSION['message'] = 'Type updated successfully';
        $_SESSION['type'] = 'success';
    
        header('location: ' . BASE_URL . '/views/authorized/newsTypes/index.php');
        exit();
    } else {
        $title = $_POST['title'];
    }
    
}