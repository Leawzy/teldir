<?php
session_start();
$title = "Авторизуйтесь";
require "lib/layouts/app.php";
require "lib/layouts/header.php";
?>
    <form action="lib/auth.php" method="post">
        <input name="login" type="text" placeholder="login"><br>
        <input name="password" type="password" placeholder="Введите пароль"><br>
        <button type="submit">Авторизоваться</button>
    </form>
<?php
    if($_SESSION['adm_message']){
    echo '<p id="errorMess"> '. $_SESSION['adm_message'] . '</p>';
    }
    unset($_SESSION['adm_message']);


require "lib/layouts/footer.php";
?>