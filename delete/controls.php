<?php require('php/config.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="styles/controls.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <title> SPE Admin panel</title>
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
    <div class="articles-block float">
        <div class="articles-table">
            <div class="first-row">
                <div class="td article-no float"> ID</div>
                <div class="td article-date float"> Date</div>
                <div class="td article-title float"> Title</div>
            </div>
            <?php
            $find_articles = mysqli_query($db, 'SELECT * FROM `articles`');
            while ($articles = mysqli_fetch_assoc($find_articles)) { ?>
                <div class="articles-row">
                    <a class="link-to-article-edit" href="article_edit.php?id= <?php echo $articles['id'] ?>">
                        <div class="td article-no float"> <?php echo $articles['id'] ?> </div>
                        <div class="td article-date float"> <?php echo date("d.m.Y", strtotime($articles['date'])); ?> </div>
                        <div class="td article-title float"> <?php echo mb_substr($articles['title'], 0, 50, 'UTF-8') .'...' ?> </div>
                    </a>
                    <div class="td article-delete float"><p><i class="fa fa-times" aria-hidden="true"></i></p>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </div>
</main>
<script src="script/delete_article.js"></script>
</body>
</html>
