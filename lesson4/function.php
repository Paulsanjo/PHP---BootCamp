<?php

$a = $_GET['a'];
$b = $_GET['b'];

echo sum($a, $b);

function sum($a, $b){
    return $a + $b;
}

