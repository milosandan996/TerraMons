
<?php
/*
 * Template Name: Smestaj
 */

@include 'frontend/partials/header.php';
?>
<main>
    <section id="lead-section" class="vh-100" style="background-image: linear-gradient(to bottom, rgba(200,178,115,0.5),rgba(0,0,0,0.5)), url(<?php echo get_template_directory_uri(); ?>/frontend/images/lead2.jpg)">
        <div>
            <h1 class="animation" data-animation="slideDown">
                SMEŠTAJ
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
                    <p>
                        Stil i udobnost je ono čime smo se vodili prilikom izrade 
                        svakog komada nameštaja, dizajniranim specijalno za ovaj 
                        prostor. Dušeci na krevetima su od memorijske pene, jastuci
                        od memorijskog gela, posteljina najkvalitetnijih inostranih 
                        tekstilnih proizvođača. Garnitura u dnevnoj sobi je 
                        modularna izrađena od braon kože punjena kvalitetnim dušecima
                        radi udobnosti prilikom spavanja. Specijalno dizajniran 
                        stakleni garderober daje <a href="https://terramons.rs/galerija/#gallery1-18">spavaćoj sobi </a> autentičnost, u 
                        sklopu sa boho drvenim krevetom. Drugu <a href="https://terramons.rs/galerija/#gallery1-22">spavaću sobu</a> krasi
                        visoki bračni krevet koji se proteže od prozora, pravljen
                        posebno sa ciljem pogleda na moderan deo turističkog odmarališta.

                    </p>
                    <p class="mb-5">
                        Naš smeštaj na Zlatiboru je na petom spratu, i ima veličanstven 
                        pogled na dva fronta: - sa prozora sobe koji gleda na moderni 
                        deo Zlatibora; - a drugi opuštajući sa terase koja gleda na 
                        četinarski deo borove šume. Sama <a href="https://terramons.rs/galerija/#gallery1-1">terasa </a>
                        je zbog toga opremljena modernom ljuljaškom i najudobnijim baštenskim stolicama;
                    </p>
                </div>
                <div class="col-12 col-lg-6 mb-5 mt-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/frontend/images/lead5.jpg" alt="Slika nije ucitana"/>
                </div>
                <div class="col-12 col-lg-6 mb-5 mt-lg-5">
                    <img src="<?php echo get_template_directory_uri(); ?>/frontend/images/lead1.jpg" alt="Slika nije ucitana"/>
                </div>
                <div class="col-12 col-lg-6">
                    <p>
                        Zgrada poseduje video nadzor i obezbeđenje, parking, a u 
                        susednom objektu imate mogućnost doplate za korišćenje SPA 
                        i Wellness sadržaja, kao i fitness centra.
                    </p>
                    <p>
                        Uz boravak u našem apartmanu želimo da Vam pružimo i nezaboravno
                        iskustvo istraživanja prelepih predela Zlatibora. Zbog toga
                        Vam nudimo mogućnost iznajmljivanja kvadova, kako biste
                        mogli da istražite ne samo centralni deo Zlatibora, 
                        već i okolne planinske predele.
                        Ukoliko želite da upotpunite <a href="https://terramons.rs/booking/">Vaš boravak</a>, uz mogućnost 
                        doplate možemo da obezbedimo pun mini bar sa izborom pića
                        koje sami poručite, kao i uplatu punog pansiona sa 
                        tradicionalnom kuhinjom, u restoranu kod samog jezera.
                    </p>
                    <p>
                        Naš cilj je da Vam pružimo maksimalnu udobnost za Vaš
                        boravak, sa dodatnom dozom luksuza za nezaboravno iskustvo.
                    </p>
                    <p  class="mb-5">
                        Smeštaj Zlatibor TERRA MONS
                        <br>
                        Čekamo vas!
                    </p>
                </div>

            </div>
        </div>
    </section>

    <?php
    @include 'frontend/partials/contact-section.php';
    ?>
</main>

<?php
@include 'frontend/partials/footer.php';
?>