<!DOCTYPE html>
<html lang="en">
<?php
session_start();
require '../common/head.html';
?>
<body class="sb-nav-fixed">
<?php require '../common/navbar sopra.php'; ?>

<div id="layoutSidenav">

    <?php $_SESSION['user_data']['ruolo'] == 'direttore'
        ? require '../common/sidebar admin.php'
        : require '../common/sidebar user.php'; ?>
    <script>
        function invitaButtonClicked() {
            document.getElementById('guests_form').submit()
        }

        function showUsersByRole(role, id) {
            if (role == '') {
                return
            } else {
                let xmlhttp = new XMLHttpRequest()
                xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    document.getElementById('usersTable').innerHTML = this.responseText
                }
                }
                xmlhttp.open(
                'GET',
                '../backend/utenti_filtro_ruoli.php?q=' + role + '&id=' + id,
                true,
                )
                xmlhttp.send()
            }
        }
    </script>

    <div id="layoutSidenav_content">
        <main>
            <div class="container-fluid pt-5 px-5" >
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="../index.php">Homepage</a></li>
                    <li class="breadcrumb-item active">Aggiungi invitati</li>
                </ol>
                <div class="row mb-4">
                    <div class="col-4">
                        <h1 class="mt-4">Invita utenti</h1>
                    </div>
                    <div class="col-3">
                        <button class="btn btn-primary btn-lg" onclick="invitaButtonClicked()">Invita</button>
                    </div>
                    <div class="col-5 container-fluid">
                        <?php if (isset($_GET['submit'])) {
                            $ordine = $_GET['ordine'];
                        } else {
                            $ordine = 'cognome';
                        } ?>
                        <div class="row justify-content-md-center">
                            <form>
                                <select name="ruolo" onchange="showUsersByRole(this.value, <?php echo $_GET[
                                    'id'
                                ]; ?>)">
                                    <option value="">Seleziona per ruolo:</option>
                                    <?php require '../backend/lista_ruoli_back.php'; ?>
                                </select>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card mb-4">
                    <div class="card-body">
                        <table class="table table-hover">
                            <thead>
                            <tr>
                                <th scope="col">Nome</th>
                                <th scope="col">Cognome</th>
                                <th scope="col">Data di nascita</th>
                                <th scope="col">email</th>
                                <th scope="col">Dipartimento</th>
                                <th scope="col">Ruolo</th>
                            </tr>
                            </thead>
                            <form id="guests_form" action="../backend/invita_utenti_back.php?id=<?php echo $_GET[
                                'id'
                            ]; ?>" method="POST">
                                <tbody id="usersTable">
                                    <?php
                                    $id_riunione = $_GET['id'];
                                    require '../backend/listautenti_back.php';
                                    ?>
                                </tbody>
                            </form>
                        </table>
                    </div>
                </div>
            </div>
        </main>
        <?php require '../common/footer.html'; ?>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
<script src="../js/datatables-simple-demo.js"></script>
<script src="../js/invita_utenti.js"></script>
</body>
</html>