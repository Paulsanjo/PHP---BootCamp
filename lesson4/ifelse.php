<?php

$a = $_GET['num'];

echo ($a == 1) ? 'true' : 'false';

echo '<br>';

echo ifOneOrTwo($a);



function ifOneOrTwo($a) {
    if ($a == 1) {
        echo 1;
    } else if ($a == 2) {
        $a = 2;
        echo $a;
    } else {
        echo 'error';
    }
}
    
?>
    