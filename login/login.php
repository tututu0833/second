<?php
    session_start();
    $username = $_POST['username'];
    $password = $_POST['password'];

    $lower_username = strtolower($username);
    $lower_password = strtolower($password);
    //원래는 DB 에서 불러와야 하지만 우리는 임시 DB 를 만들거임

    //로그인이 성공 했다면 세션에 로그인 정보를 담을 것이고
    //그렇지 않을 경우에는 원래 페이지로 다시 되돌릴 것임
    //그리고 홈페이지에서는 세션 여부를 if 문 돌려서 로그인이랑 로그아웃
    //버튼 보이게 할 것이고 로그아웃 버튼 누르면 세션 값 삭제하게 할 것임
    //이게 보통적인 로그인 방식임
    
    if (($lower_username == 'maemong' && $lower_password == 'pw1234') ||
        ($lower_username == 'tututu444' && $lower_password == 'abcd')) {
   
   
        $_SESSION['username'] = $lower_username;
        $_SESSION['password'] = $lower_password;
        echo "<meta http-equiv='refresh' content='0; url=/login' />";
    } else {
        echo "<script>alert('아이디 또는 비밀번호를 확인해주세요.')</script>";
        echo "<meta http-equiv='refresh' content='0; url=/login' />";
    }
?>