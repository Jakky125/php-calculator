<?php
declare(strict_types = 1);
$string = $argv[1];

function solveplusminus(string $string) : int {
    $plusIndex = strrpos($string, '+');
    $minusIndex = strrpos($string, '-');

    if ($plusIndex === false && $minusIndex === false) {
        return (int) $string;
    }

    if ($plusIndex > $minusIndex) {
        $firstPart = substr($string,0, $plusIndex);
        $secondPart = substr($string, $plusIndex + 1);

        return solveplusminus($firstPart) + solveplusminus($secondPart);
    }

    $firstPart = substr($string,0, $minusIndex);
    $secondPart = substr($string, $minusIndex + 1);

    return solveplusminus($firstPart) - solveplusminus($secondPart);
}

function solveMultiDivision(string $string) : int {
    $multiIndex = strpos($string, "*");
    $divisionIndex = strpos($string, "/");

    if ($multiIndex === false && $divisionIndex === false) {
        echo solveplusminus($string);
    }

    if ($multiIndex < $divisionIndex) {
        $firstPart = substr($string,0, $multiIndex);
        $lastIndexPlus = strrpos($firstPart, "+");
        $lastIndexMinus = strrpos($firstPart, "-");
        if ($lastIndexPlus > $lastIndexMinus)
        {
            $firstPart = substr($firstPart,$lastIndexPlus + 1);
        }
        $firstPart = substr($firstPart,$lastIndexMinus + 1);
        $secondPart = substr($string, $multiIndex + 1);
        $lastIndexPlus = strpos($secondPart, "+");
        $lastIndexMinus = strpos($secondPart, "-");
        if ($lastIndexPlus > $lastIndexMinus)
        {
            $secondPart = substr($secondPart,0,$lastIndexMinus);
        }
        $secondPart = substr($secondPart,0,$lastIndexPlus);
        return solveMultiDivision($firstPart) * solveMultiDivision($secondPart);

    }

    if ($multiIndex > $divisionIndex) {
        $firstPart = substr($string,0, $divisionIndex);
        $lastIndexPlus = strrpos($firstPart, "+");
        $lastIndexMinus = strrpos($firstPart, "-");
        if ($lastIndexPlus > $lastIndexMinus)
        {
            $firstPart = substr($firstPart,$lastIndexPlus + 1);
        }
        $firstPart = substr($firstPart,$lastIndexMinus + 1);
        $secondPart = substr($string, $divisionIndex + 1);
        $lastIndexPlus = strpos($secondPart, "+");
        $lastIndexMinus = strpos($secondPart, "-");
        if ($lastIndexPlus > $lastIndexMinus)
        {
            $secondPart = substr($secondPart,0,$lastIndexMinus);
        }
        $secondPart = substr($secondPart,0,$lastIndexPlus);
        return solveMultiDivision($firstPart) * solveMultiDivision($secondPart);

    }

}
echo solveMultiDivision($string);
