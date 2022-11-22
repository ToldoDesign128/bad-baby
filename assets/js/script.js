//My script

    //Hamburger menu

        //Open menu
        jQuery('.hamburger').click(function () {
            jQuery('.hamburger').toggleClass('is-active');
            jQuery(this).parent().parent('.container').toggleClass('open');
        });
        
        //Link toogle
        jQuery('.mobile-list-item').on('click', function() {
            jQuery(".container").removeClass("open");
            jQuery(".hamburger").removeClass("is-active");
        });