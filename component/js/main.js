$(document).ready(function(){
    $('.totop').tottTop({
      duration: 1000
    });
    
    
  $("#our-recomandation").owlCarousel({
    loop:true,
    margin:20,
    nav:false,
    responsiveClass:true,
    responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:3,
                nav:true,
                loop:false
            }
        }      
    });  
    
    $('.header').removeClass('HeaderFixed');
});

$(window).scroll(function(){
  var sticky = $('.header'),
      scroll = $(window).scrollTop();

  if (scroll >= 100) sticky.addClass('HeaderFixed');
  else sticky.removeClass('HeaderFixed');
});