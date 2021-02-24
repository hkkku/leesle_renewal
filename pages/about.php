<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>오, 한복한 인생 ― LEESLE</title>
  <link rel="shortcut icon" href="/leesle/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/leesle/favicon.ico" type="image/x-icon">
  <!--  Awesome Font link -->
  <link
  rel="stylesheet"
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"
  />
  <!-- Reset CSS Link -->
  <link rel="stylesheet" href="/leesle/css/reset.css">
  <!-- Main CSS Link -->
  <link rel="stylesheet" href="/leesle/css/lightslider.css">
  <link rel="stylesheet" href="/leesle/css/style.css">
  <link rel="stylesheet" href="/leesle/css/media.css">

</head>
<body>

  <!-- All contents are in WRAPS -->
  <div class="wrap">
    <header>
      <div class="headerWrap">
        <div class="loginBar">
          <ul class="loginTab clear">
            <li><a href="">LOGIN</a></li>
            <li><a href="">회원가입</a></li>
            <li><a href=""><i class="fa fa-cart-plus"></i>장바구니</a></li>
            <li>
              <select>
                <option value="kor">한국어</option>
                <option value="eng">English</option>
                <option value="jap">日本語</option>
              </select>
            </li>
          </ul>
        </div>
        <h2 class="logo">
         <a href="/leesle/index.php"><img src="/leesle/img/logo.png" alt="leesle logo"></a> 
        </h2>
        <div class="gnbWrap">
         <div class="mobileMenu">
           <i class="fa fa-bars"></i>
         </div>
         <ul class="gnb clear">
            <li class="depth1">
              <a href="#">SHOP</a>
              <ul class="depth2">
                <li><a href="#">베스트</a></li>
                <li><a href="#">외투</a></li>
                <li><a href="#">상의</a></li>
                <li><a href="#">원피스</a></li>
                <li><a href="#">하의</a></li>
              </ul>
            </li>
            <li class="depth1"><a href="#">ABOUT</a></li>
            <li class="depth1">
              <a href="#">COLLABO</a>
              <ul class="depth2">
                <li><a href="#">LESSLE X CARD</a></li>
                <li><a href="#">MEDIA</a></li>
              </ul>
            </li>
            <li class="depth1">
              <a href="#">Q&A</a>
              <ul class="depth2">
                <li><a href="#">자주 묻는 질문</a></li>
                <li><a href="#">고객 문의</a></li>
              </ul>
            </li>
            <li class="depth1"><a href="#">LOOK</a></li>
          </ul>

        </div>
      </div>
    </header>
    <div class="slide-wrap">
      <div class="slide-content">
        <ul id="slider" class="slider">
          <li class="item1">
           <!-- <img src="/leesle/img/about_main_01.jpg" alt=""> -->
          </li>
          <li class="item2">
           <!-- <img src="/leesle/img/about_main_02.jpg" alt=""> -->
          </li>
          <li class="item3">
           <!-- <img src="/leesle/img/about_main_03.jpg" alt=""> -->
          </li>
        </ul>
      </div>
    </div>
    <div class="center">


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
  <script src="/leesle/js/custom.js"></script>
  <script src="/leesle/js/lightslider.js"></script>
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