<?php
$curent = $_SERVER['REQUEST_URI'];
?>



<section id="lead-section" class="vh-100" 
         style="background-image: linear-gradient(to bottom, rgba(200,178,115,0.5),rgba(0,0,0,0.5)),
         url(/images/<?php
         if ($curent == '/index.php') {
             echo 'lead1.jpg';
         }else if ($curent == '/index.php') {
             echo 'lead1.2.jpg';
         }else if ($curent == '/') {
             echo 'lead1.jpg';
         } else if ($curent == '/') {
             echo 'lead1.2.jpg';
         } else if ($curent == '/terra-mons-zlatibor.php') {
             echo 'lead2.jpg';
         } else if ($curent == '/services.php') {
             echo 'lead3.jpg';
         } else if ($curent == '/prices.php') {
             echo 'lead4.jpg';
         } else if ($curent == '/kontakt.php') {
             echo 'lead5.jpg';
         } else if ($curent == '/galerija.php') {
             echo 'lead6.jpg';
         }
         ?>);">
    <div>
        <h1 class="animation" data-animation="slideDown">
            <?php
            if ($curent == '/index.php') {
                echo 'DOBRODOŠLI';
            } else if ($curent == '/') {
                echo 'DOBRODOŠLI';
            } else if ($curent == '/terra-mons-zlatibor.php') {
                echo 'SMEŠTAJ';
            } else if ($curent == '/services.php') {
                echo 'AKTIVNOSTI';
            } else if ($curent == '/prices.php') {
                echo 'CENOVNIK';
            } else if ($curent == '/kontakt.php') {
                echo 'KONTAKT';
            } else if ($curent == '/galerija.php') {
                echo 'GALERIJA';
            }
            ?>
        </h1>
    </div>
</section>