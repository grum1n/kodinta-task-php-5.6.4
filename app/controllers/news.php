<?php
include_once(ROOT_PATH . "/app/config/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");
include(ROOT_PATH . "/app/helpers/validateNews.php");

$news = selectAll('news');
krsort($news);
$news_types = selectAll('news_type');
$errors = array();
$id ='';
$short_text = '';
$full = '';
$visible = '';
$news_type_id = '';
$visible_at = '';

if(isset($_POST['create-news'])){
    adminOnly();
    
    $errors = validateNews($conn, $_POST);
    
    if (count($errors) === 0) {
        unset($_POST['create-news']);
        $short_text = $_POST['short_text'];
        $full = $_POST['full'];
        $visible = isset($_POST['visible']) ? 1 : 0;
        $news_type_id = $_POST['news_type_id'];
        $created_at = $_POST['created_at'];
        $visible_at = $_POST['visible_at'];
        $sql = "INSERT INTO news(short_text,full,visible,news_type_id,created_at,visible_at) VALUES('$short_text','$full','$visible','$news_type_id','$created_at','$visible_at');";
        mysqli_query($conn, $sql);
        $_SESSION['short_text'] = $short_text;
        $_SESSION['message'] = 'News created successfully';
        $_SESSION['type'] = 'success';
        header('Location: ' . BASE_URL . '/views/authorized/news/index.php');
        exit();
    } else {
        $short_text = $_POST['short_text'];
        $full = $_POST['full'];
        $visible = $_POST['visible_at'];
        $news_type_id = $_POST['news_type_id'];
        $visible_at = $_POST['visible_at'];
    }
}

if (isset($_GET['news_id'])) {
    $news_id = $_GET['news_id'];
    $news_type = selectIdForEdit('news', $news_id);
    $id = $news_type['id'];
    $short_text = $news_type['short_text'];
    $full = $news_type['full'];
    $visible = $news_type['visible'];
    $news_type_id = $news_type['news_type_id'];
    $updated_at = $news_type['updated_at'];
    $visible_at = $news_type['visible_at'];
}

if (isset($_GET['news_del_id'])) {
    adminOnly();
    $id = $_GET['news_del_id'];
    $sql = "DELETE FROM news  WHERE id='$id'";
    mysqli_query($conn, $sql);
    $_SESSION['message'] = 'News deleted successfully';
    $_SESSION['type'] = 'success';
    header('location: ' . BASE_URL . '/views/authorized/news/index.php');
    exit();
}

if (isset($_POST['update-news-btn'])) {
    adminOnly();
    $errors = validateNews($conn, $_POST);
    if (count($errors) === 0) {
        $id = $_POST['id'];
        unset($_POST['update-type-btn'], $_POST['id']);
        $short_text = $_POST['short_text'];
        $full = $_POST['full'];
        $visible = isset($_POST['visible']) ? 1 : 0;
        $news_type_id = $_POST['news_type_id'];
        $updated_at = $_POST['updated_at'];
        $visible_at = $_POST['visible_at'];
        $sql = "UPDATE news SET short_text='$short_text',full='$full',visible='$visible',news_type_id='$news_type_id',updated_at='$updated_at',visible_at='$visible_at' WHERE id='$id'";
        mysqli_query($conn, $sql);
        $_SESSION['message'] = 'News updated successfully';
        $_SESSION['type'] = 'success';
        header('location: ' . BASE_URL . '/views/authorized/news/index.php');
        exit();
    } else {
        $short_text = $_POST['short_text'];
        $full = $_POST['full'];
        $visible = isset($_POST['visible']) ? 1 : 0;
        $news_type_id = $_POST['news_type_id'];
        $updated_at = $_POST['updated_at'];
        $visible_at = $_POST['visible_at'];
    }
}