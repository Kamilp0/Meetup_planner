<form action="../backend/updateutente_back.php" method="post" >

    <?php
    require_once '../backend/mysql_connect_back.php';
    $query =
        'SELECT email, nome, cognome, dipartimento, ruolo, foto, data_autorizzazione, autorizzato_da FROM persona WHERE email = \'' .
        $email .
        '\';';
    $datiutente = mysqli_fetch_array(@mysqli_query($dbc, $query));
    ?>

    <div class="row">
        <div class="col d-flex flex-column justify-content-evenly">
            <div class="d-flex flex-row">
                <label for="email" class="col-sm-2 col-form-label">email:</label>
                <div class="col-sm-10">
                    <input type="text" name="email" class="form-control" value="<?php echo $datiutente[
                        'email'
                    ]; ?>" readonly>
                </div>
            </div>
            <div class="d-flex flex-row">
                <label for="nome" class="col-sm-2 col-form-label">Nome:</label>
                <div class="col-sm-10">
                    <input type="text" name="nome" class="form-control" value="<?php echo $datiutente[
                        'nome'
                    ]; ?>">
                </div>
            </div>
            <div class="d-flex flex-row justify-content-evenly">
                <label for="Cognome" class="col-sm-2 col-form-label" >Cognome:</label>
                <div class="col-sm-10">
                    <input type="text" name="cognome" class="form-control" value="<?php echo $datiutente[
                        'cognome'
                    ]; ?>">
                </div>
            </div>
        </div>
        <div class="col">
            <img <?php if ($datiutente['foto'] == null) {
                echo 'src="../images/utente_default.jpg"';
            } else {
                echo 'src="<!--da definire-->"' . $email . '.png"';
            } ?>
                width="250" class="rounded mx-auto d-block" alt="...">
        </div>
    </div>
    <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-2 pt-0">Dipartimento:</legend>
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="dipartimento" id="gridRadios1" value="Copernico" <?php if (
                    $datiutente['dipartimento'] == 'Copernico'
                ) {
                    echo 'checked';
                } ?>>
                <label class="form-check-label" for="gridRadios1">
                    Copernico
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="dipartimento" id="gridRadios1" value="Galileo" <?php if (
                    $datiutente['dipartimento'] == 'Galileo'
                ) {
                    echo 'checked';
                } ?>>
                <label class="form-check-label" for="gridRadios1">
                    Galileo
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="dipartimento" id="gridRadios1" value="Keplero" <?php if (
                    $datiutente['dipartimento'] == 'Keplero'
                ) {
                    echo 'checked';
                } ?>>
                <label class="form-check-label" for="gridRadios1">
                    Keplero
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="dipartimento" id="gridRadios1" value="Newton" <?php if (
                    $datiutente['dipartimento'] == 'Newton'
                ) {
                    echo 'checked';
                } ?>>
                <label class="form-check-label" for="gridRadios1">
                    Newton
                </label>
            </div>
        </div>
    </fieldset>
    <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-2 pt-0">Ruolo:</legend>
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="ruolo" id="gridRadios1" value="direttore" <?php if (
                    $datiutente['ruolo'] == 'direttore'
                ) {
                    echo 'checked';
                } ?>>
                <label class="form-check-label" for="ruolo">
                    Direttore
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="ruolo" id="gridRadios1" value="funzionario" <?php if (
                    $datiutente['ruolo'] == 'funzionario'
                ) {
                    echo 'checked';
                } ?>>
                <label class="form-check-label" for="ruolo">
                    Funzionario
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="ruolo" id="gridRadios1" value="capo-settore" <?php if (
                    $datiutente['ruolo'] == 'capo settore'
                ) {
                    echo 'checked';
                } ?>>
                <label class="form-check-label" for="ruolo">
                    Capo settore
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="ruolo" id="gridRadios1" value="manutentore" <?php if (
                    $datiutente['ruolo'] == 'manutentore'
                ) {
                    echo 'checked';
                } ?>>
                <label class="form-check-label" for="ruolo">
                    Manutentore
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="ruolo" id="gridRadios1" value="impiegato" <?php if (
                    $datiutente['ruolo'] == 'impiegato'
                ) {
                    echo 'checked';
                } ?>>
                <label class="form-check-label" for="ruolo">
                    Impiegato
                </label>
            </div>
        </div>
    </fieldset>
    <div class="alert alert-dark" role="alert">
        <div class="form-check mb-3">
            <input class="form-check-input" name="utenteautorizzato" type="checkbox" <?php if (
                $datiutente['data_autorizzazione'] != null
            ) {
                echo 'checked';
            } ?> />
            <label class="form-check-label" for="utenteautorizzato">Autorizza l'utente a organizzare riunioni</label>
        </div>
        <div class="text-secondary fst-italic">
            <?php if ($datiutente['data_autorizzazione'] != null) {
                $data = $datiutente['data_autorizzazione'];
                $data_formattata = date('d/m/Y', strtotime($data));
                echo 'Utente autorizzato in data ' .
                    $data_formattata .
                    ' da ' .
                    $datiutente['autorizzato_da'];
            } ?>
        </div>
    </div>
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal-aule">
        SALVA MODIFICHE
    </button>
    <div class="modal fade" id="modal-aule" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Autenticazione</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputPassword" type="password" placeholder="Conferma Password" />
                        <label for="inputPassword">Conferma password</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                    <button type="submit" name="update" class="btn btn-primary">Salva modifiche</button>
                </div>
            </div>
        </div>
    </div>
</form>
