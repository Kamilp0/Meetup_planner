<?php
require_once 'mysql_connect_back.php';

$query = 'SELECT DISTINCT ruolo FROM persona';

$res = $dbc->query($query);

if (!$res) {
    echo 'Errore ' . $dbc->errno;
} else {
    while ($roles = $res->fetch_assoc()) {
        echo '<option value="' .
            $roles['ruolo'] .
            '">' .
            $roles['ruolo'] .
            '</option>';
    }
}
?>
