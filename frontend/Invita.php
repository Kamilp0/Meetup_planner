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
                            
                        </div>
                        <!--  INSERIRE QUI L'EVENTUALE FORM DI ORDINAMENTO -->
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

                            <tbody>

                            <?php
                            $id_riunione = $_GET['id'];
                            require '../backend/listautenti_back.php';
                            echo '<form id="guests_form" action="../backend/invita_utenti_back.php?id=' .
                                $_GET['id'] .
                                '" method="POST">';
                            while ($row = mysqli_fetch_array($utenti)) {
                                echo '<tr><td>' .
                                    $row['nome'] .
                                    '</td><td>' .
                                    $row['cognome'] .
                                    '</td><td>' .
                                    $row['data_nascita'] .
                                    '</td>';
                                if (isset($row['data_autorizzazione'])) {
                                    echo '<td class="text-success"><i class="fas fa-user-check"></i>  <strong>' .
                                        $row['email'] .
                                        '</strong></td><td>';
                                } else {
                                    echo '<td>' . $row['email'] . '</td><td>';
                                }
                                echo $row['dipartimento'] .
                                    '</td><td>' .
                                    $row['ruolo'] .
                                    '</td>
                                    <td>                                    <input type="checkbox" name="checkbox[]" value="' .
                                    $row['email'] .
                                    '"/></td>
                                    </tr>';
                            }
                            echo '</form>';
                            ?>
                            </tbody>
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