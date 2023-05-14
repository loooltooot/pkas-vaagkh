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
    <link rel="stylesheet" href="../src/styles/apply_for_education.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <title>Добавить заявку</title>
</head>

<body>
    <header class="header">
        <div class="wrapper">
            <div class="link">
                <a href="/cms/panel">Вернуться на главную</a>
            </div>
            <div class="heading">
                <h2>
                    Заявки на поступление
                </h2>
            </div>
        </div>
    </header>

    <main>
        <form method="POST" action="../src/php/focuses/add_apply.php" enctype="multipart/form-data">
            <div class="information">
                <div class="title">
                    <p>
                        Ваши данные для связи
                    </p>
                </div>
                <div class="label">
                    <div class="form-group">
                        <label for="login">Ваша Фамилия<span class=""></span></label>
                        <input required name="surname" type="text" id="username" class="form-control" type="">
                    </div>
                    <div class="form-group">
                        <label for="usersurname">Ваше Имя<span class=""></span></label>
                        <input required name="name" type="text" id="usersurname" class="form-control" type="">
                    </div>
                    <div class="form-group">
                        <label for="usersecondname">Ваше Отчество<span class=""></span></label>
                        <input required name="patronim" type="text" id="usersecondname" class="form-control" type="">
                    </div>
                    <div class="form-group">
                        <label for="email">Почта<span class=""></span></label>
                        <input required name="email" type="email" id="email" class="form-control" type="email">
                    </div>
                    <div class="form-group">
                        <label for="file">Файлы<span class=""></span></label>
                        <input name="files[]" multiple type="file" id="file" accept="image/*,application/msword,application/mspowerpoin,text/plain,application/x-compressed,application/pdf" class="form-control">
                    </div>
                    <input type="hidden" name="MAX_FILE_SIZE" value="30000" />
                </div>
            </div>
            <div class="clarifications">
                <div class="title">
                    <p>
                        Обязательные уточнения
                    </p>
                </div>
                <div class="label">

                    <div class="form-group">
                        <label for="profession">Специальность<span class=""></span></label>
                        <select name="profession" id="profession" class="form-control">
                            <option value="0" disabled selected>Выберите специальность</option>
                            <option value="07.02.01 Архитектура">07.02.01 Архитектура</option>
                            <option value="08.02.01 Строительство и эксплуатация зданий и сооружений">08.02.01 Строительство и эксплуатация зданий и сооружений</option>
                            <option value="09.02.07 Информационные системы и программирование">09.02.07 Информационные системы и программирование</option>
                            <option value="54.01.20 Графический дизайнер">54.01.20 Графический дизайнер</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="mark">Аттестационный бал<span class=""></span></label>
                        <input required step="0.01" min="2" max="5" name="mark" type="number" id="mark" class="form-control" type="">
                    </div>
                    <div class="btn-modal">
                        <input type="submit" value="Отправить" class="btn-complaint"></input>
                    </div>

                </div>
            </div>
            </div>
        </form>
    </main>
</body>

</html>