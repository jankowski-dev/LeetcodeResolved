<?php
header('Content-Type:text/html;charset=utf-8');
// Controll Error
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ERROR);

$digits = [7, 2, 8, 5, 0, 9, 1, 2, 9, 5, 3, 6, 6, 7, 3, 2, 8, 4, 3, 7, 9, 5, 7, 7, 4, 7, 4, 9, 4, 7, 0, 1, 1, 1, 7, 4, 0, 0, 6];

function plusOne($digits)
{
    $str = '';
    $numeric = 0;
    $arrayNumber = [];

    foreach ($digits as $number) {
        $str .= strval($number);
    }
    echo $str . "<br>";
    $precision = 0;
    $numeric = bcadd($str, 1, 0);
    echo $numeric;

    // $numeric = intval($str) + 1;
    $str = strval($numeric);

    for ($i = 0; $i <= strlen($str); $i++) {
        if (isset($str[$i])) {
            array_push($arrayNumber, $str[$i]);
        }
    }

    return $arrayNumber;
}

print_r(plusOne($digits));
