<?php
include("../utils/check_login.php");
include("../utils/conn.php");

$query = $conn->prepare("delete from news where id = ?");
$query->bind_param('i', $_GET['id']);
$query->execute();
$query->close();

$conn->close();

header("Location: /cms/news");
