<?php
include('../../../path.php');
include(ROOT_PATH . '/app/controllers/users.php');
adminOnly();
$site_title = 'Dashboard';

?>
<?php include(ROOT_PATH . '/app/includes/authorized/dashboardHeader.php'); ?>
<main>

    <?php include(ROOT_PATH . '/app/includes/authorized/dashboardSidebar.php'); ?>

    <div class="right-container">
        <div class="card">
            <h2>Users</h2>
            <?php include(ROOT_PATH . '/app/includes/authorized/messages.php'); ?>

            <table>
                <thead>
                    <th>#</th>
                    <th>News</th>
                    <th>&nbsp;</th>
                </thead>
                <tbody>
                    <?php if (count($users) > 0) : ?>
                        <?php foreach ($users as $key => $value) : ?>
                            <tr class="">
                                <td><?php echo $key + 1; ?></td>
                                <td>
                                    <?php echo $value['user']; ?>
                                </td>
                                <td>
                                    &nbsp;
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

<?php include(ROOT_PATH . '/app/includes/authorized/dashboardFooter.php'); ?>