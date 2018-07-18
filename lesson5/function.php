<?php

function sum($num1, $num2) {
    if (isset($num1) && isset($num2) && $num1 !== "" && $num2 !== "") {
        return $num1 + $num2;
    }
    return 'error';
}
