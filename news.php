<?php 

    include('path.php'); 
    include(ROOT_PATH . "/app/controllers/news.php");
    $site_title = 'news page';
    $info = array();
?>

<?php
    if(isset($_GET['id'])){
        $info = selectOne('news', $_GET['id']);
    }
?>

<?php include(ROOT_PATH . '/app/includes/public/header.php');?>

<?php echo $site_title; ?>
<?php echo $info['short_text'] ; ?>

<?php include(ROOT_PATH . '/app/includes/public/footer.php');?>