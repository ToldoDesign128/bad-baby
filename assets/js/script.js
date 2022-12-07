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


//Splide

var splide = new Splide( '.splide', {
    lazyLoad: 'nearby',
    type : 'loop',
    perPage: 3,
    gap    : '2rem',
    breakpoints: {
      640: {
        type : 'loop',
        perPage: 2,
        gap    : '.7rem',
      },
      480: {
        type : 'loop',
        perPage: 1,
        gap    : '.7rem',
      },
    },
  } );
  
  splide.mount();