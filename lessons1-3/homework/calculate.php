<?php

//TODO check keys

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];

//check is variable numeric
if (!is_numeric($num1) || !is_numeric($num2)){
    echo 'Wrong format';
    exit;
}
if (urlencode($_GET['del'])== '+'){
    $delimeter = urlencode($_GET['del']);
} else {
    $delimeter = $_GET['del'];
}

switch ($delimeter){
    case '+':
        echo "$num1 + $num2 = ", $num1 + $num2;
        break;
    case '-':
        echo "$num1 - $num2 = ", $num1 - $num2;
        break;
    case '/':
        if($num2 == 0){
            echo 'Division by zero is not cool';
            break;
        }
        echo "$num1 / $num2 = ", $num1 / $num2;
        break;  
    case '*':
        echo "$num1 * $num2 = ", $num1 * $num2;
        break;
    default:
        echo "Wrong format";
        break;
}


