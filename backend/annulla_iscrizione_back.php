<?php

session_start();

require 'mysql_connect_back.php';

$query =
    'UPDATE invito SET stato_notifica=\'rifiutato\', data_ultimo_aggiornamento=CURRENT_DATE, motivazione=\'' .
    $_POST['motivazione'] .
    '\' WHERE id_riunione=\'' .
    $_GET['id'] .
    '\' AND persona=\'' .
    $_SESSION['user_data']['email'] .
    '\';';

$res = $dbc->query($query);
if (!$res) {
    echo 'Errore codice ' . $dbc->errno . ' ' . $dbc->error . '<br>';
    echo 'post motivazione ->' . $_POST['motivazione'] . '<-' . '<br>';
    echo gettype($_POST['motivazione']);
} else {
    if ($dbc->affected_rows > 0) {
        if ($_GET['from_confirmed']) {
            header('Location: ../frontend/iscrizioni confermate.php');
        } else {
            header('Location: ../frontend/inviti.php');
        }
    } else {
        echo 'Error updating';
    }
}

?>
