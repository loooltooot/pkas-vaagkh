<?php
$img = $_POST['img'];
if (file_exists("../../../static/img/news/$img")) {
    unlink("../../../static/img/news/$img");
}
