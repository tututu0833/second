<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <form action="/phpjs/testlogin2.php">
            <h1>비번입력</h1>
            <input type="text" name="password">
            <input type="submit">
        </form>
    </body>
</html>
<!--
<form></form> 태그는 양식 태그인건 알겠죠?ㅇㅇ
이 태그로 그 양식을 제출해서 그것을 처리 하는건데
action 옵션은 이제 그 제출한 것을 받아서 처리할
php 위치를 말하는 거임 아까 제가 index.php > login.php 로 action 이
된거거든여
index.php 에서 양식 작성하고 action 옵션에서는 login.php 로 정보를 보내라
한거임 그리고 method 이것은 get 이랑 post 랑 delete 등등 많은데
get 은 아까 말했듯이 param 을 얻는거임 params 는 이미 알겠지만
url 다음에 {protocol}://{host}:{port} 일단 이게 기본 형식임
http://localhost:80<80은 이미 약손된거라 생략가능
http://localhost/ 여기서 params 란
http://localhost?param1=Maemong&param2=tututu444
이렇게 해서 param 들은 param1 param2 가 있고
각각 값들은 Maemong, tututu444 가 되는거임
post 는 url 로 받지 않고 데이터 형태로
그 전달 되는 거임
그래서 보안적으로도 좋음
delete 는 뭔가 삭제할 때 쓰는거임 예를 들어
게시글 삭제 요청을 보낼 때
delete 를 사용함
https://github.com/xkxksk1234/react-practice/blob/master/server/routes/account.js
29번 라인처럼
뭔가 삭제할 때 delete 요청을 보내면 되는거임
끝
이 요청 말고도 더 있음
put 은 어딘가에 데이터를 추가할 때 였나 그럴거임 근데 post 랑 put 이랑
차이점을 모르겠음
근데 put 은 한 번도 안 사용해봄

그냥 이렇게 대표적으로 3개만 알면 됨
GET
POST
DELETE
-->