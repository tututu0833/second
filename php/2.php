<html>
    <head>
        <meta charset="UTF-8">
        <title>abcd</title>
    </head>
    <body>
        <?php
        echo file_get_contents($_GET['id'].".txt");
        //php 파일일 경우에는 저거 안해도 됨
        //include('/php/maemong.php');
        //이렇게 php 파일 불러올 수 있는거임
        ?>
    </body>
</html>
