<?php
session_start();

$title = "Главная страница";
require "lib/layouts/app.php";
require "lib/layouts/header.php";
?>
    <div class="header__content">
        <div class="header__content-text">
            <h1>Быстро. Легко.</h1>
            <span>Найти вашего человека</span>
            <p>
                Это давно установленный факт, что читатель будет отвлекаться на удобочитаемое содержание страницы при просмотре ее макета. Смысл использования Lorem Ipsum.</p>
            <a href="#">Присоединиться</a>
        </div>
        <div class="header__content-img">
            <img src="assets/img/header_img.svg" alt="">
        </div>
    </div>
    <div class="form__search">
        <div class="form__search-form">
            <h2>Телефонный справочник</h2>
            <div class="border"></div>
            <form action="lib/handler.php" method="post">
                Введите имя<br>
                <input name="phone" type="text" placeholder="+70000000000" pattern="\+?[0-9]{11}"><br>
                или фамилию<br>
                <input name="last_name" type="text" placeholder="Введите фамилию"><br>
                <button type="submit">клик</button>
            </form>
        </div>
        <div class="form__search-table">
            <?php
            if($_SESSION['message']){
                echo '<p class="errorMess" id="errorMess"> '. $_SESSION['message'] . '</p>';
            }
            unset($_SESSION['message']);


            if($_SESSION['user']) {
            ?>
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
        </div>
    </div>
<?php
require "lib/layouts/footer.php";
?>
