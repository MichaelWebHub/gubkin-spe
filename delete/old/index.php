<?php
require('php/config.php');
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta http-equiv="Cache-Control" content="no-cache" />
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <title> SPE Gubkin chapter </title>
</head>

<body class="overflow">
    <div class="preloader" id="preloader">
        <div class="loading">
            <div class="loading-inside">
                <div class="loading-inside-more"></div>
            </div>
        </div>
    </div>
    <header class="main-header">
        <div class="spe-logo">
            <img class="spe-logo-image" src="img/SPE_logo_trns.png" alt="SPE logo">
        </div>
    </header>

    <nav class="main-menu">
        <ul class="main-menu-ul">
            <li class="main-menu-li">
                <a class="main-menu-link" href="index.php"> News </a>
                <div class="link-hover"></div>
            </li>
            <li class="main-menu-li dropdown">
                <a class="main-menu-link" href="#"> Committees </a>
                <div class="link-hover"></div>
                <ul class="dropdown-ul">
                    <li class="dropdown-li"><span class="vertical-line-hover"></span><a class="dropdown-link" href="#">HR Committee</a></li>
                    <li class="dropdown-li"><span class="vertical-line-hover"></span><a class="dropdown-link" href="#">IR Committee</a></li>
                    <li class="dropdown-li"><span class="vertical-line-hover"></span><a class="dropdown-link" href="#">IT Committee</a></li>
                    <li class="dropdown-li"><span class="vertical-line-hover"></span><a class="dropdown-link" href="#">KD Committee</a></li>
                    <li class="dropdown-li"><span class="vertical-line-hover"></span><a class="dropdown-link" href="#">PR Committee</a></li>
                    <li class="dropdown-li"><span class="vertical-line-hover"></span><a class="dropdown-link" href="#">Secretariat</a></li>
                </ul>
            </li>
            <li class="main-menu-li">
                <a class="main-menu-link" href="#"> Sponsors &amp; Partners </a>
                <div class="link-hover"></div>
            </li>
            <li class="main-menu-li">
                <a class="main-menu-link" href="#"> FAQ </a>
                <div class="link-hover"></div>
            </li>
            <li class="main-menu-li">
                <a class="main-menu-link" href="#"> Calendar </a>
                <div class="link-hover"></div>
            </li>
            <li class="main-menu-li">
                <a class="main-menu-link" href="http://www.oilandgashorizons.ru/" target="_blank"> Oil &amp; Gas Horizons IX </a>
                <div class="link-hover"></div>
            </li>
        </ul>
    </nav>
    <div class="search-box">
        <form action="#" class="search-bar-form">
            <input class="search-input" type="text" placeholder="Search">
            <label for="search" class="search-submit">
                <i class="fa fa-search " aria-hidden="true"></i>
                <input type="submit" name="search" id="search">
            </label>
        </form>
    </div>
    <main>
        <div class="articles-wrapper clearfix">
            <?php
            $find_articles = mysqli_query($db, 'SELECT * FROM `articles`');

            while( $articles = mysqli_fetch_assoc($find_articles) ) { ?>
                <div class="article">
                    <div class="article-image-box">
                        <div class="article-image-box-overflow">
                            <img src="img/img.jpg" alt="ARTICLE IMAGE" class="article-image">
                        </div>
                    </div>
                    <div class="article-content">
                        <h2 class="article-title">
                            <a class="article-title-link" href="article.php?id=<?php echo $articles['id'] ?>"> <?php echo $articles['title'] ?> </a>
                        </h2>
                        <p class="article-date">
                            <date> <?php echo date("d.m.Y", strtotime($articles['date'])); ?> </date>
                        </p>
                    </div>
                </div>
                <?php
            }
            ?>
        </div>
    </main>
    <footer class="clearfix">
        <div class="footer-content clearfix">
            <div class="menu-elements">
                <ul class="footer-ul">
                    <li class="footer-li"><a href="index.php" class="footer-link"> News </a></li>
                    <li class="footer-li"><a href="#" class="footer-link"> Committees </a></li>
                    <li class="footer-li"><a href="#" class="footer-link"> Sponsors &amp; Partners</a></li>
                    <li class="footer-li"><a href="#" class="footer-link"> FAQ </a></li>
                    <li class="footer-li"><a href="#" class="footer-link"> Calendar </a></li>
                    <li class="footer-li"><a href="http://www.oilandgashorizons.ru/" target="_blank" class="footer-link"> Oil &amp; Gas Horizons IX </a></li>
                </ul>
            </div>
            <div class="location">
                <p class="university-name">
                    Gubkin Russian State University of Oil and Gas <br> (National Research University)
                </p>
                <p class="university-address">
                    65 Leninsky Prospekt, Moscow, 119991, Russia
                </p>
                <p class="social">
                    <a href="#"> <i class="fa fa-vk" aria-hidden="true"></i></a>
                    <a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                    <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                </p>
            </div>
            <div class="about-me">
                <p class="author"> Designed and assembled by <br><a href="#"> Michael Kutateladze</a> </p>
                <p class="about-me-email"> <i class="fa fa-envelope-o" aria-hidden="true"></i> michael.kutateladze@yandex.ru</p>
            </div>
        </div>
        <p class="copyright"> 2017 &copy; SPE Gubkin Chapter</p>
    </footer>
    <div class="panel hide">
        <form class="panel-form" action="php/login.php" method="post">
            <p class="panel-close"> <i class="fa fa-times" aria-hidden="true"></i> </p>
            <input id="login" type="text" placeholder="Login" name="admin_login" autocomplete="off" value="" autofocus>
            <input id="password" type="password" placeholder="Password" name="admin_password" autocomplete="off" value="">
            <input type="submit" id="panel_submit">
        </form>
    </div>
    <script async src="script/preload.js"></script>
    <script src="script/panel.js"></script>
</body>

</html>
