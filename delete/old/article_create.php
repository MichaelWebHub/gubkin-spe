<?php

require('php/config.php');

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

<body class="overflow">
<main>
    <aside class="controls-menu float">
        <img class="controls-menu-img" src="img/SPE_logo_trns.png" alt="SPE LOGO">
        <ul class="controls-ul-buttons">
            <li class="controls-buttons"><a href="controls.php"> Articles </a></li>
            <li class="controls-buttons"><a href="article_create.php"> Create </a></li>
            <li class="controls-buttons"><a href="index.php"> Back </a></li>
        </ul>
    </aside>
    <div class="create-article">
        <p> Create </p>
    </div>
    <div class="article-box">
        <div class="article-element">
            <div class="element-content">
                <h2 class="element-title create-title" role="textbox" aria-multiline="true" contenteditable="true"> Title </h2>
                <div class="element-img">
                    <img src="img/img.jpg" alt="Image">
                </div>
                <div class="element-text create-text" role="textbox" aria-multiline="true" contenteditable="true">
                    Text
                </div>
            </div>
        </div>
    </div>
</main>
<div class="empty-block"></div>
<script src="script/create_article.js"> </script>
</body>

</html>
