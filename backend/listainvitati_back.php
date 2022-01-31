<?php

require_once 'mysql_connect_back.php';
$query =
    'SELECT persona.nome, persona.cognome, persona.email, persona.dipartimento, persona.ruolo, invito.stato_notifica, invito.motivazione, invito.data_ultimo_aggiornamento 
            FROM persona 
            JOIN invito ON invito.persona=persona.email
            WHERE invito.id_riunione=' .
    $id_riunione .
    ';';
//echo $query;
$invitato = @mysqli_query($dbc, $query);
$count = 0;

while ($row = mysqli_fetch_array($invitato)) {
    $count++;
    $modal_number = 'modal' . $count;
    $data = $row['data_ultimo_aggiornamento'];
    $data_formattata = date('d/m/Y', strtotime($data));
    switch ($row['stato_notifica']) {
        case 'in attesa':
            $colore = 'text-warning';
            $icona = '<i class="fas fa-question-circle"></i>';
            $data_agg = '';
            break;
        case 'confermato':
            $colore = 'text-success';
            $icona = '<i class="fas fa-calendar-check"></i>';
            $data_agg =
                '<small class="fst-italic text-secondary">  il ' .
                $data_formattata .
                '</small>';
            break;
        case 'rifiutato':
            $colore = 'text-danger';
            $icona = '<i class="fas fa-calendar-times"></i>';
            $data_agg =
                '<small class="fst-italic text-secondary">  il ' .
                $data_formattata .
                '<br>Motivazione: ' .
                $row['motivazione'] .
                '</small>';
            break;
        default:
            $colore = 'text-dark';
            $icona = '';
            $data_agg = '';
    }

    echo '<tr><td>' .
        $row['nome'] .
        '</td><td>' .
        $row['cognome'] .
        '</td><td>' .
        $row['email'] .
        '</td><td>' .
        $row['dipartimento'] .
        '</td><td>' .
        $row['ruolo'] .
        '</td>
        <td class="' .
        $colore .
        '">' .
        $icona .
        '<strong>  ' .
        $row['stato_notifica'] .
        '</strong>' .
        $data_agg .
        '</td>
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
                <div class="modal-body">
                    <div class="form-floating mb-3">
                        <input class="form-control" id="inputPassword" type="password" placeholder="Conferma Password" />
                        <label for="inputPassword">Conferma password</label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Chiudi</button>
                    <a type="submit" href="../backend/deletesala_back.php" class="btn btn-danger">ELIMINA INVITATO</a>
                </div>
            </div>
        </div>
    </div>';
}
mysqli_close($dbc);
?>
