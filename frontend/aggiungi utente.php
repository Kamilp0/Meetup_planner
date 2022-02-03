<!DOCTYPE html>
<html lang="en">
<?php
session_start();
if ($_SESSION['user_data']['ruolo'] != 'direttore') {
    header('Location: ../index.php');
}
require '../common/head.html';
?>
<body class="sb-nav-fixed">

<?php require '../common/navbar sopra.php'; ?>

<div id="layoutSidenav">

    <?php require '../common/sidebar admin.php'; ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="conteiner-fluid pt-5 px-5">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="../index.html">Homepage</a></li>
                    <li class="breadcrumb-item"><a href="gestione utenti.php">Gestione utenti</a></li>
                    <li class="breadcrumb-item active">Aggiungi utente</li>
                </ol>
                <div class="row justify-content-start mb-4">
                    <div class="col-4">
                        <h1 class="mt-4">Aggiungi utente</h1>
                    </div>
                </div>
                <form action="../backend/nuovoutente_back.php" method="post">
                    <div class="row mb-3">
                        <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="nome" size="30">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="cognome" class="col-sm-2 col-form-label">Cognome:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" name="cognome" size="30">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="datadinascita" class="col-sm-2 col-form-label">Data di nascita:</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" name="datadinascita">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="email" class="col-sm-2 col-form-label">email:</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" name="email" size="30">
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Dipartimento:</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dipartimento" id="gridRadios1" value="Copernico" >
                                <label class="form-check-label" for="dipartimento">
                                    Copernico
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dipartimento" id="gridRadios1" value="Galileo">
                                <label class="form-check-label" for="dipartimento">
                                    Galileo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dipartimento" id="gridRadios1" value="Keplero">
                                <label class="form-check-label" for="dipartimento">
                                    Keplero
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dipartimento" id="gridRadios1" value="Newton">
                                <label class="form-check-label" for="dipartimento">
                                    Newton
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Ruolo:</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ruolo" id="gridRadios1" value="direttore" >
                                <label class="form-check-label" for="ruolo">
                                    Direttore
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ruolo" id="gridRadios1" value="funzionario">
                                <label class="form-check-label" for="ruolo">
                                    Funzionario
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ruolo" id="gridRadios1" value="capo-settore">
                                <label class="form-check-label" for="ruolo">
                                    Capo settore
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ruolo" id="gridRadios1" value="manutentore">
                                <label class="form-check-label" for="ruolo">
                                    Manutentore
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ruolo" id="gridRadios1" value="impiegato">
                                <label class="form-check-label" for="ruolo">
                                    Impiegato
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        AGGIUNGI
                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Autenticazione</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <div class="alert alert-dark" role="alert">
                                        <div class="form-check mb-3">
                                            <input class="form-check-input" name="utenteautorizzato" type="checkbox" />
                                            <label class="form-check-label" for="utenteautorizzato">Autorizza l'utente a organizzare riunioni</label>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="inputPassword" type="password" placeholder="Conferma Password" />
                                        <label for="inputPassword">Conferma password</label>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                                    <button type="submit" class="btn btn-primary" name="submit">Salva modifiche</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

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