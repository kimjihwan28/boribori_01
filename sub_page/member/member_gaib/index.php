<?
    include_once('./_config.php');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>회원가입 보리보리</title>
   <!-- 공용 -->
   <link rel="shortcut icon" href="<?=$path?>img/Icon_114.png" type="image/x-icon">
   <meta name="publisher" content="MOONJONG">
   <!-- 셀프 -->
   <link rel="stylesheet" href="./css/style.css">
   <!-- 공용 -->
   <script src="<?=$path?>js/lib/jquery.min.js"></script>
   <!-- 오픈소스 카카오주소검색 API -->
   <script src='./js/lib/postcode.v2.js'></script>

</head>
<body>
<ul id="skip">
   <li><a href="#header">메뉴바로가기</a></li>
   <li><a href="#main">메인바로가기</a></li>
   <li><a href="#footer">하단바로가기</a></li>
</ul>

<div id="wrap">

<!-- 모달 -->
<?
    include_once($path.'modal.php');  
?>
<!-- 모달 -->
   
    
<!-- 헤더 -->
<?
    include_once($path.'header.php');  
?>
<!-- 헤더 -->

   
<!-- 메인-->
   <main id="main">
        <section id="signIn">
            <div class="container">
                <div class="title">
                    <h2>회원가입</h2>
                </div>
                <div class="content">
                    <!-- 자동완성기능 사용 안함  autocomplete="off" -->
                    <form  autocomplete="off"   id='signUp' name='sign_up' method='post' action="./response.php">
                        <ul>
                            <li>
                                <span>필수입력사항<i>*</i></span>
                            </li>
                            <li>
                                <div class="left"><label for="id">아이디<i>*</i></label></div>
                                <div class="right id">
                                    <input maxlength='16' type="text" id='id' name='id' placeHolder='아이디를 입력해주세요'>
                                    <button type='button' class='id-ok-btn'>중복확인</button>
                                    <p class='guid-text'>6자 이상 16자 이하의 영문 혹은 영문과 숫자를 조합</p>
                                </div>
                            </li>


                            <li>
                                <div class="left"><label for="pw">비밀번호<i>*</i></label></div>
                                <div class="right pw">
                                    <input maxlength='16' type="password" id='pw' name='pw' placeHolder='비밀번호를 입력해주세요'>
                                    <p class='guid-text guid-text1'>최소 10자 이상 입력</p>
                                    <p class='guid-text guid-text2'>영문/숫자/특수문자(공백 제외)만 허용하며, 2개 이상 조합</p>
                                    <p class='guid-text guid-text3'>동일한 숫자 3개 이상 연속 사용 불가</p>
                                </div>
                            </li>
                            <li>
                                <div class="left"><label for="pw2">비밀번호재확인<i>*</i></label></div>
                                <div class="right pw2">
                                    <input type="password" id='pw2' name='pw2' placeHolder='비밀번호를 한번더 입력해주세요'>
                                    <p class='guid-text guid-text1'>비밀번호를 한번 더 입력해 주세요.</p>
                                    <p class='guid-text guid-text2'>동일한 비밀번호를 입력해 주세요.</p>
                                </div>
                            </li>
                            <li>
                                <div class="left"><label for="name">닉네임<i>*</i></label></div>
                                <div class="right name">
                                    <input type="text" id='name' name='name' placeHolder='닉네임을 입력해주세요'>
                                    <p class='guid-text guid-text1'>닉네임을 입력해 주세요.</p>
                                </div>
                            </li>
                            <li>
                                <div class="left"><label for="email">이메일<i>*</i></label></div>
                                <div class="right email">
                                    <input type="email" id='email' name='email' placeHolder='예: *******@naver.com'>
                                    <button type='button' class='email-ok-btn'>중복확인</button>
                                    <p class='guid-text guid-text1'>이메일을 입력해 주세요.</p>
                                    <p class='guid-text guid-text2'>이메일 형식으로 입력해 주세요.</p>
                                </div>
                            </li>
                            <li>
                                <div class="left"><label for="hp">휴대폰<i>*</i></label></div>
                                <div class="right hp">
                                    <input maxlength='11' type="text" id='hp' name='hp' placeHolder='숫자만 입력해주세요 예)01012345678'>
                                    <button type='button' class='hp-btn' disabled>인증번호 받기</button>
                                    <button type='button' class='hp2-btn'>다른번호 인증</button>
                                    <p class='guid-text guid-text1'>휴대폰 번호를 입력해 주세요.</p>
                                    <p class='guid-text guid-text2'>휴대폰 번호 형식으로 입력해 주세요.</p>
                                </div>
                            </li>
                            <li class='hp-ok-box'>
                                <div class="left"><label for="hp" class='hide'>휴대폰 인증번화 확인</label></div>
                                <div class="right hp-ok">
                                    <input maxlength='6' type="text" id='hpOk' name='hpOk' placeHolder='인증번호를 입력해주세요'>
                                    <span class='hp-ok-time'><em class='minutes'>02</em>:<em class='seconds'>59</em></span>
                                    <button type='button' class='hp-ok-btn' disabled>인증번호 확인</button>
                                    <p class='guid-text guid-text1'>                                    
                                        인증번호가 오지 않는다면, 통신사 스팸 차단 서비스 혹은 휴대폰 번호 차단 여부를 확인해주세요. (마켓컬리 1644-1107)
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="left"><label for="addr2">주소<i>*</i></label></div>
                                <div class="right addr">
                                    <button type='button' class='addr-search-btn'><img src="./img/search.svg" alt="">주소검색</button>
                                    <input type="text" id='addr1' name='addr1' placeHolder='주소검색 주소 입력'>
                                    <input type="text" id='addr2' name='addr2' placeHolder='나머지 주소를 입력해주세요'>                                
                                    <button type='button' class='addr-research-btn'><img src="./img/search.svg" alt="">재검색</button>
                                    <p>배송지에 따라 상품 정보가 달라질 수 있습니다.</p>
                                </div>
                            </li>
                            <li>
                                <div class="left">
                                    <label>성별</label>
                                </div>
                                <div class="right gender">  <!-- 라디오 버튼은 여러개 중에 단 한개만 선택이 되는 기능 : 그래서 name을 동일하게 지정 -->
                                    <label><input type="radio" id='male'     class='gender-btn' name='gender' value='남자'>남자</label>
                                    <label><input type="radio" id='female'   class='gender-btn' name='gender' value='여자'>여자</label>
                                    <label><input type="radio" id='unselect' class='gender-btn' name='gender' value='선택안함' checked>선택안함</label>
                                </div>
                            </li>
                            <li>
                                <div class="left"><label for="">생년월일</label></div>
                                <div class="right birth-day">
                                    <ul>
                                        <li><input type="text" maxLength='4' id='year' name='year' placeHolder='YYYY'></li>
                                        <li><i>/</i></li>
                                        <li><input type="text" maxLength='2' id='month' name='month' placeHolder='MM'></li>
                                        <li><i>/</i></li>
                                        <li><input type="text" maxLength='2' id='date' name='date' placeHolder='DD'></li>
                                    </ul>
                                    <p></p>
                                </div>
                            </li>
                            <li>
                                <div class="left"><label for="">추가입력사항</label></div>
                                <div class="right gender add-input">  <!-- 라디오 버튼은 여러개 중에 단 한개만 선택이 되는 기능 : 그래서 name을 동일하게 지정 -->                                
                                    
                                    <div class="add-input-box">
                                        <label><input type="radio" id='addId'    class='add-input-btn' name='add_input' value='추천인 아이디'>추천인 아이디</label>
                                        <label><input type="radio" id='addEvent' class='add-input-btn' name='add_input' value='참여 이벤트명'>참여 이벤트명</label>
                                    </div>
                                    
                                    <input type="text" id='choocheon' name='choocheon' placeHolder='추천인 아이디를 입력해주세요'>
                                    <p>
                                        추천인 아이디와 참여 이벤트명 중 하나만 선택 가능합니다.<br>
                                        가입 이후는 수정이 불가능 합니다.<br>
                                        대소문자 및 띄어쓰기에 유의해주세요.
                                    </p>

                                </div>
                            </li>
                            <li class='hr'>
                            <hr>
                            </li>
                            <li>
                                <div class="left"><label for="addr2">이용약관동의<i>*</i></label></div>
                                <div class="right service">
                                    <ul>
                                        <li>
                                            <label><input type="checkbox" id='chkAll' name='chk_all' value='전체동의합니다.'>전체동의합니다</label>
                                            <p>선택항목에 동의하지 않은 경우도 회원가입 및 일반적인 서비스를 이용할 수 있습니다.</p>
                                        </li>
                                        <li>
                                            <label class='after'><input type="checkbox" id='chk1' name='chk1' class='check-service' value='이용약관 동의(필수)'>이용약관 동의</label><em>(필수)</em>
                                            <span class='more-view'>약관보기 <img src="./img/ico_arrR_11x19.png" alt=""></span>
                                        </li>
                                        <li>
                                            <label class='after'><input type="checkbox" id='chk2' name='chk2' class='check-service' value='개인정보 수집∙이용 동의(필수)'>개인정보 수집∙이용 동의</label><em>(필수)</em>
                                            <span class='more-view'>약관보기 <img src="./img/ico_arrR_11x19.png" alt=""></span>
                                        </li>
                                        <li>
                                            <label class='after'><input type="checkbox" id='chk3' name='chk3' class='check-service' value='개인정보 수집∙이용 동의(선택)'>개인정보 수집∙이용 동의</label><em>(선택)</em>
                                            <span class='more-view'>약관보기 <img src="./img/ico_arrR_11x19.png" alt=""></span>
                                        </li>
                                        <li>
                                            <label class='after'><input type="checkbox" id='chk4' name='chk4' class='check-service sns-check-all' value='무료배송, 할인쿠폰 등 혜택/정보 수신 동의(선택)'>무료배송, 할인쿠폰 등 혜택/정보 수신 동의</label><em>(선택)</em>
                                        </li>
                                        <li>
                                            <label><input type="checkbox" id='chk5' name='chk5' class='check-service sns-check' value='SNS'>SNS</label>                                        
                                            <label><input type="checkbox" id='chk6' name='chk6' class='check-service sns-check' value='이메일'>이메일</label>                                        
                                        </li>
                                        <li>
                                            <p>동의 시 한 달간 [5%적립] + [2만원 이상 무료배송] 첫 주문 후 안내</p>
                                        </li>
                                        <li> 
                                            <label class='after'><input type="checkbox" id='chk7' name='chk7' class='check-service' value='본인은 만 14세 이상입니다(필수)'>본인은 만 14세 이상입니다.</label><em>(필수)</em>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            
                        </ul>
                        <div class="submit">
                            <button type="submit" class='submit-btn'>가입하기</button>
                        </div>
                    </form>
                </div>
            </div>
        </section>
   </main>



<!-- 푸터 -->
<?
    include_once($path.'footer.php');  
?>
<!-- 푸터 -->

<div class="member-modal">
    <div class="wrap">
        <div class="container">
            <div class="content">
                <p class='modal-message'></p>
            </div>
            <div class="button-box">
                <button class='member-modal-close-btn'>확인</button>
            </div>
        </div> 
    </div>    
</div>

</div>

<!-- 셀프 -->
<script src='./js/sign_up.js'></script>

<!-- 공용 -->
<script src="<?=$path?>js/header.js"></script>

</body>
</html>