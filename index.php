<?php
session_start();

$title = "Главная страница";
require "lib/layouts/app.php";
require "lib/layouts/header.php";
?>
    <form action="lib/handler.php" method="post">
        Введите имя<br>
        <input name="phone" type="text" placeholder="+70000000000" pattern="\+?[0-9]{11}"><br>
        или фамилию<br>
        <input name="last_name" type="text" placeholder="Введите фамилию"><br>>
        <button type="submit">клик</button>
    </form>

<?php
if($_SESSION['message']){
    echo '<p id="errorMess"> '. $_SESSION['message'] . '</p>';
}
unset($_SESSION['message']);


if($_SESSION['user']) {
    echo "<pre>";
    print_r($_SESSION['user']);
    echo "</pre>";
    ?>
    <style>
        th, td {
            padding: 10px;
        }

        th {
            background: #606060;
            color: #fff;
        }

        td {
            background: #b5b5b5;
        }
    </style>
    <table>
    <tr>
        <th>ФИО</th>
        <th>Номер телефона</th>
        <th>Адрес</th>
    </tr>
    <?php
    foreach ($_SESSION['user'] as $value) {
        ?>
        <tr>
            <td><?=$value[2]. " " .$value[1]. " " .$value[3]?></td>
            <td><?=$value[8]?></td>
            <td><?="ул. ". $value[5] . " д. " . $value[6] . " кв. " . $value[7] . " Индекс: " . $value[9]?></td>
        </tr>
        <?php
    }
}
unset($_SESSION['user']);
?>
    </table>
<?php
require "lib/layouts/footer.php";
?>
