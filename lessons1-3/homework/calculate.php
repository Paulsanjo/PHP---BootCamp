<?php

$num1 = $_GET['num1'];
$num2 = $_GET['num2'];
$delimeter = urlencode($_GET['del']);

switch ($delimeter){
    case '+':
        echo "$num1 + $num2 = ", $num1 + $num2;
        break;
    case '-':
        echo "$num1 - $num2 = ", $num1 - $num2;
        break;
    case '/':
        echo "$num1 / $num2 = ", $num1 / $num2;
        break;  
    case '*':
        echo "$num1 * $num2 = ", $num1 * $num2;
        break;
    default:
        echo "Wrong format";
        break;
}


