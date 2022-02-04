<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require '../common/head.html';
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
                    <li class="breadcrumb-item active">Aggiungi invitati</li>
                </ol>
                <div class="row mb-4">
                    <div class="col-4">
                        <h1 class="mt-4">Invita utenti</h1>
                    </div>
                    <div class="col-3">
                        <!-- <a href="aggiungi%20utente.php" type="button" class="btn btn-primary btn-lg" >Aggiungi utente</a> -->
                    </div>
                    <div class="col-5 container-fluid">
                        <?php if (isset($_GET['submit'])) {
                            $ordine = $_GET['ordine'];
                        } else {
                            $ordine = 'cognome';
                        } ?>
                        <form action="gestione%20utenti.php" method="get">
                            <div class="row justify-content-md-center">
                                <label class="col-form-label col-sm-auto form-check-label" for="opzioni">Ordina per:</label>
                                <select id="opzioni" name="ordine" class="col-sm-auto form-select-sm">
                                    <option <?php if (
                                        $ordine == 'cognome ASC'
                                    ) {
                                        echo 'selected';
                                    } ?> value="cognome ASC">Cognome (A-Z)</option>
                                    <option <?php if (
                                        $ordine == 'cognome DESC'
                                    ) {
                                        echo 'selected';
                                    } ?> value="cognome DESC">Cognome (Z-A)</option>
                                    <option <?php if (
                                        $ordine == 'data_nascita ASC'
                                    ) {
                                        echo 'selected';
                                    } ?> value="data_nascita ASC">Data di nascita (dal più vecchio)</option>
                                    <option <?php if (
                                        $ordine == 'data_nascita DESC'
                                    ) {
                                        echo 'selected';
                                    } ?> value="data_nascita DESC">Data di nascita (dal più giovane)</option>
                                    <option <?php if ($ordine == 'email ASC') {
                                        echo 'selected';
                                    } ?> value="email ASC">email (A-Z)</option>
                                    <option <?php if ($ordine == 'email DESC') {
                                        echo 'selected';
                                    } ?> value="email DESC">email (Z-A)</option>
                                    <option <?php if (
                                        $ordine == 'dipartimento ASC'
                                    ) {
                                        echo 'selected';
                                    } ?> value="dipartimento ASC">Dipartimento (A-Z)</option>
                                    <option <?php if (
                                        $ordine == 'dipartimento DESC'
                                    ) {
                                        echo 'selected';
                                    } ?> value="dipartimento DESC">Dipartimento (Z-A)</option>
                                    <option <?php if ($ordine == 'ruolo ASC') {
                                        echo 'selected';
                                    } ?> value="ruolo ASC">Ruolo (A-Z)</option>
                                    <option <?php if ($ordine == 'ruolo DESC') {
                                        echo 'selected';
                                    } ?> value="ruolo DESC">Ruolo (Z-A)</option>
                                    <option <?php if (
                                        $ordine == 'data_autorizzazione'
                                    ) {
                                        echo 'selected';
                                    } ?> value="data_autorizzazione DESC">Prima autorizzati</option>
                                </select>
                                <div class="col-sm-auto">
                                    <button type="submit" name="submit" class="btn btn-secondary btn-md"><i class="fas fa-sync-alt"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                    <!-- <div class="row mb-3 px-lg-3 text-secondary">
                        Gli utenti evidenziati in verde sono autorizzati a organizzare riunioni.
                    </div> -->
                <div class="card mb-4">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Cognome</th>
                                <th scope="col">Data di nascita</th>
                                <th scope="col">email</th>
                                <th scope="col">Dipartimento</th>
                                <th scope="col">Ruolo</th>
                            </tr>
                            </thead>

                            <tbody>

                            <?php
                            require '../backend/listautenti_back.php';

                            while ($row = mysqli_fetch_array($utenti)) {
                                $count++;
                                $modal_number = 'modal' . $count;
                                echo '<tr><td>' .
                                    $row['nome'] .
                                    '</td><td>' .
                                    $row['cognome'] .
                                    '</td><td>' .
                                    $row['data_nascita'] .
                                    '</td>';
                                if (isset($row['data_autorizzazione'])) {
                                    echo '<td class="text-success"><i class="fas fa-user-check"></i>  <strong>' .
                                        $row['email'] .
                                        '</strong></td><td>';
                                } else {
                                    echo '<td>' . $row['email'] . '</td><td>';
                                }
                                echo $row['dipartimento'] .
                                    '</td><td>' .
                                    $row['ruolo'] .
                                    '</td>
                                    <td><a href="../frontend/modifica%20utente.php?user=' .
                                    $row['email'] .
                                    '" type="button" class="btn btn-primary btn-sm">Modifica</a></td>
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
                                            <div class="modal-body">
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="inputPassword" type="password" placeholder="Conferma Password" />
                                                    <label for="inputPassword">Conferma password</label>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                                                <a type="submit" href="../backend/deleteutente_back.php?user=' .
                                    $row['email'] .
                                    '" class="btn btn-danger">ELIMINA UTENTE</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>';
                            }
                            ?>
                            </tbody>
                        </table>
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