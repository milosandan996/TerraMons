<?php
/*
 * Template Name: Apartment
 */

@include 'frontend/partials/header2.php';
?>

<main>
    <section id="lead-section" class="vh-100" style="background-image: linear-gradient(to bottom, rgba(200,178,115,0.5),rgba(0,0,0,0.5)), url(<?php echo get_template_directory_uri(); ?>/frontend/images/lead2.jpg)">
        <div>
            <h1 class="animation" data-animation="slideDown">
                APARTMENT
            </h1>
        </div>
    </section>

    <?php
    @include 'frontend/partials/carousel.php';
    ?>

    <div class="jumbotron text-center" style="margin-bottom:  60px !important; margin-top:  60px !important;">
        <a style="padding: 40px;" class="btn-danger" href="https://terramons.rs/booking/">"ONLINE" REZERVACIJA</a>
    </div>

    <section id="room">
        <div class="container">
            <h2>TERRA MONS - APARTMENTS</h2>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <p class="mb-5">
                        Style and comfort were the guiding principles in
                        making every piece of furniture, specially designed 
                        for this space. The mattresses on the beds are 
                        made of memory foam, pillows of memory gel, and
                        bedding of the highest quality foreign textile 
                        manufacturers. The living room set is modular, 
                        made of brown leather, and filled with quality
                        mattresses for sleeping comfort. The specially 
                        designed glass wardrobe gives the <a href="https://terramons.rs/galerija/#gallery1-18">bedroom</a> authenticity,
                        in combination with the boho wooden bed. The <a href="https://terramons.rs/galerija/#gallery1-22">second
                        bedroom </a>is adorned with a high double bed that 
                        stretches from the window, made specifically with 
                        a view of the modern part of the tourist resort.
                    </p>
                    <p class="mb-5">
                        The apartment has a magnificent view from the fifth 
                        floor on two fronts: - from the room window overlooking
                        the modern part of Zlatibor; - and the other relaxing
                        view from the terrace overlooking the coniferous part
                        of the pine forest. The <a href="https://terramons.rs/galerija/#gallery1-1">terrace</a> itself is equipped 
                        with a modern swing and the most comfortable garden chairs.
                    </p>
                    <p class="mb-5">
                        The price includes breakfast, and as a welcome gift,
                        you will receive a bottle of wine, homemade brandy, 
                        honey, fruit, coffee, tea, and juices, which will 
                        help you refresh after your journey.
                        The building has video surveillance and security, 
                        parking, and in the adjacent building, you have the 
                        possibility of paying for the use of SPA and Wellness 
                        facilities, as well as a fitness center.
                    </p>
                </div>
                <div class="col-12 col-lg-6 mb-5 mt-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/frontend/images/gallery/dnevna5.jpg" alt="Slika nije ucitana"/>
                </div>
                <div class="col-12 col-lg-6 mb-5 mt-lg-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/frontend/images/lead1.jpg" alt="Slika nije ucitana"/>
                </div>
                <div class="col-12 col-lg-6">
                    <p class="mt-5">
                        In addition to enjoying beautiful accommodation,
                        we want to provide you with an unforgettable experience
                        of exploring the beautiful landscapes of Zlatibor.
                        That is why we offer you the possibility of renting
                        quads, so that you can explore not only the central 
                        part of Zlatibor but also the surrounding mountains.
                    </p>
                    <p>
                        If you wish to enhance your <a href="https://terramons.rs/booking/">stay</a>, for an additional 
                        fee, we can provide a full minibar with a selection
                        of drinks that you can order yourself, as well as
                        full board with traditional cuisine at the restaurant by the lake.
                        Our goal is to provide you with maximum comfort during
                        your stay, with an extra touch of luxury for an unforgettable experience.
                    </p>
                    <p  class="mb-5">
                        Visit TERRA MONS apartments, we're waiting for you!
                    </p>
                </div>

            </div>
        </div>
    </section>

    <?php
    @include 'frontend/partials/contact-section2.php';
    ?>


</main>

<?php
@include 'frontend/partials/footer.php';
?>