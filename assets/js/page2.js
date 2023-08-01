/* 모바일 햄버거 컨트롤 */
const moHamberger = document.querySelector("#moHamberger");
const moGnbMenu = document.querySelector(".gnb-mo");
const body = document.querySelector("body");
const moHamburgerClose = document.querySelector("#moHamburgerClose");

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
 moGnbMenu.classList.toggle("open");

 fixBody();
}

function fixBody() {
 if( moGnbMenu.classList.contains("open") ) {
  body.classList.add("body--fixed");
 } else {
  body.classList.remove("body--fixed");
 }
}




// 모바일 gnb 컨트롤
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






// PC 언어선택하기
const langBtn = document.querySelector("#language-btn");
const langList = document.querySelector("#lang-list");

function switchLang() {
 langList.classList.toggle("active");
}







// PC 배율 컨트롤
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

// 줌 축소 버튼 클릭
function fontSizeSmaller() {
 currentFontSize = parseFloat(currentFontSize);

 if (currentFontSize > 90) {
 currentFontSize = currentFontSize - fontSizeUnit;

 setZoomSize();
 } else {
  alert("더 이상 축소할 수 없어요.");
 }
}

// 줌 100% 버튼 클릭
function fontSizeDefault() {
 if (currentFontSize != fontSizeBasic) {
  currentFontSize = fontSizeBasic;

  setZoomSize();
 }
}

// 줌 확대 버튼 클릭
function fontSizeLarger() {
 currentFontSize = parseFloat(currentFontSize);

 if (currentFontSize < 110) {
  currentFontSize = currentFontSize + fontSizeUnit;
 
  setZoomSize();
  } else {
   alert("더 이상 확대할 수 없어요.");
  }
 }
 
 // 줌 적용
 function setZoomSize() {
  body.style.zoom = currentFontSize + '%' ;
  fontSizeDftBtn.innerHTML = currentFontSize + '%';
 }







/* eventListner 모아보기 */
// 모바일
moHamberger.addEventListener("click", toggleMoGnb);
moHamburgerClose.addEventListener("click", toggleMoGnb);

// PC
langBtn.addEventListener("click", switchLang);
fontSizeSmBtn.addEventListener("click", fontSizeSmaller);
fontSizeDftBtn.addEventListener("click", fontSizeDefault);
fontSizeLgBtn.addEventListener("click", fontSizeLarger);