<?php

$text = $_GET['text'];
$value = $_GET['value'];
$count = 0;

for ($i = 0; $i < strlen($text); $i++){
    if ($value == $text[$i]){
        $count++;
    }
}

echo 'text = ', $text, '<br>','value = ', $value, '<br>', 'count = ', $count;

?>


