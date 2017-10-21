<?php

require('config.php');

$title = $_GET['title'];
$text = $_GET['text'];
$id = $_GET['id'];

strip_tags($title);
trim($title);

echo "id = $id <br> title = $title <br> $text";

$update_title = mysqli_query($db, "UPDATE `articles` SET `title`='$title', `text`='$text' WHERE `id` = '$id'");
