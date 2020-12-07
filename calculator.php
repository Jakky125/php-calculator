<?php
declare(strict_types = 1);
$zadani = explode("+", $argv[1]);
$vysledek = 0;
foreach($zadani as $hodnota){
    $vysledek = $vysledek + $hodnota;
}
print_r($vysledek);
