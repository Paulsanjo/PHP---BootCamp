<?php

if (isset($_GET["text"]) && isset($_GET["value"])) {
    $text = $_GET['text'];
    $value = $_GET['value'];
    $count = 0;

    if (empty($text) || empty($value)) {
        exit('Text or value is empty');
    }

    for ($i = 0; $i < strlen($text); $i++) {
        if ($value == $text[$i]) {
            $count++;
        }
    }

    echo 'text = ', $text, '<br>', 'value = ', $value, '<br>', 'count = ', $count;
} else {
    echo "Wrong parameters";
}
?>


