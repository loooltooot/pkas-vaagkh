<?php
function print_news($result, ?bool $is_edit = false)
{
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $imgs = explode("&", $row['files']);
            $fmt = new IntlDateFormatter('ru_RU', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
            $fmt->setPattern("dd MMMM YYYY");
            $date = mb_strtolower($fmt->format(strtotime($row["time"])), 'UTF-8');
?>
            <div class="whole-news-wrapper">
                <div class="news">
                    <div class="img-news">
                        <img src="../static/img/news/<?= $imgs[0] ?>" alt="">
                        <img src="../static/img/news/<?= $imgs[1] ?>" alt="">
                    </div>
                    <div class="text-news">
                        <p class="name-news"><?= mb_strtoupper($row['title']) ?></p><br>
                        <p><?= $date ?></p><br>
                    </div>
                    <div class="news-wrapper">
                        <p class="news-subtext"><?= mb_substr($row['content'], 0, 100) . "..." ?></p>
                        <a href="<?= $is_edit ? '/cms/add_news?id=' : "/news/" ?><?= $row['id'] ?>" class="btn-news">
                            <img src="../static/img/news/arrow.png" alt="">
                            <p><?= $is_edit ? 'редактировать' : 'читать' ?></p>
                        </a>
                    </div>
                    <?php if ($is_edit) {
                    ?>
                        <a class="delete" href="../src/php/focuses/delete_news.php?id=<?= $row['id'] ?>">удалить</a>
                    <?php
                    }
                    ?>
                </div>
            </div>
<?php
        }
    }
}
$conn->close();
