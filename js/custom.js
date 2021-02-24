$(function(){

  let winW = $(window).width();
  console.log(winW);

  if(winW > 600){

    $('.gnb .depth1').hover(function(){
      $(this).find("ul").stop().slideDown(400);
    });
    $('.gnb .depth1').mouseleave(function(){
      $('.gnb .depth1 .depth2').stop().slideUp(400);
    });
  } else if(winW < 600) {
    $('.gnb .depth1 .depth2').hide();
    $('.gnb .depth1').click(function(){
      $(this).find("ul").slideToggle("fast");
    });
  }
  $(".leftBox").hide();
  $(".leftBox:first").show();

  $(".mobileMenu").click(function(){
    $(this).toggleClass("on");
    if($(this).hasClass("on")){
      $(this).find("i").attr("class", "fa fa-times");
      $(this).next("ul").slideDown("fast");
    } else {
      $(this).find("i").attr("class", "fa fa-bars");
      $(this).next("ul").slideUp("fast");
    }
  });

  $(".brandBox").click(function(){
    let index = $(this).index();

    $(".leftBox").hide();
    $(".leftBox").eq(index).show();
  });

  $(".brandBox").eq(0).trigger("click");
  //강제로 index 0번째 클릭
});