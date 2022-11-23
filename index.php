<?php get_header(); ?>

<main class="container-fluid m-0 p-0">

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
            <div class="col-12 col-md-8">
                <h1 class="display-3">Hotel Baby</h1>
                <h3 class="lead mb-0">Nel cuore di Milano Marittima a pochi passi dal mare</h3>
            </div>
        </div>
        <div class="row mt-5">
            <div class="col-md-2 col-12"><a href="#"><button class="px-5 py-3">Prenota Ora</button></a></div>
            <div class="col-md-3 col-12"><a href="#"><button class="px-5 py-3">Chiedi un preventivo</button></a></div>
        </div>
    </div>
  </section>
</main>

<?php get_footer(); ?>