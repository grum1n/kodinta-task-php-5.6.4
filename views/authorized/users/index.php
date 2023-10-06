<?php
include('../../../path.php');
include(ROOT_PATH . '/app/controllers/users.php');
adminOnly();
$site_title = 'Dashboard';

?>
<?php include(ROOT_PATH . '/app/includes/authorized/dashboardHeader.php');?>
<main>

    <?php include(ROOT_PATH . '/app/includes/authorized/dashboardSidebar.php');?>

    <div class="right-container">
        <div class="card">
            <p>
                <a href="<?php echo BASE_URL . '/views/authorized/users/create.php' ?>" class="add-btn-green">ADD USER</a>
            </p>
            <h2>Users</h2>
            <?php include(ROOT_PATH . '/app/includes/authorized/messages.php'); ?>

            <table>
                <thead>
                    <th>#</th>
                    <th>News</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php if(count($users) > 0) : ?>
                        <?php foreach ($users as $key => $value) : ?>
                            <tr class="">
                                <td><?php echo $key + 1; ?></td>
                                <td>
                                    <?php echo $value['user']; ?>
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