<?php
require ('config.php');

session_start();
$_SESSION['name'] = 'start';

$login = $_POST['admin_login'];
$password = $_POST['admin_password'];

if ($login == $sql_login_result['login'] AND $password == $sql_login_result['password']) {
    header('Location: ../controls.php');
} else {
    echo 'Login or password is incorrect!';
}
