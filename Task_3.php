<?php

function fibonacci($number) {
    if ($number <= 1) {
        return $number;
    } else {
        return fibonacci($number - 1) + fibonacci($number - 2);
    }
}

$count = 0;
$maxValue = 100;
echo "First 10 Fibonacci numbers less than or equal to $maxValue:\n";

for ($i = 0; $count < 10; $i++) {
    $fibonaccinumber = fibonacci($i);
    
    if ($fibonaccinumber > $maxValue) {
    }



    echo $fibonaccinumber . " ";
   

    $count++;
}

?>