<?php
include("src/php/utils/check_login.php");
include("src/php/utils/conn.php");
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
    <meta name="robots" content="noindex,nofollow">
    <title>PKAS CMS</title>
</head>

<body>
    <header>
        <a href="/">Вернуться на главную</a>
        <a href="../src/php/utils/quit_session.php">Выйти</a>
    </header>
    <main>
        <section>
            <ul id="tables">
                <li>
                    <div class="card">
                        <h3>Новости</h3>
                        <div class="links"><a href="/cms/news">Просмотр</a><a href="/cms/add_news">Добавление</a></div>
                    </div>
                </li>
                <li>
                    <div class="card">
                        <h3>Психолог</h3>
                        <div class="links"><a href="/cms/psychologist">Просмотр</a></div>
                    </div>
                </li>
                <li>
                    <div class="card">
                        <h3>Отзывы</h3>
                        <div class="links"><a href="/cms/feedback">Просмотр</a></div>
                    </div>
                </li>
                <li>
                    <div class="card">
                        <h3>Заявки</h3>
                        <div class="links"><a href="/cms/apply">Просмотр</a><a href="/cms/add_apply">Добавление</a></div>
                    </div>
                </li>
            </ul>
        </section>
    </main>
</body>

</html>