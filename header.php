<!DOCTYPE html>
<html lang="it" class="m-0">
<head>
    <meta <?php bloginfo('charset'); ?>>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <meta name="format-detection" content="telephone=no"/>
    <meta name="theme-color" content="#417BC7">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <?php wp_head(); ?>
</head>
    
<body>
    <header class="container-fluid py-3">
        <div  class="container menu">
            <nav class="row align-items-center">
                <!-- Logo -->
                <div class="logo col-md-1 col-10"><a href="#hero" class=""><img src="<?php echo get_template_directory_uri() . '/assets/images/icon/Logo_foglia.svg';?>" alt=""></a></div>
                <!-- Menu Desktop -->
                <ul id="nav-items" class="col-md-11 m-0 p-0">
                    <li><a href="#presentazione"> Ci presentiamo </a></li>
                    <li><a href="#servizi"> Servizi </a></li>
                    <li><a href="#pacchetti"> B&B </a></li>
                    <li><a href="#galleria"> Galleria </a></li>
                    <li><a href="#info"> Info </a></li>
                    <li><a href="https://booking.passepartout.cloud/booking?oidPortale=10000&lingua=it" target="blank"><button type="button" class="py-1 px-3">Prenota ora</button></a></li>
                </ul>
                <!-- Icona hamburger -->
                <div class="hamburger hamburger--collapse col-2">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </div>
            </nav>
            <!-- Menu Mobile -->
            <div class="row mobile mt-5 ml-3">
                <ul class="col-12">
                    <li class="mobile-list-item my-3"><a href="#presentazione"> Ci presentiamo </a></li>
                    <li class="mobile-list-item my-3"><a href="#servizi"> Servizi </a></li>
                    <li class="mobile-list-item my-3"><a href="#pacchetti"> B&B </a></li>
                    <li class="mobile-list-item my-3"><a href="#galleria"> Galleria </a></li>
                    <li class="mobile-list-item my-3"><a href="#info"> Info </a></li>
                    <li class="mobile-list-item my-3"><a href="https://booking.passepartout.cloud/booking?oidPortale=10000&lingua=it" target="blank"><button type="button" class="py-3 px-3"> Prenota ora </button></a></li>
                </ul>
            </div>
        </div>        
    </header>