$(document).ready( function() {
//    $(function() {
//      $('.skitter-large').skitter({
//          fullscreen: true,
//          navigation: true,
//          dots: true,
//      });
//    });
    
    

    //up
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 800){
            $('.up').fadeIn(500)
        } else {
            $('.up').fadeOut(500)
        }
    });
    
    $('.up').click(function() {
        $('html, body').animate({scrollTop: 0}, 800);
    });
    
    //Dynamic links
    $('.navbar ul li a').click(function(){
        $('html, body').animate({
            scrollTop: $('#' + $(this).data('value')).offset().top
        },1000);
    });
    
    //slider bx
    $('.bxslider').bxSlider({
        mode: 'fade',
        speed: 800,
        auto: true,
        captions: true,
        autoControls: true,
        stopAutoOnClick: true,
        pager: true,
      });
    
    
    //owl carousel (clients logo)
    $('.owl-carousel').owlCarousel({
        autoplay:true,
        loop:true,
        dots: true,
        nav: true,
        margin: 0,
        responsive:{
            0:{items:1},
            600:{items:2},
            1000:{items:4}
            },
        center:true,
        slideBy:2,
        autoplayTimeout:5000,
      });
    
    $('.owl-prev, .owl-next').html('');
    
    //trigger wow
    new WOW().init();
    
    $('.homeSlider .frame').click(function() {
        $('html, body').animate({scrollTop: $('.latest').offset().top})
    });
    
    //pro page ---------------------------------------------------------------------------------------------------
    $(window).scroll(function() {
        if( $(this).scrollTop() >= 100 ){
            $('.wrapper_pro .navbar').css('position', 'fixed');
        } else {
            $('.wrapper_pro .navbar').css('position', 'static');
        }
    });
    
    $('.wrapper_pro .hero button').click(function() {
        $('html, body').animate({ scrollTop: $('.pro_types').offset().top },500)
    });
    
    $('#myTabs a').click(function (e) {
      e.preventDefault()
      $(this).tab('show')
    })
});