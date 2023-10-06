<?php

include('../../../path.php');
include(ROOT_PATH . '/app/controllers/news.php');
adminOnly();
$site_title = 'Dashboard - Edit News';

?>

<?php include(ROOT_PATH . '/app/includes/authorized/dashboardHeader.php');?>
<main>

    <?php include(ROOT_PATH . '/app/includes/authorized/dashboardSidebar.php');?>

    <div class="right-container">
        <div class="add-new-form">
            <p>
                <a href="<?php echo BASE_URL . '/views/authorized/news/index.php' ?>" class="add-btn-green">Back</a>
            </p>
            <h2>Edit <?php echo $id; ?> <?php echo $short_text; ?></h2>

            <?php include(ROOT_PATH . '/app/helpers/formErrors.php') ?>

            <form action="edit.php" method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>" />
                <div>
                    <label>Short </label>
                    <input type="text" name="short_text" value="<?php echo $short_text; ?>" class="text-input">
                </div>

                <div>
                    <label>Full</label>
                    <textarea class="text-input" name="full" id="body" ><?php echo $full; ?></textarea>
                </div>

                <div class="">
                    <?php if (empty($visible)) : ?>
                        <label>
                            <input type="checkbox" name="visible" value="<?php echo $visible; ?>"/> visible
                        </label>
                    <?php else : ?>
                        <label>
                            <input type="checkbox" name="visible" checked /> visible
                        </label>
                    <?php endif; ?>
                </div>

                <div class="">
                    <select class="" name="news_type_id" >
                        <option value="">Select a news type</option>

                        <?php foreach ($news_types as $key => $type) : ?>
                            <?php if (!empty($news_type_id) && $news_type_id == $type['id']) : ?>
                                <option selected value="<?php echo $type['id']; ?>"><?php echo $type['title']; ?></option>
                            <?php else : ?>
                                <option value="<?php echo $type['id']; ?>"><?php echo $type['title']; ?></option>
                            <?php endif; ?>

                        <?php endforeach; ?>

                    </select>
                </div>
                <input type="hidden" name="updated_at" value="<?php echo (new \DateTime('NOW', new DateTimeZone('Europe/Vilnius')))->format('Y-m-d H:i:s'); ?>"/>

                <div>
                    <label for="Visible">Visible at: <?php echo $visible_at; ?></label>
                    <input type="date" id="Visible" name="visible_at" value="<?php echo date("Y-m-d", strtotime($visible_at)); ?>" min="2023-10-03" max="2025-12-31" class="text-input" />
                </div>

                <div>
                    <button type="submit" name="update-news-btn" class="btn" con>Update</button>
                </div>
            </form>
        </div>
    </div>
</main>
<?php include(ROOT_PATH . '/app/includes/authorized/dashboardFooter.php');?>