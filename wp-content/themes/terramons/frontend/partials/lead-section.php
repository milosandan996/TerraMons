<?php
$curent = $_SERVER['REQUEST_URI'];

$imgurl = get_the_post_thumbnail_url(get_the_ID(), 'full');
?>



<section id="lead-section" class="vh-100" style="background-image: linear-gradient(to bottom, rgba(200,178,115,0.5),rgba(0,0,0,0.5)), url(<?php echo get_template_directory_uri(); ?>/frontend/images/lead1.jpg)">
    <div>
        <h1 class="animation" data-animation="slideDown">
            <?php  ?>
        </h1>
    </div>
</section>
