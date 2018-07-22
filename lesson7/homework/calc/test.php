<?php

include 'calculate.php';

//sum() test
echo '<h3>sum($n1, $n2) function tests: </h3>' . '<br>';

if (sum(333, 333) === 666) {
    echo 'test 1: 333 + 333 = 666, <b>passed</b>', '<br>';
} else {
    echo 'test 1: 333 + 333 = 666, <b>failed</b>', '<br>';
}
if (sum(null, null) === 'Wrong argumetns!') {
    echo 'test 2: null + null = Wrong argumetns!, <b>passed</b>', '<br>';
} else {
    echo 'test 2: null + null = Wrong argumetns!, <b>failed</b>', '<br>';
}
if (sum(0.333, 0.333) === 0.666) {
    echo 'test 3: 0.333 + 0.333 = 0.666, <b>passed</b>', '<br>';
} else {
    echo 'test 3: 0.333 + 0.333 = 0.666, <b>failed</b>', '<br>';
}
if (sum(-333, -333) === -666) {
    echo 'test 4: -333 + -333 = -666, <b>passed</b>', '<br>';
} else {
    echo 'test 4: -333 + -333 = -666, <b>failed</b>', '<br>';
}
if (sum('', "") === 'Wrong argumetns!') {
    echo 'test 5: \'\' + "" = Wrong argumetns!, <b>passed</b>', '<br>';
} else {
    echo 'test 5: \'\' + "" = Wrong argumetns!, <b>failed</b>', '<br>';
}
if (sum(1, 0) === 1) {
    echo 'test 6: 1 + 0 = 1, <b>passed</b>', '<br>';
} else {
    echo 'test 6: 1 + 0 = 1, <b>failed</b>', '<br>';
}

//try-catch error
echo 'test7 :try-catch, function with wrong argument count test: ';
try {
    sum(1);
} catch (Exception $e) {
    echo $e;
} catch (ArgumentCountError $er) {
    echo $er->getMessage();
}

//subtraction() test
echo '<h3>subtraction($n1, $n2) function tests: </h3>' . '<br>';

if (subtraction(333, 333) === 0) {
    echo 'test 1: 333 - 333 = 0, <b>passed</b>', '<br>';
} else {
    echo 'test 1: 333 - 333 = 0, <b>failed</b>', '<br>';
}
if (subtraction(null, null) === 'Wrong argumetns!') {
    echo 'test 2: null - null = Wrong argumetns!, <b>passed</b>', '<br>';
} else {
    echo 'test 2: null - null = Wrong argumetns!, <b>failed</b>', '<br>';
}
if (subtraction(0.333, 0.334) === -0.001) {
    echo 'test 3: 0.333 - 0.334 = -0.001, <b>passed</b>', '<br>';
} else {
    echo 'test 3: 0.333 - 0.334 = -0.001, <b>failed</b>', '<br>';
}
if (number_format(subtraction(0.333, 0.334), 3) === "-0.001") {
    echo 'test 4: (number_format)0.333 - 0.334 === "-0.001", <b>passed</b>', '<br>';
} else {
    echo 'test 4: (number_format)0.333 - 0.334 === "-0.001", <b>failed</b>', '<br>';
}
if (subtraction(-333, -333) === 0) {
    echo 'test 5: -333 - -333 = 0, <b>passed</b>', '<br>';
} else {
    echo 'test 5: -333 - -333 = 0, <b>failed</b>', '<br>';
}
if (subtraction('', "") === 'Wrong argumetns!') {
    echo 'test 6: \'\' - "" = Wrong argumetns!, <b>passed</b>', '<br>';
} else {
    echo 'test 6: \'\' - "" = Wrong argumetns!, <b>failed</b>', '<br>';
}
if (subtraction(1, 0) === 1) {
    echo 'test 7: 1 - 0 = 1, <b>passed</b>', '<br>';
} else {
    echo 'test 7: 1 - 0 = 1, <b>failed</b>', '<br>';
}

//multiplication() test
echo '<h3>multiplication($n1, $n2) function tests: </h3>' . '<br>';

if (multiplication(333, 333) === 110889) {
    echo 'test 1: 333 * 333 = 110889, <b>passed</b>', '<br>';
} else {
    echo 'test 1: 333 * 333 = 110889, <b>failed</b>', '<br>';
}
if (multiplication(null, null) === 'Wrong argumetns!') {
    echo 'test 2: null * null = Wrong argumetns!, <b>passed</b>', '<br>';
} else {
    echo 'test 2: null * null = Wrong argumetns!, <b>failed</b>', '<br>';
}
if (multiplication(0.333, 0.334) === 0.111222) {
    echo 'test 3: 0.333 * 0.334 === 0.111222, <b>passed</b>', '<br>';
} else {
    echo 'test 3: 0.333 * 0.334 === 0.111222, <b>failed</b>', '<br>';
}
if (number_format(multiplication(0.333, 0.334), 6) === "0.111222") {
    echo 'test 4: (number_format)0.333 * 0.334 === "0.111222", <b>passed</b>', '<br>';
} else {
    echo 'test 4: (number_format)0.333 * 0.334 === "0.111222", <b>failed</b>', '<br>';
}

//echo multiplication(0.333, 0.334),'<br>';
//echo bccomp(multiplication(0.333, 0.334), 0.111222),'<br>';
//echo gmp_cmp((String)$str = multiplication(0.333, 0.334), "0.111222"),'<br>';

if (multiplication(-333, -333) === 110889) {
    echo 'test 5: -333 * -333 = 110889, <b>passed</b>', '<br>';
} else {
    echo 'test 5: -333 * -333 = 110889, <b>failed</b>', '<br>';
}
if (multiplication('', "") === 'Wrong argumetns!') {
    echo 'test 6: \'\' * "" = Wrong argumetns!, <b>passed</b>', '<br>';
} else {
    echo 'test 6: \'\' * "" = Wrong argumetns!, <b>failed</b>', '<br>';
}
if (multiplication(1, 0) === 0) {
    echo 'test 7: 1 * 0 = 0, <b>passed</b>', '<br>';
} else {
    echo 'test 7: 1 * 0 = 0, <b>failed</b>', '<br>';
}

//division() test
echo '<h3>division($n1, $n2) function tests: </h3>' . '<br>';

if (division(333, 333) === 1) {
    echo 'test 1: 333 / 333 = 1, <b>passed</b>', '<br>';
} else {
    echo 'test 1: 333 / 333 = 1, <b>failed</b>', '<br>';
}
if (division(null, null) === 'Wrong argumetns!') {
    echo 'test 2: null / null = Wrong argumetns!, <b>passed</b>', '<br>';
} else {
    echo 'test 2: null / null = Wrong argumetns!, <b>failed</b>', '<br>';
}
if (division(0.1, -5000) === -0.00002) {
    echo 'test 3: 0.1 / 5 === 0.02, <b>passed</b>', '<br>';
} else {
    echo 'test 3: 0.1 / 5 === 0.02, <b>failed</b>', '<br>';
}
if (division(-333, 333) === -1) {
    echo 'test 4: -333 / 333 = -1, <b>passed</b>', '<br>';
} else {
    echo 'test 4: -333 / 333 = -1, <b>failed</b>', '<br>';
}
if (division('', "") === 'Wrong argumetns!') {
    echo 'test 5: \'\' / "" = Wrong argumetns!, <b>passed</b>', '<br>';
} else {
    echo 'test 5: \'\' / "" = Wrong argumetns!, <b>failed</b>', '<br>';
}
if (division(1, 0) === 1) {
    echo 'test 6: 1 / 0 = 1, <b>passed</b>', '<br>';
} else {
    echo 'test 6: 1 / 0 = 1, <b>failed</b>', '<br>';
}
if (division(1, 0) === 'Error, division by zero') {
    echo 'test 7: 1 / 0 = Error, division by zero, <b>passed</b>', '<br>';
} else {
    echo 'test 7: 1 / 0 = Error, division by zero, <b>failed</b>', '<br>';
}

//try-catch error
echo 'test8 :try-catch, function with wrong argument count test: ';
try {
    5 / 0;
} catch (ErrorException $e) {
    echo $e;
}

//division() test
echo '<h3>square($n1) function tests: </h3>' . '<br>';

if (square(333) === 110889) {
    echo 'test 1: 333^2 = 110889, <b>passed</b>', '<br>';
} else {
    echo 'test 1: 333^2 = 110889, <b>failed</b>', '<br>';
}
if (square(null) === 'Wrong argumetns!') {
    echo 'test 2: null^2 = Wrong argumetns!, <b>passed</b>', '<br>';
} else {
    echo 'test 2: null^2 = Wrong argumetns!, <b>failed</b>', '<br>';
}
if (number_format(square(-0.1), 2) === '0.01') {
    echo 'test 3: number_format(-0.1^2) === 0.01, <b>passed</b>', '<br>';
} else {
    echo 'test 3: number_format(-0.1^2) === 0.01, <b>failed</b>', '<br>';
}

if (square(0.012) === 0.000144) {
    echo 'test 4: 0.012^2 = 0.00144, <b>passed</b>', '<br>';
} else {
    echo 'test 4: 0.012^2 = 0.00144, <b>failed</b>', '<br>';
}
if (square('') === 'Wrong argumetns!') {
    echo 'test 5: \'\'^2 = Wrong argumetns!, <b>passed</b>', '<br>';
} else {
    echo 'test 5: \'\'^2 "" = Wrong argumetns!, <b>failed</b>', '<br>';
}
if (square(1) === 1) {
    echo 'test 6: 1^2 = 1, <b>passed</b>', '<br>';
} else {
    echo 'test 6: 1^2 = 1, <b>failed</b>', '<br>';
}
if (square(0) === 0) {
    echo 'test 7: 0^2 = 0, <b>passed</b>', '<br>';
} else {
    echo 'test 7: 0^2 = 0, <b>failed</b>', '<br>';
}
