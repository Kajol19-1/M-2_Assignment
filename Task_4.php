<?php
function Fibonacci($count) {
    $firstNumber = 0;
    $secondNumber = 1;

    echo "Fibonacci series of the first $count numbers:\n";

    for ($i = 0; $i < $count; $i++) {
        echo $firstNumber . " ";
        $nextNumber = $firstNumber + $secondNumber;
        $firstNumber = $secondNumber;
        $secondNumber = $nextNumber;
    }
}

Fibonacci(15);
?>