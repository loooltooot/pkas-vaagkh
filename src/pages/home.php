<?php
include("src/php/utils/conn.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles/reset.css">
    <link rel="stylesheet" href="src/styles/normalize.css">
    <link rel="stylesheet" href="src/styles/global.css">
    <link rel="stylesheet" href="src/styles/home.css">
    <title>Колледж архитектуры и строительства</title>
</head>

<body>
    <!-- Start header -->
    <header>
        <div class="wrapper">
            <span class="big-text">МИНИСТЕРСТВО ОБРАЗОВАНИЯ ПЕНЗЕНСКОЙ ОБЛАСТИ <br>
                ГОСУДАРСТВЕННОЕ АВТОНОМНОЕ ПРОФЕССИОНАЛЬНОЕ <br>
                ОБРАЗОВАТЕЛЬНОЕ УЧРЕЖДЕНИЕ ПЕНЗЕНСКОЙ ОБЛАСТИ</span>
            <div class="intro">
                <h1>ПКАС</h1>
                <div class="header-logo">
                    <img style="width:13.02vw;height:13.02vw" src="static/img/logo.png" alt="logo">
                </div>
                <div class="under-intro">
                    <h2>Пензенский колледж архитектуры <br>
                        и строительства
                    </h2>
                </div>
            </div>
        </div>
    </header>
    <!-- End header -->

    <!-- Start navigation -->
    <div class="nav-area">
        <div class="wrapper">
            <nav>
                <ul>
                    <div>
                        <span class="row">Навигация</span>
                    </div>
                    <div>
                        <span class="row">Для ученика</span>
                        <ul class="row-area">
                            <li><a href="/news">Новости</a></li>
                            <li><a href="/apply_for_education">Подать заявление</a></li>
                            <li><a href="/professions">Навигатор профессий</a></li>
                            <li><a href="/dormitory">Общежитие</a></li>
                            <li><a href="/timetable">Расписание</a></li>
                            <li><a href="/history">История колледжа</a></li>
                            <li><a href="/documents">Документы</a></li>
                            <li><a href="/actions">Мероприятия</a></li>
                            <li><a href="/psychologist">Страница психолога</a></li>
                            <li><a href="/workshops">Мастерские</a></li>
                        </ul>
                    </div>
                    <div>
                        <span class="row">Для преподавателя</span>
                        <ul class="row-area">
                            <li><a href="/for_teachers/certification">Аттестация педагогических
                                    работников</a></li>
                            <li><a href="/for_teachers/scientific_methodological_support">Научно-методическое
                                    обеспечение
                                    образовательного
                                    процесса</a></li>
                        </ul>
                    </div>
                </ul>
            </nav>
        </div>
    </div>
    <!-- End navigation -->

    <!-- Start tel menu -->
    <div class="wrapper">
        <section class="tel-menu-area">
            <div class="tel-menu">
                <div>
                    <p>
                        Телефоны "горячей линии" в колледже, для
                        консультирования клиентов, оформления заявок,
                        оказания технической поддержки:
                    </p>
                </div>
                <div class="tel-n-hotline">
                    <div class="tel">
                        <p>8 (908) 530-38-08</p>
                        <p>8 (8412) 52-18-58</p>
                        <p>8 (8412) 43-44-86</p>
                    </div>
                    <div class="hotline">
                        Время работы "горячей <br>
                        линии": рабочие дни с <br>
                        9.00 до 12.00, с 13.00 до <br>
                        16.00
                    </div>
                </div>
            </div>
            <div class="btn-tel">
                <a href="#">
                    <p>Звоните прямо сейчас</p>
                </a>
            </div>
        </section>
    </div>
    <!-- End tel menu -->

    <!-- Start main news -->
    <main>
        <div class="main-news-area">
            <div class="wrapper">
                <div class="main-news">
                    <h2>ГЛАВНЫЕ <br>
                        НОВОСТИ
                    </h2>
                    <p>Пензенского колледжа архитектуры и <br>
                        строительства</p>
                    <div class="news-list">
                        <?php
                        $result = $conn->query("select * from news order by time limit 4");
                        include("src/php/focuses/print_news.php");
                        print_news($result);
                        ?>
                    </div>
                    <a href="/news" class="all-news">ЧИТАТЬ ВСЕ НОВОСТИ</a>
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
    <!-- End Modal fidback-->
</body>

</html>