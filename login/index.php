<?php session_start(); ?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<?php
    $isLoggedIn = $_SESSION['isLoggedIn'];
?>
<body>
    <h1>Home</h1>
    <?php
    var_dump($isLoggedIn);
    var_dump($_SESSION['isLoggedIn']);
    if (isset($isLoggedIn)) {
        echo '<a href="/login/logout.php">로그아웃</a>';
    } else {
        echo '로그인';
        echo "
        <form action='/login/login.php' method='post'>
            <input
                type='text'
                name='username'
                placeholder='닉네임 입력하셈'
            />
            <br />
            <input
                type='password'
                name='password'
                placeholder='비번 입력하셈'
            />
            <br />
            <button>로그인</button>
        </form>
        ";
    }
    ?>
</body>
</html>