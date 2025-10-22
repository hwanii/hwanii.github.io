$(document).ready(function () {

    AOS.init();

    AOS.init({
        once: false,
    });

    $(".type_contents div").click(function(){
        $(".type_contents div").removeClass("on");
        $(this).addClass("on");
    });

    $(".carHistroy_contents div").click(function(){
        $(".carHistroy_contents div").removeClass("on");
        $(this).addClass("on");

        var i = $(this).index();

        $(".car_img div").removeClass("active");
        $(".car_img div").eq(i).addClass("active");
    });

    $(".color_contents > div div").click(function(){
        $(".color_contents > div div").removeClass("on");
        $(this).addClass("on");
    });

    $(".density_top .contents").click(function(){
        $(".density_top .contents").removeClass("on");
        $(this).addClass("on");
    });

    $(".density_bottom .tip_contents .contents").click(function(){
        $(".density_bottom .tip_contents .contents").removeClass("on");
        $(this).addClass("on");
    });

    $(".brand_category p").click(function(){
        $(".brand_category p").removeClass("brand_active");
        $(this).addClass("brand_active");

        var i = $(this).index();

        $(".brand_detail .contents").removeClass("active");
        $(".brand_detail .contents").eq(i).addClass("active");
    });

    $(".ok_category p").click(function(){
        $(".ok_category p").removeClass("on");
        $(this).addClass("on");
    });

    $(".deafening_contents > div").click(function(){
        $(".deafening_contents > div").removeClass("on");
        $(this).addClass("on");
    });

    $(".product01 .contents .contents_box").click(function(){
        $(".product01 .contents .contents_box").removeClass("on");
        $(this).addClass("on");
    });

    $(".product02 .contents .contents_box").click(function(){
        $(".product02 .contents .contents_box").removeClass("on");
        $(this).addClass("on");
    });

    $(".product03 .contents .contents_box").click(function(){
        $(".product03 .contents .contents_box").removeClass("on");
        $(this).addClass("on");
    });

    $(".ppf_package .contents").click(function(){
        $(".ppf_package .contents").removeClass("on");
        $(this).addClass("on");
    });

    $(".ppf_click_contents > div").click(function(){
        if ($(this).hasClass("on") === true) {
            $(this).removeClass("on");
            $(this).find("input:checkbox").prop("checked", false);
        } else {
            $(this).addClass("on");
            $(this).find("input:checkbox").prop("checked", true);
        }
    });

    // $(".ppf_click_contents01 > div").click(function(){
    //     if ($(this).hasClass("on") === true) {
    //         $(this).find("input:checkbox").prop("checked", false);
    //     } else {
    //         $(this).find("input:checkbox").prop("checked", true);
    //     }
    // });

    $(".middle_choice").click(function(){
        $(this).toggleClass("on");
    });





    $(".clear_btn").click(function(){
        $(".type_contents div").removeClass("on");
        $(".carHistroy_contents div").removeClass("on");
        $(".car_img div").removeClass("active");
        $(".color_contents > div div").removeClass("on");
        $(".density_top .contents").removeClass("on");
        $("input:radio").prop("checked", false);
        $("input:checkbox").prop("checked", false);
        $(".density_bottom .tip_contents .contents").removeClass("on");
        $(".ok_category p").removeClass("on");
        $(".deafening_contents > div").removeClass("on");
        $(".product01 .contents .contents_box").removeClass("on");
        $(".product02 .contents .contents_box").removeClass("on");
        $(".product03 .contents .contents_box").removeClass("on");
        $(".ppf_package .contents").removeClass("on");
        $(".ppf_click_contents > div").removeClass("on");
        $(".ppf_click_contents01 > div").removeClass("on");
        $(".save_top > div input").val("");
        $(".save_top > div .select_box div select").val("noData");
        $(".middle_choice").removeClass("on");
        $(".bottom_btn .warning").css({"display" : "none"});
        $(".bottom_btn_two .warning").css({"display" : "none"});
    });




    $(".add .left p").click(function(){
        $(".add .left p").removeClass("on");
        $(this).addClass("on");

        var i = $(this).index();

        $(".add .right div").removeClass("active");
        $(".add .right div").eq(i).addClass("active");
    });




    var swiper = new Swiper(".ad_slide", {
        loop: true,
        spaceBetween: 30,
        slidesPerView: 1,
        loopAdditionalSlides : 1,
        centeredSlides: true,
    });




    var swiper = new Swiper(".brand_category", {
        loop: false,
        spaceBetween: 20,
        slidesPerView: 'auto',
    });




    $(".density_bottom .tip_contents .contents").click(function(){
        var desnitySelect01 = $(this).find(".densitySelect01").text();
        var desnitySelect02 = $(this).find(".densitySelect02").text();
        var desnitySelect03 = $(this).find(".densitySelect03").text();
        var desnitySelect04 = $(this).find(".densitySelect04").text();
        var desnitySelect05 = $(this).find(".densitySelect05").text();

        var density701 = $(".density_middle .contents_read").find(".density70").text();
        var density501 = $(".density_middle .contents_read").find(".density50").text();
        var density301 = $(".density_middle .contents_read").find(".density30").text();
        var density151 = $(".density_middle .contents_read").find(".density15").text();

        if (desnitySelect01 == density701) {
            $(".density_middle .contents_read .density_choice label:nth-child(1) input").prop("checked", true);
        } else if (desnitySelect01 == density501) {
            $(".density_middle .contents_read .density_choice label:nth-child(2) input").prop("checked", true);
        } else if (desnitySelect01 == density301) {
            $(".density_middle .contents_read .density_choice label:nth-child(3) input").prop("checked", true);
        } else if (desnitySelect01 == density151) {
            $(".density_middle .contents_read .density_choice label:nth-child(4) input").prop("checked", true);
        }

        if (desnitySelect02 == density701) {
            $(".density_middle .contents_second .density_choice label:nth-child(1) input").prop("checked", true);
        } else if (desnitySelect02 == density501) {
            $(".density_middle .contents_second .density_choice label:nth-child(2) input").prop("checked", true);
        } else if (desnitySelect02 == density301) {
            $(".density_middle .contents_second .density_choice label:nth-child(3) input").prop("checked", true);
        } else if (desnitySelect02 == density151) {
            $(".density_middle .contents_second .density_choice label:nth-child(4) input").prop("checked", true);
        }

        if (desnitySelect03 == density701) {
            $(".density_middle .contents_third .density_choice label:nth-child(1) input").prop("checked", true);
        } else if (desnitySelect03 == density501) {
            $(".density_middle .contents_third .density_choice label:nth-child(2) input").prop("checked", true);
        } else if (desnitySelect03 == density301) {
            $(".density_middle .contents_third .density_choice label:nth-child(3) input").prop("checked", true);
        } else if (desnitySelect03 == density151) {
            $(".density_middle .contents_third .density_choice label:nth-child(4) input").prop("checked", true);
        }

        if (desnitySelect04 == density701) {
            $(".density_middle .contents_fourth .density_choice label:nth-child(1) input").prop("checked", true);
        } else if (desnitySelect04 == density501) {
            $(".density_middle .contents_fourth .density_choice label:nth-child(2) input").prop("checked", true);
        } else if (desnitySelect04 == density301) {
            $(".density_middle .contents_fourth .density_choice label:nth-child(3) input").prop("checked", true);
        } else if (desnitySelect04 == density151) {
            $(".density_middle .contents_fourth .density_choice label:nth-child(4) input").prop("checked", true);
        }

        if (desnitySelect05 == density701) {
            $(".density_middle .contents_fifth .density_choice label:nth-child(1) input").prop("checked", true);
        } else if (desnitySelect05 == density501) {
            $(".density_middle .contents_fifth .density_choice label:nth-child(2) input").prop("checked", true);
        } else if (desnitySelect05 == density301) {
            $(".density_middle .contents_fifth .density_choice label:nth-child(3) input").prop("checked", true);
        } else if (desnitySelect05 == density151) {
            $(".density_middle .contents_fifth .density_choice label:nth-child(4) input").prop("checked", true);
        }
    });




    $(".ppf_package .contents").click(function(){
        var ppf01 = $(this).children(".txt_box").children(".ppfHeadLamp").text();
        var ppf02 = $(this).children(".txt_box").children(".ppfFrontBumperSide").text();
        var ppf03 = $(this).children(".txt_box").children(".ppfSideMirror").text();
        var ppf04 = $(this).children(".txt_box").children(".ppfDoorCup").text();
        var ppf05 = $(this).children(".txt_box").children(".ppfDoorStep").text();
        var ppf06 = $(this).children(".txt_box").children(".ppfDoorEdge").text();
        var ppf07 = $(this).children(".txt_box").children(".ppfGasDoor").text();
        var ppf08 = $(this).children(".txt_box").children(".ppfRearBumperSide").text();
        var ppf09 = $(this).children(".txt_box").children(".ppfRearBumperUpper").text();

        var ppfHeadLamp = $(".ppf_click_contents01 > div .txt_box .headLamp").text();
        var ppfFrontBumperSide = $(".ppf_click_contents01 > div .txt_box .frontBumperSide").text();
        var ppfSideMirror = $(".ppf_click_contents01 > div .txt_box .sideMirror").text();
        var ppfDoorCup = $(".ppf_click_contents01 > div .txt_box .doorCup").text();
        var ppfDoorStep = $(".ppf_click_contents01 > div .txt_box .doorStep").text();
        var ppfDoorEdge = $(".ppf_click_contents01 > div .txt_box .doorEdge").text();
        var ppfGasDoor = $(".ppf_click_contents01 > div .txt_box .gasDoor").text();
        var ppfRearBumperSide = $(".ppf_click_contents01 > div .txt_box .rearBumperSide").text();
        var ppfRearBumperUpper = $(".ppf_click_contents01 > div .txt_box .rearBumperUpper").text();

        $(".ppf_click_contents01 > div").removeClass("on");
        $(".ppf_click_contents01 > div .txt_box input").prop("checked", false);

        if (ppf01 == ppfHeadLamp) {
            $(".ppf_click_contents01 > div:nth-child(1)").addClass("on");
            $(".ppf_click_contents01 > div:nth-child(1) .txt_box input").prop("checked", true);
        }

        if (ppf02 == ppfFrontBumperSide) {
            $(".ppf_click_contents01 > div:nth-child(2)").addClass("on");
            $(".ppf_click_contents01 > div:nth-child(2) .txt_box input").prop("checked", true);
        }

        if (ppf03 == ppfSideMirror) {
            $(".ppf_click_contents01 > div:nth-child(3)").addClass("on");
            $(".ppf_click_contents01 > div:nth-child(3) .txt_box input").prop("checked", true);
        }

        if (ppf04 == ppfDoorCup) {
            $(".ppf_click_contents01 > div:nth-child(4)").addClass("on");
            $(".ppf_click_contents01 > div:nth-child(4) .txt_box input").prop("checked", true);
        }

        if (ppf05 == ppfDoorStep) {
            $(".ppf_click_contents01 > div:nth-child(5)").addClass("on");
            $(".ppf_click_contents01 > div:nth-child(5) .txt_box input").prop("checked", true);
        }

        if (ppf06 == ppfDoorEdge) {
            $(".ppf_click_contents01 > div:nth-child(6)").addClass("on");
            $(".ppf_click_contents01 > div:nth-child(6) .txt_box input").prop("checked", true);
        }

        if (ppf07 == ppfGasDoor) {
            $(".ppf_click_contents01 > div:nth-child(7)").addClass("on");
            $(".ppf_click_contents01 > div:nth-child(7) .txt_box input").prop("checked", true);
        }

        if (ppf08 == ppfRearBumperSide) {
            $(".ppf_click_contents01 > div:nth-child(8)").addClass("on");
            $(".ppf_click_contents01 > div:nth-child(8) .txt_box input").prop("checked", true);
        }

        if (ppf09 == ppfRearBumperUpper) {
            $(".ppf_click_contents01 > div:nth-child(9)").addClass("on");
            $(".ppf_click_contents01 > div:nth-child(9) .txt_box input").prop("checked", true);
        }
    });

})