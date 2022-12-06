<?
    include_once('./_config.php');
?>
<!DOCTYPE html>
<html lang="ko">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>로그인 | 보리보리</title>
   <!-- 공용 -->
   <link rel="shortcut icon" href="<?=$path?>img/logo_01.png" type="image/x-icon">
   <meta name="publisher" content="jihwan">
   <!-- 셀프 -->
   <link rel="stylesheet" href="./css/style.css">
   <!-- 공용 -->
   <script src="<?=$path?>js/lib/jquery.min.js"></script>

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

   
<!-- 셀프 메인-->
   <main id="main">
    
       <section id="logIn">
            <div class="container">
                <div class="title">
                    <h2>로그인</h2>
                </div>
                <div class="content">
                    <form name='sign_in' id='signIn' method='post' action="./response.php">
                        <ul>
                            <li><input type="text" name='id' id='id' value='' placeholder='아이디'></li>
                            <li><input type="password" name='pw' id='pw' value='' placeholder='비밀번호'></li>
                            <li><span><a href="#" class='id-search-btn'>아이디</a><i>/</i><a href="#" class='pw-search-btn'>비밀번호 찾기</a></span></li>
                            <li><button type='submit' class='sing-in-btn'>로그인</button></li>
                            <li><button type='button' class='sign-up-btn'>회원가입</button></li>
                        </ul>
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



</div>


</body>
</html>