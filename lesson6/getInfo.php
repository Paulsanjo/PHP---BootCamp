<?php

include 'functions.php';

echo '<b>Use this parameters: ', '<br></b>';
echo 'name=1', '<br>';
echo 'date=1', '<br>';
echo 'age=1', '<br>';
echo 'place=1', '<br>';
echo 'info=1', '<br>';
echo 'number=?', '<br>';

echo '<br>';

if (isset($_GET['name']) && $_GET['name'] == 1) {
    echo getName(), '<br>';
}
if (isset($_GET['date']) && $_GET['date'] == 1) {
    echo getCurrentDate(), '<br>';
}
if (isset($_GET['age']) && $_GET['age'] == 1) {
    echo getAge(), '<br>';
}
if (isset($_GET['place']) && $_GET['place'] == 1) {
    echo getPlace(), '<br>';
}
if (isset($_GET['info']) && $_GET['info'] == 1) {
    echo getInfo(), '<br>';
}
if (isset($_GET['number'])) {
    $number = $_GET['number'];
    $position = getPlace();
    $age = getAge();

//    if ($number > $age) {
//        for ($number; $number != $age; $number--, $position *= 2);
//    }
//    if ($number < $age) {
//        for ($number; $number < $age; $number++, $position *= 2);
//
//    }
//    
//    echo 'position  ', $position, '<br>';

    for ($number; $number != $age; $position *= 2) {
        if ($number < $age) {
            $number++;
        } elseif ($number > $age) {
            $number--;
        }
    }
    echo 'position  ', $position, '<br>';
}




