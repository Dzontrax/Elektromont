jQuery(function($){

/* Smanjivanje menija */

$(window).scroll(function() {
    if ($(document).scrollTop() > 100) {
      $('navbar').addClass('shrink');
    } else {
      $('navbar').removeClass('shrink');
    }
  });

 
//Brojaci na home page

    $(window).scroll(startCounter);
    function startCounter() {
        if ($(window).scrollTop() > 2500) {
            $(window).off("scroll", startCounter);
                $('.big').each(function () {
                    var $this = $(this);
                jQuery({ Counter: 0 }).animate({ Counter: $this.text() }, {
                duration: 1400,
                easing: 'swing',
                step: function () {
                    $this.text(Math.ceil(this.Counter));
                }
            });
        });
    }
}

/* bACK TO TOP */

$(document).ready(function(){
    $(window).scroll(function () {
        if ($(this).scrollTop() < 700) {
            $('#back-to-top').hide();
        }
        if ($(this).scrollTop() > 700) {
               $('#back-to-top').fadeIn(500);
           } else {
               $('#back-to-top').fadeOut(800);
           }
       });
       // scroll body to 0px on click
       $('#back-to-top').click(function () {
        //    $('#back-to-top').tooltip('hide');
           $('body,html').animate({
               scrollTop: 0
           }, 800);
           return false;
       });
       
       $('#back-to-top').tooltip('show');

});


    /* Animacije fade in fade out na meniju delatnost  */

     // OPACITY OF BUTTON SET TO 50%
     $(".delatnost-side-menu li").css("opacity","0.5");

     // ON MOUSE OVER
     $(".delatnost-side-menu li").hover(function () {
 
     // SET OPACITY TO 100%
     $(this).stop().animate({
         opacity: 1.0,
         borderBottomWidth: '3px',
         borderBottomColor :'#D00224'
         }, "fast");
    },
 
     // ON MOUSE OUT
    function () {
 
    // SET OPACITY BACK TO 50%
    $(this).stop().animate({
        opacity: 0.5,
        borderBottomWidth: '1px',
        borderBottomColor :'#D00224'
        }, "fast");
    });


    // Menu toggler animacija
    $(document).ready(function () {

            // Hide/show animation hamburger function
            $('.navbar-toggler').on('click', function () {
        
            // Take this line to first hamburger animations
            $('.animated-icon1').toggleClass('open');
        
            });
  
  });

});

    


