**웹 사이트 개발 및 번역에 도움을 주실 수 있습니다!**

**번역 방법:**
- mozilla.or.kr/ko 디렉토리는 mozilla.org/en-US와 구조와 같도록 만들어야 합니다. 따라서 작업 단위는 *디렉토리*로 합니다.
- 예를 들어 http://stage.mozilla.or.kr/ko/mission/ 를 작업한다고 할때, 먼저 http://www.mozilla.org/en-US/mission/ 에서 HTML 페이지 소스를 엽니다.
- </header>가 끝난 부분 부터, </div><!-- close #wrapper --> 이전까지가 콘텐츠 영역입니다. 이 부분을 sample.php에 맞추어 번역 후 추가 합니다.
- img src는 모두 http://www.mozilla.org/로 절대 경로로 추가합니다.
- $Htitle은 문서 제목, $Hid 는 <body id="">에 들어갈 id값입니다.
- $extra_css나 $extra_js는 각 페이지 고유의 별도의 CSS/JS 파일이 추가되어 있으면 추가합니다.

**작업 순서:**
- 중복 작업을 막기 위해, 자신이 특정 디렉토리의 작업을 시작하기로 했다면 새로운 이슈를 만들어서 작업을 진행해 주십시오. - 작성 방법은 https://github.com/mozillakr/mozilla.or.kr/issues/1 를 참고하세요.
- Github 특성상 레포지터리를 forking 한후, 작업 결과를 pull request 하셔도 됩니다.

*더 궁금한 점이 있으시면 아래로 문의해 주십시오*
- 공헌자 포럼 http://forums.mozilla.or.kr/viewforum.php?f=15
- 메일링리스트 https://groups.google.com/group/mozillakorea
