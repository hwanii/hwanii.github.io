$(document).ready(function () {

    AOS.init();

    AOS.init({
        once: false,
    })

    // header scroll
    // $(function() {
    //     $(window).on("scroll", function() {
    //         if($(window).scrollTop() > 50) {
    //             $("header").addClass("header_fixed");
    //             $("header .inner h1 a img").attr("src","./img/logo05.png");
    //             // $(".ham-btn img").attr("src","./img/ham.png");
    //         } else {
    //             //remove the background property so it comes transparent again (defined in your css)
    //             $("header").removeClass("header_fixed");
    //             $("header .inner h1 a img").attr("src","./img/logo.png");
    //             //  $(".ham-btn img").attr("src","./img/w-ham.png");
    //         }
    //     });
    // });

    // header
    $("header .gnb > li").mouseenter(function(){
        $(this).children("ul").stop().slideDown();
    });

    $("header .gnb > li").mouseleave(function(){
        $("header .gnb > li ul").stop().slideUp();
    });

    //햄버거 메뉴
    $(".ham-btn").click(function(){
        $("aside").show(200);
    });

    $(".close").click(function(){
        $("aside").hide(200);
    });

    $("aside .gnb>li>a").click(function(){
        if( $(this).parent().hasClass('on') == true ){
            $(".depth>li").removeClass('on');
            $(".depth").slideUp();

            $(".gnb>li").removeClass('on');
            $(".depth").slideUp();
        }else{
            $(".depth>li").removeClass('on');
            $(".depth").slideUp();

            $(".gnb>li").removeClass('on');
            $(".depth").slideUp();
            $(this).parent().addClass("on");
            $(this).next().slideDown();
        }
    });


    var swiper = new Swiper(".main-slide", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });


    $('footer .inner ul li:nth-child(4)').click(function () {
        $('.info_wrap01').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap01').css("display", "none")
    });


    
    $('footer .inner ul li:nth-child(5)').click(function () {
        $('.info_wrap02').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap02').css("display", "none")
    });

})