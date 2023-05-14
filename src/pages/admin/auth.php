<?php
session_start();
if (!empty($_SESSION['login_status'])) {
    if ($_SESSION['login_status'] == true) {
        header("Location: /cms/panel");
    }
}
?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../src/styles/reset.css">
    <link rel="stylesheet" href="../src/styles/normalize.css">
    <link rel="stylesheet" href="../src/styles/global.css">
    <link rel="stylesheet" href="../src/styles/auth.css">
    <meta name="robots" content="noindex,nofollow">
    <title>Авторизация</title>
</head>

<body>
    <header>
        <h1>pkasCMS</h1>
        <a href="/">вернуться на главную</a>
    </header>
    <main>
        <div class="auth-dialog">
            <h2 id="auth-h2">Авторизация</h2>
            <form class="card" action="../src/php/focuses/auth_focus.php" method="post">
                <input type="text" name="login" placeholder="Введите логин" required>
                <input type="password" name="password" placeholder="Введите пароль" required>
                <div>
                    <input type="submit" value="Войти">
                </div>
            </form>
        </div>
    </main>
    <div class="decal"></div>

    <?php
    if (!empty($_GET['error']) && $_GET['error'] == "true") {
    ?>
        <div class="error-message">
            <span>Неверный пароль или логин</span>
        </div>
    <?php
    }
    ?>
</body>

</html>