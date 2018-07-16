<?php

$number1 = 10;
$number2 = 2;
$number3 = 15;

$number4 = ($number1  * 3) - ($number3 * 2) + $number2;
$number5 = $number1 + $number3 - $number1 - $number3 + $number2;
$number6 = --$number3 - $number1 - $number2;

echo $nubmer6;

echo evenOrNot(10, 3);

function evenOrNot($number1, $number2){
    if ($number1 % $number2 == 0){
        return true;
    } else
        return false;
}

?>
