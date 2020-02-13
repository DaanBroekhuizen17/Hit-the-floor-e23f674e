<?php


$input = $argv[1];
$getal = intval($input);

switch($getal){

    case 50:
        floor(50 % $getal);
    break;

    case 20:
        floor(20 % $getal);
    break;

    case 10:
        floor(10 % $getal);
    break;

    case 5:
        floor(5 % $getal);
    break;

    case 2:
        floor(2 % $getal);
    break;

    case 1:
        floor(1 % $getal);
    break;

    case 0.50:
        floor(0.50 % $getal);
    break;

    case 0.20:
        floor(0.20 % $getal);
    break;

    case 0.10:
        floor(0.10 % $getal);
    break;

    case 0.05:
        floor(0.05 % $getal);
    break;
}


?>