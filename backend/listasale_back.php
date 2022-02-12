<?php

require_once 'mysql_connect_back.php';
$query =
    'SELECT nome, dipartimento, capienza, tavoli, proiettori, computer, lavagne FROM sala ';
$sale = @mysqli_query($dbc, $query);
$count = 0;

while ($row = mysqli_fetch_array($sale)) {
    $count++;
    $modal_number = 'modal' . $count;
    switch ($row['dipartimento']) {
        case 'Galileo':
            $indirizzo = 'via Monterosa 1, Milano';
            break;
        case 'Copernico':
            $indirizzo = 'via Accademia 3, Segrate';
            break;
        case 'Keplero':
            $indirizzo = 'via Giulio Cesare 28, Varese';
            break;
        case 'Newton':
            $indirizzo = 'via Vesuvio 15, Milano';
            break;
    }

    echo '<tr><td>' .
        $row['nome'] .
        '</td><td class="tooltipkamil" messaggio-tooltip="' .
        $indirizzo .
        '">' .
        $row['dipartimento'] .
        '</td><td>' .
        $row['capienza'] .
        '</td><td>' .
        $row['tavoli'] .
        '</td><td>' .
        $row['proiettori'] .
        '</td><td>' .
        $row['computer'] .
        '</td><td>' .
        $row['lavagne'] .
        '</td>
        <td><a href="../frontend/modifica%20sala.php?sala=' .
        $row['nome'] .
        '&dip=' .
        $row['dipartimento'] .
        '" type="button" class="btn btn-primary btn-sm">Modifica</a></td>
        <td><button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#' .
        $modal_number .
        '"><i class="fas fa-trash-alt"></i></button></td>
        </tr>
        
        <div class="modal fade" id="' .
        $modal_number .
        '" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Autenticazione</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="../backend/deletesala_back.php?sala=' .
                    $row['nome'] .
                    '&dip=' .
                    $row['dipartimento'] .
                    '" method="post">
                        <div class="modal-body">
                            <div class="form-floating mb-3">
                                <input class="form-control" id="inputPassword" type="password" name="password" placeholder="Conferma Password" />
                                <label for="inputPassword">Conferma password</label>
                            </div>
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                        <button type="submit" class="btn btn-danger">ELIMINA SALA</button>
                    </div>
                </form>
            </div>
        </div>
    </div>';
}
mysqli_close($dbc);
?>
