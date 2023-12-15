<?php
/*
 * Template Name: Booking
 */
?>
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
        <title>
            <?php
            wp_title('|', true, 'left');
            ?>
        </title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="author" content="Milos Andan">
        <meta name="description" content="Terra Mons apartments Zlatibor">
        <meta name="keywords" content="Zlatibor, zlatibor, apartmani, apartmani zlatibor, nocenje sa doruckom, nocenje, ">

        <!--ios compatibility-->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-title" content="TERRA MONS APARTMENTS">
        <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/frontend/iosLogo.png">

        <!--Android compatibility-->
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="application-name" content="TERRA MONS APARTMENTS">
        <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/frontend/androidLogo.png">

        <!--CSS FILES-->
        <link href="<?php echo get_template_directory_uri(); ?>/frontend/css/owl.carousel.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo get_template_directory_uri(); ?>/frontend/css/owl.theme.default.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>
        <link href="<?php echo get_template_directory_uri(); ?>/frontend/css/theme.css" rel="stylesheet" type="text/css"/>
        <?php wp_head(); ?>
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
                    <a class="navbar-brand first-logo" style="height: 80px; width: 150px;"  href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/frontend/logo.png"  alt="Slika nije ucitana"/></a>

                    <div class="collapse navbar-collapse text-center" id="main-nav">

                        <?php
// wp_nav_menu(array(
//   'menu_location'=>'main-menu',
//   'menu_class'=>'navbar-nav ml-auto mr-auto mt-2 mt-lg-0',
//  'container'=>'',
//  ));
                        ?>

                        <?php
                        $menuLocation = get_nav_menu_locations();
                        $mainMenuID = $menuLocation['main-menu'];
                        $topMenuItems = wp_get_nav_menu_items($mainMenuID);

                        if ($topMenuItems) {
                            ?>
                            <ul class="navbar-nav ml-auto mt-2 mt-lg-0">   
                                <?php
                                foreach ($topMenuItems as $topMenuItem) {

                                    $activeClass = '';
                                    if ($topMenuItem->url == get_permalink()) {
                                        $activeClass = 'active';
                                    }


                                    if ($topMenuItem->menu_item_parent == 0) {
                                        ?>
                                        <li class="nav-item mr-lg-5  <?php echo $activeClass; ?>">
                                            <a class="nav-link" href="<?php echo $topMenuItem->url ?>"><?php echo $topMenuItem->title ?></a>
                                        </li>
                                        <?php
                                    }
                                }
                                ?>
                            </ul>
                            <?php
                        }
                        ?>

                        <a class="navbar-brand second-logo" style="height: 80px; width: 150px;"  href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/frontend/logo.png"  alt="Slika nije ucitana"/></a>

                        <?php
                        $menuLocation2 = get_nav_menu_locations();
                        $mainMenuID2 = $menuLocation2['main-men'];
                        $topMenuItems2 = wp_get_nav_menu_items($mainMenuID2);

                        if ($topMenuItems2) {
                            ?>
                            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">   
                                <?php
                                foreach ($topMenuItems2 as $topMenuItem2) {

                                    $activeClass = '';
                                    if ($topMenuItem2->url == get_permalink()) {
                                        $activeClass = 'active';
                                    }


                                    if ($topMenuItem2->menu_item_parent == 0) {
                                        ?>
                                        <li class="nav-item mr-lg-5 <?php echo $activeClass; ?>">
                                            <a class="nav-link " href="<?php echo $topMenuItem2->url ?>"><?php echo $topMenuItem2->title ?></a>
                                        </li>
                                        <?php
                                    }
                                }
                                ?>
                            </ul>
                            <?php
                        }
                        ?>
                        <!--
                        <ul class="navbar-nav ml-auto mr-auto mt-2 mt-lg-0">
                            <li class="nav-item">
                                <a class="nav-link" href="">POČETNA<span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item ml-lg-5">
                                <a class="nav-link" href="terra-mons-zlatibor.php">SMEŠTAJ</a>
                            </li>
                            
                            
                            <a class="navbar-brand second-logo" style="height: 80px; width: 150px;"  href=""><img src="<?php echo get_template_directory_uri(); ?>/frontend/logo.png"  alt="Slika nije ucitana"/></a>
                            
                            <li class="nav-item ml-lg-5 ">
                                <a class="nav-link" href="kontakt.php">KONTAKT</a>
                            </li>
                            <li class="nav-item ml-lg-5 ">
                                <a class="nav-link" href="galerija.php">GALERIJA</a>
                            </li>
                        </ul>
                        -->
                    </div>
                </nav>
            </div>
            
        </header>

        <main class="vh-100">
            <h1 class="text-center mt-5">Rezervišite Vaš smeštaj</h1>
            <div class="text-center form1">
                <?php get_sidebar(); ?>
            </div>
        </main>


        <footer>
            <div class="container d-flex justify-content-between align-items-center">
                <a href="<?php echo home_url(); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/frontend/logo.png" style="height: 80px; width: 150px;"  alt="Slika nije ucitana"/>  
                </a>
                <div>
                    <p>Copyright © TERRA MONS  – <?php echo date('Y') ?></p>
                </div>
            </div>
        </footer>

        <script src="<?php echo get_template_directory_uri(); ?>/frontend/js/bootstrap.bundle.min.js" type="text/javascript"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/frontend/js/owl.carousel.js" type="text/javascript"></script>
        <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
        <script src="<?php echo get_template_directory_uri(); ?>/frontend/js/main.js" type="text/javascript"></script>

        <!--font awesome icons-->
        <script src="https://kit.fontawesome.com/af4151337a.js" crossorigin="anonymous"></script>

        <?php wp_footer(); ?>
    </body>
</html>
