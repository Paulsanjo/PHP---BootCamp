<?php

//using for
//for ($i = 1; $i < 10; $i++) {
//    for ($j = 0; $j < 10; $j++) {
//        echo $i, ' * ', $j, ' = ', $i * $j, '<br>';
//    }
//    echo '<br>';
//}
//
//echo '<br>';
//
////using while
//$a = 1;
//while ($a < 10) {
//    echo '5 * ', $a, ' = ', 5 * $a, '<br>';
//    $a++;
//}
//
//echo '<br>';
//
////usin do while
//$a = 1;
//do {
//    echo '5 * ', $a, ' = ', 5 * $a, '<br>';
//    $a++;
//} while ($a < 10);
//
//for example
$count = 0;
for ($i = 10000; $i >= 50; $i /= 2) {
    $count++;
}
echo $count;

echo '<br>';

//while example
$count2 = 0;
$j = 10000;
while ($j >= 50) {
    $j /= 2;
    $count2++;
}
echo $count2;

echo '<br>';

//do-while example
$count3 = 0;
$k = 10000;
do {
    $k /= 2;
    $count3++;
} while ($k >= 50);
echo $count3;
?>

