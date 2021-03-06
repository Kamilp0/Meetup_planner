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
                        <h1 class="mt-4">Elimina sala</h1>
                    </div>
                </div>
                <?php

                if (hash('sha256', $_POST['password']) != $_SESSION['user_data']['password']){
                    echo '<h4 class=" alert alert-danger"><strong>Password sbagliata.</strong> operazione non effettuata. Riprova.</h4><a href="../frontend/gestione%20sale.php">Indietro</a>';
                } else {
                    require_once 'mysql_connect_back.php';

                    $query =
                        'DELETE FROM sala WHERE nome=\'' .
                        $_GET['sala'] .
                        '\' AND dipartimento=\'' .
                        $_GET['dip'] .
                        '\';';
                    //echo $query;
                    $esito = mysqli_query($dbc, $query);
                    if ($esito == true) {
                        echo '
                                    <h4 class="alert alert-success">
                                        <i class="fas fa-check-circle"></i><strong>  Fatto!</strong> modifica eseguita con successo.
                                    </h4>
                                    <div class="row">
                                        <a class="col-3" href="../frontend/gestione%20sale.php">torna alla gestione sale</a>
                                        <a class="col-9" href="../index.php">homepage</a>
                                    </div>';
                    } else {
                        $ERRORI = mysqli_error($dbc);
                        echo '
                                    <h4 class="alert alert-danger">
                                        <i class="fas fa-exclamation-circle"></i><strong>  C\'?? stato un problema:</br></strong>';
                        echo $ERRORI, '</h4>';
                    }
                    mysqli_close($dbc);
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