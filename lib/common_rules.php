<?php
$common_rule = array(
  // resource path
  array(
    'source' => 'href="/includes/', 
    'target' => 'href="//www.mozilla.org/includes/'), 
  array(
    'source' => 'href="/tabzilla/', 
    'target' => 'href="//www.mozilla.org/tabzilla/'), 
  array(
    'source' => 'src="/includes/', 
    'target' => 'src="//www.mozilla.org/includes/'), 
  array(
    'source' => 'href="/style/', 
    'target' => 'href="//www.mozilla.org/style/'), 
  array(
    'source' => 'src="/img/', 
    'target' => 'src="//www.mozilla.org/img/'), 
  array(
    'source' => 'src=\\"/img/', 
    'target' => 'src=\\"//www.mozilla.org/img/'), 
  array(
    'source' => 'url(/img/', 
    'target' => 'url(//www.mozilla.org/img/'), 
  array(
    'source' => 'url(\'/img/', 
    'target' => 'url(\'//www.mozilla.org/img/'), 
  array(
    'source' => 'content="/img/', 
    'target' => 'content="//www.mozilla.org/img/'), 
  array(
    'source' => 'src="/js/', 
    'target' => 'src="//www.mozilla.org/js/'), 

  // link on head
  array(
    'source' => '<link rel="canonical" hreflang="en-US" href="http://www.mozilla.org/en-US/', 
    'target' => '<link rel="canonical" hreflang="ko" href="http://www.mozilla.or.kr/ko/'), 
  array(
    'source' => '<link rel="alternate" hreflang="x-default" href="http://www.mozilla.org/', 
    'target' => '<link rel="alternate" hreflang="x-default" href="http://www.mozilla.or.kr/'), 
  // Menu titles
  array(
    'source' => '<a href="/en-US/" id="tabzilla">Mozilla</a>', 
    'target' => '<a href="/ko/" id="tabzilla">Mozilla</a>'), 
  array(
    'source' => '<span class="toggle" role="button" aria-controls="nav-main-menu" tabindex="0">Menu</span>', 
    'target' => '<span class="toggle" role="button" aria-controls="nav-main-menu" tabindex="0">주요 메뉴</span>'), 

  // Navigation
  array(
    'source' => '<li class="first"><a href="/en-US/mission/">Mission</a></li>', 
    'target' => '<li class="first"><a href="/ko/mission/">사명</a></li>'), 
  array(
    'source' => '<li><a href="/en-US/about/">About</a></li>', 
    'target' => '<li><a href="/ko/about/">소개</a></li>'), 
  array(
    'source' => '<li><a href="/en-US/products/">Products</a></li>', 
    'target' => '<li><a href="/ko/products/">제품</a></li>'), 
  array(
    'source' => '<li class="last"><a href="/en-US/contribute/">Get Involved</a></li>', 
    'target' => '<li class="last"><a href="/ko/contribute/">참여하기</a></li>'), 

  // Previous Navigation
  array(
    'source' => '<li class="first" id="nav-main-features"><a href="/en-US/firefox/fx/#desktop" tabindex="0" aria-owns="nav-main-features-submenu" aria-haspopup="true">Desktop</a>', 
    'target' => '<li class="first" id="nav-main-features"><a href="/ko/firefox/fx/#desktop" tabindex="0" aria-owns="nav-main-features-submenu" aria-haspopup="true">데스크톱</a>'), 
  array(
    'source' => '<li class="first"><a href="/en-US/firefox/features/" tabindex="-1">Features</a></li>
        <li><a href="/en-US/firefox/customize/" tabindex="-1">Customize</a></li>
        <li><a href="/en-US/firefox/performance/" tabindex="-1">Performance</a></li>
        <li><a href="/en-US/firefox/technology/" tabindex="-1">Technology</a></li>
        <li class="last"><a href="/en-US/firefox/security/" tabindex="-1">Privacy &amp; Security</a></li>', 
    'target' => '<li class="first"><a href="/ko/firefox/features/" tabindex="-1">주요 기능</a></li>
        <li><a href="/ko/firefox/customize/" tabindex="-1">맞춤 기능</a></li>
        <li><a href="/ko/firefox/performance/" tabindex="-1">빠른 성능</a></li>
        <li><a href="/ko/firefox/technology/" tabindex="-1">기술 혁신</a></li>
        <li class="last"><a href="/ko/firefox/security/" tabindex="-1">정보 보호 및 보안</a></li>'), 
  array(
    'source' => '<li id="nav-main-mobile"><a href="/en-US/firefox/fx/" tabindex="0" aria-owns="nav-main-mobile-submenu" aria-haspopup="true">Mobile</a>', 
    'target' => '<li id="nav-main-mobile"><a href="/ko/firefox/fx/" tabindex="0" aria-owns="nav-main-mobile-submenu" aria-haspopup="true">모바일</a>'), 
  array(
    'source' => '<li class="first"><a href="/en-US/firefox/mobile/features/" tabindex="-1">Features</a></li>
        <li><a href="https://addons.mozilla.org/en-US/mobile/?browse=featured" tabindex="-1">Customize</a></li>
        <li class="last"><a href="/en-US/firefox/mobile/faq/" tabindex="-1">FAQ</a></li>', 
    'target' => '<li class="first"><a href="/ko/firefox/mobile/features/" tabindex="-1">주요 기능</a></li>
        <li><a href="https://addons.mozilla.org/ko/mobile/?browse=featured" tabindex="-1">맞춤 기능</a></li>
        <li class="last"><a href="/ko/firefox/mobile/faq/" tabindex="-1">FAQ</a></li>'), 
  array(
    'source' => '<li id="nav-main-releases" class=""><a href="/en-US/firefox/channel/" tabindex="0" aria-owns="nav-main-releases-submenu" aria-haspopup="true">Releases</a>', 
    'target' => '<li id="nav-main-releases" class=""><a href="/ko/firefox/channel/" tabindex="0" aria-owns="nav-main-releases-submenu" aria-haspopup="true">출시 현황</a>'), 
  array(
    'source' => '<li class="first"><a href="/en-US/firefox/channel/" tabindex="-1">Overview</a></li>
        <li><a href="/en-US/firefox/aurora/" tabindex="-1">Firefox Aurora</a></li>', 
    'target' => '<li class="first"><a href="/ko/firefox/channel/" tabindex="-1">전체 보기</a></li>
        <li><a href="/ko/firefox/aurora/" tabindex="-1">Firefox Aurora</a></li>'), 
  array(
    'source' => '<li><a href="/en-US/firefox/" tabindex="-1">Firefox</a></li>
        <li class="last"><a href="/en-US/firefox/organizations/" tabindex="-1">Firefox for Organizations</a></li>', 
    'target' => '<li><a href="/ko/firefox/" tabindex="-1">Firefox</a></li>
        <li class="last"><a href="/ko/firefox/organizations/" tabindex="-1">기업용 Firefox</a></li>'), 
  array(
    'source' => '<li id="nav-main-addons"><a href="https://addons.mozilla.org/" tabindex="0" aria-owns="nav-main-addons-submenu" aria-haspopup="true">Add-ons</a>', 
    'target' => '<li id="nav-main-addons"><a href="https://addons.mozilla.org/" tabindex="0" aria-owns="nav-main-addons-submenu" aria-haspopup="true">부가 기능</a>'), 
  array(
    'source' => '<li class="first"><a href="https://addons.mozilla.org/firefox/" tabindex="-1">Desktop Add-ons</a></li>
        <li><a href="https://addons.mozilla.org/android/" tabindex="-1">Mobile Add-ons</a></li>
        <li class="last"><a href="https://addons.mozilla.org/firefox/themes/" tabindex="-1">Themes</a></li>', 
    'target' => '<li class="first"><a href="https://addons.mozilla.org/firefox/" tabindex="-1">데스크톱용</a></li>
        <li><a href="https://addons.mozilla.org/android/" tabindex="-1">모바일용</a></li>
        <li class="last"><a href="https://addons.mozilla.org/firefox/themes/" tabindex="-1">테마</a></li>'), 
  array(
    'source' => '<li id="nav-main-support"><a href="https://support.mozilla.org/" tabindex="0" aria-owns="nav-main-support-submenu" aria-haspopup="true">Support</a>', 
    'target' => '<li id="nav-main-support"><a href="https://support.mozilla.org/" tabindex="0" aria-owns="nav-main-support-submenu" aria-haspopup="true">도움말</a>'), 
  array(
    'source' => '<li class="first"><a href="https://support.mozilla.org/products/firefox" tabindex="-1">Desktop Support</a></li>
        <li class="last"><a href="https://support.mozilla.org/products/mobile" tabindex="-1">Mobile Support</a></li>', 
    'target' => '<li class="first"><a href="https://support.mozilla.org/products/firefox" tabindex="-1">데스크톱용</a></li>
        <li><a href="https://support.mozilla.org/products/mobile" tabindex="-1">모바일용</a></li>
        <li class="last"><a href="http://forums.mozilla.or.kr" tabindex="-1">사용자 포럼</a></li>'), 
  array(
    'source' => '<li class="last" id="nav-main-about"><a href="/en-US/firefox/about/" tabindex="0" aria-owns="nav-main-about-submenu" aria-haspopup="true">About</a>', 
    'target' => '<li class="last" id="nav-main-about"><a href="/ko/about/" tabindex="0" aria-owns="nav-main-about-submenu" aria-haspopup="true">소개</a>'), 
  array(
    'source' => '<li class="first"><a href="https://blog.mozilla.org/" tabindex="-1">Blog</a></li>
        <li><a href="/en-US/firefox/about/" tabindex="-1">About Firefox</a></li>
        <li><a href="/join" tabindex="-1">Join Mozilla</a></li>
        <li><a href="/en-US/about/participate/" tabindex="-1">Participate</a></li>
        <li><a href="https://blog.mozilla.org/press/" tabindex="-1">Press Center</a></li>
        <li><a href="/en-US/firefox/brand/" tabindex="-1">Brand Toolkit</a></li>
        <li><a href="/en-US/about/careers.html" tabindex="-1">Careers</a></li>
        <li><a href="/en-US/about/partnerships.html" tabindex="-1">Partnerships</a></li>
        <li class="last"><a href="/en-US/about/contact.html" tabindex="-1">Contact Us</a></li>', 
    'target' => '<li class="first"><a href="/ko/about/" tabindex="-1">Mozilla 소개</a></li>
    <li><a href="http://www.mozilla.or.kr/community/" tabindex="-1">블로그</a></li>
        <li><a href="/ko/contribute" tabindex="-1">참여하기</a></li>
        <li><a href="http://www.mozilla.or.kr/community/about" tabindex="-1">한국 커뮤니티</a></li>
        <li class="last"><a href="/ko/about/contact.html" tabindex="-1">연락처</a></li>'), 

  // Aurora Navigation
  array(
    'source' => '<a href="#nav-main">skip to Navigation</a>', 
    'target' => '<a href="#nav-main">메뉴 건너뛰기</a>'), 
  array(
    'source' => '<a href="#lang_form">switch language</a>', 
    'target' => '<a href="#lang_form">언어설정</a>'), 
  array(
    'source' => '<a href="/en-US/firefox/" title="Back to home page">Mozilla Firefox</a>', 
    'target' => '<a href="/ko/firefox/" title="홈페이지">Mozilla Firefox</a>'), 
  array(
    'source' => '<a href="http://www.mozilla.org/" class="mozilla" id="tabzilla">mozilla</a>', 
    'target' => '<a href="http://www.mozilla.or.kr/" class="mozilla" id="tabzilla">mozilla</a>'), 
  array(
    'source' => '<li id="nav-main-features"  class="first"><a aria-haspopup="true" aria-owns="nav-main-features-submenu" tabindex="0" href="/en-US/firefox/features/">Desktop</a><ul id="nav-main-features-submenu" aria-expanded="false"><li  class="first"><a tabindex="-1" href="/en-US/firefox/features/">Features</a></li><li ><a tabindex="-1" href="/en-US/firefox/customize/">Customize</a></li><li ><a tabindex="-1" href="/en-US/firefox/performance/">Performance</a></li><li ><a tabindex="-1" href="/en-US/firefox/technology/">Technology</a></li><li  class="last"><a tabindex="-1" href="/en-US/firefox/security/">Privacy &amp; Security</a></li></ul></li>
    <li id="nav-main-mobile" ><a aria-haspopup="true" aria-owns="nav-main-mobile-submenu" tabindex="0" href="/en-US/mobile/">Mobile</a><ul id="nav-main-mobile-submenu" aria-expanded="false"><li  class="first"><a tabindex="-1" href="/en-US/mobile/">Download</a></li><li ><a tabindex="-1" href="/en-US/mobile/features/">Features</a></li><li ><a tabindex="-1" href="https://addons.mozilla.org/en-US/mobile/?browse=featured">Customize</a></li><li  class="last"><a tabindex="-1" href="/en-US/mobile/faq/">FAQ</a></li></ul></li>
    <li id="nav-main-releases" ><a aria-haspopup="true" aria-owns="nav-main-releases-submenu" tabindex="0" href="/en-US/firefox/channel/">Releases</a><ul id="nav-main-releases-submenu" aria-expanded="false"><li  class="first"><a tabindex="-1" href="/en-US/firefox/channel/">Overview</a></li><li ><a tabindex="-1" href="/en-US/firefox/aurora/">Firefox Aurora</a></li><li ><a tabindex="-1" href="/beta/">Firefox Beta</a></li><li ><a tabindex="-1" href="/en-US/firefox/">Firefox</a></li><li  class="last"><a tabindex="-1" href="/en-US/firefox/organizations/">Firefox for Organizations</a></li></ul></li>
    <li id="nav-main-addons" ><a aria-haspopup="true" aria-owns="nav-main-addons-submenu" tabindex="0" href="https://addons.mozilla.org/">Add-ons</a><ul id="nav-main-addons-submenu" aria-expanded="false"><li  class="first"><a tabindex="-1" href="https://addons.mozilla.org/firefox/">Desktop Add-ons</a></li><li ><a tabindex="-1" href="https://addons.mozilla.org/mobile/">Mobile Add-ons</a></li><li  class="last"><a tabindex="-1" href="http://www.getpersonas.com/">Personas</a></li></ul></li>
    <li id="nav-main-support" ><a aria-haspopup="true" aria-owns="nav-main-support-submenu" tabindex="0" href="http://support.mozilla.org/">Support</a><ul id="nav-main-support-submenu" aria-expanded="false"><li  class="first"><a tabindex="-1" href="http://support.mozilla.org/en-US/kb/">Desktop Support</a></li><li  class="last"><a tabindex="-1" href="http://support.mozilla.org/mobile">Mobile Support</a></li></ul></li>
    <li id="nav-main-about"  class="last"><a aria-haspopup="true" aria-owns="nav-main-about-submenu" tabindex="0" href="/en-US/firefox/about/">About</a><ul id="nav-main-about-submenu" aria-expanded="false"><li  class="first"><a tabindex="-1" href="http://blog.mozilla.com/">Blog</a></li><li ><a tabindex="-1" href="/en-US/firefox/about/">About Firefox</a></li><li ><a tabindex="-1" href="http://www.mozilla.org/join">Join Mozilla</a></li><li ><a tabindex="-1" href="/en-US/about/participate/">Participate</a></li><li ><a tabindex="-1" href="/en-US/press/">Press Center</a></li><li ><a tabindex="-1" href="/en-US/firefox/brand/">Brand Toolkit</a></li><li ><a tabindex="-1" href="/en-US/about/careers.html">Careers</a></li><li ><a tabindex="-1" href="/en-US/about/partnerships.html">Partnerships</a></li><li  class="last"><a tabindex="-1" href="/en-US/about/contact.html">Contact Us</a></li></ul></li>', 
    'target' => '<li id="nav-main-features"  class="first"><a aria-haspopup="true" aria-owns="nav-main-features-submenu" tabindex="0" href="/ko/firefox/fx#desktop">데스크탑</a><ul id="nav-main-features-submenu" aria-expanded="false"><li  class="first"><a tabindex="-1" href="/ko/firefox/features/">주요 기능</a></li><li ><a tabindex="-1" href="/ko/firefox/customize/">부가 기능</a></li><li ><a tabindex="-1" href="/ko/firefox/performance/">성능 향상</a></li><li ><a tabindex="-1" href="/ko/firefox/technology/">웹 기술</a></li><li  class="last"><a tabindex="-1" href="/ko/firefox/security/">보안 및 정보 보호</a></li></ul></li>
    <li id="nav-main-mobile" ><a aria-haspopup="true" aria-owns="nav-main-mobile-submenu" tabindex="0" href="/ko/firefox/fx/">모바일</a><ul id="nav-main-mobile-submenu" aria-expanded="false"><li  class="first"><a tabindex="-1" href="/ko/mobile/">다운로드</a></li><li ><a tabindex="-1" href="/ko/mobile/features/">주요 기능</a></li><li ><a tabindex="-1" href="https://addons.mozilla.org/ko/mobile/?browse=featured">부가 기능</a></li><li  class="last"><a tabindex="-1" href="/ko/mobile/faq/">FAQ &shy;</a></li></ul></li>
    <li id="nav-main-releases" ><a aria-haspopup="true" aria-owns="nav-main-releases-submenu" tabindex="0" href="/ko/firefox/channel/">다운로드</a><ul id="nav-main-releases-submenu" aria-expanded="false"><li  class="first"><a tabindex="-1" href="/ko/firefox/channel/">채널별</a></li><li ><a tabindex="-1" href="/ko/firefox/aurora/">Firefox Aurora</a></li><li ><a tabindex="-1" href="/ko/firefox/beta/">Firefox Beta</a></li><li ><a tabindex="-1" href="/ko/firefox/fx/#desktop">Firefox</a></li><li  class="last"><a tabindex="-1" href="/ko/firefox/organizations/">Firefox 기관용</a></li></ul></li>
    <li id="nav-main-addons" ><a aria-haspopup="true" aria-owns="nav-main-addons-submenu" tabindex="0" href="https://addons.mozilla.org/">부가 기능</a><ul id="nav-main-addons-submenu" aria-expanded="false"><li  class="first"><a tabindex="-1" href="https://addons.mozilla.org/ko/firefox/">PC용 부가기능</a></li><li ><a tabindex="-1" href="https://addons.mozilla.org/ko/android/">모바일용 부가기능</a></li><li  class="last"><a tabindex="-1" href="https://addons.mozilla.org/ko/firefox/themes/">테마</a></li></ul></li>
    <li id="nav-main-support" ><a aria-haspopup="true" aria-owns="nav-main-support-submenu" tabindex="0" href="http://support.mozilla.org/">도움말</a><ul id="nav-main-support-submenu" aria-expanded="false"><li  class="first"><a tabindex="-1" href="http://support.mozilla.org/ko/">PC용 도움말</a></li><li  class="last"><a tabindex="-1" href="http://support.mozilla.org/ko/products/mobile">모바일 도움말</a></li></ul></li>
    <li id="nav-main-about"  class="last"><a aria-haspopup="true" aria-owns="nav-main-about-submenu" tabindex="0" href="/ko/about/">소개</a><ul id="nav-main-about-submenu" aria-expanded="false"><li  class="first"><a tabindex="-1" href="/community/">블로그</a></li><li ><a tabindex="-1" href="/ko/about/">Firefox 소개</a></li><li ><a tabindex="-1" href="http://www.mozilla.org/join">Mozilla 후원(영문)</a></li><li ><a tabindex="-1" href="/ko/about/participate/">참여하기</a></li></ul></li>'), 

  // Download button
  array(
    'source' => 'Download Firefox — English (US)', 
    'target' => 'Firefox 무료 다운로드- 한국어'), 
  array(
    'source' => '"/en-US/products/download.html', 
    'target' => '"//www.mozilla.org/en-US/products/download.html'), 
  array(
    'source' => 'lang=en-US', 
    'target' => 'lang=ko'), 
  array(
    'source' => 'Your system doesn\'t meet the <a href="/en-US/firefox/', 
    'target' => 'Firefox를 구동하기에 충분한 <a href="//www.mozilla.org/en-US/firefox/'), 
  array(
    'source' => '/system-requirements/">requirements</a> to run Firefox.', 
    'target' => '/system-requirements/">시스템 사양</a>이 아닙니다.'), 
  array(
    'source' => '<span class="download-subtitle">Free Download</span>', 
    'target' => '<span class="download-subtitle">무료 다운로드</span>'), 
  array(
    'source' => '<span class="download-lang">English (US)</span>', 
    'target' => '<span class="download-lang">한국어</span>'), 
  array(
    'source' => '<strong class="download-title"><span>Firefox</span> for Android</strong>', 
    'target' => '<strong class="download-title"><span>Firefox</span> 안드로이드</strong>'), 
  array(
    'source' => '<span class="download-subtitle">Get it free on Google Play</span>', 
    'target' => '<span class="download-subtitle">Google Play에서 무료 다운로드</span>'), 
  array(
    'source' => '<a href="/en-US/firefox/mobile/platforms">Supported Devices</a> |', 
    'target' => '<a href="/ko/firefox/mobile/platforms">지원 기기</a> |'), 
  array(
    'source' => '<a href="/en-US/mobile/notes">What’s New</a> |', 
    'target' => '<a href="//www.mozilla.org/en-US/mobile/notes">변경내역</a> |'), 
  array(
    'source' => '<a href="/en-US/legal/privacy/firefox.html">Privacy</a>', 
    'target' => '<a href="//www.mozilla.org/en-US/legal/privacy/firefox.html">개인정보 정책</a>'), 
  array(
    'source' => '<a href="/en-US/firefox/all">Systems &amp; Languages</a> |', 
    'target' => '<a href="/ko/firefox/all">시스템 &amp; 언어 선택</a> |'), 
  array(
    'source' => '<a href="/en-US/firefox/notes">What’s New</a> |', 
    'target' => '<a href="//www.mozilla.org/en-US/firefox/notes">변경내역</a> |'), 

  // Footer
  array(
    'source' => '<a href="/en-US/"><img src="//mozorg.cdn.mozilla.net/media/img/sandstone/footer-mozilla.png" alt="mozilla"></a>', 
    'target' => '<a href="/ko/"><img src="//mozorg.cdn.mozilla.net/media/img/sandstone/footer-mozilla.png" alt="mozilla"></a>'), 
  array(
    'source' => 'Portions of this content are ©1998–2013 by individual mozilla.org contributors. Content available under a <a href="/en-US/foundation/licensing/website-content/">Creative Commons license</a>.', 
    'target' => '&copy;1998–2012 일부 콘텐츠는 mozilla.org 공헌자에 의해 만들어졌으며, 이 콘텐츠는 <a href="//www.mozilla.org/foundation/licensing/website-content.html">Creative Commons license</a> 하에서 사용 가능합니다.'), 
  array(
    'source' => '<a href="/en-US/contribute/page/">Contribute to this page</a>', 
    'target' => '<a href="/ko/contribute/page/">공헌자 홈페이지</a>'), 
  array(
    'source' => '<ul class="footer-nav">
            <li><a href="/en-US/about/contact.html#map-mountain_view">Contact Us</a></li>
            <li><a href="/en-US/about/partnerships/">Partner with Us</a></li>
            <li><a href="/en-US/privacy/">Privacy Policy</a></li>
            <li><a href="/en-US/about/legal.html">Legal Notices</a></li>
            <li><a href="/en-US/legal/fraud-report/index.html">Report Trademark Abuse</a></li>
          </ul>', 
    'target' => '<ul class="footer-nav">
            <li><a href="//www.mozilla.org/en-US/about/contact.html#map-mountain_view">연락하기(영문)</a></li>
            <li><a href="//www.mozilla.org/en-US/privacy/">개인 정보 보호 정책(영문)</a></li>
            <li><a href="//www.mozilla.org/en-US/about/legal.html">법적 고지(영문)</a></li>
            <li><a href="//www.mozilla.org/en-US/legal/fraud-report/index.html">상표권 침해 신고(영문)</a></li>
          </ul>'), 
  array(
    'source' => '<ul class="footer-nav">
            <li><a href="https://twitter.com/firefox">Twitter</a></li>
            <li><a href="https://facebook.com/Firefox">Facebook</a></li>
            <li><a href="https://affiliates.mozilla.org/">Firefox Affiliates</a></li>
          </ul>', 
    'target' => '<ul class="footer-nav">
            <li><a href="//twitter.com/mozillakr">Twitter</a></li>
            <li><a href="//facebook.com/mozillakr">Facebook</a></li>
            <li><a href="//affiliates.mozilla.org/ko/">Firefox 제휴</a></li>
          </ul>'), 
  array(
    'source' => '//mozorg.cdn.mozilla.net/en-US/tabzilla/tabzilla.js?', 
    'target' => '/ko/tabzilla/tabzilla.js?'), 
  array(
    'source' => '/en-US/tabzilla/media/js/tabzilla.js', 
    'target' => '/ko/tabzilla/tabzilla.js'), 
  array(
    'source' => "<script>
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

    var prefix = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www');
    ga.src = prefix + '.google-analytics.com/ga.js';

    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(ga, s);
})();
</script>", 
    'target' => "<script>
        var _gaq = _gaq || [];
       _gaq.push(['_setAccount', 'UA-53785-1']);
       _gaq.push(['_setDomainName', 'mozilla.or.kr']);
       _gaq.push(['_trackPageview']);

       (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
     </script>"), 
  array(
    'source' => "<script>
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
</script>", 
    'target' => "<script>
        var _gaq = _gaq || [];
       _gaq.push(['_setAccount', 'UA-53785-1']);
       _gaq.push(['_setDomainName', 'mozilla.or.kr']);
       _gaq.push(['_trackPageview']);

       (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
     </script>"), 

  // Aurora Footer
  array(
    'source' => 'Let’s be <span>friends!</span>', 
    'target' => '소셜웹 <span>공식채널</span>'), 
  array(
    'source' => '<a href="http://twitter.com/firefox">Twitter</a>', 
    'target' => '<a href="http://twitter.com/mozillakr">Twitter</a>'), 
  array(
    'source' => '<a href="http://facebook.com/Firefox">Facebook</a>', 
    'target' => '<a href="http://facebook.com/mozillakr">Facebook</a>'), 
  array(
    'source' => '<a href="https://affiliates.mozilla.org/">Firefox Affiliates</a>', 
    'target' => '<a href="http://forums.mozilla.or.kr/">한국커뮤니티</a>'), 
  array(
    'source' => '<label for="flang">Other Languages</label>', 
    'target' => '<label for="flang">다른 언어</label>'), 
  array(
    'source' => '<li><a href="/en-US/firefox/features/">Desktop</a><ul><li><a href="/en-US/firefox/features/">Features</a></li><li><a href="/en-US/firefox/customize/">Customize</a></li><li><a href="/en-US/firefox/performance/">Performance</a></li><li><a href="/en-US/firefox/technology/">Technology</a></li><li><a href="/en-US/firefox/security/">Privacy &amp; Security</a></li></ul></li>
    <li><a href="/en-US/mobile/">Mobile</a><ul><li><a href="/en-US/mobile/">Download</a></li><li><a href="/en-US/mobile/features/">Features</a></li><li><a href="https://addons.mozilla.org/en-US/mobile/?browse=featured">Customize</a></li><li><a href="/en-US/mobile/faq/">FAQ</a></li></ul></li>
    <li><a href="/en-US/firefox/channel/">Releases</a><ul><li><a href="/en-US/firefox/channel/">Overview</a></li><li><a href="/en-US/firefox/aurora/">Firefox Aurora</a></li><li><a href="/beta/">Firefox Beta</a></li><li><a href="/en-US/firefox/">Firefox</a></li><li><a href="/en-US/firefox/organizations/">Firefox for Organizations</a></li></ul></li>
    <li><a href="https://addons.mozilla.org/">Add-ons</a><ul><li><a href="https://addons.mozilla.org/firefox/">Desktop Add-ons</a></li><li><a href="https://addons.mozilla.org/mobile/">Mobile Add-ons</a></li><li><a href="http://www.getpersonas.com/">Personas</a></li></ul></li>
    <li><a href="http://support.mozilla.org/">Support</a><ul><li><a href="http://support.mozilla.org/en-US/kb/">Desktop Support</a></li><li><a href="http://support.mozilla.org/mobile">Mobile Support</a></li></ul></li>
    <li><a href="/en-US/firefox/about/">About</a><ul><li><a href="http://blog.mozilla.com/">Blog</a></li><li><a href="/en-US/firefox/about/">About Firefox</a></li><li><a href="http://www.mozilla.org/join">Join Mozilla</a></li><li><a href="/en-US/about/participate/">Participate</a></li><li><a href="/en-US/press/">Press Center</a></li><li><a href="/en-US/firefox/brand/">Brand Toolkit</a></li><li><a href="/en-US/about/careers.html">Careers</a></li><li><a href="/en-US/about/partnerships.html">Partnerships</a></li><li><a href="/en-US/about/contact.html">Contact Us</a></li></ul></li>', 
    'target' => '<li><a href="/ko/firefox/features/">데스크탑</a><ul><li><a href="/ko/firefox/features/">주요 기능</a></li><li><a href="/ko/firefox/customize/">부가 기능</a></li><li><a href="/ko/firefox/performance/">성능 향상</a></li><li><a href="/ko/firefox/technology/">웹 기술</a></li><li><a href="/ko/firefox/security/">보안 및 정보 보호</a></li></ul></li>
    <li><a href="/ko/mobile/">모바일</a><ul><li><a href="/ko/mobile/">다운로드</a></li><li><a href="/ko/mobile/features/">주요 기능</a></li><li><a href="https://addons.mozilla.org/ko/mobile/?browse=featured">부가 기능</a></li><li><a href="/ko/mobile/faq/">FAQ &shy;</a></li></ul></li>
    <li><a href="/ko/firefox/channel/">다운로드</a><ul><li><a href="/ko/firefox/channel/">채널별</a></li><li><a href="/ko/firefox/aurora/">Firefox Aurora</a></li><li><a href="/ko/firefox/beta/">Firefox Beta</a></li><li><a href="/ko/firefox/fx/#desktop">Firefox</a></li><li><a href="/ko/firefox/organizations/">Firefox 기관용</a></li></ul></li>
    <li><a href="https://addons.mozilla.org/">부가 기능</a><ul><li><a href="https://addons.mozilla.org/ko/firefox/">PC용 부가기능</a></li><li><a href="https://addons.mozilla.org/ko/android/">모바일용 부가기능</a></li><li><a href="https://addons.mozilla.org/ko/firefox/themes/">테마</a></li></ul></li>
    <li><a href="http://support.mozilla.org/">도움말</a><ul><li><a href="http://support.mozilla.org/ko/">PC용 도움말</a></li><li><a href="http://support.mozilla.org/ko/products/mobile">모바일 도움말</a></li></ul></li>
    <li><a href="/ko/about/">소개</a><ul><li><a href="http://blog.mozilla.org/">블로그(영문)</a></li><li><a href="/ko/about/">Firefox 소개</a></li><li><a href="http://www.mozilla.org/join">Mozilla 후원(영문)</a></li><li><a href="/ko/about/participate/">참여하기</a></li><li><a href="http://blog.mozilla.org/press/">보도자료</a></li><li><a href="/ko/firefox/brand/">로고 이용(영문)</a></li><li><a href="/ko/about/careers.html">채용문의 (영문)</a></li><li><a href="/ko/about/partnerships.html">제휴 안내</a></li><li><a href="/ko/about/contact.html">연락처</a></li></ul></li>'), 
  array(
    'source' => 'Privacy Policy', 
    'target' => '개인 정보 보호 정책 (영문)'), 
  array(
    'source' => 'Legal Notices', 
    'target' => '법적 고지 (영문)'), 
  array(
    'source' => 'Report Trademark Abuse', 
    'target' => '상표권 침해 신고 (영문)'), 
);

$replace_rule = array_merge($common_rule, $replace_rule);
?>
