<?php

session_start();

$user_data = &$_SESSION['user_data'];
$user_pic = $_FILES['user_pic'];

if (
    $user_data['nome'] == $_POST['name'] &&
    $user_data['cognome'] == $_POST['surname'] &&
    $user_data['email'] == $_POST['email'] &&
    $user_data['password'] == $_POST['password'] &&
    $user_pic['size'] == 0
) {
    header('Location: ../frontend/profilo utente.php?s=0');
} else {
    //CHECK ERRORS! (img too big, ecc...)
    if ($user_pic['size'] == 0) {
        $file_dest = $user_data['foto'];
    } else {
        $file_ext = strtolower(end(explode('.', $user_pic['name'])));
        $file_name = uniqid('', true) . '.' . $file_ext;
        $file_dest = '../images/' . $file_name;
        move_uploaded_file($user_pic['tmp_name'], $file_dest);
        unlink($user_data['foto']);
    }

    require_once 'mysql_connect_back.php';

    $query =
        'UPDATE persona SET nome=\'' .
        $_POST['name'] .
        '\', cognome=\'' .
        $_POST['surname'] .
        '\', email=\'' .
        $_POST['email'] .
        '\', foto=\'' .
        $file_dest .
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
            $user_data['foto'] = $file_dest;
            header('Location: ../frontend/profilo utente.php');
        } else {
            echo 'Error updating';
        }
    }
}

?>
