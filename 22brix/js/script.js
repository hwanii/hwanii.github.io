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


    //햄버거 메뉴
    // $(".ham_btn").click(function(){
    //     $("aside").animate({"right" : "0px"},300);
    //     $(".back_bg").show();
    // });
    
    // $(".close").click(function(){
    //     $("aside").animate({"right" : "-300px"},300);
    //     $(".back_bg").hide();
    // });
    
    // $(".back_bg").click(function(){
    //     $("aside").animate({"right" : "-300px"},300);
    //     $(".back_bg").hide();
    // });


    // var swiper = new Swiper(".main-slide", {
    //     loop: true,
    //     slidesPerView: 1,
    //     loopAdditionalSlides : 1,
    //     centeredSlides: true,
    //     pagination: {
    //         el: ".swiper-pagination",
    //         clickable: true,
    //     },
    //     navigation: {
    //         nextEl: '.swiper-btn-next01',
    //         prevEl: '.swiper-btn-prev01',
    //     },
    // });


    $(window).scroll(function(){
        var paraHeight = $(window).scrollTop();
        var contentTop = $(".s-d .inner .s-d-top").innerHeight();
        var contentBottom = $(".s-d .s-d-mid .inner > div").innerHeight();
        var contentInnerHeight = contentTop + contentBottom;

        // console.log(paraHeight);

        // if (paraHeight > 600) {
        //     $('.count-num').each(function() {
        //         var $this = $(this),
        //             countTo = $this.attr('data-count');
        //         $({ countNum: $this.text()}).animate({
        //             countNum: countTo 
        //         },
        //         {
        //             duration: 1500,
        //             easing:'linear',
        //             step: function() {
        //                 $this.text(Math.floor(this.countNum));
        //             },
        //             complete: function() {
        //                 $this.text(this.countNum);
        //             }
        //         });  
        //     });
        // };

        

        
        
        // if (paraHeight < 100) {
        //     $(".img_sticky").css({
        //         "opacity" : 0,
        //     });
        // };

        // if (paraHeight > contentInnerHeight-250) {
        //     $(".img_sticky").css({
        //         "position" : "absolute",
        //     });
        // };

        // if (paraHeight < contentInnerHeight-250) {
        //     $(".img_sticky").css({
        //         "position" : "fixed",
        //     });
        // };

    });



    $(".performance .inner .col_contents01 > div:nth-child(1)").mouseenter(function(){
        $(this).children("img").attr("src","../img/icon-performance01.png");
    });
    $(".performance .inner .col_contents01 > div:nth-child(1)").mouseleave(function(){
        $(this).children("img").attr("src","../img/icon-performance01-on.png");
    });
    $(".performance .inner .col_contents01 > div:nth-child(2)").mouseenter(function(){
        $(this).children("img").attr("src","../img/icon-performance02.png");
    });
    $(".performance .inner .col_contents01 > div:nth-child(2)").mouseleave(function(){
        $(this).children("img").attr("src","../img/icon-performance02-on.png");
    });
    $(".performance .inner .col_contents01 > div:nth-child(3)").mouseenter(function(){
        $(this).children("img").attr("src","../img/icon-performance03.png");
    });
    $(".performance .inner .col_contents01 > div:nth-child(3)").mouseleave(function(){
        $(this).children("img").attr("src","../img/icon-performance03-on.png");
    });
    $(".performance .inner .col_contents01 > div:nth-child(4)").mouseenter(function(){
        $(this).children("img").attr("src","../img/icon-performance04.png");
    });
    $(".performance .inner .col_contents01 > div:nth-child(4)").mouseleave(function(){
        $(this).children("img").attr("src","../img/icon-performance04-on.png");
    });

    $(".performance .inner .col_contents02 > div:nth-child(1)").mouseenter(function(){
        $(this).children("img").attr("src","../img/commerce04.png");
    });
    $(".performance .inner .col_contents02 > div:nth-child(1)").mouseleave(function(){
        $(this).children("img").attr("src","../img/commerce04-on.png");
    });
    $(".performance .inner .col_contents02 > div:nth-child(2)").mouseenter(function(){
        $(this).children("img").attr("src","../img/commerce05.png");
    });
    $(".performance .inner .col_contents02 > div:nth-child(2)").mouseleave(function(){
        $(this).children("img").attr("src","../img/commerce05-on.png");
    });
    $(".performance .inner .col_contents02 > div:nth-child(3)").mouseenter(function(){
        $(this).children("img").attr("src","../img/commerce06.png");
    });
    $(".performance .inner .col_contents02 > div:nth-child(3)").mouseleave(function(){
        $(this).children("img").attr("src","../img/commerce06-on.png");
    });
    $(".performance .inner .col_contents02 > div:nth-child(4)").mouseenter(function(){
        $(this).children("img").attr("src","../img/commerce07.png");
    });
    $(".performance .inner .col_contents02 > div:nth-child(4)").mouseleave(function(){
        $(this).children("img").attr("src","../img/commerce07-on.png");
    });



    $(".regist_process .contents div.content01").mouseenter(function(){
        $(".regist_process .contents > span.left01").addClass("on");
    });
    $(".regist_process .contents div.content01").mouseleave(function(){
        $(".regist_process .contents > span.left01").removeClass("on");
    });
    $(".regist_process .contents div.content02").mouseenter(function(){
        $(".regist_process .contents > span.left02").addClass("on");
    });
    $(".regist_process .contents div.content02").mouseleave(function(){
        $(".regist_process .contents > span.left02").removeClass("on");
    });







    setTimeout(function() {
        $(".flip").addClass("on");
        $(".graph .graph_inner img.g01").addClass("off");
        $(".graph .graph_inner img.g02").addClass("on");
    }, 1500);




    $(".about .col_contents > a").mouseenter(function(){
        $(".about .col_contents > a").removeClass("active");
        $(this).addClass("active");
    });

    $(".about .col_contents > a").mouseleave(function(){
        $(".about .col_contents > a").removeClass("active");
    });





    //개인정보취급방침 동의 팝업창
    $('footer .inner .right div a:nth-child(1)').click(function () {
        $('.info_wrap01').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap01').css("display", "none")
    });


    //사이트이용약관 팝업창
    $('footer .inner .right div a:nth-child(2)').click(function () {
        $('.info_wrap02').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap02').css("display", "none")
    });


    //정보무단수집거부 팝업창
    $('footer .inner .right div a:nth-child(3)').click(function () {
        $('.info_wrap03').css("display", "block")
    });

    $('.info_close_btn').click(function () {
        $('.info_wrap03').css("display", "none")
    });

})