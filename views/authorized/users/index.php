<?php

include('../../../path.php');
include(ROOT_PATH . '/app/controllers/users.php');
adminOnly();
$site_title = 'Dashboard - Users';

?>

<?php include(ROOT_PATH . '/app/includes/authorized/dashboardHeader.php'); ?>
<!-- Start Content -->

<div class="">
    <div class="">
        <h2>Users</h2>
        <?php include(ROOT_PATH . '/app/includes/authorized/messages.php'); ?>

        <table>
            <thead>
                <th>#</th>
                <th>Username</th>
            </thead>
            <tbody>
                <?php foreach ($users as $key => $value) : ?>
                    <tr class="">
                        <td><?php echo $key + 1; ?></td>
                        <td>
                            <?php echo $value['user']; ?>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </div>
</div>
<!-- End Content -->
<?php include(ROOT_PATH . '/app/includes/public/footer.php'); ?>