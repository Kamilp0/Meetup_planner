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
                    <li class="breadcrumb-item"><a href="../index.html">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="gestione utenti.php">Gestione utenti</a></li>
                    <li class="breadcrumb-item active">Modifica utente</li>
                </ol>
                <div class="row justify-content-start mb-4">
                    <div class="col-4">
                        <h1 class="mt-4">Modifica utente</h1>
                    </div>
                </div>

                <?php
                $email = $_GET['user'];
                require '../backend/modificautente_back.php';
                ?>

            </div>
        </main>

        <?php require '../common/footer.html'; ?>

    </div>
</div>
<script src="../js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="../js/datatables-simple-demo.js"></script>
</body>
</html>