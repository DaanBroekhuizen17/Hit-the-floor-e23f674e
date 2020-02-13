<?php


$input = $argv[1];
$getal = intval($input);
$tienHoeveel = 0;
$vijfHoeveel = 0;
$tweeHoeveel = 0;
$eenHoeveel = 0;



if( $getal >= 10){
    $tienHoeveel = floor($getal / 10);
    $getal = ($getal - ($tienHoeveel*10));
    echo($tienHoeveel." x 10 euro".PHP_EOL);
}
if( $getal >= 5){
    $vijfHoeveel = floor($getal / 5);
    $getal = ($getal - ($vijfHoeveel*5));
    echo($vijfHoeveel." x 5 euro".PHP_EOL);
}
if( $getal >= 2){
    $tweeHoeveel = floor($getal / 2);
    $getal = ($getal - ($tweeHoeveel*2));
    echo($tweeHoeveel." x 2 euro".PHP_EOL);

}
if( $getal >= 1){
    $eenHoeveel = floor($getal / 1);
    $getal = ($getal - ($eenHoeveel*1));
    echo($eenHoeveel." x 1 euro".PHP_EOL);
}

?>