<?php

include('../../path.php');
include(ROOT_PATH . '/app/controllers/users.php');
adminOnly();
$site_title = 'Dashboard';

?>
<?php include(ROOT_PATH . '/app/includes/authorized/dashboardHeader.php');?>
<main>

    <?php include(ROOT_PATH . '/app/includes/authorized/dashboardSidebar.php');?>
    
    <div class="right-container" >
       dashboard content
    </div>   
</main>

<?php include(ROOT_PATH . '/app/includes/authorized/dashboardFooter.php');?>
