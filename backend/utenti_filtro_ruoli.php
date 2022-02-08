<?php
require_once 'mysql_connect_back.php';

$query = 'SELECT * FROM persona WHERE ruolo=\'' . $_GET['q'] . '\'';

$res = $dbc->query($query);

if (!$res) {
    echo 'Errore ' . $dbc->errno;
} else {
    echo '<form id="guests_form" action="../backend/invita_utenti_back.php?id=' .
        $_GET['id'] .
        '" method="POST">';
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
    echo '</form>';
}
?>
