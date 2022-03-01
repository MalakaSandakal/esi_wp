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
  };

  var comment_submit_btn = document.querySelector('.comment-form p.form-submit input.submit');
  comment_submit_btn.value = "Submit";


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
})

var right_btn = $('.owl-carousel .owl-nav button.owl-next span');      
var left_btn = $('.owl-carousel .owl-nav button.owl-prev span');
  
right_btn.html('<i class="fas fa-chevron-right"></i>');
left_btn.html('<i class="fas fa-chevron-left"></i>');


var cont_height = $('.blog-top').height();
var cont_button = $('.fixed-right');
var wind_height = $(window).height();
cont_button.css({
    "margin-top": cont_height/2, 
});
var width = $(window).width();
if(width>=767){
  var mh = 0; 
  
  $(".blog-post-heading-col-4").each(function() {

  if (mh < $(this).height()) {
    mh = $(this).height();
    }

  });
  $(".blog-post-heading-col-4").height(mh);
}  


var faq_accordion =document.querySelectorAll('.faq-accordions .accordion-item .accordion-collapse');
var faq_accordion_button =document.querySelectorAll('.faq-accordions .accordion-item h2 button');
var faq_accordion_collapse =document.querySelectorAll('.faq-accordions .accordion-item .accordion-collapse');

for(let x=0;x<faq_accordion.length;x++){
  if(faq_accordion[0]){
    faq_accordion[0].classList.add('show');   
  }
  faq_accordion_button[x].setAttribute("aria-expanded", 'false');
  faq_accordion_button[x].classList.add("collapsed");
  if(faq_accordion_button[0]){
    faq_accordion_button[0].setAttribute("aria-expanded", 'true');
    faq_accordion_button[0].classList.remove("collapsed");
  }
  faq_accordion_button[x].setAttribute("data-bs-target", `#collapse-${x}`);
  faq_accordion_collapse[x].setAttribute("id", `collapse-${x}`);
}

function create_indicators(){
  var a= 0;
  do{
    a+=1;
    partners_carousal_indicator_sec.innerHTML += `<button type="button" class="cr-2-ind-btn" data-bs-target="#carouselExampleIndicators-2" data-bs-slide-to=${a-1} aria-label="Slide ${a-1}"></button>`;
  }while(a<products_items.length);
  setTimeout(options__, 1000)
}
function options__(){
  var cr_2 = $('.cr-2-ind-btn');
  for(let q=0;q<cr_2.length;q++){
    if(cr_2[0]){
      cr_2[0].classList.add('active');
    }
  }
}
setTimeout(create_indicators, 1000);


var mailpoet_text = document.querySelector('.mailpoet_text');
mailpoet_text.placeholder = 'Your Email Address Here';

$('.mailpoet_paragraph').append('<i class="fas fa-envelope input-envelope"></i>');


var enve_icon = document.querySelectorAll('.mailpoet_form .mailpoet_paragraph .fa-envelope');
for(let ei = 0; ei< enve_icon.length; ei++){
  enve_icon[1].style.display = "none";
}

var wid = document.querySelectorAll('.owl-carousel-home-partners .owl-stage-outer .owl-item');
for(let ww = 0; ww < wid.length;ww++){
    wid[ww].style.max_width = 300;
}

// var mailpoet_text = document.querySelector('.mailpoet_text');

// if(mailpoet_text.value == null|| mailpoet_text.value == ""){
//   console.log('empty');
// }else{
//   console.log('filed');
// }