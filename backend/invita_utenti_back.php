<?php

require_once 'mysql_connect_back.php';

$error_occured = false;
$id_riunione = $_POST['id'];
$guests = explode(',', $_POST['checkbox']);

for ($i = 0; $i < sizeof($guests) && !$error_occured; $i++) {
    $query =
        'INSERT INTO invito (id_riunione, persona, stato_notifica, data_ultimo_aggiornamento, motivazione) VALUES(' .
        $id_riunione .
        ', \'' .
        $guests[$i] .
        '\', \'in attesa\', CURRENT_DATE, NULL)';

    $res = $dbc->query($query);
    if (!$res) {
        $error_occured = true;
    } else {
        if ($dbc->affected_rows == 0) {
            $error_occured = true;
        }
    }
}

if (!$error_occured) {
    echo json_encode([
        'error' => $error_occured,
    ]);
}

?>
