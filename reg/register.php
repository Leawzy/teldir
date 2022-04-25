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
    <form action="signup.php" method="post">
        <label>Регистрация</label>
        <input type="text" name="login" placeholder="Login"><br>
        <input type="password" name="password" placeholder="Password"><br>
        <input type="password" name="password_confirm" placeholder="Password confirm"><br>
        <button type="submit">Войти</button>
        <p>
            У вас уже есть аккаунт? - <a href="index.php">Авторизируйтесь!</a>
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