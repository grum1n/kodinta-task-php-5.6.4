<?php 

    include('path.php'); 
    $site_title = 'Home page';

?>

<?php include(ROOT_PATH . '/app/includes/public/header.php');?>

<?php echo $site_title; ?>

<?php include(ROOT_PATH . '/views/frontend/home.php');?>

<?php include(ROOT_PATH . '/app/includes/public/footer.php');?>
