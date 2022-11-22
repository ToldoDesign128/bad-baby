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
                <div class="col-md-3 col-10"><a href="#" class=""><h5 class="m-0"> Hotel Baby </h5></a></div>
                <!-- Menu Desktop -->
                <ul id="nav-items" class="col-md-9 row align-items-center m-0 p-0">
                    <li class="col-md-3"><a href="#" class=""> Ci presentiamo </a></li>
                    <li class="col-md-2"><a href="#" class=""> Servizi </a></li>
                    <li class="col-md-2"><a href="#" class=""> Pacchetti </a></li>
                    <li class="col-md-2"><a href="#" class=""> Galleria </a></li>
                    <li class="col-md-3"><a href="#" class=""><button type="button" class="py-1 px-3"> Prenota ora </button></a></li>
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
                    <li class="my-3"><a href="#" class=""> Ci presentiamo </a></li>
                    <li class="my-3"><a href="#" class=""> Servizi </a></li>
                    <li class="my-3"><a href="#" class=""> Pacchetti </a></li>
                    <li class="my-3"><a href="#" class=""> Galleria </a></li>
                    <li class="my-3"><a href="#" class=""><button type="button" class="py-1 px-3"> Prenota ora </button></a></li>
                </ul>
            </div>
        </div>        
    </header>