<?php

if (!isset($_SESSION)) session_start();

if (isset($_SESSION['authorized']) && $_SESSION['authorized'] === 1){
    unset($_SESSION['authorized']);
}

