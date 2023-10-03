<?php

include('../../path.php');
include(ROOT_PATH . '/app/controllers/users.php');
adminOnly();
$site_title = 'Dashboard';

?>

<?php include(ROOT_PATH . '/app/includes/authorized/dashboardHeader.php'); ?>

content Dashboard

<br />

<?php include(ROOT_PATH . '/app/includes/authorized/messages.php'); ?>

<?php include(ROOT_PATH . '/app/includes/public/footer.php'); ?>