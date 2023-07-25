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