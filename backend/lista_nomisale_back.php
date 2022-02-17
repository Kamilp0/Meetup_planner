<?php
require_once 'mysql_connect_back.php';

$query =
    'SELECT DISTINCT nome FROM sala WHERE dipartimento=\'' .
    $_POST['dp'] .
    '\'';

$res = $dbc->query($query);
$rooms = [];

if (!$res) {
    echo 'Errore ' . $dbc->errno;
} else {
    while ($sala = $res->fetch_assoc()) {
        array_push($rooms, $sala);
    }
    echo json_encode([
        'rooms' => $rooms,
    ]);
}
?>
