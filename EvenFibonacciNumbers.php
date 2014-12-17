<?php

function fib($n){
    if($n === 1) {
        echo 1;
    } else {
        $f0 = 0;
        $f1 = 1;
        $count = 0;
        echo 1;
        echo " ";
        while($count < $n) {
            $temp = $f1;
            $f1 = $f1 + $f0;
            echo $f1 . " ";
            $f0 = $temp;
            $count++;
        }
    }
}

function sumEvenFibonacciNumber($n){
    $sum = 0;
    if($n !== 1) {
        $f0 = 0;
        $f1 = 1;
        $count = 0;
        while($f1 < $n) {
            $temp = $f1;
            $f1 = $f1 + $f0;
            if($f1 % 2 === 0 && $f1 < $n) {
                $sum += $f1;
            }
            $f0 = $temp;
            $count++;
        }
    }
    return $sum;
}

$fp = fopen("php://stdin","r");
//while (false !== ($line = fgets(STDIN))) {
//    echo $line;
//}

$numTests = (int) trim(fgets(STDIN));

for($i = 0; $i < $numTests; $i++) {
    $n = (int) trim(fgets(STDIN));
    echo sumEvenFibonacciNumber($n);
    if($i < $numTests) {
        echo "\n";
    }
}