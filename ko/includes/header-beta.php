<!DOCTYPE HTML>
<html lang="ko" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1024">
    <title><?=$Htitle?></title>
    <meta name="og:image" content="//www.mozilla.org/img/firefox-100.jpg">
    <meta name="Description" content="Download and test Firefox future releases. Experience the newest innovations with the Aurora or Beta builds.">
    <?=$Hfontface?>
    <link href="//www.mozilla.org/includes/min/min.css?g=css&amp;_d=20120207" rel="stylesheet">
    <link href="//www.mozilla.org/tabzilla/media/css/tabzilla.css" rel="stylesheet">
    <script src="//www.mozilla.org/includes/min/min.js?g=js"></script>
    <?=$Hextraheader?>
    <META name="WT.si_x" content="2" />
<style>
#download #update-notice { display: none; }

#update-notice {
    background: rgb(20,20,20);
    background: rgba(38, 38, 38, 0.95);
    border-bottom: 2px solid #686868;
    text-shadow: 0 1px #000;
    -moz-text-shadow: 0 1px #000;
    display: none;
    overflow: hidden;
    width: 100%;
    z-index: 99;
    line-height: 1;
}

#update-notice.bottom {
    position: fixed;
    bottom: 0;
}

#update-notice .container {
    text-align: left;
    padding: 15px 10px 15px 140px;
    width: 800px;
    display: inline-block;
    margin: 0 auto;
    background: url(//www.mozilla.org/img/covehead/firefox/update-creature.png) 0 100% no-repeat;
    position: relative;
}

#update-notice .message {
    float: left;
    width: 600px;
}

#update-notice h2 {
    letter-spacing: normal;
    text-transform: none;
    font-family: inherit;
    font-weight: normal;
    font-size: 18px;
    font-style: normal;
    margin: 0 0 5px 0;
    color: #fff;
}

#update-notice p {
    font-size: 14px;
    color: #ccc;
    margin: 0;
}

#update-notice p.action {
    width: 200px;
    margin: 0;
    text-align: center;
    float: right;
}

#home #update-notice p.action {
    display: none;
}

#update-notice p.action span {
    display: block;
}

#update-notice p.action span a {
    color: #6ba4ff;
}

#update-notice .button {
    display: inline-block;
    padding: 6px 16px 8px;
    -moz-border-radius: 6px;
    border-radius: 6px;
    box-shadow: 0 2px rgba(0, 0, 0, 0.1),
                0 -2px rgba(0, 0, 0, 0.1) inset;
    background:-moz-linear-gradient(top, #84C63C, #489615);
    background-color: #489615;
    color: #fff;
    font-size: 16px;
    font-style: italic;
    text-decoration: none;
    text-shadow: 1px 1px rgba(0,0,0,0.4);
}

#update-notice .close {
    position: absolute;
    top: 12px;
    right: 0;
    background: url(//www.mozilla.org/img/covehead/firefox/update-close.png) 0 0 no-repeat;
    height: 25px;
    width: 25px;
    overflow: hidden;
    text-indent: -1000em;
}

#update-notice .close:hover,
#update-notice .close:focus {
    background-position: -25px 0;
}

</style>

<script>
var _gaq = _gaq || [];
var pluginUrl = '//www.google-analytics.com/plugins/ga/inpage_linkid.js';
_gaq.push(['_require', 'inpage_linkid', pluginUrl]);
_gaq.push(['_setAccount', 'UA-36116321-1']);
_gaq.push(['_setAllowLinker', true]);
_gaq.push(['_setAllowAnchor', true]);
_gaq.push(['_trackPageview']);
(function() {
    var ga = document.createElement('script');
    ga.type = 'text/javascript';
    ga.async = true;
    var prefix = ('https:' == document.location.protocol ? 'https://ssl' :
                  'http://www');
    ga.src = prefix + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
})();
</script>
</head>

<body id="<?=$Hid?>" class="<?=$Hclass?>">

<script>// <![CDATA[
// add classes to body to indicate browser version and JavaScript availabiliy
if (document.body.className == '') {
    document.body.className = 'js';
} else {
    document.body.className += ' js';
}

if (gPlatform == 1) {
    document.body.className += ' platform-windows';
} else if (gPlatform == 3 || gPlatform == 4) {
    document.body.className += ' platform-mac';
} else if (gPlatform == 2) {
    document.body.className += ' platform-linux';
}

// ]]></script>

<noscript><div id="no-js-feature"></div></noscript>

<div id="outer-wrapper">
<div id="wrapper">
<div id="doc">

    <div id="nav-access">
        <a href="#nav-main">메뉴 건너뛰기</a>
        <a href="#lang_form">언어설정</a>
    </div>

    <!-- start #header -->
    <div id="header">
        <div>
        <h1>
                  <a href="/ko/firefox/" title="홈페이지">Mozilla Firefox</a>
                </h1>

        <a href="http://www.mozilla.org/" class="mozilla" id="tabzilla">mozilla</a>
        
<!-- start menu #nav-main -->
<div id="nav-main" role="navigation">
  <ul role="menubar">
    <li id="nav-main-features"  class="first"><a aria-haspopup="true" aria-owns="nav-main-features-submenu" tabindex="0" href="/ko/firefox/features/">데스크탑</a><ul id="nav-main-features-submenu" aria-expanded="false"><li  class="first"><a tabindex="-1" href="/ko/firefox/features/">주요 기능</a></li><li ><a tabindex="-1" href="/ko/firefox/customize/">부가 기능</a></li><li ><a tabindex="-1" href="/ko/firefox/performance/">성능 향상</a></li><li ><a tabindex="-1" href="/ko/firefox/technology/">웹 기술</a></li><li  class="last"><a tabindex="-1" href="/ko/firefox/security/">보안 및 정보 보호</a></li></ul></li>
    <li id="nav-main-mobile" ><a aria-haspopup="true" aria-owns="nav-main-mobile-submenu" tabindex="0" href="/ko/mobile/">모바일</a><ul id="nav-main-mobile-submenu" aria-expanded="false"><li  class="first"><a tabindex="-1" href="/ko/mobile/">다운로드</a></li><li ><a tabindex="-1" href="/ko/mobile/features/">주요 기능</a></li><li ><a tabindex="-1" href="https://addons.mozilla.org/ko/mobile/?browse=featured">부가 기능</a></li><li  class="last"><a tabindex="-1" href="/ko/mobile/faq/">FAQ &shy;</a></li></ul></li>
    <li id="nav-main-releases" ><a aria-haspopup="true" aria-owns="nav-main-releases-submenu" tabindex="0" href="/ko/firefox/channel/">다운로드</a><ul id="nav-main-releases-submenu" aria-expanded="false"><li  class="first"><a tabindex="-1" href="/ko/firefox/channel/">채널별</a></li><li ><a tabindex="-1" href="/ko/firefox/aurora/">Firefox Aurora</a></li><li ><a tabindex="-1" href="/beta/">Firefox Beta</a></li><li ><a tabindex="-1" href="/ko/firefox/">Firefox</a></li><li  class="last"><a tabindex="-1" href="/ko/firefox/organizations/">Firefox 기관용</a></li></ul></li>
    <li id="nav-main-addons" ><a aria-haspopup="true" aria-owns="nav-main-addons-submenu" tabindex="0" href="https://addons.mozilla.org/">부가 기능</a><ul id="nav-main-addons-submenu" aria-expanded="false"><li  class="first"><a tabindex="-1" href="https://addons.mozilla.org/firefox/">PC용 부가기능</a></li><li ><a tabindex="-1" href="https://addons.mozilla.org/mobile/">모바일용 부가기능</a></li><li  class="last"><a tabindex="-1" href="https://addons.mozilla.org/themes/">테마</a></li></ul></li>
    <li id="nav-main-support" ><a aria-haspopup="true" aria-owns="nav-main-support-submenu" tabindex="0" href="http://support.mozilla.org/">도움말</a><ul id="nav-main-support-submenu" aria-expanded="false"><li  class="first"><a tabindex="-1" href="http://support.mozilla.org/ko/">PC용 도움말</a></li><li  class="last"><a tabindex="-1" href="http://support.mozilla.org/mobile">모바일 도움말</a></li></ul></li>
    <li id="nav-main-about"  class="last"><a aria-haspopup="true" aria-owns="nav-main-about-submenu" tabindex="0" href="/ko/about/">소개</a><ul id="nav-main-about-submenu" aria-expanded="false"><li  class="first"><a tabindex="-1" href="http://blog.mozilla.org/">블로그(영문)</a></li><li ><a tabindex="-1" href="/ko/about/">Firefox 소개</a></li><li ><a tabindex="-1" href="http://www.mozilla.org/join">Mozilla 후원(영문)</a></li><li ><a tabindex="-1" href="/ko/about/participate/">참여하기</a></li><li ><a tabindex="-1" href="http://blog.mozilla.org/press/">보도자료</a></li><li ><a tabindex="-1" href="/ko/firefox/brand/">로고 이용(영문)</a></li><li ><a tabindex="-1" href="/ko/about/careers.html">채용문의 (영문)</a></li><li ><a tabindex="-1" href="/ko/about/partnerships.html">제휴 안내</a></li><li  class="last"><a tabindex="-1" href="/ko/about/contact.html">연락처</a></li></ul></li>
  </ul>
</div>
<!-- end menu #nav-main -->

        </div>
    </div>
    <!-- end #header -->
