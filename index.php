<div class="wrapper">
<?php
session_start();

$title = "Главная страница";
require "lib/layouts/app.php";
require "lib/layouts/header.php";
?>

<form action="lib/handler.php" method="post">
    <input name="phone" type="text" value="+7 (___) ___-__-__" pattern="\+?[0-9\s\-\(\)]+"  required><br>
    <input name="first_name" type="text" placeholder="Введите имя"><br>
    <input name="last_name" type="text" placeholder="Введите фамилию"><br>
    <input name="city" type="text" placeholder="Введите город"><br>
    <input name="street" type="text" placeholder="ул. "><br>
    <input name="postal" type="text" placeholder="Введите индекс" pattern="[0-9]{6}"><br>
    <button type="submit">клик</button>
</form>
<?php
if($_SESSION['user']){
    echo 'Номер телефона: '. $_SESSION['user']['phone']."<br>";
    echo 'Фамилия: '. $_SESSION['user']['l_name']."<br>";
    echo 'Имя: '. $_SESSION['user']['f_name']."<br>";
}
unset($_SESSION['user']);

if($_SESSION['message']){
    echo '<p id="errorMess"> '. $_SESSION['message'] . '</p>';
}
unset($_SESSION['message']);
?>


<?php
require "lib/layouts/footer.php";
?>
</div>
