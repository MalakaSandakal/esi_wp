$('.owl-carousel-wwdd').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
    slideBy: 2,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:2
        }
    }
});  

$('.partner-carousal').owlCarousel({
  loop: false,
  margin: 10,
  nav: true,
  responsiveClass:true,
  responsive: {
    0: {
      items: 2
    },
    600: {
      items: 3
    },
    1000: {
      items: 3
    }
  }
});

$('.testimonial-owl').owlCarousel({
  loop: false,
  margin: 10,
  nav: true,
  responsiveClass:true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 1
    }
  }
});

$('.about-page-carousal').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:3
        }
    }
  });