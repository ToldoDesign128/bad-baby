<?php get_header(); ?>

<main class="container-fluid m-0 p-0">

    <!-- Hero -->
    <section class="hero">
        <!-- This div is  intentionally blank. It creates the transparent black overlay over the video which you can modify in the CSS -->
        <div class="overlay"></div>
        <!-- The HTML5 video element that will create the background video on the header -->
            <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                <source src="<?php echo get_template_directory_uri().'/assets/video/hero_background.ogv';?>" type="video/ogv">
                <source src="<?php echo get_template_directory_uri().'/assets/video/hero_background.mp4';?>" type="video/mp4">
            </video>
        <!-- The header content -->
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-8 col-md-10">
                    <h1 class="display-3 my-3">Hotel Baby</h1>
                    <h3 class="mb-0">Nel cuore di Milano Marittima a pochi passi dal mare</h3>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-xl-2 col-lg-4 col-md-6 col-12 my-3"><a href="#"><button class="py-3">Prenota Ora</button></a></div>
                <div class="col-xl-3 col-lg-4 col-md-6 col-12 my-3"><a href="#"><button class="py-3">Chiedi un preventivo</button></a></div>
            </div>
        </div>
    </section>

    <!-- Presentazione -->
    <section class="presentazione my-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-5 presentazione-team col-12 d-none d-lg-flex"> <img src="<?php echo get_template_directory_uri() . '/assets/images/picture/Staff_Baby_2022.png';?>" alt="Staff"> </div>
                <div class="col-lg-5 col-12 offset-lg-2 offset-0 row m-auto">
                    <h2 class="col-12 mb-md-5 mb-3"> Ci presentiamo </h2>
                    <p class="col-12 mt-md-5 mt-3"> In prestigiosa posizione centrale a Milano Marittima l’Hotel Baby si affaccia sul noto Viale 2 Giugno a pochi passi dalla spiaggia. </p>
                    <p class="col-12"> La struttura medio piccola offre un ottimo confort per quei viaggiatori che vogliono godersi un soggiorno in puro stile romagnolo accompagnati dal piacere di sentirsi a proprio agio. </p>
                    <div class="col-12 d-lg-none my-5"> <img src="<?php echo get_template_directory_uri() . '/assets/images/picture/Staff_Baby_2022.png'; ?>" alt="Hotel Baby"> </div>
                    <p class="col-12"> La gestione è familiare e custodisce con passione questa struttura da ormai 20 anni.</p>
                    <p class="col-12"> Il nostro hotel è il punto di partenza ideale per chi vuole scoprire Milano Marittima con la comodità e l’accoglienza che ti fanno sentire a casa. </p>
                </div>
            </div>
            <div class="row mt-md-5 mt-2">
                <div class="col-12 py-md-5 py-2">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/picture/presentazione2.jpg'; ?>" alt="Hotel Baby">
                </div>
            </div>

        </div>


    </section>

    <!-- Servizi -->
    <section class="servizi mb-5 py-5">
        <div class="container my-5">
            <div class="row">
                <div class="col-12">
                    <h2> La tua vacanza con noi </h2>
                </div>
            </div>
        </div>

        <div class="my-4">
            <?php get_template_part('template-parts/loop-servizi');?>
        </div>

        <div class="my-4">
            <?php get_template_part('template-parts/loop-icone');?>
        </div>

        <div class="container mt-5">
            <div class="pulsanti row justify-content-md-center mt-5 px-3">
                <div class="col-12 col-md-5 col-lg-4 my-3"><a href="#"><button class="py-3">Prenota Ora</button></a></div>
                <div class="col-12 col-md-5 col-lg-4 my-3"><a href="#"><button class="py-3">Chiedi un preventivo</button></a></div>
            </div>
        </div>

    </section>

    <!-- Formule -->
    <section class="formule my-5">
        <div class="container pt-5">
            <div class="row justify-content-md-center">
                <h2 class="col-12 col-md-8 col-lg-6">Le nostre formule</h2>
            </div>
            <div class="row my-5">
                <div class="card col-12 col-md-6">
                    <div class="card-formula row">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/picture/Staff_Baby_2022.png';?>" alt="" class="col-md-4 col-12">
                        <div class="card-formula-text col-md-8 col-12">
                            <h4>B&B</h4>
                            <p> Alla scoperta di Milano Marittima e dintorni, pernottamento e colazione. </p>
                        </div>
                    </div>
                </div>
                <div class="card col-12 col-md-6">
                    <div class="card-formula row">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images/picture/Staff_Baby_2022.png';?>" alt="" class="col-md-4 col-12">
                        <div class="card-formula-text col-md-8 col-12">
                            <h4>B&B con Mare</h4>
                            <p>B&B con l'aggiunta di lettini ed ombrellone in spiaggia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Galleria -->
    <section class="galleria mb-5 py-5">
        <div class="container my-5">
            <div class="row">
                <div class="col-12">
                    <h2> Galleria </h2>
                </div>
            </div>
        </div>

        <div class="my-4">
            <?php get_template_part('template-parts/loop-galleria');?>
        </div>
    </section>


</main>

<?php get_footer(); ?>