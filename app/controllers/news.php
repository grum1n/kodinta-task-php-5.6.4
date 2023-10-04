<?php
include_once(ROOT_PATH . "/app/config/db.php");
include(ROOT_PATH . "/app/helpers/middleware.php");

$news = selectAll('news');
$news_types = selectAll('news_type');

$errors = array();

$short_text = '';
$full = '';
$visible = '';
$news_type_id = '';
$visible_at = '';

if(isset($_POST['create-news'])){
    // adminOnly();
    // dd($_POST);
    
    if (count($errors) === 0) {
        unset($_POST['create-news']);

        //   dd($_POST);
        
        $short_text = $_POST['short_text'];
        $full = $_POST['full'];
        $visible = isset($_POST['visible']) ? 1 : 0;
        $news_type_id = $_POST['news_type_id'];
        $visible_at = $_POST['visible_at'];
        
        $sql = "INSERT INTO news(short_text,full,visible,news_type_id,visible_at) VALUES('$short_text','$full','$visible','$news_type_id','$visible_at');";
        // dd($sql);
        mysqli_query($conn, $sql);
        // dd('pavuko');
        
        $_SESSION['short_text'] = $short_text;
        $_SESSION['message'] = 'News created successfully';
        $_SESSION['type'] = 'success';
        header('Location: ' . BASE_URL . '/views/authorized/news/index.php');
        exit();
    } else {
        $short_text = $_POST['short_text'];
        $full = $_POST['full'];
        $visible = $_POST['visible'];
        $news_type_id = $_POST['news_type_id'];
        $visible_at = $_POST['visible_at'];
    }
}