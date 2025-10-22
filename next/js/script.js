$(document).ready(function () {

    AOS.init();

    AOS.init({
        once: false,
    });




    $("header .center > img").click(function(){
        $('html, body').animate({
            scrollTop: 0,
        }, 500);
    });

    $('header .gnb a').click(function () {
        link = $(this).attr("href");
        $("body, html").animate({ scrollTop: $(link).offset().top - 60}, 500);

    });

    $('aside .gnb a').click(function () {
        link = $(this).attr("href");
        $("body, html").animate({ scrollTop: $(link).offset().top - 60}, 500);
        $("aside").animate({"right" : "-360px"});
        $(".aside_bg").hide();

    });

    $(".ham").click(function(){
        $("aside").animate({"right" : "0"});
        $(".aside_bg").show();
    });

    $("aside > span").click(function(){
        $("aside").animate({"right" : "-360px"});
        $(".aside_bg").hide();
    });


    var scrollLink = $('.page_scroll');
    $(window).scroll(function () {
        var scrollbarLocation = $(this).scrollTop();

        scrollLink.each(function () {

            var sectionOffset = $(this.hash).offset().top - 120;

            if (sectionOffset <= scrollbarLocation) {
                $(this).addClass('active');
                $(this).siblings().removeClass('active');
            }
        });
    });








    var swiper = new Swiper(".main_slide", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });





    $(".best_category01 li").click(function(){
        $(".best_category01 li").removeClass("on");
        $(this).addClass("on");

        var bCate01 = $(this).index();

        $("#best .best_contents .inner01 .contents").removeClass("on");
        $("#best .best_contents .inner01 .contents").eq(bCate01).addClass("on");
    });

    $(".best_category02 li").click(function(){
        $(".best_category02 li").removeClass("on");
        $(this).addClass("on");

        var bCate01 = $(this).index();

        $("#best .best_contents .inner02 .contents").removeClass("on");
        $("#best .best_contents .inner02 .contents").eq(bCate01).addClass("on");
    });




    var swiper = new Swiper(".best_slide01_01", {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 'auto',
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
        breakpoints: {
            929: {
                slidesPerView: 'auto',  //브라우저가 768보다 클 때
                spaceBetween: 30,
                centeredSlides: false,
            },
            1349: {
                slidesPerView: 'auto',  //브라우저가 1024보다 클 때
                spaceBetween: 30,
            },
        }
    });
    var swiper = new Swiper(".best_slide01_02", {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 'auto',
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
            929: {
                slidesPerView: 'auto',  //브라우저가 768보다 클 때
                spaceBetween: 30,
                centeredSlides: false,
            },
            1349: {
                slidesPerView: 'auto',  //브라우저가 1024보다 클 때
                spaceBetween: 30,
            },
        },
        observer: true,
        observeParents: true,
    });
    var swiper = new Swiper(".best_slide01_03", {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 'auto',
        loopAdditionalSlides : 1,
        navigation: {
            nextEl: '.next03',
            prevEl: '.prev03',
        },
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            929: {
                slidesPerView: 'auto',  //브라우저가 768보다 클 때
                spaceBetween: 30,
                centeredSlides: false,
            },
            1349: {
                slidesPerView: 'auto',  //브라우저가 1024보다 클 때
                spaceBetween: 30,
            },
        },
        observer: true,
        observeParents: true,
    });
    var swiper = new Swiper(".best_slide01_04", {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 'auto',
        loopAdditionalSlides : 1,
        navigation: {
            nextEl: '.next04',
            prevEl: '.prev04',
        },
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            929: {
                slidesPerView: 'auto',  //브라우저가 768보다 클 때
                spaceBetween: 30,
                centeredSlides: false,
            },
            1349: {
                slidesPerView: 'auto',  //브라우저가 1024보다 클 때
                spaceBetween: 30,
            },
        },
        observer: true,
        observeParents: true,
    });
    var swiper = new Swiper(".best_slide01_05", {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 'auto',
        loopAdditionalSlides : 1,
        navigation: {
            nextEl: '.next05',
            prevEl: '.prev05',
        },
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            929: {
                slidesPerView: 'auto',  //브라우저가 768보다 클 때
                spaceBetween: 30,
                centeredSlides: false,
            },
            1349: {
                slidesPerView: 'auto',  //브라우저가 1024보다 클 때
                spaceBetween: 30,
            },
        },
        observer: true,
        observeParents: true,
    });
    var swiper = new Swiper(".best_slide01_06", {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 'auto',
        loopAdditionalSlides : 1,
        navigation: {
            nextEl: '.next06',
            prevEl: '.prev06',
        },
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            929: {
                slidesPerView: 'auto',  //브라우저가 768보다 클 때
                spaceBetween: 30,
                centeredSlides: false,
            },
            1349: {
                slidesPerView: 'auto',  //브라우저가 1024보다 클 때
                spaceBetween: 30,
            },
        },
        observer: true,
        observeParents: true,
    });

    var swiper = new Swiper(".best_slide02_01", {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 'auto',
        loopAdditionalSlides : 1,
        navigation: {
            nextEl: '.next7',
            prevEl: '.prev7',
        },
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            929: {
                slidesPerView: 'auto',  //브라우저가 768보다 클 때
                spaceBetween: 30,
                centeredSlides: false,
            },
            1349: {
                slidesPerView: 'auto',  //브라우저가 1024보다 클 때
                spaceBetween: 30,
            },
        }
    });
    var swiper = new Swiper(".best_slide02_02", {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 'auto',
        loopAdditionalSlides : 1,
        navigation: {
            nextEl: '.next8',
            prevEl: '.prev8',
        },
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            929: {
                slidesPerView: 'auto',  //브라우저가 768보다 클 때
                spaceBetween: 30,
                centeredSlides: false,
            },
            1349: {
                slidesPerView: 'auto',  //브라우저가 1024보다 클 때
                spaceBetween: 30,
            },
        },
        observer: true,
        observeParents: true,
    });
    var swiper = new Swiper(".best_slide02_03", {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 'auto',
        loopAdditionalSlides : 1,
        navigation: {
            nextEl: '.next9',
            prevEl: '.prev9',
        },
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            929: {
                slidesPerView: 'auto',  //브라우저가 768보다 클 때
                spaceBetween: 30,
                centeredSlides: false,
            },
            1349: {
                slidesPerView: 'auto',  //브라우저가 1024보다 클 때
                spaceBetween: 30,
            },
        },
        observer: true,
        observeParents: true,
    });
    var swiper = new Swiper(".best_slide02_04", {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 'auto',
        loopAdditionalSlides : 1,
        navigation: {
            nextEl: '.next10',
            prevEl: '.prev10',
        },
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            929: {
                slidesPerView: 'auto',  //브라우저가 768보다 클 때
                spaceBetween: 30,
                centeredSlides: false,
            },
            1349: {
                slidesPerView: 'auto',  //브라우저가 1024보다 클 때
                spaceBetween: 30,
            },
        },
        observer: true,
        observeParents: true,
    });
    var swiper = new Swiper(".best_slide02_05", {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 'auto',
        loopAdditionalSlides : 1,
        navigation: {
            nextEl: '.next11',
            prevEl: '.prev11',
        },
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            929: {
                slidesPerView: 'auto',  //브라우저가 768보다 클 때
                spaceBetween: 30,
                centeredSlides: false,
            },
            1349: {
                slidesPerView: 'auto',  //브라우저가 1024보다 클 때
                spaceBetween: 30,
            },
        },
        observer: true,
        observeParents: true,
    });
    var swiper = new Swiper(".best_slide02_06", {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 'auto',
        loopAdditionalSlides : 1,
        navigation: {
            nextEl: '.next12',
            prevEl: '.prev12',
        },
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            929: {
                slidesPerView: 'auto',  //브라우저가 768보다 클 때
                spaceBetween: 30,
                centeredSlides: false,
            },
            1349: {
                slidesPerView: 'auto',  //브라우저가 1024보다 클 때
                spaceBetween: 30,
            },
        },
        observer: true,
        observeParents: true,
    });





    var swiper = new Swiper(".review_slide", {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 'auto',
        loopAdditionalSlides : 1,
        navigation: {
            nextEl: '.next13',
            prevEl: '.prev13',
        },
        speed: 1000,
        autoplay : {
            delay: 3000,
            disableOnInteraction: false,
        },
        breakpoints: {
            929: {
                slidesPerView: 'auto',  //브라우저가 768보다 클 때
                spaceBetween: 30,
                centeredSlides: false,
            },
            1349: {
                slidesPerView: 'auto',  //브라우저가 1024보다 클 때
                spaceBetween: 30,
            },
        }
    });













    // $(".bottom_fix .inner .right div div").click(function(){
    //     var fixCheck = $(".bottom_fix .inner .right div div input:checked").length;

    //     if ( fixCheck == 0 ) {
    //         $(".bottom_fix .inner .right div div input:checkbox").attr("checked", true);
    //         $(".bottom_fix .inner .right div div span i").css({"display" : "block"});
    //     } else {
    //         $(".bottom_fix .inner .right div div input:checkbox").attr("checked", false);
    //         $(".bottom_fix .inner .right div div span i").css({"display" : "none"});
    //     }
    // });

    // $(".bottom_fix_mob .inner .top").click(function(){
    //     $(this).parent().parent().toggleClass("on");
    // });

    // $(".bottom_fix_mob .inner .pri_contents .pri div").click(function(){
    //     var mobCheck = $(".bottom_fix_mob .inner .pri_contents .pri div input:checked").length;

    //     if ( mobCheck == 0 ) {
    //         $(".bottom_fix_mob .inner .pri_contents .pri div input:checkbox").attr("checked", true);
    //         $(".bottom_fix_mob .inner .pri_contents .pri div span i").css({"display" : "block"});
    //     } else {
    //         $(".bottom_fix_mob .inner .pri_contents .pri div input:checkbox").attr("checked", false);
    //         $(".bottom_fix_mob .inner .pri_contents .pri div span i").css({"display" : "none"});
    //     }
    // });






    $('footer .inner .right div a:nth-child(1)').click(function () {
        $('.info_wrap03').css("display", "block")
    });
    $('.info_close_btn').click(function () {
        $('.info_wrap03').css("display", "none")
    });

    $('footer .inner .right div a:nth-child(2)').click(function () {
        $('.info_wrap01').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap01').css("display", "none")
    });

})