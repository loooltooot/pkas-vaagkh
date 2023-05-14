<?php
include('../utils/check_login.php');
include('../utils/conn.php');

if (!empty($_POST['title'])) {
    if (!empty($_FILES["files"])) {
        $uploadDirectory = "../../../static/img/news/";
        for ($i = 0; $i < count($_FILES["files"]["name"]); $i++) {
            $tmpFilePath = $_FILES["files"]["tmp_name"][$i];
            $newFilePath = $uploadDirectory . $_FILES["files"]["name"][$i];
            $imgs .= $_FILES["files"]["name"][$i] . '&';
            move_uploaded_file($tmpFilePath, $newFilePath);
            echo $_FILES["files"]["name"][$i];
        }

        $imgs = substr($imgs, 0, strlen($imgs) - 1);
    }

    if ($_POST['isEdit'] != true) {
        $query = $conn->prepare("insert into news (title, content, time, files) values (?, ?, ?, ?)");
        $query->bind_param('ssss', $_POST['title'], $_POST['content'], $_POST['time'], $imgs);
        $query->execute();
        $query->close();
    } else {
        $query = $conn->prepare("update news set title = ?, content = ?, time = ?, files = ? where id = ?");
        $query->bind_param('ssssi', $_POST['title'], $_POST['content'], $_POST['time'], $imgs, $_POST['id']);
        $query->execute();
        $query->close();
    }
}

$conn->close();
header('Location: /cms/news');
