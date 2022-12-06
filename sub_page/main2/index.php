<?
   include_once('./_config.php');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>보리추천_보리보리</title>

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
                              <h1>보리보리추천</h1>
                              <h1>ㅡ</h1>
                           </a>
                        </div>
                     </li> 
                  </ul>
               </div>
            </div>
      </section>

      <section id="section2">
         <div class="slide-container">
            <div class="slide-view">
               <ul class="slide-wrap">
               <li class="slide slide1"> <!-- 반복 -->
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_S331820729_hztl_01.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>크린랩</h5>
                           <h4>크린랩 고무장갑/지퍼백/롤백/호일/랩 외 모음전</h4>
                           <span>700</span>
                        <span>원</span>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide2">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_S331820720_hztl_02.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>크린랩</h5>
                           <h4>크린랩 비닐장갑 위생백 외 일회용품 모음</h4>
                           <p><em>5%</em>
                           <span>2,560</span>
                           <span>원</span><s>2,700원</s></p>
                        </div>  
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </section>

      <section id="section3">
         <div class="slide-container">
            <div class="slide-view">
               <ul class="slide-wrap">
                  <li class="slide slide1">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_S331820551_hztl_03.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>퀸센스</h5>
                           <h4>퀸센스 보온병 텀블러 도시락 외 모음전</h4>
                           <p><em>28%</em>
                           <span>6,160</span>
                           <span>원</span><s>8,500원</s></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide2">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_S331820447_hztl_04.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>퀸센스</h5>
                           <h4>퀸센스 보온병 텀블러 포트 외 생애 마지막 찬스</h4>
                           <p><em>21%</em>
                           <span>7,920</span>
                           <span>원</span><s>10,000원</s></p>
                        </div>  
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </section>

      <section id="section4">
         <div class="slide-container">
            <div class="slide-view">
               <ul class="slide-wrap">
                  <li class="slide slide1">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_S331820341_hztl_05.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>오런</h5>
                           <h4>반코팅장갑 코팅장갑 외 작업장갑 모음</h4>
                           <p><em>20%</em>
                           <span>320</span>
                           <span>원</span><s>400원</s></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide2">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_S331820190_hztl_06.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>오런</h5>
                           <h4>행사장갑 예식장갑 외 면장갑 모음</h4>
                           <p><em>14%</em>
                           <span>560</span>
                           <span>원</span><s>650원</s></p>
                        </div>  
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </section>

      <section id="section5">
         <div class="slide-container">
            <div class="slide-view">
               <ul class="slide-wrap">
               <li class="slide slide1"> <!-- 반복 -->
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_S331820185_hztl_07.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>크린랩</h5>
                           <h4>크린랩 청소용품 모음_물걸레청소포 테이프크리너 외</h4>
                           <span>61,000</span>
                        <span>원</span>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide2">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_S331795974_hztl_08.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>빅토리아키즈</h5>
                           <h4>[빅토리아 슈즈] 보리단독! 빅토리아 슬립온,스니커즈 19,900원~! (본사공식)</h4>
                           <p><em>66%</em>
                           <span>19,900</span>
                           <span>원</span><s>59,000원</s></p>
                        </div>  
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </section>
      <section id="section6">
         <div class="slide-container">
            <div class="slide-view">
               <ul class="slide-wrap">
                  <li class="slide slide1">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_S331791448_hztl_09.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>풀무원</h5>
                           <h4>[풀무원/네슬레/커클랜드] 생수&탄산수 BEST 모음전</h4>
                           <p><em>3%</em>
                           <span>9,200</span>
                           <span>원</span><s>9,500원</s></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide2"> <!-- 반복 -->
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_S331790809_hztl_10.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>광동</h5>
                           <h4>[광동&삼다수] 음료/생수 BEST 모음전</h4>
                           <span>11,500</span>
                        <span>원</span>
                        </div>  
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </section>
      <section id="section7">
         <div class="slide-container">
            <div class="slide-view">
               <ul class="slide-wrap">
                  <li class="slide slide1">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_S331775644_hztl_11.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>고스트리퍼블릭</h5>
                           <h4>고스트리퍼블릭 베이직 후드 모음전</h4>
                           <p><em>14%</em>
                           <span>36,900</span>
                           <span>원</span><s>42,900원</s></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide2">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_S331737860_hztl_12.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>오엠티</h5>
                           <h4>OMT 크리스마스용품 모음전(트리/전구/조명/장식/풍선/가랜드/오르골/파티용품)</h4>
                           <p><em>3%</em>
                           <span>19,900</span>
                           <span>원</span><s>42,900원</s></p>
                        </div>  
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </section>
      <section id="section8">
         <div class="slide-container">
            <div class="slide-view">
               <ul class="slide-wrap">
               <li class="slide slide1"> <!-- 반복 -->
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_S331735461_hztl_13.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>케어비</h5>
                           <h4>[케어비] 아기 이유식 랜덤 4팩 모음전</h4>
                           <span>16,400</span>
                        <span>원</span>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide2">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_S331735289_hztl_14.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>꼬마옴므</h5>
                           <h4>[데일리베베&아우터] 꼬마옴므 겨울신상 모음전/기모상하복/기모티셔츠/점퍼</h4>
                           <p><em>36%</em>
                           <span>13,600</span>
                           <span>원</span><s>21,400원</s></p>
                        </div>  
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </section>
      <section id="section9">
         <div class="slide-container">
            <div class="slide-view">
               <ul class="slide-wrap">
                  <li class="slide slide1">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_S331728734_hztl_15.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>해피플레이</h5>
                           <h4>유아 주방놀이 장난감 모음전 ★ /물나오는 싱크대/리얼밥솥/썰기놀이/소꿉놀이/...</h4>
                           <p><em>40%</em>
                           <span>14,900</span>
                           <span>원</span><s>25,000원</s></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide2">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_S331728646_hztl_16.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>해피플레이</h5>
                           <h4>신생아 아기 유아 목욕놀이 태엽 장난감 모음전★ /거북이/오리/개구리/상어/욕조...</h4>
                           <p><em>51%</em>
                           <span>4,900</span>
                           <span>원</span><s>10,000원</s></p>
                        </div>  
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </section>
      <section id="section10">
         <div class="slide-container">
            <div class="slide-view">
               <ul class="slide-wrap">
                  <li class="slide slide1">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_S331703329_hztl_17_.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>본네</h5>
                           <h4>[10%쿠폰] 디자이너 브랜드 본네 한정수량 세일!</h4>
                           <p><em>46%</em>
                           <span>6,930</span>
                           <span>원</span><s>12,800원</s></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide2">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_S331708533_hztl_18.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>윙하우스</h5>
                           <h4>쿠로미 마이멜로디 산리오 캐릭터 잡화  모음</h4>
                           <p><em>20%</em>
                           <span>16,800</span>
                           <span>원</span><s>21,000원</s></p>
                        </div>  
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </section>
      <section id="section11">
         <div class="slide-container">
            <div class="slide-view">
               <ul class="slide-wrap">
                  <li class="slide slide1">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_S331694944_hztl_20.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>하버드키즈</h5>
                           <h4>[하버드키즈] 겨울맞이 F/W 기모 아우터/상하복/맨투맨/팬츠</h4>
                           <p><em>40%</em>
                           <span>17,400</span>
                           <span>원</span><s>29,000원</s></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide2">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_S331694549_hztl_1668573596510.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>예일키즈</h5>
                           <h4>[예일키즈] 겨울맞이 F/W 기모 아우터/상하복/맨투맨/팬츠</h4>
                           <p><em>40%</em>
                           <span>17,400</span>
                           <span>원</span><s>29,000원</s></p>
                        </div>  
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </section>
      <section id="section12">
         <div class="slide-container">
            <div class="slide-view">
               <ul class="slide-wrap">
               <li class="slide slide1"> <!-- 반복 -->
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_S331684200_hztl_22.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>리틀뎁</h5>
                           <h4>주니어 리틀뎁 7세부터~여아 겨울신상/원피스/상하복/레깅스/아우터패딩</h4>
                           <span>7,900</span>
                        <span>원~</span>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide2"> <!-- 반복 -->
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_S331670709_hztl_23.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>리틀뎁</h5>
                           <h4>주니어 리틀뎁 7세부터~겨울아우터/덤블/패딩/후드점퍼/웰론/리버시블</h4>
                           <span>49,000</span>
                        <span>원~</span>
                        </div>  
                     </div>
                  </li>
               </ul>
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