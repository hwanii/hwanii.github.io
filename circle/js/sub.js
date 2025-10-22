$(document).ready(function () {

    AOS.init();

    AOS.init({
        once: false,
    })

    // header scroll
    $(function() {
        $(window).on("scroll", function() {
            if($(window).scrollTop() > 50) {
                $("header").addClass("header_fixed");
            } else {
                //remove the background property so it comes transparent again (defined in your css)
               $("header").removeClass("header_fixed");
            }
        });
    });

    //햄버거 메뉴
    $(".ham-btn").click(function(){
        $("aside").animate({"right" : "0px"},300);
        $(".back-bg").show();
      });
  
      $(".close").click(function(){
        $("aside").animate({"right" : "-500px"},300);
        $(".back-bg").hide();
      });
  
      $(".back-bg").click(function(){
        $("aside").animate({"right" : "-500px"},300);
        $(".back-bg").hide();
      });
  
      $("aside .gnb li").click(function(){
        $("aside").animate({"right" : "-500px"},300);
        $(".back-bg").hide();
      });

    //module slide
    var swiper = new Swiper(".space-wrap .mySwiper", {
        slidesPerView: 'auto',
        centeredSlides: true,
        spaceBetween: 20,
        loop: true,
        speed: 1000,
        loopAdditionalSlides: 1,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        breakpoints: {
            376: {
                // centeredSlides: true,
            },
        }
        
    });

    //similar slide
    var swiper = new Swiper(".similar-wrap .mySwiper", {
        slidesPerView: 'auto',
        centeredSlides: true,
        spaceBetween: 20,
        loop: true,
        speed: 1000,
        loopAdditionalSlides: 1,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        breakpoints: {
            376: {
                // centeredSlides: false,
            },
        }
    });






})