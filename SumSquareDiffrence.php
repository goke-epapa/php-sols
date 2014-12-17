<?php
function sumSquareDiff($n) {
    $count = 1;
    $sumOfSquares = 0;
    $sum = 0;
    while ($count <= $n) {
        $sumOfSquares += ($count * $count);
        $sum += $count;
        $count++;
    }
    return pow($sum, 2) - $sumOfSquares;
}

$fin = fopen("php://stdin", "r");

$numTestCases = trim(fgets(STDIN));

for($i = 0; $i < $numTestCases; $i++) {
    $n = (int) trim(fgets(STDIN));
    echo sumSquareDiff($n);
    if($i < $numTestCases) {
        echo "\n";
    }
}