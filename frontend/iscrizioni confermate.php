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
                    <li class="breadcrumb-item active">Calendario</li>
                    <li class="breadcrumb-item active">Iscrizioni confermate</li>
                </ol>
                <div class="row justify-content-start mb-4">
                    <div class="col-4">
                        <h1 class="mt-4">Iscrizioni confermate</h1>
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
                            <tr>
                                <td>23 dicembre 2021</td>
                                <td>10:00</td>
                                <td>Alfa, Galileo</td>
                                <td>2 ore</td>
                                <td>Bilancio mesi di novembre e dicembre</td>
                                <td>basilio.russo@hotmail.com</td>
                                <td><a href="#link" type="button" class="btn btn-danger btn-sm">Annulla iscrizione</a></td>
                            </tr>
                            </tbody>
                        </table>
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