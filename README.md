Mozilla.or.kr Localization
==========================

**웹 사이트 개발 및 번역에 도움을 주실 수 있습니다!**

작업 방법
-----

* mozilla.or.kr/ko 디렉토리는 mozilla.org/en-US와 구조와 같도록 만들어야 합니다. 따라서 작업 단위는 *디렉토리*로 합니다.
* 중복 작업을 막기 위해, 자신이 특정 디렉토리의 작업을 시작하기로 했다면 새로운 이슈를 만들어서 작업을 진행해 주십시오. - 작성 방법은 https://github.com/mozillakr/mozilla.or.kr/issues/1 를 참고하세요.
* Github 레포지터리를 forking 한 후, 작업이 완료되면 pull request 합니다. 그러면 관리자가 리뷰 후에 머지를 합니다.
* 작업할 디렉토리를 생성하고 파일을 만듭니다. 파일은 /ko/index.html 과 같이 기존 파일을 복사해서 생성하면 작업이 편합니다.
* 브라우저에서 이 파일을 열면 원격의 영문 HTML 파일과 변환된 한국어 HTML 파일이 /output/ 디렉토리에 생성됩니다.
* $replace_rule 안에 변환할 영문 문장과 변환될 한국어 문장을 넣으면 변환이 됩니다.
* localhost에서는 변환된 한국어 파일은 캐시가 되지 않고 매번 생성됩니다.

* 만약 기존 방법대로 만들어진 index.html 파일이 이미 존재하는 경우 이 파일을 현재의 방법으로 변환합니다. 변환은 영문 URL과 한국어 URL을 diff로 비교해보면 추가해야 할 문장 목록을 쉽게 파악할 수 있습니다.

서버 정보
-----

- 스테이지: http://stage.mozilla.or.kr/ko/
- 실서버: http://www.mozilla.or.kr/ko/

*더 궁금한 점이 있으시면 아래로 문의해 주십시오*
- 공헌자 포럼 http://forums.mozilla.or.kr/viewforum.php?f=15
- 메일링리스트 https://groups.google.com/group/mozillakorea

기존 방법
-----

- mozilla.or.kr/ko 디렉토리는 mozilla.org/en-US와 구조와 같도록 만들어야 합니다. 따라서 작업 단위는 *디렉토리*로 합니다.
- 예를 들어 http://stage.mozilla.or.kr/ko/mission/ 를 작업한다고 할때, 먼저 http://www.mozilla.org/en-US/mission/ 에서 HTML 페이지 소스를 엽니다.
- &lt;/header&gt;가 끝난 부분 부터, &lt;/div&gt;<!-- close #wrapper --> 이전까지가 콘텐츠 영역입니다. 이 부분을 sample.php에 맞추어 번역 후 추가 합니다.
- img src는 모두 http://www.mozilla.org/로 절대 경로로 추가합니다.
- $Htitle은 문서 제목, $Hid 는 <body id="">에 들어갈 id값입니다.
- $extra_css나 $extra_js는 각 페이지 고유의 별도의 CSS/JS 파일이 추가되어 있으면 추가합니다.
