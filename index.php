<?php
header('Content-Type:text/html;charset=utf-8');
// Controll Error
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ERROR);

$score = [10,3,8,9,4];

    function findRelativeRanks($score) {
        arsort($score);
        $arrayPresent = ["Gold Medal","Silver Medal","Bronze Medal"];
        $arraySorted = [];
        $i = 0;
        $count = 1;
        foreach ($score as $key => $value) {

            if ($i == 0) {
                $arraySorted[$key] = $arrayPresent[$i];
            }
            if ($i == 1) {
                $arraySorted[$key] = $arrayPresent[$i];
            }
            if ($i == 2) {
                $arraySorted[$key] = $arrayPresent[$i];
            }
            if ($i >= 3) {
            $arraySorted[$key] = strval($count);
            }
            $count++;
            $i++;
        }
        ksort($arraySorted);
        return $arraySorted;
    }


    print_r(findRelativeRanks($score));