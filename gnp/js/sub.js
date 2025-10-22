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
                // $("header .inner .h-menu h1 a img").attr("src","./img/b-logo.png");
                // $(".ham-btn img").attr("src","/img/ham.png");
            } else {
                //remove the background property so it comes transparent again (defined in your css)
                $("header").removeClass("header_fixed");
            //    $("header .inner .h-menu h1 a img").attr("src","/img/logo.png");
            //    $(".ham-btn img").attr("src","/img/w-ham.png");
            }
        });
    });

    //header 2차메뉴
    $("header .gnb > li").mouseenter(function(){
        $(this).children("ul").stop().slideDown();
    });

    $("header .gnb > li").mouseleave(function(){
        $(this).children("ul").stop().slideUp();
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
    
    //certification
    $(window).resize(function(){ 
        if (window.innerWidth > 768) {
            $(".certification .inner > div > img").click(function(){
                $(this).siblings("div").show();
                $(".certification .bg").show();
            });
        
            $(".certification .inner > div > button").click(function(){
                $(this).siblings("div").show();
                $(".certification .bg").show();
            });
        
            $(".certification .inner .certi-big").click(function(){
                $(".certification .inner .certi-big").hide();
                $(".certification .bg").hide();
            });
        
            $(".certification .bg").click(function(){
                $(".certification .inner .certi-big").hide();
                $(".certification .bg").hide();
            });
        } else {
        
        }
    }).resize(); 


    

    //sun-wrap
    var swiper = new Swiper(".sun-wrap .mySwiper", {
        loop: false,
        slidesPerView: "auto",
        loopAdditionalSlides : 1,
        breakpoints: {
            1280: {
                slidesPerView: 11,
            },
        },
    });

    $(".sun-wrap .swiper-slide").click(function(){
        $(".sun-wrap .swiper-slide").removeClass("on");
        $(this).addClass("on");

        var i = $(this).index();

        $(".description").removeClass("active");
        $(".description").eq(i).addClass("active");
    });

    //sun-table
    $(".sun-02 .inner .table01-btn01").click(function(){
        $(this).hide();
        $(".sun-02 .inner .table01 > ul").css({"display" : "flex"});
        $(".sun-02 .inner .table01-btn02").show();
    });

    $(".sun-02 .inner .table01-btn02").click(function(){
        $(this).hide();
        $(".sun-02 .inner .table01 > ul").css({"display" : "none"});
        $(".sun-02 .inner .table01-btn01").show();
    });

    $(".sun-02 .inner .table02-btn01").click(function(){
        $(this).hide();
        $(".sun-02 .inner .table02 > ul").css({"display" : "flex"});
        $(".sun-02 .inner .table02-btn02").show();
    });

    $(".sun-02 .inner .table02-btn02").click(function(){
        $(this).hide();
        $(".sun-02 .inner .table02 > ul").css({"display" : "none"});
        $(".sun-02 .inner .table02-btn01").show();
    });

    $(".sun-02 .inner .table03-btn01").click(function(){
        $(this).hide();
        $(".sun-02 .inner .table03 > ul").css({"display" : "flex"});
        $(".sun-02 .inner .table03-btn02").show();
    });

    $(".sun-02 .inner .table03-btn02").click(function(){
        $(this).hide();
        $(".sun-02 .inner .table03 > ul").css({"display" : "none"});
        $(".sun-02 .inner .table03-btn01").show();
    });



    $(window).resize(function(){ 
        if (window.innerWidth < 769) {
        
        } else {
        
        }
    }).resize(); 








})