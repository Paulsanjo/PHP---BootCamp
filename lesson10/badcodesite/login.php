<?php
if (!isset($_SESSION))
    session_start();

$user = [
    'login' => 'Alex',
    'password' => '1234',
];

if (isset($_POST['login']) && isset($_POST['password'])) {
    if ($_POST['login'] == $user['login'] && $_POST['password'] == $user['password']){
        $_SESSION['authorized'] = 1;
    } else {
        echo 'Try again!';
    }
} 
if (!isset($_SESSION['authorized']) || $_SESSION['authorized'] !== 1) {
    ?>

    <h2>Login page</h2>

    <form method="POST" action="index.php">
        Login:<br>
        <input type="text" name="login">
        <br>
        Password:<br>
        <input type="password" name="password">
        <br><br>
        <input type="submit" value="Submit">
    </form> 

    <?php
}
?>




