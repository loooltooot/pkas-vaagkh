<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="src/styles/reset.css">
    <link rel="stylesheet" href="src/styles/normalize.css">
    <link rel="stylesheet" href="src/styles/global.css">
    <link rel="stylesheet" href="src/styles/psychologist.css">
    <title>Страница психолога</title>
</head>

<body>
    <!-- Start header -->
    <header class="header">
        <div class="wrapper">
            <div class="link">
                <a href="/">Вернуться на главную</a>
            </div>
            <div class="heading">
                <h2>
                    СТРАНИЦА ПСИХОЛОГА
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
                    <div class="test-area">
                        <div class="test-pic">
                            <img src="../../static/img/psychologist/grave&circle.png" alt="">
                        </div>
                        <div class="ktoti">
                            <p>
                                кто ты
                            </p>
                            <p>
                                - в этой траве?
                            </p>
                        </div>
                        <div class="test">
                            <div class="trava-pic">
                                <img src="../../static/img/psychologist/trava.png" alt="">
                            </div>
                            <div class="test-text">
                                <p>
                                    пройди тест: “кто ты - в этой траве?” и узнай свою социальную роль в жизни колледжа!
                                </p>
                                <p>
                                    опрос полностью анонимный
                                </p>
                                <div class="btn-modal">
                                    <button class="btn-complaint">Пройти тест</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="question-area">
                        <div class="question-name">
                            <p>
                                ЗАДАЙ ВОПРОС ПСИХОЛОГУ
                            </p>
                        </div>
                        <div class="question-main">
                            <div class="label">
                                <form>
                                    <div class="form-group">
                                        <label for="login">Ваша Фамилия<span class=""></span></label>
                                        <input type="text" id="username" class="form-control" type="">
                                    </div>
                                    <div class="form-group">
                                        <label for="login">Ваше Имя<span class=""></span></label>
                                        <input type="text" id="usersurname" class="form-control" type="">
                                    </div>
                                    <div class="form-group">
                                        <label for="login">Ваше Отчетство<span class=""></span></label>
                                        <input type="text" id="usersecondname" class="form-control" type="">
                                    </div>
                                    <div class="form-group">
                                        <label for="login">Почта<span class=""></span></label>
                                        <input type="text" id="email" class="form-control" type="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="login">Тема<span class=""></span></label>
                                        <input type="text" id="theme" class="form-control" type="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Текст<span class=""></span></label>
                                        <textarea class="form-control" name="con_message"></textarea>
                                    </div>
                                    <div class="btn-modal">
                                        <button class="btn-complaint">Отправить</button>
                                    </div>
                                </form>
                            </div>
                        </div>
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
</body>

</html>