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

<div class="bvi-button">
    <?php
    include("src/php/utils/bvi_button.php");
    ?>
</div>

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
    <!-- End main news -->
    <div class="spacer"></div>
    <!-- Start footer -->
    <footer>
        <div class="wrapper">
            <div class="footer">
                <div>
                    <span class="row">ВАЖНЫЕ НОМЕРА</span>
                    <ul class="column-area">
                        <li>Телефонная линия "Ребенок в <br>
                            опасности" следственного управления <br>
                            Следственного комитета России по <br>
                            Пензенской области 36-17-19 с <br>
                            мобильных телефонов 123</li>
                        <li>"Телефон доверия" следственного <br>
                            управления Следственного комитета <br>
                            России по Пензенской области <br>
                            36-17-58</li>
                        <li>"Телефон горячей линии По вопросам <br>
                            обновления содержания общего <br>
                            образования на сайтах <br>
                            образовательных организаций в сети <br>
                            "Интернет" 8-800-200-91-85
                        </li>
                    </ul>
                </div>
                <div>
                    <ul class="column-area">
                        <span class="row">КОНТАКТЫ</span>
                        <li>г. Пенза, ул. Набережная р. Пензы, д. 3
                            Администрация: <a href="http://pkas58.ru/article/sitemap">pask_e@mail.ru</a><br>
                            <a href="http://pkas58.ru/article/sitemap ">Карта портала</a> <br>
                            <a href="http://vk.com/pkas_58">Официальная группа вконтакте</a> <br>
                            <a href="http://pkas58.ru/wp/?page_id=77"> Форма обратной связи</a>
                        </li>
                        <li>Вопросы по работе сайта: +7(900)316-04-47 <br>
                            Надежда Юрьевна Щербакова</li>
                    </ul>
                </div>
                <div>
                    <ul class="column-area">
                        <span class="row">ОБРАТНАЯ СВЯЗЬ</span>
                        <li>Есть предложения по организации <br>
                            учебного процесса или знаете, как<br>
                            сделать колледж лучше? </li>
                        <li><button class="btn-complaint" href="#">Написать о жалобе</button></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer -->

    <!-- Start Modal feedback -->
    <div class="modal-fid">
        <div class="modal">
            <h3>ОБРАТНАЯ СВЯЗЬ</h3>
            <form>
                <div class="form-group">
                    <label for="login">Ваше ФИО<span class=""></span></label>
                    <input type="text" id="username" class="form-control" type="">
                </div>
                <div class="form-group">
                    <label for="login">Почта<span class=""></span></label>
                    <input type="text" id="email" class="form-control" type="email">
                </div>
                <div class="form-group">
                    <label for="">Опишите ситуацию<span class=""></span></label>
                    <textarea class="form-control" name="con_message"></textarea>
                </div>
                <p class="form-subtext">
                    Если у Вас несколько вопросов, напишите отдельное сообщение
                    по каждому
                </p>
                <div class="checkboxes">
                    <div>
                        <input type="checkbox" class="custom-checkbox" id="happy" name="happy" value="yes">
                        <label for="happy">Сообщение от имени юридического лица</label>
                    </div>
                    <div>
                        <input type="checkbox" class="custom-checkbox" id="happy1" name="happy" value="yes">
                        <label for="happy1">Я соглашаюсь с правилами подачи сообщения</label>
                    </div>
                </div>
                <div class="btn-modal">
                    <button class="btn-complaint">Добавить файл</button>
                    <button class="btn-complaint">Отправить</button>
                </div>
            </form>
        </div>
    </div>
    <!-- End Modal feedback-->
    <script src="../src/js/bvi/js/bvi.min.js"></script>
    <script>
        new isvek.Bvi()
    </script>
</body>

</html>