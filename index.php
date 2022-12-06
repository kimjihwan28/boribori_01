<?
   include_once('./_config.php');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>보리보리</title>
   <link rel="shortcut icon" href="./img/logo_01.png" type="image/x-icon">
   <meta name="publisher" content="jihwan">
   <link rel="stylesheet" href="./css/style.css">
   <script src="./js/lib/jquery.min.js"></script>

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
   include_once('./modal.php');
?>
      <!-- 모달창 -->



      <!--  header.php -->
   <?
   include_once('./header.php');
   ?>



      <!-- 메인  -->
   <main id="main">   <!-- 이미지를 z-index 2로 바꿈 -->
      <section id="section1">
         <div class="slide-container">
            <div class="side-view">    
               <ul class="slide-wrap"> 
                  <li class="slide slide13"><a href="#"><span></span></a></li>
                  <li class="slide slide1"><a href="#"><span></span></a></li>
                  <li class="slide slide2"><a href="#"><span></span></a></li>
                  <li class="slide slide3"><a href="#"><span></span></a></li>
                  <li class="slide slide4"><a href="#"><span></span></a></li>
                  <li class="slide slide5"><a href="#"><span></span></a></li>
                  <li class="slide slide6"><a href="#"><span></span></a></li>
                  <li class="slide slide7"><a href="#"><span></span></a></li>
                  <li class="slide slide8"><a href="#"><span></span></a></li>
                  <li class="slide slide9"><a href="#"><span></span></a></li>
                  <li class="slide slide10"><a href="#"><span></span></a></li>
                  <li class="slide slide11"><a href="#"><span></span></a></li>
                  <li class="slide slide12"><a href="#"><span></span></a></li>
                  <li class="slide slide13"><a href="#"><span></span></a></li>
                  <li class="slide slide1"><a href="#"><span></span></a></li>
               </ul>
            </div>
                  <span class="count-number-box">
               <em class="count-number"></em>
               <i>/</i>
               <em class="total-number"></em>   
            </span>
         </div>


         <a href="#" class="prev-btn" title="preview">
            <img src="./img/btn_prev_8x15.png" alt="">
         </a>
         <a href="#" class="next-btn" title="next">
            <img src="./img/btn_next_8x15.png" alt="">
         </a>
      </section>

      



   <section id="section2">
      <div class="container">
            <div class="view">
               <ul class="wrap">
                  <li class="slide slide1">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/disp_corner_conts_110742.jpg" alt="">
                        </a>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
         <div class="in-corner">
            <ul class="col2">
               <li class="scope2">
                  <a href="#">
                     <span class="thumb">
                        <img src="./img/disp_corner_conts_109511_1666854431534.jpg" alt="">
                     </span>
                  </a>
               </li>
               <li class="scope2">
                  <a href="#">
                     <span class="thumb">
                        <img src="./img/disp_corner_conts_109512_1666854958531.jpg" alt="">
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
                              <h1>오늘의 특가 대표</h1>
                              <br>
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
            <div class="slide-view">
               <ul class="slide-wrap">
                  <li class="slide slide1"> <!-- 반복 -->
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_S327654664_basic_1659594065130.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>닥스리틀</h5>
                           <h4>[FW오픈] 독점! 닥스/헤지스 가을&겨울 <br> 보리 한정특가 ~65%off</h4>
                           <h3><s>89,000원</s></h3>
                           <p><em>60%</em>
                           <span>32,900</span>
                        <span>원~</span></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide3">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_P328321383_basic_1666854519800.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>몰리멜리</h5>
                           <h4>[35%쿠폰+무배] 기모추가/유아등원룩/<br>데일리룩모음</h4>
                           <h3><s>59,900원</s></h3>
                           <p><em>93%</em>
                           <span>4,230</span>
                           <span>원~</span></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide4">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_S330909278_basic_1666933908844.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>빔보빔바</h5>
                           <h4>[빔보빔바 X 캐치티니핑] 캐치티니핑 보리<br> 단독!</h4>
                           <h3><s>89,000원</s></h3>
                           <p><em>60%</em>
                           <span>28,900</span>
                           <span>원</span</p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide4">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_P330751512_basic_1666665007209.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>나로</h5>
                           <h4>[독점 특가상품+15%쿠폰+2장무배]<br>겨울 2차 신상!최다오픈</h4>
                           <h3><s>31,000원</s></h3>
                           <p><em>68%</em>
                           <span>9,920</span>
                           <span>원</span</p>
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
                           <img src="./img/2_S301003557_basic_1665645786639.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>에어워크 주니어</h5>
                           <h4>[핫!득템찬스] 주니어 가을 겨울 위클리<br> 베스트★</h4>
                           <h3><s>17,900원</s></h3>
                           <p><em>53%</em>
                           <span>8,420</span>
                        <span>원~</span></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide2">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_P330855535_basic_1666849152534.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>삠뽀요</h5>
                           <h4>★가을노마진세일+깜짝추가5%★</h4>
                           <h3><s>15,900원</s></h3>
                           <p><em>83%</em>
                           <span>2,760</span>
                           <span>원~</span></p>
                           <button>보리단독</button>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide3">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_P079282641_basic_1648783811880.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>루솔</h5>
                           <h4>루솔 어린이 돈까스 10+2팩  / 3종 </h4>
                           <h3><s>28,000원</s></h3>
                           <p><em>54%</em>
                           <span>13,000</span>
                           <span>원</span></p>
                           <button>무료배송</button>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide4">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_P318493743_basic_1666769416907.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>다샵</h5>
                           <h4>아르떼 새부리형 국산 일회용 아동용 </h4>
                           <h3><s>28,900원</s></h3>
                           <p><em>17%</em>
                           <span>23,900</span>
                           <span>원</span></p>
                           <button>무료배송</button>
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
                                 <h1>HOT BRAND</h1>
                                 <br>
                                 <h1>ㅡ</h1>
                              </a>
                           </div>
                        </li>
                     </ul>
                  </div>
               </div>

            </section>

            <section id="section7">
               <div class="slide-container">
                  <div class="slide-wrap">
                     <li class="slide slide1">
                        <div class="gap">
                           <a href="#"><span><img src="./img/disp_corner_conts_109517_1666854677605.jpg" alt=""></span>
                              <div class="imgtit">
                                 <strong>몰리멜리</strong> 
                                 <p>~30%쿠폰,뽀글이 2만원대</p> 
                              </div>
                              </a>
                        </div>
                     </li>
                     <li class="slide slid2">
                        <div class="gap">
                           <a href="#"><span><img src="./img/disp_corner_conts_109518_1666854705791.jpg" alt=""></span>
                              <div class="imgtit">
                                 <strong>컬리수</strong> 
                                 <p>겨울신상 오픈! 최대 10%쿠폰</p> 
                              </div>
                              </a>
                        </div>
                     </li>
                     <li class="slide slide3">
                        <div class="gap">
                           <a href="#"><span><img src="./img/disp_corner_conts_109519_1666854736395.jpg" alt=""></span>
                              <div class="imgtit">
                                 <strong>릴리푸리</strong> 
                                 <p>겨율 신상 ~35%쿠폰+무배</p> 
                              </div>
                              </a>
                        </div>
                     </li>
                  </div>
               </div>
            </section>


      <section id="section8">
         <div class="slide-container">
            <div class="slide-wrap">
               <li class="slide slide1">
                  <div class="gap">
                     <a href="#"><span><img src="./img/disp_corner_conts_109514_1666854580552.jpg" alt=""></span>
                        <div class="imgtit">
                           <strong>몰리멜리</strong> 
                           <p>~30%쿠폰,뽀글이 2만원대</p> 
                        </div>
                        </a>
                  </div>
               </li>
               <li class="slide slid2">
                  <div class="gap">
                     <a href="#"><span><img src="./img/disp_corner_conts_109515_1666854608910.jpg" alt=""></span>
                        <div class="imgtit">
                           <strong>컬리수</strong> 
                           <p>겨울신상 오픈! 최대 10%쿠폰</p> 
                        </div>
                        </a>
                  </div>
               </li>
               <li class="slide slide3">
                  <div class="gap">
                     <a href="#"><span><img src="./img/disp_corner_conts_109516_1666854643809.jpg" alt=""></span>
                        <div class="imgtit">
                           <strong>릴리푸리</strong> 
                           <p>겨율 신상 ~35%쿠폰+무배</p> 
                        </div>
                        </a>
                  </div>
               </li>
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
                           <img src="./img/disp_corner_conts_109207_1666172549216.jpg" alt="">
                        </a>
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
                           <h1>BRAND ISSUE</h1>
                           <br>
                           <h1>ㅡ</h1>
                        </a>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </section>







      <section id="section11">
         <div class="slide-container">
            <div class="slide-wrap">
               <li class="slide slide1">
                  <div class="gap">
                     <a href="#"><span><img src="./img/disp_corner_conts_109520_1666854813647.jpg" alt=""></span>
                        <div class="imgtit1">
                           <strong>나이키/컨버스</strong> 
                           <p>겨울 스포티룩 ~10%쿠폰</p> 
                        </div>
                        </a>
                  </div>
               </li>
               <li class="slide slid2">
                  <div class="gap">
                     <a href="#"><span><img src="./img/disp_corner_conts_109521_1666854836412.jpg" alt=""></span>
                        <div class="imgtit2">
                           <strong>밀크마일</strong> 
                           <p>~30%쿠폰, 기모레깅스 9천원대</p> 
                        </div>
                        </a>
                  </div>
               </li>
               <li class="slide slide3">
                  <div class="gap">
                     <a href="#"><span><img src="./img/disp_corner_conts_109522_1666854863636.jpg" alt=""></span>
                        <div class="imgtit3">
                           <strong>젤리스푼</strong> 
                           <p>~35%쿠폰, 아우터 2만원대</p> 
                        </div>
                        </a>
                  </div>
               </li>
               <li class="slide slide4">
                  <div class="gap">
                     <a href="#"><span><img src="./img/disp_corner_conts_109523_1666854901917.jpg" alt=""></span>
                        <div class="imgtit4">
                           <strong>오션스카이</strong> 
                           <p>~20%쿠폰, 뽀글이 1만원대</p> 
                        </div>
                        </a>
                  </div>
               </li>
            </div>
         </div>
      </section>

      <section id="section12">
         <div class="slide-container">
            <div class="slide-wrap">
               <li class="slide slide1">
                  <div class="gap">
                     <a href="#"><span><img src="./img/disp_corner_conts_109524_1666854994991.jpg" alt=""></span>
                        <div class="imgtit1">
                           <strong>래핑차일드</strong> 
                           <p>단독! 이너웨어 9천원대~</p> 
                        </div>
                        </a>
                  </div>
               </li>
               <li class="slide slid2">
                  <div class="gap">
                     <a href="#"><span><img src="./img/disp_corner_conts_109525_1666855025970.jpg" alt=""></span>
                        <div class="imgtit2">
                           <strong>해피프린스</strong> 
                           <p>타이즈 8천원대/기모티 1만원대</p> 
                        </div>
                        </a>
                  </div>
               </li>
               <li class="slide slide3">
                  <div class="gap">
                     <a href="#"><span><img src="./img/disp_corner_conts_109526_1666855189686.jpg" alt=""></span>
                        <div class="imgtit3">
                           <strong>헤이미니</strong> 
                           <p>밍크기모템 up to 88%OFF</p> 
                        </div>
                        </a>
                  </div>
               </li>
               <li class="slide slide4">
                  <div class="gap">
                     <a href="#"><span><img src="./img/disp_corner_conts_109527_1666855217488.jpg" alt=""></span>
                        <div class="imgtit4">
                           <strong>에어워크주니어</strong> 
                           <p>기모 트레이닝 팬츠 2만원대</p> 
                        </div>
                        </a>
                  </div>
               </li>
            </div>
         </div>
      </section>


      <section id="section13">
         <div class="slide-container">
            <div class="slide-view">
               <ul class="slide-wrap">
                  <li class="slide slide1">
                     <div class="gap">
                        <a href="#">
                           <h1>#키워드 특가 - 겨울룩</h1>
                           <br>
                           <h1>ㅡ</h1>
                        </a>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </section>



      <section id="section14">
         <div class="slide-container">
            <div class="slide-view">
               <ul class="slide-wrap">
                  <li class="slide slide1"> <!-- 반복 -->
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_S161050044_hztl_1666771248076.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>닥스리틀</h5>
                           <h4>[FW오픈] 독점! 닥스/헤지스 가을&겨울 <br> 보리 한정특가 ~65%off</h4>
                           <h3><s>89,000원</s></h3>
                           <p><em>60%</em>
                           <span>32,900</span>
                        <span>원~</span></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide2">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_S309707647_basic_1667282355225.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>몰리멜리</h5>
                           <h4>[35%쿠폰+무배] 기모추가/유아등원룩/<br>데일리룩모음</h4>
                           <h3><s>59,900원</s></h3>
                           <p><em>93%</em>
                           <span>4,230</span>
                           <span>원~</span></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide3">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_P328500139_hztl_1667372354184.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>빔보빔바</h5>
                           <h4>[빔보빔바 X 캐치티니핑] 캐치티니핑 보리<br> 단독!</h4>
                           <h3><s>89,000원</s></h3>
                           <p><em>60%</em>
                           <span>28,900</span>
                           <span>원</span</p>
                        </div>  
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </section>

      <section id="section15">
         <div class="slide-container">
            <div class="slide-view">
               <ul class="slide-wrap">
                  <li class="slide slide1"> <!-- 반복 -->
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_P330776537_basic_1667189296875.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>닥스리틀</h5>
                           <h4>[FW오픈] 독점! 닥스/헤지스 가을&겨울 <br> 보리 한정특가 ~65%off</h4>
                           <h3><s>89,000원</s></h3>
                           <p><em>60%</em>
                           <span>32,900</span>
                        <span>원~</span></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide2">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_S325204340_hztl_1665033267614.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>몰리멜리</h5>
                           <h4>[35%쿠폰+무배] 기모추가/유아등원룩/<br>데일리룩모음</h4>
                           <h3><s>59,900원</s></h3>
                           <p><em>93%</em>
                           <span>4,230</span>
                           <span>원~</span></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide3">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/2_S327808782_basic_1660026034883.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>빔보빔바</h5>
                           <h4>[빔보빔바 X 캐치티니핑] 캐치티니핑 보리<br> 단독!</h4>
                           <h3><s>89,000원</s></h3>
                           <p><em>60%</em>
                           <span>28,900</span>
                           <span>원</span></p>
                        </div>  
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </section>


      <section id="section16">
         <div class="slide-container">
            <div class="slide-view">
               <ul class="slide-wrap">
                  <li class="slide slide1">
                     <div class="gap">
                        <a href="#">
                           <h1>육아 it item</h1>
                           <br>
                           <h1>ㅡ</h1>
                        </a>
                     </div>
                  </li>
               </ul>
            </div>
         </div>
      </section>


      <section id="section17">
      <div class="slide-container">
         <div class="slide-view">
            <ul class="slide-wrap">
               <li class="slide slide1">
                  <div class="gap">
                     <a href="">
                        <img src="./img/disp_corner_conts_109529_1667532270719.jpg" alt="">
                     </a>

                  </div>
               </li>
                     <li class="slide2">
                        <div class="gap">
                           <a href="#">
                              <img src="./img/2_S329831070_basic_1666850210008.jpg" alt="">
                           </a>
                           <div class="content">
                              <h5>센트럴팜</h5>
                              <h4>닥터프로바 베이비/키즈/패밀리<br> 유산균 외 영양제 모음전</h4>
                              <p>
                              <span>35,000</span>
                              <span>원~</span>
                           </p>
                           <button>무료배송</button>
                           </div>
                        </div>
                     </li>
                     <li class="slide slide2">
                        <div class="gap">
                           <a href="#">
                              <img src="./img/2_P314981301_basic_1636504256835.jpg" alt="">
                           </a>
                           <div class="content">
                              <h5>조아제약</h5>
                              <h4>조아제약 잘크톤업(밥 잘 안먹는<br>아이를 위한) / 톡톡 유산균 할...</h4>
                              <h3><s>109,000</s><span>원</span></h3>
                              <p><em>9%</em>
                              <span>99,000</span>
                              <span>원~</span></p>
                           </div>  
                        </div>
                     </li>
                     <li class="slide slide3">
                        <div class="gap">
                           <a href="#">
                              <img src="./img/2_P329746400_basic_1665625599900.jpg" alt="">
                           </a>
                           <div class="content">
                              <h5>꾸미바이트</h5>
                              <h4>꾸미바이트 어린이 영양젤리 할<br>인전 (비타민外)</h4>
                              <h3><s>15,000</s><span>원</span></h3>
                              <p><em>60%</em>
                              <span>28,900</span>
                              <span>원</span></p>
                              <button>무료배송</button>
                           </div>  
                        </div>
                     </li>

            </ul>
         </div>
      </div>
      </section>

      <section id="section18">
         <div class="slide-container">
            <div class="slide-view">
               <ul class="slide-wrap">
                  <li class="slide slide1">
                     <div class="gap">
                        <a href="">
                           <img src="./img/disp_corner_conts_101548_1666855259512.jpg" alt="">
                        </a>
         
                     </div>
                  </li>
                        <li class="slide2">
                           <div class="gap">
                              <a href="#">
                                 <img src="./img/2_S161042721_basic_1659692362733.jpg" alt="">
                              </a>
                              <div class="content">
                                 <h5>경동나비엔</h5>
                                 <h4>닥터프로바 베이비/키즈/패밀리<br> 유산균 외 영양제 모음전</h4>
                                 <p>
                                 <span>35,000</span>
                                 <span>원~</span>
                              </p>
                              <button>무료배송</button>
                              </div>
                           </div>
                        </li>
                        <li class="slide slide2">
                           <div class="gap">
                              <a href="#">
                                 <img src="./img/2_S307051930_basic_1661859820283.jpg" alt="">
                              </a>
                              <div class="content">
                                 <h5>조아제약</h5>
                                 <h4>조아제약 잘크톤업(밥 잘 안먹는<br>아이를 위한) / 톡톡 유산균 할...</h4>
                                 <h3><s>109,000</s><span>원</span></h3>
                                 <p><em>9%</em>
                                 <span>99,000</span>
                                 <span>원~</span></p>
                              </div>  
                           </div>
                        </li>
                        <li class="slide slide3">
                           <div class="gap">
                              <a href="#">
                                 <img src="./img/2_S161048155_basic_1647826456105.jpg" alt="">
                              </a>
                              <div class="content">
                                 <h5>꾸미바이트</h5>
                                 <h4>꾸미바이트 어린이 영양젤리 할<br>인전 (비타민外)</h4>
                                 <h3><s>15,000</s><span>원</span></h3>
                                 <p><em>60%</em>
                                 <span>28,900</span>
                                 <span>원</span></p>
                                 <button>무료배송</button>
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
   include_once('./footer.php');
?>


<script src="./js/intro.js"></script>
<script src="./js/intro.js"></script>
</body>
</html>