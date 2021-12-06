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
                    <li class="breadcrumb-item"><a href="../index.php">Homepage</a></li>
                    <li class="breadcrumb-item"><a href="le%20mie%20riunioni.php">Le mie riunioni</a></li>
                    <li class="breadcrumb-item active">Lista invitati</li>
                </ol>
                <div class="row justify-content-start mb-4">
                    <div class="col-10">
                        <h1 class="mt-4">Invitati alla riunione: (data ora sala)</h1>
                    </div>
                    <div class="col-2">
                        <a href="invita.php" type="button" class="btn btn-primary btn-lg" >Aggiungi invitati</a>
                    </div>
                </div>
                <div class="row justify-content-start mb-4">
                    <div class="col-4">
                        <h4 class="mt-4 text-secondary">"tema riunione"</h4>
                    </div>
                </div>
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Cognome</th>
                        <th scope="col">email</th>
                        <th scope="col">Dipartimento</th>
                        <th scope="col">Ruolo</th>
                        <th scope="col">stato notifica</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Adele</td>
                        <td>Trentino</td>
                        <td>adeletrentino96@sth.com</td>
                        <td>Galileo</td>
                        <td>Capo settore</td>
                        <td>In attesa</td>
                        <td><a href="modifica%20utente.php" type="button" class="btn btn-danger btn-sm">elimina</a></td>
                    </tr>
                    <tr>
                        <td>Aldo</td>
                        <td>Conti</td>
                        <td>aldoc@sthelse.com</td>
                        <td>Copernico</td>
                        <td>Capo settore</td>
                        <td>confermato</td>
                        <td><a href="modifica%20utente.php" type="button" class="btn btn-danger btn-sm">elimina</a></td>
                    </tr>
                    <tr>
                        <td>Arianna</td>
                        <td>Mazzanti</td>
                        <td>amazzanti@sthelse.com</td>
                        <td>Galileo</td>
                        <td>Capo settore</td>
                        <td>Rifiutato</td>
                        <td><a href="modifica%20utente.php" type="button" class="btn btn-danger btn-sm">elimina</a></td>
                    </tr>
                    </tbody>
                </table>
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