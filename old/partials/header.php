<!DOCTYPE html>
<?php
$curent = $_SERVER['REQUEST_URI'];
?>
<html>
    <head>
        <!-- Google Tag Manager -->
        <script>(function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({'gtm.start':
                            new Date().getTime(), event: 'gtm.js'});
                var f = d.getElementsByTagName(s)[0],
                        j = d.createElement(s), dl = l !== 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-WTW9CV2');</script>
        <!-- End Google Tag Manager -->
        <title>TERRA MONS APARTMENTS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Milos Andan">
        <meta name="description" content="Terra Mons apartments Zlatibor">
        <meta name="keywords" content="Zlatibor, zlatibor, apartmani, apartmani zlatibor, nocenje sa doruckom, nocenje, ">

        <!--ios compatibility-->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="TERRA MONS APARTMENTS">
        <link rel="apple-touch-icon" href="iosLogo.png">

        <!--Android compatibility-->
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="application-name" content="TERRA MONS APARTMENTS">
        <link rel="icon" href="androidLogo.png">

        <!--CSS FILES-->
        <link href="css/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="css/owl.theme.default.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
        <link href="css/theme.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WTW9CV2"
                          height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <!--HEADER START-->

        <header>
            <div id="top" class="container">
                <nav class="navbar navbar-expand-md navbar-light pb-3 pt-3">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#main-nav" aria-controls="main-nav" 
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand first-logo" style="height: 80px; width: 150px;"  href="index.php"><img src="logo.png"  alt="Slika nije ucitana"/></a>

                    <div class="collapse navbar-collapse text-center" id="main-nav">
                        <ul class="navbar-nav ml-auto mr-auto mt-2 mt-lg-0">
                            <li class="nav-item <?php
                            if ($curent == '/index.php' || $curent == '/') {
                                echo 'active';
                            }
                            ?>">
                                <a class="nav-link" href="index.php">POČETNA<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ml-lg-5 <?php
                            if ($curent == '/terra-mons-zlatibor.php') {
                                echo 'active';
                            }
                            ?>">
                                <a class="nav-link" href="terra-mons-zlatibor.php">SMEŠTAJ</a>
                            </li>
                            <!--
                            <li class="nav-item ml-lg-5 <?php
                            if ($curent == '/services.php') {
                                echo 'active';
                            }
                            ?>">
                                <a class="nav-link" href="services.php">AKTIVNOSTI</a>
                            </li>
                            -->
                            <a class="navbar-brand second-logo" style="height: 80px; width: 150px;"  href="index.php"><img src="logo.png"  alt="Slika nije ucitana"/></a>
                            <!--
                            <li class="nav-item ml-lg-5 <?php
                            if ($curent == '/prices.php') {
                                echo 'active';
                            }
                            ?>">
                                <a class="nav-link" href="prices.php">CENOVNIK</a>
                            </li>
                            -->
                            <li class="nav-item ml-lg-5 <?php
                            if ($curent == '/kontakt.php') {
                                echo 'active';
                            }
                            ?>">
                                <a class="nav-link" href="kontakt.php">KONTAKT</a>
                            </li>
                            <li class="nav-item ml-lg-5 <?php
                            if ($curent == '/galerija.php') {
                                echo 'active';
                            }
                            ?>">
                                <a class="nav-link" href="galerija.php">GALERIJA</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="text-md-right text-center mr-md-5 mb-md-1 language">
                <a href="#">
                    <img src="images/srb.jpg" alt="Slika nije ucitana"/>
                </a>
                /<a href="<?php
                if ($curent == '/index.php' || $curent == '/') {
                    echo 'eng/index-eng.php';
                }else if($curent == '/terra-mons-zlatibor.php'){
                    echo 'eng/terra-mons-zlatibor-eng.php';
                }else if($curent == '/kontakt.php'){
                    echo 'eng/kontakt-eng.php';
                }else if($curent == '/galerija.php'){
                    echo 'eng/galerija-eng.php';
                }
                ?>">
                    <img src="images/eng.jpg" alt="Slika nije ucitana"/>
                </a>
            </div>
        </header>
