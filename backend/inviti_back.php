<?php

session_start();
require_once 'mysql_connect_back.php';

$query =
    'SELECT riunione.id_riunione, riunione.data, riunione.ora, riunione.nome_sala, riunione.dipartimento, riunione.durata_ore, riunione.tema, persona.nome, persona.cognome FROM invito NATURAL JOIN riunione JOIN persona ON riunione.organizzatore=persona.email WHERE invito.persona=\'' .
    $_SESSION['user_data']['email'] .
    '\' AND stato_notifica!=\'rifiutato\' AND stato_notifica!=\'confermato\'';

$res = $dbc->query($query);

if (!$res) {
    echo 'Errore ' . $dbc->errno;
}

?>
