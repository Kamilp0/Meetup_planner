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
            <div class="container-fluid pt-5 px-5">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="../index.html">Homepage</a></li>
                    <li class="breadcrumb-item"><a href="le%20mie%20riunioni.php">Le mie riunioni</a></li>
                    <li class="breadcrumb-item active">Nuova riunione</li>
                </ol>
                <div class="row justify-content-start mb-4">
                    <div class="col-4">
                        <h1 class="mt-4">Nuova riunione</h1>
                    </div>
                </div>
                <form>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Dipartimento:</legend>
                        <div class="col-sm-10">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dipartimento" id="gridRadios1" value="copernico" >
                                <label class="form-check-label" for="dipartimento">
                                    Copernico
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dipartimento" id="gridRadios1" value="galileo">
                                <label class="form-check-label" for="dipartimento">
                                    Galileo
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dipartimento" id="gridRadios1" value="keplero">
                                <label class="form-check-label" for="dipartimento">
                                    Keplero
                                </label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="dipartimento" id="gridRadios1" value="newton">
                                <label class="form-check-label" for="dipartimento">
                                    Newton
                                </label>
                            </div>
                        </div>
                    </fieldset>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="nome-sala">Sala:</label>
                        <select class="col-sm-10" id="nome-sala">
                            <option>Alfa</option>
                            <option>Beta</option>
                            <option>Gamma</option>
                            <option>Delta</option>
                        </select>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Data e ora:</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-2">
                                    <input type="date" class="form-control">
                                </div>
                                <div class="col-sm-2">
                                    <input type="time" class="form-control">
                                </div>
                                <div class="col-sm-8"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="tema" class="col-sm-2 col-form-label">Tema:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="durata" class="col-sm-2 col-form-label">Dutara:</label>
                        <div class="col-sm-10">
                            <div class="row">
                                <div class="col-sm-1 text-right">Ore</div>
                                <div class="col-sm-1">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-sm-1 text-right">Minuti</div>
                                <div class="col-sm-1">
                                    <input type="number" class="form-control">
                                </div>
                                <div class="col-sm-8"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Invitati:</label>
                        <fieldset disabled class="col-sm-8">
                                <input type="text" id="disabledTextInput" class="form-control" placeholder="da implementarsi bene bene in PHP">
                        </fieldset>
                        <a href="invita.php" class="col-sm-2">Aggiungi invitati</a>
                    </div>
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
                                            <input class="form-check-input" id="utenteautorizzato" type="checkbox" />
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
                                    <button type="button" class="btn btn-primary">Salva modifiche</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </main>

        <?PHP

        require "../common/footer.html";

        ?>

    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="../js/datatables-simple-demo.js"></script>
</body>
</html>