<?php
session_start();
require_once 'bd.php';
$phone = $_POST['phone'];
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$city = $_POST['city'];
$street = $_POST['street'];
$postal = $_POST['postal'];

$check_user = mysqli_query($bd, "SELECT * FROM `users` WHERE `phone` = '$phone'");
if (mysqli_num_rows($check_user) > 0) {
    $user = mysqli_fetch_assoc($check_user);
    $_SESSION['user'] = [
        "phone" => $user['phone'],
        "f_name" => $user['f_name'],
        "l_name" => $user['l_name']
    ];
    header('Location: ../index.php');
} else {
    $_SESSION['message'] = 'Данных не существует или они введенны не верно!';
    header('Location: ../index.php');
}
