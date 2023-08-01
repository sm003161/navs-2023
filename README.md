# 230710

## tooltip

### 1. 기본 순서

- 말풍선 컨테이너 만들기
- 말풍선 안에 p 만들고 스타일링하기
- Image Sprite 사용해 말꼬리 붙이기
- hover 상태일 때만 보이도록 지정하기

### 2. 아이콘 세트 사용해 말꼬리 붙이기 ( Image Sprite )

말풍선 컨테이너에 아래의 작업하기

- after 가상선택자 만들기
- width / height 설정하기
- background-image 불러와 position, sizem repeat 설정해주기
- position absolute, left / top 으로 위치 위치 잡아주기

# 230726

## js basic

### 1. eventListner

대상에 대한 event 를 기준으로 function 을 실행하기

```js
// [ 대상 ].eventListener("이벤트", [ function 이름 ])
heyKi.eventListener("click", beHappy);
```

### 2. style.property

대상의 CSS를 수정하기

```js
// [ 대상 ].style.property = "value"
element.style.display = "flex";
```

# 230801

## js basic

### 1. parseFloat()

string 에서 문자를 제거한 후 number 로 변환하는 함수

```js
// parseFloat([대상]);
let default = '100%';
default = parseFloat(default);

// 이 경우 default 는 숫자 100 으로 변환됨
default = 100;
```

### 2. function A(B)

클릭한 element 의 id 값을 쉽게 찾기

```html
<body>
 <!-- button 클릭 시 beHappy 를 실행하기 -->
 <button onclick="beHappy1()" id="heyKi1"></button>

 <!-- button 클릭 시 beHappy 를 실행하기 + id 를 인자로 넘겨주기 -->
 <button onclick="beHappy2(this.id)" id="heyKi2"></button>
</body>

<script>
 // 단순 beHappy1 함수 실행
 function beHappy1() {
  alert();
 }

 // 인자인 you ( heyKi2 ) 를 가지고 beHappy2 함수 실행
 function beHappy2(you) {
  alert(you);
 }
</script>
```

### 3. nextElementSibling

특정 element 의 바로 다음 형제 노드를 찾는 속성

```js
// [ 기준 element ] 찾기
const olderBro = document.querySelector("#olderBro");

// 형제 노드 찾기
// [ 기준 element ].nextElementSibling
const youngerBro = olderBro.nextElementSibling;
```
