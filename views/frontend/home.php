<?php
include(ROOT_PATH . "/app/controllers/newsTypes.php");
$news = array();

if (isset($_GET['nt_id'])) {
    $news = getNewsByTypeId($_GET['nt_id']);
    // $postsTitle = "You searched for posts under '" . $_GET['name'] . "'";
} else if (isset($_POST['search-term'])) {
    // $postsTitle = "You searched for '" . $_POST['search-term'] . "'";
    // $posts = searchPosts($_POST['search-term']);
} else {
    $news = getPublishedNews();
}

// dd($news);
?>
<main>

    <div>
        <h2>
            News types

        </h2>


        <?php foreach ($newsTypes as $n_type) : ?>
            <div>
                <a href="<?php echo BASE_URL . '/index.php?nt_id=' . $n_type['id'] . '&title=' . $n_type['title']; ?>">
                    <?php echo $n_type['title']; ?>
                </a>
            </div>
        <?php endforeach; ?>
    </div>

    <h2>
        News list

    </h2>
    <div>
        <ul>
            <li>5 News per page </li>
            <li>10 News per page </li>
            <li>20</li>
        </ul>
    </div>

    <?php foreach ($news as $card) : ?>
        <div style="border:1px dotted #ff6600;padding:4px;margin-bottom:6px;">
            <p>
                <a href="news.php?id=<?php echo $card['id']; ?>">
                    <?php echo $card['short_text']; ?>
                </a>
              
                <br />

                <?php echo date('F j, Y'); ?>

            </p>
            <p>

                <?php
                if (date('F j, Y') == $card['visible_at']) {
                    echo date('F j, Y', strtotime($card['visible_at']));
                } else {
                    echo 'news are here... wait';
                }
                ?>

            </p>

        </div>
    <?php endforeach; ?>
</main>