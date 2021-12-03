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
                    <div class="container-fluid pt-5 px-5" >
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="../index.html">Homepage</a></li>
                            <li class="breadcrumb-item active">Gestione aule</li>
                        </ol>
                        <div class="row justify-content-start mb-4">
                            <div class="col-4">
                                <h1 class="mt-4">Gestione sale riunione</h1>
                            </div>
                            <div class="col-4">
                                <a href="aggiungi%20sala.php" type="button" class="btn btn-primary btn-lg" >Aggiungi una sala</a>
                            </div>
                        </div>
                        <div class="card mb-4">
                            <div class="card-body">
                                <table class="table table-hover">
                                    <thead>
                                    <tr>
                                        <th scope="col">Nome</th>
                                        <th scope="col">Dipartimento</th>
                                        <th scope="col">Capienza</th>
                                        <th scope="col">Tavoli</th>
                                        <th scope="col">Proiettori</th>
                                        <th scope="col">Computer</th>
                                        <th scope="col">Lavagne</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <th scope="row">Prova nome</th>
                                        <th scope="row" class="tooltipkamil" messaggio-tooltip="via Monterosa 1, Milano"> Galileo </th>
                                        <td>50</td>
                                        <td>5</td>
                                        <td>-</td>
                                        <td>10</td>
                                        <td>-</td>
                                        <td><a href="modifica%20sala.php" type="button" class="btn btn-primary btn-sm">Modifica</a></td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
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