
<?php
/*
 * Template Name: Gallery
 */



@include 'frontend/partials/header2.php';
?>
<main>
    <section id="lead-section" class="vh-100" style="background-image: linear-gradient(to bottom, rgba(200,178,115,0.5),rgba(0,0,0,0.5)), url(<?php echo get_template_directory_uri(); ?>/frontend/images/lead6.jpg)">
        <div>
            <h1 class="animation" data-animation="slideDown">
                GALLERY
            </h1>
        </div>
    </section>
    
    <?php
    @include 'frontend/partials/gallery.php';
    ?>
    
    <?php
    @include 'frontend/partials/contact-section2.php';
    ?>
    
</main>

<?php
@include 'frontend/partials/footer.php';
?>