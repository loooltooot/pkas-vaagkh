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
    <link rel="stylesheet" href="../src/styles/news.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../src/js/bvi/css/bvi.min.css">
    <title>Новости</title>
</head>

<body>
    <!-- Start header -->
    <header class="header">
        <div class="wrapper">
            <div class="link">
                <a href="/cms/panel">Вернуться на главную</a>
            </div>
            <div class="heading">
                <h2>
                    ГЛАВНЫЕ НОВОСТИ
                </h2>
                <p>
                    Пензенского колледжа архитектуры и
                    строительства
                </p>
            </div>
        </div>
    </header>
    <!-- End header -->

    <!-- Start main news -->
    <main>
        <div class="main-news-area">
            <div class="wrapper">
                <div class="main-news">
                    <div class="news-list">
                        <?php
                        $result = $conn->query("select * from news order by time desc");
                        include("src/php/focuses/print_news.php");
                        print_news($result, true);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </main>

</body>

</html>