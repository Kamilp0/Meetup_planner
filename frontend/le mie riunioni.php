<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if ($_SESSION['user_data']['data_autorizzazione'] == null) {
    header('Location: ../index.php');
}
require '../common/head.html';
require '../backend/lista_riunioni_back.php';
?>
<body class="sb-nav-fixed">

<?php require '../common/navbar sopra.php'; ?>

<div id="layoutSidenav">

    <?php $_SESSION['user_data']['ruolo'] == 'direttore'
        ? require '../common/sidebar admin.php'
        : require '../common/sidebar user.php'; ?>
    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid pt-5 px-5" >
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="../index.php">Homepage</a></li>
                    <li class="breadcrumb-item active">Le mie riunioni</li>
                </ol>
                <div class="row justify-content-start mb-4">
                    <div class="col-4">
                        <h1 class="mt-4">Le mie riunioni</h1>
                    </div>
                    <div class="col-4">
                        <a href="nuova%20riunione.php" type="button" class="btn btn-primary btn-lg" >Nuova riunione</a>
                    </div>
                    <div class="col-4">
                        <h4  class="mt-4"><a href="#riunionisvolte">Riunioni già svolte</a></h4>
                    </div>
                </div>
                <?php
                $riunione = $res->fetch_assoc();
                if ($riunione == null) {
                    echo '<p class="lead">Non hai organizzato alcuna riunione.</p>';
                } else {
                    $count = 0;
                    echo '<div class="card mb-4">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Data</th>
                                <th scope="col">Ora</th>
                                <th scope="col">Sala</th>
                                <th scope="col">Durata</th>
                                <th scope="col">Tema</th>
                            </tr>
                            </thead>
                            <tbody>';
                    while ($riunione) {
                        $modal_number = 'modal' . $count;
                        $count++;
                        echo '
                            <tr>
                                <td>' .
                            $riunione['data'] .
                            '</td>
                                <td>' .
                            $riunione['ora'] .
                            '</td>
                                <td>' .
                            $riunione['nome_sala'] .
                            ', ' .
                            $riunione['dipartimento'] .
                            '</td>
                                <td>' .
                            $riunione['durata_ore'] .
                            ' ora/e' .
                            '</td>
                                <td>' .
                            $riunione['tema'] .
                            '</td>
                                <td>
                                <form id="guests_list" action="lista%20invitati.php?id_riunione=' .
                            $riunione['id_riunione'] .
                            '" method="POST">
                                <input type="hidden" name="tema_riunione" value="' .
                            $riunione['tema'] .
                            '"/>
                                <input class="btn btn-primary btn-sm" value="Lista invitati" type="submit"/>
                                </form>
                                </td>
                                <td><a href="modifica%20riunione.php?id=' .
                            $riunione['id_riunione'] .
                            '" type="button" class="btn btn-primary btn-sm">Modifica informazioni</a>
                                </td>
                                <td><button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#' .
                            $modal_number .
                            '"><i class="fas fa-trash-alt"></i></button></td>
                            </tr>
                            <div class="modal fade" id="' .
                            $modal_number .
                            '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Autenticazione</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                        <form action="../backend/deleteriunione_back.php?id=' .
                            $riunione['id_riunione'] .
                            '" method="post">
                        <div class="modal-body">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Conferma Password" />
                                <label for="inputPassword">Conferma password</label>
                            </div>
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                        <button type="submit" class="btn btn-danger">ELIMINA RIUNIONE</button>
                    </div>
                </form>';

                        $riunione = $res->fetch_assoc();
                    }
                    echo '</tbody>
                        </table>
                    </div>
                </div>';
                }
                ?>

                <div id="riunionisvolte" class="row justify-content-start mb-4">
                    <div class="col-4">
                        <h1 class="mt-4">Riunioni svolte</h1>
                    </div>
                    <div class="col-4">
                        <h4  class="mt-4"><a href="#top">Torna su</a></h4>
                    </div>
                </div>
                <?php
                require '../backend/riunioni_svolte_back.php';
                $riunione_svolta = $res->fetch_assoc();
                if ($riunione_svolta == null) {
                    echo '<p class="lead">Non sono presenti riunioni già svolte.</p>';
                } else {
                    echo '<div class="card mb-4">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Data</th>
                                <th scope="col">Ora</th>
                                <th scope="col">Sala</th>
                                <th scope="col">Durata</th>
                                <th scope="col">Tema</th>
                                <th scope="col">Invitati</th>
                            </tr>
                            </thead>
                            <tbody>';
                    while ($riunione_svolta) {
                        echo '
                            <tr>
                                <td>' .
                            $riunione_svolta['data'] .
                            '</td>
                                <td>' .
                            $riunione_svolta['ora'] .
                            '</td>
                                <td>' .
                            $riunione_svolta['nome_sala'] .
                            ', ' .
                            $riunione_svolta['dipartimento'] .
                            '</td>
                                <td>' .
                            $riunione_svolta['durata_ore'] .
                            ' ora/e' .
                            '</td>
                                <td>' .
                            $riunione_svolta['tema'] .
                            '</td>
                                <td><a href="lista%20invitati.php?hid=1&id_riunione=' .
                            $riunione_svolta['id_riunione'] .
                            '">visualizza la lista degli invitati</a></td>
                            </tr>';
                        $riunione_svolta = $res->fetch_assoc();
                    }
                    echo '</tbody>
                        </table>
                    </div>
                </div>';
                }
                ?>
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