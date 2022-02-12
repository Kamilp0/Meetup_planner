<!DOCTYPE html>
<html lang="en">
<?php require '../common/head.html'; ?>
<body class="sb-nav-fixed">

<?php require '../common/navbar sopra.php'; ?>

<div id="layoutSidenav">

    <?php require '../common/sidebar admin.php'; ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid pt-5 px-5">
                <div class="row justify-content-start mb-4">
                    <div class="col-4">
                        <h1 class="mt-4">Modifica password</h1>
                    </div>
                </div>
                <?php
                if (isset($_POST['submit'])) {

                    require_once 'funzionikamil_back.php';
                    $err_pwd = ok_pwd($_POST['pwd_old'], $_POST['pwd_new1'], $_POST['pwd_new2']);
                    if($err_pwd == -1){
                        require_once 'mysql_connect_back.php';

                        $new_pwd = hash('sha256', $_POST['pwd_new1']);
                        $query =
                            'UPDATE persona SET password=\'' .
                            $new_pwd .
                            '\' WHERE email=\'' . $_SESSION['user_data']['email'] . '\';';
                        //echo $query;
                        $esito = mysqli_query($dbc, $query);
                        if ($esito == true) {
                            echo '
                                    <h4 class="alert alert-success">
                                        <i class="fas fa-check-circle"></i><strong>  Fatto!</strong> modifica eseguita con successo.
                                    </h4>
                                    <div class="row">
                                        <a class="col-3" href="../backend/logout_back.php">Nuovo login</a>
                                    </div>';
                        } else {
                            $ERRORI = mysqli_error($dbc);
                            echo '
                                    <h4 class="alert alert-danger">
                                        <i class="fas fa-exclamation-circle"></i><strong>  C\'è stato un problema:</br></strong>';
                            echo $ERRORI, '</h4>';
                        }
                        mysqli_close($dbc);
                    } else {
                        echo '
                                    <h4 class="alert alert-danger">
                                        <i class="fas fa-exclamation-circle"></i><strong>  C\'è stato un problema:</br></strong>';
                        switch($err_pwd){
                            case 1:
                                echo 'inserire la password attuale prima di cambiarla</h4>';
                                break;
                            case 2:
                                echo 'confermare la nuova password prima di procedere</h4>';
                                break;
                            case 3:
                                echo 'accesso negato. Password attuale errata</h4>';
                                break;
                            case 4:
                                echo 'scegliere una password diversa da quella attuale</h4>';
                                break;
                            case 5:
                                echo 'le password non coincidono</h4>';
                                break;
                            case 6:
                                echo 'inserire solo caratteri alfanumerici</h4>';
                                break;
                            default:
                                echo 'C\'è stato un problema</h4>';
                                break;
                        }
                    }
                } else {
                    echo 'errore.';
                }
                ?>

            </div>
        </main>

        <?php require '../common/footer.html'; ?>

    </div>
    <div class="text-success">
        Fatto!
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="../js/datatables-simple-demo.js"></script>
</body>
</html>