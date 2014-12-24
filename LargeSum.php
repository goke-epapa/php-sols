<?php

function largeSum(array $arr) {
    $sum = 0;
    for($i = 0; $i < count($arr); $i++) {
        $sum += $arr[$i];
    }
    echo (int) $sum;
    echo "\n";
    return str_replace(".","",substr((string) $sum, strlen($sum) - 11, strlen($sum)));
}
$fin = fopen("php://stdin", "r");

$numTestCases = trim(fgets(STDIN));

$arr = array();
for($i = 0; $i < $numTestCases; $i++) {
    $n = (int) trim(fgets(STDIN));
    array_push($arr, $n);
}

echo largeSum($arr);