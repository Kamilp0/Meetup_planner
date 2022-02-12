<?php

DEFINE('DB_USER', 'root');
DEFINE('DB_PASSWORD', '');
DEFINE('DB_NAME', 'meetupplanner6');
DEFINE('DB_HOST', 'localhost');

($dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)) or
    die('Impossibile connettersi al database' . mysqli_connect_error());

?>
