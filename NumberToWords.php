<?php

function numberToWord($n) {
//    $units = ;
//    $tens =
//    $suffixes = array('', 'hundred', 'thousand', 'million', 'billion');
    $map = array(
        array("zero", "one", "two", "three", "four", "five", "six", "seven", "eight", "nine"),
        array('', 'ten', 'twenty', 'thirty', 'fourty', 'fifty', 'sixty', 'seventy', 'eighty', 'ninety'),
        array('hundred', 'thousand', 'million', 'billion')
    );
    $word = "";
    if($n < 10) {
        $word = $map[0][$n];
    } else {
        $steps = (int) round(log10($n));
        $count = $steps;
        while ($count > 0){
            $divisor = pow(10, $count);
            $rem = $n % $divisor;
            $factor = (int) ($n / $divisor);
            $n = $rem;
            $word .= " ". $map[$count - 1][$factor];
            $count--;
        }
    }
    return ucwords(trim($word));
}

//echo numberToWord(100);
$f = new NumberFormatter("en", NumberFormatter::SPELLOUT);
$word = $f->format(100);
$word = ucwords(str_replace('-', '', $word));
echo $word;