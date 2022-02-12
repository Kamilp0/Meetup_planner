<!DOCTYPE html>
<html lang="en">
<?php require '../common/head.html'; ?>
<body class="sb-nav-fixed">

<?php require '../common/navbar sopra.php'; ?>

<div id="layoutSidenav">

    <?php require '../common/sidebar admin.php'; ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="conteiner-fluid pt-5 px-5">
                <div class="row justify-content-start mb-4">
                    <div class="col-4">
                        <h1 class="mt-4">Aggiungi sala</h1>
                    </div>
                </div>
                <?php if (isset($_POST['submit'])) {

                    if (hash('sha256', $_POST['password']) != $_SESSION['user_data']['password']){
                        echo '<h4 class=" alert alert-danger"><strong>Password sbagliata.</strong> operazione non effettuata. Riprova.</h4><a href="../frontend/aggiungi%20sala.php">Indietro</a>';
                    } else {

                        $missingdata = [];

                        if (empty($_POST['nome'])) {
                            $missingdata[] = 'nome';
                        } else {
                            $nome = trim($_POST['nome']);
                        }

                        if (empty($_POST['dip'])) {
                            $missingdata[] = 'dipartimento';
                        } else {
                            $dip = trim($_POST['dip']);
                        }

                        if (empty($_POST['capienza'])) {
                            $missingdata[] = 'capienza';
                        } else {
                            $capienza = trim($_POST['capienza']);
                        }

                        if (empty($_POST['tavoli'])) {
                            $tavoli = 0;
                        } else {
                            $tavoli = trim($_POST['tavoli']);
                        }

                        if (empty($_POST['lavagne'])) {
                            $lavagne = 0;
                        } else {
                            $lavagne = trim($_POST['lavagne']);
                        }

                        if (empty($_POST['proiettori'])) {
                            $proiettori = 0;
                        } else {
                            $proiettori = trim($_POST['proiettori']);
                        }

                        if (empty($_POST['computer'])) {
                            $computer = 0;
                        } else {
                            $computer = trim($_POST['computer']);
                        }

                        if (empty($missingdata)) {
                            require_once 'mysql_connect_back.php';

                            $query =
                                'INSERT INTO sala (nome, dipartimento, capienza, tavoli, lavagne, computer, proiettori) VALUES (?, ?, ?, ?, ?, ?, ?)';
                            $stmt = mysqli_prepare($dbc, $query);
                            mysqli_stmt_bind_param(
                                $stmt,
                                'ssiiiii',
                                $nome,
                                $dip,
                                $capienza,
                                $tavoli,
                                $lavagne,
                                $computer,
                                $proiettori
                            );
                            mysqli_stmt_execute($stmt);

                            $affected_rows = mysqli_stmt_affected_rows($stmt);
                            if ($affected_rows == 1) {
                                echo '
                                    <h4 class="alert alert-success">
                                        <i class="fas fa-check-circle"></i><strong>  Fatto!</strong> sala inserita correttamente.
                                    </h4>
                                    <div class="row">
                                        <a class="col-3" href="../frontend/gestione%20sale.php">torna alla gestione delle sale</a>
                                        <a class="col-9" href="../index.html">homepage</a>
                                    </div>';
                                mysqli_stmt_close($stmt);
                                mysqli_close($dbc);
                            } else {
                                $ERRORI = mysqli_error($dbc);
                                echo '
                                    <h4 class="alert alert-danger">
                                        <i class="fas fa-exclamation-circle"></i><strong>  C\'è stato un problema:</br></strong>';
                                echo $ERRORI, '</h4>';
                                mysqli_stmt_close($stmt);
                                mysqli_close($dbc);
                            }
                        } else {
                            echo '                                    
                                    <h4 class="alert alert-danger">
                                        <i class="fas fa-exclamation-circle"></i>
                                        <strong>  Dati mancanti:</br></strong>';

                            foreach ($missingdata as $missing) {
                                echo $missing, '</br>';
                            }
                            echo '</html>';
                        }
                    }

                } ?>

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