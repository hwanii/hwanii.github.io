$(function () {

    $(window).resize(function () {
        let w = $(window).width();

        if (w < 768) {
            $(".sub_gnb_box p").click(function () {
                $(this).toggleClass("sub_gnb_box-active");
                $("#sub_gnb").stop().slideToggle();
            })

            $(".faq_gnb_box p").click(function () {
                $(this).toggleClass("faq_gnb_box-active");
                $("#faq_gnb").stop().slideToggle();
            })

        }

        if (w > 1024) {
            $("#gnb").hover(function () {
                $("#gnb ul, .nav_bg").stop().slideDown();
            }, function () {
                $("#gnb ul, .nav_bg").stop().slideUp();
            })

            $(".nav_bg").mouseenter(function () {
                $(this).stop().slideDown();
                $("#gnb ul").stop().slideDown();
            })

            $(".nav_bg").mouseleave(function () {
                $(this).stop().slideUp();
                $("#gnb ul").stop().slideUp();
            })

            $(window).scroll(function () {
                let s = $(window).scrollTop();

                if (500 < s) {
                    $(".sub_content02").addClass("content-on");
                }

                if (1000 < s) {
                    $(".fifth").addClass("fifth-on");
                }

                if (1700 < s) {
                    $(".way").addClass("way-on");
                }
            })

        } else if (w < 1024) {


            $("#gnb>li").click(function (e) {
                e.preventDefault();
                $("#gnb>li").removeClass("on");
                $("#gnb ul").slideUp();
                if ($(this).children("ul").is(":visible")) {
                    $(this).removeClass("on");
                    $(this).children("ul").slideUp();
                } else {
                    $(this).addClass("on");
                    $(this).children("ul").slideDown();
                }

            })

        }
    })
    $(window).trigger("resize");



    $("#gnb").removeClass('on')
    $(".nav_btn").click(function (e) {
        e.preventDefault();
        if ($(this).hasClass('on')) {
            $(this).removeClass('on')
            $("#gnb").removeClass('on')
            $("#gnb>li").removeClass("on");
            $("#gnb ul").slideUp();
        } else {
            $(this).addClass('on')
            $("#gnb").addClass('on')
        }
    })









    $(".way ul li").click(function (e) {
        e.preventDefault();
        $(".way ul li").removeClass();
        $(this).addClass("line_on");

        let i = $(this).index();

        $(".bmap .mappp").removeClass("on");
        $(".bmap .mappp").eq(i).addClass("on");

        $(".way_root_box .way_root").removeClass("active");
        $(".way_root_box .way_root").eq(i).addClass("active");
    })



    $(".faq_box").click(function (e) {
        e.preventDefault();
        $(this).stop().toggleClass("box_active");
        $(this).stop().siblings().slideToggle();

    })

    $(".faq_box_a").click(function (e) {
        e.preventDefault();
        $(this).stop().slideUp();
        $(".faq_box").removeClass("box_active");

    })




    $('.slide').bxSlider({
        mode: 'fade',
        auto: true,
        speed: 1000,
        autoControls: false,
        pager: false,
        controls: false,
        slideWidth: 1920
    });







})
