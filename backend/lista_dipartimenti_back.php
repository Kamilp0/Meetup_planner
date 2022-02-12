<?php
require_once 'mysql_connect_back.php';

$query = 'SELECT DISTINCT dipartimento FROM persona';

$res = $dbc->query($query);

if (!$res) {
    echo 'Errore ' . $dbc->errno;
} else {
    while ($dep = $res->fetch_assoc()) {
        echo '<option value="' .
            $dep['dipartimento'] .
            '">' .
            $dep['dipartimento'] .
            '</option>';
    }
}
?>
