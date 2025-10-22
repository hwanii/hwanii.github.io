// 왼쪽 팝업 슬라이드
var swiper = new Swiper(".popup_sec", {
    loop:true,
    autoplay : {  // 자동 슬라이드 설정 , 비 활성화 시 false
        delay : 2000,   // 시간 설정
        disableOnInteraction : false,  // false로 설정하면 스와이프 후 자동 재생이 비활성화 되지 않음
      },
    pagination: {
      el: ".popup_page",
      clickable : true,
    },
  });

// 왼쪽 팝업 슬라이드 닫기 열기 버튼
$('#slider_popup .popup_util .p_util').click(function(){
    $('#slider_popup').toggleClass('slider_popup_close');
})

$('.popup_util2 .close').click(function(){
    $('#slider_popup').addClass('slider_popup_close');
    $('.mobile_popup_util').addClass('slider_popup_close')
    $('.popup_black_bg').hide();
})

$('.popup_util2 .open').click(function(){
    $('#slider_popup').removeClass('slider_popup_close');
    $('.mobile_popup_util').removeClass('slider_popup_close')
    $('.popup_black_bg').show();
})
