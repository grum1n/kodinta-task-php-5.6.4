<?php

include('../../../path.php');
include(ROOT_PATH . '/app/controllers/newsTypes.php');
adminOnly();
$site_title = 'Dashboard - Edit News Type';

?>

<?php include(ROOT_PATH . '/app/includes/authorized/dashboardHeader.php');?>
<main>

    <?php include(ROOT_PATH . '/app/includes/authorized/dashboardSidebar.php');?>

    <div class="right-container">
        <div class="add-new-form">
            <p>
                <a href="<?php echo BASE_URL . '/views/authorized/newsTypes/index.php' ?>" class="add-btn-green">Back</a>
            </p>
            <h2>Edit news type .id <?php echo $id; ?> </h2>

            <?php include(ROOT_PATH . '/app/helpers/formErrors.php') ?>

            <form action="edit.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>" />
                <div>
                    <label>Type title</label>
                    <input type="text" name="title" value="<?php echo $title; ?>" class="text-input">
                </div>
                <div>
                    <button type="submit" name="update-type-btn" class="btn" con>Update</button>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include(ROOT_PATH . '/app/includes/authorized/dashboardFooter.php');?>