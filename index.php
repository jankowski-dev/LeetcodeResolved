<?php
header('Content-Type:text/html;charset=utf-8');
// Controll Error
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ERROR);

$str = 'sraacecars';

function isPolindrome($str)
{
    for ($i = 0; $i < strlen($str); $i++) {
        if (strcasecmp($str[$i], $str[(strlen($str) - 1 - $i)]) == 0) {
            continue;
        } else {
            return 0;
            break;
        }

    }
    return true;
}

print_r(isPolindrome($str));
