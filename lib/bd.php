<?php
$bd = mysqli_connect('localhost', 'root', '', 'teldir');
if (!$bd) {
    die('Error connect to DB');
}
