<?php

include('../../../path.php');
include(ROOT_PATH . '/app/controllers/newsTypes.php');
adminOnly();
$site_title = 'Dashboard - News Types';

?>

<?php include(ROOT_PATH . '/app/includes/authorized/dashboardHeader.php'); ?>
<!-- Start Content -->

<div class="">
    <div class="">
        <h2>News Types</h2>
        <?php include(ROOT_PATH . '/app/includes/authorized/messages.php'); ?>

        <table>
            <thead>
                <th>#</th>
                <th>News Types</th>
            </thead>
            <tbody>
                <?php foreach ($newsTypes as $key => $value) : ?>
                    <tr class="">
                        <td><?php echo $key + 1; ?></td>
                        <td>
                            <?php echo $value['title']; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>
<!-- End Content -->
<?php include(ROOT_PATH . '/app/includes/public/footer.php'); ?>