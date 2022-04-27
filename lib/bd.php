<?php
$bd = mysqli_connect('localhost', 'idoma_teldir', 'Root123', 'idoma_teldir');
if (!$bd) {
    die('Error connect to DB');
}
