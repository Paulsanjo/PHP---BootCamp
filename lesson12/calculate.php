<?php

include 'Calculator.php';
include 'form.php';

if (isset($_POST['number1']) && isset($_POST['number2']) && isset($_POST['action'])) {
    $number1 = $_POST['number1'];
    $number2 = $_POST['number2'];
    $action = $_POST['action'];
    
    $calc = new Calculator($number1, $number2, $action);
    echo $calc->getResult();
}


