<?php
declare(strict_types = 1);
$plusIndex = strrpos($argv[1], '+'); // index posledniho pluska
$minusIndex = strrpos($argv[1], '-'); //index posledniho minus
if($minusIndex > $plusIndex)
{
    $delkaposlednicasti = strlen($argv[1]) - $minusIndex;
    $prvnicast = substr($argv[1],0,$minusIndex);
    $poslednicast = substr($argv[1],$minusIndex, $delkaposlednicasti);
    $poslednicastint = (int)$poslednicast;
    $vysledek = 0;
    $vysledek = $vysledek - $poslednicastint;
}
else
{
    $delkaposlednicasti = strlen($argv[1]) - $plusIndex;
    $prvnicast = substr($argv[1],0,$plusIndex);
    $poslednicast = substr($argv[1],$plusIndex, $delkaposlednicasti);
    $poslednicastint = (int)$poslednicast;
    $vysledek = 0;
    $vysledek = $vysledek + $poslednicastint;

}
while(strlen($prvnicast2) !== 1 OR strlen($prvnicast2) !== 2)
{
    $plusIndex = strrpos($prvnicast, '+');
    $minusIndex = strrpos($prvnicast, '-');
    if($minusIndex > $plusIndex) {
        $delkaposlednicasti = strlen($prvnicast) - $minusIndex;
        $prvnicast2 = substr($prvnicast,0,$minusIndex);
        $poslednicast = substr($prvnicast,$minusIndex, $delkaposlednicasti);
        $poslednicastint = (int)$poslednicast;
        $vysledek = $vysledek - $poslednicastint;
    }
    else {
        $delkaposlednicasti = strlen($prvnicast) - $plusIndex;
        $prvnicast2 = substr($prvnicast,0,$plusIndex);
        $poslednicast = substr($prvnicast,$plusIndex, $delkaposlednicasti);
        $poslednicastint = (int)$poslednicast;
        $vysledek = $vysledek + $poslednicastint;
    }
}
if($prvnicast == 1)
{
    $prvnicastint = (int)$prvnicast;
    $vysledek = $vysledek + $prvnicastint;
}
else
{
    $prvnicastint = (int)$prvnicast;
    $vysledek = $vysledek - $prvnicastint;
}
echo $vysledek;


<?php
declare(strict_types = 1);
$string = $argv[1];
$vysledek = 0;
function solveplusminus($string, $vysledek){
    $plusIndex = strrpos($string, '+'); // index posledního pluska
    $minusIndex = strrpos($string, '-'); //index posledního minus
if(empty($plusIndex) AND empty($minusIndex)) {
    $vysledek = $vysledek + (int)$string;
}
if($plusIndex > $minusIndex)
    {
    $delkaposlednicasti = strlen($string) - $plusIndex;
    $firstpart = substr($string,0,$plusIndex);
    $secondpart = substr($string,$plusIndex, $delkaposlednicasti);
    $vysledek = $vysledek + (int)$secondpart;
    $string = substr($string, 0,-$secondpart);
    }
else
    {
    $delkaposlednicasti = strlen($string) - $minusIndex;
    $firstpart = substr($string,0,$minusIndex);
    $secondpart = substr($string,$minusIndex, $delkaposlednicasti);
    $vysledek = $vysledek - (int)$secondpart;
    $string = substr($string, 0,-$secondpart);
    }
solveplusminus($string, $vysledek);
}
echo $vysledek;





