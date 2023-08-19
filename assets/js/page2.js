/* 모바일 햄버거 컨트롤 */
const body = document.querySelector("body");
const modalBg = document.querySelector("#modal-bg");

const moGnbMenu = document.querySelector(".gnb-mo");
const moHamberger = document.querySelector("#moHamberger");
const moHamburgerClose = document.querySelector("#moHamburgerClose");

const pcGnbMenu = document.querySelector(".gnb-pc-all");
const pcHamberger = document.querySelector("#pcHamberger");
const pcHamburgerClose = document.querySelector("#pcHamburgerClose");

/*
// body 고정하기 V1
function fixBody() {
 if( moGnbMenu.classList.contains("open") ) {
  body.classList.add("body--fixed");
  console.log("body fixed");
 } else {
  body.classList.remove("body--fixed");
  console.log("body released");
 }
}
*/

// body 고정하기 V2
function fixBody() {
 body.classList.toggle("body--fixed");
 console.log("body scroll changed");
}

// body 어둡게하기
function dimBody() {
 modalBg.classList.toggle("active");
}

/*
// 메뉴 열기 V1
function openMoGnb() {
 moGnbMenu.style.display = "initial";
 moGnbMenu.classList.add("moGnbActive");
}

moHamberger.addEventListener("click", openMoGnb)
*/

/*
// 메뉴 닫기 V2

function closeMoGnb() {
 moGnbMenu.style.display = "none";
 moGnbMenu.classList.remove("moGnbActive");
}

moHamburgerClose.addEventListener("click", closeMoGnb)
*/

// 메뉴 열고 닫기 V2
function toggleMoGnb() {
 moGnbMenu.classList.toggle("active");

 fixBody();
}



/*
// 모바일 GNB 컨트롤 V1
const moGnb21 = document.querySelector("#gnb-2dth-1");
const moGnb22 = document.querySelector("#gnb-2dth-2");
const moGnb31 = document.querySelector("#gnb-3dth-1");
const moGnb32 = document.querySelector("#gnb-3dth-2");
const moGnb3 = document.getElementsByClassName("active");

function gnbOpen11() {
 moGnb21.classList.toggle("active");
 // console.log(moGnb21.style.display);
}

function gnbOpen12() {
 moGnb22.classList.toggle("active");
 // console.log(moGnb22.style.display);
}

function gnbOpen21() {
 // moGnb3.childNodes.classList.remove("active");
 moGnb31.classList.toggle("active");
 // console.log(moGnb22.style.display);
}

function gnbOpen22() {
 // moGnb3.classList.remove("active");
 moGnb32.classList.toggle("active");
 // console.log(moGnb22.style.display);
}
*/

// 모바일 GNB 컨트롤 V2 - 1dth
function moOpenGnb1dth(currentBtn) {
 // console.log(currentBtn);
 const currentUl = "#" + currentBtn + "1";
 const arrowDownBlack = document.querySelector(".arrow-down--black");
 // console.log(currentUl);

 document.querySelector(currentUl).classList.toggle("active");
 arrowDownBlack.classList.toggle("arrow-up--black")
}



// 모바일 GNB 컨트롤 V2 - 2dth
function moOpenGnb2dth(currentA) {
 // a 태그 ID 가져와 변환하기
 const currentAName = "#" + currentA;
 const currentACont = document.querySelector(currentAName);
 const arrowDownBlack = currentACont.querySelector(".arrow-down--black");
 // console.log(currentACont);
 
 const currentUlName = "#" + currentA + "1"; 
 const currentUl = document.querySelector(currentUlName);
 // console.log(currentUl);
 
 currentUl.classList.toggle("active");
 arrowDownBlack.classList.toggle("arrow-up--black")
}




// PC 언어 선택하기
const langBtn = document.querySelector("#language-btn");
const arrowDownWhite = document.querySelector(".arrow-down--white");
const langList = document.querySelector("#lang-list");

function switchLang() {
 langList.classList.toggle("active");
 arrowDownWhite.classList.toggle("arrow-up--white")
}







// PC zoom 배율 컨트롤
const fontSizeSmBtn = document.querySelector("#fontSizeSmBtn");
const fontSizeDftBtn = document.querySelector("#fontSizeDftBtn");
const fontSizeLgBtn = document.querySelector("#fontSizeLgBtn");
const fontSizeBasic = 100;
const fontSizeUnit = 5;
let currentFontSize = fontSizeBasic;

/*
function getCurrentFontSize() {
 console.log(parseFloat(currentFontSize));
 return parseFloat(currentFontSize);
}
*/

// zoom 축소 버튼 클릭
function fontSizeSmaller() {
 currentFontSize = parseFloat(currentFontSize);

 // 최소 90 까지 축소하기
 if (currentFontSize > 90) {
 currentFontSize = currentFontSize - fontSizeUnit;
 setzoomSize();
 } else {
  alert("더 이상 축소할 수 없어요.");
 }
}

// zoom 100% 버튼 클릭
function fontSizeDefault() {
 if (currentFontSize != fontSizeBasic) {
  currentFontSize = fontSizeBasic;
  setzoomSize();
 }
}

// zoom 확대 버튼 클릭
function fontSizeLarger() {
 currentFontSize = parseFloat(currentFontSize);

 // 최대 110 까지 확대하기
 if (currentFontSize < 110) {
  currentFontSize = currentFontSize + fontSizeUnit;
  setzoomSize();
  } else {
   alert("더 이상 확대할 수 없어요.");
  }
 }
 
 // zoom 적용
 function setzoomSize() {
  body.style.zoom = currentFontSize + '%' ;
  fontSizeDftBtn.innerHTML = currentFontSize + '%';
 }





 /* PC GNB 컨트롤 V1
 
 function pcOpenGnb(elementId) {
  
  // 클릭한 메뉴 열기
  // const menuChild = '#' + elementId + '>section.gnb__open';
  const menu = '#' + elementId;
  // const menuSectionSelected = document.querySelector(menuChild);
  const menuBtnClicked = document.querySelector(menu);
  const menuSectionSelected = menuBtnClicked.nextElementSibling;
  
  // 기존에 활성화된 메뉴 닫기
  const currentMenu = document.querySelector(".gnb-pc__child");
  const currentSectionSelected = currentMenu.nextElementSibling;

  currentMenu.classList.remove("active");
  menuBtnClicked.classList.toggle("active");

  currentSectionSelected.classList.remove("active");
  menuSectionSelected.classList.toggle("active");


  document.querySelector(".modal-bg").classList.toggle("active");


  fixBody()
 }
 */


 /* PC GNB 컨트롤 V2 */
 const gnbPc = document.querySelector("#header");

 function pcOpenGnb(elementId) {
  
  // 클릭된 버튼 찾기
  const btnId = "#" + elementId;
  console.log(btnId);
  const liClicked = gnbPc.querySelector(btnId).parentElement;
  
  // 이전에 활성화된 버튼 찾기
  const currentLi = gnbPc.querySelector("li.active");
  console.log(currentLi);
  
  // 이전에 활성회된 버튼이 있고 자기 자신이 아닐 경우 
  if (currentLi !== null && currentLi != liClicked) {
   // 이전에 활성화된 버튼을 비활성화하고 클릭된 버튼을 활성화
   currentLi.classList.remove("active");
   liClicked.classList.add("active");
   
   // 아닐 경우
  } else {
   // 현재 버튼을 활성화/비활성화
   liClicked.classList.toggle("active");
   dimBody();
  }
 }
 
 /* PC GNB 닫기 */
 function pcCloseGnb() {
  const currentLi = gnbPc.querySelector("li.active");
  currentLi.classList.remove("active");
  dimBody();
 }


/* PC GNB 햄버거 열고 닫기 */
function togglePcGnb() {
 pcGnbMenu.classList.toggle("active");

 fixBody();
}




/* 스크롤이 사이즈에 따라 헤더 줄이고 상단에 고정하기 */
function stickyGnb() {
 const container = document.querySelector("#container");
 const headerContainer = container.querySelector("#header");
 
 // 윈도우 기준으로 스크롤 사이즈 구하기
 const currentY = Math.round(window.scrollY);

 // 현재 스크롤이 90 이상일 경우
 if (currentY >= 90) {
 headerContainer.classList.add("sticky");
} else {
 headerContainer.classList.remove("sticky");
 }
}





/* eventListner 모아보기 */
// 모바일 GNB 열고 닫기
moHamberger.addEventListener("click", toggleMoGnb);
moHamburgerClose.addEventListener("click", toggleMoGnb);

// PC 언어 선택하기
langBtn.addEventListener("click", switchLang);

// PC 햄버거 열고 닫기
pcHamberger.addEventListener("click", togglePcGnb);
pcHamburgerClose.addEventListener("click", togglePcGnb);

// PC zoom 조절하기
fontSizeSmBtn.addEventListener("click", fontSizeSmaller);
fontSizeDftBtn.addEventListener("click", fontSizeDefault);
fontSizeLgBtn.addEventListener("click", fontSizeLarger);

// PC GNB stickyGnb 실행하기 ( 스크롤 이벤트 기준 )
document.addEventListener("scroll", stickyGnb);