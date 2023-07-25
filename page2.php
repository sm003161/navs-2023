<head>
 <link rel="stylesheet" href="assets/css/page2.css">
</head>

<?php
 include("header_page.php");
?>
 <section class="container container-page">

 <!-- 상단메뉴 -->
  <div class="top-menu">
   <div class="top-menu__container">
    <p class="top-menu__containerintro">이 누리집은 키자이의 비공식 전자정부 누리집입니다.</p>
    <nav aria-label="탑 메뉴" class="check-mo">
     <ul aria-label="탑 메뉴">
      <li>
       <button type="button" class="top-menu__list arrow-down-white" aria-label="switch language">for foreigner</button>
       <ul class="top-menu__list__lang hidden">
        <li><a href="#" class="with-link-black">Korean</a></li>
        <li><a href="#" class="with-link-black">ENG</a></li>
        <li><a href="#" class="with-link-black">中文</a></li>
       </ul>
      </li>
      <li><a href="#" class="top-menu__list with-link-white">어린이</a>
      <li><a href="#" class="top-menu__list">정부24소개</a></li>
      <li><a href="#" class="top-menu__list">로그인</a></li>
      <li><a href="#" class="top-menu__list">인증센터</a></li>
      <li>
       화면크기
        <span class="top-menu__list__zoom-button">
         <button type="button" aria-label="글씨 줄이기"></button>
         <button type="button" aria-label="글씨 100%">100%</button>
         <button type="button" aria-label="글씨 키우기"></button>
        </span>
      </li>
     </ul>
    </nav>
   </div>
  </div>

  <header>
   <div class="header-container">
    <a href="page2.php" class="logo" aria-label="정부24 홈">🇰🇷 정부24</a>

    <div class="gnb-menu-container check-mo">
     <nav aria-label="상단 대메뉴" class="gnb-menu">
      <ul>
       <li>
        <button type="button" aria-label="마이페이지 보기">MyGOV</button>

       <section class="gnb-menu__open hidden">
        <div class="gnb-menu__open__contents">
         
         <aside class="gnb-menu__open__intro">
          <div>
           <i class="fa-solid fa-gear" aria-hidden="true"></i>
          </div>
          <dl class="gnb-menu__open__desc">
           <dt>MyGOV</dt>
           <dd>서비스 신청현황, 생활 정보 확인 및 회원정보 설정을 할 수 있어요.</dd>
          </dl>
         </aside>

         <section class="gnb-menu__2depth">
          <ul>
           <li>
            <button type="button" class="gnb-menu__2depth-title">MyGOV 홈</button>
            <p class="gnb-menu__2depth-desc">생활정보 내역, 서비스 신청내역, 나의 혜택 요약 정보를 한 눈에 확인할 수 있어요.</p>
           </li>
           
           <li>
            <button type="button" class="gnb-menu__2depth-title arrow-down-black">나의 신청내역</button>
            <p class="gnb-menu__2depth-desc">신청한 각종 서비스의 신청접수부터 처리결과까지 확인 가능해요.</p>
           </li>
           
           <li>
            <button type="button" class="gnb-menu__2depth-title">MyGOV 홈</button>
            <p class="gnb-menu__2depth-desc">생활정보 내역, 서비스 신청내역, 나의 혜택 요약 정보를 한 눈에 확인할 수 있어요.</p>
           </li>
           
           <li>
            <button type="button" class="gnb-menu__2depth-title arrow-down-black">나의 신청내역</button>
            <p class="gnb-menu__2depth-desc">신청한 각종 서비스의 신청접수부터 처리결과까지 확인 가능해요.</p>
           </li>
          </ul>
         </section>
        </div>
       </section>
       </li>

       <li>
        <button type="button" aria-label="각종 서비스 보기">서비스</button>
       </li>

       <li>
        <button type="button" aria-label="정부 혜택 보기">보조금24</button>
       </li>

       <li>
        <button type="button" aria-label="패밀리 사이트 및 문서 보기">정책정보</button>
       </li>

       <li>
        <button type="button" aria-label="각종 정보 보기">고객센터</button>
       </li>
      </ul>
     </nav>
    </div>
    
    <div class="gnb-menu__btn-group">
     <button type="button" aria-label="검색하기"><i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i></button>
     <button type="button" aria-label="전체 메뉴 보기"><i class="fa-solid fa-bars" aria-hidden="true"></i></button>
    </div>
    <!-- <button type="button" aria-label="마이페이지"><i class="fa-regular fa-user" aria-hidden="true"></i></button> -->
   </header>
   
  

 </section>
 
 <main id="main">
  메인컨텐츠
 </main>


 <script src="assets/js/page2.js"></script>
</body>