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
            } else {
                //remove the background property so it comes transparent again (defined in your css)
               $("header").removeClass("header_fixed");
            }
        });
    });

    //헤더
    $("header .gnb > li").mouseenter(function(){
        $(this).children("ul").stop().slideDown();
    });

    $("header .gnb > li").mouseleave(function(){
        $(this).children("ul").stop().slideUp();
    });

    
    // 햄버거 메뉴
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

    // flow
    $(".flow .inner .left .head").click(function(){
        $(".flow .inner .left .title ul").toggleClass("active");
    })
    

    $(".modi").click(function(){
        $(".modi-pop").show();
    });

    $(".modi-pop img").click(function(){
        $(".modi-pop").hide();
    });

    $(".ask .form .inquire div a").click(function(){
        $(".info_wrap02").show();
    });

    $(".info_close_btn").click(function(){
        $(".info_wrap02").hide();
    });

})