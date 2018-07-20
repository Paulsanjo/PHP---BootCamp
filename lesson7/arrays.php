<?php

include '../lesson6/functions.php';

$info = [
    'name' => getName(),
    'date' => getCurrentDate(),
    'age' => getAge(),
    'place' => getPlace(),
    'info' => getInfo(),
];

print_r($info);

echo '<br>';
echo $info['name'], '<br>';


$students = [
    'Alex' => [
        'age' => '27',
        'place' => '11',
    ],
    'Slava' => [
        'age' => '22',
        'place' => '12',
    ]
];

echo $students['Slava']['place'], '<br>';
echo $students['Alex']['place'], '<br>';

$students['Pjotr'] = ['age' => '30',
    'place' => '13',
];



print_r ($students['Pjotr']);

echo '<br>';

foreach ($students['Pjotr'] as $value){
    echo $value,'<br>';
}


