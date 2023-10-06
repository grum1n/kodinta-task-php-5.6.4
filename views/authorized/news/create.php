<?php

include('../../../path.php');
include(ROOT_PATH . '/app/controllers/news.php');
adminOnly();
$site_title = 'Dashboard - Create news';

?>

<?php include(ROOT_PATH . '/app/includes/authorized/dashboardHeader.php');?>
<main>

    <?php include(ROOT_PATH . '/app/includes/authorized/dashboardSidebar.php');?>

    <div class="right-container">
        <div class="">
            <p class="">
                <a href="<?php echo BASE_URL . '/views/authorized/news/index.php' ?>" class="">Go back</a>
            </p>
            <h2>Create News</h2>

            <?php include(ROOT_PATH . '/app/helpers/formErrors.php') ?>

            <form action="create.php" method="post">
                <div>
                    <label>Short </label>
                    <input type="text" name="short_text" value="<?php echo $short_text; ?>" class="">
                </div>

                <div>
                    <label>Full</label>
                    <textarea class="" name="full" id="body" ><?php echo $full; ?></textarea>
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
                    <label>news types</label>
                    <select class="" name="news_type_id">
                        <option value="">Select a type</option>

                        <?php foreach ($news_types as $key => $type) : ?>
                            <?php if (!empty($news_type_id) && $news_type_id == $type['id']) : ?>
                                <option selected value="<?php echo $type['id']; ?>"><?php echo $type['title']; ?></option>
                            <?php else : ?>
                                <option value="<?php echo $type['id']; ?>"><?php echo $type['title']; ?></option>
                            <?php endif; ?>

                        <?php endforeach; ?>

                    </select>
                </div>

                <div>
                    <label for="start">Visible at:</label>
                    <input type="date" id="start" name="visible_at" value="" min="2023-10-03" max="2025-12-31" />
                </div>

                <div>
                    <button type="submit" name="create-news" class="">Add</button>
                </div>
            </form>
        </div>
    </div>
</main>

<?php include(ROOT_PATH . '/app/includes/authorized/dashboardFooter.php');?>
