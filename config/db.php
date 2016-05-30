<?php
$link = new mysqli("localhost", "c10dv", "QWasZkM12", "c10dv");
$link->set_charset("utf8");
if (mysqli_connect_errno()) {
    echo "Подключение не установлено";
    die();
}
?>