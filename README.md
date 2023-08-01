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
// 대상.eventListener("이벤트", "function 이름")
element.eventListener("click", beHappy);
```

### 2. style.property

대상의 CSS를 수정하기

```js
// 대상.style.property = "value"
element.style.display = "flex";
```
