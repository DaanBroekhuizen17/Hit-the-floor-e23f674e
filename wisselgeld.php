<?php


$input = $argv[1];
$getal = intval($input);

switch($getal){

    case 50:
        $vijftig = ($getal % 50);
        $overVijftig = floor($vijftig);
    break;

    case 20:
        $twintig = ($overVijftig % 20);
        $overtwintig = floor($twintig);
    break;

    case 10:
        $tien = ($overtwintig % 10);
        $overtien = floor($tien);
    break;

    case 5:
        $vijf = ($overtien % 5);
        $overvijf = floor($vijf);
    break;

    case 2:
        $twee = ($overvijf % 2);
        $overtwee = floor($twee);
    break;

    case 1:
        $een = ($overtwee % 1);
        $overeen = floor($een);
    break;

}


?>