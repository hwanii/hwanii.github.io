$(document).ready(function () {

    AOS.init();

    AOS.init({
        once: false,
    });

    //header
    $(window).resize(function(){ 
        if (window.innerWidth > 1350) {
            $("header").mouseenter(function(){
                $("header .main_header").addClass("on");
                $("header .sub_header").stop().slideDown(300);
            });
        
            $("header").mouseleave(function(){
                $("header .main_header").removeClass("on");
                $("header .sub_header").stop().slideUp(300);
            });
        
            $(".search_box_contents").mouseenter(function(){
                $("header .main_header").addClass("on");
                $("header .sub_header").stop().slideDown(300);
            });
        
            $(".sub_gnb div").mouseenter(function(){
                $(".sub_gnb div").removeClass("on");
                $(this).addClass("on");
        
                var i = $(this).index();
        
                $(".gnb li a").removeClass("text_on");
                $(".gnb li a").eq(i).addClass("text_on");
            });
        } else {
            $("header").mouseenter(function(){
                $("header .main_header").removeClass("on");
                $("header .sub_header").stop().slideUp(300);
            });
        
            $("header").mouseleave(function(){
                $("header .main_header").removeClass("on");
                $("header .sub_header").stop().slideUp(300);
            });
        
            $(".search_box_contents").mouseenter(function(){
                $("header .main_header").addClass("on");
                $("header .sub_header").stop().slideUp(300);
            });
        
            $(".sub_gnb div").mouseenter(function(){
                $(".sub_gnb div").removeClass("on");
                $(this).addClass("on");
        
                var i = $(this).index();
        
                $(".gnb li a").removeClass("text_on");
                $(".gnb li a").eq(i).addClass("text_on");
            });
        }
    }).resize(); 
    

    $(".sub_gnb div").mouseleave(function(){
        $(".gnb li a").removeClass("text_on");
    });

    $("header .main_header .inner .right div p").click(function(){
        $(".search_box_contents").toggleClass("active");
    });

    // header scroll
    $(function() {
        $(window).on("scroll", function() {
            if ($(window).scrollTop() > 50) {
                $("header").addClass("header_fixed");
            } else {
                $("header").removeClass("header_fixed");
            }
        });
    });

    //햄버거 메뉴
    $("header .main_header .inner .right span").click(function(){
        $("aside").animate({"right" : "0px"},300);
        $(".back-bg").show();
    });
    
    $(".close").click(function(){
        $("aside").animate({"right" : "-300px"},300);
        $(".back-bg").hide();
    });
    
    $(".back-bg").click(function(){
        $("aside").animate({"right" : "-300px"},300);
        $(".back-bg").hide();
    });

    // aside
    $("aside .gnb > li > a").click(function(){
        if( $(this).parent().hasClass('on') == true ){
            $(".depth > li").removeClass('on');
            $(".depth").slideUp();
            
            $(".gnb > li").removeClass('on');
            $(".depth").slideUp();
        }else{
            $(".depth > li").removeClass('on');
            $(".depth").slideUp();
            
            $(".gnb > li").removeClass('on');
            $(".depth").slideUp();
            $(this).parent().addClass("on");
            $(this).next().slideDown();
        }
    });






    //main_slide
    var swiper = new Swiper(".main_slide", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
    });

    //honesty_slide
    var swiper = new Swiper(".honesty_slide", {
        loop: true,
        slidesPerView: 'auto',
        spaceBetween: 20,
        loopAdditionalSlides : 1,
        navigation: {
            nextEl: '.next01',
            prevEl: '.prev01',
        },
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
    });

    //product_slide
    var swiper = new Swiper(".product_slide", {
        loop: true,
        slidesPerView: 'auto',
        spaceBetween: 26.66,
        centeredSlides: true,
        loopAdditionalSlides : 1,
        navigation: {
            nextEl: '.next02',
            prevEl: '.prev02',
        },
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            1023: {
                centeredSlides: false,
            },
        },
    });



    $('footer .inner .right div a:nth-child(1)').click(function () {
        $('.info_wrap01').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap01').css("display", "none")
    });



    $('footer .inner .right div a:nth-child(2)').click(function () {
        $('.info_wrap02').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap02').css("display", "none")
    });

})