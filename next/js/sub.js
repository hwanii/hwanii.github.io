$(function () {

    AOS.init();

    AOS.init({
        once: false,
    });

    $(".ham").click(function(){
        $("aside").animate({"right" : "0"});
        $(".aside_bg").show();
    });

    $("aside > span").click(function(){
        $("aside").animate({"right" : "-360px"});
        $(".aside_bg").hide();
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

})