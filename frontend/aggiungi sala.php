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
                    <li class="breadcrumb-item"><a href="../index.php">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="gestione sale.php">Gestione sale</a></li>
                    <li class="breadcrumb-item active">Aggiungi sala</li>
                </ol>
                <div class="row justify-content-start mb-4">
                    <div class="col-4">
                        <h1 class="mt-4">Aggiungi sala</h1>
                    </div>
                </div>
                <form>
                    <div class="row mb-3">
                        <label for="nome-sala" class="col-sm-2 col-form-label">Nome sala:</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control">
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
                                <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="galileo">
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
                    <div class="row mb-3">
                        <label for="capienza-sala" class="col-sm-2 col-form-label">Capienza:</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control">
                        </div>
                    </div>
                    <fieldset class="row mb-3">
                        <legend class="col-form-label col-sm-2 pt-0">Strumentazione:</legend>
                        <div class="col-sm-10">
                            <div class="input-group mb-3 input-group-sm">
                                <span class="input-group-text">Tavoli</span>
                                <input type="numner" class="form-control">
                            </div>
                            <div class="input-group mb-3 input-group-sm">
                                <span class="input-group-text">Lavagne</span>
                                <input type="number" class="form-control">
                            </div>
                            <div class="input-group mb-3 input-group-sm">
                                <span class="input-group-text">Proiettori</span>
                                <input type="number" class="form-control">
                            </div>
                            <div class="input-group mb-3 input-group-sm">
                                <span class="input-group-text">Computer</span>
                                <input type="number" class="form-control">
                            </div>
                        </div>
                    </fieldset>
                    <button type="submit" class="btn btn-primary">AGGIUNGI</button>
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