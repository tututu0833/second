<?php
    session_start();
    echo "<script>alert('로그아웃 되었습니다.')</script>";
    $_SESSION['isLoggedIn'] = false;
    session_destroy();
    echo "<meta http-equiv='refresh' content='0; url=/login' />";
?>