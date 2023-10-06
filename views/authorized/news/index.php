<?php

include('../../../path.php');
include(ROOT_PATH . '/app/controllers/news.php');
adminOnly();
$site_title = 'Dashboard - News';

?>

<?php include(ROOT_PATH . '/app/includes/authorized/dashboardHeader.php');?>
<main>

    <?php include(ROOT_PATH . '/app/includes/authorized/dashboardSidebar.php');?>

    <div class="right-container"">
        <div class="card">
            <p>
                <a href="<?php echo BASE_URL . '/views/authorized/news/create.php' ?>" class="add-btn-green">ADD NEWS</a>
            </p>
            <h2>News</h2>
            <?php include(ROOT_PATH . '/app/includes/authorized/messages.php'); ?>

            <table>
                <thead>
                    <th>#</th>
                    <th>News</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php if(count($news) > 0) : ?>
                        <?php foreach ($news as $key => $value) : ?>
                            <tr class="">
                                <td><?php echo $key + 1; ?></td>
                                <td>
                                    <?php echo $value['short_text']; ?>
                                </td>
                                <td>
                                    <a href="" class="action-btn-green">EDIT</a>
                                    <a href=""class="action-btn-red">DELETE</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                        <?php else : ?>
                        
                            <tr class="">
                                <td>
                                    <?php echo 'No data'; ?>
                                </td>
                            </tr>
                        

                    <?php endif; ?>
                </tbody>
            </table>

        </div>
    </div>
</main>

<?php include(ROOT_PATH . '/app/includes/authorized/dashboardFooter.php');?>