<?php

session_start();

if ($_SESSION['user']) {
    header('Location: profile.php');
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Авторизация и регистрация</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="feedback">
    <form method="post" action="signin.php">
        <label for="">Вход</label>
        <input type="text" name="login" placeholder="Login"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <button type="submit">Войти</button>
        <p>
            У вас нет аккаунта? - <a href="register.php">Зарегистрируйтесь!</a>
        </p>
        <?php
        if($_SESSION['message']){
            echo '<p id="errorMess"> '. $_SESSION['message'] . '</p>';
        }
        unset($_SESSION['message']);
        ?>
    </form>
</div>

</body>
</html>