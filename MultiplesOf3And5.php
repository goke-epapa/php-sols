<?php

function sumOfMultiplesOf3And5($n) {
    $count = 1;
    $sum = 0;
    while($count < $n) {
        if($count % 3 === 0 || $count % 5 === 0) {
            $sum += $count;
        }
        $count++;
    }
    return $sum;
}

$fin = fopen("php://stdin", "r");

$numTestCases = trim(fgets(STDIN));

for($i = 0; $i < $numTestCases; $i++) {
    $n = (int) trim(fgets(STDIN));
    echo sumOfMultiplesOf3And5($n);
    if($i < $numTestCases) {
        echo "\n";
    }
}