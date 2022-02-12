<!DOCTYPE html>
<html lang="en">
<?php
session_start();
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
                    <li class="breadcrumb-item"><a href="gestione utenti.php">Profilo personale</a></li>
                    <li class="breadcrumb-item active">Modifica password</li>
                </ol>
                <div class="row justify-content-start mb-4">
                    <div class="col-4">
                        <h1 class="mt-4">Modifica password</h1>
                    </div>
                </div>
                <form name="nuovapassword" action="../backend/updatepassword_back.php" method="post">
                    <div class="row mb-3">
                        <label id="label_pwd_old" class="col-sm-2 col-form-label">Password attuale:</label>
                        <div class="col-sm-10">
                            <input id="pwd_old" type="password" name="pwd_old" class="form-control">
                        </div>
                    </div>
                    <br>
                    <div class="row mb-3">
                        <div class="col-sm-2">La nuova password deve contenere:</div>
                        <div class="col-sm-10">
                            <div class="row">
                                <strong id="car" class="col-sm-10">Almeno 8 caratteri</strong>
                            </div>
                            <div class="row">
                                <strong id="num" class="col-sm-10">Almeno un numero</strong>
                            </div>
                            <div class="row">
                                <strong id="min" class="col-sm-10">Almeno una lettera minuscola</strong>
                            </div>
                            <div class="row">
                                <strong id="mai" class="col-sm-10">Almeno una lettera maiuscola</strong>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label id="label_pwd_new1" class="col-sm-2 col-form-label">Nuova password:</label>
                        <div class="col-sm-10">
                            <input id="pwd_new1" type="password" name="pwd_new1" class="form-control" onchange="safepassword(this.value)">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label id="label_pwd_new2" class="col-sm-2 col-form-label">Conferma password:</label>
                        <div class="col-sm-10">
                            <input id="pwd_new2" type="password" name="pwd_new2" class="form-control">
                        </div>
                    </div>
                    <button id="salva" type="submit" name="submit" class="btn btn-primary" disabled >Salva</button>
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