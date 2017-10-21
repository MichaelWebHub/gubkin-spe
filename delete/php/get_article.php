<?php
require('config.php');

$id = $_GET['id'];
$text_request = mysqli_query($db, "SELECT `text` FROM `articles` WHERE `id` = '$id' ");
$text = mysqli_fetch_assoc($text_request);
echo $text['text'];