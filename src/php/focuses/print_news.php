<?php
function print_news($result)
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
                        <a href="/news/<?= $row['id'] ?>" class="btn-news">
                            <img src="../static/img/news/arrow.png" alt="">
                            <p>читать</p>
                        </a>
                    </div>
                </div>
            </div>
<?php
        }
    }
}
$conn->close();
