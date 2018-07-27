<?php

$conn = new mysqli('localhost', 'root', '', 'helloit');
if ($conn->connect_error){
    die("Connectio failed".$conn->connect_error);
}
echo 'Success';

//$conn->close();

$query = $conn->query('SELECT password FROM `users` WHERE login=\'Alex\'');
$res = $query->fetch_all();

print_r($res);


