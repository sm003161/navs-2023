/* 모바일 햄버거 컨트롤 */
const moHamberger = document.querySelector(".moHamberger");
const moGnbMenu = document.querySelector(".gnb-mo");
const body = document.querySelector("body");
const moHamburgerClose = document.querySelector(".moHamburgerClose");

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


// 모바일 gnb 11depth 열기
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

// eventListner 모아보기
moHamberger.addEventListener("click", toggleMoGnb);
moHamburgerClose.addEventListener("click", toggleMoGnb);