<?php

//unset() delete element from array
//rand() random number generation, can be in range rand(10,20)

$arr = ['a', 'b', 'c'];

foreach ($arr as $value) {
    echo $value . ' ';
}

echo '<br>';

$arr[] = 'd';

foreach ($arr as $value) {
    echo $value . ' ';
}

echo '<br>';

echo $arr[0] . " + " . $arr[1] . ", " . $arr[2] . " + " . $arr[3];

echo '<br>';

$arr2 = [2, 5, 3, 9];

$result = $arr2[0] * $arr2[1] + $arr2[2] * $arr2[3];

echo $result;

echo '<br>';

$arr3 = [
    'a' => 1,
    'b' => 2,
    'c' => 3,
];

echo $arr3['c'];

echo '<br>';

echo array_sum($arr3);

echo '<br>';

$arr4 = [];
for ($i = 0; $i < 20; $i++){
    $arr4[] = rand(0,1);
}

foreach ($arr4 as $value){
    echo $value;
}

echo '<br>';

$arr5 = [];
for ($i = 0; $i < 20; $i++){
    $arr5[] = rand(1,10);
}

foreach ($arr5 as $value){
    echo $value. ' ';
}

echo '<br>';

$arr6 = [];
foreach ($arr5 as $value){
    if (array_key_exists($value, $arr6)){
        $arr6[$value] += 1;
    } else {
        $arr6[$value] = 1;
    }
}

foreach ($arr6 as $key => $value){
    echo $key. ' => '. $value. ',  ';
}



