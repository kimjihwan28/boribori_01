<!--  header.php -->
<header id="header">
   <div class="row1">
      <div class="row1-1">
         <ul class="row1-left">
         <a href="#">바로방문<strong>ON</strong></a>
         <i>|</i>
         <a href="#">등급혜택</a>
         </ul>
         <ul class="row1-right">
            <a href="#">고객센터</a>
            <a href="#">마이페이지</a>
            <a href="#">장바구니</a>
            <a href="#">주문/배송</a>
            <a href="<?=$path2?>member/member_gaib/">회원가입</a>
            <a href="<?=$path2?>member/member_login/">로그인</a>
         </ul>
      </div>
      <div class="row1-2">
         <div class="left">
            <h1> <!-- 로고 -->
               <a href="<?=$path?>index.php">
                  <img src="<?=$path?>img/ico_t_bi_br.png" alt="">
               </a>
            </h1>
         </div>
         <div class="center"> <!-- 검색상자 -->
            <input type="text" id="search" name="search">
            <a href=""><img src="<?=$path?>img/ico_t_srch.png" alt=""></a>
         </div>

         <div class="right"> <!-- 이미지 슬라이더 위 아래 --> 
            <!-- <ul class="slide-wrap">
               <li class="side slide4">
                  <a href="#" title="img-slider"><img src="./img/disp_corner_4.jpg" alt=""></a>
               </li>
               <li class="side slide1">
            <a href="#" title="img-slider"><img src="./img/disp_corner_1.jpg" alt=""></a>
         </li>
         <li class="side slide2">
            <a href="#" title="img-slider"><img src="./img/disp_corner_2.jpg" alt=""></a>
         </li>
         <li class="side slide3">
            <a href="#" title="img-slider"><img src="./img/disp_corner_3.jpg" alt=""></a>
         </li>
         <li class="side slide4">
            <a href="#" title="img-slider"><img src="./img/disp_corner_4.jpg" alt=""></a>
         </li>
         <li class="side slide1">
            <a href="#" title="img-slider"><img src="./img/disp_corner_1.jpg" alt=""></a>
         </li>
         </ul> -->
         </div>

         <!-- 상단 위에 있는 이미지 버튼 -->
         <!--            <div class="swiper-button1"></div>
         <div class="swiper-button2"></div> -->


      </div>




      <div class="row2">  
         <div class="row2-container">
         <div class="left">
            <a href="#">
               <img src="<?=$path?>img/ico_gnb_cate.png" alt="">
               카테고리
            </a>
                  </div>

                           <ul class="gnb_list">
                              <li>
                           <a href="<?=$path2?>main1/index.php">베스트</a>
                        </li>
                        <li>
                           <a href="<?=$path2?>main2/index.php">보리추천</a>
                        </li>
                        <li>
                           <a href="<?=$path2?>main3/index.php">상생마켓</a>
                        </li>
                        <li>
                           <a href="<?=$path2?>main4/index.php">월간디저트</a>
                        </li>
                        <li>
                           <a href="<?=$path2?>main5/index.php">이벤트</a>
                        </li>
                        </ul>


               <div class="right">     <!-- 오른쪽정렬 -->
                  <div class="item">
                  <span class="btn-item">
                     <i><img src="<?=$path?>img/ico_gnb_item.png" alt=""></i>
                     <a href="#">
                        아이템
                     </a>
                  </span>
               </div>
               <div class="brand">
                  <span class="btn-brand">
                     <i><img src="<?=$path?>img/ico_gnb_brand.png" alt=""></i>
                     <a href="#">
                        브랜드
                     </a>
                  </span>
               </div>
            </div>
      </div>
</header>
   <!--  header.php -->