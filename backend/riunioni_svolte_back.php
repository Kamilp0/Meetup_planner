<?php

session_start();
require_once 'mysql_connect_back.php';

$query =
    'SELECT * FROM riunione WHERE organizzatore=\'' .
    $_SESSION['user_data']['email'] .
    '\'' .
    ' AND riunione.data < CURRENT_DATE OR  riunione.data = CURRENT_DATE AND riunione.ora < CURRENT_TIME';

$res = $dbc->query($query);

if (!$res) {
    echo 'Errore';
}

?>
