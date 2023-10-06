<?php 

    include('path.php'); 
    include(ROOT_PATH . "/app/controllers/news.php");

    $info = array();
    $newsTypes = selectAll('news_type');
    $site_title = '';

?>

<?php
    if(isset($_GET['id'])){
        $info = selectOne('news', $_GET['id']);
        $site_title = $info['short_text'];
    }
?>

<?php include(ROOT_PATH . '/app/includes/public/header.php');?>

<?php include(ROOT_PATH . '/views/frontend/single.php');?>

<?php include(ROOT_PATH . '/app/includes/public/footer.php');?>