<?php

include('../../../path.php');
include(ROOT_PATH . '/app/controllers/newsTypes.php');
adminOnly();
$site_title = 'Dashboard - Add News Type';

?>

<?php include(ROOT_PATH . '/app/includes/authorized/dashboardHeader.php');?>
<main>

    <?php include(ROOT_PATH . '/app/includes/authorized/dashboardSidebar.php');?>

    <div class="right-container">
        <div class="add-new-form">
            <p>
                <a href="<?php echo BASE_URL . '/views/authorized/newsTypes/index.php' ?>" class="add-btn-green">Back</a>
            </p>
            <h2>Add news type</h2>

            <?php include(ROOT_PATH . '/app/helpers/formErrors.php') ?>

            <form action="create.php" method="post">
                <div>
                    <label>Type title</label>
                    <input type="text" name="title" value="<?php echo $title; ?>" class="text-input">
                </div>
                <div>
                    <button type="submit" name="add-type-btn" class="btn" con>Add type</button>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include(ROOT_PATH . '/app/includes/authorized/dashboardFooter.php');?>