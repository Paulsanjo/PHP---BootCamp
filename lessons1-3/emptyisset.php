<?php

$var = "";

if(empty($var)){
    echo '$var is empty, or 0, or not initiated';
}

echo '<br>';

if(isset($var)){
    echo '$var initiated, but empty';
}

?>

