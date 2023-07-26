/*
const breakPoint = "1280";
const nav = document.querySelectorAll("nav.hidden-mo");

function checkMobile() {
 if (window.screen.width > breakPoint) {
  console.log("PC");
  // 콘솔에 기기 표시
  nav.classList.remove("hidden-mo");

  // hiddem-mo 클래스 제거
 } else {
   console.log("Mobile");
  };
}


checkMobile();
*/

// 모바일 햄버거 메뉴 열기
const moHamberger = document.querySelector(".moHamberger");
const moGnbMenu = document.querySelector(".gnb-mo");

function openMoGnb() {
 moGnbMenu.style.display = "initial";
}

moHamberger.addEventListener("click", openMoGnb)


// 모바일 햄버거 메뉴 닫기
const moHamburgerClose = document.querySelector(".moHamburgerClose");

function closeMoGnb() {
 moGnbMenu.style.display = "none";
}

moHamburgerClose.addEventListener("click", closeMoGnb)


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