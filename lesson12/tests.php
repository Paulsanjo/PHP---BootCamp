<?php

include 'Calculator.php';

//sum() test
echo '<h3>$calc->getResult() function tests: </h3>' . '<br>';

$calc = new Calculator(333, 333, '+');
if ($calc->getResult() === 666) {
    echo 'test 1: 333 + 333 = 666, <b>passed</b>', '<br>';
} else {
    echo 'test 1: 333 + 333 = 666, <b>failed</b>', '<br>';
}
unset($calc);

$calc = new Calculator(null, null, '+');
if ($calc->getResult() === 'Wrong action') {
    echo 'test 2: null + null = Wrong action, <b>passed</b>', '<br>';
} else {
    echo 'test 2: null + null = Wrong action, <b>failed</b>', '<br>';
}
unset($calc);

$calc = new Calculator(0.333, 0.333, '+');
if ($calc->getResult() === 0.666) {
    echo 'test 3: 0.333 + 0.333 = 0.666, <b>passed</b>', '<br>';
} else {
    echo 'test 3: 0.333 + 0.333 = 0.666, <b>failed</b>', '<br>';
}
unset($calc);

$calc = new Calculator(-333, -333, '+');
if ($calc->getResult() === -666) {
    echo 'test 4: -333 + -333 = -666, <b>passed</b>', '<br>';
} else {
    echo 'test 4: -333 + -333 = -666, <b>failed</b>', '<br>';
}
unset($calc);

$calc = new Calculator(1, 0, '+');
if ($calc->getResult() === 1) {
    echo 'test 5: 1 + 0 = 1, <b>passed</b>', '<br>';
} else {
    echo 'test 5: 1 + 0 = 1, <b>failed</b>', '<br>';
}
unset($calc);

$calc = new Calculator(10, 5, '-');
if ($calc->getResult() === 5) {
    echo 'test 6: 10 - 5 = 5, <b>passed</b>', '<br>';
} else {
    echo 'test 6: 10 - 5 = 5, <b>failed</b>', '<br>';
}
unset($calc);

$calc = new Calculator(10, 0, '/');
if ($calc->getResult() === 'Error, division by zero') {
    echo 'test 7: 10 / 0 = Error, division by zero, <b>passed</b>', '<br>';
} else {
    echo 'test 7: 10 / 0 = Error, division by zero, <b>failed</b>', '<br>';
}
unset($calc);

$calc = new Calculator(10, 3, '*');
if ($calc->getResult() === 30) {
    echo 'test 8: 10 * 3 = 30, <b>passed</b>', '<br>';
} else {
    echo 'test 8: 10 * 3 = 30, <b>failed</b>', '<br>';
}
unset($calc);
