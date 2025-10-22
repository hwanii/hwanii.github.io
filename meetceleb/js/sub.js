$(function () {

    AOS.init();

    AOS.init({
        once: false,
    });





    $(".ham_btn").click(function(){
        if ( $(this).hasClass("on") == false ) {
            $(this).addClass("on");
            $("aside").animate({"right" : "0px"});
            $(".aside_bg").css({"display" : "block"});

            $(".ham_btn span:nth-child(1)").animate({"top" : "50%"},100);
            $(".ham_btn span:nth-child(3)").animate({"top" : "50%"},100);

            setTimeout(function(){
                $(".ham_btn span:nth-child(1)").css({"display" : "none"});
                $(".ham_btn span:nth-child(2)").css({"display" : "none"});
                $(".ham_btn span:nth-child(3)").css({"display" : "none"});
            }, 150);

            $(".ham_btn span:nth-child(4)").addClass("on");
            $(".ham_btn span:nth-child(5)").addClass("on");
        } else {
            $(this).removeClass("on");
            $("aside").animate({"right" : "-240px"});
            $(".aside_bg").css({"display" : "none"});

            $(".ham_btn span:nth-child(4)").removeClass("on");
            $(".ham_btn span:nth-child(5)").removeClass("on");

            setTimeout(function(){
                $(".ham_btn span:nth-child(1)").css({"display" : "block"});
                $(".ham_btn span:nth-child(2)").css({"display" : "block"});
                $(".ham_btn span:nth-child(3)").css({"display" : "block"});
            }, 100);

            setTimeout(function(){
                $(".ham_btn span:nth-child(1)").animate({"top" : "10px"},100);
                $(".ham_btn span:nth-child(3)").animate({"top" : "30px"},100);
            }, 100);
        }
    });

    $(".aside_bg").click(function(){
        if ( $(".ham_btn").hasClass("on") == true ) {
            $(".ham_btn").removeClass("on");
            $(this).css({"display" : "none"});
            $("aside").animate({"right" : "-240px"});

            $(".ham_btn span:nth-child(4)").removeClass("on");
            $(".ham_btn span:nth-child(5)").removeClass("on");

            setTimeout(function(){
                $(".ham_btn span:nth-child(1)").css({"display" : "block"});
                $(".ham_btn span:nth-child(2)").css({"display" : "block"});
                $(".ham_btn span:nth-child(3)").css({"display" : "block"});
            }, 100);

            setTimeout(function(){
                $(".ham_btn span:nth-child(1)").animate({"top" : "10px"},100);
                $(".ham_btn span:nth-child(3)").animate({"top" : "30px"},100);
            }, 100);
        }
    });





    var swiper = new Swiper(".host_slide", {
        loop: true,
        slidesPerView: 'auto',
        loopAdditionalSlides : 1,
        spaceBetween: 40,
        navigation: {
            prevEl: '.host_prev',
            nextEl: '.host_next',
        },
        speed: 1000,
        autoplay : {
            delay : 3000,
            disableOnInteraction : false,
        },
    });

    $(".slide_contents .host_slide .swiper-slide").mouseenter(function(){
        $(this).children(".bg").css({"display" : "block"});
        $(this).children(".bg").animate({"opacity" : "0.4"},300);
        $(this).children("a").css({"display" : "block"});
        $(this).children("a").animate({"opacity" : "1"},300);
    });

    $(".slide_contents .host_slide .swiper-slide").mouseleave(function(){
        $(this).children(".bg").animate({"opacity" : "0"},300);
        $(this).children("a").animate({"opacity" : "0"},300);

        setTimeout(function(){
            $(this).children(".bg").css({"display" : "none"});
            $(this).children("a").css({"display" : "none"});
        },300)
    });
})