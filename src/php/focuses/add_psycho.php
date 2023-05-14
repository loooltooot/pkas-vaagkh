<?php
include("../utils/conn.php");

if (!empty($_POST['email'])) {
    $query = $conn->prepare("insert into psychologist 
        (surname, name, patronim, email, title, content) 
        values (?, ?, ?, ?, ?, ?)");
    $query->bind_param(
        "ssssss",
        $_POST['surname'],
        $_POST['name'],
        $_POST['patronim'],
        $_POST['email'],
        $_POST['title'],
        $_POST['content'],
    );
    $query->execute();
    $query->close();
}

header("Location: /psychologist");
