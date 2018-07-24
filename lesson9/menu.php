<?php

$menuArray = [
    'en' => [
        '<a href="#">Main</a>',
        '<a href="#">Fruit maffins</a>',
        '<a href="#">Choko maffins</a>',
        '<a href="#">Easy mafins</a>',
        '<a href="#">Contacts</a>',
    ],
    'ru' => [
        '<a href="#">Главная</a>',
        '<a href="#">Фруктовые мафины</a>',
        '<a href="#">Шоколадные мафины</a>',
        '<a href="#">Простые мафины</a>',
        '<a href="#">Контакты</a>',
    ],
    'lv' => [
        '<a href="#">Sakums</a>',
        '<a href="#">Auglu mafini</a>',
        '<a href="#">Sokolades mafini</a>',
        '<a href="#">Parastie mafini</a>',
        '<a href="#">Kontakti</a>',
    ],
];

if (isset($_GET['lang']) && array_key_exists($_GET['lang'], $menuArray)) {
    $lang = $_GET['lang'];
} else {
    $lang = 'lv';
}

foreach ($menuArray as $key => $value){
    echo '<a href="?lang='.$key.'">'.$key.'</a> ';
}

echo '<br>';

echo implode(' | ', $menuArray[$lang]);




