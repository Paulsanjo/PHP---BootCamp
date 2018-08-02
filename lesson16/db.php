<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$db = 'blog';

$connect = mysqli_connect($hostname, $username, $password, $db);

if(!$connect) {
    echo 'Connection failed<br>';
} else {
    echo 'Connected successfully<br>';
}

//$sql = "INSERT INTO categories (`name`) VALUES ('Politics');";

//$sql = "INSERT INTO news (`subject`, `content`, `category_id`, `user_id`)"
//        . "VALUES ('HelloIT naborajet ljudej', 'kjfhdsgkjsdhf', 3, 1);";

$sql = "UPDATE news SET `content` = 'privet eto kontent' WHERE `id` = 2";

$result = $connect->query($sql);

if ($result === true){
    echo 'Added';
} else {
    echo $connect->error;
}
