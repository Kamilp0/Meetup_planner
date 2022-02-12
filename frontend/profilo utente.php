<!DOCTYPE html>
<html lang="en">
<?php
require '../common/head.html';
session_start();
$user_data = $_SESSION['user_data'];
?>

<body class="sb-nav-fixed">

<?php require '../common/navbar sopra.php'; ?>

<div id="layoutSidenav">

    <?php $_SESSION['user_data']['ruolo'] == 'direttore'
        ? require '../common/sidebar admin.php'
        : require '../common/sidebar user.php'; ?>

    <div id="layoutSidenav_content">
        <main>
            <div class="conteiner-fluid pt-5 px-5">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="../index.php">Homepage</a></li>
                    <li class="breadcrumb-item active">Profilo</li>
                </ol>
                <div class="row justify-content-start mb-4">
                    <div class="col-4">
                        <h1 class="mt-4">Profilo utente</h1>
                    </div>
                </div>
                <form>
                    <div class="row">
                        <div class="col d-flex flex-column justify-content-evenly">
                            <div class="p-2 d-flex flex-row">
                                <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value=<?php echo $user_data[
                                        'nome'
                                    ]; ?> readonly>
                                </div>
                            </div>
                            <div class="p-2 d-flex flex-row justify-content-evenly">
                                <label for="Cognome" class="col-sm-2 col-form-label" >Cognome:</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" value=<?php echo $user_data[
                                        'cognome'
                                    ]; ?> readonly>
                                </div>
                            </div>
                            <div class="p-2 d-flex flex-row">
                                <label for="nome" class="col-sm-2 col-form-label">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" value=<?php echo $user_data[
                                        'email'
                                    ]; ?> readonly>
                                </div>
                            </div>
                            <div class="p-2 d-flex flex-row justify-content-evenly">
                                <label for="Cognome" class="col-sm-2 col-form-label" >Password:</label>
                                <div class="col-sm-10">
                                    <a href="modifica%20password.php"
                                    <?PHP
                                    if ($user_data['password'] == '5e884898da28047151d0e56f8dc6292773603d0d6aabbdd62a11ef721d1542d8'){
                                        echo 'class="text-danger"><strong><i class="fas fa-key"></i> MODIFICA PASSWORD (consigliato)</strong></a>';
                                    } else {
                                        echo '><strong><i class="fas fa-key"></i> Modifica password</strong></a>';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="p-2 ">
                                <a href="modifica%20profilo.php" class="btn btn-primary" role="button">Modifica profilo</a>
                            </div>
                        </div>
                        <div class="col">
                            <img src="../images/utente_default.jpg" width="250" class="rounded mx-auto d-block" alt="...">
                        </div>
                </form>

            </div>
        </main>

        <?php require '../common/footer.html'; ?>

    </div>
</div>
<script src="../js/input_check.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="../js/datatables-simple-demo.js"></script>
</body>
</html>