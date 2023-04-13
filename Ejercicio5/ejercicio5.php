<?php

function sumatoria_a($arr){
    $acum = 0;
    for($i = 0; $i<count($arr); $i++){
        $acum += $arr[$i];
    }
    return $acum;
}

function sumatoria_b($arr){
    $acum = 0;
    foreach ($arr as $num) {
        $acum += $num;
    }
    return $acum;
}

function sumatoria_c($arr){
    $acum = 0;
    $count = 0;

    while ($count < count($arr)) {
        $acum += $arr[$count];
        $count++;
    }

    return $acum;
}
?>