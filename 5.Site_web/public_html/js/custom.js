$('.navbar-collapse a').on('click',function(){
    $(".navbar-collapse").collapse('hide');
  });

  $(window).scroll(function() {
    if ($(".navbar").offset().top > 50) {
      $(".navbar-fixed-top").addClass("top-nav-collapse");
        } else {
          $(".navbar-fixed-top").removeClass("top-nav-collapse");
        }
  });

$('.home-slider').owlCarousel({
    animateOut:'fadeOut',
    items:1,
    loop:true,
    dots:false,
    autoplayHoverPause:false,
    autoplay:true,
    smartSpeed: 1000,
  })