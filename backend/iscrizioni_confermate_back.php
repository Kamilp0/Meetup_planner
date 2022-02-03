<?php

session_start();
require_once 'mysql_connect_back.php';

$query =
    'SELECT * FROM invito NATURAL JOIN riunione JOIN persona ON riunione.organizzatore=persona.email WHERE persona=\'' .
    $_SESSION['user_data']['email'] .
    '\'' .
    ' AND stato_notifica=\'confermato\'';

$res = $dbc->query($query);

if (!$res) {
    echo 'Errore ' . $dbc->errno;
}

?>
