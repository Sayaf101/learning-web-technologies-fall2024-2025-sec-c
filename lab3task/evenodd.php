<?php

function checkEvenOdd($number) {
    
    if ($number % 2 == 0) {
  
        return "Even";
    } else {
        
        return "Odd";
    }
}


$number = 25;  

$result = checkEvenOdd($number);

echo "The number $number is $result.";
?>
