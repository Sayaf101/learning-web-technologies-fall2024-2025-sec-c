<?php

function calculateArea($length, $width) {
    return $length * $width;
}


function calculatePerimeter($length, $width) {
    return 2 * ($length + $width);
}


$length = 10; 
$width = 5;    


$area = calculateArea($length, $width);
$perimeter = calculatePerimeter($length, $width);

echo "For a rectangle with length = $length and width = $width:<br>";
echo "Area = " . $area . " square units<br>";
echo "Perimeter = " . $perimeter . " units<br>";
?>