<?php

session_start();

$_SESSION['date'] = '20.07.2018';

echo $_SESSION['nickname'], '<br>';

print_r($_SESSION);

