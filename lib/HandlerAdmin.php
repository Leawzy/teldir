<?php
session_start();
require_once 'bd.php';


$phone = $_POST['phone'];
$firstname = $_POST['first_name'];
$lastname = $_POST['last_name'];
$middlename = $_POST['middle_name'];
$city = $_POST['city'];
$street = $_POST['street'];
$house = $_POST['house'];
$apartment = $_POST['apartment'];
$postal = $_POST['postal'];

if (strlen($phone) > 1) {
    mysqli_query($bd, "INSERT INTO `users` (`id`, `f_name`, `l_name`, `m_name`, `city`, `street`, `n_house`,
    `n_apartment`, `phone`, `postal`) VALUES (NULL, '$firstname', '$lastname', '$middlename', '$city', '$street',
    '$house', '$apartment', '$phone', '$postal')");
    $_SESSION['adm_message'] = 'Добавление пользователя прошло успешно!';
    header('Location: ../admin.php');

} else {
    $_SESSION['adm_message'] = 'Произошла ошибка, свяжитесь с сисадмином!';
    header('Location: ../admin.php');
}

