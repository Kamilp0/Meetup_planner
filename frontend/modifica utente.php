<!DOCTYPE html>
<html lang="en">
<?PHP

require "../common/head.html";

?>

<body class="sb-nav-fixed">

<?PHP

require "../common/navbar sopra.php";

?>

<div id="layoutSidenav">

    <?PHP

    require "../common/sidebar admin.php";

    ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="conteiner-fluid pt-5 px-5">
                <ol class="breadcrumb mb-4">
<<<<<<< HEAD
                    <li class="breadcrumb-item"><a href="../index.html">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="gestione utenti.php">Gestione utenti</a></li>
                    <li class="breadcrumb-item active">Modifica utente</li>
                </ol>
                <div class="row justify-content-start mb-4">
                    <div class="col-4">
                        <h1 class="mt-4">Modifica utente</h1>
=======
                    <li class="breadcrumb-item"><a href="../index.html">Homepage</a></li>
<!--                    <li class="breadcrumb-item"><a href="gestione utenti.php">Gestione utenti</a></li>-->
                    <li class="breadcrumb-item active">Profilo</li>
                </ol>
                <div class="row justify-content-start mb-4">
                    <div class="col-4">
                        <h1 class="mt-4">Profilo utente</h1>
>>>>>>> profilo utente finito
                    </div>
                </div>
                <form>
                    <div class="row">
                        <div class="col d-flex flex-column justify-content-evenly">
<<<<<<< HEAD
                            <div class="d-flex flex-row">
=======
                            <div class="p-2 d-flex flex-row">
>>>>>>> profilo utente finito
                                <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="Basilio">
                                </div>
                            </div>
<<<<<<< HEAD
                            <div class="d-flex flex-row justify-content-evenly">
=======
                            <div class="p-2 d-flex flex-row justify-content-evenly">
>>>>>>> profilo utente finito
                                <label for="Cognome" class="col-sm-2 col-form-label" >Cognome:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value="Russo">
                                </div>
                            </div>
<<<<<<< HEAD
                        </div>
                        <div class="col">
                            <img src="../images/utente_default.jpg" width="250" class="rounded mx-auto d-block" alt="...">
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Dipartimento:</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="copernico" >
                                <label class="form-check-label" for="gridRadios1">
                                    Copernico
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="galileo" checked>
                                <label class="form-check-label" for="gridRadios1">
                                    Galileo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="keplero">
                                <label class="form-check-label" for="gridRadios1">
                                    Keplero
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="newton">
                                <label class="form-check-label" for="gridRadios1">
                                    Newton
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Ruolo:</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ruolo" id="gridRadios1" value="direttore" checked>
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
                    <div class="alert alert-dark" role="alert">
                        <div class="form-check mb-3">
                            <input class="form-check-input" id="utenteautorizzato" type="checkbox" checked />
                            <label class="form-check-label" for="utenteautorizzato">Autorizza l'utente a organizzare riunioni</label>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-aule">
                        SALVA MODIFICHE
                    </button>
                    <div class="modal fade" id="modal-aule" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <button type="button" class="btn btn-primary">Salva modifiche</button>
                                </div>
                            </div>
                        </div>
                    </div>
=======
                            <div class="p-2 d-flex flex-row">
                                <label for="nome" class="col-sm-2 col-form-label">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" value="basilio.russo@email.com">
                                </div>
                            </div>
                            <div class="p-2 d-flex flex-row justify-content-evenly">
                                <label for="Cognome" class="col-sm-2 col-form-label" >Password:</label>
                                <div class="col-sm-10">
                                    <input type="password" class="form-control" value="password">
                                </div>
                            </div>
                            <div class="p-2 ">
                                <a href="profilo%20utente.php" class="btn btn-primary" role="button">Salva</a>
                            </div>
                        </div>
                        <div class="col">
                            <img src="../images/utente_default.jpg" width="250" class="rounded mx-auto d-block" alt="...">
                        </div>
>>>>>>> profilo utente finito
                </form>

            </div>
        </main>

        <?PHP

        require "../common/footer.html";

        ?>

    </div>
</div>
<script src="../js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="../js/datatables-simple-demo.js"></script>
</body>
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> profilo utente finito
