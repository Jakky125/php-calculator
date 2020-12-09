<?php
declare(strict_types = 1);
$string = $argv[1];
function solveplusminus($string){
    $plusIndex = strrpos($string, '+'); // index posledního pluska
    $minusIndex = strrpos($string, '-'); //index posledního minus
if(empty($plusIndex) AND empty($minusIndex)) {
    $vysledek = $vysledek + (int)$string;
    echo $vysledek;
}
else{
if($plusIndex > $minusIndex)
    {
    $delkaposlednicasti = strlen($string) - $plusIndex;
    $firstpart = substr($string,0,$plusIndex);
    $secondpart = substr($string,$plusIndex, $delkaposlednicasti);
    $vysledek = $vysledek + (int)$secondpart;
    $string = substr($string, 0,-$secondpart);
    solveplusminus($string);
    }
else
    {
    $delkaposlednicasti = strlen($string) - $minusIndex;
    $firstpart = substr($string,0,$minusIndex);
    $secondpart = substr($string,$minusIndex, $delkaposlednicasti);
    $vysledek = $vysledek - (int)$secondpart;
    $string = substr($string, 0,-$secondpart);
    solveplusminus($string);
    }
}
}
solveplusminus($string);
