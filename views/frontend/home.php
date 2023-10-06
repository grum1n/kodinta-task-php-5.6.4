<?php
include(ROOT_PATH . "/app/controllers/newsTypes.php");

$news = array();

if (isset($_GET['nt_id'])) {
    $news = getNewsByTypeId($_GET['nt_id']);
} else {
    $news = getPublishedNews();
}

krsort($news);
?>
<main class="page-wrapper">
    <!-- content -->
    <div class="content clearfix">

        <div class="page-content">
            <h1 class="recent-posts-title">News <?php echo '( ' . count($news) . ' )'; ?></h1>

            <?php foreach ($news as $card) : ?>
                <div class="post clearfix">

                    <img src="https://tecdn.b-cdn.net/img/new/standard/nature/186.jpg" class="post-image" alt="">

                    <div class="post-content">

                        <h2 class="post-title"><a href="news.php?id=<?php echo $card['id']; ?>"><?php echo $card['short_text']; ?></a></h2>

                        <div class="post-info">
                            <i class="fa fa-user-o"></i><?php echo $card['full']; ?>
                            &nbsp;
                            <i class="fa fa-calendar"></i> <?php //echo date('F j, Y', strtotime($card['	visible_at'])); 
                                                            ?>
                        </div>
                        <p class="post-body">
                            <?php //echo html_entity_decode(substr($card['body'], 0, 150) . '...'); 
                            ?>
                        </p>
                        <a href="news.php?id=<?php echo $card['id']; ?>" card="read-more">Read More</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <div class="sidebar">
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
    <!-- // content -->
</main>