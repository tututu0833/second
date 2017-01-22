<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
    </head>
    <body>
        <h1>javascript</h1>
            <script>
                function text(name='메롱'){
                    document.write(name+"<br/>");
                }
                text("메롱메롱메롱");
                text("메롱메롱메롱");
                text("메롱메롱메롱");
                text();
            </script>
        <h1>php</h1>
        <ul>
            <?php
                $i = 0;
                while($i<10){
                    echo "<li>hihi </li>";
                    $i += 1;
                }
            ?>
        </ul>
    </body>
</html>