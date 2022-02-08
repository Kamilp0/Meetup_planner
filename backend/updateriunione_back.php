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
                        <h1 class="mt-4">Modifica riunione</h1>
                    </div>
                </div>
                <?php
                if (isset($_POST['submit'])) {
                    require_once 'mysql_connect_back.php';

                    $query =
                        'UPDATE riunione SET dipartimento=\'' .
                        $_POST['dipartimento'] .
                        '\', nome_sala=\'' .
                        $_POST['sala'] .
                        '\', data=\'' .
                        $_POST['data'] .
                        '\', ora=\'' .
                        $_POST['ora'] .
                        '\', tema=\'' .
                        $_POST['tema'] .
                        '\', durata_ore=' .
                        $_POST['durata'] .
                        ' WHERE id_riunione=' .
                        $_POST['id'] .
                        ';';

                    //echo $query;
                    $esito = mysqli_query($dbc, $query);
                    if ($esito == true) {
                        echo '
                                    <h4 class="alert alert-success">
                                        <i class="fas fa-check-circle"></i><strong>  Fatto!</strong> modifica eseguita con successo.
                                    </h4>
                                    <div class="row">
                                        <a class="col-3" href="../frontend/le%20mie%20riunioni.php">torna alle mie riunioni</a>
                                        <a class="col-9" href="../index.html">homepage</a>
                                    </div>';
                    } else {
                        $ERRORI = mysqli_error($dbc);
                        echo '
                                    <h4 class="alert alert-danger">
                                        <i class="fas fa-exclamation-circle"></i><strong>  C\'è stato un problema:</br></strong>';
                        echo $ERRORI, '</h4>';
                    }
                } else {
                    echo 'errore.';
                }
                mysqli_close($dbc);
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