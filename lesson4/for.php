<?php

//$sumEven = 0;
//$sumOdd = 0;
//
//for ($i = 1; $i < 101; $i++) {
//    if ($i % 2 == 0) {
//        $sumEven += $i;
//    }
//    if ($i % 2) {
//        $sumOdd += $i;
//    }
//}
//echo $sumEven - $sumOdd;
//echo '<br>';
//echo '<br>';
//for ($i = 100; $i >= 1; $i--) {
//    echo $i, '<br>';
//}
//
//echo '<br>';
//for ($i = 0, $sum = 0; $i <= 100; $sum += $i, $i++);
//echo $sum;
//for ($i = 1; $i < 101; $i++) {
//    if ($i % 5 == 0){
//        echo $i, '<br>';
//    }
//}

for ($i = 1; $i < 10; $i++) {

    echo '5 * ', $i, ' = ', 5 * $i, '<br>';
}

echo '<br>';

$a = 1;
while ($a < 10){
    echo '5 * ', $a, ' = ', 5 * $a, '<br>';
    $a++;
}

echo '<br>';

$a = 1;
do {
    echo '5 * ', $a, ' = ', 5 * $a, '<br>';
    $a++;
} while ($a < 10);

?>