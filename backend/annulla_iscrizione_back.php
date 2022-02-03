<?php

require 'mysql_connect_back.php';

$query =
    'UPDATE invito SET stato_notifica=\'rifiutato\', motivazione=\'' .
    $_POST['motivazione'] .
    '\' WHERE id_riunione=\'' .
    $_GET['id'] .
    '\';';

$res = $dbc->query($query);
if (!$res) {
    echo 'Errore codice ' . $dbc->errno;
} else {
    if ($dbc->affected_rows > 0) {
        if ($_GET['from']) {
            header('Location: ../frontend/iscrizioni confermate.php');
        } else {
            header('Location: ../frontend/inviti.php');
        }
    } else {
        echo 'Error updating';
    }
}

?>
