<?php

require 'mysql_connect_back.php';

$query =
    'UPDATE invito SET stato_notifica=\'rifiutato\' where id_riunione=\'' .
    $_GET['id'] .
    '\';';

$res = $dbc->query($query);
if (!$res) {
    echo 'Errore codice ' . $dbc->errno;
} else {
    if ($dbc->affected_rows > 0) {
        header('Location: ../frontend/iscrizioni confermate.php');
    } else {
        echo 'Error updating';
    }
}

?>
