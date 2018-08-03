<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});




Router::get(new Route('/', 'News@index'));
Router::get(new Route('/addnews', 'News@addNews'));
Router::run();


$db = Database::getInstance();
$mysqli = $db->getConnection();

