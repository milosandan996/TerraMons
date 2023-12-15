
<?php
@include 'frontend/partials/header.php';
?>
<main>

    <section id="lead-section" class="vh-100" style="background-image: linear-gradient(to bottom, rgba(200,178,115,0.5),rgba(0,0,0,0.5)), url(<?php echo get_template_directory_uri(); ?>/frontend/images/gallery/dnevna5.jpg)">
        <div>
            <h1 class="animation" data-animation="slideDown">
                DOBRODOŠLI
            </h1>
        </div>
    </section>

    <?php
    @include 'frontend/partials/carousel.php';
    ?>

    <section id="frontpage-section2">
        <div class="container">
            <h2>TERRA MONS - APARTMENTS</h2>
            <div class="row text-justify justify-content-around">
                <div class="col-12 col-md-8">
                    <p class="mb-5 mt-5">
                        Master apartman na Zlatiboru, u okviru jednog spektakularnog
                        stana u najnovijoj Vili Peković Blue, na samo minut šetnje 
                        od <a href="https://sr.wikipedia.org/wiki/%D0%97%D0%BB%D0%B0%D1%82%D0%B8%D0%B1%D0%BE%D1%80%D1%81%D0%BA%D0%BE_%D1%98%D0%B5%D0%B7%D0%B5%D1%80%D0%BE">Zlatiborskog jezera</a> i samog centra turističkog odmarališta,
                        kao i popularnih turističkih atrakcija ove planine poput 
                        skijališta, pešačkih i biciklističkih staza, tradicionalnih 
                        restorana i ostalih znamenitosti.
                    </p>
                    <p class="mb-5">
                        Ovo je prostor u kome možete provoditi vreme onako kako
                        poželite, za odmor, obavljanje poslovnih obaveza, porodična
                        ili društvena okupljanja, mesto vašeg mira i aktivnosti u
                        udobnoj i modernoj atmosferi. Apartman poseduje <a href="https://terramons.rs/galerija/#gallery1-9">dnevni
                            boravak</a> sa trpezarijom, 2 spavaće sobe kao i terasu.
                    </p>
                    <p class="mb-5">
                        U našem <a href="https://terramons.rs/smestaj-zlatibor/">apartmanu</a> se nalazi sve što je potrebno za kraći ili
                        duži boravak, uključujući posteljinu, peškire i komplet 
                        opremljenu kuhinju najkvalitetnijim escajgom i aparatima 
                        kao što su ketler, aparat za kafu, aparat za kokice, 
                        aparat za citruse, aparat za palačinke...
                        U cenu je uključen i doručak, a kao poklon dobrodošlice, 
                        očekuje Vas flaša vina, domaća rakija, med, voće, kafa,
                        čaj i sokovi, koji će Vam pomoći da se osvežite nakon putovanja.                    
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
                        Zona dnevne i spavaćih soba rađena je u miksu atraktivnog
                        i boho stila, sa prefinjenim kontrastima u odnosu na 
                        staklene površine koje okružuju ceo enterijer. Stanom 
                        dominiraju različite nijanse i teksture braon boje, od 
                        kvalitetnog materijala hrastovog drveta. Stakleni elementi 
                        postavljeni preko svakog TV daju prostoru slojeve i odsjaj,
                        pa zajedno sa LED elementima koji dominiraju kroz ceo stan
                        čine čitav ambijent luksuznim i osvetljenim. Želeli smo da 
                        unesemo element modernog ali i da zadržimo duh tradicije i
                        drvenih elemenata koji krase planinu <a href="https://sr.wikipedia.org/wiki/%D0%97%D0%BB%D0%B0%D1%82%D0%B8%D0%B1%D0%BE%D1%80">Zlatibor</a>. Moderan 
                        nameštaj, svedene linije, izraženi kontrasti čine ovaj 
                        apartman atraktivnim i smelim, a ujedno i adaptivnim za 
                        <a href="https://www.google.com/maps/place/43%C2%B043'24.5%22N+19%C2%B041'59.0%22E/@43.723463,19.699717,17z/data=!4m4!3m3!8m2!3d43.7234722!4d19.6997222?hl=sr">lokaciju</a> na kojoj se nalazi.
                    </p>

                </div>
            </div>
        </div>
    </section>

    <div class="jumbotron text-center" style="margin-bottom:  60px !important; margin-top:  60px !important;">
        <a style="padding: 40px;" class="btn-danger" href="https://terramons.rs/booking/">"ONLINE" REZERVACIJA</a>
    </div>

    <?php
    @include 'frontend/partials/contact-section.php';
    ?>

</main>

<?php
@include 'frontend/partials/footer.php';
?>