<?php
header('Content-Type:text/html;charset=utf-8');
// Controll Error
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ERROR);

$nums = [3,2,1, 4, 5];
$number = 0;

  function thirdMax($nums) {
    $unique_nums = array_unique($nums);
    rsort($unique_nums);
    $count = count($unique_nums);
    if ($count >= 3) {
        return $unique_nums[2];
    } elseif ($count == 2) {
        return $unique_nums[0];
    } elseif ($count == 1) {
        return $unique_nums[0];
    }
    };

print_r(thirdMax($nums));