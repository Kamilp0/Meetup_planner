<form action="http://localhost/pweb2021/backend/updatesala_back.php" method="post">

    <?PHP
    require_once('../backend/mysql_connect_back.php');
    $query = 'SELECT * FROM sala WHERE nome = \''.$nome.'\' AND dipartimento = \''.$dip.'\';';
    $datisala = mysqli_fetch_array(@mysqli_query($dbc, $query));
    ?>

    <div class="row mb-3">
        <label for="nome-sala" class="col-sm-2 col-form-label">Nome sala:</label>
        <div class="col-sm-10">
            <input type="text" name="nome" class="form-control" value="<?PHP echo $datisala['nome']; ?>" readonly>
        </div>
    </div>
    <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-2 pt-0">Dipartimento:</legend>
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="dip" id="gridRadios1" value="Copernico" <?PHP if($datisala['dipartimento']=='Copernico'){echo 'checked';} ?> readonly>
                <label class="form-check-label" for="gridRadios1">
                    Copernico
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="dip" id="gridRadios1" value="Galileo" <?PHP if($datisala['dipartimento']=='Galileo'){echo 'checked';} ?> readonly>
                <label class="form-check-label" for="gridRadios1">
                    Galileo
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="dip" id="gridRadios1" value="Keplero" <?PHP if($datisala['dipartimento']=='Keplero'){echo 'checked';} ?> readonly>
                <label class="form-check-label" for="gridRadios1">
                    Keplero
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="dip" id="gridRadios1" value="Newton" <?PHP if($datisala['dipartimento']=='Newton'){echo 'checked';} ?> readonly>
                <label class="form-check-label" for="gridRadios1">
                    Newton
                </label>
            </div>
        </div>
    </fieldset>
    <div class="row mb-3">
        <label for="capienza-sala" class="col-sm-2 col-form-label">Capienza:</label>
        <div class="col-sm-10">
            <input type="number" name="capienza" class="form-control" value="<?PHP echo $datisala['capienza'];?>">
        </div>
    </div>
    <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-2 pt-0">Strumentazione:</legend>
        <div class="col-sm-10">
            <div class="input-group mb-3 input-group-sm">
                <span class="input-group-text">Tavoli</span>
                <input type="number" name="tavoli" class="form-control" value="<?PHP echo $datisala['tavoli']; ?>">
            </div>
            <div class="input-group mb-3 input-group-sm">
                <span class="input-group-text">Lavagne</span>
                <input type="number" name="lavagne" class="form-control" value="<?PHP echo $datisala['lavagne']; ?>">
            </div>
            <div class="input-group mb-3 input-group-sm">
                <span class="input-group-text">Proiettori</span>
                <input type="number" name="proiettori" class="form-control" value="<?PHP echo $datisala['proiettori']; ?>">
            </div>
            <div class="input-group mb-3 input-group-sm">
                <span class="input-group-text">Computer</span>
                <input type="number" name="computer" class="form-control" value="<?PHP echo $datisala['computer']; ?>">
            </div>
        </div>
    </fieldset>
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