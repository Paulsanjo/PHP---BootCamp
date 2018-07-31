<?php

if(isset($_POST['name']) && isset($_POST['email']) && !empty($_POST['name']) && !empty($_POST['email'])) {
    echo 'success';
} else {
    echo 'fail';
}
