<?php

function orario_in_secondi($ora){

    $secondi = 0;
    list($hh, $mm, $ss) = explode(':', $ora);
    $secondi += (int)$hh*3600;
    $secondi += (int)$mm*60;
    $secondi += (int)$ss;
    return $secondi;

}

function between($n, $min, $max){
    if ($n<$max && $n>$min){
        return true;
    }
    return false;
}

function sovrapposte($inizior1, $duratar1, $inizior2, $duratar2){

    $sovrapposte = false;
    $inizior1 .= ':00';

    $inizior1 = orario_in_secondi($inizior1);
    $inizior2 = orario_in_secondi($inizior2);
    $finer1 = $inizior1 + ($duratar1*3600);
    $finer2 = $inizior2 + ($duratar2*3600);

    if (between($inizior1, $inizior2, $finer2) || between($inizior2, $inizior1, $finer1)){
        $sovrapposte = true;
    }
    return $sovrapposte;
}

function ok_pwd($old, $new1, $new2){
    if ($old == null){
        return 1;
    }
    if ($new2 == null){
        return 2;
    }
    if (hash('sha256', $old) != $_SESSION['user_data']['password']){
        return 3;
    }
    if ($old == $new1){
        return 4;
    }
    if ($new1 != $new2){
        return 5;
    }
    if (ctype_alnum($new1) == false){
        return 6;
    }
    return -1;
}