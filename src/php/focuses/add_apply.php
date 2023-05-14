<?php
include("../utils/conn.php");

var_dump($_FILES['files']);

if (!empty($_FILES["files"])) {
    $uploadDirectory = "../../../static/uploads/applyes/";
    for ($i = 0; $i < count($_FILES["files"]["name"]); $i++) {
        $tmpFilePath = $_FILES["files"]["tmp_name"][$i];
        $newFilePath = $uploadDirectory . $_FILES["files"]["name"][$i];
        $files .= $_FILES["files"]["name"][$i] . '&';
        move_uploaded_file($tmpFilePath, $newFilePath);
        echo $_FILES["files"]["name"][$i];
    }

    $files = substr($files, 0, strlen($files) - 1);
}


$query = $conn->prepare("INSERT INTO aplly 
    (surname, name, patronim, email, profession, mark, files) 
    VALUES (?, ?, ?, ?, ?, ?, ?)");

$query->bind_param(
    'sssssss',
    $_POST['surname'],
    $_POST['name'],
    $_POST['patronim'],
    $_POST['email'],
    $_POST['profession'],
    $_POST['mark'],
    $files
);
$query->execute();
$query->close();

header("Location: /");
