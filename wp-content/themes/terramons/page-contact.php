<?php
/*
 * Template Name: Contact
 */

@include 'frontend/partials/header2.php';
?>
<main>
    <section id="lead-section" class="vh-100" style="background-image: linear-gradient(to bottom, rgba(200,178,115,0.5),rgba(0,0,0,0.5)), url(<?php echo get_template_directory_uri(); ?>/frontend/images/lead5.jpg)">
        <div>
            <h1 class="animation" data-animation="slideDown">
                CONTACT
            </h1>
        </div>
    </section>


    <section id="map-section">
        <div class="jumbotron text-center mt-5">
            <a style="padding: 40px;" class="btn-danger" href="<?php  the_field('booking_links');?>">ONLINE BOOKING</a>
        </div>
        
        <div class="text-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m13!1m8!1m3!1d1441.6892594514263!2d19.699717!3d43.723463!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNDPCsDQzJzI0LjUiTiAxOcKwNDEnNTkuMCJF!5e0!3m2!1ssr!2srs!4v1682765716404!5m2!1ssr!2srs" width="50%"   allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    
    <?php
    @include 'frontend/partials/contact-section2.php';
    ?>
</main>
<?php
@include 'frontend/partials/footer.php';
?>

