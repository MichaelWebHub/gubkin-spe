<?php

require('php/config.php');
$id = $_GET['id'];
?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/article.css">
    <link rel="stylesheet" href="styles/controls.css">
    <title> SPE Gubkin chapter </title>
</head>

<body>
<main>
    <aside class="controls-menu float">
        <img class="controls-menu-img" src="img/SPE_logo_trns.png" alt="SPE LOGO">
        <ul class="controls-ul-buttons">
            <li class="controls-buttons"><a href="controls.php"> Articles </a></li>
            <li class="controls-buttons"><a href="article_create.php"> Create </a></li>
            <li class="controls-buttons"><a href="index.php"> Back </a></li>
        </ul>
    </aside>
    <div class="edit-article">
        <p> Edit </p>
    </div>
    <div class="article-box">

        <?php
        $article = mysqli_query($db, "SELECT * FROM `articles` WHERE `id` = '$id'");
        $show_article = mysqli_fetch_assoc($article);

        ?>

        <div class="article-element">
            <div class="element-content">
                <span class="hide element-id"> <?php echo $show_article['id'] ?> </span>
                <h2 class="element-title input-title" role="textbox" aria-multiline="true" contenteditable="true"> <?php echo $show_article['title'] ?> </h2>
                <p class="element-date">
                    <date> <?php echo date("d.m.Y", strtotime($show_article['date'])); ?> </date>
                </p>
                <div class="element-img">
                    <img src="img/img.jpg" alt="Image">
                </div>
                <p class="element-text input" role="textbox" aria-multiline="true" contenteditable="true">
                    <?php echo $show_article['text'] ?>
                </p>
            </div>
        </div>
    </div>
</main>
<div class="empty-block"></div>
<script src="script/edit_article.js"> </script>
</body>

</html>
