<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: index.php');
}
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
    echo 'Id: '. $_SESSION['user']['id'];
    echo 'Логин: '. $_SESSION['user']['login'];
?>
<a href="logout.php">Выход</a>
</body>
</html>