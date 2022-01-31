<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
  </head>
  <body>
    <?php
    require_once 'mysql_connect_back.php';
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user_exist = false;

    $query = 'SELECT email, password FROM persona';
    $res = $dbc->query($query);

    if (!$res) {
        //handle query error
    } else {
        $row = $res->fetch_assoc();
        while ($row && !$user_exist) {
            if ($row['email'] == $email && $row['password'] == $password) {
                $user_exist = true;
            }
            $row = $res->fetch_assoc();
        }
    }

    session_start();

    if ($user_exist) {
        //right credentials
        header('Location: ../index.php');
        $_SESSION['auth_ok'] = true;
    } else {
        //wrong credentials
        $_SESSION['auth_ok'] = false;
        header('Location: ../frontend/login.php');
    }
    ?>

  </body>
</html>
