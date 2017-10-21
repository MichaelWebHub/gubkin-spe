<?php

require('config.php');

//$art_title = $_GET['title'];
//$art_text = $_GET['text'];

$art_content = $_GET['content'];
//$query = mysqli_query($db, "INSERT INTO `articles`(`date`, `title`, `text`) VALUES (NOW(),'$art_title','$art_text')");
$query = mysqli_query($db, "INSERT INTO `art`(`content`) VALUES ('$art_content')");
