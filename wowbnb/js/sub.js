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
    //             $("header .inner h1 a img").attr("src","../img/logo05.png");
    //             // $(".ham-btn img").attr("src","./img/ham.png");
    //         } else {
    //             //remove the background property so it comes transparent again (defined in your css)
    //             $("header").removeClass("header_fixed");
    //             $("header .inner h1 a img").attr("src","../img/logo.png");
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


    var swiper = new Swiper(".vendor-slide", {
        loop: true,
        slidesPerView: 3,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        breakpoints: {
            768: {
                slidesPerView: 7,
            },
        },
    });

    var swiper = new Swiper(".history-slide", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        navigation: {
            nextEl: '.swiper-btn-next',
            prevEl: '.swiper-btn-prev',
        },
        breakpoints: {
            481: {
                slidesPerView: 2,
            },
            768: {
                slidesPerView: 3,
            },
            1024: {
                slidesPerView: 4,
            },
        },
    });


    var swiper = new Swiper(".info-slide", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        navigation: {
            nextEl: '.swiper-btn-next01',
            prevEl: '.swiper-btn-prev01',
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });



    $('.gallery-main-swiper').each(function() {
        var thumbSwiper = new Swiper('.gallery-thumb-swiper', {
            slidesPerView: 9,
            loopedSlides: 8,
            watchSlidesProgress: true,
            slideToClickedSlide: true,
            loop: true,
            breakpoints: {
                768: {
                    slidesPerView: 18,
                },
            },
        });
        var mainSwiper = new Swiper('.gallery-main-swiper', {
            loop: true,
            loopedSlides: 8,
            navigation: {
            nextEl: '.floor1-next',
            prevEl: '.floor1-prev'
            },
        });
        mainSwiper.controller.control = thumbSwiper;
        thumbSwiper.controller.control = mainSwiper;
    });


    $(".platform .plat-mid div img").mouseenter(function(){
        $(this).addClass('ani-rott');
    });

    $(".platform .plat-mid div img").mouseleave(function(){
        $(this).removeClass('ani-rott');
    });



    // $(".ven-map div img").click(function(){
    //     $(".ven-map div img:last-child").removeClass('on');
    //     $(this).siblings('img').addClass('on');
    // });

    $(".ven-map div img").mouseenter(function(){
        $(this).siblings('img').addClass('on');
    });

    $(".ven-map div img").mouseleave(function(){
        $(this).siblings('img').removeClass('on');
    });


    // 이메일 직접 입력
    $('.email_list').click(function () {
        var e = $(this).children('option:selected').val();
        $(this).siblings('.emailhost').val(e)
        console.log(e)
        if (e == "type") {
            $(this).siblings('.emailhost').val("")
            $(this).siblings('.emailhost').removeAttr('readonly')
        } else {
            $(this).siblings('.emailhost').attr('readonly', true)
        }
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