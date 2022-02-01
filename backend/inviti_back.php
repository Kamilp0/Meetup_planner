<?php

session_start();
require_once 'mysql_connect_back.php';

$query =
    'SELECT * FROM invito NATURAL JOIN riunione WHERE persona=\'' .
    $_SESSION['user_data']['email'] .
    '\'';

$res = $dbc->query($query);

if (!$res) {
    echo 'Errore ' . $dbc->errno;
}

?>
