<head>
 <link rel="stylesheet" href="assets/css/page1.css">
</head>

<?php
 include("header_page.php");
?>

 <section class="container container-page">
  <nav class="top-header" aria-label="탑 메뉴">
   <ul aria-label="탑 메뉴 목록">
    <li class="hamburger">
     <button type="button" onclick="location.href=''" aria-label="네이버 전체 메뉴 보기">
      <i class="fa-solid fa-bars" aria-hidden="true"></i>
     </button>
     <div class="tooltip-container">
      <p class="tooltip">바로가기</p>
     </div>
    </li>
    <li class="pay">
     <button type="button" onclick="location.href=''" aria-label="네이버 페이로 가기">
      <i class="fa-solid fa-wallet" aria-hidden="true"></i>
     </button>
     <div class="tooltip-container">
      <p class="tooltip">네이버페이</p>
     </div>
    </li>
    <li class="notice">
     <button type="button" onclick="location.href=''" aria-label="알림·혜택 보기">
      <i class="fa-regular fa-bell" aria-hidden="true"></i>
     </button>
     <div class="tooltip-container">
      <p class="tooltip">알림 · 혜택</p>
     </div>
    </li>
   </ul>
  </nav>


  <main class="search-area" id="main">
   <div class="search-bar">
    <a class="logo" href="#" aria-label="네이버 홈으로 가기" role="img">N</a>
    <form action="" method="get" class="search-form">
     <input type="text" name="keyword" id="keyword" placeholder="검색어를 입력해주세요." aria-label="검색어 입력란입니다.">
     <button type="submit" class="search" title="검색하기">
      <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>
     </button>
    </form>
    <span class="search-group">
     <span class="search-tools">
      <button class="typing-resources" type="button" title="한글 입력 열기">
       <i class="fa-regular fa-keyboard"></i>
      </button>
      <button class="auto-complete" type="button" title="자동 완성 열기"></button>
     </span>
    </span>
   </div>
  </main>



  <section class="shortcuts-menu">
   <ul aria-label="바로가기 메뉴 모음">
    <li><a href="#"><span class="shortcut-menu__icon"><i class="fa-regular fa-envelope" aria-hidden="true" role="img"></i>메일</span></a></li>
    <li><a href="#"><span class="shortcut-menu__icon"><i class="fa-solid fa-mug-saucer" aria-hidden="true" role="img"></i>카페</span></a></li>
    <li><a href="#"><span class="shortcut-menu__icon"><i class="fa-regular fa-note-sticky" aria-hidden="true" role="img"></i>블로그</span></a></li>
    <li><a href="#"><span class="shortcut-menu__icon"><i class="fa-solid fa-bag-shopping" aria-hidden="true" role="img"></i>쇼핑</span></a></li>
    <li><a href="#"><span class="shortcut-menu__icon"><i class="fa-regular fa-newspaper" aria-hidden="true" role="img"></i>뉴스</span></a></li>
    <li><a href="#"><span class="shortcut-menu__icon"><i class="fa-solid fa-chart-line" aria-hidden="true" role="img"></i>증권</span></a></li>
    <li><a href="#"><span class="shortcut-menu__icon"><i class="fa-solid fa-house-chimney" aria-hidden="true" role="img"></i>부동산</span></a></li>
    <li><a href="#"><span class="shortcut-menu__icon"><i class="fa-solid fa-location-dot" aria-hidden="true" role="img"></i>지도</span></a></li>
    <li><a href="#"><span class="shortcut-menu__icon"><i class="fa-solid fa-message" aria-hidden="true" role="img"></i>웹툰</span></a></li>
    <li><a href="#"><span class="shortcut-menu__icon"><i class="fa-solid fa-ellipsis" aria-hidden="true" role="img"></i>더보기</span></a></li>
   </ul>
  </section>
 </section>
</body>
</html>