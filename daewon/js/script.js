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
                // $(".ham-btn img").attr("src","./img/ham.png");
            } else {
                //remove the background property so it comes transparent again (defined in your css)
                $("header").removeClass("header_fixed");
                //  $(".ham-btn img").attr("src","./img/w-ham.png");


            }
        });
    })


    // header
    $("header .gnb > li").mouseenter(function(){
        $(this).children("ul").stop().slideDown();
    });

    $("header .gnb > li").mouseleave(function(){
        $("header .gnb > li ul").stop().slideUp();
    });

    //햄버거 메뉴
    $(".ham-btn").click(function(){
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

    var swiper = new Swiper(".mainBg", {
        loop: true,
        slidesPerView: 'auto',
        loopAdditionalSlides : 1,
        centeredSlides: true,
        navigation: {
            nextEl: '.swiper-btn-next',
            prevEl: '.swiper-btn-prev',
        }
    });



    //사이트이용방침 팝업창
    $('footer .inner .footer_top a:nth-child(2)').click(function () {
        $('.info_wrap01').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap01').css("display", "none")
    });


    //정보무단수집거부 팝업창
    $('footer .inner .footer_top a:nth-child(3)').click(function () {
        $('.info_wrap02').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap02').css("display", "none")
    });


    //개인정보수집동의 팝업창
    $('.estimate .contents > div .pri').click(function () {
        $('.info_wrap03').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap03').css("display", "none")
    });



})