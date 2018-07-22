<?php

function sum($num1, $num2) {
    if (isset($num1) && isset($num2) && $num1 !== "" && $num2 !== "") {
        return $num1 + $num2;
    }
    return 'Wrong argumetns!';
}

function subtraction($num1, $num2) {
    if (isset($num1) && isset($num2) && $num1 !== "" && $num2 !== "") {
        return $num1 - $num2;
    }
    return 'Wrong argumetns!';
}

function multiplication($num1, $num2) {
    if (isset($num1) && isset($num2) && $num1 !== "" && $num2 !== "") {
        return $num1 * $num2;
    }
    return 'Wrong argumetns!';
}

function division($num1, $num2) {
    if (isset($num1) && isset($num2) && $num1 !== "" && $num2 !== "") {
        if ($num2 != 0) {
            return $num1 / $num2;
        } else {
            return 'Error, division by zero';
        }
    }
    return 'Wrong argumetns!';
}

function square($num1) {
    if (isset($num1) && $num1 !== "") {
        return $num1 * $num1;
    }
    return 'Wrong argumetns!';
}

function getInfo() {
    return 'You can use this functions: '
            . 'sum($n1, $n2), subtraction($n1, $n2), multiplication($n1, $n2), '
            . 'division($n1, $n2), square($n1)';
}
