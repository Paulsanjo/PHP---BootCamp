<?php

include 'function.php';

$num1 = '';
$num2 = "";

if (sum(333, 333) === 666){
    echo 'test 333 + 333 = 666, passed', '<br>';
} else {
    echo 'test 333 + 333 = 666, failed', '<br>';
}
if (sum(null, null) === 'error'){
    echo 'test null + null = error, passed', '<br>';
} else {
    echo 'test null + null = error, failed', '<br>';
}
if (sum(333.333, 333.333) === 666.666){
    echo 'test 333.333 + 333.333 = 666.666, passed', '<br>';
} else {
    echo 'test 333.333 + 333.333 = 666.666, failed', '<br>';
}
if (sum(-333, -333) === -666){
    echo 'test -333 + -333 = -666, passed', '<br>';
} else {
    echo 'test -333 + -333 = -666, failed', '<br>';
}
if (sum($num1, $num2) === 'error'){
    echo 'test $num1 + $num2 = error, passed', '<br>';
} else {
    echo 'test $num1 + $num2 = error, failed', '<br>';
}
if (sum(1, 0) === 1){
    echo 'test 1 + 0 = 1, passed', '<br>';
} else {
    echo 'test 1 + 0 = 1, failed', '<br>';
}
