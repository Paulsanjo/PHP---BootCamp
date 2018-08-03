<?php

require_once 'Database.php';

$db = Database::getInstance();
$mysqli = $db->getConnection();

$subject = $_POST['subject'];
$content = $_POST['content'];

$sql = "INSERT INTO news (`subject`,`content`, `category_id`, `user_id`) "
        . "VALUES ('{$subject}', '{$content}', 1, 1)";

$db->query($sql);


