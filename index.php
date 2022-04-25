<?php
session_start();

$title = "Главная страница";
require "lib/layouts/app.php";
require "lib/layouts/header.php";
?>

    <form action="">
        <input type="text" value="+7 (___) ___-__-__" pattern="\+?[0-9\s\-\(\)]+"  required><br>
        <input type="text" placeholder="Введите имя"><br>
        <input type="text" placeholder="Введите фамилию"><br>
        <input type="text" placeholder="Введите город"><br>
        <input type="text" value="ул. "><br>
        <input type="text" placeholder="Введите индекс" pattern="[0-9]{6}"><br>
        <button type="submit">клик</button>
    </form>
    <?php
    if($_SESSION['user']){
    echo '<p id="errorMess"> '. $_SESSION['user'] . '</p>';
    }
    ?>


<?php
require "lib/layouts/footer.php";
?>