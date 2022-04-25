<?php
session_start();
if (!$_SESSION['admin']) {
    header('Location: signin.php');
}
$title = "Админ панель";
require "lib/layouts/app.php";
require "lib/layouts/header.php";


echo "Добро пожаловать: " .$_SESSION['admin']['login'];
?>

<br><a href="lib/logout.php">Выход</a>
