<?php
session_start();
$user_data = &$_SESSION['user_data'];

if (
    $user_data['nome'] == $_POST['name'] &&
    $user_data['cognome'] == $_POST['surname'] &&
    $user_data['email'] == $_POST['email'] &&
    $user_data['password'] == $_POST['password']
) {
    header('Location: ../frontend/profilo utente.php');
}

require_once 'mysql_connect_back.php';

$query =
    'UPDATE persona SET nome=\'' .
    $_POST['name'] .
    '\', cognome=\'' .
    $_POST['surname'] .
    '\', email=\'' .
    $_POST['email'] .
    '\', password=\'' .
    $_POST['password'] .
    '\' WHERE email =\'' .
    $user_data['email'] .
    '\';';

$res = $dbc->query($query);
if (!$res) {
    echo 'Errore codice ' . $dbc->errno;
} else {
    if ($dbc->affected_rows > 0) {
        $user_data['nome'] = $_POST['name'];
        $user_data['cognome'] = $_POST['surname'];
        $user_data['email'] = $_POST['email'];
        $user_data['password'] = $_POST['password'];
        header('Location: ../frontend/profilo utente.php');
    } else {
        echo 'Error updating';
    }
}

?>
