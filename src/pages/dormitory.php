<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles/reset.css">
    <link rel="stylesheet" href="src/styles/normalize.css">
    <link rel="stylesheet" href="src/styles/global.css">
    <link rel="stylesheet" href="src/styles/dormitory.css">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="src/js/bvi/css/bvi.min.css">
    <script src="src/js/modalController.js" defer></script>
    <title>Общежитие</title>
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
                <a href="/">Вернуться на главную</a>
            </div>
            <div class="heading">
                <h2>
                    ОБЩЕЖИТИЕ
                </h2>
            </div>
        </div>
    </header>
    <!-- End header -->

    <!-- Start main-content -->
    <main>
        <section class="main-content-area">
            <div class="wrapper">
                <div class="main-content">
                    <p>
                        Колледж располагает двумя благоустроенными общежитиями на 590 мест(по адресу ул.набережная р.Пенза 3а, ул.Собинова 7). Все иногородние студенты, нуждающиеся в жилье, обеспечиваются местами.
                    </p>
                    <p>
                        Комнаты общежития по ул.Набережная р.Пенза расположены по секциям и рассчитаны на проживание 2-х и 3-х человек, в общежитии по Собинова коридорного типа – все комнаты трехместные.
                    </p>
                    <p>
                        В общежитиях созданы социально–бытовые условия для проживания и организации досуга. Помещения содержатся в соответствии с установленными санитарными правилами и нормами.
                    </p>
                    <p>
                        Общежития укомплектованы мебелью, бытовым оборудованием, постельными принадлежностями и другим инвентарем. Имеются газифицированные кухни и кухни с электроплитами, душевые комнаты, комнаты для занятий, комнаты отдыха(музыкальная, художественная гостиные, комнаты для игры в настольный теннис), тренажерные залы, физкультурно-оздоровительный центр «Триумф». На 1 этаже общежития по ул.Набережная р. Пенза работают столовая и буфет. Правила проживания в общежитии. Студенческий совет общежития План мероприятий
                    </p>
                </div>
                <div class="main-img">
                    <div class="main-img1">
                        <img src="../../static/img/dormitory/dormitory1.png" alt="">
                    </div>
                    <div class="main-img2">
                        <img src="../../static/img/dormitory/dormitory2.png" alt="">
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- End main-content -->
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
                        <li><button id="showModalButton" class="btn-complaint" href="#">Написать о жалобе</button></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer -->

    <!-- Start Modal feedback -->
    <div class="modal-fid">
        <div id="modal" class="modal">
            <h3>ОБРАТНАЯ СВЯЗЬ</h3>
            <form method="POST" action="src/php/focuses/add_feedback.php">
                <div class="form-group">
                    <label for="username">Ваше ФИО</label>
                    <input required name="full_name" type="text" id="username" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Почта</label>
                    <input required name="email" id="email" class="form-control" type="email">
                </div>
                <div class="form-group">
                    <label for="form-control">Опишите ситуацию</label>
                    <textarea required class="form-control" id="form-control" name="content"></textarea>
                </div>
                <p class="form-subtext">
                    Если у Вас несколько вопросов, напишите отдельное сообщение
                    по каждому
                </p>
                <div class="checkboxes">
                    <div>
                        <input type="checkbox" class="custom-checkbox" id="happy" name="ur_lico">
                        <label for="happy">Сообщение от имени юридического лица</label>
                    </div>
                    <div>
                        <input required type="checkbox" class="custom-checkbox" id="happy1" name="happy">
                        <label for="happy1">Я соглашаюсь с правилами подачи сообщения</label>
                    </div>
                </div>
                <div class="btn-modal">
                    <input type="submit" class="btn-complaint" value="Отправить"></input>
                    <button class="btn-complaint" id="closeModal">Закрыть</button>
                </div>
            </form>
        </div>
    </div>
    <!-- End Modal fidback-->

    <!-- Start points -->
    <div class="images">
        <img src="../../static/img/point.png" alt="">
    </div>
    <!-- End points -->
    <script src="src/js/bvi/js/bvi.min.js"></script>
    <script>
        new isvek.Bvi()
    </script>
</body>

</html>