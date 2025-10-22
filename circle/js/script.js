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

    //index slide
    var swiper = new Swiper("#main-wrap .mySwiper", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        speed: 1000,
        autoplay: {
            delay: 2000,
            disableOnInteraction: false,
        },
    });

    






})