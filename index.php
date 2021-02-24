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
            <li class="depth1"><a href="">ABOUT</a></li>
            <li class="depth1">
              <a href="">COLLABO</a>
              <ul class="depth2">
                <li><a href="#">LESSLE X CARD</a></li>
                <li><a href="#">MEDIA</a></li>
              </ul>
            </li>
            <li class="depth1">
              <a href="">Q&A</a>
              <ul class="depth2">
                <li><a href="#">자주 묻는 질문</a></li>
                <li><a href="#">고객 문의</a></li>
              </ul>
            </li>
            <li class="depth1"><a href="">LOOK</a></li>
          </ul>

        </div>
      </div>
    </header>
    <div class="banner">
        <div class="imgBox">
          <img src="/leesle/img/main_banner.jpg" alt="leesle main banner">
        </div>
        <div class="bannerTxt">
          <h2>오! 한복한 인생 - 리슬</h2>
          <p class="slogan">BRAVO, HANBOK LIFE! LEESLE</p>
          <p class="subTxt">리슬은 한복을 재해석 한 디자인으로 보통의 날을 특별하게 만들어주는 모던한복 브랜드입니다.</p>
          <p class="subTxt">베이직한 디자인과 좋은 품질을 추구하며 누구나 오랫동안 즐길 수 있는 전통을 만듭니다.</p>
          <a href="#">MORE</a>
        </div>
      </div>
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
          <?php
            include $_SERVER['DOCUMENT_ROOT'].'/leesle/php/db_connect.php';
          ?>
          <!-- db connect -->
          <?php
            $sql = "select * from ls_brand order by LS_brand_num";
            $brand_result = mysqli_query($dbConn, $sql);
            while ($row_result = mysqli_fetch_array($brand_result)){
              $brand_num = $row_result['LS_brand_num'];
              $brand_tit = $row_result['LS_brand_tit'];
              $brand_txt = $row_result['LS_brand_txt'];
          ?>                 
          <div class="leftBox">
            <h2><?=$brand_tit?></h2>
            <p>
              <?=$brand_txt?>
            </p>
            <a href="#">View More</a>
          </div>
          <?php
            }
          ?>
          <!-- brand left box loop end -->
          <div class="rightBox">
            <div class="brandBox">
              <img src="/leesle/data/brand_img/brand-01.jpg" alt="">
              <span class="overlay">
                <p>Thank You, Leesle</p>
              </span>
            </div>
            <div class="brandBox">
              <img src="/leesle/data/brand_img/brand-02.jpg" alt="">
              <span class="overlay">
                <p>Leesle X Collaboration</p>
              </span>
            </div>
            <div class="brandBox">
              <img src="/leesle/data/brand_img/brand-03.jpg" alt="">
              <span class="overlay">
                <p>Celebrity</p>
              </span>
            </div>
            <div class="brandBox">
              <img src="/leesle/data/brand_img/brand-04.jpg" alt="">
              <span class="overlay">
                <p>LEESLE LOOKBOOK</p>
              </span>
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
  <script src="/leesle/js/custom.js"></script>
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