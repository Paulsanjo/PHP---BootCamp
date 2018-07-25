<?php

if (!isset($_SESSION)) session_start();


$menuArray = [
    'en' => [
        '<a href="index.php">Home</a>',
        '<a href="#">Fruit maffins</a>',
        '<a href="#">Choko maffins</a>',
        '<a href="#">Easy mafins</a>',
        '<a href="contacts.php">Contacts</a>',
        '<a href="index.php?logout=1">Logout</a>',
    ],
    'ru' => [
        '<a href="index.php">Главная</a>',
        '<a href="#">Фруктовые мафины</a>',
        '<a href="#">Шоколадные мафины</a>',
        '<a href="#">Простые мафины</a>',
        '<a href="contacts.php">Контакты</a>',
        '<a href="index.php?logout=1">Выход</a>',
    ],
    'lv' => [
        '<a href="index.php">Sakums</a>',
        '<a href="#">Auglu mafini</a>',
        '<a href="#">Sokolades mafini</a>',
        '<a href="#">Parastie mafini</a>',
        '<a href="contacts.php">Kontakti</a>',
        '<a href="index.php?logout=1">Izeja</a>',
    ],
];

if (isset($_SESSION['lang'])) {
    $lang = $_SESSION['lang'];
} else {
    $lang = $_SESSION['lang'] = 'lv';
}
if (isset($_GET['lang']) && array_key_exists($_GET['lang'], $menuArray)) {
    $lang = $_SESSION['lang'] = $_GET['lang'];
}
foreach ($menuArray as $key => $value) {
    echo '<a href="?lang=' . $key . '">' . $key . '</a> ';
}

echo '<br>';

echo implode(' | ', $menuArray[$lang]);



