<?php

//$db = mysqli_connect('127.0.0.1', 'u124641254_root', 'gubkinspe', 'u124641254_spe' );
$db = mysqli_connect('127.0.0.1', 'root', '', 'spe_admins' );

if (mysqli_connect_error()) {
    exit();
} else {
    $sql_login = mysqli_query($db, 'SELECT * FROM `users`');
    $sql_login_result = mysqli_fetch_assoc($sql_login);

    $sql = mysqli_query($db, 'SELECT * FROM `articles`');
    $sql_result = mysqli_fetch_assoc($sql);
}