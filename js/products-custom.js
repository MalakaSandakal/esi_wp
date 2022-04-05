$(document).ready(function(){

  if (window.location.href.indexOf("products") > -1) {    

    $('.single-category').first().addClass('active');
  
    $.ajaxSetup({
      cache:false,
      global: false,
      beforeSend: function () {
          $('.cat-slider-sec').css('opacity','0');
          var preloader_gif = $(".category-single-full-details").attr("id")
          $(".category-single-full-details").html(
            `<div class='spinner' style='width:100vw;height:1000px;text-align:center'>
              <div class='spinner-gif text-center'>
                <img src='${preloader_gif}'>               
              </div>
            </div>`
          );
      },
      complete: function () {
          $('.cat-slider-sec').css('opacity','1');
          
      }
    });
    
    var first_load = $(".single-category").first().attr("id");

    $(".category-single-full-details").load(first_load);
  
    $(".single-category").click(function(){
  
        $('.single-category').removeClass('active');
  
        $(this).addClass('active');
  
        var post_link = $(this).attr("id");
        
        $(".category-single-full-details").load(post_link);      
  
        return false;
    });
  
    $(".single-category").click(function(){
      switch($( ".single-category" ).index(this)){
        case 0:
          $('.cat-slider-sec').removeClass('display');
          $(".category-1-slider-sec").addClass('display');
          $('.bam-specs').removeClass('active');
          $(".nano-bam-1").addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-1-slider-top-sec-1').addClass('active');
          break;
        case 1:
          $('.cat-slider-sec').removeClass('display');
          $(".category-2-slider-sec").addClass('display');
          $('.bam-specs').removeClass('active');
          $(".nano-bam-2").addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-2-slider-top-sec-1').addClass('active');
          break;
        case 2:
          $('.cat-slider-sec').removeClass('display');
          $(".category-3-slider-sec").addClass('display');
          $('.bam-specs').removeClass('active');
          $(".nano-bam-3").addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-3-slider-top-sec-1').addClass('active');
          break;
        case 3:
          $('.cat-slider-sec').removeClass('display');
          $(".category-4-slider-sec").addClass('display');
          $('.bam-specs').removeClass('active');
          $(".nano-bam-4").addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-4-slider-top-sec-1').addClass('active');
          break;
        case 4:
          $('.cat-slider-sec').removeClass('display');
          $(".category-5-slider-sec").addClass('display');
          $('.bam-specs').removeClass('active');
          $(".nano-bam-5").addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-5-slider-top-sec-1').addClass('active');
          break;
        case 5:
          $('.cat-slider-sec').removeClass('display');
          $(".category-6-slider-sec").addClass('display');
          $('.bam-specs').removeClass('active');
          $(".nano-bam-6").addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-6-slider-top-sec-1').addClass('active');
          break;
        case 6:
          $('.cat-slider-sec').removeClass('display');
          $(".category-7-slider-sec").addClass('display');
          $('.bam-specs').removeClass('active');
          $(".nano-bam-7").addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-7-slider-top-sec-1').addClass('active');
          break;
        case 7:
          $('.cat-slider-sec').removeClass('display');
          $(".category-8-slider-sec").addClass('display');
          $('.bam-specs').removeClass('active');
          $(".nano-bam-8").addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-8-slider-top-sec-1').addClass('active');
          break;  
        default:
          console.log("other")
          break;
  
        }
    })
      /* begin : category 1 details */
      var number_1 = 1;
      var slider_1 = document.getElementById("custom-slider-bar-"+`${number_1}`);
      var battery_sec_1 = document.querySelectorAll('#battery-'+`${number_1}`);
      var tab_bar_pro_specs_1 = document.querySelectorAll('#bam-button-container-'+`${number_1}`+' .row .col');
      var battery_capacity_1 = document.querySelector('.battery-capacity-'+`${number_1}`);
      var slider_bg_1= "linear-gradient(to right, rgb(65, 201, 107) 0%, rgb(246, 253, 100) 1%, rgb(254, 87, 70) 2%, rgb(37, 55, 69) 3%)";
      var slider_bg_2= "linear-gradient(to right, rgb(65, 201, 107) 0%, rgb(246, 253, 100) 14%, rgb(254, 87, 70) 25%, rgb(37, 55, 69) 8%)";
      var slider_bg_3= "linear-gradient(to right, rgb(65, 201, 107) 0%, rgb(246, 253, 100) 31%, rgb(254, 87, 70) 50%, rgb(37, 55, 69) 8%)";
      var slider_bg_4= "linear-gradient(to right, rgb(65, 201, 107) 0%, rgb(246, 253, 100) 35%, rgb(254, 87, 70) 75%, rgb(37, 55, 69) 8%)";
      var slider_bg_5= "linear-gradient(to right, rgb(65, 201, 107) 0%, rgb(246, 253, 100) 50%, rgb(254, 87, 70) 95%, rgb(37, 55, 69) 8%)";
      slider_1.oninput = function() {
        if(this.value == "0"){
          for(var i=0;i<battery_sec_1.length;i++){
            battery_sec_1[i].classList.remove('display-sec');
            battery_sec_1[0].classList.add('display-sec');
            battery_capacity_1.innerHTML='25KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_1.length;i++){
            tab_bar_pro_specs_1[i].classList.remove('active');
            tab_bar_pro_specs_1[0].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.nano-bam-'+`${number_1}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_1}`+'-slider-top-sec-1').addClass('active');
          this.style.background = slider_bg_1;
        }else if(this.value == "1"){
          for(var i=0;i<battery_sec_1.length;i++){
            battery_sec_1[i].classList.remove('display-sec');
            battery_sec_1[0].classList.add('display-sec');
            battery_sec_1[1].classList.add('display-sec');
            battery_capacity_1.innerHTML='50KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_1.length;i++){
            tab_bar_pro_specs_1[i].classList.remove('active');
            tab_bar_pro_specs_1[1].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.micro-bam-'+`${number_1}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_1}`+'-slider-top-sec-2').addClass('active');
          this.style.background = slider_bg_2;        
        }
        else if(this.value == "2"){
          for(var i=0;i<battery_sec_1.length;i++){
            battery_sec_1[i].classList.remove('display-sec');
            battery_sec_1[0].classList.add('display-sec');
            battery_sec_1[1].classList.add('display-sec');
            battery_sec_1[2].classList.add('display-sec');
            battery_capacity_1.innerHTML='75KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_1.length;i++){
            tab_bar_pro_specs_1[i].classList.remove('active');
            tab_bar_pro_specs_1[2].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.mini-bam-'+`${number_1}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_1}`+'-slider-top-sec-3').addClass('active');
          this.style.background = slider_bg_3;        
        }
        else if(this.value == "3"){
          for(var i=0;i<battery_sec_1.length;i++){
            battery_sec_1[i].classList.remove('display-sec');
            battery_sec_1[0].classList.add('display-sec');
            battery_sec_1[1].classList.add('display-sec');
            battery_sec_1[2].classList.add('display-sec');
            battery_sec_1[3].classList.add('display-sec');
            battery_capacity_1.innerHTML='100KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_1.length;i++){
            tab_bar_pro_specs_1[i].classList.remove('active');
            tab_bar_pro_specs_1[3].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.bam-'+`${number_1}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_1}`+'-slider-top-sec-4').addClass('active');
          this.style.background = slider_bg_4; 
        }
        else if(this.value == "4"){
          for(var i=0;i<battery_sec_1.length;i++){
            battery_sec_1[i].classList.remove('display-sec');
            battery_sec_1[0].classList.add('display-sec');
            battery_sec_1[1].classList.add('display-sec');
            battery_sec_1[2].classList.add('display-sec');
            battery_sec_1[3].classList.add('display-sec');
            battery_sec_1[4].classList.add('display-sec');
            battery_capacity_1.innerHTML='125KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_1.length;i++){
            tab_bar_pro_specs_1[i].classList.remove('active');
            tab_bar_pro_specs_1[4].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.mega-bam-'+`${number_1}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_1}`+'-slider-top-sec-5').addClass('active');
          this.style.background = slider_bg_5; 
        }
      }
      $('.sec-'+`${number_1}`+'-col-1-bam-button').click(function(){      
        $("#custom-slider-bar-"+`${number_1}`).val("0");      
        $('.tab-sec-'+`${number_1}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.nano-bam-'+`${number_1}`).addClass('active');
        for(var i=0;i<battery_sec_1.length;i++){
          battery_sec_1[i].classList.remove('display-sec');
          battery_sec_1[0].classList.add('display-sec');
          battery_capacity_1.innerHTML='25KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_1}`+'-slider-top-sec-1').addClass('active');
        slider_1.style.background = slider_bg_1;
      });
      $('.sec-'+`${number_1}`+'-col-2-bam-button').click(function(){
        $("#custom-slider-bar-1").val("1"); 
        $('.tab-sec-'+`${number_1}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.micro-bam-'+`${number_1}`).addClass('active');
        for(var i=0;i<battery_sec_1.length;i++){
          battery_sec_1[i].classList.remove('display-sec');
          battery_sec_1[0].classList.add('display-sec');
          battery_sec_1[1].classList.add('display-sec');
          battery_capacity_1.innerHTML='50KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_1}`+'-slider-top-sec-2').addClass('active');
        slider_1.style.background = slider_bg_2;
      });
      $('.sec-'+`${number_1}`+'-col-3-bam-button').click(function(){
        $("#custom-slider-bar-"+`${number_1}`).val("2")
        $('.tab-sec-'+`${number_1}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.mini-bam-'+`${number_1}`).addClass('active');
        for(var i=0;i<battery_sec_1.length;i++){
          battery_sec_1[i].classList.remove('display-sec');
          battery_sec_1[0].classList.add('display-sec');
          battery_sec_1[1].classList.add('display-sec');
          battery_sec_1[2].classList.add('display-sec');
          battery_capacity_1.innerHTML='75KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_1}`+'-slider-top-sec-3').addClass('active');
        slider_1.style.background = slider_bg_3;
      });
      $('.sec-'+`${number_1}`+'-col-4-bam-button').click(function(){
        $("#custom-slider-bar-"+`${number_1}`).val("3")
        $('.tab-sec-'+`${number_1}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.bam-'+`${number_1}`).addClass('active');
        for(var i=0;i<battery_sec_1.length;i++){
          battery_sec_1[i].classList.remove('display-sec');
          battery_sec_1[0].classList.add('display-sec');
          battery_sec_1[1].classList.add('display-sec');
          battery_sec_1[2].classList.add('display-sec');
          battery_sec_1[3].classList.add('display-sec');
          battery_capacity_1.innerHTML='100KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_1}`+'-slider-top-sec-4').addClass('active');
        slider_1.style.background = slider_bg_4;
      });
      $('.sec-'+`${number_1}`+'-col-5-bam-button').click(function(){
        $("#custom-slider-bar-"+`${number_1}`).val("4")
        $('.tab-sec-'+`${number_1}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.mega-bam-'+`${number_1}`).addClass('active');
        for(var i=0;i<battery_sec_1.length;i++){
          battery_sec_1[i].classList.remove('display-sec');
          battery_sec_1[0].classList.add('display-sec');
          battery_sec_1[1].classList.add('display-sec');
          battery_sec_1[2].classList.add('display-sec');
          battery_sec_1[3].classList.add('display-sec');
          battery_sec_1[4].classList.add('display-sec');
          battery_capacity_1.innerHTML='125KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_1}`+'-slider-top-sec-5').addClass('active');
        slider_1.style.background = slider_bg_5;
      });
      /* end : category 1 details */
  
      /* begin : category 2 details */
      var number_2 = 2;
      var slider_2 = document.getElementById("custom-slider-bar-"+`${number_2}`);
      var battery_sec_2 = document.querySelectorAll('#battery-'+`${number_2}`);
      var tab_bar_pro_specs_2 = document.querySelectorAll('#bam-button-container-'+`${number_2}`+' .row .col');
      var battery_capacity_2 = document.querySelector('.battery-capacity-'+`${number_2}`);
      slider_2.oninput = function() {
       
  
        if(this.value == "0"){
          for(var i=0;i<battery_sec_2.length;i++){
            battery_sec_2[i].classList.remove('display-sec');
            battery_sec_2[0].classList.add('display-sec');
            battery_capacity_2.innerHTML='25KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_2.length;i++){
            tab_bar_pro_specs_2[i].classList.remove('active');
            tab_bar_pro_specs_2[0].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.nano-bam-'+`${number_2}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_2}`+'-slider-top-sec-1').addClass('active');
          this.style.background = slider_bg_1;
        }else if(this.value == "1"){
          for(var i=0;i<battery_sec_2.length;i++){
            battery_sec_2[i].classList.remove('display-sec');
            battery_sec_2[0].classList.add('display-sec');
            battery_sec_2[1].classList.add('display-sec');
            battery_capacity_2.innerHTML='50KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_2.length;i++){
            tab_bar_pro_specs_2[i].classList.remove('active');
            tab_bar_pro_specs_2[1].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.micro-bam-'+`${number_2}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_2}`+'-slider-top-sec-2').addClass('active');
          this.style.background = slider_bg_2;        
        }
        else if(this.value == "2"){
          for(var i=0;i<battery_sec_2.length;i++){
            battery_sec_2[i].classList.remove('display-sec');
            battery_sec_2[0].classList.add('display-sec');
            battery_sec_2[1].classList.add('display-sec');
            battery_sec_2[2].classList.add('display-sec');
            battery_capacity_2.innerHTML='75KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_2.length;i++){
            tab_bar_pro_specs_2[i].classList.remove('active');
            tab_bar_pro_specs_2[2].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.mini-bam-'+`${number_2}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_2}`+'-slider-top-sec-3').addClass('active');
          this.style.background = slider_bg_3;        
        }
        else if(this.value == "3"){
          for(var i=0;i<battery_sec_2.length;i++){
            battery_sec_2[i].classList.remove('display-sec');
            battery_sec_2[0].classList.add('display-sec');
            battery_sec_2[1].classList.add('display-sec');
            battery_sec_2[2].classList.add('display-sec');
            battery_sec_2[3].classList.add('display-sec');
            battery_capacity_2.innerHTML='100KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_2.length;i++){
            tab_bar_pro_specs_2[i].classList.remove('active');
            tab_bar_pro_specs_2[3].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.bam-'+`${number_2}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_2}`+'-slider-top-sec-4').addClass('active');
          this.style.background = slider_bg_4; 
        }
        else if(this.value == "4"){
          for(var i=0;i<battery_sec_2.length;i++){
            battery_sec_2[i].classList.remove('display-sec');
            battery_sec_2[0].classList.add('display-sec');
            battery_sec_2[1].classList.add('display-sec');
            battery_sec_2[2].classList.add('display-sec');
            battery_sec_2[3].classList.add('display-sec');
            battery_sec_2[4].classList.add('display-sec');
            battery_capacity_2.innerHTML='125KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_2.length;i++){
            tab_bar_pro_specs_2[i].classList.remove('active');
            tab_bar_pro_specs_2[4].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.mega-bam-'+`${number_2}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_2}`+'-slider-top-sec-5').addClass('active');
          this.style.background = slider_bg_5; 
        }
      }
      $('.sec-'+`${number_2}`+'-col-1-bam-button').click(function(){      
        $("#custom-slider-bar-"+`${number_2}`).val("0");      
        $('.tab-sec-'+`${number_2}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.nano-bam-'+`${number_2}`).addClass('active');
        for(var i=0;i<battery_sec_2.length;i++){
          battery_sec_2[i].classList.remove('display-sec');
          battery_sec_2[0].classList.add('display-sec');
          battery_capacity_2.innerHTML='25KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_2}`+'-slider-top-sec-1').addClass('active');
        slider_2.style.background = slider_bg_1;
      });
      $('.sec-'+`${number_2}`+'-col-2-bam-button').click(function(){
        $("#custom-slider-bar-"+`${number_2}`).val("1"); 
        $('.tab-sec-'+`${number_2}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.micro-bam-'+`${number_2}`).addClass('active');
        for(var i=0;i<battery_sec_2.length;i++){
          battery_sec_2[i].classList.remove('display-sec');
          battery_sec_2[0].classList.add('display-sec');
          battery_sec_2[1].classList.add('display-sec');
          battery_capacity_2.innerHTML='50KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_2}`+'-slider-top-sec-2').addClass('active');
        slider_2.style.background = slider_bg_2;
      });
      $('.sec-'+`${number_2}`+'-col-3-bam-button').click(function(){
        $("#custom-slider-bar-"+`${number_2}`).val("2")
        $('.tab-sec-'+`${number_2}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.mini-bam-'+`${number_2}`).addClass('active');
        for(var i=0;i<battery_sec_2.length;i++){
          battery_sec_2[i].classList.remove('display-sec');
          battery_sec_2[0].classList.add('display-sec');
          battery_sec_2[1].classList.add('display-sec');
          battery_sec_2[2].classList.add('display-sec');
          battery_capacity_2.innerHTML='75KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_2}`+'-slider-top-sec-3').addClass('active');
        slider_2.style.background = slider_bg_3;
      });
      $('.sec-'+`${number_2}`+'-col-4-bam-button').click(function(){
        $("#custom-slider-bar-"+`${number_2}`).val("3")
        $('.tab-sec-'+`${number_2}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.bam-'+`${number_2}`).addClass('active');
        for(var i=0;i<battery_sec_2.length;i++){
          battery_sec_2[i].classList.remove('display-sec');
          battery_sec_2[0].classList.add('display-sec');
          battery_sec_2[1].classList.add('display-sec');
          battery_sec_2[2].classList.add('display-sec');
          battery_sec_2[3].classList.add('display-sec');
          battery_capacity_2.innerHTML='100KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_2}`+'-slider-top-sec-4').addClass('active');
        slider_2.style.background = slider_bg_4;
      });
      $('.sec-'+`${number_2}`+'-col-5-bam-button').click(function(){
        $("#custom-slider-bar-"+`${number_2}`).val("4")
        $('.tab-sec-'+`${number_2}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.mega-bam-'+`${number_2}`).addClass('active');
        for(var i=0;i<battery_sec_2.length;i++){
          battery_sec_2[i].classList.remove('display-sec');
          battery_sec_2[0].classList.add('display-sec');
          battery_sec_2[1].classList.add('display-sec');
          battery_sec_2[2].classList.add('display-sec');
          battery_sec_2[3].classList.add('display-sec');
          battery_sec_2[4].classList.add('display-sec');
          battery_capacity_2.innerHTML='125KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_2}`+'-slider-top-sec-5').addClass('active');
        slider_2.style.background = slider_bg_5;
      });
      /* end : category 2 details */
    
      /* begin : category 3 details */
      var number_3 = 3;
      var slider_3 = document.getElementById("custom-slider-bar-"+`${number_3}`);
      var battery_sec_3 = document.querySelectorAll('#battery-'+`${number_3}`);
      var tab_bar_pro_specs_3 = document.querySelectorAll('#bam-button-container-'+`${number_3}`+' .row .col');
      var battery_capacity_3 = document.querySelector('.battery-capacity-'+`${number_3}`);
      slider_3.oninput = function() {
       
  
        if(this.value == "0"){
          for(var i=0;i<battery_sec_3.length;i++){
            battery_sec_3[i].classList.remove('display-sec');
            battery_sec_3[0].classList.add('display-sec');
            battery_capacity_3.innerHTML='25KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_3.length;i++){
            tab_bar_pro_specs_3[i].classList.remove('active');
            tab_bar_pro_specs_3[0].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.nano-bam-'+`${number_3}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_3}`+'-slider-top-sec-1').addClass('active');
          this.style.background = slider_bg_1;
        }else if(this.value == "1"){
          for(var i=0;i<battery_sec_3.length;i++){
            battery_sec_3[i].classList.remove('display-sec');
            battery_sec_3[0].classList.add('display-sec');
            battery_sec_3[1].classList.add('display-sec');
            battery_capacity_3.innerHTML='50KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_3.length;i++){
            tab_bar_pro_specs_3[i].classList.remove('active');
            tab_bar_pro_specs_3[1].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.micro-bam-'+`${number_3}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_3}`+'-slider-top-sec-2').addClass('active');
          this.style.background = slider_bg_2;        
        }
        else if(this.value == "2"){
          for(var i=0;i<battery_sec_3.length;i++){
            battery_sec_3[i].classList.remove('display-sec');
            battery_sec_3[0].classList.add('display-sec');
            battery_sec_3[1].classList.add('display-sec');
            battery_sec_3[2].classList.add('display-sec');
            battery_capacity_3.innerHTML='75KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_3.length;i++){
            tab_bar_pro_specs_3[i].classList.remove('active');
            tab_bar_pro_specs_3[2].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.mini-bam-'+`${number_3}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_3}`+'-slider-top-sec-3').addClass('active');
          this.style.background = slider_bg_3;        
        }
        else if(this.value == "3"){
          for(var i=0;i<battery_sec_3.length;i++){
            battery_sec_3[i].classList.remove('display-sec');
            battery_sec_3[0].classList.add('display-sec');
            battery_sec_3[1].classList.add('display-sec');
            battery_sec_3[2].classList.add('display-sec');
            battery_sec_3[3].classList.add('display-sec');
            battery_capacity_3.innerHTML='100KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_3.length;i++){
            tab_bar_pro_specs_3[i].classList.remove('active');
            tab_bar_pro_specs_3[3].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.bam-'+`${number_3}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_3}`+'-slider-top-sec-4').addClass('active');
          this.style.background = slider_bg_4; 
        }
        else if(this.value == "4"){
          for(var i=0;i<battery_sec_3.length;i++){
            battery_sec_3[i].classList.remove('display-sec');
            battery_sec_3[0].classList.add('display-sec');
            battery_sec_3[1].classList.add('display-sec');
            battery_sec_3[2].classList.add('display-sec');
            battery_sec_3[3].classList.add('display-sec');
            battery_sec_3[4].classList.add('display-sec');
            battery_capacity_3.innerHTML='125KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_3.length;i++){
            tab_bar_pro_specs_3[i].classList.remove('active');
            tab_bar_pro_specs_3[4].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.mega-bam-'+`${number_3}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_3}`+'-slider-top-sec-5').addClass('active');
          this.style.background = slider_bg_5; 
        }
      }
      $('.sec-'+`${number_3}`+'-col-1-bam-button').click(function(){      
        $("#custom-slider-bar-"+`${number_3}`).val("0");      
        $('.tab-sec-'+`${number_3}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.nano-bam-'+`${number_3}`).addClass('active');
        for(var i=0;i<battery_sec_3.length;i++){
          battery_sec_3[i].classList.remove('display-sec');
          battery_sec_3[0].classList.add('display-sec');
          battery_capacity_3.innerHTML='25KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_3}`+'-slider-top-sec-1').addClass('active');
        slider_3.style.background = slider_bg_1;
      });
      $('.sec-'+`${number_3}`+'-col-2-bam-button').click(function(){
        $("#custom-slider-bar-"+`${number_3}`).val("1"); 
        $('.tab-sec-'+`${number_3}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.micro-bam-'+`${number_3}`).addClass('active');
        for(var i=0;i<battery_sec_3.length;i++){
          battery_sec_3[i].classList.remove('display-sec');
          battery_sec_3[0].classList.add('display-sec');
          battery_sec_3[1].classList.add('display-sec');
          battery_capacity_3.innerHTML='50KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_3}`+'-slider-top-sec-2').addClass('active');
        slider_3.style.background = slider_bg_2;
      });
      $('.sec-'+`${number_3}`+'-col-3-bam-button').click(function(){
        $("#custom-slider-bar-"+`${number_3}`).val("2")
        $('.tab-sec-'+`${number_3}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.mini-bam-'+`${number_3}`).addClass('active');
        for(var i=0;i<battery_sec_3.length;i++){
          battery_sec_3[i].classList.remove('display-sec');
          battery_sec_3[0].classList.add('display-sec');
          battery_sec_3[1].classList.add('display-sec');
          battery_sec_3[2].classList.add('display-sec');
          battery_capacity_3.innerHTML='75KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_3}`+'-slider-top-sec-3').addClass('active');
        slider_3.style.background = slider_bg_3;
      });
      $('.sec-'+`${number_3}`+'-col-4-bam-button').click(function(){
        $("#custom-slider-bar-"+`${number_3}`).val("3")
        $('.tab-sec-'+`${number_3}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.bam-'+`${number_3}`).addClass('active');
        for(var i=0;i<battery_sec_3.length;i++){
          battery_sec_3[i].classList.remove('display-sec');
          battery_sec_3[0].classList.add('display-sec');
          battery_sec_3[1].classList.add('display-sec');
          battery_sec_3[2].classList.add('display-sec');
          battery_sec_3[3].classList.add('display-sec');
          battery_capacity_3.innerHTML='100KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_3}`+'-slider-top-sec-4').addClass('active');
        slider_3.style.background = slider_bg_4;
      });
      $('.sec-'+`${number_3}`+'-col-5-bam-button').click(function(){
        $("#custom-slider-bar-"+`${number_3}`).val("4")
        $('.tab-sec-'+`${number_3}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.mega-bam-'+`${number_3}`).addClass('active');
        for(var i=0;i<battery_sec_3.length;i++){
          battery_sec_3[i].classList.remove('display-sec');
          battery_sec_3[0].classList.add('display-sec');
          battery_sec_3[1].classList.add('display-sec');
          battery_sec_3[2].classList.add('display-sec');
          battery_sec_3[3].classList.add('display-sec');
          battery_sec_3[4].classList.add('display-sec');
          battery_capacity_3.innerHTML='125KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_3}`+'-slider-top-sec-5').addClass('active');
        slider_3.style.background = slider_bg_5;
      });
      /* end : category 3 details */

      /* begin : category 4 details */
      var number_4 = 4;
      var slider_4 = document.getElementById("custom-slider-bar-"+`${number_4}`);
      var battery_sec_4 = document.querySelectorAll('#battery-'+`${number_4}`);
      var tab_bar_pro_specs_4 = document.querySelectorAll('#bam-button-container-'+`${number_4}`+' .row .col');
      var battery_capacity_4 = document.querySelector('.battery-capacity-'+`${number_4}`);
      slider_4.oninput = function() {
       
  
        if(this.value == "0"){
          for(var i=0;i<battery_sec_4.length;i++){
            battery_sec_4[i].classList.remove('display-sec');
            battery_sec_4[0].classList.add('display-sec');
            battery_capacity_4.innerHTML='25KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_4.length;i++){
            tab_bar_pro_specs_4[i].classList.remove('active');
            tab_bar_pro_specs_4[0].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.nano-bam-'+`${number_4}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_4}`+'-slider-top-sec-1').addClass('active');
          this.style.background = slider_bg_1;
        }else if(this.value == "1"){
          for(var i=0;i<battery_sec_4.length;i++){
            battery_sec_4[i].classList.remove('display-sec');
            battery_sec_4[0].classList.add('display-sec');
            battery_sec_4[1].classList.add('display-sec');
            battery_capacity_4.innerHTML='50KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_4.length;i++){
            tab_bar_pro_specs_4[i].classList.remove('active');
            tab_bar_pro_specs_4[1].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.micro-bam-'+`${number_4}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_4}`+'-slider-top-sec-2').addClass('active');
          this.style.background = slider_bg_2;        
        }
        else if(this.value == "2"){
          for(var i=0;i<battery_sec_4.length;i++){
            battery_sec_4[i].classList.remove('display-sec');
            battery_sec_4[0].classList.add('display-sec');
            battery_sec_4[1].classList.add('display-sec');
            battery_sec_4[2].classList.add('display-sec');
            battery_capacity_4.innerHTML='75KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_4.length;i++){
            tab_bar_pro_specs_4[i].classList.remove('active');
            tab_bar_pro_specs_4[2].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.mini-bam-'+`${number_4}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_4}`+'-slider-top-sec-3').addClass('active');
          this.style.background = slider_bg_3;        
        }
        else if(this.value == "3"){
          for(var i=0;i<battery_sec_4.length;i++){
            battery_sec_4[i].classList.remove('display-sec');
            battery_sec_4[0].classList.add('display-sec');
            battery_sec_4[1].classList.add('display-sec');
            battery_sec_4[2].classList.add('display-sec');
            battery_sec_4[3].classList.add('display-sec');
            battery_capacity_4.innerHTML='100KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_4.length;i++){
            tab_bar_pro_specs_4[i].classList.remove('active');
            tab_bar_pro_specs_4[3].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.bam-'+`${number_4}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_4}`+'-slider-top-sec-4').addClass('active');
          this.style.background = slider_bg_4; 
        }
        else if(this.value == "4"){
          for(var i=0;i<battery_sec_4.length;i++){
            battery_sec_4[i].classList.remove('display-sec');
            battery_sec_4[0].classList.add('display-sec');
            battery_sec_4[1].classList.add('display-sec');
            battery_sec_4[2].classList.add('display-sec');
            battery_sec_4[3].classList.add('display-sec');
            battery_sec_4[4].classList.add('display-sec');
            battery_capacity_4.innerHTML='125KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_4.length;i++){
            tab_bar_pro_specs_4[i].classList.remove('active');
            tab_bar_pro_specs_4[4].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.mega-bam-'+`${number_4}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_4}`+'-slider-top-sec-5').addClass('active');
          this.style.background = slider_bg_5; 
        }
      }
      $('.sec-'+`${number_4}`+'-col-1-bam-button').click(function(){      
        $("#custom-slider-bar-"+`${number_4}`).val("0");      
        $('.tab-sec-'+`${number_4}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.nano-bam-'+`${number_4}`).addClass('active');
        for(var i=0;i<battery_sec_4.length;i++){
          battery_sec_4[i].classList.remove('display-sec');
          battery_sec_4[0].classList.add('display-sec');
          battery_capacity_4.innerHTML='25KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_4}`+'-slider-top-sec-1').addClass('active');
        slider_4.style.background = slider_bg_1;
      });
      $('.sec-'+`${number_4}`+'-col-2-bam-button').click(function(){
        $("#custom-slider-bar-"+`${number_4}`).val("1"); 
        $('.tab-sec-'+`${number_4}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.micro-bam-'+`${number_4}`).addClass('active');
        for(var i=0;i<battery_sec_4.length;i++){
          battery_sec_4[i].classList.remove('display-sec');
          battery_sec_4[0].classList.add('display-sec');
          battery_sec_4[1].classList.add('display-sec');
          battery_capacity_4.innerHTML='50KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_4}`+'-slider-top-sec-2').addClass('active');
        slider_4.style.background = slider_bg_2;
      });
      $('.sec-'+`${number_4}`+'-col-3-bam-button').click(function(){
        $("#custom-slider-bar-"+`${number_4}`).val("2")
        $('.tab-sec-'+`${number_4}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.mini-bam-'+`${number_4}`).addClass('active');
        for(var i=0;i<battery_sec_4.length;i++){
          battery_sec_4[i].classList.remove('display-sec');
          battery_sec_4[0].classList.add('display-sec');
          battery_sec_4[1].classList.add('display-sec');
          battery_sec_4[2].classList.add('display-sec');
          battery_capacity_4.innerHTML='75KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_4}`+'-slider-top-sec-3').addClass('active');
        slider_4.style.background = slider_bg_3;
      });
      $('.sec-'+`${number_4}`+'-col-4-bam-button').click(function(){
        $("#custom-slider-bar-"+`${number_4}`).val("3")
        $('.tab-sec-'+`${number_4}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.bam-'+`${number_4}`).addClass('active');
        for(var i=0;i<battery_sec_4.length;i++){
          battery_sec_4[i].classList.remove('display-sec');
          battery_sec_4[0].classList.add('display-sec');
          battery_sec_4[1].classList.add('display-sec');
          battery_sec_4[2].classList.add('display-sec');
          battery_sec_4[3].classList.add('display-sec');
          battery_capacity_4.innerHTML='100KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_4}`+'-slider-top-sec-4').addClass('active');
        slider_4.style.background = slider_bg_4;
      });
      $('.sec-'+`${number_4}`+'-col-5-bam-button').click(function(){
        $("#custom-slider-bar-"+`${number_4}`).val("4")
        $('.tab-sec-'+`${number_4}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.mega-bam-'+`${number_4}`).addClass('active');
        for(var i=0;i<battery_sec_4.length;i++){
          battery_sec_4[i].classList.remove('display-sec');
          battery_sec_4[0].classList.add('display-sec');
          battery_sec_4[1].classList.add('display-sec');
          battery_sec_4[2].classList.add('display-sec');
          battery_sec_4[3].classList.add('display-sec');
          battery_sec_4[4].classList.add('display-sec');
          battery_capacity_4.innerHTML='125KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_4}`+'-slider-top-sec-5').addClass('active');
        slider_4.style.background = slider_bg_5;
      });
      /* end : category 4 details */

      /* begin : category 5 details */
      var number_5 = 5;
      var slider_5 = document.getElementById("custom-slider-bar-"+`${number_5}`);
      var battery_sec_5 = document.querySelectorAll('#battery-'+`${number_5}`);
      var tab_bar_pro_specs_5 = document.querySelectorAll('#bam-button-container-'+`${number_5}`+' .row .col');
      var battery_capacity_5 = document.querySelector('.battery-capacity-'+`${number_5}`);
      slider_5.oninput = function() {
       
  
        if(this.value == "0"){
          for(var i=0;i<battery_sec_5.length;i++){
            battery_sec_5[i].classList.remove('display-sec');
            battery_sec_5[0].classList.add('display-sec');
            battery_capacity_5.innerHTML='25KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_5.length;i++){
            tab_bar_pro_specs_5[i].classList.remove('active');
            tab_bar_pro_specs_5[0].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.nano-bam-'+`${number_5}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_5}`+'-slider-top-sec-1').addClass('active');
          this.style.background = slider_bg_1;
        }else if(this.value == "1"){
          for(var i=0;i<battery_sec_5.length;i++){
            battery_sec_5[i].classList.remove('display-sec');
            battery_sec_5[0].classList.add('display-sec');
            battery_sec_5[1].classList.add('display-sec');
            battery_capacity_5.innerHTML='50KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_5.length;i++){
            tab_bar_pro_specs_5[i].classList.remove('active');
            tab_bar_pro_specs_5[1].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.micro-bam-'+`${number_5}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_5}`+'-slider-top-sec-2').addClass('active');
          this.style.background = slider_bg_2;        
        }
        else if(this.value == "2"){
          for(var i=0;i<battery_sec_5.length;i++){
            battery_sec_5[i].classList.remove('display-sec');
            battery_sec_5[0].classList.add('display-sec');
            battery_sec_5[1].classList.add('display-sec');
            battery_sec_5[2].classList.add('display-sec');
            battery_capacity_5.innerHTML='75KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_5.length;i++){
            tab_bar_pro_specs_5[i].classList.remove('active');
            tab_bar_pro_specs_5[2].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.mini-bam-'+`${number_5}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_5}`+'-slider-top-sec-3').addClass('active');
          this.style.background = slider_bg_3;        
        }
        else if(this.value == "3"){
          for(var i=0;i<battery_sec_5.length;i++){
            battery_sec_5[i].classList.remove('display-sec');
            battery_sec_5[0].classList.add('display-sec');
            battery_sec_5[1].classList.add('display-sec');
            battery_sec_5[2].classList.add('display-sec');
            battery_sec_5[3].classList.add('display-sec');
            battery_capacity_5.innerHTML='100KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_5.length;i++){
            tab_bar_pro_specs_5[i].classList.remove('active');
            tab_bar_pro_specs_5[3].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.bam-'+`${number_5}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_5}`+'-slider-top-sec-4').addClass('active');
          this.style.background = slider_bg_4; 
        }
        else if(this.value == "4"){
          for(var i=0;i<battery_sec_5.length;i++){
            battery_sec_5[i].classList.remove('display-sec');
            battery_sec_5[0].classList.add('display-sec');
            battery_sec_5[1].classList.add('display-sec');
            battery_sec_5[2].classList.add('display-sec');
            battery_sec_5[3].classList.add('display-sec');
            battery_sec_5[4].classList.add('display-sec');
            battery_capacity_5.innerHTML='125KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_5.length;i++){
            tab_bar_pro_specs_5[i].classList.remove('active');
            tab_bar_pro_specs_5[4].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.mega-bam-'+`${number_5}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_5}`+'-slider-top-sec-5').addClass('active');
          this.style.background = slider_bg_5; 
        }
      }
      $('.sec-'+`${number_5}`+'-col-1-bam-button').click(function(){      
        $("#custom-slider-bar-"+`${number_5}`).val("0");      
        $('.tab-sec-'+`${number_5}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.nano-bam-'+`${number_5}`).addClass('active');
        for(var i=0;i<battery_sec_5.length;i++){
          battery_sec_5[i].classList.remove('display-sec');
          battery_sec_5[0].classList.add('display-sec');
          battery_capacity_5.innerHTML='25KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_5}`+'-slider-top-sec-1').addClass('active');
        slider_5.style.background = slider_bg_1;
      });
      $('.sec-'+`${number_5}`+'-col-2-bam-button').click(function(){
        $("#custom-slider-bar-"+`${number_5}`).val("1"); 
        $('.tab-sec-'+`${number_5}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.micro-bam-'+`${number_5}`).addClass('active');
        for(var i=0;i<battery_sec_5.length;i++){
          battery_sec_5[i].classList.remove('display-sec');
          battery_sec_5[0].classList.add('display-sec');
          battery_sec_5[1].classList.add('display-sec');
          battery_capacity_5.innerHTML='50KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_5}`+'-slider-top-sec-2').addClass('active');
        slider_5.style.background = slider_bg_2;
      });
      $('.sec-'+`${number_5}`+'-col-3-bam-button').click(function(){
        $("#custom-slider-bar-"+`${number_5}`).val("2")
        $('.tab-sec-'+`${number_5}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.mini-bam-'+`${number_5}`).addClass('active');
        for(var i=0;i<battery_sec_5.length;i++){
          battery_sec_5[i].classList.remove('display-sec');
          battery_sec_5[0].classList.add('display-sec');
          battery_sec_5[1].classList.add('display-sec');
          battery_sec_5[2].classList.add('display-sec');
          battery_capacity_5.innerHTML='75KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_5}`+'-slider-top-sec-3').addClass('active');
        slider_5.style.background = slider_bg_3;
      });
      $('.sec-'+`${number_5}`+'-col-4-bam-button').click(function(){
        $("#custom-slider-bar-"+`${number_5}`).val("3")
        $('.tab-sec-'+`${number_5}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.bam-'+`${number_5}`).addClass('active');
        for(var i=0;i<battery_sec_5.length;i++){
          battery_sec_5[i].classList.remove('display-sec');
          battery_sec_5[0].classList.add('display-sec');
          battery_sec_5[1].classList.add('display-sec');
          battery_sec_5[2].classList.add('display-sec');
          battery_sec_5[3].classList.add('display-sec');
          battery_capacity_5.innerHTML='100KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_5}`+'-slider-top-sec-4').addClass('active');
        slider_5.style.background = slider_bg_4;
      });
      $('.sec-'+`${number_5}`+'-col-5-bam-button').click(function(){
        $("#custom-slider-bar-"+`${number_5}`).val("4")
        $('.tab-sec-'+`${number_5}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.mega-bam-'+`${number_5}`).addClass('active');
        for(var i=0;i<battery_sec_5.length;i++){
          battery_sec_5[i].classList.remove('display-sec');
          battery_sec_5[0].classList.add('display-sec');
          battery_sec_5[1].classList.add('display-sec');
          battery_sec_5[2].classList.add('display-sec');
          battery_sec_5[3].classList.add('display-sec');
          battery_sec_5[4].classList.add('display-sec');
          battery_capacity_5.innerHTML='125KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_5}`+'-slider-top-sec-5').addClass('active');
        slider_5.style.background = slider_bg_5;
      });
      /* end : category 5 details */

      /* begin : category 6 details */
      var number_6 = 6;
      var slider_6 = document.getElementById("custom-slider-bar-"+`${number_6}`);
      var battery_sec_6 = document.querySelectorAll('#battery-'+`${number_6}`);
      var tab_bar_pro_specs_6 = document.querySelectorAll('#bam-button-container-'+`${number_6}`+' .row .col');
      var battery_capacity_6 = document.querySelector('.battery-capacity-'+`${number_6}`);
      slider_6.oninput = function() {
       
  
        if(this.value == "0"){
          for(var i=0;i<battery_sec_6.length;i++){
            battery_sec_6[i].classList.remove('display-sec');
            battery_sec_6[0].classList.add('display-sec');
            battery_capacity_6.innerHTML='25KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_6.length;i++){
            tab_bar_pro_specs_6[i].classList.remove('active');
            tab_bar_pro_specs_6[0].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.nano-bam-'+`${number_6}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_6}`+'-slider-top-sec-1').addClass('active');
          this.style.background = slider_bg_1;
        }else if(this.value == "1"){
          for(var i=0;i<battery_sec_6.length;i++){
            battery_sec_6[i].classList.remove('display-sec');
            battery_sec_6[0].classList.add('display-sec');
            battery_sec_6[1].classList.add('display-sec');
            battery_capacity_6.innerHTML='50KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_6.length;i++){
            tab_bar_pro_specs_6[i].classList.remove('active');
            tab_bar_pro_specs_6[1].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.micro-bam-'+`${number_6}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_6}`+'-slider-top-sec-2').addClass('active');
          this.style.background = slider_bg_2;        
        }
        else if(this.value == "2"){
          for(var i=0;i<battery_sec_6.length;i++){
            battery_sec_6[i].classList.remove('display-sec');
            battery_sec_6[0].classList.add('display-sec');
            battery_sec_6[1].classList.add('display-sec');
            battery_sec_6[2].classList.add('display-sec');
            battery_capacity_6.innerHTML='75KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_6.length;i++){
            tab_bar_pro_specs_6[i].classList.remove('active');
            tab_bar_pro_specs_6[2].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.mini-bam-'+`${number_6}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_6}`+'-slider-top-sec-3').addClass('active');
          this.style.background = slider_bg_3;        
        }
        else if(this.value == "3"){
          for(var i=0;i<battery_sec_6.length;i++){
            battery_sec_6[i].classList.remove('display-sec');
            battery_sec_6[0].classList.add('display-sec');
            battery_sec_6[1].classList.add('display-sec');
            battery_sec_6[2].classList.add('display-sec');
            battery_sec_6[3].classList.add('display-sec');
            battery_capacity_6.innerHTML='100KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_6.length;i++){
            tab_bar_pro_specs_6[i].classList.remove('active');
            tab_bar_pro_specs_6[3].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.bam-'+`${number_6}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_6}`+'-slider-top-sec-4').addClass('active');
          this.style.background = slider_bg_4; 
        }
        else if(this.value == "4"){
          for(var i=0;i<battery_sec_6.length;i++){
            battery_sec_6[i].classList.remove('display-sec');
            battery_sec_6[0].classList.add('display-sec');
            battery_sec_6[1].classList.add('display-sec');
            battery_sec_6[2].classList.add('display-sec');
            battery_sec_6[3].classList.add('display-sec');
            battery_sec_6[4].classList.add('display-sec');
            battery_capacity_6.innerHTML='125KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_6.length;i++){
            tab_bar_pro_specs_6[i].classList.remove('active');
            tab_bar_pro_specs_6[4].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.mega-bam-'+`${number_6}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_6}`+'-slider-top-sec-5').addClass('active');
          this.style.background = slider_bg_5; 
        }
      }
      $('.sec-'+`${number_6}`+'-col-1-bam-button').click(function(){      
        $("#custom-slider-bar-"+`${number_6}`).val("0");      
        $('.tab-sec-'+`${number_6}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.nano-bam-'+`${number_6}`).addClass('active');
        for(var i=0;i<battery_sec_6.length;i++){
          battery_sec_6[i].classList.remove('display-sec');
          battery_sec_6[0].classList.add('display-sec');
          battery_capacity_6.innerHTML='25KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_6}`+'-slider-top-sec-1').addClass('active');
        slider_6.style.background = slider_bg_1;
      });
      $('.sec-'+`${number_6}`+'-col-2-bam-button').click(function(){
        $("#custom-slider-bar-"+`${number_6}`).val("1"); 
        $('.tab-sec-'+`${number_6}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.micro-bam-'+`${number_6}`).addClass('active');
        for(var i=0;i<battery_sec_6.length;i++){
          battery_sec_6[i].classList.remove('display-sec');
          battery_sec_6[0].classList.add('display-sec');
          battery_sec_6[1].classList.add('display-sec');
          battery_capacity_6.innerHTML='50KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_6}`+'-slider-top-sec-2').addClass('active');
        slider_6.style.background = slider_bg_2;
      });
      $('.sec-'+`${number_6}`+'-col-3-bam-button').click(function(){
        $("#custom-slider-bar-"+`${number_6}`).val("2")
        $('.tab-sec-'+`${number_6}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.mini-bam-'+`${number_6}`).addClass('active');
        for(var i=0;i<battery_sec_6.length;i++){
          battery_sec_6[i].classList.remove('display-sec');
          battery_sec_6[0].classList.add('display-sec');
          battery_sec_6[1].classList.add('display-sec');
          battery_sec_6[2].classList.add('display-sec');
          battery_capacity_6.innerHTML='75KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_6}`+'-slider-top-sec-3').addClass('active');
        slider_6.style.background = slider_bg_3;
      });
      $('.sec-'+`${number_6}`+'-col-4-bam-button').click(function(){
        $("#custom-slider-bar-"+`${number_6}`).val("3")
        $('.tab-sec-'+`${number_6}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.bam-'+`${number_6}`).addClass('active');
        for(var i=0;i<battery_sec_6.length;i++){
          battery_sec_6[i].classList.remove('display-sec');
          battery_sec_6[0].classList.add('display-sec');
          battery_sec_6[1].classList.add('display-sec');
          battery_sec_6[2].classList.add('display-sec');
          battery_sec_6[3].classList.add('display-sec');
          battery_capacity_6.innerHTML='100KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_6}`+'-slider-top-sec-4').addClass('active');
        slider_6.style.background = slider_bg_4;
      });
      $('.sec-'+`${number_6}`+'-col-5-bam-button').click(function(){
        $("#custom-slider-bar-"+`${number_6}`).val("4")
        $('.tab-sec-'+`${number_6}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.mega-bam-'+`${number_6}`).addClass('active');
        for(var i=0;i<battery_sec_6.length;i++){
          battery_sec_6[i].classList.remove('display-sec');
          battery_sec_6[0].classList.add('display-sec');
          battery_sec_6[1].classList.add('display-sec');
          battery_sec_6[2].classList.add('display-sec');
          battery_sec_6[3].classList.add('display-sec');
          battery_sec_6[4].classList.add('display-sec');
          battery_capacity_6.innerHTML='125KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_6}`+'-slider-top-sec-5').addClass('active');
        slider_6.style.background = slider_bg_5;
      });
      /* end : category 6 details */

      /* begin : category 7 details */
      var number_7 = 7;
      var slider_7 = document.getElementById("custom-slider-bar-"+`${number_7}`);
      var battery_sec_7 = document.querySelectorAll('#battery-'+`${number_7}`);
      var tab_bar_pro_specs_7 = document.querySelectorAll('#bam-button-container-'+`${number_7}`+' .row .col');
      var battery_capacity_7 = document.querySelector('.battery-capacity-'+`${number_7}`);
      slider_7.oninput = function() {
       
  
        if(this.value == "0"){
          for(var i=0;i<battery_sec_7.length;i++){
            battery_sec_7[i].classList.remove('display-sec');
            battery_sec_7[0].classList.add('display-sec');
            battery_capacity_7.innerHTML='25KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_7.length;i++){
            tab_bar_pro_specs_7[i].classList.remove('active');
            tab_bar_pro_specs_7[0].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.nano-bam-'+`${number_7}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_7}`+'-slider-top-sec-1').addClass('active');
          this.style.background = slider_bg_1;
        }else if(this.value == "1"){
          for(var i=0;i<battery_sec_7.length;i++){
            battery_sec_7[i].classList.remove('display-sec');
            battery_sec_7[0].classList.add('display-sec');
            battery_sec_7[1].classList.add('display-sec');
            battery_capacity_7.innerHTML='50KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_7.length;i++){
            tab_bar_pro_specs_7[i].classList.remove('active');
            tab_bar_pro_specs_7[1].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.micro-bam-'+`${number_7}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_7}`+'-slider-top-sec-2').addClass('active');
          this.style.background = slider_bg_2;        
        }
        else if(this.value == "2"){
          for(var i=0;i<battery_sec_7.length;i++){
            battery_sec_7[i].classList.remove('display-sec');
            battery_sec_7[0].classList.add('display-sec');
            battery_sec_7[1].classList.add('display-sec');
            battery_sec_7[2].classList.add('display-sec');
            battery_capacity_7.innerHTML='75KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_7.length;i++){
            tab_bar_pro_specs_7[i].classList.remove('active');
            tab_bar_pro_specs_7[2].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.mini-bam-'+`${number_7}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_7}`+'-slider-top-sec-3').addClass('active');
          this.style.background = slider_bg_3;        
        }
        else if(this.value == "3"){
          for(var i=0;i<battery_sec_7.length;i++){
            battery_sec_7[i].classList.remove('display-sec');
            battery_sec_7[0].classList.add('display-sec');
            battery_sec_7[1].classList.add('display-sec');
            battery_sec_7[2].classList.add('display-sec');
            battery_sec_7[3].classList.add('display-sec');
            battery_capacity_7.innerHTML='100KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_7.length;i++){
            tab_bar_pro_specs_7[i].classList.remove('active');
            tab_bar_pro_specs_7[3].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.bam-'+`${number_7}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_7}`+'-slider-top-sec-4').addClass('active');
          this.style.background = slider_bg_4; 
        }
        else if(this.value == "4"){
          for(var i=0;i<battery_sec_7.length;i++){
            battery_sec_7[i].classList.remove('display-sec');
            battery_sec_7[0].classList.add('display-sec');
            battery_sec_7[1].classList.add('display-sec');
            battery_sec_7[2].classList.add('display-sec');
            battery_sec_7[3].classList.add('display-sec');
            battery_sec_7[4].classList.add('display-sec');
            battery_capacity_7.innerHTML='125KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_7.length;i++){
            tab_bar_pro_specs_7[i].classList.remove('active');
            tab_bar_pro_specs_7[4].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.mega-bam-'+`${number_7}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_7}`+'-slider-top-sec-5').addClass('active');
          this.style.background = slider_bg_5; 
        }
      }
      $('.sec-'+`${number_7}`+'-col-1-bam-button').click(function(){      
        $("#custom-slider-bar-"+`${number_7}`).val("0");      
        $('.tab-sec-'+`${number_7}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.nano-bam-'+`${number_7}`).addClass('active');
        for(var i=0;i<battery_sec_7.length;i++){
          battery_sec_7[i].classList.remove('display-sec');
          battery_sec_7[0].classList.add('display-sec');
          battery_capacity_7.innerHTML='25KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_7}`+'-slider-top-sec-1').addClass('active');
        slider_7.style.background = slider_bg_1;
      });
      $('.sec-'+`${number_7}`+'-col-2-bam-button').click(function(){
        $("#custom-slider-bar-"+`${number_7}`).val("1"); 
        $('.tab-sec-'+`${number_7}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.micro-bam-'+`${number_7}`).addClass('active');
        for(var i=0;i<battery_sec_7.length;i++){
          battery_sec_7[i].classList.remove('display-sec');
          battery_sec_7[0].classList.add('display-sec');
          battery_sec_7[1].classList.add('display-sec');
          battery_capacity_7.innerHTML='50KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_7}`+'-slider-top-sec-2').addClass('active');
        slider_7.style.background = slider_bg_2;
      });
      $('.sec-'+`${number_7}`+'-col-3-bam-button').click(function(){
        $("#custom-slider-bar-"+`${number_7}`).val("2")
        $('.tab-sec-'+`${number_7}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.mini-bam-'+`${number_7}`).addClass('active');
        for(var i=0;i<battery_sec_7.length;i++){
          battery_sec_7[i].classList.remove('display-sec');
          battery_sec_7[0].classList.add('display-sec');
          battery_sec_7[1].classList.add('display-sec');
          battery_sec_7[2].classList.add('display-sec');
          battery_capacity_7.innerHTML='75KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_7}`+'-slider-top-sec-3').addClass('active');
        slider_7.style.background = slider_bg_3;
      });
      $('.sec-'+`${number_7}`+'-col-4-bam-button').click(function(){
        $("#custom-slider-bar-"+`${number_7}`).val("3")
        $('.tab-sec-'+`${number_7}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.bam-'+`${number_7}`).addClass('active');
        for(var i=0;i<battery_sec_7.length;i++){
          battery_sec_7[i].classList.remove('display-sec');
          battery_sec_7[0].classList.add('display-sec');
          battery_sec_7[1].classList.add('display-sec');
          battery_sec_7[2].classList.add('display-sec');
          battery_sec_7[3].classList.add('display-sec');
          battery_capacity_7.innerHTML='100KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_7}`+'-slider-top-sec-4').addClass('active');
        slider_7.style.background = slider_bg_4;
      });
      $('.sec-'+`${number_7}`+'-col-5-bam-button').click(function(){
        $("#custom-slider-bar-"+`${number_7}`).val("4")
        $('.tab-sec-'+`${number_7}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.mega-bam-'+`${number_7}`).addClass('active');
        for(var i=0;i<battery_sec_7.length;i++){
          battery_sec_7[i].classList.remove('display-sec');
          battery_sec_7[0].classList.add('display-sec');
          battery_sec_7[1].classList.add('display-sec');
          battery_sec_7[2].classList.add('display-sec');
          battery_sec_7[3].classList.add('display-sec');
          battery_sec_7[4].classList.add('display-sec');
          battery_capacity_7.innerHTML='125KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_7}`+'-slider-top-sec-5').addClass('active');
        slider_7.style.background = slider_bg_5;
      });
      /* end : category 7 details */

      /* begin : category 8 details */
      var number_8 = 8;
      var slider_8 = document.getElementById("custom-slider-bar-"+`${number_8}`);
      var battery_sec_8 = document.querySelectorAll('#battery-'+`${number_8}`);
      var tab_bar_pro_specs_8 = document.querySelectorAll('#bam-button-container-'+`${number_8}`+' .row .col');
      var battery_capacity_8 = document.querySelector('.battery-capacity-'+`${number_8}`);
      slider_8.oninput = function() {
       
  
        if(this.value == "0"){
          for(var i=0;i<battery_sec_8.length;i++){
            battery_sec_8[i].classList.remove('display-sec');
            battery_sec_8[0].classList.add('display-sec');
            battery_capacity_8.innerHTML='25KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_8.length;i++){
            tab_bar_pro_specs_8[i].classList.remove('active');
            tab_bar_pro_specs_8[0].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.nano-bam-'+`${number_8}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_8}`+'-slider-top-sec-1').addClass('active');
          this.style.background = slider_bg_1;
        }else if(this.value == "1"){
          for(var i=0;i<battery_sec_8.length;i++){
            battery_sec_8[i].classList.remove('display-sec');
            battery_sec_8[0].classList.add('display-sec');
            battery_sec_8[1].classList.add('display-sec');
            battery_capacity_8.innerHTML='50KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_8.length;i++){
            tab_bar_pro_specs_8[i].classList.remove('active');
            tab_bar_pro_specs_8[1].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.micro-bam-'+`${number_8}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_8}`+'-slider-top-sec-2').addClass('active');
          this.style.background = slider_bg_2;        
        }
        else if(this.value == "2"){
          for(var i=0;i<battery_sec_8.length;i++){
            battery_sec_8[i].classList.remove('display-sec');
            battery_sec_8[0].classList.add('display-sec');
            battery_sec_8[1].classList.add('display-sec');
            battery_sec_8[2].classList.add('display-sec');
            battery_capacity_8.innerHTML='75KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_8.length;i++){
            tab_bar_pro_specs_8[i].classList.remove('active');
            tab_bar_pro_specs_8[2].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.mini-bam-'+`${number_8}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_8}`+'-slider-top-sec-3').addClass('active');
          this.style.background = slider_bg_3;        
        }
        else if(this.value == "3"){
          for(var i=0;i<battery_sec_8.length;i++){
            battery_sec_8[i].classList.remove('display-sec');
            battery_sec_8[0].classList.add('display-sec');
            battery_sec_8[1].classList.add('display-sec');
            battery_sec_8[2].classList.add('display-sec');
            battery_sec_8[3].classList.add('display-sec');
            battery_capacity_8.innerHTML='100KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_8.length;i++){
            tab_bar_pro_specs_8[i].classList.remove('active');
            tab_bar_pro_specs_8[3].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.bam-'+`${number_8}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_8}`+'-slider-top-sec-4').addClass('active');
          this.style.background = slider_bg_4; 
        }
        else if(this.value == "4"){
          for(var i=0;i<battery_sec_8.length;i++){
            battery_sec_8[i].classList.remove('display-sec');
            battery_sec_8[0].classList.add('display-sec');
            battery_sec_8[1].classList.add('display-sec');
            battery_sec_8[2].classList.add('display-sec');
            battery_sec_8[3].classList.add('display-sec');
            battery_sec_8[4].classList.add('display-sec');
            battery_capacity_8.innerHTML='125KWH';
          }
          for(var i=0;i<tab_bar_pro_specs_8.length;i++){
            tab_bar_pro_specs_8[i].classList.remove('active');
            tab_bar_pro_specs_8[4].classList.add('active');
          }
          $('.bam-specs').removeClass('active');
          $('.mega-bam-'+`${number_8}`).addClass('active');
          $('.slider-top-sec').removeClass('active');
          $('.sec-'+`${number_8}`+'-slider-top-sec-5').addClass('active');
          this.style.background = slider_bg_5; 
        }
      }
      $('.sec-'+`${number_8}`+'-col-1-bam-button').click(function(){      
        $("#custom-slider-bar-"+`${number_8}`).val("0");      
        $('.tab-sec-'+`${number_8}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.nano-bam-'+`${number_8}`).addClass('active');
        for(var i=0;i<battery_sec_8.length;i++){
          battery_sec_8[i].classList.remove('display-sec');
          battery_sec_8[0].classList.add('display-sec');
          battery_capacity_8.innerHTML='25KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_8}`+'-slider-top-sec-1').addClass('active');
        slider_8.style.background = slider_bg_1;
      });
      $('.sec-'+`${number_8}`+'-col-2-bam-button').click(function(){
        $("#custom-slider-bar-"+`${number_8}`).val("1"); 
        $('.tab-sec-'+`${number_8}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.micro-bam-'+`${number_8}`).addClass('active');
        for(var i=0;i<battery_sec_8.length;i++){
          battery_sec_8[i].classList.remove('display-sec');
          battery_sec_8[0].classList.add('display-sec');
          battery_sec_8[1].classList.add('display-sec');
          battery_capacity_8.innerHTML='50KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_8}`+'-slider-top-sec-2').addClass('active');
        slider_8.style.background = slider_bg_2;
      });
      $('.sec-'+`${number_8}`+'-col-3-bam-button').click(function(){
        $("#custom-slider-bar-"+`${number_8}`).val("2")
        $('.tab-sec-'+`${number_8}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.mini-bam-'+`${number_8}`).addClass('active');
        for(var i=0;i<battery_sec_8.length;i++){
          battery_sec_8[i].classList.remove('display-sec');
          battery_sec_8[0].classList.add('display-sec');
          battery_sec_8[1].classList.add('display-sec');
          battery_sec_8[2].classList.add('display-sec');
          battery_capacity_8.innerHTML='75KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_8}`+'-slider-top-sec-3').addClass('active');
        slider_8.style.background = slider_bg_3;
      });
      $('.sec-'+`${number_8}`+'-col-4-bam-button').click(function(){
        $("#custom-slider-bar-"+`${number_8}`).val("3")
        $('.tab-sec-'+`${number_8}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.bam-'+`${number_8}`).addClass('active');
        for(var i=0;i<battery_sec_8.length;i++){
          battery_sec_8[i].classList.remove('display-sec');
          battery_sec_8[0].classList.add('display-sec');
          battery_sec_8[1].classList.add('display-sec');
          battery_sec_8[2].classList.add('display-sec');
          battery_sec_8[3].classList.add('display-sec');
          battery_capacity_8.innerHTML='100KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_8}`+'-slider-top-sec-4').addClass('active');
        slider_8.style.background = slider_bg_4;
      });
      $('.sec-'+`${number_8}`+'-col-5-bam-button').click(function(){
        $("#custom-slider-bar-"+`${number_8}`).val("4")
        $('.tab-sec-'+`${number_8}`).removeClass('active');
        $(this).addClass('active');
        $('.bam-specs').removeClass('active');
        $('.mega-bam-'+`${number_8}`).addClass('active');
        for(var i=0;i<battery_sec_8.length;i++){
          battery_sec_8[i].classList.remove('display-sec');
          battery_sec_8[0].classList.add('display-sec');
          battery_sec_8[1].classList.add('display-sec');
          battery_sec_8[2].classList.add('display-sec');
          battery_sec_8[3].classList.add('display-sec');
          battery_sec_8[4].classList.add('display-sec');
          battery_capacity_8.innerHTML='125KWH';
        }
        $('.slider-top-sec').removeClass('active');
        $('.sec-'+`${number_8}`+'-slider-top-sec-5').addClass('active');
        slider_8.style.background = slider_bg_5;
      });
      /* end : category 8 details */
  }
  
  
  });