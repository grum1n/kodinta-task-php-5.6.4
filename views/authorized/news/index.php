<?php

include('../../../path.php');
include(ROOT_PATH . '/app/controllers/news.php');
adminOnly();
$site_title = 'Dashboard - News';

?>

<?php include(ROOT_PATH . '/app/includes/authorized/dashboardHeader.php'); ?>
<!-- Start Content -->

<div class="">
    <div class="">
        <h2>News</h2>
        <?php include(ROOT_PATH . '/app/includes/authorized/messages.php'); ?>
        <p>
            <a href="<?php echo BASE_URL . '/views/authorized/news/create.php' ?>">Add news</a>
        </p>

        <table>
            <thead>
                <th>#</th>
                <th>News</th>
            </thead>
            <tbody>
                <?php if(count($news) > 0) : ?>
                    <?php foreach ($news as $key => $value) : ?>
                        <tr class="">
                            <td><?php echo $key + 1; ?></td>
                            <td>
                                <?php echo $value['short']; ?>
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
<!-- End Content -->
<?php include(ROOT_PATH . '/app/includes/public/footer.php'); ?>