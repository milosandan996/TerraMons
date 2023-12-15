<?php
/*
 * Template Name: Home
 * 
 */

@include 'frontend/partials/header2.php';
?>
<main>
    <section id="lead-section" class="vh-100" style="background-image: linear-gradient(to bottom, rgba(200,178,115,0.5),rgba(0,0,0,0.5)), url(<?php echo get_template_directory_uri(); ?>/frontend/images/gallery/dnevna5.jpg)">
        <div>
            <h1 class="animation" data-animation="slideDown">
                WELCOME
            </h1>
        </div>
    </section>

    <?php
    @include 'frontend/partials/carousel.php';
    ?>


    <section id="frontpage-section2">
        <div class="container">
            <h2>TERRA MONS - APARTMENTS</h2>
            <div class="row  text-justify justify-content-around">
                <div class="col-12 col-md-8">
                    <p class="mb-5">
                        Master apartment in Zlatibor, in the latest
                        "Villa Peković Blue", just a minute's walk from
                        <a href="https://sr.wikipedia.org/wiki/%D0%97%D0%BB%D0%B0%D1%82%D0%B8%D0%B1%D0%BE%D1%80%D1%81%D0%BA%D0%BE_%D1%98%D0%B5%D0%B7%D0%B5%D1%80%D0%BE">Zlatibor Lake</a>
                        and the very center of the tourist 
                        resort, as well as popular tourist attractions of 
                        this mountain such as ski resorts, hiking and biking
                        trails, traditional restaurants, and other landmarks.
                    </p>
                    <p class="mb-5">
                        This is a place where you can spend time as you wish, 
                        for relaxation, business activities, family or social 
                        gatherings, a place of peace and activity in a 
                        comfortable and modern atmosphere. The apartment 
                        has a <a href="https://terramons.rs/galerija/#gallery1-9">living room</a> with a dining area, 2 bedrooms, and a terrace.
                    </p>
                    <p class="mb-5">
                        Our <a href="https://terramons.rs/smestaj-zlatibor/">apartment</a> has everything you need for a short
                        or long stay, including bedding, towels, and a fully
                        equipped kitchen with the highest quality cutlery 
                        and appliances such as a kettle, coffee maker, 
                        popcorn maker, citrus juicer, pancake maker, etc.                    
                    </p>
                </div>

            </div>


            <div class="text-center player mb-5">
                <video id="player" autoplay loop muted controls >
                    <source src="<?php echo get_template_directory_uri(); ?>/frontend/images/vid1.mp4" type="video/mp4">
                </video>
            </div>



            <div class="row text-justify justify-content-around">

                <div class="col-12 col-md-8">

                    <p>
                        The living and sleeping areas are done in a mix of
                        attractive and boho style, with refined contrasts
                        in relation to the glass surfaces that surround the
                        entire interior. The apartment is dominated by 
                        various shades and textures of brown color, made
                        of high-quality oak wood material. Glass elements
                        placed over each TV give the space layers and 
                        reflections, so together with the LED elements that
                        dominate throughout the apartment, they make the 
                        entire ambiance luxurious and well-lit. We wanted
                        to bring in a modern element but also to retain 
                        the spirit of tradition and wooden elements that 
                        adorn the <a href="https://sr.wikipedia.org/wiki/%D0%97%D0%BB%D0%B0%D1%82%D0%B8%D0%B1%D0%BE%D1%80">Zlatibor</a> mountain. Modern furniture, 
                        pared-down lines, and pronounced contrasts make 
                        this apartment attractive and bold, while also 
                        being adaptive to the <a href="https://www.google.com/maps/place/43%C2%B043'24.5%22N+19%C2%B041'59.0%22E/@43.723463,19.699717,17z/data=!4m4!3m3!8m2!3d43.7234722!4d19.6997222?hl=sr"> location</a>.
                    </p>

                </div>
            </div>
        </div>
    </section>

    <div class="jumbotron text-center" style="margin-bottom:  60px !important; margin-top:  60px !important;">
        <a style="padding: 40px;" class="btn-danger" href="https://terramons.rs/booking/">"ONLINE" REZERVACIJA</a>
    </div>


    <?php
    @include 'frontend/partials/contact-section2.php';
    ?>
</main>
<?php
@include 'frontend/partials/footer.php';
?>