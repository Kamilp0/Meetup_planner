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
                                <th scope="col">Invitati</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>23 dicembre 2021</td>
                                <td>10:00</td>
                                <td>Alfa, Galileo</td>
                                <td>2 ore</td>
                                <td>Bilancio mesi di novembre e dicembre</td>
                                <td><a href="lista%20invitati.php">visualizza la lista degli invitati</a></td>
                                <td><a href="modifica%20utente.php" type="button" class="btn btn-primary btn-sm">Modifica informazioni</a></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div id="riunionisvolte" class="row justify-content-start mb-4">
                    <div class="col-4">
                        <h1 class="mt-4">Riunioni svolte</h1>
                    </div>
                    <div class="col-4">
                        <h4  class="mt-4"><a href="#top">Torna su</a></h4>
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
                                <th scope="col">Invitati</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>3 maggio 2021</td>
                                <td>08:30</td>
                                <td>Beta, Newton</td>
                                <td>4 ore</td>
                                <td>Corso di aggiornamento per manutentori</td>
                                <td><a href="lista%20invitati.php">visualizza la lista degli invitati</a></td>
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