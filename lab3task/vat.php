<?php

function calculateVAT($amount) {
    $vat_rate = 0.15;

    $vat = $amount * $vat_rate;

    return $vat;
}


$amount = 1000;  


$vat = calculateVAT($amount);

$totalAmount = $amount + $vat; 

echo "Original Amount: $amount<br>";

echo "VAT (15%): $vat<br>";

echo "Total Amount (with VAT): $totalAmount<br>";

?>
