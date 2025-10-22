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
        navigation: {
            nextEl: '.swiper-btn-next01',
            prevEl: '.swiper-btn-prev01',
        },
    });


    $(window).scroll(function(){
        var paraHeight = $(window).scrollTop();
        var contentTop = $(".s-d .inner .s-d-top").innerHeight();
        var contentBottom = $(".s-d .s-d-mid .inner > div").innerHeight();
        var contentInnerHeight = contentTop + contentBottom;

        // console.log(paraHeight);

        if (paraHeight > 100) {
            $(".img_sticky").css({
                "opacity" : 1,
            });
        };

        if (paraHeight < 100) {
            $(".img_sticky").css({
                "opacity" : 0,
            });
        };

        if (paraHeight > contentInnerHeight-250) {
            $(".img_sticky").css({
                "position" : "absolute",
            });
        };

        if (paraHeight < contentInnerHeight-250) {
            $(".img_sticky").css({
                "position" : "fixed",
            });
        };

    });





    // $('.gallery-box').each(function() {
    //     var thumbSwiper = new Swiper('.gallery-thumb-swiper', {
    //         slidesPerView: 5,
    //         watchSlidesProgress: true,
    //         slideToClickedSlide: true,
    //         loop: true,
    //         navigation: {
    //         nextEl: '.floor2-next',
    //         prevEl: '.floor2-prev'
    //         },
    //     });
    //     var mainSwiper = new Swiper('.gallery-main-swiper', {
    //         loop: true,
    //         navigation: {
    //         nextEl: '.floor1-next',
    //         prevEl: '.floor1-prev'
    //         },
    //     });
    //     mainSwiper.controller.control = thumbSwiper;
    //     thumbSwiper.controller.control = mainSwiper;
    // });


    var swiper = new Swiper(".gallery-thumb-swiper", {
        loop: true,
        slidesPerView: 5,
        freeMode: true,
        watchSlidesProgress: true,
        slideToClickedSlide: true,
        navigation: {
            nextEl: '.floor2-next',
            prevEl: '.floor2-prev'
        },
    });
    var swiper2 = new Swiper(".gallery-main-swiper", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        thumbs: {
            swiper: swiper,
        },
        navigation: {
            nextEl: '.floor1-next',
            prevEl: '.floor1-prev'
        },
    });



    //개인정보취급방침 동의 팝업창
    $('footer .inner > div div div a:nth-child(1)').click(function () {
        $('.info_wrap01').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap01').css("display", "none")
    });


    //사이트이용약관 팝업창
    $('footer .inner > div div div a:nth-child(2)').click(function () {
        $('.info_wrap02').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap02').css("display", "none")
    });


    //정보무단수집거부 팝업창
    $('footer .inner > div div div a:nth-child(3)').click(function () {
        $('.info_wrap03').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap03').css("display", "none")
    });

})