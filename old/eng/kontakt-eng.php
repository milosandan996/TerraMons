<!DOCTYPE html>
<?php
$curent = $_SERVER['REQUEST_URI'];
?>
<html>
    <head>
        <title>TERRA MONS APARTMENTS</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Milos Andan">
        <meta name="description" content="Terra Mons apartments Zlatibor">
        <meta name="keywords" content="Zlatibor, zlatibor, apartmani, apartmani zlatibor, nocenje sa doruckom, nocenje, ">

        <!--ios compatibility-->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="TERRA MONS APARTMENTS">
        <link rel="apple-touch-icon" href="../iosLogo.png">

        <!--Android compatibility-->
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="application-name" content="TERRA MONS APARTMENTS">
        <link rel="icon" href="../androidLogo.png">

        <!--CSS FILES-->
        <link href="../css/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="../css/owl.theme.default.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
        <link href="../css/theme.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>

        <!--HEADER START-->

        <header>
            <div id="top" class="container">
                <nav class="navbar navbar-expand-md navbar-light pb-3 pt-3">
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#main-nav" aria-controls="main-nav" 
                            aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <a class="navbar-brand first-logo" style="height: 80px; width: 150px;"  href="index.php"><img src="../logo.png"  alt="Slika nije ucitana"/></a>

                    <div class="collapse navbar-collapse text-center" id="main-nav">
                        <ul class="navbar-nav ml-auto mr-auto mt-2 mt-lg-0">
                            <li class="nav-item <?php
                            if ($curent == '/eng/index-eng.php') {
                                echo 'active';
                            }
                            ?>">
                                <a class="nav-link" href="index-eng.php">HOME<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ml-lg-5 <?php
                            if ($curent == '/eng/terra-mons-zlatibor-eng.php') {
                                echo 'active';
                            }
                            ?>">
                                <a class="nav-link" href="terra-mons-zlatibor-eng.php">APARTMENT</a>
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
                            <a class="navbar-brand second-logo" style="height: 80px; width: 150px;"  href="index.php"><img src="../logo.png"  alt="Slika nije ucitana"/></a>
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
                            if ($curent == '/eng/kontakt-eng.php') {
                                echo 'active';
                            }
                            ?>">
                                <a class="nav-link" href="kontakt-eng.php">CONTACT</a>
                            </li>
                            <li class="nav-item ml-lg-5 <?php
                            if ($curent == '/eng/galerija-eng.php') {
                                echo 'active';
                            }
                            ?>">
                                <a class="nav-link" href="galerija-eng.php">GALLERY</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>

            <div class="text-md-right text-center mr-md-5 mb-md-1 language">
                <a href="../kontakt.php">
                    <img src="../images/srb.jpg" alt="Slika nije ucitana"/>
                </a>
                /<a href="#">
                    <img src="../images/eng.jpg" alt="Slika nije ucitana"/>
                </a>
            </div>
        </header>

        <main>





            <section id="lead-section" class="vh-100" 
                     style="background-image: linear-gradient(to bottom, rgba(200,178,115,0.5),rgba(0,0,0,0.5)),
                     url(../images/<?php
                     if ($curent == '/eng/terra-mons-zlatibor-eng.php') {
                         echo 'lead2.jpg';
                     } else if ($curent == '/services.php') {
                         echo 'lead3.jpg';
                     } else if ($curent == '/prices.php') {
                         echo 'lead4.jpg';
                     } else if ($curent == '/eng/kontakt-eng.php') {
                         echo 'lead5.jpg';
                     } else if ($curent == '/eng/galerija-eng.php') {
                         echo 'lead6.jpg';
                     }
                     ?>);">
                <div>
                    <h1 class="animation" data-animation="slideDown">
                        CONTACT
                    </h1>
                </div>
            </section>

            <section id="map-section">
                <div class="jumbotron text-center mt-5">
                    <a style="padding: 40px;" class="btn-danger" href="https://www.booking.com/hotel/rs/terra-mons-apartments.en-gb.html">ONLINE BOOKING</a>

                </div>
                <div class="text-center">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d1441.6892594514263!2d19.699717!3d43.723463!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDPCsDQzJzI0LjUiTiAxOcKwNDEnNTkuMCJF!5e0!3m2!1ssr!2srs!4v1682765716404!5m2!1ssr!2srs" width="50%"   allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </section>

            <section id="contact-section">
                <div class="container text-center">
                    <div class="row justify-content-end animation" data-animation="zoom">

                        <div class="col-12 col-md-4  mb-5 mb-md-0">
                            <h3 class="mb-3"><b>Address</b></h3>
                            <a href="https://www.google.com/maps/place/43%C2%B043'24.5%22N+19%C2%B041'59.0%22E/@43.723463,19.699717,18z/data=!4m4!3m3!8m2!3d43.723463!4d19.699717?hl=sr">Dr Dragoslava Zeke Smiljanića 15,</a>
                            <br>
                            <a>31315 Zlatibor, Srbija</a>
                            <hr>
                            <h3 class="mb-3"><b>Email</b></h3>
                            <a href="mailto:terramons.apartments@gmail.com">terramons.apartments@gmail.com</a>
                        </div>

                        <div class="col-12 col-md-4 mb-5 mb-md-0" >
                            <img src="../logo.png" alt="Slika nije ucitana"/>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class=" mb-5 ">
                                <h3 class="mb-3"><b>Phone</b></h3>
                                <a href="tel:00381637010231">+381 63/70 10 231 </a>
                                <br>
                                <a href="tel:00381638053006">+381 63/80 53 006 </a>
                            </div>

                            <h3 class="mb-3"><b>Contact</b></h3>
                            <div class="social">
                                <a data-animation="buzz" href="https://www.instagram.com/terramons_apartments/"><i class="buzz fa-brands fa-instagram fa-beat-fade" style="color: #ffffff;"></i></a>
                                <a data-animation="buzz" href="https://www.facebook.com/profile.php?id=100091592290444"><i class="buzz fa-brands fa-facebook fa-beat-fade" style="color: #ffffff;"></i></a>
                                <a data-animation="buzz" href="tel:00381637010231"><i class="buzz fa-solid fa-phone fa-beat-fade" style="color: #ffffff;"></i></a>
                                <a data-animation="buzz" href="https://www.google.com/maps/place/43%C2%B043'24.5%22N+19%C2%B041'59.0%22E/@43.723463,19.699717,18z/data=!4m4!3m3!8m2!3d43.723463!4d19.699717?hl=sr"> <i class="buzz fa-solid fa-map-location-dot fa-beat-fade" style="color: #ffffff;"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main

        <footer>
            <div class="container d-flex justify-content-between align-items-center">
                <a href="index.php">
                    <img src="../logo.png" style="height: 80px; width: 150px;"  alt="Slika nije ucitana"/>  
                </a>
                <div>
                    <p>Copyright © TERRA MONS  – <?php echo date('Y') ?></p>
                </div>
            </div>
        </footer>


        <script src="../js/jquery.min.js" type="text/javascript"></script>
        <script src="../js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="../js/owl.carousel.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
        <script src="../js/main.js" type="text/javascript"></script>



        <!--font awesome icons-->
        <script src="https://kit.fontawesome.com/af4151337a.js" crossorigin="anonymous"></script>
    </body>
</html>