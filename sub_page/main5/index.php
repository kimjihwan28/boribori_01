<?
   include_once('./_config.php');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>이벤트_보리보리</title>

   <link rel="shortcut icon" href="<?=$path?>img/logo_01.png" type="image/x-icon">
   <meta name="publisher" content="jihwan">


   <!-- 세브페이지 메인스타일 -->
   <link rel="stylesheet" href="./css/style.css">
   <script src="<?=$path?>js/lib/jquery.min.js"></script>

</head>
<body>
<ul id="skip">
   <li><a href="#header">메뉴바로가기</a></li>
   <li><a href="#main">메인바로가기</a></li>
   <li><a href="#footer">하단바로가기</a></li>
</ul>
<div id="wrap">
   <!-- 모달창 -->
<?
   include_once($path.'modal.php');
?>
      <!-- 모달창 -->



      <!--  header.php -->
<?
   include_once($path.'header.php');
?>
<!-- 헤더 -->

<section id="section1">

</section>


      <!-- 메인  -->
   <main id="main" class="main1">   <!-- 이미지를 z-index 2로 바꿈 -->
   <section id="section1">
         <div class="slide-container">
            <div class="slide-view">
               <ul class="slide-wrap">
                  <li class="slide slide1">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/disp_corner_conts_111502_1669803725840.jpg" alt="">
                        </a>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
   </section>
   <section id="section2">
         <div class="in-corner">
            <ul class="col2">
               <li class="scope2">
                  <a href="#">
                     <span class="thumb">
                        <img src="./img/disp_corner_conts_104028_1669973880383.jpg" alt="">
                     </span>
                  </a>
               </li>
               <li class="scope2">
                  <a href="#">
                     <span class="thumb">
                        <img src="./img/disp_corner_conts_104027_1668671679588.jpg" alt="">
                     </span>
                  </a>
               </li>
            </ul>
         </div>
      </section>
      <section id="section3">
               <div class="slide-container">
                  <div class="slide-view">
                     <ul class="slide-wrap">
                        <li class="slide slide1">
                           <div class="gap">
                              <a href="#">
                                 <h1>진행중인 이벤트</h1>
                                 <h1>ㅡ</h1>
                              </a>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>
   </section>
   <section id="section4">
         <div class="slide-container">
            <div class="slide-wrap">
               <li class="slide slide1">
                  <div class="gap">
                     <a href="#"><span><img src="./img/disp_corner_conts_109625_1669279947119.jpg" alt=""></span>
                        <div class="imgtit">
                           <strong>스페이스 키드: 우주에서 살아남기</strong> 
                           <p>12/7 대개봉! 예매권 이벤트</p> 
                        </div>
                        </a>
                  </div>
               </li>
               <li class="slide slid2">
                  <div class="gap">
                     <a href="#"><span><img src="./img/disp_corner_conts_109623_1669876546040.jpg" alt=""></span>
                        <div class="imgtit">
                           <strong>떠나자! 겨울 호캉스 여행</strong> 
                           <p>휘닉스파크 시크릿 혜택</p> 
                        </div>
                        </a>
                  </div>
               </li>
               <li class="slide slide3">
                  <div class="gap">
                     <a href="#"><span><img src="./img/disp_corner_conts_109626_1653887787912.jpg" alt=""></span>
                        <div class="imgtit">
                           <strong>보리보리 X 삼성화재 다이렉트</strong> 
                           <p>내 차 보험료 확인하면 쿠폰 즉시 지급!</p> 
                        </div>
                        </a>
                  </div>
               </li>
            </div>
         </div>
      </section>
   <section id="section5">
         <div class="slide-container">
            <div class="slide-wrap">
               <li class="slide slide1">
                  <div class="gap">
                     <a href="#"><span><img src="./img/disp_corner_conts_109622_1648721667012.jpg" alt=""></span>
                        <div class="imgtit">
                           <strong>우수회원 쿠폰팩 도착!</strong> 
                           <p>VIP/VVIP라면 누구나</p> 
                        </div>
                        </a>
                  </div>
               </li>
               <li class="slide slid2">
                  <div class="gap">
                     <a href="#"><span><img src="./img/disp_corner_conts_109624_1643163019954.jpg" alt=""></span>
                        <div class="imgtit">
                           <strong>보리 회원님께만 드리는</strong> 
                           <p>특별한 회원 등급 혜택</p> 
                        </div>
                        </a>
                  </div>
               </li>
            </div>
         </div>
      </section>
</main>



   <!--footer.php   -->
<?
   include_once($path.'footer.php');
?>


<script src="<?=$path?>js/intro.js"></script>
</body>
</html>