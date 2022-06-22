$(function(){

    $(window).resize(function(){
        if (window.innerWidth < 670) {
            var swiper = new Swiper('.snbSwiper', {
                slidesPerView: 'auto',
                preventClicks: true,
                preventClicksPropagation: false,
                observer: true,
                observeParents: true
            });
            var $snbSwiperItem = $('.snbSwiper .swiper-wrapper .swiper-slide a');
            $snbSwiperItem.click(function(){
                var target = $(this).parent();
                $snbSwiperItem.parent().stop().removeClass('on')
                target.stop().addClass('on');
                muCenter(target);
            });
        
            function muCenter(target){
                var snbwrap = $('.snbSwiper .swiper-wrapper');
                var targetPos = target.position();
                var box = $('.snbSwiper');
                var boxHarf = box.width()/2;
                var pos;
                var listWidth=0;
                
                snbwrap.find('.swiper-slide').each(function(){ listWidth += $(this).outerWidth(); });
                
                var selectTargetPos = targetPos.left + target.outerWidth()/2;
                if (selectTargetPos <= boxHarf) { // left
                    pos = 0;
                }else if ((listWidth - selectTargetPos) <= boxHarf) { //right
                    pos = listWidth-box.width();
                }else {
                    pos = selectTargetPos - boxHarf;
                };
                
                setTimeout(function(){snbwrap.css({
                    "transform": "translate3d("+ (pos*-1) +"px, 0, 0)",
                })});
            };
        }
    })
    $(window).trigger("resize");

    
    
    new Swiper('.liveSlide', {
        slidesPerView : 'auto',
        spaceBetween : 0, 
        loop : true,
        speed: 1000,
        parallax: true,
        autoplay : {
            delay : 4000,
            disableOnInteraction: false,
        }
    });  


    
    new Swiper('.banner', {
        slidesPerView : 'auto',
        spaceBetween : 0, 
        loop : true,
        speed: 1000,
        parallax: true,
        autoplay : {
            delay : 2500,
            disableOnInteraction: false,
        }
    });

    $(window).scroll(function(){
        
        var t = $(window).scrollTop();
        if(t>300){
            $(".write").addClass('active')
        }else{
            $(".write").removeClass('active')
        }
    });


    $(".img_fix").click(function(){
        $(".img_popBg").show();
        $(".img_popCon").show();
    });

    $(".img_popCon_top .close").click(function(){
        $(".img_popBg").hide();
        $(".img_popCon").hide();
    });

    $(".img_popBg").click(function(){
        $(this).hide();
        $(".img_popCon").hide();
    });

    new Swiper('.category', {
        slidesPerView : 'auto',
        spaceBetween : 0, 
        loop : false,
    });  

    $(".top_menu ul li:nth-child(2)").click(function(){
        $(".writing_bg").show();
        $(".writing").show();
    });

    $(".write").click(function(){
        $(".writing_bg").show();
        $(".writing").show();
    });

    $(".writing_boxTop .close").click(function(){
        $(".writing_bg").hide();
        $(".writing").hide();
    });

    $(".writing_bg").click(function(){
        $(".writing_bg").hide();
        $(".writing").hide();
    }); 

    $(".category ul li").click(function(){
        $(".category ul li").removeClass("cateOn");
        $(this).addClass("cateOn");
    });

    $(".id_firstBox button:first-child").click(function(){
        $(".id_firstBox").hide();
        $(".id_secondBox").show();
    });

    $(".id_firstBox button:last-child").click(function(){
        $(".id_firstBox").hide();
        $(".id_thirdBox").show();
    });

    $(".password_firstBox button:first-child").click(function(){
        $(".password_firstBox").hide();
        $(".password_secondBox").show();
        $(".find_password input").show();
        $(".find_password").css({"padding" : "0 16px 0"})
    });

    $(".password_firstBox button:last-child").click(function(){
        $(".password_firstBox").hide();
        $(".password_thirdBox").show();
        $(".find_password input").show();
        $(".find_password").css({"padding" : "0 16px 0"})
    });










    
})