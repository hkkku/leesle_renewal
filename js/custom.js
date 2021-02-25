$(function(){


  function responsiveWidth(){

    let winW = $(window).width();
    console.log(winW);

      if(winW >= 600){
        $('.gnb .depth1').mouseenter(function(){
          $(this).find("ul").stop().slideDown(400);
        });
        $('.gnb .depth1').mouseleave(function(){
          $('.gnb .depth1 .depth2').stop().slideUp(400);
        });

      } else if(winW < 600) {
        $('.gnb .depth1 .depth2').hide();
        $('.gnb .depth1').click(function(){
          $(this).find(".depth2").stop().slideToggle("fast");
        });
      }
  };

    responsiveWidth();
    
    var delta = 300; 
    var timer = null;

    $(window).resize(function(){
      clearTimeout( timer ); 
      timer = setTimeout( resizeDone, delta );
    });
    
    function resizeDone(){ 
      history.go(0);
      responsiveWidth();
    };



  $(".leftBox").hide();
  $(".leftBox:first").show();

  $(".mobileMenu").click(function(){
    $(this).toggleClass("on");
    if($(this).hasClass("on")){
      $(this).find("i").attr("class", "fa fa-times");
      $(this).next(".gnb").slideDown("fast");
    } else {
      $(this).find("i").attr("class", "fa fa-bars");
      $(this).next(".gnb").slideUp("fast");
    }
  });

  $(".brandBox").click(function(){
    let index = $(this).index();

    $(".leftBox").hide();
    $(".leftBox").eq(index).show();
  });

  $(".brandBox").eq(0).trigger("click");
  //강제로 index 0번째 클릭

  $("#slider").lightSlider({
      mode:'slide',    // 이미지가 표시되는 형식 (fade / slide)
      loop:true,       // 무한반복 할 것인지
      auto:true,       // 자동 슬라이드
      keyPress:true,   // 키보드 탐색 허용
      pager:false,     // 페이지 표시
      speed:1500,      // 슬라이드 되는 속도
      pause:4000       // 이미지가 머무는 시간
  });


});