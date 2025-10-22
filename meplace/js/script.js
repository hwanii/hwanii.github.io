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
                $("header").removeClass("header_fixed");
            }
        });
    });

    //햄버거 메뉴
    $(".ham-btn").click(function(){
        $("aside").animate({"left" : "0px"},300);
        $(".back-bg").show();
    });
    
    $(".close").click(function(){
        $("aside").animate({"left" : "-300px"},300);
        $(".back-bg").hide();
    });
    
    $(".back-bg").click(function(){
        $("aside").animate({"left" : "-300px"},300);
        $(".back-bg").hide();
    });
    
    //main-banner
    var swiper = new Swiper(".main-banner", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        speed: 2000,
                autoplay: {
                    delay: 6000,
                },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });




})