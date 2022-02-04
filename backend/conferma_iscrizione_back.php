<?php
session_start();
require 'mysql_connect_back.php';

$query =
    'UPDATE invito SET stato_notifica=\'confermato\', data_ultimo_aggiornamento=CURRENT_DATE ,motivazione=NULL WHERE id_riunione=\'' .
    $_GET['id'] .
    '\' AND persona=\'' .
    $_SESSION['user_data']['email'] .
    '\';';

$res = $dbc->query($query);
if (!$res) {
    echo 'Errore codice ' . $dbc->errno;
} else {
    if ($dbc->affected_rows > 0) {
        if ($_GET['from']) {
            header('Location: ../frontend/iscrizioni rifiutate.php');
        } else {
            header('Location: ../frontend/inviti.php');
        }
    } else {
        echo 'Error updating';
    }
}

?>
