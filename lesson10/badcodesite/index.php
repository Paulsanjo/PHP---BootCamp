<?php

if (isset($_GET['logout']) && $_GET['logout'] == 1){
    include 'logout.php';
}

include 'login.php';

if (isset($_SESSION['authorized']) && $_SESSION['authorized'] === 1) {
    include 'menu.php';
}
