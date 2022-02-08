<form action="../backend/updateriunione_back.php" method="post">

    <?PHP
    require_once '../backend/mysql_connect_back.php';
    $query =
        'SELECT dipartimento, nome_sala, data, ora, tema, durata_ore FROM riunione WHERE id_riunione = \'' .
        $id_riunione .
        '\';';
    $dati = mysqli_fetch_array(@mysqli_query($dbc, $query));
    ?>

    <fieldset class="row mb-3">
        <legend class="col-form-label col-sm-2 pt-0">Dipartimento:</legend>
        <div class="col-sm-10">
            <div class="form-check">
                <input class="form-check-input" type="radio" name="dipartimento" id="gridRadios1" value="Copernico" <?PHP
                if ($dati['dipartimento']=='Copernico'){
                    echo 'checked';
                }
                ?>>
                <label class="form-check-label" for="dipartimento">
                    Copernico
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="dipartimento" id="gridRadios1" value="Galileo" <?PHP
                if ($dati['dipartimento']=='Galileo'){
                    echo 'checked';
                }
                ?>>
                <label class="form-check-label" for="dipartimento">
                    Galileo
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="dipartimento" id="gridRadios1" value="Keplero" <?PHP
                if ($dati['dipartimento']=='Keplero'){
                    echo 'checked';
                }
                ?>>
                <label class="form-check-label" for="dipartimento">
                    Keplero
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="dipartimento" id="gridRadios1" value="Newton" <?PHP
                if ($dati['dipartimento']=='Newton'){
                    echo 'checked';
                }
                ?>>
                <label class="form-check-label" for="dipartimento">
                    Newton
                </label>
            </div>
        </div>
    </fieldset>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="nome-sala">Sala:</label>
        <select class="col-sm-10" name="sala" id="nome-sala">
            <option <?PHP if ($dati['nome_sala']=='Alfa'){echo 'selected';}?>>Alfa</option>
            <option <?PHP if ($dati['nome_sala']=='Beta'){echo 'selected';}?>>Beta</option>
            <option <?PHP if ($dati['nome_sala']=='Gamma'){echo 'selected';}?>>Gamma</option>
            <option <?PHP if ($dati['nome_sala']=='Delta'){echo 'selected';}?>>Delta</option>
        </select>
    </div>
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label">Data e ora:</label>
        <div class="col-sm-10">
            <div class="row">
                <div class="col-sm-2">
                    <input type="date" name="data" class="form-control" value="<?PHP echo $dati['data'];?>">
                </div>
                <div class="col-sm-2">
                    <input type="time" name="ora" class="form-control" value="<?PHP echo $dati['ora'];?>">
                </div>
                <div class="col-sm-8"></div>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <label for="tema" class="col-sm-2 col-form-label">Tema:</label>
        <div class="col-sm-10">
            <input type="text" name="tema" class="form-control" size="100" value="<?PHP echo $dati['tema'];?>">
        </div>
    </div>
    <div class="row mb-3">
        <label for="durata" class="col-sm-2 col-form-label">Dutara in ore:</label>
        <div class="col-sm-10">
            <div class="row">
                <div class="col-sm-1">
                    <input type="number" class="form-control" name="durata" value="<?PHP echo $dati['durata_ore'];?>">
                </div>
                <div class="col-sm-11"></div>
            </div>
        </div>
        <input type="hidden" name="id" value="<?PHP echo $id_riunione;?>"/>
    </div>
                    <!-- <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Invitati:</label>
                        <fieldset disabled class="col-sm-8">
                                <input type="text" id="disabledTextInput" class="form-control" placeholder="da implementarsi bene bene in PHP. esempio: Basilio Russo, Gabriella Angelo + alrti 15">
                        </fieldset>
                        <a href="invita.php" class="col-sm-2">Aggiungi invitati</a>
                    </div> -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
        SALVA
    </button>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Autenticazione</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputPassword" type="password" name="passowrd" placeholder="Conferma Password" />
                        <label for="inputPassword">Conferma password</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                    <button type="submit" name="submit" class="btn btn-primary">Salva modifiche</button>
                </div>
            </div>
        </div>
    </div>
</form>
