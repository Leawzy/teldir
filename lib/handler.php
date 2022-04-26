<?php
session_start();
require_once 'bd.php';
$phone = $_POST['phone'];
$lastname = $_POST['last_name'];

if(strlen($phone) > 1 and strlen($lastname) < 1){
    $check_user = mysqli_query($bd, "SELECT * FROM `users` WHERE `phone` = '$phone'");
    if (mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_all($check_user);
        $_SESSION['user'] = $user;
        header('Location: ../index.php');
    }
    $_SESSION['message'] = 'Данных не существует или они введенны не верно!';
    header('Location: ../index.php');

} elseif (strlen($lastname) > 1 and strlen($phone) < 1) {
    $check_user = mysqli_query($bd, "SELECT * FROM `users` WHERE `l_name` = '$lastname'");
    if (mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_all($check_user);
        $_SESSION['user'] = $user;
        header('Location: ../index.php');
    }
    $_SESSION['message'] = 'Данных не существует или они введенны не верно!';
    header('Location: ../index.php');

} elseif (strlen($phone) > 1 and strlen($lastname) > 1){
    $check_user = mysqli_query($bd, "SELECT * FROM `users` WHERE `phone` = '$phone' AND `l_name` = '$lastname'");
    if (mysqli_num_rows($check_user) > 0) {
        $user = mysqli_fetch_all($check_user);
        $_SESSION['user'] = $user;
        header('Location: ../index.php');
    }
    $_SESSION['message'] = 'Данных не существует или они введенны не верно!';
    header('Location: ../index.php');

} else {
    $_SESSION['message'] = 'Данных не существует или они введенны не верно!';
    header('Location: ../index.php');
}
