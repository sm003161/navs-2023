<head>
 <link rel="stylesheet" href="assets/css/page2 copy.css">
</head>

<?php
 include("header_page.php");
?>
 <section class="container container-page">

 <!-- 상단메뉴 -->
  <div class="top-bar">
   <div class="top-bar-cont">
    <p>이 누리집은 키자이의 비공식 전자정부 누리집입니다.</p>
    <nav class="pc-only" aria-label="탑 메뉴">
     <ul aria-label="탑 메뉴">
      <li>
       <button type="button" class="top-bar__list arrow-down--white" aria-label="switch language">for foreigner</button>
       <ul class="top-bar__list__lang hidden">
        <li><a href="#" class="with-link--black">Korean</a></li>
        <li><a href="#" class="with-link--black">ENG</a></li>
        <li><a href="#" class="with-link--black">中文</a></li>
       </ul>
      </li>
      <li><a href="#" class="top-bar__list with-link--white">어린이</a>
      <li><a href="#" class="top-bar__list">정부24소개</a></li>
      <li><a href="#" class="top-bar__list">로그인</a></li>
      <li><a href="#" class="top-bar__list">인증센터</a></li>
      <li>
       화면크기
        <span class="top-bar__list__zoom-button">
         <button type="button" aria-label="글씨 줄이기"></button>
         <button type="button" aria-label="글씨 100%">100%</button>
         <button type="button" aria-label="글씨 키우기"></button>
        </span>
      </li>
     </ul>
    </nav>
   </div>
  </div>

 <!-- gnb -->
  <header class="border-gray--bottom">
   <div class="header-cont">
    <a href="page2.php" class="logo" aria-label="정부24 홈"><i class="fa-solid fa-fire"></i> 정부24</a>

    <div class="gnb-cont"-pc-only>
     <nav aria-label="상단 대메뉴" class="gnb-menu-pc pc-only">
      <ul>
       <li>
        <button type="button" aria-label="마이페이지 보기">MyGOV</button>

       <section class="gnb-menu__open hidden">
        <div class="gnb-menu__open-contents">
         
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
            <button type="button" class="gnb-menu__2depth-title arrow-down--black">나의 신청내역</button>
            <p class="gnb-menu__2depth-desc">신청한 각종 서비스의 신청접수부터 처리결과까지 확인 가능해요.</p>
           </li>
           
           <li>
            <button type="button" class="gnb-menu__2depth-title">MyGOV 홈</button>
            <p class="gnb-menu__2depth-desc">생활정보 내역, 서비스 신청내역, 나의 혜택 요약 정보를 한 눈에 확인할 수 있어요.</p>
           </li>
           
           <li>
            <button type="button" class="gnb-menu__2depth-title arrow-down--black">나의 신청내역</button>
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

     <section class="gnb-menu-mo mo-only">
      <div class="gnb-menu-mo__top">
       <a href="" class="arrow-right--black">
        <i class="fa-regular fa-user" aria-hidden="true"></i> <strong>로그인</strong>을 해주세요
       </a>
       <button type="button"><i class="fa-solid fa-xmark"></i></button>
      </div>
      <div class="gnb-menu-verify">
       <button type="button"><i class="fa-solid fa-lock"></i> 인증서등록</button>
       <button type="button"><i class="fa-solid fa-fingerprint"></i> 간편번호/지문등록</button>
      </div>

      <nav class="gnb-menu-nav">
       <ul>
        <li>
         <button type="button" class="arrow-down--black"><i class="fa-solid fa-gear"></i> MyGOV</button>
         <ul>
          <li><a href="">MyGOV 홈</a></li>
          <li><a href="" class="arrow-down--black">나의 신청내역</a></li>
          <li><a href="">나의 생활정보</a></li>
          <li><a href="" class="arrow-down--black">나의 정보관리</a></li>
         </ul>
        </li>
        <li>
         <button type="button" class="arrow-down--black"><i class="fa-regular fa-folder-open"></i> 서비스</button>
         <ul>
          <li><a href="">신청·조회·발급</a></li>
          <li><a href="">사실/진위 확인</a></li>
          <li><a href="">분야별 서비스</a></li>
          <li><a href="">기업/단체 서비스</a></li>
          <li><a href="" class="with-link--black">돌봄시설 등 위치 찾기</a></li>
         </ul>
        </li>
        <li><button type="button" class="arrow-down--black"><i class="fa-solid fa-gift"></i> 보조금24</button></li>
        <li><button type="button" class="arrow-down--black"><i class="fa-solid fa-file-invoice"></i> 정책정보</button></li>
        <li><button type="button" class="arrow-down--black"><i class="fa-solid fa-comment-dots"></i> 고객센터</button></li>
        <li><button type="button" class="arrow-down--black"><i class="fa-solid fa-key"></i> 인증센터</button></li>
        <li><button type="button" class="arrow-down--black"><i class="fa-solid fa-shield-halved"></i> 보안센터</button></li>
       </ul>
      </nav>

      <div class="gnb-menu-bottom">
       <ul>
        <li><a href="" class="arrow-right--black">정부24 소개</a></li>
        <li><a href="" class="arrow-right--black">전자증명서·공공마이데이터</a></li>
       </ul>
      </div>
     </section>

    </div>
    
    <div class="header__btn header__btn--left">
     <button type="button" aria-label="모바일 전체 메뉴 보기" class="mo-only"><i class="fa-solid fa-bars" aria-hidden="true"></i></button>
    </div>

    <div class="header__btn header__btn--right">
     <button type="button" aria-label="검색하기" class="pc-only"><i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i></button>
     <button type="button" aria-label="전체 메뉴 보기" class="pc-only"><i class="fa-solid fa-bars" aria-hidden="true"></i></button>
      <button type="button" aria-label="마이페이지" class="mo-only"><i class="fa-regular fa-user" aria-hidden="true"></i></button>
    </div>
   </header>
   
  

 </section>
 
 <main id="main">
  메인컨텐츠
 </main>


 <script src="assets/js/page2.js"></script>
</body>