//My script

    //Hamburger menu
    jQuery('.hamburger').click(function () {
        jQuery('.hamburger').toggleClass('is-active');
        jQuery(this).parent().parent('.container').toggleClass('open');
    });