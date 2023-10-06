<?php

include('../../../path.php');
include(ROOT_PATH . '/app/controllers/newsTypes.php');
adminOnly();
$site_title = 'Dashboard - News Types';

?>

<?php include(ROOT_PATH . '/app/includes/authorized/dashboardHeader.php'); ?>
<main>

    <?php include(ROOT_PATH . '/app/includes/authorized/dashboardSidebar.php'); ?>

    <div class="right-container">
        <div class="card">
            <p>
                <a href="<?php echo BASE_URL . '/views/authorized/newsTypes/create.php' ?>" class="add-btn-green">ADD TYPE</a>
            </p>
            <h2>News Types</h2>

            <?php include(ROOT_PATH . '/app/includes/authorized/messages.php'); ?>

            <table>
                <thead>
                    <th>#</th>
                    <th>News Types</th>
                    <th>Action</th>
                </thead>
                <tbody>
                    <?php foreach ($newsTypes as $key => $value) : ?>
                        <tr class="">
                            <td><?php echo $key + 1; ?></td>
                            <td>
                                <?php echo $value['title']; ?>
                            </td>
                            <td>
                                <a href="edit.php?id=<?php echo $value['id']; ?>" class="action-btn-green">EDIT</a>
                                <a href="index.php?del_id=<?php echo $value['id']; ?>" onclick="return confirm('Are you sure to delete this type?')" class="action-btn-red">DELETE</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>
    </div>
</main>
<?php include(ROOT_PATH . '/app/includes/authorized/dashboardFooter.php'); ?>