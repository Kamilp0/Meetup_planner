<!DOCTYPE html>
<html lang="en">
<?php require '../common/head.html'; ?>
<body class="sb-nav-fixed">

<?php require '../common/navbar sopra.php'; ?>

<div id="layoutSidenav">

    <?php
    require '../common/sidebar admin.php';
    require '../backend/inviti_back.php';
    ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid pt-5 px-5" >
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="../index.php">Homepage</a></li>
                    <li class="breadcrumb-item active">Calendario</li>
                    <li class="breadcrumb-item active">Inviti</li>
                </ol>
                <div class="row justify-content-start mb-4">
                    <div class="col-4">
                        <h1 class="mt-4">Inviti</h1>
                    </div>
                    <div class="col-4">
                        <a href="iscrizioni%20confermate.php" type="button" class="btn btn-primary btn-lg" >Iscrizioni confermate</a>
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
                                        $invito['organizzatore'] .
                                        '</td>
                                            <td><button class="btn-sm btn-success">Conferma</button></td>
                                            <td><button class="btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#denyModal">Rifiuta</button></td>
                                        </tr>';
                                } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal fade" id="denyModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Fai sapere perché non parteciperai alla riunione:</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div class="form-floating mb-3">
                                    <input class="form-control" id="inputText" type="text" placeholder="Motivazione" />
                                    <label for="inputText">Motivazione</label>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                                <button type="button" class="btn btn-primary">Invia</button>
                            </div>
                        </div>
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