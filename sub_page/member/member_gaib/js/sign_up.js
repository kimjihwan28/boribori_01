(($, window)=>{ //화살표 함수

   const SignUp = {
        회원 : {
         아이디:'',
         아이디중복확인:false,
         비밀번호:'',
         비밀번호확인:'',
         이름:'',
         이메일:'',
         이메일중복확인:false,
         휴대폰:'',
         주소1:'',
         주소2:'',
         성별:'',
         생년:'',
         생월:'',
         생일:'',
         추가입력사항1:'',   //속성
         추가입력사항2:'',   //속성
         이용약관:[]   //서비스 7개 선택 필수 3가지 배열 객체
      },
      init(){
         this.idFn();
         this.pwFn();
         this.nameFn();
         this.emailFn();
         this.hpFn();
         this.addrFn();
         this.genderFn();
         this.birthFn();
         this.addInput();
         this.serviceFn();
         this.submitFn();
      },
      idFn(){ //아이디
         let regExp1 = '';
         let regExp2 = '';
         let regExp3 = '';
         let regExp4 = '';
         let idVal = '';
         let result = '';
         const that = this;
         

         $('#id').on({
            keyup: function(){
             
               regExp1 = /[`~!@#$%^&*()\-_=+|\\\]\}\[\{'";:/?.>,<]/g;  // 특수문자
               regExp2 = /.{6,16}/g;  // 글자수는 6 ~ 16
               regExp3 = /(?=.*[A-Za-z])+(?=.*[0-9])*/g;  // 영문(대소문자) 필수 포함, 숫자 선택 포함 : 영문(?=.*[A-Za-z])+ 또는(혹은) 숫자(?=.*[0-9])*  
               regExp4 = /\s/g;  // 공백문자
                    
               //1. 특수문자는 삭제
               idVal = $('#id').val();
               result = idVal.replace(regExp1, '');              
               $('#id').val( result );

               //2. 입력제한 조건문
               if(idVal===''){
                  $('.id .guid-text').removeClass('on');
               }
               else {
                  
                  if( regExp2.test(idVal) === false  ||  regExp3.test(idVal) === false || regExp4.test(idVal) === true ){
                     $('.id .guid-text').addClass('on');
                  }
                  else{
                     $('.id .guid-text').removeClass('on');

                  }
               }
            }

         });

         // 아이디 중복확인 버튼 이벤트
         $('.id-ok-btn').on({
            click: function(){
               $('.member-modal').fadeIn(300);
               $('.modal-message').html(`6자 이상 16자 이하의 영문 혹은 영문과 숫자를 조합`);
            }
         })

      },
      pwFn(){ //비밀번호

         const that = this;

         $('#pw').on({
            keyup: function(){
               const regExp1 = /.{10,}/g;

               const regExp2 = /((?=.*[A-Z])+(?=.*[0-9])+)+|((?=.*[A-Z])+(?=.*[`~!@#$%^&*()\-_=+|\\\]\}\[\{'";:/?.>,<])+)+|((?=.*[0-9])+(?=.*[`~!@#$%^&*()\-_=+|\\\]\}\[\{'";:/?.>,<])+)+/gi;
               const regExp3 = /\s/g;
               const regExp4 = /(.)\1\1/g;

               let pwVal = $('#pw').val();
               if( pwVal==='' ){
                  $('.pw .guid-text').removeClass('on');
               }
               else{
                  
                  if( regExp1.test(pwVal)===false ){
                     $('.pw .guid-text').removeClass('on');
                     $('.pw .guid-text1').addClass('on');
                  }
                  else if( regExp2.test(pwVal)===false || regExp3.test(pwVal)===true ){  // 조합, 공백문자 조건
                     $('.pw .guid-text').removeClass('on');
                     $('.pw .guid-text2').addClass('on');
                  }                                         
                  else if( regExp4.test(pwVal)===true ){
                     $('.pw .guid-text').removeClass('on');
                     $('.pw .guid-text3').addClass('on');
                  }
                  else {
                     $('.pw .guid-text').removeClass('on');
                  }
                 
               }
            }
         });

         //비밀번호 재확인

         $('#pw2').on({
            keyup: function(){
               let pw2Val = $('#pw2').val();
               let pw1Val = $('#pw').val();

               if( pw2Val==='' ){ // 입력값이 공백이면
                  $('.pw2 .guid-text').removeClass('on');
                  $('.pw2 .guid-text1').addClass('on');
               }
               else{ // 입력값이 공백이 아니면
                  $('.pw2 .guid-text').removeClass('on');
                  if( pw2Val !== pw1Val ){ // 동일한 비밀번호가 아니면                    
                     $('.pw2 .guid-text2').addClass('on');
                  }
                  else {
                     $('.pw2 .guid-text2').removeClass('on');                     
                  }
               }
            }
         })

      },
      nameFn(){ //이름
         const that = this;
        
         $('#name').on({
            keyup: function(){
               const regExp = /[`~!@#$%^&*()\-_=+|\\\]\}\[\{'";:/?.>,<]/g;
               let nameVal = $('#name').val();

               $('#name').val( nameVal.replace(regExp, '') );
               
               if( nameVal==='' ){
                  $('.name .guid-text').removeClass('on');
                  $('.name .guid-text1').addClass('on');
               }
               else{
                  $('.name .guid-text').removeClass('on');                                   
               }

            }
         });

      },
      emailFn(){ //이메일 
         const that = this;

         $('#email').on({
            keyup: function(){
               const regExp = /^([A-Z0-9]+[^\s]*)+([._\-]?[A-Z0-9]*)*@([A-Z0-9]+[^\s]*)+([._\-]?[A-Z0-9]*)*.[A-Z]{2,3}$/gi;
               let emailVal = $('#email').val();

               // 매치함수를 이용 테스트 접검
               // console.log( emailVal.match(regExp) );

               if( emailVal==='' ){
                  $('.email .guid-text').removeClass('on');
                  $('.email .guid-text1').addClass('on');
               }
               else{
                  $('.email .guid-text').removeClass('on');      
                  if( regExp.test(emailVal)===false ){
                     $('.email .guid-text').removeClass('on');
                     $('.email .guid-text2').addClass('on');
                  }
                  else{
                     $('.email .guid-text').removeClass('on');                     
                  }            
               }

            }
         })

         // 이메일 중복확인 버튼 이벤트
         $('.email-ok-btn').on({
            click: function(){
               $('.member-modal').fadeIn(300);
               $('.modal-message').html(`이메일을 입력해 주세요.`);
            }
         })



      },
      hpFn(){ // 휴대폰

         let num = null;
         let m = 2;     //분 2
         let s = 59;    //초(0~59 => 60초)
         let setId = 0; //셋인터발 변수
         const that = this;
        
         $('#hp').on({
            keyup: function(){

               const regExp = /[`~!@#$%^&*()\-_=+|\\\]\}\[\{'";:/?.>,<]/g;
               let hpVal = $('#hp').val();

               // 특수문자는 삭제
               $('#hp').val( hpVal.replace(regExp,'') );
               hpVal = $('#hp').val();

               //10자 이상이면 우측번튼 보이기
               if( hpVal.length>=10 ){
                  $('.hp-btn').show()
                              .addClass('on')
                              .attr('disabled', false); //버튼사용가능 disabled', false
                  $('.hp2-btn').hide();
                  
                  $('#hpOk').val('')
                            .focus();
               }
               else{
                  $('.hp-btn').removeClass('on');
               }

               if( hpVal==='' ){
                  $('.hp .guid-text').removeClass('on');
                  $('.hp .guid-text1').addClass('on');
               }
               else{
                  $('.hp .guid-text').removeClass('on');
               }

            }
         })

               
         $('.hp-btn').on({
            click: function(e){
               e.preventDefault();  
               const regExp = /^01[0|1|6|7|8|9]+[0-9]{3,4}[0-9]{4}$/g;  // 휴대폰 010, 011, 016, 017, 018, 019
               let hpVal = $('#hp').val(); //입력값

               if( regExp.test(hpVal)===false ){  // !==true  true가 아니면 결국 false 이면
                  $('.hp .guid-text').removeClass('on');
                  $('.hp .guid-text2').addClass('on');
               }
               else{ // 정상
                  $('.hp .guid-text').removeClass('on');
                  // 인증번호 발송 : 6자리 랜덤번호(임의의 번호)  10만단위 : 999999
                  // 자리내림
                  num = Math.floor( Math.random()*900000+100000 ); // 수학객체 0 ~ 1 랜덤함수 0.6863693958147086
                  
                  $('.member-modal').fadeIn(300);
                  $('.modal-message').html(`인증번호가 발송되었습니다.<br>${num}`);

                  // 인증번호확인 박스 보이기
                  $('.hp-ok-box').css({display:'flex'});
                  
                  // 3분 카운트 함수 호출 실행
                  timerCount();

               }
            }
         })

         // 3분 카운트 프로그래밍 함수
         function timerCount(){
            m = 2; //분 2
            s = 59; //초(0~59 => 60초)
            setId = setInterval(function(){
               s--;
               if(s<0){ //60초 경고 그러면 1분 감소
                  s=59;
                  m--;
                  if(m<0){
                     s=0;
                     m=0;
                     clearInterval(setId);
                     $('.member-modal').fadeIn(300);
                     $('.modal-message').html("유효 시간이 만료되었습니다.<br>다시 시도해 주세요.");
                     return;
                  }
               }
               $('.minutes').text( `${ m < 10 ? '0'+m : m }` );
               $('.seconds').text( `${ s < 10 ? '0'+s : s }` );
            }, 1000);

         }

         

         // 멤버 모달 닫기
         $('.member-modal-close-btn').on({
            click: function(){
               $('.member-modal').fadeOut(300);
            }
         })
         

         // 인증번호 입력 이벤트
         $('#hpOk').on({
            keyup: function(){
               const regExp = /[^0-9]/;
               let hpOkVal = $('#hpOk').val();
               
               $('#hpOk').val( hpOkVal.replace(regExp, '') );

               if( hpOkVal.length > 1 ){
                  $('.hp-ok-btn').addClass('on');
                  $('.hp-ok-btn').attr('disabled', false);
               }
               else{
                  $('.hp-ok-btn').removeClass('on');
                  $('.hp-ok-btn').attr('disabled', true);
               }
            }
         });

         // 인증번호 확인 버튼 클릭 이벤트
         $('.hp-ok-btn').on({
            click: function(e){
               e.preventDefault();

               if( num === Number($('#hpOk').val()) ){
                  $('.member-modal').fadeIn(300);
                  $('.modal-message').html("인증에 성공 하였습니다.");
                  $('.hp-ok-box').hide();
                  $('.hp-btn').hide();
                  $('.hp2-btn').show();
                  $('#hp').attr('disabled', true);
               }
               else{
                  $('.member-modal').fadeIn(300);
                  $('.modal-message').html("잘못된 인증 코드입니다.");
               }
            }
         })

         // 다른번호 인증
         $('.hp2-btn').on({
            click: function(e){
               e.preventDefault();
               $('#hp').attr('disabled', false)
                       .val('')                 //입력상자 내용 삭제
                       .focus();                //입력대기 상태
               $('.hp .guid-text1').addClass('on');  // 안내 테스트 출력
            }
         });


      },
      addrFn(){ // 카카오 주소검색 버튼 클릭 이벤트
         let   $child = ''; 
         const that   = this;

         function popupFn(){
            const popW     = 530;
            const popH     = 615;
            const popName  = '_popup_postcode_20221024';
            const popFile  = './popup.html';
            let   winW     = $(window).innerWidth();
            let   winH     = $(window).innerHeight();
            let   top      = (winH-popH)/2; // top  = (창높이-팝업창의높이)/2
            let   left     = (winW-popW)/2; // left = (창너비-팝업창의너비)/2

            $child = window.open( popFile , popName ,`width=${popW}, height=${popH}, top=${top}, left=${left}`);
         }



         //카카오 주소검색 버튼 클릭 이벤트
         $('.addr-search-btn').on({
            click: function(e){
               e.preventDefault();
               popupFn();               
            }
         });

         //카카오 주소 재검색 버튼 클릭 이벤트
         $('.addr-research-btn').on({
            click: function(e){
               e.preventDefault();
               popupFn();
            }
         });
      
         

         // 팝업창에서 저장한 로컬스토레이지 데이터를 가져와서 
         // 비교하고 만약 주소 키 'kurly Address' 가 있다면 유지
         function addressFn(){
            let addressKey = 'kurly Address';
            let key = '';
            let obj = '';
            for(let i=0; i<sessionStorage.length; i++){
               if( sessionStorage.key(i) === addressKey ){
                  $('#addr1, #addr2, .addr-research-btn').show(); //주소1,주소2,재검색버튼
                  $('.addr-search-btn').hide();                   //주소검색버튼

                  key = sessionStorage.getItem(addressKey);   //키 가져오기
                  obj = JSON.parse(sessionStorage.getItem(key));  //주소1, 주소2
                  $('#addr1').val( obj.주소1 );
                  $('#addr2').val( obj.주소2 );                             
               }               
            }            
         }
         addressFn();
      
      },
      genderFn(){  // 성별
         const that = this;
         // 성별 이벤트 구현
         $('.gender-btn').each(function(idx,item){
         
            $(this).on({
               change: function(){  
               }
            });
         });
      },
      birthFn(){  //생년월일              
         const that = this;
         const regExpUnNum   = /[^0-9]/g; // 숫자가 아닌것
         const regExpYear  = /^(?:19(?:2[2-9]|[3-9][0-9])|2[0-9][0-9][0-9])$/g; //1. 생년
         const regExpMonth = /^(?:0?[1-9]|1[0-2])$/g;  //2. 생월
         const regExpDate  = /(?:0?[1-9]|1[0-9]|2[0-9]|3[0-1])/g;//3. 생일
         
         // 생년월일 체크 알고리즘
         function checkBirth(){

         }

         //0. 숫자가 아니면 삭제
         //1. 생년 이벤트 2022 100년기준 192[2-9]2[2-9] 이상  1922 ~ 2999 
         const nowYear = new Date().getFullYear();  //2022     
         $('#year').on({
            keyup: function(){
                  $(this).val( $(this).val().replace(regExpUnNum,'') );
                  
                  if($(this).val()===''){
                     $('.birth-day p').removeClass('on');
                  }                    
                  else if( Number($(this).val()) > nowYear ){ //미래년도 2023 ~
                     $('.birth-day p').addClass('on')
                                      .text('생년월일이 미래로 입력 되었습니다.');
                  } 
                  else if( Number($(this).val()) >= nowYear-14 ){ //14미만   20022 ~ 2008
                     $('.birth-day p').addClass('on')
                                      .text('만 14세 미만은 가입이 불가합니다.');
                  }                    
                  else{
                     if( regExpYear.test( $(this).val().toString() ) === false ){
                           $('.birth-day p').addClass('on')
                                            .text('생년월일을 다시 확인해주세요.');
                     }               
                     else{
                           $('.birth-day p').text('태어난 월을 정확하게 입력해주세요.');
                     }  
                  } 

            }
         })

         //2. 생월 이벤트
         $('#month').on({
            keyup: function(){
               $('#month').val( $('#month').val().replace(regExpUnNum,'') );

               if( $('#year').val() ==='' ){ //년도가 비어있으면 
                  $('.birth-day p').addClass('on')
                                   .text('태어난 년도 4자리를 정확하게 입력해주세요.');
               }
               else{
                  if( $('#month').val()==='' ){
                     $('.birth-day p').addClass('on')
                                      .text('태어난 월을 정확하게 입력해주세요.');
                  }
                  else{
                     if( regExpMonth.test($('#month').val().toString()) === false ){
                        $('.birth-day p').addClass('on')
                                         .text('태어난 월을 정확하게 입력해주세요.');
                     }
                     else{
                        $('.birth-day p').addClass('on')
                                         .text('태어난 일을 정확하게 입력해주세요.');
                     }
                  }
               }

            }
         })

         //3. 생일 이벤트
         $('#date').on({
            keyup: function(){
               $('#date').val( $('#date').val().replace(regExpUnNum,'') );

               if($('#year').val()===''){ //윌이 비어있으면 
                  $('.birth-day p').addClass('on')
                                   .text('태어난 년도 4자리를 정확하게 입력해주세요.');
               }
               else if($('#moth').val()===''){ //윌이 비어있으면 
                  $('.birth-day p').addClass('on')
                                   .text('태어난 월을 정확하게 입력해주세요.');
               }
               else{
                  if( $('#date').val()==='' ){
                     $('.birth-day p').addClass('on')
                                      .text('태어난 일을 정확하게 입력해주세요.');
                  }
                  else{
                    
                     if( regExpDate.test( $('#date').val().toString() ) === false ){
                        $('.birth-day p').addClass('on')
                                         .text('태어난 일을 정확하게 입력해주세요.');
                     }
                     else{
                        if( Number($('#date').val()) > 31 ){
                           $('.birth-day p').addClass('on')
                                            .text('태어난 일을 정확하게 입력해주세요.');
                        }  
                        else{
                           $('.birth-day p').removeClass('on');                           
                        } 
                     }

                  }
               }

            }
         })
      },
      addInput(){
         const that = this;
         //추가입력사항
         $('.add-input-btn').each(function(idx,item){
            $(this).on({
               change: function(){                         
                  $('#choocheon').prop('placeholder',  item.value );
               }
            })
         });
      },
      serviceFn(){ //이용약관동의

         const that = this;

         // 이용약관 동의 체크박스 이벤트
            // 한개의 항목 체크
            $('.check-service').each(function(idx, item){
               $(this).on({
                  change: function(){
                     checkStateFn();
                  }
               });
            });

            // 체크된 항목의 갯수를 카운트하는 함수 : 집계(피봇)
            function checkStateFn(){
               let cnt = 0;

               // 체크된 항목 카운트
               let arr = [];  //임시배열
               $('.check-service').each(function(idx, item){
                  if( $(this).is(':checked')===true ){
                     cnt++;
                     //체크 한 항목 값 value 배열에 추가하기 ...전개연산자
                     arr = [...that.회원.이용약관, item.value];
                  }
                  else{
                     arr = arr.filter((val)=> val !== item.value);  // 취소된 항목 값은 배열에서 제외되고 재배열 저장
                  }
               });
               
               arr = [...new Set(arr)];
               that.회원.이용약관 = arr;

               // console.log( that.회원.이용약관 ); //배열 상자

               // 체크항목이 7개이면 : 전체 동의 합니다. 자동 체크한다.
               if(cnt===7){
                  $('#chkAll').prop('checked', true);
               }
               else{
                  $('#chkAll').prop('checked', false);
               }

            }


            let 이용약관전체동의 = [
               '이용약관 동의(필수)',
               '개인정보 수집∙이용 동의(필수)',
               '개인정보 수집∙이용 동의(선택)',
               '무료배송, 할인쿠폰 등 혜택/정보 수신 동의(선택)',
               'SNS',
               '이메일',
               '본인은 만 14세 이상입니다'
            ]
            // 전체 동의 합니다. 체크박스 이벤트
            $('#chkAll').on({
               change: function(){
                 // 모두 7개 항목을 체크해준다.
                 // 전체 동의가 체크되면 모두 체크한다.
                 // 전체 동의가 체크해제되면 모두 체크해제한다.
                 
                 //비구조화 = 구조 분할 할당 => 이 아래에서는 반드시 구조분할할당 한 변수만 사용해야한다.
                 let {이용약관} = that.회원;  

                 if( $(this).is(':checked')===true ){
                     $('.check-service').prop('checked', true);  
                     // that.회원.이용약관 = [...that.회원.이용약관, 이용약관전체동의]; 
                     이용약관 = [...이용약관, 이용약관전체동의]; 
                 }
                 else{
                     $('.check-service').prop('checked', false);
                     // that.회원.이용약관 = [];   //빈배열을 넣으면 배열이 삭제된다.
                     이용약관 = [];   //빈배열을 넣으면 배열이 삭제된다.
                 }
                 
               }
            });
        


            // 정보수신동의 sns 체크박스 이벤트
            // 1. 2개를 체크하는 함수
            // 2. sns-check 체크박스 체인지 이벤트 : 2개를 체크하는 함수 호출 실행
            // 3. sns-check-all 체인지 이벤트 : 체크하면 2개 모두 체크 아닌 2개 모두 해제
            function snsCheckStateFn(){
               let cnt = 0;
               $('.sns-check').each(function(){
                  if( $(this).is(':checked')===true ){
                     cnt++;
                  }
               });
               if(cnt===2){
                  $('.sns-check-all').prop('checked', true);
               }
               else{
                  $('.sns-check-all').prop('checked', false);
               }
            }

            $('.sns-check').each(function(){
               $(this).on({
                  change: function(){
                     snsCheckStateFn();
                  }
               })
            });

            $('.sns-check-all').on({
               change: function(){
                  if( $(this).is(':checked')===true ){
                     $('.sns-check').prop('checked', true);
                  }
                  else{
                     $('.sns-check').prop('checked', false);
                  }
               }
            })



      },
      submitFn(){
         const that = this;
         let cnt = 0;
         
         let 회원 = {
            아이디:'',
            아이디중복확인:false,
            비밀번호:'',
            비밀번호확인:'',
            이름:'',
            이메일:'',
            이메일중복확인:false,
            휴대폰:'',
            주소1:'',
            주소2:'',
            성별:'',
            생년:'',
            생월:'',
            생일:'',
            추가입력사항1:'',   //속성
            추가입력사항2:'',   //속성
            이용약관:[]   //서비스 7개 선택 필수 3가지 배열 객체
         }

         // 전송(submit) 이벤트
         // 전송버튼 클릭 이벤트
         $('.submit-btn').on({
            click: function(e){
               e.preventDefault();
               // 유효성 검사 : 아이디 ~ 이용약관까지 필수요소(반드시입력)와 선택요소
               
                  회원.아이디         = $('#id').val(),
                  회원.아이디중복확인 =  false,  //로컬스트레이지 저장 후  검증  true or false
                  회원.비밀번호       = $('#pw').val(),
                  회원.비밀번호확인   =  $('#pw2').val(),
                  회원.이름           = $('#name').val(),
                  회원.이메일         = $('#email').val(),
                  회원.휴대폰         = $('#hp').val(),
                  회원.이메일중복확인 =  false, //로컬스트레이지 저장 후  검증 true or false
                  회원.주소1          = $('#addr1').val(),
                  회원.주소2          = $('#addr2').val(),
                  회원.성별           = $('.gender-btn').val(),
                  회원.생년           = $('#year').val(),
                  회원.생월           = $('#month').val(),
                  회원.생일           = $('#date').val(),
                  회원.추가입력사항1  = $('.add-input-btn').val(),
                  회원.추가입력사항2  = $('#choocheon').val()
               

               // let {
               //    아이디,     
               //    아이디중복확인 ,
               //    비밀번호,
               //    비밀번호확인 , 
               //    이름,
               //    이메일 ,
               //    휴대폰 ,
               //    이메일중복확인, 
               //    주소1,
               //    주소2,
               //    성별,
               //    생년,
               //    생월,
               //    생일,
               //    추가입력사항1, 
               //    추가입력사항2,
               //    이용약관:[]
               // } = 회원;

               // 화면에 그려진 즉 체크된 값들을 배열에 저장한다.
               // 이용약관 필수 선택 3개 이상 선택해야한다.
               $('.check-service').each(function(idx, item){
                  if( $(this).is(':checked') ){ //선택자 객체
                     회원.이용약관 = [...회원.이용약관, item.value];
                     // item.value 값 안에 필수 항목만 갯수를 카운트 
                     // 특정 문자열 검색 search(), 
                     // indexOf(문자열) 찾으면(0, 1 ,2) 글자의 위치 못찾으면 -1
                     console.log( item.value.indexOf('필수') );
                     if( item.value.indexOf('필수') >= 0  ){
                        cnt++;
                     }
                  }                  
               })
               
               if(회원.아이디===''){
                  $('.member-modal').fadeIn(300);
                  $('.modal-message').html(`아이디를 입력해주세요`);
                  return;
               }
               else{
                  $('.member-modal').fadeOut(0);
                  $('.modal-message').html(``);
               }

               if(회원.비밀번호===''){
                  $('.member-modal').fadeIn(300);
                  $('.modal-message').html(`비밀번호를 입력해주세요`);
                  return;
               }
               else{
                  $('.member-modal').fadeOut(0);
                  $('.modal-message').html(``);
               }

               if(회원.비밀번호확인===''){
                  $('.member-modal').fadeIn(300);
                  $('.modal-message').html(`비밀번호를 한번더 입력해주세요`);
                  return;
               }
               else{
                  $('.member-modal').fadeOut(0);
                  $('.modal-message').html(``);
               }

               if(회원.이름===''){
                  $('.member-modal').fadeIn(300);
                  $('.modal-message').html(`이름을 입력해주세요`);
                  return;
               }
               else{
                  $('.member-modal').fadeOut(0);
                  $('.modal-message').html(``);
               }

               if(회원.이메일===''){
                  $('.member-modal').fadeIn(300);
                  $('.modal-message').html(`이메일을 입력해주세요`);
                  return;
               }
               else{
                  $('.member-modal').fadeOut(0);
                  $('.modal-message').html(``);
               }

               if(회원.휴대폰===''){
                  $('.member-modal').fadeIn(300);
                  $('.modal-message').html(`휴대폰을 입력해주세요`);
                  return;
               }
               else{
                  $('.member-modal').fadeOut(0);
                  $('.modal-message').html(``);
               }
               

               if(회원.주소1===''){
                  $('.member-modal').fadeIn(300);
                  $('.modal-message').html(`주소1을 검색하여 입력해주세요`);
                  return;
               }
               else{
                  $('.member-modal').fadeOut(0);
                  $('.modal-message').html(``);
               }

               if(회원.주소2===''){
                  $('.member-modal').fadeIn(300);
                  $('.modal-message').html(`나머지 주소를 입력해주세요`);
                  return;
               }
               else{
                  $('.member-modal').fadeOut(0);
                  $('.modal-message').html(``);
               }

               if(cnt<3){
                  $('.member-modal').fadeIn(300);
                  $('.modal-message').html(`이용약관동의의 필수항목을 선택해주세요`);
                  return;
               }
               else{
                  $('.member-modal').fadeOut(0);
                  $('.modal-message').html(``);
               }

               localStorage.setItem(회원.아이디, JSON.stringify(회원) );
               $('.member-modal').fadeIn(300);
               $('.modal-message').html(`감사합니다. ${회원.이름}회원가입을 축하드립니다.`);

            }
         })
      }

   }
   SignUp.init();

})(jQuery, window);