<?
   include_once('./_config.php');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>베스트 _보리보리</title>

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



      <!-- 메인  -->
   <main id="main">   
   <section id="section1">
            <div class="slide-container">
               <div class="slide-view">
                  <ul class="slide-wrap">
                     <li class="slide slide1">
                        <div class="gap">
                           <a href="#">
                              <h1>베스트</h1>
                              <br>
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
                           <img src="./img/main1_img_01.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>삠뽀요</h5>
                           <h4>[♥신상리얼30%♥] 1+1 9900원/기모<br>템/외출복/등원룩/아동복 모음</h4>
                           <h3><s>49,900원</s></h3>
                           <p><em>91%</em>
                           <span>4,550</span>
                        <span>원</span></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide2">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_02.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>헤이미니</h5>
                           <h4>[무배35% 쿠폰 UP] 포근한 꿀조합 겨울<br>룩 왕기모템/스키복 모음</h4>
                           <h3><s>39,900원</s></h3>
                           <p><em>82%</em>
                           <span>7,020</span>
                           <span>원</span></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide3">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_03.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>밀크마일</h5>
                           <h4>[35%쿠폰] 겨울 기모 빵빵 데일리룩 1<br>탄</h4>
                           <h3><s>19,900원</s></h3>
                           <p><em>77%</em>
                           <span>4,490</span>
                           <span>원</span</p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide4">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_04.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>나로</h5>
                           <h4>[독점 특가상품+15%쿠폰+무배] 겨울 2<br>차 신상  최다오픈 / 아우터부터 기모...</h4>
                           <h3><s>31,000원</s></h3>
                           <p><em>55%</em>
                           <span>13,940</span>
                           <span>원</span</p>
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
                  <li class="slide slide1"> <!-- 반복 -->
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_05.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>월튼키즈</h5>
                           <h4>[초특가♥30%쿠폰♥무배]우리아이 끝<br>장 겨울코디! 핫기모템/등원룩/외출...</h4>
                           <h3><s>24,000원</s></h3>
                           <p><em>72%</em>
                           <span>6,930</span>
                        <span>원</span></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide2">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_06.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>몰리멜리</h5>
                           <h4>[35%+무배 쿠폰 다운] 1+1세트/유아기<br>모등원룩/기모등원룩 모음</h4>
                           <h3><s>62,900원</s></h3>
                           <p><em>87%</em>
                           <span>8,260</span>
                           <span>원</span></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide3">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_07.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>베베드피노</h5>
                           <h4>❤[단,3일!장바구니~15%할인]베베드피<br>노&아이스비스킷 겨울신상 GRAND ...</h4>
                           <h3><s>59,900원</s></h3>
                           <p><em>87%</em>
                           <span>8,260</span>
                           <span>원</span</p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide4">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_08.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>젤리스푼</h5>
                           <h4>[35%쿠폰UP] 보리단독특가 겨울신상&<br>베스트 코디/데일리룩/기모템/아동복</h4>
                           <h3><s>59,900원</s></h3>
                           <p><em>95%</em>
                           <span>2,990</span>
                           <span>원</span</p>
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
                  <li class="slide slide1"> <!-- 반복 -->
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_09.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>쁘띠뮤</h5>
                           <h4>[♥신상리얼30%♥] 겨울 인기리오더/<br>기모템/외출복/등원복/유아복</h4>
                           <h3><s>27,900원</s></h3>
                           <p><em>90%</em>
                           <span>4,830</span>
                        <span>원~</span></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide2">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_10.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>슈퍼대디</h5>
                           <h4>슈퍼대디 물티슈 시그니처 블루 미스터<br>
                           펭 70매 20팩 (77g)</h4>
                           <h3><s>51,900원</s></h3>
                           <p><em>55%</em>
                           <span>23,100</span>
                           <span>원~</span></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide3">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_11.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>베베쥬</h5>
                           <h4>[20%쿠폰+무배] 베베쥬 겨울신상맛보<br>기/기모맨투맨/긴바지</h4>
                           <h3><s>10,500원</s></h3>
                           <p><em>63%</em>
                           <span>3,900</span>
                           <span>원</span</p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide4">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_12.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>코디아이</h5>
                           <h4>[20% 할인+무배] 기모 추가! 겨울 신상<br>내의/수면조끼</h4>
                           <h3><s>37,900원</s></h3>
                           <p><em>82%</em>
                           <span>6,900</span>
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
                           <img src="./img/main1_img_13.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>매일두유</h5>
                           <h4>매일두유 고단백 190ml 48팩</h4>
                           <h3><s>29,500원</s></h3>
                           <p><em>12%</em>
                           <span>25,850</span>
                        <span>원~</span></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide2">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_14.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>연세두유</h5>
                           <h4>연세 뼈를 생각한 고칼슘두유 180ml x 96팩</h4>
                           <h3><s>31,900원</s></h3>
                           <p><em>3%</em>
                           <span>30,900</span>
                           <span>원</span></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide3">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_15.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>몰리멜리</h5>
                           <h4>[35%쿠폰+무배] 추가인하/유아등원룩/데일리룩모음</h4>
                           <h3><s>59,900원</s></h3>
                           <p><em>93%</em>
                           <span>4,230</span>
                           <span>원</span</p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide4">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_16.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>매일유업</h5>
                           <h4>매일 멸균우유 오리지널 200ml 72팩</h4>
                           <h3><s>47,900원</s></h3>
                           <p><em>22%</em>
                           <span>37,510</span>
                           <span>원</span</p>
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
                  <li class="slide slide1"> <!-- 반복 -->
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_17.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>에스핏 주니어</h5>
                           <h4>[에스핏] (키즈~주니어) 겨울 인기 상하<br>복세트 모음전</h4>
                           <h3><s>85,000원</s></h3>
                           <p><em>77%</em>
                           <span>19,920</span>
                        <span>원</span></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide2">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_18.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>키즈꼬모</h5>
                           <h4>키즈꼬모 기모신상 46종! 9,900~ / 기모 상하복</h4>
                           <h3><s>16,900원</s></h3>
                           <p><em>41%</em>
                           <span>9,900</span>
                           <span>원</span></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide3">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_19.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>피코크</h5>
                           <h4>[주문제작][피코크]조선호텔 포기김치 8kg</h4>
                           <h3><s>79,900원</s></h3>
                           <p><em>24%</em>
                           <span>60,420</span>
                           <span>원</span</p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide4">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_20.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>몰리멜리</h5>
                           <h4>[35%쿠폰업] 유아패딩/뽀글이/구스다<br>운/덕다운 모음</h4>
                           <h3><s>59,900원</s></h3>
                           <p><em>87%</em>
                           <span>7,670</span>
                           <span>원</span</p>
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
                  <li class="slide slide1"> <!-- 반복 -->
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_21.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>또또맘</h5>
                           <h4>리얼이구마(20g × 10입) 3세트</h4>
                           <h3><s>60,000원</s></h3>
                           <p><em>60%</em>
                           <span>15,900</span>
                        <span>원</span></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide2">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_22.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>슬리피헤드 주니어</h5>
                           <h4>주니어)컴포터블 슬립웨어 잠옷(파자마)_깅엄체크 그레이</h4>
                           <h3><s>39,900원</s></h3>
                           <p><em>60%</em>
                           <span>15,900</span>
                           <span>원</span></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide3">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_23.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>킨즈</h5>
                           <h4>킨즈 아이랑 아기와나 유아 소형 초소형 어린이 마스크 100매</h4>
                           <h3><s>75,600원</s></h3>
                           <p><em>78%</em>
                           <span>16,900</span>
                           <span>원</span</p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide4">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_24.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>프리프리스 슈즈</h5>
                           <h4>캐치티니핑 하츄핑 방한부츠/무료배송</h4>
                           <h3><s>54,900원</s></h3>
                           <p><em>27%</em>
                           <span>39,920</span>
                           <span>원</span</p>
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
                           <img src="./img/main1_img_25.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>베지밀</h5>
                           <h4>베지밀 검은콩과 검은참깨 190mlx80팩</h4>
                           <h3><s>72,000</s></h3>
                           <p><em>44%</em>
                           <span>40,380</span>
                        <span>원</span></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide2">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_26.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>더루비</h5>
                           <h4>[11/15~17 단3일! 10%쿠폰]*무료배송*[더루비] 겨울신상 키즈&주니어...</h4>
                           <h3><s>13,900원</s></h3>
                           <p><em>36%</em>
                           <span>8,910</span>
                           <span>원</span></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide3">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_27.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>키즈꼬모</h5><br>
                           <h4>키즈꼬모 가을상하복 몽땅 9900 균일</h4>
                           <h3><s>19,900원</s></h3>
                           <p><em>50%</em>
                           <span>9,900</span>
                           <span>원</span</p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide4">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_28.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>연세두유</h5>
                           <h4>연세 뼈를 생각한 고칼슘두유 180ml x<br>96팩, 검은콩/호두아몬드 혼합</h4>
                           <h3><s>31,900원</s></h3>
                           <p><em>3%</em>
                           <span>30,900</span>
                           <span>원</span</p>
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
                  <li class="slide slide1"> <!-- 반복 -->
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_29.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>젤리스푼</h5>
                           <h4>[30%쿠폰]겨울신상 선오픈 인기 상하복 코디 /기모템/데일리룩/아동복</h4>
                           <h3><s>49,900원</s></h3>
                           <p><em>89%</em>
                           <span>5,530</span>
                        <span>원</span></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide2">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_30.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>헤이미니</h5>
                           <h4>[무배35% 쿠폰 UP] 겨울 왕기모 모음/<br>윈터룩 총집합</h4>
                           <h3><s>39,900원</s></h3>
                           <p><em>82%</em>
                           <span>7,020</span>
                           <span>원</span></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide3">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_31.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>밀크마일</h5>
                           <h4>[35% 쿠폰] FW신상 뽀글이/퀄팅점퍼/<br>롱코트/아우터 모음</h4>
                           <h3><s>29,900원</s></h3>
                           <p><em>78%</em>
                           <span>6,440</span>
                           <span>원</span</p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide4">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_32.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>앱솔루트</h5>
                           <h4>[장바쿠폰~15%+카카오페이]리뉴얼<br>앱솔루트 명작 2FL 분유 1단계...</h4>
                           <h3><s>179,000원</s></h3>
                           <p><em>30%</em>
                           <span>124,900</span>
                           <span>원</span</p>
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
                  <li class="slide slide1"> <!-- 반복 -->
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_33.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>페이퍼플레인키즈</h5>
                           <h4>[파츠15종무료증정]아동 털 슬리퍼 겨울 털신 EVA 유아 방한 신발 키즈 퍼...</h4>
                           <h3><s>35,900원</s></h3>
                           <p><em>56%</em>
                           <span>15,900</span>
                        <span>원</span></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide2">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_34.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>(주)BYC</h5><br>
                           <h4>[BYC 본사] 백색 5매입 런닝</h4>
                           <h3><s>25,000원</s></h3>
                           <p><em>56%</em>
                           <span>10,900</span>
                           <span>원</span></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide3">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_35.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>초코몽</h5>
                           <h4>[30%쿠폰+2장무배!]겨울 베스트 모음/등원룩/ 기모 상하복</h4>
                           <h3><s>59,900원</s></h3>
                           <p><em>88%</em>
                           <span>6,930</span>
                           <span>원</span</p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide4">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_36.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>월튼키즈</h5>
                           <h4>[초특가♥30%쿠폰♥무배]겨울코디 완성! 따뜻하고 트렌디한 기모상하복/실...</h4>
                           <h3><s>77,800</s></h3>
                           <p><em>91%</em>
                           <span>6,930</span>
                           <span>원</span</p>
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
                  <li class="slide slide1"> <!-- 반복 -->
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_37.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>키즈꼬모</h5>
                           <h4>키즈꼬모 BEST 상하복 12900원 균일가</h4>
                           <h3><s>24,900원</s></h3>
                           <p><em>48%</em>
                           <span>12,900</span>
                        <span>원</span></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide2">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_38.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>밀크마일</h5>
                           <h4>[35%쿠폰] 겨울 기모빵빵 데일리룩 2탄</h4>
                           <h3><s>13,900원</s></h3>
                           <p><em>72%</em>
                           <span>3,840</span>
                           <span>원</span></p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide3">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_39.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>베지밀</h5><br>
                           <h4>베지밀 5060시니어두유 190mlx72팩</h4>
                           <h3><s>79,200원</s></h3>
                           <p><em>47%</em>
                           <span>41,710</span>
                           <span>원</span</p>
                        </div>  
                     </div>
                  </li>
                  <li class="slide slide4">
                     <div class="gap">
                        <a href="#">
                           <img src="./img/main1_img_40.jpg" alt="">
                        </a>
                        <div class="content">
                           <h5>오로라월드</h5><br>
                           <h4>핑크퐁 상어가족 감각놀이세트</h4>
                           <h3><s>40,000</s></h3>
                           <p><em>50%</em>
                           <span>19,900</span>
                           <span>원</span</p>
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