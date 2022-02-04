<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require '../common/head.html';
?>
<body class="sb-nav-fixed">

<?php require '../common/navbar sopra.php'; ?>

<div id="layoutSidenav">

    <?php require '../common/sidebar admin.php'; ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="conteiner-fluid pt-5 px-5">
                <div class="row justify-content-start mb-4">
                    <div class="col-4">
                        <h1 class="mt-4">Nuova riunione</h1>
                    </div>
                </div>
                <?php if (isset($_POST['submit'])) {
                    $missingdata = [];

                    if (empty($_POST['dipartimento'])) {
                        $missingdata[] = 'dipartimento';
                    } else {
                        $dipartimento = trim($_POST['dipartimento']);
                    }

                    if (empty($_POST['sala'])) {
                        $missingdata[] = 'sala';
                    } else {
                        $sala = trim($_POST['sala']);
                    }

                    if (empty($_POST['data'])) {
                        $missingdata[] = 'data';
                    } else {
                        $data = trim($_POST['data']);
                    }

                    if (empty($_POST['ora'])) {
                        $missingdata[] = 'ora';
                    } else {
                        $ora = trim($_POST['ora']);
                    }

                    if (empty($_POST['tema'])) {
                        $missingdata[] = 'tema';
                    } else {
                        $tema = trim($_POST['tema']);
                    }

                    if (empty($_POST['durata'])) {
                        $missingdata[] = 'durata';
                    } else {
                        $durata = trim($_POST['durata']);
                    }

                    if (empty($missingdata)) {
                        $organizzatore = $_SESSION['user_data']['email'];
                        require_once 'mysql_connect_back.php';

                        $lista_id = [];
                        $aux_query = @mysqli_query(
                            $dbc,
                            'SELECT id_riunione FROM riunione WHERE 1'
                        );
                        while ($id_esistente = mysqli_fetch_array($aux_query)) {
                            $lista_id[] = $id_esistente;
                        }
                        while (1) {
                            $id_candidato = rand(10000, 99999);
                            if (in_array($id_candidato, $lista_id) == false) {
                                break;
                            }
                        }

                        $query =
                            'INSERT INTO riunione (id_riunione, dipartimento, nome_sala, data, ora, tema, durata_ore, organizzatore) VALUES (?, ?, ?, ?, ?, ?, ?, ?)';
                        $stmt = mysqli_prepare($dbc, $query);
                        mysqli_stmt_bind_param(
                            $stmt,
                            'isssssis',
                            $id_candidato,
                            $dipartimento,
                            $sala,
                            $data,
                            $ora,
                            $tema,
                            $durata,
                            $organizzatore
                        );
                        mysqli_stmt_execute($stmt);

                        $affected_rows = mysqli_stmt_affected_rows($stmt);

                        if ($affected_rows == 1) {
                            echo '
                                    <h4 class="alert alert-success">
                                        <i class="fas fa-check-circle"></i><strong>  Fatto!</strong> riunione creata con successo.
                                    </h4>
                                    <div class="row">
                                        <a class="col-3" href="../frontend/le%20mie%20riunioni.php">torna alle mie riunioni</a>
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
                } else {
                    echo 'dati non arrivati';
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