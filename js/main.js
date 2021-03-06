var full_container_blog_post = document.querySelectorAll('.full-cont-blog-post');

function remove_init(){       
    for(var i=0; i<full_container_blog_post.length; i++){
        if(i>0){
            full_container_blog_post[i].remove();
        } else{
            full_container_blog_post[i].style.display = "";
        }
    }
}

remove_init();

var vid_area = document.querySelector("#vid-area");
var vid_model_close = $(".vid-model-close");

$(".play-btn-icon").click(function () {
  $('.cr-main-video').attr('autoplay')
  $('.cr-main-video').css({
    'display':'block',
  })
  $(".cr-main-video").get(0).play();
  $(".cr-main-video-btn-play").css({
    display: "none",
  });
  $(".cr-main-video-btn-pause").css({
    display: "inline-block",
  });
});

$(".cr-main-video-btn-play").click(function () {
  $(".cr-main-video").get(0).play();
  $(this).css({
    display: "none",
  });
  $(".cr-main-video-btn-pause").css({
    display: "inline-block",
  });
});

$(".cr-main-video-btn-pause").click(function () {
  $(".cr-main-video").get(0).pause();
  $(this).css({
    display: "none",
  });
  $(".cr-main-video-btn-play").css({
    display: "inline-block",
  });
});

$(".vid-model-close").click(function () {
  $(".cr-main-video").get(0).pause();
  $(".cr-main-video").get(0).currentTime = 0;
});

const home_top_cards = document.querySelectorAll(".home-main-card");
const main_cr_indicators = document.querySelectorAll(
  ".carousel-indicators-home button"
);

function frame_add() {
  for (let i = 0; i < main_cr_indicators.length; i++) {
    home_top_cards[i].classList.remove("frame");
    if (main_cr_indicators[i].classList.contains("active")) {
      home_top_cards[i].classList.add("frame");
    }
  }
}

var intervalId = window.setInterval(function () {
  frame_add();
}, 500);

if ($(".services-tab-btn")) {
  $(".services-tab-btn").each(function (index) {
    if ($(this).hasClass("active")) {
      $(this).parent().children(".polygon-down").addClass("show-poly");
    }

    $(this).on("click", function () {
      var parent = $(this).parent();
      var parent_ul = parent.parent();
      var child = parent.children(".polygon-down");

      parent_ul
        .children(".nav-item")
        .children(".polygon-down")
        .removeClass("show-poly");

      child.addClass("show-poly");
    });
  });
}

var products_items = document.querySelectorAll(
  ".carousel-2-def-height .cr-partners"
);
var partners_carousal_indicator_sec = document.querySelector(
  ".partners-carousal-indicator-sec"
);
var partners_carousal_indicator_sec_buttons =
  document.querySelectorAll(".cr-2-ind-btn");

$(document).ready(function () {
  for (let i = 0; i < products_items.length; i++) {
    products_items[0].classList.add("active");
  }

  var comment_submit_btn = document.querySelector(
    ".comment-form p.form-submit input.submit"
  );
  if (comment_submit_btn) {
    comment_submit_btn.value = "Submit";
  } 
});

var right_btn = $(".owl-carousel .owl-nav button.owl-next span");
var left_btn = $(".owl-carousel .owl-nav button.owl-prev span");

right_btn.html('<i class="fas fa-chevron-right"></i>');
left_btn.html('<i class="fas fa-chevron-left"></i>');

var cont_height = $(".blog-top").height();
var cont_button = $(".fixed-right");
var wind_height = $(window).height();
cont_button.css({
  "margin-top": cont_height / 2,
});

var width = $(window).width();
var mh_4 = 0;

$(".category-name h6").each(function () {
  if (mh_4 < $(this).height()) {
    mh_4 = $(this).height();
  }
});

$(".category-name h6").height(mh_4);

if (width >= 767) {
  var mh = 0;
  var mh_2 = 0;
  var mh_3 = 0;

  $(".blog-post-heading-col-4").each(function () {
    if (mh < $(this).height()) {
      mh = $(this).height();
    }
  });
  $(".blog-post-heading-col-4").height(mh);

  $(".testimonial-ul").each(function () {
    if (mh_2 < $(this).height()) {
      mh_2 = $(this).height();
    }
  });
  $(".testimonial-ul").height(mh_2);
}

var partner_cr_height = $(".owl-carousel-home-partners").children(
  ".owl-stage-outer"
);
var partner_cr_next = $(".owl-carousel-home-partners")
  .children(".owl-nav")
  .children(".owl-prev");
var partner_cr_prev = $(".owl-carousel-home-partners")
  .children(".owl-nav")
  .children(".owl-next");

partner_cr_next.height(partner_cr_height.height());
partner_cr_prev.height(partner_cr_height.height());

var faq_accordion = document.querySelectorAll(
  ".faq-accordions .accordion-item .accordion-collapse"
);
var faq_accordion_button = document.querySelectorAll(
  ".faq-accordions .accordion-item h2 button"
);
var faq_accordion_collapse = document.querySelectorAll(
  ".faq-accordions .accordion-item .accordion-collapse"
);
var faq_accordion_new = document.querySelectorAll(
  ".faq-accordions-new .accordion-item .accordion-collapse"
);
var faq_accordion_button_new = document.querySelectorAll(
  ".faq-accordions-new .accordion-item h2 button"
);
var faq_accordion_collapse_new = document.querySelectorAll(
  ".faq-accordions-new .accordion-item .accordion-collapse"
);

var technology_accordion = document.querySelectorAll(
  ".technology-accordions .accordion-item .accordion-collapse"
);
var technology_accordion_button = document.querySelectorAll(
  ".technology-accordions .accordion-item h2 button"
);
var technology_accordion_collapse = document.querySelectorAll(
  ".technology-accordions .accordion-item .accordion-collapse"
);

for (let x = 0; x < faq_accordion.length; x++) {
  if (faq_accordion[0]) {
    faq_accordion[0].classList.add("show");
  }
  faq_accordion_button[x].setAttribute("aria-expanded", "false");
  faq_accordion_button[x].classList.add("collapsed");
  if (faq_accordion_button[0]) {
    faq_accordion_button[0].setAttribute("aria-expanded", "true");
    faq_accordion_button[0].classList.remove("collapsed");
  }
  faq_accordion_button[x].setAttribute("data-bs-target", `#collapse-${x}`);
  faq_accordion_collapse[x].setAttribute("id", `collapse-${x}`);
}

for (let xz = 0; xz < technology_accordion.length; xz++) {
  if (technology_accordion[0]) {
    technology_accordion[0].classList.add("show");
  }
  technology_accordion_button[xz].setAttribute("aria-expanded", "false");
  technology_accordion_button[xz].classList.add("collapsed");
  if (technology_accordion_button[0]) {
    technology_accordion_button[0].setAttribute("aria-expanded", "true");
    technology_accordion_button[0].classList.remove("collapsed");
  }
  technology_accordion_button[xz].setAttribute(
    "data-bs-target",
    `#collapse-${xz}`
  );
  technology_accordion_collapse[xz].setAttribute("id", `collapse-${xz}`);
}

for (let xx = 0; xx < faq_accordion_new.length; xx++) {
  faq_accordion_button_new[xx].setAttribute(
    "data-bs-target",
    `#collapse-new-${xx}`
  );
  faq_accordion_collapse_new[xx].setAttribute("id", `collapse-new-${xx}`);
  if (faq_accordion_new[0]) {
    faq_accordion_new[0].classList.add("show");
  }
  faq_accordion_button_new[xx].setAttribute("aria-expanded", "false");
  faq_accordion_button_new[xx].classList.add("collapsed");
  if (faq_accordion_button_new[0]) {
    faq_accordion_button_new[0].setAttribute("aria-expanded", "true");
    faq_accordion_button_new[0].classList.remove("collapsed");
  }
}

if (document.querySelector("#carouselExampleIndicators-2")) {
  function create_indicators() {
    var a = 0;
    do {
      a += 1;
      partners_carousal_indicator_sec.innerHTML += `<button type="button" class="cr-2-ind-btn" data-bs-target="#carouselExampleIndicators-2" data-bs-slide-to=${
        a - 1
      } aria-label="Slide ${a - 1}"></button>`;
    } while (a < products_items.length);
    setTimeout(options__, 1000);
  }
  function options__() {
    var cr_2 = $(".cr-2-ind-btn");
    for (let q = 0; q < cr_2.length; q++) {
      if (cr_2[0]) {
        cr_2[0].classList.add("active");
      }
    }
    document.querySelector("#carouselExampleIndicators-2");
  }
  setTimeout(create_indicators, 1000);
}

var tab_bar_btns = document.querySelectorAll("#main-services-tab");

for (tb = 0; tb < tab_bar_btns.length; tb++) {
  console.log(this.value);
}

var mailpoet_text = document.querySelector(".mailpoet_text");
if (mailpoet_text) {
  mailpoet_text.placeholder = "Your Email Address Here";
}

$(".mailpoet_paragraph").append(
  '<i class="fas fa-envelope input-envelope"></i>'
);

var enve_icon = document.querySelectorAll(
  ".mailpoet_form .mailpoet_paragraph .fa-envelope"
);

for (let ei = 0; ei < enve_icon.length; ei++) {
  enve_icon[1].style.display = "none";
}

var back_to_top = document.getElementById("back-to-top");
window.onscroll = function () {
  scrollFunction();
};
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
