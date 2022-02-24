$( ".item-test" ).each(function(index) {
    $(this).on("click", function(){
       
        $(this).children('.modal').modal('show');

        if($(this).children('.modal').modal('show')){
            $('.os-btn').css('z-index','0');
        }else if($(this).children('.modal').modal('hide')){
            $('.os-btn').css('z-index','999999');
            $('.carousal-card-vid').get(0).pause();
        }

    });
});

var right_btn = $('.testomonials-card-row .modal-header button');      
      
right_btn.html('<p class="cross-x">X</p>');



var back_to_top = document.getElementById("back-to-top");
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {    
    back_to_top.style.display = "block";
  } else {
    back_to_top.style.display = "none";
  }
}
function topFunction() {
  document.body.scrollTop = 0; 
  document.documentElement.scrollTop = 0;
}

$(document).ready(function(){

  if($(window).width()<768){

    var max_width = $('.our-service-sec').css('max-width');
    $('.cr-2-right-col').css('max-width',max_width);    

  };

})




// homepage
$('.owl-carousel-home-partners').owlCarousel({
  loop: false,
  margin: 10,
  nav: true,
  responsive: {
    0: {
      items: 1
    },
    600: {
      items: 1
    },
    1000: {
      items: 3
    }
  }
});
$('.owl-carousel-wwdd').owlCarousel({
    loop:false,
    margin:10,
    nav:true,
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
   
$('.testimonial-owl').owlCarousel({
          loop:true,
          margin:10,
          nav:true,
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:1
              },
              1000:{
                  items:1
              }
          }
});

// $('.play-vid-card-btn').click(function() {
//   $('.play-vid-card-btn').css({
//     'display': 'none'
//   });
//   $('.carousal-card-vid').get(0).play();
// }); $('.carousal-card-vid').click(function() {
//   $('.play-vid-card-btn').css({
//     'display': 'block'
//   });
//   $('.carousal-card-vid').get(0).pause();
// });

// $('.btn-close').click(function(){
//   $('.carousal-card-vid').get(0).pause();
//   $('.play-vid-card-btn').css({
//     'display': 'block'
//   });
// })

// $( document ).ready(function() {
//   var mh = 0; $(".card-content").each(function() {

//   if (mh < $(this).height()) {
//     mh = $(this).height()
//     }
//   });

//   if($(window).width()<768){
//     var mh = 0; $(".card-img").each(function() {
//     if (mh < $(this).height()) {
//       mh = $(this).height()
//       }
//     });
//   }

// $(".card-content").height(mh);

// });




const home_top_cards = document.querySelectorAll('.home-main-card');
const main_cr_indicators = document.querySelectorAll('.carousel-indicators-home button');

function frame_add(){
    for(let i = 0; i < main_cr_indicators.length; i++){
        home_top_cards[i].classList.remove('frame');
        if(main_cr_indicators[i].classList.contains('active')){
          home_top_cards[i].classList.add('frame');
        }
    }
}

var intervalId = window.setInterval(function(){

  frame_add();
  
}, 500);

var products_items = document.querySelectorAll('.carousel-2-def-height .cr-partners');
var partners_carousal_indicator_sec = document.querySelector('.partners-carousal-indicator-sec')
var partners_carousal_indicator_sec_buttons = document.querySelectorAll('.cr-2-ind-btn');

$(document).ready(function(){
  for(let i=0;i<products_items.length;i++){
    products_items[0].classList.add('active');
    // partners_carousal_indicator_sec.innerHTML += `<button type="button" class="cr-2-ind-btn" data-bs-target="#carouselExampleIndicators-2" data-bs-slide-to="${i}" aria-label="Slide ${i}"></button>`;
  };
  console.log(df);
  var comment_submit_btn = document.querySelector('.comment-form p.form-submit input.submit');
  comment_submit_btn.value = "Submit";
});

$('.about-page-carousal').owlCarousel({
  loop:true,
  margin:10,
  nav:true,
  responsive:{
      0:{
          items:2
      },
      600:{
          items:2
      },
      1000:{
          items:3
      }
  }
})

var right_btn = $('.owl-carousel .owl-nav button.owl-next span');      
var left_btn = $('.owl-carousel .owl-nav button.owl-prev span');
  
right_btn.html('<i class="fas fa-chevron-right"></i>');
left_btn.html('<i class="fas fa-chevron-left"></i>');





