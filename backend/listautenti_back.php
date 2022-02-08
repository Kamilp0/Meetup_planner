<?php

require_once 'mysql_connect_back.php';

$query =
    'SELECT * FROM persona WHERE persona.email NOT IN (SELECT invito.persona FROM invito WHERE invito.id_riunione=' .
    $id_riunione .
    ');';
$utenti = @mysqli_query($dbc, $query);

while ($row = mysqli_fetch_array($utenti)) {
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
        '"/></td>
        </tr>';
}

?>
