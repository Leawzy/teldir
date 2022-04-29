<?php
session_start();
if (!$_SESSION['admin']) {
    header('Location: signin.php');
}
$title = "Админ панель";
require "lib/layouts/app.php";


echo "Добро пожаловать: " .$_SESSION['admin']['login'];
?>
    <form action="lib/HandlerAdmin.php" method="post">
        <input name="phone" type="text" placeholder="+70000000000" pattern="\+?[0-9]{11}" required><br>
        <input name="last_name" type="text" placeholder="Введите фамилию" required><br>
        <input name="first_name" type="text" placeholder="Введите имя" required><br>
        <input name="middle_name" type="text" placeholder="Введите отчество" required><br>
        <input name="city" type="text" placeholder="Введите город" required><br>
        <input name="street" type="text" placeholder="Введите улицу" required><br>
        <input name="house" type="text" placeholder="Введите номер дома" required><br>
        <input name="apartment" type="text" placeholder="Введите номер квартиры" required><br>
        <input name="postal" type="text" placeholder="Введите индекс" pattern="[0-9]{6}" required><br>
        <button type="submit">Создать</button>
    </form>

<?php
if($_SESSION['adm_message']){
echo '<p id="errorMess"> '. $_SESSION['adm_message'] . '</p>';
}
unset($_SESSION['adm_message']);
?>

<br><a href="lib/logout.php">Выход</a>
