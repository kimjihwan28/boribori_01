(function($){

   const Kurly = {
      init(){
         this.header();
         this.section1();
         this.section2();
         this.section3();
         this.section4();
         this.section5();
      },

      header(){
         
         let cnt = 0;

         //1. 상단 오른쪽 슬라이드 함수 위 아래
         function mainSlide(){
            $('#header .slide-wrap').stop().animate({ top: -100*cnt + '%' }, 300, function(){
               if(cnt===6){
                  cnt=0;
                  $('#header .slide-wrap').stop().animate({ top: -100*cnt + '%' }, 0);
               }
            })
         }

         //2. 다음 카운트 함수
         function nextCount(){
            cnt++;
            mainSlide();
         }
         //3. 자동 타이머 함수
         function autoTimer(){
            setInterval(nextCount, 7000);
         }
         /* autoTimer(); */
         
      },

      section1(){

         let cnt = 0;

         //1. 메인 슬라이드 함수
         function mainSlide(){
            $('#section1 .slide-wrap').stop().animate({ left: -100*cnt + '%' }, 300, function(){
               console.log('섹션1 슬라이드 카운트 ' + cnt );
               if(cnt>=13){
                  cnt=0;
                  $('#section1 .slide-wrap').stop().animate({ left: -100*cnt + '%' }, 0);
               }
               if(cnt<=-1){
                  cnt=13;
                  $('#section1 .slide-wrap').stop().animate({ left: -100*cnt + '%' }, 0);
               }
            })

            /* 카운트 */
            $('#section1 .count-number').text(cnt===13 ? 1 : (cnt+1===0 ? 14 : cnt+1)  );

            let slideLen = $('#section1 .slide').length-2;

            $('#section1 .total-number').text( slideLen );

         }

         //2. 다음 카운트 함수
         function nextCount(){
            cnt++;
            if(cnt>=13) cnt=1;
            mainSlide();
         }
         
         function prevCount(){
            cnt--;
            if(cnt<=0) cnt=0;
            mainSlide();
         }
         
         //3. 자동 타이머 함수
         function autoTimer(){
            setInterval(nextCount, 5000);
         }
         autoTimer();

      },
      section2(){

      },
      section3(){

      },
      section4(){

      },
      section5(){  
   }
}
   Kurly.init();
   
})(jQuery);