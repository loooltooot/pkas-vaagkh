<?php
include("src/php/utils/check_login.php");
include("src/php/utils/conn.php");

$result = $conn->query("select * from aplly");
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
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <title>Заявки на поступление</title>
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
        <ul class="table">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <li>
                        <article>
                            <div class="contacts">
                                <span><?= $row['surname'] ?></span>
                                <span><?= $row['name'] ?></span>
                                <span><?= $row['patronim'] ?></span>
                                <span><?= $row['email'] ?></span>
                            </div>

                            <div class="content">
                                <h3><?= $row['profession'] ?></h3>
                                <span><?= $row['mark'] ?></span>
                            </div>
                            <?php
                            foreach (explode('&', $row['files']) as $file) {
                            ?>
                                <a href="../static/uploads/applyes/<?= $file ?>"><?= $file ?></a>
                            <?php
                            }
                            ?>
                            <a class="delete" href="../src/php/focuses/delete_apply.php?id=<?= $row['id'] ?>">удалить</a>
                        </article>
                    </li>
            <?php
                }
            }
            ?>
        </ul>
    </main>
</body>

</html>