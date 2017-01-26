<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>스크립트 도움말</title>
        <link rel="stylesheet"type= 'text/css' href="/project1/css/style.css">
    </head>
    <body>
        <header class='title'>
            <h2><a href="/project1/">Skript</a></h2>
            <div class='navi'>
                <a href="/project1/">개요</a> <a href="/project1/tutorial.php">튜토리얼</a> <a href="/project1/documentation.php">documentation</a> <a href="">예제</a>
            </div>
        </header>
        <article>
            <div class='outline'>
            <p><h2>개요</h2></p>
            스크립트는 마인크래프트의 플러그인중 하나입니다.
            서버관리자로 하여금 마인크래프트가 동작하는 방식을 쉽게 바꿀 수 있습니다. 스크립트는 event라는 행동과 effect라는 결과를 가지고 있습니다. 거기에 조건인 condition도 결합합니다.
            매번 event가 발생하여 condition을 만족하는지 체크하며, 만족할 시에 effect가 실행됩니다. 스크립트의 근본은 커스터마이징에 있습니다.
            <ul><li>누구나 특별한 플러그인 없이 서버를 독특하게 만들 수 있습니다.</li>
                <li>자신이 스크립트를 추가함으로써 기능을 추가하는 것이 더욱 빠릅니다.</li>
                <li>별다른 플러그인이 필요가 없습니다.</li>
            </ul>
            2.1.2버전은 <a href="https://dev.bukkit.org/projects/skript/files/779542">여기서</a> 다운받을 수 있습니다. <Br/>
            마인크래프트 버전이 1.9이상 혹은 1.11.x 이라면 <a href="https://github.com/bensku/Skript/releases">여기서</a> 다운받아서 쓸 수 있습니다. (2.2이상)<Br/>
            앞서 말했듯이 스크립트는 event가 발생하면 그 결과가 실행되는 방식입니다. 밑에는 그 예제 입니다.
            <pre class='example'>
on click of brick:
    give 1 diamond to player</pre>
영어에 익숙하신 분들은 글 읽고 바로 아시겠지만 이것은 벽돌블럭을 클릭했을 때 플레이어에게 다이아몬드 1개를 줍니다.
스크립트는 또한 커스텀 커맨드를 만드는 기능이 존재합니다. 커맨드들은 기본적으로 누군가 특정한 명령어를 입력했을 때
실행됩니다. 다음 예제는 명령어를 친 사람의 레벨을 1 올려주는 커맨드입니다.
            <pre class='example'>
command /lvup:
    description: 레벨을 1 올립니다.
    executable by: players
        trigger:
            increase player's level by 1</pre>
만약 스크립트가 처음이시라면 <a href="/project1/tutorial.php">튜토리얼</a>을 읽는 것을 추천합니다. 튜토리얼은
스크립트를 어떻게 작성해야 되는지 설명해줍니다.
            </div>
        </article>
    </body>
</html>