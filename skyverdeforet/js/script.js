$(function (){
    var h; // 윈도우 크기를 지정하는 변수입니다.
    var t; // 윈도우의 상단 좌표를 지정하는 변수입니다.
    var num = 1;
    var playing = false;
    
    $("body, html").animate({
        scrollTop: 0
    }, 500, "easeInQuart");

    $(window).resize(function () {
        h = $(window).height();
        $(".contents").css({
            height: h
        })
    })
    
    
    $("body, html").mousewheel(function (e, delta) {
        if (playing == false) {
            if (delta > 0) {
                if (num > 1) {
                    num--;
                }
            } else {
                if (num < 3) {
                    num++;
                }
            }
            playing = true
            
            $(".pager a").removeClass('page_on')
            $(".pager a").eq(num-1).addClass('page_on')
            
            
            
            $("body, html").animate({scrollTop:$("#page"+num).offset().top}, 1000, "easeInQuart", function () {
                playing = false;
            });
        }
    })
    
    
    
    
    
    
    $(window).scroll(function(){

		t=$(window).scrollTop();

		if(t < h - 400){
            $(".conBox").removeClass('active');
			$("#page1").children(".conBox").addClass("active");
            $(".left-text span:first-child").text("01");
            $(".left-text span:last-child").text("INTRO");
		}else if(t < 2*h - 400){
            $(".conBox").removeClass('active');
			$("#page2").children(".conBox").addClass("active");
            $(".left-text span:first-child").text("02");
            $(".left-text span:last-child").text("CENTERAL PARK");
		}else if(t < 3*h - 400){
            $(".conBox").removeClass('active');
			$("#page3").children(".conBox").addClass("active");
            $(".left-text span:first-child").text("03");
            $(".left-text span:last-child").text("LIFE GALLERY");
		}
		
	});
    
    
    
    $(".up-fix p").click(function(){
        $("#nav").toggleClass("nav_on");
    })
    
    
    
    $(".pager a").click(function () {
        num = $(this).index();
        $(".pager a").removeClass('page_on')
        $(this).addClass('page_on')
        $("body, html").animate({scrollTop:$("#page"+(num+1)).offset().top}, 1000, "easeInQuart");
    })
    

    
    
    
    
    
    
    
    
    
    $(window).trigger("resize")
    $(window).trigger("scroll")
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
})