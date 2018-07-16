<?php

echo evenOrNot(10, 3);

function evenOrNot($number1, $number2){
    if ($number1 % $number2 == 0){
        return 'true';
    } else {
        return 'false';
    }
}

?>

