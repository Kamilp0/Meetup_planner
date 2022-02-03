<!DOCTYPE html>
<html lang="en">
<?php require '../common/head.html'; ?>
<body class="sb-nav-fixed">

<?php
require '../common/navbar sopra.php';
require '../backend/iscrizioni_rifiutate_back.php';
?>

<div id="layoutSidenav">

    <?php require '../common/sidebar admin.php'; ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid pt-5 px-5" >
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="../index.php">Homepage</a></li>
                    <li class="breadcrumb-item active">Calendario</li>
                    <li class="breadcrumb-item active">Iscrizioni rifiutate</li>
                </ol>
                <div class="row justify-content-start mb-4">
                    <div class="col-4">
                        <h1 class="mt-4">Iscrizioni rifiutate</h1>
                    </div>
                    <div class="col-4">
                        <a href="inviti.php" type="button" class="btn btn-primary btn-lg" >Inviti</a>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Data</th>
                                <th scope="col">Ora</th>
                                <th scope="col">Sala</th>
                                <th scope="col">Durata</th>
                                <th scope="col">Tema</th>
                                <th scope="col">Organizzatore</th>
                            </tr>
                            </thead>
                            <tbody>
                                <?php while ($invito = $res->fetch_assoc()) {
                                    echo '<tr>
                                            <td>' .
                                        $invito['data'] .
                                        '</td>
                                            <td>' .
                                        $invito['ora'] .
                                        '</td>
                                            <td>' .
                                        $invito['nome_sala'] .
                                        ', ' .
                                        $invito['dipartimento'] .
                                        '</td>
                                            <td>' .
                                        $invito['durata_ore'] .
                                        ' ' .
                                        'ora/e' .
                                        '</td>
                                            <td>' .
                                        $invito['tema'] .
                                        '</td>
                                            <td>' .
                                        $invito['nome'] .
                                        ' ' .
                                        $invito['cognome'] .
                                        '</td>
                                            <td>
                                            <a href="../backend/conferma_iscrizione_back.php?id=' .
                                        $invito['id_riunione'] .
                                        '" type="submit" class="btn btn-success btn-sm">Partecipa</a>
                                            </td>
                                        </tr>';
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
        </main>

        <?php require '../common/footer.html'; ?>

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="../js/datatables-simple-demo.js"></script>
</body>
</html>