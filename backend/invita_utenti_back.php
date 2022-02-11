<?php

require_once 'mysql_connect_back.php';
$error_occured = false;
var_dump($_POST['checkbox']);
print_r($_POST['checkbox']);

for ($i = 0; $i < sizeof($_POST['checkbox']) && !$error_occured; $i++) {
    $query =
        'INSERT INTO invito (id_riunione, persona, stato_notifica, data_ultimo_aggiornamento, motivazione) VALUES(' .
        $_GET['id'] .
        ', \'' .
        $_POST['checkbox'][$i] .
        '\', \'in attesa\', CURRENT_DATE, NULL)';

    $res = $dbc->query($query);
    if (!$res) {
        echo 'Errore codice ' . $dbc->errno;
        $error_occured = true;
    } else {
        if ($dbc->affected_rows == 0) {
            echo 'Error inserting user: ' . $_POST['checkbox'][$i];
            $error_occured = true;
        }
    }
}

if (!$error_occured) {
    header(
        'Location: ../frontend/lista invitati.php?id_riunione=' . $_GET['id']
    );
}

?>
