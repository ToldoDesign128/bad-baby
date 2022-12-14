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

var elms = document.getElementsByClassName( 'splide' );

for ( var i = 0; i < elms.length; i++ ) {
  new Splide( elms[ i ] ,{
    type : 'loop',
    perPage: 3,
    gap    : '2rem',
    breakpoints: {
      840: {
        type : 'loop',
        perPage: 2,
        gap    : '.7rem',
      },
      580: {
        type : 'loop',
        perPage: 1,
        gap    : '.7rem',
      },
    },
  } ).mount();
}