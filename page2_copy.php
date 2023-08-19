<head>
 <link rel="stylesheet" href="assets/css/page2 copy.css">
</head>

<?php
 include("header_page.php");
?>
 <section class="container container-page" id="container">

 <!-- 상단메뉴 -->
  <div class="top-bar">
   <div class="top-bar-cont">
    <span>이 누리집은 키자이의 비공식 전자정부 누리집입니다.</span>
    <nav class="pc-only" aria-label="탑 메뉴">
     <ul aria-label="탑 메뉴">
      <li>
       <button type="button" class="top-bar__list arrow-down--white" id="language-btn" aria-label="switch language">for foreigner</button>
       <ul class="top-bar__list__lang" id="lang-list">
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
         <button id="fontSizeSmBtn" type="button" aria-label="글씨 줄이기"></button>
         <button id="fontSizeDftBtn" type="button" aria-label="글씨 100%">100%</button>
         <button id="fontSizeLgBtn" type="button" aria-label="글씨 키우기"></button>
        </span>
      </li>
     </ul>
    </nav>
   </div>
  </div>


 <!-- 모바일 gnb -->
  <section class="gnb-mo mo-only">
   <div class="gnb-mo__top">
    <a href="#" class="arrow-right--black">
     <i class="fa-regular fa-user" aria-hidden="true"></i> <strong>로그인</strong>을 해주세요
    </a>
    <button type="button" id="moHamburgerClose"><i class="fa-solid fa-xmark"></i></button>
   </div>
   <div class="gnb-mo__verify">
    <button type="button"><i class="fa-solid fa-lock"></i> 인증서등록</button>
    <button type="button"><i class="fa-solid fa-fingerprint"></i> 간편번호/지문등록</button>
   </div>

   <nav class="gnb-mo__list">
    <ul>
     <li>
      <button type="button" class="gnb-1dth border-gray--bottom" onclick="moOpenGnb1dth(this.id)" id="moGnb1">
       <i class="fa-solid fa-gear"></i>
       <span> MyGOV</span>
       <span class="arrow-down--black"></span>
      </button>
      <ul class="gnb-2dth" id="moGnb11">
       <li><a href="#">MyGOV 홈</a></li>
       <li>
        <a href="javascript:void(0);" onclick="moOpenGnb2dth(this.id)"  id="moGnb111">
         <span>나의 신청내역</span>
         <span class="arrow-down--black"></span>
        </a>
        <ul class="gnb-3dth" id="moGnb1111">
         <li><a href="#">서비스 신청내역</a></li>
         <li><a href="#">온종일돌봄 신청내역</a></li>
         <li><a href="#">환불정보조회</a></li>
        </ul>
       </li>
       <li><a href="#">나의 생활정보</a></li>
       <li>
        <a href="javascript:void(0);" onclick="moOpenGnb2dth(this.id)"  id="moGnb121">
         <span>나의 정보관리</span>
         <span class="arrow-down--black"></span>
        </a>
        <ul class="gnb-3dth" id="moGnb1211">
         <li><a href="#">회원 정보</a></li>
         <li><a href="#">서비스 이용동의</a></li>
         <li><a href="#">즐겨찾는 서비스 설정</a></li>
         <li><a href="#">알림 수신동의</a></li>
         <li><a href="#">회원탈퇴</a></li>
        </ul>
       </li>
      </ul>
     </li>
     <li>
      <button type="button" class="gnb-1dth border-gray--bottom" onclick="moOpenGnb1dth(this.id)" id="moGnb2">
       <i class="fa-regular fa-folder-open"></i>
       <span> 서비스</span>
       <span class="arrow-down--black"></span>
      </button>
      <ul class="gnb-2dth" id="gnb-2dth-2">
       <li><a href="#">신청·조회·발급</a></li>
       <li><a href="#">사실/진위 확인</a></li>
       <li><a href="#">분야별 서비스</a></li>
       <li><a href="#">기업/단체 서비스</a></li>
       <li><a href="#" class="with-link--black">돌봄시설 등 위치 찾기</a></li>
      </ul>
     </li>
     <li>
      <button type="button" class="gnb-1dth border-gray--bottom">
      <i class="fa-solid fa-gift"></i>
      <span> 보조금24</span>
      <span class="arrow-down--black"></span>
     </button>
     </li>
     <li>
      <button type="button" class="gnb-1dth border-gray--bottom">
      <i class="fa-solid fa-file-invoice"></i>
      <span> 정책정보</span>
      <span class="arrow-down--black"></span>
     </button>
     </li>
     <li>
      <button type="button" class="gnb-1dth border-gray--bottom">
      <i class="fa-solid fa-comment-dots"></i>
      <span> 고객센터</span>
      <span class="arrow-down--black"></span>
     </button>
     </li>
     <li>
      <button type="button" class="gnb-1dth border-gray--bottom">
      <i class="fa-solid fa-key"></i>
      <span> 인증센터</span>
      <span class="arrow-down--black"></span>
     </button>
     </li>
     <li>
      <button type="button" class="gnb-1dth border-gray--bottom">
      <i class="fa-solid fa-shield-halved"></i>
      <span> 보안센터</span>
      <span class="arrow-down--black"></span>
     </button>
    </li>
   </ul>
  </nav>
  
  <div class="gnb-bottom">
   <ul>
    <li>
     <a href="#" class="border-gray--bottom">
      <span>정부24 소개
     <span class="arrow-right--black"></span>
     </a>
    </li>
    <li>
     <a href="#">
      <span>전자증명서·공공마이데이터
     <span class="arrow-right--black"></span>
     </a>
    </li>
    </ul>
   </div>
  </section>


 <!-- PC gnb -->
  <header class="border-gray--bottom" id="header">
   <div class="header-cont">
    <a href="page2_copy.php" class="logo" aria-label="정부24 홈"><i class="fa-solid fa-fire"></i> 정부24</a>

    <div class="gnb-pc-cont pc-only">
     <nav aria-label="상단 대메뉴" class="gnb-pc">
      <ul>
       <li>
        <button type="button" onclick="pcOpenGnb(this.id)" aria-label="마이페이지 보기" id="pcGnb1" class="gnb-pc__child">MyGOV</button>

        <section class="gnb__open border-gray--top">
         <div class="gnb__open-contents">
          
          <aside class="gnb__open__intro">
           <div>
            <i class="fa-solid fa-gear" aria-hidden="true"></i>
           </div>
           <dl class="gnb__open__desc">
            <dt>MyGOV</dt>
            <dd>서비스 신청현황, 생활 정보 확인 및 회원정보 설정을 할 수 있어요.</dd>
           </dl>
          </aside>

          <section class="gnb__2depth">
           <ul>
            <li>
             <button type="button" class="gnb__2depth-title">MyGOV 홈</button>
             <p class="gnb__2depth-desc">생활정보 내역, 서비스 신청내역, 나의 혜택 요약 정보를 한 눈에 확인할 수 있어요.</p>
            </li>
            
            <li>
             <button type="button" class="gnb__2depth-title arrow-down--black">나의 신청내역</button>
             <p class="gnb__2depth-desc">신청한 각종 서비스의 신청접수부터 처리결과까지 확인 가능해요.</p>
            </li>
            
            <li>
             <button type="button" class="gnb__2depth-title">MyGOV 홈</button>
             <p class="gnb__2depth-desc">생활정보 내역, 서비스 신청내역, 나의 혜택 요약 정보를 한 눈에 확인할 수 있어요.</p>
            </li>
            
            <li>
             <button type="button" class="gnb__2depth-title arrow-down--black">나의 신청내역</button>
             <p class="gnb__2depth-desc">신청한 각종 서비스의 신청접수부터 처리결과까지 확인 가능해요.</p>
            </li>
           </ul>
          </section>
         </div>
        </section>
       </li>

       <li>
        <button type="button" onclick="pcOpenGnb(this.id)" aria-label="각종 서비스 보기" id="pcGnb2" class="gnb-pc__child">서비스</button>

        <section class="gnb__open border-gray--top" id="pcGnbSection2">
         <div class="gnb__open-contents">
          
          <aside class="gnb__open__intro">
           <div>
            <i class="fa-solid fa-gear" aria-hidden="true"></i>
           </div>
           <dl class="gnb__open__desc">
            <dt>서비스</dt>
            <dd>서비스 신청현황, 생활 정보 확인 및 회원정보 설정을 할 수 있어요.</dd>
           </dl>
          </aside>

          <section class="gnb__2depth">
           <ul>
            <li>
             <button type="button" class="gnb__2depth-title">MyGOV 홈</button>
             <p class="gnb__2depth-desc">생활정보 내역, 서비스 신청내역, 나의 혜택 요약 정보를 한 눈에 확인할 수 있어요.</p>
            </li>
            
            <li>
             <button type="button" class="gnb__2depth-title arrow-down--black">나의 신청내역</button>
             <p class="gnb__2depth-desc">신청한 각종 서비스의 신청접수부터 처리결과까지 확인 가능해요.</p>
            </li>
            
            <li>
             <button type="button" class="gnb__2depth-title">MyGOV 홈</button>
             <p class="gnb__2depth-desc">생활정보 내역, 서비스 신청내역, 나의 혜택 요약 정보를 한 눈에 확인할 수 있어요.</p>
            </li>
            
            <li>
             <button type="button" class="gnb__2depth-title arrow-down--black">나의 신청내역</button>
             <p class="gnb__2depth-desc">신청한 각종 서비스의 신청접수부터 처리결과까지 확인 가능해요.</p>
            </li>
           </ul>
          </section>
         </div>
        </section>
       </li>

       <li>
        <button type="button" onclick="pcOpenGnb(this.id)" aria-label="정부 혜택 보기" id="pcGnb3" class="gnb-pc__child">보조금24</button>
       </li>

       <li>
        <button type="button" onclick="pcOpenGnb(this.id)" aria-label="패밀리 사이트 및 문서 보기" id="pcGnb4" class="gnb-pc__child">정책정보</button>
       </li>

       <li>
        <button type="button" onclick="pcOpenGnb(this.id)" aria-label="각종 정보 보기" id="pcGnb5" class="gnb-pc__child">고객센터</button>
       </li>
      </ul>
     </nav>

    </div>
    
    <div class="header__btn header__btn--left">
     <button type="button" aria-label="모바일 전체 메뉴 보기" class="mo-only"  id="moHamberger">
      <i class="fa-solid fa-bars" aria-hidden="true"></i>
     </button>
    </div>

    <div class="header__btn header__btn--right">
     <ul>
      <li>
       <button type="button" onclick="pcOpenGnb(this.id)" aria-label="검색하기" id="pcGnbSearchBtn" class="pc-only">
        <i class="fa-solid fa-magnifying-glass" aria-hidden="true"></i>
       </button>
       <section class="gnb__open border-gray--top">
        <div class="gnb__open-contents">
         <div class="row gnb__search">
          <form action="" method="get">
           <input type="text" placeholder="검색어를 입력하세요."/>
           <button type="button">
            <i class="fa-solid fa-magnifying-glass fa-xl" aria-hidden="true"></i>
           </button>
          </form>
          <button type="button" onclick="pcCloseGnb()" id="pcGnbSearchClose">
           <i class="fa-solid fa-close fa-xl" aria-hidden="true"></i>
          </button>
         </div>
         <section class="rankings">
          <div class="searchRanking">
           <p class="title">인기 검색어</p>
           <ol>
            <li>주민등록등본</li>
            <li>가족관계증명서</li>
            <li>세목별과세증명서</li>
            <li>전입신고</li>
            <li>여권재발급</li>
           </ol>
          </div>

          <div class="hotService">
           <p class="title">많이 찾는 서비스</p>
           <ol>
            <li>건축물대장 등본(초본) 발급(열람)</li>
            <li>자동차 등록원부등본(초본) 발급(열람)</li>
            <li>주민등록표 등본(초본) 발급</li>
            <li>토지(임야)대장 등본 발급(열람)</li>
            <li>지방세 납세증명서 발급</li>
           </ol>
          </div>
         </section>
        </div>
       </section>
      </li>

      <li>
       <button type="button" aria-label="전체 메뉴 보기" id="pcHamberger" class="pc-only">
        <i class="fa-solid fa-bars" aria-hidden="true"></i>
       </button>
      </li>

      <li>
       <button type="button" aria-label="마이페이지" class="mo-only"><i class="fa-regular fa-user" aria-hidden="true"></i></button>
      </li>
     </ul>
    </div>
   </header>


   <!-- PC gnb 전체보기 -->
   <section class="mo-hide gnb-pc-all">
    <header class="border-gray--bottom">
     <div class="header-cont">
      <a href="page2_copy.php" class="logo" aria-label="정부24 홈"><i class="fa-solid fa-fire"></i> 정부24</a>

      <p>전체메뉴</p>

      <div class="header__btn header__btn--right">
       <ul>
        <li>
         <button type="button" aria-label="닫기" id="pcHamburgerClose">
          <i class="fa-solid fa-close" aria-hidden="true"></i>
         </button>
        </li>
       </ul>
      </div>
     </div>
    </header>
    
    <nav class="gnb-pc-all__list">
     <ul>
      <li class="border-gray--bottom">
       <section>
        <h1>MyGOV</h1>
        <ul>
         <li>
          <h2>MyGOV 홈</h2>
         </li> 

         <li>
          <h2>나의 신청내역</h2>
          <ul>
           <li>서비스 신청내역</li>
           <li>온종일돌봄 신청내역</li>
           <li>전자증명서 내역</li>
           <li>환불정보조회 모바일</li>
           <li>서비스 바구니</li>
          </ul>
         </li> 
         
         <li>
          <h2>나의 생활정보</h2>
         </li> 
         
         <li>
          <h2>나의 정보관리</h2>
          <ul>
           <li>서비스 이용동의</li>
           <li>회원정보</li>
           <li>회원탈퇴</li>
           <li>자주찾는 서비스 설정</li>
           <li>알림 수신동의</li>
          </ul>
         </li>
        </ul>
       </section>
      </li>

      
      <li class="border-gray--bottom">
       <section>
        <h1>서비스</h1>
        <ul>
         <li>
          <h2>신청.조회.발급</h2>
         </li> 

         <li>
          <h2>사실/진위 확인</h2>
         </li> 
         
         <li>
          <h2>원스톱 서비스</h2>
         </li> 

         <li>
          <h2>분야별 서비스</h2>
         </li>

         <li>
          <h2>기업/단체 서비스</h2>
         </li>

         <li>
          <h2 class="with-link--black">돌봄시설 등 위치 찾기</h2>
         </li>
        </ul>
       </section>
      </li>


      <li class="border-gray--bottom">
       <section>
        <h1>보조금24</h1>
        <ul>
         <li>
          <h2>보조금24 홈</h2>
         </li> 

         <li>
          <h2>나의 혜택</h2>
         </li> 
         
         <li>
          <h2>간편찾기</h2>
         </li> 

         <li>
          <h2>전체 혜택</h2>
         </li>

         <li>
          <h2>보조금24란</h2>
          <ul>
           <li>소개</li>
           <li>이용안내</li>
           <li>자주묻는질문</li>
          </ul>
         </li>
        </ul>
       </section>
      </li>

      <li class="border-gray--bottom">
       <section>
        <h1>정책정보</h1>
        <ul>
         <li>
          <h2>분야별 정책정보</h2>
          <ul>
           <li>정책뉴스</li>
           <li>연구보고서</li>
           <li>간행물</li>
           <li>정책자료</li>
          </ul>
         </li> 

         <li>
          <h2>정부/지자체 조직도</h2>
          <ul>
           <li>중앙행정기관</li>
           <li>지방자치단체</li>
           <li>행정위원회</li>
           <li>분쟁조정위원회</li>
          </ul>
         </li> 
         
         <li>
          <h2>정부/지자체 운영누리집</h2>
         </li> 

         <li>
          <h2>지자체 소식</h2>
         </li>

         <li>
          <h2>공모전</h2>
         </li>

         <li>
          <h2>공공자원공유</h2>
         </li>

         <li>
          <h2>국고보조금 부정수급 신고</h2>
         </li>

        </ul>
       </section>
      </li>

      <li class="border-gray--bottom">
       <section>
        <h1>고객센터</h1>
        <ul>
         <li>
          <h2>공지사항</h2>
         </li> 

         <li>
          <h2>이용안내</h2>
          <ul>
           <li>정부24 이용방법</li>
           <li>회원가입/인증서 등록방법</li>
           <li>전자결제 안내</li>
           <li>무인민원 발급 안내</li>
           <li>어디서나 민원</li>
           <li>장애인 이용안내</li>
           <li>행정정보공동이용</li>
          </ul>
         </li> 
         
         <li>
          <h2>자주 묻는 질문 (FAQ)</h2>
         </li> 

         <li>
          <h2>자료실</h2>
         </li>

         <li>
          <h2>상담예약</h2>
         </li>

         <li>
          <h2>개선 의견</h2>
         </li>
        </ul>
       </section>
      </li>

      <li class="border-gray--bottom">
       <section>
        <h1>정부24 소개</h1>
        <ul>
         <li>
          <h2>정부24 개요</h2>
         </li> 

         <li>
          <h2>데이터로 보는 정부24</h2>
         </li>
        </ul>
       </section>
      </li>

      <li class="border-gray--bottom">
       <section>
        <h1>인증센터</h1>
        <ul>
         <li>
          <h2>인증 등록/관리</h2>
         </li> 

         <li>
          <h2>복합인증 관리</h2>
         </li>
        </ul>
       </section>
      </li>

      <li class="border-gray--bottom">
       <section>
        <h1>보안센터</h1>
        <ul>
         <li>
          <h2>보안프로그램</h2>
         </li> 

         <li>
          <h2>개인정보처리방침</h2>
         </li>

         <li>
          <h2>저작권보호정책</h2>
         </li>

         <li>
          <h2>이용약관</h2>
         </li>
        </ul>
       </section>
      </li>






      
     </ul>
    </nav>
    
   </section>
   

   <div id="modal-bg"></div>
   
   <main id="main">메인컨텐츠</main>

   
 </section>


 <script src="assets/js/page2.js"></script>
</body>