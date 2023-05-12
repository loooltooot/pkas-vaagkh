<?php
include("src/php/utils/check_login.php");
include("src/php/utils/conn.php");

$fmt = new IntlDateFormatter('ru_RU', IntlDateFormatter::LONG, IntlDateFormatter::NONE);
$fmt->setPattern("d MMMM YYYY");

$is_edit = false;
if (!empty($_GET['id'])) {
    $query = $conn->prepare("select * from news where id = ?");
    $query->bind_param('i', $_GET['id']);
    $query->execute();
    $query->bind_result($id, $title, $content, $time, $files);
    $query->fetch();
    $query->close();

    $is_edit = true;
}

$date = mb_strtolower($fmt->format($is_edit ? strtotime($time) : time()), 'UTF-8');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/styles/reset.css">
    <link rel="stylesheet" href="../src/styles/normalize.css">
    <link rel="stylesheet" href="../src/styles/global.css">
    <link rel="stylesheet" href="../src/styles/admin.css">
    <link rel="stylesheet" href="../src/styles/edit_news.css">
    <meta name="robots" content="noindex,nofollow">
    <script src="../src/js/previewNews.js" defer></script>
    <script src="../src/js/editNewsController.js" defer></script>
    <title>Новости. Редактирование</title>
</head>

<body>
    <main>
        <div id="edit-mode-wrapper">
            <form action="../src/php/focuses/add_news_focus.php" method="POST" id="form">
                <div class="card">
                    <input type="text" value="<?= $is_edit ? $title : '' ?>" name="title" placeholder="Заголовок" id="title" required>
                </div>
                <div class="card">
                    <input id="date-input" value="<?= $is_edit ? $time : '' ?>" required type="date" name="time" value="<?= date('Y-m-d'); ?>">
                </div>
                <div class="card" id="content-input-wrapper">
                    <textarea required id="content-input" name="content" wrap="soft"><?= $is_edit ? $content : '' ?></textarea>
                    <div id="file-upload-wrapper">
                        <input multiple type="file" name="files" id="files" accept="image/png, image/jpeg">
                    </div>
                    <input id="submit" type="submit" value="Подтвердить">
                </div>
                <input type="hidden" name="id" value="<?= $id ?>">
                <input type="hidden" name="isEdit" value="<?= $is_edit ?>">
                <ul id="fileList">
                    <?php
                    if ($is_edit && strlen($files) > 0) {
                        $files = mb_split('&', $files);
                        foreach ($files as $img) {
                    ?>
                            <li>
                                <img src="../static/img/news/<?= $img ?>" alt="<?= $img ?>">
                                <span class="init-img"><?= $img ?></span>
                            </li>
                    <?php
                        }
                    }
                    ?>
                </ul>
            </form>
        </div>
        <section class="card" id="preview-mode-wrapper">
            <header>
                <h2>Предпросмотр</h2>
                <div class="row-decal"></div>
                <a class="go-back" href="/cms/panel">главная</a>
            </header>
            <article>
                <header>
                    <h3 id="title-preview"><?= $is_edit ? $title : 'Заголовок' ?></h3>
                    <span id="date"><?= $date ?></span>
                </header>
                <p id="content">
                    <?= $is_edit ? $content : 'Контент' ?>
                </p>
            </article>
        </section>
    </main>

    <?php $conn->close(); ?>
</body>

</html>