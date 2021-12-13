<?php

    require_once('mysql_connect_back.php');
    $query = "SELECT nome, cognome, data_nascita, email, dipartimento, ruolo, data_autorizzazione FROM persona ORDER BY {$ordine}";
    $utenti = @mysqli_query($dbc, $query);
    $count = 0;

    while($row = mysqli_fetch_array($utenti)){
        $count ++;
        $modal_number = 'modal'.$count;
        echo '<tr><td>'.
            $row['nome'].'</td><td>'.
            $row['cognome'].'</td><td>'.
            $row['data_nascita'].'</td>';
        if(isset($row['data_autorizzazione'])){
            echo '<td class="text-success"><i class="fas fa-user-check"></i>  <strong>'.$row['email'].'</strong></td><td>';
        } else {
            echo '<td>'.$row['email'].'</td><td>';
        }
        echo    $row['dipartimento'].'</td><td>'.
            $row['ruolo'].'</td>
            <td><a href="../frontend/modifica%20utente.php?user='.$row['email'].'" type="button" class="btn btn-primary btn-sm">Modifica</a></td>
            <td><button type="button" class="btn btn-danger btn-sm" data-bs-toggle="modal" data-bs-target="#'.$modal_number.'"><i class="fas fa-trash-alt"></i></button></td>
        </tr>
        
        <div class="modal fade" id="'.$modal_number.'" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    <a type="submit" href="../backend/deleteutente_back.php?user='.$row['email'].'" class="btn btn-danger">ELIMINA UTENTE</a>
                </div>
            </div>
        </div>
    </div>';
    }
?>