<?php
include("../utils/conn.php");

if (!empty($_POST['email'])) {
    $ur_lico = $_POST['ur_lico'] === 'on' ? 1 : 0;

    $query = $conn->prepare("insert into feedback 
        (full_name, email, content, file, ur_lico) 
        values (?, ?, ?, '', ?)");
    $query->bind_param(
        "sssi",
        $_POST['full_name'],
        $_POST['email'],
        $_POST['content'],
        $ur_lico,
    );
    $query->execute();
    $query->close();
}

header("Location: /");
