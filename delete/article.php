<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/media.css">
    <script src="script/jquery-3.1.1.js"></script>
</head>

<body>
    <div class="aside-menu float">
        <div class="aside-menu-inside">
            <div class="aside-menu-logo">
                <img class="aside-menu-img" src="img/SPE_logo_trns.png" alt="Logo">
            </div>
            <nav class="aside-menu-nav">
                <ul class="aside-menu-ul">
                    <li class="aside-menu-li"><a href="index.php" class="aside-menu-link"> News </a>
                        <div class="underline-hover"></div>
                    </li>
                    <li class="aside-menu-li"><a href="#" class="aside-menu-link"> Committees </a></li>
                    <li class="aside-menu-li"><a href="partners.html" class="aside-menu-link"> Sponsors and Partners</a></li>
                    <li class="aside-menu-li"><a href="faq.html" class="aside-menu-link"> FAQ </a></li>
                    <li class="aside-menu-li"><a href="#" class="aside-menu-link"> Calendar</a></li>
                    <li class="aside-menu-li"><a href="http://www.oilandgashorizons.ru/" class="aside-menu-link" target="_blank"> Oil and Gas Horizons IX</a></li>
                </ul>
            </nav>
            <footer class="hfooter">
                <div class="information">
                    <p class="social-media clearfix">
                        <a href="#"> <i class="fa fa-vk" aria-hidden="true"></i></a>
                        <a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </p>
                </div>
                <div class="about-me">
                    <p class="author"> Designed and assembled by <br><a href="#"> Michael Kutateladze</a> </p>
                    <p class="about-me-email"> michael.kutateladze@yandex.ru</p>
                </div>
                <p class="copyright"> 2017 &copy; SPE Gubkin Chapter</p>
            </footer>
        </div>
    </div>
    <header class="mobile-menu clearfix">
        <div class="mobile-menu-logo float">
            <img class="mobile-menu-img" src="img/SPE_logo_trns.png" alt="Logo">
        </div>
        <nav class="mobile-menu-nav clearfix">
            <ul class="mobile-menu-ul">
                <li class="mobile-menu-li"><a href="index.php" class="mobile-menu-link"> News </a>
                </li>
                <li class="mobile-menu-li"><a href="#" class="mobile-menu-link"> Committees </a></li>
                <li class="mobile-menu-li"><a href="partners.html" class="mobile-menu-link"> Sponsors and Partners</a></li>
                <li class="mobile-menu-li"><a href="faq.html" class="mobile-menu-link"> FAQ </a></li>
                <li class="mobile-menu-li"><a href="#" class="mobile-menu-link"> Calendar</a></li>
                <li class="mobile-menu-li"><a href="http://www.oilandgashorizons.ru/" class="aside-menu-link" target="_blank"> Oil and Gas Horizons IX</a></li>
            </ul>
        </nav>
        <div class="small-mobile-menu">
            <div class="small-menu-button">
                <i class="fa fa-bars toggle-mobile-menu" aria-hidden="true"></i>
            </div>
        </div>
    </header>
    <div class="clearfix"></div>
    <ul class="small-mobile-nav hide">
        <li class="small-mobile-li"><a href="index.php" class="small-mobile-link"> News </a>
        </li>
        <li class="small-mobile-li"><a href="#" class="small-mobile-link"> Committees </a></li>
        <li class="small-mobile-li"><a href="partners.html" class="small-mobile-link"> Sponsors and Partners</a></li>
        <li class="small-mobile-li"><a href="faq.html" class="small-mobile-link"> FAQ </a></li>
        <li class="small-mobile-li"><a href="#" class="small-mobile-link"> Calendar</a></li>
        <li class="small-mobile-li"><a href="http://www.oilandgashorizons.ru/" class="small-mobile-link" target="_blank"> Oil and Gas Horizons IX</a></li>
    </ul>
    <div class="article-current float">
        <div class="prev-article">
            <a href="article.php?id= <?php $_GET['id'] - 1 ?>"></a>
        </div>
        <div class="article-current-inside">
            <div>
                <?php
                require('php/config.php');

                $text_request = mysqli_query($db, "SELECT `content` FROM `art` WHERE `id` = 1");
                $text = mysqli_fetch_assoc($text_request);
                echo json_decode(($text['content']));
                ?>
            </div>
        </div>
        <div class="next-article">
            <a href="article.php?id= <?php $_GET['id'] + 1 ?>"></a>
        </div>
    </div>
    <div class="clearfix"></div>
    <footer class="mobile-footer clearfix">
        <div class="footer-content clearfix">
            <p class="social">
                <a href="#"> <i class="fa fa-vk" aria-hidden="true"></i></a>
                <a href="#"> <i class="fa fa-facebook" aria-hidden="true"></i></a>
                <a href="#"> <i class="fa fa-instagram" aria-hidden="true"></i></a>
                <a href="#"> <i class="fa fa-twitter" aria-hidden="true"></i></a>
            </p>
            <div class="about-me">
                <p class="author"> Designed and assembled by <br><a href="#"> Michael Kutateladze</a> </p>
                <p class="about-me-email"> michael.kutateladze@yandex.ru</p>
            </div>
        </div>
        <p class="copyright"> 2017 &copy; SPE Gubkin Chapter</p>
    </footer>
    <script src="script/script.js"></script>
</body>

</html>
