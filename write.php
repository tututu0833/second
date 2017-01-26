<?php
$conn = mysqli_connect('localhost','root','ututut0833'); /* mysql모니터에 접속함*/
mysqli_select_db($conn,'tututu0833'); /*데이터베이스 선택*/
$result = mysqli_query($conn,'SELECT * FROM topic'); /*이거 모니터에서 SELECT * FROM topic 한거*/
/*가져온다*/
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="/css/css.css">
        <title>메롱</title>
    </head>
    <body id="body">
        <div class='header'>
            <h1><a href='/'>JavaScript</a></h1>
        </div><!---->
        <div class='nav'>
            <ol>
                <?php
                    while($row = mysqli_fetch_assoc($result)){
                    echo '<li><a href="/index.php?id='.$row['id'].'">'.$row['title'].'</a></li>'."\n";
                    }
                ?>
            </ol>
        </div><!---->
        <div class='buttons'>
            <input type="button" value="white" onclick="document.getElementById('body').className='white'" />
            <input type="button" value="black" onclick="document.getElementById('body').className='black'" />
        </div>
        <div class='toggle-color'>
        </div>
        <article>
            <form action='/php/upload.php' method='POST'>
                <p>제목 : <input type='text' name='title' /></p> 작성자: <input type='text' name='author' placeholder='이름' />
                <p>내용 : <textarea rows='10' cols='50' name='contents' placeholder='내용을 작성해주세요'></textarea></p>
                <input type="submit" value="submit" />
            </form>
        </article>
    </body>
</html>