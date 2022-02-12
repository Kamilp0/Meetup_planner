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
    session_start();

    $email = $_POST['email'];
    $password = hash('sha256', $_POST['password']);
    $user_exist = false;
    $user_email = '';
    $query = 'SELECT * FROM persona';
    $res = $dbc->query($query);

    if (!$res) {
        echo 'query error';
    } else {
        $row = $res->fetch_assoc();
        while ($row) {
            if ($row['email'] == $email) {
                if ($row['password'] == $password){
                    $user_exist = true;
                    $_SESSION['user_data'] = $row;
                    break;
                }
            }
            $row = $res->fetch_assoc();
        }
    }

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
