
<?php
@include 'partials/header.php';
?>

<main>

    <?php
    $curent = $_SERVER['REQUEST_URI'];
    ?>





    <section id="frontpage-section" class="vh-100">
        <div>
            <h1 class="animation" data-animation="slideDown">
                DOBRODOŠLI
            </h1>
        </div>
    </section>

    <section id="frontpage-section2">
        <div class="container">
            <h2>TERRA MONS - APARTMENTS</h2>
            <div class="row">
                <div class="col-12 col-lg-6">
                    <p class="mb-5 mt-5">
                        Master apartman na Zlatiboru, u okviru jednog spektakularnog
                        stana u najnovijoj Vili Peković Blue, na samo minut šetnje 
                        od Zlatiborskog jezera i samog centra turističkog odmarališta,
                        kao i popularnih turističkih atrakcija ove planine poput 
                        skijališta, pešačkih i biciklističkih staza, tradicionalnih 
                        restorana i ostalih znamenitosti.
                    </p>
                    <p class="mb-5">
                        Ovo je prostor u kome možete provoditi vreme onako kako
                        poželite, za odmor, obavljanje poslovnih obaveza, porodična
                        ili društvena okupljanja, mesto vašeg mira i aktivnosti u
                        udobnoj i modernoj atmosferi. Apartman poseduje dnevni
                        boravak sa trpezarijom, 2 spavaće sobe kao i terasu.
                    </p>
                    <p class="mb-5">
                        U našem apartmanu se nalazi sve što je potrebno za kraći ili
                        duži boravak, uključujući posteljinu, peškire i komplet 
                        opremljenu kuhinju najkvalitetnijim escajgom i aparatima 
                        kao što su ketler, aparat za kafu, aparat za kokice, 
                        aparat za citruse, aparat za palačinke...
                        U cenu je uključen i doručak, a kao poklon dobrodošlice, 
                        očekuje Vas flaša vina, domaća rakija, med, voće, kafa,
                        čaj i sokovi, koji će Vam pomoći da se osvežite nakon putovanja.                    
                    </p>
                </div>
                <div class="col-12 col-lg-6">
                    <img src="images/gallery/dnevna5.jpg" alt="Slika nije ucitana"/>
                </div>
            </div>


            <div class="text-center player mb-5">
                <video id="player" autoplay loop muted controls >
                    <source src="images/vid1.mp4" type="video/mp4">
                </video>
            </div>



            <div class="row">
                <div class="col-12 col-lg-6 mb-5">
                    <img src="images/lead6.jpg" alt="Slika nije ucitana"/>
                </div>
                <div class="col-12 col-lg-6">

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
                        drvenih elemenata koji krase planinu Zlatibor. Moderan 
                        nameštaj, svedene linije, izraženi kontrasti čine ovaj 
                        apartman atraktivnim i smelim, a ujedno i adaptivnim za 
                        lokaciju na kojoj se nalazi.
                    </p>

                </div>
            </div>
        </div>
    </section>

    <?php
    @include 'partials/carousel.php';
    ?>

    <?php
    @include 'partials/contact-section.php';
    ?>

</main>

<?php
@include 'partials/footer.php';
?>