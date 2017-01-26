<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>스크립트 도움말</title>
        <link rel="stylesheet"type= 'text/css' href="/project1/css/style.css">
    </head>
    <body>
        <header class='title'>
            <h2><a href="/project1/">Skript</a>.Tutorial</h2>
            <div class='navi'>
                <a href="/project1/">개요</a> <a href="/project1/tutorial.php">튜토리얼</a> <a href="/project1/documentation.php">documentation</a> <a href="">예제</a>
            </div>
        </header>
        <article>
            <div class='outline'>
                <div class='paragraph'><h2>시작하기</h2></div>
                스크립트도 플러그인 이므로 시작하기전에 설치를 해야됩니다.
                <ol><li>개요페이지에서 스크립트를 다운받습니다.</li>
                    <li>서버의 플러그인 폴더에 .jar파일을 넣습니다</li>
                    <li>서버를 한번 재시작하면 설정 파일과 예제 스크립트가 생성됩니다.</li></ol>
                <div class='paragraph'><h2>이벤트 작성</h2></div>
                시작하기 앞서 어떤 기능을 만들고 싶은지 생각해놓는 것이 좋지만 간단히 시작할 수도 있습니다.
                이 문서에서는 괭이를 가지고 흙을 클릭하면 씨앗이 자동으로 심어지는 이벤트를 작성하는 법을 알려줄 것입니다.
                작성을 시작하시려면 일단 텍스트 파일(Notepad나 메모장)을 엽니다. 그리고 이벤트를 어떨 때 실행시키면 좋을지
                생각을 해봅니다. 예제에서는 오른쪽 클릭을 했을때 발동되는 것으로 합니다. 첫번째 줄에 이렇게 작성합니다.
                <p><pre class='example'>on right click:</pre></p>
                만약 이벤트가 생각이 나지 않으면 모든 리스트를 <a href="">여기서</a> 볼 수 있습니다.
                <p>만약 흙을 우클릭 하지 않았는데도 그냥 우클릭만으로도 이벤트가 실행되는 것을 막으려면 우리는 다음과 같이 작성해야 합니다.</p>
                <p><pre class='example'>on right click on soil holding a hoe:</pre></p>
                이렇게 작성해도 되지만 두가지 condition을 추가할 수 있습니다.
                <p><pre class='example'>on right click:
    block is soil
    player is holding a hoe</pre></p>
                여러분이 좋아하는 방식으로 쓰면 됩니다. 예제에서는 두번째 것을 따라가겠습니다.
                이제 플레이어가 씨앗을 갖고 있는지 확인해야 합니다.
                <p><pre class='example'>on right click:
    block is soil
    player is holding a hoe
    player has seeds</pre></p>
                튜토리얼을 보고 여러분들은 이벤트다음에 오는 내용들이 첫줄보다 띄워져있다는 것을 볼 겁니다. 이는 그 내용들이
                이벤트에 속해있다는 것을 뜻하며 또 여러분들의 가독성을 높입니다. 만약 여러분들이 제대로 내용들을 띄우지 않았다면
                스크립트는 오류를 발생시킬 것이고 실행이 되지 않을 것입니다.
                <p>이제 플레이어가 조건에 맞게 했다면 씨앗을 심겨주도록 만들어야 합니다.</p>
                <p><pre class='example'>on right click:
    block is soil
    player is holding a hoe
    player has seeds
    set block above the clicked block to crops</pre></p>
                만약 이렇게 한다면 흙위의 블럭이 씨앗으로 바뀌어 버릴 것입니다. 이는 결국 다른사람의 집을 파괴하거나 베드락을 없애버릴 것입니다. 여러분들은 그러한 문제를 막기위해
                사람들이 오지않는 테스트 서버에서 문제를 해결하고 본 서버에 적용할 수 있습니다.<br/>
                여기서의 문제는 흙위의 블럭이 빈공간인지 아닌지 조건을 추가함으로써 해결할 수 있습니다.
                <p><pre class='example'>on right click:
    block is soil
    player is holding a hoe
    player has seeds
    block above the clicked block is air
    set block above the clicked block to crops</pre></p>
                이제 플레이어에게서 씨앗을 1개 없애면 됩니다.
                <p><pre class='example'>on right click:
    block is soil
    player is holding a hoe
    player has seeds
    block above the clicked block is air
    set block above the clicked block to crops
    remove seeds from player</pre></p>
                작성을 끝냈으면 파일을 plugins폴더->Skript폴더->scripts폴더로 저장을 합니다. 이름은 아무렇게나 정할 수 있습니다.
                하지만 '-'글자는 처음부분에 들어가면 그파일은 실행이 되지 않습니다. 그리고 확장자명은 '.sk' 로 정합니다.
                <p>이제 서버를 시작하고(테스트 서버를 추천드립니다) 에러가 뜨는지 확인하고 스크립트가 의도한 대로 잘 작동하는지 테스트합니다.
                끝났다면 본 서버로 적용시킵니다.</p>
                여러분은 또 '/skript reload'라는 명령어를 사용해 수정된 스크립트 파일을 재실행시킬 수 있습니다. 실행 도중에 에러가 발생하면
                커맨드를 사용한 플레이어(또는 콘솔)에게 메세지가 전달됩니다.
            </div>
        </article>
    </body>
</html>