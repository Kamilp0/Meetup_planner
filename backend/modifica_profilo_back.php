<?php

session_start();

$user_data = &$_SESSION['user_data'];
$user_pic = $_FILES['user_pic'];

if (
    $user_data['nome'] == $_POST['name'] &&
    $user_data['cognome'] == $_POST['surname'] &&
    $user_data['email'] == $_POST['email'] &&
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

    $query = 'UPDATE persona SET nome=?, cognome=?, email=?, foto=? WHERE email=?;';
    $stmt = mysqli_prepare($dbc, $query);
    mysqli_stmt_bind_param(
        $stmt,
        'sssss',
        $_POST['name'],
        $_POST['surname'],
        $_POST['email'],
        $file_dest,
        $_SESSION['user_data']['email']
    );

    mysqli_stmt_execute($stmt);

    if (mysqli_error($dbc) != '') {
        echo 'Errore: ' . mysqli_error($dbc);
    } else {
        if ($dbc->affected_rows > 0) {
            $user_data['nome'] = $_POST['name'];
            $user_data['cognome'] = $_POST['surname'];
            $user_data['email'] = $_POST['email'];
            $user_data['foto'] = $file_dest;
            header('Location: ../frontend/profilo utente.php');
        } else {
            echo 'Error updating';
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($dbc);
}

?>
