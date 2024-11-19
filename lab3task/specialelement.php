<?php

$array = [5, 10, 15, 20, 25, 30, 35, 40];

$searchElement = 25;


$result = false;


for ($i = 0; $i < count($array); $i++) {
    if ($array[$i] == $searchElement) {
        $result = true;
        break;  
    }
}


if ($result) {
    echo "Element $searchElement found in the array.";
} else {
    echo "Element $searchElement not found in the array.";
}
?>
