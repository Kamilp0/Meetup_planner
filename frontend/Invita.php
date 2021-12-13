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
            <div>
                elenco dei dipendenti con un checkbox di fianco per selezionare chi invitare (anche opzione seleziona/deselezona tutto). barra di ricerca per cercare un dipendente singolo o filtrare per ruolo e/o dipartimento.
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