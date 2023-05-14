<?php
include("../utils/conn.php");

$login = $_POST['login'];
$password = $_POST['password'];

$result = $conn->query("select * from users where login='$login'");

if ($result->num_rows > 0) {
    if ($row = $result->fetch_assoc()) {
        if (password_verify($password, $row['password'])) {
            session_start();
            $_SESSION['login_status'] = true;
            $_SESSION['user_name'] = $row['login'];
            $conn->close();
            header('Location: /cms/panel');
        }
    }
} else {
    $conn->close();
    header('Location: /cms?error=true');
}
