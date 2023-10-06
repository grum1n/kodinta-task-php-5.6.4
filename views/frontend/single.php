<div class="page-wrapper">
    <div class="content clearfix">
        <div class="page-content single">
            <h2 style="text-align: center;"><?php echo $info['short_text']; ?> </h2>
            <br>

            <?php echo html_entity_decode($info['full']); ?>
        </div>

        <div class="sidebar single">
          
            <div class="section popular">
                <h2>Popular</h2>
            </div>

            <div class="section topics">
                <h2>News types</h2>
                <ul>
                    <?php foreach ($newsTypes as $n_type) : ?>
                        <li>
                            <a href="<?php echo BASE_URL . '/index.php?nt_id=' . $n_type['id'] . '&title=' . $n_type['title']; ?>">
                                <?php echo $n_type['title']; ?>
                            </a>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>

        </div>
    </div>
</div>