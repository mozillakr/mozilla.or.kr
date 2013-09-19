<?php
$common_rule = array(
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
);

$replace_rule = array_merge($common_rule, $replace_rule);
?>
