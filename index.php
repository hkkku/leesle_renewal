<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>오, 한복한 인생 ― LEESLE</title>

  <!--  Awesome Font link -->
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
  />
  <!-- Reset CSS Link -->
  <link rel="stylesheet" href="/leesle/css/reset.css">
  <!-- Main CSS Link -->
  <link rel="stylesheet" href="/leesle/css/style.css">
  <link rel="stylesheet" href="/leesle/css/media.css">

</head>
<body>

  <!-- All contents are in WRAPS -->
  <div class="wrap">
    <header>
      <div class="headerWrap">
        <div class="logo">
          <img src="/leesle/img/logo.png" alt="">
        </div>
        <ul class="gnb clear">
          <li><a href="">SHOP</a></li>
          <li><a href="">ABOUT</a></li>
          <li><a href="">COLLABO</a></li>
          <li><a href="">LOOK</a></li>
          <li><a href="">Q&A</a></li>
        </ul>
      </div>
      <div class="banner">
        <div class="imgBox"></div>
        <div class="bannerTxt">
          <h2>오! 한복한 인생 - 리슬</h2>
          <p class="slogan">BRAVO, HANBOK LIFE! LEESLE</p>
          <p class="subTxt">리슬은 한복을 재해석 한 디자인으로 보통의 날을 특별하게 만들어주는 모던한복 브랜드입니다.</p>
          <p class="subTxt">베이직한 디자인과 좋은 품질을 추구하며 누구나 오랫동안 즐길 수 있는 전통을 만듭니다.</p>
          <a href="#">MORE</a>
        </div>
      </div>
    </header>
    <div class="center">
      <div class="productWrap">
        <div class="bestTit">
          <h2>Best Leesle</h2>
          <p>한 해 동안 가장 많은 사랑을 받은 한복들</p>
        </div>
        <div class="productBoxes">
        </div>
        <div class="btn">
            <button class="moreBtn">
             <i class="fa fa-plus-circle"></i>
             <p>더 보기</p>
            </button>
          </div>
        <!-- product boxes end -->
      </div>
      <div class="brandWrap">
        <div class="brandTit">
          <h2>About Leesle</h2>
        </div>
        <div class="brandBoxes">
          <div class="leftBox">
            <h2>Thank You, Leesle</h2>
            <p>
              리슬과 기분 좋은 일상을 보내고 계신가요?</br>
              리슬과 즐거운 여행 보내셨나요?</br>
              따뜻한 격려와 칭찬, 리슬과 함께한 행복한 여러분의 이야기는 리슬의 소중한 원동력입니다.</br>
            </p>
            <a href="#">View More</a>
          </div>
          <!-- brand left box end -->
          <div class="rightBox">
            <div class="brandBox">
              <img src="/leesle/data/brand_img/brand-01.jpg" alt="">
              <span class="overlay">
              </span>
            </div>
            <div class="brandBox">
              <img src="/leesle/data/brand_img/brand-02.jpg" alt="">
            </div>
            <div class="brandBox">
              <img src="/leesle/data/brand_img/brand-03.jpg" alt="">
            </div>
            <div class="brandBox">
              <img src="/leesle/data/brand_img/brand-04.jpg" alt="">
            </div>
         </div>
         <!-- brand right box end -->
        </div>
        <!-- brand boxed end -->
      </div>
      <!-- brand wrap end -->
    </div>
    <!-- center div end -->
   
    <button type="button" onclick="topFunction()" class="topBtn" id="topBtn">
      <i class="fa fa-arrow-circle-up"></i>
      <p>Go Top</p>
    </button>
    
  </div>
  <!-- wrap div end -->
  <footer>
    <p>copyright &copy; hkkku all rights reserved.</p>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="/leesle/js/product.js"></script>
  <script>
    var topBtn = document.getElementById("topBtn");

    window.onscroll = function() {scrollFunction()};

    function scrollFunction() {
      if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
       $(".topBtn").fadeIn();
      } else {
       $(".topBtn").fadeOut();
      }      
    }
    function topFunction() {
      $('html, body').animate({
       scrollTop : 0
       }, 600);
       return false;
    }
  </script>
</body>
</html>