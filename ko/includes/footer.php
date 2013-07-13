 </div><!-- close #wrapper -->
 <footer id="colophon">
      <div class="row">
<?php
if ($is_firefox_new) {
?>
      <ul class="primary">
        <li><a href="/ko/firefox/central/"><span>살펴보기</span></a></li>
        <li><a href="/ko/firefox/features/"><span>데스크톱</span></a></li>
        <li><a href="/ko/firefox/fx/"><span>모바일</span></a></li>
        <li><a href="https://addons.mozilla.org"><span>부가 기능</span></a></li>
        <li><a href="http://support.mozilla.org"><span>도움말</span></a></li>
        <li><a href="/ko/about/"><span>소개</span></a></li>
      </ul>
      <ul class="secondary">
        <li><a href="http://www.mozilla.org/en-US/privacy/">개인 정보 보호 정책(영문)</a></li>
        <li><a href="http://www.mozilla.org/en-US/about/legal.html">법적 고지(영문)</a></li>
      </ul>
<?php
} else {
?>
          <div class="footer-logo">
              <a href="/"><img src="http://www.mozilla.org/media/img/sandstone/footer-mozilla.png" alt="mozilla"></a>
          </div>

          <div class="footer-license">
              <p>
                &copy;1998–2012 일부 콘텐츠는 mozilla.org 공헌자에 의해 만들어졌으며, 이 콘텐츠는 <a href="http://www.mozilla.org/foundation/licensing/website-content.html">Creative Commons license</a> 하에서 사용 가능합니다.</p>
              <p>
                <a href="/ko/contribute/page/">공헌자 홈페이지</a>
              </p>
          </div>
          <ul class="footer-nav">
            <li><a href="http://www.mozilla.org/en-US/about/contact.html#map-mountain_view">연락하기(영문)</a></li>
            <li><a href="http://www.mozilla.org/en-US/privacy/">개인 정보 보호 정책(영문)</a></li>
            <li><a href="http://www.mozilla.org/en-US/about/legal.html">법적 고지(영문)</a></li>
            <li><a href="http://www.mozilla.org/en-US/legal/fraud-report/index.html">상표권 침해 신고(영문)</a></li>
          </ul>

                    <ul class="footer-nav">
            <li><a href="http://twitter.com/mozillakr">Twitter</a></li>
            <li><a href="http://facebook.com/mozillakr">Facebook</a></li>
            <li><a href="https://affiliates.mozilla.org/ko/">Firefox 제휴</a></li>
          </ul>
<?php
}
?>
      </div>
      </footer>
    
    </div><!-- close #outer-wrapper -->

    <!--[if IE 9]>
      <script src="//mozorg.cdn.mozilla.net/media/js/libs/matchMedia.js"></script>
    <![endif]-->

      <script src="http://www.mozilla.org/media/js/mozorg-resp-min.js?build=<?=$build_code?>"></script>
      <script src="/ko/tabzilla/tabzilla.js"></script>
      <?=$extra_js?>
      <script type="text/javascript">
        var _gaq = _gaq || [];
       _gaq.push(['_setAccount', 'UA-53785-1']);
       _gaq.push(['_setDomainName', 'mozilla.or.kr']);
       _gaq.push(['_trackPageview']);

       (function() {
          var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
          ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
          var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
     </script>

</body>
</html>
