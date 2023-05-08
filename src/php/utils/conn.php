<?php
$host = 'localhost';
$user = 'root';
$passwd = '';
$db_name = 'pkas';

$conn = new mysqli($host, $user, $passwd, $db_name);

if ($conn->connect_error) {
    die("ОШИБКА ПОДКЛЮЧЕНИЯ: " . $conn->connect_error);
}
