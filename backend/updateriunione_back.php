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

                    $query = 'UPDATE riunione SET dipartimento=?, nome_sala=?, data=?, ora=?, tema=?, durata_ore=? WHERE id_riunione=?;';
                    $stmt = mysqli_prepare($dbc, $query);
                    mysqli_stmt_bind_param(
                        $stmt,
                        'sssssii',
                        $_POST['dipartimento'],
                        $_POST['sala'],
                        $_POST['data'],
                        $_POST['ora'],
                        $_POST['tema'],
                        $_POST['durata'],
                        $_POST['id']
                    );

                    mysqli_stmt_execute($stmt);
                    if (mysqli_error($dbc) == '') {
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
                                        <i class="fas fa-exclamation-circle"></i><strong>  C\'?? stato un problema:</br></strong>';
                        echo $ERRORI, '</h4>';
                    }
                    mysqli_stmt_close($stmt);
                    mysqli_close($dbc);
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