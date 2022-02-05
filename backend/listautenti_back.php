<?php

require_once 'mysql_connect_back.php';
if (isset($id_riunione)) {
    $query =
        'SELECT * FROM persona WHERE persona.email NOT IN (SELECT invito.persona FROM invito WHERE invito.id_riunione=' .
        $id_riunione .
        ');';
} else {
    $query = "SELECT nome, cognome, data_nascita, email, dipartimento, ruolo, data_autorizzazione FROM persona ORDER BY {$ordine}";
}

$utenti = @mysqli_query($dbc, $query);

?>
