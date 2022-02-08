<?php

$riunione_sovrapposta = null;

require_once "mysql_connect_back.php";
require_once 'funzionikamil_back.php';

$query = 'SELECT * FROM riunione WHERE data=\'' . $data . '\' AND nome_sala=\'' . $sala . '\' AND dipartimento=\'' . $dipartimento . '\'; ';
//echo $query;
$res = $dbc->query($query);
while ($occupata = mysqli_fetch_array($res)){
    if ($occupata==null){
        $riunione_sovrapposta = null;
        break;
    } else if(sovrapposte($ora, $durata, $occupata['ora'], $occupata['durata_ore'])) {
        $riunione_sovrapposta = array('tema_rs' => $occupata['tema'], 'org_rs' => $occupata['organizzatore'] );
        break;
    }
}
?>