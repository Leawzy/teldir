<?php
session_start();
require_once 'bd.php';
$login = $_POST['login'];
$password = md5($_POST['password']);

$check_user = mysqli_query($bd, "SELECT * FROM `admin` WHERE `login` = '$login' AND `password` = '$password'");
if (mysqli_num_rows($check_user) > 0){
    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['admin'] = [
        "login" => $user['login'],
    ];
    header('Location: ../admin.php');
} else {
    $_SESSION['adm_message'] = 'Неверный логин или пароль!';
    header('Location: ../signin.php');
}
