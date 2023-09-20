<?php
// Function using a for loop
function forLoop($start,$end,$step){
    echo "Using for loop: ";
    if($start %2 !==0){
        $start++;
    }
    for($i = $start; $i <= $end; $i +=$step){
        echo $i." ";
    }
    echo "\n";
}




// Function using a while loop
function whileLoop($start, $end, $step)
 {
    echo "Using while loop: ";
    if($start %2 !==0){
        $start++;
    }
    $c = $start;
    while ($c<= $end) {
        
        echo $c . " ";
        
        $c+=$step;
    }
    echo "\n";
}

// Function using a do-while loop
function doWhile($start, $end, $step)
 {
    echo "Using do-while loop: ";
    if($start %2 !==0){
        $start++;
    }
    $c = $start;
    do {
       
            echo $c . " ";
        
            $c+=$step;
    } while ($c <= $end);
    echo "\n";
}

// Calling the functions to print even numbers
forLoop(1, 20, 2);      
whileLoop(1, 20, 2);    
doWhile(1, 20, 2); 
?>