<?php

include('../../../path.php');
include(ROOT_PATH . '/app/controllers/news.php');
adminOnly();
$site_title = 'Dashboard - News';

?>

<?php include(ROOT_PATH . '/app/includes/authorized/dashboardHeader.php'); ?>
<main>

    <?php include(ROOT_PATH . '/app/includes/authorized/dashboardSidebar.php'); ?>

    <div class="right-container"">
        <div class=" card">
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
                <?php if (count($news) > 0) : ?>
                    <?php foreach ($news as $key => $value) : ?>
                        <tr class="">
                            <td><?php echo $key + 1; ?></td>
                            <td>
                                <b>
                                    <?php echo $value['short_text']; ?>
                                    <?php
                                    $date = (new \DateTime('NOW', new DateTimeZone('Europe/Vilnius')))->format('Y-m-d H:i:s');
                                    if ($value['visible'] == 1 && $value['visible_at'] < $date) : ?>

                                        <span class="" style="background-color:aqua;padding:0 5px;">
                                            <?php echo 'Frontend'; ?>
                                        </span>
                                    <?php endif; ?>
                                </b>
                                <br>
                                <?php echo $value['full']; ?>
                                <br>
                                Image:
                                <br>
                                <?php foreach ($news_types as $key => $type) : ?>
                                    <?php if (!empty($value['news_type_id']) && $value['news_type_id'] == $type['id']) : ?>
                                        News type: <?php echo $type['title']; ?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <br>
                                <?php if ($value['updated_at']) {
                                    echo 'Updated at:' . $value['updated_at'];
                                }
                                ?>
                                Created at: <?php echo $value['created_at']; ?>
                                <p style="width:100%;text-align:left;">
                                    <?php if ($value['visible'] == 1) : ?>
                                        <span class="success">Is visible from: <?php echo $value['visible_at']; ?></span>
                                    <?php else : ?>
                                        <span class="error">Is not visible. </span>Visible at: <?php echo $value['visible_at']; ?>
                                    <?php endif; ?>

                                </p>
                            </td>
                            <td>
                                <a href="edit.php?news_id=<?php echo $value['id']; ?>" class="action-btn-green">EDIT</a>
                                <a href="index.php?news_del_id=<?php echo $value['id']; ?>" onclick="return confirm('Are you sure to delete this news?')" class="action-btn-red">DELETE</a>
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