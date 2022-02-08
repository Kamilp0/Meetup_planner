<?PHP

session_start();
require_once 'mysql_connect_back.php';
require_once 'funzionikamil_back.php';

$href='';
$colore='';

$query1 = 'SELECT COUNT(*) AS par FROM invito WHERE id_riunione=' . $id_riunione . ' AND stato_notifica=\'confermato\';';

$query2 = 'SELECT capienza AS cap FROM sala JOIN riunione ON sala.nome=riunione.nome_sala AND sala.dipartimento=riunione.dipartimento WHERE riunione.id_riunione=' . $id_riunione . ';';

$query3 = 'SELECT riunione.ora, riunione.durata_ore, riunione.tema FROM riunione JOIN invito ON riunione.id_riunione=invito.id_riunione WHERE invito.persona=\'' . $_SESSION['user_data']['email'] . '\' AND riunione.data=\'' . $invito['data'] . '\' AND invito.stato_notifica=\'confermato\';';

//echo $query1;
//echo $query2;
//echo $query3;

$res1 = $dbc->query($query1);
$partecipanti = $res1->fetch_assoc();
$res2 = $dbc->query($query2);
$capienza = $res2->fetch_assoc();
$res3 = $dbc->query($query3);

//print_r($sovrapp);

$aux = $capienza['cap']-$partecipanti['par'];

while ($sovrapp = mysqli_fetch_array($res3)){
    if ($sovrapp != null){
        if (sovrapposte($invito['ora'], $invito['durata_ore'], $sovrapp['ora'], $sovrapp['durata_ore'])){
            $href = ' class="tooltipkamil" messaggio-tooltip="Sovrapposizione con la riunione: ' . $sovrapp['tema'] . '"><a href=""';
            $colore = 'btn-warning';
            $posti_liberi = ' class="text-warning"><i class="fas fa-chair"></i><strong> ' . $aux . '</strong>';
        }
    }
}

if($aux<=0 && $href==''){
    $href = '><a href=""';
    $colore = 'btn-secondary';
    $posti_liberi = ' class="text-danger"><i class="fas fa-frown"></i><strong>  Posti esauriti</strong>';
} else if ($href==''){
    $href = '><a href="../backend/conferma_iscrizione_back.php?id=' . $id_riunione . '"';
    $colore = 'btn-success';
    $posti_liberi = ' class="text-primary"><i class="fas fa-chair"></i><strong> ' . $aux . '</strong>';
}