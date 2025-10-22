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


    





})