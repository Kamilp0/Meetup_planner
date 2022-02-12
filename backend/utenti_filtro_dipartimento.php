<?php

session_start();

require_once 'mysql_connect_back.php';

$query =
    'SELECT * FROM persona WHERE dipartimento=\'' .
    $_GET['q'] .
    '\' AND persona.email NOT IN (SELECT invito.persona FROM invito WHERE invito.id_riunione=' .
    $_GET['id'] .
    ') AND persona.email != \'' .
    $_SESSION['user_data']['email'] .
    '\';';

$res = $dbc->query($query);

if (!$res) {
    echo 'Errore ' . $dbc->errno;
} else {
    while ($row = $res->fetch_assoc()) {
        echo '<tr><td>' .
            $row['nome'] .
            '</td><td>' .
            $row['cognome'] .
            '</td><td>' .
            $row['data_nascita'] .
            '</td>';
        if (isset($row['data_autorizzazione'])) {
            echo '<td class="text-success"><i class="fas fa-user-check"></i>  <strong>' .
                $row['email'] .
                '</strong></td><td>';
        } else {
            echo '<td>' . $row['email'] . '</td><td>';
        }
        echo $row['dipartimento'] .
            '</td><td>' .
            $row['ruolo'] .
            '</td>
            <td><input type="checkbox" name="checkbox[]" value="' .
            $row['email'] .
            '" checked/></td>
        </tr>';
    }
}
?>
