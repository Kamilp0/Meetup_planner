<!DOCTYPE html>
<html lang="en">
<?php
session_start();
$id_riunione = $_GET['id_riunione'];

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
            <div class="container-fluid pt-5 px-5">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="../index.html">Homepage</a></li>
                    <li class="breadcrumb-item"><a href="le%20mie%20riunioni.php">Le mie riunioni</a></li>
                    <li class="breadcrumb-item active">Lista invitati</li>
                </ol>
                <div class="row justify-content-start mb-4">
                    <div class="col-10">
                        <h1 class="mt-4">Invitati alla riunione: </h1>
                    </div>
                    <div class="col-2">
                        <?php if (!isset($_GET['hid'])) {
                            echo '<a href="invita.php" type="button" class="btn btn-primary btn-lg" >Aggiungi invitati</a>';
                        } ?>
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

                    <?php require '../backend/listainvitati_back.php'; ?>

                    </tbody>
                </table>
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