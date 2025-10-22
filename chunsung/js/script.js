$(document).ready(function () {

    AOS.init();

    AOS.init({
        once: false,
    });





    $('.gnb li a').click(function () {
        link = $(this).attr("href");
        $("body, html").animate({ scrollTop: $(link).offset().top - 100 }, 500);

        return false;
    });

    var scrollLink = $('.page_scroll');
    $(window).scroll(function () {
        var scrollbarLocation = $(this).scrollTop();

        scrollLink.each(function () {

            var sectionOffset = $(this.hash).offset().top - 200;

            if (sectionOffset <= scrollbarLocation) {
                $(this).parent().addClass('active');
                $(this).parent().siblings().removeClass('active');
            }
        });

        var mainHeight = $(window).scrollTop();

        if ( mainHeight < 400 ) {
            $(".gnb li").removeClass("active");
        }
    });





    var swiper = new Swiper(".main_slide", {
        loop: true,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        speed: 1000,
        autoplay : {
            delay : 3000,
            disableOnInteraction : false,
        },
    });





    var swiper = new Swiper(".tech_slide", {
        loop: true,
        slidesPerView: 'auto',
        loopAdditionalSlides : 1,
        spaceBetween: 25,
        navigation: {
            prevEl: '.prev_btn',
            nextEl: '.next_btn',
        },
    });






})