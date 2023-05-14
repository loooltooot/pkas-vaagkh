<?php
include("../utils/check_login.php");
include("../utils/conn.php");

$query = $conn->prepare("delete from aplly where id = ?");
$query->bind_param('i', $_GET['id']);
$query->execute();
$query->close();

$conn->close();

header("Location: /cms/apply");
