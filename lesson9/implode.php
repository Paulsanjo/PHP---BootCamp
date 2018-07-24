<?php

$arr = [];
for ($i = 0; $i < 20; $i++) {
    $arr[] = rand(1, 10);
}

echo implode(', ', $arr);

$str = 'A, B, C, D, F, G';
$arr = explode(',', $str);

echo '<br>';

print_r($arr);


