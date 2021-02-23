$(function(){

  $('.gnb .depth1').on("mouseenter", function(){
    $('.gnb li .depth2', this).slideDown(1500);
  });
  $('.gnb .depth1').mouseleave(function(){
    $('.gnb li .depth2', this).slideUp(1500);
  });

  $(".leftBox").hide();
  $(".leftBox:first").show();

  $(".brandBox").click(function(){
    let index = $(this).index();

    $(".leftBox").hide();
    $(".leftBox").eq(index).show();
  });

  $(".brandBox").eq(0).trigger("click");
  //강제로 index 0번째 클릭
});